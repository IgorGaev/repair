$(function () {
  var btn = document.querySelector('#button');
  var modal = document.querySelector('#modal');
  var modalSuccess = document.querySelector('#modal-success');
  var close = document.querySelector('#close');

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
  close.addEventListener('click', hideModalSuccess);


  /* Скрипт AJAX */

  // Установим обработчик отправки формы Submit, элементу с идентификатором offer-form
  $('#offer-form').on('submit', function (event) {
    event.preventDefault(); // останавливаем собитие, прерываем

    $.ajax({
      type: "POST",
      url: "mail.php",
      data: $(this).serialize(), // склеиваем все данные в одну строчку
      success: function (response) {
        console.log('Прибыли данные:' + response); // ответ в случае успеха    
        $('#offer-form')[0].reset(); // сброс формы
        modalSuccess.classList.add('modal_active');
        // $('.offer-form__response').text(response); //выводим ссобщение ниже кнопки
      },
      error: function (jqXHR, textStatus, errorThrown) {
        console.error(jqXHR); // ответ в случае ошибки
      }
    });
  });

  $('#modal-form').on('submit', function (event) {
    event.preventDefault(); // останавливаем собитие, прерываем

    $.ajax({
      type: "POST",
      url: "mail.php",
      data: $(this).serialize(), // склеиваем все данные в одну строчку
      success: function (response) {
        console.log('Прибыли данные:' + response); // ответ в случае успеха    
        $('#modal-form')[0].reset(); // сброс формы
        modal.classList.remove('modal_active'); //закрываем модальную форму
        modalSuccess.classList.add('modal_active'); //выводим модальное подтверждение окно
        // $('.offer-form__response').text(response); //выводим ссобщение ниже кнопки
      },
      error: function (jqXHR, textStatus, errorThrown) {
        console.error(jqXHR); // ответ в случае ошибки
      }
    });
  });
  $('#brif-form').on('submit', function (event) {
    event.preventDefault(); // останавливаем собитие, прерываем

    $.ajax({
      type: "POST",
      url: "mail.php",
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
