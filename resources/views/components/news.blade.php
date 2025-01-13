@props([
    'icon' => 'flaticon-oil-pump', // Default icon
    'title' => 'Oil and Gas Supply', // Default title
    'description' => 'Default description.', // Default description
    'route' => '#', // Default route
])

<div class="service-block-three col-lg-3 col-md-6 col-sm-12">
    <div class="inner-box wow fadeInLeft" data-wow-delay="600ms" data-wow-duration="1500ms">
        <div class="color-layer">
            <span class="color-one"></span>
            <span class="color-two"></span>
            <span class="color-three"></span>
            <span class="color-four"></span>
        </div>
        <div class="icon-box">
            <span class="icon {{ $icon }}"></span>
        </div>
        <h5><a href="{{ $route }}">{{ $title }}</a></h5>
        <div class="text">{{ $description }}</div>
        <a class="plus-icon flaticon-plus" href="{{ $route }}"></a>
    </div>
</div>


