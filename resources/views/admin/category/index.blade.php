@extends('admin.layouts.app')

@section('title')
    КАТЕГОРИИ
@endsection()

@section('content')

    <div class="container">
        @component('admin.components.breadcrumb')
            @slot('title') Список категорий @endslot
            @slot('parent') Админ Панель @endslot
            @slot('active') Категории @endslot
        @endcomponent
    </div>

    <hr>
    <div class="container">
        <a href="{{route('admin.category.create')}}" class="btn btn-info pull-right"><i class="fa fa-plus-square"></i> СОЗДАТЬ КАТЕГОРИЮ</a>

        <table class="table table-striped">
            <thead>
            <th>НАИМЕНОВАНИЕ</th>
            <th>ПУБЛИКАЦИЯ</th>
            </thead>
            <tbody>
            @forelse($categories as $category)
                <tr>
                    <td>{{$category->title}}</td>
                    <td>{{$category->published}}</td>
                    <td class="text-right">
                        <form onsubmit="if (confirm('Вы точно хотите удалть?')){return true}else{return false}" action="{{route('admin.category.destroy', $category)}}" method="post">
                            {{csrf_field()}}
                            <input type="hidden" value="DELETE" name="_method">

                            <a class="btn btn-outline-dark " href="{{route('admin.category.edit', $category)}}"><i class="fas fa-edit"></i></a>
                           <button type="submit" class="btn btn-outline-dark">
                            Удалить
                           </button>

                        </form>
                    </td>
                </tr>
            @empty
                <tr>
                    <td colspan="3" class="text-center">
                        <h2>NO NIhuYA</h2>
                    </td>
                </tr>
            @endforelse
            </tbody>
            <tfoot>
                <tr>
                    <td colspan="3">
                        <nav aria-label="Page navigation example">
                            <ul class="pagination pull-right">
                                {{$categories->links()}}
                            </ul>
                        </nav>
                    </td>
                </tr>
            </tfoot>
        </table>
    </div>
@endsection