@extends('site.app')
@section('title', 'Detail Order')
@section('content')

    <main id="main" class="main-background">

        <div class="form-group">
            <h3 class="titles" data-aos="fade-in">Detail Pesanan</h3>
        </div>

        <div class="text-center card middle" style="width: 50rem; margin-top: 3rem;">
            <div class="row g-0">
                <div class="col-md-4">
                    <img src="{{ asset('frontend/img/icons/Lul.jpg') }}" alt="" style="max-width: 150px">
                </div>
                <div class="col-md-8">
                    <div class="card-body">
                        <h5 class="card-title">Modern Face paint workshop</h5>
                        <p class="card-text">
                            <small class="text-muted">Sunday March 23 2021</small>
                        </p>
                        <p class="card-text">
                            <small class="text-muted">Total Price</small>
                        </p>
                    </div>
                </div>
            </div>
        </div>  

        <div class="d-flex flex-text-color font-weight-bold p-2 flex-color justify-content-center">Informasi Peserta</div>

        <div class="form-group">
            <h3 class="titles" data-aos="fade-in">Peserta 1</h3>
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
                <button type="submit" class="btn btn-outline-success btn-block">Submit</button>
            </div>

        </form>



    @endsection
