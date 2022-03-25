let contactCheckLink = document.querySelector('.contacts__data-check-link');

function openList(id, toggle) {
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
contactCheckLink.addEventListener('click', function() {
     openList('.contacts__data-check-list', 'fa-sort-list');
});
