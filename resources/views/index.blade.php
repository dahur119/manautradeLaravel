<!DOCTYPE html>
<html>

<!-- Mirrored from html.themexriver.com/industo/index-2.html by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 11 Dec 2024 20:24:40 GMT -->
@include('layouts.head')

<body>
<!-- <div class="cursor"></div> -->

<!-- PageWrapper
<div class="page-wrapper">


    

	<!-- Preloader End -->
    @include('layouts.preloader')
 	
	<!-- scrollToTop start -->
	<div class="progress-wrap active-progress">
		<svg class="progress-circle svg-content" width="100%" height="100%" viewBox="-1 -1 102 102">
		<path d="M50,1 a49,49 0 0,1 0,98 a49,49 0 0,1 0,-98" style="transition: stroke-dashoffset 10ms linear 0s; stroke-dasharray: 307.919px, 307.919px; stroke-dashoffset: 228.265px;"></path>
		</svg>
	</div>
	<!-- scrollToTop end -->
	
 	<!-- Main Header / Header Style Two -->
	
	 <header class="main-header header-style-two">
    	
		<!-- Header Upper -->
        <div class="header-upper">
			<div class="auto-container">
				<div class="clearfix">
					
					<div class="pull-left logo-box">
						<div class="logo"><a href="{{ route('index') }}"><img src="images/Manutrade-Logo-main@4x.png" alt="Manutrade Pro Solutions Logo" title="Manutrade Pro Solutions LTD" style="width: 210px; height: 69px;"></a></div>
					</div>
					
					<div class="pull-right upper-right clearfix">
						
						<!--Info Box-->
						<div class="upper-column info-box">
							<div class="icon-box"><span class="flaticon-customer-support-1"></span></div>
							<ul>
								<li>24/7 <br> Partner Support</li>
							</ul>
						</div>
						
						<!--Info Box-->
						<div class="upper-column info-box">
							<div class="icon-box"><span class="flaticon-email"></span></div>
							<ul>
								<li>Email Us <br> info@manutradepro.com</li>
							</ul>
						</div>
						
						<!--Info Box-->
						<div class="upper-column info-box">
							<div class="icon-box"><span class="flaticon-call"></span></div>
							<ul>
								<li>Call Us for help! <br> + 234-810 093 2220</li>
								

							</ul>
						</div>
						
					</div>
					
				</div>
			</div>
		</div>
		
        <!-- End Header Upper -->
		
		<!-- Header Upper -->
        <div class="header-lower">
        	<div class="auto-container">
				<div class="inner-container clearfix">
            	
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
									<li><a href="{{ route('index') }}">Home</a></li>
								
									</li>
									<li><a href="{{ route('about') }}">About</a>
										
									</li>

									<li><a href="{{ route('product') }}">Products</a></li>
									<li><a href="{{ route('services') }}">Services</a>
										
									</li>
									
								
								</ul>
							</div>
						</nav>
						
						<!-- Main Menu End-->
						<div class="outer-box clearfix">
							
							<!-- Btn Box -->
							<div class="btn-box">
								<a href="{{ route('contact') }}" class="theme-btn btn-style-two clearfix">
									<span class="btn-wrap">
										<span class="text-one">Contact us</span>
										<span class="text-two">Contact us</span>
									</span>
									<span class="plus flaticon-plus"></span>
								</a>
							</div>
							
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
                    <a href="index.html" title=""><img src="images/logo-small.png" alt="" title="ManutradePro" style="width: 181px; height: 50px;"></a>
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
                <div class="nav-logo"><a href="index.html"><img src="images/logo-small.png" alt="" title=""></a></div>
                <div class="menu-outer"><!--Here Menu Will Come Automatically Via Javascript / Same Menu as in Header--></div>
            </nav>
        </div><!-- End Mobile Menu -->
	
    </header>
    <!-- End Main Header -->
	
	<!-- Main Slider Two -->
    <section class="main-slider-two">
		<div class="main-slider-carousel owl-theme owl-carousel">
		
		
			<!-- Slide 01 -->
			<div class="slide">
				<div class="image-layer" style="background-image:url(images/main-slider/image-slider-1.jpg)"></div>
				<div class="auto-container">
					<!-- Content Column -->
					<div class="content-column">
						<div class="inner-column">
							<div class="title">Welcome to <span>Manutrade Pro</span></div>
							<h1>Redefining <span>Industrial Supply</span> <br> with Excellence</h1>
							<div class="text">Partnering with businesses to deliver premium base oils, automotive gas oil, and advanced plastics for sustainable growth and innovation.</div>
							<div class="clearfix">
								<div class="pull-left">
									<div class="button-box">
									<a href="{{ route('about') }}" class="theme-btn btn-style-three clearfix">
											<span class="btn-wrap">
												<span class="text-one">Explore More</span>
												<span class="text-two">Explore More</span>
											</span>
											<span class="plus flaticon-plus"></span>
										</a>
									</div>
								</div>
								<div class="pull-left">
									<div class="phone-box">
										<div class="box-inner">
											<span class="icon flaticon-telephone"></span>
											Call Us Now
											<strong>+234-810 093 2220</strong>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
			<!-- End Slide 01 -->
			
			<!-- Slide 02 -->
			<div class="slide">
				<div class="image-layer" style="background-image:url(images/main-slider/image-slider-2.jpg)"></div>
				<div class="auto-container">
					<!-- Content Column -->
					<div class="content-column">
						<div class="inner-column">
							<div class="title">The Environment  <span>We Live In</span></div>
							<h1>Sustainability & Community <span>Sustainability</span> <br> in Industrial Solutions</h1>
