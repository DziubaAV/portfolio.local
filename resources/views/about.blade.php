@extends("welcome")
@section('title-block', 'Домашняя страница')

@section('content')

<article class="about active">

<header>
<h2 class="h2 article-title">Обо мне</h2>
</header>

<section class="about-text">
  <p>
    Добро пожаловать на мой сайт! Здесь вы найдете развлекательный контент, который ни в коем случае не предназначен для того, чтобы оскорбить или навредить кому-либо. 
    Желаю вам прекрасного дня и приятного времяпрепровождения в виртуальном пространстве! 
    Если вы столкнулись с проблемами в функциональности сайта или у вас есть предложения по его улучшению, не стесняйтесь поделиться своим отзывом.
  </p>

</section>
<!--Testimonials-->

<section class="testimonials">
    <h3 class="h3 testimonials-title">Деятельность</h3>

    <ul class="testimonials-list has-scrollbar">
        @foreach($activities as $activity)
            <li class="testimonials-item">
                <div class="content-card" data-testimonials-item>

                    <figure class="testimonials-avatar-box">
                        <img src="{{ asset($activity->icon) }}" alt="{{ $activity->title }}" width="60" data-testimonials-avatar>
                    </figure>

                    <h4 class="h4 testimonials-item-title" data-testimonials-title>{{ $activity->title }}</h4>

                    <div class="testimonials-text" data-testimonials-text>
                        <p>{{ $activity->description }}</p>
                    </div>

                </div>
            </li>
        @endforeach
    </ul>
</section>


<!-- Activities -->

<div class="modal-container" data-modal-container>
<div class="overlay" data-overlay></div>
<section class="testimonials-modal">
<button class="modal-close-btn" data-modal-close-btn>
<ion-icon name="close-outline"></ion-icon>
</button>
<div class="modal-img-wrapper">
<figure class="modal-avatar-box">
<img src="#" alt="" width="80" data-modal-img>
</figure>
<img src="{{ asset('images/icon-quote.svg') }}" alt="quote icon">
</div>
<div class="modal-content">
<h4 class="h3 modal-title" data-modal-title></h4>
<!-- <time datetime="2021-06-14">14 June, 2021</time> -->
<div data-modal-text>
</div>
</div>
</section>
</div>



<section class="hobby">
    <h3 class="h3 hobby-title">Хобби</h3>
    <ul class="hobby-list has-scrollbar">
        @foreach($hobbies as $hobby)
        <li class="hobby-item">
            <a href="{{ $hobby->link }}" target="_blank">
                <img src="{{ $hobby->image_url }}" alt="{{ $hobby->name }}">
            </a>
        </li>
        @endforeach
    </ul>
</section>

</article>
@endsection