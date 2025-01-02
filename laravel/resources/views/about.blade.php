@extends("welcome")
@section('title-block', 'Обо мне')

@section('content')

<article class="about active">

<header>
<h2 class="h2 article-title">Обо мне</h2>
</header>

<section class="about-text">
  <p>
  Welcome to my website! Here you will find entertaining content that is in no way intended to offend or harm anyone. 
  I wish you a wonderful day and an enjoyable experience in the virtual space! 
  If you encounter any issues with the website's functionality or have suggestions for improvements, please feel free to share your feedback with me.
  </p>

</section>


<!--What i'm doing-->
<section class="service">
<h3 class="h3 service-title">What i'm doing</h3>
<ul class="service-list">

  <!--System administration-->
  <li class="service-item">
  <div class="service-icon-box">
  <img src="{{ asset('images/computer.svg') }}" alt="Сomputer icon" width="40">
  </div>
  <div class="service-content-box">
  <h4 class="h4 service-item-title">System administration</h4>
  <p class="service-item-text">
  Изучаю настройку сетей, управление серверами и обеспечение стабильной работы систем.
  </p>
  </div>
  </li>

  <!--Web development-->
  <li class="service-item">
  <div class="service-icon-box">
  <img src="{{ asset('images/coding.svg') }}" alt="Сoding icon" width="40">
  </div>
  <div class="service-content-box">
  <h4 class="h4 service-item-title">Web development</h4>
  <p class="service-item-text">
  Создаю адаптивные сайты с чистым и структурированным кодом. Специализируюсь на HTML, CSS и JavaScript.
  </p>
  </div>
  </li>

  <!--Videocreation-->
  <li class="service-item">
  <div class="service-icon-box">
  <img src="{{ asset('images/video.svg') }}" alt="Мideo icon" width="40">
  </div>
  <div class="service-content-box">
  <h4 class="h4 service-item-title">Videocreation</h4>
  <p class="service-item-text">
  Создаю и монтирую видеоролики для личного удовольствия. Экспериментирую с креативными техниками и идеями.
  </p>
  </div>
  </li>

  <!--Ant keeper-->
  <li class="service-item">
  <div class="service-icon-box">
  <img src="{{ asset('images/ant.svg') }}" alt="Ant icon" width="40">
  </div>
  <div class="service-content-box">
  <h4 class="h4 service-item-title">Ant keeper</h4>
  <p class="service-item-text">
  Домашние колонии - отличный способ наблюдать за миром природы, развивать терпение и изучать социальное поведение насекомых.
  </p>
  </div>
  </li>

</ul>
</section>                


<!--Testimonials-->

<section class="testimonials">
<h3 class="h3 testimonials-title">What i'm doing</h3>

<ul class="testimonials-list has-scrollbar">

<li class="testimonials-item">
<div class="content-card" data-testimonials-item>

<figure class="testimonials-avatar-box">
<img src="{{ asset('images/computer.svg') }}" alt="System administration" width="60" data-testimonials-avatar>
</figure>

<h4 class="h4 testimonials-item-title" data-testimonials-title>System administration</h4>

<div class="testimonials-text" data-testimonials-text>
<p>
Настраиваю операционные системы, серверы и сетевые инфраструктуры. Обеспечиваю защиту данных, резервное копирование и мониторинг систем. Оптимизирую производительность IT-инфраструктуры и автоматизирую рутинные процессы. Решаю нестандартные задачи в области администрирования и поддержки.
</p>
</div>

</div>
</li>

</ul>
</section>


<!-- Testimonials modal -->

<div class="modal-container" data-modal-container>
<div class="overlay" data-overlay></div>

<section class="testimonials-modal">

<button class="modal-close-btn" data-modal-close-btn>
<ion-icon name="close-outline"></ion-icon>
</button>

<div class="modal-img-wrapper">
<figure class="modal-avatar-box">
<img src="{{ asset('images/computer.svg') }}" alt="System administration" width="80" data-modal-img>
</figure>

<img src="{{ asset('images/icon-quote.svg') }}" alt="quote icon">
</div>

<div class="modal-content">

<h4 class="h3 modal-title" data-modal-title>System administration</h4>

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