'use strict';

// Общая функция для переключения активного состояния элемента
const elementToggleFunc = (elem) => {
  elem.classList.toggle("active");
};

// Sidebar (боковое меню) - переменные и обработка
const sidebar = document.querySelector("[data-sidebar]");
const sidebarBtn = document.querySelector("[data-sidebar-btn]");

// Открытие и закрытие бокового меню
sidebarBtn.addEventListener("click", () => elementToggleFunc(sidebar));

// Testimonials - переменные для модального окна
const testimonialsItems = document.querySelectorAll("[data-testimonials-item]");
const modalContainer = document.querySelector("[data-modal-container]");
const modalCloseBtn = document.querySelector("[data-modal-close-btn]");
const overlay = document.querySelector("[data-overlay]");

// Переменные для модального окна
const modalImg = document.querySelector("[data-modal-img]");
const modalTitle = document.querySelector("[data-modal-title]");
const modalText = document.querySelector("[data-modal-text]");

// Функция для открытия/закрытия модального окна
const toggleModal = () => {
  modalContainer.classList.toggle("active");
  overlay.classList.toggle("active");
};

// Обработчик для кликов по элементам отзывов
testimonialsItems.forEach(item => {
  item.addEventListener("click", () => {
    modalImg.src = item.querySelector("[data-testimonials-avatar]").src;
    modalImg.alt = item.querySelector("[data-testimonials-avatar]").alt;
    modalTitle.innerHTML = item.querySelector("[data-testimonials-title]").innerHTML;
    modalText.innerHTML = item.querySelector("[data-testimonials-text]").innerHTML;

    toggleModal();
  });
});

// Закрытие модального окна при клике на кнопку или на оверлей
modalCloseBtn.addEventListener("click", toggleModal);
overlay.addEventListener("click", toggleModal);

// Custom Select - переменные для выпадающего списка
const select = document.querySelector("[data-select]");
const selectItems = document.querySelectorAll("[data-select-item]");
const selectValue = document.querySelector("[data-selecct-value]");
const filterBtns = document.querySelectorAll("[data-filter-btn]");

// Открытие/закрытие выпадающего списка
select.addEventListener("click", () => elementToggleFunc(select));

// Обработчик выбора элемента в выпадающем списке
selectItems.forEach(item => {
  item.addEventListener("click", () => {
    const selectedValue = item.innerText.toLowerCase();
    selectValue.innerText = item.innerText;
    elementToggleFunc(select);
    filterFunc(selectedValue);
  });
});

// Фильтрация элементов по категории
const filterItems = document.querySelectorAll("[data-filter-item]");

const filterFunc = (selectedValue) => {
  filterItems.forEach(item => {
    if (selectedValue === "all" || selectedValue === item.dataset.category) {
      item.classList.add("active");
    } else {
      item.classList.remove("active");
    }
  });
};

// Обработчик кликов по фильтрующим кнопкам для больших экранов
let lastClickedBtn = filterBtns[0];
filterBtns.forEach(button => {
  button.addEventListener("click", () => {
    const selectedValue = button.innerText.toLowerCase();
    selectValue.innerText = button.innerText;
    filterFunc(selectedValue);

    lastClickedBtn.classList.remove("active");
    button.classList.add("active");
    lastClickedBtn = button;
  });
});

// Contact Form - переменные и обработка формы
const form = document.querySelector("[data-form]");
const formInputs = document.querySelectorAll("[data-form-input]");
const formBtn = document.querySelector("[data-form-btn]");

// Включение/выключение кнопки отправки формы в зависимости от ее валидности
formInputs.forEach(input => {
  input.addEventListener("input", () => {
    if (form.checkValidity()) {
      formBtn.removeAttribute("disabled");
    } else {
      formBtn.setAttribute("disabled", "");
    }
  });
});

// Page Navigation - переменные и обработка переходов по страницам
const navigationLinks = document.querySelectorAll("[data-nav-link]");
const pages = document.querySelectorAll("[data-page]");

// Переход по страницам при клике на навигационные ссылки
navigationLinks.forEach((link, index) => {
  link.addEventListener("click", () => {
    pages.forEach((page, i) => {
      if (i === index) {
        page.classList.add("active");
        navigationLinks[i].classList.add("active");
        window.scrollTo(0, 0);
      } else {
        page.classList.remove("active");
        navigationLinks[i].classList.remove("active");
      }
    });
  });
});
