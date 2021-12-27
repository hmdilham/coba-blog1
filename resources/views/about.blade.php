@extends('layouts.main')

@section('content')
<h1> Tentang Saya : </h1>
<p> Hallo {{ $name }} </p>
<p> Email : {{ $email }} </p>
<p> HP : {{ $tlp; }} </p>
<img class="img-thumbnail rounded-circle" src="img/{{ $image }}" alt="{{ $name }}">
@endsection
