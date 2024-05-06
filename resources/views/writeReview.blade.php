@extends('layouts.main')
@section('title', $workshop->name)
@section('container')
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

<div class="container py-4 px-0 m-auto">
    <div class="col-lg-4">
        <form action="/writeReview/{{ $workshop->id }}"  method="POST" enctype="multipart/form-data">
            {{ csrf_field() }}
            <h2>Ulasan</h2>
            <div class="save" name ="user_id" id="user_id" value="{{auth()->user()->id}}"></div>

            <div class="specialty py-2">
                <h6>Spesialisasi apa yang ingin kamu ulas?</h6>
                <select class="form-control form-control-sm" name="specialty">
                    @foreach ($workshop->specialties as $w)
                        <option value="{{ $w->name }}">{{ $w->name }}</option>
                    @endforeach
                    <option value=null>Fasilitas</option>
                </select>
            </div>

            <div class="rate py-2">
                <h6>Bagaimana kamu menilai kinerja bengkel ini?</h6>
                <fieldset class="form-group">
                    {{-- <div class="row"> --}}
                      <div class="rating">
                        <input type="radio" id="5" name="rating" value="5" />
                        <label class="star" for="5" aria-hidden="true"></label>
                        <input type="radio" id="4" name="rating" value="4" />
                        <label class="star" for="4" aria-hidden="true"></label>
                        <input type="radio" id="3" name="rating" value="3" />
                        <label class="star" for="3" aria-hidden="true"></label>
                        <input type="radio" id="2" name="rating" value="2" />
                        <label class="star" for="2" aria-hidden="true"></label>
                        <input type="radio" id="1" name="rating" value="1" />
                        <label class="star" for="1" aria-hidden="true"></label>
                      </div>
                    {{-- </div> --}}
                </fieldset>
            </div>

            <div class="comment py-2">
                <div class="form-group">
                    <h6>Komentar (Opsional)</h6>
                    <textarea class="form-control" name="comment" id="exampleFormControlTextarea1" rows="3"></textarea>
                </div>
            </div>
            <div class="submit py-2">
                <button type="submit" class="btn btn-primary">Submit</button>
            </div>

        </form>
    </div>
</div>

<style>
    .rating {
    margin: 0px;
    border: none;
    float: left;
    }

    .rating > label {
    color: #90A0A3;
    float: right;
    }

    .rating > label:before {
    margin: 5px;
    font-size: 2em;
    font-family: FontAwesome;
    content: "\f005";
    display: inline-block;
    }

    .rating > input {
    display: none;
    }

    .rating > input:checked ~ label,
    .rating:not(:checked) > label:hover,
    .rating:not(:checked) > label:hover ~ label {
    color: #F79426;
    }

    .rating > input:checked + label:hover,
    .rating > input:checked ~ label:hover,
    .rating > label:hover ~ input:checked ~ label,
    .rating > input:checked ~ label:hover ~ label {
    color: #FECE31;
    }

</style>

@endsection


