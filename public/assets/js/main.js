window.onscroll = function () {
    var navbar = document.querySelector(".navbar");
    if (window.pageYOffset > 100) {
        // предположим, что ваш навбар начинается не с самого верха страницы
        navbar.classList.add("sticky");
    } else {
        navbar.classList.remove("sticky");
    }
};

// выпадающий список меню
document.querySelectorAll(".dropdown-submenu > a").forEach(function (element) {
    element.addEventListener("click", function (event) {
        event.preventDefault();
        event.stopPropagation();

        // Закрываем все открытые вложенные списки, кроме текущего
        document
            .querySelectorAll(".dropdown-submenu .dropdown-menu.show")
            .forEach(function (openMenu) {
                if (openMenu !== element.nextElementSibling) {
                    openMenu.classList.remove("show");
                }
            });

        // Переключаем видимость вложенного меню
        element.nextElementSibling.classList.toggle("show");
    });
});
