@section('title', $title)
@extends('layouts.main')
@section('container')
<div class="container" style="width: 50%;">
    <h2 class="mx-auto mb-5" style="font-size: 28px; font-weight: 600; text-align: center;">Tambah Bengkel</h2>
    <div>
        <div class="">
            <h5 class="my-1" style="font-weight: 500;">Harga Layanan Bengkel</h5>
            <p>Isi informasi mengenai harga layanan bengkel di bawah ini untuk mendaftarkan bengkel baru.</p>

            <form method="post" action="/tambah-bengkel-detail-harga" enctype="multipart/form-data">
                @csrf
                <div class="container p-0">
                    <div class="row">
                        <div class="col-12 col-md-12">
                            <div class="mb-4 py-1">
                                <label for="workinghour" class="form-label-md">Harga Layanan</label>
                                <div class="row row-cols-4 mx-auto">
                                    <table class="table">
                                        <thead class="table-light">
                                          <tr>
                                            <th scope="col">Layanan</th>
                                            <th scope="col">Harga</th>
                                          </tr>
                                        </thead>
                                        <tbody>
                                            @foreach ($service as $s)
                                                <tr>
                                                    <th scope="row">{{$s->name}}</th>
                                                    <td>
                                                        <input type="hidden" id="workshop_id" name="workshop_id[]" value='{{$workshop_id}}'>
                                                        <input type="hidden" id="service_id" name="service_id[]" value='{{$s->id}}'>
                                                        <input type="phone" class="form-control form-control-sm" name="price[]" id="service"
                                                        placeholder="Rp. " value="">
                                                    </td>
                                                </tr>
                                            @endforeach
                                        </tbody>
                                      </table>

                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="tombol d-flex justify-content-between">
                    <div class="d-flex justify-content-end mt-4" style="margin-bottom: 16%;">
                        <a href="/tambah-bengkel-detail-back/{{$workshop_id}}" class="btn btn px-3" style="font-size: 14px; background:transparent ;color:#0D5C63; font-weight: 500;">
                            Kembali
                        </a>
                    </div>
                    <div class="d-flex justify-content-end mt-4" style="margin-bottom: 16%;">
                        <button class="btn btn-primary px-3" style="font-size: 14px;">
                            Selanjutnya
                        </button>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>
@endsection
