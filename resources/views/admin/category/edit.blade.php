@extends('layouts.app')
@section('content')
<div class="container">

    <form method="POST" action="{{route('categories.update', $category->id)}}">
        @csrf
        @method('PUT')
        <div class="form-group">
            <label for="exampleInputEmail1">Category Name</label>
            <input type="name" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp"
                placeholder="Enter name" name="name" value="{{$category->name}}">
        </div>
        <div class="form-group">
            <label for="exampleInputPassword1">Category Description</label>
            <input type="name" class="form-control" id="exampleInputPassword1" name="description"
                placeholder="Enter description" value="{{$category->description}}">
        </div>
        <button type="submit" class="btn btn-primary">Update Category</button>
    </form>
</div>

@endsection