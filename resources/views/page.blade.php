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
            <div class="our-works-section mt-5">
                <h2 class="text-center text-danger fw-bold mb-4">Наши работы</h2>
                <div class="row">
                    @foreach ($works as $work)
                        <div class="col-md-4">
                            <div class="card mb-4 shadow-sm">
                                <img src="{{ Voyager::image($work->image) }}" class="card-img-top" alt="{{ $work->title }}">
                                <div class="card-body">
                                    <h5 class="card-title text-danger fw-bold">{{ $work->title }}</h5>
                                    <p class="card-text">{{ $work->address }}</p>
                                    <p class="card-text">Площадь: {{ $work->area }} м<sup>2</sup></p>
                                    <a href="#" class="btn btn-success">Посмотреть</a>
                                </div>
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>
        @endif

    </div>
@endsection
