<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="../public/css/style.css">
    <link href="{{ url('style.css') }}" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=DM+Sans:ital,opsz,wght@0,9..40,100..1000;1,9..40,100..1000&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.9.0/css/bootstrap-datepicker.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-alpha3/dist/js/bootstrap.bundle.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.9.0/js/bootstrap-datepicker.min.js"></script>

    <title class="m-0 p-2">@yield('title')</title>

    <style>
      body {
        font-family: "DM Sans", sans-serif;
        font-optical-sizing: auto;
        font-weight: 300;
        font-style: normal;
        color: #052023;
        min-height: 100vh;
      }
    </style>
  </head>
  <body>
    @include('partials.navbar')
    <div class="container py-4 px-0 m-auto">
        <div class="d-flex flex-wrap justify-content-start gap-4 pb-4">
            <div class="my-1">
                {{-- ubah route foto ke storage link --}}
                <img src="{{ url('storage/profiles/'.Auth::user()->photo) }}" style="border-radius: 50%; object-fit: cover; width: 110px; height: 110px; filter: drop-shadow(0.1em 0.1em 0.1em #727272);" class="" alt="{{ Auth::user()->name }}">
            </div>
            <div class="my-1">
                <h5 style="font-weight: 600;">{{ Auth::user()->first_name }} {{ Auth::user()->last_name }}</h5>
                <h6 style="font-size: 16px; color: #303030;">{{ Auth::user()->email }}</h6>
                <button class="btn btn-outline-dark px-3 mt-2">
                    <a href="{{ url('/ubah-profil') }}" style="color: #052023">Ubah Profil</a>
                </button>
            </div>
        </div>
        <hr style="height:0.8px;border-width:0;color:gray;background-color:gray;margin: 2% 0;">
        @yield('content')
    </div>
    @include('partials.footer')
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
    @yield('script')
  </body>
</html>
