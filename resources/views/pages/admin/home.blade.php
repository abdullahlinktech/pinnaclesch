@extends('layouts.admin-master', ['pageName'=> 'dashboard', 'title' => 'Dashboard'])
@section('title', 'Dashboard')
@section('admin-content')

     <!-- Breadcubs Area Start Here -->
     
     {{-- <div class="breadcrumbs-area d-flex justify-content-between">
       <div> 
        <h3>Admin Dashboard</h3>
        </div>
        <div class=""> 
         <ul>
            <li>
                <a href="index-2.html">Home</a>
            </li>
            <li>Admin</li>
         </ul>
       </div>
     
    </div> --}}
    <!-- Breadcubs Area End Here -->
 <div class="card" style="margin: 20px">
    <div class="card-body">
        <div class="row gutters-20 ">
            <div class="col-lg-10 m-auto" >
             <div class=" " style="margin-top:100px; ">
                <div class=" text-center" style="padding:60px">
                    <h1>Welcome To</h1>
                    <img style="height: 100px;width:100px" src="{{ asset($content->logo) }}" alt="">
                    <h1>  Pinnacle Chartered School And College</h1>
                 </div>
            </div>
           </div>
            {{-- <div class="col-xl-3 col-sm-6 col-12">
                <div class="dashboard-summery-one mg-b-20">
                    <div class="row align-items-center">
                        <div class="col-6">
                            <div class="item-icon bg-light-green ">
                                <i class="flaticon-classmates text-green"></i>
                            </div>
                        </div>
                        <div class="col-6">
                            <div class="item-content">
                                <div class="item-title">Students</div>
                                <div class="item-number"><span class="counter" data-num="150000 ">1,50,000 </span></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-xl-3 col-sm-6 col-12">
                <div class="dashboard-summery-one mg-b-20">
                    <div class="row align-items-center">
                        <div class="col-6">
                            <div class="item-icon bg-light-blue">
                                <i class="flaticon-multiple-users-silhouette text-blue"></i>
                            </div>
                        </div>
                        <div class="col-6">
                            <div class="item-content">
                                <div class="item-title">Teachers</div>
                                <div class="item-number"><span class="counter" data-num="2250">2,250</span> </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-xl-3 col-sm-6 col-12">
                <div class="dashboard-summery-one mg-b-20">
                    <div class="row align-items-center">
                        <div class="col-6">
                            <div class="item-icon bg-light-yellow">
                                <i class="flaticon-couple text-orange"></i>
                            </div>
                        </div>
                        <div class="col-6">
                            <div class="item-content">
                                <div class="item-title">Parents</div>
                                <div class="item-number"><span class="counter" data-num="5690">5,690</span></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-xl-3 col-sm-6 col-12">
                <div class="dashboard-summery-one mg-b-20">
                    <div class="row align-items-center">
                        <div class="col-6">
                            <div class="item-icon bg-light-yellow">
                                <i class="flaticon-couple text-orange"></i>
                            </div>
                        </div>
                        <div class="col-6">
                            <div class="item-content">
                                <div class="item-title">Staff</div>
                                <div class="item-number"><span class="counter" data-num="990">5,690</span></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-xl-3 col-sm-6 col-12">
                <div class="dashboard-summery-one mg-b-20">
                    <div class="row align-items-center">
                        <div class="col-6">
                            <div class="item-icon bg-light-yellow">
                                <i class="flaticon-couple text-orange"></i>
                            </div>
                        </div>
                        <div class="col-6">
                            <div class="item-content">
                                <div class="item-title">Classs</div>
                                <div class="item-number"><span class="counter" data-num="200">990</span></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-xl-3 col-sm-6 col-12">
                <div class="dashboard-summery-one mg-b-20">
                    <div class="row align-items-center">
                        <div class="col-6">
                            <div class="item-icon bg-light-red">
                                <i class="flaticon-money text-red"></i>
                            </div>
                        </div>
                        <div class="col-6">
                            <div class="item-content">
                                <div class="item-title">Earnings</div>
                                <div class="item-number"><span>$</span><span class="counter" data-num="193000">1,93,000</span></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div> --}}
        </div>
    </div>
 </div>
@endsection