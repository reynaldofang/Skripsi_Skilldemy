@extends('admin.app')
@section('title', 'Order List')
@section('content')
<main class="app-content">
    <div class="app-title">
        <div>
            <h1><i class="fa fa-th-list"></i> Data Order List Table</h1>
            <p>Table to display analytical data effectively</p>
        </div>
    </div>

    @if (session('status'))
    <div class="alert alert-success">
        {{ session('status') }}
    </div>
    @endif

    <div class="row">
        <div class="col-md-12">
            <div class="tile">
                <div class="tile-body">
                    <div class="table-responsive">
                        <table class="table table-hover table-bordered " id="DataListTable">
                            <thead>
                                <tr>
                                    <th>Order Number</th>
                                    <th>Placed By</th>
                                    <th>Date</th>
                                    <th class="text-center">Total Amount</th>
                                    <th>Process By</th>
                                    <th>Payment Status</th>
                                    <th>Status</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($listclasses as $listclass)
                                @if( $listclass->employee_id == Auth::user()->id || $listclass->employee_id == null)
                                <tr>
                                    <td>{{ $listclass->id }}</td>
                                    <td>{{ $listclass->name }}</td>
                                    <td>{{ date('D, d F Y', strtotime($listclass->date)) }}</td>
                                    <td>{{ $listclass->category->name }}</td>
                                    <td>Rp
                                        {{ number_format($listclass->price, 0, ',', '.') }}</td>
                                    <td>{{ $listclass->qty }}</td>
                                    <td class="text-center">
                                        {{ $listclass->employee != null? $listclass->employee->name:"-"}}</td>
                                    <td class="text-center">{{ $listclass->instructor->name }}</td>
                                    <td class="text-center">
                                        @if ($listclass->status == "pending")
                                        <span class="badge badge-warning text-uppercase">{{ $listclass->status }}</span>
                                        @elseif($listclass->status == "accepted")
                                        <span class="badge badge-success text-uppercase">{{ $listclass->status }}</span>
                                        @elseif($listclass->status == "decline")
                                        <span class="badge badge-danger text-uppercase">{{ $listclass->status }}</span>
                                        @elseif($listclass->status == "canceled")
                                        <span class="badge badge-danger text-uppercase">{{ $listclass->status }}</span>
                                        @endif
                                    </td>
                                    <td>
                                        @if ($listclass->status == "accepted")
                                        @if ($listclass->active == 1)
                                        <span class="badge badge-success text-uppercase">On going</span>
                                        @else
                                        <span class="badge badge-danger text-uppercase">Closed</span>
                                        @endif
                                        @endif
                                    </td>
                                    <td>
                                        @if ($listclass->status == "pending")
                                        <div class="btn-group">
                                            <a href="{{ route('admin.class.show', $listclass->id) }}"
                                                onclick="return confirm('Are you Sure?')"
                                                class="btn btn-sm btn-success mr-1"><i class="fa fa-tasks"
                                                    aria-hidden="true"></i></a>

                                            <form action="{{ route('admin.class.delete', $listclass->id) }}"
                                                method="POST">
                                                @csrf
                                                @method('DELETE')
                                                <button type="submit" class="btn btn-sm btn-danger"><i
                                                        class="fa fa-trash"></i></button>
                                            </form>
                                        </div>
                                        @elseif($listclass->status == "accepted")
                                        <div class="btn-group">
                                            <a href="{{ route('admin.class.show', $listclass->id) }}"
                                                onclick="return confirm('Are you Sure?')"
                                                class="btn btn-sm btn-success mr-1"><i class="fa fa-tasks"
                                                    aria-hidden="true"></i></a>
                                            <a href="{{ route('admin.class.edit', $listclass->id) }}"
                                                onclick="return confirm('Are you Sure?')"
                                                class="btn btn-sm btn-info mr-1 "><i class="fa fa-pencil-square-o"
                                                    aria-hidden="true"></i></a>
                                            <form action="{{ route('admin.class.delete', $listclass->id) }}"
                                                method="POST">
                                                @csrf
                                                @method('DELETE')
                                                <button type="submit" class="btn btn-sm btn-danger"><i
                                                        class="fa fa-trash"></i></button>


                                            </form>
                                        </div>
                                        @elseif($listclass->status == "decline")
                                        <div class="btn-group">
                                            <a href="{{ route('admin.class.show', $listclass->id) }}"
                                                onclick="return confirm('Are you Sure?')"
                                                class="btn btn-sm btn-success mr-1"><i class="fa fa-tasks"
                                                    aria-hidden="true"></i></a>

                                            <form action="{{ route('admin.class.delete', $listclass->id) }}"
                                                method="POST">
                                                @csrf
                                                @method('DELETE')
                                                <button type="submit" class="btn btn-sm btn-danger"><i
                                                        class="fa fa-trash"></i></button>
                                            </form>
                                        </div>
                                        @elseif($listclass->status == "canceled")
                                        <div class="btn-group">
                                            <a href="{{ route('admin.class.show', $listclass->id) }}"
                                                onclick="return confirm('Are you Sure?')"
                                                class="btn btn-sm btn-success mr-1"><i class="fa fa-tasks"
                                                    aria-hidden="true"></i></a>

                                            <form action="{{ route('admin.class.delete', $listclass->id) }}"
                                                method="POST">
                                                @csrf
                                                @method('DELETE')
                                                <button type="submit" class="btn btn-sm btn-danger"><i
                                                        class="fa fa-trash"></i></button>
                                            </form>
                                        </div>
                                        @endif
                                    </td>
                                </tr>
                                @endif
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</main>
@endsection