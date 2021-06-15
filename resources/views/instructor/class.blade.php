@extends('site.app')
@section('title', 'Register - Class')
@section('content')

    <main id="main" class="main-background">
        <div class="form-group">
            <h3 class="titles" data-aos="fade-in">Instructor Add New Class</h3>
        </div>
        <form action="{{ route('listclass.save.instructor') }}" method="POST" class="main-account needs-validation" novalidate>
            @csrf
            <div class="form-group">
                <label for="name">Name Class</label>
                <input type="text" name="name" id="name" placeholder="Full Name" class="form-control" required>
                <div class="invalid-feedback">Please enter a valid Name</div>
            </div>
            <div class="form-group">
                <label for="date">Date Class</label>
                <input type="date" name="date" id="date" placeholder="name@example.com" class="form-control">
            </div>
            <div class="form-group">
                <label for="location">Location Class</label>
                <textarea name="location" id="location" rows="3" class="form-control" placeholder="" required></textarea>
                <div class="invalid-feedback">Please enter a valid Location</div>
            </div>
            <div class="form-group">
                <label for="category">Category Class</label>
                <select name="category" id="category" class="form-control">
                    <option value="" selected disabled hidden>Choose Category</option>
                    <option value="art">Art</option>
                    <option value="business">Business</option>
                    <option value="Culinery">Culinery</option>
                    <option value="personaldevelopment">Personal Development</option>
                    <option value="photography">Photography</option>
                    <option value="technology">Technology</option>
                    <option value="design">Design</option>
                </select>
            </div>
            <div class="form-group">
                <label for="price">Price Class</label>
                <div class="input-group mb-2">
                    <div class="input-group-prepend">
                        <span class="input-group-text">Rp</span>
                    </div>
                    <input type="text" name="price" id="price" class="form-control" aria-label="Amount (to the nearest dollar)">
                </div>
            </div>
            <div class="form-group">
                <label for="teact">Qty Person</label>
                <input type="number" name="qty" id="qty" class="form-control" placeholder="Programmer" required>
                <div class="invalid-feedback">Please enter a valid Teach</div>
            </div>
            <div class="form-group">
                <button type="submit" class="btn btn-outline-success btn-block">Submit</button>
            </div>
        </form>
    </main>

@stop
