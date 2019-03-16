// === menu show hide === //

var elToClick = document.querySelector('.navicon');
var elToAffect = document.querySelector('.nav-menu-group');

elToClick.addEventListener('click', function() {
	elToAffect.classList.toggle('show-nav');
});

// === doodle thumbnails: click opens modal === //

var modal = document.getElementById('modalPopup');
var spanClose = document.querySelector('.modalClose');
var modalDailyDate = document.querySelector('.dailyDate');

var doodlesThumb = document.querySelectorAll('.doodles-grid-item');

for (var i = 0; i < doodlesThumb.length; i++) {
  doodlesThumb[i].addEventListener('click', doodlePopup);
}



// test currentTarget alert //
function showContent(event) {
	console.log(phpVariable.postID);
  // console.log(event.currentTarget.nodeName);
}


function doodlePopup() {
  // change modal css to display it //
  modal.style.display = 'block';

	// test currentTarget alert //
	showContent(event);
}




// === click span (x) to close modal === //

spanClose.onclick = function() {
  modal.style.display = 'none';
}

// === click anywhere outside modal to close it === //

window.onclick = function(event) {
  if (event.target == modal) {
    modal.style.display = 'none';
  }
}
