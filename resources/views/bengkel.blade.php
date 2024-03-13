<head>
        <link rel="stylesheet" href="../public/css/style.css">

        <style>
                label {
                        position: relative;
                        width: 380px;
                }

                label:before {
                        content: "";
                        position: absolute;
                        left: 12px;
                        top: 0;
                        bottom: 0;
                        width: 20px;
                        background: url("data:image/svg+xml,%3Csvg xmlns='http://www.w3.org/2000/svg' viewBox='0 0 24 24'%3E%3Cpath fill='%23052023' d='m19.6 21l-6.3-6.3q-.75.6-1.725.95T9.5 16q-2.725 0-4.612-1.888T3 9.5q0-2.725 1.888-4.612T9.5 3q2.725 0 4.613 1.888T16 9.5q0 1.1-.35 2.075T14.7 13.3l6.3 6.3zM9.5 14q1.875 0 3.188-1.312T14 9.5q0-1.875-1.312-3.187T9.5 5Q7.625 5 6.313 6.313T5 9.5q0 1.875 1.313 3.188T9.5 14'/%3E%3C/svg%3E") center / contain no-repeat;
                }
        </style>
</head>

@section('title', $title)
@extends('layouts.main')
@section('container')
        <h1 class="m-0" style="font-size: 28px; font-weight: 600">Bengkel</h1>

        <div class="d-flex justify-content-between py-3 px-0">
                <form class="d-flex align-items-center m-0" role="search">
                        <label class="m-0">
                                <input class="form-control m-0" style="padding-left: 2.2em" type="search" autocomplete="off"
                                        placeholder="Nama, lokasi, atau spesialisasi bengkel" name="search" value="{{ $search }}"
                                >
                        </label>
                </form>

                <button class="btn btn-primary px-3" style="background-color: #0D5C63; border-radius: 8px;" type="#">
                        <svg xmlns="http://www.w3.org/2000/svg" width="1.25em" height="1.25em" viewBox="0 0 24 24">
                                <path fill="white" d="M9 5a1 1 0 1 0 0 2a1 1 0 0 0 0-2M6.17 5a3.001 3.001 0 0 1 5.66 0H19a1 1 0 1 1 0 2h-7.17a3.001 3.001 0 0 1-5.66 0H5a1 1 0 0 1 0-2zM15 11a1 1 0 1 0 0 2a1 1 0 0 0 0-2m-2.83 0a3.001 3.001 0 0 1 5.66 0H19a1 1 0 1 1 0 2h-1.17a3.001 3.001 0 0 1-5.66 0H5a1 1 0 1 1 0-2zM9 17a1 1 0 1 0 0 2a1 1 0 0 0 0-2m-2.83 0a3.001 3.001 0 0 1 5.66 0H19a1 1 0 1 1 0 2h-7.17a3.001 3.001 0 0 1-5.66 0H5a1 1 0 1 1 0-2z"/>
                        </svg>
                        Filter
                </button>
        </div>

        <div class="row row-cols-1 row-cols-md-4 my-2" style="padding-bottom: 2em;">
                @foreach ($workshop as $workshop)
                <div class="col">
                <a href="/bengkelDetail/{{$workshop->id}}" class="" style="text-decoration: none">
                  <div class="card h-100">
                    <img src="{{ Storage::url('/photos/'.$workshop->photo) }}"  style="padding: 1em 1em 0 1em;" class="card-img-top img-fluid" alt="{{ $workshop->name }}">
                    <div class="card-body border-bottom">
                      {{-- <h5>{{ $a->name }}</h5> --}}
                        <h5 class="card-title" style="font-size: 18px; font-weight: 600">{{$workshop->name}}</h3>
                        <div class="address d-flex justify-content-left align-items-center">
                                <div class="img-fluid" style="padding-right: 4%">
                                        <img src="{{ Storage::url('photos/mapsLogo.svg') }}" style="width:16px;" alt="{{ $workshop->name }}">
                                </div>
                                <div>
                                        {{$workshop->address}}
                                </div>
                        </div>
                      {{-- <p class="card-text">{{ $a->address }}</p> --}}
                    </div>
                    <div class="card-text d-flex justify-content-between m-3" style="">
                        <div class="card-text">
                                @foreach ($workshop->specialties as $s)
                                <small class="rounded-pill px-2 py-1" style="color: #0D5C63; border: 1px solid #0D5C63;">{{ $s->name }}</small>
                                @endforeach
                        </div>
                        <div class="card-text align-items-center">
                                <small class="" style="font-size: 16px; font-weight: 600; color: #052023">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="1.25em" height="1.25em" viewBox="0 0 24 24">
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
@endsection
