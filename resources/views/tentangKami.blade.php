@section('title', $title)
@extends('layouts.main')
@section('container')
     <section style="background-color: rgb(12,91,99); background-image: linear-gradient(20deg, rgba(12,91,99,1) 25%, rgba(8,65,70,1) 100%);">
        <div class="container py-80px text-center">
            <img class="mb-3" src="{{ url('/photos/logo_icon.svg') }}" alt="">
            <h3 class="mb-3" style="color: #F3F9F9">CariBengkel</h3>
            <p style="color: #F3F9F9"> <strong style="font-weight: 700">CariBengkel</strong>  merupakan website yang menghubungkan kamu dengan bengkel- <br> bengkel terbaik di bidangnya khususnya di daerah Tangerang Selatan</p>
        </div>
     </section>

     <section class="my-5">
        <div class="container py-80px px-72px rounded position-relative" style="background-color:#F3F9F9">
            <div class="row align-items-center">
                <div class="col-12 col-lg-6">
                    <h6 style="color: #052023">Visi</h6>
                    <p class="text-start" style="font-size: 14px">Menjadi platofrm yang memudahkan pengguna dalam mencari bengkel, berdasarkan lokasi, spesialisasi, merek mobil yang dikerjakan oleh bengkel tersebut.</p>
                    <hr>
                    <h6 style="color: #052023">Misi</h6>
                    <p class="text-start" style="font-size: 14px">Menyediakan platform yang ramah pengguna untuk menghubungkan pengguna dengan bengkel terpercaya yang sesuai dengan kebutuhan mereka.</p>
                </div>
            </div>
            <img class="d-none d-md-block" style="width: 540px; position: absolute; bottom: 0; right: 0" src="{{ url('/photos/img_tentangkami_2.png') }}" alt="">
        </div>
     </section>
@endsection
