@extends('layouts.app')

@section('title', $page->title)

@section('content')

    <div class="container my-5">
        <h2 class="text-center text-danger fw-bold mb-4">Отзывы о ремонте квартир в Красноярске</h2>
        <p class="text-center fs-5 fw-bold">На этой странице мы опубликовали отзывы наших клиентов о ремонте.</p>
        <p class="text-center fs-5 fw-bold">И ссылки на независимые ресурсы — отзывики Красноярска.</p>
    </div>


    <x-flamp />

    <x-reviews />

    {!! $page->body !!}


    <div class="container-fluid custom-container  my-5">
        <div class="container mx-auto text-center">
            <h2 class="text-center text-danger fw-bold mb-4">ВИДЕО ОТЗЫВЫ О РЕМОНТЕ КВАРТИР В КРАСНОЯРСКЕ</h2>
            <p class="text-center lead fs-5 mb-5">
                Открытость компании, высокое качество, приемлемые цены привлекают к нам клиентов, которые в благодарность за
                наш
                труд оставляют положительные отзывы, рекомендуют нас своим знакомым и друзьям.
            </p>
            <div class="row">
                <div class="col-md-4 d-flex">
                    <div class="card mb-4 shadow-sm flex-fill d-flex flex-column card-custom">
                        <div class="ratio ratio-16x9">
                            <iframe width="360" height="203" src="https://www.youtube.com/embed/SpjPongfKzo"
                                title="Дизайнерский ремонт четырехкомнатной квартиры. Видео отзыв." frameborder="0"
                                allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share"
                                referrerpolicy="strict-origin-when-cross-origin" allowfullscreen></iframe>
                        </div>
                        <div class="card-body text-center mt-auto">
                            <h5 class="card-title fw-bold">Ремонт квартиры в Северном районе</h5>
                            <hr class="mx-auto mt-4 w-25 text-danger">
                            <p class="card-text" style="font-size: 18px">ул. Весны, 9<br>Дизайнерский ремонт
                                четырехкомнатной квартиры.</p>
                        </div>
                    </div>
                </div>

                <!-- Карточка 2 -->
                <div class="col-md-4 d-flex">
                    <div class="card mb-4 shadow-sm flex-fill d-flex flex-column card-custom">
                        <div class="ratio ratio-16x9">
                            <iframe width="360" height="203" src="https://www.youtube.com/embed/u8RzCwAPnZw"
                                title="Ремонт однокомнатной квартиры. Видео отзыв" frameborder="0"
                                allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share"
                                referrerpolicy="strict-origin-when-cross-origin" allowfullscreen></iframe>
                        </div>
                        <div class="card-body text-center mt-auto">
                            <h5 class="card-title fw-bold">Ремонт квартиры в Октябрьском районе</h5>
                            <hr class="mx-auto mt-4 w-25 text-danger">
                            <p class="card-text" style="font-size: 18px">ул. Проспект Свободный, 36<br>Ремонт однокомнатной
                                квартиры в Красноярске.</p>
                        </div>
                    </div>
                </div>

                <!-- Карточка 3 -->
                <div class="col-md-4 d-flex">
                    <div class="card mb-4 shadow-sm flex-fill d-flex flex-column card-custom">
                        <div class="ratio ratio-16x9">
                            <iframe width="360" height="203" src="https://www.youtube.com/embed/-XbiPwdXO1c"
                                title="Видео отзыв о ремонте квартиры в ЖК Притяжение" frameborder="0"
                                allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share"
                                referrerpolicy="strict-origin-when-cross-origin" allowfullscreen></iframe>
                        </div>
                        <div class="card-body text-center mt-auto">
                            <h5 class="card-title fw-bold">Ремонт квартиры под ключ в ЖК Притяжение</h5>
                            <hr class="mx-auto mt-4 w-25 text-danger">
                            <p class="card-text" style="font-size: 18px">ул. 78 Добровольческой Бригады, 25<br>Ремонт в
                                трехкомнатной квартире Красноярск.</p>
                            <a href="#" class="text-success">Фото отчет</a>
                        </div>
                    </div>
                </div>
            </div>

            <div class="row">
                <!-- Карточка 4 -->
                <div class="col-md-4 d-flex">
                    <div class="card mb-4 shadow-sm flex-fill d-flex flex-column card-custom">
                        <div class="ratio ratio-16x9">
                            <iframe width="360" height="203" src="https://www.youtube.com/embed/vc0AJPkSL_w"
                                title="Видео отзыв о ремонте трехкомнатной квартиры" frameborder="0"
                                allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share"
                                referrerpolicy="strict-origin-when-cross-origin" allowfullscreen></iframe>
                        </div>
                        <div class="card-body text-center mt-auto">
                            <h5 class="card-title fw-bold">Ремонт трёхкомнатной квартиры</h5>
                            <hr class="mx-auto mt-4 w-25 text-danger">
                            <p class="card-text" style="font-size: 18px">ул. 2-я Ботаническая, 2<br>Капитальный ремонт
                                квартиры.</p>
                            <a href="#" class="text-success">Фото отчет</a>
                        </div>
                    </div>
                </div>

                <!-- Карточка 5 -->
                <div class="col-md-4 d-flex">
                    <div class="card mb-4 shadow-sm flex-fill d-flex flex-column card-custom">
                        <div class="ratio ratio-16x9">
                            <iframe width="360" height="203" src="https://www.youtube.com/embed/yk1BN0OCDz8"
                                title="Видео отзыв о ремонте двухкомнатной квартиры под ключ" frameborder="0"
                                allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share"
                                referrerpolicy="strict-origin-when-cross-origin" allowfullscreen></iframe>
                        </div>
                        <div class="card-body text-center mt-auto">
                            <h5 class="card-title fw-bold">Ремонт двухкомнатной квартиры</h5>
                            <hr class="mx-auto mt-4 w-25 text-danger">
                            <p class="card-text" style="font-size: 18px">ул. Быковского, 5Д<br>Ремонт квартиры под ключ.</p>
                            <a href="#" class="text-success">Отчет о проделанной работе</a>
                        </div>
                    </div>
                </div>

                <!-- Карточка 6 -->
                <div class="col-md-4 d-flex">
                    <div class="card mb-4 shadow-sm flex-fill d-flex flex-column card-custom">
                        <div class="ratio ratio-16x9">
                            <iframe width="360" height="203" src="https://www.youtube.com/embed/KKkK13wiMXc"
                                title="Ремонт раздельного санузла. Видео отзыв" frameborder="0"
                                allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share"
                                referrerpolicy="strict-origin-when-cross-origin" allowfullscreen></iframe>
                        </div>
                        <div class="card-body text-center mt-auto">
                            <h5 class="card-title fw-bold">Капитальный ремонт раздельного санузла</h5>
                            <hr class="mx-auto mt-4 w-25 text-danger">
                            <p class="card-text" style="font-size: 18px">ул. Киренского, 122<br>Ремонт ванной комнаты и
                                туалета под ключ.</p>
                        </div>
                    </div>
                </div>
            </div>

            <div class="row">
                <!-- Карточка 7 -->
                <div class="col-md-4 d-flex">
                    <div class="card mb-4 shadow-sm flex-fill d-flex flex-column card-custom">
                        <div class="ratio ratio-16x9">
                            <iframe width="360" height="203" src="https://www.youtube.com/embed/UCnNcJeRIYw"
                                title="Видео отзыв о проделанном ремонте санузла." frameborder="0"
                                allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share"
                                referrerpolicy="strict-origin-when-cross-origin" allowfullscreen></iframe>
                        </div>
                        <div class="card-body text-center mt-auto">
                            <h5 class="card-title fw-bold">Капитальный ремонт совмещенного санузла</h5>
                            <hr class="mx-auto mt-4 w-25 text-danger">
                            <p class="card-text" style="font-size: 18px">ул. Львовская, 35<br>Ремонт санузла с
                                перепланировкой.</p>
                        </div>
                    </div>
                </div>

                <!-- Карточка 8 -->
                <div class="col-md-4 d-flex">
                    <div class="card mb-4 shadow-sm flex-fill d-flex flex-column card-custom">
                        <div class="ratio ratio-16x9">
                            <iframe width="360" height="203" src="https://www.youtube.com/embed/0AxMkfodpzs"
                                title="Ремонт кухни. Видео отзыв." frameborder="0"
                                allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share"
                                referrerpolicy="strict-origin-when-cross-origin" allowfullscreen></iframe>
                        </div>
                        <div class="card-body text-center mt-auto">
                            <h5 class="card-title fw-bold">Ремонт кухни</h5>
                            <hr class="mx-auto mt-4 w-25 text-danger">
                            <p class="card-text" style="font-size: 18px">ул. Устиновича, 34А<br>Комплексный ремонт кухни.
                            </p>
                        </div>
                    </div>
                </div>

                <!-- Карточка 9 -->
                <div class="col-md-4 d-flex">
                    <div class="card mb-4 shadow-sm flex-fill d-flex flex-column card-custom">
                        <div class="ratio ratio-16x9">
                            <iframe width="360" height="203" src="https://www.youtube.com/embed/7TrG16OrE4M"
                                title="Видео отзыв. Тельмана 10/11" frameborder="0"
                                allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share"
                                referrerpolicy="strict-origin-when-cross-origin" allowfullscreen></iframe>
                        </div>
                        <div class="card-body text-center mt-auto">
                            <h5 class="card-title fw-bold">Ремонт квартиры Красноярск</h5>
                            <hr class="mx-auto mt-4 w-25 text-danger">
                            <p class="card-text" style="font-size: 18px">ул. Тельмана, 10/11<br>Укладка керамогранита в
                                кухне и коридоре. «Французская кладка».</p>
                        </div>
                    </div>
                </div>
            </div>

            <div class="row">
                <!-- Карточка 10 -->
                <div class="col-md-4 d-flex">
                    <div class="card mb-4 shadow-sm flex-fill d-flex flex-column card-custom">
                        <div class="ratio ratio-16x9">
                            <iframe width="360" height="203" src="https://www.youtube.com/embed/FSrYZJ4ZqPw"
                                title="Видео отзыв о ремонте спальни" frameborder="0"
                                allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share"
                                referrerpolicy="strict-origin-when-cross-origin" allowfullscreen></iframe>
                        </div>
                        <div class="card-body text-center mt-auto">
                            <h5 class="card-title fw-bold">Капитальный ремонт спальни</h5>
                            <hr class="mx-auto mt-4 w-25 text-danger">
                            <p class="card-text" style="font-size: 18px">ул. Железнодорожников, 12<br>Отремонтировали
                                спальню под ключ. Выровняли поверхности, на пол уложили ламинат, стены покрасили, выполнили
                                монтаж натяжного потолка.</p>
                        </div>
                    </div>
                </div>

                <!-- Карточка 11 -->
                <div class="col-md-4 d-flex">
                    <div class="card mb-4 shadow-sm flex-fill d-flex flex-column card-custom">
                        <div class="ratio ratio-16x9">
                            <iframe width="360" height="203" src="https://www.youtube.com/embed/ZYJL8dDG0h4"
                                title="Видео отзыв. Частичный ремонт квартиры." frameborder="0"
                                allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share"
                                referrerpolicy="strict-origin-when-cross-origin" allowfullscreen></iframe>
                        </div>
                        <div class="card-body text-center mt-auto">
                            <h5 class="card-title fw-bold">Ремонт в квартире</h5>
                            <hr class="mx-auto mt-4 w-25 text-danger">
                            <p class="card-text" style="font-size: 18px">ул. Норильская, 46<br>Ремонт совмещенного санузла
                                и кухни.</p>
                        </div>
                    </div>
                </div>

                <!-- Карточка 12 -->
                <div class="col-md-4 d-flex">
                    <div class="card mb-4 shadow-sm flex-fill d-flex flex-column card-custom">
                        <div class="ratio ratio-16x9">
                            <iframe width="360" height="203" src="https://www.youtube.com/embed/uJgOVIgoFOM"
                                title="Видео отзыв  Тельмана 16а" frameborder="0"
                                allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share"
                                referrerpolicy="strict-origin-when-cross-origin" allowfullscreen></iframe>
                        </div>
                        <div class="card-body text-center mt-auto">
                            <h5 class="card-title fw-bold">Частичный ремонт квартиры</h5>
                            <hr class="mx-auto mt-4 w-25 text-danger">
                            <p class="card-text" style="font-size: 18px">ул. Тельмана, 16А<br>Укладка кухонного фартука.
                                Укладка напольного керамогранита «французская кладка».</p>
                        </div>
                    </div>
                </div>


            </div>
            <div class="row">
                <div class="col text-center mt-4">
                    <a href="#" class="btn btn-success btn-lg">Посмотреть все видеообзоры</a>
                </div>
            </div>
        </div>
    </div>











    <div class="container my-5">
        <h2 class="text-center text-danger fw-bold mb-4">ВЫ МОЖЕТЕ ОСТАВИТЬ ОТЗЫВ НА НАШЕМ САЙТЕ</h2>
        <p class="lead text-center mb-5">Каждый Заказчик может оставить комментарий о работе нашей компании. Оставить
            комментарий можно без регистрации, для этого необходимо указать имя и адрес электронной почты для обратной
            связи.</p>
        <div class="row row-cols-1 row-cols-md-3 g-4">
            <div class="col">
                <div class="card h-100 shadow-sm">
                    <div class="card-body">
                        <div class="d-flex justify-content-center mb-3">
                            <span class="text-warning fs-4">★★★★★</span>
                        </div>
                        <p class="card-text">Ремонт квартиры — сложное и ответственное мероприятие. У меня большой стаж в
                            строительстве, поэтому я понимал, насколько сложная работа предстоит. Для меня было важно найти
                            компанию, которая ответственно подходит к выполнению ремонта и соблюдает все технологии, чтобы
                            получить качественный результат. Посоветовался со своими коллегами и по рекомендации знакомых
                            обратился к Евгению. При встрече обсудили предстоящий комплекс отделочных работ и цену.
                            Стоимость устроила. В договоре прописана гарантия 2 года, а также указана стоимость и сроки
                            выполнения ремонта. Ремонтные работы завершены точно в срок, все пожелания и просьбы
                            учитывались, недочеты исправлялись сразу же. Результатом и качеством полностью доволен.
                            Компанией и специалистами очень доволен. Рекомендую.</p>
                        <h5 class="fw-bold text-center">Виктор Оникин</h5>
                        <p class="text-center">ул. Ладо Кецховели, 32</p>
                    </div>
                </div>
            </div>
            <div class="col">
                <div class="card h-100 shadow-sm">
                    <div class="card-body">
                        <div class="d-flex justify-content-center mb-3">
                            <span class="text-warning fs-4">★★★★★</span>
                        </div>
                        <p class="card-text">Хочу поблагодарить компанию ИП Покивайлов за качественно выполненный ремонт в
                            нашей квартире. Некоторое время назад в эту компанию дважды обращались наши знакомые, сначала по
                            ремонту санузла, а спустя время по ремонту остальных комнат. Результатом остались очень
                            довольны, поэтому мы решили, не раздумывая заказать ремонт нашей двухкомнатной квартиры. Что
                            могу сказать, бригада мастеров отличные специалисты, к работе подходили очень ответственно.
                            Поменяли всю электропроводку, добавили розеток, которых очень не хватало, поставили новые
                            батареи. Убрали старую стяжку и выровняли полы в процессе, аккуратно поклеили обои, выполнили
                            покраску потолка, сделали установку дверей. Навели порядок и вывезли строительный мусор. В
                            результате стало очень уютно. Ремонтные работы длились 4 месяца, но результат того стоил. Мы
                            довольны, что прислушались и сделали именно так, как рекомендовали мастера. Спасибо вам большое.
                            Будем вас всем рекомендовать!</p>
                        <h5 class="fw-bold text-center">Оксана Игоревна</h5>
                        <p class="text-center">ул. Водопьянова, 11</p>
                    </div>
                </div>
            </div>
            <div class="col">
                <div class="card h-100 shadow-sm">
                    <div class="card-body">
                        <div class="d-flex justify-content-center mb-3">
                            <span class="text-warning fs-4">★★★★★</span>
                        </div>
                        <p class="card-text">Хочу рассказать о своем опыте обращения в ремонтную компанию. Это мой первый
                            опыт доверить всю работу по ремонту специалистам, так как ранее делали все своими силами и
                            каких-то хороших ассоциаций с этим мероприятием у меня мало. В нашем городе строительных
                            компаний очень много, поэтому выбрали из нескольких, но выбор свой сделали в пользу ИП
                            Покивайлов, так как у них очень много положительных комментариев и большое портфолио выполненных
                            работ. Каждый день качество выполнения контролировал прораб Александр, замечательный специалист,
                            который не просто разбирается во всех технических вопросах, но и в материалах, мы получили много
                            полезных советов, что купить из чистовых материалов и где. Работы выполнены на высоком уровне.
                            Спасибо вам за таких замечательных специалистов и за высокое качество работ.</p>
                        <h5 class="fw-bold text-center">Мария</h5>
                        <p class="text-center">ул. Авиаторов, 4Д</p>
                    </div>
                </div>
            </div>
            <div class="col">
                <div class="card h-100 shadow-sm">
                    <div class="card-body">
                        <div class="d-flex justify-content-center mb-3">
                            <span class="text-warning fs-4">★★★★★</span>
                        </div>
                        <p class="card-text">Запланировали сделать в квартире косметический ремонт. Нам нужно было поклеить
                            новые обои, заменить ламинат и плинтус, покрасить потолок, частично заменить электрику. Сразу
                            хотим отметить оперативность работы компании, мы оставили заявку и уже через несколько часов
                            приехал инженер, провел осмотр и сказал стоимость. Честно признаться мы планировали обойтись
                            минимальными тратами, но как оказалось ремонт предстоял не простой, так как со временем и
                            потолки потрескали и как нам объяснил Александр, стены нуждаются в подготовке перед поклейкой
                            обоев. Мы сразу обозначили свой бюджет, на что Александр предложил варианты, при которых мы бы
                            полностью уложились. Договор заключили сразу же на месте. Мы довольны, что обратились в эту
                            компанию, ребята молодцы, работают слаженно, консультируют по всем нашим вопросам. Спасибо вам,
                            желаем успехов.</p>
                        <h5 class="fw-bold text-center">Анна П.</h5>
                        <p class="text-center">ул. Вильского, 26</p>
                    </div>
                </div>
            </div>
            <div class="col">
                <div class="card h-100 shadow-sm">
                    <div class="card-body">
                        <div class="d-flex justify-content-center mb-3">
                            <span class="text-warning fs-4">★★★★★</span>
                        </div>
                        <p class="card-text">По Красноярску очень много компаний по ремонту под ключ. При условии, что мы
                            сами из другого города, пришлось долго выбирать среди организаций, которые специализируются по
                            ремонту жилья под ключ. Мы уже делаем не первый ремонт, поэтому знаем на что нужно обратить
                            внимание. В итоге выбрали компанию ИП Покивайлов. Первое, что понравилось, что обьект квартиры
                            приехали и прораб, и сметчик, стоимость нас устроила. Второй важный момент, что нам показали в
                            живую квартиры, которые сейчас ремонтируют. Договор заключали в офисе с руководителем компании
                            Евгением. Работы выполняли несколько мастеров. Было не все гладко, но все оперативно
                            исправлялось. Конечно, процесс ремонта это не просто, по опыту знаем. В целом результат нам
                            понравился, к тому же нам сделали хорошую скидку. Не жалеем, что нашли и обратились именно в эту
                            компанию.</p>
                        <h5 class="fw-bold text-center">Валерия</h5>
                        <p class="text-center">ул. Свердловская, 6И</p>
                    </div>
                </div>
            </div>
            <div class="col">
                <div class="card h-100 shadow-sm">
                    <div class="card-body">
                        <div class="d-flex justify-content-center mb-3">
                            <span class="text-warning fs-4">★★★★★</span>
                        </div>
                        <p class="card-text">Нам необходимо было отремонтировать квартиру под ключ. Решили мы обратиться в
                            данную компанию. Цена оказалась средняя по городу, что нас вполне устроило. Мастера Сергей и
                            Вячеслав, выполняющие ремонтные работы, большие молодцы, очень старались, учитывали все наши
                            просьбы и пожелания. Отдельно хотим поблагодарить за помощь в приобретении материалов, менеджер
                            по закупке Алена, помогла нам выбрать и приобрести весь необходимый материал (обои, напольное
                            покрытие, кафель и санфаянс, люстры) и мебель, которую изготовили всего за несколько недель. Все
                            специалисты компании работали очень слаженно, все согласовывали, давали хорошие советы, как и
                            что лучше сделать. Хочется сказать вам огромное спасибо за такой замечательный результат. Мы
                            получили красивую и уютную квартиру и массу положительных эмоций. Будем рекомендовать вас всем
                            своим знакомым.</p>
                        <h5 class="fw-bold text-center">Екатерина</h5>
                        <p class="text-center">ул. Побежимова, 9</p>
                    </div>
                </div>
            </div>
        </div>
    </div>









    <div class="container my-5">
        <h2 class="fs-2 text-center fw-bold text-danger mb-4">РЕМОНТ КВАРТИР КРАСНОЯРСК - ПИСЬМЕННЫЕ ОТЗЫВЫ</h2>
        <p class="lead text-center fs-5">По окончанию ремонта сотрудник компании предложит Вам заполнить бланк, в котором
            Вы можете изложить свое мнение о качестве выполненного ремонта и о работе компании в целом.</p>
        <div class="row mt-4">
            <div class="col-md-4">
                <div class="card h-100">
                    <img src="http://127.0.0.1:8000/img/otzyvy/foto-otzyv-1-768x1076.jpg" class="card-img-top img-fluid"
                        alt="Отзыв 1">
                    <div class="card-body">
                        <p class="card-text">«После покупки квартиры решили сделать ремонт. Долго выбирали компанию.
                            Остановились на компании ИП Покивайлов. Прораб Александр грамотно все объяснил, дал свои
                            рекомендации по отделочным работам и материалам. К тому же весь ход ремонта постоянно
                            контролировал. Мастера большие молодцы. Результат получился отличный, а главное точно в срок.
                            Рекомендуем!!!»</p>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="card h-100">
                    <img src="http://127.0.0.1:8000/img/otzyvy/foto-otzyv-2-768x1089.jpg" class="card-img-top img-fluid"
                        alt="Отзыв 2">
                    <div class="card-body">
                        <p class="card-text">«Спасибо за проделанную работу мастеров компании ИП ПОКИВАЙЛОВ. Провели
                            большую работу. Нам все понравилось, мастера Алексей и Владимир профессионалы своего дела,
                            большое внимание уделяют мелочам и проработке деталей. Дали много полезных советов. Убрали за
                            собой весь мусор. Благодарим вам за работу. Рекомендуем данную организацию».</p>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="card h-100">
                    <img src="http://127.0.0.1:8000/img/otzyvy/foto-otzyv-3-768x1100.jpg" class="card-img-top img-fluid"
                        alt="Отзыв 3">
                    <div class="card-body">
                        <p class="card-text">«Ребята выполнили ремонт санузла. Все сделали хорошо и качественно. Работой
                            остались довольны. Помогли с дизайном интерьера, много дали нужных советов. Убрали за собой
                            мусор. Рекомендуем компанию. Спасибо за работу.»</p>
                    </div>
                </div>
            </div>
        </div>
        <div class="row mt-4">
            <div class="col-md-4">
                <div class="card h-100">
                    <img src="http://127.0.0.1:8000/img/otzyvy/foto-otzyv-7-768x1084.jpg" class="card-img-top img-fluid"
                        alt="Отзыв 4">
                    <div class="card-body">
                        <p class="card-text">«Большое спасибо мастеру Алексею. Нужен был ремонт гостинки. Работал Алексей
                            один. Закончил в срок, сделал все красиво, замечаний нет. Сказать плохого ничего не могу. Мастер
                            ответственный и порядочный. Помог советами, как упростить некоторые моменты, так и сделали, как
                            он сказал, чем сэкономил бюджет. Спасибо еще раз. Компания в целом хорошая и честная.»</p>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="card h-100">
                    <img src="http://127.0.0.1:8000/img/otzyvy/foto-otzyv-8-768x1078.jpg" class="card-img-top img-fluid"
                        alt="Отзыв 5">
                    <div class="card-body">
                        <p class="card-text">«Обращались в строительную компанию ИП Покивайлов. Нужен был косметический
                            ремонт. Сроки были ограничены, так как арендовали жилье. Ребята молодцы, не подвели. Закончили
                            вовремя, ни спешка на качестве не отразилась. Нас полностью все устроило. Будем рекомендовать
                            мастеров и компанию. Спасибо.»</p>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="card h-100">
                    <img src="http://127.0.0.1:8000/img/otzyvy/foto-otzyv-9-768x1080.jpg" class="card-img-top img-fluid"
                        alt="Отзыв 6">
                    <div class="card-body">
                        <p class="card-text">«Благодарю команду отделочников, которые делали нам ремонт трехкомнатной
                            квартиры. Ребята молодцы, помогли с дизайнерским проектом, который в дальнейшем осуществился. Мы
                            очень довольны. В бюджет уложились, никакие дополнительные деньги не отдавали, как первоначально
                            договаривались так все и было. Спасибо вам.»</p>
                    </div>
                </div>
            </div>
        </div>
        <div class="row mt-4">
            <div class="col-md-4">
                <div class="card h-100">
                    <img src="http://127.0.0.1:8000/img/otzyvy/Otzyv-o-kapitalnom-remonte.jpg"
                        class="card-img-top img-fluid" alt="Отзыв 7">
                    <div class="card-body">
                        <p class="card-text">«Хотим поблагодарить вашу компанию за отличный ремонт нашей квартиры, за
                            помощь в подборе и покупке материалов. За организацию вывоза мусора. Результатом ремонта и
                            работы ваших мастеров мы остались довольны. Желаем вам процветания.»</p>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="card h-100">
                    <img src="http://127.0.0.1:8000/img/otzyvy/otzyv-o-remonte-kvartiry-pod-klyuch.jpg"
                        class="card-img-top img-fluid" alt="Отзыв 8">
                    <div class="card-body">
                        <p class="card-text">«Большое спасибо компании ИП Покивайлов, ребята большие молодцы, выполнили все
                            быстро и качественно. Важно, что помогли с выбором и покупкой материалов. Ремонтировали
                            двухкомнатную квартиру. Результат превзошел все наши ожидания! Желаем успехов!»</p>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="card h-100">
                    <img src="http://127.0.0.1:8000/img/otzyvy/otzyv-o-remonte-sanuzla.jpg" class="card-img-top img-fluid"
                        alt="Отзыв 9">
                    <div class="card-body">
                        <p class="card-text">«Выполнили ремонт на 5+. Дали рекомендации по размещению сантехники, помогли
                            определиться с керамогранитом. Работу выполнял кафельщик Иван. Отличный специалист. Каждому
                            этапу уделял максимум внимания. После ремонта все за собой убрали. Рекомендуем!»</p>
                    </div>
                </div>
            </div>
        </div>
        <div class="row mt-4">
            <div class="col-md-4">
                <div class="card h-100">
                    <img src="http://127.0.0.1:8000/img/otzyvy/foto-otzyv-6-768x1056.png" class="card-img-top img-fluid"
                        alt="Отзыв 10">
                    <div class="card-body">
                        <p class="card-text">«Отлично сделан ремонт квартиры, все сделано в оговоренные сроки, буду
                            советовать друзьям.»</p>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="card h-100">
                    <img src="http://127.0.0.1:8000/img/otzyvy/foto-otzyv-5-768x1056.png" class="card-img-top img-fluid"
                        alt="Отзыв 11">
                    <div class="card-body">
                        <p class="card-text">«Нужен был ремонт кухни и ванной коридора. Провели полную замену труб
                            отопления, сантехники. Все сделали качественно, а главное — быстро, никаких замечаний. Спасибо.»
                        </p>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="card h-100">
                    <img src="http://127.0.0.1:8000/img/otzyvy/foto-otzyv-4-768x1056.png" class="card-img-top img-fluid"
                        alt="Отзыв 12">
                    <div class="card-body">
                        <p class="card-text">«Спасибо за ремонт ванной и туалета, вся плитка поклеена очень аккуратно.
                            Поменяли всю сантехнику, трубы, подключили стиральную машинку. Большое спасибо!!!»</p>
                    </div>
                </div>
            </div>
        </div>
    </div>




    <x-form />





    <div class="container my-5">
        <h2 class="fs-2 text-center fw-bold text-danger mb-4">ПОЧЕМУ НАМ ВАЖНО ЗНАТЬ МНЕНИЕ КАЖДОГО ЗАКАЗЧИКА, КОТОРЫЙ
            ЗАКАЗЫВАЛ У НАС РЕМОНТ</h2>
        <p class="lead text-center fs-5">
            После завершения ремонта нашей компанией, мы отправляем своим Заказчикам письмо с просьбой оставить отзыв.
            А также направляем ссылки на независимые источники, где можно поделиться своим впечатлением о результате ремонта
            квартиры, дома или нежилого помещения.
        </p>

        <div id="reviewSlider" class="carousel slide" data-bs-ride="carousel">
            <div class="carousel-inner text-center">
                <div class="carousel-item active">
                    <img src="http://127.0.0.1:8000/img/otzyvy/Снимок экрана 2024-08-23 121149.png"
                        class="d-block mx-auto" alt="Отзыв 1">
                </div>
                <div class="carousel-item">
                    <img src="http://127.0.0.1:8000/img/otzyvy/Снимок экрана 2024-08-23 121211.png"
                        class="d-block mx-auto" alt="Отзыв 2">
                </div>
                <div class="carousel-item">
                    <img src="http://127.0.0.1:8000/img/otzyvy/Снимок экрана 2024-08-23 121226.png"
                        class="d-block mx-auto" alt="Отзыв 3">
                </div>
            </div>
            <button class="carousel-control-prev" type="button" data-bs-target="#reviewSlider" data-bs-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="visually-hidden ">Previous</span>
            </button>
            <button class="carousel-control-next" type="button" data-bs-target="#reviewSlider" data-bs-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Next</span>
            </button>
        </div>

        <p class="lead text-center fs-5 mt-4">Ваше мнение и отзывы помогут будущим заказчикам сделать правильный выбор при
            поиске строительной компании по ремонту в городе.</p>
    </div>













    <div class="container my-5">
    <h2 class="text-center text-danger fw-bold mb-4">ЗАЧЕМ НУЖНЫ И ПОЧЕМУ ВАЖНЫ ОТЗЫВЫ ЗАКАЗЧИКОВ?</h2>
    <p class="text-center lead fs-5">
        Девяносто процентов людей читают и смотрят отклики, оценки и мнение других об организациях, прежде чем оставить заявку по ремонту жилого или нежилого помещения. Любая фирма без каких-либо отзывов выглядит подозрительно. Своими эмоциями каждый человек может поделиться на сайте или написать свои впечатления о полученном результате на бланках в письменном виде.
    </p>

    <div class="row text-center my-5">
        <div class="col-md-6">
            <img src="http://127.0.0.1:8000/img/otzyvy/otzyv-na-sajte-200x300.jpg" class="img-fluid mb-3" alt="Отзыв на сайте">
            <p class="fw-bold">Отзыв на сайте</p>
        </div>
        <div class="col-md-6">
            <img src="http://127.0.0.1:8000/img/otzyvy/Foto-otzyv-218x300.png" class="img-fluid mb-3" alt="Бланк отзыва">
            <p class="fw-bold">Бланк отзыва</p>
        </div>
    </div>

    <p class="lead fs-5">
        В нашей сфере отзывы это основной показатель при выборе исполнителя. Доверяя мнению людей, можно найти ответственного подрядчика и в результате получить качественно отремонтированное жилье за приемлемую цену.
    </p>

    <p class="lead fs-5">
        К примеру: отремонтирована квартира или коттедж на 5+, все довольны. Сотрудник обратился к Вам с просьбой поделиться своим впечатлением. Но не каждый предложит бланк, где можно изложить все, что накопилось у Вас за время ремонта, если все было выполнено некачественно или объект был затянут.
    </p>

    <p class="lead fs-5">
        Таким отзывам, как правило, особо не верят, потому что смотрятся они неправдоподобно.
    </p>

    <h3 class="text-center text-danger fw-bold mb-4">Как тогда поступить в таком случае?</h3>

    <p class="lead fs-5">
        Выход есть: в нашем веке в Интернете можно найти все что угодно и при этом на разных источниках. Любой желающий может зайти на независимые площадки (о них мы писали на странице выше) или в группы в социальных сетях и узнать все интересующие его вопросы.
    </p>

    <h4 class="text-center text-danger fw-bold mb-4">Высокий рейтинг — это увеличение заявок.</h4>

    <p class="lead fs-5">
        Девять из десяти заказов приходит только после изучения рейтинга и комментариев других, кто обращался в эту фирму. Хорошие и искренние слова убедительнее любой рекламы. Они помогут при выборе исполнителя. Через рассказы заказчиков, которые оставили свои высказывания, люди находят нужную информацию, которой нет даже в описании на сайте.
    </p>

    <h3 class="text-center text-danger fw-bold mb-4">Как выбрать подрядчика?</h3>

    <p class="lead fs-5">
        Обращайте внимание на мнения людей со стороны, которые ранее уже обращались за подобными услугами. Полученные сведения помогают нам узнавать, что нравится нашим заказчикам, а что нет, что мешает пользоваться дальше нашими услугами. Мы всегда просим Заказчиков оставить комментарий о нас и незамедлительно реагируем на них. Для нас важно:
    </p>

    <ul class="lead fs-5">
        <li>прислушиваться к Вам;</li>
        <li>учитывать ваши пожелания и предложения;</li>
        <li>отвечать на любые возникающие у вас вопросы.</li>
    </ul>

    <p class="lead fs-5">
        Ваше мнение помогает анализировать в целом нашу компанию:
    </p>

    <ul class="lead fs-5">
        <li>как работают наши менеджеры и операторы, инженеры-сметчики, прорабы и отделочники;</li>
        <li>какие имеются недостатки;</li>
        <li>и многое другое.</li>
    </ul>

    <p class="lead fs-5">
        Эти факторы мы дорабатываем, исправляем и устраняем в кратчайшие сроки.
    </p>

    <h3 class="text-center text-danger fw-bold mb-4">КАКИЕ ВИДЫ РЕМОНТА МЫ ВЫПОЛНЯЕМ</h3>

    <ul class="lead fs-5">
        <li><a href="#" class="text-success text-decoration-none">Под ключ;</a></li>
        <li><a href="#" class="text-success text-decoration-none">Капитальный;</a></li>
        <li><a href="#" class="text-success text-decoration-none">Косметический;</a></li>
        <li><a href="#" class="text-success text-decoration-none">Комплексный;</a></li>
        <li><a href="#" class="text-success text-decoration-none">Евроремонт;</a></li>
        <li><a href="#" class="text-success text-decoration-none">По дизайн-проекту;</a></li>
        <li><a href="#" class="text-success text-decoration-none">Бюджетный.</a></li>
    </ul>

    <p class="lead fs-5">
        Цены Вы можете посмотреть на главной странице сайта. Консультация и вызов мастера осуществляется бесплатно.
    </p>

    <h3 class="text-center text-danger fw-bold mb-4">НАШИ ГЛАВНЫЕ ЗАДАЧИ И ОБЯЗАННОСТИ</h3>

    <p class="lead fs-5">
        Мы очень благодарим и уважаем своих Заказчиков за добрые слова и напутствия. Ввиду большой конкуренции в нашей сфере, Ваши характеристики, пожелания и замечания являются инструментом повышения или снижения нашего рейтинга и репутации. Мы ответственно относимся к своим обязанностям. Не боимся сложностей и стараемся сократить риск ошибок. Помните, отделочные работы — это комплекс сложных и трудоемких мероприятий. По одному шаблону сделать ремонт невозможно. Подрядчик должен быть компетентен в любых ситуациях и правильно реагировать на любые рабочие моменты. Опытный прораб знает, что не бывает безвыходных ситуаций.
    </p>

    <h4 class="text-center text-danger fw-bold mb-4">Наша задача — выполнить свои обязательства</h4>

    <p class="lead fs-5">
        — принятие заявки; — осмотр и замер; — составление сметы; — заключение договора; — выполнение работ в оговоренные сроки качественно и профессионально. Это поможет стать для Вас надежными партнерами и советчиками. Положительные эмоции наших Заказчиков от результатов ремонта — это и есть залог нашего успеха и продвижения. После завершения нашей работы мы всегда стараемся сохранить дружеские отношения.
    </p>

    <h4 class="text-center text-danger fw-bold mb-4">Если Вас интересует:</h4>

    <p class="lead fs-5">
        — создание дизайнерского проекта; — услуги по ремонту; — отзывы и рейтинг организаций по отделке; Вы можете любую информацию найти в интернете, которая поможет Вам в выборе надежного исполнителя. Данная информация дает возможность получить клиентам ответы на все интересующие их вопросы. В первую очередь, что необходимо знать Заказчику: — добросовестность и компетентность подрядчика; — качество предоставляемых фирмой услуг по отделке помещений; — цены на требуемые услуги; — и многое другое. На нашем сайте Вы можете найти ответы на все интересующие Вас вопросы. Мы стараемся как можно подробнее внести ясность о нашей деятельности.
    </p>

    <h3 class="text-center text-danger fw-bold mb-4">Мы регулярно публикуем:</h3>

    <ul class="lead fs-5">
        <li><a href="#" class="text-success text-decoration-none">ссылки на популярные отзывики;</a></li>
        <li><a href="#" class="text-success text-decoration-none">актуальные цены на услуги по ремонту;</a></li>
        <li><a href="#" class="text-success text-decoration-none">приблизительную стоимость за ремонтные работы;</a></li>
        <li><a href="#" class="text-success text-decoration-none">что входит в стоимость указанной суммы по ремонту;</a></li>
        <li><a href="#" class="text-success text-decoration-none">сроки выполнения ремонтных мероприятий;</a></li>
        <li><a href="#" class="text-success text-decoration-none">видеоотчеты о проделанной нами работе;</a></li>
        <li><a href="#" class="text-success text-decoration-none">фотографии, на которых можно посмотреть примеры наших работ;</a></li>
        <li><a href="#" class="text-success text-decoration-none">ознакомиться с гарантийными обязательствами;</a></li>
        <li><a href="#" class="text-success text-decoration-none">почитать полезные советы и статьи;</a></li>
        <li><a href="#" class="text-success text-decoration-none">узнать про действующие акции и скидки.</a></li>
    </ul>
</div>











    <x-room />


@endsection
