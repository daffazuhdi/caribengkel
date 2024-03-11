<head>
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=DM+Sans:ital,opsz,wght@0,9..40,100..1000;1,9..40,100..1000&display=swap" rel="stylesheet">
  <link rel="stylesheet" href="../public/css/style.css">

  <style>
    nav {
      font-family: "DM Sans", sans-serif;
      font-optical-sizing: auto;
      font-weight: 400;
      font-style: normal;
      color: #052023;
      margin: 2% 6%;
      /* background: none; */
    }
  </style>
</head>
<nav class="navbar navbar-expand-lg sticky-top bg-white">
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
        </div>
        <div class="d-flex" id="navbarNavAltMarkup">
            <div class="navbar-nav mx-auto px-2" style="background-color: #0D5C63; border-radius: 8px">
              <a class="nav-link" style="color: white; font-weight: 500" href="/">Daftar</a>
            </div>
            <div class="navbar-nav mx-auto px-2">
              <a class="nav-link" style="color: #052023; font-weight: 500" href="/">Masuk</a>
            </div>
        </div>
      </div>
    </div>
 </nav>

 <hr style="height:1px;border-width:0;color:gray;background-color:gray">
