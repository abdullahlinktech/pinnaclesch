@extends('layouts.admin-master', ['pageName' => 'notice', 'title' => 'Add Notice'])
@push('admin-css')
@endpush
@section('admin-content')
    <!-- Breadcubs Area Start Here -->

    <div class="breadcrumbs-area d-flex justify-content-between">
        <div>
            <h3>Notice </h3>
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
    <main class="">
        <div class="container-fluid">
            <div class="row justify-content-center">
                <div class="col-md-12">
                    <div class="card height-auto">
                        <div class="d-flex justify-content-between heading card-header">
                            <h4 class=""><i class="fas fa-plus"></i> Add Notice</h4>
                        </div>
                        <div class="card-body">
                            <div class="form">
                              
                                <form action="{{ route('notice.store') }}" method="POST" enctype="multipart/form-data">
                                    @csrf
                                    <div class="row">
                                        <div class="col-md-6 mb-2">
                                            <div class="row my-2">
                                                <div class="col-md-3">
                                                    <label for="title"> Notice Type <span class="text-danger"> *
                                                        </span></label>
                                                </div>
                                                <div class="col-md-9">
                                                    <select class=" form-control form-control-sm" name="notice_type" id=""  >
                                                        <option value="" label="-- Select notice type --"></option>
                                                        <option  value="tn">Teachers Notice</option>
                                                        <option  value="sn">Students Notice</option>
                                                        <option  value="gn">Gaurdian Notice</option>
                                                        <option  value="jn">Job Notice</option>
                                                
                                                     
                                                    </select>
                                                </div>
                                            </div>
                                            <div class="row my-2">
                                                <div class="col-md-3">
                                                    <label for="title"> Title <span class="text-danger"> *
                                                        </span></label>
                                                </div>
                                                <div class="col-md-9">
                                                    <input
                                                        class="form-control form-control-sm @error('title') is-invalid @enderror"
                                                        id="title" type="text" name="title"
                                                        value="{{ old('title') }}" placeholder=" title">
                                                    @error('title')
                                                        <span class="invalid-feedback" role="alert">
                                                            <strong>{{ $message }}</strong>
                                                        </span>
                                                    @enderror
                                                </div>
                                            </div>
                                       
                                            <div class="row my-2">
                                                <div class="col-md-3">
                                                    <label for="date"> Date <span class="text-danger"> *
                                                        </span></label>
                                                </div>
                                                <div class="col-md-9">
                                                    <input
                                                        class="form-control form-control-sm @error('date') is-invalid @enderror"
                                                        id="date" type="date" name="date"
                                                        value="{{ old('date') }}" placeholder=" date">
                                                    @error('date')
                                                        <span class="invalid-feedback" role="alert">
                                                            <strong>{{ $message }}</strong>
                                                        </span>
                                                    @enderror
                                                </div>
                                            </div>
                                     
                                            <div class="row my-2">
                                                <div class="col-md-3">
                                                    <label for="name">Description <span class="text-danger"> *
                                                        </span></label>
                                                </div>
                                                <div class="col-md-9">
                                                    <textarea name="description" id="editor" cols="30" rows="10"></textarea>
                                                    @error('description')
                                                        <span class="invalid-feedback" role="alert">
                                                            <strong>{{ $message }}</strong>
                                                        </span>
                                                    @enderror
                                                </div>
                                            </div>
                                            {{-- <div class="row my-2">
                                                <div class="col-md-3">
                                                    <label for="image" class="">Pdf/Excel <small></small></label>
                                                </div>
                                                <div class="col-md-9">
                                                    <input
                                                        class="form-control form-control-sm @error('link') is-invalid @enderror"
                                                        id="link" type="file" name="link"
                                                        onchange="readURL(this);">
                                                    @error('link')
                                                        <span class="invalid-feedback" role="alert">
                                                            <strong>{{ $message }}</strong>
                                                        </span>
                                                    @enderror
                                                </div>
                                            </div> --}}


                                        </div>
                                        {{-- <div class="col-md-4 d-md-flex justify-content-center align-items-center">
                                            <img class="form-controlo img-thumbnail" src="#" id="previewImage"
                                                style="width: 150px;height: 120px; background: #3f4a49;">
                                                <iframe class="form-controlo img-thumbnail" src="#" frameborder="0" id="previewImage" style="width: 150px;height: 120px; background: #3f4a49;"></iframe>
                                        </div> --}}
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
                    Notice
                </div>
                <div class="card-body">
                    <div class="table-responsive">
                        <table class="table table-bordered text-center" id="dataTable" width="100%" cellspacing="0">
                            <thead>
                                <tr>
                                    <th>SL</th>
                                    <th>Title</th>
                                    <th>Date</th>
                                    {{-- <th>Description</th> --}}
                                    <th>Notice Type</th>
                                    {{-- <th>file</th> --}}
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                @forelse ($notice as $key=>$item)
                                <tr>
                                    <td>{{ $key+1 }}</td>
                                    <td>{{ $item->title }}</td>
                                    <td>{{ $item->date }}</td>
                                    <td>
                                        @if ($item->notice_type == 'sn')
                                            Student Notice
                                        @elseif ($item->notice_type == 'tn')
                                            Teacher Notice
                                        @elseif ($item->notice_type == 'gn')
                                            Gaurdian Notice
                                        @elseif ($item->notice_type == 'jn')
                                            Job Notice
                                        @endif                                        
                                    </td>
                                    {{-- <td>{!! $item->description !!}</td> --}}
                                    {{-- <td> <iframe src="{{ asset($item->link) }}" height="50px" width="50px" frameborder="0"></iframe>
                                        <img class="border" style="height: 40px; width:50px;" src="{{ asset($item->link) }}" alt=""></td> --}}
                                    <td>
                                        <a href="{{ route('notice.edit',$item) }}" class="btn btn-info btn-sm"><i class="fa fa-edit"></i></a>
                                        <button type="submit" class="btn btn-danger btn-sm" onclick="deletePartner({{ $item->id }})"><i class="fa fa-trash"></i></button>
                                        <form id="delete-form-{{$item->id}}" action="{{route('notice.delete',$item)}}" method="POST" style="display: none;">
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
<script src="https://cdn.ckeditor.com/ckeditor5/35.3.2/classic/ckeditor.js"></script>
<script>
    ClassicEditor
        .create( document.querySelector( '#editor' ) )
        .catch( error => {
            console.error( error );
        } );
</script>
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
