@extends("welcome")
@section('title-block', 'Главная')

@section('content')

<article class="about active">

<header>
<h2 class="h2 article-title">Добро пожаловать</h2>
</header>

<section class="about-text">
  <p>
  Здесь вы найдете разнообразный развлекательный контент, созданный исключительно для вашего удовольствия. 
  Я искренне надеюсь, что вы прекрасно проведете время, и ваш день станет еще лучше! 
  Если вдруг вы заметите какие-либо неполадки или у вас появятся идеи, как сделать сайт лучше, пожалуйста, дайте знать. 
  Ваша обратная связь для меня очень важна!
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