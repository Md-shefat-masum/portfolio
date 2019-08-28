<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
	<meta charset="utf-8">
	<title> md shefat's blog </title>
	<meta name="keywords" content="HTML5 Template">
	<meta name="description" content="md shefat's blog">
	<meta name="author" content="itembridge.com">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="csrf-token" content="{{ csrf_token() }}">

	<!-- Favicon -->
	<link rel="shortcut icon" href="{{asset('contents/blog')}}/images/favicon.ico">

	<!-- Google Fonts -->
	<link href='http://fonts.googleapis.com/css?family=Raleway:400,100,200,300,500,600,700,800,900' rel='stylesheet' type='text/css'>
	<link href='https://fonts.googleapis.com/css?family=Engagement' rel='stylesheet' type='text/css'>

	<!-- Icon Fonts -->
	<link rel="stylesheet" href="{{asset('contents/blog')}}/css/font-awesome.min.css">
	<link rel="stylesheet" href="{{asset('contents/blog')}}/css/themify-icons.css">

	<!-- Theme CSS -->
	<link rel="stylesheet" href="{{asset('contents/blog')}}/style.css">
	<link rel="stylesheet" href="{{asset('contents/blog')}}/css/grid.css">
	<link rel="stylesheet" href="{{asset('contents/blog')}}/css/ui.css">
	<link rel="stylesheet" href="{{asset('contents/blog')}}/css/magnific-popup.css">

	<link rel="stylesheet" type="text/css" href="{{asset('contents/blog')}}/css/owl.carousel.css">
	<link rel="stylesheet" type="text/css" href="{{asset('contents/blog')}}/css/owl.theme.css">
	<link rel="stylesheet" type="text/css" href="{{asset('contents/blog')}}/css/owl.transitions.css">

	<!-- REVOLUTION STYLE SHEETS -->
	<link rel="stylesheet" type="text/css" href="{{asset('contents/blog')}}/js/rs-plugin/css/settings.css">
	<!-- REVOLUTION LAYERS STYLES -->
	<link rel="stylesheet" type="text/css" href="{{asset('contents/blog')}}/js/rs-plugin/css/layers.css">
	<!-- REVOLUTION NAVIGATION STYLES -->
	<link rel="stylesheet" type="text/css" href="{{asset('contents/blog')}}/js/rs-plugin/css/navigation.css">

	<link rel="stylesheet" type="text/css" href="{{asset('contents/blog')}}/css/responsive.css">

	<!--[if lt IE 9]>
		<script src="js/html5shiv.min.js"></script>
		<script src="js/respond.min.js"></script>
    <![endif]-->

    <style>
        .widget h2.widget-title span:before, .widget h2.widget-title span:after{
            top:12px;
        }
    </style>

</head>

<body>

