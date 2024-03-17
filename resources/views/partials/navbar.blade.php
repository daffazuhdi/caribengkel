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
    .form-popup {
      display: none;
      position: fixed;
      right: 0;
      top: 10vh;
      background-color: white;
      border-radius: 0.4em;
      z-index: 9;
      width: 10%;
      /* height: 100vh; */
      padding: 1%;
      margin: 1% 6.4% 1% 0;
    }
  </style>
</head>
<div class="sticky-top bg-white">
<nav class="navbar navbar-expand-lg">
    <div class="container-fluid">
      <a class="navbar-brand m-0 p-0" href="#">
        <img src="{{ Storage::url('photos/logoNavbar.svg') }}" width="182px" height="36px"></img>
      </a>

      <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
        <div class="navbar-nav mx-auto">
          <a class="nav-link {{ ($title === "Beranda" ? 'active' :'')}}" href="/">Beranda</a>
          <a class="nav-link {{ ($title === "Bengkel" ? 'active' :'')}}" href="/bengkel">Bengkel</a>
          <a class="nav-link {{ ($title === "Tentang Kami" ? 'active' :'')}}" href="/tentangkami">Tentang Kami</a>
          <a class="nav-link {{ ($title === "Bantuan" ? 'active' :'')}}" href="/bantuan">Bantuan</a>
        </div onmouseout="closeForm()">
            @if (Auth::user())
            <div>
              {{-- {{ Auth::user()->id }} --}}
              <img src="{{ Storage::url('/photos/'.Auth::user()->photo) }}"
                style="border-radius: 50%; object-fit: cover; width: 2.625rem; height: 2.625rem; filter: drop-shadow(0.1em 0.1em 0.1em #727272);"
                class="" alt="{{ Auth::user()->name }}" onmouseover="openForm()"
              >
            </div>
            <div class="form-popup border" id="profile">
              <div class="d-flex" style="flex-direction: column;">
                <a href="{{ url('/profile') }}">Profil Saya</a>
                <a href="#">Notifikasi</a>
                <form action="/logout" method="post">
                  @csrf
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
    </div>
 </nav>

 <hr style="height:1px;border-width:0;color:gray;background-color:gray">
</div>

<script>
  function openForm() {
          document.getElementById("profile").style.display = "block";
  }
  function closeForm() {
          document.getElementById("profile").style.display = "none";
  }
</script>
