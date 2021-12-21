let = menuMobileBtn = document.querySelector('.header__menu-mobile-btn'),
      menuMobileBlock = document.querySelector('.header__menu-mobile-block-list');
      menuMobileBlockClose = document.querySelector('.header__menu-mobile-block-list-close'),
      menuMobileService = document.querySelector('#menu-mobile-item-services'),
      menuMobileCompany = document.querySelector('#menu-mobile-item-company');

 function closeMenuMobile() {
     menuMobileBlock.style.display = 'none';
}
menuMobileBlockClose.onclick = closeMenuMobile;


function openbox(id, toggle) {
    display = document.querySelector(id).style.display;

    if(display=='none'){
        document.querySelector(id).style.display='block';
        document.getElementById(toggle).style.transform = 'rotate(180deg)';
        document.getElementById(toggle).style.marginRight = '15px';
    } else {
        document.querySelector(id).style.display='none';
        document.getElementById(toggle).style.transform = 'rotate(0deg)';
        document.getElementById(toggle).style.marginRight = '0px';
    }
}
menuMobileService.addEventListener('click', function() {
     openbox('.menu__services-mobile-list', 'fa-sort1');
});
menuMobileCompany.addEventListener('click', function() {
     openbox('.menu__company-mobile-list', 'fa-sort2');
});
menuMobileBtn.addEventListener('click', function() {
    openbox('.header__menu-mobile-block-list', 'menu-hamburger');
});
