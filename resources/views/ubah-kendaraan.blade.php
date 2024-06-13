@section('title', $title)
@extends('layouts.profile')
@section('content')
@include('partials.back-arrow')
<div class="tab-content" id="myTabContent">
    <div class="tab-pane fade show active py-4 px-3" id="vehicle" role="tabpanel" aria-labelledby="vehicle-tab" style="">
            <div class="row align-items-start justify-content-between" style="border: none;">
            <div class="col-12 col-md-6 p-0">
                <form action="/kendaraan/{{ $car->id }}" method="POST" class="m-0">
                    @csrf
                    <div class="row">
                        <div class="col-md-8">
                            <fieldset disabled>
                                <div class="mb-4">
                                    <label for="car_brand_id" class="form-label-md">Merek mobil</label>
                                    <select id="car_brand_id" class="form-select" name="car_brand_id">
                                        @foreach ($car_brand as $brand)
                                            @if ($brand->id == $car->car_model->car_brand_id)
                                                <option value="{{ $brand->id }}" selected>{{ $brand->name }}</option>
                                            @else
                                                <option value="{{ $brand->id }}">{{ $brand->name }}</option>
                                            @endif
                                        @endforeach
                                    </select>
                                </div>
                            </fieldset>
                            <fieldset disabled>
                                <div class="mb-4">
                                    <label for="car_model_id" class="form-label-md">Tipe mobil</label>
                                    <select id="car_model_id" class="form-select" name="car_model_id">
                                        @foreach ($car_model as $model)
                                            @if ($model->id == $car->car_model->id)
                                                <option value="{{ $model->id }}" selected>{{ $model->name }}</option>
                                            @else
                                                <option value="{{ $model->id }}">{{ $model->name }}</option>
                                            @endif
                                        @endforeach
                                    </select>
                                </div>
                            </fieldset>
                            <fieldset disabled>
                                <div class="mb-4">
                                    <label for="license_plate" class="form-label-md">Plat nomor mobil</label>
                                    <input type="text" class="form-control  form-control-sm" id="license_plate" name="license_plate"
                                            value="{{ $car->license_plate }}"
                                    >
                                </div>
                            </fieldset>
                            <div class="mb-3">
                                <label for="service_date" class="form-label-md">Terakhir servis/ganti oli</label>
                                <div class="date" style="position: relative">
                                    <img style="width: 16px; height: 16px; position: absolute; right: 10px; top: 6px;" src="{{ url('photos/calendar.svg') }}" alt="">
                                    <input type="text" name="service_date" id="service_date" class="form-control form-control-sm" autocomplete="off"
                                        placeholder="Tanggal/Bulan/Tahun">
                                    <span class="input-group-append">
                                        <span class="input-group-text d-none">
                                        </span>
                                    </span>
                                    @error('service_date')
                                        <div class="alert alert-danger py-1 px-0" style="font-size:12px;background:none;border:none;color:red">
                                            Tanggal yang dipilih harus setelah tanggal terakhir servis yang tersimpan.
                                        </div>
                                    @enderror
                                </div>
                            </div>
                            <div class="mb-4">
                                <div class="d-flex justify-content-start align-items-start gap-2">
                                    <input class="form-check-input" type="checkbox" name="is_notify" id="#" value=1 style="display: inline-block;">
                                    <label for="is_notify" class="form-label-md">Beri notifikasi via WhatsApp jika sudah mendekati 6 bulan sejak servis terakhir</label>
                                </div>
                            </div>
                            <table class="table mb-4">
                                <thead class="table-light" style="border-radius: 8px;">
                                    <tr>
                                        <th scope="col" style="text-align: center; font-weight: 600; font-size: 14px;">No</th>
                                        <th scope="col" style="text-align: center; font-weight: 600; font-size: 14px;">Riwayat servis</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($services as $s)
                                        <tr>
                                            <th scope="row" style="font-weight: 400; font-size: 14px; text-align: center;">{{ $no }}</th>
                                            <td style="font-size: 14px; text-align: center;">
                                                {{ date('j F Y', strtotime($s->service_date)) }}
                                            </td>
                                        </tr>
                                        <?php $no++ ?>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                    <div class="d-flex justify-content-start gap-3 mt-5 mb-3">
                        <button class="btn btn-primary px-3" style="font-size: 14px;" type="submit">
                            Simpan
                        </button>
                    </div>
                </form>
            </div>

            <div>
                <button class="btn btn-outline-danger px-0" data-bs-toggle="modal" data-bs-target="#deleteCar" type="button">Hapus</button>
                <!-- Modal -->
                <div class="modal fade" id="deleteCar" tabindex="-1" aria-labelledby="deleteCar" aria-hidden="true">
                    <div class="modal-dialog modal-dialog-centered">
                        <div class="modal-content p-4">
                            <div class="modal-header p-0 border-0">
                                <h5 class="modal-title" style="font-weight: 600;" id="deleteCar">Hapus Kendaraan?</h5>
                                {{-- <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button> --}}
                            </div>
                            <div class="modal-body p-0 mt-1 mb-4">
                                <p class="m-0">Kamu akan secara permanen menghapus kendaraan ini.</p>
                            </div>
                            <div class="modal-footer border-0 d-flex justify-content-end gap-2 p-0">
                                <button type="button" class="btn btn-outline-dark px-3" data-bs-dismiss="modal">Batal</button>
                                <form class="m-0" action="/hapus-kendaraan/{{ $car->id }}" method="post">
                                    @csrf
                                    <button class="btn btn-danger px-3" type="submit">Hapus</button>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

@section('script')
<script type="text/javascript">
    $(function() {
        $('#service_date').datepicker({
           format: 'dd/mm/yyyy'
        });
    })
</script>
@endsection

<style>
    h4, h6, .placeholder {
        color: #052023;
    }
    .form-select {
        font-size: 14px !important;
    }
</style>
