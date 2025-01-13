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
    title="Used Lubricants"
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
    <h3>Used Lubricants</h3>
    <p>
        Used lubricants are oils and greases that have reached the end of their initial service life but can be reprocessed and reused, offering a sustainable solution for waste reduction and resource conservation. These lubricants are collected from industrial machinery, automotive engines, and other equipment, where they have served their purpose in reducing friction, heat, and wear.
    </p>
    <p>
        The reprocessing of used lubricants involves removing contaminants, impurities, and degraded additives to restore their quality and performance. Advanced re-refining techniques ensure that the recycled lubricants meet industry standards, making them suitable for reuse in various applications. This process not only extends the lifecycle of lubricants but also reduces the environmental impact of waste oil disposal.
    </p>
    <p>
        At Manutrade Pro Solutions LTD, we are committed to promoting sustainability through the collection and recycling of used lubricants. Our services ensure that these valuable resources are responsibly managed, reducing waste and supporting eco-friendly practices. By partnering with us, you contribute to a circular economy while maintaining the efficiency and reliability of your operations.
    </p>
</div>
						</div>
					</div>
				</div>
				
			</div>
		</div>
	</div>


@include('layouts.main-footer')

@include('layouts.script')

