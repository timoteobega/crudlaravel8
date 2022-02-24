@extends('templates.template')

@section('content')
    <h1 class="text-center">CRUD with Laravel 8</h1>
    <h2 class="text-center">List</h2>
    <div class="col-8 m-auto">
        @csrf
        <table class="table table-striped text-center">
            <thead>
            <tr>
                <th scope="col">Book ID</th>
                <th scope="col">Title</th>
                <th scope="col">Author</th>
                <th scope="col">Price</th>
                <th scope="col">Actions</th>
            </tr>
            </thead>
            <tbody>
            @foreach($books as $book)
                @php
                    $user = $book->find($book->id)->relUsers;
                @endphp
                <tr>
                    <th scope="row">{{$book->id}}</th>
                    <td>{{$book->title}}</td>
                    <td>{{$user->name}}</td>
                    <td>{{@money($book->price)}}</td>
                    <td>
                        <a href="{{url("books/$book->id")}}">
                            <button class="btn btn-secondary">View</button>
                        </a>
                        <a href="{{url("books/$book->id/edit")}}">
                            <button class="btn btn-primary">Edit</button>
                        </a>
                        <a href="{{url("books/$book->id")}}" class="btnDelete">
                            <button class="btn btn-danger">Delete</button>
                        </a>
                    </td>
                </tr>
            @endforeach
            </tbody>
        </table>

        <div class="row col-12">
            <div class="col-6">
                <a href="{{url('books/create')}}">
                    <button class="btn btn-success">Create a new</button>
                </a>
            </div>
            <div class="text-center col-6">
                {{$books->links()}}
            </div>
        </div>

    </div>
@endsection
