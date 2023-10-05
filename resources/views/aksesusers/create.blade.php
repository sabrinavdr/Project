@extends('layouts.admin')
<title>New User</title>
@section('content')
<div class="main-wrapper">
    @include('partials.sidebar-3')
    <div class="page-wrapper">
        @include('partials.navbar-3')
        <div class="page-content">
            <div
                class="d-flex justify-content-between align-items-center flex-wrap grid-margin"
            >
                <div class="mb-3 mb-md-0">
                    <h4>Tambah Data Akses User</h4>
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
                            <form action="{{ route('aksesusers.store') }}" method="POST">
                                @csrf
                                <div class="mb-3">
                                    <label for="id_nama_user" class="form-label"
                                        >Nama</label
                                    >
                                    <input
                                        type="text"
                                        name="id_nama_user"
                                        class="form-control"
                                        id="id_nama_user"
                                        aria-describedby="id_nama_user"
                                    />
                                </div>
                            <div class="mb-3">
                                    <label for="id_username" class="form-label"
                                        >Username</label
                                    >
                                    <input
                                        type="text"
                                        name="id_username"
                                        class="form-control"
                                        id="id_username"
                                        aria-describedby="id_username"
                                    />
                                </div>
                                <div class="mb-3">
                                    <label for="id_email" class="form-label"
                                        >Email</label
                                    >
                                    <input
                                        type="text"
                                        name="id_email"
                                        class="form-control"
                                        id="id_email"
                                        aria-describedby="id_email"
                                    />
                                </div>
                                <div class="mb-3">
                                    <label for="id_peran" class="form-label"
                                        >Peran</label
                                    >
                                    <input
                                        type="text"
                                        name="id_peran"
                                        class="form-control"
                                        id="id_peran"
                                        aria-describedby="id_peran"
                                    />
                                </div>
                                <div class="mb-3">
                                    <label
                                        for="exampleInputPassword1"
                                        class="form-label"
                                        >Password</label
                                    >
                                    <input
                                        type="password"
                                        class="form-control"
                                        id="exampleInputPassword1"
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
