@extends('layouts.app')

@section('title', $page->title)

@section('content')

    {!! $page->body !!}



    <div class="container my-5">
        <div class="row"><!-- Текстовый блок -->
            <div class="col-12">
                <p class="lead fs-5">Производим комплексный ремонт квартир в новостройке в Красноярске.

                    Такой вид включает полноценный комплекс ремонтных и отделочных работ по усовершенствованию жилищных
                    условий. Производится преимущественно в новостройках.

                    Для качественного ремонта квартиры в новостройке лучше отдать предпочтение компании, выполняющей
                    ремонтно-отделочные работы под ключ и по доступной цене. В новостройках производится ремонт с нуля:
                    косметический, комплексный, дизайнерский и евроремонт. Капитальный ремонт в новостройках не делается,
                    поскольку такой вид осуществляется только во вторичном жилье.</p>
            </div>
        </div>
    </div>







    <div class="container my-5">
        <h2 class="text-center text-danger fw-bold mb-4">Виды планировок в новостройке</h2>
        <p class="lead fs-5">Планировки квартир в новостройке можно разделить на две категории:</p>
        <ul class="lead fs-5">
            <li>стандартная планировка: однокомнатные, двухкомнатные, трехкомнатные, четырехкомнатные;</li>
            <li>европланировка: студии, еврогарсоньерки, евродвушки, евро трешки. При такой планировке кухня объединена с
                гостиной и имеются изолированные комнаты.</li>
        </ul>
        <p class="lead fs-5">Главное отличие новостройки от вторичного жилья – это наличие совмещенного санузла и туалетной
            комнаты, которую очень часто переоборудуют в прачечную комнату. Квартиры от застройщика сдаются с получистовой
            отделкой «белый куб».</p>

        <div class="row">
            <div class="col-12">
                <div id="carouselPlan" class="carousel slide" data-bs-ride="carousel">
                    <div class="carousel-indicators">
                        <button type="button" data-bs-target="#carouselPlan" data-bs-slide-to="0" class="active"
                            aria-current="true" aria-label="Slide 1"></button>
                        <button type="button" data-bs-target="#carouselPlan" data-bs-slide-to="1"
                            aria-label="Slide 2"></button>
                        <button type="button" data-bs-target="#carouselPlan" data-bs-slide-to="2"
                            aria-label="Slide 3"></button>
                    </div>
                    <div class="carousel-inner" style="height: 50vh;">
                        <div class="carousel-item active">
                            <img src="https://via.placeholder.com/200x300" class="d-block w-100 h-100" alt="Plan 1"
                                style="object-fit: contain;">
                        </div>
                        <div class="carousel-item">
                            <img src="https://via.placeholder.com/200x300" class="d-block w-100 h-100" alt="Plan 2"
                                style="object-fit: contain;">
                        </div>
                        <div class="carousel-item">
                            <img src="https://via.placeholder.com/200x300" class="d-block w-100 h-100" alt="Plan 3"
                                style="object-fit: contain;">
                        </div>
                    </div>
                    <button class="carousel-control-prev" type="button" data-bs-target="#carouselPlan"
                        data-bs-slide="prev">
                        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                        <span class="visually-hidden">Previous</span>
                    </button>
                    <button class="carousel-control-next" type="button" data-bs-target="#carouselPlan"
                        data-bs-slide="next">
                        <span class="carousel-control-next-icon" aria-hidden="true"></span>
                        <span class="visually-hidden">Next</span>
                    </button>
                </div>
            </div>
        </div>
    </div>










    <div class="container my-5">
        <h2 class="text-center text-danger fw-bold mb-4">На что стоит обратить внимание</h2>
        <p class="lead fs-5">1) Новый дом с нуля рано или поздно начнет давать усадку и это нужно учитывать при проведении
            ремонтно-отделочных мероприятий. Чтобы предотвратить появление трещин и других повреждений в процессе
            эксплуатации, мы рекомендуем применять технологию армирования поверхностей (сетка строби стеклохолст), особенно
            если Вы планируете отдать предпочтение покраске или декоративной штукатурке.</p>
        <p class="lead fs-5">2) Наличие готовой отделки в новостройке от застройщика, не исключает выполнения черновых
            ремонтных работ. Многие финишные материалы применяются только на идеально подготовленную и ровную поверхность.
            Поэтому в новостройках мы производим оштукатуривание по маякам и устройство самовыравнивающегося наливного пола.
        </p>
    </div>

    <div class="container my-5">
        <h2 class="text-center text-danger fw-bold mb-4">Этапы ремонта квартиры в новостройке</h2>
        <ul class="lead fs-5">
            <li>Прораб приезжает на объект, производит осмотр и замеры помещения, консультирует, дает рекомендации,
                составляет перечень предстоящих ремонтных мероприятий, также наш специалист сориентирует Вас по стоимости
                стройматериалов, которые необходимо приобрести.</li>
            <li>Составляется договор бытового подряда и смета с точным указанием конечной стоимости. В процессе работы цена,
                указанная в договоре, не меняется.</li>
            <li>Наши прорабы осуществляют закупку качественных, проверенных материалов по приемлемым ценам, занимаются
                организацией доставки и подъем стройматериалов. Заказчику предоставляется полный отчет по чекам.</li>
            <li>Подготовка, черновая и чистовая отделка. Ремонт под ключ подразумевает выполнение сантехнических и
                электромонтажных работ, подготовку и выравнивание поверхностей, ремонт санузла, установку дверей и монтаж
                натяжного потолка.</li>
            <li>Преимущество под ключ – это комплексный подход по приемлемой цене. В результате Вы получите
                отремонтированную квартиру, которая полностью готова для проживания.</li>
        </ul>
        <p class="lead fs-5">Итоговая стоимость зависит от ваших пожеланий и текущего состояния помещения. Мы рекомендуем
            Вам выполнение ремонтно-отделочных мероприятий под ключ, так как стоимость выйдет гораздо выгоднее, чем при
            частичном ремонте.</p>
    </div>












    <div class="container my-5">
        <h2 class="text-center text-danger fw-bold mb-4">Фото ремонта в хрущевке</h2>
        <div class="row">
            <div class="col-md-6">
                <div id="carouselExampleIndicators1" class="carousel slide" data-bs-ride="carousel">
                    <div class="carousel-indicators">
                        <button type="button" data-bs-target="#carouselExampleIndicators1" data-bs-slide-to="0"
                            class="active" aria-current="true" aria-label="Slide 1"></button>
                        <button type="button" data-bs-target="#carouselExampleIndicators1" data-bs-slide-to="1"
                            aria-label="Slide 2"></button>
                        <button type="button" data-bs-target="#carouselExampleIndicators1" data-bs-slide-to="2"
                            aria-label="Slide 3"></button>
                        <button type="button" data-bs-target="#carouselExampleIndicators1" data-bs-slide-to="3"
                            aria-label="Slide 4"></button>
                        <button type="button" data-bs-target="#carouselExampleIndicators1" data-bs-slide-to="4"
                            aria-label="Slide 5"></button>
                        <button type="button" data-bs-target="#carouselExampleIndicators1" data-bs-slide-to="5"
                            aria-label="Slide 6"></button>
                        <button type="button" data-bs-target="#carouselExampleIndicators1" data-bs-slide-to="6"
                            aria-label="Slide 7"></button>
                    </div>
                    <div class="carousel-inner" style="height: 50vh;">
                        <div class="carousel-item active">
                            <img src="https://via.placeholder.com/300x500" class="d-block w-100" alt="Slide 1">
                        </div>
                        <div class="carousel-item">
                            <img src="https://via.placeholder.com/300x500" class="d-block w-100" alt="Slide 2">
                        </div>
                        <div class="carousel-item">
                            <img src="https://via.placeholder.com/300x500" class="d-block w-100" alt="Slide 3">
                        </div>
                        <div class="carousel-item">
                            <img src="https://via.placeholder.com/300x500" class="d-block w-100" alt="Slide 4">
                        </div>
                        <div class="carousel-item">
                            <img src="https://via.placeholder.com/300x500" class="d-block w-100" alt="Slide 5">
                        </div>
                        <div class="carousel-item">
                            <img src="https://via.placeholder.com/300x500" class="d-block w-100" alt="Slide 6">
                        </div>
                        <div class="carousel-item">
                            <img src="https://via.placeholder.com/300x500" class="d-block w-100" alt="Slide 7">
                        </div>
                    </div>
                    <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators1"
                        data-bs-slide="prev">
                        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                        <span class="visually-hidden">Previous</span>
                    </button>
                    <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators1"
                        data-bs-slide="next">
                        <span class="carousel-control-next-icon" aria-hidden="true"></span>
                        <span class="visually-hidden">Next</span>
                    </button>
                </div>
                <h4 class="text-center">До</h4>

            </div>
            <div class="col-md-6">
                <div id="carouselExampleIndicators2" class="carousel slide" data-bs-ride="carousel">
                    <div class="carousel-indicators">
                        <button type="button" data-bs-target="#carouselExampleIndicators2" data-bs-slide-to="0"
                            class="active" aria-current="true" aria-label="Slide 1"></button>
                        <button type="button" data-bs-target="#carouselExampleIndicators2" data-bs-slide-to="1"
                            aria-label="Slide 2"></button>
                        <button type="button" data-bs-target="#carouselExampleIndicators2" data-bs-slide-to="2"
                            aria-label="Slide 3"></button>
                        <button type="button" data-bs-target="#carouselExampleIndicators2" data-bs-slide-to="3"
                            aria-label="Slide 4"></button>
                        <button type="button" data-bs-target="#carouselExampleIndicators2" data-bs-slide-to="4"
                            aria-label="Slide 5"></button>
                        <button type="button" data-bs-target="#carouselExampleIndicators2" data-bs-slide-to="5"
                            aria-label="Slide 6"></button>
                        <button type="button" data-bs-target="#carouselExampleIndicators2" data-bs-slide-to="6"
                            aria-label="Slide 7"></button>
                        <button type="button" data-bs-target="#carouselExampleIndicators2" data-bs-slide-to="7"
                            aria-label="Slide 8"></button>
                        <button type="button" data-bs-target="#carouselExampleIndicators2" data-bs-slide-to="8"
                            aria-label="Slide 9"></button>
                        <button type="button" data-bs-target="#carouselExampleIndicators2" data-bs-slide-to="9"
                            aria-label="Slide 10"></button>
                        <button type="button" data-bs-target="#carouselExampleIndicators2" data-bs-slide-to="10"
                            aria-label="Slide 11"></button>
                        <button type="button" data-bs-target="#carouselExampleIndicators2" data-bs-slide-to="11"
                            aria-label="Slide 12"></button>
                        <button type="button" data-bs-target="#carouselExampleIndicators2" data-bs-slide-to="12"
                            aria-label="Slide 13"></button>
                    </div>
                    <div class="carousel-inner" style="height: 50vh;">
                        <div class="carousel-item active">
                            <img src="https://via.placeholder.com/300x500" class="d-block w-100" alt="Slide 1">
                        </div>
                        <div class="carousel-item">
                            <img src="https://via.placeholder.com/300x500" class="d-block w-100" alt="Slide 2">
                        </div>
                        <div class="carousel-item">
                            <img src="https://via.placeholder.com/300x500" class="d-block w-100" alt="Slide 3">
                        </div>
                        <div class="carousel-item">
                            <img src="https://via.placeholder.com/300x500" class="d-block w-100" alt="Slide 4">
                        </div>
                        <div class="carousel-item">
                            <img src="https://via.placeholder.com/300x500" class="d-block w-100" alt="Slide 5">
                        </div>
                        <div class="carousel-item">
                            <img src="https://via.placeholder.com/300x500" class="d-block w-100" alt="Slide 6">
                        </div>
                        <div class="carousel-item">
                            <img src="https://via.placeholder.com/300x500" class="d-block w-100" alt="Slide 7">
                        </div>
                        <div class="carousel-item">
                            <img src="https://via.placeholder.com/300x500" class="d-block w-100" alt="Slide 8">
                        </div>
                        <div class="carousel-item">
                            <img src="https://via.placeholder.com/300x500" class="d-block w-100" alt="Slide 9">
                        </div>
                        <div class="carousel-item">
                            <img src="https://via.placeholder.com/300x500" class="d-block w-100" alt="Slide 10">
                        </div>
                        <div class="carousel-item">
                            <img src="https://via.placeholder.com/300x500" class="d-block w-100" alt="Slide 11">
                        </div>
                        <div class="carousel-item">
                            <img src="https://via.placeholder.com/300x500" class="d-block w-100" alt="Slide 12">
                        </div>
                        <div class="carousel-item">
                            <img src="https://via.placeholder.com/300x500" class="d-block w-100" alt="Slide 13">
                        </div>
                    </div>
                    <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators2"
                        data-bs-slide="prev">
                        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                        <span class="visually-hidden">Previous</span>
                    </button>
                    <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators2"
                        data-bs-slide="next">
                        <span class="carousel-control-next-icon" aria-hidden="true"></span>
                        <span class="visually-hidden">Next</span>
                    </button>
                </div>
                <h4 class="text-center">После</h4>
            </div>
        </div>
        <div class="row mt-4">
            <div class="col-md-12 text-center">

                <p class="lead fs-5">Завершили ремонт однокомнатной квартиры по адресу Воронова 12Б.</p>
                <ul class="lead fs-5 text-start">
                    <li>демонтаж старого покрытия и зачистку;</li>
                    <li>заменили окна;</li>
                    <li>полностью поменяли электрику и сантехнику;</li>
                    <li>на месте кухни заказчица решила расположить спальню, а в гостиной зону кухни. Перенесли коммуникации
                        по периметру комнаты и закрыли коробом;</li>
                    <li>выровняли пол и стены;</li>
                    <li>уложили кварцвиниловую плитку, установили напольный плинтус, поклеили обои, сделали монтаж натяжного
                        потолка;</li>
                    <li>ванную и туалет отремонтировали под ключ;</li>
                    <li>подключили приборы освещения;</li>
                    <li>поменяли входную дверь и поставили межкомнатные двери.</li>
                </ul>
            </div>
        </div>
    </div>




    <x-priceBlock />
    <x-room />
    <x-flamp />
    <x-reviews />
    <x-form />



@endsection
