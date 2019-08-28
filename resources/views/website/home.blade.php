@extends('layouts.website')
@section('website')

{{-- {{asset('contents/website')}}/ --}}
    <!--    back to top-->
    <div class="b-to-top"><a href="#" class="back-top-btn" id="button"><img
        src="{{asset('contents/website')}}/images/back-to-top/kisspng-mikoyan-mig-41-mikoyan-mig-35-mikoyan-mig-31-mikoy-ferret-5aba2ac6f13ad9.png"
        alt="back to top"></a></div><!--   header part start-->
    <header id="header">
        <div class=" container-fluid">
        <div class="row">
            <div class="col-md-12 p-0">
            <!-- <div class="stars"></div> -->
                <div class="banner">
                <!-- top navbar part -->
                <div class="row">
                    <div class="col-md-12">
                        <div class="top-navbar">
                            <div class="nav-body">
                                <div class="logo"><img src="{{asset('contents/website')}}/images/logo.png" alt="logo"></div>
                                <div class="menu-items">
                                    <div class="left">
                                        <h2>HI!</h2>
                                        <h2>Well come to</h2>
                                        <h5> Creative world </h5>
                                    </div>
                                    <div class="right">
                                        <ul>
                                            <li><a href="https://www.facebook.com/profile.php?id=100007517444767"
                                                    target="_blank" title="facebook"><i
                                                        class="fa fa-facebook-f"></i></a></li>
                                            <li><a href="https://twitter.com/Md_Shefat_Masum" target="_blank"
                                                    title="twitter"><i class="fa fa-twitter"></i></a></li>
                                            <li><a href="https://www.linkedin.com/in/md-shefat-ms512382/"
                                                    target="_blank" title="linked in"><i
                                                        class="fa fa-linkedin"></i></a></li>
                                            <li><a href="#" title="skype name : masum shefat"><i
                                                        class="fa fa-skype"></i></a></li>
                                            <li><a href="https://dribbble.com/shefat_masum" target="_blank"
                                                    title="dribble"><i class="fa fa-dribbble"></i></a></li>
                                            <li><a href="#"
                                                    target="_blank" title="google plus"><i
                                                        class="fa fa-google-plus"></i></a></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div><!--                    banner content navbar and short profile-->
                <div class="row" style="">
                    <div class="col-md-12 p-0" style="">
                        <div class="row">
                            <div class="col-md-7">
                                <div class="banner-left">
                                    <div class="banner-left-body">
                                        <div class="left-inner">
                                            <div class="profile-pic">
                                                <div class="l1"></div>
                                                <div class="l2"></div>
                                                <div class="profile"></div>
                                                <div class="l3"></div>
                                            </div>
                                            <div class="profile-des">
                                                <p><b>/ / / / / / / / / /</b> carriculum vitae</p>
                                                <h1>MD.SHEFAT</h1>
                                                <h3>STATUS</h3>
                                                <h2>WEB FULL STACK DEVELOPER</h2>
                                                <h3>Skills</h3>
                                                <ul>
                                                    <li>
                                                        <div style="width: 70%;" class="skills"></div>html
                                                    </li>
                                                    <li>
                                                        <div style="width: 65%;" class="skills"></div>css
                                                    </li>
                                                    <li>
                                                        <div style="width: 60%;" class="skills"></div>java
                                                        script
                                                    </li>
                                                    <li>
                                                        <div style="width: 45%;" class="skills"></div>jquery
                                                    </li>
                                                    <li>
                                                        <div style="width: 48%;" class="skills"></div>PHP
                                                    </li>
                                                    <li>
                                                        <div style="width: 55%;" class="skills"></div>Larraval
                                                    </li>
                                                    <li>
                                                        <div style="width: 60%;" class="skills"></div>Wordpress
                                                    </li>
                                                </ul><a href="#" class="hire-me">Hire me</a><a href="#about-me"
                                                    class="hire-me">About me</a><a href="#contact"
                                                    class="hire-me">contact me</a>
                                            </div>
                                            <div class="left-backlight"></div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-5">
                                <div class="banner-right">
                                    <div class="menu">
                                        <div class="menu-m">
                                            <div class="mc1"></div>
                                            <div class="mc2"></div>
                                            <div class="mc3"></div>
                                            <div class="mc4"></div>
                                            <div class="mc5"></div>
                                            <div class="menu-button"><button id="menu"
                                                    style="cursor: pointer;"><i
                                                        class="fa fa-align-right trigger-open"></i></button>
                                            </div>
                                            <div class="menu-list">
                                                <ul>
                                                    <li><a class="menus" href="#header">home</a>
                                                        <div class="glowing"></div>
                                                    </li>
                                                    <li><a class="menus" href="#about-me">about me</a>
                                                        <div class="glowing"></div>
                                                    </li>
                                                    <li><a class="menus" href="#skill">skill</a>
                                                        <div class="glowing"></div>
                                                    </li>
                                                    <li><a class="menus" href="#portfolio">projects</a>
                                                        <div class="glowing"></div>
                                                    </li>
                                                    <li><a class="menus" href="#team">my team</a>
                                                        <div class="glowing"></div>
                                                    </li>
                                                    <li><a class="menus" href="#client">my clients</a>
                                                        <div class="glowing"></div>
                                                    </li>
                                                    <li><a class="menus" href="#contact">contact me</a>
                                                        <div class="glowing"></div>
                                                    </li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
</header><!--    header part end-->
<!--    scroll menu part start-->
<section class="hidden_menu">
<div class="container">
    <div class="row">
        <div class="col-md-12">
            <div class="top-navbar">
                <div class="nav-body">
                    <div class="logo"><img src="{{asset('contents/website')}}/images/logo.png" alt="logo"></div>
                    <div class="menu-items">
                        <div class="left">
                            <ul>
                                <li><a class="menus" href="#header">home</a></li>
                                <li><a class="menus" href="#about-me">about me</a></li>
                                <li><a class="menus" href="#service">services</a></li>
                                <li><a class="menus" href="#skill">skills</a></li>
                                <li><a class="menus" href="#portfolio">portfolio</a></li>
                                <li><a class="menus" href="#contact">contact me</a></li>
                            </ul>
                        </div>
                        <div class="right">
                            <ul>
                                <ul>
                                    <li><a href="https://www.facebook.com/profile.php?id=100007517444767"
                                            target="_blank" title="facebook"><i
                                                class="fa fa-facebook-f"></i></a></li>
                                    <li><a href="https://twitter.com/Md_Shefat_Masum" target="_blank"
                                            title="twitter"><i class="fa fa-twitter"></i></a></li>
                                    <li><a href="https://www.linkedin.com/in/md-shefat-ms512382/"
                                            target="_blank" title="linked in"><i class="fa fa-linkedin"></i></a>
                                    </li>
                                    <li><a href="#" title="skype name : masum shefat"><i
                                                class="fa fa-skype"></i></a></li>
                                    <li><a href="https://dribbble.com/shefat_masum" target="_blank"
                                            title="dribble"><i class="fa fa-dribbble"></i></a></li>
                                    <li><a href="https://plus.google.com/103782622568541658027" target="_blank"
                                            title="google plus"><i class="fa fa-google-plus"></i></a></li>
                                </ul>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
</section><!--    scroll menu part end-->

