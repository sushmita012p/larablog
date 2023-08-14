@extends('layouts.app')
@section('content')

<div class="container">
    <h3>Categories List <a class="btn btn-success float-right" href="{{route('categories.create')}}">Add Category</a>
    </h3>

    <table class="table table-striped table-success mt-3">
        <thead>
            <tr>
                <th>ID</th>
                <th>Name</th>
                <th>Description</th>
                <th>Edit</th>
                <th>Delete</th>
                <th>View</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($categories as $item)
            <tr>
                <td>{{$item->id}}</td>
                <td>{{$item->name}}</td>
                <td>{{$item->description}}</td>
                <td><a class="btn btn-success btn-sm" href="{{route('categories.edit', $item->id)}}">

                        <i class="fas fa-edit"></i></a></td>

                <td>
                    <form action="{{route('categories.destroy', $item->id )}}" method="POST">
                        @csrf
                        @method('DELETE')
                        <button
                            onclick=" return confirm('Are you sure you want to delete this category?')"
                            class="btn btn-danger btn-sm">
                            <i class="fas fa-trash"></i></button>
                    </form>
                </td>

                <td><a class="btn btn-warning btn-sm" href="{{route('categories.show', $item->id)}}"><i
                            class="fas fa-eye"></i></a></td>
            </tr>
            @endforeach
        </tbody>
    </table>
    <a class="btn btn-danger" href="{{route('posts.index')}}"> View Post</a>
    <a class="btn btn-warning" href="{{route('home')}}">Back to Dashboard</a>
</div>

@endsection