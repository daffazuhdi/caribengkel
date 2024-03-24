@extends('layouts.main')
@section('title', $workshop->name)
@section('container')


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
            </select>
        </div>



        <div class="rate py-2">
            <h6>Bagaimana kamu menilai kinerja bengkel ini?</h6>
            <fieldset class="form-group">
                <div class="row">
                  <div class="col-sm-10">
                    <div class="form-check form-check-inline">
                      <input class="form-check-input" type="radio" name="rate" id="gridRadios1" value="1" checked>
                      <label class="form-check-label" for="1">1</label>
                    </div>
                    <div class="form-check form-check-inline">
                      <input class="form-check-input" type="radio" name="rate" id="gridRadios2" value="2">
                      <label class="form-check-label" for="2">2</label>
                    </div>
                    <div class="form-check form-check-inline">
                        <input class="form-check-input" type="radio" name="rate" id="gridRadios3" value="3">
                        <label class="form-check-label" for="3">3</label>
                    </div>
                    <div class="form-check form-check-inline">
                        <input class="form-check-input" type="radio" name="rate" id="gridRadios4" value="4">
                        <label class="form-check-label" for="4">4</label>
                    </div>
                    <div class="form-check form-check-inline">
                        <input class="form-check-input" type="radio" name="rate" id="gridRadios5" value="5">
                        <label class="form-check-label" for="5">5</label>
                    </div>
                  </div>
                </div>
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

@endsection
