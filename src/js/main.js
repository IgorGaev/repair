var btn = document.querySelector('#button');
var modal = document.querySelector('#modal');
var close = document.querySelector('#close');

function removeModalActive () {

  modal.classList.remove('modal_active');
};

function addModalActive () {

  modal.classList.add('modal_active');
  setTimeout('removeModalActive()', 5000);
  btn.blur();

};

btn.addEventListener('click', addModalActive);
close.addEventListener('click', removeModalActive);

