@extends('site.app')
@section('title', 'Register - Lecture')
@section('content')

    <main id="main" class="main-background">

        <div class="form-group">
            <h3 class="titles" data-aos="fade-in">Sign Up - Leaner</h3>
        </div>
        <form action="{{ route('peserta.register.post') }}" method="POST" class="main-account needs-validation" novalidate>
            @csrf
            <div class="form-group">
                <label for="name">Name</label>
                <input type="text" name="name" id="name" class="form-control" placeholder="Full Name" required>
                <div class="invalid-feedback">Please enter a valid Name</div>
            </div>
            <div class="form-group">
                <label for="email">Email</label>
                <input type="email" name="email" id="email" class="form-control" placeholder="name@example.com" required>
                <div class="invalid-feedback">Please enter a valid Email</div>
            </div>
            <div class="form-group">
                <label for="phone">Phone</label>
                <input type="text" name="phone" id="phone" class="form-control" placeholder="0877123456789" required>
                <div class="invalid-feedback">Please enter a valid Phone</div>
            </div>
            <div class="form-group">
                <label for="gender">Gender</label>
                <select name="gender" name="gender" id="gender" class="form-control" required>
                    <option value="" selected disabled hidden>Choose Gender</option>
                    <option value="Male">Male</option>
                    <option value="Female">Female</option>
                </select>
                <div class="invalid-feedback">Please Select your gender</div>
            </div>
            <div class="form-group">
                <label for="password">Password</label>
                <input type="password" name="password" id="password" class="form-control" placeholder="Enter your password" required>
                <div class="invalid-feedback">Please enter a valid Password</div>
            </div>
            <div class="form-group">
                <button type="submit" class="btn btn-outline-success btn-block">Submit</button>
            </div>
        </form>
    </main>
@stop