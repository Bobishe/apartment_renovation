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
    <!-- Дополнительные стили -->
    <style>
        .header {
            background-color: #333;
            /* Цвет фона, как на скриншоте */
            padding: 15px 0;
            color: white;
        }

        .header .logo img {
            max-height: 50px;
        }

        .header .nav-link {
            color: white;
        }

        .header .nav-link:hover {
            color: #ddd;
        }

        .footer {
            background-color: #333;
            color: white;
            padding: 10px 0;
            text-align: center;
        }
    </style>
</head>

<body>

    <!-- Header -->
    <header class="header">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-md-3">
                    <a href="/index" class="logo">
                        <img src="{{ asset('img/logo.png') }}" alt="Логотип">
                    </a>
                </div>
                <div class="col-md-5 text-center">
                    <p class="fs-4 mb-0">Ремонт квартир в Красноярске</p>
                    <small>Ежедневно 09:00-21:00</small>
                </div>
                <div class="col-md-2 text-right mt-3">
                    <!-- Социальные иконки -->
                    <a href="#" class="mr-2 bi bi-whatsapp p-1 text-bg-success"
                        style="font-size: 1.3rem; color: white; border-radius: 50%; display: inline-flex; align-items: center; justify-content: center; width: 2.5rem; height: 2.5rem; text-decoration: none;"></a>
                    <a href="#" class="mr-2 bi bi-telegram p-1 text-bg-success"
                        style="font-size: 1.3rem; color: white; border-radius: 50%; display: inline-flex; align-items: center; justify-content: center; width: 2.5rem; height: 2.5rem; text-decoration: none;"></a>
                    <a href="#" class="mr-2 bi bi bi-youtube p-1 text-bg-success"
                        style="font-size: 1.3rem; color: white; border-radius: 50%; display: inline-flex; align-items: center; justify-content: center; width: 2.5rem; height: 2.5rem; text-decoration: none;"></a>
                    <a href="#" class="mr-2 p-1 text-bg-success"
                        style="border-radius: 50%; display: inline-flex; align-items: center; justify-content: center; width: 2.5rem; height: 2.5rem; text-decoration: none;">
                        <img src="{{ asset('img/svg/odnoklassniki-svgrepo-com.svg') }}" alt="Odnoklassniki"
                            style="width: 1.3rem; height: 1.3rem; color: white;">
                    </a>


                </div>
                <div class="col-md-2 text-right ">
                    <div class="d-flex justify-content-end align-items-center">


                    </div>
                    <p>+7 (391) 293-82-26</p>
                    <a href="#" class="btn btn-success">Обратный звонок</a>
                </div>

            </div>
            <nav class="navbar navbar-expand-lg navbar-dark">
                <div class="collapse navbar-collapse justify-content-center">
                    <ul class="navbar-nav">
                        <li class="nav-item">
                            <a class="nav-link" href="/">Главная</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="/about">О нас</a>
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
                        <!-- Другие пункты меню -->
                    </ul>
                </div>
            </nav>
        </div>
    </header>

    <!-- Content -->
    <div class="container my-5">
        @yield('content')
    </div>

    <!-- Footer -->
    <footer class="footer mt-5">
        <div class="container">
            <div class="row">
                <div class="col-md-3">
                    <h5>О нас</h5>
                    <img src="{{ asset('path/to/logo.png') }}" alt="Логотип" class="img-fluid mb-2">
                    <div class="social-icons">
                        <a href="#"><img src="{{ asset('path/to/vk.png') }}" alt="VK"></a>
                        <a href="#"><img src="{{ asset('path/to/ok.png') }}" alt="OK"></a>
                        <a href="#"><img src="{{ asset('path/to/youtube.png') }}" alt="YouTube"></a>
                    </div>
                </div>
                <div class="col-md-3">
                    <h5>Меню</h5>
                    <ul class="list-unstyled">
                        <li><a href="/" class="text-white">Главная</a></li>
                        <li><a href="/gallery" class="text-white">Галерея</a></li>
                        <li><a href="/reviews" class="text-white">Отзывы</a></li>
                        <li><a href="/prices" class="text-white">Цены</a></li>
                        <li><a href="/contacts" class="text-white">Контакты</a></li>
                    </ul>
                </div>
                <div class="col-md-3">
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
                <div class="col-md-3">
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
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js"
        integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.min.js"
        integrity="sha384-cuYeSxntonz0PPNlHhBs68uyIAVpIIOZZ5JqeqvYYIcEL727kskC66kF92t6Xl2V" crossorigin="anonymous">
    </script>

</body>

</html>
