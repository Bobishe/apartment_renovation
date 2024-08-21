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

        @if ($works)
            <div class="container mt-5">
                <h2 class="text-center text-danger fw-bold mb-4">ФОТОГАЛЕРЕЯ НАШИХ РАБОТ</h2>
                <div class="row mt-5">
                    @foreach ($works as $work)
                        <div class="col-md-4 d-flex align-items-stretch">
                            <div class="card mb-4 shadow-sm">
                                <!-- Слайдер изображений -->
                                <div id="carousel-{{ $work->id }}" class="carousel slide" data-bs-ride="carousel"
                                    data-bs-interval="4000">
                                    <div class="carousel-inner" style="height: 250px; overflow: hidden;">
                                        @foreach (json_decode($work->image, true) as $index => $image)
                                            <div class="carousel-item {{ $index == 0 ? 'active' : '' }}">
                                                <img src="{{ Voyager::image($image) }}" class="d-block w-100 h-100"
                                                    alt="{{ $work->title }}" style="object-fit: cover;">
                                            </div>
                                        @endforeach
                                    </div>
                                    <button class="carousel-control-prev" type="button"
                                        data-bs-target="#carousel-{{ $work->id }}" data-bs-slide="prev">
                                        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                                        <span class="visually-hidden">Previous</span>
                                    </button>
                                    <button class="carousel-control-next" type="button"
                                        data-bs-target="#carousel-{{ $work->id }}" data-bs-slide="next">
                                        <span class="carousel-control-next-icon" aria-hidden="true"></span>
                                        <span class="visually-hidden">Next</span>
                                    </button>
                                </div>

                                <!-- Текстовая информация о работе -->
                                <div class="card-body text-center d-flex flex-column">
                                    <h5 class="card-title text-danger fw-bold fs-4">{{ $work->title }}</h5>
                                    <p class="card-text fs-5">{{ $work->adres }}</p>
                                    <p class="card-text fs-5">Площадь: {{ $work->area }} м<sup>2</sup></p>
                                    <div class="mt-auto">
                                        <a href="{{ $work->url }}" class="btn btn-success fs-5">Посмотреть</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>
        @endif


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
            <a href="#" class="btn btn-success mt-3  pulsing-btn">Посмотреть все видео отчеты</a>
        </div>
    </div>


    <div class="container reviews-section">
        <h2>Отзывы клиентов о нашей компании</h2>
        <p style="font-size: 18px">Вы можете ознакомиться с отзывами о нашей работе.<br>Здесь размещены ссылки независимых
            сторонних ресурсов.</p>
        <div class="reviews-cards">
            <div class="review-card">
                <img src={{ asset('img/logo_rev/logo-flamp.png') }} alt="Flamp">
                <h5>Отзывы на Flamp</h5>
                <a href="https://krasnoyarsk.flamp.ru/firm/kompaniya_po_remontu_kvartir-70000001039136499" class="btn mt-3">
                    Перейти <i class="bi bi-box-arrow-up-right"></i>
                </a>
            </div>
            <div class="review-card">
                <img src={{ asset('img/logo_rev/logo_0002_Sloi-3.jpg') }} alt="Яндекс Карты">
                <h5>Отзывы на Яндекс картах</h5>
                <a href="https://yandex.ru/profile/49797871367" class="btn">
                    Перейти <i class="bi bi-box-arrow-up-right"></i>
                </a>
            </div>
            <div class="review-card">
                <img src={{ asset('img/logo_rev/logo_0001_Sloi-4.jpg') }} alt="Google Maps">
                <h5>Отзывы на Google-Картах</h5>
                <a href="https://goo.gl/maps/7NmbkA1EdbZBbgys7" class="btn">
                    Перейти <i class="bi bi-box-arrow-up-right"></i>
                </a>
            </div>
            <div class="review-card">
                <img src={{ asset('img/logo_rev/logo_0000_Sloi-5.jpg') }} alt="2GIS">
                <h5>Отзывы на 2GIS-Картах</h5>
                <a href="https://go.2gis.com/wyf2m" class="btn">
                    Перейти <i class="bi bi-box-arrow-up-right"></i>
                </a>
            </div>




            <div class="review-card">
                <img src="{{ asset('img/logo_rev/full_logo_otz1.jpg') }}" alt="Yell">
                <h5>Отзывы на Yell</h5>
                <a href="https://www.yell.ru/krasnoyarsk/com/kompaniya-po-remontu-kvartir_13075401/reviews/"
                    class="btn">
                    Перейти <i class="bi bi-box-arrow-up-right"></i>
                </a>
            </div>
            <div class="review-card">
                <img src="{{ asset('img/logo_rev/logo_0004_Sloi-1.jpg') }}" alt="Rating Firm">
                <h5> Рейтинг фирм</h5>
                <a href="https://krasnoyarsk.ratingfirmporemontu.ru/firms/ip-pokivaylov/" class="btn">
                    Перейти <i class="bi bi-box-arrow-up-right"></i>
                </a>
            </div>
            <div class="review-card">
                <img src="{{ asset('img/logo_rev/logo_0003_Sloi-2.jpg') }}" alt="ZOON">
                <h5>Отзывы на ZOON</h5>
                <a href="https://krasnoyarsk.zoon.ru/building/kompaniya_po_remontu_kvartir_na_ulitse_zheleznodorozhnikov/"
                    class="btn">
                    Перейти <i class="bi bi-box-arrow-up-right"></i>
                </a>
            </div>
            <div class="review-card">
                <img src="{{ asset('img/logo_rev/remostat-otzyvy-2.png') }}" alt="Remostat">
                <h5>Отзывы на Remostat</h5>
                <a href="https://krasnoyarsk.remostat.ru/rejting/pokivajlov/" class="btn">
                    Перейти <i class="bi bi-box-arrow-up-right"></i>
                </a>
            </div>
        </div>
    </div>


    <div class="container my-5">
        <h2 class="text-center text-danger fw-bold mb-4 text-uppercase">Ремонт квартир</h2>
        <p class="text-center fs-5">
            Компания ИП Покивайлов не первый год оказывает услуги в сфере ремонта квартир, коттеджей и других помещений в
            Красноярске. Мы выполняем ремонт под ключ: демонтаж, ремонтно-отделочные работы, приобретение и доставка
            требуемых материалов, вывоз строительного мусора и уборку помещения, при этом мы не привлекаем работников со
            стороны.
        </p>
    </div>




