@extends('admin.app')
@section('title', 'Instructor List')
@section('content')
    <main class="app-content">
        <div class="app-title">
            <div>
                <h1><i class="fa fa-th-list"></i> Data Peserta Table</h1>
                <p>Table to display analytical data effectively</p>
            </div>
        </div>
        <div class="row">
            <div class="col-md-12">
                <div class="tile">
                    <div class="tile-body">
                        <div class="table-responsive">
                            <table class="table table-hover table-bordered" id="DataListTable">
                                <thead>
                                    <tr>
                                        <th>Id</th>
                                        <th>Name</th>
                                        <th>Email</th>
                                        <th>Phone</th>
                                        <th>Gender</th>
                                        <th>Action</th>
                                    </tr>
                                </thead>
                                @foreach ($pesertas as $peserta)
                                    <tbody>
                                        <tr>
                                            <td>{{ $peserta->id }}</td>
                                            <td>{{ $peserta->name }}</td>
                                            <td>{{ $peserta->email }}</td>
                                            <td>{{ $peserta->phone }}</td>
                                            <td>{{ $peserta->gender }}</td>
                                            <td>
                                                <a href="{{ route('pesertadelete', ['id' => $peserta->id]) }}"
                                                    onclick="return confirm('Are you Sure?')"
                                                    class="btn btn-danger">Delete</a>
                                            </td>
                                        </tr>
                                @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </main>
@endsection


