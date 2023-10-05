@extends('layouts.admin')
<title>New Identifikasi Risiko</title>
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
                    <h4>Tambah identifikasi Risiko Pengelolaan Arsip</h4>
                </div>
            </div>
            {{-- <div>
                <a class="btn btn-primary" href="{{ route('students.index') }}"> Back</a>
            </div> --}}
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
                            <form action="{{ route('risks.store') }}" method="POST">
                                @csrf
                                <div class="mb-3">
                                    <div class="col-lg-3">
                                    <label
                                        for="tanggal"
                                        class="col-form-label"
                                        >Tanggal
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
                                            name="tanggal"
                                            class="form-control"
                                            placeholder="Select date"
                                            id="tanggal"
                                            data-input
                                        />
                                        <span
                                            class="input-group-text input-group-addon"
                                            data-toggle
                                            ><i data-feather="calendar"></i
                                        ></span>
                                    </div>
                                    <label for="kategori_risiko" class="form-label"
                                        >Kategori Risiko</label
                                    >
                                    <input
                                        type="text"
                                        name="kategori_risiko"
                                        class="form-control"
                                        id="kategori_risiko"
                                        aria-describedby="kategori_risiko"
                                    />
                                </div>
                                <div class="mb-3">
                                    <label for="deskripsi" class="form-label"
                                        >Deskripsi</label
                                    >
                                    <input
                                        type="text"
                                        name="deskripsi"
                                        class="form-control"
                                        id="deskripsi"
                                        aria-describedby="deskripsi"
                                    />
                                </div>
                                <button type="submit" class="btn btn-success">Submit</button>
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