<!--    banenr part start-->
<section id="banner">
<div class="row">
    <div class="col-md-12">
        <div class="banner-body">
            <!-- <div class="stars"></div> -->
            <div class="banner-left-side">
                <!--                       left counter circle-->
                <div class="inner-circle-left-1">
                    <div class="inner-circle-left-2"></div>
                </div>
                <div class="left-center-line"></div>
                <div class="left-center-line2"></div>
                <div class="left-center-line3"></div>
                <div class="left-center-line4"></div>
                <div class="left-center-line5"></div>
            </div>
            <div class="banner-left-side-frame"></div>
            <div class="banner-left-top"></div>
            <div class="banner-right-top"></div>
            <div class="banner-left-bottom"></div>
            <div class="banner-photo owl-carousel owl-item">
                <div class="banner-img"><img src="{{asset('contents/website')}}/images/banner-part/banner-photos/2.png" alt="img"></div>
                <div class="banner-img"><img src="{{asset('contents/website')}}/images/banner-part/banner-photos/1.png" alt="img"></div>
            </div>
        </div>
    </div>
</div>
</section>
<!--    banenr part end-->

<!--    banenr part start responsive-->
<section id="banner-responsive" class="">
<div class="row banner-responsive owl-carousel owl-item">
    <div class="col-md-12 ">
        <div class="banner-img"><img src="{{asset('contents/website')}}/images/banner-part/banner-photos/2.png" alt="img"></div>
    </div>
    <div class="col-md-12 pr-0">
        <div class="banner-img"><img src="{{asset('contents/website')}}/images/banner-part/banner-photos/1.png" alt="img"></div>
    </div>
</div>
</section>
<!--    banenr part responsive end-->

<!--    about me part start-->
<section id="about-me">
    <div class="container">
        <div class="row">
            <div class="col-md-4">
                <div class="left-image">
                    <div class="r1"></div>
                    <div class="r2"><a href="#"><i class="fa fa-facebook"></i></a><a href="#"><i
                                class="fa fa-twitter"></i></a><a href="#"><i class="fa fa-linkedin"></i></a><a
                            href="#"><i class="fa fa-youtube-play"></i></a></div><img
                        src="{{asset('contents/website')}}/images/about-me/20190320_123833.png" class="img-fluid" alt="">
                </div>
            </div>
            <div class="col-md-4">
                <div class="common-heading ch-1">
                    <div class="top-line"></div>
                    <div class="bottom-line"></div>
                    <h3>About Me</h3>
                </div>
                <div class="about-p">
                    <h4> Be who you are and say what you feel, because those who mind don't matter, and those who
                        matter don't mind. </h4>
                    <p> Hello, I'm a Web Full Stack Developer from Dhaka, Bangladesh. I hold a master degree of Web
                        Design from the St. Patrick University. </p>
                    <p> I currently work at Creative Shaper, where I spend most of my time crafting and working on
                        awesome projects. Lorem ipsum dolor sit amet consectetuer Integer eleifend Curabitur id ut.
                        Quisque Aenean ut pede id elit ligula est mollis sapien magna. Urna turpis quis sagittis at
                        ac Sed augue habitant tortor elit. Dolor Quisque et elit aliquam vitae habitant. </p>
                </div>
            </div>
            <div class="col-md-4">
                <div class="right-p">
                    <ul>
                        <li><i class="fa fa-calendar"></i>birthdate: <span>14/02/1995</span></li>
                        <li><i class="fa fa-phone"></i>phone: <span>01646376015</span></li>
                        <li><i class="fa fa-envelope"></i>email: <span>mshefat924@gmail.com</span></li>
                        <li><i class="fa fa-globe"></i>website: <span>mdshefat.com</span></li>
                        <li><i class="fa fa-home"></i>address: <span>donia, kodomtoli, dhaka</span></li>
                    </ul>
                    <div class="row">
                        <div class="col-6">
                            <div class="in"><i class="fa fa-users"></i>
                                <h4>100</h4>
                                <p>Happy Clients</p>
                            </div>
                        </div>
                        <div class="col-6">
                            <div class="in"><i class="fa fa-flag"></i>
                                <h4>3</h4>
                                <p>Years Experience</p>
                            </div>
                        </div>
                        <div class="col-6">
                            <div class="in"><i class="fa fa-trophy"></i>
                                <h4>13</h4>
                                <p>Awards Won</p>
                            </div>
                        </div>
                        <div class="col-6">
                            <div class="in"><i class="fa fa-thumbs-up"></i>
                                <h4>50</h4>
                                <p>Projects Done</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section><!--    about me part end-->
