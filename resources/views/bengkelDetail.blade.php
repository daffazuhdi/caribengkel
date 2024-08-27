@extends('layouts.main')
@section('title', $workshop->name)
@section('container')
  <div class="container py-4 px-4 m-auto">
    <div class="fotoBengkel">
      <img src="{{ url('storage/workshop/'.$workshop->photo) }}" class="img-fluid w-100 mx-auto" alt="Responsive image" style="border-radius: 4px; object-fit: cover; height: 60vh;">
    </div>
    <div class="containerInformationCard my-4" style="display: flex;justify-content:space-between">
        <div class="information w-100">
          @auth
            @if(Auth::user()->role_id == 1)
                <div class="d-flex justify-content-between">
                  <h4 style="font-weight: 600; margin: 0;font-size: min(5vw, 20px)">{{ $workshop->name }}</h4>
                  <div class="d-flex justify-content-left align-items-center gap-2">
                      <a href="/ubah-bengkel/{{ $workshop->id }}" class="btn btn-outline-dark px-3">
                        <img src="{{ url('photos/edit.svg') }}" width="16px;">
                      </a>
                      <button class="btn btn-danger" data-bs-toggle="modal" data-bs-target="#deleteWorkshop" style="padding: 6px 17px;">
                        <img src="{{ url('photos/delete.svg') }}" width="14px;">
                      </button>
                      <!-- Modal -->
                      <div class="modal fade" id="deleteWorkshop" tabindex="-1" aria-labelledby="deleteWorkshop" aria-hidden="true">
                        <div class="modal-dialog modal-dialog-centered">
                          <div class="modal-content p-4">
                            <div class="modal-header p-0 border-0">
                              <h5 class="modal-title" style="font-weight: 600;" id="deleteWorkshop">Hapus Bengkel?</h5>
                            </div>
                            <div class="modal-body p-0 mt-1 mb-4">
                              <p class="m-0">Kamu akan secara permanen menghapus bengkel ini.</p>
                            </div>
                            <div class="modal-footer border-0 d-flex justify-content-end gap-2 p-0">
                              <button type="button" class="btn btn-outline-dark px-3" data-bs-dismiss="modal">Batal</button>
                              <form class="m-0" action="/bengkel-detail/{{ $workshop->id }}" method="post">
                                @csrf
                                <button class="btn btn-danger px-3" type="submit">Hapus</button>
                              </form>
                            </div>
                          </div>
                        </div>
                      </div>
                  </div>
                </div>
            @elseif(Auth::user()->role_id == 2)
                <h4 style="font-weight: 600;font-size: min(5vw, 20px)">{{ $workshop->name }}</h4>
            @elseif(Auth::user()->role_id == 3)
                @if($workshop->is_approved == 1)
                    <div class="d-flex justify-content-between">
                        <h4 style="font-weight: 600; margin: 0;font-size: min(5vw, 20px)">{{ $workshop->name }}</h4>
                        <div class="d-flex justify-content-left align-items-center gap-2">
                            <a href="/ubah-bengkel/{{ $workshop->id }}" class="btn btn-outline-dark px-3">
                            <img src="{{ url('photos/edit.svg') }}" width="16px;">
                            </a>
                            <button class="btn btn-danger" data-bs-toggle="modal" data-bs-target="#deleteWorkshop" style="padding: 6px 17px;">
                            <img src="{{ url('photos/delete.svg') }}" width="14px;">
                            </button>
                            <!-- Modal -->
                            <div class="modal fade" id="deleteWorkshop" tabindex="-1" aria-labelledby="deleteWorkshop" aria-hidden="true">
                            <div class="modal-dialog modal-dialog-centered">
                                <div class="modal-content p-4">
                                <div class="modal-header p-0 border-0">
                                    <h5 class="modal-title" style="font-weight: 600;" id="deleteWorkshop">Hapus Bengkel?</h5>
                                </div>
                                <div class="modal-body p-0 mt-1 mb-4">
                                    <p class="m-0">Kamu akan secara permanen menghapus bengkel ini.</p>
                                </div>
                                <div class="modal-footer border-0 d-flex justify-content-end gap-2 p-0">
                                    <button type="button" class="btn btn-outline-dark px-3" data-bs-dismiss="modal">Batal</button>
                                    <form class="m-0" action="/bengkel-detail/{{ $workshop->id }}" method="post">
                                    @csrf
                                    <button class="btn btn-danger px-3" type="submit">Hapus</button>
                                    </form>
                                </div>
                                </div>
                            </div>
                            </div>
                        </div>
                    </div>
                {{-- ini kalo si bengkel belom ke verified / masi waiting for approval --}}
                @elseif($workshop->is_approved == 0)
                    <div class="d-flex justify-content-between">
                        <h4 style="font-weight: 600; margin: 0;font-size: min(5vw, 20px)">{{ $workshop->name }}</h4>
                        <div class="d-flex justify-content-left align-items-center gap-2">

                            <a href="/terima-bengkel/{{ $workshop->id }}" class="btn btn-success px-3">
                            {{-- <img src="{{ url('photos/edit.svg') }}" width="16px;"> --}}
                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 8 8"><path fill="white" d="m6.41 1l-.69.72L2.94 4.5l-.81-.78L1.41 3L0 4.41l.72.72l1.5 1.5l.69.72l.72-.72l3.5-3.5l.72-.72z"/></svg>
                            </a>
                            <button class="btn btn-danger" data-bs-toggle="modal" data-bs-target="#rejectWorkshop" style="padding: 6px 17px;">
                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 8 8"><path fill="white" d="M1.41 0L0 1.41l.72.72L2.5 3.94L.72 5.72L0 6.41l1.41 1.44l.72-.72l1.81-1.81l1.78 1.81l.69.72l1.44-1.44l-.72-.69l-1.81-1.78l1.81-1.81l.72-.72L6.41 0l-.69.72L3.94 2.5L2.13.72z"/></svg>
                            </button>
                            <!-- Modal -->
                            <div class="modal fade" id="rejectWorkshop" tabindex="-1" aria-labelledby="rejectWorkshop" aria-hidden="true">
                            <div class="modal-dialog modal-dialog-centered">
                                <div class="modal-content p-4">
                                <div class="modal-header p-0 border-0">
                                    <h5 class="modal-title" style="font-weight: 600;" id="rejectWorkshop">Tolak Bengkel?</h5>
                                </div>
                                <div class="modal-body p-0 mt-1 mb-4">
                                    <p class="m-0">Kamu akan menolak bengkel ini.</p>
                                </div>
                                <div class="modal-footer border-0 d-flex justify-content-end gap-2 p-0">
                                    <button type="button" class="btn btn-outline-dark px-3" data-bs-dismiss="modal">Batal</button>
                                    <form class="m-0" action="/tolak-bengkel/{{ $workshop->id }}" method="post">
                                    @csrf
                                    <button class="btn btn-danger px-3" type="submit">Hapus</button>
                                    </form>
                                </div>
                                </div>
                            </div>
                            </div>
                        </div>
                    </div>
                @endif
            @endauth
            @else
                <h4 style="font-weight: 600;font-size: min(5vw, 22px)">{{ $workshop->name }}</h4>
            @endif
            <div class="address d-flex justify-content-left align-items-center gap-3 mb-2 mt-3">
                <div class="img-fluid">
                    <img src="{{ url('photos/mapsLogo.svg') }}" style="width:18px;" alt="...">
                </div>
                <div class="bengkel-detail-address">
                    <p class="m-0" style="font-weight: 400; font-size: 100%">{{ $workshop->address }}</p>
                </div>
            </div>
            {{-- <div class="d-flex justify-content-left align-items-center" style="gap: 0.7rem;">
                <div class="img-fluid">
                    <img src="{{ url('photos/whatsappLogo.svg') }}" alt="..." style="width:22px;">
                </div>
                <div>
                    <p class="m-0" style="font-size: 18px; font-weight: 400;">{{ $workshop->phone_number }}</p>
                </div>
            </div> --}}
        </div>
        @auth
            @if(Auth::user()->role_id == 2)
                <div class="cardService w-50">
                    <div class="card " >
                        <div class="card-body">
                            <h5 class="card-title" style="padding-left:1%; font-size: 100%; font-weight: 600;">Ingin Servis?</h5>
                            <h6 class="card-subtitle mb-2 text-body-secondary" style="padding-left:1%">Lakukan penjadwalan sekarang</h6>
                            <div class="d-grid gap-2">
                                <a href="https://api.whatsapp.com/send?phone={{$workshop->phone_number}}&text=Halo%2C%20{{ $workshop->name }}.%0ASaya%20dari%20CariBengkel%20ingin%20melakukan%20booking%20service%20atas%20nama%20{{ Auth::user()->first_name }}%20{{ Auth::user()->last_name }}.%20" class="btn btn-primary" style="background-color: #0D5C63;color:white;text-decoration:none;">Jadwalkan Servis Sekarang</a>
                            </div>
                        </div>
                    </div>
                </div>
            @endauth
            @else
            <div class="cardService w-50">
                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title" style="padding-left:1%; font-size: 100%; font-weight: 600;">Ingin Servis?</h5>
                        <h6 class="card-subtitle mb-2 text-body-secondary" style="padding-left:1%; font-size: 90%">Lakukan penjadwalan sekarang</h6>
                        <div class="d-grid gap-2">
                            <button class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#loginFirst" style="background-color: #0D5C63;color:white;text-decoration:none; font-size: 90%">Jadwalkan Servis Sekarang</button>
                            <div class="modal fade" id="loginFirst" tabindex="-1" aria-labelledby="loginFirst" aria-hidden="true">
                                <div class="modal-dialog modal-dialog-centered">
                                    <div class="modal-content p-4">
                                        <div class="modal-header p-0 border-0">
                                            <h5 class="modal-title" style="font-weight: 600;" id="deleteCar">Masuk Akun Terlebih Dahulu</h5>
                                        </div>
                                        <div class="modal-body p-0 mt-1 mb-4">
                                            <p class="m-0">Apabila ingin melakukan penjadwalan bengkel, silahkan masuk akun terlebih dahulu.</p>
                                        </div>
                                        <div class="modal-footer border-0 d-flex justify-content-end gap-2 p-0">
                                            <button type="button" class="btn btn-outline-dark px-3" data-bs-dismiss="modal">Batal</button>
                                            <a href="/masuk"><button type="button" class="btn btn-primary">Masuk</button></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            @endif
        </div>
        {{-- <div class="d-block d-md-none justify-content-center">
            @auth
            @if(Auth::user()->role_id == 2)
                <div class="cardService d-block d-md-none">
                    <div class="card " >
                        <div class="card-body">
                            <h5 class="card-title" style="padding-left:1%; font-size: 100%; font-weight: 600;">Ingin Servis?</h5>
                            <h6 class="card-subtitle mb-2 text-body-secondary" style="padding-left:1%">Lakukan penjadwalan sekarang</h6>
                            <div class="d-grid gap-2">
                                <a href="https://api.whatsapp.com/send?phone={{$workshop->phone_number}}&text=Halo%2C%20{{ $workshop->name }}.%0ASaya%20dari%20CariBengkel%20ingin%20melakukan%20booking%20service%20atas%20nama%20{{ Auth::user()->first_name }}%20{{ Auth::user()->last_name }}.%20" class="btn btn-primary" style="background-color: #0D5C63;color:white;text-decoration:none;">Jadwalkan Servis Sekarang</a>
                            </div>
                        </div>
                    </div>
                </div>
            @endauth
            @else
            <div class="cardService d-block d-md-none">
                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title" style="padding-left:1%; font-size: 100%; font-weight: 600;">Ingin Servis?</h5>
                        <h6 class="card-subtitle mb-2 text-body-secondary" style="padding-left:1%; font-size: 90%">Lakukan penjadwalan sekarang</h6>
                        <div class="d-grid gap-2">
                            <button class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#loginFirst" style="background-color: #0D5C63;color:white;text-decoration:none; font-size: 90%">Jadwalkan Servis Sekarang</button>
                            <div class="modal fade" id="loginFirst" tabindex="-1" aria-labelledby="loginFirst" aria-hidden="true">
                                <div class="modal-dialog modal-dialog-centered">
                                    <div class="modal-content p-4">
                                        <div class="modal-header p-0 border-0">
                                            <h5 class="modal-title" style="font-weight: 600;" id="deleteCar">Masuk Akun Terlebih Dahulu</h5>
                                        </div>
                                        <div class="modal-body p-0 mt-1 mb-4">
                                            <p class="m-0">Apabila ingin melakukan penjadwalan bengkel, silahkan masuk akun terlebih dahulu.</p>
                                        </div>
                                        <div class="modal-footer border-0 d-flex justify-content-end gap-2 p-0">
                                            <button type="button" class="btn btn-outline-dark px-3" data-bs-dismiss="modal">Batal</button>
                                            <a href="/masuk"><button type="button" class="btn btn-primary">Masuk</button></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            @endif
        </div> --}}
        <hr style="height:1px;border-width:0;color:gray;background-color:gray">

        <ul class="nav nav-tabs" id="myTab" role="tablist" style="background:none;border:none">
        <li class="nav-item" role="presentation">
            <button class="nav-link active" id="tentang-tab" data-bs-toggle="tab" data-bs-target="#tentang" type="button" role="tab" aria-controls="tentang" aria-selected="true" style="margin-bottom: 5%; font-size:100%">Tentang</button>
        </li>
        <li class="nav-item" role="presentation">
            <button class="nav-link" id="fasilitas-tab" data-bs-toggle="tab" data-bs-target="#fasilitas" type="button" role="tab" aria-controls="fasilitas" aria-selected="false" style="margin-bottom: 5%; font-size:100%">Fasilitas</button>
        </li>
        <li class="nav-item" role="presentation">
            <button class="nav-link" id="merekmobil-tab" data-bs-toggle="tab" data-bs-target="#merekmobil" type="button" role="tab" aria-controls="merekmobil" aria-selected="false" style="margin-bottom: 5%; font-size:100%">Merek Mobil</button>
        </li>
        <li class="nav-item" role="presentation">
            <button class="nav-link" id="waktuoperasional-tab" data-bs-toggle="tab" data-bs-target="#waktuoperasional" type="button" role="tab" aria-controls="waktuoperasional" aria-selected="false" style="margin-bottom: 5%; font-size:100%">Waktu Operasional</button>
        </li>
        <li class="nav-item" role="presentation">
            <button class="nav-link" id="hargalayanan-tab" data-bs-toggle="tab" data-bs-target="#hargalayanan" type="button" role="tab" aria-controls="hargalayanan" aria-selected="false" style="margin-bottom: 5%; font-size:100%">Harga Layanan</button>
        </li>
        </ul>

        <div class="tab-content" id="myTabContent">
            <div class="bengkel-detail-tab tab-pane fade show active" id="tentang" role="tabpanel" aria-labelledby="tentang-tab" style="padding: 1%">
                <h6 style="padding-top:1%;padding-bottom:2%">{{ $workshop->about }}</h6>
                <div class="location">
                    @if ($workshop->location != null)
                        <p><iframe src="{{ $workshop->location }}" width="400" height="300" style="border:0;width:100%" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe></p>
                    @else
                        <p><iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3966.2971198600335!2d106.64732441476916!3d-6.224498995494186!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e69fb20a9906e13%3A0xf75c5296d0a385e4!2sBINUS%20UNIVERSITY%2C%20Kampus%20Alam%20Sutera!5e0!3m2!1sen!2sid!4v1623678826710!5m2!1sen!2sid" width="400" height="300" style="border:0;width:100%" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe></p>
                    @endif
                </div>
            </div>
            <div class="bengkel-detail-tab tab-pane fade" id="fasilitas" role="tabpanel" aria-labelledby="fasilitas-tab" style="padding: 1%">
                <h6 style="padding-top:1%;padding-bottom:2%">Berikut merupakan fasilitas yang disediakan oleh bengkel untuk kenyamanan para pelanggan:</h6>
                @if ($countFac < 7)
                    @foreach ($workshop->facilities as $w)
                        <p>• {{ $w->name }}</p>
                    @endforeach
                @else
                <div class="row">
                    @php
                        $col = 0;
                    @endphp
                    @foreach ($workshop->facilities as $w)
                    <div class="col-lg-2">
                            <p>• {{ $w->name }}</p>
                    </div>
                    @php
                        $col++;
                    @endphp
                    @if ($col % 4 == 0)
                        <div class="w-100"></div>
                    @endif
                    @endforeach

                </div>
                @endif

            </div>
            <div class="bengkel-detail-tab tab-pane fade" id="merekmobil" role="tabpanel" aria-labelledby="merekmobil-tab" style="padding: 1%">
                <h6 style="padding-top:1%;padding-bottom:2%">Berikut merupakan merek mobil yang dapat dikerjakan oleh bengkel ini:</h6>
                {{-- <div class="d-flex flex-sm-column"> --}}
                @if ($countCB < 7)
                    @foreach ($workshop->car_brands as $w)
                        <p>• {{ $w->name }}</p>
                    @endforeach
                @else
                    <div class="row">
                        @php
                            $col = 0;
                        @endphp
                        @foreach ($workshop->car_brands as $w)
                        <div class="col-lg-2">
                                <p>• {{ $w->name }}</p>
                        </div>
                        @php
                            $col++;
                        @endphp
                        @if ($col % 4 == 0)
                            <div class="w-100"></div>
                        @endif
                        @endforeach

                    </div>
                @endif

                {{-- </div> --}}
            </div>
            <div class="bengkel-detail-tab tab-pane fade" id="waktuoperasional" role="tabpanel" aria-labelledby="waktuoperasional-tab" style="padding-top: 2%">
                <table class="table table-bordered mb-5">
                    <thead>
                        <tr>
                        <th scope="col">Senin</th>
                        <th scope="col">Selasa</th>
                        <th scope="col">Rabu</th>
                        <th scope="col">Kamis</th>
                        <th scope="col">Jumat</th>
                        <th scope="col">Sabtu</th>
                        <th scope="col">Minggu</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                        @foreach ($workshop->workhours as $wh)
                            <td>{{ $wh->working_hour }}</td>
                        @endforeach
                        </tr>
                    </tbody>
                </table>
            </div>
            <div class="bengkel-detail-tab tab-pane fade" id="hargalayanan" role="tabpanel" aria-labelledby="hargalayanan-tab" style="padding-top: 2%">
                <table class="table table-bordered mb-5">
                    <thead>
                        <tr>
                        <th scope="col">Layanan</th>
                        <th scope="col">Harga</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($workshop->prices as $wp)
                            <tr>
                                <td>{{ $wp->service->name }}</td>
                                <td>{{ $wp->price }}</td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>

        <div class="showRating d-flex mt-4 mb-2">
            <svg  class="mr-1 mb-1" xmlns="http://www.w3.org/2000/svg" width="1.25em" height="1.25em" viewBox="0 0 24 24">
                <path fill="#fac45b" d="m5.825 21l1.625-7.025L2 9.25l7.2-.625L12 2l2.8 6.625l7.2.625l-5.45 4.725L18.175 21L12 17.275z"/>
            </svg>
            <h5 class="mx-1 mb-1">{{ number_format($rate, 1) }}</h5>
            <h5 class="mx-1 mb-1">•</h5>
            <h5 class="mx-1 mb-1">{{ $countUlasan }} Ulasan</h5>
        </div>
        <div class="containerAllRate d-flex align-items-end justify-content-between">
            <div class="specialtyCard-detail row d-flex gap-2 m-0">
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
            <div class="lihat-semua-detail justify-content-end d-none d-md-flex gap-2">
                @if (Auth::user())
                    <a href="/tulis-ulasan/{{ $workshop->id }}" type="button" class="btn btn-primary d-flex justify-content-start" style="font-size: 14px">
                        <svg xmlns="http://www.w3.org/2000/svg"  style="margin-right: 0.4em" width="1.4em" height="1.4em" viewBox="0 0 24 24">
                            <path fill="white" fill-rule="evenodd" d="M17.907 4.93c.104-.105.294-.186.539-.18a.85.85 0 0 1 .572.216c.13.13.222.34.231.575s-.065.413-.167.515l-7.49 7.5l-1.273.116l.1-1.245zm2.173-1.024c-.437-.438-1.037-.643-1.6-.656s-1.182.167-1.635.62l-7.682 7.692a.75.75 0 0 0-.217.47l-.194 2.407a.75.75 0 0 0 .816.807l2.43-.22a.75.75 0 0 0 .463-.218l7.682-7.692c.456-.456.627-1.073.605-1.635a2.37 2.37 0 0 0-.668-1.575M5.812 4.75a2.57 2.57 0 0 0-2.563 2.562v10.875a2.57 2.57 0 0 0 2.563 2.563h10.875a2.57 2.57 0 0 0 2.563-2.562V12.75a.75.75 0 0 0-1.5 0v5.438c0 .582-.48 1.062-1.063 1.062H5.812c-.583 0-1.063-.48-1.063-1.062V7.312c0-.582.48-1.062 1.063-1.062h5.437a.75.75 0 0 0 0-1.5z" clip-rule="evenodd"/>
                        </svg>
                        Tulis Ulasan</a>
                @else
                    <button type="button" class="btn btn-primary d-flex justify-content-start" data-bs-toggle="modal" data-bs-target="#loginFirstUlasan1" style="font-size: 14px">
                        <svg xmlns="http://www.w3.org/2000/svg"  style="margin-right: 0.4em" width="1.4em" height="1.4em" viewBox="0 0 24 24">
                            <path fill="white" fill-rule="evenodd" d="M17.907 4.93c.104-.105.294-.186.539-.18a.85.85 0 0 1 .572.216c.13.13.222.34.231.575s-.065.413-.167.515l-7.49 7.5l-1.273.116l.1-1.245zm2.173-1.024c-.437-.438-1.037-.643-1.6-.656s-1.182.167-1.635.62l-7.682 7.692a.75.75 0 0 0-.217.47l-.194 2.407a.75.75 0 0 0 .816.807l2.43-.22a.75.75 0 0 0 .463-.218l7.682-7.692c.456-.456.627-1.073.605-1.635a2.37 2.37 0 0 0-.668-1.575M5.812 4.75a2.57 2.57 0 0 0-2.563 2.562v10.875a2.57 2.57 0 0 0 2.563 2.563h10.875a2.57 2.57 0 0 0 2.563-2.562V12.75a.75.75 0 0 0-1.5 0v5.438c0 .582-.48 1.062-1.063 1.062H5.812c-.583 0-1.063-.48-1.063-1.062V7.312c0-.582.48-1.062 1.063-1.062h5.437a.75.75 0 0 0 0-1.5z" clip-rule="evenodd"/>
                        </svg>
                        Tulis Ulasan</button>
                    <!-- Modal -->
                    <div class="modal fade" id="loginFirstUlasan1" tabindex="-1" aria-labelledby="loginFirstUlasan1" aria-hidden="true">
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
                @endif
                <a href="/ulasan/{{ $workshop->id }}" type="button" class="btn btn-outline-dark d-flex justify-content-start" style="font-size: 14px;">Lihat Semua Ulasan</a>
            </div>
        </div>
        <div class="tulis-ulasan d-block d-md-none pt-4">
            @if (Auth::user())
                <a href="/tulis-ulasan/{{ $workshop->id }}" type="button" class="btn btn-primary w-100" style="font-size: 14px;">
                    <svg xmlns="http://www.w3.org/2000/svg"  style="margin-right: 0.4em" width="1.495em" height="1.44em" viewBox="0 0 24 24">
                        <path fill="white" fill-rule="evenodd" d="M17.907 4.93c.104-.105.294-.186.539-.18a.85.85 0 0 1 .572.216c.13.13.222.34.231.575s-.065.413-.167.515l-7.49 7.5l-1.273.116l.1-1.245zm2.173-1.024c-.437-.438-1.037-.643-1.6-.656s-1.182.167-1.635.62l-7.682 7.692a.75.75 0 0 0-.217.47l-.194 2.407a.75.75 0 0 0 .816.807l2.43-.22a.75.75 0 0 0 .463-.218l7.682-7.692c.456-.456.627-1.073.605-1.635a2.37 2.37 0 0 0-.668-1.575M5.812 4.75a2.57 2.57 0 0 0-2.563 2.562v10.875a2.57 2.57 0 0 0 2.563 2.563h10.875a2.57 2.57 0 0 0 2.563-2.562V12.75a.75.75 0 0 0-1.5 0v5.438c0 .582-.48 1.062-1.063 1.062H5.812c-.583 0-1.063-.48-1.063-1.062V7.312c0-.582.48-1.062 1.063-1.062h5.437a.75.75 0 0 0 0-1.5z" clip-rule="evenodd"/>
                    </svg>
                    Tulis Ulasan</a>
            @else
                <button type="button" class="btn btn-primary w-100" data-bs-toggle="modal" data-bs-target="#loginFirstUlasan2" style="font-size: 14px">
                    <svg xmlns="http://www.w3.org/2000/svg"  style="margin-right: 0.4em" width="1.495em" height="1.44em" viewBox="0 0 24 24">
                        <path fill="white" fill-rule="evenodd" d="M17.907 4.93c.104-.105.294-.186.539-.18a.85.85 0 0 1 .572.216c.13.13.222.34.231.575s-.065.413-.167.515l-7.49 7.5l-1.273.116l.1-1.245zm2.173-1.024c-.437-.438-1.037-.643-1.6-.656s-1.182.167-1.635.62l-7.682 7.692a.75.75 0 0 0-.217.47l-.194 2.407a.75.75 0 0 0 .816.807l2.43-.22a.75.75 0 0 0 .463-.218l7.682-7.692c.456-.456.627-1.073.605-1.635a2.37 2.37 0 0 0-.668-1.575M5.812 4.75a2.57 2.57 0 0 0-2.563 2.562v10.875a2.57 2.57 0 0 0 2.563 2.563h10.875a2.57 2.57 0 0 0 2.563-2.562V12.75a.75.75 0 0 0-1.5 0v5.438c0 .582-.48 1.062-1.063 1.062H5.812c-.583 0-1.063-.48-1.063-1.062V7.312c0-.582.48-1.062 1.063-1.062h5.437a.75.75 0 0 0 0-1.5z" clip-rule="evenodd"/>
                    </svg>
                    Tulis Ulasan</button>
                <!-- Modal -->
                <div class="modal fade" id="loginFirstUlasan2" tabindex="-1" aria-labelledby="loginFirstUlasan2" aria-hidden="true">
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
            @endif
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
                                <h6 class="card-title">{{ number_format($wr->rating, 1) }}</h6>
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

        <div class="lihat-semua-detail d-block d-md-none">
            <a href="/ulasan/{{ $workshop->id }}" type="button" class="btn btn-outline-dark w-100" style="font-size: 14px;">Lihat Semua Ulasan</a>
        </div>

    </div>
  </div>
@endsection
<style>
    .nav-tabs .nav-item .nav-link {
      color: #040404;
      border: none;
      /* font-size: 18px; */
      /* margin: 4% 6% !important; */
    }
    .nav-tabs .nav-item .nav-link.active {
      border:none;
      background:none;border-bottom:3px solid black;color:#0D5C63;
      /* margin: 10% 30%!important; */
    }
 </style>

