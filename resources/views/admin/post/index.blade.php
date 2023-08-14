@extends('layouts.app')

@section('content')
<div class="container">
    <h3>Posts <a href="{{route('posts.create')}}" class="btn btn-success float-right">Add Post</a></h3>

    <table class="table table-striped table-primary mt-3">
        <thead>
            <tr>
                <th>ID</th>
                <th>Title</th>
                <th>Description</th>
                <th>Edit</th>
                <th>Delete</th>
                <th>View</th>
            </tr>
        </thead>
        <tbody>

            @foreach ($posts as $item)
            <tr>
                <td>{{$item->id}}</td>
                <td>{{$item->title}}</td>
                <td>{{$item->description}}</td>
                <td><a href="{{route('posts.edit', $item->id)}}" class="btn btn-success btn-sm"><i
                            class="fas fa-edit"></i></a>
                </td>
                <td>
                    <form action="{{route('posts.destroy',$item->id)}}" method="POST">
                        @csrf
                        @method('DELETE')
                        <button onclick="return confirm('Are you sure you want to delete this post?')"
                            class="btn btn-danger btn-sm">

                            <i class="fas fa-trash"></i></button>
                    </form>
                </td>
                <td><a href="{{route('posts.show', $item->id)}}" class="btn btn-warning btn-sm"><i
                            class="fas fa-eye"></i></a>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
    <a class="btn btn-danger" href="{{route('categories.index')}}">View category</a>
    <a class="btn btn-warning" href="{{route('home')}}">Back to dashboard</a>
</div>
@endsection