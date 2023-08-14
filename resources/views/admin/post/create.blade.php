@extends('layouts.app')

@section('content')
<div class="container">
    <form action="{{route('posts.store')}}" method="POST">
        @csrf
        <div class="form-group">
            <select class="form-control" name="category_id">
                @foreach ($categories as $item)
                <option value="{{$item->id}}">{{$item->name}}</option>
                @endforeach
            </select>
        </div>
        <div class="form-group">
            <label for="exampleInputEmail1">Post title</label>
            <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp"
                placeholder="Enter title" name="title">
        </div>
        <div class="form-group">
            <label for="exampleInputPassword1">Post Description</label>
            <input type="text" class="form-control" id="exampleInputPassword1" name="description"
                placeholder="Enter description">
        </div>
        <button type="submit" class="btn btn-primary">Add Post</button>
    </form>
</div>
@endsection