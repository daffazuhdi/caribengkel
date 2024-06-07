@section('title', $title)
@extends('layouts.main')
@section('container')
@if (session('message'))
<div class="alert alert-warning main-content d-flex align-items-center justify-content-start gap-2 m-0 py-2" role="alert" style="font-weight: 600; border-radius: 0; padding: 0 94px;">
    <svg xmlns="http://www.w3.org/2000/svg" width="1.2em" height="1.2em" viewBox="0 0 24 24">
        <path fill="#fdad15" d="M12 1.75A10.25 10.25 0 1 0 22.25 12A10.26 10.26 0 0 0 12 1.75m-1 5a1 1 0 0 1 2 0v6.33a1 1 0 0 1-2 0zm1 11.08a1.25 1.25 0 1 1 1.25-1.25a1.24 1.24 0 0 1-1.21 1.23z"/>
    </svg>
    {{ session('message') }}
</div>
@endif

  <div style="border-radius: 0px" class="card  bg-dark text-white">
    <img src="{{ url('photos/img_hero.png') }}" class="card-img" alt="...">
    <div class="card-img-overlay d-flex flex-column text-center justify-content-center align-items-center">
      <h2 class="title-home mb-4">Temukan Bengkel Sesuai dengan <br> Kebutuhan Kendaraanmu</h2>
      <form class="w-50" role="search" action="/bengkel?search={{ $search }}" METHOD="get">
        <div class="input-group">
          <span class="input-group-text bg-white border-end-0"> <img style="width: 16px; height: 16px;" src="{{ url('photos/search.svg') }}" alt="Search"> </span>
          <input class="form-control form-control-sm border-start-0 ps-0" type="search" placeholder="Nama, lokasi, merek mobil, atau spesialisasi bengkel" aria-label="Search" name="search" value="">
        </div>
      </form>
    </div>
  </div>

  <section>
    <div class="container py-80px">
      <h6>Layanan yang Tersedia untuk Mobil</h6>
      <p style="font-size: 14px">Berbagai macam pilihan kategori sesuai dengan kebutuhan mobil</p>

      <div class="row text-center">
        @foreach ($specialty as $s)
        <div class="col-6 col-sm-3 mb-3">
          <a href="/bengkel?specialty%5B%5D={{ $s->id }}" class="btn btn-primary w-100 h-100 d-flex justify-content-center align-items-center" style="text-decoration: none; color: #FFFFFF; font-size: 14px; ">
            {{ $s->name }}
          </a>
        </div>
        @endforeach
        <div class="col-6 col-sm-3 mb-3">
          <a href="{{ url('/bengkel') }}" class="btn btn-primary w-100 h-100" style="text-decoration: none; color: #FFFFFF; font-size: 14px;">
            Semua Bengkel
          </a>
        </div>
      </div>
    </div>
  </section>

  <section style="background-color: #F3F9F9">
    <div class="container py-80px text-center">
      <div class="mb-4">
        <span class="py-1 px-2" style="border: 1.5px solid #052023; border-radius: 25px; font-size: 12px; font-weight: 500;">Tentang Kami</span>
      </div>
      <h6 class="mb-4">Hubungkan Kamu dengan Bengkel Terbaik</h6>
        <div class="row align-items-center">
          <div class="col-12 col-lg-6">
            <p class="text-start" style="font-size: 14px">CariBengkel merupakan website yang menghubungkan kamu dengan bengkel-bengkel terbaik di bidangnya di daerah Tangerang Selatan. </p>
            <p class="text-start" style="font-size: 14px" >Kami berupaya untuk memudahkan pengguna kami dalam mencari bengkel, berdasarkan lokasi, spesialisasi, merek mobil yang dikerjakan oleh bengkel tersebut.</p>
            <button class="btn btn-primary d-flex justify-content-start"><a href="/bengkel" style="text-decoration: none; color: #FFFFFF; font-size: 14px;">Mulai Cari Bengkel <img style="width: 20px; height: 20px;" src="{{ url('photos/arrow-right.svg') }}" alt=""></a></button>
          </div>
          <div class="col-12 col-lg-6">
            <img class="float-lg-end img-tentangkami img-fluid" style="height: 300px" src="{{ url('photos/img_tentangkami.svg') }}" alt="">
          </div>
        </div>
    </div>
  </section>

  <section>
    <div class="container py-80px">
      <div class="row align-items-end justify-content-between mb-4">
        <div class="col-lg-6 col-sm-12">
            <h6>Bengkel dengan Ulasan Teratas</h6>
            <p class="sub-bengkelterbaik m-0" style="font-size: 14px">Banyak orang yang memberikan ulasan bagus untuk bengkel ini.</p>
        </div>
        <div class="col justify-content-end d-none d-md-flex w-100">
          <button class="btn btn-outline-dark d-flex justify-content-start"><a href="{{ route('bengkel') }}" style="text-decoration: none; color: #052023; font-size: 14px; border-color:#052023">Lihat Semua Bengkel</a></button>
        </div>
      </div>
      <div class="row row-cols-1 row-cols-md-4 my-2">
        @foreach ($workshop as $workshop)
        <div class="col mb-2">
        <a href="/bengkelDetail/{{ $workshop->id }}" class="" style="text-decoration: none">
          <div class="card h-100">
            <div style="padding: 1em 1em 0 1em;">
                <img src="{{ url('storage/workshop/'.$workshop->photo) }}"  style="border-radius: 8px; object-fit: cover; width: auto; height: 152px;" class="card-img-top img-fluid" alt="{{ $workshop->name }}">
            </div>
            <div class="card-body border-bottom mx-3 py-3 px-0">
                <h5 class="card-title" style="font-size: 18px; font-weight: 600">{{ $workshop->name }}</h5>
                <div class="address d-flex justify-content-left align-items-center">
                        <div class="img-fluid" style="padding-right: 4%">
                                <img src="{{ url('photos/mapsLogo.svg') }}" style="width:16px;" alt="{{ $workshop->name }}">
                        </div>
                        <div>
                                <p class="m-0" style="font-size: 14px; font-weight: 400;">{{ $workshop->address }}</p>
                        </div>
                </div>
            </div>
            <div class="card-text d-flex justify-content-between m-3" style="">
                <div class="card-text d-flex flex-wrap gap-1">
                        @foreach ($workshop->specialties as $s)
                        <small class="rounded-pill px-2 py-1" style="color: #0D5C63; border: 1px solid #0D5C63;">{{ $s->name }}</small>
                        @endforeach
                </div>
                <div class="card-text">
                        <small class="d-flex align-items-center" style="font-size: 16px; font-weight: 600; color: #052023">
                                <svg xmlns="http://www.w3.org/2000/svg" class="mx-1" width="1.25em" height="1.25em" viewBox="0 0 24 24">
                                        <path fill="#fac45b" d="m5.825 21l1.625-7.025L2 9.25l7.2-.625L12 2l2.8 6.625l7.2.625l-5.45 4.725L18.175 21L12 17.275z"/>
                                </svg>
                                {{ number_format($workshop->reviews_avg_rating, 1) }}
                        </small>
                </div>
            </div>
          </div>
        </a>
        </div>
        @endforeach
      </div>
      <div class="col d-block d-md-none">
        <button class="btn btn-outline-dark w-100"><a href="{{ route('bengkel') }}" style="text-decoration: none; color: #052023; border-color:#052023; font-size: 14px;">Lihat Semua Bengkel</a></button>
      </div>
    </div>
  </section>

  <section style="background-color: #0D5C63">
    <div class="container py-40px">
      <div class="row text-center">
        <div class="col-3">
          <div class="mb-3">
            <h2 style="color:#F3F9F9;">{{$countWorkshop}}</h2>
            <p style="font-size: 14px; color:#F3F9F9;">Bengkel</p>
          </div>
        </div>
        <div class="col-3">
          <div class="mb-3">
            <h2 style="color:#F3F9F9;" >{{$countCustomer}}</h2>
            <p style="font-size: 14px; color:#F3F9F9;">Kustomer</p>
          </div>
        </div>
        <div class="col-3">
          <div class="mb-3">
            <h2 style="color:#F3F9F9;">{{$countUser}}</h2>
            <p style="font-size: 14px; color:#F3F9F9;">Pengguna</p>
          </div>
        </div>
        <div class="col-3">
          <div class="mb-3">
            <h2 style="color:#F3F9F9;">{{$countBrand}}</h2>
            <p style="font-size: 14px; color:#F3F9F9;">Merek Mobil</p>
          </div>
        </div>
      </div>
    </div>
  </section>

  <section>
    <div class="container py-80px">
      <div class="text-center">
        <div class="mb-4">
          <span class="py-1 px-2" style="border: 1.5px solid #052023; border-radius: 25px; font-size: 12px; font-weight: 500;">Solusi yang Kami Berikan</span>
        </div>
        <h6 class="mb-4">Mempermudah Pencarian Bengkel</h6>
      </div>
        <div class="row">
          <div class="col-12 col-lg-4 mb-3 d-grid gap-5">
            <div class="card border-0 px-4 py-3 mx-4" style="background-color: #F3F9F9">
              <div class="card-body text-left">
                <img class="mb-3" style="width: 54px; height: 54px;" src="{{ url('photos/search-benefit.png') }}" alt="">
                <h6>Pencarian berdasarkan lokasi</h6>
                <p style="font-size: 14px">Memudahkan kamu untuk mencari bengkel yang sesuai dengan lokasi kamu berada.</p>
              </div>
            </div>
          </div>
          <div class="col-12 col-lg-4 mb-3 d-grid gap-5">
            <div class="card border-0 px-4 py-3 mx-4" style="background-color: #F3F9F9">
              <div class="card-body text-left">
                <img class="mb-3" style="width: 54px; height: 54px;" src="{{ url('photos/bengkel-benefit.png') }}" alt="">
                <h6>Berbagai bengkel telah berpartisipasi</h6>
                <p style="font-size: 14px">Banyak pilihan bagi kamu yang sulit untuk menemukan bengkel yang sesuai.</p>
              </div>
            </div>
          </div>
          <div class="col-12 col-lg-4 mb-3 d-grid gap-5">
            <div class="card border-0 px-4 py-3 mx-4" style="background-color: #F3F9F9">
              <div class="card-body text-left">
                <img class="mb-3" style="width: 54px; height: 54px;" src="{{ url('photos/notification-benefit.png') }}" alt="">
                <h6>Pengingat untuk lakukan servis berkala</h6>
                <p style="font-size: 14px">Memastikan bahwa kamu telah melakukan servis berkala setiap 6 bulan.</p>
              </div>
            </div>
          </div>
        </div>
    </div>
  </section>


@endsection

<style>
  button.col-sm {
    margin: 0 10px;
  }
</style>
