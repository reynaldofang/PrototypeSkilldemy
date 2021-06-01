@extends('admin.app')
@section('title', 'Add Class List')
@section('content')
    <div class="app-title">
        <div>
            <h1><i class="fa fa-briefcase"></i>What </h1>
        </div>
    </div>
    <div class="row">
        <div class="col-md-8 mx-auto">
            <div class="tile">
                <form action="{{ route('listclasssave') }}" method="POST">
                    @csrf
                    <div class="tile-body">
                        <div class="form-group">
                            <label for="name" class="control-label">Name Class</label>
                            <input type="text" name="name" id="name" class="form-control"/>
                        </div>
                        <div class="form-group">
                            <label for="date" class="control-label">Date Class</label>
                            <input type="date" name="date" id="date" class="form-control"/>
                        </div>
                        <div class="form-group">
                            <label for="location" class="control-label">Location</label>
                            <input type="text" name="location" id="location" class="form-control" />
                        </div>
                        <div class="form-group">
                            <label for="category">Category Class</label>
                            <select name="category" id="category" class="form-control">
                                <option selected disabled hidden>Choose Category</option>
                                <option value="Art">Art</option>
                                <option value="Business">Business</option>
                                <option value="Culinery">Culinery</option>
                                <option value="Personal Development">Personal Development</option>
                                <option value="Photography">Photography</option>
                                <option value="Technology">Technology</option>
                                <option value="Design">Design</option>
                            </select>
                        </div>
                        <div class="form-group">
                            <label for="price" class="control-label">Price</label>
                            <input type="number" name="price" id="price" class="form-control" />
                        </div>
                        <div class="form-group">
                            <label for="qty" class="control-label">Qty</label>
                            <input type="number" name="qty" id="qty" class="form-control" />
                        </div>
                        <div class="form-group mb-3">
                            <label for="image" class="form-label">Image</label>
                            <input type="file" accept="image/*" name="image" id="image" class="form-control" />
                        </div>
                        

                        <div class="form-group">
                            <button type="submit" class="btn btn-success">Confirm</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
