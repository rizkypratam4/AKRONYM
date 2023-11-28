@extends('layouts.main')

@section('container')
<div class="row justify-content-center align-items-center">
    <div class="col-md-6">
        <main class="form-signin w-100 m-auto">
            <h1 class="h3 mb-3 fw-bold text-white">Masuk Ke Akronym</h1>
            <p style="color: rgb(148, 163, 184);">Selamat datang kembali! Silahkan 
                masukkan tentang anda atau masuk dengan akun media sosialmu
            </p>

            @if (session()->has('success'))
            <div class="alert alert-success alert-dismissible fade show" role="alert">
              {{ session('success') }}
              <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
            </div>
            @endif

            @if (session()->has('loginError'))
            <div class="alert alert-danger alert-dismissible fade show" role="alert">
              {{ session('loginError') }}
              <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
            </div>
            @endif

            <form action="/login" method="post">
              @csrf
              <div class="form-floating">
                <input type="email" name="email" class="form-control @error('email') is-invalid @enderror"
                id="email" autofocus required value="{{ old('email') }}">
                <label for="email">Email address</label>
                @error('email')
                <div class="invalid-feedback">
                  {{ $message }}
                </div>
                @enderror
              </div>
              <div class="form-floating mt-2">
                <input type="password" name="password" class="form-control" 
                id="password" placeholder="Password" required>
                <label for="password">Password</label>
              </div>
          
              <div class="form-check text-start my-3">
                <input class="form-check-input" type="checkbox" value="remember-me" id="flexCheckDefault">
                <label class="form-check-label text-white" for="flexCheckDefault">
                  Remember me
                </label>
                <label class="form-check-label text-white" for="flexCheckDefault">
                  Lupa Password
                </label>
              </div>
              <button class="btn btn-primary w-100 py-2" type="submit">Masuk</button>
            </form>
            <small style="color: rgb(148, 163, 184);"  class="d-block mt-3 text-center">
                Belum punya akun? Ayo <a href="/register" class="text-decoration-none">daftar</a> </small>
        </main>
    </div>
</div>

@endsection