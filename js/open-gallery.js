var link = document.querySelectorAll('.open-gallery');
var gall = document.querySelectorAll('.hidden-gallery');
var btn = document.querySelectorAll('.for-open');

link[0].addEventListener('click', function(event) {
	event.preventDefault();
	gall[0].classList.add('hidden-gallery-show');
});

link[1].addEventListener('click', function(event) {
	event.preventDefault();
	gall[1].classList.add('hidden-gallery-show');
});

link[2].addEventListener('click', function(event) {
	event.preventDefault();
	gall[2].classList.add('hidden-gallery-show');
});
