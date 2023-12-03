@extends('layouts.main')


@section('container')

<div class="profile-content">
    <div class="row">

        <div class="profile-logo">
            <form action="/profile/akun" method="POST" enctype="multipart/form-data" id="logoForm">
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
                <h1 class="text-center mt-2">{{ $user->team_name }}</h1>
                <p class="text-center">ID: {{ $user->profile_id }}</p>
                <p class="text-center">{{ $user->bio }}</p>
            </form>
        </div>

        <div class="col-md-3">
            <div class="card" style="margin-top: 80px">
                <div class="card-body">
                    <ul class="nav flex-column">
                        <li class="nav-item">
                            <a class="nav-link active" aria-current="page" href="#">Akun saya</a>
                          </li>
                        <li class="nav-item">
                          <a class="nav-link" aria-current="page" href="#">Turnamen saya</a>
                        </li>
                        <li class="nav-item">
                          <a class="nav-link" href="#">Transaksi saya</a>
                        </li>
                        <li class="nav-item">
                          <a class="nav-link" href="#">Permainan</a>
                        </li>
                        <li class="nav-item">
                          <a class="nav-link disabled" aria-disabled="true">Pencapaian</a>
                        </li>
                      </ul>
                </div>
            </div>

            <div class="card mt-3">
                <div class="card-body">
                    <ul class="nav flex-column">
                        <li class="nav-item">
                          <a class="nav-link active" aria-current="page" href="#">Pengaturan</a>
                        </li>
                        <li class="nav-item">
                          <a class="nav-link" href="#">Keluar</a>
                        </li>
                      </ul>
                </div>
            </div>
        </div>
              <div class="col">
                <div class="card-header mt-4">
                  <ul class="nav nav-underline card-header-tabs" id="profileTabs">
                    <li class="nav-item">
                      <a class="nav-link active" data-bs-toggle="tab" aria-current="page" 
                      href="#informasi-akun" onclick="updateUrl('akun')">Informasi akun</a>
                    </li>
                    <li class="nav-item">
                      <a class="nav-link" data-bs-toggle="tab" href="#buat-tim"
                      onclick="updateUrl('team')">Buat tim</a>
                    </li>
                    <li class="nav-item">
                      <a class="nav-link" data-bs-toggle="tab" href="#ganti-password"
                      onclick="updateUrl('gantipassword')">Ganti password</a>
                    </li>
                  </ul>
                </div>
                
                
                <div class="card rounded-3 mt-3">
                  <div class="card-body info-akun py-2 m-4">
                    <div class="tab-content">
                      <div class="tab-pane fade show active" id="informasi-akun">
                        <div class="edit-button">
                          <p style="cursor: pointer;" id="actionFormAkun">
                            <i class="bi bi-pencil me-1"></i>Ubah
                          </p>
                        </div>

                        <form class="row g-3" action="/profile/akun" method="POST">
                          @csrf
                          <input type="hidden" name="form_type" value="akun">
                            <div class="col-md-6">
                                <label for="inputEmail4" class="form-label">Email</label>
                                <input type="text" readonly class="form-control-plaintext" id="staticEmail" 
                                value="{{ $user->email }}">
                            </div>
                    
                            <div class="col-md-6">
                                <label for="kota" class="form-label">Kota</label>
                                <input type="text" onkeyup="searchKota()" style="position: relative" readonly 
                                class="form-control-plaintext" name="city" id="kota" value="-">
                                <div class="list-kota d-none" id="listKota">
                                  <div class="card mt-3"> 
                                      <div class="card-body">
                                          <ul>
                                              @foreach ($kota as $k)
                                                  <li>{{ $k->name }}</li>
                                              @endforeach
                                              <p id="notFoundMessage" class="d-none">Kota tidak ditemukan</p>
                                          </ul>
                                      </div>
                                  </div>
                              </div>
                            </div>
    
                            <div class="col-md-6">
                              <label for="phone_number" class="form-label">No.Hp</label>
                              <input type="text" readonly class="form-control-plaintext" id="no-hp" 
                              value="+{{ $user->phone_number }}">
                            </div>
                  
                            <div class="col-md-6">
                              <label for="provinsi" class="form-label">Provinsi</label>
                              <input type="text" style="position: relative" onkeyup="searchProvinsi()" 
                              readonly class="form-control-plaintext" name="province" id="provinsi" value="-">
                              <div class="list-provinsi d-none" id="listProvinsi">
                                  <div class="card mt-3">
                                      <div class="card-body">
                                          <ul>
                                              @foreach ($provinsi as $p)
                                                  <li>{{ $p->name }}</li>
                                              @endforeach
                                              <p id="notFoundMessage" class="d-none">Provinsi tidak ditemukan</p>
                                          </ul>

                                      </div>
                                      
                                  </div>
                                   
                              </div>
                            </div>

                          
                            <div class="col-md-6">
                            
                            </div>
    
                            <div class="col-md-6">
                              <label for="provinsi" class="form-label">Hubungkan akun</label>
                                <div class="connect-sosmed mt-1">
                                  <button type="button" class="btn btn-primary me-2">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" 
                                    class="bi bi-facebook" viewBox="0 0 16 16"><path d="M16 8.049c0-4.446-3.582-8.05-8-8.05C3.58 0-.002 3.603-.002 8.05c0 4.017 2.926 7.347 6.75 7.951v-5.625h-2.03V8.05H6.75V6.275c0-2.017 1.195-3.131 3.022-3.131.876 0 1.791.157 1.791.157v1.98h-1.009c-.993 0-1.303.621-1.303 1.258v1.51h2.218l-.354 2.326H9.25V16c3.824-.604 6.75-3.934 6.75-7.951"/>
                                    </svg>
                                  </button>
    
                                  <button type="button" class="btn btn-secondary me-2">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-discord" viewBox="0 0 16 16">
                                      <path d="M13.545 2.907a13.227 13.227 0 0 0-3.257-1.011.05.05 0 0 0-.052.025c-.141.25-.297.577-.406.833a12.19 12.19 0 0 0-3.658 0 8.258 8.258 0 0 0-.412-.833.051.051 0 0 0-.052-.025c-1.125.194-2.22.534-3.257 1.011a.041.041 0 0 0-.021.018C.356 6.024-.213 9.047.066 12.032c.001.014.01.028.021.037a13.276 13.276 0 0 0 3.995 2.02.05.05 0 0 0 .056-.019c.308-.42.582-.863.818-1.329a.05.05 0 0 0-.01-.059.051.051 0 0 0-.018-.011 8.875 8.875 0 0 1-1.248-.595.05.05 0 0 1-.02-.066.051.051 0 0 1 .015-.019c.084-.063.168-.129.248-.195a.05.05 0 0 1 .051-.007c2.619 1.196 5.454 1.196 8.041 0a.052.052 0 0 1 .053.007c.08.066.164.132.248.195a.051.051 0 0 1-.004.085 8.254 8.254 0 0 1-1.249.594.05.05 0 0 0-.03.03.052.052 0 0 0 .003.041c.24.465.515.909.817 1.329a.05.05 0 0 0 .056.019 13.235 13.235 0 0 0 4.001-2.02.049.049 0 0 0 .021-.037c.334-3.451-.559-6.449-2.366-9.106a.034.034 0 0 0-.02-.019Zm-8.198 7.307c-.789 0-1.438-.724-1.438-1.612 0-.889.637-1.613 1.438-1.613.807 0 1.45.73 1.438 1.613 0 .888-.637 1.612-1.438 1.612m5.316 0c-.788 0-1.438-.724-1.438-1.612 0-.889.637-1.613 1.438-1.613.807 0 1.451.73 1.438 1.613 0 .888-.631 1.612-1.438 1.612"/>
                                    </svg>
                                  </button>
    
                                  <button type="button" class="btn btn-light">
                                    <img src="https://img.icons8.com/color/16/000000/google-logo.png">
                                  </button>
                                </div>
                            </div>
                            <div class="col-12 d-none" id="btnSubmit">
                                <button type="submit" class="btn btn-danger">Simpan</button>
                            </div>
                        </form>
                      </div>
                      <div class="tab-pane fade" id="buat-tim">
                        @include('profiles.akun.tim')
                      </div>
                      <div class="tab-pane fade" id="ganti-password">
                        @include('profiles.akun.gantipass')
                      </div>
                    </div>
                  </div>
                </div>

               
                
                
               </div>
              </div>
    </div>
</div>
<br>
<br>

@endsection