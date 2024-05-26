<head>
        <link rel="stylesheet" href="../public/css/style.css">
</head>

@section('title', $title)
@extends('layouts.main')
@section('container')
        @if (session('message'))
                <div class="alert alert-success main-content d-flex align-items-center" role="alert" style="font-weight: 600; border-radius: 0; padding: 0 94px;">
                        <svg xmlns="http://www.w3.org/2000/svg" style="margin-right: 0.4em" width="1.1em" height="1.1em" viewBox="0 0 24 24">
                                <path fill="#0D5C63" d="m10.6 16.6l7.05-7.05l-1.4-1.4l-5.65 5.65l-2.85-2.85l-1.4 1.4zM12 22q-2.075 0-3.9-.788t-3.175-2.137q-1.35-1.35-2.137-3.175T2 12q0-2.075.788-3.9t2.137-3.175q1.35-1.35 3.175-2.137T12 2q2.075 0 3.9.788t3.175 2.137q1.35 1.35 2.138 3.175T22 12q0 2.075-.788 3.9t-2.137 3.175q-1.35 1.35-3.175 2.138T12 22"/>
                        </svg>
                        {{ session('message') }}
                </div>
        @endif

        <div class="container py-4 px-0 m-auto" onload="save();">
            {{-- <h2 class="m-0" style="font-size: 28px; font-weight: 600;">Bengkel</h2> --}}
            @if ($filterSpecialty != 0 && $countFilter == 1)
                @foreach ($specialty as $s)
                    @foreach ($filterSpecialty as $filsp)
                        @if ($s->id == $filsp)
                        <h2 class="m-0" style="font-size: 28px; font-weight: 600;">Bengkel {{ $s->name }}</h2>
                        @endif
                    @endforeach
                @endforeach
            @else
                <h2 class="m-0" style="font-size: 28px; font-weight: 600;">Bengkel</h2>
            @endif

            <div class="d-flex justify-content-between py-3 px-0">
                <form class="m-0 w-50 d-flex align-items-center" role="search">
                    <div class="input-group">
                        <span class="input-group-text bg-white border-end-0"> <img style="width: 16px; height: 16px;" src="{{ url('photos/search.svg') }}" alt="Search"> </span>
                        <input class="form-control border-start-0 ps-0"  style="border-radius: 0 8px 8px 0;" type="search" placeholder="Nama, lokasi, merek mobil, atau spesialisasi bengkel" aria-label="Search" name="search" value="{{ $search }}">
                    </div>
                </form>

                <button class="btn px-3 d-inline-flex align-items-center" data-bs-toggle="modal" data-bs-target="#filterWorkshop" style="background-color: #0D5C63; color: white; font-weight: 600; border-radius: 8px;" type="#"  onclick="load_()">
                    <svg xmlns="http://www.w3.org/2000/svg" style="margin-right: 0.4em" width="1.25em" height="1.25em" viewBox="0 0 24 24">
                        <path fill="white" d="M9 5a1 1 0 1 0 0 2a1 1 0 0 0 0-2M6.17 5a3.001 3.001 0 0 1 5.66 0H19a1 1 0 1 1 0 2h-7.17a3.001 3.001 0 0 1-5.66 0H5a1 1 0 0 1 0-2zM15 11a1 1 0 1 0 0 2a1 1 0 0 0 0-2m-2.83 0a3.001 3.001 0 0 1 5.66 0H19a1 1 0 1 1 0 2h-1.17a3.001 3.001 0 0 1-5.66 0H5a1 1 0 1 1 0-2zM9 17a1 1 0 1 0 0 2a1 1 0 0 0 0-2m-2.83 0a3.001 3.001 0 0 1 5.66 0H19a1 1 0 1 1 0 2h-7.17a3.001 3.001 0 0 1-5.66 0H5a1 1 0 1 1 0-2z"/>
                    </svg>
                    Filter
                    @if ($countFilter != 0)
                        ({{$countFilter}})
                    @endif
                </button>

                <div class="modal fade" id="filterWorkshop" tabindex="-1" aria-labelledby="filterWorkshop" aria-hidden="true">
                    @php
                        $id = 0;
                    @endphp
                    <div class="modal-dialog modal-dialog-centered">
                        <div class="modal-content p-4">
                            <div class="modal-header p-0 border-0 d-flex justify-content-end">
                                <button class="btn p-0" style="border: none;" data-bs-dismiss="modal" aria-label="Close" role="button" type="button">
                                    <img src="{{ url('photos/img_x.svg') }}" style="padding: 4px; color: #0D5C63; border-radius: 50%; background-color: #E7EFEF;">
                                </button>
                            </div>
                                <div class="modal-body p-0 my-4">
                                    <form class="form-container m-0" action="/bengkel" method="get">
                                    <div class="d-flex justify-content-between" style="color: #052023;">
                                        <h2 style="font-weight: 600; font-size: 24px;">Filter</h2>
                                        <button class="btn btn-outline-dark px-3 py-0" style="font-size: 14px;" type="button" onclick="uncheckAll()">
                                            Atur ulang
                                        </button>
                                    </div>
                                    <div class="container p-0 m-0">
                                        <div class="row mx-auto">
                                            <div class="col-md-12 px-0 pb-4 border-bottom">
                                                <label for="subdictrict" class="form-label-md">Lokasi Bengkel</label>
                                                <select id="subdistrict" class="form-select form-control form-select-sm" name="subdistrict" placeholder="Wilayah">
                                                    <option value="">Semua Lokasi</option>
                                                        @foreach ($subdistrict as $sub)
                                                            @if ($sub->id == $filterSubdistrict)
                                                                <option value="{{ $sub->id }}" class="subd"selected>{{ $sub->name }}
                                                            @else
                                                                <option value="{{ $sub->id }}">{{ $sub->name }}
                                                            @endif
                                                        @endforeach
                                                </select>
                                            </div>
                                            <div class="col-md-12 px-0 py-4 border-bottom">
                                                <legend class="form-label-md mb-2">Spesialisasi Bengkel</legend>
                                                <div class="row row-cols-4 mx-auto">
                                                    @foreach ($specialty as $specialty)
                                                        <div class="col form-check">
                                                            @php
                                                                $trigger = 0;
                                                            @endphp
                                                            @if ($filterSpecialty != null)
                                                                @foreach ($filterSpecialty as $fspe)
                                                                    @if ($specialty->id == $fspe)
                                                                        @php
                                                                            $trigger++;
                                                                        @endphp
                                                                    @endif
                                                                @endforeach
                                                            @endif

                                                            @if ($trigger != 0)
                                                                <input class="form-check-input" type="checkbox" name="specialty[]" id="{{$id++}}" value="{{ $specialty->id }}" checked>
                                                            @else
                                                                <input class="form-check-input" type="checkbox" name="specialty[]" id="{{$id++}}" value="{{ $specialty->id }}">
                                                            @endif
                                                            <label class="form-check-label" for="{{ $specialty->label }}" >
                                                                {{ $specialty->name }}
                                                            </label>
                                                        </div>
                                                    @endforeach
                                                </div>
                                            </div>
                                            <div class="col-md-12 px-0 pt-4 pb-0">
                                                <legend class="form-label-md mb-2">Merek Mobil</legend>
                                                <div class="row row-cols-4 mx-auto">
                                                    @foreach ($brand as $brand)
                                                    <div class="col form-check">
                                                        @php
                                                            $trigger = 0;
                                                        @endphp
                                                        @if ($filterBrand != null)
                                                            @foreach ($filterBrand as $fbra)
                                                                @if ($brand->id == $fbra)
                                                                    @php
                                                                        $trigger++;
                                                                    @endphp
                                                                @endif
                                                            @endforeach
                                                        @endif
                                                        @if ($trigger != 0)
                                                            <input class="form-check-input" type="checkbox" name="brand[]" id="{{$id++}}" value="{{ $brand->id }}" checked>
                                                        @else
                                                            <input class="form-check-input" type="checkbox" name="brand[]" id="{{$id++}}" value="{{ $brand->id }}">
                                                        @endif
                                                            <label class="form-check-label" for="{{ $brand->label }}">
                                                                    {{ $brand->name }}
                                                            </label>
                                                    </div>
                                                    @endforeach
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="modal-footer border-0 d-flex justify-content-end gap-2 p-0">
                                    <button class="btn btn-primary w-100 py-2" style="font-size: 14px;" role="button" type="submit">
                                        Terapkan
                                    </button>
                                </div>
                        </div>
                    </div>
                    <script>
                        var i, checkboxes = document.querySelectorAll('input[type=checkbox]');
                        let trigger = 1;
                        let options = document.getElementById("subdistrict");

                        function uncheckAll() {
                            options.selectedIndex = 0;
                            for (i = 0; i < checkboxes.length; i++) {
                                // localStorage.setItem(checkboxes[i].id, checkboxes[i].checked);
                                checkboxes[i].checked = false;
                            }
                        }

                        function load_() {
                            if (trigger == '1') {
                                localStorage.setItem(options.id, options.selectedIndex)
                                for (i = 0; i < checkboxes.length; i++) {
                                    localStorage.setItem(checkboxes[i].id, checkboxes[i].checked);
                                }
                            }
                            trigger++;
                            options.selectedIndex = localStorage.getItem(options.id);
                            for (i = 0; i < checkboxes.length; i++) {
                                checkboxes[i].checked = localStorage.getItem(checkboxes[i].id) === 'true' ? true:false;
                            }
                        }
                    </script>
                </div>
            </div>

            <!--- Admin --->
            @if (Auth::user())
                @if (Auth::user()->role_id == 1)
                    <hr style="height:1px;border-width:0;color:gray;background-color:gray">
                    <div class="d-flex justify-content-end">
                        <a href="{{ url('/tambah-bengkel') }}" class="btn btn-outline-dark px-3 mt-2 mb-3 d-inline-flex align-items-center">
                            <svg xmlns="http://www.w3.org/2000/svg" style="margin-right: 0.4em" width="1em" height="1em" viewBox="0 0 256 256">
                                <path fill="052023" d="M228 128a12 12 0 0 1-12 12h-76v76a12 12 0 0 1-24 0v-76H40a12 12 0 0 1 0-24h76V40a12 12 0 0 1 24 0v76h76a12 12 0 0 1 12 12"/>
                            </svg>
                            Tambah Bengkel
                        </a>
                    </div>
                @endif
            @endif
                
            @if ($count == 0)
                <div class="d-flex justify-content-center align-items-center" style="min-height: 40vh;">Belum ada bengkel yang sesuai</div>
            @else
                <div class="row row-cols-1 row-cols-md-4 my-2" style="padding-bottom: 2em;">
                    @foreach ($workshops as $workshop)
                    <div class="col mb-4">
                    <a href="/bengkelDetail/{{ $workshop->id }}" class="" style="text-decoration: none">
                        <div class="card h-100">
                            <div style="padding: 1em 1em 0 1em;">
                                <img src="{{ url('storage/workshop/'.$workshop->photo) }}"  style="border-radius: 8px; object-fit: cover; width: 100vh; height: 152px;" class="card-img-top img-fluid" alt="{{ $workshop->name }}">
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

                <div class="d-flex justify-content-center mt-1 mb-3">
                    <ul class="pagination m-0">
                        <li class="page-item">
                            <a class="page-link" href="{{ $workshops->previousPageUrl() }}"><</a>
                        </li>
                        @for ($page = 1; $page <= $workshops->lastPage(); $page++)
                            @if ($page == $workshops->currentPage())
                                <li class="page-item-active">
                                    <a class="page-link" href="{{ $workshops->url($page) }}">{{ $page }}</a>
                                </li>
                            @else
                                <li class="page-item">
                                    <a class="page-link" href="{{ $workshops->url($page) }}">{{ $page }}</a>
                                </li>
                            @endif
                        @endfor
                        <li class="page-item">
                            <a class="page-link" href="{{ $workshops->nextPageUrl() }}">></a>
                        </li>
                    </ul>
                </div>
                <p class="d-flex justify-content-center">Menampilkan {{ $begin }} sampai {{ $end }} dari {{ $count }} hasil</p>
            @endif
        </div>

@endsection


<style>
        .col-md-12 {
                padding: 1em 0 2em 0;
        }
        .form-select {
            font-size: 14px !important;
        }
        .form-check-label, option {
                font-size: 16px;
                color: #303030;
        }
</style>
