@extends('layouts.main')

@section('container')
    <h1 class="title">Halaman About</h1>
    <hr>
    <section class="about text-center mt-5">
        <img src="img/{{ $image }}" alt="{{ $name }}" width="200">
        <h3 class="mt-3" style="font-family: 'Barlow Condensed', sans-serif;">{{ $name }}</h3>
        <p class="mt-0" style="font-family: 'Barlow Condensed', sans-serif;">{{ $email }}</p>
    </section>    
@endsection