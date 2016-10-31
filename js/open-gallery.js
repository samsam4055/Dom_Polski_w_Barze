var link = document.querySelectorAll('.open-gallery');
var gall = document.querySelectorAll('.hidden-gallery');
var btn = document.querySelectorAll('.for-open');

link[1].addEventListener('click', function(event) {
	event.preventDefault();
	gall[1].classList.add('hidden-gallery-show');
    btn[1].classList.add('hidden-btn');
});

link[0].addEventListener('click', function(event) {
	event.preventDefault();
	gall[0].classList.add('hidden-gallery-show');
    btn[0].classList.add('hidden-btn');
});

// for (var i = 0; i < links.length; i++) {
// 	var link = links[i];
// 	var btn = links[i].parentNode;
// 	var gall = btn.nextSibling;
// 	link.addEventListener('click', function(event) {
// 		event.preventDefault();
// 		btn.classList.add('hidden-btn');
// 		gall.classList.add('hidden-gallery-show');
//
// 	});
// }
