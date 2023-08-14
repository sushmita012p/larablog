@extends('layouts.app')
@section('content')

<div class="container">
    <h3>Users List </h3>

    <table class="table table-striped table-success mt-3">
        <thead>
            <tr>
                <th>ID</th>
                <th>Firstname</th>
                <th>Lastname</th>
                <th>Email</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($users as $item)
            <tr>
                <td>{{$item->id}}</td>
                <td>{{$item->firstname}}</td>
                <td>{{$item->lastname}}</td>
                <td>{{$item->email}}</td>
            </tr>
            @endforeach
        </tbody>
    </table>
    <a class="btn btn-danger" href="{{route('posts.index')}}"> View Post</a>
    <a class="btn btn-success" href="{{route('categories.index')}}"> View Category</a>
    <a class="btn btn-warning" href="{{route('home')}}">Back to Dashboard</a>
</div>

@endsection