<div class="text">Quality. Innovation. Your growth.</div>
							<div class="clearfix">
								<div class="pull-left">
									<div class="button-box">
										<a href="{{ route('about') }}" class="theme-btn btn-style-three clearfix">
											<span class="btn-wrap">
												<span class="text-one">Explore More</span>
												<span class="text-two">Explore More</span>
											</span>
											<span class="plus flaticon-plus"></span>
										</a>
									</div>
								</div>
								<div class="pull-left">
									<div class="phone-box">
										<div class="box-inner">
											<span class="icon flaticon-telephone"></span>
											Call Us Now
											<strong>+234-810 093 2220</strong>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
			<!-- End Slide 02 -->
			
			<!-- Slide 03 -->
			<div class="slide">
				<div class="image-layer" style="background-image:url(images/main-slider/image-slider-3.jpg)"></div>
				<div class="auto-container">
					<!-- Content Column -->
					<div class="content-column">
						<div class="inner-column">
							<div class="title">Welcome to <span>Manutrade Pro</span></div>
							<h1>Driving <span>Sustainability</span> <br> in Industry</h1>
							<div class="text">Committed to reducing our im not sure ecological footprints through sustainable practices and innovation at every step.</div>
							<div class="clearfix">
								<div class="pull-left">
									<div class="button-box">
										<a href="{{ route('about') }}" class="theme-btn btn-style-three clearfix">
											<span class="btn-wrap">
												<span class="text-one">Explore More</span>
												<span class="text-two">Explore More</span>
											</span>
											<span class="plus flaticon-plus"></span>
										</a>
									</div>
								</div>
								<div class="pull-left">
									<div class="phone-box">
										<div class="box-inner">
											<span class="icon flaticon-telephone"></span>
											Call Us Now
											<strong>+234-810 093 2220</strong>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
			<!-- End Slide 03 -->
		</div>
		
		<!-- Social Box 
		<ul class="social-box">
			<li><a href="#" class="fa fa-facebook"> <span>Facebook</span></a></li>
			<li><a href="#" class="fa fa-twitter"> <span>Twitter</span></a></li>
			<li><a href="#" class="fa fa-instagram"> <span>Instagram</span></a></li>
			<li><a href="#" class="fa fa-instagram"> <span>TikTok</span></a></li>
		</ul>
		 End Social Box -->
		
		
		<!-- <div class="pattern-layer" style="background-image:url(images/main-slider/shape-layer.png)"></div> -->
	</section>
	
    <!-- End Main Slider Section -->
	
	<!-- About Section Two -->
	<section class="about-section-two" style="background-image:url(images/background/pattern-14.png)">
		<div class="auto-container">
			<div class="row clearfix">
			
				<!-- Image Column -->
				<div class="image-column col-lg-6 col-md-12 col-sm-12">
					<div class="inner-column">
						<div class="year-box">
							<h2><span class="odometer" data-count="20"></span>+</h2>
							Years
						</div>
						<div class="image wow fadeInLeft" data-wow-delay="0ms" data-wow-duration="1500ms">
							<img src="images/resource/about-1.jpg" alt="" />
						</div>
						<div class="image-two wow fadeInRight" data-wow-delay="0ms" data-wow-duration="1500ms">
							<img src="images/resource/about-2.jpg" alt="" />
						</div>
					</div>
				</div>
				
				<!-- Content Column -->
				<div class="content-column col-lg-6 col-md-12 col-sm-12">
					<div class="inner-column">
						<div class="sec-title-two">
							<div class="title">About Manutrade Pro Solutions</div>
							<h2>Redefining Excellence in <br> Industrial Product Supply <br> and Innovation</h2>
							<div class="text">At Manutrade Pro Solutions LTD, we combine decades of expertise with a commitment to innovation and sustainability. From premium industrial products to cutting-edge solutions, we empower businesses across industries to thrive in an ever-changing global landscape.</div>
						</div>
						<div class="row clearfix">
							
							<!-- Feature Block Two -->
							<div class="feature-block-two col-lg-6 col-md-6 col-sm-12">
								<div class="inner-box">
									<span class="icon flaticon-planet-earth"></span>
									<h6>Global Reach</h6>
									<div class="text">We ensure access to top-quality products and solutions across borders.</div>
								</div>
							</div>
							
							<!-- Feature Block Two -->
							<div class="feature-block-two col-lg-6 col-md-6 col-sm-12">
								<div class="inner-box">
									<span class="icon flaticon-trophy-2"></span>
									<h6>Unmatched Quality</h6>
									<div class="text">Our products are meticulously curated to guarantee reliability and excellence.</div>
								</div>
							</div>
							
						</div>
						
						<!-- Button Box -->
						<div class="button-box">
							<a href="#" class="theme-btn btn-style-four clearfix">
								<span class="btn-wrap">
									<span class="text-one">About Us</span>
									<span class="text-two">About Us</span>
								</span>
								<span class="plus flaticon-plus"></span>
							</a>
						</div>
						
					</div>
				</div>
				
			</div>
		</div>
	</section>
	
	<!-- End About Section Two -->
	
	<!-- CTA Section -->
	<section class="cta-section-one">
		
						
						<!-- Button Box -->
						<!-- <div class="button-box">
							<a href="#" class="theme-btn btn-style-four clearfix">
								<span class="btn-wrap">
									<span class="text-one">Get Appoinment</span>
									<span class="text-two">Get Appoinment</span>
								</span>
							</a>
						</div> -->
						
					</div>
				</div>
			</div>
		</div> -->
	</section>
	<!-- End CTA Section -->
	
	<!-- Services Section Three -->
	<section class="service-section-three" style="background-image:url(images/background/5.jpg)">
		<div class="auto-container">
			
			<!-- Sec Title Two -->
			<div class="sec-title-two light centered">
				<div class="title">What We Do</div>
				<h2>We Provide Best Services <br> For Industries </h2>
			</div>
			
			<div class="row clearfix">
				
				<!-- Service Block Three -->
				<!-- Service Block Three for Renewable Energy -->