<!--    achivement part start-->
<section id="acheivement">
    <div class="container">
        <div class="row">
            <!--   works heading-->
            <div class="col-md-6 col-sm-12">
                <div class="common-heading ch-1">
                    <div class="top-line"></div>
                    <div class="bottom-line"></div>
                    <h3>Discover my Profile.</h3>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-6 col-sm-12">
                <div class="acheivement-logo">
                    <ul class="nav nav-tabs" id="myTab" role="tablist">
                        <li class="nav-item"><a class="nav-link active" id="home-tab" data-toggle="tab" href="#home"
                                role="tab" aria-controls="home" aria-selected="true"><i
                                    class="fa fa-trophy"></i></a></li>
                        <li class="nav-item"><a class="nav-link" id="graduate-tab" data-toggle="tab"
                                href="#graduation" role="tab" aria-controls="graduation" aria-selected="true"><i
                                    class="fa fa-graduation-cap"></i></a></li>
                        <li class="nav-item"><a class="nav-link" id="job-tab" data-toggle="tab" href="#jobskill"
                                role="tab" aria-controls="jobskill" aria-selected="true"><i
                                    class="fa fa-briefcase"></i></a></li>
                        <li class="nav-item"><a class="nav-link" id="prof-tab" data-toggle="tab" href="#profession"
                                role="tab" aria-controls="home" aria-selected="true"><i
                                    class="fa fa-anchor"></i></a></li>
                    </ul>
                </div>
            </div>
            <div class="col-md-6 col-sm-12">
                <div class="right">
                    <div class="row">
                        <div class="col-2">
                            <!--  left line-->
                            <div class="left-line"></div>
                        </div>
                        <div class="col-10">
                            <div class="tab-content" id="myTabContent">
                                <div class="right-body tab-pane fade show active" id="home" role="tabpanel"
                                    aria-labelledby="job-tab">
                                    <h4>Achievement Awards</h4>
                                    <div class="achiv-parts">
                                        <h5>01</h5>
                                        <h6>Best UI/UX Designer of the year - 2018</h6>
                                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod
                                            tempor incididunt.</p>
                                    </div>
                                    <div class="achiv-parts">
                                        <h5>02</h5>
                                        <h6>Best UI/UX Designer of the year - 2018</h6>
                                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod
                                            tempor incididunt.</p>
                                    </div>
                                    <div class="achiv-parts">
                                        <h5>03</h5>
                                        <h6>Best UI/UX Designer of the year - 2018</h6>
                                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod
                                            tempor incididunt.</p>
                                    </div>
                                </div><!--     second achivements-->
                                <div class="right-body tab-pane fade" id="graduation" role="tabpanel"
                                    aria-labelledby="graduate-tab">
                                    <h4>Graduation Awards</h4>
                                    <div class="achiv-parts">
                                        <h5>01</h5>
                                        <h6>Pass College year - 2014</h6>
                                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod
                                            tempor incididunt.</p>
                                    </div>
                                    <div class="achiv-parts">
                                        <h5>02</h5>
                                        <h6>Graduat in CSE - 2016</h6>
                                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod
                                            tempor incididunt.</p>
                                    </div>
                                    <div class="achiv-parts">
                                        <h5>03</h5>
                                        <h6>PHD on Networkin - 2018</h6>
                                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod
                                            tempor incididunt.</p>
                                    </div>
                                </div><!--       Third Achivment-->
                                <div class="right-body tab-pane fade" id="jobskill" role="tabpanel"
                                    aria-labelledby="job-tab">
                                    <h4>My job Qualifications</h4>
                                    <div class="achiv-parts">
                                        <h5>01</h5>
                                        <h6>Software Engineer at Minisoft - 2016</h6>
                                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod
                                            tempor incididunt.</p>
                                    </div>
                                    <div class="achiv-parts">
                                        <h5>02</h5>
                                        <h6>Project Maneger at Microsoft - 2017</h6>
                                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod
                                            tempor incididunt.</p>
                                    </div>
                                    <div class="achiv-parts">
                                        <h5>03</h5>
                                        <h6>Microsoft CEO - 2018</h6>
                                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod
                                            tempor incididunt.</p>
                                    </div>
                                </div><!--       fourth Achivment-->
                                <div class="right-body tab-pane fade" id="profession" role="tabpanel"
                                    aria-labelledby="prof-tab">
                                    <h4>My Previous Specialties</h4>
                                    <div class="achiv-parts">
                                        <h5>01</h5>
                                        <h6>Teacher - 2016</h6>
                                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod
                                            tempor incididunt.</p>
                                    </div>
                                    <div class="achiv-parts">
                                        <h5>02</h5>
                                        <h6>Trainer - 2017</h6>
                                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod
                                            tempor incididunt.</p>
                                    </div>
                                    <div class="achiv-parts">
                                        <h5>03</h5>
                                        <h6>Singer - 2018</h6>
                                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod
                                            tempor incididunt.</p>
                                    </div>
                                </div>
                            </div><!--    tab contents end-->
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div id="clien"></div>
</section><!--    achivement part end-->
<!--    my services part start -->
<section id="service">
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="common-heading ch-1">
                    <div class="top-line"></div>
                    <div class="bottom-line"></div>
                    <h3>MY services</h3>
                </div>
            </div>
            <div class="col-xl-2 col-xl-service service-left-body">
                <div class="service-left owl-carousel owl-theme">
                    <div class="left-inner-top"></div>
                    <div class="left-inner-div">
                        <div class="r"></div>
                    </div>
                    <div class="left-inner-div">
                        <div class="r r2"></div>
                    </div>
                    <div class="left-inner-div">
                        <div class="r r3"></div>
                    </div>
                    <div class="left-inner-div">
                        <div class="r r4"></div>
                    </div>
                    <div class="left-inner-div mlr-0">
                        <div class="r r5"></div>
                    </div>
                    <!--<div class="left-inner-div"><div class="r r6"></div></div>-->
                    <div class="left-inner-bottom"></div>
                </div>
            </div>
            <div class="col-xl-6 col-xl-service col-md-12 p-0">
                <div class="service-mid">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="common-heading">
                                <div class="top-line"></div>
                                <div class="bottom-line"></div>
                                <h3>MY services</h3>
                            </div>
                        </div>
                    </div>
                    <div class="row sm  owl-carousel owl-theme">
                        <div class="col-md-4">
                            <div class="ser-body">
                                <div class="ser-icon"><i class="fa fa-desktop"></i></div>
                                <h5>Web design</h5>
                                <p> Web design is a similar process of creation, with the intention of presenting
                                    the content on electronic web pages... </p>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="ser-body">
                                <div class="ser-icon"><i class="fa fa-code"></i></div>
                                <h5>Web development</h5>
                                <p> Whether you need a dynamic, database-driven php base website or a fully
                                    functioning e-commerce website. </p>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="ser-body">
                                <div class="ser-icon"><i class="fa fa-wordpress"></i></div>
                                <h5>WP customization</h5>
                                <p> Select a paid theme or existing theme i will customize the contents and design
                                    of your wordpress website. </p>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="ser-body">
                                <div class="ser-icon"><i class="fa fa-codepen"></i></div>
                                <h5>WP Development</h5>
                                <p> While you need an wordpress website i will convert your think to a live website
                                    via wordpress. </p>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="ser-body">
                                <div class="ser-icon"><i class="fa fa-slideshare"></i></div>
                                <h5>Bug &amp; error fix</h5>
                                <p> Any types of html, css, responsive, js, jQuery, php, laravel errors . i will fix
                                    that and live your site. </p>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="ser-body">
                                <div class="ser-icon"><i class="fa fa-adn"></i></div>
                                <h5>web apps development</h5>
                                <p> Now a days every one like web apps than web site. i will convert your think intu
                                    web apps with php. </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-xl-4 col-xl-service col-md-12 col-lg-12">
                <div class="service-right">
                    <div class="service-right-body">
                        <div class="service-right-top-bar"></div>
                        <div class="service-right-top-bar2"></div>
                        <div class="service-right-inner-top owl-carousel owl-theme">
                            <div class="service-right-inner-top-inner">
                                <div class="r r5"></div>
                            </div>
                            <div class="service-right-inner-top-inner">
                                <div class="r r2"></div>
                            </div>
                            <div class="service-right-inner-top-inner ">
                                <div class="r r6"></div>
                            </div>
                            <div class="service-right-inner-top-inner" style="margin-right: 0px;">
                                <div class="r r4"></div>
                            </div>
                        </div>
                        <div class="service-right-inner">
                            <div class="service-right-inner-bottom">
                                <h5> PROFESSIONAL EXPERIENCE </h5>
                                <p> Work collaboratively with clients and in-house agency teams to provide rapid,
                                    robust and client-acclaimed front-end development. <br>( may’18 to December’18 )
                                </p>
                            </div>
                            <div class="service-right-inner-bottom two">
                                <h5> Completed total 14 website designing projects. </h5>
                                <ul>
                                    <li>🔷 3 portfolio websites for local and international clients.</li>
                                    <li>🔷 Completed 1 domain hosting site for local clients.</li>
                                    <li>🔷 Completed 1 movie website for an international client.</li>
                                    <li>🔷 Completed 1 portfolio theme accepted by theme forest. </li>
                                    <li>🔷 Completed 8 psd to html projects.</li>
                                </ul>
                            </div>
                        </div>
                        <div class="service-right-bottom-bar"></div>
                        <div class="service-right-bottom-bar2"></div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section><!--    my services part end -->
<!--    Hire me part start-->
<section id="hire-me">
<div class="container">
    <div class="row">
        <div class="col-md-6 col-sm-12">
            <div class="left">
                <h5>I am Available</h5>
                <h5>for Freelance Projects</h5>
                <p>If you have any project in mind, please hire me</p><a href="contact.html">Hire me</a>
            </div>
        </div>
        <div class="col-md-6 col-sm-0 hireme-right">
            <div class="right">
                <div class="row">
                    <div class="col-md-12 offset-md-0"><img style=" width:350px"
                            src="{{asset('contents/website')}}/images/hire-me/17408223_1836006846640153_1331946540_o.jpg" alt="profile img"
                            class="img-fluid"></div>
                </div>
            </div>
        </div>
    </div>
