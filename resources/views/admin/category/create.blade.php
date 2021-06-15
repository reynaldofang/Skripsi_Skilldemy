@extends('admin.app')
@section('title', 'Add List Category')
@section('content')
    <main class="app-content">
        <div class="app-title">
            <div>
                <h1><i class="fa fa-plus-circle"></i> Create New List Category </h1>
            </div>
        </div>
        <div class="row">
            <div class="col-md-8 mx-auto">
                <div class="tile">
                    <form action="{{ route('admin.category.add') }}" method="POST">
                        @csrf
                        <div class="tile-body">
                            <div class="form-group">
                                <label for="name" class="control-label">Name Category</label>
                                <input type="text" name="name" id="name"
                                    class="form-control @error('name') is-invalid @enderror" />
                                @error('name')
                                    <div class="invalid-feedback">{{ $message }}</div>
                                @enderror
                            </div>
                            <div class="form-group">
                                <label for="about" class="control-label">About</label>
                                <textarea class="form-control @error('about') is-invalid @enderror" name="about" id="about"
                                    rows="25" cols="1">
                                </textarea>
                                @error('about')
                                    <div class="invalid-feedback">{{ $message }}</div>
                                @enderror
                            </div>

                            <div class="tile-footer">
                                <div class="row d-print-none mt-2">
                                    <div class="col-12 text-right">
                                        <button class="btn btn-success" type="submit"><i
                                                class="fa fa-fw fa-lg fa-check-circle"></i>Create Class</button>
                                        <a class="btn btn-danger" href="{{ route('admin.category.list') }}"><i
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
