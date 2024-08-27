@extends('layouts.app')

@section('title', $page->title)

@section('content')

    <style>
        .background-fixed {
            background-image: url('{{ asset('img/fon1.jpg') }}');
        }
    </style>

    <div class="container-fluid">
        <div class="background-fixed">

        </div>

    </div>



    <div class="container">


        {!! $page->body !!}

        <div class="container mt-5">
            <h2 class="text-center text-danger fw-bold mb-4">ФОТОГАЛЕРЕЯ НАШИХ РАБОТ</h2>
            <div class="row mt-5">
                <div class="col-md-4 d-flex align-items-stretch">
                    <div class="card mb-4 shadow-sm">
                        <!-- Слайдер изображений -->
                        <div id="carousel-1" class="carousel slide" data-bs-ride="carousel" data-bs-interval="4000">
                            <div class="carousel-inner" style="height: 250px; overflow: hidden;">
                                <div class="carousel-item active">
                                    <img src="https://via.placeholder.com/300x200" class="d-block w-100 h-100"
                                        alt="Работа 2" style="object-fit: cover;">
                                </div>
                                <div class="carousel-item">
                                    <img src="https://via.placeholder.com/300x200" class="d-block w-100 h-100"
                                        alt="Работа 2" style="object-fit: cover;">
                                </div>
                                <div class="carousel-item">
                                    <img src="https://via.placeholder.com/300x200" class="d-block w-100 h-100"
                                        alt="Работа 2" style="object-fit: cover;">
                                </div>
                            </div>
                            <button class="carousel-control-prev" type="button" data-bs-target="#carousel-1"
                                data-bs-slide="prev">
                                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                                <span class="visually-hidden">Previous</span>
                            </button>
                            <button class="carousel-control-next" type="button" data-bs-target="#carousel-1"
                                data-bs-slide="next">
                                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                                <span class="visually-hidden">Next</span>
                            </button>
                        </div>
                        <!-- Текстовая информация -->
                        <div class="card-body text-center d-flex flex-column">
                            <h5 class="card-title text-danger fw-bold fs-4">Ремонт квартиры под ключ</h5>
                            <p class="card-text fs-5">ул. 78 Добровольческой Бригады 25.</p>
                            <p class="card-text fs-5">Площадь: 97,7 м<sup>2</sup></p>
                            <div class="mt-auto">
                                <a href="#" class="btn btn-success fs-5">Посмотреть</a>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-md-4 d-flex align-items-stretch">
                    <div class="card mb-4 shadow-sm">
                        <!-- Слайдер изображений -->
                        <div id="carousel-2" class="carousel slide" data-bs-ride="carousel" data-bs-interval="4000">
                            <div class="carousel-inner" style="height: 250px; overflow: hidden;">
                                <div class="carousel-item active">
                                    <img src="https://via.placeholder.com/300x200" class="d-block w-100 h-100"
                                        alt="Работа 2" style="object-fit: cover;">
                                </div>
                                <div class="carousel-item">
                                    <img src="https://via.placeholder.com/300x200" class="d-block w-100 h-100"
                                        alt="Работа 2" style="object-fit: cover;">
                                </div>
                                <div class="carousel-item">
                                    <img src="https://via.placeholder.com/300x200" class="d-block w-100 h-100"
                                        alt="Работа 2" style="object-fit: cover;">
                                </div>
                            </div>
                            <button class="carousel-control-prev" type="button" data-bs-target="#carousel-2"
                                data-bs-slide="prev">
                                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                                <span class="visually-hidden">Previous</span>
                            </button>
                            <button class="carousel-control-next" type="button" data-bs-target="#carousel-2"
                                data-bs-slide="next">
                                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                                <span class="visually-hidden">Next</span>
                            </button>
                        </div>
                        <!-- Текстовая информация -->
                        <div class="card-body text-center d-flex flex-column">
                            <h5 class="card-title text-danger fw-bold fs-4">Дизайнерский ремонт квартиры</h5>
                            <p class="card-text fs-5">ул. Партизана Железняка 48Ж.</p>
                            <p class="card-text fs-5">Площадь: 120 м<sup>2</sup></p>
                            <div class="mt-auto">
                                <a href="#" class="btn btn-success fs-5">Посмотреть</a>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-md-4 d-flex align-items-stretch">
                    <div class="card mb-4 shadow-sm">
                        <!-- Слайдер изображений -->
                        <div id="carousel-3" class="carousel slide" data-bs-ride="carousel" data-bs-interval="4000">
                            <div class="carousel-inner" style="height: 250px; overflow: hidden;">
                                <div class="carousel-item active">
                                    <img src="https://via.placeholder.com/300x200" class="d-block w-100 h-100"
                                        alt="Работа 3" style="object-fit: cover;">
                                </div>
                                <div class="carousel-item">
                                    <img src="https://via.placeholder.com/300x200" class="d-block w-100 h-100"
                                        alt="Работа 3" style="object-fit: cover;">
                                </div>
                                <div class="carousel-item">
                                    <img src="https://via.placeholder.com/300x200" class="d-block w-100 h-100"
                                        alt="Работа 3" style="object-fit: cover;">
                                </div>
                            </div>
                            <button class="carousel-control-prev" type="button" data-bs-target="#carousel-3"
                                data-bs-slide="prev">
                                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                                <span class="visually-hidden">Previous</span>
                            </button>
                            <button class="carousel-control-next" type="button" data-bs-target="#carousel-3"
                                data-bs-slide="next">
                                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                                <span class="visually-hidden">Next</span>
                            </button>
                        </div>
                        <!-- Текстовая информация -->
                        <div class="card-body text-center d-flex flex-column">
                            <h5 class="card-title text-danger fw-bold fs-4">Ремонт квартиры в новостройке</h5>
                            <p class="card-text fs-5">ул. Петра Подзолкова 4.</p>
                            <p class="card-text fs-5">Площадь: 200 м<sup>2</sup></p>
                            <div class="mt-auto">
                                <a href="#" class="btn btn-success fs-5">Посмотреть</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>



    </div>

    <div class="container-fluid my-5 custom-container">
        <h2 class="text-center text-danger fw-bold mb-4 text-uppercase">Видео отчеты о выполненном ремонте</h2>
        <div class="container mx-auto row mt-5 ">
            <div class="col-md-4 d-flex">
                <div class="card mb-4 shadow-sm flex-fill d-flex flex-column card-custom">
                    <!-- Видеофрейм -->
                    <div class="ratio ratio-16x9">
                        <iframe src="https://www.youtube.com/embed/_6lIyPwlsIw"
                            title="Дизайнерский ремонт евродвушки в Красноярске" frameborder="0"
                            allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share"
                            allowfullscreen></iframe>
                    </div>
                    <!-- Текстовая информация -->
                    <div class="card-body text-center mt-auto">
                        <h5 class="card-title fw-bold">Дизайнерский ремонт квартиры</h5>
                        <hr class="mx-auto w-25 mt-4 text-danger">
                        <p class="card-text" style="font-size: 18px">Красноярск, ул. Авиаторов, 39<br>Ремонт квартиры
                            евро двушки под ключ.</p>
                    </div>
                </div>
            </div>
            <div class="col-md-4 d-flex">
                <div class="card mb-4 shadow-sm flex-fill d-flex flex-column card-custom">
                    <!-- Видеофрейм -->
                    <div class="ratio ratio-16x9">
                        <iframe src="https://www.youtube.com/embed/n-QRGdWvdl8"
                            title="Дизайн и ремонт студии танцев в Красноярске" frameborder="0"
                            allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share"
                            allowfullscreen></iframe>
                    </div>
                    <!-- Текстовая информация -->
                    <div class="card-body text-center mt-auto">
                        <h5 class="card-title fw-bold">Ремонт танцевальной студии</h5>
                        <hr class="mx-auto w-25 mt-4 text-danger">
                        <p class="card-text" style="font-size: 18px">Красноярск, ул. Свободный Проспект,
                            28<br>Дизайнерский ремонт студии танца «RAKESA».</p>
                    </div>
                </div>
            </div>
            <div class="col-md-4 d-flex">
                <div class="card mb-4 shadow-sm flex-fill d-flex flex-column card-custom">
                    <!-- Видеофрейм -->
                    <div class="ratio ratio-16x9">
                        <iframe src="https://www.youtube.com/embed/3bz-hFYQdeY"
                            title="Комплексный ремонт двухкомнатной квартиры в новостройке" frameborder="0"
                            allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share"
                            allowfullscreen></iframe>
                    </div>
                    <!-- Текстовая информация -->
                    <div class="card-body text-center mt-auto">
                        <h5 class="card-title fw-bold">Ремонт двухкомнатной квартиры</h5>
                        <hr class="mx-auto mt-4 w-25 text-danger">
                        <p class="card-text" style="font-size: 18px">Красноярск, ул.Партизана Железняка, 48Д<br>Ремонт
                            квартиры в ЖК Скандис.</p>
                    </div>
                </div>
            </div>
        </div>
        <div class="text-center">
            <a href="#" class="btn btn-success mt-3  pulsing-btn" style="background-color: #00a884;">Посмотреть все
                видео отчеты</a>
        </div>
    </div>


    <x-reviews />

    <div class="container my-5">
        <h2 class="text-center text-danger fw-bold mb-4 text-uppercase">Ремонт квартир</h2>
        <p class="text-center fs-5">
            Компания ИП Покивайлов не первый год оказывает услуги в сфере ремонта квартир, коттеджей и других помещений
            в
            Красноярске. Мы выполняем ремонт под ключ: демонтаж, ремонтно-отделочные работы, приобретение и доставка
            требуемых материалов, вывоз строительного мусора и уборку помещения, при этом мы не привлекаем работников со
            стороны.
        </p>
    </div>




    {{-- цены --}}
    <div class="container-fluid my-5 custom-container">
        <h2 class="text-center fw-bold mb-4">Цены на наши услуги</h2>
        <p class="text-center text-muted mb-5 fs-6">
            Закономерно — клиентов интересует цена предстоящего преображения своего жилья. Мы указали среднюю стоимость
            за
            м<sup>2</sup> на каждый вид ремонта.
        </p>
        <div class="row container mx-auto">
            <div class="col-md-3">
                <div class="card h-100">
                    <img src="{{ asset('img/price/kompleksnyj-remont-trehkomnatnoj-kvartiry1.jpg') }}"
                        class="card-img-top" alt="Ремонт квартир Красноярск">
                    <div class="card-body text-center">
                        <h5 class="card-title fw-bold">РЕМОНТ КВАРТИР КРАСНОЯРСК</h5>
                        <p class="card-text fs-6">от 5000 руб.<br>за КВ.М.</p>
                        <a href="#" data-bs-toggle="modal" data-bs-target="#callbackModal"
                            class="btn btn-success">Оставить заявку</a>
                    </div>
                </div>
            </div>
            <div class="col-md-3">
                <div class="card h-100">
                    <img src="{{ asset('img/price/q2-1.jpg') }}" class="card-img-top" alt="Ремонт квартир под ключ">
                    <div class="card-body text-center">
                        <h5 class="card-title fw-bold">РЕМОНТ КВАРТИР ПОД КЛЮЧ</h5>
                        <p class="card-text fs-6">от 8000 руб.<br>за КВ.М.</p>
                        <a href="#" data-bs-toggle="modal" data-bs-target="#callbackModal"
                            class="btn btn-success">Оставить заявку</a>
                    </div>
                </div>
            </div>
            <div class="col-md-3">
                <div class="card h-100">
                    <img src="{{ asset('img/price/q3-1.jpg') }}" class="card-img-top" alt="Капитальный ремонт">
                    <div class="card-body text-center">
                        <h5 class="card-title fw-bold" style="min-height: 50px">КАПИТАЛЬНЫЙ РЕМОНТ</h5>
                        <p class="card-text fs-6">от 9000 руб.<br>за КВ.М.</p>
                        <a href="#" data-bs-toggle="modal" data-bs-target="#callbackModal"
                            class="btn btn-success">Оставить заявку</a>
                    </div>
                </div>
            </div>
            <div class="col-md-3">
                <div class="card h-100">
                    <img src="{{ asset('img/price/q6-e1629023355246-1.jpg') }}" class="card-img-top"
                        alt="Ремонт по дизайн-проекту">
                    <div class="card-body text-center">
                        <h5 class="card-title fw-bold">РЕМОНТ ПО ДИЗАЙН-ПРОЕКТУ</h5>
                        <p class="card-text fs-6">от 15000 руб.<br>за КВ.М.</p>
                        <a href="#" data-bs-toggle="modal" data-bs-target="#callbackModal"
                            class="btn btn-success">Оставить заявку</a>
                    </div>
                </div>
            </div>

            <!-- Additional cards -->
            <div class="col-md-3 mt-4">
                <div class="card h-100">
                    <img src="{{ asset('img/price/q5-1.jpg') }}" class="card-img-top" alt="Косметический ремонт">
                    <div class="card-body text-center">
                        <h5 class="card-title fw-bold">КОСМЕТИЧЕСКИЙ РЕМОНТ</h5>
                        <p class="card-text fs-6">от 3500 руб.<br>за КВ.М.</p>
                        <a href="#" data-bs-toggle="modal" data-bs-target="#callbackModal"
                            class="btn btn-success">Оставить заявку</a>
                    </div>
                </div>
            </div>
            <div class="col-md-3 mt-4">
                <div class="card h-100">
                    <img src="{{ asset('img/price/q4-1.jpg') }}" class="card-img-top"
                        alt="Комплексный ремонт в новостройке">
                    <div class="card-body text-center">
                        <h5 class="card-title fw-bold">КОМПЛЕКСНЫЙ РЕМОНТ В НОВОСТРОЙКЕ</h5>
                        <p class="card-text fs-6">от 6500 руб.<br>за КВ.М.</p>
                        <a href="#" data-bs-toggle="modal" data-bs-target="#callbackModal"
                            class="btn btn-success">Оставить заявку</a>
                    </div>
                </div>
            </div>
            <div class="col-md-3 mt-4">
                <div class="card h-100">
                    <img src="{{ asset('img/price/q7-1.jpg') }}" class="card-img-top" alt="Евроремонт">
                    <div class="card-body text-center">
                        <h5 class="card-title fw-bold">ЕВРОРЕМОНТ</h5>
                        <p class="card-text fs-6">от 13000 руб.<br>за КВ.М.</p>
                        <a href="#" data-bs-toggle="modal" data-bs-target="#callbackModal"
                            class="btn btn-success">Оставить заявку</a>
                    </div>
                </div>
            </div>
            <div class="col-md-3 mt-4">
                <div class="card h-100">
                    <img src="{{ asset('img/price/byudzhetnyj-remont1.jpg') }}" class="card-img-top"
                        alt="Бюджетный ремонт">
                    <div class="card-body text-center">
                        <h5 class="card-title fw-bold">БЮДЖЕТНЫЙ РЕМОНТ</h5>
                        <p class="card-text fs-6">от 5000 руб.<br>за КВ.М.</p>
                        <a href="#" data-bs-toggle="modal" data-bs-target="#callbackModal"
                            class="btn btn-success">Оставить заявку</a>
                    </div>
                </div>
            </div>
            <div class="col-md-3 mt-4">
                <div class="card h-100">
                    <img src="{{ asset('img/price/chernovaya-otdelka1.jpg') }}" class="card-img-top"
                        alt="Черновая отделка квартир">
                    <div class="card-body text-center">
                        <h5 class="card-title fw-bold">ЧЕРНОВАЯ ОТДЕЛКА КВАРТИР</h5>
                        <p class="card-text fs-6">от 4500 руб.<br>за КВ.М.</p>
                        <a href="#" data-bs-toggle="modal" data-bs-target="#callbackModal"
                            class="btn btn-success">Оставить заявку</a>
                    </div>
                </div>
            </div>
            <div class="col-md-3 mt-4">
                <div class="card h-100">
                    <img src="{{ asset('img/price/chistovaya-otdelka1.jpg') }}" class="card-img-top"
                        alt="Чистовая отделка квартир">
                    <div class="card-body text-center">
                        <h5 class="card-title fw-bold">ЧИСТОВАЯ ОТДЕЛКА КВАРТИР</h5>
                        <p class="card-text fs-6">от 3500 руб.<br>за КВ.М.</p>
                        <a href="#" data-bs-toggle="modal" data-bs-target="#callbackModal"
                            class="btn btn-success">Оставить заявку</a>
                    </div>
                </div>
            </div>
            <div class="col-md-3 mt-4">
                <div class="card h-100">
                    <img src="{{ asset('img/price/razdelnyj-sanuzel1.jpg') }}" class="card-img-top"
                        alt="Ремонт ванной комнаты и туалета">
                    <div class="card-body text-center">
                        <h5 class="card-title fw-bold">РЕМОНТ ВАННОЙ КОМНАТЫ И ТУАЛЕТА</h5>
                        <p class="card-text fs-6">от 170000 руб.<br>комплекс</p>
                        <a href="#" data-bs-toggle="modal" data-bs-target="#callbackModal"
                            class="btn btn-success">Оставить заявку</a>
                    </div>
                </div>
            </div>
            <div class="col-md-3 mt-4">
                <div class="card h-100">
                    <img src="{{ asset('img/price/sovmeshhennyj-sanuzel1.jpg') }}" class="card-img-top"
                        alt="Ремонт совмещенного санузла">
                    <div class="card-body text-center">
                        <h5 class="card-title fw-bold">РЕМОНТ СОВМЕЩЕННОГО САНУЗЛА</h5>
                        <p class="card-text fs-6">от 160000 руб.<br>комплекс</p>
                        <a href="#" data-bs-toggle="modal" data-bs-target="#callbackModal"
                            class="btn btn-success">Оставить заявку</a>
                    </div>
                </div>
            </div>
        </div>
        <p class="container text-center mt-5">Цена указана за ремонт без учета материалов.</br>

            Оказываем услуги по ремонту и дизайну квартир, домов и коттеджей только по Красноярску.</p>
    </div>


    <div class="container my-5">
        <h2 class="text-center text-danger fw-bold mb-4 text-uppercase">Дизайн интерьера квартир Красноярск</h2>
        <p class="text-center">Наша организация занимается разработкой уникальных <a href="#">дизайн-проектов</a>
            интерьера квартир в Красноярске.</p>

        <div class="row text-center mt-5">
            <div class="col-md-4">
                <div class="card shadow-sm h-100">
                    <div class="card-header bg-success text-white fw-bold fs-4">
                        Дизайн проект под ключ
                    </div>
                    <div class="card-body">
                        <h2 class="display-4 fw-bold">₽ от 2400</h2>
                        <p class="fs-5">за КВ. М.</p>
                        <hr>
                        <p class="fs-5"><i class="bi bi-check-circle"></i> 1,5 месяца</p>
                    </div>
                </div>
            </div>

            <div class="col-md-4">
                <div class="card shadow-sm h-100">
                    <div class="card-header bg-success text-white fw-bold fs-4">
                        Дизайн проект Минимальный
                    </div>
                    <div class="card-body">
                        <h2 class="display-4 fw-bold">₽ 1200</h2>
                        <p class="fs-5">за КВ. М.</p>
                        <hr>
                        <p class="fs-5"><i class="bi bi-check-circle "></i> 1 месяц</p>
                    </div>
                </div>
            </div>

            <div class="col-md-4">
                <div class="card shadow-sm h-100">
                    <div class="card-header bg-success text-white fw-bold fs-4">
                        Планировочное решение
                    </div>
                    <div class="card-body">
                        <h2 class="display-4 fw-bold">₽ от 600</h2>
                        <p class="fs-5">за КВ. М.</p>
                        <hr>
                        <p class="fs-5"><i class="bi bi-check-circle"></i> 1,5 недели</p>
                    </div>
                </div>
            </div>
        </div>

        <div class="text-center mt-4">
            <a href="#" data-bs-toggle="modal" data-bs-target="#callbackModal"
                class="btn btn-success mx-2">Оставить заявку</a>
            <a href="#" class="btn btn-outline-success mx-2">Подробнее</a>
            <p class="mt-3 text-muted fs-6">*Сроки могут варьироваться в зависимости от сложности работ</p>
        </div>
    </div>





    <div class="container my-5">
        <h2 class="text-center text-danger fw-bold mb-4 text-uppercase">Ремонт квартир в рассрочку</h2>
        <div class="row mx-auto mt-5">
            <!-- Левая часть с изображением и акцией -->
            <div class="col-md-4">
                <div class="card shadow-sm">
                    <img src="{{ asset('img/Обложка.-Рассрочка-на-ремонт.png') }}" class="card-img-top" alt="Акция">

                </div>
            </div>

            <!-- Средняя часть с цифрами -->
            <div class="col-md-3">
                <div class="d-flex flex-column justify-content-between h-100 ">
                    <div class="card shadow-sm text-center mb-2 p-1 bg-light">
                        <h1 class="text-success display-4 fw-bold">0</h1>
                        <p class="fw-bold">переплаты</p>
                    </div>
                    <div class="card shadow-sm text-center mb-2 p-1 bg-light">
                        <h1 class="text-success display-4 fw-bold">0</h1>
                        <p class="fw-bold">Процентов</p>
                    </div>
                    <div class="card shadow-sm text-center p-2 bg-light">
                        <h1 class="text-success display-4 fw-bold">12</h1>
                        <p class="fw-bold">Месяцев</p>
                    </div>
                </div>
            </div>

            <!-- Правая часть с преимуществами -->
            <div class="col-md-5">
                <div class="d-flex flex-column justify-content-center h-100">
                    <h4 class="text-success fw-bold">Преимущества рассрочки</h4>
                    <ul class="list-unstyled fs-5">
                        <li>— оформление без банка и переплат дополнительным соглашением к основному договору;</li>
                        <li>— период рассрочки до 12 месяцев;</li>
                        <li>— удобный график внесения и размер платежа.</li>
                    </ul>
                    <p class="text-success fw-bold">Услуга доступна при заказе ремонта квартиры под ключ.</p>
                </div>
            </div>
        </div>
    </div>




    <div class="container my-5 ">
        <h2 class="text-center text-danger fw-bold mb-4 text-uppercase">Сроки выполнения ремонта</h2>
        <p class="text-center text-muted mb-5 fs-6">Сколько потребуется времени, чтобы сделать ремонт квартиры.</p>
        <div class="row">
            <!-- Карточка 1 -->
            <div class="col-md-4 d-flex">
                <div class="card h-100 shadow-sm d-flex flex-column">
                    <div class="card-body d-flex flex-column">
                        <h5 class="card-title fw-bold text-success fs-4 text-center mt-3">Капитальный ремонт квартир
                        </h5>
                        <p class="card-text flex-grow-1 mt-4 w-75 mx-auto text-left">
                            Капитальный ремонт представляет собой комплекс ремонтно-отделочных работ, направленных на
                            обновление и улучшение технического состояния жилого помещения. Это более масштабный и
                            трудоемкий процесс по сравнению с косметическим ремонтом, включающий замену коммуникаций и
                            конструкций.
                        </p>
                        <p class="text-danger fw-bold text-center fs-5">от 4 месяцев</p>
                    </div>
                    <div class="card-footer text-center mt-auto">
                        <a href="#" class="btn btn-success">Подробнее</a>
                    </div>
                </div>
            </div>

            <!-- Карточка 2 -->
            <div class="col-md-4 d-flex">
                <div class="card h-100 shadow-sm d-flex flex-column">
                    <div class="card-body d-flex flex-column">
                        <h5 class="card-title fw-bold text-success fs-4 text-center mt-3">Ремонт квартиры "под ключ"
                        </h5>
                        <p class="card-text flex-grow-1 mt-4 w-75 mx-auto">
                            Ремонт квартиры под ключ — это услуга, которая включает полный спектр ремонтно-строительных
                            работ, начиная от разработки проекта и заканчивая финальной уборкой и сдачей объекта
                            Заказчику.
                            Основное преимущество такого подхода заключается в том, что заказчик получает готовое жилье,
                            не
                            вникая в детали и не участвуя в процессе.
                        </p>
                        <p class="text-danger fw-bold text-center fs-5">от 4,5 месяцев</p>
                    </div>
                    <div class="card-footer text-center mt-auto">
                        <a href="#" class="btn btn-success">Подробнее</a>
                    </div>
                </div>
            </div>

            <!-- Карточка 3 -->
            <div class="col-md-4 d-flex">
                <div class="card h-100 shadow-sm d-flex flex-column">
                    <div class="card-body d-flex flex-column">
                        <h5 class="card-title fw-bold text-success fs-4 text-center mt-3">Косметический ремонт квартир
                        </h5>
                        <p class="card-text flex-grow-1 mt-4 w-75 mx-auto">
                            Косметический ремонт квартиры представляет собой комплекс работ, направленных на обновление
                            внешнего вида помещения без изменения его планировки и инженерных коммуникаций. Данный вид
                            ремонта носит в основном декорирующий характер и не требует серьезных строительных
                            вмешательств.
                        </p>
                        <p class="text-danger fw-bold text-center fs-5">от 6 недель</p>
                    </div>
                    <div class="card-footer text-center mt-auto">
                        <a href="#" class="btn btn-success">Подробнее</a>
                    </div>
                </div>
            </div>
        </div>

        <!-- Вторая строка карточек -->
        <div class="row mt-4">
            <!-- Карточка 4 -->
            <div class="col-md-4 d-flex">
                <div class="card h-100 shadow-sm d-flex flex-column">
                    <div class="card-body d-flex flex-column">
                        <h5 class="card-title fw-bold text-success fs-4 text-center mt-3">Комплексный ремонт квартир
                        </h5>
                        <p class="card-text flex-grow-1 mt-4 w-75 mx-auto">
                            Комплексный ремонт квартиры представляет собой обширный вид ремонтных и отделочных работ,
                            направленных на полное обновление жилого пространства с учетом пожеланий Заказчика. Основное
                            отличие от капитального, выполняется в квартирах в новостройках.
                        </p>
                        <p class="text-danger fw-bold text-center fs-5">от 3 месяцев</p>
                    </div>
                    <div class="card-footer text-center mt-auto">
                        <a href="#" class="btn btn-success">Подробнее</a>
                    </div>
                </div>
            </div>

            <!-- Карточка 5 -->
            <div class="col-md-4 d-flex">
                <div class="card h-100 shadow-sm d-flex flex-column">
                    <div class="card-body d-flex flex-column">
                        <h5 class="card-title fw-bold text-success fs-4 text-center mt-3">Евроремонт квартир</h5>
                        <p class="card-text flex-grow-1 mt-4 w-75 mx-auto">
                            Евроремонт квартир — это современный и высококачественный ремонт жилого помещения, который
                            ориентирован на европейские стандарты. Такой ремонт подразумевает использование современных
                            технологий и материалов, а также высокую степень точности и внимания к деталям.
                        </p>
                        <p class="text-danger fw-bold text-center fs-5">от 5 месяцев</p>
                    </div>
                    <div class="card-footer text-center mt-auto">
                        <a href="#" class="btn btn-success">Подробнее</a>
                    </div>
                </div>
            </div>

            <!-- Карточка 6 -->
            <div class="col-md-4 d-flex">
                <div class="card h-100 shadow-sm d-flex flex-column">
                    <div class="card-body d-flex flex-column">
                        <h5 class="card-title fw-bold text-success fs-4 text-center mt-3">Дизайнерский ремонт</h5>
                        <p class="card-text flex-grow-1 mt-4 w-75 mx-auto">
                            Дизайнерский ремонт — это процесс обновления жилого пространства с целью создания
                            уникального
                            пространства, которое отвечает индивидуальным предпочтениям и требованиям Заказчика. Такой
                            вид
                            ремонта подразумевает использование специально разработанного проекта, в рамках которого
                            проводится ремонт и отделка квартиры.
                        </p>
                        <p class="text-danger fw-bold text-center fs-5">от 5 месяцев</p>
                    </div>
                    <div class="card-footer text-center mt-auto">
                        <a href="#" class="btn btn-success">Подробнее</a>
                    </div>
                </div>
            </div>
        </div>
    </div>








    <div class="container-fluid my-5 custom-container">
        <h2 class="text-center text-danger fw-bold mb-4">Преимущества компании</h2>
        <p class="text-center text-success fw-bold mb-5 fs-5">Вызов мастера, консультация и составление сметы
            БЕСПЛАТНО.
        </p>
        <div class="row text-center container mx-auto">
            <!-- Первая строка -->
            <div class="col-md-4 mb-4">
                <div class="d-flex flex-column align-items-center">
                    <i class="bi bi-clipboard-check text-success fs-1"></i>
                    <h5 class="mt-3">Договор и гарантия</h5>
                    <p class="text-muted">Гарантия на ремонт согласно договору составляет 24 месяца с момента
                        подписания
                        акта приема-сдачи.</p>
                </div>
            </div>
            <div class="col-md-4 mb-4">
                <div class="d-flex flex-column align-items-center">
                    <i class="bi bi-key-fill text-success fs-1"></i>
                    <h5 class="mt-3">Ремонт под ключ</h5>
                    <p class="text-muted">Выполняем полный комплекс ремонтно-отделочных работ без привлечения сторонних
                        специалистов.</p>
                </div>
            </div>
            <div class="col-md-4 mb-4">
                <div class="d-flex flex-column align-items-center">
                    <i class="bi bi-people-fill text-success fs-1"></i>
                    <h5 class="mt-3">Команда профессионалов</h5>
                    <p class="text-muted">Высококвалифицированные мастера-отделочники и узкопрофильные специалисты по
                        ремонту.</p>
                </div>
            </div>
        </div>
        <div class="row text-center container mx-auto">
            <!-- Вторая строка -->
            <div class="col-md-4 mb-4">
                <div class="d-flex flex-column align-items-center">
                    <i class="bi bi-cart-fill text-success fs-1"></i>
                    <h5 class="mt-3 text-success">Закупка и доставка материалов</h5>
                    <p class="text-muted">Приобретаем черновой материал и сопровождаем Заказчиков по подбору и закупке
                        чистового материала.</p>
                </div>
            </div>
            <div class="col-md-4 mb-4">
                <div class="d-flex flex-column align-items-center">
                    <i class="bi bi-calendar-check-fill text-success fs-1"></i>
                    <h5 class="mt-3">Соблюдение сроков ремонта</h5>
                    <p class="text-muted">Инженер-прорраб точно рассчитывает сроки, необходимые для выполнения ремонта
                        Вашего жилья.</p>
                </div>
            </div>
            <div class="col-md-4 mb-4">
                <div class="d-flex flex-column align-items-center">
                    <i class="bi bi-currency-dollar text-success fs-1"></i>
                    <h5 class="mt-3">Точная стоимость ремонта</h5>
                    <p class="text-muted">Рассчитываем стоимость, без скрытых наценок. Аргументированная смета на
                        ремонтные
                        работы.</p>
                </div>
            </div>
        </div>
        <div class="row text-center container mx-auto">
            <!-- Третья строка -->
            <div class="col-md-4 mb-4">
                <div class="d-flex flex-column align-items-center">
                    <i class="bi bi-images text-success fs-1"></i>
                    <h5 class="mt-3">Фото галерея</h5>
                    <p class="text-muted">Альбомы с фотографиями готовых ремонтов от нашей компании.</p>
                </div>
            </div>
            <div class="col-md-4 mb-4">
                <div class="d-flex flex-column align-items-center">
                    <i class="bi bi-camera-video-fill text-success fs-1"></i>
                    <h5 class="mt-3">Видео отчеты</h5>
                    <p class="text-muted">Видео в формате до и после ремонта, рассказываем о ходе ремонта.</p>
                </div>
            </div>
            <div class="col-md-4 mb-4">
                <div class="d-flex flex-column align-items-center">
                    <i class="bi bi-chat-left-text-fill text-success fs-1"></i>
                    <h5 class="mt-3">Отзывы</h5>
                    <p class="text-muted">Благодарные отзывы Заказчиков о качестве предоставляемых услуг по ремонту.
                    </p>
                </div>
            </div>
        </div>
    </div>










    <div class="container my-5">
        <h2 class="text-center text-danger fw-bold mb-4 text-uppercase">Информационный блог о ремонте и отделке
            помещений
        </h2>
        <p class="text-center mb-5 fs-6">В нашем разделе полезных советов о ремонте мы предлагаем вам профессиональные
            рекомендации по различным аспектам ремонта – начиная от выбора отделочных материалов и заканчивая
            технологиями,
            которые играют большую роль в получении качественного результата. Также мы расскажем, как верно планировать
            будущий ремонт.</p>

        <div class="row">
            <div class="col-md-4 d-flex align-items-stretch">
                <div class="card mb-4 shadow-sm">
                    <img src="{{ asset('img/sroki-remonta-kvartiry.-oblozhka-1024x683.png') }}" class="card-img-top"
                        alt="Сроки ремонта квартиры">
                    <div class="card-body">
                        <h5 class="card-title text-center fw-bold">Сроки ремонта квартиры</h5>
                        <p class="card-text">В этой статье мы подробно разберем, от каких факторов зависят сроки
                            ремонта и
                            как эффективно планировать работы, чтобы избежать незапланированных задержек.</p>
                        <div class="d-grid gap-2">
                            <a href="#" class="btn btn-success">Подробнее</a>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-md-4 d-flex align-items-stretch">
                <div class="card mb-4 shadow-sm">
                    <img src="{{ asset('img/vidy-remonta-kvartiry.-oblozhka-1024x683.png') }}" class="card-img-top"
                        alt="Виды ремонта квартиры">
                    <div class="card-body">
                        <h5 class="card-title text-center fw-bold">Виды ремонта квартиры</h5>
                        <p class="card-text">В нашей статье мы подробно рассмотрим основные виды ремонта квартиры, их
                            особенности и ключевые моменты, которые помогут сделать правильный выбор.</p>
                        <div class="d-grid gap-2">
                            <a href="#" class="btn btn-success">Подробнее</a>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-md-4 d-flex align-items-stretch">
                <div class="card mb-4 shadow-sm">
                    <img src="{{ asset('img/stoimost-remonta-kvartiry.-oblozhka-1024x683.png') }}" class="card-img-top"
                        alt="Стоимость ремонта квартиры">
                    <div class="card-body">
                        <h5 class="card-title text-center fw-bold">Стоимость ремонта квартиры</h5>
                        <p class="card-text">В нашей статье мы подробно рассмотрим, что влияет на стоимость ремонта,
                            чтобы
                            вы могли заранее подготовиться и избежать неожиданных затрат.</p>
                        <div class="d-grid gap-2">
                            <a href="#" class="btn btn-success">Подробнее</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="text-center">
            <a href="#" class="btn btn-success mt-3 fs-4 px-4">Блог</a>
        </div>
    </div>










    <div class="container my-5">
        <h2 class="text-center text-danger fw-bold mb-4 text-uppercase">Вопрос-ответ о ремонте квартир в Красноярске
        </h2>
        <p class="text-center fs-6">Выполнение ремонтных работ — задача сложная, требующая опыта и определенных знаний
            в
            ремонтной сфере. Спектр предстоящих задач широк и может вызвать массу вопросов. Здесь вы найдете ответы на
            часто
            задаваемые вопросы.</p>

        <div class="accordion w-md-50 mx-auto mt-5" id="faqAccordion">
            <div class="accordion-item">
                <h2 class="accordion-header" id="headingOne">
                    <button class="accordion-button" type="button" data-bs-toggle="collapse"
                        data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                        Хотели бы заказать дизайн проект. Дизайн интерьера разрабатывают ваши дизайнеры или ваши
                        партнеры?
                    </button>
                </h2>
                <div id="collapseOne" class="accordion-collapse collapse show" aria-labelledby="headingOne"
                    data-bs-parent="#faqAccordion">
                    <div class="accordion-body">
                        Разработку дизайн-проекта, авторский надзор и комплектацию выполняют дизайнеры нашей
                        организации.
                        Специалистов со сторонних организаций мы не привлекаем, так как в штате работают опытные и
                        квалифицированные дизайнеры.
                    </div>
                </div>
            </div>

            <div class="accordion-item">
                <h2 class="accordion-header" id="headingTwo">
                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                        data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                        Какие стили вы применяете в процессе разработки дизайн проектов?
                    </button>
                </h2>
                <div id="collapseTwo" class="accordion-collapse collapse" aria-labelledby="headingTwo"
                    data-bs-parent="#faqAccordion">
                    <div class="accordion-body">
                        — Современные стили: минимализм, хай-тек, индустриальный, лофт, неоклассика, эко стиль и др.<br>
                        — Классический стиль и арт-деко.<br>
                        — Этнические стили: английский, восточный, скандинавский, джапанди, прованс.<br>
                        В настоящее время преобладают дизайны, в которых применяются сочетания элементов из разных
                        стилевых
                        направлений.
                    </div>
                </div>
            </div>

            <div class="accordion-item">
                <h2 class="accordion-header" id="headingThree">
                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                        data-bs-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                        В процессе работы, привлекаете ли вы специалистов со стороны?
                    </button>
                </h2>
                <div id="collapseThree" class="accordion-collapse collapse" aria-labelledby="headingThree"
                    data-bs-parent="#faqAccordion">
                    <div class="accordion-body">
                        Нет, мы работаем без привлечения работников со стороны. У нас в штате работают сотрудники всех
                        специальностей: дизайнеры, инженеры, электрики, сантехники, отделочники, мастера по монтажу
                        дверей,
                        окон, натяжного потолка, кондиционеров. И что самое главное работа выполняется под чутким
                        руководством прорабов.
                    </div>
                </div>
            </div>

            <div class="accordion-item">
                <h2 class="accordion-header" id="headingFour">
                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                        data-bs-target="#collapseFour" aria-expanded="false" aria-controls="collapseFour">
                        В каких типах жилья вы производите ремонтные работы?
                    </button>
                </h2>
                <div id="collapseFour" class="accordion-collapse collapse" aria-labelledby="headingFour"
                    data-bs-parent="#faqAccordion">
                    <div class="accordion-body">
                        Ремонтные работы проводятся в новостройках и вторичном жилье (сталинка, хрущевка, брежневка).
                    </div>
                </div>
            </div>

            <div class="accordion-item">
                <h2 class="accordion-header" id="headingFive">
                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                        data-bs-target="#collapseFive" aria-expanded="false" aria-controls="collapseFive">
                        Сколько уходит времени на усадку дома?
                    </button>
                </h2>
                <div id="collapseFive" class="accordion-collapse collapse" aria-labelledby="headingFive"
                    data-bs-parent="#faqAccordion">
                    <div class="accordion-body">
                        Сроки усадки зависят от того из какого материала построено здание:<br>
                        — монолитный дом — усадка до 2 лет;<br>
                        — панельный дом — до 3 лет;<br>
                        — кирпичный дом — до 6 лет.<br>
                        Данные сроки актуальны, если дом возведен без нарушения технологий в процессе строительства, в
                        противном случае сроки могут быть больше.
                    </div>
                </div>
            </div>

            <div class="accordion-item">
                <h2 class="accordion-header" id="headingSix">
                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                        data-bs-target="#collapseSix" aria-expanded="false" aria-controls="collapseSix">
                        Выполняете ли вы отделку в квартирах по готовому дизайн-проекту?
                    </button>
                </h2>
                <div id="collapseSix" class="accordion-collapse collapse" aria-labelledby="headingSix"
                    data-bs-parent="#faqAccordion">
                    <div class="accordion-body">
                        Выполняем в очень редком случае. Дизайн-проект включает рабочую документацию с чертежами и к
                        большому сожалению дизайнеры многие важные технические моменты не учитывают и когда мы
                        приступаем к
                        выполнению ремонта, наши инженеры вынуждены вносить корректировки. В связи с этим, приходится
                        переделывать сроки работ и нередко дополнять необходимыми ремонтно-отделочными работами, что
                        скажется на бюджете.<br>
                        Мы рекомендуем доверить разработку дизайн-проекта и последующую реализацию одной организации,
                        так
                        как слаженная работа дизайнера и инженера — это гарантия качественно выполненного ремонта,
                        который
                        полностью будет соответствовать Вашим ожиданиям.
                    </div>
                </div>
            </div>

            <div class="accordion-item">
                <h2 class="accordion-header" id="headingSeven">
                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                        data-bs-target="#collapseSeven" aria-expanded="false" aria-controls="collapseSeven">
                        Каким способом производится оплата?
                    </button>
                </h2>
                <div id="collapseSeven" class="accordion-collapse collapse" aria-labelledby="headingSeven"
                    data-bs-parent="#faqAccordion">
                    <div class="accordion-body">
                        Вы можете оплатить разными способами, как Вам будет удобно:<br>
                        — наличные;<br>
                        — оплата картой по терминалу;<br>
                        — переводом с карты на карту;<br>
                        — оплата в рассрочку.
                    </div>
                </div>
            </div>

            <div class="accordion-item">
                <h2 class="accordion-header" id="headingEight">
                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                        data-bs-target="#collapseEight" aria-expanded="false" aria-controls="collapseEight">
                        Даёте ли вы гарантии?
                    </button>
                </h2>
                <div id="collapseEight" class="accordion-collapse collapse" aria-labelledby="headingEight"
                    data-bs-parent="#faqAccordion">
                    <div class="accordion-body">
                        Конечно, по договору гарантия до 24 месяцев на все виды ремонтно-отделочных работ.
                    </div>
                </div>
            </div>

            <div class="accordion-item">
                <h2 class="accordion-header" id="headingNine">
                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                        data-bs-target="#collapseNine" aria-expanded="false" aria-controls="collapseNine">
                        Сколько стоит выезд на квартиру и консультация мастера?
                    </button>
                </h2>
                <div id="collapseNine" class="accordion-collapse collapse" aria-labelledby="headingNine"
                    data-bs-parent="#faqAccordion">
                    <div class="accordion-body">
                        Выезд мастера замерщика и консультация осуществляется совершенно бесплатно.
                    </div>
                </div>
            </div>

            <div class="accordion-item">
                <h2 class="accordion-header" id="headingTen">
                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                        data-bs-target="#collapseTen" aria-expanded="false" aria-controls="collapseTen">
                        Кто у вас осуществляет установку дверей?
                    </button>
                </h2>
                <div id="collapseTen" class="accordion-collapse collapse" aria-labelledby="headingTen"
                    data-bs-parent="#faqAccordion">
                    <div class="accordion-body">
                        Для установки дверей у нас имеется специалист по дверям.
                    </div>
                </div>
            </div>

            <div class="accordion-item">
                <h2 class="accordion-header" id="headingEleven">
                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                        data-bs-target="#collapseEleven" aria-expanded="false" aria-controls="collapseEleven">
                        Чем отличается отделка в квартирах от отделки в частном доме или коттедже?
                    </button>
                </h2>
                <div id="collapseEleven" class="accordion-collapse collapse" aria-labelledby="headingEleven"
                    data-bs-parent="#faqAccordion">
                    <div class="accordion-body">
                        В любом случае, что отделка в квартирах, что внутренняя отделка дома очень похожи по видам
                        услуг.
                        Это подготовка и выравнивание поверхностей, укладка плитки, укладка напольного покрытия,
                        поклейка
                        обоев или покраска. Но различия все-таки есть, например, электромонтажные работы и
                        сантехнические
                        работы в частном доме сложнее, помимо отделки, нередко заказывают услугу по монтажу теплого пола
                        во
                        всем помещении, услугу по теплоизоляции стен и потолка. Помимо всего выше сказанного, подрядчик
                        должен позаботиться о доставке материалов, вывозе строительного мусора, о контроле хода работ, а
                        при
                        условии, что чаще всего частные дома или коттеджи находятся за городом — это дополнительные
                        транспортные расходы, соответственно что влияет на цену.
                    </div>
                </div>
            </div>

            <div class="accordion-item">
                <h2 class="accordion-header" id="headingTwelve">
                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                        data-bs-target="#collapseTwelve" aria-expanded="false" aria-controls="collapseTwelve">
                        Где можно посмотреть налоговые данные о вашей организации?
                    </button>
                </h2>
                <div id="collapseTwelve" class="accordion-collapse collapse" aria-labelledby="headingTwelve"
                    data-bs-parent="#faqAccordion">
                    <div class="accordion-body">
                        Вы можете ознакомиться с налоговыми данными нашей организации.
                    </div>
                </div>
            </div>

            <div class="accordion-item">
                <h2 class="accordion-header" id="headingThirteen">
                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                        data-bs-target="#collapseThirteen" aria-expanded="false" aria-controls="collapseThirteen">
                        Можно увидеть примеры ваших работ вживую?
                    </button>
                </h2>
                <div id="collapseThirteen" class="accordion-collapse collapse" aria-labelledby="headingThirteen"
                    data-bs-parent="#faqAccordion">
                    <div class="accordion-body">
                        Безусловно, мы можем Вам предоставить такую возможность.
                    </div>
                </div>
            </div>

            <div class="accordion-item">
                <h2 class="accordion-header" id="headingFourteen">
                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                        data-bs-target="#collapseFourteen" aria-expanded="false" aria-controls="collapseFourteen">
                        Где вы приобретаете отделочный материал?
                    </button>
                </h2>
                <div id="collapseFourteen" class="accordion-collapse collapse" aria-labelledby="headingFourteen"
                    data-bs-parent="#faqAccordion">
                    <div class="accordion-body">
                        Весь материал мы приобретаем в проверенных магазинах Красноярска. Мы также даем рекомендации
                        нашим
                        Заказчикам, где можно приобрести качественный чистовой материал, сантехнику, двери по приемлемым
                        ценам.
                    </div>
                </div>
            </div>

            <div class="accordion-item">
                <h2 class="accordion-header" id="headingFifteen">
                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                        data-bs-target="#collapseFifteen" aria-expanded="false" aria-controls="collapseFifteen">
                        Осуществляете ли вы строительство домов?
                    </button>
                </h2>
                <div id="collapseFifteen" class="accordion-collapse collapse" aria-labelledby="headingFifteen"
                    data-bs-parent="#faqAccordion">
                    <div class="accordion-body">
                        На данный момент мы не занимаемся малоэтажным строительством.
                    </div>
                </div>
            </div>
        </div>

        <div class="text-center mt-4">
            <a href="#" class="btn btn-success">Подробнее</a>
        </div>
    </div>




    <div class="container my-5">

        <div class="info-box p-4 mb-5 border border-success rounded">
            <p>Комплекс ремонтно-отделочных мероприятий выполняет команда профессионалов со стажем не менее 5 лет,
                под руководством компетентных прорабов. Слаженная работа профессиональной, ответственной бригады —
                это залог успеха и качественного результата на долгие годы. В процессе работы используются только
                проверенные и качественные стройматериалы, приобретенные у надежных поставщиков Красноярска. При
                первичном осмотре помещения и консультации инженер-сметчик рассчитает стоимость работ. Гарантия
                составляет 2 года.</p>
        </div>
        <h2 class="text-center text-danger fw-bold mb-4">Оставить отзыв о компании</h2>
        <p class="text-center text-muted mb-4">Помимо независимых площадок для размещения отзывов, опубликованных
            на нашем сайте, мы предоставляем возможность оставить отзыв или комментарий в упрощенной форме.</p>
        <form class="w-md-50 mx-auto">
            <div class="mb-3">
                <label for="name" class="form-label">Ваше имя</label>
                <input type="text" class="form-control" id="name" placeholder="Введите ваше имя">
            </div>
            <div class="mb-3">
                <label for="repairType" class="form-label">Тип ремонта</label>
                <input type="text" class="form-control" id="repairType" placeholder="Пример: ремонт квартиры">
            </div>
            <div class="mb-3">
                <label for="rating" class="form-label">Оценить ремонт:</label>
                <select class="form-select" id="rating">
                    <option>★★★★★</option>
                    <option>★★★★</option>
                    <option>★★★</option>
                    <option>★★</option>
                    <option>★</option>
                </select>
            </div>
            <div class="mb-3">
                <label for="review" class="form-label">Отзыв</label>
                <textarea class="form-control" id="review" rows="5" placeholder="Напишите свой отзыв"></textarea>
            </div>
            <div class="mb-4">
                <label for="photo" class="form-label">Прикрепить фото</label>
                <input class="form-control" type="file" id="photo">
            </div>
            <div class="text-center">
                <button type="submit" class="btn btn-success btn-lg w-100">Отправить отзыв</button>
            </div>
        </form>

    </div>


@endsection
