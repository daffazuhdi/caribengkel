@section('title', $title)
@extends('layouts.profile')
@section('content')
    <div class="d-flex justify-content-between">
        <ul class="nav nav-tabs" id="myTab" role="tablist" style="background:none;border:none">
            <li class="nav-item" role="presentation">
                <button class="nav-link active" id="review-tab" data-bs-toggle="tab" data-bs-target="#review" type="button" role="tab" aria-controls="review" aria-selected="true">
                    Ulasan
                </button>
            </li>
            <li class="nav-item" role="presentation">
                <button class="nav-link" id="vehicle-tab" data-bs-toggle="tab" data-bs-target="#vehicle" type="button" role="tab" aria-controls="vehicle" aria-selected="false">
                    Kendaraan
                </button>
            </li>
        </ul>
        <button class="btn btn-primary px-3" style="font-size: 14px;">
            <a href="{{ url('/tambah-kendaraan') }}" style="color: white !important;">Tambah Kendaraan</a>
        </button>
    </div>
    <div class="tab-content" id="myTabContent">
        <div class="tab-pane fade show active px-0 py-4" id="review" role="tabpanel" aria-labelledby="review-tab" style="padding: 1%">
            <div class="row row-cols-1 row-cols-md-3">
                @foreach ($rating as $rating)
                <div class="col">
                  <div class="card h-100">
                    <div class="d-flex justify-content-right border-bottom align-items-center p-4" style="background: #F3F9F9;">
                        <div class="" style="padding-right: 1em;">
                            <img src="{{ url('photos/'.$rating->workshop->photo) }}"  style="border-radius: 10%; object-fit: cover; width: 101px; height: 62px;" class="card-img-top" alt="{{ $rating->workshop->name }}">
                        </div>
                        <div class="d-flex justify-content-between" style="flex-direction: column;">
                            <h5 class="card-title" style="font-size: 16px; font-weight: 600">{{ $rating->workshop->name }}</h5>
                            <div class="address d-flex justify-content-left align-items-center">
                                    <div class="img-fluid" style="padding-right: 4%">
                                            <img src="{{ url('photos/mapsLogo.svg') }}" style="width:14px;" alt="{{ $rating->workshop->name }}">
                                    </div>
                                    <div style="font-size: 12px; color: #052023; font-weight: 400">
                                            {{ $rating->workshop->address }}
                                    </div>
                            </div>
                        </div>
                    </div>
                    {{-- <img src="{{ Storage::url('/photos/'.$workshop->photo) }}"  style="padding: 1em 1em 0 1em;" class="card-img-top img-fluid" alt="{{ $workshop->name }}"> --}}
                    <div class="card-body p-4 d-flex justify-content-between" style="flex-direction: column;">
                        <div class="card-text">
                            <div class="card-title d-flex justify-content-between">
                                <h5 class="card-title m-0 align-items-center" style="font-size: 16px; font-weight: 600">{{ $rating->user->first_name }} {{ $rating->user->last_name }}</h5>
                                <div class="card-text">
                                    <small class="d-flex align-items-center" style="font-size: 15px; font-weight: 500; color: #052023">
                                            <svg xmlns="http://www.w3.org/2000/svg" class="mx-1" width="1.25em" height="1.25em" viewBox="0 0 24 24">
                                                    <path fill="#fac45b" d="m5.825 21l1.625-7.025L2 9.25l7.2-.625L12 2l2.8 6.625l7.2.625l-5.45 4.725L18.175 21L12 17.275z"/>
                                            </svg>
                                            {{ number_format($rating->rate, 1) }}
                                    </small>
                                </div>
                            </div>
                            <h6 class="py-2 m-0" style="font-size: 16px; font-weight: 400; color: #303030;">{{ $rating->comment }}</h6>
                        </div>
                        <div class="card-text">
                            <h6 class="text-black-50 my-4" style="font-size: 14px;">{{ $rating->created_at->format('j F Y') }}</h6>
                            <div class="card-text mt-3">
                                <small class="rounded-pill px-2 py-1" style="color: #0D5C63; border: 1px solid #0D5C63;">{{ $rating->specialty->name }}</small>
                            </div>
                        </div>

                    </div>
                  </div>
                </div>
                @endforeach
            </div>
        </div>
        <div class="tab-pane fade px-0 py-4" id="vehicle" role="tabpanel" aria-labelledby="vehicle-tab" style="padding: 1%">
            <div class="row row-cols-1 row-cols-md-4">
                @foreach (Auth::user()->cars as $car)
                <div class="col">
                    <a href="/kendaraan-{{ $car->id }}" style="text-decoration: none;">
                    <div class="card p-4 h-100">
                        <div class="col-md-10 mb-4" style="font-size: 16px;">
                            <p style="font-weight: 600;">{{ $car->license_plate }}</p>
                            <p>{{ $car->car_model->car_brand->name }} {{ $car->car_model->name }}</p>
                        </div>
                        <div class="">
                            <p class="text-muted">Terakhir kali servis/ganti oli</p>
                            @if (is_null($car->car_services->max('service_date')))
                                <p>No data</p>
                            @else
                                <p>{{ date('j F Y', strtotime($car->car_services->max('service_date'))) }}</p>
                            @endif
                        </div>
                    </div>
                    </a>
                </div>
                @endforeach
            </div>
        </div>
    </div>
@endsection

<style>
    h4, h6, a, .placeholder {
        color: #052023;
    }
    .nav-tabs .nav-item .nav-link {
        color: #040404;
        font-size: 18px;
        border: none;
    }
    .nav-tabs .nav-item .nav-link.active {
        border:none;
        background:none;border-bottom:3px solid #0D5C63;color:#0D5C63
    }
</style>
