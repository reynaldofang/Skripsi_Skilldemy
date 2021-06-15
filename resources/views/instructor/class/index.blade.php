@extends('site.app')
@section('title', 'Instructor - Dashboard List Class')
@section('content')

<main id="main" class="main-background">
    <div class="form-group">
        <h3 class="titles" data-aos="fade-in">Instructor Dashboard Class List</h3>
    </div>


    @foreach ($listclasses as $listclass)

    @if ($listclass->status == "accepted")
    <h4 class="text-center" style="color: white">Upcoming Classes</h4>
    <div class="row anyClass">
        <div class="col-5 anyClass-class">
            <h4 style="color: black" class="card-title text-xl detail-title"> {{ $listclass->name }}
                <img src="{{ asset('storage/images/1623343307.jpg')}}" class="anyClass-image" style="float: left" />
                <p class="card-text" style="color: gray">{{ date('D, d F Y', strtotime($listclass->date)) }}</p>
                <h6 class="card-subtitle mb-2 text-instructor"> {{ $listclass->price }} </h6>
            </h4>
        </div>
    </div>
    @elseif($listclass->status == "pending")
    <h4 class="text-center" style="color: white">Pending Classes</h4>
    <div class="row anyClass">
        <div class="col-5 anyClass-class">
            <h4 style="color: black" class="card-title text-xl detail-title"> {{ $listclass->name }}
                <img src="{{ asset('storage/images/1623343307.jpg')}}" class="anyClass-image" style="float: left" />
                <p class="card-text" style="color: gray">{{ date('D, d F Y', strtotime($listclass->date)) }}</p>
                <h6 class="card-subtitle mb-2 text-instructor"> {{ $listclass->price }} </h6>
            </h4>
        </div>
    </div>
    <h4 class="text-center" style="color: white">Decline Classes</h4>
    @elseif($listclass->status == "decline")
 
    <div class="row anyClass">
        <div class="col-5 anyClass-class">
            <h4 style="color: black" class="card-title text-xl detail-title"> {{ $listclass->name }}
                <img src="{{ asset('storage/images/1623343307.jpg')}}" class="anyClass-image" style="float: left" />
                <p class="card-text" style="color: gray">{{ date('D, d F Y', strtotime($listclass->date)) }}</p>
                <h6 class="card-subtitle mb-2 text-instructor"> {{ $listclass->price }} </h6>
            </h4>
        </div>
    </div>
    @endif



    @endforeach
</main>


@endsection