</div>
<div id="acheiv"></div>
</section><!--    Hire me part end-->
<!--   skill part start-->
<section id="skill">
<div class="container">
    <div class="row">
        <div class="col-md-12 p-0">
            <div class="skill-b ">
                <div class="row">
                    <div class="col-md-12">
                        <div class="common-heading">
                            <div class="top-line"></div>
                            <div class="bottom-line"></div>
                            <h3>MY skills</h3>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-3 p-0">
                        <div class="nav flex-column nav-pills" id="v-pills-tab" role="tablist"
                            aria-orientation="vertical"><a class="nav-link active" id="v-pills-home-tab"
                                data-toggle="pill" href="#v-pills-home" role="tab" aria-controls="v-pills-home"
                                aria-selected="true">programming</a><a class="nav-link" id="v-pills-profile-tab"
                                data-toggle="pill" href="#v-pills-profile" role="tab"
                                aria-controls="v-pills-profile" aria-selected="false">Operating system</a><a
                                class="nav-link" id="v-pills-messages-tab" data-toggle="pill"
                                href="#v-pills-messages" role="tab" aria-controls="v-pills-messages"
                                aria-selected="false">graphics</a><a class="nav-link" id="v-pills-settings-tab"
                                data-toggle="pill" href="#v-pills-settings" role="tab"
                                aria-controls="v-pills-settings" aria-selected="false">language</a></div>
                    </div>
                    <div class="col-lg-9 p-0">
                        <div class="tab-content" id="v-pills-tabContent">
                            <div class="tab-pane fade show active" id="v-pills-home" role="tabpanel"
                                aria-labelledby="v-pills-home-tab">
                                <div class="row skill owl-carousel owl-theme">
                                    <div class="col-md-6">
                                        <div class="skill-bar">
                                            <div class="meter">
                                                <div class="skill-head">
                                                    <p>HTML &amp; CSS</p>
                                                </div>
                                                <div class="skill-flow"
                                                    style="width: 100%; height: 100%;overflow: hidden;"><span
                                                        style="width:90%"></span></div>
                                                <p>90%</p>
                                            </div>
                                            <div class="meter">
                                                <div class="skill-head">
                                                    <p>JAVA SCRIPT</p>
                                                </div>
                                                <div class="skill-flow"
                                                    style="width: 100%; height: 100%;overflow: hidden;"><span
                                                        style="width:60%"></span></div>
                                                <p>60%</p>
                                            </div>
                                            <div class="meter">
                                                <div class="skill-head">
                                                    <p>Wordpress &amp; Customization</p>
                                                </div>
                                                <div class="skill-flow"
                                                    style="width: 100%; height: 100%;overflow: hidden;"><span
                                                        style="width:75%"></span></div>
                                                <p>75%</p>
                                            </div>
                                            <div class="meter">
                                                <div class="skill-head">
                                                    <p>PHP</p>
                                                </div>
                                                <div class="skill-flow"
                                                    style="width: 100%; height: 100%;overflow: hidden;"><span
                                                        style="width:60%"></span></div>
                                                <p>60%</p>
                                            </div>
                                            <div class="meter">
                                                <div class="skill-head">
                                                    <p>Laravel</p>
                                                </div>
                                                <div class="skill-flow"
                                                    style="width: 100%; height: 100%;overflow: hidden;"><span
                                                        style="width:55%"></span></div>
                                                <p>55%</p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="skill-bar">
                                            <div class="meter">
                                                <div class="skill-head">
                                                    <p>SQL</p>
                                                </div>
                                                <div class="skill-flow"
                                                    style="width: 100%; height: 100%;overflow: hidden;"><span
                                                        style="width:75%"></span></div>
                                                <p>75%</p>
                                            </div>
                                            <div class="meter">
                                                <div class="skill-head">
                                                    <p>JAVA</p>
                                                </div>
                                                <div class="skill-flow"
                                                    style="width: 100%; height: 100%;overflow: hidden;"><span
                                                        style="width:40%"></span></div>
                                                <p>40%</p>
                                            </div>
                                            <div class="meter">
                                                <div class="skill-head">
                                                    <p>C</p>
                                                </div>
                                                <div class="skill-flow"
                                                    style="width: 100%; height: 100%;overflow: hidden;"><span
                                                        style="width:85%"></span></div>
                                                <p>85%</p>
                                            </div>
                                            <div class="meter">
                                                <div class="skill-head">
                                                    <p>C++</p>
                                                </div>
                                                <div class="skill-flow"
                                                    style="width: 100%; height: 100%;overflow: hidden;"><span
                                                        style="width:50%"></span></div>
                                                <p>50%</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="tab-pane fade" id="v-pills-profile" role="tabpanel"
                                aria-labelledby="v-pills-profile-tab">
                                <div class="row">
                                    <div class="col-md-7">
                                        <div class="skill-bar">
                                            <div class="meter">
                                                <div class="skill-head">
                                                    <p>Windows7</p>
                                                </div>
                                                <div class="skill-flow"
                                                    style="width: 100%; height: 100%;overflow: hidden;"><span
                                                        style="width:90%"></span></div>
                                                <p>90%</p>
                                            </div>
                                            <div class="meter">
                                                <div class="skill-head">
                                                    <p>windows10</p>
                                                </div>
                                                <div class="skill-flow"
                                                    style="width: 100%; height: 100%;overflow: hidden;"><span
                                                        style="width:80%"></span></div>
                                                <p>80%</p>
                                            </div>
                                            <div class="meter">
                                                <div class="skill-head">
                                                    <p>windows xp</p>
                                                </div>
                                                <div class="skill-flow"
                                                    style="width: 100%; height: 100%;overflow: hidden;"><span
                                                        style="width:75%"></span></div>
                                                <p>75%</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="tab-pane fade" id="v-pills-messages" role="tabpanel"
                                aria-labelledby="v-pills-messages-tab">
                                <div class="row">
                                    <div class="col-md-7">
                                        <div class="skill-bar">
                                            <div class="meter">
                                                <div class="skill-head">
                                                    <p>Photo shop</p>
                                                </div>
                                                <div class="skill-flow"
                                                    style="width: 100%; height: 100%;overflow: hidden;"><span
                                                        style="width:60%"></span></div>
                                                <p>60%</p>
                                            </div>
                                            <div class="meter">
                                                <div class="skill-head">
                                                    <p>After effects</p>
                                                </div>
                                                <div class="skill-flow"
                                                    style="width: 100%; height: 100%;overflow: hidden;"><span
                                                        style="width:30%"></span></div>
                                                <p>30%</p>
                                            </div>
                                            <div class="meter">
                                                <div class="skill-head">
                                                    <p>Premear pro</p>
                                                </div>
                                                <div class="skill-flow"
                                                    style="width: 100%; height: 100%;overflow: hidden;"><span
                                                        style="width:40%"></span></div>
                                                <p>40%</p>
                                            </div>
                                            <div class="meter">
                                                <div class="skill-head">
                                                    <p>Dream weaver</p>
                                                </div>
                                                <div class="skill-flow"
                                                    style="width: 100%; height: 100%;overflow: hidden;"><span
                                                        style="width:85%"></span></div>
                                                <p>85%</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="tab-pane fade" id="v-pills-settings" role="tabpanel"
                                aria-labelledby="v-pills-settings-tab">
                                <div class="row">
                                    <div class="col-md-7">
                                        <div class="skill-bar">
                                            <div class="meter">
                                                <div class="skill-head">
                                                    <p>Bangla</p>
                                                </div>
                                                <div class="skill-flow"
                                                    style="width: 100%; height: 100%;overflow: hidden;"><span
                                                        style="width:100%"></span></div>
                                                <p>100%</p>
                                            </div>
                                            <div class="meter">
                                                <div class="skill-head">
                                                    <p>English</p>
                                                </div>
                                                <div class="skill-flow"
                                                    style="width: 100%; height: 100%;overflow: hidden;"><span
                                                        style="width:80%"></span></div>
                                                <p>80%</p>
                                            </div>
                                            <div class="meter">
                                                <div class="skill-head">
                                                    <p>Urdu</p>
                                                </div>
                                                <div class="skill-flow"
                                                    style="width: 100%; height: 100%;overflow: hidden;"><span
                                                        style="width:75%"></span></div>
                                                <p>75%</p>
                                            </div>
                                            <div class="meter">
                                                <div class="skill-head">
                                                    <p>Hindi</p>
                                                </div>
                                                <div class="skill-flow"
                                                    style="width: 100%; height: 100%;overflow: hidden;"><span
                                                        style="width:80%"></span></div>
                                                <p>80%</p>
                                            </div>
                                            <div class="meter">
                                                <div class="skill-head">
                                                    <p>arabic</p>
                                                </div>
                                                <div class="skill-flow"
                                                    style="width: 100%; height: 100%;overflow: hidden;"><span
                                                        style="width:30%"></span></div>
                                                <p>30%</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
