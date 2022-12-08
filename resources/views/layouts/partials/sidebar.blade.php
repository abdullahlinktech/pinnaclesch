{{-- <div id="layoutSidenav_nav">
    <nav class="sb-sidenav accordion sb-sidenav-dark" id="sidenavAccordion">
        <div class="sb-sidenav-menu">
            <div class="nav">
                <a class="nav-link" href="{{ route('dashboard') }}">
                    <div class="sb-nav-link-icon"><i class="fas fa-tachometer-alt"></i></div>
                    Dashboard
                </a>
                <a class="nav-link {{ ($pageName == 'content' || $pageName == 'slide' || $pageName == 'map' || $pageName == 'messenger' ? 'active' : 'collapsed') }}" href="#" data-toggle="collapse" data-target="#collapseLayouts0" aria-expanded="false" aria-controls="collapseLayouts0">
                    <div class="sb-nav-link-icon"><i class="fas fa-cogs"></i></div>
                    Setting
                    <div class="sb-sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div>
                </a>
                <div class="collapse {{ ($pageName == 'content' || $pageName == 'slider' || $pageName == 'map' || $pageName == 'messenger' ? 'show' : '') }}" id="collapseLayouts0" aria-labelledby="headingOne" data-parent="#sidenavAccordion">
                    <nav class="sb-sidenav-menu-nested nav">
                        <a class="nav-link" href="{{ route('company.edit') }}"><i class="fa fa-minus"></i>&nbsp;Company Content</a>
                        <a class="nav-link" href="{{ route('slider.index') }}"><i class="fas fa-minus"></i>&nbsp;Slider</a>
                        <a class="nav-link" href="{{ route('maps.edit') }}"><i class="fas fa-minus"></i>&nbsp;Map</a>
                        <a class="nav-link" href="{{ route('messenger.edit') }}"><i class="fas fa-minus"></i>&nbsp;Messenger</a>
                    </nav>
                </div>
                <a class="nav-link {{ ($pageName == 'content' || $pageName == 'slide' || $pageName == 'backimage' || $pageName == 'news' || $pageName == 'category' || $pageName == 'subcategory' || $pageName == 'management' || $pageName == 'video' || $pageName == 'gallery' || $pageName == 'product' || $pageName == 'partner' || $pageName == 'whatcontent' ? 'active' : 'collapsed') }}" href="#" data-toggle="collapse" data-target="#collapseLayouts1" aria-expanded="false" aria-controls="collapseLayouts1">
                    <div class="sb-nav-link-icon"><i class="fas fa-columns"></i></div>
                    Web Content
                    <div class="sb-sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div>
                </a>
                <div class="collapse {{ ($pageName == 'content' || $pageName == 'slider' || $pageName == 'backimage' || $pageName == 'news' || $pageName == 'category' || $pageName == 'subcategory' || $pageName == 'management' || $pageName == 'video' || $pageName == 'gallery' || $pageName == 'product' || $pageName == 'partner' || $pageName == 'whatcontent' ? 'show' : '') }}" id="collapseLayouts1" aria-labelledby="headingOne" data-parent="#sidenavAccordion">
                    <nav class="sb-sidenav-menu-nested nav">
                        <a class="nav-link" href="{{ route('backimage.edit') }}"><i class="fas fa-minus"></i>&nbsp;Background Image</a>
                        <a class="nav-link" href="{{ route('service') }}">_Servi_ce</a>
                        <a class="nav-link" href="{{ route('admin.categories') }}"><i class="fas fa-minus"></i>&nbsp;Category</a>
                        <a class="nav-link" href="{{ route('admin.subcategories') }}"><i class="fas fa-minus"></i>&nbsp;Subcategory</a>
                        <a class="nav-link" href="{{ route('admin.products') }}"><i class="fas fa-minus"></i>&nbsp;Product</a>
                        <a class="nav-link" href="{{ route('admin.product-list') }}"><i class="fas fa-minus"></i>&nbsp;Product List</a>
                        <a class="nav-link" href="{{ route('management.index') }}"><i class="fas fa-minus"></i>&nbsp;Management</a>
                        <a class="nav-link" href="{{ route('gallery.index') }}"><i class="fas fa-minus"></i>&nbsp;Gallery</a>
                        <a class="nav-link" href="{{ route('videos') }}"><i class="fas fa-minus"></i>&nbsp;Video</a>
                        <a class="nav-link" href="{{ route('news.index') }}"><i class="fas fa-minus"></i>&nbsp;News & Offers</a>
                        <a class="nav-link" href="{{ route('partner.index') }}"><i class="fas fa-minus"></i>&nbsp;Partner</a>
                    </nav>
                </div>

                <a class="nav-link {{ ($pageName == 'message' || $pageName == 'query') ? 'active' : 'collapsed' }}" href="#" data-toggle="collapse" data-target="#collapseLayouts2" aria-expanded="false" aria-controls="collapseLayouts2">
                    <div class="sb-nav-link-icon"><i class="fas fa-envelope"></i></div>
                    Messages
                    <div class="sb-sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div>
                </a>
                <div class="collapse {{ ($pageName == 'message' || $pageName == 'query') ? 'show' : '' }}" id="collapseLayouts2" aria-labelledby="headingOne" data-parent="#sidenavAccordion">
                    <nav class="sb-sidenav-menu-nested nav">
                        <a class="nav-link" href="{{ route('admin.query') }}">Customer Query</a>
                        <a class="nav-link" href="{{ route('admin.message') }}">Message</a>
                    </nav>
                </div>
                <a class="nav-link {{ ($pageName == 'profile' || $pageName == 'register') ? 'active' : 'collapsed' }} " href="#" data-toggle="collapse" data-target="#collapseLayouts3" aria-expanded="false" aria-controls="collapseLayouts3">
                    <div class="sb-nav-link-icon"><i class="fas fa-users-cog"></i></div>
                    Authentication
                    <div class="sb-sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div>
                </a>
                <div class="collapse {{ ($pageName == 'profile' || $pageName == 'register') ? 'show' : '' }}" id="collapseLayouts3" aria-labelledby="headingOne" data-parent="#sidenavAccordion">
                    <nav class="sb-sidenav-menu-nested nav">
                        <a class="nav-link" href="{{ route('register.create') }}"><i class="fas fa-minus"></i>&nbsp;Add New User</a>
                        <a class="nav-link" href="{{ route('settings') }}"><i class="fas fa-minus"></i>&nbsp;Update Profile</a>
                    </nav>
                </div>
                <a class="nav-link" href="{{ route('logout') }}">
                    <div class="sb-nav-link-icon"><i class="fa fa-power-off"></i></div>
                    Sign Out 
                </a>
            </div>
        </div>
    </nav>
</div>

 --}}

