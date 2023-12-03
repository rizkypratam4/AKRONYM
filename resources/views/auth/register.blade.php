@extends('layouts.main')

@section('container')
<div class="row justify-content-center">
    <div class="col-md-6">
        <main class="form-signin w-100 m-auto">
            <h1 class="h3 mb-3 fw-bold text-white">Daftar Akun Akronym</h1>
            <p style="color: rgb(148, 163, 184);">Bergabunglah dengan kami dan buktikan kehebatanmu!. 
             Ayo daftarkan dirimu sekarang juga.
            </p>
            
            <form action="/register" method="post">
              @csrf
              <div class="form-floating">
                <input type="text" name="team_name" class="form-control @error('team_name') 
                is-invalid @enderror" id="team_name" placeholder="Nama Team" required 
                value="{{ old('team_name') }}">
                <label for="team_name">Nama team</label>
                @error('team_name')
                <div class="invalid-feedback">
                  {{ $message }}
                </div>
                @enderror
              </div>

              <div class="form-floating mt-3">
                <input type="email" name="email" class="form-control @error('email') 
                is-invalid @enderror" id="email" placeholder="Email" required 
                value="{{ old('email') }}">
                <label for="email">Email address</label>
                @error('email')
                <div class="invalid-feedback">
                  {{ $message }}
                </div>
                @enderror
              </div>

              <div class="form-floating mt-3">
                <input type="tel" name="phone_number" class="form-control @error('phone_number') is-invalid @enderror" 
                id="phone_number" placeholder="No.Handphone" value="{{ old('phone_number') }}" required pattern="[0-9]{12,15}">
                <label>No.Handphone</label>
                @error('phone_number')
                <div class="invalid-feedback">
                  {{ $message }}
                </div>
                @enderror
              </div>

              <div class="form-floating mt-3">
                <input type="password" name="password" class="form-control @error('password') 
                is-invalid @enderror" id="password" placeholder="Password" required>
                <label for="password">Password</label>
                @error('password')
                <div class="invalid-feedback">
                  {{ $message }}
                </div>
                @enderror
              </div>
              <button class="btn btn-primary w-100 py-2 mt-2" type="submit">Daftar</button>
            </form>
            <div class="or-container"><div class="line-separator"></div> <div class="or-label">atau</div><div class="line-separator"></div></div>
            <button class="btn btn-light w-100"><img src="https://img.icons8.com/color/16/000000/google-logo.png">
            Daftar dengan Google</button>
            <small style="color: rgb(148, 163, 184);"  class="d-block mt-3 text-center">
                Sudah punya akun? <a href="/login" class="text-decoration-none"> Log in sekarang</a> </small>
        </main>
    </div>
</div>

<script>
  document.getElementById('phone_number').addEventListener('input', function (e) {
    // Menghapus karakter non-angka dari input nomor HP
    this.value = this.value.replace(/[^0-9]/g, '');
    
    // Memastikan bahwa nomor HP dimulai dengan "628"
    if (this.value.length >= 3 && this.value.substring(0, 3) !== '628') {
      this.setCustomValidity('Nomor HP harus dimulai dengan "628"');
    } else {
      this.setCustomValidity('');
    }
  });
</script>

@endsection