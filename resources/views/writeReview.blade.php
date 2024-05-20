@extends('layouts.main')
@section('title', $workshop->name)
@section('container')
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

<div class="container px-0 m-auto" style="min-height: 70vh;">
    <a class="nav-link d-inline-flex align-items-center gap-2" style="font-weight: 500;" href="{{ url('review/'.$workshop->id) }}">
        <img src="{{ url('photos/arrow-back.svg') }}" width="20px;">
        Kembali
    </a>
    <div class="col-lg-4 mt-4">
        <form action="/writeReview/{{ $workshop->id }}"  method="POST" enctype="multipart/form-data">
            {{ csrf_field() }}
            <h5>Ulasan</h5>
            <div class="save" name ="user_id" id="user_id" value="{{ auth()->user()->id }}"></div>

            <div class="specialty mt-3 mb-4">
                <label for="specialty" class="form-label-md">Spesialisasi apa yang ingin kamu ulas?</label>
                <select class="form-control form-control-sm" name="specialty">
                    @foreach ($workshop->specialties as $w)
                        <option value="{{ $w->name }}">{{ $w->name }}</option>
                    @endforeach
                    <option value=null>Fasilitas</option>
                </select>
            </div>

            <div class="rate mb-2">
                <label for="rating" class="form-label-md">Bagaimana kamu menilai kinerja bengkel ini?</label>
                @error('rating')
                    <div class="alert alert-danger py-0 px-0 my-0" style="font-size:11px;background:none;border:none;color:red">The rating field is required.</div>
                @enderror
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

            <div class="comment mb-4">
                <div class="form-group">
                    <label for="comment" class="form-label-md">Komentar (Opsional)</label>
                    <textarea class="form-control" name="comment" id="exampleFormControlTextarea1" rows="4"></textarea>
                </div>
            </div>

            <div class="submit" style="margin: 60px 0 20px 0;">
                <button type="submit" class="btn btn-primary" style="font-size: 14px">Kirim Ulasan</button>
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


