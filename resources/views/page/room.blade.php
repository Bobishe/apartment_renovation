@extends('layouts.app')

@section('title', $page->title)

@section('content')

    {!! $page->body !!}





    <div class="container my-5">
        <h2 class="fs-2 text-center fw-bold text-danger mb-4">Перепланировка четырехкомнатной квартиры в Красноярске</h2>
        <p class="lead text-center fs-5">Наша компания осуществляет ремонт четырехкомнатных квартир в Красноярске. Прежде чем
            приступать к работе, необходимо определиться с видом ремонта. Если Вы желаете просто обновить обстановку, то
            идеально подойдет косметический ремонт. А если требуется более серьезный подход, то капитальный.

            Благодаря большой площади можно применить разные варианты перепланировки. Во вторичном жилье это особенно
            актуально, так как не смотря на количество комнат, они достаточно тесные, особенно после расстановки мебели. Мы
            можем предложить для Вас интересные идеи планирования жилого пространства и зонирования исходя из ваших
            предпочтений. </p>
        <div class="row mt-4">
            <div class="col-md-4">
                <div class="card h-100">
                    <div id="slider1" class="carousel slide" data-bs-ride="carousel">
                        <div class="carousel-inner" style="min-height: 230px;">
                            <div class="carousel-item active"><img class="d-block mx-auto"
                                    style="max-height: 250px; width: auto;"
                                    src="http://127.0.0.1:8000/img/room/Снимок экрана 2024-08-22 210927.png" alt="План 1">
                            </div>
                            <div class="carousel-item"><img class="d-block mx-auto" style="max-height: 250px; width: auto;"
                                    src="http://127.0.0.1:8000/img/room/Снимок экрана 2024-08-22 210943.png" alt="План 2">
                            </div>
                        </div>
                        <button class="carousel-control-prev" type="button" data-bs-target="#slider1" data-bs-slide="prev">
                            <span class="visually-hidden">Previous</span> </button> <button class="carousel-control-next"
                            type="button" data-bs-target="#slider1" data-bs-slide="next"> <span
                                class="visually-hidden">Next</span> </button>
                    </div>
                    <div class="card-body">
                        <p class="card-text">В квартире приняли решение объединить кухню и гостиную, при этом возвести
                            перегородку под кухонный гарнитур. Объединить ванную комнату и туалет. Так как кухонный дверной
                            проем будет заделан, появляется пространство под кладовку.

                            В большой комнате можно перенести дверной проем, возвести перегородку и таким образом оформить
                            место под гардеробную. В итоге после перепланировки получилась еврочетырешка.</p>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="card h-100">
                    <div id="slider2" class="carousel slide" style="min-height: 230px;" data-bs-ride="carousel">
                        <div class="carousel-inner pb-5">
                            <div class="carousel-item active"><img class="d-block mx-auto"
                                    style="max-height: 250px; width: auto;"
                                    src="http://127.0.0.1:8000/img/room/Снимок экрана 2024-08-22 211021.png" alt="План 1">
                            </div>
                            <div class="carousel-item"><img class="d-block mx-auto" style="max-height: 250px; width: auto;"
                                    src="http://127.0.0.1:8000/img/room/Снимок экрана 2024-08-22 211035.png" alt="План 2">
                            </div>
                        </div>
                        <button class="carousel-control-prev" type="button" data-bs-target="#slider2" data-bs-slide="prev">
                            <span class="visually-hidden">Previous</span> </button> <button class="carousel-control-next"
                            type="button" data-bs-target="#slider2" data-bs-slide="next"> <span
                                class="visually-hidden">Next</span> </button>
                    </div>
                    <div class="card-body">
                        <p class="card-text">Первоначально были демонтированы все межкомнатные перегородки и сантехническая
                            кабина, далее согласно дизайн-проекту возводились новые перегородки из ПГП. Объединили кухню и
                            гостиную, за счет площади маленького коридора расширили площадь ванной комнаты. Одну из комнат
                            сделали меньше и оборудовали под гардеробную. Остальные перегородки возводились на прежних
                            местах.</p>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="card h-100">
                    <div id="slider3" class="carousel slide" style="min-height: 230px;" data-bs-ride="carousel">
                        <div class="carousel-inner">
                            <div class="carousel-item active"><img class="d-block mx-auto"
                                    style="max-height: 250px; width: auto;"
                                    src="http://127.0.0.1:8000/img/room/Снимок экрана 2024-08-22 211100.png" alt="План 1">
                            </div>
                            <div class="carousel-item"><img class="d-block mx-auto" style="max-height: 250px; width: auto;"
                                    src="http://127.0.0.1:8000/img/room/Снимок экрана 2024-08-22 211114.png" alt="План 2">
                            </div>
                        </div>
                        <button class="carousel-control-prev" type="button" data-bs-target="#slider3" data-bs-slide="prev">
                            <span class="visually-hidden">Previous</span> </button> <button class="carousel-control-next"
                            type="button" data-bs-target="#slider3" data-bs-slide="next"> <span
                                class="visually-hidden">Next</span> </button>
                    </div>
                    <div class="card-body">
                        <p class="card-text">В данном проекте переделали четырехкомнатную квартиру в евротрешку. Убрали
                            кладовку и по центру возвели перегородку, таким образом в обоих комнатах появилось место под
                            шкафы. Объединили две комнаты, где будет располагаться спальня и рабочая зона. Совместили
                            санузел. Гостиную и комнату объединили и расширили площадь коридора, что позволило поставить
                            вместительный встроенный шкаф.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="container my-5">
        <h2 class="fs-2 text-center fw-bold text-danger mb-4">Стоимость ремонта четырехкомнатной квартиры в Красноярске</h2>
        <table class="table table-bordered fs-5">
            <thead>
                <tr>
                    <th style="text-align: center;" scope="col">Виды услуг</th>
                    <th style="text-align: center;" scope="col">Цена</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td class="text-center"><a class="text-success text-decoration-none" href="#">Разработка
                            дизайнерского проекта квартиры</a></td>
                    <td class="text-center">от 2300 за кв. м.</td>
                </tr>
            </tbody>
        </table>
        <p class="lead fs-5 text-center">Наш дизайнер сможет разработать для Вас идеальную концепцию и дизайнерский стиль
            квартиры.</p>
        <table class="table table-bordered fs-5">
            <thead>
                <tr>
                    <th style="text-align: center;" scope="col">Виды ремонта</th>
                    <th style="text-align: center;" scope="col">Стоимость</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td class="text-center"><a class="text-success text-decoration-none" href="#">Капитальный
                            ремонт четырехкомнатной квартиры</a></td>
                    <td class="text-center">от 12000 за кв. м.</td>
                </tr>
                <tr>
                    <td class="text-center"><a class="text-success text-decoration-none" href="#">Косметический
                            ремонт четырехкомнатной квартиры</a></td>
                    <td class="text-center">от 5000 за кв. м.</td>
                </tr>
                <tr>
                    <td class="text-center"><a class="text-success text-decoration-none" href="#">Ремонт
                            четырехкомнатной квартиры под ключ</a></td>
                    <td class="text-center">от 12000 за кв. м.</td>
                </tr>
                <tr>
                    <td class="text-center"><a class="text-success text-decoration-none" href="#">Евроремонт
                            четырехкомнатной квартиры</a></td>
                    <td class="text-center">от 13000 за кв. м.</td>
                </tr>
                <tr>
                    <td class="text-center"><a class="text-success text-decoration-none" href="#">Дизайнерский
                            ремонт четырехкомнатной квартиры</a></td>
                    <td class="text-center">от 19000 за кв. м.</td>
                </tr>
            </tbody>
        </table>
    </div>
    <div class="container my-5 mb-5">
        <h2 class="fs-2 text-center fw-bold text-danger mb-4 ">Примеры ремонта трехкомнатной квартиры в Красноярске</h2>
        <div class="row text-center mt-5">
            <div class="col-md-4">
                <div class="card"><img class="card-img-top"
                        src="http://127.0.0.1:8000/img/room/Kompleksnyj-remont-trehkomnatnoj-kvartiry.-Vesny-34.-Foto-24-225x300.jpg"
                        alt="Дизайнерский ремонт">
                    <div class="card-body">
                        <p class="card-text text-danger fw-bold">Комплексный ремонт квартиры</p>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="card"><img class="card-img-top"
                        src="http://127.0.0.1:8000/img/room/remont-trehkomnatnoj-kvartiry-yakovleva-1a.-foto-1-225x300.jpg"
                        alt="Капитальный ремонт">
                    <div class="card-body">
                        <p class="card-text text-danger fw-bold">Ремонт квартиры под ключ

                        </p>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="card"><img class="card-img-top"
                        src="http://127.0.0.1:8000/img/room/2-ya-botanicheskaya.-foto-18-225x300.jpg"
                        alt="Комплексный ремонт">
                    <div class="card-body">
                        <p class="card-text text-danger fw-bold">Капитальный ремонт квартиры</p>
                    </div>
                </div>
            </div>
        </div>
        <p class="lead text-center fs-5 mt-5">Вы можете посмотреть <a class="text-success text-decoration-none"
                href="#">галерею выполненных работ</a> и <a class="text-success text-decoration-none"
                href="#">видео отчеты</a> на нашем сайте.</p>
        <p class="lead fs-5">Заказать ремонт квартиры Вы можете любым удобным для вас способом:</p>
        <ul class="fs-5">
            <li>заявка на сайте;</li>
            <li>в телефонном режиме, позвонив по номеру <a class="text-success text-decoration-none"
                    href="tel:+73912938226">+7(391)293-82-26</a>.</li>
        </ul>
    </div>



    <x-priceBlock />
    <x-room />
    <x-flamp />
    <x-reviews />
    <x-form />



@endsection
