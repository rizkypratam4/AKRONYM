@extends('layouts.main')

@section('container')
<div class="row">
    @foreach ($turnamens as $turnamen)
    <div class="turnamen col-md-4">
        <div class="card mb-5 card-clickable" data-id="{{ $turnamen->slug }}" style="cursor: pointer;">
            <div class="row no-gutters px-4 py-2">
                <div class="col-md-4">
                    <img src="..." class="card-img" alt="banner">
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
                        <a href="/turnamen/room/{{ $turnamen->slug }}" class="btn btn-primary">Room</a>
                    </div>
            </div>
        </div>
    </div>
    @endforeach
</div>

<script>
    const cards = document.querySelectorAll('.card-clickable');
    cards.forEach(card => {
        card.addEventListener('click', function() {
            const turnamenId = this.getAttribute('data-id');
            window.location.href = `/turnamen/${turnamenId}`;
        });
    });
</script>
</div>
@endsection
