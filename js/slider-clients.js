// let i = 1;
// for(let li of carousel.querySelectorAll('li')) {
//     li.style.position = 'relative';
//     li.insertAdjacentHTML('beforeend', `<span style="position:absolute;left:0;top:0">${i}</span>`);
//     i++;
// }
//
// /* конфигурация */
// let width = 263; // ширина картинки
// let count = 3; // видимое количество изображений
//
// let list = carousel.querySelector('ul');
// let listElems = carousel.querySelectorAll('li');
//
// let position = 0; // положение ленты прокрутки
//
// carousel.querySelector('.box__slider-arrow-right').onclick = function() {
//     // сдвиг влево
//     if (Math.abs(position) === 0) {
//         position = -((listElems.length * width) - width * count);
//     } else {
//         position += width * count;
//     }
//     // последнее передвижение влево может быть не на 3, а на 2 или 1 элемент
//     position = Math.min(position, 0)
//     list.style.marginLeft = position + 'px';
// };
//
// carousel.querySelector('.box__slider-arrow-left').onclick = function() {
//     // сдвиг вправо
//
//     position -= width * count;
//     if (Math.abs(position) === listElems.length * width) {
//     position = 0;
//     }
//     // последнее передвижение вправо может быть не на 3, а на 2 или 1 элемент
//     position = Math.max(position, -width * (listElems.length - count));
//     list.style.marginLeft = position + 'px';
// };

// slider reviews

let slideIndexClients = 1,
	slidesClients = document.querySelectorAll('.box__clients-slider'),
	prevClients = document.querySelector('.clients-arrow-left'),
	nextClients = document.querySelector('.clients-arrow-right');

showSlidesClients(slideIndexClients);

function showSlidesClients(n) {
	if (n > slidesClients.length) {
		slideIndexClients = 1;
	};

	if (n < 1) {
		slideIndexClients = slidesClients.length;
	};

	for (let i = 0; i < slidesClients.length; i++) {
		slidesClients[i].style.display = 'none';
	};

	slidesClients[slideIndexClients - 1].style.display = 'block';
}

function plusSlidesClients(n) {
	showSlidesClients(slideIndexClients += n);
}

prevClients.addEventListener('click', function() {
	plusSlidesClients(-1);
});

nextClients.addEventListener('click', function() {
	plusSlidesClients(1);
});

setInterval(function() {
    plusSlidesClients(1)}, 15000);
