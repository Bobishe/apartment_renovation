@extends('layouts.app')

@section('title', $page->title)

@section('content')

    <div class="container mt-5">
        <h2 class="text-center text-danger fw-bold mb-4">Компания по ремонту квартир в Красноярске</h2>
        <p class="lead">
            Мы осуществляем ремонт квартир в Красноярске. Компания ИП Покивайлов начала свою деятельность в 2018 году.
            Основной профиль — это ремонт квартир под ключ, включающий электромонтажные и сантехнические работы,
            перепланировка жилья, возведение межкомнатных конструкций, выравнивание поверхностей, укладка плитки, чистовая
            отделка, монтаж натяжного потолка и установка дверей.
        </p>
        <p class="lead">
            В компании строго определяются задачи среди сотрудников. Принятие заявки на ремонт осуществляется менеджерами,
            инженеры-сметчики консультируют, проводят осмотр помещения и составляют ремонтный комплекс, прорабы контролируют
            ход ремонта, закупают необходимый материал и дают техническое задание мастерам.
        </p>
        <p class="lead">
            Штат сотрудников компании насчитывает 117 высококвалифицированных сотрудников: электрики, сантехники,
            отделочники, плиточники, мастера по установке дверей, специалисты по монтажу натяжных потолков. Ребята уже
            проверенные временем, подтвердившие свою квалификацию немалым списком законченных объектов на 5+.
        </p>
    </div>


    <div class="container my-5">
        <h2 class="text-center text-danger fw-bold mb-4">Документы на ремонт квартиры</h2>
        <div class="row">
            <div class="col-md-4 mb-4">
                <img src="{{ asset('img/docs/EGRIP-str.-1.png') }}" class="img-fluid document-image" alt="Документ 1"
                    data-bs-toggle="modal" data-bs-target="#documentModal1">
            </div>
            <div class="col-md-4 mb-4">
                <img src="{{ asset('img/docs/EGRIP-str.-2.png') }}" class="img-fluid document-image" alt="Документ 2"
                    data-bs-toggle="modal" data-bs-target="#documentModal2">
            </div>
            <div class="col-md-4 mb-4">
                <img src="{{ asset('img/docs/EGRIP-str.-3.png') }}" class="img-fluid document-image" alt="Документ 3"
                    data-bs-toggle="modal" data-bs-target="#documentModal3">
            </div>
            <div class="col-md-4 mb-4">
                <img src="{{ asset('img/docs/EGRIP-str.-4.png') }}" class="img-fluid document-image" alt="Документ 3"
                    data-bs-toggle="modal" data-bs-target="#documentModal4">
            </div>
            <div class="col-md-4 mb-4">
                <img src="{{ asset('img/docs/EGRIP-str.-5.png') }}" class="img-fluid document-image" alt="Документ 3"
                    data-bs-toggle="modal" data-bs-target="#documentModal5">
            </div>
            <div class="col-md-4 mb-4">
                <img src="{{ asset('img/docs/EGRIP-str.-6.png') }}" class="img-fluid document-image" alt="Документ 3"
                    data-bs-toggle="modal" data-bs-target="#documentModal6">
            </div>
        </div>
    </div>

    <!-- Модальные окна для увеличения изображений -->
    <div class="modal fade" id="documentModal1" tabindex="-1" aria-labelledby="documentModal1Label" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-body p-0">
                    <img src="{{ asset('img/docs/EGRIP-str.-1.png') }}" class="img-fluid" alt="Документ 1">
                </div>
            </div>
        </div>
    </div>

    <div class="modal fade" id="documentModal2" tabindex="-1" aria-labelledby="documentModal2Label" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-body p-0">
                    <img src="{{ asset('img/docs/EGRIP-str.-2.png') }}" class="img-fluid" alt="Документ 2">
                </div>
            </div>
        </div>
    </div>

    <div class="modal fade" id="documentModal3" tabindex="-1" aria-labelledby="documentModal3Label" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-body p-0">
                    <img src="{{ asset('img/docs/EGRIP-str.-3.png') }}" class="img-fluid" alt="Документ 3">
                </div>
            </div>
        </div>
    </div>


    <div class="modal fade" id="documentModal4" tabindex="-1" aria-labelledby="documentModal4Label" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-body p-0">
                    <img src="{{ asset('img/docs/EGRIP-str.-4.png') }}" class="img-fluid" alt="Документ 1">
                </div>
            </div>
        </div>
    </div>

    <div class="modal fade" id="documentModal5" tabindex="-1" aria-labelledby="documentModal5Label" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-body p-0">
                    <img src="{{ asset('img/docs/EGRIP-str.-5.png') }}" class="img-fluid" alt="Документ 2">
                </div>
            </div>
        </div>
    </div>

    <div class="modal fade" id="documentModal6" tabindex="-1" aria-labelledby="documentModal6Label" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-body p-0">
                    <img src="{{ asset('img/docs/EGRIP-str.-6.png') }}" class="img-fluid" alt="Документ 3">
                </div>
            </div>
        </div>
    </div>






    <div class="container my-5">
        <h2 class="text-center text-danger fw-bold mb-4">Образец договора бытового подряда</h2>
        <p class="text-center">
            Многие Заказчики, прежде чем выбрать подрядчика для выполнения ремонта, изъявляют желание ознакомиться с
            образцом договора бытового подряда.
            Это поможет удостовериться, что компания учитывает интересы клиента, предоставляет обещанную гарантию и
            соблюдает закон о защите прав потребителя.
        </p>
        <p class="text-center">
            Вы можете подробно изучить все условия дальнейшего сотрудничества, которые мы предлагаем.
        </p>
        <div class="row justify-content-center mt-5">
            <div class="col-md-4 mb-4">
                <img src="{{ asset('img/docs/blank-dogovora-str.-1.png') }}" class="img-fluid document-image"
                    alt="Договор 1" data-bs-toggle="modal" data-bs-target="#contractModal1">
            </div>
            <div class="col-md-4 mb-4">
                <img src="{{ asset('img/docs/blank-dogovora-str.-2.png') }}" class="img-fluid document-image"
                    alt="Договор 2" data-bs-toggle="modal" data-bs-target="#contractModal2">
            </div>
            <div class="col-md-4 mb-4">
                <img src="{{ asset('img/docs/blank-dogovora-str.-3.png') }}" class="img-fluid document-image"
                    alt="Договор 3" data-bs-toggle="modal" data-bs-target="#contractModal3">
            </div>
        </div>
    </div>

    <!-- Модальные окна для увеличения изображений -->
    <div class="modal fade" id="contractModal1" tabindex="-1" aria-labelledby="contractModal1Label"
        aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-body p-0">
                    <img src="{{ asset('img/docs/blank-dogovora-str.-1.png') }}" class="img-fluid" alt="Договор 1">
                </div>
            </div>
        </div>
    </div>

    <div class="modal fade" id="contractModal2" tabindex="-1" aria-labelledby="contractModal2Label"
        aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-body p-0">
                    <img src="{{ asset('img/docs/blank-dogovora-str.-2.png') }}" class="img-fluid" alt="Договор 2">
                </div>
            </div>
        </div>
    </div>

    <div class="modal fade" id="contractModal3" tabindex="-1" aria-labelledby="contractModal3Label"
        aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-body p-0">
                    <img src="{{ asset('img/docs/blank-dogovora-str.-3.png') }}" class="img-fluid" alt="Договор 3">
                </div>
            </div>
        </div>
    </div>





    <div class="container my-5">
        <h2 class="text-center text-danger fw-bold mb-4">Гарантийные обязательства нашей организации</h2>
        <div class="p-4 border border-success rounded">
            <p>Компания «ИП ПОКИВАЙЛОВ» имеет опыт в строительно-отделочных работах различной сложности. Ремонтные работы
                производятся согласно ГОСТам, СНиПам и законодательству РФ.</p>
            <p>Предоставляется гарантия на все виды ремонтно-отделочных работ. Компания не несет ответственности в случаях:
            </p>
            <ul>
                <li>форс-мажорных ситуациях: землетрясения, затопления, пожара, протекания межпанельных швов;</li>
                <li>проведение ремонта лично Заказчиком или третьими лицами;</li>
                <li>приобретение Заказчиком некачественного материала.</li>
            </ul>
            <p>Срок гарантии должен быть прописан в договоре бытового подряда, подписанном между Заказчиком и исполнителем.
            </p>
            <p>Обо всех недостатках Заказчик должен сообщить исполнителю в период, указанный в договоре. Отсчёт ведётся с
                того момента, когда Заказчик принял работу, и был подписан акт приёма-сдачи работ.</p>
            <p>Предоставленная выше информация может использоваться свидетельским документом как Заказчика, так и
                подрядчика. Поэтому наличие указанной гарантии на выполнение работ в договоре подчеркивает добросовестность
                и ответственность строительной компании, с которой Вы подписываете договор на ремонт своей квартиры.</p>
        </div>

        <h2 class="text-center text-danger fw-bold my-5">Наша фирма выполняет ремонт в квартирах Красноярска</h2>
        <div class="px-4">
            <p>Виды ремонта квартир, домов и нежилых помещений бывают разные:</p>
            <ul class="list-unstyled">
                <li class="text-success">— Капитальный;</li>
                <li class="text-success">— Под ключ;</li>
                <li class="text-success">— Косметический;</li>
                <li class="text-success">— Комплексный ремонт в новостройке;</li>
                <li class="text-success">— Евроремонт (элитный и эксклюзивный);</li>
                <li class="text-success">— Дизайнерский;</li>
                <li class="text-success">— Бюджетный.</li>
            </ul>
        </div>
    </div>







    <div class="container my-5">
        <h2 class="text-center text-danger fw-bold mb-4">Этапы ремонта квартиры</h2>
        <div class="row text-center">
            <div class="col-md-4 mb-4">
                <div class="icon text-center">
                    <i class="bi bi-telephone-fill text-success fs-1"></i>
                </div>
                <h5 class="fw-bold mt-3">ОФОРМЛЕНИЕ ЗАЯВКИ</h5>
                <p>Для того чтобы оставить заявку, Вам необходимо связаться по указанному номеру телефона или заполнить
                    форму, в ближайшее время с вами свяжутся наши специалисты, подробно Вас проконсультируют и оформят ваше
                    обращение.</p>
            </div>
            <div class="col-md-4 mb-4">
                <div class="icon text-center">
                    <i class="bi bi-calendar-check-fill text-success fs-1"></i>
                </div>
                <h5 class="fw-bold mt-3">КОНСУЛЬТАЦИЯ</h5>
                <p>После оформления заявки к Вам будет направлен инженер для проведения замеров, составления списка
                    материалов и оценки предстоящих работ. Мастер подробно расскажет про алгоритм работы и технологии,
                    которые мы используем.</p>
            </div>
            <div class="col-md-4 mb-4">
                <div class="icon text-center">
                    <i class="bi bi-file-earmark-text-fill text-success fs-1"></i>
                </div>
                <h5 class="fw-bold mt-3">ЗАКЛЮЧЕНИЕ ДОГОВОРА</h5>
                <p>Перед тем как приступить к ремонту, мы предлагаем договор бытового подряда для ознакомления. Далее в
                    договоре прописываются все виды услуг, сроки и стоимость. После подписания, мы приступаем к выполнению
                    технического задания.</p>
            </div>
            <div class="col-md-4 mb-4">
                <div class="icon text-center">
                    <i class="bi bi-cart-fill text-success fs-1"></i>
                </div>
                <h5 class="fw-bold mt-3">ЗАКУПКА МАТЕРИАЛОВ</h5>
                <p>Пока проводятся подготовительные мероприятия и демонтажные работы, необходимо приобрести строительный
                    материал. Наша компания напрямую работает с магазинами Красноярска, поэтому мы можем гарантировать
                    покупку качественных материалов, также осуществляем доставку и подъём.</p>
            </div>
            <div class="col-md-4 mb-4">
                <div class="icon text-center">
                    <i class="bi bi-wrench-adjustable-circle-fill text-success fs-1"></i>
                </div>
                <h5 class="fw-bold mt-3">ВЫПОЛНЕНИЕ РЕМОНТА</h5>
                <p>Мы допускаем к работе только высококвалифицированных специалистов с опытом работы не менее 6 лет. Работы
                    производятся строго в оговоренные сроки. Качество выполнения регулярно контролируется прорабом.
                    Менеджеры компании также контролируют ход работы дистанционно, регулярно созваниваясь с Заказчиком.</p>
            </div>
            <div class="col-md-4 mb-4">
                <div class="icon text-center">
                    <i class="bi bi-check-circle-fill text-success fs-1"></i>
                </div>
                <h5 class="fw-bold mt-3">ЗАВЕРШЕНИЕ РАБОТЫ</h5>
                <p>По завершению работы, на место приезжает прораб, проверяет качество и сдаёт объект. По факту приёма
                    производится окончательная оплата. В случае отсутствия клиента, мы отчитываемся о результате по
                    видеосвязи или фотоотчётами. В таком случае, оплата осуществляется с помощью онлайн перевода на карту.
                </p>
            </div>
        </div>
    </div>






    <div class="container my-5">
        <h2 class="text-center text-danger fw-bold mb-4">Что для нас важно?</h2>
        <p class="text-center mb-4">В случае необходимости Вы можете произвести оплату за работы или за материалы кредитной
            картой.</p>
        <p>
            Мы дорожим каждым Заказчиком, поэтому к работе относимся ответственно. Помимо достижения отличного качества,
            наша главная задача взять на себя хлопоты и возможные трудности.
            Необходимо индивидуально подходить к каждому заказу, так как пожелания у всех разные и требуемый комплекс работ
            в каждом конкретном случае будет отличаться. Мы это учитываем на протяжении всего ремонта. Стараемся ответить на
            возникшие вопросы, подробно консультируем, помогаем как словом, так делом.
        </p>
        <p>
            Ведем <a href="#">блог</a> полезных советов, исходя из опыта в отделочных мероприятиях, в котором можно
            прочитать разнообразную полезную информацию. Регулярно проводим фото и видео съемки объектов с разрешения
            Заказчиков. Результаты работы смотрите на сайте в разделах <a href="#">галерея</a> и <a
                href="#">видео отчеты</a>.
        </p>
        <p>
            За последнее время стоимость материалов дорожает, но мы стараемся не поднимать стоимость наших услуг, а также
            используем технологии, позволяющие сократить денежные расходы не в ущерб качеству.
        </p>
        <p>
            Мы дорожим репутацией и стремимся добиться отличного результата, который будет радовать Вас на протяжении
            долгого времени. Нам важно узнать мнение о нашей организации, о мастерстве специалистов. Благодаря <a
                href="#">отзывам</a>, комментариям и рекомендациям, компания сохраняет конкурентоспособность в сфере
            ремонта и отделки помещений.
        </p>
    </div>





    <div class="container my-5">
        <h2 class="text-center text-danger fw-bold mb-4">Инструмент компании</h2>
        <p class="text-center mb-4">Для выполнения качественного ремонта, компания приобретает профессиональный
            строительный инструмент, что позволяет выполнять ремонт быстро, качественно и с соблюдением всех технических
            нормативов.</p>

        <div class="row">
            <div class="col-md-3 col-6 mb-4">
                <img src="{{ asset('img/tool/Stroitelnyj-pylesos-foto-1.jpeg') }}"
                    style="width: 100%; height: 200px; object-fit: cover;" alt="Инструмент 1">
            </div>
            <div class="col-md-3 col-6 mb-4">
                <img src="{{ asset('img/tool/shurupovyort-foto-1.jpeg') }}"
                    style="width: 100%; height: 200px; object-fit: cover;" alt="Инструмент 2">
            </div>
            <div class="col-md-3 col-6 mb-4">
                <img src="{{ asset('img/tool/shurupovert_makita.jpg') }}"
                    style="width: 100%; height: 200px; object-fit: cover;" alt="Инструмент 3">
            </div>
            <div class="col-md-3 col-6 mb-4">
                <img src="{{ asset('img/tool/nabory-instrumentov-foto-4.jpeg') }}"
                    style="width: 100%; height: 200px; object-fit: cover;" alt="Инструмент 4">
            </div>
            <div class="col-md-3 col-6 mb-4">
                <img src="{{ asset('img/tool/nabory-instrumentov-foto-2.jpeg') }}"
                    style="width: 100%; height: 200px; object-fit: cover;" alt="Инструмент 5">
            </div>
            <div class="col-md-3 col-6 mb-4">
                <img src="{{ asset('img/tool/nabory-instrumentov.jpeg') }}"
                    style="width: 100%; height: 200px; object-fit: cover;" alt="Инструмент 6">
            </div>
            <div class="col-md-3 col-6 mb-4">
                <img src="{{ asset('img/tool/nabor-elektro-instrumenta.jpeg') }}"
                    style="width: 100%; height: 200px; object-fit: cover;" alt="Инструмент 7">
            </div>
            <div class="col-md-3 col-6 mb-4">
                <img src="{{ asset('img/tool/nabor-instrumenta.jpeg') }}"
                    style="width: 100%; height: 200px; object-fit: cover;" alt="Инструмент 8">
            </div>
            <div class="col-md-3 col-6 mb-4">
                <img src="{{ asset('img/tool/nabor-instrumentov-1.jpg') }}"
                    style="width: 100%; height: 200px; object-fit: cover;" alt="Инструмент 9">
            </div>
            <div class="col-md-3 col-6 mb-4">
                <img src="{{ asset('img/tool/nabor-instrumentov-2.jpg') }}"
                    style="width: 100%; height: 200px; object-fit: cover;" alt="Инструмент 10">
            </div>
            <div class="col-md-3 col-6 mb-4">
                <img src="{{ asset('img/tool/nabor-instrumentov-3.jpg') }}"
                    style="width: 100%; height: 200px; object-fit: cover;" alt="Инструмент 11">
            </div>
            <div class="col-md-3 col-6 mb-4">
                <img src="{{ asset('img/tool/instrumenti.jpg') }}" style="width: 100%; height: 200px; object-fit: cover;"
                    alt="Инструмент 12">
            </div>
        </div>

        <p class="text-center mt-4">
            Перфораторы, болгарки, шуруповерты и дрели, торцовочники, штроборезы, отбойники, шлифовальные машинки, станки
            для резки сложного керамогранита, профессиональные строительные пылесосы, лазерные уровни и другой
            профессиональный инструмент.
        </p>
    </div>






    <div class="container my-5">
        <h2 class="text-center text-danger fw-bold mb-4">НАШИ ПАРТНЕРЫ В КРАСНОЯРСКЕ</h2>

        <!-- Блок с логотипами партнеров -->
        <div class="row mb-4 text-center mx-auto">
            <div class="col-md-1"></div>
            <div class="col-md-2 col-4 mb-3">
                <img src="{{ asset('img/logo/1allegro.png') }}" style="width: 100%; height: 100px; object-fit: contain;"
                    alt="Партнер 1">
            </div>
            <div class="col-md-2 col-4 mb-3">
                <img src="{{ asset('img/logo/1eko-dveri.png') }}"
                    style="width: 100%; height: 100px; object-fit: contain;" alt="Партнер 2">
            </div>
            <div class="col-md-2 col-4 mb-3">
                <img src="{{ asset('img/logo/1emarti.png') }}" style="width: 100%; height: 100px; object-fit: contain;"
                    alt="Партнер 3">
            </div>
            <div class="col-md-2 col-4 mb-3">
                <img src="{{ asset('img/logo/1дедал.png') }}" style="width: 100%; height: 100px; object-fit: contain;"
                    alt="Партнер 4">
            </div>
            <div class="col-md-2 col-4 mb-3">
                <img src="{{ asset('img/logo/1очаг.png') }}" style="width: 100%; height: 100px; object-fit: contain;"
                    alt="Партнер 5">
            </div>
            <div class="col-md-1"></div>
        </div>

        <!-- Текстовое описание -->
        <p class="text-center mb-4">
            Наша компания тщательно подходит к выбору поставщиков отделочных материалов. Основные критерии при выборе
            магазина:
        <ul>
            <li>условия хранения материала, особенно это касается сыпучих смесей для черновой отделки (штукатурка,
                шпаклевка, стяжка, наливной пол, клей для плитки и так далее);</li>
            <li>доступная цена;</li>
            <li>наличие сертификатов соответствия и паспортов на приобретаемый материал.</li>
        </ul>
        Наша компания дает гарантию на весь материал, который мы приобретаем для ремонта и предоставляем полный отчет по
        чекам.
        </p>

        <!-- Блок с логотипами марок строительных материалов -->
        <h2 class="text-center text-danger fw-bold mb-4 mt-5">МАРКИ СТРОИТЕЛЬНЫХ МАТЕРИАЛОВ</h2>
        <div class="row mb-4 text-center">
            <div class="col-md-2 col-4 mb-3">
                <img src="{{ asset('img/logo/2бергауф.png') }}" style="width: 100%; height: 100px; object-fit: contain;"
                    alt="Марка 1">
            </div>
            <div class="col-md-2 col-4 mb-3">
                <img src="{{ asset('img/logo/2геркулес.png') }}" style="width: 100%; height: 100px; object-fit: contain;"
                    alt="Марка 2">
            </div>
            <div class="col-md-2 col-4 mb-3">
                <img src="{{ asset('img/logo/2керамин.png') }}" style="width: 100%; height: 100px; object-fit: contain;"
                    alt="Марка 3">
            </div>
            <div class="col-md-2 col-4 mb-3">
                <img src="{{ asset('img/logo/2кнауф.png') }}" style="width: 100%; height: 100px; object-fit: contain;"
                    alt="Марка 4">
            </div>
            <div class="col-md-2 col-4 mb-3">
                <img src="{{ asset('img/logo/2нефрит.png') }}" style="width: 100%; height: 100px; object-fit: contain;"
                    alt="Марка 5">
            </div>
            <div class="col-md-2 col-4 mb-3">
                <img src="{{ asset('img/logo/2профлукс.png') }}" style="width: 100%; height: 100px; object-fit: contain;"
                    alt="Марка 6">
            </div>
        </div>

        <!-- Описание марок материалов -->
        <p class="text-center mt-4">
            Главная задача нашей компании — это выполнение качественного ремонта. Помимо профессионализма мастеров, мы
            уделяем внимание вопросу выбора отделочных материалов. За время существования компании мы перепробовали
            различные марки материалов, применение которых гарантирует качественный результат ремонта.
            <br><br>
            Также мы даем рекомендации Заказчикам по приобретению чистовых материалов: напольного покрытия, сантехнического
            оборудования, обоев, дверей, осветительных приборов, кафельной плитки и керамогранита.
        </p>
    </div>



    <x-form />



@endsection
