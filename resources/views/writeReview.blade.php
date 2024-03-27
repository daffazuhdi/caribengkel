@extends('layouts.main')
@section('title', $workshop->name)
@section('container')

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
                </select>
            </div>

            <div class="rate py-2">
                <h6>Bagaimana kamu menilai kinerja bengkel ini?</h6>
                <fieldset class="form-group">
                    <div class="row">
                      <div class="col-sm-10">
                        <div class="form-check form-check-inline">
                          <input class="form-check-input" type="radio" name="rate" id="gridRadios1" value="1" checked>
                          <svg xmlns="http://www.w3.org/2000/svg" width="18" height="16" fill="currentColor" class="bi bi-star" viewBox="0 0 16 16">
                            <path d="M2.866 14.85c-.078.444.36.791.746.593l4.39-2.256 4.389 2.256c.386.198.824-.149.746-.592l-.83-4.73 3.522-3.356c.33-.314.16-.888-.282-.95l-4.898-.696L8.465.792a.513.513 0 0 0-.927 0L5.354 5.12l-4.898.696c-.441.062-.612.636-.283.95l3.523 3.356-.83 4.73zm4.905-2.767-3.686 1.894.694-3.957a.56.56 0 0 0-.163-.505L1.71 6.745l4.052-.576a.53.53 0 0 0 .393-.288L8 2.223l1.847 3.658a.53.53 0 0 0 .393.288l4.052.575-2.906 2.77a.56.56 0 0 0-.163.506l.694 3.957-3.686-1.894a.5.5 0 0 0-.461 0z"/>
                          </svg>
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
</div>
@endsection
