@extends('site.app')
@section('title', 'Register - Instructor')
@section('content')

    <main id="main" class="main-background">

        <div class="form-group">
            <h3 class="titles" data-aos="fade-in">SIGN UP - Instructor</h3>
        </div>
        <form action="{{ route('instructor.register.post') }}" method="POST" class="main-account needs-validation">
            @csrf
            <div class="form-group">
                <label for="name">Name</label>
                <input type="text" name="name" id="name" placeholder="Full Name"
                    class="form-control @error('name') is-invalid @enderror">
                @error('name')
                    <div class="invalid-feedback">{{ $message }}</div>
                @enderror
            </div>
            <div class="form-group">
                <label for="email">Email</label>
                <input type="email" name="email" id="email" placeholder="name@example.com"
                    class="form-control @error('email') is-invalid @enderror">
                @error('email')
                    <div class="invalid-feedback">{{ $message }}</div>
                @enderror
            </div>
            <div class="form-group">
                <label for="phone">Phone</label>
                <input type="text" name="phone" id="phone" placeholder="08771234567891"
                    class="form-control @error('phone') is-invalid @enderror">
                @error('phone')
                    <div class="invalid-feedback">{{ $message }}</div>
                @enderror
            </div>
            <div class="form-group">
                <label for="password">Password</label>
                <input type="password" name="password" id="password" placeholder="Enter Your Password!"
                    class="form-control  @error('password') is-invalid @enderror">
                @error('password')
                    <div class="invalid-feedback">{{ $message }}</div>
                @enderror

            </div>
            <div class="form-group">
                <label for="gender">Gender</label>
                <select name="gender" id="gender" class="form-control  @error('gender') is-invalid @enderror">
                    <option value="" selected disabled hidden>Choose Gender</option>
                    <option value="male">Male</option>
                    <option value="female">Female</option>
                </select>
                @error('gender')
                    <div class="invalid-feedback">{{ $message }}</div>
                @enderror
            </div>
            <div class="form-group">
                <label for="about">Shared about yourself</label>
                <textarea name="about" id="about" rows="3" class="form-control @error('about') is-invalid @enderror"
                    placeholder="Shared about yourself"></textarea>
                @error('about')
                    <div class="invalid-feedback">{{ $message }}</div>
                @enderror
            </div>
            <div class="form-group">
                <label for="category_id">Category Class</label>
                <select name="category_id" id="category_id" class="form-control" @error('category_id') is-invalid @enderror>
                    <option selected disabled hidden>Select Your Category</option>
                    @foreach ($categories as $item)
                        <option value="{{ $item->id }}" {{ old('category_id') == $item->id ? 'selected' : null }}>
                            {{ $item->name }}
                        </option>
                    @endforeach
                </select>
                @error('category_id')
                    <div class="invalid-feedback">{{ $message }}</div>
                @enderror
            </div>
            <div class="form-group">
                <label for="experience">Experience</label>
                <input type="number" name="experience" id="experience"
                    class="form-control  @error('experience') is-invalid @enderror">
                @error('experience')
                    <div class="invalid-feedback">{{ $message }}</div>
                @enderror
            </div>
            <div class="form-group">
                <button type="submit" class="btn btn-outline-success btn-block">Submit</button>
            </div>
        </form>
    </main>

@stop
