@extends('admin.app')
@section('title', 'Category List')
@section('content')
    <main class="app-content">
        <div class="app-title">
            <div>
                <h1><i class="fa fa-th-list"></i> Data Category Table</h1>
                <p>Table to display analytical data effectively</p>
            </div>
            <div>
                <a href="{{ route('admin.category.create') }}" class="btn btn-success"><i class="fa fa-book"
                        aria-hidden="true"></i>Add Category</a>
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
                            <table class="table table-hover table-bordered" id="DataListTable">
                                <thead>
                                    <tr>
                                        <th>Name</th>
                                        <th>Slug</th>
                                        <th>Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($categories as $category)
                                        <tr>
                                            <td>{{ $category->name }}</td>
                                            <td>{{ $category->slug }}</td>
                                            <td>
                                                <div class="btn-group">
                                                    <a href="{{ route('admin.category.detail', $category->id) }}"
                                                        class="btn btn-sm btn-warning mr-1"><i class="fa fa-eye"
                                                            aria-hidden="true"></i></a>
                                                    <a href="{{ route('admin.category.edit', $category->id) }}"
                                                        onclick="return confirm('Are you Sure?')"
                                                        class="btn btn-sm btn-info mr-1"><i class="fa fa-pencil-square-o"
                                                            aria-hidden="true"></i></a>
                                                    <form action="{{ route('admin.category.delete', $category->id) }}"
                                                        method="POST">
                                                        @csrf
                                                        @method('DELETE')
                                                        <button type="submit" class="btn btn-sm btn-danger"><i
                                                                onclick="return confirm('Are you want delete?')"
                                                                class="fa fa-trash"></i></button>
                                                    </form>
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
