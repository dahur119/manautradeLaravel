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
    title="High-Density Polyethylene (HDPE)"
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
								<h3>High-Density Polyethylene (HDPE)</h3>
								<p>High-Density Polyethylene (HDPE) is a widely used thermoplastic polymer known for its strength, rigidity, and resistance to chemicals and environmental stress. HDPE’s durability makes it ideal for a range of industrial applications, including the production of containers, pipes, and plastic bottles. It is also commonly used in packaging and consumer goods, where high strength and low permeability are crucial.</p>
								<p>What sets HDPE apart from other plastics is its excellent resistance to harsh chemicals, UV radiation, and impact. These qualities make it a preferred material for products that require durability and long-lasting performance under tough conditions. Additionally, HDPE can be recycled, making it an environmentally sustainable choice.
								</p>

								<p>At Manutrade Pro Solutions LTD, we offer High-Density Polyethylene (HDPE) that meets rigorous quality standards, ensuring it delivers superior strength and resilience in applications ranging from packaging to construction. Our HDPE products are designed to meet the demands of industries that rely on reliable and cost-effective materials, offering durability and performance you can trust.
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

