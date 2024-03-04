@extends('layouts.main')
@section('container')
        <h1>tentang kami</h1>
    @foreach ($posts as $p)
        <h2>{{$p["title"]}}</h2>
        <h5>{{$p["author"]}}</h2>
    @endforeach
@endsection
