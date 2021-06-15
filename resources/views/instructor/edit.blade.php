@extends('site.app')
@section('title', 'Edit Class - by Instructor')
@section('content')

    <main id="main" class="main-background main-card">
        <div class="card middle" style="max-width: 800px">
            <div class="row g-0">
                <div class="col-md-4">
                    <img src="{{ asset('frontend/img/icons/Lul.jpg') }}" alt="" style="max-width: 250px">
                </div>
                <div class="col-md-8">
                    <div class="card-body">
                        <h5 class="card-title">Modern Face paint workshop</h5>
                        <p class="card-text">
                            <small class="text-muted">Sunday March 23 2021</small>
                        </p>
                    </div>
                </div>
            </div>
        </div>
        <div class="form-group text-center">
            <button type="submit" class="btn btn-warning btn-lg">Edit Class</button>
            <button type="submit" class="btn btn-warning btn-lg">Cancel Class</button>
        </div>
    </main>

@endsection
