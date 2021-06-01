@extends('admin.app')
@section('title', 'Instructor List')
@section('content')
    <main class="app-content">
        <div class="app-title">
            <div>
                <h1><i class="fa fa-th-list"></i> Data Instructor Table</h1>
                <p>Table to display analytical data effectively</p>
            </div>
            <ul class="app-breadcrumb breadcrumb side">
                <li class="breadcrumb-item"><i class="fa fa-home fa-lg"></i></li>
                <li class="breadcrumb-item active"><a href="#">Data List Table</a></li>
            </ul>
        </div>
        <div class="row">
            <div class="col-md-12">
                <div class="tile">
                    <div class="tile-body">
                        <div class="table-responsive">
                            <table class="table table-hover table-bordered" id="DataListTable">
                                <thead>
                                    <tr>
                                        <th>Name</th>
                                        <th>Email</th>
                                        <th>Phone</th>
                                        <th>About</th>
                                        <th>Teach</th>
                                        <th>Experience</th>
                                        <th>Last Login</th>
                                        <th>Action</th>
                                    </tr>
                                </thead>
                                @foreach ($instructors as $instructor)
                                    <tbody>
                                        <tr>
                                            <td>{{ $instructor->name }}</td>
                                            <td>{{ $instructor->email }}</td>
                                            <td>{{ $instructor->phone }}</td>
                                            <td>{{ $instructor->about }}</td>
                                            <td>{{ $instructor->teach }}</td>
                                            <td>{{ $instructor->experience }}</td>
                                            <td>{{ $instructor->last_login }}</td>
                                            <td>
                                                <a href="{{ route('instructorupdate', ['id' => $instructor->id]) }}"
                                                    onclick="return confirm('Are you Sure?')" class="btn btn-info"><i
                                                        class="fa fa-pencil-square-o" aria-hidden="true"></i>Edit</a>

                                            </td>
                                        </tr>
                                    </tbody>
                                @endforeach

                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </main>
@endsection

@push('scripts')
    <script type="text/javascript" src="{{ asset('backend/js/plugins/jquery.dataTables.min.js') }}"></script>
    <script type="text/javascript" src="{{ asset('backend/js/plugins/dataTables.bootstrap.min.js') }}"></script>
    <script type="text/javascript">$('#sampleTable').DataTable();</script>
@endpush

