@extends('admin.app')
@section('title', 'Class List')
@section('content')
    <main class="app-content">
        <div class="app-title">
            <div>
                <h1><i class="fa fa-th-list"></i> Data Class List Table</h1>
                <p>Table to display analytical data effectively</p>
            </div>
            <div>
                <a href="{{ route('listclass.create.admin') }}" onclick="return confirm('Are you Sure?')"
                    class="btn btn-success"><i class="fa fa-book" aria-hidden="true"></i>Add Class</a>
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
                                        <th>Date</th>
                                        <th>Location</th>
                                        <th>Category</th>
                                        <th>Price</th>
                                        <th>Qty</th>
                                        <th>Image</th>
                                        <th>Status</th>
                                        <th>Action</th>
                                    </tr>
                                </thead>
                                @foreach ($listclasses as $listclass)
                                    <tbody>
                                        <tr>
                                            <td>{{ $listclass->id }}</td>
                                            <td>{{ $listclass->name }}</td>
                                            <td>{{ date('d F Y', strtotime($listclass->date)) }}</td>
                                            <td>{{ $listclass->location }}</td>
                                            <td>{{ $listclass->category }}</td>
                                            <td>Rp
                                                {{ number_format($listclass->price, 0, ',', '.') }}</td>
                                            <td>{{ $listclass->qty }}</td>
                                            <td>{{ $listclass->image }}</td>
                                            <td>
                                                @if ($listclass->active == 1)
                                                    <span class="badge badge-success">On going</span>
                                                @else
                                                    <span class="badge badge-danger">Cancelled</span>
                                                @endif
                                            </td>
                                            <td>
                                                <a href="{{ route('listclassupdate', ['id' => $listclass->id]) }}"
                                                    onclick="return confirm('Are you Sure?')" class="btn btn-info"><i
                                                        class="fa fa-pencil-square-o" aria-hidden="true"></i>Edit</a>
                                                <a href="{{ route('listclassdelete', ['id' => $listclass->id]) }}"
                                                    onclick="return confirm('Are you Sure?')" class="btn btn-danger"><i
                                                        class="fa fa-trash"></i>Delete</a>
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
