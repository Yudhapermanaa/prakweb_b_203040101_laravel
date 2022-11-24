@extends('dashboard.layouts.main')

@section('container')
    <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
      <h2 class="mt-4">My Posts</h2>
    </div>

    @if (session()->has('success'))
        <div class="alert alert-success alert-dismissible fade show rounded-0 col-lg-8" role="alert">
            {{ session('success') }}
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        </div>
    @endif

    <div class="table-responsive col-lg-8">
      <a href="/dashboard/posts/create" class="btn btn-primary mb-3 rounded-0">Create new post</a>
      <table class="table table-striped table-sm">
        <thead>
          <tr>
            <th scope="col">#</th>
            <th scope="col">Title</th>
            <th scope="col">Category</th> 
            <th scope="col">Action</th>
          </tr>
        </thead>
        <tbody>
            @foreach ($posts as $post)
          <tr>
            <td>{{ $loop->iteration }}</td>
              <td>{{ $post->title }}</td>
              <td>{{ $post->category->name }}</td>
              <td>
                  <a href="/dashboard/posts/{{ $post->slug }}" class="badge bg-info rounded-0">
                      <span data-feather="eye"></span>
                  </a>
                  <a href="/dashboard/posts/{{ $post->slug }}/edit" class="badge bg-warning rounded-0">
                      <span data-feather="edit"></span>
                  </a>
                  <form action="/dashboard/posts/{{ $post->slug }}" method="POST" class="d-inline">
                    @method('delete')
                    @csrf
                    <button class="badge bg-danger border-0 rounded-0" onclick="return confirm('Are you sure?')">
                      <span data-feather="x-circle"></span>
                    </button>
                  </form>                   
              </td>
          </tr>      
          @endforeach
        </tbody>
      </table>
    </div>  
@endsection