</section><!--    skill part end-->
<!--    portfolio part start-->
<section id="portfolio">
<div class="container">
    <div class="row">
        <div class="col-md-12">
            <div class="row">
                <div class="col-md-12">
                    <div class="common-heading">
                        <div class="top-line"></div>
                        <div class="bottom-line"></div>
                        <h3>MY Projects</h3>
                    </div>
                </div>
            </div>
            <div class="col-md-12 col-sm-12 offset-md-0 offset-sm-0">
                <div class="controls">
                    <ul>
                        <li data-filter="all">all</li>
                        <li data-filter="1">psd to html </li>
                        <li data-filter="2">portfolio</li>
                        <li data-filter="3">client work</li>
                        <li data-filter="4">multipages website</li>
                    </ul>
                </div>
            </div>
            <div class="galleryPart glyslide owl-carousel owl-theme filtr-container">
                <div class="col-md-4 col-sm-12 filtr-item" data-category="1,2" data-sort="value">
                    <div class="gallery "><a class="view"><span class="img"><img class="img-fluid"
                                    src="{{asset('contents/website')}}/images/gallery/p1.jpg" alt="graphics Design"></span></a>
                        <div class="gallery-overlay">
                            <div class="br-left wow slideInLeft"></div>
                            <div class="br-bottom wow slideInDown"></div>
                            <div class="center-layers">
                                <div class="center-1 wow fadeIn">
                                    <div class="center-2"></div>
                                </div>
                                <div class="center-3 wow fadeIn"></div>
                                <div class="center-4 wow fadeIn"><a href="{{asset('contents/website')}}/images/gallery/p1.jpg"
                                        data-lightbox="Graphics Design"
                                        title="Graphics Design view cover image"><img
                                            src="{{asset('contents/website')}}/images/gallery/gallery-overlay/ani4.png" alt=""></a></div>
                            </div>
                            <div class="visit-link wow fadeInUp"><a
                                    href="https://md-shefat-masum.github.io/activebox/" target="_blank"><span
                                        class="txt-rotate" data-period="2000"
                                        data-rotate='[ "visit full project", "Web Designing"]'></span></a></div>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 col-sm-12 filtr-item" data-category="2" data-sort="value">
                    <div class="gallery "><a class="view"><span class="img"><img class="img-fluid"
                                    src="{{asset('contents/website')}}/images/gallery/p2.png" alt="graphics Design"></span></a>
                        <div class="gallery-overlay">
                            <div class="br-left wow slideInLeft"></div>
                            <div class="br-bottom wow slideInDown"></div>
                            <div class="center-layers">
                                <div class="center-1 wow fadeIn">
                                    <div class="center-2"></div>
                                </div>
                                <div class="center-3 wow fadeIn"></div>
                                <div class="center-4 wow fadeIn"><a href="{{asset('contents/website')}}/images/gallery/p2.png"
                                        data-lightbox="Graphics Design"
                                        title="Graphics Design view cover image"><img
                                            src="{{asset('contents/website')}}/images/gallery/gallery-overlay/ani4.png" alt=""></a></div>
                            </div>
                            <div class="visit-link wow fadeInUp"><a href="http://azharalipeer.com/"
                                    target="_blank"><span class="txt-rotate" data-period="2000"
                                        data-rotate='[ "visit full project", "Web Designing"]'></span></a></div>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 col-sm-12 filtr-item" data-category="1" data-sort="value">
                    <div class="gallery "><a class="view"><span class="img"><img class="img-fluid"
                                    src="{{asset('contents/website')}}/images/gallery/P3.png" alt="graphics Design"></span></a>
                        <div class="gallery-overlay">
                            <div class="br-left wow slideInLeft"></div>
                            <div class="br-bottom wow slideInDown"></div>
                            <div class="center-layers">
                                <div class="center-1 wow fadeIn">
                                    <div class="center-2"></div>
                                </div>
                                <div class="center-3 wow fadeIn"></div>
                                <div class="center-4 wow fadeIn"><a href="{{asset('contents/website')}}/images/gallery/P3.png"
                                        data-lightbox="Graphics Design"
                                        title="Graphics Design view cover image"><img
                                            src="{{asset('contents/website')}}/images/gallery/gallery-overlay/ani4.png" alt=""></a></div>
                            </div>
                            <div class="visit-link wow fadeInUp"><a
                                    href="https://md-shefat-masum.github.io/beatles"><span class="txt-rotate"
                                        data-period="2000"
                                        data-rotate='[ "visit full project", "Web Designing"]'></span></a></div>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 col-sm-12 filtr-item" data-category="5" data-sort="value">
                    <div class="gallery "><a class="view"><span class="img"><img class="img-fluid"
                                    src="{{asset('contents/website')}}/images/gallery/P4.png" alt="graphics Design"></span></a>
                        <div class="gallery-overlay">
                            <div class="br-left wow slideInLeft"></div>
                            <div class="br-bottom wow slideInDown"></div>
                            <div class="center-layers">
                                <div class="center-1 wow fadeIn">
                                    <div class="center-2"></div>
                                </div>
                                <div class="center-3 wow fadeIn"></div>
                                <div class="center-4 wow fadeIn"><a href="{{asset('contents/website')}}/images/gallery/P4.png"
                                        data-lightbox="Graphics Design"
                                        title="Graphics Design view cover image"><img
                                            src="{{asset('contents/website')}}/images/gallery/gallery-overlay/ani4.png" alt=""></a></div>
                            </div>
                            <div class="visit-link wow fadeInUp"><a
                                    href="https://md-shefat-masum.github.io/race/blue-rider/"
                                    target="_blank"><span class="txt-rotate" data-period="2000"
                                        data-rotate='[ "visit full project", "Web Designing"]'></span></a></div>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 col-sm-12 filtr-item" data-category="1,3" data-sort="value">
                    <div class="gallery "><a class="view"><span class="img"><img class="img-fluid"
                                    src="{{asset('contents/website')}}/images/gallery/P5.png" alt="graphics Design"></span></a>
                        <div class="gallery-overlay">
                            <div class="br-left wow slideInLeft"></div>
                            <div class="br-bottom wow slideInDown"></div>
                            <div class="center-layers">
                                <div class="center-1 wow fadeIn">
                                    <div class="center-2"></div>
                                </div>
                                <div class="center-3 wow fadeIn"></div>
                                <div class="center-4 wow fadeIn"><a href="{{asset('contents/website')}}/images/gallery/P5.png"
                                        data-lightbox="Graphics Design"
                                        title="Graphics Design view cover image"><img
                                            src="{{asset('contents/website')}}/images/gallery/gallery-overlay/ani4.png" alt=""></a></div>
                            </div>
                            <div class="visit-link wow fadeInUp"><a
                                    href="https://md-shefat-masum.github.io/app-promo/" target="_blank"><span
                                        class="txt-rotate" data-period="2000"
                                        data-rotate='[ "visit full project", "Web Designing"]'></span></a></div>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 col-sm-12 filtr-item" data-category="3" data-sort="value">
                    <div class="gallery "><a class="view"><span class="img"><img class="img-fluid"
                                    src="{{asset('contents/website')}}/images/gallery/P6.png" alt="graphics Design"></span></a>
                        <div class="gallery-overlay">
                            <div class="br-left wow slideInLeft"></div>
                            <div class="br-bottom wow slideInDown"></div>
                            <div class="center-layers">
                                <div class="center-1 wow fadeIn">
                                    <div class="center-2"></div>
                                </div>
                                <div class="center-3 wow fadeIn"></div>
                                <div class="center-4 wow fadeIn"><a href="{{asset('contents/website')}}/images/gallery/P6.png"
                                        data-lightbox="Graphics Design"
                                        title="Graphics Design view cover image"><img
                                            src="{{asset('contents/website')}}/images/gallery/gallery-overlay/ani4.png" alt=""></a></div>
                            </div>
                            <div class="visit-link wow fadeInUp"><a
                                    href="https://md-shefat-masum.github.io/mohidul/" target="_blank"><span
                                        class="txt-rotate" data-period="2000"
                                        data-rotate='[ "visit full project", "Web Designing"]'></span></a></div>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 col-sm-12 filtr-item" data-category="1,2" data-sort="value">
                    <div class="gallery "><a class="view"><span class="img"><img class="img-fluid"
                                    src="{{asset('contents/website')}}/images/gallery/P7.png" alt="graphics Design"></span></a>
                        <div class="gallery-overlay">
                            <div class="br-left wow slideInLeft"></div>
                            <div class="br-bottom wow slideInDown"></div>
                            <div class="center-layers">
                                <div class="center-1 wow fadeIn">
                                    <div class="center-2"></div>
                                </div>
                                <div class="center-3 wow fadeIn"></div>
                                <div class="center-4 wow fadeIn"><a href="{{asset('contents/website')}}/images/gallery/P7.png"
                                        data-lightbox="Graphics Design"
                                        title="Graphics Design view cover image"><img
                                            src="{{asset('contents/website')}}/images/gallery/gallery-overlay/ani4.png" alt=""></a></div>
                            </div>
                            <div class="visit-link wow fadeInUp"><a
                                    href="https://md-shefat-masum.github.io/Ntional_institute_responsive/"
                                    target="_blank"><span class="txt-rotate" data-period="2000"
                                        data-rotate='[ "visit full project", "Web Designing"]'></span></a></div>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 col-sm-12 filtr-item" data-category="1,3" data-sort="value">
                    <div class="gallery "><a class="view"><span class="img"><img class="img-fluid"
                                    src="{{asset('contents/website')}}/images/gallery/P8.png" alt="graphics Design"></span></a>
                        <div class="gallery-overlay">
                            <div class="br-left wow slideInLeft"></div>
                            <div class="br-bottom wow slideInDown"></div>
                            <div class="center-layers">
                                <div class="center-1 wow fadeIn">
                                    <div class="center-2"></div>
                                </div>
                                <div class="center-3 wow fadeIn"></div>
                                <div class="center-4 wow fadeIn"><a href="{{asset('contents/website')}}/images/gallery/P8.png"
                                        data-lightbox="Graphics Design"
                                        title="Graphics Design view cover image"><img
                                            src="{{asset('contents/website')}}/images/gallery/gallery-overlay/ani4.png" alt=""></a></div>
                            </div>
                            <div class="visit-link wow fadeInUp"><a
                                    href="https://md-shefat-masum.github.io/omrhost/" target="_blank"><span
                                        class="txt-rotate" data-period="2000"
                                        data-rotate='[ "visit full project", "Web Designing"]'></span></a></div>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 col-sm-12 filtr-item" data-category="1,4" data-sort="value">
                    <div class="gallery "><a class="view"><span class="img"><img class="img-fluid"
                                    src="{{asset('contents/website')}}/images/gallery/p9.png" alt="graphics Design"></span></a>
                        <div class="gallery-overlay">
                            <div class="br-left wow slideInLeft"></div>
                            <div class="br-bottom wow slideInDown"></div>
                            <div class="center-layers">
                                <div class="center-1 wow fadeIn">
                                    <div class="center-2"></div>
                                </div>
                                <div class="center-3 wow fadeIn"></div>
                                <div class="center-4 wow fadeIn"><a href="{{asset('contents/website')}}/images/gallery/p9.png"
                                        data-lightbox="Graphics Design"
                                        title="Graphics Design view cover image"><img
                                            src="{{asset('contents/website')}}/images/gallery/gallery-overlay/ani4.png" alt=""></a></div>
                            </div>
                            <div class="visit-link wow fadeInUp"><a href="#"><span class="txt-rotate"
                                        data-period="2000"
                                        data-rotate='[ "visit full project", "Web Designing"]'></span></a></div>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 col-sm-12 filtr-item" data-category="3" data-sort="value">
                    <div class="gallery "><a class="view"><span class="img"><img class="img-fluid"
                                    src="{{asset('contents/website')}}/images/gallery/p10.png" alt="graphics Design"></span></a>
                        <div class="gallery-overlay">
                            <div class="br-left wow slideInLeft"></div>
                            <div class="br-bottom wow slideInDown"></div>
                            <div class="center-layers">
                                <div class="center-1 wow fadeIn">
                                    <div class="center-2"></div>
                                </div>
                                <div class="center-3 wow fadeIn"></div>
                                <div class="center-4 wow fadeIn"><a href="{{asset('contents/website')}}/images/gallery/p10.png"
                                        data-lightbox="Graphics Design"
                                        title="Graphics Design view cover image"><img
                                            src="{{asset('contents/website')}}/images/gallery/gallery-overlay/ani4.png" alt=""></a></div>
                            </div>
                            <div class="visit-link wow fadeInUp"><a href="#"><span class="txt-rotate"
                                        data-period="2000"
                                        data-rotate='[ "visit full project", "Web Designing"]'></span></a></div>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 col-sm-12 filtr-item" data-category="1,2" data-sort="value">
                    <div class="gallery "><a class="view"><span class="img"><img class="img-fluid"
                                    src="{{asset('contents/website')}}/images/gallery/p11.png" alt="graphics Design"></span></a>
                        <div class="gallery-overlay">
                            <div class="br-left wow slideInLeft"></div>
                            <div class="br-bottom wow slideInDown"></div>
                            <div class="center-layers">
                                <div class="center-1 wow fadeIn">
                                    <div class="center-2"></div>
                                </div>
                                <div class="center-3 wow fadeIn"></div>
                                <div class="center-4 wow fadeIn"><a href="{{asset('contents/website')}}/images/gallery/p11.png"
                                        data-lightbox="Graphics Design"
                                        title="Graphics Design view cover image"><img
                                            src="{{asset('contents/website')}}/images/gallery/gallery-overlay/ani4.png" alt=""></a></div>
                            </div>
                            <div class="visit-link wow fadeInUp"><a
                                    href="https://md-shefat-masum.github.io/responsive-strict/"
                                    target="_blank"><span class="txt-rotate" data-period="2000"
                                        data-rotate='[ "visit full project", "Web Designing"]'></span></a></div>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 col-sm-12 filtr-item" data-category="1,2,3" data-sort="value">
                    <div class="gallery "><a class="view"><span class="img"><img class="img-fluid"
                                    src="{{asset('contents/website')}}/images/gallery/p12.png" alt="graphics Design"></span></a>
                        <div class="gallery-overlay">
                            <div class="br-left wow slideInLeft"></div>
                            <div class="br-bottom wow slideInDown"></div>
                            <div class="center-layers">
                                <div class="center-1 wow fadeIn">
                                    <div class="center-2"></div>
                                </div>
                                <div class="center-3 wow fadeIn"></div>
                                <div class="center-4 wow fadeIn"><a href="{{asset('contents/website')}}/images/gallery/p12.png"
                                        data-lightbox="Graphics Design"
                                        title="Graphics Design view cover image"><img
                                            src="{{asset('contents/website')}}/images/gallery/gallery-overlay/ani4.png" alt=""></a></div>
                            </div>
                            <div class="visit-link wow fadeInUp"><a
                                    href="http://preview.themeforest.net/item/patrick-modern-personal-cv-resume-html-template/full_screen_preview/22832026"
                                    target="_blank"><span class="txt-rotate" data-period="2000"
                                        data-rotate='[ "visit full project", "Web Designing"]'></span></a></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
