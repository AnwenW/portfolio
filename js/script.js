// === menu show hide === //

var elToClick = document.querySelector('.navicon');
var elToAffect = document.querySelector('.nav-menu-group');

elToClick.addEventListener('click', function() {
	elToAffect.classList.toggle('show-nav');
});

// === doodle thumbnails: click opens modal === //

var modal = document.querySelector('.modalPopup');
var spanClose = document.querySelector('.modalClose');
var modalDailyDate = document.querySelector('.dailyDate');

var doodlesThumb = document.querySelectorAll('.doodles-grid-item');

for (var i = 0; i < doodlesThumb.length; i++) {
  doodlesThumb[i].addEventListener('click', doodlePopup);
}



function doodlePopup(e) {
  // change modal css to display it //


	var targetModalId = e.target.dataset.targetModal;
	var targetModal = document.getElementById(targetModalId);

	console.log(targetModalId);

  targetModal.style.display = 'block';
}



// === click span (x) to close modal === //

spanClose.onclick = function() {

	// need to target close button, like what I've done for target modal -- span close now in each modal
  targetModal.style.display = 'none';
}

// === click anywhere outside modal to close it === //

window.onclick = function(event) {
  if (event.target == modal) {
    modal.style.display = 'none';
  }
}
