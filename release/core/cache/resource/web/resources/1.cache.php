<?php  return array (
  'resourceClass' => 'modDocument',
  'resource' => 
  array (
    'id' => 1,
    'type' => 'document',
    'contentType' => 'text/html',
    'pagetitle' => 'Главная',
    'longtitle' => 'передовые технологии лечения зубов',
    'description' => '',
    'alias' => 'main',
    'alias_visible' => 1,
    'link_attributes' => '',
    'published' => 1,
    'pub_date' => 0,
    'unpub_date' => 0,
    'parent' => 0,
    'isfolder' => 1,
    'introtext' => '',
    'content' => '<section id="info">
    <div class="container">
        <div class="row">
            <div class="col s1 hide-s-down">
                <span class="section-id align-right">
                    section 01: dental laboratory
                </span>
            </div>
            <div class="col s11">
                <div class="row">
                    <div class="col s12 center-align">
                        <h2>M-Denta – это</h2>
                    </div>
                </div>
                <div class="row">
                    <div class="col center-align l4 m6 s12">
                        <div class="lazy main-points" data-src="/img/icons/innovations.svg"></div>
                        <h3>Инновации</h3>
                        <p>В своей работке наша компания использует инновационные методики и технологии,направленные на результат</p>
                    </div>
                    <div class="col center-align l4 m6 s12 border l r dotted">
                        <div class="lazy main-points" data-src="/img/icons/experience.svg"></div>
                        <h3>Опыт</h3>
                        <p>Наши специалисты – опытные профессионалы, за плечами которых многолетняя работа со случаями разной степени сложности</p>
                    </div>
                    <div class="col center-align l4 m6 s12 offset-m3">
                        <div class="lazy main-points" data-src="/img/icons/guarantie.svg"></div>
                        <h3>Гарантии</h3>
                        <p>M-Denta работает только с самыми высококачественными материалами мировых производителей зуботехнической индустрии</p>
                    </div>
                </div>
                <div class="swiper-container" id="main-photos">
                    <div class="swiper-wrapper">
                        [[getImageList?
                            &tvname=`gallery`
                            &tpl=`main_slider_img`
                        ]]
                    </div>
                    <a href="" class="prev"><i class="mdi mdi-chevron-left"></i></a>
                    <a href="" class="next"><i class="mdi mdi-chevron-right"></i></a>
                    <div class="pagination-wrapper"></div>
                </div>
                <div class="service-wrapper">
                    <div class="canvas-wrapper">
                        
                    </div>
                    <div class="content-wrapper">
                        [[pdoResources?
                            &parents=`[[*id]]`
                            &tpl=`service`
                            &includeContent=`true`
                            &sortdir=`asc`
                            &showUnpublished=`true`
                        ]]
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>',
    'richtext' => 1,
    'template' => 1,
    'menuindex' => 0,
    'searchable' => 1,
    'cacheable' => 1,
    'createdby' => 1,
    'createdon' => 1638357378,
    'editedby' => 1,
    'editedon' => 1638365306,
    'deleted' => 0,
    'deletedon' => 0,
    'deletedby' => 0,
    'publishedon' => 0,
    'publishedby' => 0,
    'menutitle' => '',
    'donthit' => 0,
    'privateweb' => 0,
    'privatemgr' => 0,
    'content_dispo' => 0,
    'hidemenu' => 0,
    'class_key' => 'modDocument',
    'context_key' => 'web',
    'content_type' => 1,
    'uri' => '',
    'uri_override' => 0,
    'hide_children_in_tree' => 0,
    'show_in_tree' => 1,
    'properties' => NULL,
    'gallery' => 
    array (
      0 => 'gallery',
      1 => '[{"MIGX_id":"1","title":"1","image":"img\\/main-slider\\/1.jpg"},{"MIGX_id":"2","title":"2","image":"img\\/main-slider\\/2.jpg"},{"MIGX_id":"3","title":"3","image":"img\\/main-slider\\/3.jpg"},{"MIGX_id":"4","title":"4","image":"img\\/main-slider\\/4.jpg"},{"MIGX_id":"5","title":"5","image":"img\\/main-slider\\/5.jpg"},{"MIGX_id":"6","title":"6","image":"img\\/main-slider\\/6.jpg"}]',
      2 => 'default',
      3 => NULL,
      4 => 'migx',
    ),
    '_content' => '<!doctype html>
<html lang="en">
<meta charset="UTF-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<link rel="stylesheet" href="/css/master.css">
<title>M-Denta | Главная</title>

<!-- Favico -->
<link rel="apple-touch-icon" sizes="180x180" href="/img/favico/apple-touch-icon.png">
<link rel="icon" type="image/png" sizes="32x32" href="/img/favico/favicon-32x32.png">
<link rel="icon" type="image/png" sizes="16x16" href="/img/favico/favicon-16x16.png">
<link rel="manifest" href="/img/favico/site.webmanifest">
<link rel="mask-icon" href="/img/favico/safari-pinned-tab.svg" color="#2b2377">
<link rel="shortcut icon" href="/img/favico/favicon.ico">
<meta name="msapplication-TileColor" content="#2b2377">
<meta name="msapplication-config" content="/img/favico/browserconfig.xml">
<meta name="theme-color" content="#ffffff">
<!-- /Favico -->
<body>
    <header>
    <nav>
        <a href="/" class="logo"></a>
        <div class="separator"></div>
        <ul>
    <li class="first active"><a href="http://m-denta.local/" title="Главная"  class="hide-l-down">Главная</a></li>
<li><a href="javascript:void(0);" title="Услуги"  class="hide-l-down">Услуги</a><ul>
    <li class="first"><a href="index.php?id=7" title="Лечение зубов"  class="hide-l-down">Лечение зубов</a></li>
<li><a href="index.php?id=8" title="Протезирование зубов"  class="hide-l-down">Протезирование зубов</a></li>
<li class="last"><a href="index.php?id=9" title="Имплантация"  class="hide-l-down">Имплантация</a></li>

</ul></li>
<li><a href="index.php?id=10" title="Зуботехническая лаборатория"  class="hide-l-down">Зуботехническая лаборатория</a></li>
<li><a href="index.php?id=11" title="Наша команда"  class="hide-l-down">Наша команда</a></li>
<li><a href="index.php?id=12" title="О клинике"  class="hide-l-down">О клинике</a></li>
<li class="last"><a href="index.php?id=19" title="Контакты"  class="hide-l-down">Контакты</a></li>

</ul>
        <ul class="burger-wrapper">
            <li><a href="#mobile-menu" class="hide-l-up sidenav-trigger"><i class="mdi mdi-menu"></i></a></li>
        </ul>
    </nav>
</header>
<ul class="sidenav" id="mobile-menu">
    <li class="user-view"></li>
    <li class="first active"><a href="http://m-denta.local/" title="Главная" >Главная</a></li>
<li><a href="javascript:void(0);" title="Услуги"  class="hide-l-down">Услуги</a><ul class="sidenav" id="mobile-menu">
    <li class="user-view"></li>
    <li class="first"><a href="index.php?id=7" title="Лечение зубов" >Лечение зубов</a></li>
<li><a href="index.php?id=8" title="Протезирование зубов" >Протезирование зубов</a></li>
<li class="last"><a href="index.php?id=9" title="Имплантация" >Имплантация</a></li>

</ul></li>
<li><a href="index.php?id=10" title="Зуботехническая лаборатория" >Зуботехническая лаборатория</a></li>
<li><a href="index.php?id=11" title="Наша команда" >Наша команда</a></li>
<li><a href="index.php?id=12" title="О клинике" >О клинике</a></li>
<li class="last"><a href="index.php?id=19" title="Контакты" >Контакты</a></li>

</ul>
    <div id="splash"></div>
<div id="loading-bar">
    <div class="percent"></div>
</div>
<div id="cursor" class="hidden"></div>
<div id="testdiv"></div>
    <main id="main">
        <section class="three">
    <div class="three-container"></div>
</section>
<section class="hero">
    <div class="container align-center-l-down">
        <div class="container center-align">
            <p class="slogan">передовые технологии лечения зубов</p>
        </div>
    </div>
</section>
        <section id="info">
    <div class="container">
        <div class="row">
            <div class="col s1 hide-s-down">
                <span class="section-id align-right">
                    section 01: dental laboratory
                </span>
            </div>
            <div class="col s11">
                <div class="row">
                    <div class="col s12 center-align">
                        <h2>M-Denta – это</h2>
                    </div>
                </div>
                <div class="row">
                    <div class="col center-align l4 m6 s12">
                        <div class="lazy main-points" data-src="/img/icons/innovations.svg"></div>
                        <h3>Инновации</h3>
                        <p>В своей работке наша компания использует инновационные методики и технологии,направленные на результат</p>
                    </div>
                    <div class="col center-align l4 m6 s12 border l r dotted">
                        <div class="lazy main-points" data-src="/img/icons/experience.svg"></div>
                        <h3>Опыт</h3>
                        <p>Наши специалисты – опытные профессионалы, за плечами которых многолетняя работа со случаями разной степени сложности</p>
                    </div>
                    <div class="col center-align l4 m6 s12 offset-m3">
                        <div class="lazy main-points" data-src="/img/icons/guarantie.svg"></div>
                        <h3>Гарантии</h3>
                        <p>M-Denta работает только с самыми высококачественными материалами мировых производителей зуботехнической индустрии</p>
                    </div>
                </div>
                <div class="swiper-container" id="main-photos">
                    <div class="swiper-wrapper">
                        <div class="swiper-slide">
    <div class="lazy zoomable" data-src="img/main-slider/1.jpg"></div>
</div><div class="swiper-slide">
    <div class="lazy zoomable" data-src="img/main-slider/2.jpg"></div>
</div><div class="swiper-slide">
    <div class="lazy zoomable" data-src="img/main-slider/3.jpg"></div>
</div><div class="swiper-slide">
    <div class="lazy zoomable" data-src="img/main-slider/4.jpg"></div>
</div><div class="swiper-slide">
    <div class="lazy zoomable" data-src="img/main-slider/5.jpg"></div>
</div><div class="swiper-slide">
    <div class="lazy zoomable" data-src="img/main-slider/6.jpg"></div>
</div>
                    </div>
                    <a href="" class="prev"><i class="mdi mdi-chevron-left"></i></a>
                    <a href="" class="next"><i class="mdi mdi-chevron-right"></i></a>
                    <div class="pagination-wrapper"></div>
                </div>
                <div class="service-wrapper">
                    <div class="canvas-wrapper">
                        
                    </div>
                    <div class="content-wrapper">
                        <div class="service-entry" id="s-implants">
    <div class="service-entry-content">
        <h2>
            <div class="num">01</div>
            <div class="title">Имплантация</div>
        </h2>
        <p>
    Имплантация – это самый эффективный метод восстановить зубной ряд в случае, если отсутствует один или несколько зубов. 
</p>
<p>
    Мы занимаемся дентальной имплантацией с 2005 года. Используем передовые методики и технологии в диагностике, лечении и имплантации зубов, первыми в Краснодарском крае начали использовать инновационную технику "All-in-4", обучившись секретам у её автора – Паоло Мало.
</p>
<div class="button-wrapper">
    <a href="index.php?id=9" class="btn">Узнать больше</a>
</div>
    </div>
</div>
<div class="service-entry" id="s-healing">
    <div class="service-entry-content">
        <h2>
            <div class="num">02</div>
            <div class="title">Лечение</div>
        </h2>
        <p>
    Улыбка — больше, чем жест дружелюбия. Она – важный маркер здоровья.
</p>
<p>
    Врачи M-Denta проводят лечение зубов любой сложности. Мы гарантируем, что лечение зубов пройдет безболезненно и в максимально благоприятных условиях. Предварительная диагностика и разработка плана с учётом медицинских показаний и пожеланий наших пациентов – залог комфортного течения лечебного процесса.
</p>
<div class="button-wrapper">
    <a href="index.php?id=7" class="btn">Узнать больше</a>
</div>
    </div>
</div>
<div class="service-entry" id="s-prosthesis">
    <div class="service-entry-content">
        <h2>
            <div class="num">03</div>
            <div class="title">Протезирование</div>
        </h2>
        <p>
    Протезирование в клинике M-Denta – нечто большее, чем возвращение красивой улыбки.
</p>
<p>
    Наши специалисты проводят тщательную предварительную диагностику перед началом протезирования и разрабатывают индивидуальную стратегию для каждого из пациентов. Наша главная цель: вернуть здоровье и функциональность зубов и, как следствие, организма в целом
</p>
<div class="button-wrapper">
    <a href="index.php?id=8" class="btn">Узнать больше</a>
</div>
    </div>
</div>
<div class="service-entry" id="s-lab">
    <div class="service-entry-content">
        <h2>
            <div class="num">04</div>
            <div class="title">Зуботехническая лаборатория</div>
        </h2>
        <p>
    Контролировать процесс лечения от и до, предоставляя пациентам услуги мирового уровня – главный приоритет M&#8209Denta.
</p>
<p>
    Наличие полноценной зуботехнической лаборатории на территории клиники – важнейшее условие для качественного лечения, результат которого мы можем вам гарантировать.
</p>
<div class="button-wrapper">
    <a href="index.php?id=10" class="btn">Узнать больше</a>
</div>
    </div>
</div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
    </main>
    <section id="call-to-action">
    <div class="container">
        <div class="row">
            <div class="col s12 center-align">
                <h2>Записаться на приём</h2>
                <a href="" class="btn outlined">Позвонить</a>
                <a href="" class="btn outlined">Заказать звонок</a>
                <a href="" class="btn">Оставить заявку</a>
            </div>
        </div>
    </div>
</section>
    <footer>
    <a href="/" class="footer-logo"></a>
    <ul><li class="first active"><a href="http://m-denta.local/" title="Главная" >Главная</a></li>
<li><a href="index.php?id=6" title="Услуги" >Услуги</a></li>
<li><a href="index.php?id=10" title="Зуботехническая лаборатория" >Зуботехническая лаборатория</a></li>
<li><a href="index.php?id=11" title="Наша команда" >Наша команда</a></li>
<li><a href="index.php?id=12" title="О клинике" >О клинике</a></li>
<li class="last"><a href="index.php?id=19" title="Контакты" >Контакты</a></li>
</ul>
</footer>
<div class="footer-copyright">
    <div class="container">
        <div class="flex wrap">
            <div class="copyright align-center-m-down">© M-Denta, 2021</div>
            <div class="separator"></div>
            <div class="authors align-center-m-down">
                <a href="https://2br.agency" target="_blank" rel="nofollow">Дизайн, разработка – агентство 2Br</a>
            </div>
        </div>
    </div>
</div>
</body>
<script src=\'/js/TweenMax.min.js\'></script>
<script src="/js/jquery.min.js" type="module"></script>
<script src="/js/jquery.lazy.min.js" type="module"></script>
<script src="/js/materialize.min.js"></script>
<script src="/js/swiper-bundle.js"></script>
<script src="/js/master.js" type="module"></script>
</html>',
    '_isForward' => false,
  ),
  'contentType' => 
  array (
    'id' => 1,
    'name' => 'HTML',
    'description' => 'HTML content',
    'mime_type' => 'text/html',
    'file_extensions' => '.html',
    'headers' => NULL,
    'binary' => 0,
  ),
  'policyCache' => 
  array (
  ),
  'elementCache' => 
  array (
    '[[$head]]' => '<meta charset="UTF-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<link rel="stylesheet" href="/css/master.css">
<title>M-Denta | Главная</title>

<!-- Favico -->
<link rel="apple-touch-icon" sizes="180x180" href="/img/favico/apple-touch-icon.png">
<link rel="icon" type="image/png" sizes="32x32" href="/img/favico/favicon-32x32.png">
<link rel="icon" type="image/png" sizes="16x16" href="/img/favico/favicon-16x16.png">
<link rel="manifest" href="/img/favico/site.webmanifest">
<link rel="mask-icon" href="/img/favico/safari-pinned-tab.svg" color="#2b2377">
<link rel="shortcut icon" href="/img/favico/favicon.ico">
<meta name="msapplication-TileColor" content="#2b2377">
<meta name="msapplication-config" content="/img/favico/browserconfig.xml">
<meta name="theme-color" content="#ffffff">
<!-- /Favico -->',
    '[[Wayfinder?
            &startId=`0`
            &parentRowTpl=`naviRowTpl`
            &outerTpl=`naviHeaderOuterTpl`
            &rowTpl=`naviTopRowTpl`
        ]]' => '<ul>
    <li class="first active"><a href="http://m-denta.local/" title="Главная"  class="hide-l-down">Главная</a></li>
<li><a href="javascript:void(0);" title="Услуги"  class="hide-l-down">Услуги</a><ul>
    <li class="first"><a href="index.php?id=7" title="Лечение зубов"  class="hide-l-down">Лечение зубов</a></li>
<li><a href="index.php?id=8" title="Протезирование зубов"  class="hide-l-down">Протезирование зубов</a></li>
<li class="last"><a href="index.php?id=9" title="Имплантация"  class="hide-l-down">Имплантация</a></li>

</ul></li>
<li><a href="index.php?id=10" title="Зуботехническая лаборатория"  class="hide-l-down">Зуботехническая лаборатория</a></li>
<li><a href="index.php?id=11" title="Наша команда"  class="hide-l-down">Наша команда</a></li>
<li><a href="index.php?id=12" title="О клинике"  class="hide-l-down">О клинике</a></li>
<li class="last"><a href="index.php?id=19" title="Контакты"  class="hide-l-down">Контакты</a></li>

</ul>',
    '[[Wayfinder?
    &startId=`0`
    &depth=`2`
    &parentRowTpl=`naviRowTpl`
    &outerTpl=`naviSidebarTpl`
]]' => '<ul class="sidenav" id="mobile-menu">
    <li class="user-view"></li>
    <li class="first active"><a href="http://m-denta.local/" title="Главная" >Главная</a></li>
