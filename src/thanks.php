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
        <div class="navbar__info">
          <div class="navbar__contacts">
            <span class="navbar__address">Калуга, Москва, МО</span>
            <a class="navbar__phone wow heartBeat" data-wow-delay="2s" href="tel:+7(495)42-251-31">+7 (495)
              42-251-31</a>
          </div>
          <button class="button navbar__button" id="button">
            Перезвоните мне
          </button>
        </div>
      </div>
    </div>
    <!-- /.container -->
  </nav>
  <!-- /.navbar -->

  <main>
    <section class="hero">
      <div class="container">
        <div class="hero-block">
          <div class="hero-text">
            <h1 class="hero-text__title">Спасибо за заявку
            </h1>
            <span class="hero-text__subtitle">мы перезвоним через 15 минут
            </span>
            <span class="hero-text__subtitle"><a  href="index.php">На главную</a></span>
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


  <!-- Модальное окно -->
  <div class="modal" id="modal">
    <div class="modal-dialog">
      <button class="modal-dialog__close" id="close">&times;</button>
      <h2 class="modal-dialog__title">
        Узнайте точную стоимость ремонта по телефону!
      </h2>
      <form id="modal-form" action="#" class="modal-form">
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
  <script src="js/modal.js"></script>
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