@extends('layouts.main')
@section('title', $workshop->name)
@section('container')
        {{-- <h1>Bengkel</h1> --}}
        <div class="fotoBengkel">
            <img src="{{ Storage::url('photos/'.$workshop->photo) }}" class="img-fluid" alt="..." style="padding:1%">
        </div>
        <div class="containerInformationCard" style="display: flex;justify-content:space-between">
            <div class="information" style="padding: 1%">
                <h3>{{$workshop->name}}</h3>
                <div class="address">
                    <img src="{{ Storage::url('photos/mapsLogo.svg') }}" class="img-fluid" alt="..." style="width:40px;padding:0.2%;padding-right:4%">
                    {{$workshop->address}}<br>
                </div>
                <div class="phoneNumber">
                    <img src="{{ Storage::url('photos/whatsappLogo.svg') }}" class="img-fluid" alt="..." style="width:40px;padding:0.2%;padding-right:3%">
                    {{$workshop->phone_number}}
                </div>
            </div>
            <div class="cardService" style="padding-right:2%;padding-top:1%">
                <div class="card" style="width: 23rem;">
                    <div class="card-body">
                      <h5 class="card-title" style="padding-left:1%">Ingin Servis?</h5>
                      <h6 class="card-subtitle mb-2 text-body-secondary" style="padding-left:1%">Lakukan penjadwalan sekarang</h6>
                      <div class="d-grid gap-2">
                        <a href="#" class="btn btn-info" style="background-color: #0D5C63;color:white">Jadwalkan Servis Sekarang</a>
                      </div>
                    </div>
                  </div>
            </div>
        </div>
        <hr style="height:1px;border-width:0;color:gray;background-color:gray">

          <ul class="nav nav-tabs" id="myTab" role="tablist">
            <li class="nav-item" role="presentation">
              <button class="nav-link active" id="tentang-tab" data-bs-toggle="tab" data-bs-target="#tentang" type="button" role="tab" aria-controls="tentang" aria-selected="true">Tentang</button>
            </li>
            <li class="nav-item" role="presentation">
              <button class="nav-link" id="fasilitas-tab" data-bs-toggle="tab" data-bs-target="#fasilitas" type="button" role="tab" aria-controls="fasilitas" aria-selected="false">Fasilitas</button>
            </li>
            <li class="nav-item" role="presentation">
              <button class="nav-link" id="merekmobil-tab" data-bs-toggle="tab" data-bs-target="#merekmobil" type="button" role="tab" aria-controls="merekmobil" aria-selected="false">Merek Mobil</button>
            </li>
            <li class="nav-item" role="presentation">
                <button class="nav-link" id="waktuoperasional-tab" data-bs-toggle="tab" data-bs-target="#waktuoperasional" type="button" role="tab" aria-controls="waktuoperasional" aria-selected="false">Waktu Operasional</button>
              </li>
              <li class="nav-item" role="presentation">
                <button class="nav-link" id="hargalayanan-tab" data-bs-toggle="tab" data-bs-target="#hargalayanan" type="button" role="tab" aria-controls="hargalayanan" aria-selected="false">Harga Layanan</button>
              </li>
          </ul>
          <div class="tab-content" id="myTabContent">
            <div class="tab-pane fade show active" id="tentang" role="tabpanel" aria-labelledby="tentang-tab" style="padding: 1%">
                <h6 style="padding-top:2%;padding-bottom:2%">{{$workshop->about}}</h6>
                <div class="location">
                    <p><iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3966.2971198600335!2d106.64732441476916!3d-6.224498995494186!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e69fb20a9906e13%3A0xf75c5296d0a385e4!2sBINUS%20UNIVERSITY%2C%20Kampus%20Alam%20Sutera!5e0!3m2!1sen!2sid!4v1623678826710!5m2!1sen!2sid" width="400" height="300" style="border:0;width:100%" allowfullscreen="" loading="lazy"></iframe></p>
                </div>
            </div>
            <div class="tab-pane fade" id="fasilitas" role="tabpanel" aria-labelledby="fasilitas-tab" style="padding: 1%">
                <h6 style="padding-top:2%;padding-bottom:2%">Berikut merupakan fasilitas yang disediakan oleh bengkel untuk kenyamanan para pelanggan:</h6>
                @foreach ($workshop->facilities as $w)
                    <p>• {{$w->name}}</p>
                @endforeach
            </div>
            <div class="tab-pane fade" id="merekmobil" role="tabpanel" aria-labelledby="merekmobil-tab" style="padding: 1%">
                <h6 style="padding-top:2%;padding-bottom:2%">Berikut merupakan merek mobil yang dapat dikerjakan oleh bengkel ini:</h6>
                @foreach ($workshop->car_brands as $w)
                    <p>• {{$w->name}}</p>
                @endforeach
            </div>
            <div class="tab-pane fade" id="waktuoperasional" role="tabpanel" aria-labelledby="waktuoperasional-tab" style="padding-top: 3%">
                <table class="table table-bordered">
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
                            <td>{{$wh->working_hour}}</td>
                        @endforeach
                      </tr>
                    </tbody>
                  </table>
            </div>
            <div class="tab-pane fade" id="hargalayanan" role="tabpanel" aria-labelledby="hargalayanan-tab" style="padding-top: 3%">
                <table class="table table-bordered">
                    <thead>
                      <tr>
                        <th scope="col">Layanan</th>
                        <th scope="col">Harga</th>
                      </tr>
                    </thead>
                    <tbody>
                        @foreach ($workshop->prices as $wp)
                            <tr>
                                <td>{{$wp->service->name}}</td>
                                <td>{{$wp->price}}</td>
                            </tr>
                        @endforeach
                    </tbody>
                  </table>
            </div>
          </div>



@endsection
