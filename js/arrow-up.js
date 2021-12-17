// arrow - up

let arrowUp = document.querySelector('.arrow__up');
arrowUp.onclick = function() {
    window.scrollTo(pageXOffset, 0);
    // после scrollTo возникнет событие "scroll", так что стрелка автоматически скроется
};

window.addEventListener('scroll', function() {
    arrowUp.hidden = (pageYOffset < document.documentElement.clientHeight);
});
