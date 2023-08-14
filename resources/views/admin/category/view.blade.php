@extends('layouts.app')
@section('content')

<div class="container">


    <div class="card">
        <div class="card-header">
            <h3>Category Details:</h3>
        </div>
        <div class="card-body">
            <h5>Category Name:</h5>
            <p>{{$category->name}}</p>

            <h5>Category Description:</h5>
            <p>{{$category->description}}</p>
        </div>

    </div>
    <a class="btn btn-success mt-3" href="{{route('categories.index')}}">Back to Categories List</a>
</div>

@endsection