<!-- *** THEME CONTAINER STARTS *** -->
<div class="artigo-theme-container">

	<!-- *** HEADER STARTS *** -->
	<header id="artigo-masthead" class="artigo-std-header">

		<div class="header-top-area">
			<div class="artigo-container">
				<div class="header-info">
					<p> WELCOME TO <a href="index.html"> SIMPLE ARTIGO! </a> PERFECT FOR BLOGGERS </p>
				</div>
				<div class="social-links-container">
					<ul class="artigo-social-links">
						<li><a href="http://facebook.com" title=""><i class="fa fa-facebook"></i></a></li>
						<li><a href="http://instagram.com" title=""><i class="fa fa-instagram"></i></a></li>
						<li><a href="http://twitter.com" title=""><i class="fa fa-twitter"></i></a></li>
						<li><a href="http://plus.google.com" title=""><i class="fa fa-google-plus"></i></a></li>
						<li><a href="http://linkedin.com" title=""><i class="fa fa-linkedin"></i></a></li>
					</ul>
				</div>
			</div>
		</div>

		<div class="header-main">
			<div class="artigo-container">
				<div id="logo">
					<h1 class="site-title"><a href="index.html" rel="home"> Simple Artigo </a></h1>
				</div>
			</div>


			<div class="artigo-navigation-holder">
				<div class="artigo-container">

					<div class="nav-inner-left">
						<a href="javascript:void(0);" class="artigo-author-popup artigo-full-screen-author"> <i class="ti-align-right"></i> </a>
					</div>

					<!-- *** MAIN NAVIGATION STARTS *** -->
					<div id="artigo-responsive-menu-trigger">Menu</div>
					<nav class="main-nav">
						<ul>
							<li class="current_page_item"> <a href="{{route('website_home')}}" title=""> Home </a></li>
							<li class="current_page_item"> <a href="{{route('blog_index')}}" title=""> Blog </a></li>
							<li class="current_page_item"> <a href="{{route('blog_programming')}}" title=""> Programming </a></li>
							<li class="current_page_item"> <a href="{{route('blog_life_style')}}" title=""> Life style </a></li>
							<li> <a href="search.html" title=""> Search </a> </li>
							<li> <a href="404.html" title=""> Pages </a>
                            <li> <a href="contact.html" title=""> Contact </a> </li>
                            <li class="artigo-mega-menu"> <a href="blog-detail.html" title=""> Featured Posts </a>
								<div class="artigo-mega-menu-container col-4">
									<ul>
										<li>
											<div class="simple-article">
												<a href="blog-detail.html" title=""> <img src="{{asset('contents/blog')}}/images/blog/simple-article1.jpg" alt="" title=""> </a>
												<h6> <a href="blog-detail.html" title=""> Quisque sit amet felis Cons </a> </h6>
												<span class="post-date"> <i class="ti-calendar"> </i> April 17, 2018 </span>
											</div>
										</li>
									</ul>
									<ul>
										<li>
											<div class="simple-article">
												<a href="blog-detail.html" title=""> <img src="{{asset('contents/blog')}}/images/blog/simple-article4.jpg" alt="" title=""> </a>
												<h6> <a href="blog-detail.html" title=""> Quisque sit amet felis Cons </a> </h6>
												<span class="post-date"> <i class="ti-calendar"> </i> April 17, 2018 </span>
											</div>
										</li>
									</ul>
									<ul>
										<li>
											<div class="simple-article">
												<a href="blog-detail.html" title=""> <img src="{{asset('contents/blog')}}/images/blog/simple-article3.jpg" alt="" title=""> </a>
												<h6> <a href="blog-detail.html" title=""> Quisque sit amet felis Cons </a> </h6>
												<span class="post-date"> <i class="ti-calendar"> </i> April 17, 2018 </span>
											</div>
										</li>
									</ul>
									<ul>
										<li>
											<div class="simple-article">
												<a href="blog-detail.html" title=""> <img src="{{asset('contents/blog')}}/images/blog/simple-article2.jpg" alt="" title=""> </a>
												<h6> <a href="blog-detail.html" title=""> Quisque sit amet felis Cons </a> </h6>
												<span class="post-date"> <i class="ti-calendar"> </i> April 17, 2018 </span>
											</div>
										</li>
									</ul>
								</div>
							</li>
						</ul>
					</nav>
					<!-- *** MAIN NAVIGATION END *** -->

					<div class="nav-inner-right">
						<a href="javascript:void(0);" class="artigo-search artigo-full-screen-search"> <i class="ti-search"></i> </a>
					</div>

				</div>
			</div>

		</div>

	</header>
    <!-- *** HEADER ENDS *** -->

    @yield('content')

    <div class="artigo-sidebar-holder right-sidebar">
        <aside class="widget widget_author">
            <h2 class="widget-title"> <span> About Me </span> </h2>
            <div class="widget-container">
                <div class="author-thumb">
                    <img src="{{asset('contents/blog')}}/images/author.jpg" alt="" title="">
                </div>
                <ul class="artigo-social-links">
                    <li><a href="http://facebook.com" title=""><i class="ti-facebook"></i></a></li>
                    <li><a href="http://twitter.com" title=""><i class="ti-twitter"></i></a></li>
                    <li><a href="http://plus.google.com" title=""><i class="ti-google"></i></a></li>
                    <li><a href="http://dribbble.com" title=""><i class="fa fa-dribbble"></i></a></li>
                </ul>
                <p> Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aliquam tincidunt lectus aliquet quam </p>
                <img src="{{asset('contents/blog')}}/images/sign.png" alt=""  title="">
            </div>
        </aside>
        <aside class="widget widget_recent_entries">
            <h2 class="widget-title"> <span> Popular Posts </span> </h2>
            <div class="widget-container">
                <ul>
                    <li>
                        <img src="{{asset('contents/blog')}}/images/blog/post-thumb-1.jpg" alt="" title="" class="post-thumbnail">
                        <a href="blog-detail.html" title=""> Quisque sit amet felis Cons </a>
                        <span class="post-date"> <i class="ti-calendar"> </i> April 17, 2018 </span>
                        <p> Lorem ipsum dolor sit amet, consectetur adipis elit... </p>
                    </li>
                    <li>
                        <img src="{{asset('contents/blog')}}/images/blog/post-thumb-2.jpg" alt="" title="" class="post-thumbnail">
                        <a href="blog-detail.html" title=""> Quisqu it amet felis </a>
                        <span class="post-date"> <i class="ti-calendar"> </i> April 17, 2018 </span>
                    </li>
                    <li>
                        <img src="{{asset('contents/blog')}}/images/blog/post-thumb-3.jpg" alt="" title="" class="post-thumbnail">
                        <a href="blog-detail.html" title=""> Quisqu it amet felis </a>
                        <span class="post-date"> <i class="ti-calendar"> </i> April 17, 2018 </span>
                    </li>
                </ul>
            </div>
        </aside>
        <aside class="widget widget_newsletter">
            <h2 class="widget-title"> <span> Newsletter </span> </h2>
            <div class="widget-container">
                <h6> Subscribe to my Newsletter </h6>
                <p> Sign up and receive the latest <br> tips through email </p>
                <form class="artigo-newsletter" action="#" method="get">
                    <input placeholder="ENTER YOUR EMAIL ADDRESS" type="email">
                    <input value="SUBSCRIBE NOW" type="submit">
                </form>
            </div>
        </aside>
        <aside class="widget widget_categories">
            <h2 class="widget-title"> <span> Categories </span> </h2>
            <div class="widget-container">
                <ul>
                    <li><a href="category-page.html" title=""> Lifestyle </a> <span> [5] </span> </li>
                    <li><a href="category-page.html" title=""> Fashion </a> <span> [10] </span> </li>
                    <li><a href="category-page.html" title=""> Everyday Blog </a> <span> [12] </span> </li>
                    <li><a href="category-page.html" title=""> Inspiration </a> <span> [7] </span> </li>
                    <li><a href="category-page.html" title=""> Development </a> <span> [2] </span> </li>
                    <li><a href="category-page.html" title=""> Photography </a> <span> [9] </span> </li>
                    <li><a href="category-page.html" title=""> Design </a> <span> [15] </span> </li>
                </ul>
            </div>
        </aside>
        <aside class="widget widget_categories">
            <a href="" title=""> <img src="{{asset('contents/blog')}}/images/ad-banner.jpg" alt="" title=""> </a>
        </aside>
        <aside class="widget widget_tag_cloud">
            <h2 class="widget-title"> <span> Tag Cloud </span> </h2>
            <div class="widget-container">
                <div class="tagcloud">
                    <a href="category-page.html" title=""> Lifestyle </a>
                    <a href="category-page.html" title=""> Technology </a>
                    <a href="category-page.html" title=""> Blog </a>
                    <a href="category-page.html" title=""> Creative </a>
                    <a href="category-page.html" title=""> Fashion </a>
                    <a href="category-page.html" title=""> Design </a>
                    <a href="category-page.html" title=""> News </a>
                    <a href="category-page.html" title=""> Hot </a>
                    <a href="category-page.html" title=""> Thinking </a>
                </div>
            </div>
        </aside>
        <aside class="widget artigo-flickr-widget">
            <h2 class="widget-title"> <span> Flickr </span> </h2>
            <div class="widget-container">
                <div class="flickr-widget" data-lightbox="gallery" data-id="52617155@N08" data-count="9" data-image-size="s"></div>
            </div>
        </aside>
        <aside class="widget artigo_twitter_widget">
            <h2 class="widget-title"> <span> Twitter Feed </span> </h2>
            <div class="widget-container">
                <ul class="artigo-tweets-list" data-account="envato" data-limit="1"></ul>
            </div>
        </aside>
    </div>

