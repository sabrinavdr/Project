@extends('layouts.admin')
<title>Arsip Masuk</title>
@section('content')
<div class="main-wrapper">
    @include('partials.sidebar-1')
    <div class="page-wrapper">
        @include('partials.navbar-1')
        <div class="page-content">
            <div
                class="d-flex justify-content-between align-items-center flex-wrap grid-margin"
            >
                <div>
                    <h4 class="mb-3 mb-md-0">
                        Daftar Dokumen Arsip Masuk
                    </h4>
                </div>
                {{-- <div class="d-flex align-items-center flex-wrap text-nowrap">
                    <a href="/add-arsipMasuk">
                        <button
                            type="button"
                            class="btn btn-outline-primary btn-icon-text me-2 mb-2 mb-md-0"
                        >
                            Tambah
                        </button></a
                    >
                </div> --}}
            </div>
            <div class="row">
                <div class="col col-xl-12 stretch-card">
                    <div class="card">
                        <div class="card-body">
                            <div style="overflow-x: auto">
                                <table
                                    id="example"
                                    class="table table-striped"
                                    style="width: 100%; text-align: center"
                                >
                                    <thead>
                                        <tr>
                                            <th style="text-align: center">
                                                NOMOR DOKUMEN
                                            </th>
                                            <th style="text-align: center">
                                                NAMA DOKUMEN
                                            </th>
                                            <th style="text-align: center">
                                                ASAL DOKUMEN
                                            </th>
                                            <th style="text-align: center">
                                                JENIS
                                            </th>
                                            <th style="text-align: center">
                                                TANGGAL DOKUMEN
                                            </th>
                                            <th style="text-align: center">
                                                TANGGAL MASUK
                                            </th>
                                            <th style="text-align: center">
                                                PROSES 
                                            </th>
                                            <th style="text-align: center">
                                                AKSI
                                            </th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td>DOC-002</td>
                                            <td>Laporan Akreditasi</td>
                                            <td>Bag. Akademik</td>
                                            <td>Surat</td>
                                            <td>2011-04-25</td>
                                            <td>2011-04-27</td>
                                            <td>
                                                <span class="badge bg-danger"
                                                    >Disposisi</span
                                                >
                                            </td>
                                            <td>
                                                {{-- <a href="/edit-arsipMasuk">
                                                    <button
                                                        type="button"
                                                        class="btn btn-primary"
                                                    >
                                                        <i
                                                            class="link-icon"
                                                            data-feather="edit"
                                                        ></i>
                                                    </button>
                                                </a> --}}
                                                {{-- <a href="#">
                                                    <button
                                                        type="button"
                                                        class="btn btn-danger"
                                                        onclick=""
                                                        data-bs-toggle="modal"
                                                        data-bs-target="#exampleModal"
                                                    >
                                                        <i
                                                            class="link-icon"
                                                            data-feather="trash"
                                                        ></i>
                                                    </button>
                                                </a> --}}
                                                <a href="/detail-arsipDisposisi">
                                                    <button
                                                        type="button"
                                                        class="btn btn-warning"
                                                    >
                                                        <i
                                                            class="link-icon"
                                                            data-feather="eye"
                                                        ></i>
                                                    </button>
                                                </a>
                                            </td>
                                        </tr>  
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- endPageContent -->
        @include('partials.footer')
    </div>
</div>
@endsection