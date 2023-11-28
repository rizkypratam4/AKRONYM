@extends('layouts.main')

@section('container')

{{-- <ul class="nav justify-content-center">
    <li class="nav-item">
      <a class="nav-link active" aria-current="page" href="#">Ubah profil</a>
    </li>
    <li class="nav-item">
      <a class="nav-link" href="#">Pengaturan akun</a>
    </li>
    <li class="nav-item">
      <a class="nav-link" href="#">Ganti password</a>
    </li>
    <li class="nav-item">
      <a class="nav-link disabled" href="#" tabindex="-1" aria-disabled="true">Referensi pengguna</a>
    </li>
</ul> --}}

<div class="akronym-edit_profile">
  <div class="akronym-tab_box">
    <button class="akronym-tab_btn active">Ubah Profil</button>
    <button class="akronym-tab_btn">Buat tim</button>
    <button class="akronym-tab_btn">Ganti password</button>
    <div class="line"></div>
  </div>
  
  <div class="akronym-content_box">
    <div class="akronym-content active">
      <h2 class="text-white">Pengaturan profil</h2>
      
      <form action="/profile" method="POST" enctype="multipart/form-data" id="logoForm">
        @csrf
        <input type="hidden" name="form_type" value="logo">
        <label for="logo_team" class="profile-img-container">
            <input type="file" name="logo_team" class="@error('logo_team') is-invalid @enderror" id="logo_team" style="display: none;" onchange="submitForm()" />
            @if ($user->logo_team)
                <img id="profile-image-preview" src="{{ asset('storage/' . $user->logo_team) }}" class="img-thumbnail img-circle img-responsive" alt="Profile Picture" />
            @else
                <img id="profile-image-preview" src="/images/default-avatar.png" class="img-thumbnail img-circle img-responsive" alt="Profile Picture" />
            @endif
            <i class="bi bi-camera"></i>
            
        </label>
        <p class="text-center">ID: {{ $user->profile_id }}</p>
      </form>
      
      @error('logo_team')
          <p style="color: red">{{ $message }}</p>
      @enderror

      <form action="/profile/edit" class="row g-3" method="POST">
          @csrf
          <div class="col-md-6">
            <label for="inputEmail4" class="form-label">Email</label>
            <input type="email" value="{{ $user->team_name }}" class="form-control" id="inputEmail4" @readonly(true)>
          </div>
          <div class="col-md-6">
            <label for="inputPassword4" class="form-label">No.Handphone</label>
            <input type="tel" value="+{{ $user->phone_number }}" class="form-control" id="inputPassword4" @readonly(true)>
          </div>
          <input type="hidden" name="form_type" value="profile">
          <div class="col-md-6 col-sm-6">
            <div class="mb-3">
              <label for="kota" class="form-label">Kota</label>
              <input type="text" class="form-control" id="kota" placeholder="name@example.com">
            </div>

            <ul class="card">
              <li class="dropdown-item text-white px-2 py-2">Aku</li>
            </ul>

           
          </div>

        <div class="col-md-6 col-sm-6">
          <div class="mb-3">
            <label for="provinsi" class="form-label">Provinsi</label>
            <input type="text" class="form-control" id="provinsi" placeholder="name@example.com">
          </div>
        </div>
          <div class="mb-3">
            <label for="exampleFormControlInput2" class="form-label">Nama team</label>
            <input type="text" class="form-control" name="team_name" value="{{ $user->team_name }}" id="team_name">
          </div>
        <div class="mb-3">
          <label for="exampleFormControlTextarea1" class="form-label">Bio</label>
          <textarea class="form-control" id="exampleFormControlTextarea1" name="bio" rows="3">{{ $user->bio }}</textarea>
        </div>
        <button type="submit" class="btn btn-primary">Simpan</button>
      </form>  

    </div>
  
    <div class="akronym-content">
      <h2>Ganti password</h2>
      <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Aspernatur, explicabo exercitationem 
        veniam architecto ab laboriosam magni nisi totam ad, ullam minima nihil autem omnis aut eligendi 
        ipsam voluptates quasi. Eaque.
      </p>
    </div>
  
    <div class="akronym-content">
      <h2>Buat Tim</h2>
      <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Aspernatur, explicabo exercitationem 
        veniam architecto ab laboriosam magni nisi totam ad, ullam minima nihil autem omnis aut eligendi 
        ipsam voluptates quasi. Eaque.
      </p>
    </div>
  </div>
</div>
@endsection