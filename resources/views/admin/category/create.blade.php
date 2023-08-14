@extends('layouts.app')
@section('content')
<div class="container">

    <form method="POST" action="{{route('categories.store')}}">
        @csrf
        <div class="form-group">
            <label for="exampleInputEmail1">Category Name</label>
            <input type="name" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp"
                placeholder="Enter name" name="name">
        </div>
        <div class="form-group">
            <label for="exampleInputPassword1">Category Description</label>
            <input type="name" class="form-control" id="exampleInputPassword1" name="description"
                placeholder="Enter description">
        </div>
        <button type="submit" class="btn btn-primary">Add Category</button>
    </form>
</div>

@endsection