</div>

</div>
<!-- *** CONTENT WRAP ENDS *** -->

<!-- *** FOOTER STARTS *** -->
<footer id="artigo-footer">

<div class="instagram-widget">
    <h4 class="instagram-title"> <a href="" title=""><i class="ti-instagram"> </i> Instagram </a> </h4>
    <ul class="instagram-pics">
        <li> <a href="" title=""> <img src="{{asset('contents/blog')}}/images/instagram/instagram-thumb-1.jpg" alt="" title=""> </a> </li>
        <li> <a href="" title=""> <img src="{{asset('contents/blog')}}/images/instagram/instagram-thumb-2.jpg" alt="" title=""> </a> </li>
        <li> <a href="" title=""> <img src="{{asset('contents/blog')}}/images/instagram/instagram-thumb-3.jpg" alt="" title=""> </a> </li>
        <li> <a href="" title=""> <img src="{{asset('contents/blog')}}/images/instagram/instagram-thumb-4.jpg" alt="" title=""> </a> </li>
        <li> <a href="" title=""> <img src="{{asset('contents/blog')}}/images/instagram/instagram-thumb-5.jpg" alt="" title=""> </a> </li>
        <li> <a href="" title=""> <img src="{{asset('contents/blog')}}/images/instagram/instagram-thumb-6.jpg" alt="" title=""> </a> </li>
    </ul>
