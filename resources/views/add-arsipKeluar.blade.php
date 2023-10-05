@extends('layouts.admin')
<title>Tambah Arsip Keluar</title>
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
                    <h4>Tambah Dokumen Arsip Keluar</h4>
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
                                        for="tanggal keluar"
                                        class="col-form-label"
                                        >Tanggal Keluar
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
                                            id="tanggal keluar"
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
                                <div class="mb-3">
                                    <label for="pengirim" class="form-label"
                                        >Pengirim</label
                                    >
                                    <input
                                        type="text"
                                        class="form-control"
                                        id="pengirim"
                                        aria-describedby="pengirim"
                                    />
                                </div>
                            </div>
                            <div class="mb-3">
                                    <label for="penerima" class="form-label"
                                        >Penerima</label
                                    >
                                    <input
                                        type="text"
                                        class="form-control"
                                        id="penerima"
                                        aria-describedby="penerima"
                                    />
                                </div>
                                <div class="mb-3">
									<label class="form-label" for="formFile">File upload</label>
									<input class="form-control" type="file" id="formFile">
								</div>
                                <a href="/arsipKeluar">
                                    <button
                                        type="submit"
                                        class="btn btn-primary"
                                    >
                                        Submit
                                    </button>
                                    <button class="btn btn-secondary">Cancel</button>
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