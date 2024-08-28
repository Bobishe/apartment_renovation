@extends('layouts.app')

@section('title', $page->title)

@section('content')

    {!! $page->body !!}

    <div class="container">
        <h2 class="text-center text-danger fw-bold mt-5">Видео ремонта квартир в Красноярске</h2>
        <p class="text-center lead fs-5">Получить полноценное представление о деятельности компании поможет — видео ремонта
            квартир, собранные в данном разделе.</p>
        <div class="row mt-5">
            @foreach ($works as $work)
                <div class="col-md-4 mb-4">
                    <div class="card h-100">
                        <div class="card-body">
                            <!-- Видео с заглушкой -->
                            <div class="video-wrapper position-relative"
                                style="padding-bottom: 56.25%; height: 0; overflow: hidden; max-width: 100%; height: auto;">
                                <img src="https://img.youtube.com/vi/{{ $work->embed_url ? basename($work->embed_url) : '' }}/hqdefault.jpg"
                                    alt="Видео {{ $work->name }}" class="img-fluid position-absolute"
                                    style="top: 0; left: 0; width: 100%; height: 100%; object-fit: cover; cursor: pointer;"
                                    onclick="loadVideo(this, '{{ $work->embed_url }}')">
                                <!-- Иконка воспроизведения -->
                                <div class="play-button position-absolute"
                                    style="top: 50%; left: 50%; transform: translate(-50%, -50%); cursor: pointer;"
                                    onclick="loadVideo(this.previousElementSibling, '{{ $work->embed_url }}')">
                                    <svg width="68" height="48" viewBox="0 0 68 48">
                                        <path
                                            d="M66.52 7.604c-0.759-2.8-3.049-4.89-5.832-5.312C55.12 1.125 34 1.125 34 1.125s-21.12 0-26.688 1.167c-2.783 0.422-5.073 2.512-5.832 5.312C0.528 13.348 0.528 24 0.528 24s0 10.652 1.96 16.396c0.759 2.8 3.049 4.89 5.832 5.312C12.88 46.875 34 46.875 34 46.875s21.12 0 26.688-1.167c2.783-0.422 5.073-2.512 5.832-5.312C67.472 34.652 67.472 24 67.472 24S67.472 13.348 66.52 7.604zM27.012 33.9v-19.8L45.616 24L27.012 33.9z"
                                            fill="#fff" />
                                    </svg>
                                </div>
                            </div>

                            <!-- Название -->
                            <h5 class="card-title text-center mt-3">{{ $work->name }}</h5>
                            <hr>
                            <!-- Описание -->
                            <p class="card-text text-center">
                                {{ $work->adress }}</br></br>
                                {{ $work->description }}
                            </p>
                            <!-- Ссылки -->
                            <div class="text-center">
                                @if ($work->url_foto)
                                    <a href="{{ $work->url_foto }}" class="text-success">Фотографии и описание</a>
                                @endif
                                @if ($work->url_design)
                                    <br>
                                    <a href="{{ $work->url_design }}" class="text-success">О дизайн проекте</a>
                                @endif
                            </div>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </div>








    <div class="container my-5">
        <!-- Первый блок -->
        <div class="row">
            <div class="col-12">
                <h3 class="text-danger fw-bold">Видео-отчёт ремонта квартир</h3>
                <p class="fs-5 lead">
                    Видеоформат позволяет наглядно продемонстрировать процесс выполнения ремонтно-отделочных работ. Особую
                    ценность имеет наличие видеороликов о состоянии помещения в формате до и после ремонта. А к каждому
                    обзору прилагаются описание выполненных ремонтных мероприятий и подробная характеристика самого жилья.
                </p>
            </div>
        </div>

        <!-- Второй блок -->
        <div class="row mt-4">
            <div class="col-12">
                <h3 class="text-danger fw-bold">На что обращать внимание</h3>
                <p class="fs-5 lead">
                    Видеосъёмка исходного состояния объектов, расположенных в Красноярске, важна по следующим причинам:
                </p>
                <ul class="fs-5 lead">
                    <li>она даёт наилучшее представление о том, какой объём работ проделан специалистами;</li>
                    <li>можно увидеть, какие технологии и отделочные материалы применялись;</li>
                    <li>конечный результат позволит оценить качество выполненных ремонтных работ.</li>
                </ul>
                <p class="fs-5 lead">
                    На съёмки и размещение видео квартир обязательно берётся согласие заказчиков. Как правило, мы всегда
                    получаем одобрение на съёмку, в некоторых случаях клиенты с радостью нас приглашают, когда уже
                    установлена мебель, присутствуют шторы и другие элементы декора.
                    Мы уделяем большое внимание качеству изображения, поэтому используем профессиональную фото и
                    видеоаппаратуру – это позволяет максимально точно и детально показать все этапы черновой и чистовой
                    отделки. Ремонтный процесс сопровождается комментариями опытного специалиста, который делает акценты на
                    важных аспектах нашей работы.
                    Завершаются ролики демонстрацией конечного варианта помещения после ремонтных мероприятий. Их можно
                    рассматривать и как пособие для самостоятельных действий, если вы проживаете не в Красноярске.
                </p>
            </div>
        </div>

        <!-- Третий блок -->
        <div class="row mt-4">
            <div class="col-12">
                <h3 class="text-danger fw-bold">Видео ремонта квартир под ключ</h3>
                <p class="fs-5 lead">
                    Просмотры видео отчетов позволяют сделать выводы о подрядчике, убедиться в профессионализме мастеров,
                    узнать о новых технологиях и декоративных материалах, которые применяются в сфере ремонта жилья, найти
                    интересную идею реализации дизайнерской идеи в вашей квартире или доме под ключ. Для удобства, мы
                    собрали все видеоролики в одном месте, чтобы не пришлось тратить время и искать их в сети. Кроме отчетов
                    вы можете ознакомиться с видео отзывами и полезными советами.
                </p>
            </div>
        </div>
    </div>




@endsection

<script>
    function loadVideo(element, videoUrl) {
        const iframe = document.createElement('iframe');
        iframe.src = videoUrl + "?autoplay=1"; // Автоматическое воспроизведение
        iframe.width = '100%';
        iframe.height = '100%';
        iframe.style.position = 'absolute';
        iframe.style.top = '0';
        iframe.style.left = '0';
        iframe.frameBorder = '0';
        iframe.allow =
            'accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share';
        iframe.allowFullscreen = true;

        const videoWrapper = element.parentNode;
        videoWrapper.innerHTML = ''; // Удаляем изображение заглушки и иконку воспроизведения
        videoWrapper.appendChild(iframe); // Вставляем iframe с видео
    }
</script>