</div>

<div class="artigo-container">
    <div id="artigo-goto-top" class="artigo-top"> <a href="javascript:void(0);"> <i class="ti-upload"> </i> Back to top  </a> </div>
</div>

<div class="footer-social">
    <div class="artigo-container">
        <div class="footer-social-inner">
            <ul class="footer-social-links">
                <li><a href="http://facebook.com" title=""><i class="ti-facebook"></i> Facebook</a></li><li><a href="http://twitter.com" title=""><i class="ti-twitter"></i> Twitter</a></li><li><a href="http://plus.google.com" title=""><i class="ti-google"></i> Google Plus</a></li><li><a href="http://linkedin.com" title=""><i class="fa fa-pinterest"></i> Pinterest</a></li>
            </ul>
        </div>
    </div>
</div>

<div id="footer-logo">
    <div class="artigo-container">
        <h1 class="site-title"><a href="index.html" rel="home"> Simple Artigo </a></h1>
    </div>
</div>

<div class="artigo-copyrights">
    <div class="artigo-container">
        <p> 2018 &copy; Copyright <a href="index.html" title=""> Simple Artigo </a> - All Rights Reserved </p>
    </div>
</div>

</footer>
<!-- *** FOOTER ENDS *** -->

</div>
<!-- *** THEME CONTAINER ENDS *** -->

<!-- *** FULLSCREEN SEARCH POPUP STARTS *** -->
<div class="artigo-full-screen-search-container">
<a href="javascript:void(0);" class="artigo-search-close"> <i class="ti-close"></i> </a>
<form class="search-form" action="search.html">
<input class="search-field" name="search" type="search" placeholder="" autocomplete="off" autocapitalize="off" spellcheck="false" />
<span class="search-info">Hit enter to search or ESC to close</span>
</form>
</div>
<!-- *** FULLSCREEN SEARCH POPUP ENDS *** -->

