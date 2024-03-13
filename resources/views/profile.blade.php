@section('title', $title)
@extends('layouts.main')
@section('container')
    <div class="d-flex justify-content-between" style="width: 23%;">
        <div class="">
            <img src="{{ Storage::url('/photos/'.$user->photo) }}" style="border-radius: 50%; object-fit: cover; width: 117px; height: 117px; filter: drop-shadow(0.1em 0.1em 0.1em #727272);" class="" alt="{{ $user->name }}">
        </div>
        <div class="">
            <h4 style="font-weight: 600;">{{ $user->first_name }} {{ $user->last_name }}</h4>
            <h6 style="font-size: 18px; color: #303030;">{{ $user->email }}</h6>
            <button class="btn btn-primary px-3 mt-2" style="background-color: white; border-color: #052023; border-radius: 8px;" type="#">
                <a class="nav-link" style="color: #052023; font-weight: 600" href="/">Ubah Profil</a>
            </button>
        </div>
    </div>
    <hr style="height:0.8px;border-width:0;color:gray;background-color:gray;margin: 4% 0;">
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
    <div class="tab-content" id="myTabContent">
        <div class="tab-pane fade show active" id="review" role="tabpanel" aria-labelledby="review-tab" style="padding: 1%">
            <div class="row row-cols-1 row-cols-md-4 my-2" style="padding-bottom: 2em;">
                @foreach ($rating as $rating)
                <div class="col">
                {{-- <a href="/bengkelDetail/{{ $workshop->id }}" class="" style="text-decoration: none"> --}}
                  <div class="card h-100">
                    {{-- <img src="{{ Storage::url('/photos/'.$workshop->photo) }}"  style="padding: 1em 1em 0 1em;" class="card-img-top img-fluid" alt="{{ $workshop->name }}"> --}}
                    <div class="card-body p-4">
                        <div class="card-title d-flex justify-content-between">
                            <h5 class="card-title m-0 align-items-center" style="font-size: 18px; font-weight: 600">{{ $rating->user->first_name }} {{ $rating->user->last_name }}</h5>
                            <div class="card-text align-items-center">
                                <small class="" style="font-size: 16px; font-weight: 600; color: #052023">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="1.25em" height="1.25em" viewBox="0 0 24 24">
                                                <path fill="#fac45b" d="m5.825 21l1.625-7.025L2 9.25l7.2-.625L12 2l2.8 6.625l7.2.625l-5.45 4.725L18.175 21L12 17.275z"/>
                                        </svg>
                                        {{ number_format($rating->rate, 1) }}
                                </small>
                            </div>
                        </div>
                        <h6 class="py-2" style="font-size: 18px; font-weight: 400;">{{ $rating->comment }}</h6>
                        <h6 class="text-muted py-2" style="font-size: 16px;">{{ $rating->created_at->format('d M y') }}</h6>
                        <h6>{{ $rating->specialty->name }}</h6>
                    </div>
                  </div>
                </a>
            </div>
            @endforeach
        </div>
    </div>
@endsection

<style>
    h4, a {
        color: #052023;
    }
    .nav-tabs .nav-item .nav-link {
        color: #040404;
        font-size: 20px;
        border: none;
    }
    .nav-tabs .nav-item .nav-link.active {
        border:none;
        background:none;border-bottom:3px solid #0D5C63;color:#0D5C63
    }
</style>
