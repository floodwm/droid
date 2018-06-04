@extends('admin.layouts.app')

@section('title')
    ОШИБКА
@endsection()

@section('content')

    <div class="container">
        <h2>ERROR</h2>
        <h3>{{$error}}</h3>
    </div>

    @endsection
