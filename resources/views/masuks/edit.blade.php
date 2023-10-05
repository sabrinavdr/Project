@extends('layouts.admin')
<title>New Arsip Masuk</title>
@section('content')
<div class="main-wrapper">
    @include('partials.sidebar-1')
    <div class="page-wrapper">
        @include('partials.navbar-1')
        <div class="page-content">
            <div
                class="d-flex justify-content-between align-items-center flex-wrap grid-margin"
            >
                <div class="mb-3 mb-md-0">
                    <h4>Edit Dokumen Arsip Masuk</h4>
                </div>
            </div>
            @if ($errors->any())
            <div class="alert alert-danger">
                <strong>Whoops!</strong>There were some problems with your input<br><br>
                <ul>
                    @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
            @endif
            <div class="row">
                <div class="col col-xl-12 stretch-card">
                    <div class="card">
                        <div class="card-body">
                            <form action="{{ route('masuks.update',$masuk->id) }}" method="POST">
                                @csrf
                                @method('PUT')
                                <div class="mb-3">
                                    <label for="nomor_dokumen" class="form-label"
                                        >Nomor Dokumen</label
                                    >
                                    <input
                                        type="text"
                                        class="form-control"
                                        id="nomor_dokumen"
                                        aria-describedby="nomor_dokumen"
                                        required="required"
                                    />
                                </div>
                                <div class="mb-3">
                                    <label for="nama_dokumen" class="form-label"
                                        >Nama Dokumen</label
                                    >
                                    <input
                                        type="text"
                                        name="nama_dokumen"
                                        value="{{ $masuk->nama_dokumen }}"
                                        class="form-control"
                                        id="nama_dokumen"
                                        aria-describedby="nama_dokumen"
                                        required="required"
                                    />
                                </div>
                                <div class="row mb-3">
                                <div class="col-lg-3">
                                    <label
                                        for="defaultconfig"
                                        class="col-form-label"
                                        >Asal Dokumen
                                        {{-- <span style="color: red">
                                            *</span
                                        ></label
                                    > --}}
                                </div>
                                <div class="col-lg-4">
                                    <select
                                        class="js-example-basic-multiple form-select"
                                        multiple="multiple"
                                        name="asal_dokumen"
                                        value="{{ $masuk->asal_dokumen }}"
                                        data-width="100%"
                                    >
                                    <option value="Kurikulum Program Studi">Administrasi Universitas</option>
                                        <option value="Materi Pengajaran">Akademik</option>
                                        <option value="Evaluasi Mata Kuliah">Mahasiswa</option>
                                        <option value="Perhitungan Biaya Kuliah">Staf dan Pegawai</option>
                                    </select>
                                </div>
                            </div>
                            <div class="row mb-3">
                                <div class="col-lg-3">
                                    <label
                                        for="defaultconfig"
                                        class="col-form-label"
                                        >Jenis
                                        {{-- <span style="color: red">
                                            *</span
                                        ></label
                                    > --}}
                                </div>
                                <div class="col-lg-4">
                                    <select
                                        class="js-example-basic-multiple form-select"
                                        multiple="multiple"
                                        name="jenis"
                                        value="{{ $jenis }}"
                                        data-width="100%"
                                    >
                                        <option value="Surat">Surat</option>
                                        <option value="Laporan">Laporan</option>
                                        <option value="Kwitansi">Kwitansi</option>
                                    </select>
                                </div>
                            </div>
                                <div class="row mb-3">
                                <div class="col-lg-3">
                                    <label
                                        for="tanggal dokumen"
                                        class="col-form-label"
                                        >Tanggal Dokumen
                                        {{-- <span style="color: red">
                                            *</span
                                        ></label
                                    > --}}
                                </div>
                                <div class="col-lg-4">
                                    <div
                                        class="input-group flatpickr"
                                        id="flatpickr-date"
                                    >
                                        <input
                                            type="text"
                                            name="tanggal_dokumen"
                                            value="{{ $masuk->tanggal_dokumen }}"
                                            class="form-control"
                                            placeholder="Select date"
                                            id="tanggal dokumen"
                                            data-input
                                        />
                                        <span
                                            class="input-group-text input-group-addon"
                                            data-toggle
                                            ><i data-feather="calendar"></i
                                        ></span>
                                    </div>
                                </div>
                            </div>
                            <div class="row mb-3">
                                <div class="col-lg-3">
                                    <label
                                        for="tanggal masuk"
                                        class="col-form-label"
                                        >Tanggal Masuk
                                        {{-- <span style="color: red">
                                            *</span
                                        ></label
                                    > --}}
                                </div>
                                <div class="col-lg-4">
                                    <div
                                        class="input-group flatpickr"
                                        id="flatpickr-date"
                                    >
                                        <input
                                            type="text"
                                            name="tanggal_masuk"
                                            value="{{ $masuk->tanggal_masuk }}"
                                            class="form-control"
                                            placeholder="Select date"
                                            id="tanggal masuk"
                                            data-input
                                        />
                                        <span
                                            class="input-group-text input-group-addon"
                                            data-toggle
                                            ><i data-feather="calendar"></i
                                        ></span>
                                    </div>
                                </div>
                            </div>
                            <div class="row mb-3">
                                {{-- <div class="col-lg-3">
                                    <label
                                        for="defaultconfig"
                                        class="col-form-label"
                                        >Proses
                                        <span style="color: red">
                                            *</span
                                        ></label
                                    >
                                </div> --}}
                                <div class="mb-3">
                                    <label for="exampleFormControlSelect1" name="proses" value="{{ $masuk->proses }}" class="form-label">Proses Arsip</label>
                                    <select class="form-select" id="exampleFormControlSelect1">
                                        <option selected disabled>Disposisi/Diarsipkan</option>
                                        <option>Disposisi</option>
                                        <option>Diarsipkan</option>
                                    </select>
                                </div>
                            </div>
                            {{-- <div class="mb-3">
										<label class="form-label" for="formFile">File upload</label>
										<input class="form-control" type="file" name="file" id="formFile">
									</div> --}}
                                    <button type="submit" class="btn btn-success">Submit</button>
                                    <button class="btn btn-light">Cancel</button>
                                </a>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        @include('partials.footer')
    </div>
</div>
@endsection