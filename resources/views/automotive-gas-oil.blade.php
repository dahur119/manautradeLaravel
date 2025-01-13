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
        ['label' => 'Services'],
    ]"
    title="Automotive-gas-oil"
/>

<div class="sidebar-page-container">
		<div class="pattern-layer" style="background-image:url(images/background/pattern-25.png)"></div>
    	<div class="auto-container">
        	<div class="row clearfix">
				
				<!-- Sidebar Side -->
                <div class="sidebar-side left-sidebar col-lg-4 col-md-12 col-sm-12">
                	<aside class="sidebar sticky-top">
						
						<!-- Service Widget -->
						<div class="sidebar-widget service-widget">
							<div class="widget-content">
								<div class="sidebar-title">
									<h4>All Service</h4>
								</div>
								<ul class="service-list">
									@include('components.service-list')
								</ul>
							</div>
						</div>
						
						<!-- Download Widget -->
					
						
						<!-- Support Widget -->
						
					</aside>
				</div>
				
				<!-- Content Side -->
                <div class="content-side right-sidebar col-lg-8 col-md-12 col-sm-12">
					<div class="service-detail">
						<div class="inner-box">
							<div class="image">
								<img src="images/resource/news-11.jpg" alt="" />
							</div>
							<div class="lower-content">
								<h3>Automotive-gas-oil</h3>
								<p>Automotive Gas Oil (AGO), or diesel fuel, is a critical component in the operation of diesel engines, powering everything from heavy-duty trucks to industrial machinery. Refined from crude oil, AGO is known for its higher energy density compared to gasoline, providing more power per liter and ensuring greater fuel efficiency for engines that require high torque and consistent operation.</p>
								<p>The refining process for AGO results in a fuel that performs well in various conditions, offering clean combustion, optimal power output, and reduced engine wear. It is essential for vehicles and machinery used in industries such as transportation, construction, and agriculture, where reliability and endurance are paramount.
								</p>

								<p>At Manutrade Pro Solutions LTD, our Automotive Gas Oil (AGO) is engineered to meet the highest performance standards, ensuring seamless engine operation in both short and long-haul applications. We source AGO from trusted refineries to guarantee its quality, helping businesses minimize operational downtime and fuel costs while optimizing engine life and performance.
								</p>
								<!-- Gallery Images -->
								
								<!-- End Gallery Images -->
								
								
								<!-- End Accordion Outer -->
								
							</div>
						</div>
					</div>
				</div>
				
			</div>
		</div>
	</div>


@include('layouts.main-footer')

@include('layouts.script')

