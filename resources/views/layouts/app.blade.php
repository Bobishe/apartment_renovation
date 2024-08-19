<!DOCTYPE html>
<html lang="ru">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title', 'Главная')</title>

    <!-- Подключение Bootstrap -->
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">

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
                    <a href="/" class="logo">
                        <img src="{{ asset('path/to/logo.png') }}" alt="Логотип">
                    </a>
                </div>
                <div class="col-md-6 text-center">
                    <p>Ремонт квартир в Красноярске</p>
                    <small>Ежедневно с 09:00-21:00</small>
                </div>
                <div class="col-md-3 text-right">
                    <div class="d-flex justify-content-end align-items-center">
                        <!-- Социальные иконки -->
                        <a href="#" class="mr-2"><img src="{{ asset('path/to/whatsapp.png') }}"
                                alt="WhatsApp"></a>
                        <a href="#" class="mr-2"><img src="{{ asset('path/to/telegram.png') }}"
                                alt="Telegram"></a>
                        <!-- иконки других соцсетей -->
                        <a href="#" class="btn btn-success">Обратный звонок</a>
                    </div>
                    <p>+7 (391) 293-82-26</p>
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
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.0.7/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

</body>

</html>
