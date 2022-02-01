// slider technology

let slideIndexTechnlogy = 1,
	slidesTechnology = document.querySelectorAll('.technology__slider-block'),
	prevTechnology = document.querySelector('.technology-arrow-left'),
	nextTechnology = document.querySelector('.technology-arrow-right');

showSlidesTechnology(slideIndexTechnlogy);

function showSlidesTechnology(n) {
	if (n > slidesTechnology.length) {
		slideIndexTechnlogy = 1;
	};

	if (n < 1) {
		slideIndexTechnlogy = slidesTechnology.length;
	};

	for (let i = 0; i < slidesTechnology.length; i++) {
		slidesTechnology[i].style.display = 'none';
	};

	slidesTechnology[slideIndexTechnlogy - 1].style.display = 'flex';
}

function plusSlidesTechnology(n) {
	showSlidesTechnology(slideIndexTechnlogy += n);
}

prevTechnology.addEventListener('click', function() {
	plusSlidesTechnology(-1);
});

nextTechnology.addEventListener('click', function() {
	plusSlidesTechnology(1);
});
