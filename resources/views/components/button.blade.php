
@props(['route', 'text', 'icon' => 'flaticon-plus', 'class' => ''])

<div class="button-box">
    <a href="{{ $route }}" class="theme-btn btn-style-three clearfix {{ $class }}">
        <span class="btn-wrap">
            <span class="text-one">{{ $text }}</span>
            <span class="text-two">{{ $text }}</span>
        </span>
        <span class="plus {{ $icon }}"></span>
    </a>
</div>