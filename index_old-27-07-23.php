<?php define('DOCROOT', $_SERVER['DOCUMENT_ROOT'] . DIRECTORY_SEPARATOR); ?>
<?php include 'content/seo.php'; ?>
<?php include 'content/cars-list.php'; ?>
<?php include 'content/disclaimers.php'; ?>
<?php include 'content/stock.php'; ?>
<?php include 'content/slides.php'; ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>CHERY | КЛЮЧАВТО - официальный дилер Чери в Ростов-на-Дону</title>
    <link rel="icon" href="favicon.ico">
    <link href="static/css/responsive.css" rel="stylesheet">
    <link rel="stylesheet" href="/static/css/style.css">
    <meta name="viewport" content="width=device-width,height=device-height,user-scalable=no" />
    <link rel="stylesheet" href="static/css/slick.css" />
    <link rel="stylesheet" href="static/css/slick-theme.css">
    <script src="static/js/jquery.min.js"></script>
    <!-- Google Tag Manager -->
    <script>(function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start':
    new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],
    j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src=
    'https://www.googletagmanager.com/gtm.js?id='+i+dl;f.parentNode.insertBefore(j,f);
    })(window,document,'script','dataLayer','GTM-5L267DK');</script>
    <!-- End Google Tag Manager -->

    <!-- Google Tag Manager (noscript) -->
    <noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-5L267DK"
    height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
    <!-- End Google Tag Manager (noscript) -->



    <!-- Yandex.Metrika counter - Глобальная 49660363 - ДЦ 70514314 - Реклама 80617696 -->
    <script type="text/javascript">
    (function(m,e,t,r,i,k,a){m[i]=m[i]||function(){(m[i].a=m[i].a||[]).push(arguments)};
    m[i].l=1*new Date();k=e.createElement(t),a=e.getElementsByTagName(t)[0],k.async=1,k.src=r,a.parentNode.insertBefore(k,a)})
    (window, document, "script", "https://mc.yandex.ru/metrika/tag.js", "ym");

    ym(49660363, "init", {
        clickmap:true,
        trackLinks:true,
        accurateTrackBounce:true
    });

    ym(70514314, "init", {
            clickmap:true,
            trackLinks:true,
            accurateTrackBounce:true,
            webvisor:true
    });

    ym(80617696, "init", {
            clickmap:true,
            trackLinks:true,
            accurateTrackBounce:true,
            webvisor:true
    });
    </script>
    <noscript>
    <div>
        <img src="https://mc.yandex.ru/watch/49660363?ut=noindex" style="position:absolute; left:-9999px;" style="..." alt="" />
        <img src="https://mc.yandex.ru/watch/80617696?ut=noindex" style="position:absolute; left:-9999px;" style="..." alt="" />
    </div>
    </noscript>
    <!-- /Yandex.Metrika counter -->

    <!-- calltouch -->
    <script type="text/javascript">
    (function(w,d,n,c){w.CalltouchDataObject=n;w[n]=function(){w[n]["callbacks"].push(arguments)};if(!w[n]["callbacks"]){w[n]["callbacks"]=[]}w[n]["loaded"]=false;if(typeof c!=="object"){c=[c]}w[n]["counters"]=c;for(var i=0;i<c.length;i+=1){p(c[i])}function p(cId){var a=d.getElementsByTagName("script")[0],s=d.createElement("script"),i=function(){a.parentNode.insertBefore(s,a)},m=typeof Array.prototype.find === 'function',n=m?"init-min.js":"init.js";s.type="text/javascript";s.async=true;s.src="https://mod.calltouch.ru/"+n+"?id="+cId;if(w.opera=="[object Opera]"){d.addEventListener("DOMContentLoaded",i,false)}else{i()}}})(window,document,"ct","s68io63b");
    </script>
    <!-- calltouch -->
</head>

