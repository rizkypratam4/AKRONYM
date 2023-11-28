<nav class="navbar navbar-expand-lg navbar-dark border-bottom border-body" data-bs-theme="dark">
  <div class="container py-2">
    <a class="navbar-brand fw-bold" style="">AKRONYM</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNav">

      <div class="navbar-nav ms-auto"> <!-- Tambahkan ms-auto di sini -->
        <ul class="navbar-nav">
          <li class="nav-item">
            <a class="nav-link {{ ($title === "Home") ? 'active' : '' }}" href="/">Home</a>
          </li>
          <li class="nav-item">
            <a class="nav-link {{ ($title === "Turnamen") ? 'active' : '' }}" href="/turnamen">Turnamen</a>
          </li>
          <li class="nav-item">
            <a class="nav-link {{ ($title === "Artikel") ? 'active' : '' }}" href="/artikel">Artikel</a>
          </li>
          <li class="nav-item">
            <a class="nav-link {{ ($title === "Artikel") ? 'active' : '' }}" href="/artikel">Shop</a>
          </li>
        </ul>
        
        <ul class="navbar-nav">
          @auth
          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
              {{ auth()->user()->team_name }}
            </a>
            <ul class="dropdown-menu">
              <li><a class="dropdown-item" href="#"><i class="bi bi-trophy me-2"></i>0 Points</a></li>
              <li><a class="dropdown-item" href="/profile/akun"><i class="bi bi-person me-2"></i>Profile</a></li>
              <li><a class="dropdown-item" href="#"><i class="bi bi-gear me-2"></i>Pengaturan</a></li>
              <li><hr class="dropdown-divider"></li>
              <li>
                <form action="/logout" method="post">
                  @csrf
                  <button type="submit" class="dropdown-item"><i class="bi bi-box-arrow-right me-2">
                  </i>Keluar</button>
                </form>
            </ul>
            
          </li>
          
          @else
          <li class="nav-item">
            <a href="/login" class="nav-link"><i class="bi bi-box-arrow-in-right me-1"></i>Masuk</a>
          </li>
          <li>
            <a href="/register" class="nav-link">Daftar</a>
          </li> 
          @endauth
        </ul>
      </div>

    </div>
  </div>
</nav>
