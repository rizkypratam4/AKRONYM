
@extends('layouts.main')

@section('container')

    <div class="row mt-4">
        <div class="d-flex justify-content-between align-items-center">
            <h4 class="text-white">Artikel {{ $game }}</h4>
            <form action="/artikel">
                <div class="input-group mb-3">
                    <input type="text" class="form-control" placeholder="Search..." name="search"
                    value="{{ request('search') }}">
                    <button class="btn btn-outline-secondary" type="submit" id="button-addon2">
                        Search
                    </button>
                </div>
            </form>
        </div> 
    </div>

    {{-- hero new artikel --}}
        @if ($artikels->count())
            <div class="card mt-4 card-clickable card-hero" data-id="{{ $artikels[0]->slug }}"
                style="cursor: pointer; background-color: #222831; border:none">
                <img src="https://source.unsplash.com/1200x400/?esport" class="card-img-top" alt="hero-artikel">
                <div class="card-body p-0 mt-2 text-white">
                    <h3 class="card-title">{{ $artikels[0]->title }}</h3>
                    <p class="card-text">{{ $artikels[0]->excerpt }}</p>
                    <p>
                        <small class="fs-6" style="color: rgb(148, 163, 184)">
                            {{ $artikels[0]->game->name }} | {{ $artikels[0]->created_at->diffForHumans() }}
                        </small>
                    </p>
                </div>
            </div>

    {{-- all artikel post --}}
    <div class="row mt-4">
        @foreach ($artikels->skip(1) as $artikel)
            <div class="col-md-6 mb-3">
                <div class="card card-clickable card-hero" 
                data-id="{{ $artikel->slug }}" style="cursor: pointer; background-color: #222831; border:none">
                    <div class="card-body p-0 text-white" style="display: flex; align-items: center;">
                        <div style="flex: 1;">
                            <img src="https://source.unsplash.com/500x400/?gaming" class="card-img-top"
                            alt="banner-semua-artikel" style="max-width: 100%;">
                        </div>
                        <div style="flex: 2; padding: 16px;">
                            <h5 class="card-title" style="font-size: 16px;">{{ $artikel->title }}</h5>
                            <p>{{ $artikel->game->name }} | {{ $artikel->published_at }}</p>
                        </div>
                    </div>
                </div>
            </div>
        @endforeach
    </div>
    @else 
        <p class="text-center text-white fs-4">Postingan tidak ditemukan</p>
    @endif

    <script>
        const cards = document.querySelectorAll('.card-clickable');
        cards.forEach(card => {
            card.addEventListener('click', function() {
                const slug = this.getAttribute('data-id');
                const isHeroCard = this.closest('.card-hero');
    
                if (isHeroCard) {
                    window.location.href = `/artikel/${slug}`;
                } else {
                    window.location.href = `/artikel/game/${slug}`;
                }
            });
        });
    </script>

@endsection

