// tab-service

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
