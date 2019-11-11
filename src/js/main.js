$(function () {

  /* Показывать карту только когда докрутили до нее*/
  var brif = $('.brif');
  // var brifTop = brif.offset().top;
  
  $(window).bind('scroll', function () {
    if ($(window).scrollTop() > 2800) {
      $('#map').html('<script type="text/javascript" charset="utf-8" async src = "https://api-maps.yandex.ru/services/constructor/1.0/js/?um=constructor%3A1aaa48195fe2b0df6a09d65849e891e69b687fafc4feb2deffa76a7b1fe3f37a&amp;width=100%25&amp;height=640&amp;lang=ru_RU&amp;scroll=false" ></script>');
      console.log("Привет2");
      $(window).unbind('scroll')
    }
  });

  /* Появление и закрытие модального окна */
  var btn = document.querySelector('#button');
  var modal = document.querySelector('#modal');
  var modalSuccess = document.querySelector('#modal-success');
  var close = document.querySelector('#close');
  var closeSuccess = document.querySelector('#close-success');

  function showModal () {  
    modal.classList.add('modal_active');
  };

  function hideModal () {
    modal.classList.remove('modal_active');
  };
  function hideModalSuccess () {
    modalSuccess.classList.remove('modal_active');
  };

  btn.addEventListener('click', showModal);
  close.addEventListener('click', hideModal);
  closeSuccess.addEventListener('click', hideModalSuccess);


  /* Скрипт AJAX */

  // Установим обработчик отправки формы Submit, элементу с идентификатором offer-form
  $('#offer-form').submit(function (event) {

    event.preventDefault(); // останавливаем собитие, прерываем
    var $form = $(this);

    if(! $form.valid()) return false;

    $.ajax({
      type: "POST",
      url: "php/mail.php",
      data: $(this).serialize(), // склеиваем все данные в одну строчку
      success: function (response) {
        console.log('Прибыли данные:' + response); // ответ в случае успеха    
        $('#offer-form')[0].reset(); // сброс формы
        modalSuccess.classList.add('modal_active');
      },
      error: function (jqXHR, textStatus, errorThrown) {
        console.error(jqXHR); // ответ в случае ошибки
      }
    });
  });

  $('#modal-form').submit(function (event) {

    event.preventDefault(); // останавливаем собитие, прерываем
    var $form = $(this);

    if (!$form.valid()) return false;

    $.ajax({
      type: "POST",
      url: "php/mail.php",
      data: $(this).serialize(), // склеиваем все данные в одну строчку
      success: function (response) {
        console.log('Прибыли данные:' + response); // ответ в случае успеха    
        $('#modal-form')[0].reset(); // сброс формы
        modal.classList.remove('modal_active'); //закрываем модальную форму
        modalSuccess.classList.add('modal_active'); //выводим модальное подтверждение окно
      },
      error: function (jqXHR, textStatus, errorThrown) {
        console.error(jqXHR); // ответ в случае ошибки
      }
    });
  });
  
  $('#brif-form').submit(function (event) {

    event.preventDefault(); // останавливаем собитие, прерываем
    var $form = $(this);

    if (!$form.valid()) return false;

    $.ajax({
      type: "POST",
      url: "php/mail.php",
      data: $(this).serialize(), // склеиваем все данные в одну строчку
      success: function (response) {
        console.log('Прибыли данные:' + response); // ответ в случае успеха    
        $('#brif-form')[0].reset(); // сброс формы
        modalSuccess.classList.add('modal_active'); //выводим модальное подтверждение окно
      },
      error: function (jqXHR, textStatus, errorThrown) {
        console.error(jqXHR); // ответ в случае ошибки
      }
    });
  });

  



});