{{-- <div class="sidebar-main sidebar-menu-one sidebar-expand-md sidebar-color">
    <div class="mobile-sidebar-header d-md-none">
         <div class="header-logo">
             <a href="{{ route('dashboard') }}"><img src="img/logo1.png" alt="logo"></a>
         </div>
    </div>
     <div class="sidebar-menu-content">
         <ul class="nav nav-sidebar-menu sidebar-toggle-view">
            <li class="nav-item">
                <a href="{{ route('dashboard') }}" class="nav-link"><i class="flaticon-dashboard"></i><span>Dashboard</span></a>
            </li>
            <li class="nav-item">
                <a href="#" class="nav-link"><i class="flaticon-classmates"></i><span>Students</span></a>
            </li>
            <li class="nav-item">
                <a href="#" class="nav-link"><i class="flaticon-multiple-users-silhouette"></i><span>Teachers</span></a>
            </li>
            <li class="nav-item">
                <a href="#" class="nav-link"><i class="flaticon-books"></i><span>Library</span></a>
            </li>
             <li class="nav-item sidebar-nav-item">
                 <a href="#" class="nav-link"><i class="flaticon-dashboard"></i><span>Dashboard</span></a>
                 <ul class="nav sub-group-menu">
                     <li class="nav-item">
                         <a href="index.html" class="nav-link"><i class="fas fa-angle-right"></i>Admin</a>
                     </li>
                     <li class="nav-item">
                         <a href="index3.html" class="nav-link"><i
                                 class="fas fa-angle-right"></i>Students</a>
                     </li>
                     <li class="nav-item">
                         <a href="index4.html" class="nav-link"><i class="fas fa-angle-right"></i>Parents</a>
                     </li>
                     <li class="nav-item">
                         <a href="index5.html" class="nav-link"><i
                                 class="fas fa-angle-right"></i>Teachers</a>
                     </li>
                 </ul>
             </li>
             <li class="nav-item sidebar-nav-item">
                 <a href="#" class="nav-link"><i class="flaticon-classmates"></i><span>Students</span></a>
                 <ul class="nav sub-group-menu">
                     <li class="nav-item">
                         <a href="all-student.html" class="nav-link"><i class="fas fa-angle-right"></i>All
                             Students</a>
                     </li>
                     <li class="nav-item">
                         <a href="student-details.html" class="nav-link"><i
                                 class="fas fa-angle-right"></i>Student Details</a>
                     </li>
                     <li class="nav-item">
                         <a href="admit-form.html" class="nav-link"><i
                                 class="fas fa-angle-right"></i>Admission Form</a>
                     </li>
                     <li class="nav-item">
                         <a href="student-promotion.html" class="nav-link"><i
                                 class="fas fa-angle-right"></i>Student Promotion</a>
                     </li>
                 </ul>
             </li>
             <li class="nav-item sidebar-nav-item">
                 <a href="#" class="nav-link"><i
                         class="flaticon-multiple-users-silhouette"></i><span>Teachers</span></a>
                 <ul class="nav sub-group-menu">
                     <li class="nav-item">
                         <a href="all-teacher.html" class="nav-link"><i class="fas fa-angle-right"></i>All
                             Teachers</a>
                     </li>
                     <li class="nav-item">
                         <a href="teacher-details.html" class="nav-link"><i
                                 class="fas fa-angle-right"></i>Teacher Details</a>
                     </li>
                     <li class="nav-item">
                         <a href="add-teacher.html" class="nav-link"><i class="fas fa-angle-right"></i>Add
                             Teacher</a>
                     </li>
                     <li class="nav-item">
                         <a href="teacher-payment.html" class="nav-link"><i
                                 class="fas fa-angle-right"></i>Payment</a>
                     </li>
                 </ul>
             </li>
             <li class="nav-item sidebar-nav-item">
                 <a href="#" class="nav-link"><i class="flaticon-couple"></i><span>Parents</span></a>
                 <ul class="nav sub-group-menu">
                     <li class="nav-item">
                         <a href="all-parents.html" class="nav-link"><i class="fas fa-angle-right"></i>All
                             Parents</a>
                     </li>
                     <li class="nav-item">
                         <a href="parents-details.html" class="nav-link"><i
                                 class="fas fa-angle-right"></i>Parents Details</a>
                     </li>
                     <li class="nav-item">
                         <a href="add-parents.html" class="nav-link"><i class="fas fa-angle-right"></i>Add
                             Parent</a>
                     </li>
                 </ul>
             </li>
             <li class="nav-item sidebar-nav-item">
                 <a href="#" class="nav-link"><i class="flaticon-books"></i><span>Library</span></a>
                 <ul class="nav sub-group-menu">
                     <li class="nav-item">
                         <a href="all-book.html" class="nav-link"><i class="fas fa-angle-right"></i>All
                             Book</a>
                     </li>
                     <li class="nav-item">
                         <a href="add-book.html" class="nav-link"><i class="fas fa-angle-right"></i>Add New
                             Book</a>
                     </li>
                 </ul>
             </li>

             <li class="nav-item sidebar-nav-item">
                 <a href="#" class="nav-link"><i
                         class="flaticon-maths-class-materials-cross-of-a-pencil-and-a-ruler"></i><span>Class</span></a>
                 <ul class="nav sub-group-menu">
                     <li class="nav-item">
                         <a href="" class="nav-link"><i class="fas fa-angle-right"></i>All
                             Classes</a>
                     </li>
                     <li class="nav-item">
                         <a href="add-class.html" class="nav-link"><i class="fas fa-angle-right"></i>Add New
                             Class</a>
                     </li>
                 </ul>
             </li>
             <li class="nav-item sidebar-nav-item">
                <a href="#" class="nav-link"> <i class="flaticon-settings"></i><span>Basic Setting</span></a>
                <ul class="nav sub-group-menu">
                    <li class="nav-item">
                        <a href="{{ route('slider.index') }}" class="nav-link"><i class="fas fa-angle-right"></i>Slider Entry</a>
                    </li>
                    <li class="nav-item">
                        <a href="{{route('admin.about')}}" class="nav-link"><i class="fas fa-angle-right"></i>About Us</a>
                    </li>
                    <li class="nav-item">
                        <a href="{{ route('news.index') }}" class="nav-link"><i class="fas fa-angle-right"></i>News & Events</a>
                    </li>
                    <li class="nav-item">
                        <a href="{{ route('gallery.index') }}" class="nav-link"><i class="fas fa-angle-right"></i>Photo Gallery</a>
                    </li>
                    <li class="nav-item">
                        <a href="{{ route('videos') }}" class="nav-link"><i class="fas fa-angle-right"></i>Video Gallery</a>
                    </li>
                    <li class="nav-item">
                        <a href="{{ route('service') }}" class="nav-link"><i class="fas fa-angle-right"></i>Health & Services</a>
                    </li>
                    <li class="nav-item">
                        <a href="{{route('management.index')}}" class="nav-link"><i class="fas fa-angle-right"></i> Management</a>
                    </li>
                </ul>
            </li>
            <li class="nav-item">
                <a href="hostel.html" class="nav-link"><i class="flaticon-bed"></i><span>Hostel</span></a>
            </li>
            <li class="nav-item">
                <a href="{{ route('partner.index') }}" class="nav-link"><i
                        class="flaticon-bus-side-view"></i><span>Transport</span></a>
            </li>
       
             <li class="nav-item sidebar-nav-item">
                 <a href="#" class="nav-link"><i class="flaticon-shopping-list"></i><span>Administration</span></a>
                 <ul class="nav sub-group-menu">
                     <li class="nav-item">
                         <a href="{{ route('register.create') }}" class="nav-link"><i class="fas fa-angle-right"></i>User Create</a>
                     </li>
                     <li class="nav-item">
                        <a href="{{ route('company.edit') }}" class="nav-link"><i class="fas fa-angle-right"></i>Organization Profile</a>
                    </li>
                     <li class="nav-item">
                        <a href="{{route('maps.edit')}}" class="nav-link"><i class="fas fa-angle-right"></i>Map</a>
                    </li>
                    <li class="nav-item">
                        <a href="{{route('admin.message')}}" class="nav-link"><i class="fas fa-angle-right"></i>Contact Messeage</a>
                    </li>
                 </ul>
             </li>
             <li class="nav-item">
                <a href="{{route('maps.edit')}}" class="nav-link"><i
                        class="flaticon-planet-earth"></i><span>Map</span></a>
            </li>
    
         </ul>
     </div>
 </div> --}}

 <div class="sidebar-main sidebar-menu-one sidebar-expand-md sidebar-color">
    <div class="mobile-sidebar-header d-md-none">
         <div class="header-logo">
             <a href="{{ route('dashboard') }}"><img src="img/logo1.png" alt="logo"></a>
         </div>
    </div>
     <div class="sidebar-menu-content">
         <ul class="nav nav-sidebar-menu sidebar-toggle-view">
            <li class="nav-item">
                <a href="{{ route('dashboard') }}" class="nav-link"><i class="flaticon-dashboard"></i><span>Dashboard</span></a>
            </li>
            <li class="nav-item">
                <a href="#" class="nav-link"><i class="flaticon-classmates"></i><span>Students</span></a>
            </li>
            <li class="nav-item">
                <a href="{{route('teacher.index')}}" class="nav-link"><i
                    class="flaticon-multiple-users-silhouette"></i><span>Teachers</span></a>
            </li>
      
             {{-- <li class="nav-item sidebar-nav-item">
                 <a href="#" class="nav-link"><i class="flaticon-couple"></i><span>Parents</span></a>
                 <ul class="nav sub-group-menu">
                     <li class="nav-item">
                         <a href="all-parents.html" class="nav-link"><i class="fas fa-angle-right"></i>All
                             Parents</a>
                     </li>
                     <li class="nav-item">
                         <a href="parents-details.html" class="nav-link"><i
                                 class="fas fa-angle-right"></i>Parents Details</a>
                     </li>
                     <li class="nav-item">
                         <a href="add-parents.html" class="nav-link"><i class="fas fa-angle-right"></i>Add
                             Parent</a>
                     </li>
                 </ul>
             </li> --}}
             {{-- <li class="nav-item sidebar-nav-item">
                 <a href="#" class="nav-link"><i class="flaticon-books"></i><span>Library</span></a>
                 <ul class="nav sub-group-menu">
                     <li class="nav-item">
                         <a href="all-book.html" class="nav-link"><i class="fas fa-angle-right"></i>All
                             Book</a>
                     </li>
                     <li class="nav-item">
                         <a href="add-book.html" class="nav-link"><i class="fas fa-angle-right"></i>Add New
                             Book</a>
                     </li>
                 </ul>
             </li> --}}
     
             <li class="nav-item">
                 <a href="#" class="nav-link"><i
                    class="flaticon-maths-class-materials-cross-of-a-pencil-and-a-ruler"></i><span>Class</span></a>
                </li>
                <li class="nav-item">
                    <a href="{{ route('slider.index') }}" class="nav-link"><i
                            class="flaticon-open-book"></i><span>Slider</span></a>
                </li>
             <li class="nav-item">
                 <a href="{{route('admin.about')}}" class="nav-link"><i class="flaticon-couple"></i><span>About Us</span></a>
             </li>
             <li class="nav-item">
                 <a href="{{ route('news.index') }}" class="nav-link"><i class="flaticon-calendar"></i><span>News & Events</span></a>
             </li>
             <li class="nav-item sidebar-nav-item">
                 <a href="#" class="nav-link"><i
                    class="flaticon-checklist"></i><span>Facilities</span></a>
                 <ul class="nav sub-group-menu">
                  
                     <li class="nav-item">
                         <a href="{{route('hostel.index')}}" class="nav-link"><i class="fas fa-angle-right"></i>Hostel</a>
                     </li>
                     <li class="nav-item">
                         <a href="exam-grade.html" class="nav-link"><i class="fas fa-angle-right"></i>Shop</a>
                     </li>
                     <li class="nav-item">
                         <a href="{{ route('partner.index') }}" class="nav-link"><i class="fas fa-angle-right"></i>Transport</a>
                     </li>
                     <li class="nav-item">
                        <a href="{{ route('service') }}" class="nav-link"><i class="fas fa-angle-right"></i>Health & Services</a>
                    </li>
                     <li class="nav-item">
                        <a href="{{ route('dress.index') }}" class="nav-link"><i class="fas fa-angle-right"></i>Dress Code </a>
                    </li>
                 </ul>
             </li>
             <li class="nav-item sidebar-nav-item">
                 <a href="#" class="nav-link"><i class="flaticon-shopping-list"></i><span>Gallery</span></a>
                 <ul class="nav sub-group-menu">
                     <li class="nav-item">
                         <a href="{{ route('gallery.index') }}" class="nav-link"><i class="fas fa-angle-right"></i>Photo Gallery</a>
                     </li>
                     <li class="nav-item">
                         <a href="{{ route('videos') }}" class="nav-link"><i class="fas fa-angle-right"></i>Video Gallery</a>
                     </li>
                 </ul>
             </li>
              <li class="nav-item">
                 <a href="{{route('activity.index')}}" class="nav-link"><i
                         class="flaticon-bus-side-view"></i><span>Activity</span></a>
             </li>
             
             <li class="nav-item">
                 <a href="{{route('specail.index')}}" class="nav-link"><i
                    class="flaticon-chat"></i><span>Why We Specail</span></a>
             </li>
              <li class="nav-item">
                 <a href="{{route('notice.index')}}" class="nav-link"><i
                         class="flaticon-script"></i><span>Notice</span></a>
             </li>
         
             {{-- <li class="nav-item">
                 <a href="messaging.html" class="nav-link"><i class="flaticon-bed"></i><span>Hostel</span></a> --}}
        {{--
             </li>
             <li class="nav-item">
                 <a href="map.html" class="nav-link"><i
                         class="flaticon-planet-earth"></i><span>Map</span></a>
             </li>
             <li class="nav-item">
                 <a href="account-settings.html" class="nav-link"><i
                         class="flaticon-settings"></i><span>Account</span></a>
             </li> --}}
             <li class="nav-item sidebar-nav-item">
                <a href="#" class="nav-link"><i
                    class="flaticon-settings"></i><span>Administration</span></a>
                <ul class="nav sub-group-menu">
                    <li class="nav-item">
                        <a href="{{ route('company.edit') }}" class="nav-link"><i class="fas fa-angle-right"></i>Company Profile</a>
                    </li>
                    <li class="nav-item">
                        <a href="{{route('admin.message')}}" class="nav-link"><i
                                class="fas fa-angle-right"></i>Contact Message</a>
                    </li>
                    <li class="nav-item">
                        <a href="{{route('management.index')}}" class="nav-link"><i
                                class="fas fa-angle-right"></i>Management</a>
                    </li>
                    <li class="nav-item">
                        <a href="{{ route('register.create') }}" class="nav-link"><i class="fas fa-angle-right"></i>User Create</a>
                    </li>
                </ul>
            </li>
         </ul>
     </div>
 </div> 