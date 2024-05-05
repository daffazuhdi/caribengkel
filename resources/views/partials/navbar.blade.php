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
    .hoverable {
      color: #052023;
    }
    .hoverable:hover {
      color: #0D5C63;
      background-color:#F3F9F9;
    }
  </style>
</head>
<div class="sticky-top bg-white">
  {{-- <nav class="navbar navbar-expand-lg bg-body-tertiary">
    <div class="container-fluid">
      <a class="navbar-brand" href="#">Navbar</a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav me-auto mb-2 mb-lg-0">
          <li class="nav-item">
            <a class="nav-link active" aria-current="page" href="#">Home</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#">Link</a>
          </li>
          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
              Dropdown
            </a>
            <ul class="dropdown-menu">
              <li><a class="dropdown-item" href="#">Action</a></li>
              <li><a class="dropdown-item" href="#">Another action</a></li>
              <li><hr class="dropdown-divider"></li>
              <li><a class="dropdown-item" href="#">Something else here</a></li>
            </ul>
          </li>
          <li class="nav-item">
            <a class="nav-link disabled" aria-disabled="true">Disabled</a>
          </li>
        </ul>
        <form class="d-flex" role="search">
          <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
          <button class="btn btn-outline-success" type="submit">Search</button>
        </form>
      </div>
    </div>
  </nav> --}}
  <nav class="navbar navbar-expand-lg">
    <div class="container-fluid p-0">
      <a class="navbar-brand m-0 p-0" href="/">
        <img src="{{ url('photos/logoNavbar.svg') }}" width="182px" height="36px"></img>
      </a>

      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>

      <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav mx-auto">
          <li class="nav-item mt-2 mt-md-0"><a class="nav-link {{ ($title === "Beranda" ? 'active' :'')}}" href="/">Beranda</a></li>
          <li class="nav-item"><a class="nav-link {{ ($title === "Bengkel" ? 'active' :'')}}" href="/bengkel">Bengkel</a></li>
          <li class="nav-item"><a class="nav-link {{ ($title === "Tentang Kami" ? 'active' :'')}}" href="/tentangkami">Tentang Kami</a></li>

          @if (Auth::user())
          <li class="nav-item d-block d-md-none"><a class="nav-link {{ ($title === "Profil Saya" ? 'active' :'')}}" href="/profil">Profil Saya</a></li>
          <li class="nav-item d-block d-md-none">
            <form action="/logout" method="post" class="m-0">
              @csrf
                <button type="submit" class="btn btn-primary my-2" style="text-decoration: none; font-weight: 500; font-size: 16px;">
                  Keluar
                </button>
            </form>
          </li>
        </ul>
        @endif

        @if (Auth::user())
        <div class="dropdown hover_drop_down d-none d-md-block">
            <img src="{{ Storage::url('/profiles/'.Auth::user()->photo) }}"
                style="border-radius: 50%; object-fit: cover; width: 42px; height: 42px; filter: drop-shadow(0.1em 0.1em 0.1em #727272);"
                class="m-1" alt="{{ Auth::user()->name }}"
            >
            <div class="dropdown-menu px-0 py-2">
                <a href="{{ url('/profil') }}">
                    <div class="hoverable px-3 py-1" style="font-size: 16px; border-radius: 6px;">Profil Saya</div>
                </a>
                <form action="/logout" method="post" class="m-0">
                    @csrf
                    <button type="submit" class="btn btn-link px-3 py-1 hoverable text-start w-100" style="text-decoration: none; font-weight: 500; font-size: 16px;">
                        Keluar
                    </button>
                </form>
            </div>
        </div>
        @else
        <div class="d-flex mt-2 mt-md-0 gap-2" id="">
            <div class="btn btn-primary w-100">
              <a style="color: white; font-weight: 500;" href="/daftar">Daftar</a>
            </div>
            <div class="btn w-100">
              <a class="align-items-center" style="color: #052023; font-weight: 500" href="/masuk">Masuk</a>
            </div>
        </div>
        @endif
      </div>
  </nav>
</div>
 {{-- <hr style="height:1px;border-width:0;color:gray;background-color:gray"> --}}
{{-- </div> --}}
