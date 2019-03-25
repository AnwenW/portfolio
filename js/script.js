// === MOBILE MENU SHOW HIDE === //

var elToClick = document.querySelector('.navicon');
var elToAffect = document.querySelector('.nav-menu-group');

elToClick.addEventListener('click', function() {
	elToAffect.classList.toggle('show-nav');
});



// === DOODLES THUMBNAILS: CLICK OPENS MODAL POPUP === //

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

var allModals1 = document.querySelectorAll('.modalContent');

for (var i = 0; i < allModals1.length; i++) {
	var modalCloseButton = allModals1[i].querySelector('.modalClose');
	modalCloseButton.addEventListener('click', closeModal);
}

function closeModal() {
	// console.log(this); // find out what exactly is being clicked!
	this.closest('.modalPopup').style.display = 'none';
}


// === CLICK ANYWHERE OUTSIDE MODAL TO CLOSE IT === //

window.onclick = function(e) {

	var allModals2 = document.querySelectorAll('.modalPopup');

	for (var i = 0; i < allModals2.length; i++) {
		var iModal = document.getElementById('modal'+[i]);
	  if (e.target == iModal) {
	    iModal.style.display = 'none';
	  }
	}
}


// === CLOSE MODAL ON ESC KEYDOWN === //

document.onkeyup = function(e) {

	var allModals3 = document.querySelectorAll('.modalPopup');

	for (var i = 0; i < allModals3.length; i++) {
		var iModal = document.getElementById('modal'+[i]);
	  if (e.keyCode == 27) {
	    iModal.style.display = 'none';
	  }
	}
}
