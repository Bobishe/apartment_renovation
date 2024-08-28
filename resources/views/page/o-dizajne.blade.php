@extends('layouts.app')

@section('title', $page->title)

@section('content')

    {!! $page->body !!}





    <div class="container my-5">

    </div>



    <div class="container my-5">
        <div class="row align-items-center"><!-- Текстовый блок -->
            <div class="col-md-8">
                <h2 class="text-danger fw-bold">Полезные статьи о дизайне интерьера квартир</h2>
                <p class="fs-5 lead">
                    Дизайн интерьера квартиры — стало очень популярной услугой. Именно поэтому мы создали данный раздел, в
                    котором
                    будет много полезной информации на темы, связанные с дизайном. В наших статьях мы расскажем:
                </p>

                <ul class="fs-5 lead">
                    <li>о дизайнерских стилях, которые часто применяются при оформлении интерьера квартир в Красноярске;
                    </li>
                    <li>о материалах, которые применяются в дизайнерском ремонте;</li>
                    <li>об актуальных дизайнерских трендах;</li>
                    <li>о различных декоративных элементах и их применении в интерьере;</li>
                    <li>о наиболее популярных цветовых решениях, фактурах, текстурах и их сочетаниях.</li>
                </ul>
            </div>
            <!-- Изображение -->
            <div class="col-md-4"><img class="img-fluid" src="http://127.0.0.1:8000/img/blog/банер1-new.png"
                    alt="Скидка на ремонт"></div>
        </div>
    </div>


    <div class="container my-5">
        <div class="row align-items-start">
            <!-- Текстовый блок -->
            <div class="col-md-8">
                @foreach ($works as $work)
                    <div class="w-100 mb-4">
                        <div class="card card-blog h-100 shadow-sm"
                            style="border: none; transition: transform 0.3s ease, box-shadow 0.3s ease;">
                            <div class="row g-0">
                                <!-- Изображение -->
                                <div class="col-md-6">
                                    <div class="img-wrapper position-relative">
                                        <img src="storage/{{ $work->img }}" alt="{{ $work->title }}" class="img-fluid"
                                            style="width: 100%; height: auto; object-fit: cover;">
                                    </div>
                                </div>
                                <!-- Текстовый блок -->
                                <div class="col-md-6 d-flex align-items-center">
                                    <div class="card-body">
                                        <h5 class="card-title fw-bold">{{ $work->title }}</h5>
                                        <p class="card-text lead fs-6">{{ $work->description }}</p>
                                        <a href="{{ $work->url }}" class="text-success fw-bold">Подробнее</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>

            <!-- Блок с изображением -->
            <div class="col-md-4">
                <div class="d-flex align-items-start">
                    <img src="http://127.0.0.1:8000/img/blog/baner22-new.png" alt="Скидка на ремонт" class="img-fluid w-100"
                        style="max-height: 500px; object-fit: cover;">
                </div>
            </div>
        </div>
    </div>



@endsection
