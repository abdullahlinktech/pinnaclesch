<header>
    <div id="top-container">
        <div class="container">
            <div class="row">
                <div class="col-md-12 pull-right">
                    <div class="flat-address topbarContact">
                        <div class="custom-info">
                            <i class="fa fa-phone"></i> Hotline: <a href="tel:{{ $content->phone }}" class="topCon">{{ $content->phone }}</a>
                            <i class="fa fa-envelope" style="margin-left: 15px;"></i> Email: <a href="mailto:{{ $content->email }}" class="topCon">{{ $content->email }}</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>
    <div class="container">
        <div class="logo">
            <a href="{{ route('home') }}" title="{{ $content->name }}"><img src="{{ asset($content->logo) }}" alt="{{ $content->name }}" title="{{ $content->name }}" class="mainlogo"></a>
        </div>
        <div class="logo logoText">
            <a href="{{ route('home') }}"><h1 class="schtitle">{{ $content->name }}</h1></a>
        </div>
        <div class="contact-details">
            <div class="topRegLog">
                <a href="#" class="dt-sc-button small topbtns pink"> Register Now <span class="fa fa-user"> </span></a>
                <a href="#" class="dt-sc-button small topbtns mustard"> Login <span class="fa fa-sign-in"> </span></a>
            </div>
        </div>
    </div>

    <div id="menu-container">
        <div class="container">
            <nav id="main-menu">
                <div class="dt-menu-toggle" id="dt-menu-toggle">Menu<span class="dt-menu-toggle-icon"></span></div>
                <ul id="menu-main-menu" class="menu">
                    <li class="current_page_item menu-item-simple-parent menu-item-depth-0 red">
                        <a class="{{@($pageName == 'home')? 'active' : ''}}" href="{{ route('home') }}"> Home </a>
                    </li>
                    <li class="menu-item-simple-parent menu-item-depth-0 mustard">
                        <a class="{{@($pageName == 'about')? 'active' : ''}}" href="#" title="">About Us</a>
                        <ul class="sub-menu">
                            <li><a href="{{ route('about') }}">About Pinnacle </a></li>
                            <li><a href="{{ route('teachers') }}">Our Teachers </a></li>
                        </ul>
                        <a class="dt-menu-expand">+</a>
                    </li>

                    <li class="green"> <a href="{{ route('classes') }}"> Classes </a></li>


                    <li class="menu-item-simple-parent menu-item-depth-0 blue"> <a href="{{route('facilities')}}"> Facilities </a>
                        <ul class="sub-menu">
                            <li><a href="#">Hostel</a>
                                <ul class="sub-menu">
                                    <li><a href="{{ route('facilities') }}/#boyshostel">Boys Hostel</a></li>
                                    <li><a href="{{ route('facilities') }}/#girlshostel">Girls Hostel</a></li>
                                </ul>
                                <a class="dt-menu-expand">+</a>
                            </li>
                            <li><a href="#">Transports</a>
                                <ul class="sub-menu">
                                    <li><a href="{{ route('facilities') }}/#transport-haice">Haice</a></li>
                                    <li><a href="{{ route('facilities') }}/#transport-bus">Bus</a></li>
                                </ul>
                                <a class="dt-menu-expand">+</a>
                            </li>
                            <li><a href="{{ route('product') }}">Shop</a>
                                <ul class="sub-menu">
                                    <li><a href="#">Book</a></li>
                                    <li><a href="#">Copy</a></li>
                                    <li><a href="#">Stationery</a></li>
                                    <li><a href="#">School Dress</a></li>
                                    <li><a href="#">Sprot Dress</a></li>
                                    <li><a href="#">Bags</a></li>
                                </ul>
                                <a class="dt-menu-expand">+</a>
                            </li>
                            <li><a href="{{ route('facilities') }}/#computer-lab">Computer Lab</a></li>
                            <li><a href="{{ route('facilities') }}/#science-lab">Science Lab</a></li>
                            <li><a href="{{ route('facilities') }}/#chemistry-lab">Chemistry Lab</a></li>
                            <li><a href="{{ route('facilities') }}/#biology-lab">Biology Lab</a></li>
                            <li><a href="{{ route('facilities') }}/#health-service">Health Service</a></li>
                        </ul>
                        <a class="dt-menu-expand">+</a>
                    </li>
                    <li class="lavender"><a href="{{ route('newsevents') }}">News & Events </a> </li>

                    <li class="menu-item-simple-parent menu-item-depth-0 purple"><a href="{{route('notices')}}" title="">Notice</a>
                        <ul class="sub-menu">
                            <li><a href="{{ route('notices') }}/#teacher">Notice for Teacher</a></li>
                            <li><a href="{{ route('notices') }}/#student">Notice for Student</a></li>
                            <li><a href="{{ route('notices') }}/#guardian">Notice for Guardian</a></li>
                            <li><a href="{{ route('notices') }}/#career">Notice for Job</a></li>
                        </ul>
                        <a class="dt-menu-expand">+</a>
                    </li>

                    <li class="menu-item-simple-parent menu-item-depth-0 yellow"><a href="#" title="">Gallery</a>
                        <ul class="sub-menu">
                            <li><a href="{{ route('gallery') }}">Photo Gallery </a></li>
                            <li><a href="{{ route('video') }}">Video Gallery </a></li>
                        </ul>
                        <a class="dt-menu-expand">+</a>
                    </li>
                    <li class="pink"><a href="{{ route('contact') }}" title="">Contact us</a></li>
                </ul>
            </nav>

            <ul class="dt-sc-social-icons">
                <li><a href="{{ $content->facebook }}" target="_blank" title="Facebook" class="dt-sc-tooltip-top facebook"><span class="fa fa-facebook"></span></a></li>
                <li><a href="{{ $content->youtube }}" target="_blank" title="Youtube" class="dt-sc-tooltip-top youtube"><span class="fa fa-youtube"></span></a></li>
                <li><a href="{{ $content->twitter }}" target="_blank" title="Twitter" class="dt-sc-tooltip-top twitter"><span class="fa fa-twitter"></span></a></li>
                <li><a href="{{ $content->linkedin }}" target="_blank" title="Linkedin" class="dt-sc-tooltip-top linkedin"><span class="fa fa-linkedin"></span></a></li>
            </ul>
        </div>
    </div>
</header>



