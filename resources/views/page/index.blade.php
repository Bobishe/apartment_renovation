@extends('layouts.app')

@section('title', $page->title)

@section('content')



    <div class="container my-5">
        <h2 class="text-center text-danger fw-bold mb-4 text-uppercase">Контакты компании ИП Покивайлов</h2>
        <div class="row">
            <!-- Левая часть с контактной информацией -->
            <div class="col-md-6">
                <p class="lead fs-5">Наша компания выполняет ремонт квартир, домов и нежилых помещений в Красноярске.
                    Основное направление выполнение ремонтно-отделочных мероприятий «под ключ»:</p>
                <ul class="lead">
                    <li>сантехнические и электромонтажные работы;</li>
                    <li>черновая и чистовая отделка;</li>
                    <li>укладка плитки и керамогранита;</li>
                    <li>монтаж натяжного потолка;</li>
                    <li>установка межкомнатных дверей и многое другое.</li>
                </ul>
                <p class="lead fs-5">Ремонт производится в рамках договора бытового подряда с гарантией 24 месяца.</p>

                <h4 class="lead fs-5 text-bold">Контакты организации:</h4>
                <p class="lead">Мы расположены в городе Красноярск. Офис находится по адресу ул. Железнодорожников, д.
                    17, оф. 613, на шестом этаже в бизнес-центре «Железнодорожный». Возле здания расположена удобная
                    парковка и остановка общественного транспорта «Красной гвардии». Точное местонахождение Вы можете
                    посмотреть на карте.</p>

                <p class="lead fs-5"><i class="fas fa-phone-alt"></i> +7 (902) 923-82-26</p>
                <p class="lead fs-5"><i class="fas fa-phone-alt"></i> +7 (391) 293-82-26</p>
                <p class="lead fs-5"><i class="fas fa-envelope"></i> <a
                        href="mailto:a2929448@yandex.ru">a2929448@yandex.ru</a></p>
                <p class="lead fs-5"><i class="fas fa-map-marker-alt"></i> УЛ. ЖЕЛЕЗНОДОРОЖНИКОВ, Д.17, ОФИС 613</p>

                <h5 class="lead fs-5">Социальные сети</h5>
                <div class="social-icons">
                    <a href="https://wa.me/79029238226?text=" class="mr-2 bi bi-whatsapp p-1 text-bg-success"
                        style="background-color: #157347;font-size: 1.3rem; color: white; border-radius: 50%; display: inline-flex; align-items: center; justify-content: center; width: 2.5rem; height: 2.5rem; text-decoration: none;"></a>
                    <a href="https://tlgg.ru/remont_kvartir_24" class="mr-2 bi bi-telegram p-1 text-bg-success"
                        style="background-color: #157347;font-size: 1.3rem; color: white; border-radius: 50%; display: inline-flex; align-items: center; justify-content: center; width: 2.5rem; height: 2.5rem; text-decoration: none;"></a>
                    <a href="https://ok.ru/group/60443121877243" class="mr-2 p-1 text-bg-success"
                        style="background-color: #157347;border-radius: 50%; display: inline-flex; align-items: center; justify-content: center; width: 2.5rem; height: 2.5rem; text-decoration: none;">
                        <img src="{{ asset('img/svg/odnoklassniki-svgrepo-com.svg') }}" alt="Odnoklassniki"
                            style="width: 1.3rem; height: 1.3rem; color: white;">
                    </a>
                    <a href="https://www.youtube.com/channel/UC4-n2VGT67KX92gBBsPtMSA"
                        class="mr-2 bi bi bi-youtube p-1 text-bg-success"
                        style="background-color: #157347;font-size: 1.3rem; color: white; border-radius: 50%; display: inline-flex; align-items: center; justify-content: center; width: 2.5rem; height: 2.5rem; text-decoration: none;"></a>
                    <a href="https://vk.com/remontkvartirkrasnoyarsk124" class="mr-2 p-1 text-bg-success"
                        style="background-color: #157347;border-radius: 50%; display: inline-flex; align-items: center; justify-content: center; width: 2.5rem; height: 2.5rem; text-decoration: none;">
                        <img src="{{ asset('img/svg/vk-svgrepo-com.svg') }}" alt="vk"
                            style="width: 1.5rem; height: 1.3rem; color: white;">
                    </a>
                </div>
            </div>

            <!-- Правая часть с картой -->
            <div class="col-md-6">
                <h4 class="text-center fw-bold lead fs-5">Схема проезда</h4>
                <div style="position:relative;overflow:hidden;"><a
                        href="https://yandex.ru/maps/org/ip_pokivaylov/49797871367/?utm_medium=mapframe&utm_source=maps"
                        style="color:#eee;font-size:12px;position:absolute;top:0px;">ИП Покивайлов</a><a
                        href="https://yandex.ru/maps/62/krasnoyarsk/category/construction_and_finishing_works/184107547/?utm_medium=mapframe&utm_source=maps"
                        style="color:#eee;font-size:12px;position:absolute;top:14px;">Строительные и отделочные работы в
                        Красноярске</a><a
                        href="https://yandex.ru/maps/62/krasnoyarsk/category/interior_design/184107539/?utm_medium=mapframe&utm_source=maps"
                        style="color:#eee;font-size:12px;position:absolute;top:28px;">Дизайн интерьеров в
                        Красноярске</a><iframe
                        src="https://yandex.ru/map-widget/v1/org/ip_pokivaylov/49797871367/?ll=92.843695%2C56.021024&z=16.4"
                        width="560" height="400" frameborder="1" allowfullscreen="true"
                        style="position:relative;"></iframe></div>
            </div>
        </div>
    </div>





    {!! $page->body !!}



@endsection