</section>
<!--    portfolio part end-->

<!--    team part start-->
<section id="team">
<div class="container">
    <div class="row">
        <div class="col-md-6 offset-md-2 offset-lg-4">
            <div class="common-heading">
                <div class="top-line"></div>
                <div class="bottom-line"></div>
                <h3>our creative team</h3>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-md-12">
            <ul id="scene" class="scene team-body parallax-container unselectable" data-friction-x="0.1"
                data-friction-y="0.1" data-scalar-x="25" data-scalar-y="15">
                <li class="layer l1" data-depth="0.10">
                    <div class="per-1">
                        <img src="{{asset('contents/website')}}/images/team/masum.png" class="img-fluid" alt="">
                        <div class="per-overlay">
                            <div class="per-img">
                                <img src="{{asset('contents/website')}}/images/team/inner-masum.png" class="img-fluid" alt="">
                            </div>
                            <div class="per-details1">
                                <h3>Md.shefat</h3>
                                <h5>Full Stack Developer &amp; Graphics Designer</h5>
                            </div>
                            <div class="per-details2">
                                <ul class="skill">
                                    <li>Skills :</li>
                                    <li>
                                        <ul>
                                            <li>html</li>
                                            <li>css</li>
                                            <li>js</li>
                                            <li>jQuery</li>
                                        </ul>
                                        <ul>
                                            <li>bootsrap</li>
                                            <li>PHP</li>
                                            <li>Laravel</li>
                                            <li>Photoshop</li>
                                        </ul>
                                        <ul>
                                            <li>wordpress</li>
                                            <li>clipping path</li>
                                            <li>illustrator</li>
                                            <li>after effects</li>
                                        </ul>
                                    </li>
                                </ul>
                                <ul class="address">
                                    <li>Email: <span>masumshefat6@gmail.com</span></li>
                                    <li>Mobile: <span>01646376015</span></li>
                                    <li>
                                        <ul>
                                            <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                                            <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                                            <li><a href="#"><i class="fa fa-youtube-play"></i></a></li>
                                            <li><a href="#"><i class="fa fa-linkedin"></i></a></li>
                                        </ul>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </li>
                <li class="layer l2" data-depth="0.25">
                    <div class="per-2">
                        <img src="{{asset('contents/website')}}/images/team/nahiyan.png" class="img-fluid" alt="">
                        <div class="per-overlay">
                            <div class="per-img">
                                <img src="{{asset('contents/website')}}/images/team/inner-nahiyan.png" class="img-fluid" alt="">
                            </div>
                            <div class="per-details1">
                                <h3>Faysal Ahmed Nahiyan</h3>
                                <h5>Full Stack Developer</h5>
                            </div>
                            <div class="per-details2">
                                <ul class="skill">
                                    <li>Skills :</li>
                                    <li>
                                        <ul>
                                            <li>html</li>
                                            <li>css</li>
                                            <li>js</li>
                                            <li>jQuery</li>
                                        </ul>
                                        <ul>
                                            <li>bootsrap</li>
                                            <li>PHP</li>
                                            <li>Laravel</li>
                                            <li>Photoshop</li>
                                        </ul>
                                        <ul>
                                            <li>wordpress</li>
                                            <li>clipping path</li>
                                            <li>illustrator</li>
                                            <li>after effects</li>
                                        </ul>
                                    </li>
                                </ul>
                                <ul class="address">
                                    <li>Email: <span>nahiyan@gmail.com</span></li>
                                    <li>Mobile: <span>123456789</span></li>
                                    <li>
                                        <ul>
                                            <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                                            <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                                            <li><a href="#"><i class="fa fa-youtube-play"></i></a></li>
                                            <li><a href="#"><i class="fa fa-linkedin"></i></a></li>
                                        </ul>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </li>
                <li class="layer l3" data-depth="0.35">
                    <div class="per-3">
                        <img src="{{asset('contents/website')}}/images/team/yousuf.png" class="img-fluid" alt="">
                        <div class="per-overlay">
                            <div class="per-img">
                                <img src="{{asset('contents/website')}}/images/team/inner-yousuf.png" class="img-fluid" alt="">
                            </div>
                            <div class="per-details1">
                                <h3>Ibn yousuf</h3>
                                <h5>Full Stack Developer &amp; Graphics Designer</h5>
                            </div>
                            <div class="per-details2">
                                <ul class="skill">
                                    <li>Skills :</li>
                                    <li>
                                        <ul>
                                            <li>html</li>
                                            <li>css</li>
                                            <li>js</li>
                                            <li>jQuery</li>
                                        </ul>
                                        <ul>
                                            <li>bootsrap</li>
                                            <li>PHP</li>
                                            <li>Laravel</li>
                                            <li>Photoshop</li>
                                        </ul>
                                        <ul>
                                            <li>wordpress</li>
                                            <li>clipping path</li>
                                            <li>illustrator</li>
                                            <li>after effects</li>
                                        </ul>
                                    </li>
                                </ul>
                                <ul class="address">
                                    <li>Email: <span>yousuf@gmail.com</span></li>
                                    <li>Mobile: <span>123465678</span></li>
                                    <li>
                                        <ul>
                                            <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                                            <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                                            <li><a href="#"><i class="fa fa-youtube-play"></i></a></li>
                                            <li><a href="#"><i class="fa fa-linkedin"></i></a></li>
                                        </ul>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </li>
                <li class="layer l4" data-depth="0.25">
                    <div class="per-4">
                        <img src="{{asset('contents/website')}}/images/team/alice.png" class="img-fluid" alt="">
                    </div>
                    <div class="per-overlay">
                        <div class="per-img">
                            <img src="{{asset('contents/website')}}/images/team/inner-alice.png" class="img-fluid" alt="">
                        </div>
                        <div class="per-details1">
                            <h3>Tashfia Tanvi</h3>
                            <h5>Full Stack Developer</h5>
                        </div>
                        <div class="per-details2">
                            <ul class="skill">
                                <li>Skills :</li>
                                <li>
                                    <ul>
                                        <li>html</li>
                                        <li>css</li>
                                        <li>js</li>
                                        <li>jQuery</li>
                                    </ul>
                                    <ul>
                                        <li>bootsrap</li>
                                        <li>PHP</li>
                                        <li>Laravel</li>
                                        <li>Photoshop</li>
                                    </ul>
                                    <ul>
                                        <li>wordpress</li>
                                        <li>clipping path</li>
                                        <li>illustrator</li>
                                        <li>after effects</li>
                                    </ul>
                                </li>
                            </ul>
                            <ul class="address">
                                <li>Email: <span>tanvihussain5587@gmail.com</span></li>
                                <li>Mobile: <span>01675230056</span></li>
                                <li>
                                    <ul>
                                        <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                                        <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                                        <li><a href="#"><i class="fa fa-youtube-play"></i></a></li>
                                        <li><a href="#"><i class="fa fa-linkedin"></i></a></li>
                                    </ul>
                                </li>
                            </ul>
                        </div>
                    </div>
                </li>
                <li class="layer l5" data-depth="0.35">
                    <div class="per-5">
                        <img src="{{asset('contents/website')}}/images/team/intu.png" class="img-fluid" alt="">
                        <div class="per-overlay">
                            <div class="per-img">
                                <img src="{{asset('contents/website')}}/images/team/inner-intu.png" class="img-fluid" alt="">
                            </div>
                            <div class="per-details1">
                                <h3>Yasir Intu</h3>
                                <h5>Full Stack Developer</h5>
                            </div>
                            <div class="per-details2">
                                <ul class="skill">
                                    <li>Skills :</li>
                                    <li>
                                        <ul>
                                            <li>html</li>
                                            <li>css</li>
                                            <li>js</li>
                                            <li>jQuery</li>
                                        </ul>
                                        <ul>
                                            <li>bootsrap</li>
                                            <li>PHP</li>
                                            <li>Laravel</li>
                                            <li>Photoshop</li>
                                        </ul>
                                        <ul>
                                            <li>wordpress</li>
                                            <li>clipping path</li>
                                            <li>illustrator</li>
                                            <li>after effects</li>
                                        </ul>
                                    </li>
                                </ul>
                                <ul class="address">
                                    <li>Email: <span>yasirintisar7@gmail.com</span></li>
                                    <li>Mobile: <span>01686363758</span></li>
                                    <li>
                                        <ul>
                                            <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                                            <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                                            <li><a href="#"><i class="fa fa-youtube-play"></i></a></li>
                                            <li><a href="#"><i class="fa fa-linkedin"></i></a></li>
                                        </ul>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </li>
            </ul>
        </div>
    </div>
