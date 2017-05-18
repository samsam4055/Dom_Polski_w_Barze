var link = document.querySelector('.open-gallery');
var gall = document.querySelector('.hidden-gallery');
var btn = document.querySelector('.for-open');

link.addEventListener('click', function(event) {
	event.preventDefault();
	gall.classList.add('hidden-gallery-show');
	btn.classList.add('hidden-btn');
});
