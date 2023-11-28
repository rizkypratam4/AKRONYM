@extends('layouts.main')

@section('container')
<a href="/turnamen" class="mb-5">Back to turnamen</a>
    <div class="mt-4"> 
        <article>
            <h2>{{ $turnamens->tournament_name }}</h2>
            <p>Biaya Pendaftaran: IDR {{ $turnamens->entry_fee}}</p>
            <div class="alert alert-danger" role="danger">
                Sebelum Mendaftar lengkapi profile anda terlebih dahulu
            </div>
            <div>
                <a href="#" class="btn btn-primary">Daftar</a>
                <a href="#" class="btn btn-primary">Room</a>
            </div>
            <hr class="mt-4">
            <div class="mt-4">
                <h2>Deskripsi</h2>
                {!! $turnamens->description !!}
            </div>
           
            
        </article>
    </div>
    
    
@endsection

