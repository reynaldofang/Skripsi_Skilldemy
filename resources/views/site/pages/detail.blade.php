@extends('site.app')
@section('title', 'Detail Workshop')
@section('content')

<main id="main" class="main-background">
    @foreach ($listclasses as $listclass)


    <div class="container">
        <div class="card-columns d-flex justify-content-center">
            <div class="container">
                <div class="row">
                    <div class="col pt-5">
                        <h1 class="card-title text-xl detail-title">{{ $listclass->name }}</h1>
                        <p class="card-text">{{ $listclass->about}}</p>
                        <h6 class="card-subtitle mb-2 text-instructor">with {{ $listclass->instructor->name }}
                        </h6>
                    </div>
                    <div class="col pt-5 pb-5">

                        <div class="card text-center middle" style="max-width: 800px">
                            <div class="bg-image hover-overlay ripple" data-mdb-ripple-color="light">
                                <img src="{{ asset('storage/images') }}/{{ $listclass->fileimage }}"
                                    class="img-fluid photo-size" />
                                <a href="#!">
                                    <div class="mask" style="background-color: rgba(251, 251, 251, 0.15);"></div>
                                </a>
                            </div>
                            <div class="card-body">
                                <h5 class="card-title"></h5>
                                <div class="form-group">
                                    <label style="color: black">IDR {{ $listclass->price}}</label>
                                    <hr>
                                    <label style="color: black;" for="jumlah">Jumlah</label>
                                    <input type="number" class="input-jumlah" name="jumlah" id="jumlah" max="{{ $listclass->qty}}" min="1"
                                        value="1" />
                                </div>
                                <a href="#!" class="btn btn-primary btn-block">Register Class</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    @endforeach

    <div class="background-detail-class">
        <div class="card ml-5 background-detail-class" style="width: 18rem;">
            <div class="card-body">
                <h5 class="card-title card-color">Card title</h5>
                <h6 class="card-subtitle mb-2 text-muted">Card subtitle</h6>
                <p class="card-text">Some quick example text to build on the card title and make up the bulk of the
                    card's content.</p>
                <a href="#" class="card-link">Card link</a>
                <a href="#" class="card-link">Another link</a>
            </div>
        </div>

        <div class="container">
            <div class="row">
                <div class="col">
                    <div class="ml-5 background-detail-class background-benefit">
                        <div class="card-body">
                            <h5 class="card-title card-color">What will you get?</h5>
                            <p class="card-text">With supporting text below as a natural lead-in to additional content.
                            </p>
                            <ul class="card-text card-color">
                                <li>Lorem ipsum dolor sit amet, consectetur</li>
                                <li>apdisoiop elit, sed</li>
                                <li>Nam tempor arcu sit amet tortor viverra</li>
                                <li>sit amet finibus metus</li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="col">
                    <div class="mr-5 background-detail-class">
                        <div class="card-body">
                            <h5 class="card-title card-color">You should Prepared:</h5>
                            <p class="card-text">With supporting text below as a natural lead-in to additional content.
                            </p>
                            <ul class="card-text card-color">
                                <li>Lorem ipsum dolor sit amet, consectetur</li>
                                <li>apdisoiop elit, sed</li>
                                <li>Nam tempor arcu sit amet tortor viverra</li>
                                <li>sit amet finibus metus</li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="d-flex font-weight-bold p-2 flex-footer">
    </div>
</main>


@endsection