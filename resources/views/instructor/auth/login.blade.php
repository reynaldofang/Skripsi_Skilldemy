@extends('site.app')
@section('title', 'Login - Instructor')
@section('content')

    <main id="main" class="main-background">

        <h3 class="titles" data-aos="fade-in">Welcome Instructor</h3>
        <form action="{{ route('instructor.login.post') }}" method="POST" class="main-account needs-validation"
            novalidate>
            @csrf
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
                <p class="p-color">Don't have an account? <a href="{{ route('instructor.register') }}">Register Here</a>
                </p>
            </div>
        </form>
    </main>

@stop
