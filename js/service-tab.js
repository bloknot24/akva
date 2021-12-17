// function hiddenTabServices(i) {
//     boxService = document.querySelectorAll('.box__services-data');
//     for(i; i < boxService.length; i++) {
//         boxService[i].style.display = 'none';
//     }
// }
//
// function initTabServices() {
//     hiddenTabServices(1);
// }
//
// initTabServices();
//
// let servicesLink = document.querySelectorAll('.services__link-block');
// servicesLink.forEach(function(element) {
//     element.onclick = showServices;
// });
//
// function showServices() {
//     let data = this.getAttribute('data');
//     console.log(data);
//     hiddenTabServices(0);
//     document.querySelector(`.box__services-data[data="${data}"]`).style.display = 'block';
// }

let tab = function() {
    let servicesLink = document.querySelectorAll('.services__link-block'),
        boxServices  = document.querySelectorAll('.box__services-data'),
        tabName;

        servicesLink.forEach(item => {
            item.addEventListener('click', selectTabNav)
        });

        function selectTabNav() {
            servicesLink.forEach(item => {
                item.classList.remove('is-active');
            });
            this.classList.add('is-active');
            tabName = this.getAttribute('data-tab-name');
            selectTabContent(tabName);
        }

        function selectTabContent(tabName) {
            boxServices.forEach(item => {
                item.classList.contains(tabName) ? item.classList.add('is-active') :
                item.classList.remove('is-active');
            })
        }
};

tab();
