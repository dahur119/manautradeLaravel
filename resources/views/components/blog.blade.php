
    <div class="news-section">
        @foreach($blogs as $blog)
            @props([
                'image' => $blog->image, // Use the blog's image
                'date' => $blog->created_at->format('d F, Y'), // Format the date
                'link' => route('blogs.show', $blog->slug), // Link to the blog detail page
                'title' => $blog->title, // Use the blog's title
            ])

            <div class="news-block-two">
                <div class="inner-box wow fadeInRight" data-wow-delay="0ms" data-wow-duration="1500ms">
                    <div class="image">
                        <a href="{{ $link }}"><img src="{{ $image }}" alt="{{ $title }}" /></a>
                    </div>
                    <div class="lower-content">
                        <div class="post-date">{{ $date }}</div>
                        <h4><a href="{{ $link }}">{{ $title }}</a></h4>
                        <a class="plus-icon flaticon-plus" href="{{ $link }}"></a>
                    </div>
                </div>
            </div>
        @endforeach
    </div>
@endsection