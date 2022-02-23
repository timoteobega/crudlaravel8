@extends('templates.template')

@section('content')

<h1 class="text-center">CRUD with Laravel 8</h1>
<h2 class="text-center">@if(isset($book))Edit @else Create @endif</h2>
<div class="col-8 m-auto">

    <div class="col-8 m-auto">
        @if(isset($errors) && count($errors) > 0)
            <div class="text-center mt-4 mb-4 p-2 alert-danger">
                @foreach($errors->all() as $erro)
                    {{$erro}}<br>
                @endforeach
            </div>
        @endif
    </div>

    @if(isset($book))
        <form name="formEdit" id="formEdit" method="post" action="{{url("books/$book->id")}}">
            @method('PUT')
    @else
        <form name="formCreate" id="formCreate" method="post" action="{{url('books')}}">
    @endif
    @csrf

        <div class="row">
            <label class="col-sm-2 col-form-label col-form-label-lg">Title</label>
            <div class="col-sm-10">
                <input type="text" name="title" class="form-control" value="{{$book->title ?? ''}}" required>
            </div>
        </div>

        <div class="row">
            <label class="col-sm-2 col-form-label col-form-label-lg">Author</label>
            <div class="col-sm-10">
                <select name="id_user" id="is_user" class="form-control" required>
                    <option value="{{$book->relUsers->id ?? ''}}">{{$book->relUsers->name ?? 'Select User'}}</option>
                    @foreach($users as $user)
                    <option value="{{$user->id}}">{{$user->name}}</option>
                    @endforeach
                </select>
            </div>
        </div>

        <div class="row">
            <label class="col-sm-2 col-form-label col-form-label-lg">Pages</label>
            <div class="col-sm-10">
                <input type="number" name="pages" class="form-control" value="{{$book->pages ?? ''}}" required>
            </div>
        </div>

        <div class="row">
            <label class="col-sm-2 col-form-label col-form-label-lg">Price</label>
            <div class="col-sm-10">
                <input type="number" name="price" step="0.01" class="form-control" value="{{$book->price ?? ''}}" required>
            </div>
        </div>

        <div class="row text-center">
            <div class="col-6">
                <a href="{{ url('books') }}" class="btn btn-secondary">List all</a>
            </div>

            <div class="col-6">
                <a href="{{url("books/create")}}">
                    <button class="btn btn-success">@if(isset($book))Edit @else Create @endif</button>
                </a>
            </div>
        </div>

    </form>

</div>
@endsection
