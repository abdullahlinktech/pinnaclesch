@extends('layouts.admin-master', ['pageName' => 'teacher', 'title' => 'Add teacher'])
@push('admin-css')
@endpush
@section('admin-content')
    <!-- Breadcubs Area Start Here -->

    <div class="breadcrumbs-area d-flex justify-content-between">
        <div>
            <h3>Admin Teacher</h3>
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
                    <div class="card height-auto">
                        <div class="card-body">
                            <div class="form">
                                <div class="d-flex justify-content-between heading card-header">
                                    <h4 class=""><i class="fas fa-plus"></i> Add new Teacher</h4>
                                </div>
                                <form action="{{ route('teacher.store') }}" method="POST" enctype="multipart/form-data">
                                    @csrf
                                    <div class="row">
                                        <div class="col-md-6 mb-2">
                                            <div class="row my-2">
                                                <div class="col-md-3">
                                                    <label for="name">Name <span class="text-danger"> * </span></label>
                                                </div>
                                                <div class="col-md-9">
                                                    <input
                                                        class="form-control form-control-sm @error('name') is-invalid @enderror"
                                                        id="name" type="text" name="name"
                                                        value="{{ old('name') }}" placeholder="Teacher Name">
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
                                                    <input
                                                        class="form-control form-control-sm @error('phone') is-invalid @enderror"
                                                        id="phone" type="text" name="phone"
                                                        value="{{ old('phone') }}" placeholder="Teacher phone">
                                                    @error('phone')
                                                        <span class="invalid-feedback" role="alert">
                                                            <strong>{{ $message }}</strong>
                                                        </span>
                                                    @enderror
                                                </div>
                                            </div>
                                            <div class="row my-2">
                                                <div class="col-md-3">
                                                    <label for="specality"> Spacaility <span class="text-danger"> *
                                                        </span></label>
                                                </div>
                                                <div class="col-md-9">
                                                    <input
                                                        class="form-control form-control-sm @error('specality') is-invalid @enderror"
                                                        id="specality" type="text" name="specality"
                                                        value="{{ old('name') }}" placeholder="Teacher specality">
                                                    @error('specality')
                                                        <span class="invalid-feedback" role="alert">
                                                            <strong>{{ $message }}</strong>
                                                        </span>
                                                    @enderror
                                                </div>
                                            </div>
                                            <div class="row my-2">
                                                <div class="col-md-3">
                                                    <label for="name">Designation <span class="text-danger"> *
                                                        </span></label>
                                                </div>
                                                <div class="col-md-9">
                                                    <input
                                                        class="form-control form-control-sm @error('designation') is-invalid @enderror"
                                                        id="designation" type="text" name="designation"
                                                        value="{{ old('designation') }}" placeholder="Teacher designation">
                                                    @error('designation')
                                                        <span class="invalid-feedback" role="alert">
                                                            <strong>{{ $message }}</strong>
                                                        </span>
                                                    @enderror
                                                </div>
                                            </div>
                                            <div class="row my-2">
                                                <div class="col-md-3">
                                                    <label for="image" class="">Teacher Image <small>(Size: 381px *
                                                            331px)</small></label>
                                                </div>
                                                <div class="col-md-9">
                                                    <input
                                                        class="form-control form-control-sm @error('image') is-invalid @enderror"
                                                        id="image" type="file" name="image"
                                                        onchange="readURL(this);">
                                                    @error('image')
                                                        <span class="invalid-feedback" role="alert">
                                                            <strong>{{ $message }}</strong>
                                                        </span>
                                                    @enderror
                                                </div>
                                            </div>


                                        </div>
                                        <div class="col-md-4 d-md-flex justify-content-center align-items-center">
                                            <img class="form-controlo img-thumbnail" src="#" id="previewImage"
                                                style="width: 150px;height: 120px; background: #3f4a49;">
                                        </div>
                                    </div>
                                    <hr class="my-2">
                                    <div class="clearfix mt-1">
                                        <div class="float-md-right">
                                            <button type="reset"
                                                class="btn-fill-lg bg-blue-dark btn-hover-yellow">Reset</button>
                                            <button type="submit"
                                                class="btn-fill-lg btn-gradient-yellow btn-hover-bluedark">Save</button>
                                        </div>
                                    </div>

                                </form>

                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="container-fluid">
            <div class="card my-3">
                <div class="card-header">
                    <i class="fas fa-list"></i>
                    All Teachers
                </div>
                <div class="card-body">
                    <div class="table-responsive">
                        <table class="table table-bordered text-center" id="dataTable" width="100%" cellspacing="0">
                            <thead>
                                <tr>
                                    <th>SL</th>
                                    <th>Name</th>
                                    <th>Phone</th>
                                    <th>Designation</th>
                                    <th>Specality</th>
                                    <th>Image</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                @forelse ($teacher as $key=>$item)
                                    <tr>
                                        <td>{{ $key + 1 }}</td>
                                        <td>{{ $item->name }}</td>
                                        <td>{{ $item->phone }}</td>
                                        <td>{{ $item->designation }}</td>
                                        <td>{{ $item->specality }}</td>
                                        <td><img class="border" style="height: 40px; width:50px;"
                                                src="{{ asset($item->image) }}" alt=""></td>
                                        <td>
                                            <a href="{{ route('teacher.edit', $item) }}" class="btn btn-info btn-sm"><i
                                                    class="fa fa-edit"></i></a>
                                            <button type="submit" class="btn btn-danger btn-sm"
                                                onclick="deletePartner({{ $item->id }})"><i
                                                    class="fa fa-trash"></i></button>
                                            <form id="delete-form-{{ $item->id }}"
                                                action="{{ route('teacher.delete', $item) }}" method="POST"
                                                style="display: none;">
                                                @csrf
                                                @method('DELETE')
                                            </form>
                                        </td>
                                    </tr>
                                @empty
                                    <tr>
                                        <td rowspan="5">Data Not Found</td>
                                    </tr>
                                @endforelse

                            </tbody>
                        </table>
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
        document.getElementById("previewImage").src = "/uploads/no.png";
    </script>
    <script src="https://unpkg.com/sweetalert2@7.19.1/dist/sweetalert2.all.js"></script>
    <script type="text/javascript">
        function deletePartner(id) {
            swal({
                title: 'Are you sure?',
                text: "You want to Delete this!",
                type: 'warning',
                showCancelButton: true,
                confirmButtonColor: '#3085d6',
                cancelButtonColor: '#d33',
                confirmButtonText: 'Yes, delete it!',
                cancelButtonText: 'No, cancel!',
                confirmButtonClass: 'btn btn-success',
                cancelButtonClass: 'btn btn-danger',
                buttonsStyling: false,
                reverseButtons: true
            }).then((result) => {
                if (result.value) {
                    event.preventDefault();
                    document.getElementById('delete-form-' + id).submit();
                } else if (
                    // Read more about handling dismissals
                    result.dismiss === swal.DismissReason.cancel
                ) {
                    swal(
                        'Cancelled',
                        'Your data is safe :)',
                        'error'
                    )
                }
            })
        }
    </script>
@endpush