</div>
</section>
<!--    team part end-->

<!-- team part for responsive start -->
<section id="team" class="team-responsive">
<div class="container">
    <div class="row">
        <div class="col-md-6 offset-lg-2">
            <div class="common-heading">
                <div class="top-line"></div>
                <div class="bottom-line"></div>
                <h3>our creative team</h3>
            </div>
        </div>
    </div>

    <div class="row team-slide owl-carousel owl-item">
        <div class="col-md-3 ">
            <div class="left-image">
                <div class="r1"></div>
                <div class="r2"><a href="#"><i class="fa fa-facebook"></i></a><a href="#"><i
                            class="fa fa-twitter"></i></a><a href="#"><i class="fa fa-linkedin"></i></a><a
                        href="#"><i class="fa fa-youtube-play"></i></a></div><img src="{{asset('contents/website')}}/images/team/masum.png"
                    class="img-fluid" alt="">
            </div>
        </div>
        <div class="col-md-3 ">
            <div class="left-image">
                <div class="r1"></div>
                <div class="r2"><a href="#"><i class="fa fa-facebook"></i></a><a href="#"><i
                            class="fa fa-twitter"></i></a><a href="#"><i class="fa fa-linkedin"></i></a><a
                        href="#"><i class="fa fa-youtube-play"></i></a></div><img src="{{asset('contents/website')}}/images/team/intu.png"
                    class="img-fluid" alt="">
            </div>
        </div>
        <div class="col-md-3 ">
            <div class="left-image">
                <div class="r1"></div>
                <div class="r2"><a href="#"><i class="fa fa-facebook"></i></a><a href="#"><i
                            class="fa fa-twitter"></i></a><a href="#"><i class="fa fa-linkedin"></i></a><a
                        href="#"><i class="fa fa-youtube-play"></i></a></div><img src="{{asset('contents/website')}}/images/team/nahiyan.png"
                    class="img-fluid" alt="">
            </div>
        </div>
        <div class="col-md-3 ">
            <div class="left-image">
                <div class="r1"></div>
                <div class="r2"><a href="#"><i class="fa fa-facebook"></i></a><a href="#"><i
                            class="fa fa-twitter"></i></a><a href="#"><i class="fa fa-linkedin"></i></a><a
                        href="#"><i class="fa fa-youtube-play"></i></a></div><img src="{{asset('contents/website')}}/images/team/alice.png"
                    class="img-fluid" alt="">
            </div>
        </div>
        <div class="col-md-3 ">
            <div class="left-image">
                <div class="r1"></div>
                <div class="r2"><a href="#"><i class="fa fa-facebook"></i></a><a href="#"><i
                            class="fa fa-twitter"></i></a><a href="#"><i class="fa fa-linkedin"></i></a><a
                        href="#"><i class="fa fa-youtube-play"></i></a></div><img src="{{asset('contents/website')}}/images/team/yousuf.png"
                    class="img-fluid" alt="">
            </div>
        </div>
    </div>
