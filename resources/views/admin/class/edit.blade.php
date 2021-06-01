@extends('admin.app')
@section('title', 'List Class Edit')
@section('content')
    <div class="app-title">
        <div>
            <h1><i class="fa fa-briefcase"></i>What </h1>
        </div>
    </div>
    <div class="row">
        <div class="col-md-8 mx-auto">
            <div class="tile">
                <form action="{{ route('listclassupdate', ['id' => $listclass->id]) }}" method="POST">
                    @csrf
                    <div class="tile-body">
                        <div class="form-group">
                            <label for="name" class="control-label">Name Class</label>
                            <input type="text" class="form-control" name="name" id="name"
                                value="{{ $listclass->name }}" />
                        </div>
                        <div class="form-group">
                            <label for="date" class="control-label">Date</label>
                            <input type="date" class="form-control" name="date" id="date"
                                value="{{ $listclass->date }}" />
                        </div>
                        <div class="form-group">
                            <label for="name" class="control-label">Instructor Name</label>
                            <input type="text" class="form-control" name="name" id="name"
                                value="{{ $listclass->instructor['name'] }}" disabled/>
                        </div>
                        <div class="form-group">
                            <label for="location" class="control-label">Location</label>
                            <input type="text" class="form-control" name="location" id="location"
                                value="{{ $listclass->location }}" />
                        </div>
                        <div class="form-group">
                            <label for="category">Category Teach</label>
                            <select name="category" id="category" class="form-control">
                                <option value="" selected disabled hidden>Choose Category</option>
                                <option value="Art" {{ $listclass->category == 'Art' ? 'selected' : '' }}>Art</option>
                                <option value="Business" {{ $listclass->category == 'Business' ? 'selected' : '' }}>
                                    Business</option>
                                <option value="Culinery" {{ $listclass->category == 'Culinery' ? 'selected' : '' }}>
                                    Culinery</option>
                                <option value="Personal Development"
                                    {{ $listclass->category == 'Personal Development' ? 'selected' : '' }}>Personal
                                    Development</option>
                                <option value="Photography" {{ $listclass->category == 'Photography' ? 'selected' : '' }}>
                                    Photography</option>
                                <option value="Technology" {{ $listclass->category == 'Technology' ? 'selected' : '' }}>
                                    Technology</option>
                                <option value="Design" {{ $listclass->category == 'Design' ? 'selected' : '' }}>Design
                                </option>
                            </select>
                        </div>
                        <div class="form-group">
                            <label for="price" class="control-label">Price</label>
                            <input type="number" class="form-control" name="price" id="price"
                                value="{{ $listclass->price }}" />
                        </div>
                        <div class="form-group">
                            <label for="qty" class="control-label">Qty</label>
                            <input type="number" class="form-control" name="qty" id="qty"
                                value="{{ $listclass->qty }}" />
                        </div>
                        <div class="form-group">
                            <label for="image" class="control-label">Image</label>
                            <input type="file" accept="image/*" name="image" id="image"
                                value="{{ $listclass->image }}" />
                        </div>
                        <div class="form-group custom-control custom-switch">
                            <input type="checkbox" class="custom-control-input" name="active" id="active"
                                {{ $listclass->active == 1 ? 'checked' : '' }} />
                            <label class="custom-control-label" for="active">On Going Class</label>
                        </div>

                        <div class="form-group">
                            <button type="submit" class="btn btn-success">Confirm</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
