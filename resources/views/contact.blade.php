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


    @include('layouts.header')

    <x-page-title
    backgroundImage="images/background/9.jpg"
    :breadcrumbs="[
        ['label' => 'Home', 'route' => route('index')],
        ['label' => 'Contact Us'],
    ]"
    title="Contact Us"
/>


<section class="contact-page-section">
		<div class="auto-container">
			<!-- Sec Title Three -->
			<div class="sec-title-three centered">
				<h2>Office Near You.</h2>
			</div>
			
			<div class="row clearfix">
			
				<!-- Location Block -->
				<div class="location-block col-lg-4 col-md-6 col-sm-12">
					<div class="inner-box wow fadeInLeft" data-wow-delay="0ms" data-wow-duration="1500ms">
						<div class="content">
							<span class="icon flaticon-message"></span>
							<strong>Email Address</strong>
							Sent mail asap anytime
							info@manutradepro.com<br>
						</div>
					
					
					</div>
				</div>
				
				<!-- Location Block -->
				<div class="location-block col-lg-4 col-md-6 col-sm-12">
					<div class="inner-box wow fadeInLeft" data-wow-delay="0ms" data-wow-duration="1500ms">
						<div class="content">
							<span class="icon flaticon-call"></span>
							<strong>Phone Number</strong>
							call us asap anytime: <br>
							+234-810 093 2220
						</div>
						
					</div>
				</div>
				
				<!-- Location Block -->
				<div class="location-block col-lg-4 col-md-6 col-sm-12">
					<div class="inner-box wow fadeInLeft" data-wow-delay="0ms" data-wow-duration="1500ms">
						<div class="content">
							<span class="icon flaticon-home"></span>
							<strong>Office Address</strong>
							Sent mail asap anytime
						</div>
						Cluster C, Gold Crest Executive, Jumeirah <br> Lake Towers, Dubai, United Arab Emirates
					
					</div>
				</div>
				
			</div>
			
		</div>

	</section>


    <div class="contact-form-section">
		<div class="pattern-layer" style="background-image:url(images/background/pattern-25.png)"></div>
    	<div class="auto-container">
			<!-- Sec Title -->
			<div class="sec-title alternate centered">
				<div class="title">Submit Question</div>
				<h2>Needs Help? Let’s Get in Touch</h2>
			</div>
			<div class="inner-container">
				
				<!-- Contact Form -->
				<div class="contact-form">
					
					<!-- Contact Form -->
					<form method="post" action="{{ route('contact.store') }}" id="contact-form">
						@csrf
						<div class="row clearfix">
							<div class="col-lg-6 col-md-6 col-sm-12 form-group">
								<input type="text" name="name" placeholder="Name" required>
							</div>
							
							<div class="col-lg-6 col-md-6 col-sm-12 form-group">
								<input type="email" name="email" placeholder="Your Email" required>
							</div>
							
							<div class="col-lg-6 col-md-6 col-sm-12 form-group">
								<input type="text" name="phone" placeholder="Your Phone" required>
							</div>
							
							<div class="col-lg-6 col-md-6 col-sm-12 form-group">
								<input type="text" name="title" placeholder="Your Subject" required>
							</div>
							
							<div class="col-lg-12 col-md-12 col-sm-12 form-group">
								<textarea name="message" placeholder="Message" required></textarea>
							</div>
							
							<div class="col-lg-12 col-md-12 col-sm-12 form-group">
								<button class="theme-btn btn-style-eight clearfix" type="submit">
									<span class="btn-wrap">
										<span class="text-one">Send Message</span>
										<span class="text-two">Send Message</span>
									</span>
								</button>
							</div>
						</div>
					</form>
						
				</div>
				<!--End Contact Form -->
				
			</div>
		</div>
	</div>
	<!-- End Location Section -->
	
	<!-- Map Column -->
	
	<!-- End Map Column -->
	
	<!-- Contact Form Section -->
    

@include('layouts.main-footer')

@include('layouts.script')