<!-- Service Block Three for Energy Solutions -->
	
<x-service-block
    icon="flaticon-oil-pump"
    title="Oil and Gas Supply"
    description="Manutrade delivers high-quality crude oil, refined products, and petrochemical solutions to meet global energy demands. We ensure reliability and efficiency."
  	
/>


		<x-service-block
    icon="flaticon-oil-pump"
    title="Base Oil"
    description="Base oils reduce friction in engines, ensuring efficiency. Derived from crude, they meet industrial standards for motor oils and lubricants."
	
/>


<x-service-block
    icon="icon flaticon-bionic-eye"
    title="Premium Motor Spirit"
    description="Premium Motor Spirit, or gasoline, is refined for optimal performance. It boosts fuel efficiency, reduces emissions and prevents knocking."
   
/>

<x-service-block
    icon="icon flaticon-bionic-eye"
    title="Automotive Gas Oil"
    description="Automotive Gas Oil  powers high-torque engines with clean combustion, ensuring efficient fuel use and performance in vehicles and machinery."
   
/>











				
				<!-- Service Block Three -->
				
				
			</div>

			
			<!-- Btn Box -->
			<div class="btn-box text-center">
			<x-button route="{{ route('services') }}" text="More Services" />
			
				
			</div>
			
		</div>
	</section>


	
	<!-- End Services Section Three -->
	
	<!-- Team Section Two -->
	<section class="team-section-two">
		<div class="pattern-layer" style="background-image:url(images/background/pattern-18.png)"></div>
		<div class="pattern-layer-two" style="background-image:url(images/background/pattern-19.png)"></div>
		<div class="auto-container">
			<div class="sec-title-two centered">
				<div class="title">Our Experts</div>
				<h2>Our Industrial Expert Team</h2>
				<div class="text">At Manutrade Pro Solutions LTD, our team of seasoned professionals is the driving force behind our success. With decades of experience and a commitment to innovation, our experts lead the way in providing quality industrial solutions. <br> From the supply of base oils to advanced plastics, our team ensures every product meets the highest standards for performance and reliability.</div>
			</div>
			<div class="row clearfix">
			
				<!-- Team Block Two -->
				<div class="team-block-two col-lg-3 col-md-6 col-sm-12">
					<div class="inner-box wow fadeInLeft" data-wow-delay="0ms" data-wow-duration="1500ms">
						<div class="image">
							<div class="social-box">
								<a href="#" class="fa fa-facebook"></a>
								<a href="#" class="fa fa-instagram"></a>
								<a href="#" class="fa fa-dribbble"></a>
							</div>
							<a href="#"><img src="images/resource/team-5.jpg" alt="" /></a>
						</div>
						<div class="lower-content">
							<h4><a href="#">Maureen Salud</a></h4>
							<p class="designation"></p>
							<div class="designation"> Managing Director <br/> <strong>ManutradePro Nigeria </strong> </div>
							<!-- <a class="plus-icon flaticon-plus" href="#"></a> -->
						</div>
					</div>
				</div>
				
				<!-- Team Block Two -->
				<div class="team-block-two col-lg-3 col-md-6 col-sm-12">
					<div class="inner-box wow fadeInLeft" data-wow-delay="150ms" data-wow-duration="1500ms">
						<div class="image">
							<div class="social-box">
								<a href="#" class="fa fa-facebook"></a>
								<a href="#" class="fa fa-instagram"></a>
								<a href="#" class="fa fa-dribbble"></a>
							</div>
							<a href="#"><img src="images/resource/team-6.jpg" alt="" /></a>
						</div>
						<div class="lower-content">
							<h4><a href="#">Erl Winnson Pillecer Salud</a></h4>
							<div class="designation">Director <br/> <strong> ManutradePro Philippines</strong></div>
							<!-- <a class="plus-icon flaticon-plus" href="#"></a> -->
						</div>
					</div>
				</div>
				
				<!-- Team Block Two -->
				<div class="team-block-two col-lg-3 col-md-6 col-sm-12">
					<div class="inner-box wow fadeInLeft" data-wow-delay="300ms" data-wow-duration="1500ms">
						<div class="image">
							<div class="social-box">
								<a href="#" class="fa fa-facebook"></a>
								<a href="#" class="fa fa-instagram"></a>
								<a href="#" class="fa fa-dribbble"></a>
							</div>
							<a href="#"><img src="images/resource/team-7.jpg" alt="" /></a>
						</div>
						<div class="lower-content">
							<h4><a href="#">Karen Maye Salud Perdido</a></h4>
							<div class="designation">Director <br/> <strong> ManutradePro Benin Republic </strong></div>
							
							<!-- <a class="plus-icon flaticon-plus" href="#"></a> -->
						</div>
					</div>
				</div>
				
			</div>
		</div>
	</section>
	
	<!-- End Team Section Two -->
	
	<!-- Project Section Two -->
	<section class="project-section-two">
		<div class="auto-container">
			<div class="row clearfix">
			
				<!-- Title Column -->
				<div class="title-column col-lg-5 col-md-12 col-sm-12">
					<div class="inner-column">
						<div class="sec-title-two">
							<div class="title">Your Trusted Partner in Industrial Solutions</div>
							<h2>Innovation. Excellence. Always.</h2>

						</div>
						<h3>Fueling Industries, Powering Progress with Manutrade</h3>
						<div class="text">
							At Manutrade Pro Solutions, we specialize in delivering top-tier base oils, polymers, chemicals, and industrial packaging. Backed by expertise and integrity, we ensure sustainable solutions tailored to meet your business needs.
						</div>
					
					</div>
				</div>
				
				
				
				<!-- Carousel Column -->
				<div class="carousel-column col-lg-7 col-md-12 col-sm-12">
					<div class="inner-column">
						<div class="single-item-carousel owl-carousel owl-theme">
						<div class="slide">
								<div class="image">
									<img src="images/gallery/2-3.png" alt="" />
								</div>
							</div>
							<div class="slide">
								<div class="image">
									<img src="images/gallery/2-4.png" alt="" />
								</div>
							</div>
							<div class="slide">
								<div class="image">
									<img src="images/gallery/2-5.png" alt="" />
								</div>
							</div>
						</div>
					</div>
				</div>
				
			</div>
		</div>
	</section>

	
	<!-- End Project Section Two -->
	
	<!-- Faq Section -->
	<section class="faq-section">
		<div class="auto-container">
			<div class="row clearfix">
				
				<!-- Title Column -->
				<div class="title-column col-lg-6 col-md-12 col-sm-12">
					<div class="inner-column">
						<div class="sec-title-two">
							<div class="title">Frequently Asked Questions</div>
							<h2>Get Every Single Answer From Here</h2>
						</div>
						<div class="image">
							<img src="images/resource/faq.png" alt="" />
						</div>
					</div>
				</div>
				
				<!-- Accordion Column -->
				<div class="accordion-column col-lg-6 col-md-12 col-sm-12">
					<div class="inner-column">
						<div class="upper-text">At Manutrade Pro Solutions, we offer innovative, reliable, and sustainable solutions in industrial products. Here, we address the common questions about our offerings and practices.</div>
						
						<!-- Accordion Box -->
						<ul class="accordion-box">
	
							<!-- Block -->
							<li class="accordion block">
								<div class="acc-btn"><div class="icon-outer"><span class="icon icon-plus fa fa-plus"></span> <span class="icon icon-minus fa fa-minus"></span></div>What products does Manutrade Pro Solutions offer?</div>
								<div class="acc-content">
									<div class="content">
										<div class="text">We specialize in premium industrial products such as base oils, Premium Motor Spirit (PMS), Automotive Gas Oil (AGO), and various plastics like HDPE, LDPE, and PET. Each product is carefully selected to meet the highest quality standards and performance requirements across industries.</div>
									</div>
								</div>
							</li>
	
							<!-- Block -->
							<li class="accordion block active-block">
								<div class="acc-btn active"><div class="icon-outer"><span class="icon icon-plus fa fa-plus"></span> <span class="icon icon-minus fa fa-minus"></span></div>How does Manutrade Pro Solutions ensure product quality?</div>
								<div class="acc-content current">
									<div class="content">
										<div class="text">Our products undergo stringent quality checks and are sourced from reputable refineries and manufacturers. We ensure that each product, from base oils to plastics, meets or exceeds industry standards for performance and reliability.</div>
									</div>
								</div>
							</li>
							
							<!-- Block -->
							<li class="accordion block">
								<div class="acc-btn"><div class="icon-outer"><span class="icon icon-plus fa fa-plus"></span> <span class="icon icon-minus fa fa-minus"></span></div>What sets Manutrade Pro Solutions apart from other suppliers?</div>
								<div class="acc-content">
									<div class="content">
										<div class="text">At Manutrade Pro Solutions, we focus not only on supplying products but on building long-term partnerships with our clients. We offer sustainable solutions, expert insights, and a commitment to minimizing environmental impact, making us a trusted partner for businesses across industries.</div>
									</div>
								</div>
							</li>
							
						</ul>
					</div>
				</div>
			</div>
		</div>
	</section>


	<section class="skill-section">
		<div class="image-layer" style="background-image:url(images/background/6.jpg)"></div>
		<div class="auto-container">
			<div class="row clearfix">
			
				<!-- Video Column -->
			
				
				<!-- Skill Column -->
				<div class="skill-column col-lg-6 col-md-12 col-sm-12">
					<div class="inner-column">
						<!-- Sec Title Three -->
						<div class="sec-title-three light">
							<div class="title">Expertise and Experience</div>
							<h2>Experience You Can Trust, Results You Can See
							</h2>
							<div class="text">
								With decades of industry experience, our team brings unparalleled knowledge and insights to the table. We combine strategic thinking with technical expertise, empowering you to make informed decisions that drive growth and success. Our proven track record in delivering exceptional results speaks to our commitment to excellence.
									When you partner with Manutrade Pro, you’re choosing a trusted ally dedicated to helping your business thrive in a competitive and ever-changing marketplace. Let us be the foundation for your next success story.

						</div>
						
						<!-- Skills -->
						
						
					</div>
				</div>


				
				
			</div>

			<div class="video-column col-lg-6 col-md-12 col-sm-12">
				<div class="inner-column">
					<!-- Video Box -->
					<div class="video-box">
						<figure class="video-image">
							<img class="transition-500ms" src="images/resource/video.jpg" alt="">
						</figure>
						
					</div>
				</div>
			</div>
		</div>
	</section>
	
	<!-- End Faq Section -->
	
	<!-- Testimonial Section -->
	


	<section class="news-section-two">
		<div class="auto-container">
			<div class="sec-title-two">
				<div class="title">Blog</div>
				<h2>Latest News & Article</h2>
			</div>
			<div class="three-item-carousel-two owl-carousel">
    @foreach($blogs as $blog)
        <div class="news-block-two">
            <div class="inner-box wow fadeInLeft" data-wow-delay="0ms" data-wow-duration="1500ms">
                <div class="image">
                    <a href="{{ route('blog-detail', ['slug' => $blog->slug]) }}">
                        <img src="images/resource/news-5.jpg" alt="Industrial Growth News" />
                    </a>
                </div>
                <div class="lower-content">
                    <div class="post-date">{{ date('d F, Y') }}</div>
                    <h4>
                        <a href="{{ route('blog-detail', ['slug' => $blog->slug]) }}">
                            {{ $blog->title }}
                        </a>
                    </h4>
                    <a class="plus-icon flaticon-plus" href="{{ route('blog-detail', ['slug' => $blog->slug]) }}"></a>
                </div>
            </div>
        </div>
    @endforeach