</div>
</section>
<!-- team part for responsive end -->

    {{-- log part start  --}}
    <section id="blog">
        <div class="container">
            <div class="row">
                <div class="col-md-6 m-auto">
                    <div class="common-heading">
                        <div class="top-line"></div>
                        <div class="bottom-line"></div>
                        <h3>Recent Blogs</h3>
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col-md-6">
                    <div class="body">
                        <div class="img">
                            <img src="http://leila.malyarchuk.space/img/blog/img-4.jpg" alt="blog thumb">
                        </div>
                        <h5>web design</h5>
                        <h4>heading</h4>
                        <p class="p1"><span>Posted on:</span> 18-07-2019 5:20 pm</p>
                        <p>
                            Lorem ipsum dolor sit amet, consectetur adipiscing elit.
                            Aliquam tincidunt lectus aliquet quamde
                            pretiuquidsrqueac nisl tincidunt, auctor ligula ut, commodo urna...
                        </p>
                        <a href="#">Read more..</a>
                    </div>
                </div>
            </div>
        </div>
    </section>
    {{-- log part end  --}}


    <!--    contact me part start-->
    <section id="contact">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="common-heading">
                                <div class="top-line"></div>
                                <div class="bottom-line"></div>
                                <h3>Stay connect</h3>
                            </div>
                        </div>
                    </div>

                <form class="cf" method="POST" action="{{url('/submit')}}">
                        @csrf
                        <div class="half left cf">
                            <input type="text" id="input-name" placeholder="name" name="names">
                            <input type="email" id="input-email" placeholder="email" name="email">
                            <input type="text" id="input-subject" placeholder="subject" name="subject">
                        </div>
                        <div class="half right cf">
                            <textarea name="message" type="text" id="input-message" placeholder="Message"></textarea>
                        </div>
                        <input type="submit" value="Submit" id="input-submit">
                    </form>
                </div>
            </div>
        </div>
    </section>
    <!--    contact me part end-->


@endsection
