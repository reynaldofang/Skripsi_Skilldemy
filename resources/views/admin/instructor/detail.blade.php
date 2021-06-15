@extends('admin.app')
@section('title', 'Detail Instructors')
@section('content')
    <main class="app-content">
        <div class="app-title">
            <div>
                <h1><i class="fa fa-info-circle"></i> Detail Instructors List </h1>
            </div>
        </div>
        <div class="row">
            <div class="col-md-8 mx-auto">
                <div class="tile"> 
                        <dl class="row">
                            <dt class="col-sm-3">Name Instructor</dt>
                            <dd class="col-sm-9">{{ $instructors->name }}</dd>
                        </dl>
                        <dl class="row">
                            <dt class="col-sm-3">Email Instructor</dt>
                            <dd class="col-sm-9">{{ $instructors->email }}</dd>
                        </dl>
                        <dl class="row">
                            <dt class="col-sm-3">Phone Instructor</dt>
                            <dd class="col-sm-9">{{ $instructors->phone }}</dd>
                        </dl>
                        <dl class="row">
                            <dt class="col-sm-3">About Instructor</dt>
                            <dd class="col-sm-9">{{ $instructors->about }}</dd>
                        </dl>
                        <dl class="row">
                            <dt class="col-sm-3">Category Instructor</dt>
                            <dd class="col-sm-9">{{ $instructors->category->name }}</dd>
                        </dl>
                        <dl class="row">
                            <dt class="col-sm-3">Experience Instructor</dt>
                            <dd class="col-sm-9">{{ $instructors->experience }}</dd>
                        </dl>

                        <div class="tile-footer">
                            <div class="row d-print-none mt-2">
                                <div class="col-12 text-right">
                                    <a class="btn btn-danger" href="{{ route('admin.instructor.list') }}"><i
                                            class="fa fa-fw fa-lg fa-arrow-left"></i>Go Back</a>
                                </div>
                            </div>
                        </div>
                </div>
            </div>
        </div>
    </main
