@extends('admin.app')
@section('title', 'Add Class List')
@section('content')
    <main class="app-content">
        <div class="app-title">
            <div>
                <h1><i class="fa fa-plus-circle"></i> Create New List Class </h1>
            </div>
        </div>
        <div class="row">
            <div class="col-md-8 mx-auto">
                <div class="tile">
                    <form action="{{ route('admin.class.add') }}" method="POST">
                        @csrf
                        <div class="tile-body">
                            <div class="form-group">
                                <label for="name" class="control-label">Name Class</label>
                                <input type="text" name="name" id="name"
                                    class="form-control @error('name') is-invalid @enderror" />
                                @error('name')
                                    <div class="invalid-feedback">{{ $message }}</div>
                                @enderror
                            </div>
                            <div class="form-group">
                                <label for="instructor_id" class="control-label">Instructor Name</label>
                                <select name="instructor_id" id="instructor_id"
                                    class="form-control @error('instructor_id') is-invalid @enderror">
                                    <option selected disabled hidden>Select Your Instructor</option>
                                    @foreach ($instructors as $item)
                                        <option value="{{ $item->id }}"
                                            {{ old('instructor_id') == $item->id ? 'selected' : null }}>
                                            {{ $item->name }}
                                        </option>
                                    @endforeach
                                </select>
                                @error('instructor_id')
                                    <div class="invalid-feedback">{{ $message }}</div>
                                @enderror
                            </div>
                            <div class="form-group">
                                <label for="date" class="control-label">Date Class</label>
                                <input type="date" name="date" id="date"
                                    class="form-control @error('date') is-invalid @enderror" />
                                @error('date')
                                    <div class="invalid-feedback">{{ $message }}</div>
                                @enderror
                            </div>
                            <div class="form-group">
                                <label for="about" class="control-label">About</label>
                                <textarea class="form-control" name="about" id="about" rows="10" cols="1"></textarea>
                            </div>
                            <div class="form-group">
                                <label for="location" class="control-label">Location</label>
                                <input type="text" name="location" id="location"
                                    class="form-control @error('location') is-invalid @enderror" />
                                @error('location')
                                    <div class="invalid-feedback">{{ $message }}</div>
                                @enderror
                            </div>
                            <div class="form-group">
                                <label for="category_id">Category Class</label>
                                <select name="category_id" id="category_id" class="form-control" @error('category_id')
                                    is-invalid @enderror>
                                    <option selected disabled hidden>Select Your Category</option>
                                    @foreach ($categories as $item)
                                        <option value="{{ $item->id }}"
                                            {{ old('category_id') == $item->id ? 'selected' : null }}>
                                            {{ $item->name }}
                                        </option>
                                    @endforeach
                                </select>
                                @error('category_id')
                                    <div class="invalid-feedback">{{ $message }}</div>
                                @enderror
                            </div>
                            <div class="form-group">
                                <label for="price" class="control-label">Price</label>
                                <input type="number" name="price" id="price"
                                    class="form-control @error('price') is-invalid @enderror" />
                                @error('price')
                                    <div class="invalid-feedback">{{ $message }}</div>
                                @enderror
                            </div>
                            <div class="form-group">
                                <label for="qty" class="control-label">Qty</label>
                                <input type="number" name="qty" id="qty"
                                    class="form-control @error('qty') is-invalid @enderror" />
                                @error('qty')
                                    <div class="invalid-feedback">{{ $message }}</div>
                                @enderror
                            </div>

                            <div class="tile-footer">
                                <div class="row d-print-none mt-2">
                                    <div class="col-12 text-right">
                                        <button class="btn btn-success" type="submit"><i
                                                class="fa fa-fw fa-lg fa-check-circle"></i>Create Class</button>
                                        <a class="btn btn-danger" href="{{ route('listclassindex') }}"><i
                                                class="fa fa-fw fa-lg fa-arrow-left"></i>Go Back</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </main>
