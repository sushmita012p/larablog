@extends('layouts.app')

@section('content')
<div class="container">
    <form action="{{route('posts.update', $post->id)}}" method="POST">
        @csrf
        @method('PUT')
        <div class="form-group">
            <label for="exampleInputEmail1">Post Name</label>
            <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp"
                placeholder="Enter name" name="title" value="{{$post->title}}">
        </div>
        <div class="form-group">
            <label for="exampleInputPassword1">Post Description</label>
            <input type="text" class="form-control" id="exampleInputPassword1" name="description"
                placeholder="Enter description" value="{{$post->description}}">
        </div>
        <button type="submit" class="btn btn-primary">Update Post</button>
    </form>
</div>
@endsection