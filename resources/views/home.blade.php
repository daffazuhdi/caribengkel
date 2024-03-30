@section('title', $title)
@extends('layouts.main')
@section('container')
  <div style="border-radius: 0px" class="card  bg-dark text-white">
    <img src="{{ url('photos/img_hero.png') }}" class="card-img" alt="...">
    <div class="card-img-overlay d-flex flex-column text-center justify-content-center align-items-center">
      <h2 class="mb-4">Temukan Bengkel Sesuai dengan <br> Kebutuhan Kendaraanmu</h2>
      <form class="w-50" role="search" action="/bengkel?search={{ $search }}" METHOD="get">
        <div class="input-group">
          <span class="input-group-text bg-white border-end-0"> <img style="width: 16px; height: 16px;" src="{{ url('photos/search.svg') }}" alt="Search"> </span>
          <input class="form-control form-control-sm border-start-0 ps-0" type="search" placeholder="Nama, lokasi, atau spesialisasi bengkel" aria-label="Search" name="search" value="">
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
        <div class="col-12 col-sm-3 mb-3">
          <a href="/bengkel?specialty%5B%5D={{ $s->id }}" class="btn btn-primary w-100 h-100" style="text-decoration: none; text-align: center; color: #FFFFFF; font-size: 14px; ">
            {{ $s->name }}
          </a>
        </div>
          {{-- </button> --}}
        @endforeach
        {{-- <button class="col-sm-3 btn btn-primary mb-3 mx-1">
              <a href="/bengkel" style="text-decoration: none; color: #FFFFFF; font-size: 14px; ">Semua Bengkel</a>
          </button> --}}
        <div class="col-12 col-sm-3 mb-3">
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
            <p class="text-start" style="font-size: 16px">CariBengkel merupakan website yang menghubungkan kamu <br> dengan bengkel-bengkel terbaik di daerah Tangerang Selatan. </p>
            <p class="text-start" style="font-size: 16px" >Kami berupaya untuk memudahkan pengguna kami dalam <br> mencari bengkel, berdasarkan lokasi, merk mobil, dan layanan <br> yang disediakan oleh bengkel tersebut.</p>
            <button class="btn btn-primary d-flex justify-content-start"><a href="" style="text-decoration: none; color: #FFFFFF;">Mulai Cari Bengkel <img style="width: 20px; height: 20px;" src="{{ url('photos/arrow-right.svg') }}" alt=""></a></button>
          </div>
          <div class="col-12 col-lg-6">
            <img class="float-lg-end" style="height: 300px" src="{{ url('photos/img_tentangkami.svg') }}" alt="">
          </div>
        </div>
    </div>
  </section>

  <section>
    <div class="container py-80px">
      <div class="row align-items-baseline justify-content-between">
        <div class="col-6">
            <h6>Bengkel dengan Ulasan Teratas</h6>
            <p style="font-size: 14px">Banyak orang yang memberikan ulasan bagus untuk bengkel ini.</p>
        </div>
        <div class="col d-flex justify-content-end">
          <button class="btn btn-primary d-flex justify-content-start"><a href="" style="text-decoration: none; color: #FFFFFF;">Lihat Semua</a></button>
        </div>
      </div>
      <div class="row row-cols-1 row-cols-md-4 my-2" style="padding-bottom: 2em;">
        @foreach ($workshop as $workshop)
        <div class="col mb-2">
        <a href="/bengkelDetail/{{ $workshop->id }}" class="" style="text-decoration: none">
          <div class="card h-100">
            <div style="padding: 1em 1em 0 1em;">
                <img src="{{ url('/photos/'.$workshop->photo) }}"  style="border-radius: 8px; object-fit: cover; width: auto; height: 152px;" class="card-img-top img-fluid" alt="{{ $workshop->name }}">
            </div>
            <div class="card-body border-bottom">
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
                <div class="card-text">
                        @foreach ($workshop->specialties as $s)
                        <small class="rounded-pill px-2 py-1" style="color: #0D5C63; border: 1px solid #0D5C63;">{{ $s->name }}</small>
                        @endforeach
                </div>
                <div class="card-text">
                        <small class="d-flex align-items-center" style="font-size: 16px; font-weight: 600; color: #052023">
                                <svg xmlns="http://www.w3.org/2000/svg" class="mx-1" width="1.25em" height="1.25em" viewBox="0 0 24 24">
                                        <path fill="#fac45b" d="m5.825 21l1.625-7.025L2 9.25l7.2-.625L12 2l2.8 6.625l7.2.625l-5.45 4.725L18.175 21L12 17.275z"/>
                                </svg>
                                {{ number_format($workshop->ratings_avg_rate, 1) }}
                        </small>
                </div>
            </div>
          </div>
        </a>
        </div>
        @endforeach
      </div>
    </div>
  </section>

  <section style="background-color: #F3F9F9">
    <div class="container py-40px">
      <div class="row text-center">
        <div class="col-sm">
          <div class="cmb-3">
            <h2>{{$countWorkshop}}</h2>
            <p style="font-size: 14px;">Bengkel</p>
          </div>
        </div>
        <div class="col-sm">
          <div class="mb-3">
            <h2>{{$countCustomer}}</h2>
            <p style="font-size: 14px;">Kustomer</p>
          </div>
        </div>
        <div class="col-sm">
          <div class="mb-3">
            <h2>{{$countUser}}</h2>
            <p style="font-size: 14px;">Pengguna</p>
          </div>
        </div>
        <div class="col-sm">
          <div class="mb-3">
            <h2>{{$countBrand}}</h2>
            <p style="font-size: 14px;">Merek Mobil</p>
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
          <div class="col-12 col-lg-4 mb-3  d-grid gap-5">
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