<li><a href="javascript:void(0);" title="Услуги"  class="hide-l-down">Услуги</a><ul class="sidenav" id="mobile-menu">
    <li class="user-view"></li>
    <li class="first"><a href="index.php?id=7" title="Лечение зубов" >Лечение зубов</a></li>
<li><a href="index.php?id=8" title="Протезирование зубов" >Протезирование зубов</a></li>
<li class="last"><a href="index.php?id=9" title="Имплантация" >Имплантация</a></li>

</ul></li>
<li><a href="index.php?id=10" title="Зуботехническая лаборатория" >Зуботехническая лаборатория</a></li>
<li><a href="index.php?id=11" title="Наша команда" >Наша команда</a></li>
<li><a href="index.php?id=12" title="О клинике" >О клинике</a></li>
<li class="last"><a href="index.php?id=19" title="Контакты" >Контакты</a></li>

</ul>',
    '[[$header]]' => '<header>
    <nav>
        <a href="/" class="logo"></a>
        <div class="separator"></div>
        <ul>
    <li class="first active"><a href="http://m-denta.local/" title="Главная"  class="hide-l-down">Главная</a></li>
<li><a href="javascript:void(0);" title="Услуги"  class="hide-l-down">Услуги</a><ul>
    <li class="first"><a href="index.php?id=7" title="Лечение зубов"  class="hide-l-down">Лечение зубов</a></li>
<li><a href="index.php?id=8" title="Протезирование зубов"  class="hide-l-down">Протезирование зубов</a></li>
<li class="last"><a href="index.php?id=9" title="Имплантация"  class="hide-l-down">Имплантация</a></li>

</ul></li>
<li><a href="index.php?id=10" title="Зуботехническая лаборатория"  class="hide-l-down">Зуботехническая лаборатория</a></li>
<li><a href="index.php?id=11" title="Наша команда"  class="hide-l-down">Наша команда</a></li>
<li><a href="index.php?id=12" title="О клинике"  class="hide-l-down">О клинике</a></li>
<li class="last"><a href="index.php?id=19" title="Контакты"  class="hide-l-down">Контакты</a></li>

</ul>
        <ul class="burger-wrapper">
            <li><a href="#mobile-menu" class="hide-l-up sidenav-trigger"><i class="mdi mdi-menu"></i></a></li>
        </ul>
    </nav>
</header>
<ul class="sidenav" id="mobile-menu">
    <li class="user-view"></li>
    <li class="first active"><a href="http://m-denta.local/" title="Главная" >Главная</a></li>
<li><a href="javascript:void(0);" title="Услуги"  class="hide-l-down">Услуги</a><ul class="sidenav" id="mobile-menu">
    <li class="user-view"></li>
    <li class="first"><a href="index.php?id=7" title="Лечение зубов" >Лечение зубов</a></li>
<li><a href="index.php?id=8" title="Протезирование зубов" >Протезирование зубов</a></li>
<li class="last"><a href="index.php?id=9" title="Имплантация" >Имплантация</a></li>

</ul></li>
<li><a href="index.php?id=10" title="Зуботехническая лаборатория" >Зуботехническая лаборатория</a></li>
<li><a href="index.php?id=11" title="Наша команда" >Наша команда</a></li>
<li><a href="index.php?id=12" title="О клинике" >О клинике</a></li>
<li class="last"><a href="index.php?id=19" title="Контакты" >Контакты</a></li>

</ul>',
    '[[$splash]]' => '<div id="splash"></div>
<div id="loading-bar">
    <div class="percent"></div>
</div>
<div id="cursor" class="hidden"></div>
<div id="testdiv"></div>',
    '[[$main_h1]]' => '<section class="three">
    <div class="three-container"></div>
</section>
<section class="hero">
    <div class="container align-center-l-down">
        <div class="container center-align">
            <p class="slogan">передовые технологии лечения зубов</p>
        </div>
    </div>
</section>',
    '[[$map]]' => '<section class="map-container">
    <div id="map"></div>
</section>
<section class="hero">
    <div class="container align-center-l-down">
        <div class="background">
            <h1>Главная</h1>
            <p>передовые технологии лечения зубов</p>
        </div>
    </div>
</section>',
    '[[$hero_h1]]' => '<section class="three">
    <div class="three-container"></div>
</section>
<section class="hero">
    <div class="container align-center-l-down">
        <div class="background">
            <h1>Главная</h1>
            <p>передовые технологии лечения зубов</p>
        </div>
    </div>
</section>',
    '[[$hero]]' => '<section class="three">
    <div class="three-container"></div>
</section>
<section class="hero">
    <div class="container align-center-l-down">
        <div class="container center-align">
            <p class="slogan">передовые технологии лечения зубов</p>
        </div>
    </div>
</section>',
    '[[$callToAction]]' => '<section id="call-to-action">
    <div class="container">
        <div class="row">
            <div class="col s12 center-align">
                <h2>Записаться на приём</h2>
                <a href="" class="btn outlined">Позвонить</a>
                <a href="" class="btn outlined">Заказать звонок</a>
                <a href="" class="btn">Оставить заявку</a>
            </div>
        </div>
    </div>
</section>',
    '[[Wayfinder?
        &startId=`0`
        &level=`1`
        &parentRowTpl=`naviRowTpl`
    ]]' => '<ul><li class="first active"><a href="http://m-denta.local/" title="Главная" >Главная</a></li>
<li><a href="index.php?id=6" title="Услуги" >Услуги</a></li>
<li><a href="index.php?id=10" title="Зуботехническая лаборатория" >Зуботехническая лаборатория</a></li>
<li><a href="index.php?id=11" title="Наша команда" >Наша команда</a></li>
<li><a href="index.php?id=12" title="О клинике" >О клинике</a></li>
<li class="last"><a href="index.php?id=19" title="Контакты" >Контакты</a></li>
</ul>',
    '[[$footer]]' => '<footer>
    <a href="/" class="footer-logo"></a>
    <ul><li class="first active"><a href="http://m-denta.local/" title="Главная" >Главная</a></li>
<li><a href="index.php?id=6" title="Услуги" >Услуги</a></li>
<li><a href="index.php?id=10" title="Зуботехническая лаборатория" >Зуботехническая лаборатория</a></li>
<li><a href="index.php?id=11" title="Наша команда" >Наша команда</a></li>
<li><a href="index.php?id=12" title="О клинике" >О клинике</a></li>
<li class="last"><a href="index.php?id=19" title="Контакты" >Контакты</a></li>
</ul>
</footer>
<div class="footer-copyright">
    <div class="container">
        <div class="flex wrap">
            <div class="copyright align-center-m-down">© M-Denta, 2021</div>
            <div class="separator"></div>
            <div class="authors align-center-m-down">
                <a href="https://2br.agency" target="_blank" rel="nofollow">Дизайн, разработка – агентство 2Br</a>
            </div>
        </div>
    </div>
</div>',
    '[[$scripts]]' => '<script src=\'/js/TweenMax.min.js\'></script>
<script src="/js/jquery.min.js" type="module"></script>
<script src="/js/jquery.lazy.min.js" type="module"></script>
<script src="/js/materialize.min.js"></script>
<script src="/js/swiper-bundle.js"></script>
<script src="/js/master.js" type="module"></script>',
    '[[getImageList?
                            &tvname=`gallery`
                            &tpl=`main_slider_img`
                        ]]' => '<div class="swiper-slide">
    <div class="lazy zoomable" data-src="img/main-slider/1.jpg"></div>
</div><div class="swiper-slide">
    <div class="lazy zoomable" data-src="img/main-slider/2.jpg"></div>
</div><div class="swiper-slide">
    <div class="lazy zoomable" data-src="img/main-slider/3.jpg"></div>
</div><div class="swiper-slide">
    <div class="lazy zoomable" data-src="img/main-slider/4.jpg"></div>
</div><div class="swiper-slide">
    <div class="lazy zoomable" data-src="img/main-slider/5.jpg"></div>
</div><div class="swiper-slide">
    <div class="lazy zoomable" data-src="img/main-slider/6.jpg"></div>
</div>',
    '[[pdoResources?
                            &parents=`1`
                            &tpl=`service`
                            &includeContent=`true`
                            &sortdir=`asc`
                            &showUnpublished=`true`
                        ]]' => '<div class="service-entry" id="s-implants">
    <div class="service-entry-content">
        <h2>
            <div class="num">01</div>
            <div class="title">Имплантация</div>
        </h2>
        <p>
    Имплантация – это самый эффективный метод восстановить зубной ряд в случае, если отсутствует один или несколько зубов. 
</p>
<p>
    Мы занимаемся дентальной имплантацией с 2005 года. Используем передовые методики и технологии в диагностике, лечении и имплантации зубов, первыми в Краснодарском крае начали использовать инновационную технику "All-in-4", обучившись секретам у её автора – Паоло Мало.
</p>
<div class="button-wrapper">
    <a href="index.php?id=9" class="btn">Узнать больше</a>
</div>
    </div>
</div>
<div class="service-entry" id="s-healing">
    <div class="service-entry-content">
        <h2>
            <div class="num">02</div>
            <div class="title">Лечение</div>
        </h2>
        <p>
    Улыбка — больше, чем жест дружелюбия. Она – важный маркер здоровья.
</p>
<p>
    Врачи M-Denta проводят лечение зубов любой сложности. Мы гарантируем, что лечение зубов пройдет безболезненно и в максимально благоприятных условиях. Предварительная диагностика и разработка плана с учётом медицинских показаний и пожеланий наших пациентов – залог комфортного течения лечебного процесса.
</p>
<div class="button-wrapper">
    <a href="index.php?id=7" class="btn">Узнать больше</a>
</div>
    </div>
</div>
<div class="service-entry" id="s-prosthesis">
    <div class="service-entry-content">
        <h2>
            <div class="num">03</div>
            <div class="title">Протезирование</div>
        </h2>
        <p>
    Протезирование в клинике M-Denta – нечто большее, чем возвращение красивой улыбки.
</p>
<p>
    Наши специалисты проводят тщательную предварительную диагностику перед началом протезирования и разрабатывают индивидуальную стратегию для каждого из пациентов. Наша главная цель: вернуть здоровье и функциональность зубов и, как следствие, организма в целом
</p>
<div class="button-wrapper">
    <a href="index.php?id=8" class="btn">Узнать больше</a>
</div>
    </div>
</div>
<div class="service-entry" id="s-lab">
    <div class="service-entry-content">
        <h2>
            <div class="num">04</div>
            <div class="title">Зуботехническая лаборатория</div>
        </h2>
        <p>
    Контролировать процесс лечения от и до, предоставляя пациентам услуги мирового уровня – главный приоритет M&#8209Denta.
</p>
<p>
    Наличие полноценной зуботехнической лаборатории на территории клиники – важнейшее условие для качественного лечения, результат которого мы можем вам гарантировать.
</p>
<div class="button-wrapper">
    <a href="index.php?id=10" class="btn">Узнать больше</a>
</div>
    </div>
