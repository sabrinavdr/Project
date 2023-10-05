@extends('layouts.admin')
<title>Edit Data User</title>
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
                    <h4>Edit Data User</h4>
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
                            <form action="{{ route('aksesusers.update',$aksesuser->id) }}" method="POST">
                                @csrf
                                @method('PUT')
                                <div class="mb-3">
                                    <label for="id_nama_user" class="form-label"
                                        >Nama</label
                                    >
                                    <input
                                        type="text"
                                        name="id_nama_user"
                                        value="{{ $aksesuser->id_nama_user }}"
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
                                        value="{{ $aksesuser->id_username }}"
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
                                        value="{{ $aksesuser->id_email }}"
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
                                        value="{{ $aksesuser->id_peran }}"
                                        class="form-control"
                                        id="id_peran"
                                        aria-describedby="id_peran"
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
