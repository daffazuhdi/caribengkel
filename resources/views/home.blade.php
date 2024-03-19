@extends('layouts.main')
@section('container')
  <div class="card bg-dark text-white">
    <img src="{{ url('photos/img_hero.png') }}" class="card-img" alt="...">
    <div class="card-img-overlay d-flex flex-column text-center justify-content-center align-items-center">
      <h2 class="mb-2">Temukan Bengkel Sesuai dengan <br> Kebutuhan Kendaraanmu</h2>
      <form class="w-50" role="search" action="" METHOD="GET">
        <div class="input-group">
          <span class="input-group-text bg-white border-end-0"> <img style="width: 16px; height: 16px;" src="{{ url('photos/search.svg') }}" alt="Search"> </span>
          <input class="form-control form-control-sm border-start-0 ps-0" type="search" placeholder="Nama, lokasi, atau spesialisasi bengkel" aria-label="Search" name="search" value="">
        </div>
      </form>
    </div>
  </div>

  <section>
    <div class="py-80px">
      <h6>Layanan yang Tersedia untuk Mobil</h6>
      <p style="font-size: 14px">Berbagai macam pilihan kategori sesuai dengan kebutuhan mobil</p>

      <div class="row text-center">
        <div class="col-sm">
          <div class="category mb-3" style="background-color: #0D5C63; border-radius: 8px; padding: 6px 0px;">
            <a href="#" style="text-decoration: none; color: #FFFFFF; font-size: 14px; ">Oli & Mesin</a>
          </div>
        </div>
        <div class="col-sm">
          <div class="category mb-3" style="background-color: #0D5C63; border-radius: 8px; padding: 6px 0px;">
            <a href="#" style="text-decoration: none; color: #FFFFFF; font-size: 14px; ">Body & Cat</a>
          </div>
        </div>
        <div class="col-sm">
          <div class="category mb-3" style="background-color: #0D5C63; border-radius: 8px; padding: 6px 0px;">
            <a href="#" style="text-decoration: none; color: #FFFFFF; font-size: 14px; ">Servis Kaki-Kaki</a>
          </div>
        </div>
        <div class="col-sm">
          <div class="category mb-3" style="background-color: #0D5C63; border-radius: 8px; padding: 6px 0px;">
            <a href="#" style="text-decoration: none; color: #FFFFFF; font-size: 14px; ">Ban</a>
          </div>
        </div>
      </div>

      <div class="row text-center">
        <div class="col-sm">
          <div class="category mb-3" style="background-color: #0D5C63; border-radius: 8px; padding: 6px 0px;">
            <a href="#" style="text-decoration: none; color: #FFFFFF; font-size: 14px; ">AC</a>
          </div>
        </div>
        <div class="col-sm">
          <div class="category mb-3" style="background-color: #0D5C63; border-radius: 8px; padding: 6px 0px;">
            <a href="#" style="text-decoration: none; color: #FFFFFF; font-size: 14px; ">Lampu</a>
          </div>
        </div>
        <div class="col-sm">
          <div class="category mb-3" style="background-color: #0D5C63; border-radius: 8px; padding: 6px 0px;">
            <a href="#" style="text-decoration: none; color: #FFFFFF; font-size: 14px; ">Jok Kulit & Interior</a>
          </div>
        </div>
        <div class="col-sm">
          <div class="category mb-3" style="background-color: #0D5C63; border-radius: 8px; padding: 6px 0px;">
            <a href="#" style="text-decoration: none; color: #FFFFFF; font-size: 14px; ">Semua Bengkel</a>
          </div>
        </div>
      </div>
    </div>
  </section>

  <section>
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
            <h6>Bengkel Populer di Tangerang Selatan</h6>
            <p style="font-size: 14px">Banyak orang yang mengunjungi bengkel ini.</p>
        </div>
        <div class="col d-flex justify-content-end">
          <button class="btn btn-primary d-flex justify-content-start"><a href="" style="text-decoration: none; color: #FFFFFF;">Lihat Semua</a></button>
        </div>
    </div>
    </div>
  </section>

  <section>
    <div class="container py-80px">
      <div class="row text-center">
        <div class="col-sm">
          <div class="cmb-3">
            <h2>10.000</h2>
            <p style="font-size: 14px;">Bengkel</p>
          </div>
        </div>
        <div class="col-sm">
          <div class="mb-3">
            <h2>1.500</h2>
            <p style="font-size: 14px;">Kustomer</p>
          </div>
        </div>
        <div class="col-sm">
          <div class="mb-3">
            <h2>3.000</h2>
            <p style="font-size: 14px;">Pengguna</p>
          </div>
        </div>
        <div class="col-sm">
          <div class="mb-3">
            <h2>24</h2>
            <p style="font-size: 14px;">Merek Mobil</p>
          </div>
        </div>
      </div>
    </div>
  </section>


@endsection
