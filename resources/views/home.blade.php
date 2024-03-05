@extends('layouts.main')
@section('container')
        <h1>Hello, world!</h1>
        @foreach ($user as $u)
            <p>{{ $u->car_model->car_brand->origin->name }}</p>
        @endforeach
@endsection
