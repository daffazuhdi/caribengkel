<head>
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=DM+Sans:ital,opsz,wght@0,9..40,100..1000;1,9..40,100..1000&display=swap" rel="stylesheet">
  <link rel="stylesheet" href="../public/css/style.css">
  <link rel="stylesheet" href=" {{ url('style.css') }} ">

  <style>
    nav {
      font-family: "DM Sans", sans-serif;
      font-optical-sizing: auto;
      font-weight: 400;
      font-style: normal;
      /* color: #052023; */
      margin: 2% 6%;
      /* background: none; */
    }
    .hover_drop_down:hover .dropdown-menu{
      display: block;
      padding: 0.4em;
      margin-top: 0;
      right: 0;
    }
  </style>
</head>
<div class="sticky-top bg-white">
<nav class="navbar navbar-expand-lg">
    <div class="container-fluid">
      <a class="navbar-brand m-0 p-0" href="#">
        <img src="{{ url('photos/logoNavbar.svg') }}" width="182px" height="36px"></img>
      </a>

      <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
        <div class="navbar-nav mx-auto">
          <a class="nav-link {{ ($title === "Beranda" ? 'active' :'')}}" href="/">Beranda</a>
          <a class="nav-link {{ ($title === "Bengkel" ? 'active' :'')}}" href="/bengkel">Bengkel</a>
          <a class="nav-link {{ ($title === "Tentang Kami" ? 'active' :'')}}" href="/tentangkami">Tentang Kami</a>
          <a class="nav-link {{ ($title === "Bantuan" ? 'active' :'')}}" href="/bantuan">Bantuan</a>
        </div>
        @if (Auth::user())
        <div class="dropdown hover_drop_down" style="float: right;">
          <img src="{{ url('/photos/'.Auth::user()->photo) }}"
            style="border-radius: 50%; object-fit: cover; width: 42px; height: 42px; filter: drop-shadow(0.1em 0.1em 0.1em #727272);"
            class="m-1" alt="{{ Auth::user()->name }}"
          >
          <div class="dropdown-menu">
              <a href="{{ url('/profil') }}">Profil Saya</a>
              <a href="#">Notifikasi</a>
              <form action="/logout" method="post" class="m-0">
                {{-- @csrf --}}
                <button type="submit" class="btn btn-link m-0 p-0" style="text-decoration: none; color: #0D5C63; font-weight: 500;">
                  Keluar
                </button>
              </form>
          </div>
        </div>
        @else
        <div class="d-flex" id="">
            <div class="btn btn-primary">
              <a class="" style="color: white; font-weight: 500;" href="/daftar">Daftar</a>
            </div>
            <div class="btn mx-auto" style="padding-left: 1em;">
              <a class="align-items-center" style="color: #052023; font-weight: 500" href="/masuk">Masuk</a>
            </div>
        </div>
        @endif
      </div>
    </nav>
  </div>

 <hr style="height:1px;border-width:0;color:gray;background-color:gray">
</div>
