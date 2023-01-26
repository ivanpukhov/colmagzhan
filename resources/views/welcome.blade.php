<!doctype html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport"
        content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="{{ asset('css/main.css') }}">

</head>

<body>
    <header class="header">
        <div class="circle">
            <img src="{{ asset('img/circle.svg') }}" alt="">
        </div>
        <nav class="nav">
            <div class="logo">
                <img src="{{ asset('img/logo.svg') }}" alt="">
            </div>
            <menu class="menu">
                <li>О колледже</li>
                <li>Новости</li>
                <li>Студенту</li>
                <li>Специальности</li>
            </menu>
            <div class="number">
                <div class="number__icon">
                    <svg width="36" height="36" viewBox="0 0 36 36" fill="none"
                        xmlns="http://www.w3.org/2000/svg">
                        <rect width="36" height="36" rx="18" fill="#FF6434" />
                        <path
                            d="M22.4333 19.6334C21.9634 19.1696 21.3769 19.1696 20.91 19.6334C20.5539 19.9865 20.1978 20.3396 19.8477 20.6987C19.7519 20.7975 19.6711 20.8184 19.5544 20.7526C19.324 20.6269 19.0786 20.5252 18.8572 20.3875C17.8247 19.7381 16.9599 18.9032 16.1938 17.9636C15.8137 17.4968 15.4756 16.997 15.2391 16.4344C15.1913 16.3207 15.2002 16.2459 15.293 16.1532C15.6491 15.809 15.9963 15.4559 16.3464 15.1028C16.8342 14.612 16.8342 14.0375 16.3434 13.5437C16.0651 13.2624 15.7868 12.9871 15.5085 12.7058C15.2212 12.4185 14.9369 12.1283 14.6466 11.844C14.1768 11.3861 13.5902 11.3861 13.1234 11.847C12.7643 12.2001 12.4202 12.5622 12.0551 12.9093C11.7169 13.2295 11.5463 13.6215 11.5104 14.0794C11.4536 14.8245 11.6361 15.5277 11.8935 16.213C12.4202 17.6314 13.2222 18.8913 14.1947 20.0464C15.5085 21.6084 17.0766 22.8443 18.911 23.7361C19.737 24.1371 20.5928 24.4453 21.5235 24.4962C22.1639 24.5321 22.7205 24.3705 23.1664 23.8708C23.4717 23.5296 23.8158 23.2184 24.139 22.8922C24.6178 22.4074 24.6208 21.8209 24.145 21.3421C23.5764 20.7705 23.0048 20.202 22.4333 19.6334Z"
                            fill="white" />
                    </svg>
                </div>
                <div class="number__text">
                    <div class="number__text-text">8 (7152) 36-91-36</div>
                    <div class="number__text-subtext">Ежедневно с 9:00 до 20:00</div>
                </div>
        </nav>
        </div>
        <div class="header__content">
            <div class="header__left">
                <div class="header__title">
                    Высший колледж имени Магжана Жумабаева
                </div>
                <div class="header__subtitle">
                    Подготовка профессиональных кадров и их конкурентоспособность на рынке образовательных услуг
                </div>
                <div class="header__btn">
                    <div class="header__btn-item back">О колледже</div>
                    <div class="header__btn-item noback">Абитуриенту</div>
                </div>
            </div>

            <div class="header__right">
                <img src="{{ asset('img/cat.svg') }}" alt="">
            </div>
        </div>

        </div>
    </header>
    <div class="container">
        <div class="circle__second">
            <img src="{{ asset('img/circle__second.svg') }}" alt="">
        </div>
        <div class="dir">
            <div class="dir__photo">
                <div class="dir__img">
                    <img src="{{ asset('img/dir.svg') }}" alt="">
                </div>
                <div class="dir__name">
                    <div class="dir__name-title">
                        Жандильдин <br>
                        Ерлик Борисович
                    </div>
                    <div class="dir__im">
                        Директор
                    </div>
                </div>
            </div>
            <div class="dir__text">
                <div class="dir__quote">
                    <svg width="40" height="40" viewBox="0 0 40 40" fill="none"
                        xmlns="http://www.w3.org/2000/svg">
                        <g opacity="0.9">
                            <path
                                d="M8.78049 15.9902C13.6083 15.9902 17.522 19.904 17.522 24.7317C17.522 29.5594 13.6083 33.4732 8.78049 33.4732C3.9527 33.4732 0.0390244 29.5594 0.0390244 24.7317L0 23.4829C0 13.8274 7.82736 6 17.4829 6V10.9951C14.1474 10.9951 11.0114 12.2941 8.65272 14.6527C8.19871 15.1068 7.78435 15.5899 7.41058 16.0974C7.85694 16.0272 8.31438 15.9902 8.78049 15.9902ZM31.2585 15.9902C36.0862 15.9902 40 19.904 40 24.7317C40 29.5594 36.0862 33.4732 31.2585 33.4732C26.4308 33.4732 22.5171 29.5594 22.5171 24.7317L22.478 23.4829C22.478 13.8274 30.3053 6 39.961 6V10.9951C36.6255 10.9951 33.4893 12.2941 31.1308 14.6527C30.6767 15.1068 30.2623 15.5899 29.8885 16.0974C30.3349 16.0272 30.7924 15.9902 31.2585 15.9902Z"
                                fill="#FF6434" />
                        </g>
                    </svg>
                </div>
                <div class="dir__text-title">
                    «Уважаемые преподаватели и студенты!»
                </div>
                <div class="dir__text-content">
                    «Эпоха новых взглядов, креативного мышления заставляет менять подходы и технологии во всем. Сегодня
                    как никогда ощущается дефицит молодых специалистов, поэтому большие надежды возлагаются на систему
                    профессионального образования, на подготовку квалифицированных специалистов. Это достигается через
                    освоение государственных образовательных стандартов на основе взаимопонимания и сотрудничества между
                    педагогами и студентами.»
                </div>
                <div class="text__next">
                    Читать полностью
                </div>
            </div>
        </div>
        <div class="spec">
            <div class="spec__title">
                Направления обучения
            </div>
            <div class="spec__content">

                @foreach ($spec as $item)
                    <div class="spec__item" id="spec">
                        <div class="spec__item-title">
                            {{ $item->title }}
                        </div>
                        <div class="spec__item-har">
                            <div class="spec__item-har-item">
                                <div class="spec__item-lang">
                                    Язык обучения: {{ $item->lang }}
                                </div>
                                <div class="spec__item-srok">
                                    Срок обучения: {{ $item->srok }}
                                </div>
                                <div class="spec__item-base">
                                    На базе {{ $item->base }}
                                </div>
                            </div>
                            <a href="">
                                <img src="{{ asset('img/spec__link.svg') }}" class="link" alt="">
                                <img src="{{ asset('img/spec__white.svg') }}" class="white" alt="">

                            </a>
                        </div>
                    </div>
                @endforeach
                {{ $spec }}

            </div>
            <button class="spec__btn">See more</button>
        </div>
        <div class="mission">
            <div class="mission__left">
                <img src="{{ asset('img/facade.svg') }}" alt="">
            </div>
            <div class="mission__content">
                <div class="mission__title">Миссия Высшего колледжа имени М. Жумабаева</div>
                <div class="mission__text">
                    <p>
                        Миссия заключается в реализации государственной политики в области технического и
                        профессионального образования, обеспечивающей конкурентоспособность выпускников и устойчивое
                        развитие колледжа.
                    </p>
                    <p>
                        Для достижения цели, осуществления миссии в соответствии с потенциальными возможностями
                        коллектива, имеющимися ресурсами и современными требованиями рынка труда определены следующие
                        ключевые задачи:
                    </p>
                    <li>
                        Функционирование эффективной системы технического и профессионального образования,
                        интегрированной в мировое образовательное пространство
                    </li>
                    <li>
                        Подготовка специалистов, прошедших теоретическую и практическую подготовку по обновленному
                        содержанию среднего образования и владеющими компетенциями данной методологии
                    </li>
                    <li>
                        Повышение квалификации педагогических кадров в контексте обновления содержания образования
                        технического и профессионального образования
                    </li>
                </div>
                <div class="link">Читать полностью</div>
            </div>
        </div>
        <div class="concept">
            <div class="concept__title">
                Концептуальные идеи колледжа
            </div>
            <div class="concept__lf">
                <div class="concept__line">
                    <div class="concept__number">01</div>
                    <div class="concept__text">Развитие личности</div>
                </div>
                <div class="concept__line">
                    <div class="concept__number">02</div>
                    <div class="concept__text">Формирование профессиональных качеств</div>
                </div>
                <div class="concept__line">
                    <div class="concept__number">03</div>
                    <div class="concept__text">Высокие стандарты образования</div>
                </div>
                <div class="concept__line">
                    <div class="concept__number">04</div>
                    <div class="concept__text">Воспитание здорового образа жизни</div>
                </div>
            </div>
            <div class="concept__lf">
                <div class="concept__line big">
                    <div class="concept__number">01</div>
                    <div class="concept__text">Развитие личности</div>
                </div>
                <div class="concept__line big">
                    <div class="concept__number">02</div>
                    <div class="concept__text">Формирование профессиональных качеств</div>
                </div>
                <div class="concept__line big">
                    <div class="concept__number">03</div>
                    <div class="concept__text">Высокие стандарты образования</div>
                </div>

            </div>
        </div>
        <div class="contacts">

            <div class="contacts__block">
                <div class="contacts__title">
                    Контактная информация
                </div>
                <div class="contacts__item">
                    <div class="contacts__address">
                        <div class="contacts__item-title">
                            Адрес:
                        </div>
                        <div class="contacts__text">
                            150000, г. Петропавловск, ул. Абая, 28
                        </div>
                    </div>
                    <div class="contacts__dir">
                        <div class="contacts__item-title">Директор:</div>
                        <div class="contacts__text">Жандильдин Ерлик Борисович</div>
                    </div>
                    <div class="contacts__dir">
                        <div class="contacts__item-title">Заместитель директора</div>
                        <div class="contacts__text">Рысева Нина Валентиновна</div>
                    </div>
                    <div class="contacts__number">
                        <div class="contacts__item-title">Номер телефона:</div>
                        <div class="contacts__text">
                            +7-701-906-50-26 - Заместитель директора по IT
                        </div>
                        <div class="contacts__text">
                            +7-777-325-17-28 - Заместитель директора по УР
                        </div>
                        <div class="contacts__text">
                            +7-777-135-59-55 - Заместитель директора по ВР
                        </div>
                    </div>
                    <div class="contacts__svid">
                        <div class="contacts__item-title">Реквизиты подтверждающего документа:</div>
                        <div class="contacts__text">
                            Свидетельство о государственной перерегистрации юридического лица № 4696-1948-ГП,
                            выданное 28 февраля 2007 года Департаментом юстиции Северо-Казахстанской области
                        </div>
                    </div>
                </div>
            </div>
            <iframe
                src="https://yandex.ru/map-widget/v1/?um=constructor%3A973214e185784b9838621f9be1d345bc3d5563f2232614841d0bd65de73aa39e&amp;source=constructor"
                width="500" height="695" frameborder="0"></iframe>
        </div>

    </div>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.3/jquery.min.js"></script>
    <script>
        $(function() {
            var $posts = $("#spec");
            var $ul = $("ul.pagination");
            $ul.hide(); // Prevent the default Laravel paginator from showing, but we need the links...

            $(".see-more").click(function() {
                $.get($ul.find("a[rel='next']").attr("href"), function(response) {
                    $posts.append(
                        $(response).find("#posts").html()
                    );
                });
            });
        });
    </script>

</body>

</html>
