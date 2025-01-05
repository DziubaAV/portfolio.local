@extends("welcome")
@section('title-block', 'You Tube')

@section('content')
<article class="blog active">

<header>
  <h2 class="h2 article-title">Блог</h2>
</header>

<section class="blog-posts">
  <ul class="blog-posts-list">
    @foreach ($blogs as $blog)
      <li class="blog-post-item">
        <a href="{{ $blog->link }}" target="_blank">
          <figure class="blog-banner-box">
            <img src="{{ $blog->image_url }}" alt="{{ $blog->title }}" loading="lazy">
          </figure>

          <div class="blog-content">

          <div class="blog-meta">
    <span class="dot"></span>
    <time datetime="{{ $blog->published_at->toDateString() }}">
    {{ $blog->published_at->format('d M, Y') }}
</time>
</div>

            <h3 class="h3 blog-item-title">{{ $blog->title }}</h3>

            <p class="blog-text">
              {{ $blog->description }}
            </p>

          </div>
        </a>
      </li>
    @endforeach
  </ul>
</section>



</article>
@endsection