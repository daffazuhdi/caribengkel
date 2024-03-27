@extends('layouts.main')
@section('title', $workshop->name)
@section('container')
<div class="container py-4 px-0 m-auto">
    <div class="showRating d-flex my-0">
        <svg xmlns="http://www.w3.org/2000/svg" width="1.7em" height="2em" viewBox="0 0 24 24">
            <path fill="#fac45b" d="m5.825 21l1.625-7.025L2 9.25l7.2-.625L12 2l2.8 6.625l7.2.625l-5.45 4.725L18.175 21L12 17.275z"/>
        </svg>
        <h3 style="padding-right: 0.5%;padding-left: 0.2%">{{number_format($rate, 1)}}</h3>
        <h3 style="padding-right: 0.5%;">•</h3>
        <h3>{{$countUlasan}} Ulasan</h3>
  </div>
  <div class="containerAllRate d-flex" style="justify-content: space-between">
    <div class="row row-cols-1 row-cols-md-6 m-1">
        @foreach ($workshop->specialties as $ws)
        <div class="col p-0 m-1" style="width: 7rem;padding-right:0%">
            <div class="card d-flex m-0 p-2 h-100">
            <div class="card-body" style="padding:0.5rem">
                <h6 class="card-title">{{$ws->name}}</h6>
                <h7 class="card-subtitle mb-2 text-muted">
                    @foreach ($spesialisasiRate as $sr)
                        @if ($ws->id === $sr->specialty_id)
                            {{number_format($sr->avgrate,1)}}
                        @endif
                    @endforeach
                </h7>
            </div>
            </div>
        </div>
        @endforeach
    </div>
        <div class="containerButton d-flex">
            @if (Auth::user())
            <div class="d-grid gap-4">
                <a href="/writeReview/{{ $workshop->id }}" type="button" class="btn btn-success py-1" style="background-color: #0D5C63; border-radius: 8px;height: 2rem;margin-top:5.5rem;margin-right:0.5rem;width:8rem">Tulis Ulasan</a>
            </div>
            @else
            <div class="d-grid gap-4">
                <button type="button" class="btn btn-primary py-1" data-bs-toggle="modal" data-bs-target="#exampleModal" style="background-color: #0D5C63; border-radius: 8px;height: 2rem;margin-top:5.5rem;margin-right:0.5rem;width:8rem">
                    Tulis Ulasan
                  </button>
                  <!-- Modal -->
                  <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true" >
                    <div class="modal-dialog modal-dialog-centered">
                      <div class="modal-content">
                        <div class="modal-header">
                          <h5 class="modal-title" id="exampleModalLabel">Masuk Akun Terlebih Dahulu</h5>
                          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                        </div>
                        <div class="modal-body">
                            Apabila kamu ingin membuat ulasan, silahkan masuk akun terlebih dahulu.
                        </div>
                        <div class="modal-footer">
                          <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Batal</button>
                          <a href="/masuk"><button type="button" class="btn btn-primary">Masuk</button></a>
                        </div>
                      </div>
                    </div>
                  </div>
            </div>
            @endif
            <div class="d-grid gap-4">
                <a href="" type="button" class="btn btn-success py-1 dropdown-toggle" role="button" data-bs-toggle="dropdown" aria-expanded="false" style="background-color: white; color:black;border-color:black;border-radius: 8px;height: 2rem;margin-top:5.5rem;margin-right:0.5rem;width:8rem">Urutkan</a>
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

    <div class="row row-cols-1 row-cols-md-3 g-4 py-4 px-2">
        @foreach ($ratingDetail as $wr)
            <div class="col">
                <div class="card h-100">
                    <div class="card-body">
                    <div class="cardTop d-flex" style="justify-content:space-between">
                        <h6 class="card-title">{{$wr->user->first_name}} {{$wr->user->last_name}}</h6>
                        <div class="cardRating d-flex px-1">
                            <svg xmlns="http://www.w3.org/2000/svg" width="1.2em" height="1.2em" viewBox="0 0 24 24" style="margin-right: 10%">
                                <path fill="#fac45b" d="m5.825 21l1.625-7.025L2 9.25l7.2-.625L12 2l2.8 6.625l7.2.625l-5.45 4.725L18.175 21L12 17.275z"/>
                            </svg>
                            <h6 class="card-title">{{number_format($wr->rate, 1)}}</h6>
                        </div>
                    </div>
                    <p class="card-text">{{$wr->comment}}</p>
                    <p class="card-text text-muted">{{$wr->created_at->format('d M Y')}}</p>
                    <small class="rounded-pill px-2 py-1" style="color: #0D5C63; border: 1px solid #0D5C63;">{{$wr->specialty->name}}</small>
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
