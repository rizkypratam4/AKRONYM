@extends('layouts.main')

@section('container')
<header>
  <div id="carouselExampleIndicators" class="carousel slide">
    <div class="carousel-inner" style="height: 350px; border-radius: 20px;">
      <div class="carousel-item active" >
        <img src="https://www.nzesports.org.nz/wp-content/uploads/2023/03/NZSS-Banner-1500-×-350-px.png" class="d-block w-100 rounded-md" alt="banner-tournament">
      </div>
      <div class="carousel-item">
        <img src="https://cdn-image.hipwee.com/wp-content/uploads/2022/02/hipwee-master-03-750x422.jpg" class="d-block w-100" alt="...">
      </div>
      <div class="carousel-item">
        <img src="https://cdn-image.hipwee.com/wp-content/uploads/2022/02/hipwee-master-03-750x422.jpg" class="d-block w-100" alt="...">
      </div>
    </div>
  </div>
  <div class="carousel-indicators mt-3">
    <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
    <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1" aria-label="Slide 2"></button>
    <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2" aria-label="Slide 3"></button>
  </div>
</header>

<section>
  <div class="row">
    <h1 style="color: rgb(203 213 225); text-align: center;">List Turnamen</h1>
    @foreach ($turnamens as $turnamen)
    <div class="col-md-4 mt-2">
        <div class="card card-clickable" data-id="{{ $turnamen->slug }}" style="cursor: pointer;">
            <div class="row no-gutters px-4 py-2">
                <div class="col-md-4">
                    {{-- <img src="..." class="card-img" alt="banner"> --}}
                </div>
                    <div class="card-body">
                        <h2 style="font-size: 1.2rem">
                            {{ $turnamen->tournament_name }}
                        </h2>
                        <p>Slot terisi: {{ $turnamen->slots_occupied }}</p>
                        <p>Slot Tersedia: {{ $turnamen->slots_available }}</p>
                        <p>Hadiah: Rp.{{ $turnamen->prize_pool }}</p>
                        <p>Penyelenggara: {{ $turnamen->organizer }}</p>
                        <a href="#" class="btn btn-primary me-1">Daftar</a>
                        <a href="#" class="btn btn-primary">Room</a>
                    </div>
            </div>
        </div>
    </div>
    @endforeach
</div>

</section>
@endsection

@section('no-container')
<section>
  <div class="akronym__top-team" style="background-color: #162447;">
    <div class="container py-4">
        <h1 style="color: rgb(203 213 225);">Tim papan atas</h1>
      <div class="akronym__top-team__logo">
        <div></div>
        <div></div>
        <div></div>
        <div></div>
        <div></div>
      </div>
      <div class="akronym__top-team__name" style="color: rgb(203 213 225);">
        <p>Team 1</p>
        <p>Team 2</p>
        <p>Team 3</p>
        <p>Team 4</p>
        <p>Team 5</p>
      </div>
    </div>
  </div>
</section>

<section>
  <div class="container">
    <h1 style="color: rgb(203 213 225);" class="text-center">BERSAINGLAH UNTUK MENCAPAI LEVEL TERTINGGI</h1>
  </div>
  
</section>
@endsection


 




<script>
  const cards = document.querySelectorAll('.card-clickable');
  cards.forEach(card => {
      card.addEventListener('click', function() {
          const turnamenId = this.getAttribute('data-id');
          window.location.href = `/turnamen/${turnamenId}`;
      });
  });
</script>
