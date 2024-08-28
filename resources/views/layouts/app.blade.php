<!DOCTYPE html>
<html lang="ru">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title', 'Главная')</title>

    <!-- Подключение Bootstrap -->
    <link rel="stylesheet" href="{{ asset('assets/lib/bootstrap.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/lib/bootstrap.js') }}">


    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.0/font/bootstrap-icons.css" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('assets/css/adaptive.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/main.css') }}">


</head>

<style>
    .header {
        width: 100%;
        background-image: url("{{ asset('img/texturefabrik_dust-02-scaled.jpg') }}");
        background-size: cover
    }
</style>

<body>


    <x-form />


    <!-- Header -->
    <header class="header mt-0 pt-lg-5 pb-5" style="z-index: ">
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
                        style="background-color: #00a884;font-size: 1.3rem; color: white; border-radius: 50%; display: inline-flex; align-items: center; justify-content: center; width: 2.5rem; height: 2.5rem; text-decoration: none;"></a>
                    <a href="https://tlgg.ru/remont_kvartir_24" class="mr-2 bi bi-telegram p-1 text-bg-success"
                        style="background-color: #00a884;font-size: 1.3rem; color: white; border-radius: 50%; display: inline-flex; align-items: center; justify-content: center; width: 2.5rem; height: 2.5rem; text-decoration: none;"></a>
                    <a href="https://ok.ru/group/60443121877243" class="mr-2 p-1 text-bg-success"
                        style="background-color: #00a884;border-radius: 50%; display: inline-flex; align-items: center; justify-content: center; width: 2.5rem; height: 2.5rem; text-decoration: none;">
                        <img src="{{ asset('img/svg/odnoklassniki-svgrepo-com.svg') }}" alt="Odnoklassniki"
                            style="width: 1.3rem; height: 1.3rem; color: white;">
                    </a>
                    <a href="https://www.youtube.com/channel/UC4-n2VGT67KX92gBBsPtMSA"
                        class="mr-2 bi bi bi-youtube p-1 text-bg-success"
                        style="background-color: #00a884;font-size: 1.3rem; color: white; border-radius: 50%; display: inline-flex; align-items: center; justify-content: center; width: 2.5rem; height: 2.5rem; text-decoration: none;"></a>
                    <a href="https://vk.com/remontkvartirkrasnoyarsk124" class="mr-2 p-1 text-bg-success"
                        style="background-color: #00a884;border-radius: 50%; display: inline-flex; align-items: center; justify-content: center; width: 2.5rem; height: 2.5rem; text-decoration: none;">
                        <img src="{{ asset('img/svg/vk-svgrepo-com.svg') }}" alt="vk"
                            style="width: 1.5rem; height: 1.3rem; color: white;">
                    </a>


                </div>
                <div class="col-lg-2 text-right ">
                    <p class="fs-5 mb-1 fw-bold ">+7 (391) 293-82-26</p>
                    <a href="#" class="btn btn-success" data-bs-toggle="modal"
                        data-bs-target="#callbackModal">Обратный звонок</a>
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
                <ul class="navbar-nav mx-auto text-uppercase navbar-nav-scroll" style="--bs-scroll-height: 75vh;">
                    <li class="nav-item">
                        <a class="nav-link" href="/index">Главная</a>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button"
                            data-bs-toggle="dropdown" aria-expanded="false">
                            О нас ▾
                        </a>
                        <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                            <li><a class="dropdown-item " href="/about">О компании</a></li>
                            <li><a class="dropdown-item " href="/team">Наша команда</a></li>
                        </ul>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="/otzyvy">Отзывы</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="/prices">Цены</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="/project">Фото отчеты</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="/video-otchety-o-prodelannoj-rabote">Видео отчеты</a>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown2" role="button"
                            data-bs-toggle="dropdown" aria-expanded="false">
                            Ремонт квартир ▾
                        </a>
                        <ul class="dropdown-menu" aria-labelledby="navbarDropdown2">
                            <li><a class="dropdown-item " href="/studio_apartment">Ремонт квартиры-студии</a></li>
                            <li><a class="dropdown-item " href="/studio_apartment1">Ремонт однокомнатной квартиры</a>
                            </li>
                            <li><a class="dropdown-item " href="/remont-dvuhkomnatnoj">Ремонт
                                    двухкомнатной квартиры</a></li>
                            <li><a class="dropdown-item " href="/remont-trehkomnatnoj">Ремонт трехкомнатной
                                    квартиры</a></li>
                            <li><a class="dropdown-item " href="/remont-chetyrehkomnatnoj">Ремонт четырехкомнатной
                                    квартиры</a>
                            </li>
                            <li><a class="dropdown-item " href="/remont-v-kottedzhe">Ремонт коттеджей</a></li>
                            <li><a class="dropdown-item " href="/remont-doma">Ремонт и отделка частного дома</a>
                            </li>
                            <li><a class="dropdown-item " href="/remont-kommercheskih-pomeshhenij">Ремонт коммерческих
                                    помещений</a></li>
                            <li><a class="dropdown-item " href="/remont-ofisov">Ремонт офисов</a></li>
                            <li class="dropdown-submenu">
                                <a class="dropdown-item dropdown-toggle ">Ремонт комнат</a>
                                <ul class="dropdown-menu">
                                    <li><a class="dropdown-item " href="/remont-gostinoj">Ремонт гостиной</a></li>
                                    <li><a class="dropdown-item " href="/remont-spalni">Ремонт спальни</a></li>
                                    <li><a class="dropdown-item " href="/remont-detskoj">Ремонт детской</a></li>
                                    <li><a class="dropdown-item " href="/remont-kuhni">Ремонт кухни</a></li>
                                    <li><a class="dropdown-item " href="/remont-vannoj">Ремонт ванной</a></li>
                                    <li><a class="dropdown-item " href="/remont-tualeta">Ремонт туалета</a></li>
                                    <li><a class="dropdown-item " href="/remont-sanuzla">Ремонт санузла</a></li>
                                    <li><a class="dropdown-item " href="/remont-balkona">Ремонт балкона</a></li>
                                </ul>
                            </li>
                            <li class="dropdown-submenu">
                                <a class="dropdown-item dropdown-toggle ">Виды ремонта</a>
                                <ul class="dropdown-menu">
                                    <li><a class="dropdown-item " href="/dizajnerskij-remont-kvartir">Дизайнерский
                                            ремонт</a></li>
                                    <li><a class="dropdown-item " href="/remont-pod-klyuch">Ремонт под ключ</a></li>
                                    <li><a class="dropdown-item " href="/kapitalnyj-remont">Капитальный ремонт</a>
                                    </li>
                                    <li><a class="dropdown-item " href="/evroremont">Евроремонт</a></li>
                                    <li><a class="dropdown-item " href="/kosmeticheskij-remont-kvartir">Косметический
                                            ремонт</a></li>
                                    <li><a class="dropdown-item " href="/remont-v-hrushhyovke">Ремонт в хрущёвке</a>
                                    </li>
                                    <li><a class="dropdown-item " href="/remont-v-novostrojke">Ремонт в
                                            новостройке</a></li>
                                    <li><a class="dropdown-item " href="/chernovaya-otdelka-2">Черновая отделка</a>
                                    </li>
                                </ul>
                            </li>
                            <li class="dropdown-submenu">
                                <a class="dropdown-item dropdown-toggle ">Услуги по ремонту</a>
                                <ul class="dropdown-menu">
                                    <li class="dropdown-submenu">
                                        <a class="dropdown-item dropdown-toggle ">Стены</a>
                                        <ul class="dropdown-menu">
                                            <li><a class="dropdown-item "
                                                    href="/vyravnivanie-sten-shtukaturkoj">Штукатурка стен</a>
                                            </li>
                                            <li><a class="dropdown-item " href="/shpaklyovka-sten">Шпаклевка стен</a>
                                            </li>
                                            <li><a class="dropdown-item " href="/poklejka-oboev-2">Поклейка обоев</a>
                                            </li>
                                            <li><a class="dropdown-item " href="/dekorativnaya-shtukaturka">Окраска
                                                    стен</a></li>
                                        </ul>
                                    </li>
                                    <li class="dropdown-submenu">
                                        <a class="dropdown-item dropdown-toggle ">Ремонт
                                            пола</a>
                                        <ul class="dropdown-menu">
                                            <li><a class="dropdown-item " href="/montazh-tyoplogo-pola">Монтаж теплого
                                                    пола</a>
                                            </li>
                                            <li><a class="dropdown-item " href="/styazhka-pola">Стяжка пола</a>
                                            </li>
                                            <li><a class="dropdown-item " href="/ustrojstvo-nalivnogo-pola">Устройство
                                                    наливного пола</a>
                                            </li>
                                            <li><a class="dropdown-item " href="/ukladka-linoleuma">Укладка
                                                    линолеума</a>
                                            </li>
                                            <li><a class="dropdown-item " href="/ukladka-laminata-2">Укладка ламината
                                                </a>
                                            </li>
                                        </ul>
                                    </li>
                                </ul>
                            </li>
                        </ul>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="/dizajn-intererov">Дизайн интерьера</a>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button"
                            data-bs-toggle="dropdown" aria-expanded="false">
                            Полезная информация ▾
                        </a>
                        <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                            <li><a class="dropdown-item      " href="/blog">Статьи о ремонте</a></li>
                            <li><a class="dropdown-item " href="/o-dizajne">Статьи про дизайн интерьера</a></li>
                            <li><a class="dropdown-item " href="/vopros-otvet">Вопрос ответ</a></li>
                        </ul>
                    </li>

                    <li class="nav-item">
                        <a class="nav-link" href="/kontakty">Контакты</a>
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
    <footer class="bg-dark text-light py-4 ">
        <div class="container text-md-center">
            <div class="row text-md-center">
                <div class="col-md-3 text-md-center">

                    <div class="mb-3">
                        <img src="{{ asset('img/logo.png') }}" class="w-75" alt="Логотип">
                    </div>
                    <div class="social-icons">
                        <a href="https://wa.me/79029238226?text=" class="mr-2 bi bi-whatsapp p-1 text-bg-success"
                            style="background-color: #157347;font-size: 1.3rem; color: white; border-radius: 50%; display: inline-flex; align-items: center; justify-content: center; width: 2.5rem; height: 2.5rem; text-decoration: none;"></a>
                        <a href="https://tlgg.ru/remont_kvartir_24" class="mr-2 bi bi-telegram p-1 text-bg-success"
                            style="background-color: #157347;font-size: 1.3rem; color: white; border-radius: 50%; display: inline-flex; align-items: center; justify-content: center; width: 2.5rem; height: 2.5rem; text-decoration: none;"></a>
                        <a href="https://ok.ru/group/60443121877243" class="mr-2 p-1 text-bg-success"
                            style="background-color: #157347;border-radius: 50%; display: inline-flex; align-items: center; justify-content: center; width: 2.5rem; height: 2.5rem; text-decoration: none;">
                            <img src="{{ asset('img/svg/odnoklassniki-svgrepo-com.svg') }}" alt="Odnoklassniki"
                                style="width: 1.3rem; height: 1.3rem; color: white;">
                        </a>
                        <a href="https://www.youtube.com/channel/UC4-n2VGT67KX92gBBsPtMSA"
                            class="mr-2 bi bi bi-youtube p-1 text-bg-success"
                            style="background-color: #157347;font-size: 1.3rem; color: white; border-radius: 50%; display: inline-flex; align-items: center; justify-content: center; width: 2.5rem; height: 2.5rem; text-decoration: none;"></a>
                        <a href="https://vk.com/remontkvartirkrasnoyarsk124" class="mr-2 p-1 text-bg-success"
                            style="background-color: #157347;border-radius: 50%; display: inline-flex; align-items: center; justify-content: center; width: 2.5rem; height: 2.5rem; text-decoration: none;">
                            <img src="{{ asset('img/svg/vk-svgrepo-com.svg') }}" alt="vk"
                                style="width: 1.5rem; height: 1.3rem; color: white;">
                        </a>
                    </div>
                </div>
                <div class="col-md-2">
                    <h5 class="text-uppercase fw-bold mb-4">Меню</h5>
                    <ul class="list-unstyled">
                        <li><a href="#" class="text-light">Главная</a></li>
                        <li><a href="#" class="text-light">Галерея</a></li>
                        <li><a href="#" class="text-light">Отзывы</a></li>
                        <li><a href="#" class="text-light">Цены</a></li>
                        <li><a href="#" class="text-light">Контакты</a></li>
                    </ul>
                </div>
                <div class="col-md-3">
                    <h5 class="text-uppercase fw-bold mb-4">График работы</h5>
                    <ul class="list-unstyled">
                        <li>Понедельник: 09:00 - 21:00</li>
                        <li>Вторник: 09:00 - 21:00</li>
                        <li>Среда: 09:00 - 21:00</li>
                        <li>Четверг: 09:00 - 21:00</li>
                        <li>Пятница: 09:00 - 21:00</li>
                        <li>Суббота: 09:00 - 21:00</li>
                        <li>Воскресенье: 09:00 - 21:00</li>
                    </ul>
                </div>
                <div class="col-md-4">
                    <h5 class="text-uppercase fw-bold mb-4">Контакты</h5>
                    <ul class="list-unstyled">
                        <li><i class="bi bi-geo-alt-fill"></i> 660075, Красноярск, ул. Железнодорожников, д.17, офис
                            613</li>
                        <li><i class="bi bi-envelope-fill"></i> a2929448@yandex.ru</li>
                        <li><i class="bi bi-telephone-fill"></i> +7 (391) 293-82-26</li>
                        <li><i class="bi bi-telephone-fill"></i> +7 (902) 923-82-26</li>
                    </ul>
                </div>
            </div>
        </div>
    </footer>



    <!-- Подключение Bootstrap JS -->
    <script src="{{ asset('assets/js/main.js') }}"></script>
    <script src="{{ asset('assets/lib/bootstrap.js') }}"></script>


    <script></script>

</body>

</html>
