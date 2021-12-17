let contactCheckList = document.querySelector('.contacts__data-check-list'),
    contactCheckLink = document.querySelector('.contacts__data-check-link');

contactCheckLink.addEventListener('click', () => {
    contactCheckList.style.display = 'block';
});
