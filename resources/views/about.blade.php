@extends('layouts.main')

@section('container')
    <h1>Halaman About</h1>
    <hr>
    <section class="about text-center mt-5">
        <img src="img/{{ $image}}" alt="{{ $name }}" width="200">
        <h3 class="mt-3">{{ $name }}</h3>
        <p class="mt-0">{{ $email }}</p>
    </section>    
@endsection