</div>				
			
</div>

		
				<!-- News Block Two -->
				
				
			</div>
		</div>
	</section>
	
	<!-- End Testimonial Section -->
	
	<!-- News Section Two -->
	
	<!-- End News Section Two -->
	
	<!-- Info Section -->
	<section class="info-section">
		<div class="auto-container">
			<div class="inner-container">
				<div class="clearfix">
				
					<!-- Info Block -->
					<div class="info-block col-lg-4 col-md-6 col-sm-12">
						<div class="inner-box">
							<div class="content">
								<div class="icon flaticon-headphones-1"></div>
								<strong>24/7 Client Support</strong>
								<div class="text">At Manutrade Pro Solutions, we prioritize our clients' needs with round-the-clock support to ensure seamless operations across all sectors.</div>
							</div>
						</div>
					</div>
					
					<!-- Info Block -->
					<div class="info-block col-lg-4 col-md-6 col-sm-12">
						<div class="inner-box">
							<div class="content">
								<div class="icon flaticon-bulb"></div>
								<strong>Innovative Solutions</strong>
								<div class="text">We leverage cutting-edge technologies and industry insights to develop solutions that foster growth, sustainability, and efficiency.</div>
							</div>
						</div>
					</div>
					
					<!-- Info Block -->
					<div class="info-block col-lg-4 col-md-6 col-sm-12">
						<div class="inner-box">
							<div class="content">
								<div class="icon flaticon-security"></div>
								<strong>Commitment to Sustainability</strong>
								<div class="text">Our environmental responsibility is a cornerstone of our operations, as we implement sustainable practices to protect the planet for future generations.</div>
							</div>
						</div>
					</div>
					
				</div>
			</div>
		</div>
	</section>


	
	
	<!-- End Info Section -->
	
	<!-- Footer Style Two -->
	<footer class="footer-style-two">
		<div class="pattern-layer" style="background-image:url(images/background/pattern-23.png)"></div>
		<div class="pattern-layer-two" style="background-image:url(images/background/pattern-24.png)"></div>
		<div class="auto-container">
			<!-- Widgets Section -->
			
            @include('layouts.footer')

            @include('layouts.footer-bottom')   
			
			
			
		</div>
	</footer>
	<!-- End Footer Style Two -->
	
</div>
<!-- End Page Wrapper -->

<script src="js/jquery.js"></script>
<script src="js/popper.min.js"></script>
<script src="js/bootstrap.min.js"></script>
<script src="js/jquery.mCustomScrollbar.concat.min.js"></script>
<script src="js/magnific-popup.min.js"></script>
<script src="js/appear.js"></script>
<script src="js/parallax.min.js"></script>
<script src="js/tilt.jquery.min.js"></script>
<script src="js/jquery.paroller.min.js"></script>
<script src="js/owl.js"></script>
<script src="js/wow.js"></script>
<script src="js/odometer.js"></script>
<script src="js/slick.js"></script>
<script src="js/backToTop.js"></script>
<script src="js/jquery-ui.js"></script>
<script src="js/cursor-script.js"></script>
<script src="js/script.js"></script>

<!--[if lt IE 9]><script src="https://cdnjs.cloudflare.com/ajax/libs/html5shiv/3.7.3/html5shiv.js"></script><![endif]-->
<!--[if lt IE 9]><script src="js/respond.js"></script><![endif]-->

</body>

<!-- Mirrored from html.themexriver.com/industo/index-2.html by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 11 Dec 2024 20:27:23 GMT -->
</html>