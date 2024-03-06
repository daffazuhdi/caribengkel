@extends('layouts.main')
@section('container')
        <h1>Hello, world!</h1>
        {{-- @foreach ($user->specialties as $u)
            {{-- <p>{{ $u->subdistrict->name }}</p> --}}
            {{-- <p>{{ $u->specialties->name }}</p>
            <p>{{ $u->facility_workshop->workshop_id }}</p>
            <p>{{ $u->name }}</p>
        @endforeach --}}
        @foreach ($car->users as $l)
            <p>{{ $l->name }}</p>
        @endforeach

        @foreach ($user->cars as $c)
            <p>{{ $c->car_model->name }}</p>
        @endforeach
@endsection
