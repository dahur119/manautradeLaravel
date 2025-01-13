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
    title="Low-Density Polyethylene (LDPE) "
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
								<h3>Low-Density Polyethylene (LDPE) </h3>
								<p>Low-Density Polyethylene (LDPE) is a highly flexible and lightweight thermoplastic that is widely used in packaging, consumer products, and industrial applications. Known for its excellent chemical resistance, low-temperature performance, and ease of processing, LDPE is the material of choice for products that require stretchability and flexibility.</p>
								<p>While LDPE has a lower strength compared to HDPE, it compensates with greater flexibility, making it ideal for packaging applications such as plastic films, shrink wraps, and grocery bags. Additionally, LDPE is used in manufacturing containers, lids, and other flexible products that benefit from its resilience and lightness.
								</p>

								<p>At Manutrade Pro Solutions LTD, we provide Low-Density Polyethylene (LDPE) that offers consistent quality and performance. Whether for packaging, agriculture, or industrial applications, our LDPE products meet high standards for flexibility, durability, and cost-efficiency. By choosing our LDPE, businesses can achieve reliable performance in both lightweight and flexible applications.
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

