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
            <th class="text-center">НАИМЕНОВАНИЕ</th>
            <th class="text-center" >ПУБЛИКАЦИЯ</th>
            </thead>
            <tbody>
            @forelse($categories as $category)
                <tr>
                    <td>{{$category->title}}</td>
                    <td>{{$category->published}}</td>
                    <td>
                        <a href="{{route('admin.category.edit', ['id' => $category->id])}}"><i class="fas fa-edit"></i></a>
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