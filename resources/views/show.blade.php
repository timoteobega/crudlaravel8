@extends('templates.template')

@section('content')
    <h1 class="text-center">CRUD with Laravel 8</h1>
    <h2 class="text-center">View</h2>
    <div class="col-8 m-auto">

        <div class="row mb-2">
            <label class="col-sm-2 col-form-label col-form-label-lg">Book ID</label>
            <div class="col-sm-10">
                <input type="text" readonly class="form-control" value="{{$book->id}}">
            </div>
        </div>

        <div class="row">
            <label class="col-sm-2 col-form-label col-form-label-lg">Title</label>
            <div class="col-sm-10">
                <input type="text" readonly class="form-control" value="{{$book->title}}">
            </div>
        </div>

        @php
            $user = $book->find($book->id)->relUsers;
        @endphp
        <div class="row">
            <label class="col-sm-2 col-form-label col-form-label-lg">Author</label>
            <div class="col-sm-10">
                <input type="text" readonly class="form-control" value="{{$user->name}}">
            </div>
        </div>

        <div class="row">
            <label class="col-sm-2 col-form-label col-form-label-lg">E-mail</label>
            <div class="col-sm-10">
                <input type="text" readonly class="form-control" value="{{$user->email}}">
            </div>
        </div>

        <div class="row">
            <label class="col-sm-2 col-form-label col-form-label-lg">Price</label>
            <div class="col-sm-10">
                <input type="text" readonly class="form-control" value="R$ {{$book->price}}">
            </div>
        </div>

        <div class="text-center mt-2">
            <a href="{{url("books")}}">
                <button class="btn btn-secondary">List all</button>
            </a>
        </div>
    </div>
@endsection
