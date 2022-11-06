@extends('layouts.main')

@section('container')
<div class="row justify-content-center mt-5">
    <div class="col-lg-5">
        <main class="form-registration w-100 m-auto bg-light p-3">
            <h1 class="h3 mb-3 fw-normal">Registration Form</h1>
            <hr class="mb-3">
            <form action="/register" method="POST">
                @csrf
                <div class="form-grup mb-3">
                    <input type="text" class="form-control rounded-0 @error('name')is-invalid @enderror" name="name" id="name" placeholder="Name" required value="{{ old('name') }}">
                    @error('name')
                        <div class="invalid-feedback">
                            {{ $message }}
                        </div>
                    @enderror
                </div>
                <div class="form-grup mb-3">
                    <input type="text" class="form-control rounded-0 @error('username')is-invalid @enderror" name="username" id="username" placeholder="Username" required value="{{ old('name') }}">
                    @error('username')
                        <div class="invalid-feedback">
                            {{ $message }}
                        </div>
                    @enderror
                </div>
                <div class="form-grup mb-3">
                    <input type="email" class="form-control rounded-0 @error('email')is-invalid @enderror" name="email" id="email" placeholder="Email Address" required value="{{ old('name') }}">
                    @error('email')
                        <div class="invalid-feedback">
                            {{ $message }}
                        </div>
                    @enderror
                </div>
                <div class="form-grup mb-3">
                    <input type="password" class="form-control rounded-0 @error('password')is-invalid @enderror" name="password" id="password" placeholder="Password" required value="{{ old('name') }}">
                    @error('password')
                        <div class="invalid-feedback">
                            {{ $message }}
                        </div>
                    @enderror
                </div>
                <hr>
            <button class="w-100 btn btn-lg btn-dark fs-6 rounded-0 text-white" type="submit">Register</button>
            </form>
            <small class="d-block text-center mt-3">Already registered? <a href="/login">Login</a></small>
        </main>
    </div>
</div>
@endsection