<!DOCTYPE html>
<html>

<!-- Mirrored from html.themexriver.com/industo/index-2.html by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 11 Dec 2024 20:24:40 GMT -->
@include('layouts.head')

<body>
<!-- <div class="cursor"></div> -->


<div class="page-wrapper">


    

	<!-- Preloader End -->

    @include('layouts.preloader')

   
	<!-- scrollToTop start -->
	<div class="progress-wrap active-progress">
		<svg class="progress-circle svg-content" width="100%" height="100%" viewBox="-1 -1 102 102">
		<path d="M50,1 a49,49 0 0,1 0,98 a49,49 0 0,1 0,-98" style="transition: stroke-dashoffset 10ms linear 0s; stroke-dasharray: 307.919px, 307.919px; stroke-dashoffset: 228.265px;"></path>
		</svg>
	</div>


    <header class="main-header header-style-three">
    	
		<!-- Header Upper -->
        <div class="header-lower">
        	<div class="auto-container">
				<div class="inner-container d-flex justify-content-between align-items-center flex-wrap clearfix">
					
				<div class="pull-left logo-box">
                        <div class="logo"><a href="index.html"><img src="{{ asset( 'images/Manutrade-logo-1@4x.png' ) }}" alt="" title="ManutradePro" style="width: 210px; height: 69px;"></a></div>
                    </div>
					
					<div class="nav-outer">
						<!-- Mobile Navigation Toggler --> 
						<div class="mobile-nav-toggler"><span class="icon flaticon-menu-3"></span></div>
						<!-- Main Menu -->
						<nav class="main-menu navbar-expand-md">
							<div class="navbar-header">
								<!-- Toggle Button -->    	
								<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
									<span class="icon-bar"></span>
									<span class="icon-bar"></span>
									<span class="icon-bar"></span>
								</button>
							</div>
							
							<div class="navbar-collapse collapse clearfix" id="navbarSupportedContent">
								<ul class="navigation clearfix">
									<li ><a href="{{ route('index') }}">Home</a>
										
									</li>
									<li ><a href="{{ route('about') }}">About</a>
										
									</li>

									
									</li>
									<li><a href="{{ route('product') }}">Product</a>

                                    
									<li><a href="{{ route('services') }}">Services</a>
									

                                    

                                   
									
									
								</ul>
							</div>
						</nav>
					</div>
					
					<!-- Main Menu End-->
					<div class="outer-box clearfix">
						
						<!-- Btn Box -->
						<div class="btn-box">
							<a href="{{ route('contact') }}" class="theme-btn btn-style-eight clearfix">
								<span class="btn-wrap">
									<span class="text-one">Contact Us</span>
									<span class="text-two">Contact Us</span>
								</span>
								<span class="plus flaticon-plus"></span>
							</a>
						</div>
						
					</div>
					
				</div>
            </div>
        </div>
        <!--End Header Upper-->
        
		<!-- Sticky Header  -->
        <div class="sticky-header">
            <div class="auto-container clearfix">
                <!--Logo-->
                <div class="logo pull-left">
				<a href="{{ route('index') }}" title=""><img src="{{ asset('images/logo-small.png') }}" alt="" title="ManutradePro" style="width: 181px; height: 50px;"></a>
                </div>
                <!--Right Col-->
                <div class="pull-right">
                    <!-- Main Menu -->
                    <nav class="main-menu">
                        <!--Keep This Empty / Menu will come through Javascript-->
						
                    </nav><!-- Main Menu End-->
					
					<!-- Mobile Navigation Toggler -->
					<div class="mobile-nav-toggler"><span class="icon flaticon-menu-3"></span></div>
					
                </div>
            </div>
        </div><!-- End Sticky Menu -->
    
		<!-- Mobile Menu  -->
        <div class="mobile-menu">
            <div class="menu-backdrop"></div>
            <div class="close-btn"><span class="icon fa fa-close"></span></div>
            
            <nav class="menu-box">
                <div class="nav-logo"><a href="index.html"><img src="images/logo.png" alt="" title=""></a></div>
                <div class="menu-outer"><!--Here Menu Will Come Automatically Via Javascript / Same Menu as in Header--></div>
            </nav>
        </div><!-- End Mobile Menu -->
	
    </header>

    <x-page-title
    backgroundImage="images/background/9.jpg"
    :breadcrumbs="[
        ['label' => 'Home', 'route' => route('index')],
        ['label' => 'Blog'],
    ]"
    title="{{ $blog->title }}"
/>


<div class="sidebar-page-container">
		<div class="pattern-layer" style="background-image:url(images/background/pattern-25.png)"></div>
    	<div class="auto-container">
        	<div class="row clearfix">
				
				<!-- Content Side -->
                <div class="content-side col-lg-12 col-md-12 col-sm-12">
					<!-- News Detail -->
					<div class="news-detail">
						<div class="inner-box">
							<div class="image">
								<img src="{{$blog->images}}" alt="" />
							</div>
							<div class="lower-content">
								<ul class="post-info">
									<li>Industrial</li>
									<li><span class="icon flaticon-calendar"></span>{{ date('d F, Y') }}</li>
									
								</ul>
								<h3>  {{ $blog->title }}</h3>
								<div class="blog-content">
                                    {!! $blog->content !!}
</div>
								
								
								
							</div>
							
							<!-- Post Share Options-->
							
							<!-- End Post Share Options-->
							
						</div>
					</div>
					
					
					
					
					
				</div>
				
				<!-- Sidebar Side -->
               
				
			</div>
		</div>
	</div>


@include('layouts.blog-footer')

<script src="{{ asset('js/jquery.js') }}"></script>
<script src="{{ asset('js/popper.min.js') }}"></script>
<script src="{{ asset('js/bootstrap.min.js') }}"></script>
<script src="{{ asset('js/jquery.mCustomScrollbar.concat.min.js') }}"></script>
<script src="{{ asset('js/magnific-popup.min.js') }}"></script>
<script src="{{ asset('js/appear.js') }}"></script>
<script src="{{ asset('js/appear-2.js') }}"></script>
<script src="{{ asset('js/parallax.min.js') }}"></script>
<script src="{{ asset('js/tilt.jquery.min.js') }}"></script>
<script src="{{ asset('js/jquery.paroller.min.js') }}"></script>
<script src="{{ asset('js/owl.js') }}"></script>
<script src="{{ asset('js/wow.js') }}"></script>
<script src="{{ asset('js/odometer.js') }}"></script>
<script src="{{ asset('js/slick.js') }}"></script>
<script src="{{ asset('js/backToTop.js') }}"></script>
<script src="{{ asset('js/jquery-ui.js') }}"></script>
<script src="{{ asset('js/cursor-script.js') }}"></script>
<script src="{{ asset('js/script.js') }}"></script>

