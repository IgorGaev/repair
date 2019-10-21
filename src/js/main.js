var button = document.querySelector('#button');
var modal = document.querySelector('#modal');
var close = document.querySelector('#close');

var addModalActive = function() {
  modal.classList.add('modal_active');
};
var removeModalActive = function() {
  modal.classList.remove('modal_active');
};

button.addEventListener('click', addModalActive);

close.addEventListener('click', removeModalActive);

