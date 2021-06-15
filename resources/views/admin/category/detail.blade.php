@extends('admin.app')
@section('title', 'Details List Category')
@section('content')
    <main class="app-content">
        <div class="app-title">
            <div>
                <h1><i class="fa fa-info-circle"></i> Detail List Category </h1>
            </div>
        </div>
        <div class="row">
            <div class="col-md-8 mx-auto">
                <div class="tile"> 
                        <dl class="row border border-secondary" style="border: 4px;">
                            <dt class="col-sm-3 text-left">Name Category :</dt>
                            <dd class="col-sm-9 text-center">{{ $categories->name }}</dd>
                        </dl>
                        <dl class="row border border-secondary" style="border: 4px;">
                            <dt class="col-sm-3">About Category : </dt>
                            <dd class="col-sm-9 text-center">{{ $categories->about }}</dd>
                        </dl>
                        <dl class="row border border-secondary" style="border: 4px;">
                            <dt class="col-sm-3">Icon Category : </dt>
                            <dd class="col-sm-9"><img id="previewImg"
                                    src="{{ asset('storage/icons') }}/{{ $categories->iconImage }}"
                                    alt="Last Class Image"
                                    style="max-width: 130px; margin-top: 20px; background-color: #000000;" /></dd>
                        </dl>
                        <dl class="row border border-secondary" style="border: 4px;">
                            <dt class="col-sm-3">Image Category : </dt>
                            <dd class="col-sm-9">
                                <img id="previewImg" src="{{ asset('storage/images') }}/{{ $categories->fileimage }}"
                                    alt="Last Class Image" style="max-width: 130px; margin-top: 20px;" />
                            </dd>
                        </dl>
                        <div class="tile-footer">
                            <div class="row d-print-none mt-2">
                                <div class="col-12 text-right">
                                    <a class="btn btn-danger" href="{{ route('admin.category.list') }}"><i
                                            class="fa fa-fw fa-lg fa-arrow-left"></i>Go Back</a>
                                </div>
                            </div>
                        </div>
                </div>
            </div>
        </div>
    </main
