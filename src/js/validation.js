$(document).ready(function () {

  $(".phone").mask("8 (999) 999-99-99");

  $('#offer-form').validate({
    errorClass: "invalid",
    rules: {
      username: {
        required: true,
        minlength: 2,
        maxlength: 15
      },
      phone: {
        required: true,
      }
    },
    messages: {
      username: {
        required: "Заполните поле",
        minlength: "Введите не менее 2 символов",
        maxlength: "Введите не более 15 символов"
      },
      phone: "Введите номер телефона"
    }
  })

  $('#brif-form').validate({
    errorClass: "invalid",
    rules: {
      username: {
        required: true,
        minlength: 2,
        maxlength: 15
      },
      phone: {
        required: true,
      },
      email: {
        required: true,
        email: true
      }
    },
    messages: {
      username: {
        required: "Заполните поле",
        minlength: "Введите не менее 2 символов",
        maxlength: "Введите не более 15 символов"
      },
      phone: "Введите номер телефона",
      email: {
        required: "Заполните поле",
        email: "Введите корректный email"
      }
    }
  })

  $('#modal-form').validate({
    errorClass: "invalid",
    rules: {
      username: {
        required: true,
        minlength: 2,
        maxlength: 15
      },
      phone: {
        required: true,
      }
    },
    messages: {
      username: {
        required: "Заполните поле",
        minlength: "Введите не менее 2 символов",
        maxlength: "Введите не более 15 символов"
      },
      phone: "Введите номер телефона"
    }
  })
})