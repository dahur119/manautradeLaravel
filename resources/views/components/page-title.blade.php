{{-- resources/views/components/page-title.blade.php --}}
@props([
    'backgroundImage' => 'images/background/9.jpg', // Default background image
    'breadcrumbs' => [], // Array of breadcrumbs
    'title' => 'About Us', // Default title
])

<section class="page-title" style="background-image: url({{ asset($backgroundImage) }})">
    <div class="auto-container">
        {{-- Breadcrumbs --}}
        <ul class="bread-crumb clearfix">
            @foreach ($breadcrumbs as $breadcrumb)
                <li>
                    @if (isset($breadcrumb['route']))
                        <a href="{{ $breadcrumb['route'] }}">{{ $breadcrumb['label'] }}</a>
                    @else
                        {{ $breadcrumb['label'] }}
                    @endif
                </li>
            @endforeach
        </ul>

        {{-- Page Title --}}
        <h2>{{ $title }}</h2>
    </div>
</section>