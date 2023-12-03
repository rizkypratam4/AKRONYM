
@extends('layouts.main')

@section('container')

 <div class="row">

        <div class="d-flex justify-content-between">
            <h4 class="text-white hidden">Berdasarkan Topik</h4>
            <h4></h4>
            <form action="/artikel" class="d-flex justify-content-end">
                @if (request('game'))
                    <input type="hidden" name="game" value="{{ request('game') }}">
                @endif
               
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

    <div class="row hidden">
        
        @foreach ($games as $game)
        <div class="col-md-4">
            <div class="card text-bg-dark mt-4 card-clickable justify-content-between rounded-5"
             data-id="{{ $game->slug }}" style="cursor: pointer; background-color: #1a1a2e;">
                <img src="https://source.unsplash.com/1200x400/?gaming" class="img-fluid opacity-50" 
                    alt="banner-kategori">
                <div class="card-img-overlay d-flex align-items-end">
                  <h5 class="card-title flex-fill">{{ $game->name }}</h5>
                </div>
            </div>
        </div>
        @endforeach
    </div>
    


    {{-- Kategori Artikel --}}
      
    
    {{-- new artikel --}}
    <h4 class="text-white mt-5"><span class="hidden">Semua </span>{{ $title }}</h4>
    <div id="searchResult">
        @if ($artikels->count())
            <div class="card mt-4 card-clickable card-hero" data-id="{{ $artikels[0]->slug }}"
                style="cursor: pointer; background-color: #1a1a2e; border:none">
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
                <div class="card card-clickable card-hero" data-id="{{ $artikel->slug }}" 
                    style="cursor: pointer; background-color: #1a1a2e; border:none">
                    <div class="card-body p-0 text-white" style="display: flex; align-items: center;">
                        <div style="flex: 1;">
                            <img src="https://source.unsplash.com/500x400/?gaming" class="card-img-top"
                            alt="banner-semua-artikel" style="max-width: 100%;">
                        </div>
                        <div style="flex: 2; padding: 16px;">
                            <h5 class="card-title" style="font-size: 16px;">{{ $artikel->title }}</h5>
                            <p>{{ $artikel->created_at->diffForHumans() }}</p>
                        </div>
                    </div>
                </div>
            </div>
        @endforeach
    </div>
    
    {{-- "Selengkapnya" text for each article --}}
    <div class="mt-2">
        <a href="{{ url('/artikel/') }}" class="text-center fw-bold text-white">Selengkapnya</a>
    </div>
</div>

    @else 
        <p class="text-center text-white fs-4">Postingan tidak ditemukan</p>
    @endif
    
</div>

{{-- {{ $artikels->links() }} --}}
   


    

    {{-- link to single artikel or kategori artikel --}}
    <script>
        const cards = document.querySelectorAll('.card-clickable');
        cards.forEach(card => {
            card.addEventListener('click', function() {
                const slug = this.getAttribute('data-id');
                const isHeroCard = this.closest('.card-hero');
    
                if (isHeroCard) {
                    window.location.href = `/artikel/${slug}`;
                } else {
                    
                    window.location.href = `/artikel?game=${slug}`;
                }
            });
        });
    </script>

  <script>
    document.addEventListener('DOMContentLoaded', function() {
        const urlParams = new URLSearchParams(window.location.search);
        const gameParam = urlParams.get('game');
        
        if (gameParam) {
            const hiddenElements = document.querySelectorAll('.hidden');
            if (hiddenElements) {
                hiddenElements.forEach(function(element) {
                    element.style.display = 'none';
                });
            }
        }
    });

    document.addEventListener('DOMContentLoaded', function() {
        const urlParams = new URLSearchParams(window.location.search);
        const gameParam = urlParams.get('search');
        
        if (gameParam) {
            const hiddenElements = document.querySelectorAll('.hidden');
            if (hiddenElements) {
                hiddenElements.forEach(function(element) {
                    element.style.display = 'none';
                });
            }
        }
    });

    document.addEventListener('DOMContentLoaded', function() {
        const urlParams = new URLSearchParams(window.location.search);
        const gameParam = urlParams.get('game');
        
        if (gameParam) {
            const elementsToChange = document.querySelectorAll('.mt-5');
            if (elementsToChange) {
                elementsToChange.forEach(function(element) {
                    element.classList.remove('mt-5');
                    element.classList.add('mt-0');
                });
            }
        }
    });

    document.addEventListener('DOMContentLoaded', function() {
        const urlParams = new URLSearchParams(window.location.search);
        const gameParam = urlParams.get('search');
        
        if (gameParam) {
            const elementsToChange = document.querySelectorAll('.mt-5');
            if (elementsToChange) {
                elementsToChange.forEach(function(element) {
                    element.classList.remove('mt-5');
                    element.classList.add('mt-0');
                });
            }
        }
    });

</script>

<script>
    document.addEventListener('DOMContentLoaded', function() {
        const urlParams = new URLSearchParams(window.location.search);
        const searchParam = urlParams.get('search');

        if (searchParam) {
            const formControlElements = document.querySelectorAll('.form-control');
            const btnElements = document.querySelectorAll('.btn');

            if (formControlElements && btnElements) {
                formControlElements.forEach(function(element) {
                    element.style.display = 'none';
                });

                btnElements.forEach(function(element) {
                    element.style.display = 'none';
                });
            }
        }
    });
</script>  



@endsection