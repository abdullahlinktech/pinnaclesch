@extends('layouts.admin-master', ['pageName' => 'category', 'title' => 'Edit Category'])
{{-- @section('title', 'Our Partner') --}}
@push('admin-css')
@endpush
@section('admin-content')
    <!-- Breadcubs Area Start Here -->

    <div class="breadcrumbs-area d-flex justify-content-between">
        <div>
            <h3>Update Category</h3>
        </div>
        <div class="">
            <ul>
                <li>
                    <a href="{{ route('dashboard') }}">Home</a>
                </li>
                <li>Admin</li>
            </ul>
        </div>

    </div>
    <!-- Breadcubs Area End Here -->
    <main class="vh-100">
        <div class="container-fluid">
            <div class="row justify-content-center">
                <div class="col-md-6">
                    <div class="card heaight-auto">
                        <div class="card-body">
                            <div class="form">
                                <div class="d-flex justify-content-between heading card-header">
                                    <h4 class=""><i class="fa fa-edit"></i> Edit Category</h4>
                                    <div>
                                        <a href="{{ route('dashboard') }}"
                                            class="btn btn-primary btn-sm overflow-hidden">Dashboard</a>
                                    </div>
                                </div>
                                <form action="{{ route('category.update', $category) }}" method="POST"
                                    enctype="multipart/form-data">
                                    @csrf
                                    @method('PUT')
                                    <div class="row">
                                        <div class="col-md-12 mb-2">
                                            <div class="row my-2">
                                                <div class="col-md-3">
                                                    <label for="name">Name <span class="text-danger"> * </span></label>
                                                </div>
                                                <div class="col-md-9">
                                                    <input class="form-control @error('name') is-invalid @enderror"
                                                        id="name" type="text" name="name"
                                                        value="{{ $category->name }}" placeholder="Teacher name">
                                                    @error('name')
                                                        <span class="invalid-feedback" role="alert">
                                                            <strong>{{ $message }}</strong>
                                                        </span>
                                                    @enderror
                                                </div>
                                            </div>
                                        
                                        </div>
                                       
                                    </div>
                                    <hr class="my-2">
                                    <div class="clearfix mt-1">
                                        <div class="float-md-left">
                                            <a href="{{ route('category.index') }}" id="prev"
                                                class="btn-fill-lg bg-blue-dark btn-hover-yellow">Back</a>

                                            <button type="submit"
                                                class="btn-fill-lg btn-gradient-yellow btn-hover-bluedark">Update</button>

                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </main>
@endsection
@push('admin-js')

@endpush
