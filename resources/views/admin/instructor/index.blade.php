@extends('admin.app')
@section('title', 'Instructor List')
@section('content')
    <main class="app-content">
        <div class="app-title">
            <div>
                <h1><i class="fa fa-th-list"></i> Data Instructor Table</h1>
                <p>Table to display analytical data effectively</p>
            </div>
        </div>
        <div class="row">
            <div class="col-md-12">
                <div class="tile">
                    <div class="tile-body">
                        <div class="table-responsive">
                            <table class="table table-hover table-bordered" id="DataListTable">
                                <thead>
                                    <tr>
                                        <th>Name</th>
                                        <th>Email</th>
                                        <th>Phone</th>
                                        <th>Teach</th>
                                        <th>Experience</th>
                                        <th>Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($instructors as $instructor)
                                        <tr>
                                            <td>{{ $instructor->name }}</td>
                                            <td>{{ $instructor->email }}</td>
                                            <td>{{ $instructor->phone }}</td>
                                            <td>{{ $instructor->category->name }}</td>
                                            <td>{{ $instructor->experience }}</td>
                                            <td>
                                                <div class="btn-group">
                                                    <a href="{{ route('admin.instructor.detail', $instructor->id) }}"
                                                        class="btn btn-sm btn-warning mr-1"><i class="fa fa-eye"
                                                            aria-hidden="true"></i></a>
                                                </div>
                                            </td>
                                        </tr>
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