<body>
    <header class="header">
        <div class="container header-container in-view" has-animation="">
            <div class="header__item logo-block" js-popup data-title="Заполнить заявку<br> на обратную связь">
                <img class="logo-block__brand" src="static/img/logo-white.svg" alt="">
                <img class="logo-block__brand logo-block__brand-chery" src="static/img/logos/logo.png" alt="">
                <img class="logo-block__brand logo-block__brand-chery_mobile" src="static/img/logos/logo_min.png" alt="">
                <!-- <div class="logo-block__dealer">
                    <p>КЛЮЧАВТО Chery Ростов</p>
                    <span>Официальный дилерский центр Chery</span>
                </div> -->
            </div>
            <a class="logo-block__phone" href="tel:+78632119211">
                <img src="/static/img/icons/ring_phone.svg" alt=""></img>
            </a>
            <div class="header__item phone-block">
                <a class="link link-header" href="tel:+78632119211">+7 (863) 211-92-11</a>
            </div>
            <div class="header__item callback-block">
                <button class="btn btn-header" js-popup data-title="Обратный звонок">
                   Обратный звонок
                </button>
            </div>
            <div class="header__item address-block" data-href="contacts">
                <p>г. Ростов-на-Дону, ул. Вавилова, 59К</p>
            </div>
            <div class="header_burger"></div>
        </div>
        <div class="menu-container">
            <div class="container">
                <nav class="menu">
                <ul class="menu-main">
                        <li class="menu-item menu-item_phone"><a class="link link--menu" href="tel:+78632119211">+7 (863) 211-92-11</a></li>
                        <li class="menu-item" data-href="models"><a class="link link--menu">Модельный ряд</a></li>
                        <li class="menu-item" data-href="credit"><a class="link link--menu">Кредитные предложения</a></li>
                        <li class="menu-item" data-href="benefits"><a class="link link--menu">Преимущества</a></li>
                        <li class="menu-item" data-href="profit"><a class="link link--menu">Выгода</a></li>
                        <li class="menu-item" data-href="contacts"><a class="link link--menu">Контакты</a></li>
                    </ul>
                </div>
            </div>
    </header>

    <main>
        <div class="section-slider">
            <div class="top-slider">
                <?php foreach ($slides as $slide): ?>
                <div class="slide_item">
                    <div class="img-wrap" js-popup="" data-title="Узнать цену">
                        <div class="img" style="background-image: url(static/img/slider/<?= $slide['image'] ?>)"></div>
                        <div class="img img--mobile <?= isset($slide['mobile-center']) ? $slide['mobile-center'] : '' ?>"
                            style="background-image: url(static/img/slider/<?= $slide['image-mobile'] ?>)">
                        </div>
                    </div>

                    <div class="text">
                        <?= $slide['text'] ?>
                    </div>
                    <div class="info-banner">
                        <form class="form form-banner" novalidate="">
                            <div class="wrap">
                                <div class="form-group">
                                    <input type="tel" name="phone" placeholder="Ваш Телефон" required="">
                                </div>
                                <div class="form-group">
                                    <button class="btn btn-banner">
                                        Получить предложение
                                    </button>
                                </div>
                            </div>
                            <div class="footnote">
                                <img class="check-icon" src="static/img/icons/check.png" alt="">
                                <p>Я согласен <a href="#" target="_blank" class="footnote__link" agreement="">с условиями обработки персональных данных</a>.</p>
                            </div>
                        </form>
                        <div class="timer">
                            <p><b>До конца акции осталось:</b></p>
                            <script>window.timestamp = JSON.parse('<?= json_encode($timestamp) ?>');</script>
                            <script src="static/js/timer.js"></script>
                        </div>
                    </div>

                </div>
                <?php endforeach; ?>
            </div>
        </div>
        <div class="section section-menu-models" >
            <div class="container">
                <div class="section-menu-models_wrap">
                    <div class="menu_item" data-href="arrizo8">
                        <img src="/static/img/menu_models/arrizo_8.png">
                        <p>
                            ARRIZO
                            <b>8</b>
                        </p>
                    </div>
                    <div class="menu_item" data-href="tiggo8promax">
                        <img src="/static/img/menu_models/tiggo_8_pro_max.png">
                        <p>
                            TIGGO<br>
                            <b>8 PRO MAX</b>
                        </p>
                    </div>
                    <div class="menu_item" data-href="tiggo8pro">
                        <img src="/static/img/menu_models/tiggo_8_pro.png">
                        <p>
                            TIGGO<br>
                            <b>8 PRO</b>
                        </p>
                    </div>
                    <div class="menu_item" data-href="tiggo8">
                        <img src="/static/img/menu_models/tiggo_8.png">
                        <p>TIGGO <b>8</b></p>
                    </div>
                    <div class="menu_item" data-href="tiggo7promax">
                        <img src="/static/img/menu_models/tiggo_7_pro_max.png">
                        <p>
                            TIGGO<br>
                            <b>7 PRO MAX</b>
                        </p>
                    </div>
                    <div class="menu_item" data-href="tiggo7pro">
                        <img src="/static/img/menu_models/tiggo_7_pro.png">
                        <p>TIGGO <b>7 PRO</b></p>
                    </div>
                    <div class="menu_item" data-href="tiggo4pro">
                        <img src="/static/img/menu_models/tiggo_4_pro.png">
                        <p>
                            TIGGO<br>
                            <b>4 PRO</b>
                        </p>
                    </div>
                    <div class="menu_item" data-href="tiggo4">
                        <img src="/static/img/menu_models/tiggo_4.png">
                        <p>TIGGO <b>4</b></p>
                    </div>
                </div>
            </div>
        </div>
        <div class="section section-model" >
            <div class="container" id="models">
                <h2 class="section-title">Модельный ряд</h2>
                <div class="car-list" id="car-list">
                    <?php foreach ($cars as $car) : ?>
                    <div class="car-list__item" data-brand="<?= $car['model'] ?>" id="<?= $car['get'] ?>">
                        <div class="gift-bonus">
                            <img class="gift-bonus__icon" src="static/img/icons/gift-bonus.png">
                            <span class="gift-bonus__text" js-popup data-title="Получить подарки">Подарки</span>
                        </div>
                        <span class="bg-model <?= str_replace(' ', '', $car['dir']) ?>"></span>
                        <div class="img-wrap" js-popup data-title="Получить подарки">
                            <img src="static/img/models/<?= $car['dir'] ?>/default.png" alt="">

                        </div>
                        <div class="car-content">
                            <p class="car-content__title"><?= $car['model'] ?></p>
                            <div class="car-content__wrap">
                                <div class="car-block">
                                    <div class="bonus">
                                        <p class="bonus__item" js-popup data-title="Кредит от 7,9%">Кредит <span>от 7,9%</span></p>
                                        <p class="bonus__item" js-popup data-title="Первый взнос от 0%">Первый взнос от <span>0%</span></p>
                                        <p class="bonus__item" js-popup data-title="Доп.оборудование в подарок">Доп.оборудование в <span>подарок</span></p>
                                    </div>

                                    <p class="trade-in" js-popup data-title="Рассрочка 0%">Рассрочка <span>0%</span></p>
                                </div>
                                <div class="btn-block">
                                    <?php if ($car['benefit']) : ?>
                                        <button class="btn btn-model btn-model--01" js-popup data-title="Выгода до <nobr>&nbsp;<?= $car['benefit'] ?> руб.<nobr>">
                                           Выгода до&nbsp;<nobr class="accent"><?= $car['benefit'] ?> руб.</nobr>
                                        </button>
                                    <?php else: ?>
                                        <button class="btn btn-model btn-model--01" js-popup data-title="Узнать выгоду">
                                            Узнать выгоду
                                        </button>
                                    <?php endif; ?>
                                    <?php if (isset($car['credit']) && !1) : ?>
                                        <button class="btn btn-model btn-model--02" js-popup data-title="Кредит от <nobr>&nbsp;<?= $car['credit'] ?> руб./день<nobr>">
                                            Кредит от&nbsp;<nobr class="accent"><?= $car['credit'] ?> руб./день</nobr>
                                        </button>
                                    <?php elseif ($car['name'] === 'Tiggo 4 PRO'): ?>
                                        <button class="btn btn-model btn-model--02" js-popup data-title="Записаться на <nobr>тест-драйв</nobr>">
                                            Записаться на тест-драйв
                                        </button>
                                    <?php else: ?>
                                        <button class="btn btn-model btn-model--02" js-popup data-title="Рассчитать кредит">
                                            Рассчитать кредит
                                        </button>
                                    <?php endif; ?>
                                    <button class="btn btn-model btn-model--03" js-popup data-title="Узнать цену">
                                            Узнать цену
                                    </button>

                                </div>
                            </div>
                        </div>
                    </div>
                    <?php endforeach; ?>
                </div>
            </div>
        </div>
        <div class="section section-credit" id="credit">
            <div class="container">
                <div class="credit-block">
                    <h3 class="credit-block__title">Авторассрочка 0% до 78 месяцев.<br/>
                    Первоначальный взнос от 0%</h3>
                  
                    <form class="form form-credit" novalidate="">
                        <div class="wrap">
                            <div class="form-group">
                                <input type="tel" name="phone" placeholder="Ваш Телефон" required="">
                            </div>
                            <div class="form-group">
                                <button class="btn btn-credit">
                                    Оставьте заявку
                                </button>
                            </div>
                        </div>
                        <div class="footnote">
                            <img class="check-icon" src="static/img/icons/check-white.png" alt="">
                            <p>Я согласен <a href="#" target="_blank" class="footnote__link" agreement="">с условиями обработки персональных данных</a>.</p>
                        </div>
                    </form>
                </div>
            </div>
        </div>
        <div class="section section-benefits" id="benefits">
            <div class="container">
                <h2 class="section-title">Преимущества</h2>
                <div class="benefits-list">
                    <div class="benefits-list__item" js-popup data-title="Более 40 а/м с ПТС">
                        <img src="static/img/icons/car.png" alt="">
                        <p>Более 40 а/м<br> с ПТС</p>
                    </div>
                    <div class="benefits-list__item" js-popup data-title="Бронирование онлайн">
                        <img src="static/img/icons/computer.png" alt="">
                        <p>Бронирование<br> онлайн</p>
                    </div>
                    <div class="benefits-list__item" js-popup data-title="Выгодный обмен по Trade-in">
                        <img src="static/img/icons/key.png" alt="">
                        <p>Выгодный обмен<br> по Trade-in</p>
                    </div>
                    <div class="benefits-list__item" js-popup data-title="Каско в подарок при<br> покупке в кредит">
                        <img src="static/img/icons/card.png" alt="">
                        <p>Каско в подарок при<br> покупке в кредит</p>
                    </div>
                    <div class="benefits-list__item" js-popup data-title="Подарки всем клиентам">
                        <img src="static/img/icons/gift.png" alt="">
                        <p>Подарки всем<br> клиентам</p>
                    </div>
                </div>
            </div>
        </div>
        <div class="section section-offer" id="profit">
            <div class="container" >
                <div class="offer-block">
                    <h3 class="offer-block__title">Уже получили предложение по цене?<br>Мы предложим еще выгоднее!</h3>
                    <form class="form form-offer" novalidate="">
                        <div class="wrap">
                            <div class="form-group">
                                <input type="tel" name="phone" placeholder="Ваш Телефон" required="">
                            </div>
                            <div class="form-group">
                                <button class="btn btn-offer">
                                    Поторговаться
                                </button>
                            </div>
                        </div>
                        <div class="footnote">
                            <img class="check-icon" src="static/img/icons/check-white.png" alt="">
                            <p>Я согласен <a href="#" target="_blank" class="footnote__link" agreement="">с условиями обработки персональных данных</a>.</p>
                        </div>
                    </form>
                </div>
            </div>
        </div>
        <div class="section section-map" id="contacts">
            <div class="map-block">
                <div class="map-cont" id="map"></div>
            </div>
            <div class="content-block content-block--text contacts-block">
                <h2 class="content-block-title"><span>КЛЮЧАВТО Chery Ростов</span></h2>
                <div class="content-block-item">
                    <p class="name">Адрес:</p>
                    <p>г. Ростов-на-Дону, ул. Вавилова, 59К</p>
                    <p class="name">Телефон:</p>
                    <a class="link link--big mb-2" href="tel:+78632119211">+7 (863) 211-92-11</a>
                    <p class="name">Время работы:</p>
                    <p>Пн-Вс с 08:00 - 20:00</p>
                </div>
                <div class="content-block-item">
                    <div class="btn btn-contacts" js-popup="" data-title="Заказать звонок">Заказать звонок</div>
                </div>
            </div>

        </div>
    </main>
    <footer class="footer">
        <div class="container">
            <div class="footer-wrap">
                <p class="footer__item year">
                    © 2023 Все права защищены.
                    <br><br>
                    ООО «СБСВ-КЛЮЧАВТО АЛЬФА»
                    <br>
                    ИНН: 2305030356
                    <br>
                    ОГРН: 1162368051614
                    </p>
                <p class="footer__item block-disc">
                    Обращаем Ваше внимание на то, что вся представленная на сайте информация, касающаяся комплектаций, технических характеристик, цветовых сочетаний, а также стоимости автомобилей и сервисного обслуживания носит информационный характер и ни при каких условиях не является публичной офертой, определяемой положениями Статьи 437 (2) Гражданского кодекса Российской Федерации. Для получения подробной информации, пожалуйста, обращайтесь в наш салон.
                </p>
                <a href="https://autodrive-agency.ru" class="footer__item link-autodrive" target="_blank">
                    <img src="static/img/logos/autodrive.svg" alt="autodrive-agency">
                </a>
            </div>
        </div>
    </footer>
    <div class="text-popup" id="base">
        <div class="text-popup-wrap">
            <div class="close"></div>
            <div class="text-popup-content">

            </div>
            <div>
                <button class="btn" js-popup>Связаться с нами</button>
            </div>
        </div>
    </div>
    <div class="text-popup" id="agreement" data-gtm-vis-recent-on-screen-42039187_17="127704" data-gtm-vis-first-on-screen-42039187_17="127704" data-gtm-vis-total-visible-time-42039187_17="100" data-gtm-vis-has-fired-42039187_17="1" data-gtm-vis-recent-on-screen-42039187_33="127714" data-gtm-vis-first-on-screen-42039187_33="127714" data-gtm-vis-total-visible-time-42039187_33="100" data-gtm-vis-has-fired-42039187_33="1">
        <div class="text-popup-wrap">
            <div class="close"></div>
            <div class="text-popup-content">
                <h1 class="text-popup-title">Политика в отношении обработки персональных данных</h1>
                <h3>1. Общие положения</h3>
                <p>Настоящая политика обработки персональных данных составлена в
                    соответствии с требованиями Федерального закона от 27.07.2006. №152-ФЗ
                    «О персональных данных» и определяет порядок обработки персональных данных и меры по обеспечению
                    безопасности персональных данных, предпринимаемые КЛЮЧАВТО (далее – Оператор).</p>
                <p>1.1. Оператор ставит своей важнейшей целью и условием осуществления своей деятельности соблюдение
                    прав и свобод человека и гражданина при обработке его персональных данных, в том числе защиты прав
                    на неприкосновенность частной жизни, личную и семейную тайну.</p>
                <p>1.2. Настоящая политика Оператора в отношении обработки персональных данных (далее – Политика)
                    применяется ко всей информации, которую Оператор может получить о посетителях веб-сайта
                    http://keyauto.ru.</p>

                <h3>2. Основные понятия, используемые в Политике</h3>
                <p>2.1. Автоматизированная обработка персональных данных – обработка персональных данных с помощью
                    средств вычислительной техники;</p>
                <p>2.2. Блокирование персональных данных – временное прекращение обработки персональных данных (за
                    исключением случаев, если обработка необходима для уточнения персональных данных);</p>
                <p>2.3. Веб-сайт – совокупность графических и информационных материалов, а также программ для ЭВМ и баз
                    данных, обеспечивающих их доступность в сети интернет по сетевому адресу http://keyauto.ru;</p>
                <p>2.4. Информационная система персональных данных — совокупность содержащихся в базах данных
                    персональных данных, и обеспечивающих их обработку информационных технологий и технических средств;
                </p>
                <p>2.5. Обезличивание персональных данных — действия, в результате которых невозможно определить без
                    использования дополнительной информации принадлежность персональных данных конкретному Пользователю
                    или иному субъекту персональных данных;</p>
                <p>2.6. Обработка персональных данных – любое действие (операция) или совокупность действий (операций),
                    совершаемых с использованием средств автоматизации или без использования таких средств с
                    персональными данными, включая сбор, запись, систематизацию, накопление, хранение, уточнение
                    (обновление, изменение), извлечение, использование, передачу (распространение, предоставление,
                    доступ), обезличивание, блокирование, удаление, уничтожение персональных данных;</p>
                <p>2.7. Оператор – государственный орган, муниципальный орган, юридическое или физическое лицо,
                    самостоятельно или совместно с другими лицами организующие и (или) осуществляющие обработку
                    персональных данных, а также определяющие цели обработки персональных данных, состав персональных
                    данных, подлежащих обработке, действия (операции), совершаемые с персональными данными;</p>
                <p>2.8. Персональные данные – любая информация, относящаяся прямо или косвенно к определенному или
                    определяемому Пользователю веб-сайта http://keyauto.ru;</p>
                <p>2.9. Пользователь – любой посетитель веб-сайта http://keyauto.ru;</p>
                <p>2.10. Предоставление персональных данных – действия, направленные на раскрытие персональных данных
                    определенному лицу или определенному кругу лиц;</p>
                <p>2.11. Распространение персональных данных – любые действия, направленные на раскрытие персональных
                    данных неопределенному кругу лиц (передача персональных данных) или на ознакомление с персональными
                    данными неограниченного круга лиц, в том числе обнародование персональных данных в средствах
                    массовой информации, размещение в информационно-телекоммуникационных сетях или предоставление
                    доступа к персональным данным каким-либо иным способом;</p>
                <p>2.12. Трансграничная передача персональных данных – передача персональных данных на территорию
                    иностранного государства органу власти иностранного государства, иностранному физическому или
                    иностранному юридическому лицу;</p>
                <p>2.13. Уничтожение персональных данных – любые действия, в результате которых персональные данные
                    уничтожаются безвозвратно с невозможностью дальнейшего восстановления содержания персональных данных
                    в информационной системе персональных данных и (или) уничтожаются материальные носители персональных
                    данных.</p>
                <h3>3. Оператор может обрабатывать следующие персональные данные Пользователя</h3>
                <p>3.1. Фамилия, имя, отчество;</p>
                <p>3.2. Электронный адрес;</p>
                <p>3.3. Номера телефонов;</p>
                <p>3.4. Также на сайте происходит сбор и обработка обезличенных данных о посетителях (в т.ч. файлов
                    «cookie») с помощью сервисов интернет-статистики (Яндекс Метрика и Гугл Аналитика и других).</p>
                <p>3.5. Вышеперечисленные данные далее по тексту Политики объединены общим понятием Персональные данные.
                </p>
                <h3>4. Цели обработки персональных данных</h3>
                <p>4.1. Цель обработки персональных данных Пользователя — предоставление доступа Пользователю к
                    сервисам, информации и/или материалам, содержащимся на веб-сайте.</p>
                <p>4.2. Также Оператор имеет право направлять Пользователю уведомления о новых продуктах и услугах,
                    специальных предложениях и различных событиях. Пользователь всегда может отказаться от получения
                    информационных сообщений, уведомив об этом Оператора.</p>
                <h3>5. Правовые основания обработки персональных данных</h3>
                <p>5.1. Оператор обрабатывает персональные данные Пользователя только в случае их заполнения и/или
                    отправки Пользователем самостоятельно через специальные формы, расположенные на сайте
                    http://keyauto.ru. Заполняя соответствующие формы и/или отправляя свои персональные данные
                    Оператору, Пользователь выражает свое согласие с данной Политикой.</p>
                <p>5.2. Оператор обрабатывает обезличенные данные о Пользователе в случае, если это разрешено в
                    настройках браузера Пользователя (включено сохранение файлов «cookie» и использование технологии
                    JavaScript).</p>
                <h3>6. Порядок сбора, хранения, передачи и других видов обработки персональных данных</h3>
                <p>Безопасность персональных данных, которые обрабатываются Оператором, обеспечивается путем реализации
                    правовых, организационных и технических мер, необходимых для выполнения в полном объеме требований
                    действующего законодательства в области защиты персональных данных.</p>
                <p>6.1. Оператор обеспечивает сохранность персональных данных и принимает все возможные меры,
                    исключающие доступ к персональным данным неуполномоченных лиц.</p>
                <p>6.2. Персональные данные Пользователя никогда, ни при каких условиях не будут переданы третьим лицам,
                    за исключением случаев, связанных с исполнением действующего законодательства.</p>
                <p>6.3. В случае выявления неточностей в персональных данных, Пользователь может актуализировать их
                    самостоятельно, путем обращения к Оператору.</p>
                <p>6.4. Срок обработки персональных данных является неограниченным. </p>
                <h3>7. Трансграничная передача персональных данных</h3>
                <p>7.1. Оператор до начала осуществления трансграничной передачи персональных данных обязан убедиться в
                    том, что иностранным государством, на территорию которого предполагается осуществлять передачу
                    персональных данных, обеспечивается надежная защита прав субъектов персональных данных.</p>
                <p>7.2. Трансграничная передача персональных данных на территории иностранных государств, не отвечающих
                    вышеуказанным требованиям, может осуществляться только в случае наличия согласия в письменной форме
                    субъекта персональных данных на трансграничную передачу его персональных данных и/или исполнения
                    договора, стороной которого является субъект персональных данных.</p>
                <h3>8. Заключительные положения</h3>
                <p>8.1. Пользователь может получить любые разъяснения по интересующим вопросам, касающимся обработки его
                    персональных данных, обратившись к Оператору.</p>
                <p>8.2. В данном документе будут отражены любые изменения политики обработки персональных данных
                    Оператором. Политика действует бессрочно до замены ее новой версией.</p>
                <p>8.3. Актуальная версия Политики в свободном доступе расположена в сети Интернет по адресу
                    http://keyauto.ru.</p>
            </div>
        </div>
    </div>
    <div class="popup popup-wrap" id="popup">
        <div class="popup-container">
            <div class="popup-close"></div>
            <h2 class="popup-title">Заказать звонок</h2>
            <form class="form form--popup" novalidate="">
                <div class="wrap">
                    <div class="form-group">
                        <input type="tel" name="phone" placeholder="Ваш Телефон" required="">
                    </div>
                    <div class="form-group">
                        <button class="btn btn-popup">
                            Отправить
                        </button>
                    </div>
                </div>
                <div class="footnote">
                    <img class="check-icon" src="static/img/icons/check.png" alt="">
                    <p>Я согласен <a href="#" target="_blank" class="footnote__link" agreement="">с условиями обработки персональных данных</a>.</p>
                </div>
            </form>
        </div>
    </div>

    <div id="success">
        <div class="form-messages-close"></div>
        <h3 class="popup-title">Ваша заявка отправлена</h3>
        <p class="popup-subtitle">Мы свяжемся с Вами в самое ближайшее время.</p>
        <button class="btn btn--mess">
            Закрыть окно
        </button>
    </div>

    <div id="error">
        <div class="form-messages-close"></div>
        <h3 class="popup-title">Произошла ошибка</h3>
        <p class="popup-subtitle">Попробуйте повторить отправку позднее</p>
        <button class="btn btn--mess">
            Закрыть окно
        </button>
    </div>

    <script defer src="https://api-maps.yandex.ru/2.1/?lang=ru_RU" type="text/javascript"></script>
    <script type="text/javascript" src="static/js/main.js?10"></script>
    <script type="text/javascript" src="static/js/jquery.visible.min.js"></script>
    <script src="static/js/jquery.inputmask.min.js" type="text/javascript"></script>
    <script src="static/js/slick.min.js" type="text/javascript"></script>
</body>

</html>