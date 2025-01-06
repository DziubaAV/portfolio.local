@extends("welcome")
@section('title-block', 'You Tube')

@section('content')

<article class="portfolio active">
  <header>
    <h2 class="h2 article-title">Видео</h2>
  </header>

  <section class="projects">
    <!-- Фильтры -->
    <ul class="filter-list">
      <li class="filter-item">
        <button class="active" data-filter-btn>All</button>
      </li>
      <li class="filter-item">
        <button data-filter-btn>Адреналин</button>
      </li>
      <li class="filter-item">
        <button data-filter-btn>Путешествия</button>
      </li>
      <li class="filter-item">
        <button data-filter-btn>Разное</button>
      </li>
    </ul>

    <!-- Выпадающий список фильтра -->
    <div class="filter-select-box">
      <button class="filter-select" data-select>
        <div class="select-value" data-selecct-value>Выбрать категорию</div>
        <div class="select-icon">
          <ion-icon name="chevron-down"></ion-icon>
        </div>
      </button>
      <ul class="select-list">
        <li class="select-item">
          <button data-select-item>All</button>
        </li>
        <li class="select-item">
          <button data-select-item>Адреналин</button>
        </li>
        <li class="select-item">
          <button data-select-item>Путешествия</button>
        </li>
        <li class="select-item">
          <button data-select-item>Разное</button>
        </li>
      </ul>
    </div>

    <!-- Проекты -->
    <ul class="project-list">
        
    @foreach($videos as $video)
    <li class="project-item active" data-filter-item data-category="{{ $video->category }}">
        <a href="{{ $video->video_url }}" target="_blank">
            <figure class="project-img">
                <div class="project-item-icon-box">
                    <ion-icon name="eye-outline"></ion-icon>
                </div>
                <iframe width="100%" height="auto" src="{{ $video->embed_url }}" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
            </figure>
            <h3 class="project-title">{{ $video->title }}</h3>
            <p class="project-category">{{ $video->category }}</p>
        </a>
    </li>
    @endforeach


      <!-- Другие проекты -->
    </ul>
  </section>
</article>


<script>
   'use strict';

// Функция для переключения активного состояния элемента
const elementToggleFunc = (elem) => {
  elem.classList.toggle("active");
};

// === ФИЛЬТРАЦИЯ ===

// Переменные для фильтров
const filterBtns = document.querySelectorAll("[data-filter-btn]");
const selectBtn = document.querySelector("[data-select]");
const selectItems = document.querySelectorAll("[data-select-item]");
const selectValue = document.querySelector("[data-selecct-value]");
const filterItems = document.querySelectorAll("[data-filter-item]");

// Функция для фильтрации элементов
const filterFunc = (selectedCategory) => {
  filterItems.forEach((item) => {
    if (selectedCategory === "all" || selectedCategory === item.dataset.category) {
      item.classList.add("active");
    } else {
      item.classList.remove("active");
    }
  });
};

// Обработчик кликов по кнопкам фильтров
filterBtns.forEach((button) => {
  button.addEventListener("click", function () {
    const selectedCategory = this.innerText.toLowerCase();
    selectValue.innerText = this.innerText;
    filterFunc(selectedCategory);

    // Переключение активного класса на кнопках
    filterBtns.forEach((btn) => btn.classList.remove("active"));
    this.classList.add("active");
  });
});

// Открытие/закрытие выпадающего списка
selectBtn.addEventListener("click", (e) => {
  e.stopPropagation(); // предотвращаем всплытие события
  elementToggleFunc(selectBtn);
});

// Обработчик выбора категории из выпадающего списка
selectItems.forEach((item) => {
  item.addEventListener("click", function () {
    const selectedCategory = this.innerText.toLowerCase();
    selectValue.innerText = this.innerText;
    filterFunc(selectedCategory);
    elementToggleFunc(selectBtn);

    // Убираем активный класс с других элементов
    selectItems.forEach((i) => i.classList.remove("active"));
    this.classList.add("active");
  });
});

// Закрытие выпадающего списка, если кликнули вне
document.addEventListener("click", (e) => {
  const isClickInside = selectBtn.contains(e.target);
  if (!isClickInside) {
    selectBtn.classList.remove("active");
  }
});

// === БОКОВАЯ ПАНЕЛЬ ===

// Переменные для кнопки и боковой панели
const infoMoreBtn = document.querySelector("[data-sidebar-btn]");
const sidebar = document.querySelector("[data-sidebar]");

// Функция для переключения боковой панели
const toggleSidebar = () => {
  elementToggleFunc(sidebar); // Переключаем класс "active" у панели
  const isActive = sidebar.classList.contains("active");
  infoMoreBtn.querySelector("span").textContent = isActive ? "Скрыть контакты" : "Показать контакты";
};

// Обработчик клика по кнопке
infoMoreBtn.addEventListener("click", (e) => {
  e.stopPropagation(); // предотвращаем всплытие события
  toggleSidebar();
});

// Закрытие боковой панели, если кликнули вне
document.addEventListener("click", (e) => {
  const isClickInside = infoMoreBtn.contains(e.target) || sidebar.contains(e.target);
  if (!isClickInside) {
    sidebar.classList.remove("active");
    infoMoreBtn.querySelector("span").textContent = "Показать контакты";
  }
});


</script>
@endsection

