// === MENU SHOW HIDE === //

var elToClick = document.querySelector('.navicon');
var elToAffect = document.querySelector('.nav-menu-group');

elToClick.addEventListener('click', function() {
	elToAffect.classList.toggle('show-nav');
});



// === DOODLE THUMBNAILS: CLICK OPENS MODAL === //

var modal = document.querySelector('.modalPopup');
var doodlesThumb = document.querySelectorAll('.doodles-grid-item');

for (var i = 0; i < doodlesThumb.length; i++) {
  doodlesThumb[i].addEventListener('click', openModal);
}

function openModal(e) {  // change modal css to display it //

	var targetModalId = e.target.dataset.targetModal;
	var targetModal = document.getElementById(targetModalId);

	// console.log(targetModalId);

  targetModal.style.display = 'block';
}


// === CLOSE BUTTON X: CLICK CLOSES MODAL === //

var allModals = document.querySelectorAll('.modalContent');

for (var i = 0; i < allModals.length; i++) {
	var modalCloseButton = allModals[i].querySelector('.modalClose');
	modalCloseButton.addEventListener('click', closeModal);
}

// === CLOSE MODAL ON ESC KEYDOWN === //

// window.onkeyup = function (event) {
//   if (event.keyCode == 27) {
//     document.getElementById(boxid).style.visibility="hidden";
//   }
//  }

// or

// var modal = document.getElementById("modal");
// document.addEventListener('keydown', function(e) {
//     let keyCode = e.keyCode;
//     document.getElementById("result").innerHTML = "Key Code: "+keyCode+"<br/> Key: "+e.key+"<br/>";
//     if (keyCode === 27) {//keycode is an Integer, not a String
//       modal.classList.remove('modal-visible');
//       document.getElementById("result").innerHTML += "Escape key pressed. Modal hidden.";
//     }
// });

function closeModal() {
	// console.log(this); // find out what exactly is being clicked!
	this.closest('.modalPopup').style.display = 'none';
}


// === CLICK ANYWHERE OUTSIDE MODAL TO CLOSE IT === // how to get this working ?? need to be clicking anywhere except modal itself and button?

window.onclick = function(e) {
  if (e.target == modal) {
		console.log(this);
    // this.closest('.modalPopup').style.display = 'none';
  }
	// closeModal();
}
