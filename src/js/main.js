var btn = document.querySelector('#button');
var modal = document.querySelector('#modal');
var close = document.querySelector('#close');
var timerId = 0;

function showModal () {  
  modal.classList.add('modal_active');
  timerId = setTimeout(() => modal.classList.remove('modal_active'), 5000);
  btn.blur();
};

function hideModal () {
  clearTimeout(timerId);
  modal.classList.remove('modal_active');
};

btn.addEventListener('click', showModal);
close.addEventListener('click', hideModal);


