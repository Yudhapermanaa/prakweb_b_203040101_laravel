
@extends('layouts.main')
@section('container')
    <h1 class="title">Post Categories</h1>
    <hr>
    <div class="container categories">
        <div class="row mt-5">
            @foreach ($categories as $category)
                <div class="col-md-4 mb-5">
                    <a href="/posts?category={{ $category->slug }}">
                        <div class="card bg-dark text-white border-0 rounded-0">
                            <img src="https://source.unsplash.com/500x500?{{ $category->name }}" class="card-img rounded-0" alt="{{ $category->name }}">
                            <div class="card-img-overlay d-flex align-items-center p-0">
                                <h5 class="card-title text-center flex-fill p-4 fs-3" style="background-color: rgba(0, 0, 0, 0.7)">{{ $category->name }}</h5>
                            </div>
                        </div>
                    </a>
                </div>
            @endforeach
        </div>
    </div>   
@endsection
