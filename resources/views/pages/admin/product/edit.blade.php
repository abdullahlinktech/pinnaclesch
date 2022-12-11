@extends('layouts.admin-master', ['pageName'=> 'product', 'title' => 'Edit Product'])
@section('admin-content')
   <!-- Breadcubs Area Start Here -->

   <div class="breadcrumbs-area d-flex justify-content-between">
    <div>
        <h3>Update Product </h3>
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
                    <div class="card-body">
                        <div class="form">
                            <div class="d-flex justify-content-between heading card-header">
                                <h4 class=""><i class="fa fa-edit"></i> Edit Product</h4>
                                <div>
                                    <a href="{{ route('dashboard') }}" class="btn btn-primary btn-sm overflow-hidden">Dashboard</a>
                                </div>
                            </div>
                            <form action="{{ route('product.update', $shop) }}" method="POST" enctype="multipart/form-data">
                                @csrf
                                @method('PUT')
                                <div class="row">
                                    <div class="col-md-6 mb-2">
                                        <div class="row my-2">
                                            <div class="col-md-3">
                                                <label for="title"> Category Name <span class="text-danger"> *
                                                    </span></label>
                                            </div>
                                            <div class="col-md-9">
                                              <select name="category_id" class="form-control form-control-sm" id="category_id">
                                                <option value="" label="-- Select Category--"></option>
                                                @foreach ($category as $item)
                                                <option value="{{$item->id}}" {{$item->id == $shop->category_id ? 'selected' : ''}}>{{$item->name}}</option>
                                                @endforeach
                                              </select>
                                            </div>
                                        </div>
                                        <div class="row my-2">
                                            <div class="col-md-3">
                                                <label for="title"> Title <span class="text-danger"> * </span></label>
                                            </div>
                                            <div class="col-md-9">
                                            <input class="form-control @error('title') is-invalid @enderror" id="title" type="text" name="title" value="{{ $shop->title }}" placeholder="title">
                                            @error('title')
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                            @enderror
                                            </div>
                                        </div>
                                        <div class="row my-2">
                                            <div class="col-md-3">
                                                <label for="price"> Price <span class="text-danger"> * </span></label>
                                            </div>
                                            <div class="col-md-9">
                                            <input class="form-control @error('price') is-invalid @enderror" id="price" type="text" name="price" value="{{ $shop->price }}" placeholder="price">
                                            @error('price')
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                            @enderror
                                            </div>
                                        </div>
                                        <div class="row my-2">
                                            <div class="col-md-3">
                                                <label for="name">Short Description </label>
                                            </div>
                                            <div class="col-md-9">
                                                <textarea name="s_description" id="editor1" cols="30" rows="10">{{ $shop->s_description }}</textarea>
                                                @error('s_description')
                                                    <span class="invalid-feedback" role="alert">
                                                        <strong>{{ $message }}</strong>
                                                    </span>
                                                @enderror
                                            </div>
                                        </div>
                               
                                        <div class="row my-2">
                                            <div class="col-md-3">
                                                <label for="description"> Description <span class="text-danger"> * </span></label>
                                            </div>
                                            <div class="col-md-9">
                                                <textarea name="description" id="editor" cols="30" rows="10">{{ $shop->description }}</textarea>
                                              @error('description')
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                             @enderror
                                            </div>
                                        </div>
                          
                                        <div class="row my-2">
                                            <div class="col-md-3">
                                                <label for="image" class="mt-1"> Image <small>(Size: 400px * 150px)</small></label>
                                            </div>
                                            <div class="col-md-9">
                                                <input class="form-control" id="image" type="file" name="image" onchange="readURL(this);">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-4 offset-md-1 mt-3">
                                        <img class="form-controlo img-thumbnail" src="#" id="previewImage" style="width: 150px;height: 120px; background: #3f4a49;">
                                    </div>
                                </div>
                                <hr class="my-2">
                                <div class="clearfix mt-1">
                                    <div class="float-md-left">
                                        <a href="{{route('product.index')}}" id="prev" class="btn-fill-lg bg-blue-dark btn-hover-yellow">Back</a>
                                        <button type="submit" class="btn-fill-lg btn-gradient-yellow btn-hover-bluedark">Update</button>
                                    
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
<script src="https://cdn.ckeditor.com/ckeditor5/35.3.2/classic/ckeditor.js"></script>
<script>
    ClassicEditor
        .create( document.querySelector( '#editor' ) )
        .catch( error => {
            console.error( error );
        } );
</script>
<script>
    ClassicEditor
        .create( document.querySelector( '#editor1' ) )
        .catch( error => {
            console.error( error );
        } );
</script>

<script>
    function readURL(input) {
        if (input.files && input.files[0]) {
            var reader = new FileReader();
            
            reader.onload = function (e) {
                $('#previewImage')
                    .attr('src', e.target.result)
                    .width(150)
                    .height(120);
            };

            reader.readAsDataURL(input.files[0]);
        }
    }
    document.getElementById("previewImage").src="{{ asset($shop->image) }}";
</script>
@endpush