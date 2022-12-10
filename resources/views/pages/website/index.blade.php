@extends('layouts.website', ['pageName' => 'home'])
@section('title', 'Home')

@section('web-content')
    <div id="main">
        <div id="slider">
            <div id="layerslider_4" class="ls-wp-container"
                style="width:100%;height:610px;max-width:1920px;margin:0
                auto;margin-bottom: 0px;">
                <div class="ls-slide" data-ls="slidedelay:7000;
                    transition2d: all;">
                    <img src="{{ asset('website/images/layerslider-gallery/bg3.jpg') }}" class="ls-bg"
                        alt="Slide background" />
                    <img class="ls-l" style="top:120px;left:530px;white-space:
                        nowrap;"
                        data-ls="offsetxin:0;delayin:800;easingin:easeOutElastic;skewxin:30;skewyin:30;transformoriginin:50%
                        0% 50%;offsetxout:0;parallaxlevel:1;"
                        src="{{ asset('website/images/layerslider-gallery/bring.png') }}" alt="">
                    <img class="ls-l"
                        style="top:420px;left:-375px;z-index:100;white-space:
                        nowrap;"
                        data-ls="offsetxin:0;offsetyin:80;delayin:500;offsetxout:0;offsetyout:-80;"
                        src="{{ asset('website/images/layerslider-gallery/grass.png') }}" alt="">
                    <img class="ls-l" style="top:185px;left:530px;white-space:
                        nowrap;"
                        data-ls="offsetxin:2;delayin:1000;rotatexin:90;rotateyin:90;offsetxout:0;parallaxlevel:-1;"
                        src="{{ asset('website/images/layerslider-gallery/fun.png') }}" alt="">
                    <img class="ls-l" style="top:252px;left:507px;white-space:
                        nowrap;"
                        data-ls="offsetxin:0;delayin:1800;scalexin:3;scaleyin:3;offsetxout:0;parallaxlevel:-2;"
                        src="{{ asset('website/images/layerslider-gallery/two.png') }}" alt="">
                    <img class="ls-l" style="top:250px;left:571px;white-space:
                        nowrap;"
                        data-ls="offsetxin:0;delayin:2200;rotatexin:90;rotateyin:90;offsetxout:0;parallaxlevel:3;"
                        src="{{ asset('website/images/layerslider-gallery/life.png') }}" alt="">
                    <img class="ls-l" style="top:355px;left:518px;white-space:
                        nowrap;"
                        data-ls="delayin:2500;parallaxlevel:-2;"
                        src="{{ asset('website/images/layerslider-gallery/cup-divider.png') }}" alt="">
                    <img class="ls-l" style="top:405px;left:509px;white-space:
                        nowrap;"
                        data-ls="offsetxin:0;offsetyin:-100;delayin:3000;offsetxout:0;offsetyout:100;parallaxlevel:3;"
                        src="{{ asset('website/images/layerslider-gallery/a-trendy-kids.png') }}" alt="">
                    <img class="ls-l" style="top:220px;left:370px;white-space:
                        nowrap;"
                        data-ls="offsetxin:0;offsetyin:150;delayin:2000;easingin:swing;offsetxout:0;offsetyout:-150;parallaxlevel:3;"
                        src="{{ asset('website/images/layerslider-gallery/boy1.png') }}" alt="">
                    <img class="ls-l" style="top:42px;left:173px;white-space: nowrap;"
                        data-ls="offsetxin:0;offsetyin:150;delayin:2200;easingin:easeInOutBack;offsetxout:0;offsetyout:-150;parallaxlevel:-4;"
                        src="{{ asset('website/images/layerslider-gallery/girl2.png') }}" alt="">
                    <img class="ls-l" style="top:70px;left:-59px;white-space: nowrap;"
                        data-ls="offsetxin:0;offsetyin:150;delayin:2700;easingin:easeInBack;offsetxout:0;offsetyout:-150;parallaxlevel:5;"
                        src="{{ asset('website/images/layerslider-gallery/girl1.png') }}" alt="">
                    <img class="ls-l" style="top:55px;left:740px;white-space: nowrap;"
                        data-ls="offsetxin:0;offsetyin:150;delayin:2300;easingin:easeOutQuart;offsetxout:0;offsetyout:-150;parallaxlevel:3;"
                        src="{{ asset('website/images/layerslider-gallery/boy2.png') }}" alt="">
                    <img class="ls-l" style="top:85px;left:955px;white-space: nowrap;"
                        data-ls="offsetxin:0;offsetyin:150;delayin:2500;offsetxout:0;offsetyout:-150;parallaxlevel:4;"
                        src="{{ asset('website/images/layerslider-gallery/boy3.png') }}" alt="">
                </div>
                <div class="ls-slide" data-ls="slidedelay:7000;
                    transition2d: all;">
                    <img src="{{ asset('website/images/layerslider-gallery/black-board.jpg') }}" class="ls-bg"
                        alt="Slide background" />
                    <img class="ls-l" style="top:35px;left:678px;white-space: nowrap;" data-ls="offsetxout:180;"
                        src="{{ asset('website/images/layerslider-gallery/school-kid.png') }}" alt="">
                    <img class="ls-l" style="top:23px;left:998px;white-space: nowrap;"
                        data-ls="delayin:1500;scaleyin:3;transformoriginin:0%
                        50% 0;parallaxlevel:2;"
                        src="{{ asset('website/images/layerslider-gallery/b-cloud.png') }}" alt="">
                    <img class="ls-l" style="top:67px;left:679px;white-space: nowrap;"
                        data-ls="offsetxin:0;offsetyin:-100;delayin:2000;rotateyin:30;parallaxlevel:5;"
                        src="{{ asset('website/images/layerslider-gallery/b-swirl.png') }}" alt="">
                    <img class="ls-l" style="top:78px;left:50px;white-space: nowrap;"
                        data-ls="offsetxin:-200;delayin:2000;"
                        src="{{ asset('website/images/layerslider-gallery/b-comment.png') }}" alt="">
                    <img class="ls-l" style="top:137px;left:98px;white-space: nowrap;"
                        data-ls="delayin:2500;rotateyin:30;"
                        src="{{ asset('website/images/layerslider-gallery/welcome-text.png') }}" alt="">
                    <img class="ls-l" style="top:222px;left:96px;white-space: nowrap;"
                        data-ls="delayin:3000;rotateyin:30;"
                        src="{{ asset('website/images/layerslider-gallery/text-desc.png') }}" alt="">
                    <a href="https://themeforest.net/item/kids-life-a-trendy-kids-html-template/8565477?WT.ac=portfolio_thumb&amp;WT.z_author=BuddhaThemes"
                        class="ls-l" style="top:397px;left:105px;white-space:
                        nowrap;"
                        data-ls="offsetxin:0;offsetyin:200;delayin:3500;offsetxout:0;offsetyout:150;"><img
                            src="{{ asset('website/images/layerslider-gallery/purchase-theme.png') }}"
                            alt=""></a>
                    <img class="ls-l" style="top:395px;left:297px;white-space:
                        nowrap;"
                        data-ls="delayin:3700;" src="{{ asset('website/images/layerslider-gallery/b-tick.png') }}"
                        alt="">
                    <img class="ls-l" style="top:421px;left:100px;white-space:
                        nowrap;"
                        data-ls="offsetxin:0;offsetyin:200;delayin:4000;offsetxout:0;offsetyout:150;"
                        src="{{ asset('website/images/layerslider-gallery/chalk-effect.png') }}" alt="">
                    <img class="ls-l" style="top:30px;left:2px;white-space: nowrap;"
                        data-ls="delayin:3100;rotateyin:90;parallaxlevel:3;"
                        src="{{ asset('website/images/layerslider-gallery/b-game.png') }}" alt="">
                    <img class="ls-l" style="top:498px;left:13px;white-space: nowrap;"
                        data-ls="offsetxin:-100;delayin:3500;parallaxlevel:4;"
                        src="{{ asset('website/images/layerslider-gallery/b-bulb.png') }}" alt="">
                    <img class="ls-l" style="top:524px;left:507px;white-space:
                        nowrap;"
                        data-ls="delayin:2300;rotateyin:180;parallaxlevel:-3;"
                        src="{{ asset('website/images/layerslider-gallery/b-glass.png') }}" alt="">
                </div>
                <div class="ls-slide" data-ls="slidedelay:7000;
                    transition2d: all;">
                    <img src="{{ asset('website/images/layerslider-gallery/bg2.jpg') }}" class="ls-bg"
                        alt="Slide background" />
                    <img class="ls-l" style="top:25px;left:763px;white-space: nowrap;"
                        data-ls="offsetxin:0;delayin:500;scalexin:3;scaleyin:3;offsetxout:0;parallaxlevel:1;"
                        src="{{ asset('website/images/layerslider-gallery/boom.png') }}" alt="">
                    <img class="ls-l" style="top:247px;left:731px;white-space:
                        nowrap;"
                        data-ls="offsetxin:0;delayin:1000;rotateyin:180;scalexin:3;scaleyin:3;offsetxout:0;parallaxlevel:-2;"
                        src="{{ asset('website/images/layerslider-gallery/awesome-gallery.png') }}" alt="">
                    <img class="ls-l" style="top:259px;left:888px;white-space:
                        nowrap;"
                        data-ls="offsetxin:0;delayin:1500;rotateyin:90;scalexin:3;scaleyin:3;offsetxout:0;parallaxlevel:4;"
                        src="{{ asset('website/images/layerslider-gallery/parallax-bg.png') }}" alt="">
                    <img class="ls-l" style="top:402px;left:758px;white-space:
                        nowrap;"
                        data-ls="offsetxin:0;delayin:2000;rotateyin:100;scalexin:3;scaleyin:3;offsetxout:0;parallaxlevel:3;"
                        src="{{ asset('website/images/layerslider-gallery/creative-design.png') }}" alt="">
                    <img class="ls-l" style="top:411px;left:935px;white-space:
                        nowrap;"
                        data-ls="offsetxin:0;delayin:1700;rotateyin:120;scalexin:3;scaleyin:3;offsetxout:0;parallaxlevel:2;"
                        src="{{ asset('website/images/layerslider-gallery/mega-menu.png') }}" alt="">
                    <img class="ls-l"
                        style="top:15px;left:1095px;transform:rotate(100deg);
                        -ms-transform:rotate(100deg); /* IE 9 */
                        -webkit-transform:rotate(100deg); /* Opera,
                        Chrome, and Safari */ ;white-space: nowrap;"
                        data-ls="offsetxin:0;delayin:700;parallaxlevel:4;"
                        src="{{ asset('website/images/layerslider-gallery/common-swirl.png') }}" alt="">
                    <img class="ls-l"
                        style="top:133px;left:686px;transform:rotate(50deg);
                        -ms-transform:rotate(50deg); /* IE 9 */
                        -webkit-transform:rotate(50deg); /* Opera,
                        Chrome, and Safari */ ;white-space: nowrap;"
                        data-ls="offsetxin:0;delayin:1800;rotatexin:30;rotateyin:30;parallaxlevel:3;"
                        src="{{ asset('website/images/layerslider-gallery/common-swirl.png') }}" alt="">
                    <img class="ls-l"
                        style="top:516px;left:705px;transform:rotate(-50deg);
                        -ms-transform:rotate(-50deg); /* IE 9 */
                        -webkit-transform:rotate(-50deg); /* Opera,
                        Chrome, and Safari */ ;white-space: nowrap;"
                        data-ls="offsetxin:0;delayin:1800;rotatexin:30;rotateyin:30;parallaxlevel:2;"
                        src="{{ asset('website/images/layerslider-gallery/common-swirl.png') }}" alt="">
                    <img class="ls-l"
                        style="top:229px;left:1069px;transform:rotate(-90deg);
                        -ms-transform:rotate(-90deg); /* IE 9 */
                        -webkit-transform:rotate(-90deg); /* Opera,
                        Chrome, and Safari */ ;white-space: nowrap;"
                        data-ls="offsetxin:0;delayin:2500;rotatexin:30;rotateyin:30;parallaxlevel:3;"
                        src="{{ asset('website/images/layerslider-gallery/common-swirl.png') }}" alt="">
                    <img class="ls-l" style="top:123px;left:1123px;white-space:
                        nowrap;"
                        data-ls="offsetxin:0;offsetyin:150;delayin:3000;rotateyin:100;offsetxout:0;offsetyout:-100;parallaxlevel:-4;"
                        src="{{ asset('website/images/layerslider-gallery/star-2.png') }}" alt="">
                    <img class="ls-l" style="top:0px;left:0px;white-space: nowrap;"
                        data-ls="delayin:1200;rotatexin:200;rotateyin:200;parallaxlevel:5;"
                        src="{{ asset('website/images/layerslider-gallery/aplus.png') }}" alt="">
                    <img class="ls-l" style="top:92px;left:-52px;white-space: nowrap;"
                        data-ls="offsetxin:0;offsetyin:90;delayin:2000;rotatexin:100;rotateyin:100;offsetyout:-90;parallaxlevel:1;"
                        src="{{ asset('website/images/layerslider-gallery/swirl-3.png') }}" alt="">
                    <img class="ls-l" style="top:197px;left:-9px;white-space: nowrap;"
                        data-ls="delayin:800;rotatexin:200;rotateyin:200;parallaxlevel:3;"
                        src="{{ asset('website/images/layerslider-gallery/swirl-2.png') }}" alt="">
                    <img class="ls-l" style="top:275px;left:-122px;white-space:
                        nowrap;"
                        data-ls="offsetxin:0;delayin:3000;rotatexin:90;rotateyin:90;offsetxout:0;parallaxlevel:-2;"
                        src="{{ asset('website/images/layerslider-gallery/cap.png') }}" alt="">
                    <img class="ls-l" style="top:394px;left:-30px;white-space:
                        nowrap;"
                        data-ls="offsetxin:0;delayin:2700;rotatexin:90;rotateyin:90;offsetxout:0;parallaxlevel:1;"
                        src="{{ asset('website/images/layerslider-gallery/apple.png') }}" alt="">
                    <img class="ls-l" style="top:35px;left:555px;white-space: nowrap;"
                        data-ls="offsetxin:0;delayin:2200;rotatexin:90;rotateyin:90;offsetxout:0;parallaxlevel:2;"
                        src="{{ asset('website/images/layerslider-gallery/swirl-4.png') }}" alt="">
                    <img class="ls-l" style="top:395px;left:758px;white-space:
                        nowrap;"
                        data-ls="offsetxin:0;delayin:3200;scalexin:4;scaleyin:4;offsetxout:0;parallaxlevel:-2;"
                        src="{{ asset('website/images/layerslider-gallery/common-star.png') }}" alt="">
                    <img class="ls-l" style="top:366px;left:1067px;white-space:
                        nowrap;"
                        data-ls="offsetxin:0;delayin:2100;scalexin:2;scaleyin:2;offsetxout:0;parallaxlevel:1;"
                        src="{{ asset('website/images/layerslider-gallery/common-star.png') }}" alt="">
                    <img class="ls-l" style="top:444px;left:1100px;white-space:
                        nowrap;"
                        data-ls="offsetxin:0;delayin:2400;scalexin:3;scaleyin:3;offsetxout:0;parallaxlevel:-1;"
                        src="{{ asset('website/images/layerslider-gallery/common-star.png') }}" alt="">
                    <img class="ls-l" style="top:561px;left:955px;white-space:
                        nowrap;"
                        data-ls="offsetxin:0;durationin:1500;delayin:3600;scalexin:6;scaleyin:6;offsetxout:0;parallaxlevel:-2;"
                        src="{{ asset('website/images/layerslider-gallery/common-star.png') }}" alt="">
                </div>
            </div>
        </div>


        <section id="primary" class="content-full-width">
            <!-- about section start -->
            <section class="fullwidth-background dt-sc-parallax-section
                turquoise-bg">

                <div class="container">

                    <div class="dt-sc-two-third column first">
                        <div class="card">
                            <div class="card-body">
                                <div class="welcome-wrap">
                                    <h2>Welcome To {{ $content->name }}</h2>

                                    <p>Pinnacle Chartered College is an educational establishment that is located at
                                        House-19, road-6 Amin Jutre Mills Panchlaish Chittagong. Its Educational Institute
                                        Identification Number or EIIN, is 134159. The alternative name for Pinnacle
                                        Chartered College is পিনাকল চার্টার্ড কলেজ. Pinnacle Chartered College is under
                                        Chittagong Education Board. Education has been keeping an unique contribution to the
                                        social, cultural and economic development of the country from time immemorial. My
                                        earnest effort to establish Pinnacle Chartered School & College at the important and
                                        charming places of Nasirabad, Chittagong and its Branch at Narshingdi is to keep
                                        pace with these developments along with the stream of educational development. My
                                        first and foremost aim is to make the learners science oriented in full digitalised
                                        way to keep up with the ages and to make exceptional modern institution for the
                                        students for attaining human qualities edowed with patriotism.
                                    </p>
                                </div>
                                <a class="read_more" href="{{ route('about') }}"> Read More About Us <span
                                        class="fa fa-chevron-circle-right"></span></a>
                            </div>
                        </div>
                    </div>


                    <div class="dt-sc-one-third column">
                        <div class="card">
                            <div class="card-header custom-card-header
                                ">
                                <h2>Message Of Chairman </h2>
                            </div>
                            <div class="card-body">
                                <div class="chairman">
                                    <div class="chairman_img">
                                        <img src="{{ asset('website/images/author.jpg') }}" alt="chairman">
                                    </div>
                                    <div class="chaiman_name">
                                        <h3>Solaiman Khan Masum</h3>
                                        <p>Chairman of Pinnacle</p>
                                    </div>
                                </div>
                                <div class="chairman_message">
                                    <p>Education has been keeping an unique contribution to the social, cultural and
                                        economic development of the country from time immemorial. My earnest effort to
                                        establish Pinnacle Chartered School & College at the important and charming places
                                        of Nasirabad, Chittagong and its Branch at Narshingdi is to keep pace with these
                                        developments along with the stream of educational development. My first and foremost
                                        aim is to make the learners science oriented in full digitalised way to keep up with
                                        the ages and to make exceptional modern institution for the students for attaining
                                        human qualities edowed with patriotism.</p>
                                </div>
                                <a class="read_more" href=""> Read More <span
                                        class="fa fa-chevron-circle-right"></span></a>
                            </div>
                        </div>
                    </div>

                </div>

            </section>

            <div class="dt-sc-hr"></div>
            <!-- about section end -->

            <div class="container">
                <h2 class="dt-sc-hr-green-title">Our Activities </h2>
                <div class="dt-sc-one-fourth column first">
                    <div class="dt-sc-ico-content type1">
                        <div class="icon">
                            <span class="icon-outer">
                                <img src="{{ asset('website/images/service1.jpg') }}" alt="" title="">
                                <span class="infolayer">
                                    <a href="#"><i class="fa fa-link"></i></a>
                                </span>
                            </span>
                        </div>
                        <h4><a href="#">Active Learning</a></h4>
                        <p>Curabitur ultrices posuere mattis. Nam
                            ullamcorper, diam sit amet euismod pelleo
                            ntesque, eros risus rhoncus libero, invest
                            tibulum nisl ligula</p>
                    </div>
                </div>
                <div class="dt-sc-one-fourth column">
                    <div class="dt-sc-ico-content type1">
                        <div class="icon">
                            <span class="icon-outer">
                                <img src="{{ asset('website/images/service2.jpg') }}" alt="" title="">
                                <span class="infolayer">
                                    <a href="#"><i class="fa fa-link"></i></a>
                                </span>
                            </span>
                        </div>
                        <h4><a href="#">Music Class</a></h4>
                        <p>Decor ostdcaer urabitur ultrices posuere
                            mattis. Nam ullamcorper, diam sit amet
                            euismod pelleontesque, eros risus rhoncus
                            libero, invest tibulum nisl ligula</p>
                    </div>
                </div>
                <div class="dt-sc-one-fourth column">
                    <div class="dt-sc-ico-content type1">
                        <div class="icon">
                            <span class="icon-outer">
                                <img src="{{ asset('website/images/service3.jpg') }}" alt="" title="">
                                <span class="infolayer">
                                    <a href="#"><i class="fa fa-link"></i></a>
                                </span>
                            </span>
                        </div>
                        <h4><a href="#">Yoga Class</a></h4>
                        <p>Rabitur ultrices posuere mattis. Nam
                            ullamcorper, diam sit euismod pelleo
                            ntesque, eros risus rhoncus libero, invest
                            tibulum nisl gedretu osterftra ligula</p>
                    </div>
                </div>
                <div class="dt-sc-one-fourth column">
                    <div class="dt-sc-ico-content type1">
                        <div class="icon">
                            <span class="icon-outer">
                                <img src="{{ asset('website/images/service4.jpg') }}" alt="" title="">
                                <span class="infolayer">
                                    <a href="#"><i class="fa fa-link"></i></a>
                                </span>
                            </span>
                        </div>
                        <h4><a href="#">Kung fu Class</a></h4>
                        <p>Curabitur ultrices posuere mattis. Nam
                            ullamcorper, diam sit amet euismod pelleo
                            ntesque, eros risus rhoncus libero, invest
                            tibulum nisl ligula</p>
                    </div>
                </div>
            </div>

            <div class="dt-sc-hr"></div>

            <section class="fullwidth-background dt-sc-parallax-section turquoise-bg">

                <div class="container">

                    <div class="dt-sc-one-half column first">
                        <h2>Why We Are Special</h2>

                        <div class="dt-sc-one-half column first">
                            <div class="dt-sc-ico-content type2">
                                <div class="icon">
                                    <span class="fa fa-glass"> </span>
                                </div>
                                <h4><a href="#" target="_blank"> English
                                        Summer Camp </a></h4>
                                <p>Nam ullamcorper, diam sit amet
                                    euismod pelleontesque, eros risus
                                    rhoncus libero, inst tibulum nisl
                                    ligula....</p>
                            </div>
                            <div class="dt-sc-hr-very-small"></div>
                            <div class="dt-sc-ico-content type2">
                                <div class="icon">
                                    <span class="fa fa-pencil"> </span>
                                </div>
                                <h4><a href="#" target="_blank"> Drawing
                                        & Painting </a></h4>
                                <p>Nam ullamcorper, diam sit amet
                                    euismod pelleontesque, eros risus
                                    rhoncus libero, inst tibulum nisl
                                    ligula....</p>
                            </div>
                            <div class="dt-sc-hr-very-small"></div>
                            <div class="dt-sc-ico-content type2">
                                <div class="icon">
                                    <span class="fa fa-bullseye">
                                    </span>
                                </div>
                                <h4><a href="#" target="_blank">
                                        Swimming Camp </a></h4>
                                <p>Nam ullamcorper, diam sit amet
                                    euismod pelleontesque, eros risus
                                    rhoncus libero, inst tibulum nisl
                                    ligula....</p>
                            </div>
                        </div>


                        <div class="dt-sc-one-half column">
                            <div class="dt-sc-ico-content type2">
                                <div class="icon"><span class="fa fa-tachometer"></span></div>
                                <h4><a href="#" target="_blank"> Sports Camp </a></h4>
                                <p>Nam ullamcorper, diam sit amet euismod pelleontesque, eros risus rhoncus libero, inst
                                    tibulum nisl ligula....</p>
                            </div>
                            <div class="dt-sc-hr-very-small"></div>
                            <div class="dt-sc-ico-content type2">
                                <div class="icon"><span class="fa fa-magic"> </span></div>
                                <h4><a href="#" target="_blank">Personalizing </a></h4>
                                <p>Nam ullamcorper, diam sit amet euismod pelleontesque, eros risus rhoncus libero, inst
                                    tibulum nisl ligula....</p>
                            </div>
                            <div class="dt-sc-hr-very-small"></div>
                            <div class="dt-sc-ico-content type2">
                                <div class="icon"><span class="fa fa-music"></span></div>
                                <h4><a href="#" target="_blank"> Sing & Dance </a></h4>
                                <p>Nam ullamcorper, diam sit amet euismod pelleontesque, eros risus rhoncus libero, inst
                                    tibulum nisl ligula....</p>
                            </div>
                        </div>
                    </div>

                    <div class="dt-sc-one-half column">
                        <h2>With Music4Kids, music is childs play!</h2>
                        <div class="add-slider-wrapper">
                            <ul class="add-slider">
                                <li> <img src="{{ asset('website/images/sch1.png') }}" alt="" title="">
                                </li>
                                <li> <img src="{{ asset('website/images/sch2.png') }}" alt="" title="">
                                </li>
                                <li> <img src="{{ asset('website/images/sch3.png') }}" alt="" title="">
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </section>
            <div class="dt-sc-hr"></div>

            <!-- News Events Start  -->
            <div class="container">
                <div class="dt-sc-one-half column first">
                    <div class="card-header">
                        <h2 style="margin-bottom: 0;">Upcoming Events</h2>
                    </div>
                    <div class="custom-card ">
                        <div class="card-body">
                            @foreach ($news as $item)
                            <div class="events-list "height="365">
                               <div class="event-thumb">
                                   <a href="{{route('newsdetails',$item->id)}}" title="">
                                       <img src="{{ asset($item->image) }}" class=""
                                           alt="" title="">
                                   </a>
                               </div>
                               <div class="event-details">
                                   <h2><a href="#">{{$item->title}}</a></h2>
                                   <div class="event-meta"><span class="fa fa-calendar"></span> {{$item->date}}</div>
                                   <div class="event-excerpt">
                                       {!! Str::of($item->description)->words(16, '...');!!} <a href="{{route('newsdetails',$item->id)}}">read more</a>
                                   </div>
                               </div>
                           </div>

                            @endforeach

                            <a class="read_more" href=""> View All <span
                                    class="fa fa-chevron-circle-right"></span></a>
                        </div>
                    </div>
                </div>

                <div class="dt-sc-one-half column">
                    <div class="card-header">
                        <h2 style="margin-bottom: 0;">Notice Board</h2>
                    </div>
                    <div class="custom-card">
                        <div class="card-body">
                            <marquee height="365" behavior="scroll" direction="up" scrollamount="3"
                                onmouseover="this.stop();" onmouseout="this.start();">
                             @foreach ($notice as $item)
                             <div class="events-list">
                                <div class="event-details">
                                    <h2><a href="#">{{$item->title}}</a></h2>
                                    <div class="event-meta"><span class="fa fa-calendar"></span> {{$item->date}}</div>
                                    <div class="event-excerpt">
                                        {!! Str::of($item->description)->words(16, '...');!!} <a href="{{route('newsdetails',$item->id)}}">read more</a>
                                    </div>
                                </div>
                            </div>
                             @endforeach
                            </marquee>
                            <a class="read_more" href=""> View All <span
                                    class="fa fa-chevron-circle-right"></span></a>
                        </div>
                    </div>
                </div>
                <div class="dt-sc-hr-very-small"></div>
            </div>

            <div class="dt-sc-hr"></div>
            <!-- news events end -->

            <section class="fullwidth-background dt-sc-parallax-section gallery-bg">
                <div class="container">
                    <h2 class="dt-sc-hr-green-title">Photo Gallery </h2>
                    <div class="front-portfolio-container">
                        @foreach ($gallery as $key => $item)
                        <div class="portfolio-content portfolio-content{{$key+1}}">
                            <div class="front-portfolio">
                                <div class="portfolio-outer">
                                    <div class="portfolio-thumb">
                                        <img src="{{ asset('uploads/gallery/'.$item->image) }}" alt=""
                                            title="">
                                        <div class="image-overlay">
                                            <h5><a href="portfolio-detail.html">{{$item->title}}</a></h5>
                                            <a href="portfolio-detail.html" class="link"><span
                                                    class="fa
                                                fa-link"></span></a>
                                            <a href="{{ asset('uploads/gallery/'.$item->image) }}"
                                                data-gal="prettyPhoto[gallery]" class="zoom"><span
                                                    class="fa
                                                fa-search"></span></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        @endforeach
                        <div class="dt-sc-hr-small"></div>
                        <div class="aligncenter">
                            <a href="{{route('gallery')}}" class="dt-sc-button medium mustard"> Hit here to view all <span
                                    class="fa fa-chevron-circle-right"> </span></a>
                        </div>
                    </div>

                </div>
            </section>
            <section class="fullwidth-background dt-sc-parallax-section
                orange-bg">

                <div class="container">
                    <h2 class="dt-sc-hr-white-title">Video Gallery</h2>

               @foreach ($video as $key => $item)
               <div class="column dt-sc-one-fourth {{ $key == 0 ? 'first' : '' }} video_gall">
                <div class="video">
                    <iframe width="100%" height="150" src="{{$item->link}}"
                        title="YouTube video player" frameborder="0"
                        allow="accelerometer;
                        autoplay; clipboard-write;
                        encrypted-media; gyroscope;
                        picture-in-picture"
                        allowfullscreen></iframe>
                </div>
                <div class="title">
                    <h2>{{$item->title}}</h2>
                </div>
            </div>
               @endforeach


                    <div class="aligncenter">
                        <a href="{{route('video')}}" class="dt-sc-button medium mustard v_gallery"> Hit here to view all <span
                                class="fa fa-chevron-circle-right"> </span></a>
                    </div>

                </div>

            </section>

            <div class="dt-sc-hr"></div>

            <div class="container">
                <h2 class="dt-sc-hr-green-title">Our Teachers</h2>
                @foreach ($teacher as $item)
                <div class="column dt-sc-one-eighth first">
                    <div class="dt-sc-team">
                        <div class="image">
                            <img class="item-mask" src="{{ asset('website/images/mask.png') }}" alt=""
                                title="">
                            <img src="{{ asset($item->image) }}" alt="" title="">
                            <div class="dt-sc-image-overlay">

                            </div>
                        </div>
                        <div class="team-details">
                            <h5> {{$item->name}} </h5>
                            <h6>{{$item->designation}} </h6>
                            <p>{{$item->specality}}</p>

                        </div>
                    </div>
                </div>

                @endforeach
            </div>

            <div class="dt-sc-hr"></div>

            <section class="fullwidth-background dt-sc-parallax-section product_bg">
                <div class="container">
                    <h2 class="dt-sc-hr-white-title">Dress Code</h2>
                    <ul class="products">
                      @foreach ($dress as $item)
                      <li class="dt-sc-one-fourth column {{ $key == 0 ? 'first' : '' }}">
                        <div class="product-thumb">
                            <a href="#"><img src="{{ asset($item->image) }}" alt="" title=""></a>
                            <div class="image-overlay"></div>
                        </div>
                        <div class="product-details">
                            <h5 style="text-align: center;">{{$item->title}}</h5>
                        </div>
                    </li>

                      @endforeach
                    </ul>
                </div>
            </section>
        </section>
    </div>
@endsection
