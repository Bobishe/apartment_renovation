@extends('layouts.app')

@section('title', $page->title)

@section('content')

    <div class="container hero-section d-flex justify-content-center align-items-center position-relative"
        style="background-image: url('http://127.0.0.1:8000/img/design/i.webp'); padding:100px; background-size: cover;">
        <div class="overlay"></div>
        <div class="text-center text-white content">
            <h1 class="fw-bold">Создаем авторские дизайны интерьеров в Красноярске</h1>
            <div class="row justify-content-center my-4">
                <button class="col-12 col-md-4 btn btn-outline-light ">Разработка концепции</button>
                <button class="col-12 col-md-4 btn btn-outline-light  ">Авторское сопровождение</button>
                <button class="col-12 col-md-4 btn btn-outline-light  ">Реализация проекта</button>
            </div>
            <a class="btn btn-success mt-5 pulsing-btn" data-bs-toggle="modal" data-bs-target="#callbackModal"
                style="background-color: #00a884;" href="#">Заказать проект</a>
        </div>
    </div>



    <div class="container my-5">
        <h2 class="text-center text-danger fw-bold mb-4">Дизайн интерьера квартир, домов и нежилых помещений в Красноярске
        </h2>
        <p class="text-center">Наша компания разрабатывает дизайн проекты квартир в Красноярске. Основное преимущество нашей
            работы состоит в том, что мы не только создаем уникальные дизайн проекты, но и успешно их реализуем в процессе
            ремонта. Наши дизайнеры придумают концепцию оформления, исходя из Ваших пожеланий, подберут необходимый
            материал, интерьерный декор, мебель, а наши мастера произведут комплекс ремонтно-отделочных мероприятий. Дизайн
            проект квартиры реализуется в рамках авторского надзора дизайнера и инженера, который будет контролировать ход
            ремонта. В результате проделанной работы Вы получите уютную и комфортную для жизни квартиру.</p>
        <h3 class="text-center text-danger fw-bold mb-4">Портфолио готовых дизайн проектов</h3>








        <div class="row">
            <!-- Первая карточка -->
            <div class="col-md-4 d-flex align-items-stretch">
                <div class="card mb-4 shadow-sm">
                    <!-- Слайдер изображений -->
                    <div id="carousel-1" class="carousel slide" data-bs-ride="carousel">
                        <div class="carousel-inner">
                            <div class="carousel-item active">
                                <img src="https://via.placeholder.com/800x600.png?text=Image+1" class="d-block w-100"
                                    alt="...">
                            </div>
                            <div class="carousel-item">
                                <img src="https://via.placeholder.com/800x600.png?text=Image+2" class="d-block w-100"
                                    alt="...">
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

                    <!-- Текстовая информация о работе -->
                    <div class="card-body text-center d-flex flex-column">
                        <h5 class="card-title text-danger fw-bold fs-4">Дизайн интерьера двухкомнатной квартиры</h5>
                        <p class="card-text fs-5">Адрес: ул. Академгородок 70.</p>
                        <p class="card-text fs-5">Площадь: 72,9 м<sup>2</sup></p>
                        <div class="mt-auto">
                            <a href="#" class="btn btn-success fs-5">Подробнее</a>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Вторая карточка -->
            <div class="col-md-4 d-flex align-items-stretch">
                <div class="card mb-4 shadow-sm">
                    <!-- Слайдер изображений -->
                    <div id="carousel-2" class="carousel slide" data-bs-ride="carousel">
                        <div class="carousel-inner">
                            <div class="carousel-item active">
                                <img src="https://via.placeholder.com/800x600.png?text=Image+3" class="d-block w-100"
                                    alt="...">
                            </div>
                            <div class="carousel-item">
                                <img src="https://via.placeholder.com/800x600.png?text=Image+4" class="d-block w-100"
                                    alt="...">
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

                    <!-- Текстовая информация о работе -->
                    <div class="card-body text-center d-flex flex-column">
                        <h5 class="card-title text-danger fw-bold fs-4">Дизайн проект трехкомнатной квартиры</h5>
                        <p class="card-text fs-5">Адрес: ул. Менжинского 14.</p>
                        <p class="card-text fs-5">Площадь: 69 м<sup>2</sup></p>
                        <div class="mt-auto">
                            <a href="#" class="btn btn-success fs-5">Подробнее</a>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Третья карточка -->
            <div class="col-md-4 d-flex align-items-stretch">
                <div class="card mb-4 shadow-sm">
                    <!-- Слайдер изображений -->
                    <div id="carousel-3" class="carousel slide" data-bs-ride="carousel">
                        <div class="carousel-inner">
                            <div class="carousel-item active">
                                <img src="https://via.placeholder.com/800x600.png?text=Image+5" class="d-block w-100"
                                    alt="...">
                            </div>
                            <div class="carousel-item">
                                <img src="https://via.placeholder.com/800x600.png?text=Image+6" class="d-block w-100"
                                    alt="...">
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

                    <!-- Текстовая информация о работе -->
                    <div class="card-body text-center d-flex flex-column">
                        <h5 class="card-title text-danger fw-bold fs-4">Дизайн проект двухкомнатной квартиры</h5>
                        <p class="card-text fs-5">Адрес: ул. Южная набережная 14.</p>
                        <p class="card-text fs-5">Площадь: 65 м<sup>2</sup></p>
                        <div class="mt-auto">
                            <a href="#" class="btn btn-success fs-5">Подробнее</a>
                        </div>
                    </div>
                </div>
            </div>






            <div class="col-md-4 d-flex align-items-stretch">
                <div class="card mb-4 shadow-sm">
                    <!-- Слайдер изображений -->
                    <div id="carousel-3" class="carousel slide" data-bs-ride="carousel">
                        <div class="carousel-inner">
                            <div class="carousel-item active">
                                <img src="https://via.placeholder.com/800x600.png?text=Image+5" class="d-block w-100"
                                    alt="...">
                            </div>
                            <div class="carousel-item">
                                <img src="https://via.placeholder.com/800x600.png?text=Image+6" class="d-block w-100"
                                    alt="...">
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

                    <!-- Текстовая информация о работе -->
                    <div class="card-body text-center d-flex flex-column">
                        <h5 class="card-title text-danger fw-bold fs-4">Дизайн интерьера четырехкомнатной квартиры</h5>
                        <p class="card-text fs-5">Адрес: ул. Весны 9.</p>
                        <p class="card-text fs-5">Площадь: 84 м<sup>2</sup></p>
                        <div class="mt-auto">
                            <a href="#" class="btn btn-success fs-5">Подробнее</a>
                        </div>
                    </div>
                </div>
            </div>



            <div class="col-md-4 d-flex align-items-stretch">
                <div class="card mb-4 shadow-sm">
                    <!-- Слайдер изображений -->
                    <div id="carousel-3" class="carousel slide" data-bs-ride="carousel">
                        <div class="carousel-inner">
                            <div class="carousel-item active">
                                <img src="https://via.placeholder.com/800x600.png?text=Image+5" class="d-block w-100"
                                    alt="...">
                            </div>
                            <div class="carousel-item">
                                <img src="https://via.placeholder.com/800x600.png?text=Image+6" class="d-block w-100"
                                    alt="...">
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

                    <!-- Текстовая информация о работе -->
                    <div class="card-body text-center d-flex flex-column">
                        <h5 class="card-title text-danger fw-bold fs-4">Дизайн интерьера четырехкомнатной квартиры</h5>
                        <p class="card-text fs-5">Адрес: ул. Весны 9.</p>
                        <p class="card-text fs-5">Площадь: 84 м<sup>2</sup></p>
                        <div class="mt-auto">
                            <a href="#" class="btn btn-success fs-5">Подробнее</a>
                        </div>
                    </div>
                </div>
            </div>



            <div class="col-md-4 d-flex align-items-stretch">
                <div class="card mb-4 shadow-sm">
                    <!-- Слайдер изображений -->
                    <div id="carousel-3" class="carousel slide" data-bs-ride="carousel">
                        <div class="carousel-inner">
                            <div class="carousel-item active">
                                <img src="https://via.placeholder.com/800x600.png?text=Image+5" class="d-block w-100"
                                    alt="...">
                            </div>
                            <div class="carousel-item">
                                <img src="https://via.placeholder.com/800x600.png?text=Image+6" class="d-block w-100"
                                    alt="...">
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

                    <!-- Текстовая информация о работе -->
                    <div class="card-body text-center d-flex flex-column">
                        <h5 class="card-title text-danger fw-bold fs-4">Дизайн интерьера четырехкомнатной квартиры</h5>
                        <p class="card-text fs-5">Адрес: ул. Весны 9.</p>
                        <p class="card-text fs-5">Площадь: 84 м<sup>2</sup></p>
                        <div class="mt-auto">
                            <a href="#" class="btn btn-success fs-5">Подробнее</a>
                        </div>
                    </div>
                </div>
            </div>

        </div>

        <p class="text-center mt-4 lead fs-5">На протяжении нескольких лет мы реализовали не один успешный дизайнерский
            интерьер в
            квартирах Красноярска. Работая с каждым новым проектом мы получаем безграничный опыт, воплощаем интересные идеи
            и преображаем жилье до неузнаваемости.</p>
    </div>












    <div class="container mt-5">
        <h2 class="text-center text-danger fw-bold mb-4">Цены на дизайн интерьера квартир</h2>
        <h3 class="text-center text-success mb-4">Наши услуги</h3>
        <div class="row">
            <div class="col-md-4 mb-4">
                <div class="card h-100 shadow-sm">
                    <div class="card-header text-center bg-success text-white">
                        Дизайн проект "Мини"
                    </div>
                    <div class="card-body">
                        <img src="http://127.0.0.1:8000/img/design/mini-dizajn-768x768.jpg" class="img-fluid mb-3"
                            alt="Мини проект">
                        <p class="card-text text-center lead fs-5">1200 ₽ / за кв. м.</p>
                        <ul>
                            <li>План обмеров помещения;</li>
                            <li>Планировочное решение;</li>
                            <li>План демонтажа и монтажа конструкций;</li>
                            <li>План возведения конструкций;</li>
                            <li>Планы размещения и подключения розеток, выключателей и осветительных приборов.</li>
                        </ul>
                        <div class="text-center">
                            <a href="#" data-bs-toggle="modal" data-bs-target="#callbackModal"
                                class="btn btn-success">Оставить заявку</a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-4 mb-4">
                <div class="card h-100 shadow-sm">
                    <div class="card-header text-center bg-success text-white">
                        Дизайн проект "Стандарт"
                    </div>
                    <div class="card-body">
                        <img src="http://127.0.0.1:8000/img/design/standart-dizajn-768x768.jpg" class="img-fluid mb-3"
                            alt="Стандарт проект">
                        <p class="card-text text-center lead fs-5">2400 ₽ / за кв. м.</p>
                        <ul>
                            <li>План обмеров помещения;</li>
                            <li>Планировочное решение;</li>
                            <li>Комплект технических чертежей для реализации проекта в процессе ремонта;</li>
                            <li>Реалистичная фото 3D визуализация будущего интерьера.</li>
                        </ul>
                        <div class="text-center">
                            <a href="#" data-bs-toggle="modal" data-bs-target="#callbackModal"
                                class="btn btn-success">Оставить заявку</a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-4 mb-4">
                <div class="card h-100 shadow-sm">
                    <div class="card-header text-center bg-success text-white">
                        Дизайн проект "Под ключ"
                    </div>
                    <div class="card-body">
                        <img src="http://127.0.0.1:8000/img/design/pod-klyuch-dizajn-768x768.jpg" class="img-fluid mb-3"
                            alt="Под ключ проект">
                        <p class="card-text text-center lead fs-5">2800 ₽ / за кв. м.</p>
                        <ul>
                            <li>Пакет чертежей для ремонта;</li>
                            <li>3D визуализация будущего интерьера;</li>
                            <li>Авторский надзор дизайнера в процессе ремонта;</li>
                            <li>Подбор и комплектация материалами и мебелью.</li>
                        </ul>
                        <div class="text-center">
                            <a href="#" data-bs-toggle="modal" data-bs-target="#callbackModal"
                                class="btn btn-success">Оставить заявку</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="row mt-5">
            <div class="col-md-4 mb-4">
                <div class="card h-100 shadow-sm">
                    <div class="card-header text-center bg-success text-white">
                        Планировочное решение
                    </div>
                    <div class="card-body">
                        <p class="card-text text-center lead fs-5">700 ₽ / за кв. м.</p>
                        <ul>
                            <li>Индивидуальное планирование пространства;</li>
                            <li>Расстановка мебели и предметов интерьера;</li>
                            <li>Зонирование пространства.</li>
                        </ul>
                        <div class="text-center">
                            <a href="#" data-bs-toggle="modal" data-bs-target="#callbackModal"
                                class="btn btn-success">Оставить заявку</a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-4 mb-4">
                <div class="card h-100 shadow-sm">
                    <div class="card-header text-center bg-success text-white">
                        Дизайнерская комплектация
                    </div>
                    <div class="card-body">
                        <p class="card-text text-center lead fs-5">от 1100 ₽ / за м.кв.</p>
                        <ul>
                            <li>Поиск и подбор мебели, материалов, сантехники и другого оборудования;</li>
                            <li>Консультации и сопровождение по вопросам закупок;</li>
                            <li>Работа с поставщиками.</li>
                        </ul>
                        <div class="text-center">
                            <a href="#" data-bs-toggle="modal" data-bs-target="#callbackModal"
                                class="btn btn-success">Оставить заявку</a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-4 mb-4">
                <div class="card h-100 shadow-sm">
                    <div class="card-header text-center bg-success text-white">
                        Декорирование интерьера
                    </div>
                    <div class="card-body">
                        <p class="card-text text-center lead fs-5">от 20000 ₽ / за компл.</p>
                        <ul>
                            <li>Оформление интерьера декором;</li>
                            <li>Подбор декора и аксессуаров;</li>
                            <li>Выбор от картин и текстиля до столовых приборов по индивидуальному запросу Заказчика.</li>
                        </ul>
                        <div class="text-center">
                            <a href="#" data-bs-toggle="modal" data-bs-target="#callbackModal"
                                class="btn btn-success">Оставить заявку</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="row mt-5">
            <div class="col-md-4 mb-4">
                <div class="card h-100 shadow-sm">
                    <div class="card-header text-center bg-success text-white">
                        Дизайн жилой комнаты
                    </div>
                    <div class="card-body">
                        <p class="card-text text-center lead fs-5">от 25000 ₽ / за компл.</p>
                        <ul>
                            <li>Гостиная;</li>
                            <li>Детская;</li>
                            <li>Спальня;</li>
                            <li>Кабинет.</li>
                        </ul>
                        <div class="text-center">
                            <a href="#" data-bs-toggle="modal" data-bs-target="#callbackModal"
                                class="btn btn-success">Оставить заявку</a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-4 mb-4">
                <div class="card h-100 shadow-sm">
                    <div class="card-header text-center bg-success text-white">
                        Дизайн нежилой комнаты
                    </div>
                    <div class="card-body">
                        <p class="card-text text-center lead fs-5 ">от 30000 ₽ / за компл.</p>
                        <ul>
                            <li>Совмещенный санузел;</li>
                            <li>Кухня;</li>
                            <li>Раздельный санузел;</li>
                            <li>Лондри.</li>
                        </ul>
                        <div class="text-center">
                            <a href="#" data-bs-toggle="modal" data-bs-target="#callbackModal"
                                class="btn btn-success">Оставить заявку</a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-4 mb-4">
                <div class="card h-100 shadow-sm">
                    <div class="card-header text-center bg-success text-white">
                        Живопись для интерьера
                    </div>
                    <div class="card-body">
                        <p class="card-text text-center lead fs-5">По договоренности</p>
                        <ul>
                            <li>Вы можете заказать картину, которая будет написана профессиональными художниками специально
                                под Ваш интерьер.</li>
                        </ul>
                        <div class="text-center">
                            <a href="#" data-bs-toggle="modal" data-bs-target="#callbackModal"
                                class="btn btn-success">Оставить заявку</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>












    <div class="container mt-5">
        <h2 class="text-center text-danger fw-bold mb-4">Этапы разработки дизайна интерьера</h2>
        <p class="text-center">Главной задачей дизайнера при разработке дизайна квартиры является проработка идеи будущего
            интерьера каждого помещения: кухни, спальни, гостиной, детской, ванной комнаты и туалета. Здесь важна не только
            красота и эстетика, но и функциональность, максимальный комфорт и удобство. Для достижения результата, который
            представлен в проекте необходимо учитывать состояние жилья и правильно составить предстоящий комплекс
            ремонтно-отделочных работ.</p>

        <div class="row mt-5 text-center">
            <div class="col-md-3 mb-4">
                <div class="card h-100 border-0">
                    <div class="card-body">
                        <div class="bg-light rounded-circle d-inline-flex p-4">
                            <i class="bi bi-telephone-fill fs-1 text-success"></i>
                        </div>
                        <h4 class="fw-bold mt-4">Этап 1</h4>
                        <h5 class="text-danger mt-2">Заявка</h5>
                        <p>Оформление заявки на приезд дизайнера и инженера</p>
                    </div>
                </div>
            </div>
            <div class="col-md-3 mb-4">
                <div class="card h-100 border-0">
                    <div class="card-body">
                        <div class="bg-light rounded-circle d-inline-flex p-4">
                            <i class="bi bi-people-fill fs-1 text-success"></i>
                        </div>
                        <h4 class="fw-bold mt-4">Этап 2</h4>
                        <h5 class="text-danger mt-2">Встреча на объекте или в офисе</h5>
                        <p>Обсуждение будущего проекта, Ваших пожеланий и предпочтений</p>
                    </div>
                </div>
            </div>
            <div class="col-md-3 mb-4">
                <div class="card h-100 border-0">
                    <div class="card-body">
                        <div class="bg-light rounded-circle d-inline-flex p-4">
                            <i class="bi bi-pencil-fill fs-1 text-success"></i>
                        </div>
                        <h4 class="fw-bold mt-4">Этап 3</h4>
                        <h5 class="text-danger mt-2">Подписание документов</h5>
                        <p>Заключаем договор с указанием стоимости и сроков выполнения</p>
                    </div>
                </div>
            </div>
            <div class="col-md-3 mb-4">
                <div class="card h-100 border-0">
                    <div class="card-body">
                        <div class="bg-light rounded-circle d-inline-flex p-4">
                            <i class="bi bi-bounding-box fs-1 text-success"></i>
                        </div>
                        <h4 class="fw-bold mt-4">Этап 4</h4>
                        <h5 class="text-danger mt-2">Разработка концепции</h5>
                        <p>Проводим обмеры, разработку концепции и планировки</p>
                    </div>
                </div>
            </div>
        </div>

        <div class="row mt-3 text-center">
            <div class="col-md-3 mb-4">
                <div class="card h-100 border-0">
                    <div class="card-body">
                        <div class="bg-light rounded-circle d-inline-flex p-4">
                            <i class="bi bi-rulers fs-1 text-success"></i>
                        </div>
                        <h4 class="fw-bold mt-4">Этап 5</h4>
                        <h5 class="text-danger mt-2">Чертежи</h5>
                        <p>Разработка технических чертежей для ремонта</p>
                    </div>
                </div>
            </div>
            <div class="col-md-3 mb-4">
                <div class="card h-100 border-0">
                    <div class="card-body">
                        <div class="bg-light rounded-circle d-inline-flex p-4">
                            <i class="bi bi-images fs-1 text-success"></i>
                        </div>
                        <h4 class="fw-bold mt-4">Этап 6</h4>
                        <h5 class="text-danger mt-2">Визуализации</h5>
                        <p>Разработка реалистичных 3D визуализаций</p>
                    </div>
                </div>
            </div>
            <div class="col-md-3 mb-4">
                <div class="card h-100 border-0">
                    <div class="card-body">
                        <div class="bg-light rounded-circle d-inline-flex p-3">
                            <i class="bi bi-basket3-fill fs-1 text-success"></i>
                        </div>
                        <h4 class="fw-bold mt-4">Этап 7</h4>
                        <h5 class="text-danger mt-2">Комплектация</h5>
                        <p>Подбор материалов, мебели и декора</p>
                    </div>
                </div>
            </div>
            <div class="col-md-3 mb-4">
                <div class="card h-100 border-0">
                    <div class="card-body">
                        <div class="bg-light rounded-circle d-inline-flex p-4">
                            <i class="bi bi-calendar-check fs-1 text-success"></i>
                        </div>
                        <h4 class="fw-bold mt-4">Этап 8</h4>
                        <h5 class="text-danger mt-2">Сдача проекта</h5>
                        <p>Подписываем акт сдачи проекта и приступаем к ремонту</p>
                    </div>
                </div>
            </div>
        </div>
    </div>





    <div class="container mt-5">
        <h2 class="text-center text-danger fw-bold mb-4">Статьи о дизайне и оформлении интерьеров</h2>
        <p class="text-center mb-5">Красноярск многие считают законодателем сибирской моды, и это справедливо, в том числе
            для обустройства жилья. Появление новых тенденций и применение различных стилей, позволяет реализовывать самые
            сложные задумки клиентов. Дизайн интерьера отражает ценности и индивидуальность каждого из нас. Создавая дизайн
            проект интерьера квартиры, дизайнер учитывает множество факторов.</p>

        <div class="row">
            <div class="col-md-4">
                <div class="card mb-4">
                    <img src="http://127.0.0.1:8000/img/design/interer-v-stile-neoklassika.-oblozhka-768x512.jpg"
                        class="card-img-top" alt="Стиль неоклассика в интерьере">
                    <div class="card-body">
                        <h5 class="card-title text-center fw-bold">Стиль неоклассика в интерьере</h5>
                        <p class="card-text">Стиль неоклассика сочетает в себе классические мотивы и современные тенденции.
                            Это сочетание простоты и элегантности, наличие умеренной роскоши, натуральные материалы, нежные
                            пастельные оттенки, симметричные геометрические формы.</p>
                        <div class="d-flex justify-content-center">
                            <a href="#" class="btn btn-success">Читать статью</a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="card mb-4">
                    <img src="http://127.0.0.1:8000/img/design/intrer-v-stile-loft.-oblozhka-768x512.jpg"
                        class="card-img-top" alt="Стиль лофт в интерьере">
                    <div class="card-body">
                        <h5 class="card-title text-center fw-bold">Стиль лофт в интерьере</h5>
                        <p class="card-text">Лофт-стиль в интерьере представляет собой смелое сочетание индустриальных
                            элементов с современными акцентами. Этот стиль часто создает атмосферу свободного пространства с
                            открытой планировкой и видимыми конструктивными деталями.</p>
                        <div class="d-flex justify-content-center">
                            <a href="#" class="btn btn-success">Читать статью</a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="card mb-4">
                    <img src="http://127.0.0.1:8000/img/design/interer-v-stile-minimalizm.-oblozhka-768x512.jpg"
                        class="card-img-top" alt="Стиль минимализм в интерьере">
                    <div class="card-body">
                        <h5 class="card-title text-center fw-bold">Стиль минимализм в интерьере</h5>
                        <p class="card-text">Минимализм это стиль, в котором преобладают чистые линии, пространство
                            свободное от излишеств, атмосфера спокойствия и гармонии, где функциональность и эстетика идут
                            рука об руку.</p>
                        <div class="d-flex justify-content-center">
                            <a href="#" class="btn btn-success">Читать статью</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="row">
            <div class="col-md-4">
                <div class="card mb-4">

                    <div class="card-body">
                        <h5 class="card-title text-center fw-bold">Скандинавский стиль в интерьере</h5>
                        <p class="card-text">Стиль сочетающий в себе функциональность, простоту, эстетику и природность.
                            Отражает сбалансированный и гармоничный образ жизни при помощи светлых нейтральных оттенков,
                            естественных материалов, простых линий и акцентовых элементов декора.</p>
                        <div class="d-flex justify-content-center">
                            <a href="#" class="btn btn-success">Читать статью</a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="card mb-4">

                    <div class="card-body">
                        <h5 class="card-title text-center fw-bold">Эко-стиль в интерьере</h5>
                        <p class="card-text">В эко стиле природа и экологичность играют ключевую роль. Здесь важно создание
                            здорового и экологически чистого пространства, которое способствует хорошему самочувствию и
                            балансу с природой.</p>
                        <div class="d-flex justify-content-center">
                            <a href="#" class="btn btn-success">Читать статью</a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="card mb-4">

                    <div class="card-body">
                        <h5 class="card-title text-center fw-bold">Стиль бохо в интерьере</h5>
                        <p class="card-text">Бохо стиль позволяет выразить индивидуальность и творчество, объединяя разные
                            элементы и уникальные находки. Это стиль для тех, кто ищет свободу от правил и желает создать
                            неповторимое и вдохновляющее пространство.</p>
                        <div class="d-flex justify-content-center">
                            <a href="#" class="btn btn-success">Читать статью</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>




    <x-room />





    <div class="container my-5">
        <h2 class="text-center text-danger fw-bold mb-4">Отзывы заказчиков о нашей компании</h2>
        <div class="row">
            <div class="col-md-4">
                <div class="card border-success mb-4">
                    <div class="card-body">
                        <div class="text-center mb-3">
                            <span class="text-warning fs-3">★★★★★</span>
                        </div>
                        <p class="card-text">Хотелось бы сказать большое спасибо дизайнеру Марине за дизайн проект, который
                            был разработан. Она предложила отличный вариант для оформления интерьера, все продумано до
                            мелочей и в рамках бюджета, который мы планировали. В процессе ремонта Марина занималась
                            подбором и закупкой всех материалов. Все материалы, которые приобретались полностью
                            соответствовали тем, которые были на визуализациях, даже цветовое оформление стен соответствовал
                            на все 100%. В компании все сотрудники работают очень слаженно, благодаря чему мы получили
                            отличный результат.</p>
                        <div class="text-center fw-bold">Алексей</div>
                        <div class="text-center text-muted">ул. 9 Мая, 46</div>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="card border-success mb-4">
                    <div class="card-body">
                        <div class="text-center mb-3">
                            <span class="text-warning fs-3">★★★★★</span>
                        </div>
                        <p class="card-text">Изучив информацию о нескольких организациях, я обратилась в компанию ИП
                            Покивайлов. Подписала договор на оказание услуг, по созданию дизайнерского проекта и дальнейшему
                            ремонту под ключ. Очень здорово и удобно, что в одном месте мы смогли заказать и дизайн и
                            ремонт. Работа дизайнера интерьера Лилии и ребят отделочников выполнена качественно и красиво.
                            Лилии удалось создать проект, который с моей фантазией я думала невозможно осуществить.
                            Понравилось как обыграли кухню и прихожую. Получилось все красиво и уютно. Мастера также большие
                            молодцы. Дизайнерская задумка была воплощена. Спасибо всем ребятам, за хорошо выполненную работу
                            за честное отношение. Уверены, что обновление нашего жилья будет радовать нас не один год. Я
                            довольна.</p>
                        <div class="text-center fw-bold">Юлия Горина</div>
                        <div class="text-center text-muted">ул. Партизана Железняка, 48И</div>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="card border-success mb-4">
                    <div class="card-body">
                        <div class="text-center mb-3">
                            <span class="text-warning fs-3">★★★★★</span>
                        </div>
                        <p class="card-text">Большое спасибо дизайнеру Лилии. Нужен был дизайн проект детской комнаты.
                            Многие фирмы и дизайнерские студии Красноярска отказали нам ссылаясь на то, что частично не
                            работают, только под ключ. Лилия нам не отказала. Девушка очень открытая и приятная. Сделала нам
                            очень красивый и стильный проект. Также дала совет, куда в дальнейшем обратиться за покупкой
                            мебели и строительных материалов. Подкопим денег и за ремонтом комнаты обратимся в эту же
                            компанию.</p>
                        <div class="text-center fw-bold">Алина Лаликина</div>
                        <div class="text-center text-muted">ул. Дмитрия Мартынова, 47</div>
                    </div>
                </div>
            </div>
        </div>
        <div class="text-center mt-4">
            <a href="/otzyvy" class="btn btn-success">Все отзывы</a>
        </div>
    </div>










    <div class="container my-5">
        <h2 class="text-center text-danger fw-bold mb-4 text-uppercase">Вопросы и ответы про дизайн
        </h2>

        <div class="accordion w-md-50 mx-auto mt-5" id="faqAccordion">
            <div class="accordion-item">
                <h2 class="accordion-header" id="headingOne">
                    <button class="accordion-button" type="button" data-bs-toggle="collapse"
                        data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                        Что такое дизайн проект и зачем он нужен?
                    </button>
                </h2>
                <div id="collapseOne" class="accordion-collapse collapse show" aria-labelledby="headingOne"
                    data-bs-parent="#faqAccordion">
                    <div class="accordion-body">
                        Это спланированное оформление вашего жилья — продуманное планировочное решение с расстановкой
                        мебели, реалистичная визуализация будущего интерьера и рабочие чертежи для ремонта.
                    </div>
                </div>
            </div>

            <div class="accordion-item">
                <h2 class="accordion-header" id="headingTwo">
                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                        data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                        Что включает в себя комплектация?
                    </button>
                </h2>
                <div id="collapseTwo" class="accordion-collapse collapse" aria-labelledby="headingTwo"
                    data-bs-parent="#faqAccordion">
                    <div class="accordion-body">
                        На этапе разработки дизайнер подбирает и закладывает в проект отделочные материалы (обои,
                        декоративная штукатурка. краска, напольное покрытие, керамогранит), сантехническое оборудование,
                        освещение и декор. В процессе реализаций весь запланированный материал заказывается в магазинах
                        Красноярска к нужному времени.
                    </div>
                </div>
            </div>

            <div class="accordion-item">
                <h2 class="accordion-header" id="headingThree">
                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                        data-bs-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                        Можно ли параллельно начать ремонт в квартире и разработку дизайн-проекта?
                    </button>
                </h2>
                <div id="collapseThree" class="accordion-collapse collapse" aria-labelledby="headingThree"
                    data-bs-parent="#faqAccordion">
                    <div class="accordion-body">
                        Да, конечно. На самом деле, в большинстве случаев мы так и работаем, в любом случае до полного
                        завершения создания проекта, мы обычно приступаем к демонтажным работам, подготовке и выравниванию
                        поверхностей, к моменту как будет готова чертежная документация, наши мастера по ремонту выполнят
                        большой объем работы и ремонт таким образом не затянется на долгое время.
                    </div>
                </div>
            </div>

            <div class="accordion-item">
                <h2 class="accordion-header" id="headingFour">
                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                        data-bs-target="#collapseFour" aria-expanded="false" aria-controls="collapseFour">
                        Я живу в другом городе и мне нужна разработка дизайна с последующим ремонтом в квартире, что делать
                        если я не имею возможности приехать к Вам в офис?
                    </button>
                </h2>
                <div id="collapseFour" class="accordion-collapse collapse" aria-labelledby="headingFour"
                    data-bs-parent="#faqAccordion">
                    <div class="accordion-body">
                        Это не проблема, мы достаточно часто работаем и поддерживаем связь с заказчиками удаленно. Самое
                        главное – это получить доступ к квартире, чтобы сделать замеры и посмотреть техническое состояние
                        помещения. Заключение договора, подписание пакета документов и согласование по дизайну мы может
                        осуществлять дистанционно.
                    </div>
                </div>
            </div>

            <div class="accordion-item">
                <h2 class="accordion-header" id="headingFive">
                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                        data-bs-target="#collapseFive" aria-expanded="false" aria-controls="collapseFive">
                        Как осуществляется оплата за разработку дизайна?
                    </button>
                </h2>
                <div id="collapseFive" class="accordion-collapse collapse" aria-labelledby="headingFive"
                    data-bs-parent="#faqAccordion">
                    <div class="accordion-body">
                        При заключении договора мы берем предоплату 50%, остальная сумма оплачивает по завершению работы
                        дизайнера, после подписания акта приема-сдачи работ.
                    </div>
                </div>
            </div>

            <div class="accordion-item">
                <h2 class="accordion-header" id="headingSix">
                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                        data-bs-target="#collapseSix" aria-expanded="false" aria-controls="collapseSix">
                        Какие сроки разработки дизайна интерьера?
                    </button>
                </h2>
                <div id="collapseSix" class="accordion-collapse collapse" aria-labelledby="headingSix"
                    data-bs-parent="#faqAccordion">
                    <div class="accordion-body">
                        На разработку дизайна уходит в среднем полтора-два месяца. Срок может быть больше в случае площади
                        помещения свыше 150 м2 или если предстоит разработка проекта для ресторана или кафе.
                    </div>
                </div>
            </div>

            <div class="accordion-item">
                <h2 class="accordion-header" id="headingSeven">
                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                        data-bs-target="#collapseSeven" aria-expanded="false" aria-controls="collapseSeven">
                        Долго ли ждать материалы, которые приобретаются под заказ?
                    </button>
                </h2>
                <div id="collapseSeven" class="accordion-collapse collapse" aria-labelledby="headingSeven"
                    data-bs-parent="#faqAccordion">
                    <div class="accordion-body">
                        Примерно 2-3 недели, но в связи с загруженностью железнодорожного сообщения, сроки ожидания
                        материала могут увеличиваться. Во избежание простоя, наши дизайнеры заблаговременно оформят
                        доставку, чтобы материал пришел вовремя.
                    </div>
                </div>
            </div>

            <div class="accordion-item">
                <h2 class="accordion-header" id="headingEight">
                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                        data-bs-target="#collapseEight" aria-expanded="false" aria-controls="collapseEight">
                        Приобрели частный дом с большой придомовой территорией, осуществляете разработку ландшафтного
                        дизайна?
                    </button>
                </h2>
                <div id="collapseEight" class="accordion-collapse collapse" aria-labelledby="headingEight"
                    data-bs-parent="#faqAccordion">
                    <div class="accordion-body">
                        К сожалению наша компания не оказывает услуги по ландшафтному оформлению
                    </div>
                </div>
            </div>

        </div>





        <x-flamp />
        <x-reviews />


        {!! $page->body !!}



    @endsection
