<!DOCTYPE html>
<html lang="ru">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">

  <title>Сайт ремонт квартир</title>

  <link rel="stylesheet" href="css/normalize.css">
  <link rel="stylesheet" href="css/animate.css">
  <link rel="stylesheet" href="css/slick.css">
  <link rel="stylesheet" href="css/style.css">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css">
</head>

<body>
  <nav class="navbar">
    <div class="container">
      <div class="navbar-block">
        <div class="navbar__logo wow flipInX" data-wow-delay="1s">
          <img src="img/nav_logo.png" alt="логотип">
        </div>
        <!-- /.navbar__logo -->
        <div class="navbar__info">
          <div class="navbar__contacts">
            <span class="navbar__address">Калуга, Москва, МО</span>
            <a class="navbar__phone wow heartBeat" data-wow-delay="2s" href="tel:+7(495)42-251-31">+7 (495)
              42-251-31</a>
          </div>
          <!-- /.navbar__contacts -->
          <button class="button navbar__button" id="button">
            Перезвоните мне
          </button>
        </div>
        <!-- /.navbar__info -->
      </div>
      <!-- /.navbar-block -->
    </div>
    <!-- /.container -->
  </nav>
  <!-- /.navbar -->

  <main>
    <section class="hero">
      <div class="container">
        <div class="hero-block">
          <div class="hero-text">
            <h1 class="hero-text__title">Внутренняя отделка
              помещений "под&nbsp;ключ"
            </h1>
            <span class="hero-text__subtitle">с гарантией качества, прописанной в договоре
            </span>
            <ul class="hero-list">
              <li class="hero-list__item">
                <div class="hero-list__icon"><img src="img/hero/clock.png" alt="Иконка"></div>
                <span class="hero-list__text">Точно соблюдаем сроки
                </span>
              </li>
              <li class="hero-list__item">
                <div class="hero-list__icon"><img src="img/hero/calculator.png" alt="Иконка"></div>
                <span class="hero-list__text">Рассчитаем смету на работы
                  и&nbsp;материалы в день обращения
                </span>
              </li>
              <li class="hero-list__item">
                <div class="hero-list__icon"><img src="img/hero/paint-board.png" alt="Иконка"></div>
                <span class="hero-list__text">Предложим более 100 вариантов
                  исполнения дизайна Вашего жилья
                </span>
              </li>
            </ul>
          </div>
          <!-- /.hero-text -->
          <div class="hero-image wow fadeInRight">
            <img src="img/hero/hero_picture.png" alt="Планировка комнаты">
          </div>
          <!-- /.hero-image -->
        </div>
        <!-- /.hero-block -->
      </div>
      <!-- /.container -->
    </section>
    <!-- /.hero -->

    <section class="offer">
      <div class="container">
        <div class="offer-block ">
          <h2 class="offer__title">
            Мы бесплатно разработаем дизайн-проект Вашего жилья и реализуем его!
          </h2>
          <form action="mail.php" method="POST" id="offer-form" class="offer-form">
            <span class="offer-form__title">
              Оставьте заявку на разработку бесплатного дизайн-проекта!
            </span>
            <div class="offer-form__inputs">
              <div class="input-wrap offer-form__input">
                <input name="username" type="text" class="input" placeholder="Ваше имя" required>
              </div>
              <div class="input-wrap offer-form__input">
                <input name="phone" type="tel" class="phone input" placeholder="Ваш телефон" required>
              </div>
            </div>
            <button class="button offer-form__button wow tada">
              Получить бесплатный дизайн-проект
            </button>
            <div class="offer-form__title offer-form__response "></div>
          </form>
          <!-- /.offer-form -->
          <div class="offer-info">
            <div class="offer-info__item">
              <p class="offer-info__text">
                Наш менеджер перезвонит&nbsp;Вам в течение 60 секунд
              </p>
            </div>
            <div class="offer-info__item">
              <p class="offer-info__text">
                или перезвоните нам сами
                <a class="offer-info__phone" href="tel:+7(495)42-251-31">+7&nbsp;(495) 42-251-31</a>
              </p>
            </div>
          </div>
        </div>
        <!-- /.offer-block -->
      </div>
      <!-- /.container -->
    </section>
    <!-- /.offer -->

    <section class="section portfolio">
      <div class="container">
        <h2 class="portfolio__title section-title">
          Работая с 2007 года,<br> мы сделали более 500 ремонтов в квартирах и&nbsp;домах
        </h2>
        <div class="portfolio-slider wow fadeInUp">
          <div class="slider-item"><img class="portfolio__image" src="img/portfolio/portfolio_img_1.jpg" alt=""></div>
          <div class="slider-item"><img class="portfolio__image" src="img/portfolio/portfolio_img_2.jpg" alt=""></div>
          <div class="slider-item"><img class="portfolio__image" src="img/portfolio/portfolio_img_3.jpg" alt=""></div>
          <div class="slider-item"><img class="portfolio__image" src="img/portfolio/portfolio_img_1.jpg" alt=""></div>
          <div class="slider-item"><img class="portfolio__image" src="img/portfolio/portfolio_img_2.jpg" alt=""></div>
          <div class="slider-item"><img class="portfolio__image" src="img/portfolio/portfolio_img_3.jpg" alt=""></div>
        </div>
        <div class="arrows portfolio__arrows">
          <div class="arrow arrow-left"><img src="img/portfolio/left-arrow.png" alt=""></div>
          <div class="arrow arrow-right"><img src="img/portfolio/right-arrow.png" alt=""></div>
        </div>
      </div>
    </section>
    <!-- /.section portfolio -->

    <section class="section prices">
      <div class="container">
        <div class="prices-block">
          <h2 class="section-title prices__title">У нас очень гибкая система скидок на комплексные работы!</h2>
          <span class="section-subtitle prices__subtitle">Прайс на наши услуги</span>
          <div class="prices-cards">
            <a class="prices-card wow fadeInUp" href="#" data-wow-duration="0.2s">
              <div class="prices-card__image"><img src="img/prices/livingroom.png" alt=""></div>
              <span class="prices-card__text">Ремонт ванных комнат и с/у</span>
              <span class="prices-card__link">Узнать цены</span>
            </a>
            <a href="#" class="prices-card wow fadeInUp" data-wow-duration="0.4s">
              <div class="prices-card__image"><img src="img/prices/bathroom.png" alt=""></div>
              <span class="prices-card__text">Ремонт комнат и квартир</span>
              <span class="prices-card__link">Узнать цены</span>
            </a>
            <a href="#" class="prices-card wow fadeInUp" data-wow-duration="0.6s">
              <div class="prices-card__image"><img src="img/prices/office.png" alt=""></div>
              <span class="prices-card__text">Отделка офисных помещений</span>
              <span class="prices-card__link">Узнать цены</span>
            </a>
            <a href="#" class="prices-card wow fadeInUp" data-wow-duration="0.8s">
              <div class="prices-card__image"><img src="img/prices/mansarda.png" alt=""></div>
              <span class="prices-card__text">Ремонт в новостройках</span>
              <span class="prices-card__link">Узнать цены</span>
            </a>
            <a href="#" class="prices-card wow fadeInUp" data-wow-duration="1s">
              <div class="prices-card__image"><img src="img/prices/kitchen.png" alt=""></div>
              <span class="prices-card__text">Ремонт кухонь</span>
              <span class="prices-card__link">Узнать цены</span>
            </a>
            <a href="#" class="prices-card wow fadeInUp" data-wow-duration="1.2s">
              <div class="prices-card__image"><img src="img/prices/novostroi.png" alt=""></div>
              <span class="prices-card__text">Ремонт дач и коттеджей</span>
              <span class="prices-card__link">Узнать цены</span>
            </a>
          </div>
          <!-- /.cards -->
        </div>
        <!-- /.prices-block -->
      </div>
      <!-- /.container -->
    </section>
    <!-- /.section prices -->

    <section class="section steps">
      <div class="container">
        <h2 class="section-title steps__title">Наши специалисты готовы выехать на замер в&nbsp;любое удобное для Вас
          время</h2>
        <span class="section-subtitle steps__subtitle">5 шагов до ремонта</span>
        <div class="steps-block">
          <div class="step">
            <div class="step__image"><img src="img/steps/woman-with-headset.png" alt=""></div>
            <p class="step__text">Вы звоните нам или&nbsp;оставляете заявку</p>
          </div>
          <div class="step">
            <div class="step__image"><img src="img/steps/wall-clock.png" alt=""></div>
            <p class="step__text">Согласуем удобное для&nbsp;Вас время выезда специалиста на замер</p>
          </div>
          <div class="step">
            <div class="step__image"><img src="img/steps/money.png" alt=""></div>
            <p class="step__text">Рассчитываем смету согласовываем<br>с&nbsp;Вами</p>
          </div>
          <div class="step">
            <div class="step__image"><img src="img/steps/list.png" alt=""></div>
            <p class="step__text">Подписываем договор закупаем материал по&nbsp;оптовым ценам</p>
          </div>
          <div class="step">
            <div class="step__image"><img src="img/steps/calendar-clock.png" alt=""></div>
            <p class="step__text">Выполняем ремонт в&nbsp;указанные сроки</p>
          </div>
        </div>
        <!-- /.steps-block -->
      </div>
      <!-- /.container -->
    </section>
    <!-- /.section steps -->

    <section class="section brif">
      <div class="container">
        <div class="brif-block">
          <div class="interview brif__interview">
            <h3 class="interview__title">Мы можем озвучить Вам примерную стоимость работы и материалов по
              телефону
            </h3>
            <span class="interview__subtitle">Для этого нужно ответить на 4 вопроса:</span>
            <ul class="interview-list">
              <li class="interview-list__item">
                <span class="interview-list__counter">1</span>
                <span class="interview-list__text">Какова площадь помещения?</span>
              </li>
              <li class="interview-list__item">
                <span class="interview-list__counter">2</span>
                <span class="interview-list__text">У Вас новостройка или вторичное жилье?</span>
              </li>
              <li class="interview-list__item">
                <span class="interview-list__counter">3</span>
                <span class="interview-list__text">Где находится помещение, в котором будет
                  производиться ремонт?</span>
              </li>
              <li class="interview-list__item">
                <span class="interview-list__counter">4</span>
                <span class="interview-list__text">Назначение помещения?</span>
              </li>
            </ul>
          </div>
          <!-- /.interview brif__interview -->
          <div class="form brif__form">
            <h3 class="form__title">Оставьте заявку на бесплатный расчет ремонта по телефону</h3>
            <span class="form__subtitle">Для этого заполните форму ниже</span>
            <form id="brif-form" action="mail.php" method="POST">
              <div class="input-wrap brif__input">
                <input name="username" type="text" class="input" placeholder="Ваше имя:">
              </div>
              <div class="input-wrap brif__input">
                <input name="phone" type="tel" class="phone input" placeholder="Ваш телефон:">
              </div>
              <div class="input-wrap brif__input">
                <input name="email" type="email" class="input" placeholder="Email:">
              </div>
              <button class="button brif__button">Рассчитать стоимость</button>
              <span class="form__describtion">Мы перезвоним Вам в течение 60 секунд</span>
            </form>

          </div>
          <!-- /.form brif__form -->
        </div>
        <!-- /.brif-block -->
      </div>
      <!-- /.container -->
    </section>
    <!-- /.section brif -->

  </main>

  <footer class="footer">
    <div class="map" id="map">
      <script type="text/javascript" charset="utf-8" async
        src="https://api-maps.yandex.ru/services/constructor/1.0/js/?um=constructor%3A1aaa48195fe2b0df6a09d65849e891e69b687fafc4feb2deffa76a7b1fe3f37a&amp;width=100%25&amp;height=640&amp;lang=ru_RU&amp;scroll=false">
      </script>
    </div>
    <div class="container">
      <div class="contacts-block">
        <div class="contacts">
          <h3 class="contacts__title"> Приезжайте к нам в гости! Проконсультируем Вас по&nbsp;всем вопросам ремонта</h3>
          <ul class="contacts-list">
            <li class="contacts-list__item">
              <div class="contacts-list__icon">
                <img src="img/footer/placeholder.png" alt="">
              </div>
              <span class="contacts-list__text">г. Москва<br><b>ул. Ленина, д. 10, корпус 2, оф.&nbsp;308</b></span>
            </li>
            <li class="contacts-list__item">
              <div class="contacts-list__icon">
                <img src="img/footer/clock.png" alt="">
              </div>
              <span class="contacts-list__text">Режим работы:<br> <b>с 9:00 до 18:00</b></span>
            </li>
            <li class="contacts-list__item">
              <div class="contacts-list__icon">
                <img src="img/footer/phone.png" alt="">
              </div>
              <span class="contacts-list__text">Телефон:<br><b><a href="tel:+7(495)42-251-31">+ 7 (495)42-251-31</a></b>
              </span>
            </li>
          </ul>
        </div>
      </div>
    </div>
  </footer>

  <div class="modal" id="modal-success">
    <div class="modal-dialog">
      <button class="modal-dialog__close" id="close">&times;</button>
      <h2 class="modal-dialog__title">
        Спасибо за заявку, скоро мы вам перезвоним.
      </h2>
    </div>
  </div>


  <!-- Модальное окно -->
  <div class="modal" id="modal">
    <div class="modal-dialog">
      <button class="modal-dialog__close" id="close">&times;</button>
      <h2 class="modal-dialog__title">
        Узнайте точную стоимость ремонта по телефону!
      </h2>
      <form id="modal-form" action="mail.php" method="POST" class="modal-form">
        <span class="modal-form__subtitle">
          Заполните поля ниже - мы свяжемся с Вами
        </span>
        <div class="modal-form__inputs">
          <div class="modal-form__input">
            <input name="username" type="text" class="input" placeholder="Ваше имя">
          </div>
          <div class="modal-form__input">
            <input name="phone" type="tel" class="phone input" placeholder="Ваш телефон">
          </div>
        </div>
        <button class="button modal-form__button">
          Узнать стоимость
        </button>
      </form>
      <!-- /.modal-form -->
      <div class="modal-info">
        <p class="modal-info__text">
          Или Вы можете перезвонить нам сами по телефону:
        </p>
        <a class="modal-info__phone" href="tel:+7(495)42-251-31">+7&nbsp;(495) 42-251-31</a>
      </div>
    </div>
    <!-- /.modal-dialog -->
  </div>
  <!-- /.modal -->

  <!-- Кнопка ВВЕРХ -->
  <a id="button-up"></a>

  <!-- <script src="js/main.js"></script> -->

  <script src="https://code.jquery.com/jquery-3.4.1.min.js"
    integrity="sha256-CSXorXvZcTkaix6Yvo6HppcZGetbYMGWSFlBw8HfCJo=" crossorigin="anonymous">
  </script>

  <script src="js/slick.min.js"></script>
  <script src="js/main.js"></script>
  <script src="js/button_up.js"></script>
  <script src="js/slider.js"></script>
  <script src="js/wow.min.js"></script>
  <script src="js/jquery.maskedinput.min.js"></script>
  <script src="js/jquery.validate.min.js"></script>
  <script src="js/validation.js"></script>

  <script>
    new WOW().init();
  </script>

</body>

</html>