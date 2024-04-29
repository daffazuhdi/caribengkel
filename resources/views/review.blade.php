@extends('layouts.main')
@section('title', $workshop->name)
@section('container')
<div class="container pb-4 px-0 m-auto">
    <div class="showRating d-flex mt-4 mb-1">
        <svg xmlns="http://www.w3.org/2000/svg" width="1.25em" height="1.25em" viewBox="0 0 24 24">
            <path fill="#fac45b" d="m5.825 21l1.625-7.025L2 9.25l7.2-.625L12 2l2.8 6.625l7.2.625l-5.45 4.725L18.175 21L12 17.275z"/>
        </svg>
        <h5 style="padding-right: 0.5%;padding-left: 0.2%">{{number_format($rate, 1)}}</h5>
        <h5 style="padding-right: 0.5%;">•</h5>
        <h5>{{$countUlasan}} Ulasan</h5>
    </div>
    <div class="containerAllRate d-flex" style="justify-content: space-between">
        <div class="row d-flex gap-2 m-0">
            @foreach ($workshop->specialties as $ws)
            <div class="col col-md-auto p-0" style="min-width: 86px;">
                <div class="card m-0 p-2 h-100">
                <div class="card-body d-flex flex-column justify-content-between" style="padding:0.5rem">
                    <div class="card-title m-0" style="font-weight: 500;">{{ $ws->name }}</div>
                    <div class="mb-4">
                    <h7 class="card-subtitle text-muted" style="font-weight: 500;">
                        @foreach ($spesialisasiRate as $sr)
                            @if ($ws->id === $sr->specialty_id)
                                {{ number_format($sr->avgrate,1) }}
                            @endif
                        @endforeach
                    </h7>
                    </div>
                    <div>
                    <img src="{{ url('photos/'.$ws->logo) }}">
                    </div>
                </div>
                </div>
            </div>
            @endforeach
        </div>
        <div class="containerButton d-flex align-items-end gap-2">
            @if (Auth::user())
            <div class="">
                <a href="/writeReview/{{ $workshop->id }}" type="button" class="btn btn-primary py-1" style="font-size: 14px;">Tulis Ulasan</a>
            </div>
            @else
            <div class="">
                <button type="button" class="btn btn-primary py-1" data-bs-toggle="modal" data-bs-target="#loginFirst">
                    Tulis Ulasan
                </button>
                <!-- Modal -->
                <div class="modal fade" id="loginFirst" tabindex="-1" aria-labelledby="loginFirst" aria-hidden="true">
                    <div class="modal-dialog modal-dialog-centered">
                        <div class="modal-content p-4">
                            <div class="modal-header p-0 border-0">
                                <h5 class="modal-title" style="font-weight: 600;" id="deleteCar">Masuk Akun Terlebih Dahulu</h5>
                            </div>
                            <div class="modal-body p-0 mt-1 mb-4">
                                <p class="m-0">Apabila ingin membuat ulasan, silahkan masuk akun terlebih dahulu.</p>
                            </div>
                            <div class="modal-footer border-0 d-flex justify-content-end gap-2 p-0">
                                <button type="button" class="btn btn-outline-dark px-3" data-bs-dismiss="modal">Batal</button>
                                <a href="/masuk"><button type="button" class="btn btn-primary">Masuk</button></a>
                            </div>
                            </div>
                    </div>
                </div>

                  {{-- <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true" >
                    <div class="modal-dialog modal-dialog-centered">
                      <div class="modal-content">
                        <div class="modal-header">
                          <h5 class="modal-title" id="exampleModalLabel">Masuk Akun Terlebih Dahulu</h5>
                          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                        </div>
                        <div class="modal-body">
                            Apabila ingin membuat ulasan, silahkan masuk akun terlebih dahulu.
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-outline-dark px-3" data-bs-dismiss="modal">Batal</button>
                          <a href="/masuk"><button type="button" class="btn btn-primary">Masuk</button></a>
                        </div>
                      </div>
                    </div>
                  </div> --}}
            </div>
            @endif
            <div class="">
                <a href="" type="button" class="btn btn-outline-dark py-1 dropdown-toggle" role="button" data-bs-toggle="dropdown" aria-expanded="false" style="font-size:14px;">Urutkan</a>
                <ul class="dropdown-menu">
                    <form action="/review/{{ $workshop->id }}" method="POST">
                        <li><a class="dropdown-item" href="/review/{{ $workshop->id }}/{{'newest'}}" id="ulasanTerbaru" name="ulasanTerbaru" value="ulasanTerbaru">Ulasan Terbaru</a></li>
                        <li><a class="dropdown-item" href="/review/{{ $workshop->id }}/{{'hightolow'}}" id="tinggikeRendah" name="tinggikeRendah" value="tinggikeRendah">Rating (Tinggi ke Rendah)</a></li>
                        <li><a class="dropdown-item" href="/review/{{ $workshop->id }}/{{'lowtohigh'}}" id="rendahkeTinggi" name="rendahkeTinggi" value="rendahkeTinggi">Rating (Rendah ke Tinggi)</a></li>
                    </form>
                </ul>
            </div>
        </div>
    </div>

    <div class="row row-cols-1 row-cols-md-3 g-4 py-4 px-0">
        @foreach ($ratingDetail as $wr)
            <div class="col">
                <div class="card h-100">
                <div class="card-body d-flex flex-column justify-content-between">
                    <div class="cardTop d-flex" style="justify-content:space-between">
                        <h6 class="card-title">{{ $wr->user->first_name }} {{ $wr->user->last_name }}</h6>
                        <div class="cardRating d-flex px-1">
                            <svg xmlns="http://www.w3.org/2000/svg" width="1.2em" height="1.2em" viewBox="0 0 24 24" style="margin-right: 10%">
                                <path fill="#fac45b" d="m5.825 21l1.625-7.025L2 9.25l7.2-.625L12 2l2.8 6.625l7.2.625l-5.45 4.725L18.175 21L12 17.275z"/>
                            </svg>
                            <h6 class="card-title">{{ number_format($wr->rate, 1) }}</h6>
                        </div>
                    </div>
                    <div class="card-text h-100">
                        <p>{{ $wr->comment }}</p>
                    </div>
                    <div class="">
                        <p class="card-text text-muted" style="font-size: 14px;">{{ $wr->created_at->format('j F Y') }}</p>
                        @if ($wr->specialty_id != 0)
                            <small class="rounded-pill px-2 py-1" style="color: #0D5C63; border: 1px solid #0D5C63;">{{ $wr->specialty->name }}</small>
                        @else
                            <small class="rounded-pill px-2 py-1" style="color: #0D5C63; border: 1px solid #0D5C63;">Fasilitas</small>
                        @endif

                    </div>
                </div>
                </div>
            </div>
        @endforeach
    </div>
        {{-- {{$spesialisasiRate->avgrate}} --}}
    </div>
</div>
@endsection


{{-- $('#myModal').on('shown.bs.modal', function () {
    $('#myInput').trigger('focus')
  }) --}}

