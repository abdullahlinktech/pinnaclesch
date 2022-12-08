@extends('layouts.admin-master', ['pageName'=> 'News & Event', 'title' => 'Edit News & Event'])
@section('title', 'Update News & Event')

@section('admin-content')
   <!-- Breadcubs Area Start Here -->

   <div class="breadcrumbs-area d-flex justify-content-between">
    <div>
        <h3>Health & Services</h3>
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
<main>
    <div class="container-fluid">
        <div class="row justify-content-center">
            <div class="col-md-12">
                <div class="form-area">
                    <h4 class="heading"><i class="fas fa-edit"></i> Edit Health & Services</h4>
                    <form action="{{ route('update.service', $service->id) }}" method="POST" enctype="multipart/form-data">
                        @csrf
                        <div class="row">
                            <div class="col-md-6 mb-2">
                                <label for="name" class="mb-1"> Name <span class="text-danger">*</span> </label>
                                <input type="text" name="name" class="form-control form-control-sm shadow-none @error('name') is-invalid @enderror" id="name" placeholder="Enter Service Name" value="{{ $service->name }}">
                                @error('name')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror

                                <label for="date" class="mb-1"> Date <span class="text-danger">*</span> </label>
                                <input type="date" name="date" class="form-control form-control-sm shadow-none @error('date') is-invalid @enderror" id="date" placeholder="Enter an date" value="{{ $service->date }}">
                                @error('date')
                                     <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                                
                                <label for="description" class="mb-1">Description</label>
                                <textarea name="description" class="form-control form-control-sm" id="editor" rows="3">{{ $service->description }}</textarea>
                                @error('description')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>

                            <div class="col-md-6 mb-2">
                                <label for="s_description" class="mb-1">Short Description</label>
                                    <textarea name="s_description" class="form-control form-control-sm" id="s_description" rows="3">{{ $service->s_description }}</textarea>
                                    @error('s_description')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror

                                <label for="image">Service Image</label>
                                <input class="form-control form-control-sm" id="image" type="file" name="image" onchange="readImgURL(this);">
                                <div class="form-group mt-2" style="margin-bottom: 0">
                                    <img class="img-thumbnail" src="#" id="previewImage" style="width: 160px;height: 130px;">
                                </div>
                            </div>
                        </div>
                        <div class="clearfix border-top">
                            <div class="float-md-right mt-2">
                                <a href="{{ route('service') }}" class="btn-fill-lg bg-blue-dark btn-hover-yellow">Prev</a>
                                <button type="submit" class="btn-fill-lg btn-gradient-yellow btn-hover-bluedark">Update</button>
                                
                            </div>
                        </div>
                    </form>
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
 
    function readImgURL(input) {
        if (input.files && input.files[0]) {
            var reader = new FileReader();
            
            reader.onload = function (e) {
                $('#previewImage')
                    .attr('src', e.target.result)
                    .width(160)
                    .height(130);
            };

            reader.readAsDataURL(input.files[0]);
        }
    }
    document.getElementById("previewImage").src="{{ asset($service->image) }}";
</script>
@endpush
