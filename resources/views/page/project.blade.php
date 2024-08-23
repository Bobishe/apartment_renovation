@extends('layouts.app')

@section('title', $page->title)

@section('content')

    <div class="container my-5">
        <h2 class="text-center text-danger fw-bold mb-4">Фото ремонта квартир в Красноярске</h2>
        <p class="text-center fs-5">В данном разделе сайта представлен фото отчет по ремонту квартир. Портфолио
            компании включает в себя ремонты разной сложности: капитальный, ремонт под ключ, комплексный, дизайнерский,
            косметический. Производим ремонт, как в новостройках, так и во вторичном жилье. Большинство объектов сняты в
            формате до/после, в некоторых случаях в процессе ремонта. Мы публикуем подробное описание хода ремонтных
            мероприятий. Кроме фото, Вы также можете ознакомиться с видео отчетами и посмотреть видео отзывы наших клиентов.
        </p>
    </div>


    {!! $page->body !!}

    @if ($works)
        <div class="container mt-5">
            <div class="row mt-5">
                @foreach ($works as $work)
                    <div class="col-md-4 d-flex align-items-stretch">
                        <div class="card mb-4 shadow-sm">
                            <!-- Показываем только одно изображение -->
                            <div class="card-img-top" style="height: 250px; overflow: hidden;">
                                @if ($work->image)
                                    <img src="{{ Voyager::image(json_decode($work->image, true)[0]) }}"
                                        class="d-block w-100 h-100" alt="{{ $work->title }}" style="object-fit: cover;">
                                @endif
                            </div>

                            <!-- Текстовая информация о работе -->
                            <div class="card-body text-center d-flex flex-column">
                                <h5 class="card-title text-success fw-bold fs-4">{{ $work->title }}</h5>
                                <p class="card-text fs-5">{{ $work->description }}</p>
                     
                                <div class="mt-auto">
                                    <a href="{{ $work->url }}" class="btn btn-outline-success fs-5">Подробнее...</a>
                                </div>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    @endif





    <x-form />



@endsection
