// slider reviews

let slideIndexEquipment = 1,
	slidesEquipment = document.querySelectorAll('.reviews__box-slider'),
	prevEquipment = document.querySelector('.reviews-arrow-left'),
	nextEquipment = document.querySelector('.reviews-arrow-right');

showSlidesEquipment(slideIndexEquipment);

function showSlidesEquipment(n) {
	if (n > slidesEquipment.length) {
		slideIndexEquipment = 1;
	};

	if (n < 1) {
		slideIndexEquipment = slidesEquipment.length;
	};

	for (let i = 0; i < slidesEquipment.length; i++) {
		slidesEquipment[i].style.display = 'none';
	};

	slidesEquipment[slideIndexEquipment - 1].style.display = 'flex';
}

function plusSlidesEquipment(n) {
	showSlidesEquipment(slideIndexEquipment += n);
}

prevEquipment.addEventListener('click', function() {
	plusSlidesEquipment(-1);
});

nextEquipment.addEventListener('click', function() {
	plusSlidesEquipment(1);
});

setInterval(function() {
    plusSlidesEquipment(1)}, 15000);
