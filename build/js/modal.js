
$(function(){var btn=$('#button');var close=$('#close');var modal=$('#modal');var timer;$(btn).click(function(){modal.addClass('modal_active');})
$(close).click(function(){modal.removeClass('modal_active');clearTimeout(timerId);})});