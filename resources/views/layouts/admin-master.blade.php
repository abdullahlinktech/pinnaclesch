{{-- <!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="" />
        <meta name="author" content="" />
	    <link rel="shortcut icon" href="{{ asset($content->logo) }}">
        <title>Admin | {{ $title ?? '' }}</title>
        <link href="{{ asset('css/admin-styles.css') }}" rel="stylesheet" />
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" >
        <link href="https://fonts.googleapis.com/css2?family=Barlow:wght@100;200;300;400;500;600;700;800;900&family=Lato:wght@100;300;400;700;900&family=Roboto:wght@100;300;400;500;700;900&display=swap" rel="stylesheet">
        <link href="https://cdn.datatables.net/1.10.20/css/dataTables.bootstrap4.min.css" rel="stylesheet"  />
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.css"   />
        <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/js/all.min.js" ></script>
        <script src="{{ asset('css/toastr.min.css') }}"></script>
        @stack('admin-css')
    </head>
    <body class="sb-nav-fixed">



            <div class="modal fade" id="passwordChange" tabindex="-1" role="dialog" >
                <div class="modal-dialog modal-dialog-centered" role="document">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title">Change Password</h5>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                        <form action="{{ route('password.change') }}" method="POST">
                            @csrf
                            @method('PUT')
                            <div class="modal-body">
                                <label for="">Old Password</label>
                                <input type="password" name="old_password" class="form-control mb-1" placeholder="Enter Old Password">
                                <label for="">New Password</label>
                                <input type="password" class="form-control" name="password" placeholder="Enter New password">
                            </div>
                            <div class="modal-footer">
                                <button type="reset" class="btn btn-secondary">Reset</button>
                                <button type="submit" class="btn btn-primary">Save changes</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
        <script src="{{ asset('js/jquery-3.6.0.min.js') }}"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" ></script>
        <script src="{{ asset('js/scripts.js') }}"></script>
        <script src="https://cdn.datatables.net/1.10.20/js/jquery.dataTables.min.js" ></script>
        <script src="https://cdn.datatables.net/1.10.20/js/dataTables.bootstrap4.min.js" ></script>
        <script src="{{ asset('assets/demo/datatables-demo.js') }}"></script>
        <script src="{{ asset('js/toastr.min.js') }}"></script>

    </body>
</html> --}}



<!doctype html>
<html class="no-js" lang="">
<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title> Pinnacle Admin | {{ $title ?? '' }}</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- Favicon -->
    <link rel="shortcut icon" type="image/x-icon" href="{{asset('backend/img/favicon.png')}}">
    <!-- Normalize CSS -->
    <link rel="stylesheet" href="{{asset('backend/css/normalize.css')}}">
    <!-- Main CSS -->
    <link rel="stylesheet" href="{{asset('backend/css/main.css')}}">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="{{asset('backend/css/bootstrap.min.css')}}">
    <!-- Fontawesome CSS -->
    <link rel="stylesheet" href="{{asset('backend/css/all.min.css')}}">
    <!-- Flaticon CSS -->
    <link rel="stylesheet" href="{{asset('backend/fonts/flaticon.css')}}">
    <!-- Full Calender CSS -->
    <link rel="stylesheet" href="{{asset('backend/css/fullcalendar.min.css')}}">
    <!-- Animate CSS -->
    <link rel="stylesheet" href="{{asset('backend/css/animate.min.css')}}">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.css"/>
    <link rel="stylesheet" href="{{ asset('css/toastr.min.css') }}">
    <!-- Custom CSS -->
    <link href="{{ asset('css/admin-styles.css') }}" rel="stylesheet" />
    <link rel="stylesheet" href="{{asset('backend/css/style.css')}}">
    <!-- Modernize js -->
    <script src="{{asset('backend/js/modernizr-3.6.0.min.js')}}"></script>
    @stack('admin-css')
</head>

<body>
    <!-- Preloader Start Here -->
    <div id="preloader"></div>
    <!-- Preloader End Here -->
    <div id="wrapper" class="wrapper bg-ash">
       <!-- Header Menu Area Start Here -->
        @include('layouts.partials.navbar')
        <!-- Header Menu Area End Here -->
        <!-- Page Area Start Here -->
        <div class="dashboard-page-one">
            <!-- Sidebar Area Start Here -->
           @include('layouts.partials.sidebar')
            <!-- Sidebar Area End Here -->
            <div class="dashboard-content-one">

                <!-- Dashboard summery Start Here -->
               @yield('admin-content')
                <!-- Dashboard summery End Here -->


            <div class="modal fade" id="passwordChange" tabindex="-1" role="dialog" >
                <div class="modal-dialog modal-dialog-centered" role="document">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title">Change Password</h5>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                        <form action="{{ route('password.change') }}" method="POST">
                            @csrf
                            @method('PUT')
                            <div class="modal-body">
                                <label for="">Old Password</label>
                                <input type="password" name="old_password" class="form-control mb-1" placeholder="Enter Old Password">
                                <label for="">New Password</label>
                                <input type="password" class="form-control" name="password" placeholder="Enter New password">
                            </div>
                            <div class="modal-footer">
                                <button type="reset" class="btn btn-secondary">Reset</button>
                                <button type="submit" class="btn btn-primary">Save changes</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
                <!-- Footer Area Start Here -->
                {{-- <footer class="footer-wrap-layout1">
                    <div class="copyright">© {{ date('Y') }} Copyrights <a href="{{ route('home') }}" target="_blank">{{ $content->name }}</a>. All rights reserved. Designed by <a
                            href="#">Link-Up Technology LTD.</a></div>
                </footer> --}}
                <!-- Footer Area End Here -->
            </div>
        </div>
        <!-- Page Area End Here -->
    </div>


    <!-- jquery-->
    <script src="{{asset('backend/js/jquery-3.3.1.min.js')}}"></script>
    <!-- Plugins js -->
    <script src="{{asset('backend/js/plugins.js')}}"></script>
    <!-- Popper js -->
    <script src="{{asset('backend/js/popper.min.js')}}"></script>
    <!-- Bootstrap js -->
    <script src="{{asset('backend/js/bootstrap.min.js')}}"></script>
    <!-- Counterup Js -->
    <script src="{{asset('backend/js/jquery.counterup.min.js')}}"></script>
    <!-- Moment Js -->
    <script src="{{asset('backend/js/moment.min.js')}}"></script>
    <!-- Waypoints Js -->
    <script src="{{asset('backend/js/jquery.waypoints.min.js')}}"></script>
    <!-- Scroll Up Js -->
    <script src="{{asset('backend/js/jquery.scrollUp.min.js')}}"></script>
    <!-- Full Calender Js -->
    <script src="{{asset('backend/js/fullcalendar.min.js')}}"></script>
    <!-- Chart Js -->
    <script src="{{asset('backend/js/Chart.min.js')}}"></script>
    <!-- Custom Js -->
    <script src="{{ asset('js/toastr.min.js') }}"></script>
    <script src="{{asset('backend/js/main.js')}}"></script>

    <script>
        @if(Session::has('success'))
        toastr.options =
        {
            "closeButton" : true,
            "progressBar" : true
        }
        toastr.success("{{ session('success') }}");
        @endif

        @if(Session::has('error'))
        toastr.options =
        {
            "closeButton" : true,
            "progressBar" : true
        }
                toastr.error("{{ session('error') }}");
        @endif
    </script>
   @stack('admin-js')
</body>

</html>