{{-- цены --}}
    <div class="container-fluid my-5 custom-container">
        <h2 class="text-center fw-bold mb-4">Цены на наши услуги</h2>
        <p class="text-center text-muted mb-5 fs-6">
            Закономерно — клиентов интересует цена предстоящего преображения своего жилья. Мы указали среднюю стоимость за
            м<sup>2</sup> на каждый вид ремонта.
        </p>
        <div class="row container mx-auto">
            <div class="col-md-3">
                <div class="card h-100">
                    <img src="{{ asset('img/price/kompleksnyj-remont-trehkomnatnoj-kvartiry1.jpg') }}" class="card-img-top" alt="Ремонт квартир Красноярск">
                    <div class="card-body text-center">
                        <h5 class="card-title fw-bold">РЕМОНТ КВАРТИР КРАСНОЯРСК</h5>
                        <p class="card-text fs-6">от 5000 руб.<br>за КВ.М.</p>
                        <a href="#" class="btn btn-success">Оставить заявку</a>
                    </div>
                </div>
            </div>
            <div class="col-md-3">
                <div class="card h-100">
                    <img src="{{ asset('img/price/q2-1.jpg') }}" class="card-img-top" alt="Ремонт квартир под ключ">
                    <div class="card-body text-center">
                        <h5 class="card-title fw-bold">РЕМОНТ КВАРТИР ПОД КЛЮЧ</h5>
                        <p class="card-text fs-6">от 8000 руб.<br>за КВ.М.</p>
                        <a href="#" class="btn btn-success">Оставить заявку</a>
                    </div>
                </div>
            </div>
            <div class="col-md-3">
                <div class="card h-100">
                    <img src="{{ asset('img/price/q3-1.jpg') }}" class="card-img-top" alt="Капитальный ремонт">
                    <div class="card-body text-center">
                        <h5 class="card-title fw-bold" style="min-height: 50px">КАПИТАЛЬНЫЙ РЕМОНТ</h5>
                        <p class="card-text fs-6">от 9000 руб.<br>за КВ.М.</p>
                        <a href="#" class="btn btn-success">Оставить заявку</a>
                    </div>
                </div>
            </div>
            <div class="col-md-3">
                <div class="card h-100">
                    <img src="{{ asset('img/price/q6-e1629023355246-1.jpg') }}" class="card-img-top" alt="Ремонт по дизайн-проекту">
                    <div class="card-body text-center">
                        <h5 class="card-title fw-bold">РЕМОНТ ПО ДИЗАЙН-ПРОЕКТУ</h5>
                        <p class="card-text fs-6">от 15000 руб.<br>за КВ.М.</p>
                        <a href="#" class="btn btn-success">Оставить заявку</a>
                    </div>
                </div>
            </div>
        </div>
    </div>





@endsection
