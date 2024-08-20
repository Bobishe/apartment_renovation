<!DOCTYPE html>
<html lang="ru">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title', 'Главная')</title>

    <!-- Подключение Bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">

    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.0/font/bootstrap-icons.css" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('assets/css/adaptive.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/main.css') }}">

    <!-- Дополнительные стили -->
    <style>

    </style>
</head>

<body>

    <!-- Header -->
    <header class="header mt-0 pt-lg-5" style="z-index: 999">
        <div class="container">
            <div class="row text-center align-items-center">
                <div class="col-lg-3 mb-3 mb-lg-0">
                    <a href="/index" class="logo ">
                        <img src="{{ asset('img/logo.png') }}" alt="Логотип">
                    </a>
                </div>
                <div class="col-lg-4 text-center pt-2">
                    <p class="fs-dynamic mb-0">Ремонт квартир в Красноярске</p>
                    <p class="fs-extra">Ежедневно 09:00-21:00</p>
                </div>
                <div class="col-lg-3 text-right mt-3  mb-3 mb-lg-0">
                    <!-- Социальные иконки -->
                    <a href="https://wa.me/79029238226?text=" class="mr-2 bi bi-whatsapp p-1 text-bg-success"
                        style="font-size: 1.3rem; color: white; border-radius: 50%; display: inline-flex; align-items: center; justify-content: center; width: 2.5rem; height: 2.5rem; text-decoration: none;"></a>
                    <a href="https://tlgg.ru/remont_kvartir_24" class="mr-2 bi bi-telegram p-1 text-bg-success"
                        style="font-size: 1.3rem; color: white; border-radius: 50%; display: inline-flex; align-items: center; justify-content: center; width: 2.5rem; height: 2.5rem; text-decoration: none;"></a>
                    <a href="https://ok.ru/group/60443121877243" class="mr-2 p-1 text-bg-success"
                        style="border-radius: 50%; display: inline-flex; align-items: center; justify-content: center; width: 2.5rem; height: 2.5rem; text-decoration: none;">
                        <img src="{{ asset('img/svg/odnoklassniki-svgrepo-com.svg') }}" alt="Odnoklassniki"
                            style="width: 1.3rem; height: 1.3rem; color: white;">
                    </a>
                    <a href="https://www.youtube.com/channel/UC4-n2VGT67KX92gBBsPtMSA"
                        class="mr-2 bi bi bi-youtube p-1 text-bg-success"
                        style="font-size: 1.3rem; color: white; border-radius: 50%; display: inline-flex; align-items: center; justify-content: center; width: 2.5rem; height: 2.5rem; text-decoration: none;"></a>
                    <a href="https://vk.com/remontkvartirkrasnoyarsk124" class="mr-2 p-1 text-bg-success"
                        style="border-radius: 50%; display: inline-flex; align-items: center; justify-content: center; width: 2.5rem; height: 2.5rem; text-decoration: none;">
                        <img src="{{ asset('img/svg/vk-svgrepo-com.svg') }}" alt="vk"
                            style="width: 1.5rem; height: 1.3rem; color: white;">
                    </a>


                </div>
                <div class="col-lg-2 text-right ">
                    <p class="fs-5 mb-1 fw-bold ">+7 (391) 293-82-26</p>
                    <a href="#" class="btn btn-success">Обратный звонок</a>
                </div>

            </div>
        </div>



    </header>

    <nav class="navbar navbar-expand-lg navbar-dark sticky-top">
        <div class="container-fluid">
            <button class="navbar-toggler mx-auto" type="button" data-bs-toggle="collapse"
                data-bs-target="#navbarScroll" aria-controls="navbarScroll" aria-expanded="false"
                aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
                <span class="navbar-text ms-2 fs-4 " style="vertical-align: middle; color: white">МЕНЮ САЙТА</span>
            </button>
            <div class="collapse navbar-collapse" id="navbarScroll">
                <ul class="navbar-nav mx-auto fs-5 text-uppercase navbar-nav-scroll" style="--bs-scroll-height: 75vh;">
                    <li class="nav-item">
                        <a class="nav-link" href="/index">Главная</a>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button"
                            data-bs-toggle="dropdown" aria-expanded="false">
                            О нас ▾
                        </a>
                        <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                            <li><a class="dropdown-item fs-lg-5" href="/team">О компании</a></li>
                            <li><a class="dropdown-item fs-lg-5" href="/team">Наша команда</a></li>
                        </ul>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="/reviews">Отзывы</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="/prices">Цены</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="/photo-reports">Фото отчеты</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="/photo-reports">Видео отчеты</a>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown2" role="button"
                            data-bs-toggle="dropdown" aria-expanded="false">
                            Ремонт квартир ▾
                        </a>
                        <ul class="dropdown-menu" aria-labelledby="navbarDropdown2">
                            <li><a class="dropdown-item fs-lg-5" href="/team">Ремонт квартиры-студии</a></li>
                            <li><a class="dropdown-item fs-lg-5" href="/team">Ремонт однокомнатной квартиры</a></li>
                            <li><a class="dropdown-item fs-lg-5" href="/team">Ремонт двухкомнатной квартиры</a></li>
                            <li><a class="dropdown-item fs-lg-5" href="/team">Ремонт трехкомнатной квартиры</a></li>
                            <li><a class="dropdown-item fs-lg-5" href="/team">Ремонт четырехкомнатной квартиры</a>
                            </li>
                            <li><a class="dropdown-item fs-lg-5" href="/team">Ремонт коттеджей</a></li>
                            <li><a class="dropdown-item fs-lg-5" href="/team">Ремонт и отделка частного дома</a>
                            </li>
                            <li><a class="dropdown-item fs-lg-5" href="/team">Ремонт коммерческих помещений</a></li>
                            <li><a class="dropdown-item fs-lg-5" href="/team">Ремонт офисов</a></li>
                            <li class="dropdown-submenu">
                                <a class="dropdown-item dropdown-toggle fs-lg-5">Ремонт комнат</a>
                                <ul class="dropdown-menu">
                                    <li><a class="dropdown-item fs-lg-5" href="/team">Ремонт гостиной</a></li>
                                    <li><a class="dropdown-item fs-lg-5" href="/team">Ремонт спальни</a></li>
                                    <li><a class="dropdown-item fs-lg-5" href="#">Ремонт детской</a></li>
                                    <li><a class="dropdown-item fs-lg-5" href="#">Ремонт кухни</a></li>
                                    <li><a class="dropdown-item fs-lg-5" href="#">Ремонт ванной</a></li>
                                    <li><a class="dropdown-item fs-lg-5" href="#">Ремонт туалета</a></li>
                                    <li><a class="dropdown-item fs-lg-5" href="#">Ремонт санузла</a></li>
                                    <li><a class="dropdown-item fs-lg-5" href="#">Ремонт балкона</a></li>
                                </ul>
                            </li>
                            <li class="dropdown-submenu">
                                <a class="dropdown-item dropdown-toggle fs-lg-5">Виды ремонта</a>
                                <ul class="dropdown-menu">
                                    <li><a class="dropdown-item fs-lg-5" href="#">Дизайнерский ремонт</a></li>
                                    <li><a class="dropdown-item fs-lg-5" href="#">Ремонт под ключ</a></li>
                                    <li><a class="dropdown-item fs-lg-5" href="#">Капитальный ремонт</a></li>
                                    <li><a class="dropdown-item fs-lg-5" href="#">Евроремонт</a></li>
                                    <li><a class="dropdown-item fs-lg-5" href="#">Косметический ремонт</a></li>
                                    <li><a class="dropdown-item fs-lg-5" href="#">Ремонт в хрущёвке</a></li>
                                    <li><a class="dropdown-item fs-lg-5" href="#">Ремонт в новостройке</a></li>
                                    <li><a class="dropdown-item fs-lg-5" href="#">Черновая отделка</a></li>
                                </ul>
                            </li>
                            <li class="dropdown-submenu">
                                <a class="dropdown-item dropdown-toggle fs-lg-5">Услуги по ремонту</a>
                                <ul class="dropdown-menu">
                                    <li class="dropdown-submenu">
                                        <a class="dropdown-item dropdown-toggle fs-lg-5">Стены</a>
                                        <ul class="dropdown-menu">
                                            <li><a class="dropdown-item fs-lg-5" href="#">Штукатурка стен</a>
                                            </li>
                                            <li><a class="dropdown-item fs-lg-5" href="#">Окраска стен</a></li>
                                        </ul>
                                    </li>
                                    <li class="dropdown-submenu">
                                        <a class="dropdown-item dropdown-toggle fs-lg-5">Ремонт
                                            пола</a>
                                        <ul class="dropdown-menu">
                                            <li><a class="dropdown-item fs-lg-5" href="#">Укладка ламината</a>
                                            </li>
                                            <li><a class="dropdown-item fs-lg-5" href="#">Укладка паркета</a>
                                            </li>
                                        </ul>
                                    </li>
                                </ul>
                            </li>
                        </ul>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="/photo-reports">Дизайн интерьера</a>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button"
                            data-bs-toggle="dropdown" aria-expanded="false">
                            Полезная информация ▾
                        </a>
                        <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                            <li><a class="dropdown-item fs-lg-5     " href="/team">Статьи о ремонте</a></li>
                            <li><a class="dropdown-item fs-lg-5" href="/team">Статьи про дизайн интерьера</a></li>
                            <li><a class="dropdown-item fs-lg-5" href="/team">Вопрос ответ</a></li>
                        </ul>
                    </li>

                    <li class="nav-item">
                        <a class="nav-link" href="/photo-reports">Контакты</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>





    <!-- Content -->
    <div class=" my-5">
        @yield('content')
    </div>

    <!-- Footer -->
    <footer class="footer mt-5">
        <div class="container">
            <div class="row">
                <div class="col-lg-3">
                    <h5>О нас</h5>
                    <img src="{{ asset('path/to/logo.png') }}" alt="Логотип" class="img-fluid mb-2">
                    <div class="social-icons">
                        <a href="#" class="mr-2 bi bi-whatsapp p-1 text-bg-success"
                            style="font-size: 1.3rem; color: white; border-radius: 50%; display: inline-flex; align-items: center; justify-content: center; width: 2.5rem; height: 2.5rem; text-decoration: none;"></a>
                        <a href="#" class="mr-2 bi bi-telegram p-1 text-bg-success"
                            style="font-size: 1.3rem; color: white; border-radius: 50%; display: inline-flex; align-items: center; justify-content: center; width: 2.5rem; height: 2.5rem; text-decoration: none;"></a>
                        <a href="#" class="mr-2 p-1 text-bg-success"
                            style="border-radius: 50%; display: inline-flex; align-items: center; justify-content: center; width: 2.5rem; height: 2.5rem; text-decoration: none;">
                            <img src="{{ asset('img/svg/odnoklassniki-svgrepo-com.svg') }}" alt="Odnoklassniki"
                                style="width: 1.3rem; height: 1.3rem; color: white;">
                        </a>
                        <a href="#" class="mr-2 bi bi bi-youtube p-1 text-bg-success"
                            style="font-size: 1.3rem; color: white; border-radius: 50%; display: inline-flex; align-items: center; justify-content: center; width: 2.5rem; height: 2.5rem; text-decoration: none;"></a>
                        <a href="#" class="mr-2 p-1 text-bg-success"
                            style="border-radius: 50%; display: inline-flex; align-items: center; justify-content: center; width: 2.5rem; height: 2.5rem; text-decoration: none;">
                            <img src="{{ asset('img/svg/vk-svgrepo-com.svg') }}" alt="vk"
                                style="width: 1.5rem; height: 1.3rem; color: white;">
                        </a>
                    </div>
                </div>
                <div class="col-lg-3">
                    <h5>Меню</h5>
                    <ul class="list-unstyled">
                        <li><a href="/" class="text-white">Главная</a></li>
                        <li><a href="/gallery" class="text-white">Галерея</a></li>
                        <li><a href="/reviews" class="text-white">Отзывы</a></li>
                        <li><a href="/prices" class="text-white">Цены</a></li>
                        <li><a href="/contacts" class="text-white">Контакты</a></li>
                    </ul>
                </div>
                <div class="col-lg-3">
                    <h5>График работы</h5>
                    <ul class="list-unstyled">
                        <li>Понедельник 09:00 - 21:00</li>
                        <li>Вторник 09:00 - 21:00</li>
                        <li>Среда 09:00 - 21:00</li>
                        <li>Четверг 09:00 - 21:00</li>
                        <li>Пятница 09:00 - 21:00</li>
                        <li>Суббота 09:00 - 21:00</li>
                        <li>Воскресенье 09:00 - 21:00</li>
                    </ul>
                </div>
                <div class="col-lg-3">
                    <h5>Контакты</h5>
                    <ul class="list-unstyled">
                        <li><i class="fa fa-map-marker"></i> 660075, Красноярск, ул. Железнодорожников, д.17, офис 613
                        </li>
                        <li><i class="fa fa-envelope"></i> a2929448@yandex.ru</li>
                        <li><i class="fa fa-phone"></i> +7 (391) 293-82-26</li>
                        <li><i class="fa fa-phone"></i> +7 (902) 923-82-26</li>
                    </ul>
                </div>
            </div>
            <div class="text-center mt-4">
                <p class="mb-0">2009 - 2024 © ИП Покивайлов. Все права защищены. Запрещено любое копирование с сайта,
                    без согласования с правообладателем.</p>
            </div>
        </div>
    </footer>


    <!-- Подключение Bootstrap JS -->
    <script src="{{ asset('assets/js/main.js') }}"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js"
        integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.min.js"
        integrity="sha384-cuYeSxntonz0PPNlHhBs68uyIAVpIIOZZ5JqeqvYYIcEL727kskC66kF92t6Xl2V" crossorigin="anonymous">
    </script>

    <script></script>

</body>

</html>
