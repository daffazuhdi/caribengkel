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

  <section style="background-color: #FDFDFD">
    <div class="py-80px">
      <h6>Layanan yang Tersedia untuk Mobil</h6>
      <p style="font-size: 14px">Berbagai macam pilihan kategori sesuai dengan kebutuhan mobil</p>
      <div class="row text-center align-items">
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

  <section class="container hero" style="background-color: #F3F9F9">

  </section>
@endsection
