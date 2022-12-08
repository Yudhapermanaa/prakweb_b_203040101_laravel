@extends('dashboard.layouts.main')

@section('container')
    <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-2 pb-2 mb-3 border-bottom">
      <h2 class="mt-4 title">Post Categories</h2>
    </div>

    @if (session()->has('success'))
        <div class="alert alert-success alert-dismissible fade show rounded-0 col-lg-6" role="alert">
            {{ session('success') }}
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        </div>
    @endif
    
    <div class="col-lg-5 mb-3 mt-4">
      <form action="">
          <div class="input-group">
              <input type="text" class="form-control rounded-0" placeholder="Search..." name="search" value="{{ request('search') }}">
              <button class="btn btn-dark rounded-0" type="submit"><i class="bi bi-search"></i></button>
          </div>
      </form>
  </div>

    <div class="table-responsive col-lg-5 new-category">
      <a href="/dashboard/categories/create" class="btn btn-primary mb-2 rounded-0 py-1">Create new category</a>
      <table class="table table-striped table-sm">
        <thead>
          <tr>
            <th scope="col">#</th>
            <th scope="col">Category Name</th>
          </tr>
        </thead>
        <tbody>
            @foreach ($categories as $category)
            <tr>
                <td>{{ $loop->iteration }}</td>
                <td>{{ $category->name }}</td>                                
            </tr>      
          @endforeach
        </tbody>
      </table>
    </div>  
@endsection