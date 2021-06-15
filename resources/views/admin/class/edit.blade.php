@extends('admin.app')
@section('title', 'List Class Edit')
@section('content')
<main class="app-content">
    <div class="app-title">
        <div>
            <h1><i class="fa fa-pencil-square"></i>Edit Class List</h1>
        </div>
    </div>
    <div class="row">
        <div class="col-md-8 mx-auto">
            <div class="tab-content">
                <div class="tile">
                    <form action="{{ route('admin.class.update', $listclass->id) }}" method="POST"
                        enctype="multipart/form-data">
                        @csrf
                        <div class="tile-body">
                            <div class="form-group">
                                <label for="name" class="control-label">Name Class</label>
                                <input type="text" class="form-control" name="name" id="name"
                                    value=" {{ $listclass->name }}" />
                            </div>
                            <div class="form-group">
                                <label for="date" class="control-label">Date</label>
                                <input type="date" class="form-control" name="date" id="date"
                                    value="{{ $listclass->date }}" />
                            </div>
                            <div class="form-group">
                                <label for="about" class="control-label">About</label>
                                <textarea class="form-control" name="about" id="about" rows="10"
                                    cols="1">{{ $listclass->about }}</textarea>
                            </div>
                            <div class="form-group">
                                <label for="instructor_id" class="control-label">Instructor Name</label>
                                <select name="instructor_id" id="instructor_id" class="form-control">
                                    <option selected disabled hidden>Select Your Instructor</option>
                                    @foreach ($instructors as $item)
                                    <option value="{{ $item->id }}"
                                        {{ $listclass->instructor_id == $item->id ? 'selected' : null }}>
                                        {{ $item->name }}
                                    </option>
                                    @endforeach
                                </select>
                            </div>
                            <div class="form-group">
                                <label for="location" class="control-label">Location</label>
                                <input type="text" class="form-control" name="location" id="location"
                                    value="{{ $listclass->location }}" />
                            </div>
                            <div class="form-group">
                                <label for="category_id">Category Teach</label>
                                <select name="category_id" id="category_id" class="form-control">
                                    <option value="" selected disabled hidden>Choose Category</option>
                                    @foreach ($categories as $item)
                                    <option value="{{ $item->id }}"
                                        {{ $listclass->category_id == $item->id ? 'selected' : null }}>
                                        {{ $item->name }}
                                    </option>
                                    @endforeach
                                </select>
                            </div>
                            <div class="form-group">
                                <label for="price" class="control-label">Price</label>
                                <input type="number" class="form-control" name="price" id="price"
                                    value="{{ $listclass->price }}" />
                            </div>
                            <div class="form-group">
                                <label for="qty" class="control-label">Qty</label>
                                <input type="number" class="form-control" name="qty" id="qty"
                                    value="{{ $listclass->qty }}" />
                            </div>
                            <div class="form-group">
                                <label for="file">Choose Profile Image</label>
                                <input type="file" name="fileimage" class="form-control"
                                    value="{{ $listclass->fileimage }}" onchange="previewFile(this)" />
                                <img id="previewImg" src="{{ asset('storage/images') }}/{{ $listclass->fileimage }}"
                                    alt="Last Class Image" style="max-width: 130px; margin-top: 20px;" />
                            </div>
                            <div class="form-group custom-control custom-switch">
                                <input type="checkbox" class="custom-control-input" name="active" id="active"
                                    {{ $listclass->active == 1 ? 'checked' : '' }} />
                                <label class="custom-control-label" for="active">On Going Class</label>
                            </div>

                            <div class="form-group">
                                <button type="submit" class="btn btn-success">Confirm</button>
                            </div>
                        </div>
                    </form>
                </div>



            </div>
        </div>
    </div>
</main>

@endsection

@push('scripts')
<script type="text/javascript" src="{{ asset('backend/js/plugins/select2.min.js') }}"></script>
<script type="text/javascript" src="{{ asset('backend/js/plugins/dropzone/dist/min/dropzone.min.js') }}"></script>
<script type="text/javascript" src="{{ asset('backend/js/plugins/bootstrap-notify.min.js') }}"></script>
<script type="text/javascript" src="{{ asset('backend/js/app.js') }}"></script>
<script>
    function previewFile(input) {
            var file = $("input[type=file]").get(0).files[0];
            if (file) {
                var reader = new FileReader();
                reader.onload = function() {
                    $("#previewImg").attr("src", reader.result);
                }
                reader.readAsDataURL(file);
            }
        }

</script>
@endpush