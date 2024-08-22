@extends('layouts.app')

@section('title', $page->title)

@section('content')

    {!! $page->body !!}




    <div class="container my-5">
        <h2 class="fs-2 text-center fw-bold text-danger mb-4">Перепланировка однокомнатной квартиры в Красноярске</h2>
        <p class="lead text-center fs-5">Преобразить квартиру можно не только с помощью ремонта, но и с помощью дизайна
            интерьера и перепланировки. Правильная расстановка акцентов, дизайнерский стиль и зонирование помогут правильно
            организовать жилое пространство для комфортной жизни.</p>

        <div class="row mt-4">
            <div class="col-md-4">
                <div class="card h-100">
                    <div id="slider1" class="carousel slide" data-bs-ride="carousel">
                        <div class="carousel-inner">
                            <div class="carousel-item active">
                                <img src="{{ asset('img/room/Снимок экрана 2024-08-22 141911.png') }}"
                                    class="d-block w-100 img-fluid" alt="План 1"
                                    style="height: 400px; object-fit: cover;">
                            </div>
                            <div class="carousel-item">
                                <img src="{{ asset('img/room/Снимок экрана 2024-08-22 142315.png') }}"
                                    class="d-block w-100 img-fluid" alt="План 2"
                                    style="height: 400px; object-fit: cover;">
                            </div>
                        </div>
                        <button class="carousel-control-prev" type="button" data-bs-target="#slider1" data-bs-slide="prev">
                            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                            <span class="visually-hidden">Previous</span>
                        </button>
                        <button class="carousel-control-next" type="button" data-bs-target="#slider1" data-bs-slide="next">
                            <span class="carousel-control-next-icon" aria-hidden="true"></span>
                            <span class="visually-hidden">Next</span>
                        </button>
                    </div>
                    <div class="card-body">
                        <p class="card-text">Из однокомнатной квартиры «хрущевки» можно сделать квартиру-студию. Расширить
                            пространство санузла, что позволит уместить стиральную машинку. На месте кладовки сделать
                            гардеробную комнату.</p>
                    </div>
                </div>
            </div>

            <div class="col-md-4">
                <div class="card h-100">
                    <div id="slider2" class="carousel slide" data-bs-ride="carousel">
                        <div class="carousel-inner pb-5">
                            <div class="carousel-item active">
                                <img src="{{ asset('img/room/Снимок экрана 2024-08-22 142434.png') }}"
                                    class="d-block w-100 img-fluid" alt="План 1"
                                    style="height: 350px; object-fit: cover;">
                            </div>
                            <div class="carousel-item">
                                <img src="{{ asset('img/room/Снимок экрана 2024-08-22 142455.png') }}"
                                    class="d-block w-100 img-fluid" alt="План 2"
                                    style="height: 350px; object-fit: cover;">
                            </div>
                        </div>
                        <button class="carousel-control-prev" type="button" data-bs-target="#slider2" data-bs-slide="prev">
                            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                            <span class="visually-hidden">Previous</span>
                        </button>
                        <button class="carousel-control-next" type="button" data-bs-target="#slider2" data-bs-slide="next">
                            <span class="carousel-control-next-icon" aria-hidden="true"></span>
                            <span class="visually-hidden">Next</span>
                        </button>
                    </div>
                    <div class="card-body">
                        <p class="card-text">Можно расширить жилое пространство если утеплить лоджию, сделать теплый пол и
                            остекление с высокими теплоизоляционными характеристиками. Объединение коридора и кухни также
                            позволит расширить площадь.</p>
                    </div>
                </div>
            </div>

            <div class="col-md-4">
                <div class="card h-100">
                    <div id="slider3" class="carousel slide" data-bs-ride="carousel">
                        <div class="carousel-inner">
                            <div class="carousel-item active">
                                <img src="{{ asset('img/room/Снимок экрана 2024-08-22 142516.png') }}"
                                    class="d-block w-100 img-fluid" alt="План 1"
                                    style="height: 400px; object-fit: cover;">
                            </div>
                            <div class="carousel-item">
                                <img src="{{ asset('img/room/Снимок экрана 2024-08-22 142556.png') }}"
                                    class="d-block w-100 img-fluid" alt="План 2"
                                    style="height: 400px; object-fit: cover;">
                            </div>
                        </div>
                        <button class="carousel-control-prev" type="button" data-bs-target="#slider3" data-bs-slide="prev">
                            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                            <span class="visually-hidden">Previous</span>
                        </button>
                        <button class="carousel-control-next" type="button" data-bs-target="#slider3" data-bs-slide="next">
                            <span class="carousel-control-next-icon" aria-hidden="true"></span>
                            <span class="visually-hidden">Next</span>
                        </button>
                    </div>
                    <div class="card-body">
                        <p class="card-text">Угловую однокомнатную квартиру можно переделать в еврооднушку. Объединить
                            кухню и гостиную, а с помощью перегородки отделить пространство где будет расположена спальня.
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>








    <div class="container my-5">
        <h2 class="fs-2 text-center fw-bold text-danger mb-4">Стоимость ремонта однокомнатной квартиры в Красноярске</h2>

        <table class="table table-bordered fs-5">
            <thead>
                <tr>
                    <th scope="col" style="text-align: center;">Виды услуг</th>
                    <th scope="col" style="text-align: center;">Цена</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td class="text-center"><a href="#" class="text-success text-decoration-none">Разработка и
                            создание дизайнерского проекта</a></td>
                    <td class="text-center">от 2300 за кв. м.</td>
                </tr>
            </tbody>
        </table>

        <p class="lead fs-5 text-center">Благодаря творческому подходу нашего дизайнера — в результате Вы сможете получить
            идеально обустроенное для проживания жилье.</p>

        <table class="table table-bordered fs-5">
            <thead>
                <tr>
                    <th scope="col" style="text-align: center;">Виды ремонта</th>
                    <th scope="col" style="text-align: center;">Стоимость</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td class="text-center"><a href="#" class="text-success text-decoration-none">Капитальный
                            ремонт однокомнатной квартиры</a></td>
                    <td class="text-center">от 12000 за кв. м.</td>
                </tr>
                <tr>
                    <td class="text-center"><a href="#" class="text-success text-decoration-none">Косметический
                            ремонт однокомнатной квартиры</a></td>
                    <td class="text-center">от 5000 за кв. м.</td>
                </tr>
                <tr>
                    <td class="text-center"><a href="#" class="text-success text-decoration-none">Ремонт
                            однокомнатной квартиры под ключ</a></td>
                    <td class="text-center">от 12000 за кв. м.</td>
                </tr>
                <tr>
                    <td class="text-center"><a href="#" class="text-success text-decoration-none">Евроремонт
                            однокомнатной квартиры</a></td>
                    <td class="text-center">от 13000 за кв. м.</td>
                </tr>
                <tr>
                    <td class="text-center"><a href="#" class="text-success text-decoration-none">Дизайнерский
                            ремонт однокомнатной квартиры</a></td>
                    <td class="text-center">от 19000 за кв. м.</td>
                </tr>
            </tbody>
        </table>
    </div>






    <x-flamp />
    <x-reviews />
    <x-form />



@endsection
