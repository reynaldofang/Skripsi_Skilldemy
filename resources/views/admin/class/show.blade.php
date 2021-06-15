@extends('admin.app')
@section('title', 'Class List')
@section('content')

<main class="app-content">
    <div class="app-title">
        <div>
            <h1><i class="fa fa-info-circle"></i> Show Detail List Class</h1>
        </div>
    </div>

    <div class="row">
        <div class="col-md-12">
            <div class="tile">
                <section class="invoice">
                    <div class="row mb-4">
                        <div class="col-12 col-sm-6">
                            <span class="text-info">ID :{{ $listclass->id }}</span><br>
                        </div>
                        <div class="col-12 col-sm-6">
                            <label class="float-right">Date:
                                {{ date('d F Y', strtotime($listclass->created_at)) }}</label> <br>

                        </div>
                        <div class="col-12 col-sm-6">
                            <label><b>Karyawan:</b>
                                {{$listclass->employee != null? $listclass->employee->name:"-"}}</label>
                        </div>
                        <div class="col-12 col-sm-6">
                            <label class="float-right"><b>Order Status:</b> {{ strtoupper($listclass->status) }}</label>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-12 col-sm-6">
                            <label><b>Instructor By:</b>
                                {{ $listclass->instructor->name}}
                        </div>
                        <div class="col-12 col-sm-6">
                            <label class="float-right"><b>Location Class:</b>
                                {{ $listclass->location}}
                        </div>
                    </div>
                    <br>
                    <div class="row">
                        <div class="col-12 table-responsive">
                            <table class="table table-striped">
                                <thead>
                                    <tr>
                                        <th>Product</th>
                                        <th>Harga</th>
                                        <th>Qty</th>
                                        <th>About</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>{{ $listclass->name }}</td>
                                        <td>{{ $listclass->price }}</td>
                                        <td>{{ $listclass->qty}}</td>
                                        <td>{{ $listclass->about }}</td>
                                    </tr>
                                </tbody>
                            </table>

                        </div>
                        <br>
                        <div class="col-12">
                            @if($listclass ->status == "pending")
                            <a href="{{ route('admin.class.accept', $listclass->id)}}"
                                class="btn btn-success pull-left">Accept</a>
                            <a href="{{route('listclassindex')}}" class="btn btn-danger pull-right ml-3"><i
                                    class="fa fa-fw fa-lg fa-arrow-left"></i>Go Back</a>
                            <a href="{{ route('admin.class.decline', $listclass->id) }}"
                                class="btn btn-danger pull-right">Decline</a>
                            @elseif($listclass->status == "accepted")
                            <a href="{{ route('admin.class.cancel', $listclass->id)}}"
                                class="btn btn-danger pull-left">Canceled</a>
                            <a href="{{route('listclassindex')}}" class="btn btn-danger pull-right ml-3"><i
                                    class="fa fa-fw fa-lg fa-arrow-left"></i>Go Back</a>
                        </div>
                        @endif
                    </div>
            </div>

            </section>
        </div>
    </div>
    </div>

</main>