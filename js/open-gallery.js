var link = document.querySelectorAll('.open-gallery');
var gall = document.querySelectorAll('.hidden-gallery');
var btn = document.querySelectorAll('.for-open');

link[0].addEventListener('click', function(event) {
	event.preventDefault();
	gall[0].classList.add('hidden-gallery-show');
	btn[0].classList.add('hidden-btn');
});

link[1].addEventListener('click', function(event) {
	event.preventDefault();
	gall[1].classList.add('hidden-gallery-show');
	btn[1].classList.add('hidden-btn');
});

link[2].addEventListener('click', function(event) {
	event.preventDefault();
	gall[2].classList.add('hidden-gallery-show');
	btn[2].classList.add('hidden-btn');
});

link[3].addEventListener('click', function(event) {
	event.preventDefault();
	gall[3].classList.add('hidden-gallery-show');
	btn[3].classList.add('hidden-btn');
});

link[4].addEventListener('click', function(event) {
	event.preventDefault();
	gall[4].classList.add('hidden-gallery-show');
	btn[4].classList.add('hidden-btn');
});
