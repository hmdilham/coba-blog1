@extends('layouts.main')

@section('content')

<h1 class="mb-5">Category Blog : {{ $category }}</h1>

@foreach ($posts as $p)
<article class="mt-3">
    <a href="/blog/{{ $p->slug }}">
        <h3>Judul : {{ $p->title }}</h3>
    </a>

    <h5>oleh : {{ $p->title }}</h5>

    <p>{{ $p->excerpt }}</p>
</article>
@endforeach

@endsection