</div>',
  ),
  'sourceCache' => 
  array (
    'modChunk' => 
    array (
      'head' => 
      array (
        'fields' => 
        array (
          'id' => 1,
          'source' => 1,
          'property_preprocess' => false,
          'name' => 'head',
          'description' => '',
          'editor_type' => 0,
          'category' => 0,
          'cache_type' => 0,
          'snippet' => '<meta charset="UTF-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<link rel="stylesheet" href="/css/master.css">
<title>[[++site_name]] | [[*pagetitle]]</title>

<!-- Favico -->
<link rel="apple-touch-icon" sizes="180x180" href="/img/favico/apple-touch-icon.png">
<link rel="icon" type="image/png" sizes="32x32" href="/img/favico/favicon-32x32.png">
<link rel="icon" type="image/png" sizes="16x16" href="/img/favico/favicon-16x16.png">
<link rel="manifest" href="/img/favico/site.webmanifest">
<link rel="mask-icon" href="/img/favico/safari-pinned-tab.svg" color="#2b2377">
<link rel="shortcut icon" href="/img/favico/favicon.ico">
<meta name="msapplication-TileColor" content="#2b2377">
<meta name="msapplication-config" content="/img/favico/browserconfig.xml">
<meta name="theme-color" content="#ffffff">
<!-- /Favico -->',
          'locked' => false,
          'properties' => 
          array (
          ),
          'static' => false,
          'static_file' => '',
          'content' => '<meta charset="UTF-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<link rel="stylesheet" href="/css/master.css">
<title>[[++site_name]] | [[*pagetitle]]</title>

<!-- Favico -->
<link rel="apple-touch-icon" sizes="180x180" href="/img/favico/apple-touch-icon.png">
<link rel="icon" type="image/png" sizes="32x32" href="/img/favico/favicon-32x32.png">
<link rel="icon" type="image/png" sizes="16x16" href="/img/favico/favicon-16x16.png">
<link rel="manifest" href="/img/favico/site.webmanifest">
<link rel="mask-icon" href="/img/favico/safari-pinned-tab.svg" color="#2b2377">
<link rel="shortcut icon" href="/img/favico/favicon.ico">
<meta name="msapplication-TileColor" content="#2b2377">
<meta name="msapplication-config" content="/img/favico/browserconfig.xml">
<meta name="theme-color" content="#ffffff">
<!-- /Favico -->',
        ),
        'policies' => 
        array (
        ),
        'source' => 
        array (
          'id' => 1,
          'name' => 'Filesystem',
          'description' => '',
          'class_key' => 'sources.modFileMediaSource',
          'properties' => 
          array (
          ),
          'is_stream' => true,
        ),
      ),
      'header' => 
      array (
        'fields' => 
        array (
          'id' => 3,
          'source' => 1,
          'property_preprocess' => false,
          'name' => 'header',
          'description' => '',
          'editor_type' => 0,
          'category' => 0,
          'cache_type' => 0,
          'snippet' => '<header>
    <nav>
        <a href="/" class="logo"></a>
        <div class="separator"></div>
        [[Wayfinder?
            &startId=`0`
            &parentRowTpl=`naviRowTpl`
            &outerTpl=`naviHeaderOuterTpl`
            &rowTpl=`naviTopRowTpl`
        ]]
        <ul class="burger-wrapper">
            <li><a href="#mobile-menu" class="hide-l-up sidenav-trigger"><i class="mdi mdi-menu"></i></a></li>
        </ul>
    </nav>
</header>
[[Wayfinder?
    &startId=`0`
    &depth=`2`
    &parentRowTpl=`naviRowTpl`
    &outerTpl=`naviSidebarTpl`
]]',
          'locked' => false,
          'properties' => 
          array (
          ),
          'static' => false,
          'static_file' => '',
          'content' => '<header>
    <nav>
        <a href="/" class="logo"></a>
        <div class="separator"></div>
        [[Wayfinder?
            &startId=`0`
            &parentRowTpl=`naviRowTpl`
            &outerTpl=`naviHeaderOuterTpl`
            &rowTpl=`naviTopRowTpl`
        ]]
        <ul class="burger-wrapper">
            <li><a href="#mobile-menu" class="hide-l-up sidenav-trigger"><i class="mdi mdi-menu"></i></a></li>
        </ul>
    </nav>
</header>
[[Wayfinder?
    &startId=`0`
    &depth=`2`
    &parentRowTpl=`naviRowTpl`
    &outerTpl=`naviSidebarTpl`
]]',
        ),
        'policies' => 
        array (
        ),
        'source' => 
        array (
          'id' => 1,
          'name' => 'Filesystem',
          'description' => '',
          'class_key' => 'sources.modFileMediaSource',
          'properties' => 
          array (
          ),
          'is_stream' => true,
        ),
      ),
      'splash' => 
      array (
        'fields' => 
        array (
          'id' => 7,
          'source' => 1,
          'property_preprocess' => false,
          'name' => 'splash',
          'description' => '',
          'editor_type' => 0,
          'category' => 0,
          'cache_type' => 0,
          'snippet' => '<div id="splash"></div>
<div id="loading-bar">
    <div class="percent"></div>
</div>
<div id="cursor" class="hidden"></div>
<div id="testdiv"></div>',
          'locked' => false,
          'properties' => 
          array (
          ),
          'static' => false,
          'static_file' => '',
          'content' => '<div id="splash"></div>
<div id="loading-bar">
    <div class="percent"></div>
</div>
<div id="cursor" class="hidden"></div>
<div id="testdiv"></div>',
        ),
        'policies' => 
        array (
        ),
        'source' => 
        array (
          'id' => 1,
          'name' => 'Filesystem',
          'description' => '',
          'class_key' => 'sources.modFileMediaSource',
          'properties' => 
          array (
          ),
          'is_stream' => true,
        ),
      ),
      'hero' => 
      array (
        'fields' => 
        array (
          'id' => 4,
          'source' => 1,
          'property_preprocess' => false,
          'name' => 'hero',
          'description' => '',
          'editor_type' => 0,
          'category' => 0,
          'cache_type' => 0,
          'snippet' => '[[*alias:is=`main`:then=`[[$main_h1]]`:else=`[[*alias:is=`contacts`:then=`[[$map]]`:else=`[[$hero_h1]]`]]`]]',
          'locked' => false,
          'properties' => 
          array (
          ),
          'static' => false,
          'static_file' => '',
          'content' => '[[*alias:is=`main`:then=`[[$main_h1]]`:else=`[[*alias:is=`contacts`:then=`[[$map]]`:else=`[[$hero_h1]]`]]`]]',
        ),
        'policies' => 
        array (
        ),
        'source' => 
        array (
          'id' => 1,
          'name' => 'Filesystem',
          'description' => '',
          'class_key' => 'sources.modFileMediaSource',
          'properties' => 
          array (
          ),
          'is_stream' => true,
        ),
      ),
      'main_h1' => 
      array (
        'fields' => 
        array (
          'id' => 5,
          'source' => 1,
          'property_preprocess' => false,
          'name' => 'main_h1',
          'description' => '',
          'editor_type' => 0,
          'category' => 0,
          'cache_type' => 0,
          'snippet' => '<section class="three">
    <div class="three-container"></div>
</section>
<section class="hero">
    <div class="container align-center-l-down">
        <div class="container center-align">
            <p class="slogan">[[*longtitle]]</p>
        </div>
    </div>
</section>',
          'locked' => false,
          'properties' => 
          array (
          ),
          'static' => false,
          'static_file' => '',
          'content' => '<section class="three">
    <div class="three-container"></div>
</section>
<section class="hero">
    <div class="container align-center-l-down">
        <div class="container center-align">
            <p class="slogan">[[*longtitle]]</p>
        </div>
    </div>
</section>',
        ),
        'policies' => 
        array (
        ),
        'source' => 
        array (
          'id' => 1,
          'name' => 'Filesystem',
          'description' => '',
          'class_key' => 'sources.modFileMediaSource',
          'properties' => 
          array (
          ),
          'is_stream' => true,
        ),
      ),
      'map' => 
      array (
        'fields' => 
        array (
          'id' => 19,
          'source' => 1,
          'property_preprocess' => false,
          'name' => 'map',
          'description' => '',
          'editor_type' => 0,
          'category' => 0,
          'cache_type' => 0,
          'snippet' => '<section class="map-container">
    <div id="map"></div>
</section>
<section class="hero">
    <div class="container align-center-l-down">
        <div class="background">
            <h1>[[*pagetitle]]</h1>
            <p>[[*longtitle]]</p>
        </div>
    </div>
</section>',
          'locked' => false,
          'properties' => 
          array (
          ),
          'static' => false,
          'static_file' => '',
          'content' => '<section class="map-container">
    <div id="map"></div>
</section>
<section class="hero">
    <div class="container align-center-l-down">
        <div class="background">
            <h1>[[*pagetitle]]</h1>
            <p>[[*longtitle]]</p>
        </div>
    </div>
</section>',
        ),
        'policies' => 
        array (
        ),
        'source' => 
        array (
          'id' => 1,
          'name' => 'Filesystem',
          'description' => '',
          'class_key' => 'sources.modFileMediaSource',
          'properties' => 
          array (
          ),
          'is_stream' => true,
        ),
      ),
      'hero_h1' => 
      array (
        'fields' => 
        array (
          'id' => 6,
          'source' => 1,
          'property_preprocess' => false,
          'name' => 'hero_h1',
          'description' => '',
          'editor_type' => 0,
          'category' => 0,
          'cache_type' => 0,
          'snippet' => '<section class="three">
    <div class="three-container"></div>
</section>
<section class="hero">
    <div class="container align-center-l-down">
        <div class="background">
            <h1>[[*pagetitle]]</h1>
            <p>[[*longtitle]]</p>
        </div>
    </div>
</section>',
          'locked' => false,
          'properties' => 
          array (
          ),
          'static' => false,
          'static_file' => '',
          'content' => '<section class="three">
    <div class="three-container"></div>
</section>
<section class="hero">
    <div class="container align-center-l-down">
        <div class="background">
            <h1>[[*pagetitle]]</h1>
            <p>[[*longtitle]]</p>
        </div>
    </div>
</section>',
        ),
        'policies' => 
        array (
        ),
        'source' => 
        array (
          'id' => 1,
          'name' => 'Filesystem',
          'description' => '',
          'class_key' => 'sources.modFileMediaSource',
          'properties' => 
          array (
          ),
          'is_stream' => true,
        ),
      ),
      'callToAction' => 
      array (
        'fields' => 
        array (
          'id' => 14,
          'source' => 1,
          'property_preprocess' => false,
          'name' => 'callToAction',
          'description' => '',
          'editor_type' => 0,
          'category' => 0,
          'cache_type' => 0,
          'snippet' => '<section id="call-to-action">
    <div class="container">
        <div class="row">
            <div class="col s12 center-align">
                <h2>Записаться на приём</h2>
                <a href="" class="btn outlined">Позвонить</a>
                <a href="" class="btn outlined">Заказать звонок</a>
                <a href="" class="btn">Оставить заявку</a>
            </div>
        </div>
    </div>
</section>',
          'locked' => false,
          'properties' => 
          array (
          ),
          'static' => false,
          'static_file' => '',
          'content' => '<section id="call-to-action">
    <div class="container">
        <div class="row">
            <div class="col s12 center-align">
                <h2>Записаться на приём</h2>
                <a href="" class="btn outlined">Позвонить</a>
                <a href="" class="btn outlined">Заказать звонок</a>
                <a href="" class="btn">Оставить заявку</a>
            </div>
        </div>
    </div>
</section>',
        ),
        'policies' => 
        array (
        ),
        'source' => 
        array (
          'id' => 1,
          'name' => 'Filesystem',
          'description' => '',
          'class_key' => 'sources.modFileMediaSource',
          'properties' => 
          array (
          ),
          'is_stream' => true,
        ),
      ),
      'footer' => 
      array (
        'fields' => 
        array (
          'id' => 2,
          'source' => 1,
          'property_preprocess' => false,
          'name' => 'footer',
          'description' => '',
          'editor_type' => 0,
          'category' => 0,
          'cache_type' => 0,
          'snippet' => '<footer>
    <a href="/" class="footer-logo"></a>
    [[Wayfinder?
        &startId=`0`
        &level=`1`
        &parentRowTpl=`naviRowTpl`
    ]]
</footer>
<div class="footer-copyright">
    <div class="container">
        <div class="flex wrap">
            <div class="copyright align-center-m-down">© M-Denta, 2021</div>
            <div class="separator"></div>
            <div class="authors align-center-m-down">
                <a href="https://2br.agency" target="_blank" rel="nofollow">Дизайн, разработка – агентство 2Br</a>
            </div>
        </div>
    </div>
</div>',
          'locked' => false,
          'properties' => 
          array (
          ),
          'static' => false,
          'static_file' => '',
          'content' => '<footer>
    <a href="/" class="footer-logo"></a>
    [[Wayfinder?
        &startId=`0`
        &level=`1`
        &parentRowTpl=`naviRowTpl`
    ]]
</footer>
<div class="footer-copyright">
    <div class="container">
        <div class="flex wrap">
            <div class="copyright align-center-m-down">© M-Denta, 2021</div>
            <div class="separator"></div>
            <div class="authors align-center-m-down">
                <a href="https://2br.agency" target="_blank" rel="nofollow">Дизайн, разработка – агентство 2Br</a>
            </div>
        </div>
    </div>
</div>',
        ),
        'policies' => 
        array (
        ),
        'source' => 
        array (
          'id' => 1,
          'name' => 'Filesystem',
          'description' => '',
          'class_key' => 'sources.modFileMediaSource',
          'properties' => 
          array (
          ),
          'is_stream' => true,
        ),
      ),
      'scripts' => 
      array (
        'fields' => 
        array (
          'id' => 10,
          'source' => 1,
          'property_preprocess' => false,
          'name' => 'scripts',
          'description' => '',
          'editor_type' => 0,
          'category' => 0,
          'cache_type' => 0,
          'snippet' => '<script src=\'/js/TweenMax.min.js\'></script>
<script src="/js/jquery.min.js" type="module"></script>
<script src="/js/jquery.lazy.min.js" type="module"></script>
<script src="/js/materialize.min.js"></script>
<script src="/js/swiper-bundle.js"></script>
<script src="/js/master.js" type="module"></script>',
          'locked' => false,
          'properties' => 
          array (
          ),
          'static' => false,
          'static_file' => '',
          'content' => '<script src=\'/js/TweenMax.min.js\'></script>
<script src="/js/jquery.min.js" type="module"></script>
<script src="/js/jquery.lazy.min.js" type="module"></script>
<script src="/js/materialize.min.js"></script>
<script src="/js/swiper-bundle.js"></script>
<script src="/js/master.js" type="module"></script>',
        ),
        'policies' => 
        array (
        ),
        'source' => 
        array (
          'id' => 1,
          'name' => 'Filesystem',
          'description' => '',
          'class_key' => 'sources.modFileMediaSource',
          'properties' => 
          array (
          ),
          'is_stream' => true,
        ),
      ),
    ),
    'modSnippet' => 
    array (
      'Wayfinder' => 
      array (
        'fields' => 
        array (
          'id' => 1,
          'source' => 0,
          'property_preprocess' => false,
          'name' => 'Wayfinder',
          'description' => 'Wayfinder for MODx Revolution 2.0.0-beta-5 and later.',
          'editor_type' => 0,
          'category' => 0,
          'cache_type' => 0,
          'snippet' => '/**
 * Wayfinder Snippet to build site navigation menus
 *
 * Totally refactored from original DropMenu nav builder to make it easier to
 * create custom navigation by using chunks as output templates. By using
 * templates, many of the paramaters are no longer needed for flexible output
 * including tables, unordered- or ordered-lists (ULs or OLs), definition lists
 * (DLs) or in any other format you desire.
 *
 * @version 2.1.1-beta5
 * @author Garry Nutting (collabpad.com)
 * @author Kyle Jaebker (muddydogpaws.com)
 * @author Ryan Thrash (modx.com)
 * @author Shaun McCormick (modx.com)
 * @author Jason Coward (modx.com)
 *
 * @example [[Wayfinder? &startId=`0`]]
 *
 * @var modX $modx
 * @var array $scriptProperties
 * 
 * @package wayfinder
 */
$wayfinder_base = $modx->getOption(\'wayfinder.core_path\',$scriptProperties,$modx->getOption(\'core_path\').\'components/wayfinder/\');

/* include a custom config file if specified */
if (isset($scriptProperties[\'config\'])) {
    $scriptProperties[\'config\'] = str_replace(\'../\',\'\',$scriptProperties[\'config\']);
    $scriptProperties[\'config\'] = $wayfinder_base.\'configs/\'.$scriptProperties[\'config\'].\'.config.php\';
} else {
    $scriptProperties[\'config\'] = $wayfinder_base.\'configs/default.config.php\';
}
if (file_exists($scriptProperties[\'config\'])) {
    include $scriptProperties[\'config\'];
}

/* include wayfinder class */
include_once $wayfinder_base.\'wayfinder.class.php\';
if (!$modx->loadClass(\'Wayfinder\',$wayfinder_base,true,true)) {
    return \'error: Wayfinder class not found\';
}
$wf = new Wayfinder($modx,$scriptProperties);

/* get user class definitions
 * TODO: eventually move these into config parameters */
$wf->_css = array(
    \'first\' => isset($firstClass) ? $firstClass : \'\',
    \'last\' => isset($lastClass) ? $lastClass : \'last\',
    \'here\' => isset($hereClass) ? $hereClass : \'active\',
    \'parent\' => isset($parentClass) ? $parentClass : \'\',
    \'row\' => isset($rowClass) ? $rowClass : \'\',
    \'outer\' => isset($outerClass) ? $outerClass : \'\',
    \'inner\' => isset($innerClass) ? $innerClass : \'\',
    \'level\' => isset($levelClass) ? $levelClass: \'\',
    \'self\' => isset($selfClass) ? $selfClass : \'\',
    \'weblink\' => isset($webLinkClass) ? $webLinkClass : \'\'
);

/* get user templates
 * TODO: eventually move these into config parameters */
$wf->_templates = array(
    \'outerTpl\' => isset($outerTpl) ? $outerTpl : \'\',
    \'rowTpl\' => isset($rowTpl) ? $rowTpl : \'\',
    \'parentRowTpl\' => isset($parentRowTpl) ? $parentRowTpl : \'\',
    \'parentRowHereTpl\' => isset($parentRowHereTpl) ? $parentRowHereTpl : \'\',
    \'hereTpl\' => isset($hereTpl) ? $hereTpl : \'\',
    \'innerTpl\' => isset($innerTpl) ? $innerTpl : \'\',
    \'innerRowTpl\' => isset($innerRowTpl) ? $innerRowTpl : \'\',
    \'innerHereTpl\' => isset($innerHereTpl) ? $innerHereTpl : \'\',
    \'activeParentRowTpl\' => isset($activeParentRowTpl) ? $activeParentRowTpl : \'\',
    \'categoryFoldersTpl\' => isset($categoryFoldersTpl) ? $categoryFoldersTpl : \'\',
    \'startItemTpl\' => isset($startItemTpl) ? $startItemTpl : \'\'
);

/* process Wayfinder */
$output = $wf->run();
if ($wf->_config[\'debug\']) {
    $output .= $wf->renderDebugOutput();
}

/* output results */
if ($wf->_config[\'ph\']) {
    $modx->setPlaceholder($wf->_config[\'ph\'],$output);
} else {
    return $output;
}',
          'locked' => false,
          'properties' => 
          array (
            'level' => 
            array (
              'name' => 'level',
              'desc' => 'prop_wayfinder.level_desc',
              'type' => 'textfield',
              'options' => '',
              'value' => '0',
              'lexicon' => 'wayfinder:properties',
              'desc_trans' => 'Depth (number of levels) to build the menu from. 0 goes through all levels.',
              'area' => '',
              'area_trans' => '',
            ),
            'includeDocs' => 
            array (
              'name' => 'includeDocs',
              'desc' => 'prop_wayfinder.includeDocs_desc',
              'type' => 'textfield',
              'options' => '',
              'value' => '0',
              'lexicon' => 'wayfinder:properties',
              'desc_trans' => 'Acts as a filter and will limit the output to only the documents specified in this parameter. The startId is still required.',
              'area' => '',
              'area_trans' => '',
            ),
            'excludeDocs' => 
            array (
              'name' => 'excludeDocs',
              'desc' => 'prop_wayfinder.excludeDocs_desc',
              'type' => 'textfield',
              'options' => '',
              'value' => '0',
              'lexicon' => 'wayfinder:properties',
              'desc_trans' => 'Acts as a filter and will remove the documents specified in this parameter from the output. The startId is still required.',
              'area' => '',
              'area_trans' => '',
            ),
            'contexts' => 
            array (
              'name' => 'contexts',
              'desc' => 'prop_wayfinder.contexts_desc',
              'type' => 'textfield',
              'options' => '',
              'value' => '',
              'lexicon' => 'wayfinder:properties',
              'desc_trans' => 'Specify the contexts for the Resources that will be loaded in this menu. Useful when used with startId at 0 to show all first-level items. Note: This will increase load times a bit, but if you set cacheResults to 1, that will offset the load time.',
              'area' => '',
              'area_trans' => '',
            ),
            'cacheResults' => 
            array (
              'name' => 'cacheResults',
              'desc' => 'prop_wayfinder.cacheResults_desc',
              'type' => 'combo-boolean',
              'options' => '',
              'value' => true,
              'lexicon' => 'wayfinder:properties',
              'desc_trans' => 'Cache the generated menu to the MODX Resource cache. Setting this to 1 will speed up the loading of your menus.',
              'area' => '',
              'area_trans' => '',
            ),
            'cacheTime' => 
            array (
              'name' => 'cacheTime',
              'desc' => 'prop_wayfinder.cacheTime_desc',
              'type' => 'textfield',
              'options' => '',
              'value' => 3600,
              'lexicon' => 'wayfinder:properties',
              'desc_trans' => 'The number of seconds to store the cached menu, if cacheResults is 1. Set to 0 to store indefinitely until cache is manually cleared.',
              'area' => '',
              'area_trans' => '',
            ),
            'ph' => 
            array (
              'name' => 'ph',
              'desc' => 'prop_wayfinder.ph_desc',
              'type' => 'combo-boolean',
              'options' => '',
              'value' => false,
              'lexicon' => 'wayfinder:properties',
              'desc_trans' => 'To display send the output of Wayfinder to a placeholder set the ph parameter equal to the name of the desired placeholder. All output including the debugging (if on) will be sent to the placeholder specified.',
              'area' => '',
              'area_trans' => '',
            ),
            'debug' => 
            array (
              'name' => 'debug',
              'desc' => 'prop_wayfinder.debug_desc',
              'type' => 'combo-boolean',
              'options' => '',
              'value' => false,
              'lexicon' => 'wayfinder:properties',
              'desc_trans' => 'With the debug parameter set to 1, Wayfinder will output information on how each Resource was processed.',
              'area' => '',
              'area_trans' => '',
            ),
            'ignoreHidden' => 
            array (
              'name' => 'ignoreHidden',
              'desc' => 'prop_wayfinder.ignoreHidden_desc',
              'type' => 'combo-boolean',
              'options' => '',
              'value' => false,
              'lexicon' => 'wayfinder:properties',
              'desc_trans' => 'The ignoreHidden parameter allows Wayfinder to ignore the display in menu flag that can be set for each document. With this parameter set to 1, all Resources will be displayed regardless of the Display in Menu flag.',
              'area' => '',
              'area_trans' => '',
            ),
            'hideSubMenus' => 
            array (
              'name' => 'hideSubMenus',
              'desc' => 'prop_wayfinder.hideSubMenus_desc',
              'type' => 'combo-boolean',
              'options' => '',
              'value' => false,
              'lexicon' => 'wayfinder:properties',
              'desc_trans' => 'The hideSubMenus parameter will remove all non-active submenus from the Wayfinder output if set to 1. This parameter only works if multiple levels are being displayed.',
              'area' => '',
              'area_trans' => '',
            ),
            'useWeblinkUrl' => 
            array (
              'name' => 'useWeblinkUrl',
              'desc' => 'prop_wayfinder.useWeblinkUrl_desc',
              'type' => 'combo-boolean',
              'options' => '',
              'value' => true,
              'lexicon' => 'wayfinder:properties',
              'desc_trans' => ' If WebLinks are used in the output, Wayfinder will output the link specified in the WebLink instead of the normal MODx link. To use the standard display of WebLinks (like any other Resource) set this to 0.',
              'area' => '',
              'area_trans' => '',
            ),
            'fullLink' => 
            array (
              'name' => 'fullLink',
              'desc' => 'prop_wayfinder.fullLink_desc',
              'type' => 'combo-boolean',
              'options' => '',
              'value' => false,
              'lexicon' => 'wayfinder:properties',
              'desc_trans' => 'If set to 1, will display the entire, absolute URL in the link. (It is recommended to use scheme instead.)',
              'area' => '',
              'area_trans' => '',
            ),
            'scheme' => 
            array (
              'name' => 'scheme',
              'desc' => 'prop_wayfinder.scheme_desc',
              'type' => 'list',
              'options' => 
              array (
                0 => 
                array (
                  'text' => 'prop_wayfinder.relative',
                  'value' => '',
                  'name' => 'Relative',
                ),
                1 => 
                array (
                  'text' => 'prop_wayfinder.absolute',
                  'value' => 'abs',
                  'name' => 'Absolute',
                ),
                2 => 
                array (
                  'text' => 'prop_wayfinder.full',
                  'value' => 'full',
                  'name' => 'Full',
                ),
              ),
              'value' => '',
              'lexicon' => 'wayfinder:properties',
              'desc_trans' => 'Determines how URLs are generated for each link. Set to "abs" to show the absolute URL, "full" to show the full URL, and blank to use the relative URL. Defaults to relative.',
              'area' => '',
              'area_trans' => '',
            ),
            'sortOrder' => 
            array (
              'name' => 'sortOrder',
              'desc' => 'prop_wayfinder.sortOrder_desc',
              'type' => 'list',
              'options' => 
              array (
                0 => 
                array (
                  'text' => 'prop_wayfinder.ascending',
                  'value' => 'ASC',
                  'name' => 'Ascending',
                ),
                1 => 
                array (
                  'text' => 'prop_wayfinder.descending',
                  'value' => 'DESC',
                  'name' => 'Descending',
                ),
              ),
              'value' => 'ASC',
              'lexicon' => 'wayfinder:properties',
              'desc_trans' => 'Allows the menu to be sorted in either ascending or descending order.',
              'area' => '',
              'area_trans' => '',
            ),
            'sortBy' => 
            array (
              'name' => 'sortBy',
              'desc' => 'prop_wayfinder.sortBy_desc',
              'type' => 'textfield',
              'options' => '',
              'value' => 'menuindex',
              'lexicon' => 'wayfinder:properties',
              'desc_trans' => 'Sorts the output by any of the Resource fields on a level by level basis. This means that each submenu will be sorted independently of all other submenus at the same level. Random will sort the output differently every time the page is loaded if the snippet is called uncached.',
              'area' => '',
              'area_trans' => '',
            ),
            'limit' => 
            array (
              'name' => 'limit',
              'desc' => 'prop_wayfinder.limit_desc',
              'type' => 'textfield',
              'options' => '',
              'value' => '0',
              'lexicon' => 'wayfinder:properties',
              'desc_trans' => 'Causes Wayfinder to only process the number of items specified per level.',
              'area' => '',
              'area_trans' => '',
            ),
            'cssTpl' => 
            array (
              'name' => 'cssTpl',
              'desc' => 'prop_wayfinder.cssTpl_desc',
              'type' => 'textfield',
              'options' => '',
              'value' => false,
              'lexicon' => 'wayfinder:properties',
              'desc_trans' => 'This parameter allows for a chunk containing a link to a style sheet or style information to be inserted into the head section of the generated page.',
              'area' => '',
              'area_trans' => '',
            ),
            'jsTpl' => 
            array (
              'name' => 'jsTpl',
              'desc' => 'prop_wayfinder.jsTpl_desc',
              'type' => 'textfield',
              'options' => '',
              'value' => false,
              'lexicon' => 'wayfinder:properties',
              'desc_trans' => 'This parameter allows for a chunk containing some Javascript to be inserted into the head section of the generated page.',
              'area' => '',
              'area_trans' => '',
            ),
            'rowIdPrefix' => 
            array (
              'name' => 'rowIdPrefix',
              'desc' => 'prop_wayfinder.rowIdPrefix_desc',
              'type' => 'textfield',
              'options' => '',
              'value' => false,
              'lexicon' => 'wayfinder:properties',
              'desc_trans' => 'If set, Wayfinder will replace the id placeholder with a unique id consisting of the specified prefix plus the Resource id.',
              'area' => '',
              'area_trans' => '',
            ),
            'textOfLinks' => 
            array (
              'name' => 'textOfLinks',
              'desc' => 'prop_wayfinder.textOfLinks_desc',
              'type' => 'textfield',
              'options' => '',
              'value' => 'menutitle',
              'lexicon' => 'wayfinder:properties',
              'desc_trans' => 'This field will be inserted into the linktext placeholder.',
              'area' => '',
              'area_trans' => '',
            ),
            'titleOfLinks' => 
            array (
              'name' => 'titleOfLinks',
              'desc' => 'prop_wayfinder.titleOfLinks_desc',
              'type' => 'textfield',
              'options' => '',
              'value' => 'pagetitle',
              'lexicon' => 'wayfinder:properties',
              'desc_trans' => 'This field will be inserted into the linktitle placeholder.',
              'area' => '',
              'area_trans' => '',
            ),
            'displayStart' => 
            array (
              'name' => 'displayStart',
              'desc' => 'prop_wayfinder.displayStart_desc',
              'type' => 'combo-boolean',
              'options' => '',
              'value' => false,
              'lexicon' => 'wayfinder:properties',
              'desc_trans' => 'Show the document as referenced by startId in the menu.',
              'area' => '',
              'area_trans' => '',
            ),
            'firstClass' => 
            array (
              'name' => 'firstClass',
              'desc' => 'prop_wayfinder.firstClass_desc',
              'type' => 'textfield',
              'options' => '',
              'value' => 'first',
              'lexicon' => 'wayfinder:properties',
              'desc_trans' => 'CSS class for the first item at a given menu level.',
              'area' => '',
              'area_trans' => '',
            ),
            'lastClass' => 
            array (
              'name' => 'lastClass',
              'desc' => 'prop_wayfinder.lastClass_desc',
              'type' => 'textfield',
              'options' => '',
              'value' => 'last',
              'lexicon' => 'wayfinder:properties',
              'desc_trans' => 'CSS class for the last item at a given menu level.',
              'area' => '',
              'area_trans' => '',
            ),
            'hereClass' => 
            array (
              'name' => 'hereClass',
              'desc' => 'prop_wayfinder.hereClass_desc',
              'type' => 'textfield',
              'options' => '',
              'value' => 'active',
              'lexicon' => 'wayfinder:properties',
              'desc_trans' => 'CSS class for the items showing where you are, all the way up the chain.',
              'area' => '',
              'area_trans' => '',
            ),
            'parentClass' => 
            array (
              'name' => 'parentClass',
              'desc' => 'prop_wayfinder.parentClass_desc',
              'type' => 'textfield',
              'options' => '',
              'value' => '',
              'lexicon' => 'wayfinder:properties',
              'desc_trans' => 'CSS class for menu items that are a container and have children.',
              'area' => '',
              'area_trans' => '',
            ),
            'rowClass' => 
            array (
              'name' => 'rowClass',
              'desc' => 'prop_wayfinder.rowClass_desc',
              'type' => 'textfield',
              'options' => '',
              'value' => '',
              'lexicon' => 'wayfinder:properties',
              'desc_trans' => 'CSS class denoting each output row.',
              'area' => '',
              'area_trans' => '',
            ),
            'outerClass' => 
            array (
              'name' => 'outerClass',
              'desc' => 'prop_wayfinder.outerClass_desc',
              'type' => 'textfield',
              'options' => '',
              'value' => '',
              'lexicon' => 'wayfinder:properties',
              'desc_trans' => 'CSS class for the outer template.',
              'area' => '',
              'area_trans' => '',
            ),
            'innerClass' => 
            array (
              'name' => 'innerClass',
              'desc' => 'prop_wayfinder.innerClass_desc',
              'type' => 'textfield',
              'options' => '',
              'value' => '',
              'lexicon' => 'wayfinder:properties',
              'desc_trans' => 'CSS class for the inner template.',
              'area' => '',
              'area_trans' => '',
            ),
            'levelClass' => 
            array (
              'name' => 'levelClass',
              'desc' => 'prop_wayfinder.levelClass_desc',
              'type' => 'textfield',
              'options' => '',
              'value' => '',
              'lexicon' => 'wayfinder:properties',
              'desc_trans' => 'CSS class denoting every output row level. The level number will be added to the specified class (level1, level2, level3 etc if you specified "level").',
              'area' => '',
              'area_trans' => '',
            ),
            'selfClass' => 
            array (
              'name' => 'selfClass',
              'desc' => 'prop_wayfinder.selfClass_desc',
              'type' => 'textfield',
              'options' => '',
              'value' => '',
              'lexicon' => 'wayfinder:properties',
              'desc_trans' => 'CSS class for the current item.',
              'area' => '',
              'area_trans' => '',
            ),
            'webLinkClass' => 
            array (
              'name' => 'webLinkClass',
              'desc' => 'prop_wayfinder.webLinkClass_desc',
              'type' => 'textfield',
              'options' => '',
              'value' => '',
              'lexicon' => 'wayfinder:properties',
              'desc_trans' => 'CSS class for weblink items.',
              'area' => '',
              'area_trans' => '',
            ),
            'outerTpl' => 
            array (
              'name' => 'outerTpl',
              'desc' => 'prop_wayfinder.outerTpl_desc',
              'type' => 'textfield',
              'options' => '',
              'value' => '',
              'lexicon' => 'wayfinder:properties',
              'desc_trans' => 'Name of the chunk containing the template for the outer most container; if not included, a string including "<ul>[[+wf.wrapper]]</ul>" is assumed.',
              'area' => '',
              'area_trans' => '',
            ),
            'rowTpl' => 
            array (
              'name' => 'rowTpl',
              'desc' => 'prop_wayfinder.rowTpl_desc',
              'type' => 'textfield',
              'options' => '',
              'value' => '',
              'lexicon' => 'wayfinder:properties',
              'desc_trans' => 'Name of the chunk containing the template for the regular row items.',
              'area' => '',
              'area_trans' => '',
            ),
            'parentRowTpl' => 
            array (
              'name' => 'parentRowTpl',
              'desc' => 'prop_wayfinder.parentRowTpl_desc',
              'type' => 'textfield',
              'options' => '',
              'value' => '',
              'lexicon' => 'wayfinder:properties',
              'desc_trans' => 'Name of the chunk containing the template for any Resource that is a container and has children. Remember the [wf.wrapper] placeholder to output the children documents.',
              'area' => '',
              'area_trans' => '',
            ),
            'parentRowHereTpl' => 
            array (
              'name' => 'parentRowHereTpl',
              'desc' => 'prop_wayfinder.parentRowHereTpl_desc',
              'type' => 'textfield',
              'options' => '',
              'value' => '',
              'lexicon' => 'wayfinder:properties',
              'desc_trans' => 'Name of the chunk containing the template for the current Resource if it is a container and has children. Remember the [wf.wrapper] placeholder to output the children documents.',
              'area' => '',
              'area_trans' => '',
            ),
            'hereTpl' => 
            array (
              'name' => 'hereTpl',
              'desc' => 'prop_wayfinder.hereTpl_desc',
              'type' => 'textfield',
              'options' => '',
              'value' => '',
              'lexicon' => 'wayfinder:properties',
              'desc_trans' => 'Name of the chunk containing the template for the current Resource.',
              'area' => '',
              'area_trans' => '',
            ),
            'innerTpl' => 
            array (
              'name' => 'innerTpl',
              'desc' => 'prop_wayfinder.innerTpl_desc',
              'type' => 'textfield',
              'options' => '',
              'value' => '',
              'lexicon' => 'wayfinder:properties',
              'desc_trans' => 'Name of the chunk containing the template for each submenu. If no innerTpl is specified the outerTpl is used in its place.',
              'area' => '',
              'area_trans' => '',
            ),
            'innerRowTpl' => 
            array (
              'name' => 'innerRowTpl',
              'desc' => 'prop_wayfinder.innerRowTpl_desc',
              'type' => 'textfield',
              'options' => '',
              'value' => '',
              'lexicon' => 'wayfinder:properties',
              'desc_trans' => 'Name of the chunk containing the template for the row items in a subfolder.',
              'area' => '',
              'area_trans' => '',
            ),
            'innerHereTpl' => 
            array (
              'name' => 'innerHereTpl',
              'desc' => 'prop_wayfinder.innerHereTpl_desc',
              'type' => 'textfield',
              'options' => '',
              'value' => '',
              'lexicon' => 'wayfinder:properties',
              'desc_trans' => 'Name of the chunk containing the template for the current Resource if it is in a subfolder.',
              'area' => '',
              'area_trans' => '',
            ),
            'activeParentRowTpl' => 
            array (
              'name' => 'activeParentRowTpl',
              'desc' => 'prop_wayfinder.activeParentRowTpl_desc',
              'type' => 'textfield',
              'options' => '',
              'value' => '',
              'lexicon' => 'wayfinder:properties',
              'desc_trans' => 'Name of the chunk containing the template for items that are containers, have children and are currently active in the tree.',
              'area' => '',
              'area_trans' => '',
            ),
            'categoryFoldersTpl' => 
            array (
              'name' => 'categoryFoldersTpl',
              'desc' => 'prop_wayfinder.categoryFoldersTpl_desc',
              'type' => 'textfield',
              'options' => '',
              'value' => '',
              'lexicon' => 'wayfinder:properties',
              'desc_trans' => 'Name of the chunk containing the template for category folders. Category folders are determined by setting the template to blank or by setting the link attributes field to rel="category".',
              'area' => '',
              'area_trans' => '',
            ),
            'startItemTpl' => 
            array (
              'name' => 'startItemTpl',
              'desc' => 'prop_wayfinder.startItemTpl_desc',
              'type' => 'textfield',
              'options' => '',
              'value' => '',
              'lexicon' => 'wayfinder:properties',
              'desc_trans' => 'Name of the chunk containing the template for the start item, if enabled via the &displayStart parameter. Note: the default template shows the start item but does not link it. If you do not need a link, a class can be applied to the default template using the parameter &firstClass=`className`.',
              'area' => '',
              'area_trans' => '',
            ),
            'permissions' => 
            array (
              'name' => 'permissions',
              'desc' => 'prop_wayfinder.permissions_desc',
              'type' => 'textfield',
              'options' => '',
              'value' => 'list',
              'lexicon' => 'wayfinder:properties',
              'desc_trans' => 'Will check for a permission on the Resource. Defaults to "list" - set to blank to skip normal permissions checks.',
              'area' => '',
              'area_trans' => '',
            ),
            'hereId' => 
            array (
              'name' => 'hereId',
              'desc' => 'prop_wayfinder.hereId_desc',
              'type' => 'textfield',
              'options' => '',
              'value' => '',
              'lexicon' => 'wayfinder:properties',
              'desc_trans' => 'Optional. If set, will change the "here" Resource to this ID. Defaults to the currently active Resource.',
              'area' => '',
              'area_trans' => '',
            ),
            'where' => 
            array (
              'name' => 'where',
              'desc' => 'prop_wayfinder.where_desc',
              'type' => 'textfield',
              'options' => '',
              'value' => '',
              'lexicon' => 'wayfinder:properties',
              'desc_trans' => 'Optional. A JSON object for where conditions for all items selected in the menu.',
              'area' => '',
              'area_trans' => '',
            ),
            'templates' => 
            array (
              'name' => 'templates',
              'desc' => 'prop_wayfinder.templates_desc',
              'type' => 'textfield',
              'options' => '',
              'value' => '',
              'lexicon' => 'wayfinder:properties',
              'desc_trans' => 'Optional. A comma-separated list of Template IDs to restrict selected Resources to.',
              'area' => '',
              'area_trans' => '',
            ),
            'previewUnpublished' => 
            array (
              'name' => 'previewUnpublished',
              'desc' => 'prop_wayfinder.previewunpublished_desc',
              'type' => 'textfield',
              'options' => '',
              'value' => '',
              'lexicon' => 'wayfinder:properties',
              'desc_trans' => 'Optional. If set to Yes, if you are logged into the mgr and have the view_unpublished permission, it will allow previewing of unpublished resources in your menus in the front-end.',
              'area' => '',
              'area_trans' => '',
            ),
          ),
          'moduleguid' => '',
          'static' => false,
          'static_file' => '',
          'content' => '/**
 * Wayfinder Snippet to build site navigation menus
 *
 * Totally refactored from original DropMenu nav builder to make it easier to
 * create custom navigation by using chunks as output templates. By using
 * templates, many of the paramaters are no longer needed for flexible output
 * including tables, unordered- or ordered-lists (ULs or OLs), definition lists
 * (DLs) or in any other format you desire.
 *
 * @version 2.1.1-beta5
 * @author Garry Nutting (collabpad.com)
 * @author Kyle Jaebker (muddydogpaws.com)
 * @author Ryan Thrash (modx.com)
 * @author Shaun McCormick (modx.com)
 * @author Jason Coward (modx.com)
 *
 * @example [[Wayfinder? &startId=`0`]]
 *
 * @var modX $modx
 * @var array $scriptProperties
 * 
 * @package wayfinder
 */
$wayfinder_base = $modx->getOption(\'wayfinder.core_path\',$scriptProperties,$modx->getOption(\'core_path\').\'components/wayfinder/\');

/* include a custom config file if specified */
if (isset($scriptProperties[\'config\'])) {
    $scriptProperties[\'config\'] = str_replace(\'../\',\'\',$scriptProperties[\'config\']);
    $scriptProperties[\'config\'] = $wayfinder_base.\'configs/\'.$scriptProperties[\'config\'].\'.config.php\';
} else {
    $scriptProperties[\'config\'] = $wayfinder_base.\'configs/default.config.php\';
}
if (file_exists($scriptProperties[\'config\'])) {
    include $scriptProperties[\'config\'];
}

/* include wayfinder class */
include_once $wayfinder_base.\'wayfinder.class.php\';
if (!$modx->loadClass(\'Wayfinder\',$wayfinder_base,true,true)) {
    return \'error: Wayfinder class not found\';
}
$wf = new Wayfinder($modx,$scriptProperties);

/* get user class definitions
 * TODO: eventually move these into config parameters */
$wf->_css = array(
    \'first\' => isset($firstClass) ? $firstClass : \'\',
    \'last\' => isset($lastClass) ? $lastClass : \'last\',
    \'here\' => isset($hereClass) ? $hereClass : \'active\',
    \'parent\' => isset($parentClass) ? $parentClass : \'\',
    \'row\' => isset($rowClass) ? $rowClass : \'\',
    \'outer\' => isset($outerClass) ? $outerClass : \'\',
    \'inner\' => isset($innerClass) ? $innerClass : \'\',
    \'level\' => isset($levelClass) ? $levelClass: \'\',
    \'self\' => isset($selfClass) ? $selfClass : \'\',
    \'weblink\' => isset($webLinkClass) ? $webLinkClass : \'\'
);

/* get user templates
 * TODO: eventually move these into config parameters */
$wf->_templates = array(
    \'outerTpl\' => isset($outerTpl) ? $outerTpl : \'\',
    \'rowTpl\' => isset($rowTpl) ? $rowTpl : \'\',
    \'parentRowTpl\' => isset($parentRowTpl) ? $parentRowTpl : \'\',
    \'parentRowHereTpl\' => isset($parentRowHereTpl) ? $parentRowHereTpl : \'\',
    \'hereTpl\' => isset($hereTpl) ? $hereTpl : \'\',
    \'innerTpl\' => isset($innerTpl) ? $innerTpl : \'\',
    \'innerRowTpl\' => isset($innerRowTpl) ? $innerRowTpl : \'\',
    \'innerHereTpl\' => isset($innerHereTpl) ? $innerHereTpl : \'\',
    \'activeParentRowTpl\' => isset($activeParentRowTpl) ? $activeParentRowTpl : \'\',
    \'categoryFoldersTpl\' => isset($categoryFoldersTpl) ? $categoryFoldersTpl : \'\',
    \'startItemTpl\' => isset($startItemTpl) ? $startItemTpl : \'\'
);

/* process Wayfinder */
$output = $wf->run();
if ($wf->_config[\'debug\']) {
    $output .= $wf->renderDebugOutput();
}

/* output results */
if ($wf->_config[\'ph\']) {
    $modx->setPlaceholder($wf->_config[\'ph\'],$output);
} else {
    return $output;
}',
        ),
        'policies' => 
        array (
        ),
        'source' => 
        array (
        ),
      ),
      'getImageList' => 
      array (
        'fields' => 
        array (
          'id' => 2,
          'source' => 0,
          'property_preprocess' => false,
          'name' => 'getImageList',
          'description' => '',
          'editor_type' => 0,
          'category' => 1,
          'cache_type' => 0,
          'snippet' => '/**
 * getImageList
 *
 * Copyright 2009-2014 by Bruno Perner <b.perner@gmx.de>
 *
 * getImageList is free software; you can redistribute it and/or modify it
 * under the terms of the GNU General Public License as published by the Free
 * Software Foundation; either version 2 of the License, or (at your option) any
 * later version.
 *
 * getImageList is distributed in the hope that it will be useful, but WITHOUT ANY
 * WARRANTY; without even the implied warranty of MERCHANTABILITY or FITNESS FOR
 * A PARTICULAR PURPOSE. See the GNU General Public License for more details.
 *
 * You should have received a copy of the GNU General Public License along with
 * getImageList; if not, write to the Free Software Foundation, Inc., 59 Temple Place,
 * Suite 330, Boston, MA 02111-1307 USA
 *
 * @package migx
 */
/**
 * getImageList
 *
 * display Items from outputvalue of TV with custom-TV-input-type MIGX or from other JSON-string for MODx Revolution 
 *
 * @version 1.4
 * @author Bruno Perner <b.perner@gmx.de>
 * @copyright Copyright &copy; 2009-2014
 * @license http://www.gnu.org/licenses/old-licenses/gpl-2.0.html GNU General Public License
 * version 2 or (at your option) any later version.
 * @package migx
 */

/*example: <ul>[[!getImageList? &tvname=`myTV`&tpl=`@CODE:<li>[[+idx]]<img src="[[+imageURL]]"/><p>[[+imageAlt]]</p></li>`]]</ul>*/
/* get default properties */

$allow_request = (bool)$modx->getOption(\'allowRequest\', $scriptProperties, false);
$tvname = $modx->getOption(\'tvname\', $scriptProperties, \'\');
$inherit_children_tvname = $modx->getOption(\'inherit_children_tvname\', $scriptProperties, \'\');
$tpl = $modx->getOption(\'tpl\', $scriptProperties, \'\');
$wrapperTpl = $modx->getOption(\'wrapperTpl\', $scriptProperties, \'\');
$emptyTpl = $modx->getOption(\'emptyTpl\', $scriptProperties, \'\'); 
$limit = $modx->getOption(\'limit\', $scriptProperties, \'0\');
$offset = $modx->getOption(\'offset\', $scriptProperties, 0);
$totalVar = $modx->getOption(\'totalVar\', $scriptProperties, \'total\');
$randomize = $modx->getOption(\'randomize\', $scriptProperties, false);
$preselectLimit = $modx->getOption(\'preselectLimit\', $scriptProperties, 0); // when random preselect important images
$where = $modx->getOption(\'where\', $scriptProperties, \'\');
$where = !empty($where) ? $modx->fromJSON($where) : array();
$sort = $modx->getOption(\'sort\', $scriptProperties, \'\');
$sort = !empty($sort) ? $modx->fromJSON($sort) : array();
$toSeparatePlaceholders = $modx->getOption(\'toSeparatePlaceholders\', $scriptProperties, false);
$toPlaceholder = $modx->getOption(\'toPlaceholder\', $scriptProperties, false);
$outputSeparator = $modx->getOption(\'outputSeparator\', $scriptProperties, \'\');
$splitSeparator = $modx->getOption(\'splitSeparator\', $scriptProperties, \'\');
$placeholdersKeyField = $modx->getOption(\'placeholdersKeyField\', $scriptProperties, \'MIGX_id\');
$toJsonPlaceholder = $modx->getOption(\'toJsonPlaceholder\', $scriptProperties, false);
$jsonVarKey = $modx->getOption(\'jsonVarKey\', $scriptProperties, \'migx_outputvalue\');
$outputvalue = $modx->getOption(\'value\', $scriptProperties, \'\');
if ($allow_request) {
    $outputvalue = isset($_REQUEST[$jsonVarKey]) ? $_REQUEST[$jsonVarKey] : $outputvalue;
}
$docidVarKey = $modx->getOption(\'docidVarKey\', $scriptProperties, \'migx_docid\');
$docid = $modx->getOption(\'docid\', $scriptProperties, (isset($modx->resource) ? $modx->resource->get(\'id\') : 1));
if ($allow_request) {
    $docid = isset($_REQUEST[$docidVarKey]) ? $_REQUEST[$docidVarKey] : $docid;
}
$processTVs = $modx->getOption(\'processTVs\', $scriptProperties, \'1\');
$reverse = $modx->getOption(\'reverse\', $scriptProperties, \'0\');
$sumFields = $modx->getOption(\'sumFields\', $scriptProperties, \'\');
$sumPrefix = $modx->getOption(\'sumPrefix\', $scriptProperties, \'summary_\');
$addfields = $modx->getOption(\'addfields\', $scriptProperties, \'\');
$addfields = !empty($addfields) ? explode(\',\', $addfields) : null;
//split json into parts
$splits = $modx->fromJson($modx->getOption(\'splits\', $scriptProperties, 0));
$splitTpl = $modx->getOption(\'splitTpl\', $scriptProperties, \'\');
$splitSeparator = $modx->getOption(\'splitSeparator\', $scriptProperties, \'\');
$inheritFrom = $modx->getOption(\'inheritFrom\', $scriptProperties, \'\'); //commaseparated list of resource-ids or/and the keyword \'parents\' where to inherit from
$inheritFrom = !empty($inheritFrom) ? explode(\',\', $inheritFrom) : \'\';

$modx->setPlaceholder(\'docid\', $docid);

$base_path = $modx->getOption(\'base_path\', null, MODX_BASE_PATH);
$base_url = $modx->getOption(\'base_url\', null, MODX_BASE_URL);

$migx = $modx->getService(\'migx\', \'Migx\', $modx->getOption(\'migx.core_path\', null, $modx->getOption(\'core_path\') . \'components/migx/\') . \'model/migx/\', $scriptProperties);
if (!($migx instanceof Migx))
    return \'\';
$migx->working_context = isset($modx->resource) ? $modx->resource->get(\'context_key\') : \'web\';

if (!empty($tvname)) {
    if ($tv = $modx->getObject(\'modTemplateVar\', array(\'name\' => $tvname))) {

        /*
        *   get inputProperties
        */


        $properties = $tv->get(\'input_properties\');
        $properties = isset($properties[\'formtabs\']) ? $properties : $tv->getProperties();

        $migx->config[\'configs\'] = $modx->getOption(\'configs\', $properties, \'\');
        if (!empty($migx->config[\'configs\'])) {
            $migx->loadConfigs();
            // get tabs from file or migx-config-table
            $formtabs = $migx->getTabs();
        }
        if (empty($formtabs) && isset($properties[\'formtabs\'])) {
            //try to get formtabs and its fields from properties
            $formtabs = $modx->fromJSON($properties[\'formtabs\']);
        }

        if (!empty($properties[\'basePath\'])) {
            if ($properties[\'autoResourceFolders\'] == \'true\') {
                $scriptProperties[\'base_path\'] = $base_path . $properties[\'basePath\'] . $docid . \'/\';
                $scriptProperties[\'base_url\'] = $base_url . $properties[\'basePath\'] . $docid . \'/\';
            } else {
                $scriptProperties[\'base_path\'] = $base_path . $properties[\'base_path\'];
                $scriptProperties[\'base_url\'] = $base_url . $properties[\'basePath\'];
            }
        }
        if ($jsonVarKey == \'migx_outputvalue\' && !empty($properties[\'jsonvarkey\'])) {
            $jsonVarKey = $properties[\'jsonvarkey\'];
            $outputvalue = $allow_request && isset($_REQUEST[$jsonVarKey]) ? $_REQUEST[$jsonVarKey] : $outputvalue;
        }

        if (empty($outputvalue)) {
            $outputvalue = $tv->renderOutput($docid);
            if (empty($outputvalue) && !empty($inheritFrom)) {
                foreach ($inheritFrom as $from) {
                    if ($from == \'parents\') {
                        if (!empty($inherit_children_tvname)){
                            //try to get items from optional MIGX-TV for children
                            if ($inh_tv = $modx->getObject(\'modTemplateVar\', array(\'name\' => $inherit_children_tvname))) {
                                $outputvalue = $inh_tv->processInheritBinding(\'\', $docid);    
                            }
                        }
                        $outputvalue = empty($outputvalue) ? $tv->processInheritBinding(\'\', $docid) : $outputvalue;
                    } else {
                        $outputvalue = $tv->renderOutput($from);
                    }
                    if (!empty($outputvalue)) {
                        break;
                    }
                }
            }
        }


        /*
        *   get inputTvs 
        */
        $inputTvs = array();
        if (is_array($formtabs)) {

            //multiple different Forms
            // Note: use same field-names and inputTVs in all forms
            $inputTvs = $migx->extractInputTvs($formtabs);
        }
        if ($migx->source = $tv->getSource($migx->working_context, false)) {
            $migx->source->initialize();
        }

    }


}

if (empty($outputvalue)) {
    $modx->setPlaceholder($totalVar, 0);
    return \'\';
}

//echo $outputvalue.\'<br/><br/>\';

$items = $modx->fromJSON($outputvalue);

// where filter
if (is_array($where) && count($where) > 0) {
    $items = $migx->filterItems($where, $items);
}
$modx->setPlaceholder($totalVar, count($items));

if (!empty($reverse)) {
    $items = array_reverse($items);
}

// sort items
if (is_array($sort) && count($sort) > 0) {
    $items = $migx->sortDbResult($items, $sort);
}

$summaries = array();
$output = \'\';
$items = $offset > 0 ? array_slice($items, $offset) : $items;
$count = count($items);

if ($count > 0) {
    $limit = $limit == 0 || $limit > $count ? $count : $limit;
    $preselectLimit = $preselectLimit > $count ? $count : $preselectLimit;
    //preselect important items
    $preitems = array();
    if ($randomize && $preselectLimit > 0) {
        for ($i = 0; $i < $preselectLimit; $i++) {
            $preitems[] = $items[$i];
            unset($items[$i]);
        }
        $limit = $limit - count($preitems);
    }

    //shuffle items
    if ($randomize) {
        shuffle($items);
    }

    //limit items
    $count = count($items);
    $tempitems = array();

    for ($i = 0; $i < $limit; $i++) {
        if ($i >= $count) {
            break;
        }
        $tempitems[] = $items[$i];
    }
    $items = $tempitems;

    //add preselected items and schuffle again
    if ($randomize && $preselectLimit > 0) {
        $items = array_merge($preitems, $items);
        shuffle($items);
    }

    $properties = array();
    foreach ($scriptProperties as $property => $value) {
        $properties[\'property.\' . $property] = $value;
    }

    $idx = 0;
    $output = array();
    $template = array();
    $count = count($items);

    foreach ($items as $key => $item) {
        $formname = isset($item[\'MIGX_formname\']) ? $item[\'MIGX_formname\'] . \'_\' : \'\';
        $fields = array();
        foreach ($item as $field => $value) {
            if (is_array($value)) {
                if (is_array($value[0])) {
                    //nested array - convert to json
                    $value = $modx->toJson($value);
                } else {
                    $value = implode(\'||\', $value); //handle arrays (checkboxes, multiselects)
                }
            }


            $inputTVkey = $formname . $field;

            if ($processTVs && isset($inputTvs[$inputTVkey])) {
                if (isset($inputTvs[$inputTVkey][\'inputTV\']) && $tv = $modx->getObject(\'modTemplateVar\', array(\'name\' => $inputTvs[$inputTVkey][\'inputTV\']))) {

                } else {
                    $tv = $modx->newObject(\'modTemplateVar\');
                    $tv->set(\'type\', $inputTvs[$inputTVkey][\'inputTVtype\']);
                }
                $inputTV = $inputTvs[$inputTVkey];

                $mTypes = $modx->getOption(\'manipulatable_url_tv_output_types\', null, \'image,file\');
                //don\'t manipulate any urls here
                $modx->setOption(\'manipulatable_url_tv_output_types\', \'\');
                $tv->set(\'default_text\', $value);

                // $value = $tv->renderOutput($docid); breaks if the TV used in MIGX is also assigned to this Template,
                // example tv: imageLogo is assigned to the template and imageLogo is assigned to the MIGX TV as a result
                // only the value of the imageLogo is returned for the MIGX TV instance
                // need to override default MODX method: $value = $tv->renderOutput($docid);
                /* process any TV commands in value */
                $tv_value = $tv->processBindings($value, $docid);
                $params = $tv->get(\'output_properties\');
                if (empty($params) || $params === null) {
                    $params = [];
                }
                /* run prepareOutput to allow for custom overriding */
                $tv_value = $tv->prepareOutput($tv_value, $docid);
                /* find the render */
                $outputRenderPaths = $tv->getRenderDirectories(\'OnTVOutputRenderList\',\'output\');
                $value = $tv->getRender($params, $tv_value, $outputRenderPaths, \'output\', $docid, $tv->get(\'display\'));
                // End override of $value = $tv->renderOutput($docid);
				
                //set option back
                $modx->setOption(\'manipulatable_url_tv_output_types\', $mTypes);
                //now manipulate urls
                if ($mediasource = $migx->getFieldSource($inputTV, $tv)) {
                    $mTypes = explode(\',\', $mTypes);
                    if (!empty($value) && in_array($tv->get(\'type\'), $mTypes)) {
                        //$value = $mediasource->prepareOutputUrl($value);
                        $value = str_replace(\'/./\', \'/\', $mediasource->prepareOutputUrl($value));
                    }
                }

            }
            $fields[$field] = $value;

        }

        if (!empty($addfields)) {
            foreach ($addfields as $addfield) {
                $addfield = explode(\':\', $addfield);
                $addname = $addfield[0];
                $adddefault = isset($addfield[1]) ? $addfield[1] : \'\';
                $fields[$addname] = $adddefault;
            }
        }

        if (!empty($sumFields)) {
            $sumFields = is_array($sumFields) ? $sumFields : explode(\',\', $sumFields);
            foreach ($sumFields as $sumField) {
                if (isset($fields[$sumField])) {
                    $summaries[$sumPrefix . $sumField] = $summaries[$sumPrefix . $sumField] + $fields[$sumField];
                    $fields[$sumPrefix . $sumField] = $summaries[$sumPrefix . $sumField];
                }
            }
        }


        if ($toJsonPlaceholder) {
            $output[] = $fields;
        } else {
            $fields[\'_alt\'] = $idx % 2;
            $idx++;
            $fields[\'_first\'] = $idx == 1 ? true : \'\';
            $fields[\'_last\'] = $idx == $limit ? true : \'\';
            $fields[\'idx\'] = $idx;
            $rowtpl = \'\';
            //get changing tpls from field
            if (substr($tpl, 0, 7) == "@FIELD:") {
                $tplField = substr($tpl, 7);
                $rowtpl = $fields[$tplField];
            }

            if ($fields[\'_first\'] && !empty($tplFirst)) {
                $rowtpl = $tplFirst;
            }
            if ($fields[\'_last\'] && empty($rowtpl) && !empty($tplLast)) {
                $rowtpl = $tplLast;
            }
            $tplidx = \'tpl_\' . $idx;
            if (empty($rowtpl) && !empty($$tplidx)) {
                $rowtpl = $$tplidx;
            }
            if ($idx > 1 && empty($rowtpl)) {
                $divisors = $migx->getDivisors($idx);
                if (!empty($divisors)) {
                    foreach ($divisors as $divisor) {
                        $tplnth = \'tpl_n\' . $divisor;
                        if (!empty($$tplnth)) {
                            $rowtpl = $$tplnth;
                            if (!empty($rowtpl)) {
                                break;
                            }
                        }
                    }
                }
            }

            if ($count == 1 && isset($tpl_oneresult)) {
                $rowtpl = $tpl_oneresult;
            }

            $fields = array_merge($fields, $properties);

            if (!empty($rowtpl)) {
                $template = $migx->getTemplate($tpl, $template);
                $fields[\'_tpl\'] = $template[$tpl];
            } else {
                $rowtpl = $tpl;

            }
            $template = $migx->getTemplate($rowtpl, $template);


            if ($template[$rowtpl]) {
                $chunk = $modx->newObject(\'modChunk\');
                $chunk->setCacheable(false);
                $chunk->setContent($template[$rowtpl]);


                if (!empty($placeholdersKeyField) && isset($fields[$placeholdersKeyField])) {
                    $output[$fields[$placeholdersKeyField]] = $chunk->process($fields);
                } else {
                    $output[] = $chunk->process($fields);
                }
            } else {
                if (!empty($placeholdersKeyField)) {
                    $output[$fields[$placeholdersKeyField]] = \'<pre>\' . print_r($fields, 1) . \'</pre>\';
                } else {
                    $output[] = \'<pre>\' . print_r($fields, 1) . \'</pre>\';
                }
            }
        }


    }
}

if (count($summaries) > 0) {
    $modx->toPlaceholders($summaries);
}


if ($toJsonPlaceholder) {
    $modx->setPlaceholder($toJsonPlaceholder, $modx->toJson($output));
    return \'\';
}

if (!empty($toSeparatePlaceholders)) {
    $modx->toPlaceholders($output, $toSeparatePlaceholders);
    return \'\';
}
/*
if (!empty($outerTpl))
$o = parseTpl($outerTpl, array(\'output\'=>implode($outputSeparator, $output)));
else 
*/

if ($count > 0 && $splits > 0) {
    $size = ceil($count / $splits);
    $chunks = array_chunk($output, $size);
    $output = array();
    foreach ($chunks as $chunk) {
        $o = implode($outputSeparator, $chunk);
        $output[] = $modx->getChunk($splitTpl, array(\'output\' => $o));
    }
    $outputSeparator = $splitSeparator;
}

if (is_array($output)) {
    $o = implode($outputSeparator, $output);
} else {
    $o = $output;
}

if (!empty($o) && !empty($wrapperTpl)) {
    $template = $migx->getTemplate($wrapperTpl);
    if ($template[$wrapperTpl]) {
        $chunk = $modx->newObject(\'modChunk\');
        $chunk->setCacheable(false);
        $chunk->setContent($template[$wrapperTpl]);
        $properties[\'output\'] = $o;
        $o = $chunk->process($properties);
    }
}

if (empty($o) && !empty($emptyTpl)) {
    $template = $migx->getTemplate($emptyTpl);
    if ($template[$emptyTpl]) {
        $chunk = $modx->newObject(\'modChunk\');
        $chunk->setCacheable(false);
        $chunk->setContent($template[$emptyTpl]);
        $o = $chunk->process($properties);
    }
}

if (!empty($toPlaceholder)) {
    $modx->setPlaceholder($toPlaceholder, $o);
    return \'\';
}

return $o;',
          'locked' => false,
          'properties' => 
          array (
          ),
          'moduleguid' => '',
          'static' => false,
          'static_file' => '',
          'content' => '/**
 * getImageList
 *
 * Copyright 2009-2014 by Bruno Perner <b.perner@gmx.de>
 *
 * getImageList is free software; you can redistribute it and/or modify it
 * under the terms of the GNU General Public License as published by the Free
 * Software Foundation; either version 2 of the License, or (at your option) any
 * later version.
 *
 * getImageList is distributed in the hope that it will be useful, but WITHOUT ANY
 * WARRANTY; without even the implied warranty of MERCHANTABILITY or FITNESS FOR
 * A PARTICULAR PURPOSE. See the GNU General Public License for more details.
 *
 * You should have received a copy of the GNU General Public License along with
 * getImageList; if not, write to the Free Software Foundation, Inc., 59 Temple Place,
 * Suite 330, Boston, MA 02111-1307 USA
 *
 * @package migx
 */
/**
 * getImageList
 *
 * display Items from outputvalue of TV with custom-TV-input-type MIGX or from other JSON-string for MODx Revolution 
 *
 * @version 1.4
 * @author Bruno Perner <b.perner@gmx.de>
 * @copyright Copyright &copy; 2009-2014
 * @license http://www.gnu.org/licenses/old-licenses/gpl-2.0.html GNU General Public License
 * version 2 or (at your option) any later version.
 * @package migx
 */

/*example: <ul>[[!getImageList? &tvname=`myTV`&tpl=`@CODE:<li>[[+idx]]<img src="[[+imageURL]]"/><p>[[+imageAlt]]</p></li>`]]</ul>*/
/* get default properties */

$allow_request = (bool)$modx->getOption(\'allowRequest\', $scriptProperties, false);
$tvname = $modx->getOption(\'tvname\', $scriptProperties, \'\');
$inherit_children_tvname = $modx->getOption(\'inherit_children_tvname\', $scriptProperties, \'\');
$tpl = $modx->getOption(\'tpl\', $scriptProperties, \'\');
$wrapperTpl = $modx->getOption(\'wrapperTpl\', $scriptProperties, \'\');
$emptyTpl = $modx->getOption(\'emptyTpl\', $scriptProperties, \'\'); 
$limit = $modx->getOption(\'limit\', $scriptProperties, \'0\');
$offset = $modx->getOption(\'offset\', $scriptProperties, 0);
$totalVar = $modx->getOption(\'totalVar\', $scriptProperties, \'total\');
$randomize = $modx->getOption(\'randomize\', $scriptProperties, false);
$preselectLimit = $modx->getOption(\'preselectLimit\', $scriptProperties, 0); // when random preselect important images
$where = $modx->getOption(\'where\', $scriptProperties, \'\');
$where = !empty($where) ? $modx->fromJSON($where) : array();
$sort = $modx->getOption(\'sort\', $scriptProperties, \'\');
$sort = !empty($sort) ? $modx->fromJSON($sort) : array();
$toSeparatePlaceholders = $modx->getOption(\'toSeparatePlaceholders\', $scriptProperties, false);
$toPlaceholder = $modx->getOption(\'toPlaceholder\', $scriptProperties, false);
$outputSeparator = $modx->getOption(\'outputSeparator\', $scriptProperties, \'\');
$splitSeparator = $modx->getOption(\'splitSeparator\', $scriptProperties, \'\');
$placeholdersKeyField = $modx->getOption(\'placeholdersKeyField\', $scriptProperties, \'MIGX_id\');
$toJsonPlaceholder = $modx->getOption(\'toJsonPlaceholder\', $scriptProperties, false);
$jsonVarKey = $modx->getOption(\'jsonVarKey\', $scriptProperties, \'migx_outputvalue\');
$outputvalue = $modx->getOption(\'value\', $scriptProperties, \'\');
if ($allow_request) {
    $outputvalue = isset($_REQUEST[$jsonVarKey]) ? $_REQUEST[$jsonVarKey] : $outputvalue;
}
$docidVarKey = $modx->getOption(\'docidVarKey\', $scriptProperties, \'migx_docid\');
$docid = $modx->getOption(\'docid\', $scriptProperties, (isset($modx->resource) ? $modx->resource->get(\'id\') : 1));
if ($allow_request) {
    $docid = isset($_REQUEST[$docidVarKey]) ? $_REQUEST[$docidVarKey] : $docid;
}
$processTVs = $modx->getOption(\'processTVs\', $scriptProperties, \'1\');
$reverse = $modx->getOption(\'reverse\', $scriptProperties, \'0\');
$sumFields = $modx->getOption(\'sumFields\', $scriptProperties, \'\');
$sumPrefix = $modx->getOption(\'sumPrefix\', $scriptProperties, \'summary_\');
$addfields = $modx->getOption(\'addfields\', $scriptProperties, \'\');
$addfields = !empty($addfields) ? explode(\',\', $addfields) : null;
//split json into parts
$splits = $modx->fromJson($modx->getOption(\'splits\', $scriptProperties, 0));
$splitTpl = $modx->getOption(\'splitTpl\', $scriptProperties, \'\');
$splitSeparator = $modx->getOption(\'splitSeparator\', $scriptProperties, \'\');
$inheritFrom = $modx->getOption(\'inheritFrom\', $scriptProperties, \'\'); //commaseparated list of resource-ids or/and the keyword \'parents\' where to inherit from
$inheritFrom = !empty($inheritFrom) ? explode(\',\', $inheritFrom) : \'\';

$modx->setPlaceholder(\'docid\', $docid);

$base_path = $modx->getOption(\'base_path\', null, MODX_BASE_PATH);
$base_url = $modx->getOption(\'base_url\', null, MODX_BASE_URL);

$migx = $modx->getService(\'migx\', \'Migx\', $modx->getOption(\'migx.core_path\', null, $modx->getOption(\'core_path\') . \'components/migx/\') . \'model/migx/\', $scriptProperties);
if (!($migx instanceof Migx))
    return \'\';
$migx->working_context = isset($modx->resource) ? $modx->resource->get(\'context_key\') : \'web\';

if (!empty($tvname)) {
    if ($tv = $modx->getObject(\'modTemplateVar\', array(\'name\' => $tvname))) {

        /*
        *   get inputProperties
        */


        $properties = $tv->get(\'input_properties\');
        $properties = isset($properties[\'formtabs\']) ? $properties : $tv->getProperties();

        $migx->config[\'configs\'] = $modx->getOption(\'configs\', $properties, \'\');
        if (!empty($migx->config[\'configs\'])) {
            $migx->loadConfigs();
            // get tabs from file or migx-config-table
            $formtabs = $migx->getTabs();
        }
        if (empty($formtabs) && isset($properties[\'formtabs\'])) {
            //try to get formtabs and its fields from properties
            $formtabs = $modx->fromJSON($properties[\'formtabs\']);
        }

        if (!empty($properties[\'basePath\'])) {
            if ($properties[\'autoResourceFolders\'] == \'true\') {
                $scriptProperties[\'base_path\'] = $base_path . $properties[\'basePath\'] . $docid . \'/\';
                $scriptProperties[\'base_url\'] = $base_url . $properties[\'basePath\'] . $docid . \'/\';
            } else {
                $scriptProperties[\'base_path\'] = $base_path . $properties[\'base_path\'];
                $scriptProperties[\'base_url\'] = $base_url . $properties[\'basePath\'];
            }
        }
        if ($jsonVarKey == \'migx_outputvalue\' && !empty($properties[\'jsonvarkey\'])) {
            $jsonVarKey = $properties[\'jsonvarkey\'];
            $outputvalue = $allow_request && isset($_REQUEST[$jsonVarKey]) ? $_REQUEST[$jsonVarKey] : $outputvalue;
        }

        if (empty($outputvalue)) {
            $outputvalue = $tv->renderOutput($docid);
            if (empty($outputvalue) && !empty($inheritFrom)) {
                foreach ($inheritFrom as $from) {
                    if ($from == \'parents\') {
                        if (!empty($inherit_children_tvname)){
                            //try to get items from optional MIGX-TV for children
                            if ($inh_tv = $modx->getObject(\'modTemplateVar\', array(\'name\' => $inherit_children_tvname))) {
                                $outputvalue = $inh_tv->processInheritBinding(\'\', $docid);    
                            }
                        }
                        $outputvalue = empty($outputvalue) ? $tv->processInheritBinding(\'\', $docid) : $outputvalue;
                    } else {
                        $outputvalue = $tv->renderOutput($from);
                    }
                    if (!empty($outputvalue)) {
                        break;
                    }
                }
            }
        }


        /*
        *   get inputTvs 
        */
        $inputTvs = array();
        if (is_array($formtabs)) {

            //multiple different Forms
            // Note: use same field-names and inputTVs in all forms
            $inputTvs = $migx->extractInputTvs($formtabs);
        }
        if ($migx->source = $tv->getSource($migx->working_context, false)) {
            $migx->source->initialize();
        }

    }


}

if (empty($outputvalue)) {
    $modx->setPlaceholder($totalVar, 0);
    return \'\';
}

//echo $outputvalue.\'<br/><br/>\';

$items = $modx->fromJSON($outputvalue);

// where filter
if (is_array($where) && count($where) > 0) {
    $items = $migx->filterItems($where, $items);
}
$modx->setPlaceholder($totalVar, count($items));

if (!empty($reverse)) {
    $items = array_reverse($items);
}

// sort items
if (is_array($sort) && count($sort) > 0) {
    $items = $migx->sortDbResult($items, $sort);
}

$summaries = array();
$output = \'\';
$items = $offset > 0 ? array_slice($items, $offset) : $items;
$count = count($items);

if ($count > 0) {
    $limit = $limit == 0 || $limit > $count ? $count : $limit;
    $preselectLimit = $preselectLimit > $count ? $count : $preselectLimit;
    //preselect important items
    $preitems = array();
    if ($randomize && $preselectLimit > 0) {
        for ($i = 0; $i < $preselectLimit; $i++) {
            $preitems[] = $items[$i];
            unset($items[$i]);
        }
        $limit = $limit - count($preitems);
    }

    //shuffle items
    if ($randomize) {
        shuffle($items);
    }

    //limit items
    $count = count($items);
    $tempitems = array();

    for ($i = 0; $i < $limit; $i++) {
        if ($i >= $count) {
            break;
        }
        $tempitems[] = $items[$i];
    }
    $items = $tempitems;

    //add preselected items and schuffle again
    if ($randomize && $preselectLimit > 0) {
        $items = array_merge($preitems, $items);
        shuffle($items);
    }

    $properties = array();
    foreach ($scriptProperties as $property => $value) {
        $properties[\'property.\' . $property] = $value;
    }

    $idx = 0;
    $output = array();
    $template = array();
    $count = count($items);

    foreach ($items as $key => $item) {
        $formname = isset($item[\'MIGX_formname\']) ? $item[\'MIGX_formname\'] . \'_\' : \'\';
        $fields = array();
        foreach ($item as $field => $value) {
            if (is_array($value)) {
                if (is_array($value[0])) {
                    //nested array - convert to json
                    $value = $modx->toJson($value);
                } else {
                    $value = implode(\'||\', $value); //handle arrays (checkboxes, multiselects)
                }
            }


            $inputTVkey = $formname . $field;

            if ($processTVs && isset($inputTvs[$inputTVkey])) {
                if (isset($inputTvs[$inputTVkey][\'inputTV\']) && $tv = $modx->getObject(\'modTemplateVar\', array(\'name\' => $inputTvs[$inputTVkey][\'inputTV\']))) {

                } else {
                    $tv = $modx->newObject(\'modTemplateVar\');
                    $tv->set(\'type\', $inputTvs[$inputTVkey][\'inputTVtype\']);
                }
                $inputTV = $inputTvs[$inputTVkey];

                $mTypes = $modx->getOption(\'manipulatable_url_tv_output_types\', null, \'image,file\');
                //don\'t manipulate any urls here
                $modx->setOption(\'manipulatable_url_tv_output_types\', \'\');
                $tv->set(\'default_text\', $value);

                // $value = $tv->renderOutput($docid); breaks if the TV used in MIGX is also assigned to this Template,
                // example tv: imageLogo is assigned to the template and imageLogo is assigned to the MIGX TV as a result
                // only the value of the imageLogo is returned for the MIGX TV instance
                // need to override default MODX method: $value = $tv->renderOutput($docid);
                /* process any TV commands in value */
                $tv_value = $tv->processBindings($value, $docid);
                $params = $tv->get(\'output_properties\');
                if (empty($params) || $params === null) {
                    $params = [];
                }
                /* run prepareOutput to allow for custom overriding */
                $tv_value = $tv->prepareOutput($tv_value, $docid);
                /* find the render */
                $outputRenderPaths = $tv->getRenderDirectories(\'OnTVOutputRenderList\',\'output\');
                $value = $tv->getRender($params, $tv_value, $outputRenderPaths, \'output\', $docid, $tv->get(\'display\'));
                // End override of $value = $tv->renderOutput($docid);
				
                //set option back
                $modx->setOption(\'manipulatable_url_tv_output_types\', $mTypes);
                //now manipulate urls
                if ($mediasource = $migx->getFieldSource($inputTV, $tv)) {
                    $mTypes = explode(\',\', $mTypes);
                    if (!empty($value) && in_array($tv->get(\'type\'), $mTypes)) {
                        //$value = $mediasource->prepareOutputUrl($value);
                        $value = str_replace(\'/./\', \'/\', $mediasource->prepareOutputUrl($value));
                    }
                }

            }
            $fields[$field] = $value;

        }

        if (!empty($addfields)) {
            foreach ($addfields as $addfield) {
                $addfield = explode(\':\', $addfield);
                $addname = $addfield[0];
                $adddefault = isset($addfield[1]) ? $addfield[1] : \'\';
                $fields[$addname] = $adddefault;
            }
        }

        if (!empty($sumFields)) {
            $sumFields = is_array($sumFields) ? $sumFields : explode(\',\', $sumFields);
            foreach ($sumFields as $sumField) {
                if (isset($fields[$sumField])) {
                    $summaries[$sumPrefix . $sumField] = $summaries[$sumPrefix . $sumField] + $fields[$sumField];
                    $fields[$sumPrefix . $sumField] = $summaries[$sumPrefix . $sumField];
                }
            }
        }


        if ($toJsonPlaceholder) {
            $output[] = $fields;
        } else {
            $fields[\'_alt\'] = $idx % 2;
            $idx++;
            $fields[\'_first\'] = $idx == 1 ? true : \'\';
            $fields[\'_last\'] = $idx == $limit ? true : \'\';
            $fields[\'idx\'] = $idx;
            $rowtpl = \'\';
            //get changing tpls from field
            if (substr($tpl, 0, 7) == "@FIELD:") {
                $tplField = substr($tpl, 7);
                $rowtpl = $fields[$tplField];
            }

            if ($fields[\'_first\'] && !empty($tplFirst)) {
                $rowtpl = $tplFirst;
            }
            if ($fields[\'_last\'] && empty($rowtpl) && !empty($tplLast)) {
                $rowtpl = $tplLast;
            }
            $tplidx = \'tpl_\' . $idx;
            if (empty($rowtpl) && !empty($$tplidx)) {
                $rowtpl = $$tplidx;
            }
            if ($idx > 1 && empty($rowtpl)) {
                $divisors = $migx->getDivisors($idx);
                if (!empty($divisors)) {
                    foreach ($divisors as $divisor) {
                        $tplnth = \'tpl_n\' . $divisor;
                        if (!empty($$tplnth)) {
                            $rowtpl = $$tplnth;
                            if (!empty($rowtpl)) {
                                break;
                            }
                        }
                    }
                }
            }

            if ($count == 1 && isset($tpl_oneresult)) {
                $rowtpl = $tpl_oneresult;
            }

            $fields = array_merge($fields, $properties);

            if (!empty($rowtpl)) {
                $template = $migx->getTemplate($tpl, $template);
                $fields[\'_tpl\'] = $template[$tpl];
            } else {
                $rowtpl = $tpl;

            }
            $template = $migx->getTemplate($rowtpl, $template);


            if ($template[$rowtpl]) {
                $chunk = $modx->newObject(\'modChunk\');
                $chunk->setCacheable(false);
                $chunk->setContent($template[$rowtpl]);


                if (!empty($placeholdersKeyField) && isset($fields[$placeholdersKeyField])) {
                    $output[$fields[$placeholdersKeyField]] = $chunk->process($fields);
                } else {
                    $output[] = $chunk->process($fields);
                }
            } else {
                if (!empty($placeholdersKeyField)) {
                    $output[$fields[$placeholdersKeyField]] = \'<pre>\' . print_r($fields, 1) . \'</pre>\';
                } else {
                    $output[] = \'<pre>\' . print_r($fields, 1) . \'</pre>\';
                }
            }
        }


    }
}

if (count($summaries) > 0) {
    $modx->toPlaceholders($summaries);
}


if ($toJsonPlaceholder) {
    $modx->setPlaceholder($toJsonPlaceholder, $modx->toJson($output));
    return \'\';
}

if (!empty($toSeparatePlaceholders)) {
    $modx->toPlaceholders($output, $toSeparatePlaceholders);
    return \'\';
}
/*
if (!empty($outerTpl))
$o = parseTpl($outerTpl, array(\'output\'=>implode($outputSeparator, $output)));
else 
*/

if ($count > 0 && $splits > 0) {
    $size = ceil($count / $splits);
    $chunks = array_chunk($output, $size);
    $output = array();
    foreach ($chunks as $chunk) {
        $o = implode($outputSeparator, $chunk);
        $output[] = $modx->getChunk($splitTpl, array(\'output\' => $o));
    }
    $outputSeparator = $splitSeparator;
}

if (is_array($output)) {
    $o = implode($outputSeparator, $output);
} else {
    $o = $output;
}

if (!empty($o) && !empty($wrapperTpl)) {
    $template = $migx->getTemplate($wrapperTpl);
    if ($template[$wrapperTpl]) {
        $chunk = $modx->newObject(\'modChunk\');
        $chunk->setCacheable(false);
        $chunk->setContent($template[$wrapperTpl]);
        $properties[\'output\'] = $o;
        $o = $chunk->process($properties);
    }
}

if (empty($o) && !empty($emptyTpl)) {
    $template = $migx->getTemplate($emptyTpl);
    if ($template[$emptyTpl]) {
        $chunk = $modx->newObject(\'modChunk\');
        $chunk->setCacheable(false);
        $chunk->setContent($template[$emptyTpl]);
        $o = $chunk->process($properties);
    }
}

if (!empty($toPlaceholder)) {
    $modx->setPlaceholder($toPlaceholder, $o);
    return \'\';
}

return $o;',
        ),
        'policies' => 
        array (
        ),
        'source' => 
        array (
        ),
      ),
      'pdoResources' => 
      array (
        'fields' => 
        array (
          'id' => 23,
          'source' => 1,
          'property_preprocess' => false,
          'name' => 'pdoResources',
          'description' => '',
          'editor_type' => 0,
          'category' => 2,
          'cache_type' => 0,
          'snippet' => '/** @var array $scriptProperties */
/** @var modX $modx */
if (isset($parents) && $parents === \'\') {
    $scriptProperties[\'parents\'] = $modx->resource->id;
}
if (!empty($returnIds)) {
    $scriptProperties[\'return\'] = $return = \'ids\';
} elseif (!isset($return)) {
    $scriptProperties[\'return\'] = $return = \'chunks\';
}

// Adding extra parameters into special place so we can put them in a results
/** @var modSnippet $snippet */
$additionalPlaceholders = $properties = [];
if (isset($this) && $this instanceof modSnippet && $this->get(\'properties\')) {
    $properties = $this->get(\'properties\');
}
elseif ($snippet = $modx->getObject(\'modSnippet\', [\'name\' => \'pdoResources\'])) {
    $properties = $snippet->get(\'properties\');
}
if (!empty($properties)) {
    foreach ($scriptProperties as $k => $v) {
        if (!isset($properties[$k])) {
            $additionalPlaceholders[$k] = $v;
        }
    }
}
$scriptProperties[\'additionalPlaceholders\'] = $additionalPlaceholders;

/** @var pdoFetch $pdoFetch */
$fqn = $modx->getOption(\'pdoFetch.class\', null, \'pdotools.pdofetch\', true);
$path = $modx->getOption(\'pdofetch_class_path\', null, MODX_CORE_PATH . \'components/pdotools/model/\', true);
if ($pdoClass = $modx->loadClass($fqn, $path, false, true)) {
    $pdoFetch = new $pdoClass($modx, $scriptProperties);
} else {
    return false;
}
$pdoFetch->addTime(\'pdoTools loaded\');
$output = $pdoFetch->run();

$log = \'\';
if ($modx->user->hasSessionContext(\'mgr\') && !empty($showLog)) {
    $log .= \'<pre class="pdoResourcesLog">\' . print_r($pdoFetch->getTime(), 1) . \'</pre>\';
}

// Return output
if (!empty($returnIds)) {
    $modx->setPlaceholder(\'pdoResources.log\', $log);
    if (!empty($toPlaceholder)) {
        $modx->setPlaceholder($toPlaceholder, $output);
    } else {
        return $output;
    }
} elseif ($return === \'data\') {
    return $output;
} elseif (!empty($toSeparatePlaceholders)) {
    $output[\'log\'] = $log;
    $modx->setPlaceholders($output, $toSeparatePlaceholders);
} else {
    $output .= $log;

    if (!empty($tplWrapper) && (!empty($wrapIfEmpty) || !empty($output))) {
        $output = $pdoFetch->getChunk($tplWrapper, array_merge($additionalPlaceholders, [\'output\' => $output]),
            $pdoFetch->config[\'fastMode\']);
    }

    if (!empty($toPlaceholder)) {
        $modx->setPlaceholder($toPlaceholder, $output);
    } else {
        return $output;
    }
}',
          'locked' => false,
          'properties' => 
          array (
            'tpl' => 
            array (
              'name' => 'tpl',
              'desc' => 'pdotools_prop_tpl',
              'type' => 'textfield',
              'options' => 
              array (
              ),
              'value' => '',
              'lexicon' => 'pdotools:properties',
              'area' => '',
              'desc_trans' => 'Имя чанка для оформления ресурса. Если не указан, то содержимое полей ресурса будет распечатано на экран.',
              'area_trans' => '',
            ),
            'returnIds' => 
            array (
              'name' => 'returnIds',
              'desc' => 'pdotools_prop_returnIds',
              'type' => 'combo-boolean',
              'options' => 
              array (
              ),
              'value' => false,
              'lexicon' => 'pdotools:properties',
              'area' => '',
              'desc_trans' => 'Возвращать строку со списком id ресурсов, вместо оформленных результатов.',
              'area_trans' => '',
            ),
            'showLog' => 
            array (
              'name' => 'showLog',
              'desc' => 'pdotools_prop_showLog',
              'type' => 'combo-boolean',
              'options' => 
              array (
              ),
              'value' => false,
              'lexicon' => 'pdotools:properties',
              'area' => '',
              'desc_trans' => 'Показывать дополнительную информацию о работе сниппета. Только для авторизованных в контекте "mgr".',
              'area_trans' => '',
            ),
            'fastMode' => 
            array (
              'name' => 'fastMode',
              'desc' => 'pdotools_prop_fastMode',
              'type' => 'combo-boolean',
              'options' => 
              array (
              ),
              'value' => false,
              'lexicon' => 'pdotools:properties',
              'area' => '',
              'desc_trans' => 'Быстрый режим обработки чанков. Все необработанные теги (условия, сниппеты и т.п.) будут вырезаны.',
              'area_trans' => '',
            ),
            'sortby' => 
            array (
              'name' => 'sortby',
              'desc' => 'pdotools_prop_sortby',
              'type' => 'textfield',
              'options' => 
              array (
              ),
              'value' => 'publishedon',
              'lexicon' => 'pdotools:properties',
              'area' => '',
              'desc_trans' => 'Любое поле ресурса для сортировки, включая ТВ параметр, если он указан в параметре "includeTVs". Можно указывать JSON строку с массивом нескольких полей. Для случайно сортировки укажите "RAND()"',
              'area_trans' => '',
            ),
            'sortbyTV' => 
            array (
              'name' => 'sortbyTV',
              'desc' => 'pdotools_prop_sortbyTV',
              'type' => 'textfield',
              'options' => 
              array (
              ),
              'value' => '',
              'lexicon' => 'pdotools:properties',
              'area' => '',
              'desc_trans' => 'Сортировка по ТВ параметру. Если он не указан в &includeTVs, то будет подключен автоматически.',
              'area_trans' => '',
            ),
            'sortbyTVType' => 
            array (
              'name' => 'sortbyTVType',
              'desc' => 'pdotools_prop_sortbyTVType',
              'type' => 'textfield',
              'options' => 
              array (
              ),
              'value' => '',
              'lexicon' => 'pdotools:properties',
              'area' => '',
              'desc_trans' => 'Тип сортировки по ТВ параметру. Возможные варианты: string, integer, decimal и datetime. Если пусто, то ТВ будет отсортирован в зависимости от его типа: как текст, число или дата.',
              'area_trans' => '',
            ),
            'sortdir' => 
            array (
              'name' => 'sortdir',
              'desc' => 'pdotools_prop_sortdir',
              'type' => 'list',
              'options' => 
              array (
                0 => 
                array (
                  'text' => 'ASC',
                  'value' => 'ASC',
                  'name' => 'ASC',
                ),
                1 => 
                array (
                  'text' => 'DESC',
                  'value' => 'DESC',
                  'name' => 'DESC',
                ),
              ),
              'value' => 'DESC',
              'lexicon' => 'pdotools:properties',
              'area' => '',
              'desc_trans' => 'Направление сортировки: по убыванию или возрастанию.',
              'area_trans' => '',
            ),
            'sortdirTV' => 
            array (
              'name' => 'sortdirTV',
              'desc' => 'pdotools_prop_sortdirTV',
              'type' => 'list',
              'options' => 
              array (
                0 => 
                array (
                  'text' => 'ASC',
                  'value' => 'ASC',
                  'name' => 'ASC',
                ),
                1 => 
                array (
                  'text' => 'DESC',
                  'value' => 'DESC',
                  'name' => 'DESC',
                ),
              ),
              'value' => 'ASC',
              'lexicon' => 'pdotools:properties',
              'area' => '',
              'desc_trans' => 'Направление сортировки ТВ: по убыванию или возрастанию. Если не указан, то будет равен параметру &sortdir.',
              'area_trans' => '',
            ),
            'limit' => 
            array (
              'name' => 'limit',
              'desc' => 'pdotools_prop_limit',
              'type' => 'numberfield',
              'options' => 
              array (
              ),
              'value' => 10,
              'lexicon' => 'pdotools:properties',
              'area' => '',
              'desc_trans' => 'Ограничение количества результатов выборки. Можно использовать "0".',
              'area_trans' => '',
            ),
            'offset' => 
            array (
              'name' => 'offset',
              'desc' => 'pdotools_prop_offset',
              'type' => 'numberfield',
              'options' => 
              array (
              ),
              'value' => 0,
              'lexicon' => 'pdotools:properties',
              'area' => '',
              'desc_trans' => 'Пропуск результатов от начала.',
              'area_trans' => '',
            ),
            'depth' => 
            array (
              'name' => 'depth',
              'desc' => 'pdotools_prop_depth',
              'type' => 'numberfield',
              'options' => 
              array (
              ),
              'value' => 10,
              'lexicon' => 'pdotools:properties',
              'area' => '',
              'desc_trans' => 'Глубина поиска дочерних ресурсов от родителя.',
              'area_trans' => '',
            ),
            'outputSeparator' => 
            array (
              'name' => 'outputSeparator',
              'desc' => 'pdotools_prop_outputSeparator',
              'type' => 'textfield',
              'options' => 
              array (
              ),
              'value' => '
',
              'lexicon' => 'pdotools:properties',
              'area' => '',
              'desc_trans' => 'Необязательная строка для разделения результатов работы.',
              'area_trans' => '',
            ),
            'toPlaceholder' => 
            array (
              'name' => 'toPlaceholder',
              'desc' => 'pdotools_prop_toPlaceholder',
              'type' => 'textfield',
              'options' => 
              array (
              ),
              'value' => '',
              'lexicon' => 'pdotools:properties',
              'area' => '',
              'desc_trans' => 'Если не пусто, сниппет сохранит все данные в плейсхолдер с этим именем, вместо вывода не экран.',
              'area_trans' => '',
            ),
            'parents' => 
            array (
              'name' => 'parents',
              'desc' => 'pdotools_prop_parents',
              'type' => 'textfield',
              'options' => 
              array (
              ),
              'value' => '',
              'lexicon' => 'pdotools:properties',
              'area' => '',
              'desc_trans' => 'Список родителей, через запятую, для поиска результатов. По умолчанию выборка ограничена текущим родителем. Если поставить 0 - выборка не ограничивается. Если id родителя начинается с дефиса, он и его потомки исключается из выборки.',
              'area_trans' => '',
            ),
            'includeContent' => 
            array (
              'name' => 'includeContent',
              'desc' => 'pdotools_prop_includeContent',
              'type' => 'combo-boolean',
              'options' => 
              array (
              ),
              'value' => false,
              'lexicon' => 'pdotools:properties',
              'area' => '',
              'desc_trans' => 'Включаем поле "content" в выборку.',
              'area_trans' => '',
            ),
            'includeTVs' => 
            array (
              'name' => 'includeTVs',
              'desc' => 'pdotools_prop_includeTVs',
              'type' => 'textfield',
              'options' => 
              array (
              ),
              'value' => '',
              'lexicon' => 'pdotools:properties',
              'area' => '',
              'desc_trans' => 'Список ТВ параметров для выборки, через запятую. Например: "action,time" дадут плейсхолдеры [[+action]] и [[+time]].',
              'area_trans' => '',
            ),
            'prepareTVs' => 
            array (
              'name' => 'prepareTVs',
              'desc' => 'pdotools_prop_prepareTVs',
              'type' => 'textfield',
              'options' => 
              array (
              ),
              'value' => '1',
              'lexicon' => 'pdotools:properties',
              'area' => '',
              'desc_trans' => 'Список ТВ параметров, которые нужно подготовить перед выводом. По умолчанию, установлено в "1", что означает подготовку всех ТВ, указанных в "&includeTVs=``"',
              'area_trans' => '',
            ),
            'processTVs' => 
            array (
              'name' => 'processTVs',
              'desc' => 'pdotools_prop_processTVs',
              'type' => 'textfield',
              'options' => 
              array (
              ),
              'value' => '',
              'lexicon' => 'pdotools:properties',
              'area' => '',
              'desc_trans' => 'Список ТВ параметров, которые нужно обработать перед выводом. Если установить в "1" - будут обработаны все ТВ, указанные в "&includeTVs=``". По умолчанию параметр пуст.',
              'area_trans' => '',
            ),
            'tvPrefix' => 
            array (
              'name' => 'tvPrefix',
              'desc' => 'pdotools_prop_tvPrefix',
              'type' => 'textfield',
              'options' => 
              array (
              ),
              'value' => 'tv.',
              'lexicon' => 'pdotools:properties',
              'area' => '',
              'desc_trans' => 'Префикс для ТВ параметров.',
              'area_trans' => '',
            ),
            'tvFilters' => 
            array (
              'name' => 'tvFilters',
              'desc' => 'pdotools_prop_tvFilters',
              'type' => 'textfield',
              'options' => 
              array (
              ),
              'value' => '',
              'lexicon' => 'pdotools:properties',
              'area' => '',
              'desc_trans' => 'Список фильтров по ТВ, с разделителями AND и OR. Разделитель, указанный в параметре "&tvFiltersOrDelimiter" представляет логическое условие OR и по нему условия группируются в первую очередь.  Внутри каждой группы вы можете задать список значений, разделив их "&tvFiltersAndDelimiter". Поиск значений может проводиться в каком-то конкретном ТВ, если он указан ("myTV==value"), или в любом ("value"). Пример вызова: "&tvFilters=`filter2==one,filter1==bar%||filter1==foo`". <br />Обратите внимание: фильтрация использует оператор LIKE и знак "%" является метасимволом. <br />И еще: Поиск идёт по значениям, которые физически находятся в БД, то есть, сюда не подставляются значения по умолчанию из настроек ТВ.',
              'area_trans' => '',
            ),
            'tvFiltersAndDelimiter' => 
            array (
              'name' => 'tvFiltersAndDelimiter',
              'desc' => 'pdotools_prop_tvFiltersAndDelimiter',
              'type' => 'textfield',
              'options' => 
              array (
              ),
              'value' => ',',
              'lexicon' => 'pdotools:properties',
              'area' => '',
              'desc_trans' => 'Разделитель для условий AND в параметре "&tvFilters". По умолчанию: ",".',
              'area_trans' => '',
            ),
            'tvFiltersOrDelimiter' => 
            array (
              'name' => 'tvFiltersOrDelimiter',
              'desc' => 'pdotools_prop_tvFiltersOrDelimiter',
              'type' => 'textfield',
              'options' => 
              array (
              ),
              'value' => '||',
              'lexicon' => 'pdotools:properties',
              'area' => '',
              'desc_trans' => 'Разделитель для условий OR в параметре "&tvFilters". По умолчанию: "||".',
              'area_trans' => '',
            ),
            'where' => 
            array (
              'name' => 'where',
              'desc' => 'pdotools_prop_where',
              'type' => 'textfield',
              'options' => 
              array (
              ),
              'value' => '',
              'lexicon' => 'pdotools:properties',
              'area' => '',
              'desc_trans' => 'Массив дополнительных параметров выборки, закодированный в JSON.',
              'area_trans' => '',
            ),
            'showUnpublished' => 
            array (
              'name' => 'showUnpublished',
              'desc' => 'pdotools_prop_showUnpublished',
              'type' => 'combo-boolean',
              'options' => 
              array (
              ),
              'value' => false,
              'lexicon' => 'pdotools:properties',
              'area' => '',
              'desc_trans' => 'Показывать неопубликованные ресурсы.',
              'area_trans' => '',
            ),
            'showDeleted' => 
            array (
              'name' => 'showDeleted',
              'desc' => 'pdotools_prop_showDeleted',
              'type' => 'combo-boolean',
              'options' => 
              array (
              ),
              'value' => false,
              'lexicon' => 'pdotools:properties',
              'area' => '',
              'desc_trans' => 'Показывать удалённые ресурсы.',
              'area_trans' => '',
            ),
            'showHidden' => 
            array (
              'name' => 'showHidden',
              'desc' => 'pdotools_prop_showHidden',
              'type' => 'combo-boolean',
              'options' => 
              array (
              ),
              'value' => true,
              'lexicon' => 'pdotools:properties',
              'area' => '',
              'desc_trans' => 'Показывать ресурсы, скрытые в меню.',
              'area_trans' => '',
            ),
            'hideContainers' => 
            array (
              'name' => 'hideContainers',
              'desc' => 'pdotools_prop_hideContainers',
              'type' => 'combo-boolean',
              'options' => 
              array (
              ),
              'value' => false,
              'lexicon' => 'pdotools:properties',
              'area' => '',
              'desc_trans' => 'Отключает вывод контейнеров, то есть, ресурсов с isfolder = 1.',
              'area_trans' => '',
            ),
            'context' => 
            array (
              'name' => 'context',
              'desc' => 'pdotools_prop_context',
              'type' => 'textfield',
              'options' => 
              array (
              ),
              'value' => '',
              'lexicon' => 'pdotools:properties',
              'area' => '',
              'desc_trans' => 'Ограничение выборки по контексту ресурсов.',
              'area_trans' => '',
            ),
            'idx' => 
            array (
              'name' => 'idx',
              'desc' => 'pdotools_prop_idx',
              'type' => 'numberfield',
              'options' => 
              array (
              ),
              'value' => '',
              'lexicon' => 'pdotools:properties',
              'area' => '',
              'desc_trans' => 'Вы можете указать стартовый номер итерации вывода результатов.',
              'area_trans' => '',
            ),
            'first' => 
            array (
              'name' => 'first',
              'desc' => 'pdotools_prop_first',
              'type' => 'numberfield',
              'options' => 
              array (
              ),
              'value' => '',
              'lexicon' => 'pdotools:properties',
              'area' => '',
              'desc_trans' => 'Номер первой итерации вывода результатов.',
              'area_trans' => '',
            ),
            'last' => 
            array (
              'name' => 'last',
              'desc' => 'pdotools_prop_last',
              'type' => 'numberfield',
              'options' => 
              array (
              ),
              'value' => '',
              'lexicon' => 'pdotools:properties',
              'area' => '',
              'desc_trans' => 'Номер последней итерации вывода результатов. По умолчанию он рассчитается автоматически, по формуле (total + first - 1).',
              'area_trans' => '',
            ),
            'tplFirst' => 
            array (
              'name' => 'tplFirst',
              'desc' => 'pdotools_prop_tplFirst',
              'type' => 'textfield',
              'options' => 
              array (
              ),
              'value' => '',
              'lexicon' => 'pdotools:properties',
              'area' => '',
              'desc_trans' => 'Имя чанка для первого ресурса в результатах.',
              'area_trans' => '',
            ),
            'tplLast' => 
            array (
              'name' => 'tplLast',
              'desc' => 'pdotools_prop_tplLast',
              'type' => 'textfield',
              'options' => 
              array (
              ),
              'value' => '',
              'lexicon' => 'pdotools:properties',
              'area' => '',
              'desc_trans' => 'Имя чанка для последнего ресурса в результатах.',
              'area_trans' => '',
            ),
            'tplOdd' => 
            array (
              'name' => 'tplOdd',
              'desc' => 'pdotools_prop_tplOdd',
              'type' => 'textfield',
              'options' => 
              array (
              ),
              'value' => '',
              'lexicon' => 'pdotools:properties',
              'area' => '',
              'desc_trans' => 'Имя чанка для каждого чётного ресурса (хоть "odd" значит "нечётный", работает для чётных ресурсов).',
              'area_trans' => '',
            ),
            'tplWrapper' => 
            array (
              'name' => 'tplWrapper',
              'desc' => 'pdotools_prop_tplWrapper',
              'type' => 'textfield',
              'options' => 
              array (
              ),
              'value' => '',
              'lexicon' => 'pdotools:properties',
              'area' => '',
              'desc_trans' => 'Чанк-обёртка, для заворачивания всех результатов. Понимает один плейсхолдер: [[+output]]. Не работает вместе с параметром "toSeparatePlaceholders".',
              'area_trans' => '',
            ),
            'wrapIfEmpty' => 
            array (
              'name' => 'wrapIfEmpty',
              'desc' => 'pdotools_prop_wrapIfEmpty',
              'type' => 'combo-boolean',
              'options' => 
              array (
              ),
              'value' => false,
              'lexicon' => 'pdotools:properties',
              'area' => '',
              'desc_trans' => 'Включает вывод чанка-обертки (tplWrapper) даже если результатов нет.',
              'area_trans' => '',
            ),
            'totalVar' => 
            array (
              'name' => 'totalVar',
              'desc' => 'pdotools_prop_totalVar',
              'type' => 'textfield',
              'options' => 
              array (
              ),
              'value' => 'total',
              'lexicon' => 'pdotools:properties',
              'area' => '',
              'desc_trans' => 'Имя плейсхолдера для сохранения общего количества результатов.',
              'area_trans' => '',
            ),
            'resources' => 
            array (
              'name' => 'resources',
              'desc' => 'pdotools_prop_resources',
              'type' => 'textfield',
              'options' => 
              array (
              ),
              'value' => '',
              'lexicon' => 'pdotools:properties',
              'area' => '',
              'desc_trans' => 'Список ресурсов, через запятую, для вывода в результатах. Если id ресурса начинается с дефиса, этот ресурс исключается из выборки.',
              'area_trans' => '',
            ),
            'tplCondition' => 
            array (
              'name' => 'tplCondition',
              'desc' => 'pdotools_prop_tplCondition',
              'type' => 'textfield',
              'options' => 
              array (
              ),
              'value' => '',
              'lexicon' => 'pdotools:properties',
              'area' => '',
              'desc_trans' => 'Поле ресурса, из которого будет получено значение для выбора чанка по условию в "conditionalTpls".',
              'area_trans' => '',
            ),
            'tplOperator' => 
            array (
              'name' => 'tplOperator',
              'desc' => 'pdotools_prop_tplOperator',
              'type' => 'list',
              'options' => 
              array (
                0 => 
                array (
                  'text' => 'is equal to',
                  'value' => '==',
                  'name' => 'is equal to',
                ),
                1 => 
                array (
                  'text' => 'is not equal to',
                  'value' => '!=',
                  'name' => 'is not equal to',
                ),
                2 => 
                array (
                  'text' => 'less than',
                  'value' => '<',
                  'name' => 'less than',
                ),
                3 => 
                array (
                  'text' => 'less than or equal to',
                  'value' => '<=',
                  'name' => 'less than or equal to',
                ),
                4 => 
                array (
                  'text' => 'greater than or equal to',
                  'value' => '>=',
                  'name' => 'greater than or equal to',
                ),
                5 => 
                array (
                  'text' => 'is empty',
                  'value' => 'empty',
                  'name' => 'is empty',
                ),
                6 => 
                array (
                  'text' => 'is not empty',
                  'value' => '!empty',
                  'name' => 'is not empty',
                ),
                7 => 
                array (
                  'text' => 'is null',
                  'value' => 'null',
                  'name' => 'is null',
                ),
                8 => 
                array (
                  'text' => 'is in array',
                  'value' => 'inarray',
                  'name' => 'is in array',
                ),
                9 => 
                array (
                  'text' => 'is between',
                  'value' => 'between',
                  'name' => 'is between',
                ),
              ),
              'value' => '==',
              'lexicon' => 'pdotools:properties',
              'area' => '',
              'desc_trans' => 'Необязательный оператор для проведения сравнения поля ресурса в "tplCondition" с массивом значений и чанков в "conditionalTpls".',
              'area_trans' => '',
            ),
            'conditionalTpls' => 
            array (
              'name' => 'conditionalTpls',
              'desc' => 'pdotools_prop_conditionalTpls',
              'type' => 'textarea',
              'options' => 
              array (
              ),
              'value' => '',
              'lexicon' => 'pdotools:properties',
              'area' => '',
              'desc_trans' => 'JSON строка с массивом, у которого в ключах указано то, с чем будет сравниваться "tplCondition", а в значениях - чанки, которые будут использованы для вывода, если сравнение будет успешно. Оператор сравнения указывается в "tplOperator". Для операторов типа "isempty" можно использовать массив без ключей.',
              'area_trans' => '',
            ),
            'select' => 
            array (
              'name' => 'select',
              'desc' => 'pdotools_prop_select',
              'type' => 'textarea',
              'options' => 
              array (
              ),
              'value' => '',
              'lexicon' => 'pdotools:properties',
              'area' => '',
              'desc_trans' => 'Список полей для выборки, через запятую. Можно указывать JSON строку с массивом, например {"modResource":"id,pagetitle,content"}.',
              'area_trans' => '',
            ),
            'toSeparatePlaceholders' => 
            array (
              'name' => 'toSeparatePlaceholders',
              'desc' => 'pdotools_prop_toSeparatePlaceholders',
              'type' => 'textfield',
              'options' => 
              array (
              ),
              'value' => '',
              'lexicon' => 'pdotools:properties',
              'area' => '',
              'desc_trans' => 'Если вы укажете слово в этом параметре, то ВСЕ результаты будут выставлены в разные плейсхолдеры, начинающиеся с этого слова и заканчивающиеся порядковым номером строки, от нуля. Например, указав в параметре "myPl", вы получите плейсхолдеры [[+myPl0]], [[+myPl1]] и т.д.',
              'area_trans' => '',
            ),
            'loadModels' => 
            array (
              'name' => 'loadModels',
              'desc' => 'pdotools_prop_loadModels',
              'type' => 'textfield',
              'options' => 
              array (
              ),
              'value' => '',
              'lexicon' => 'pdotools:properties',
              'area' => '',
              'desc_trans' => 'Список компонентов, через запятую, чьи модели нужно загрузить для построения запроса. Например: "&loadModels=`ms2gallery,msearch2`".',
              'area_trans' => '',
            ),
            'scheme' => 
            array (
              'name' => 'scheme',
              'desc' => 'pdotools_prop_scheme',
              'type' => 'list',
              'options' => 
              array (
                0 => 
                array (
                  'value' => '',
                  'text' => 'System default',
                  'name' => 'System default',
                ),
                1 => 
                array (
                  'value' => -1,
                  'text' => '-1 (relative to site_url)',
                  'name' => '-1 (relative to site_url)',
                ),
                2 => 
                array (
                  'value' => 'full',
                  'text' => 'full (absolute, prepended with site_url)',
                  'name' => 'full (absolute, prepended with site_url)',
                ),
                3 => 
                array (
                  'value' => 'abs',
                  'text' => 'abs (absolute, prepended with base_url)',
                  'name' => 'abs (absolute, prepended with base_url)',
                ),
                4 => 
                array (
                  'value' => 'http',
                  'text' => 'http (absolute, forced to http scheme)',
                  'name' => 'http (absolute, forced to http scheme)',
                ),
                5 => 
                array (
                  'value' => 'https',
                  'text' => 'https (absolute, forced to https scheme)',
                  'name' => 'https (absolute, forced to https scheme)',
                ),
              ),
              'value' => '',
              'lexicon' => 'pdotools:properties',
              'area' => '',
              'desc_trans' => 'Схема формирования ссылок: "uri" для подстановки поля uri документа (очень быстро) или параметр для modX::makeUrl().',
              'area_trans' => '',
            ),
            'useWeblinkUrl' => 
            array (
              'name' => 'useWeblinkUrl',
              'desc' => 'pdotools_prop_useWeblinkUrl',
              'type' => 'combo-boolean',
              'options' => 
              array (
              ),
              'value' => false,
              'lexicon' => 'pdotools:properties',
              'area' => '',
              'desc_trans' => 'Генерировать ссылку с учетом класса ресурса.',
              'area_trans' => '',
            ),
          ),
          'moduleguid' => '',
          'static' => false,
          'static_file' => 'core/components/pdotools/elements/snippets/snippet.pdoresources.php',
          'content' => '/** @var array $scriptProperties */
/** @var modX $modx */
if (isset($parents) && $parents === \'\') {
    $scriptProperties[\'parents\'] = $modx->resource->id;
}
if (!empty($returnIds)) {
    $scriptProperties[\'return\'] = $return = \'ids\';
} elseif (!isset($return)) {
    $scriptProperties[\'return\'] = $return = \'chunks\';
}

// Adding extra parameters into special place so we can put them in a results
/** @var modSnippet $snippet */
$additionalPlaceholders = $properties = [];
if (isset($this) && $this instanceof modSnippet && $this->get(\'properties\')) {
    $properties = $this->get(\'properties\');
}
elseif ($snippet = $modx->getObject(\'modSnippet\', [\'name\' => \'pdoResources\'])) {
    $properties = $snippet->get(\'properties\');
}
if (!empty($properties)) {
    foreach ($scriptProperties as $k => $v) {
        if (!isset($properties[$k])) {
            $additionalPlaceholders[$k] = $v;
        }
    }
}
$scriptProperties[\'additionalPlaceholders\'] = $additionalPlaceholders;

/** @var pdoFetch $pdoFetch */
$fqn = $modx->getOption(\'pdoFetch.class\', null, \'pdotools.pdofetch\', true);
$path = $modx->getOption(\'pdofetch_class_path\', null, MODX_CORE_PATH . \'components/pdotools/model/\', true);
if ($pdoClass = $modx->loadClass($fqn, $path, false, true)) {
    $pdoFetch = new $pdoClass($modx, $scriptProperties);
} else {
    return false;
}
$pdoFetch->addTime(\'pdoTools loaded\');
$output = $pdoFetch->run();

$log = \'\';
if ($modx->user->hasSessionContext(\'mgr\') && !empty($showLog)) {
    $log .= \'<pre class="pdoResourcesLog">\' . print_r($pdoFetch->getTime(), 1) . \'</pre>\';
}

// Return output
if (!empty($returnIds)) {
    $modx->setPlaceholder(\'pdoResources.log\', $log);
    if (!empty($toPlaceholder)) {
        $modx->setPlaceholder($toPlaceholder, $output);
    } else {
        return $output;
    }
} elseif ($return === \'data\') {
    return $output;
} elseif (!empty($toSeparatePlaceholders)) {
    $output[\'log\'] = $log;
    $modx->setPlaceholders($output, $toSeparatePlaceholders);
} else {
    $output .= $log;

    if (!empty($tplWrapper) && (!empty($wrapIfEmpty) || !empty($output))) {
        $output = $pdoFetch->getChunk($tplWrapper, array_merge($additionalPlaceholders, [\'output\' => $output]),
            $pdoFetch->config[\'fastMode\']);
    }

    if (!empty($toPlaceholder)) {
        $modx->setPlaceholder($toPlaceholder, $output);
    } else {
        return $output;
    }
}',
        ),
        'policies' => 
        array (
        ),
        'source' => 
        array (
          'id' => 1,
          'name' => 'Filesystem',
          'description' => '',
          'class_key' => 'sources.modFileMediaSource',
          'properties' => 
          array (
          ),
          'is_stream' => true,
        ),
      ),
    ),
    'modTemplateVar' => 
    array (
    ),
  ),
);