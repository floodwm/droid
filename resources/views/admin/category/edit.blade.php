@extends('admin.layouts.app')

@section('title')
    РЕДАКТИРОВАНИЕ КАТЕГОРИЮ
@endsection()

@section('content')

    <div class="container">
        @component('admin.components.breadcrumb')
            @slot('title') Редактирование категории @endslot
            @slot('parent') Админ Панель @endslot
            @slot('active') Редактировать категорию @endslot
        @endcomponent
    </div>

    <hr />

    <div class="container">
        <form class="form-horizontal" action="{{route('admin.category.update', $category )}}" method="post">
            <input type="hidden" name="_method" value="put">

            {{csrf_field()}}

            @include('admin.category.partials.form')

        </form>
    </div>

@endsection()
