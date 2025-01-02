"use strict";

/**
 * Переключает класс "active" у указанного элемента.
 * @param {HTMLElement} elem - Элемент, для которого нужно переключить класс.
 */
const elementToggleFunc = function (elem) {
    elem.classList.toggle("active");
};

// Переменные для боковой панели
const sidebar = document.querySelector("[data-sidebar]");
const sidebarBtn = document.querySelector("[data-sidebar-btn]");

// Переключение видимости боковой панели для мобильных устройств
sidebarBtn.addEventListener("click", function () {
    elementToggleFunc(sidebar);
});

// Переменные для отзывов
const testimonialsItem = document.querySelectorAll("[data-testimonials-item]");
const modalContainer = document.querySelector("[data-modal-container]");
const modalCloseBtn = document.querySelector("[data-modal-close-btn]");
const overlay = document.querySelector("[data-overlay]");

// Переменные содержимого модального окна
const modalImg = document.querySelector("[data-modal-img]");
const modalTitle = document.querySelector("[data-modal-title]");
const modalText = document.querySelector("[data-modal-text]");

/**
 * Переключает класс "active" для модального окна и затемнения фона.
 */
const testimonialsModalFunc = function () {
    modalContainer.classList.toggle("active");
    overlay.classList.toggle("active");
};

// Добавление события клика на каждый элемент отзывов
for (let i = 0; i < testimonialsItem.length; i++) {
    testimonialsItem[i].addEventListener("click", function () {
        // Установка данных в модальное окно
        modalImg.src = this.querySelector("[data-testimonials-avatar]").src;
        modalImg.alt = this.querySelector("[data-testimonials-avatar]").alt;
        modalTitle.innerHTML = this.querySelector(
            "[data-testimonials-title]"
        ).innerHTML;
        modalText.innerHTML = this.querySelector(
            "[data-testimonials-text]"
        ).innerHTML;

        testimonialsModalFunc();
    });
}

// Добавление события клика для кнопки закрытия модального окна и затемнения фона
modalCloseBtn.addEventListener("click", testimonialsModalFunc);
overlay.addEventListener("click", testimonialsModalFunc);

// Переменные для пользовательского выпадающего списка
const select = document.querySelector("[data-select]");
const selectItems = document.querySelectorAll("[data-select-item]");
const selectValue = document.querySelector("[data-selecct-value]");
const filterBtn = document.querySelectorAll("[data-filter-btn]");

// Переключение видимости выпадающего списка
select.addEventListener("click", function () {
    elementToggleFunc(this);
});

// Добавление событий клика для каждого элемента выпадающего списка
for (let i = 0; i < selectItems.length; i++) {
    selectItems[i].addEventListener("click", function () {
        let selectedValue = this.innerText.toLowerCase();
        selectValue.innerText = this.innerText;
        elementToggleFunc(select);
        filterFunc(selectedValue);
    });
}

// Переменные для фильтрации элементов
const filterItems = document.querySelectorAll("[data-filter-item]");

/**
 * Фильтрует элементы в зависимости от выбранного значения.
 * @param {string} selectedValue - Выбранное значение фильтра.
 */
const filterFunc = function (selectedValue) {
    for (let i = 0; i < filterItems.length; i++) {
        if (selectedValue === "all") {
            filterItems[i].classList.add("active");
        } else if (selectedValue === filterItems[i].dataset.category) {
            filterItems[i].classList.add("active");
        } else {
            filterItems[i].classList.remove("active");
        }
    }
};

// Добавление событий клика для кнопок фильтрации на больших экранах
let lastClickedBtn = filterBtn[0];

for (let i = 0; i < filterBtn.length; i++) {
    filterBtn[i].addEventListener("click", function () {
        let selectedValue = this.innerText.toLowerCase();
        selectValue.innerText = this.innerText;
        filterFunc(selectedValue);

        lastClickedBtn.classList.remove("active");
        this.classList.add("active");
        lastClickedBtn = this;
    });
}

// Переменные для формы обратной связи
const form = document.querySelector("[data-form]");
const formInputs = document.querySelectorAll("[data-form-input]");
const formBtn = document.querySelector("[data-form-btn]");

// Добавление событий ввода для каждого поля формы
for (let i = 0; i < formInputs.length; i++) {
    formInputs[i].addEventListener("input", function () {
        // Проверка валидации формы
        if (form.checkValidity()) {
            formBtn.removeAttribute("disabled");
        } else {
            formBtn.setAttribute("disabled", "");
        }
    });
}