@extends('admin.app')
@section('title', 'List Class Edit')
@section('content')
    <main class="app-content">
        <div class="app-title">
            <div>
                <h1><i class="fa fa-pencil-square"></i> Edit Category List</h1>
            </div>
        </div>
        <div class="row">
            <div class="col-md-8 mx-auto">
                <div class="tab-content">
                    <div class="tile">
                        <form action="{{ route('admin.category.update', $categories->id) }}" method="POST"
                            enctype="multipart/form-data">
                            @csrf
                            <div class="tile-body">
                                <div class="form-group">
                                    <label for="name" class="control-label">Name Category</label>
                                    <input type="text" class="form-control" name="name" id="name"
                                        value=" {{ $categories->name }}" />
                                </div>
                                <div class="form-group">
                                    <label for="date" class="control-label">About</label>
                                    <textarea class="form-control" name="about" id="about" rows="25" cols="1">
                                            {{ $categories->about }}
                                                </textarea>
                                </div>

                                <div class="form-group">
                                    <label for="file">Choose Profile Image</label>
                                    <input type="file" name="iconImage" class="form-control"
                                        value="{{ $categories->iconImage }}" onchange="previewFile(this)" />
                                    <img id="previewImg" src="{{ asset('storage/icons') }}/{{ $categories->iconImage }}"
                                        alt="Last Class Image" style="max-width: 130px; margin-top: 20px; background-color: #000000;" />
                                </div>

                                <div class="form-group">
                                    <label for="file">Choose Profile Image</label>
                                    <input type="file" name="fileimage" class="form-control"
                                        value="{{ $categories->fileimage }}" onchange="previewFile(this)" />
                                    <img id="previewImg"
                                        src="{{ asset('storage/images') }}/{{ $categories->fileimage }}"
                                        alt="Last Class Image" style="max-width: 130px; margin-top: 20px;" />
                                </div>

                                <div class="tile-footer">
                                    <div class="row d-print-none mt-2">
                                        <div class="col-12 text-right">
                                            <button class="btn btn-success" type="submit"><i
                                                    class="fa fa-fw fa-lg fa-check-circle"></i>Edit Category</button>
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
        </div>
    </main>

@endsection
