@extends('layouts.main')
@section('container')
    <h1>Halaman About</h1>
    <h3>{{ $name }}</h3>
    <p>{{ $email }}</p>
    <img src="img/{{ $image }}" alt="150x150" class="img-thumbnail rounded-circle">
@endsection