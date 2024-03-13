@extends('layouts.main')
@section('container')
        <h1>Hello, world!</h1>
        <div class="row row-cols-1 row-cols-md-3 g-4">
            <div class="col w-25">
              <div class="card ">
                <img src="..." class="card-img-top" alt="...">
                <div class="card-body">
                  <h5 class="card-title">Card title</h5>
                  <p class="card-text">This is a longer card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
                </div>
              </div>
            </div>
            <div class="col w-25">
              <div class="card ">
                <img src="..." class="card-img-top" alt="...">
                <div class="card-body">
                  <h5 class="card-title">Card title</h5>
                  <p class="card-text">This is a longer card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
                </div>
              </div>
            </div>
          </div>
        {{-- @foreach ($user->specialties as $u)
            {{-- <p>{{ $u->subdistrict->name }}</p> --}}
            {{-- <p>{{ $u->specialties->name }}</p>
            <p>{{ $u->facility_workshop->workshop_id }}</p>
            <p>{{ $u->name }}</p>
        @endforeach --}}
        {{-- @foreach ($user as $u) --}}
        <p>{{ $user->name }}</p>
         {{-- @foreach ($user->prices as $r)
                <p>{{ $r->service->name }}</p>
                {{-- <p>{{ $r->service->specialty->name }}</p> --}}
         {{-- @endforeach --}}
         @foreach ($user->specialties as $r)
            <p>{{ $r->name }}</p>
            @foreach ($r->services as $s)
                <p>-> {{ $s->name }}</p>
                {{-- <p>{{ $r->service->specialty->name }}</p> --}}
            @endforeach
         @endforeach
        {{-- @endforeach --}}

        @foreach ($user->facilities as $u)
            <p>{{ $u->name }}</p>
        @endforeach

        @foreach ($user->car_brands as $s)
            <p>Merek mobil: {{ $s->name }}</p>
            {{-- <p>{{ $r->service->specialty->name }}</p> --}}
        @endforeach

        @foreach ($user->workhours as $item)
            {{-- <p>{{ $item->working_hour }}</p> --}}
            @if ($item->day_id == 1)
                <p>Senin {{ $item->working_hour }}</p>
            @elseif ($item->day_id == 2)
                <p>Selasa {{ $item->working_hour }}</p>
            @elseif ($item->day_id == 3)
                <p>Rabu {{ $item->working_hour }}</p>
            @elseif ($item->day_id == 4)
                <p>Kamis {{ $item->working_hour }}</p>
            @elseif ($item->day_id == 5)
                <p>Jumat {{ $item->working_hour }}</p>
            @elseif ($item->day_id == 6)
                <p>Sabtu {{ $item->working_hour }}</p>
            @else
                <p>Minggu {{ $item->working_hour }}</p>
            @endif
        @endforeach

@endsection
