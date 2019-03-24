// === MOBILE MENU SHOW HIDE === //

var elToClick = document.querySelector('.navicon');
var elToAffect = document.querySelector('.nav-menu-group');

elToClick.addEventListener('click', function() {
	elToAffect.classList.toggle('show-nav');
});



// === DOODLES THUMBNAILS: CLICK OPENS MODAL POPUP === //

// var modal = document.querySelector('.modalPopup');
var doodlesThumb = document.querySelectorAll('.doodles-grid-item');

for (var i = 0; i < doodlesThumb.length; i++) {
  doodlesThumb[i].addEventListener('click', openModal);
}

function openModal(e) {  // changes modal CSS to display:block //

	var targetModalId = e.target.dataset.targetModal;
	var targetModal = document.getElementById(targetModalId);

	// console.log(targetModalId);
  targetModal.style.display = 'block';
}


// === MODAL CLOSE-BUTTON: CLICK TO CLOSE EACH MODAL === //

var allModals = document.querySelectorAll('.modalContent');

for (var i = 0; i < allModals.length; i++) {
	var modalCloseButton = allModals[i].querySelector('.modalClose');
	modalCloseButton.addEventListener('click', closeModal);
}

function closeModal() {
	// console.log(this); // find out what exactly is being clicked!
	this.closest('.modalPopup').style.display = 'none';
}


// === CLICK ANYWHERE OUTSIDE MODAL TO CLOSE IT === // currently modal3 only - how to get this working for all modal IDs?


window.onclick = function(e) {

	var modal3 = document.getElementById('modal3');

  if (e.target == modal3) {
		console.log(this);
    modal3.style.display = 'none';
  }
}

// === CLOSE MODAL ON ESC KEYDOWN === // again, currently modal3 only - how to get this working for all modal IDs?

document.onkeyup = function (e) {
  if (e.keyCode == 27) {
		console.log('clicked esc');
		modal1.style.display = 'none';
    modal3.style.display = 'none';
  }
}
