@extends('site.app')
@section('title', 'Login - Learner')
@section('content')


        <main id="main" class="main-background">

            <h3 class="titles" data-aos="fade-in">Welcome Learner</h3>
            <form action="" class="main-account needs-validation" novalidate>
                <div class="form-group">
                    <label for="email">Email</label>
                    <input type="email" name="email" id="email" class="form-control">
                </div>
                <div class="form-group">
                    <label for="password">Password</label>
                    <input type="password" name="password" id="password" class="form-control">
                </div>
                <div class="form-group">
                    <button type="submit" class="btn btn-outline-success btn-block">Submit</button>
                </div>

                <div class="form-group">
                    <p>Don't have an account? <a href="/account-register">Register Here</a></p>
                </div>
            </form>
        </main>

    @stop
