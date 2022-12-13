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
                        {{-- <h2 class="slim-logo text-center"><a href="index.php">BIDDALOY<span></span></a></h2> --}}
                       
                        <h3 class="signin-title-secondary text-center">Sign in to continue.</h3>
                        {{-- <div class="form-group">
                        <select name="category" class="form-control" required="">
                        <option value="">Select User</option>
                        <option value="admin">Admin</option>
                         <option value="teacher">Teacher</option>
                           <option value="student">Student</option>
                           <option value="employee">Employee</option>
                           <option value="guardian">Guardian</option>
                        </select>
                        </div> --}}
                        <div class="form-group">
                       <input type="number" name="number" class="form-control" placeholder="Enter your Number" required="" autofocus="" autocomplete="off">
                        </div>
                        <!-- form-group -->
                        <div class="form-group mg-b-50">
                           <input type="password" name="password" class="form-control" placeholder="Enter your password" required="" autocomplete="off">
                        </div>
                        <!-- form-group -->
                        <button type="submit" class="btn btn-primary btn-block btn-signin" name="submit">Sign In</button>
                      <p class="mg-b-0 text-center"><a href="{{route('forget.password')}}">Forgot password?</a></p>
                        <p class="mg-b-0 text-center"><a href="http://linktechbd.com" target="_blank" style="color:gray">Develop by Link Up Techenology</a></p>
                    </div>
                </form>
            </div>
            
    
        </div>
       </div>
    </div>
@endsection
