//menu-service

let menuItemServices = document.querySelector('#menu-item-services'),
    boxMenuServices  = document.querySelector('.box__menu-services'),
    contFirst = document.getElementsByClassName('section__size')[1],
    headerFirstLevel = document.getElementsByClassName('header__first-level')[0];

function openMenuService() {
    boxMenuServices.style.display = 'block';
    boxMenuCompany.style.display = 'none';
}

function closeMenuService() {
    boxMenuServices.style.display = 'none';
}

menuItemServices.onmouseenter = openMenuService;
boxMenuServices.onmouseleave = closeMenuService;


//menu-company

let menuItemCompany = document.querySelector('#menu-item-company'),
    boxMenuCompany  = document.querySelector('.box__menu-company');

function openMenuCompany() {
    boxMenuCompany.style.display = 'block';
    boxMenuServices.style.display = 'none';
}

function closeMenuCompany() {
    boxMenuCompany.style.display = 'none';
}

menuItemCompany.onmouseenter = openMenuCompany;
boxMenuCompany.onmouseleave = closeMenuCompany;


function closeMenu() {
    boxMenuCompany.style.display = 'none';
    boxMenuServices.style.display = 'none';
}

contFirst.onmouseenter = closeMenu;
headerFirstLevel.onmouseenter = closeMenu;
