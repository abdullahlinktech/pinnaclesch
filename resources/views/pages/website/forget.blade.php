@extends('layouts.website', ['pageName' => 'gallery'])
@section('title', 'Photo Gallery')
@push('web-css')
<link rel="stylesheet" href="{{asset('website/css/login.css')}}">
    
@endpush
@section('web-content')
    <div id="main">
        <div class="breadcrumb-section">
            <div class="container">
                <h1>Student login</h1>
                <div class="breadcrumb">
                    <a href="{{ route('home') }}">Home</a>
                    <span class="fa fa-angle-double-right"></span>
                    <span class="current">Student login</span>
                </div>
            </div>
        </div>
        <div class="login-page">
        <div class="container">
            <div class="signin-wrapper">
                <form method="post" action="">
                    <div class="signin-box">
                       
                        <h3 class="signin-title-secondary text-center">Verify your account</h3>
                        <div class="form-group">
                            <label for="">We will send a code to your phone</label>
                       <input type="number" name="number" class="form-control" placeholder="Enter Current Number" required="" autofocus="" autocomplete="off">
                        </div>
                     
                        <!-- form-group -->
                        <button type="submit" class="btn btn-primary btn-block btn-signin" name="submit">Get OTP</button>
                       
                     </div>
                </form>
            </div>
            
    
        </div>
    </div>
    </div>
@endsection
