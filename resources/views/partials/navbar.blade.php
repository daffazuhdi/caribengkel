<nav class="navbar navbar-expand-lg bg-body-tertiary sticky-top bg-body-tertiary">
    <div class="container-fluid">
      <a class="navbar-brand" href="#">CariBengkel</a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
        <div class="navbar-nav mx-auto">
          <a class="nav-link {{ ($title === "Beranda" ? 'active' :'')}}" href="/">Beranda</a>
          <a class="nav-link {{ ($title === "Bengkel" ? 'active' :'')}}" href="/bengkel">Bengkel</a>
          <a class="nav-link {{ ($title === "Tentang Kami" ? 'active' :'')}}" href="/tentangkami">Tentang Kami</a>
          <a class="nav-link {{ ($title === "Bantuan" ? 'active' :'')}}" href="/bantuan">Bantuan</a>
        </div>
        <div class="d-flex" id="navbarNavAltMarkup">
            <div class="navbar-nav mx-auto">
              <a class="nav-link" href="/">Daftar</a>
              <a class="nav-link" href="/">Masuk</a>
        </div>
      </div>
    </div>
 </nav>

