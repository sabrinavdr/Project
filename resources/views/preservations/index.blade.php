@extends('layouts.admin')
<title>Jadwal Preservasi</title>
@section('content')
<div class="main-wrapper">
    @include('partials.sidebar-2')
    <div class="page-wrapper">
        @include('partials.navbar-2')
        <div class="page-content">
            <div
                class="d-flex justify-content-between align-items-center flex-wrap grid-margin"
            >
                <div>
                    <h4 class="mb-3 mb-md-0">
                        Daftar Jadwal Preservasi Dokumen Arsip
                    </h4>
                </div>
                @if ($message = Session::get('success'))
                <div class="alert alert-success">
                    <p>{{ $message }}</p>
                </div>
                @endif
                <div class="d-flex align-items-center flex-wrap text-nowrap">
                    <a href="{{ route('preservations.create') }}">
                        <button
                            type="button"
                            class="btn btn-outline-primary btn-icon-text me-2 mb-2 mb-md-0"
                        >
                            Tambah
                        </button></a
                    >
                </div>
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
                                                TANGGAL PEMBUATAN
                                            </th>
                                            <th style="text-align: center">
                                                PERIODE PRESERVASI
                                            <th style="text-align: center">
                                                ACTION
                                            </th>
                                        </tr>
                                        @foreach ($preservations as $preservation)
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td>{{ ++$i }}</td>
                                            <td>{{ $preservation->id_tanggal_dokumen }}</td>
                                            <td>{{ $preservation->id_nama_dokumen }}</td>
                                            <td>{{ $preservation->id_asal_dokumen }}</td>
                                            <td>{{ $preservation->id_jenis_dokumen }}</td>
                                            <td>{{ $preservation->tanggal_pembuatan }}</td>
                                            <td>{{ $preservation->periode_preservasi }}</td>
                                            <td>
                                                <a href="{{ route('preservations.edit',$preservation->id) }}">
                                                    <button
                                                        type="button"
                                                        class="btn btn-primary"
                                                    >
                                                        <i
                                                            class="link-icon"
                                                            data-feather="edit"
                                                        ></i>
                                                    </button>
                                                </a>
                                                <a href="#">
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
                                                </a>
                                                <a href="{{ route('preservations.show', $preservation->id) }}>
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
                                        </td>
                                        </tr> 
                                        @endforeach
                                    </tbody>
                                </table>
                                <div class="row text-center">
                                    {!! $preservations->links() !!}
                                </div>
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