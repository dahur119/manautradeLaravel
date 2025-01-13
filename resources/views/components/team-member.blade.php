
@props([
    'image' => 'images/resource/team-6.jpg', // Default image
    'name' => 'Erl Winnson Pillecer Salud', // Default name
    'designation' => 'Director - ManutradePro Philippines', // Default designation
    'facebook' => '#', // Default Facebook link
    'instagram' => '#', // Default Instagram link
    'dribbble' => '#', // Default Dribbble link
    'route' => '#', // Default profile link
])

<div class="team-block-two col-lg-3 col-md-6 col-sm-12">
    <div class="inner-box wow fadeInLeft" data-wow-delay="150ms" data-wow-duration="1500ms">
        <div class="image">
            <div class="social-box">
                <a href="{{ $facebook }}" class="fa fa-facebook"></a>
                <a href="{{ $instagram }}" class="fa fa-instagram"></a>
                <a href="{{ $dribbble }}" class="fa fa-dribbble"></a>
            </div>
            <a href="{{ $route }}"><img src="{{ asset($image) }}" alt="{{ $name }}" /></a>
        </div>
        <div class="lower-content">
            <h4><a href="{{ $route }}">{{ $name }}</a></h4>
            <div class="designation">{{ $designation }}</div>
            <a class="plus-icon flaticon-plus" href="{{ $route }}"></a>
        </div>
    </div>
</div>