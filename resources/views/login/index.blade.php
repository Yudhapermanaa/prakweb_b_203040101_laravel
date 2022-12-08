@extends('layouts.main')

@section('container')
<div class="row justify-content-center login mx-2">
    <div class="col-md-4">
        @if (session()->has('success'))
        <div class="alert alert-success alert-dismissible fade show rounded-0" role="alert">
            {{ session('success') }}
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        </div>
        @endif

        @if (session()->has('loginError'))
        <div class="alert alert-danger alert-dismissible fade show rounded-0" role="alert">
            {{ session('loginError') }}
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        </div>
        @endif 
        <main class="form-signin w-100 m-auto bg-light p-3 shadow">
            <h1 class="h3 fw-normal title">Please Login</h1>
            <hr class="mb-3">
            <form action="/login" method="POST">
                @csrf
                <div class="form-grup mb-3">
                    <input type="email" class="form-control @error('email')is-invalid @enderror rounded-0" name="email" id="email" placeholder="Email Address" required autofocus value="{{ old('email') }}">
                    @error('email')
                        <div class="invalid-feedback">
                            {{ $message }}
                        </div>
                    @enderror
                </div>
                <div class="form-grup mb-3">
                    <input type="password" class="form-control rounded-0" name="password" id="password" placeholder="Password">
                </div>
                <hr>
            <button class="w-100 btn btn-lg btn-dark fs-6 rounded-0 text-white" type="submit">Login</button>
            </form>
            <small class="d-block mt-3">Not registered? <a href="/register">Register Now!</a></small>
        </main>
    </div>
</div>
@endsection