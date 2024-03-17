@section('title', $title)
@extends('layouts.main')
@section('container')
    <div class="my-2">
        <img src="{{ Storage::url('/photos/'.Auth::user()->photo) }}" style="border-radius: 50%; object-fit: cover; width: 7.313rem; height: 7.313rem; filter: drop-shadow(0.1em 0.1em 0.1em #727272);" class="" alt="{{ Auth::user()->name }}">
    </div>
    <form>
        <div class="container">
            <div class="row">
                <div class="col">

                </div>
            </div>
        </div>
    </form>
@endsection

<style>
    .container {
        min-height: 52vh;
    }
</style>
