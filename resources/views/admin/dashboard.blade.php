@extends('admin.layouts.app')

@section('title')
    АДМИН ПАНЕЛЬ
@endsection()

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-3">
                <div class="jumbotron">
                    <span class="label label-primary">Category
                            <span class="badge badge-secondary">0</span>
                        </span>
                </div>
            </div>
            <div class="col-3">
                <div class="jumbotron">
                    <span class="label label-primary">Articles
                            <span class="badge badge-secondary">0</span>
                        </span>
                </div>
            </div>
            <div class="col-3">
                <div class="jumbotron">
                    <span class="label label-primary">People
                            <span class="badge badge-secondary">0</span>
                        </span>
                </div>
            </div>
            <div class="col-3">
                <div class="jumbotron">
                    <span class="label label-primary">To Day
                            <span class="badge badge-secondary">0</span>
                        </span>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-6 list-group">
                <a href="#" class="btn btn-block btn btn-info">CREATE CATEGORY</a>
                <p></p>
                <a href="#" class="list-group-item list-group-item-action flex-column align-items-start">
                    <div class="d-flex w-100 justify-content-between">
                        <h5 class="mb-1">List group item heading</h5>
                        <small class="text-muted">3 days ago</small>
                    </div>
                    <p class="mb-1">Donec id elit non mi porta gravida at eget metus. Maecenas sed diam eget risus varius blandit.</p>
                    <small class="text-muted">Donec id elit non mi porta.</small>
                </a>
                <a href="#" class="list-group-item list-group-item-action flex-column align-items-start">
                    <div class="d-flex w-100 justify-content-between">
                        <h5 class="mb-1">List group item heading</h5>
                        <small class="text-muted">3 days ago</small>
                    </div>
                    <p class="mb-1">Donec id elit non mi porta gravida at eget metus. Maecenas sed diam eget risus varius blandit.</p>
                    <small class="text-muted">Donec id elit non mi porta.</small>
                </a>
            </div>
            <div class="col-6 list-group">
                <a href="#" class="btn btn-block btn btn-info">CREATE ARTICLE</a>
                <p></p>
                <a href="#" class="list-group-item list-group-item-action flex-column align-items-start">
                    <div class="d-flex w-100 justify-content-between">
                        <h5 class="mb-1">List group item heading</h5>
                        <small class="text-muted">3 days ago</small>
                    </div>
                    <p class="mb-1">Donec id elit non mi porta gravida at eget metus. Maecenas sed diam eget risus varius blandit.</p>
                    <small class="text-muted">Donec id elit non mi porta.</small>
                </a>
                <a href="#" class="list-group-item list-group-item-action flex-column align-items-start">
                    <div class="d-flex w-100 justify-content-between">
                        <h5 class="mb-1">List group item heading</h5>
                        <small class="text-muted">3 days ago</small>
                    </div>
                    <p class="mb-1">Donec id elit non mi porta gravida at eget metus. Maecenas sed diam eget risus varius blandit.</p>
                    <small class="text-muted">Donec id elit non mi porta.</small>
                </a>
            </div>
        </div>
    </div>
@endsection()