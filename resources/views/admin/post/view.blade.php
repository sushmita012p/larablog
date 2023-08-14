@extends('layouts.app')
@section('content')

<div class="container">


    <div class="card">
        <div class="card-header">
            <h3>Post Details:</h3>
        </div>
        <div class="card-body">
            <h5>Post Title:</h5>
            <p>{{$post->title}}</p>

            <h5>Post Description:</h5>
            <p>{{$post->description}}</p>
        </div>

    </div>
    <a class="btn btn-success mt-3" href="{{route('posts.index')}}">Back to Posts List</a>
</div>

@endsection