@extends('site.app')
@section('title', 'Instructor - Add New Class')
@section('content')

<main id="main" class="main-background">
    <div class="form-group">
        <h3 class="titles" data-aos="fade-in">Instructor Add New Class</h3>
    </div>
    <form action="{{ route('instructor.class.add')}}" method="POST" class="main-account needs-validation" novalidate>
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
            <label for="about">About Class</label>
            <textarea name="about" id="about" rows="3" class="form-control" placeholder="" required></textarea>
            <div class="invalid-feedback">Please enter a valid Location</div>
        </div>
        <div class="form-group">
            <label for="location">Location Class</label>
            <textarea name="location" id="location" rows="3" class="form-control" placeholder="" required></textarea>
            <div class="invalid-feedback">Please enter a valid Location</div>
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
            <label for="price">Price Class</label>
            <div class="input-group mb-2">
                <div class="input-group-prepend">
                    <span class="input-group-text">Rp</span>
                </div>
                <input type="text" name="price" id="price" class="form-control"
                    aria-label="Amount (to the nearest dollar)">
            </div>
        </div>
        <div class="form-group">
            <label for="teact">Qty Person</label>
            <input type="number" name="qty" id="qty" class="form-control" min="1" max="10" value="1" required>
            <div class="invalid-feedback">Please enter a valid Teach</div>
        </div>
        <div class="form-group">
            <button type="submit" class="btn btn-outline-success btn-block">Submit</button>
        </div>
    </form>
</main>

@endsection