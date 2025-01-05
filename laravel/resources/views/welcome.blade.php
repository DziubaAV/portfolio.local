<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>@yield('title-block')</title>

  <link rel="shortcut icon" href="{{ asset('/images/logo.ico') }}" type="image/x-icon">

  <!-- Подключение пользовательских стилей -->
  <link rel="stylesheet" href="{{ asset('/css/style.css') }}">

  <!-- Подключение шрифтов Google Font s-->
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600&display=swap" rel="stylesheet">
</head>

<!-- BODY -->
<body>
<main>

<!-- SIDEBAR -->
<aside class="sidebar" data-sidebar>
    
<!-- Информация о пользователе в боковой панели -->
<div class="sidebar-info">

<!-- Блок с аватаром пользователя -->
<figure class="avatar-box">
<img src="{{ asset('images\my-avatar.png') }}" alt="Дзюба Артёмий" width="80">
</figure>

    
<div class="info-content">

<!-- Имя пользователя -->
<h1 class="name" title="Дзюба Артёмий">Дзюба Артёмий</h1>
<!-- Должность пользователя -->
<p class="title">System administrator</p>

</div>

<!-- Кнопка для отображения дополнительных контактов -->
<button class="info_more-btn" data-sidebar-btn>
<span>Показаь контакты</span>
<ion-icon name="chevron-down"></ion-icon>
</button>

</div>


<!-- Блок с дополнительной информацией (контакты) -->
<div class="sidebar-info_more">
<div class="separator"></div>

<!-- Список контактов -->
<ul class="contacts-list">

<!-- Контакт 1: Email -->
<li class="contact-item">
<div class="icon-box">
<ion-icon name="mail-outline"></ion-icon>
</div>
<div class="contact-info">
<p class="contact-title">Email</p>
<a href="mailto:dz.artsiomi@gmail.com" class="contact-link">dz.artsiomi@gmail.com</a>
</div>
</li>

<!-- Контакт 2: Location -->
<li class="contact-item">
<div class="icon-box">
<ion-icon name="location-outline"></ion-icon>
</div>
<div class="contact-info">
<p class="contact-title">Расположение</p>
<address>Минск, Беларусь</address>
</div>
</li>

</ul>

<div class="separator"></div>

<!-- Список социальных сетей -->
<ul class="social-list">

  <li class="social-item">
  <a href="https://www.facebook.com/dzartsiomi" class="social-link">
  <ion-icon name="logo-facebook"></ion-icon>
  </a>
  </li>

  <li class="social-item">
  <a href="https://www.instagram.com/dzartsiomi/" class="social-link">
  <ion-icon name="logo-instagram"></ion-icon>
  </a>
  </li>

</ul>
</div>
</aside>

<div class="main-content">

<!-- NAVBAR -->

<nav class="navbar">
<ul class="navbar-list">

<li class="navbar-item">
    <a href="{{ route('about') }}" 
       class="navbar-link {{ request()->routeIs('about') ? 'active' : '' }}">
       Обо мне
    </a>
</li>

<li class="navbar-item">
    <a href="{{ route('resume') }}" 
       class="navbar-link {{ request()->routeIs('resume') ? 'active' : '' }}">
       Резюме
    </a>
</li>

  <li class="navbar-item">
  <a href="{{ route('video') }}" 
       class="navbar-link {{ request()->routeIs('video') ? 'active' : '' }}">
       Видео
    </a>
  </li>

  <li class="navbar-item">
  <a href="{{ route('blog') }}" 
       class="navbar-link {{ request()->routeIs('blog') ? 'active' : '' }}">
       Блог
    </a>
  </li>
  <li class="navbar-item">
  <a href="{{ route('contact') }}" 
       class="navbar-link {{ request()->routeIs('contact') ? 'active' : '' }}">
       Контакты
    </a>
  </li>



</ul>
</nav>

<!-- Основное содержимое -->
    @yield('content')

</div>
</main>

<!-- Script -->


<script src="{{ asset('js/script.js') }}" defer></script>

<script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
<script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>

</body>
</html>