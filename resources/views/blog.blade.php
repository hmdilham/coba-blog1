@extends('layouts.main')

@section('content')

<h1 class="mb-3 text-center">{{ $title }}</h1>

<div class="container">
    <div class="row justify-content-center mb-3">
        <div class="col-md-6">
            <form action="/blog">
                @if (request('category'))
                <input type="hidden" name="category" value="{{ request('category') }}">
                @endif
                @if (request('author'))
                <input type="hidden" name="author" value="{{ request('author') }}">
                @endif
                <div class="input-group mb-3">
                    <input type="text" class="form-control" placeholder="find something..?" name="search" value="{{ request('search') }}">
                    <button class="btn btn-primary" type="submit">Search</button>
                </div>
            </form>
        </div>
    </div>
</div>

@if ($posting->count())

<div class="card mb-3">
    @if ($posting[0]->image)
    <div style="max-height: 450px; overflow:hidden">
        <img class="img-fluid" src="{{ asset('storage/' . $posting[0]->image) }}" alt="{{ $posting[0]->category->name }}">
    </div>
    @else
    <img src="https://source.unsplash.com/1200x400?{{ $posting[0]->category->slug }}" class="card-img-top" alt="{{ $posting[0]->title }}">
    @endif
    <div class="card-body text-center">
        <h3 class="card-title"><a class="text-decoration-none text-dark" href="/blog/{{ $posting[0]->slug }}">{{
                $posting[0]->title }}</a></h3>
        <p>
            <small>By. <a class="text-decoration-none" href="/blog?author={{ $posting[0]->author->username }}">{{
                    $posting[0]->author->name }}</a>
                in
                <a class="text-decoration-none" href="/blog?category={{ $posting[0]->category->slug }}">{{
                    $posting[0]->category->name }}</a>
                {{ $posting[0]->created_at->diffForHumans() }}
            </small>
        </p>
        <p class="card-text">{{ $posting[0]->excerpt }}</p>
        <a class="text-decoration-none btn btn-primary" href="/blog/{{ $posting[0]->slug }}">Read More</a>
    </div>
</div>


<div class="container">
    <div class="row">
        @foreach ($posting->skip(1) as $p)
        <div class="col-md-4 mb-4">
            <div class="card">
                <div class="position-absolute px-3 py-2" style="background-color: rgba(0, 0, 0, 0.7)">
                    <a class="text-white text-decoration-none" href="/blog?category={{ $p->category->slug }}">
                        {{ $p->category->name }}
                    </a>
                </div>
                @if ($p->image)
                <img class="img-fluid" src="{{ asset('storage/' . $p->image) }}" alt="{{ $p->category->name }}">
                @else
                <img src="https://source.unsplash.com/500x400?{{ $p->category->slug }}" class="card-img-top" alt="{{ $p->category->name }}">
                @endif

                <div class="card-body">
                    <h5 class="card-title">{{ $p->title }}</h5>
                    <p>
                        <small>By. <a class="text-decoration-none" href="/blog?author={{ $p->author->username }}">{{
                                $p->author->name }}</a>
                            {{ $p->created_at->diffForHumans() }}
                        </small>
                    </p>
                    <p class="card-text">{{ $p->excerpt }}</p>
                    <a href="/blog/{{ $p->slug }}" class="btn btn-primary">Read More</a>
                </div>
            </div>
        </div>
        @endforeach
    </div>
</div>

@else

<p class="text-center fs-4">No Post Found..!</p>

@endif
<div class="d-flex justify-content-end">
    {{ $posting->links() }}
</div>


@endsection
