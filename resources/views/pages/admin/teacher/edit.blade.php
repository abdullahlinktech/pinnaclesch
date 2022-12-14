@extends('layouts.admin-master', ['pageName' => 'teacher', 'title' => 'Edit teacher'])
{{-- @section('title', 'Our Partner') --}}
@push('admin-css')
@endpush
@section('admin-content')
    <!-- Breadcubs Area Start Here -->

    <div class="breadcrumbs-area d-flex justify-content-between">
        <div>
            <h3>Update Teacher</h3>
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
                <div class="col-md-12">
                    <div class="card heaight-auto">
                        <div class="d-flex justify-content-between heading card-header">
                            <h4 class=""><i class="fa fa-edit"></i> Edit Teacher</h4>
                            <div>
                                <a href="{{ route('dashboard') }}"
                                    class="btn btn-primary btn-sm overflow-hidden">Dashboard</a>
                            </div>
                        </div>
                        <div class="card-body">
                            <div class="form">
                              
                                <form action="{{ route('teacher.update', $teacher) }}" method="POST"
                                    enctype="multipart/form-data">
                                    @csrf
                                    @method('PUT')
                                    <div class="row">
                                        <div class="col-md-6 mb-2">
                                            <div class="row my-2">
                                                <div class="col-md-3">
                                                    <label for="name">Name <span class="text-danger"> * </span></label>
                                                </div>
                                                <div class="col-md-9">
                                                    <input class="form-control @error('name') is-invalid @enderror"
                                                        id="name" type="text" name="name"
                                                        value="{{ $teacher->name }}" placeholder=" name">
                                                    @error('name')
                                                        <span class="invalid-feedback" role="alert">
                                                            <strong>{{ $message }}</strong>
                                                        </span>
                                                    @enderror
                                                </div>
                                            </div>
                                            <div class="row my-2">
                                                <div class="col-md-3">
                                                    <label for="phone">Phone <span class="text-danger"> * </span></label>
                                                </div>
                                                <div class="col-md-9">
                                                    <input class="form-control @error('phone') is-invalid @enderror"
                                                        id="phone" type="text" name="phone"
                                                        value="{{ $teacher->phone }}" placeholder=" phone">
                                                    @error('phone')
                                                        <span class="invalid-feedback" role="alert">
                                                            <strong>{{ $message }}</strong>
                                                        </span>
                                                    @enderror
                                                </div>
                                            </div>
                                            <div class="row my-2">
                                                <div class="col-md-3">
                                                    <label for="designation"> Designation <span class="text-danger"> *
                                                        </span></label>
                                                </div>
                                                <div class="col-md-9">
                                                    <input class="form-control @error('designation') is-invalid @enderror"
                                                        id="designation" type="text" name="designation"
                                                        value="{{ $teacher->designation }}"
                                                        placeholder="Teacher designation">
                                                    @error('designation')
                                                        <span class="invalid-feedback" role="alert">
                                                            <strong>{{ $message }}</strong>
                                                        </span>
                                                    @enderror
                                                </div>
                                            </div>
                                            <div class="row my-2">
                                                <div class="col-md-3">
                                                    <label for="specality"> Specality <span class="text-danger"> *
                                                        </span></label>
                                                </div>
                                                <div class="col-md-9">
                                                    <input class="form-control @error('specality') is-invalid @enderror"
                                                        id="specality" type="text" name="specality"
                                                        value="{{ $teacher->specality }}" placeholder="teacher specality">
                                                    @error('specality')
                                                        <span class="invalid-feedback" role="alert">
                                                            <strong>{{ $message }}</strong>
                                                        </span>
                                                    @enderror
                                                </div>
                                            </div>
                                            <div class="row my-2">
                                                <div class="col-md-3">
                                                    <label for="image" class="mt-1"> Image <small>(Size: 381px *
                                                            331px)</small></label>
                                                </div>
                                                <div class="col-md-9">
                                                    <input class="form-control" id="image" type="file" name="image"
                                                        onchange="readURL(this);">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-4 offset-md-1 mt-3">
                                            <img class="form-controlo img-thumbnail" src="#" id="previewImage"
                                                style="width: 150px;height: 120px; background: #3f4a49;">
                                        </div>
                                    </div>
                                    <hr class="my-2">
                                    <div class="clearfix mt-1">
                                        <div class="float-md-left">
                                            <a href="{{ route('teacher.index') }}" id="prev"
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
    <script>
        function readURL(input) {
            if (input.files && input.files[0]) {
                var reader = new FileReader();

                reader.onload = function(e) {
                    $('#previewImage')
                        .attr('src', e.target.result)
                        .width(150)
                        .height(120);
                };

                reader.readAsDataURL(input.files[0]);
            }
        }
        document.getElementById("previewImage").src = "{{ asset($teacher->image) }}";
    </script>
@endpush
