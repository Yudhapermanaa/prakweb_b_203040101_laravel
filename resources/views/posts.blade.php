
@extends('layouts.main')
@section('container')
    <h1 class="">{{ $title }}</h1>
    <hr>
    <div class="row justify-content-center mt-4 mb-2">
        <div class="col-md-12">
            <form action="/posts">
                @if (request('category'))
                    <input type="hidden" name="category" value="{{ request('category') }}">    
                @endif
                @if (request('author'))
                    <input type="hidden" name="author" value="{{ request('author') }}">    
                @endif
                <div class="input-group mb-3">
                    <input type="text" class="form-control rounded-0" placeholder="Search..." name="search" value="{{ request('search') }}">
                    <button class="btn btn-dark rounded-0" type="submit"><i class="bi bi-search"></i></button>
                  </div>
            </form>
        </div>
    </div>

    @if ($posts->count())
        <div class="card mb-5 rounded-0 border-0">
            <img src="https://source.unsplash.com/1200x400?{{ $posts[0]->category->name }}" class="card-img-top rounded-0" alt="{{ $posts[0]->category->name }}">
            <div class="card-body text-center text-dark py-4">
                <h3 class="card-title"><a href="/posts/{{ $posts[0]->slug }}" class="text-decoration-none text-dark">{{ $posts[0]->title }}</a></h3>
                <p>
                    <small> By. <a href="/posts?author={{ $posts[0]->author->username }}" class="text-decoration-none">{{ $posts[0]->author->name }}</a> in <a href="/posts?category={{ $posts[0]->category->slug }}" class="text-decoration-none">{{ $posts[0]->category->name }}</a> {{ $posts[0]->created_at->diffForHumans() }}
                    </small>           
                </p>
                <p class="card-text">{{ $posts[0]->excerpt }}</p>
                <a href="/posts/{{ $posts[0]->slug }}" class="text-decoration-none btn btn-dark rounded-0">Read more</a>
                <hr>
            </div>
        </div>
    
    <div class="container">
        <div class="row">
            @foreach ($posts->skip(1) as $post)
                <div class="col-md-4 mb-4">
                    <div class="card rounded-0 border-0">
                        <div class="position-absolute px-3 py-2 rounded-0" style="background-color: rgba(0, 0, 0, 0.6)">
                            <a href="/posts?category={{ $post->category->slug }}" class="text-white text-decoration-none">{{ $post->category->name }}</a>
                        </div>
                        <img src="https://source.unsplash.com/500x400?{{ $post->category->name }}" class="card-img-top rounded-0" alt="{{ $post->category->name }}">
                        <div class="card-body text-dark py-3" style="margin-left: -14px;">
                            <h5 class="card-title"><a href="/posts/{{ $post->slug }}" class="text-decoration-none text-dark">{{ $post->title }}</a></h5>
                            <p>
                                <small> By. <a href="/posts?author={{ $post->author->username }}" class="text-decoration-none">{{ $post->author->name }}</a> {{ $post->created_at->diffForHumans() }}
                                </small>           
                            </p>
                            <p class="card-text fs-6">{{ $post->excerpt }}</p>
                            <a href="/posts/{{ $post->slug }}" class="btn btn-dark rounded-0 shadow-sm">Read More</a>
                            <hr>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
    @else
        <p class="text-center fs-4">No Posts Found.</p>
    @endif
    <div class="d-flex justify-content-end">
        {{ $posts->links() }}
    </div>
@endsection