<!-- *** FULLSCREEN AUTHOR POPUP STARTS *** -->
<div class="artigo-full-screen-author-container">
<a href="javascript:void(0);" class="artigo-author-close"> <i class="ti-close"></i> </a>
<div class="artigo-container">
<div class="artigo-author-detail">
    <img src="{{asset('contents/blog')}}/images/author.jpg" alt="" title="" class="author-img">
    <i> Hello, my name is </i>
    <h3> LEISHA ADAM WILLIAMS </h3>
    <h6> Web Designer &amp; Developer, Photographer </h6>
    <p> Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aliquam tincidunt lectus <br> aliquet quam fringilla pretium  Quisque ac nisl tincidunt, auctor ligula... </p>
    <img src="{{asset('contents/blog')}}/images/sign-light.png" alt="" title="">
    <ul class="artigo-social-links">
        <li><a href="http://facebook.com" title=""><i class="ti-facebook"></i></a></li>
        <li><a href="http://twitter.com" title=""><i class="ti-twitter"></i></a></li>
        <li><a href="http://plus.google.com" title=""><i class="ti-google"></i></a></li>
        <li><a href="http://dribbble.com" title=""><i class="ti-dribbble"></i></a></li>
    </ul>
</div>
</div>
</div>
<!-- *** FULLSCREEN AUTHOR POPUP ENDS *** -->

<!-- JQUERY INCLUDES -->
<script src="{{asset('contents/blog')}}/js/jquery.min.js"></script>
<script src="{{asset('contents/blog')}}/js/jquery.migrate.min.js"></script>

<script src="{{asset('contents/blog')}}/js/plugins.js"></script>
<script src="{{asset('contents/blog')}}/js/functions.js"></script>

<!-- REVOLUTION JS FILES -->
<script src="{{asset('contents/blog')}}/js/rs-plugin/js/jquery.themepunch.tools.min.js"></script>
<script src="{{asset('contents/blog')}}/js/rs-plugin/js/jquery.themepunch.revolution.min.js"></script>

<!-- SLICEY ADD-ON FILES -->
<script src='{{asset('contents/blog')}}/js/rs-plugin/js/revolution.addon.slicey.min.js?ver=1.0.0'></script>

<!-- SLIDER REVOLUTION 5.0 EXTENSIONS  (Load Extensions only on Local File Systems !  The following part can be removed on Server for On Demand Loading) -->
<script src="{{asset('contents/blog')}}/js/rs-plugin/js/extensions/revolution.extension.actions.min.js"></script>
<script src="{{asset('contents/blog')}}/js/rs-plugin/js/extensions/revolution.extension.carousel.min.js"></script>
<script src="{{asset('contents/blog')}}/js/rs-plugin/js/extensions/revolution.extension.kenburn.min.js"></script>
<script src="{{asset('contents/blog')}}/js/rs-plugin/js/extensions/revolution.extension.layeranimation.min.js"></script>
<script src="{{asset('contents/blog')}}/js/rs-plugin/js/extensions/revolution.extension.migration.min.js"></script>
<script src="{{asset('contents/blog')}}/js/rs-plugin/js/extensions/revolution.extension.navigation.min.js"></script>
<script src="{{asset('contents/blog')}}/js/rs-plugin/js/extensions/revolution.extension.parallax.min.js"></script>
<script src="{{asset('contents/blog')}}/js/rs-plugin/js/extensions/revolution.extension.slideanims.min.js"></script>
<script src="{{asset('contents/blog')}}/js/rs-plugin/js/extensions/revolution.extension.video.min.js"></script>
<script src="{{asset('contents/blog')}}/js/rs-plugin/js/revolution-script-demo.js"></script>
<script src="{{asset('contents/blog')}}/js/rs-plugin/js/revolution-fullwidth-slider-demo.js"></script>
</body>
</html>
