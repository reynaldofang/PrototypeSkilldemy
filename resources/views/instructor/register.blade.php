@extends('site.app')
@section('title', 'Register - Instructor')
@section('content')

    <main id="main" class="main-background">

        <div class="form-group">
            <h3 class="titles" data-aos="fade-in">SIGN UP - Instructor</h3>
        </div>
        <form action="{{ route('instructorsave') }}" method="POST" class="main-account needs-validation" novalidate>
            @csrf
            <div class="form-group">
                <label for="name">Name</label>
                <input type="text" name="name" id="name" placeholder="Full Name" class="form-control" required>
                <div class="invalid-feedback">Please enter a valid Name</div>
            </div>
            <div class="form-group">
                <label for="email">Email</label>
                <input type="email" name="email" id="email" placeholder="name@example.com" class="form-control" required>
                <div class="invalid-feedback">Please enter a valid Email</div>
            </div>
            <div class="form-group">
                <label for="phone">Phone</label>
                <input type="text" name="phone" id="phone" placeholder="08771234567891" class="form-control" required>
                <div class="invalid-feedback">Please enter a valid Phone</div>
            </div>
            <div class="form-group">
                <label for="gender">Gender</label>
                <select name="gender" id="gender" class="form-control" required>
                    <option value="" selected disabled hidden>Choose Gender</option>
                    <option value="male">Male</option>
                    <option value="female">Female</option>
                </select>
                <div class="invalid-feedback">Please selected your Gender</div>
            </div>
            <div class="form-group">
                <label for="about">Shared about yourself</label>
                <textarea name="about" id="about" rows="3" class="form-control" placeholder="Shared about yourself"
                    required></textarea>
                <div class="invalid-feedback">Please enter a valid Shared About yourself</div>
            </div>
            <div class="form-group">
                <label for="teach">Category Teach</label>
                <select name="teach" id="teach" class="form-control" required>
                    <option value="" selected disabled hidden>Choose Category</option>
                    <option value="art">Art</option>
                    <option value="business">Business</option>
                    <option value="Culinery">Culinery</option>
                    <option value="personaldevelopment">Personal Development</option>
                    <option value="photography">Photography</option>
                    <option value="technology">Technology</option>
                    <option value="design">Design</option>
                </select>
                <div class="invalid-feedback">Please selected your Category</div>
            </div>
            <div class="form-group">
                <label for="experience">Experience</label>
                <input type="text" name="experience" id="experience" class="form-control" required>
                <div class="invalid-feedback">Please enter a valid Experience</div>
            </div>
            <div class="form-group">
                <button type="submit" class="btn btn-outline-success btn-block">Submit</button>
            </div>
        </form>
    </main>

@stop
