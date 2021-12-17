<?php
$title = 'Контакты';
$description = 'Контакты и местоположении нашей компании.';
include_once('header.php');?>
<div class="box__breadcrumbs">
    <div class="section__size">
        <ul class="breadcrumbs__list">
            <li class="breadcrumbs__list-item upper">
                <a href="/" class="breadcrumbs__link">
                    Главная
                </a>
            </li>
            <span class="breadcrumbs__list-span">/</span>
            <li class="breadcrumbs__list-item upper">
                <a href="" class="breadcrumbs__link">
                    <b>Контакты</b>
                </a>
            </li>
        </ul>
    </div>
</div>
<section id="contacts">
    <div class="section__size">
        <div class="box__contacts">
            <div class="box__contacts-data">
                <div class="contacts__data-block">
                    <img src="img/contacts/office.png" alt="Вход в офис">
                    <div class="contacts__data-phone">
                        <div class="footer__contacts-block">
                            <i class="fas fa-phone-square"></i>
                            <a href="tel:+375296858974" class="footer__contacts-link">
                                +375(29)685-89-74
                            </a>
                        </div>
                        <div class="footer__contacts-block">
                            <i class="fas fa-phone-square"></i>
                            <a href="tel:+375447777760" class="footer__contacts-link">
                                 +375(44)777-77-60
                            </a>
                        </div>
                        <div class="footer__contacts-block">
                            <i class="fas fa-envelope" style="padding-top: 2px;"></i>
                            <a href="mailto:mail@akvanika.by" class="footer__contacts-link">
                                mail@akvanika.by
                            </a>
                        </div>
                    </div>
                </div>
                <div class="contacts__data-company-block">
                    <div class="contacts__data-company-icon">
                        <i class="fas fa-building contacts-data-icon"></i>
                        <p class="contacts__data-company-text">
                            Частное производственно-торговое унитаное
                            предприятие <b>«Аква Ника»</b>, УНП 190858037
                        </p>
                    </div>
                    <div class="contacts__data-company-icon">
                        <i class="fas fa-building contacts-data-icon"></i>
                        <p class="contacts__data-company-text">
                            <b>Юридический адрес:</b> Республика Беларусь, 247960,
                            г. Житковичи, ул. Пролетарская, д.81а
                        </p>
                    </div>
                    <div class="contacts__data-company-icon">
                        <i class="fas fa-envelope-square contacts-data-icon"></i>
                        <p class="contacts__data-company-text">
                            <b>Почтовый адрес:</b> Республика Беларусь, 247960,
                            г. Житковичи, ул. Пролетарская, д.81а
                        </p>
                    </div>
                </div>
                <div class="contacts__data-check-block">
                    <button class="contacts__data-check-link">
                        Расчетные счета<i class="fas contacts__data-check-icon fa-sort-down"></i>
                    </button>
                    <ul class="contacts__data-check-list" style="display: none;">
                        <li class="contacts__data-check-list-item">
                            р/с BY42BPSB30121130800189330000 <b>(BYN)</b>
                        </li>
                        <li class="contacts__data-check-list-item">
                            р/с BY45BPSB30121130800216430000 <b>(RUB)</b>
                        </li>
                        <li class="contacts__data-check-list-item">
                            р/с BY90BPSB30121130800478400000 <b>(USD)</b>
                        </li>
                        <li class="contacts__data-check-list-item">
                            р/с BY72BPSB30121130800639780000 <b>(EUR)</b>
                        </li>
                        <li class="contacts__data-check-list-item">
                            в ОАО «БПС-Сбербанк»,<br>
                            г. Минск, б-р Мулявина, 6<br>
                            БИК BPSBBY2X
                        </li>
                    </ul>
                    <script src="js/check-payment-list.js"></script>
                </div>
            </div>
            <div class="box__contacts-map">
                <script type="text/javascript" charset="utf-8" async src="https://api-maps.yandex.ru/services/constructor/1.0/js/?um=constructor%3Acb5183011d736353a460fcaf4434fc3dc9f235f1b4616d09ddefe2d1f7afc045&amp;width=600&amp;height=450&amp;lang=ru_RU&amp;scroll=true"></script>
            </div>
        </div>
    </div>
</section>
<?php include_once('footer.php');?>
