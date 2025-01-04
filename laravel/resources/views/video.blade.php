@extends("welcome")
@section('title-block', 'You Tube')

@section('content')

<article class="portfolio active">
  <header>
    <h2 class="h2 article-title">Portfolio</h2>
  </header>

  <section class="projects">
    <!-- Фильтры -->
    <ul class="filter-list">
      <li class="filter-item">
        <button class="active" data-filter-btn>All</button>
      </li>
      <li class="filter-item">
        <button data-filter-btn>Web design</button>
      </li>
      <li class="filter-item">
        <button data-filter-btn>Applications</button>
      </li>
      <li class="filter-item">
        <button data-filter-btn>Web development</button>
      </li>
    </ul>

    <!-- Выпадающий список фильтра -->
    <div class="filter-select-box">
      <button class="filter-select" data-select>
        <div class="select-value" data-selecct-value>Select category</div>
        <div class="select-icon">
          <ion-icon name="chevron-down"></ion-icon>
        </div>
      </button>
      <ul class="select-list">
        <li class="select-item">
          <button data-select-item>All</button>
        </li>
        <li class="select-item">
          <button data-select-item>Web design</button>
        </li>
        <li class="select-item">
          <button data-select-item>Applications</button>
        </li>
        <li class="select-item">
          <button data-select-item>Web development</button>
        </li>
      </ul>
    </div>

    <!-- Проекты -->
    <ul class="project-list">
      <li class="project-item active" data-filter-item data-category="web development">
        <a href="#">
          <figure class="project-img">
            <div class="project-item-icon-box">
              <ion-icon name="eye-outline"></ion-icon>
            </div>
            <img src="./assets/images/project-1.jpg" alt="finance" loading="lazy">
          </figure>
          <h3 class="project-title">Finance</h3>
          <p class="project-category">Web development</p>
        </a>
      </li>
      <li class="project-item active" data-filter-item data-category="web design">
        <a href="#">
          <figure class="project-img">
            <div class="project-item-icon-box">
              <ion-icon name="eye-outline"></ion-icon>
            </div>
            <img src="./assets/images/project-2.png" alt="orizon" loading="lazy">
          </figure>
          <h3 class="project-title">Orizon</h3>
          <p class="project-category">Web design</p>
        </a>
      </li>
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

// Переменные для фильтров
const filterBtns = document.querySelectorAll("[data-filter-btn]");
const selectBtn = document.querySelector("[data-select]");
const selectItems = document.querySelectorAll("[data-select-item]");
const selectValue = document.querySelector("[data-selecct-value]");
const filterItems = document.querySelectorAll("[data-filter-item]");

// Функция для фильтрации элементов
const filterFunc = (selectedCategory) => {
  filterItems.forEach(item => {
    if (selectedCategory === "all" || selectedCategory === item.dataset.category) {
      item.classList.add("active");
    } else {
      item.classList.remove("active");
    }
  });
};

// Обработчик кликов по кнопкам фильтров
filterBtns.forEach(button => {
  button.addEventListener("click", function () {
    const selectedCategory = this.innerText.toLowerCase();
    selectValue.innerText = this.innerText;
    filterFunc(selectedCategory);

    // Переключение активного класса на кнопках
    filterBtns.forEach(btn => btn.classList.remove("active"));
    this.classList.add("active");
  });
});

// Открытие/закрытие выпадающего списка
selectBtn.addEventListener("click", (e) => {
  e.stopPropagation(); // предотвращаем всплытие события
  elementToggleFunc(selectBtn);
});

// Обработчик выбора категории из выпадающего списка
selectItems.forEach(item => {
  item.addEventListener("click", function () {
    const selectedCategory = this.innerText.toLowerCase();
    selectValue.innerText = this.innerText;
    filterFunc(selectedCategory);
    elementToggleFunc(selectBtn);

    // Убираем активный класс с других элементов
    selectItems.forEach(i => i.classList.remove("active"));
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

// Переменные для кнопки и панели контактов
const infoMoreBtn = document.querySelector("[data-sidebar-btn]");
const sidebarInfoMore = document.querySelector(".sidebar-info_more");

// Функция для переключения отображения контактов
const toggleSidebarInfo = () => {
  sidebarInfoMore.classList.toggle("active");
  const isActive = sidebarInfoMore.classList.contains("active");
  infoMoreBtn.querySelector("span").textContent = isActive ? "Скрыть контакты" : "Показать контакты";
};

// Обработчик клика по кнопке для показа/скрытия контактов
infoMoreBtn.addEventListener("click", (e) => {
  e.stopPropagation(); // предотвращаем всплытие события
  toggleSidebarInfo();
});

// Закрытие панели контактов, если кликнули вне
document.addEventListener("click", (e) => {
  const isClickInside = infoMoreBtn.contains(e.target) || sidebarInfoMore.contains(e.target);
  if (!isClickInside) {
    sidebarInfoMore.classList.remove("active");
    infoMoreBtn.querySelector("span").textContent = "Показать контакты";
  }
});


</script>
@endsection

