$(function () {

  var btn = $('#button');
  var close = $('#close');
  var modal = $('#modal');
  var timer;

  $(btn).click(function () {
    modal.addClass('modal_active');
    // timerId = setTimeout(() => modal.removeClass('modal_active'), 5000);
    // btn.blur();
  })

  $(close).click(function () {
    modal.removeClass('modal_active');
    clearTimeout(timerId);
  })  
  
});