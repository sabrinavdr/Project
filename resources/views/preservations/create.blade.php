@extends('layouts.admin')
<title>Tambah Jadwal Preservasi</title>
@section('content')
<div class="main-wrapper">
    @include('partials.sidebar-2')
    <div class="page-wrapper">
        @include('partials.navbar-2')
        <div class="page-content">
            <div
                class="d-flex justify-content-between align-items-center flex-wrap grid-margin"
            >
                <div class="mb-3 mb-md-0">
                    <h4>Tambah Jadwal Preservasi</h4>
                </div>
            </div>
            <div class="row">
                <div class="col col-xl-12 stretch-card">
                    <div class="card">
                        <div class="card-body">
                            <form>
                                <div class="mb-3">
                                    <label for="nomor dokumen" class="form-label"
                                        >Nomor Dokumen</label
                                    >
                                    <input
                                        type="text"
                                        class="form-control"
                                        id="nomor dokumen"
                                        aria-describedby="nomor dokumen"
                                    />
                                </div>
                                <div class="mb-3">
                                    <label for="nama dokumen" class="form-label"
                                        >Nama Dokumen</label
                                    >
                                    <input
                                        type="text"
                                        class="form-control"
                                        id="nama dokumen"
                                        aria-describedby="nama dokumen"
                                    />
                                </div>
                                <div class="row mb-3">
                                <div class="col-lg-3">
                                    <label
                                        for="defaultconfig"
                                        class="col-form-label"
                                        >Asal Dokumen
                                        <span style="color: red">
                                            *</span
                                        ></label
                                    >
                                </div>
                                <div class="col-lg-4">
                                    <select
                                        class="js-example-basic-multiple form-select"
                                        multiple="multiple"
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
                                        <span style="color: red">
                                            *</span
                                        ></label
                                    >
                                </div>
                                <div class="col-lg-4">
                                    <select
                                        class="js-example-basic-multiple form-select"
                                        multiple="multiple"
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
                                        for="tanggal pembuatan"
                                        class="col-form-label"
                                        >Tanggal Pembuatan
                                        <span style="color: red">
                                            *</span
                                        ></label
                                    >
                                </div>
                                <div class="col-lg-4">
                                    <div
                                        class="input-group flatpickr"
                                        id="flatpickr-date"
                                    >
                                        <input
                                            type="text"
                                            class="form-control"
                                            placeholder="Select date"
                                            id="tanggal pembuatan"
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
                            <div class="mb-3">
                                    <label for="periode preservasi" class="form-label"
                                        >Periode Preservasi</label
                                    >
                                    <input
                                        type="text"
                                        class="form-control"
                                        id="periode preservasi"
                                        aria-describedby="periode preservasi"
                                    />
                                </div>
                                <a href="/jadwal-preservasi">
                                    <button
                                        type="submit"
                                        class="btn btn-primary"
                                    >
                                        Submit
                                    </button>
                                    {{-- <button class="btn btn-secondary">Cancel</button> --}}
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