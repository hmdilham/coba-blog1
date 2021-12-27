@extends('layouts.main')

@section('content')

    <h1 class="mb-5">Blog Categories </h1>

    <div class="container">
        <div class="row">
            @foreach ($categories as $c)
            <div class="col-md-4 mb-3">
                <a href="/blog?category={{ $c->slug }}">
                <div class="card bg-dark text-white">
                    @if($c->image)
                    <img src="{{ asset('storage/' . $c->image) }}" class="card-img" style="max-width: 500px; max-height: 400px; overflow:hidden;" alt="{{ $c->name }}">
                    @else
                    <img src="https://source.unsplash.com/500x400?{{ $c->slug }}" class="card-img" alt="{{ $c->name }}">
                    @endif
                    <div class="card-img-overlay d-flex align-items-center p-0">
                        <h5 class="card-title flex-fill text-center p-4 fs-3" style="background-color:rgba(0,0,0,0.7)">{{ $c->name }}</h5>
                    </div>
                </div>
            </a>
            </div>
            @endforeach
        </div>
    </div>

@endsection
