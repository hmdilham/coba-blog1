{{-- @dd($posting) --}}
@extends('layouts.main')

@section('content')

<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <h2 class="mb-3"> {{ $posting->title }}</h2>

            <p>By.<a class="text-decoration-none" href="/blog?author={{ $posting->author->username }}">{{ $posting->author->name }}</a> in <a class="text-decoration-none" href="/blog?category={{ $posting->category->slug }}">{{ $posting->category->name }}</a></p>

            @if ($posting->image)
            <div style="max-height: 400px; overflow:hidden">
                <img class="img-fluid" src="{{ asset('storage/' . $posting->image) }}" alt="{{ $posting->category->name }}">
            </div>
            @else
            <img class="img-fluid" src="https://source.unsplash.com/1200x400?{{ $post->category->slug }}" alt="{{ $post->category->name }}">
            @endif

            <article class="my-3 fs-5" style="text-align: justify"> {!! $posting->body !!}</article>

            <a class="d-mt-block mt-3" href="/blog">Kembali</a>
        </div>
    </div>
</div>

@endsection
