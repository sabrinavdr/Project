@extends('layouts.admin')
<title>Akses Pengajuan</title>
@section('content')
<div class="main-wrapper">
    @include('partials.sidebar-3')
    <div class="page-wrapper">
        @include('partials.navbar-3')
        <div class="page-content">
            <div
                class="d-flex justify-content-between align-items-center flex-wrap grid-margin"
            >
                <div>
                    <h4 class="mb-3 mb-md-0">
                        Halaman Pengaturan Akses Pengajuan dan Disposisi
                    </h4>
                </div>
                <div class="d-flex align-items-center flex-wrap text-nowrap">
                    <a href="/add-aksespengajuan">
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
                                                NO.
                                            </th>
                                            <th style="text-align: center">
                                                NAMA BAGIAN
                                            </th>
                                            <th style="text-align: center">
                                                AKSI 
                                            </th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td>1.</td>
                                            <td>Bag. Sarana dan Prasarana</td>
                                            <td>
                                                <div class="col-md-3 text-end">
                                                    <a href="/atur-aksespengajuan"
                                                    ><button type="button" class="btn btn-outline-primary">
                                                        <i
                                                        class="file-plus"
                                                        style="font-size: 1.2em"
                                                        ></i> Atur Akses </button
                                                        ></a>
                                                    </div>
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