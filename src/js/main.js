$(function () {

  /* Показывать карту только когда докрутили до нее*/
  var brif = $('.brif');
  // var brifTop = brif.offset().top;
  
  $(window).bind('scroll', function () {
    if ($(window).scrollTop() > 2800) {
      $('#map').html('<iframe src = "https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2251.2494020712556!2d37.328022315824185!3d55.64987098052598!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x46b551900ace55f5%3A0x75b85b064703fe60!2z0YPQuy4g0JvQtdC90LjQvdCwLCA3LCDQnNC40YfRg9GA0LjQvdC10YYsINCc0L7RgdC60L7QstGB0LrQsNGPINC-0LHQuy4sIDExOTYzNA!5e0!3m2!1sru!2sru!4v1573541192171!5m2!1sru!2sru" width = "100%" height = "640" frameborder = "0" style = "border:0;" allowfullscreen = "" ></iframe>');
      console.log("Карта заггурзилась");
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
    $("body").addClass("modal-open");
  };

  function hideModal () {
    modal.classList.remove('modal_active');
    $("body").removeClass("modal-open");
  };
  function hideModalSuccess () {
    modalSuccess.classList.remove('modal_active');
    $("body").removeClass("modal-open");
    
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
