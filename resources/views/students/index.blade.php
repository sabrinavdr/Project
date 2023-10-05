@extends('layouts.admin')
<title>Log Aktivitas </title>
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
                        Daftar Log Aktivitas Pengelolaan Arsip
                    </h4>
                </div>
                @if ($message = Session::get('success'))
                <div class="alert alert-success">
                    <p>{{ $message }}</p>
                </div>
                @endif

                <div class="d-flex align-items-center flex-wrap text-nowrap">
                    <a href="{{ route('students.create') }}">
                        <button
                            type="button"
                            class="btn btn-outline-primary btn-icon-text me-2 mb-2 mb-md-0"
                        >
                            New Log
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
                                                NO
                                            </th>
                                            <th style="text-align: center">
                                                TANGGAL
                                            </th>
                                            <th style="text-align: center">
                                                PENGGUNA
                                            </th>
                                            <th style="text-align: center">
                                                AKTIVITAS
                                            </th>
                                            <th style="text-align: center">
                                                ACTION
                                            </th>
                                        </tr>
                                        @foreach ($students as $student)
                                            <td>{{ ++$i }}</td>
                                            <td>{{ $student->tanggal }}</td>
                                            <td>{{ $student->pengguna }}</td>
                                            <td>{{ $student->aktivitas }}</td>
                                            <td>
                                                {{-- <a href="{{ route('students.edit',$student->id) }}"> --}}
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
                                                <a href="{{ route('students.show', $student->id) }}" >
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
                                        @endforeach
                                    </thead>
                                </table>
                                <div class="row text-center">
                                    {!! $students->links() !!}
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