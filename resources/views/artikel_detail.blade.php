@extends('layouts.main')


@section('container')
<a href="/artikel" class="mb-5 text-decoration-none">Back to artikel</a>
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <article class="mb-5 text-white">
                <img src="https://source.unsplash.com/1200x400/?gaming" class="img-fluid" alt="banner-artikel">
                <h4 class="mt-2">{{ $artikel->title }}</h4>
                <p>
                    <a href="/artikel?game={{ $artikel->game->slug }}" class="text-decoration-none">
                        {{ $artikel->game->name }}</a> | {{ $artikel->published_at }}
                </p>

                <div class="fs-5">
                    {!! $artikel->body !!}
                </div>  
            </article>
        </div>
    </div>
</div>
@endsection

