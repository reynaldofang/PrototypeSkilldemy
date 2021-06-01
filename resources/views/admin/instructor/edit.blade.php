@extends('admin.app')
@section('title', 'Class List')
@section('content')
    <div class="app-title">
        <div>
            <h1><i class="fa fa-briefcase"></i>What </h1>
        </div>
    </div>
    <div class="row">
        <div class="col-md-8 mx-auto">
            <div class="tile">
                <form action="{{ route('instructorupdate', ['id' => $instructor->id]) }}" method="POST">
                    @csrf
                    <div class="tile-body">
                        <div class="form-group">
                            <label for="name" class="control-label">Name Class</label>
                            <input type="text" name="name" id="name" />
                        </div>
                        <div class="form-group">
                            <label for="date" class="control-label">date</label>
                            <input type="date" name="date" id="date" />
                        </div>
                        <div class="form-group">
                            <label for="location" class="control-label">Location</label>
                            <input type="text" name="location" id="location" />
                        </div>
                        <div class="form-group">
                            <label for="category" class="control-label">Category</label>
                            <input type="text" name="category" id="category" />
                        </div>
                        <div class="form-group">
                            <label for="price" class="control-label">Price</label>
                            <input type="number" name="price" id="price" />
                        </div>
                        <div class="form-group">
                            <label for="qty" class="control-label">Qty</label>
                            <input type="number" name="qty" id="qty" />
                        </div>
                        <div class="form-group">
                            <label for="image" class="control-label">Image</label>
                            <input type="file" accept="image/*" name="image" id="image" />
                        </div>

                        <div class="form-group">
                            <button type="submit" class="btn btn-success">Confirm</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
