@extends('layouts.main')

@section('container')
    
    <h3> {{ $nama }} </h3>
    <p> {{ $email }} </p>
    <img src="images/{{ $gambar }}" alt="{{ $nama }}" width="200px">
@endsection
