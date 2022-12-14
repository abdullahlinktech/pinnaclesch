<div class="navbar navbar-expand-md header-menu-one bg-light">
    <div class="nav-bar-header-one">
        <div class="header-logo">
            <a href="{{ route('dashboard') }}">
                <img style="height: 70px;width:80px" src="{{ asset($content->logo) }}" alt="logo">
            </a>
        </div>
         <div class="toggle-button sidebar-toggle">
            <button type="button" class="item-link">
                <span class="btn-icon-wrap">
                    <span></span>
                    <span></span>
                    <span></span>
                </span>
            </button>
        </div>
    </div>
    <div class="d-md-none mobile-nav-bar">
       <button class="navbar-toggler pulse-animation" type="button" data-toggle="collapse" data-target="#mobile-navbar" aria-expanded="false">
            <i class="far fa-arrow-alt-circle-down"></i>
        </button>
        <button type="button" class="navbar-toggler sidebar-toggle-mobile">
            <i class="fas fa-bars"></i>
        </button>
    </div>
    <div class="header-main-menu collapse navbar-collapse" id="mobile-navbar">
        <ul class="navbar-nav">
            <li class="nav-item">
                <h5 class="mt-3"><i class="fa fa-clock"></i> <?= date('l, j F Y,') ?> <span id="timer"></span></h5>
            </li>
            <li class="navbar-item header-search-bar">
                <div class="input-group stylish-input-group">
                    <!-- <form class="  form-inline ms-auto me-0 me-md-3 my-2 my-md-0">
                        <p class="text-white dashboard-date mb-0" id="date"><i class="far fa-clock"></i>&nbsp;<div id="txt" class="text-white">time</div></p>
                    </form>
                 -->
                    <!-- <span class="input-group-addon">
                        <button type="submit">
                            <span class="flaticon-search" aria-hidden="true"></span>
                        </button>
                    </span>
                    <input type="text" class="form-control" placeholder="Find Something . . ."> -->
                </div>
            </li>
        </ul>
        <ul class="navbar-nav">
           
        
            <li class="navbar-item dropdown header-admin">
                <a class="navbar-nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown"
                    aria-expanded="false">
                    <div class="admin-title">
                        <h5 class="item-title">{{ Auth::user()->name }}</h5>
                        <span>Admin</span>
                    </div>
                    <div class="admin-img">
                        <img src="{{asset(Auth::guard()->user()->image)}}" style="max-height: 50px;max-width:50px" alt="Admin">
             
                    </div>
                </a>
                <div class="dropdown-menu dropdown-menu-right">
                    <div class="item-header">
                        <h6 class="item-title">{{ Auth::user()->name }}</h6>
                    </div>
                    <div class="item-content">
                        <ul class="settings-list">
                            <li><a href="{{ route('settings') }}"><i class="flaticon-user"></i>My Profile</a></li>
                            {{-- <li><a href="#"><i class="flaticon-list"></i>Task</a></li>
                            <li><a href="#"><i class="flaticon-chat-comment-oval-speech-bubble-with-text-lines"></i>Message</a></li> --}}
                            <li><a href="{{route('password.change')}}" data-toggle="modal" data-target="#passwordChange"><i class="flaticon-gear-loading"></i>Account Settings</a></li>
                            <li><a href="{{ route('logout') }}"><i class="flaticon-turn-off"></i>Log Out</a></li>
                        </ul>
                    </div>
                </div>
            </li>
             <!-- <li class="navbar-item dropdown header-language">
                <a class="navbar-nav-link dropdown-toggle" href="#" role="button" 
                data-toggle="dropdown" aria-expanded="false"><i class="fas fa-globe-americas"></i>EN</a>
                <div class="dropdown-menu dropdown-menu-right">
                    <a class="dropdown-item" href="#">English</a>
                    <a class="dropdown-item" href="#">Spanish</a>
                    <a class="dropdown-item" href="#">Franchis</a>
                    <a class="dropdown-item" href="#">Chiness</a>
                </div>
            </li> -->
        </ul>
    </div>
</div>

