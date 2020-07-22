<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=, initial-scale=1.0">
  <meta name="viewport" content="width=device-width,initial-scale =1.0 , maximum-scale=1.0 , user-scalable = 0">
  <link rel="stylesheet" href="./public/index.css">
  <title>Document</title>
</head>

<body>
  <div class="main">
    <?php
    $classNameYouDefined = "whitelogodescr";
    include 'menu.php';
    ?>
    <div class="container">
      <div class="main-wrapper">
        <div class="text">
          <p class="title title_white title_main ">Цифровое</p>
          <p class="title title_white title_main ">веб-агентство</p>

          <div class="descr descr_white descr_main">
            Творческая команда, предоставляющая качественный сервис и эффективные решения для вашего проекта
          </div>
          <a href="#" class=" button button_red main_button ">заполнить бриф</a>
        </div>

        <img class="main__picture" src="./public/images/q.png" alt="">

      </div>
    </div>
  </div>

  <div class="cases">
    <div class="container">
      <div class="casestitle title">
        Избранные работы
      </div>
      <div class="casesdescr descr">
        Ознакомьтесь с нашими последними проектами
      </div>
      <div class="casesImages">
        <div class="imagesContainer">
          <div class="images">
            <div class="imageScale">
              <img src="./public/images/roters.png" alt="" class="cases__img">
            </div>
            <div class="imagetext">
              <div class="casessubtitle  ">Rasperry PI</div>
              <div class="casessubdescr descr">Кастомный роутер</div>
            </div>
          </div>
        </div>
        <div class="imagesContainer ">
          <div class="images">
            <img src="./public/images/adelaida.png" alt="" class="cases__img">
            <div class="imagetext">
              <div class="casessubtitle">Университет Аделаиды</div>
              <div class="casessubdescr descr">Сайт для общения студентов</div>
            </div>
          </div>
        </div>

        <div class="imagesContainer ">
          <div class="images">
            <img src="./public/images/taxibg.png" alt="" class="cases__img">
            <div class="imagetext  taxi">
              <div class="casessubtitle ">Objective C</div>
              <div class="casessubdescr descr ">Приложение для такси</div>
            </div>
          </div>
        </div>
        <div class="imagesContainer ">
          <div class="images">
            <img src="./public/images/PushArtist.png" alt="" class="cases__img">
            <div class="imagetext push">
              <div class="casessubtitle ">PushArtist.ru</div>
              <div class="casessubdescr descr ">Социальная сеть</div>
            </div>
          </div>
        </div>
      </div>
      <div class="casesButtonWrapper">
        <a class="button cases_button">СМОТРЕТЬ БОЛЬШЕ РАБОТ</a>
      </div>
    </div>
  </div>



  <div class="advantages">
    <div class="container">
      <div class=" title ">
        Наши преимущества
      </div>
      <div class=" descr">
        Преимущества по которым клиенты выбирают именно нас
      </div>

      <div class="listWrapper">
        <div class="advwrapper">
          <div class="back">
            <div class="wrapperContent">
              <div class="subtitle  adv_subtitle">Высокая Квалификация</div>

              <div class=" field_descr descr ">Наши специалисты постоянно</div>
              <div class=" field_descr descr">развиваются и сдают квалификационные</div>
              <div class=" field_descr descr">тесты в профильных областях</div>
              <a class="field_a  writeMeButton__href">ЗАПОЛНИТЬ БРИФ</a>
            </div>
          </div>
        </div>
        <div class="advwrapper ">
          <div class="back">
            <div class="wrapperContent  ">
              <div class=" subtitle  adv_subtitle">Всегда на Связи</div>

              <div class=" field_descr descr ">Наши менеджеры проектов всегда</div>
              <div class=" field_descr descr">на связи и готовы ответить на ваши</div>
              <div class=" field_descr descr">вопросы</div>
              <a class=" field_a  writeMeButton__href">ЗАПОЛНИТЬ БРИФ</a>
            </div>
          </div>
        </div>
        <div class="advwrapper ">
          <div class="back">
            <div class="wrapperContent ">
              <div class="  subtitle  adv_subtitle">Разумные Цены</div>

              <div class=" field_descr descr">Оценка проекта осуществляется </div>
              <div class=" field_descr descr">только после детального изучения</div>
              <div class=" field_descr descr">желаний клиента</div>
              <a class=" field_a  writeMeButton__href">ЗАПОЛНИТЬ БРИФ</a>
            </div>
          </div>
        </div>
        <div class="advwrapper ">
          <div class="back">
            <div class="wrapperContent ">
              <div class="  subtitle  adv_subtitle">Бизнес Направленность</div>

              <div class="field field_descr descr firts-field">Мы стараемся предоставить </div>
              <div class="field field_descr descr">бизнес-решения, которые помогут вам </div>
              <div class="field field_descr descr">зарабатывать деньги и репутацию</div>
              <a class="field field_a writeMeButton__href">ЗАПОЛНИТЬ БРИФ</a>
            </div>
          </div>
        </div>


        <div class="advwrapper ">
          <div class="back">
            <div class="wrapperContent">
              <div class="subtitle adv_subtitle ">Гибкий Подход</div>
              <div class="field_descr descr ">Для каждой бизнес идеи мы подбираем</div>
              <div class="field_descr descr">индивидуальное, наиболее эффективное</div>
              <div class="field_descr descr">решение</div>
              <a class="field field_a  writeMeButton__href">ЗАПОЛНИТЬ БРИФ</a>
            </div>
          </div>
        </div>
        <div class="advwrapper ">
          <div class="back">
            <div class="wrapperContent  ">
              <div class="  subtitle adv_subtitle">Постоянная Поддержка</div>

              <div class="field field_descr descr firts-field">Мы стараемся обеспечить поддержку </div>
              <div class="field field_descr descr">вашей организации на всех этапах ее </div>
              <div class="field field_descr descr">работы</div>
              <a class="field field_a  writeMeButton__href">ЗАПОЛНИТЬ БРИФ</a>
            </div>
          </div>
        </div>
        <div class="advwrapper ">
          <div class="back">
            <div class="wrapperContent last">
              <div class="  subtitle adv_subtitle">Качественная Работа</div>

              <div class="field field_descr descr firts-field">Наши продукты соответствуют </div>
              <div class="field field_descr descr">международным стандартам, мы </div>
              <div class="field field_descr descr">используем современные технологии</div>
              <a class="field field_a  writeMeButton__href">ЗАПОЛНИТЬ БРИФ</a>
            </div>
          </div>
        </div>
        <div class="advwrapper ">
          <div class="back">
            <div class="wrapperContent last ">
              <div class="  subtitle adv_subtitle">Контроль Сроков</div>

              <div class="field field_descr descr firts-field">Мы своевременно продвигаемся </div>
              <div class="field field_descr descr">по этапам разработки проекта, </div>
              <div class="field field_descr descr">без задержек</div>
              <a class="field field_a writeMeButton__href"> ЗАПОЛНИТЬ БРИФ</a>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>







  <div class="about">
    <div class="container">
      <div class="about__title ">
        ЦИФРОВОЕ АГЕНТСТВО
      </div>
      <div class="about__text">
        Мы работаем во всех направлениях, связанных с веб-технологиями, предоставляем качественный сервис и
        эффективные решения на любом этапе жизненного цикла вашего проекта.
      </div>
    </div>
  </div>
  <div class="do">
    <div class="container">
      <div class="title do_title">
        Наши услуги
      </div>
      <div class="descr do_title">
        Ознакомьтесь с нашими услугами
      </div>
      <div class="do_doElems">
        <div class="doElem">
          <img src="./public/images/compucter.png" alt="" class="elem_img">
          <div class="elemDescr">
            <div class="elem__name">
              Разработка
            </div>
            <div class="list">
              <a href="#" class="list__name">Разработка сайтов</a>
              <div class="list__arrow"></div>
            </div>
            <div class="list">
              <a href="#" class="list__name">Разработка мобильных приложений</a>
              <div class="list__arrow"></div>
            </div>
            <div class="list">
              <a href="#" class="list__name">Разработка скриптов любой сложности</a>
              <div class="list__arrow"></div>

            </div>
            <div class="list">
              <a href="#" class="list__name">CRM решения для бизнеса</a>
              <div class="list__arrow"></div>
            </div>
            <a href="" class="button do_button ">ЗАКАЗАТЬ УСЛУГУ </a>
          </div>
        </div>
        <div class="doElem ">
          <img src="./public/images/mails.png" alt="" class="elem_img">
          <div class="elemDescr">
            <div class="elem__name">
              SEO
            </div>
            <div class="list">
              <a href="#" class="list__name">Продвижение сайтов</a>
              <div class="list__arrow"></div>
            </div>
            <div class="list">
              <a href="#" class="list__name">Контекстная реклама</a>
              <div class="list__arrow"></div>
            </div>
            <div class="list">
              <a href="#" class="list__name">Социальный маркетинг</a>
              <div class="list__arrow"></div>
            </div>
            <a href="#" class="button do_button ">заказать услугу</a>
          </div>
        </div>
      </div>
      <div class="doButtonWrapper">
        <a href="" class="button ">посмотреть все услуги</a>
      </div>
    </div>






    <div class="feedback">

      <div class="title feedBack_title">
        Отзывы наших клиентов
      </div>
      <div class="descr">
        Последние отзывы наших клиентов

      </div>
      <div class="sliderWrapper">
        <div class="footerSlider">
          <div class="group">
            <div class="groupItem">
              <img src="./public/images/avagroup2.png" alt="" class="item__logo">
              <div class="itemMessage">
                <div class="messageText">
                  <div class="Message__name title ">
                    Наталья Смирнова
                  </div>
                  <div class="itemPosition">
                    <span class="positiondescr descr">Креативный директов в</span>
                    <span class="positiondescr descr red">DD агенстве</span>
                  </div>
                  <div class="item_letter descr">
                    Работаем с этой компаней недавно, очень довольны <br> креативным подходом к работе.
                    Все делают в срок.
                  </div>
                </div>
              </div>
            </div>
            <div class="groupItem sec">
              <div class="itemMessage right">
                <div class="messageText secondgroup">
                  <div class="Message__name title">
                    Федр Романов
                  </div>
                  <div class="itemPosition">
                    <span class="positiondescr descr">Менеджер в</span>
                    <span class="positiondescr descr red">IT агенстве Easy</span>
                  </div>
                  <div class="item_letter descr">
                    У ребят высокая квалификация, всегда на связи, и что самое <br> главное, делают все
                    качественно и за разумную цену.
                  </div>
                </div>
              </div>
              <img src="./public/images/avagroup1item2.png" alt="" class="item__logo second_item__logo">
            </div>
          </div>
          <div class="group">
            <div class="groupItem">
              <img src="./public/images/avagroup2.png" alt="" class="item__logo">
              <div class="itemMessage">
                <div class="messageText ">
                  <div class="Message__name title">
                    Наталья Смирнова
                  </div>
                  <div class="itemPosition">
                    <span class="Positiondescr descr">Креативный директов в</span>
                    <span class="positiondescr descr red">DD агенстве</span>
                  </div>
                  <div class="item_letter descr">
                    Работаем с этой компаней недавно, очень довольны <br> креативным подходом к работе.
                    Все делают в срок.
                  </div>
                </div>
              </div>
            </div>
            <div class="groupItem sec">
              <div class="itemMessage right">
                <div class="messageText secondgroup">
                  <div class="Message__name title">
                    Федр Романов
                  </div>
                  <div class="itemPosition">
                    <span class="Positiondescr descr">Менеджер в</span>
                    <span class="positiondescr descr red">IT агенстве Easy</span>
                  </div>
                  <div class="item_letter descr">
                    У ребят высокая квалификация, всегда на связи, и что самое <br> главное, делают все
                    качественно и за разумную цену.
                  </div>
                </div>
              </div>
              <img src="./public/images/avagroup2item2.png" alt="" class="item__logo second_item__logo">
            </div>
          </div>

          <div class="group">
            <div class="groupItem">
              <img src="./public/images/group3item3.png" alt="" class="item__logo">
              <div class="itemMessage">
                <div class="messageText">
                  <div class="Message__name title">
                    Наталья Смирнова
                  </div>
                  <div class="itemPosition">
                    <span class="Positiondescr descr">Креативный директов в</span>
                    <span class="positiondescr descr red">DD агенстве</span>
                  </div>
                  <div class="item_letter descr">
                    Работаем с этой компаней недавно, очень довольны креативным подходом к работе. Все
                    делают в срок.
                  </div>
                </div>
              </div>
            </div>
            <div class="groupItem sec">
              <div class="itemMessage right">
                <div class="messageText secondgroup">
                  <div class="Message__name title">
                    Федр Романов
                  </div>
                  <div class="itemPosition">
                    <span class="Positiondescr descr"> Менеджер в </span>
                    <span class="positiondescr descr red">IT агенстве Easy</span>
                  </div>
                  <div class="item_letter descr">
                    У ребят высокая квалификация, всегда на связи, и что самое <br> главное, делают все
                    качественно и за разумную цену.
                  </div>
                </div>
              </div>
              <img src="./public/images/avagroup2item2.png" alt="" class="item__logo">
            </div>
          </div>
        </div>
      </div>
    </div>


    <div class="new">
      <div class="container">
        <div class="title newtitle">
          Последние события
        </div>
        <div class="descr newdescr">
          Наши мысли и перспективы в области цифровых технологий
        </div>
        <div class="events">
          <div class="event">
            <img class="event__img" src="./public/images/Events1.png" alt="">
            <p class="nameContainer"><span class="event__name">ИННОВАЦИИ В СФЕРЕ IT</span></p>
            <span class="title event__title">Интеграция с различными API</span>
          </div>
          <div class="event">
            <img class="event__img" src="./public/images/Events2.png" alt="">
            <p class="nameContainer nameContainer2 "><span class="event__name">РЕКЛАМНЫЕ РАЗРАБОТКИ</span></p>
            <span class="title event__title">Разработка высоконагруженных </span>
            <span class="title event__title secondrow"> социальных проектов </span>

          </div>
          <div class="event">
            <img class="event__img " src="./public/images/Events3.png" alt="">
            <p class="nameContainer nameContainer2"><span class="event__name">НОВИНКИ В СФЕРЕ ИЛЛЮСТРАЦИЙ</span></p>
            <span class="title event__title anything">Новые коллекции иллюстраций</span>
          </div>
          <div class="event ">
            <img class="event__img" src="./public/images/Events4.png" alt="">
            <p class="nameContainer nameContainer2"><span class="event__name">ТЕНДЕНЦИИ КЛИЕНТОВ</span></p>
            <span class="title event__title">Социальный маркетинг</span>
          </div>
          <div class="newButtonWrapper">
            <a href="#" class="button eventbutton">ПОСМОТРЕТЬ ВСЕ СОБЫТИЯ</a>
          </div>
        </div>
      </div>
      <div class="mainfooter">
        <?php
        include 'footer.php';
        ?>
      </div>
</body>
<script src="./public/js/script.js" type="text/javascript"></script>
<script type="text/javascript" src="./public/js/jquery-3.5.1.min.js"></script>
<script type="text/javascript" src="./public/js/slick/slick.min.js"></script>
<script type="text/javascript" src="./public/js/slider.js"></script>