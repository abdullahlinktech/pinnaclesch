

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
             <li class="nav-item">
                 <a href="{{route('facilities.index')}}" class="nav-link"><i class="flaticon-checklist"></i><span>Facilities</span></a>
             </li>
             <li class="nav-item">
                <a href="{{route('shop.index')}}" class="nav-link"><i class="flaticon-bed"></i><span>Shop </span></a> 
            </li>
             <li class="nav-item">
                 <a href="{{ route('dress.index') }}" class="nav-link"><i class="flaticon-checklist"></i><span>Dress Code</span></a>
             </li>
             {{-- <li class="nav-item sidebar-nav-item">
                 <a href="#" class="nav-link"><i
                    class="flaticon-checklist"></i><span>Facilities</span></a>
                 <ul class="nav sub-group-menu">
                  
                     <li class="nav-item">
                         <a href="{{route('hostel.index')}}" class="nav-link"><i class="fas fa-angle-right"></i>Hostel</a>
                     </li>
                     <li class="nav-item">
                         <a href="{{route('facilities.index')}}" class="nav-link"><i class="fas fa-angle-right"></i>Facilities</a>
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
             </li> --}}
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
         
           
              {{--
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