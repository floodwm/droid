@extends('admin.layouts.app')

@section('title')
    ДОБАВИТЬ КАТЕГОРИЮ
@endsection()

 @section('content')

     <div class="container">
         @component('admin.components.breadcrumb')
             @slot('title') Добавление категории @endslot
             @slot('parent') Админ Панель @endslot
             @slot('active') Добавить категорию @endslot
         @endcomponent
     </div>

     <hr />

     <div class="container">
         <form class="form-horizontal" action="{{route('admin.category.store')}}" method="post">

             {{csrf_field()}}

        @include('admin.category.partials.form')

         </form>
     </div>

     @endsection()
