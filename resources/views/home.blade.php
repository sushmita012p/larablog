@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Dashboard') }}</div>

                <div class="card-body">
                    @if (session('status'))
                    <div class="alert alert-success" role="alert">
                        {{ session('status') }}
                    </div>
                    @endif

                    {{ __('You are logged in!') }}

                </div>
            </div>
            <div class="mt-3">
                <a class="btn btn-success" href="{{ route('categories.index') }}">View Category</a>
                <a class="btn btn-warning" href="{{ route('categories.create') }}">Add Category</a>
                <a class="btn btn-danger" href="{{ route('posts.index') }}">View Post</a>
                <a class="btn btn-primary" href="{{ route('posts.create') }}">Add Post</a>
                <a class="btn btn-secondary" href="{{ route('users.index') }}">View User</a>
            </div>
        </div>
    </div>
</div>
@endsection