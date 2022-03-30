<?php $title = 'Перегон автотехники';
$description = 'Оперативный и надежный автомобильного транспорто на территории Беларуси';
include_once('header.php'); ?>

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
                <a href="/peregon-avtotekhniki" class="breadcrumbs__link">
                    <b>Перегон автотехники</b>
                </a>
            </li>
        </ul>
    </div>
</div>
<section id="service-page">
    <div class="section__size">
        <div class="box__services-page-data">
            <div class="services__data-img-block">
                <img src="img/services/services-data-img-trawl.svg" class="services__data-img"
                alt="Рисунок с данными">
            </div>
            <div class="services__data-block">
                <ul class="services__data-list">
                    <div class="services__data-list-item-block">
                        <i class="fas fa-arrows-alt-h"></i>
                        <li class="services__data-list-item">
                            <b>Длина:</b> 12,5 м (12500 мм)
                        </li>
                    </div>
                </ul>
                <ul class="services__data-list">
                    <div class="services__data-list-item-block">
                        <i class="fas fa-arrows-alt-h"></i>
                        <li class="services__data-list-item">
                            <b>Ширина:</b> 2,8 м (2800 мм)
                        </li>
                    </div>
                </ul>
                <ul class="services__data-list">
                    <div class="services__data-list-item-block">
                        <i class="fas fa-weight"></i>
                        <li class="services__data-list-item">
                            <b>Грузоподъемность:</b> 37 тонн
                        </li>
                    </div>
                </ul>
            </div>
            <div class="box__services-btn">
                <a href="#form__main-akva" class="services__btn-link upper">Заказать</a>
            </div>
        </div>
    </div>
</section>
<!-- procedure -->
<section id="procedure">
    <div class="section__size">
        <div class="section__head-box">
            <div class="section__head-line"></div>
            <div class="section__head-block">
                <h2 class="section__head2-text">
                    Как мы работаем
                </h2>
                <p class="section__head-description">
                    Упрощенный порядок работы с нашими клиентами.
                </p>
            </div>
        </div>
        <div class="procedure__list-block">
            <ul class="procedure__list">
                <li class="procedure__list-item">
                    <div class="procedure__list-item-number">
                        01
                    </div>
                    <img src="img/procedure/data.svg" class="procedure__list-item-img"
                    alt="Иконка">
                    <p class="procedure__list-item-text">
                        Обрабатываем запрос,<br>
                        уточняем данные.
                    </p>
                </li>
                <li class="procedure__list-item">
                    <div class="procedure__list-item-number">
                        02
                    </div>
                    <img src="img/procedure/price.svg" class="procedure__list-item-img"
                    alt="Иконка">
                    <p class="procedure__list-item-text">
                        Договариваемся<br>
                        о стоимости.
                    </p>
                </li>
                <li class="procedure__list-item">
                    <div class="procedure__list-item-number">
                        03
                    </div>
                    <img src="img/procedure/contract.svg" class="procedure__list-item-img"
                    alt="Иконка">
                    <p class="procedure__list-item-text">
                        Составляем заявку<br>
                        и заключаем договор.
                    </p>
                </li>
                <li class="procedure__list-item">
                    <div class="procedure__list-item-number">
                        04
                    </div>
                    <img src="img/procedure/transportation.svg" class="procedure__list-item-img"
                    alt="Иконка">
                    <p class="procedure__list-item-text">
                        Перевозим груз<br>
                        с оплатой по факту.
                    </p>
                </li>
            </ul>
        </div>
    </div>
</section>
<section id="service-page-form">
    <div class="section__size">
        <div class="section__head-box">
            <div class="section__head-line"></div>
            <div class="section__head-block">
                <h2 class="section__head2-text">
                    Расчет доставки
                </h2>
                <p class="section__head-description">
                    Заполните форму и мы рассчитаем стоимость доставки.
                </p>
            </div>
        </div>
        <div class="box__form-main" id="form__main-akva">
            <div class="form__main">
                <?php $headService = 'Перегон автотехники';
                include_once(MAIL . 'service-shipping.php');
                if($isSend) : ?>
                <p class="form__main-success-text">
                    Письмо успешно отправлено!
                </p>
                <? else : ?>
                <form method="post" action="#form__main-akva">
                    <div class="form__main-block">
                        <div class="form__main-block-input">
                            <label for="nameCompany" class="form__main-input-label">
                                Название компании:
                            </label><br>
                            <i class="fas icon-input-form fa-building"></i>
                            <input type="text" name="nameCompany" class="form__main-input"
                            placeholder="Прим. ООО «Аква»" required value="<?=$nameCompany?>">
                            <span class="form__main-input-span">*</span>
                        </div>
                        <div class="form__main-block-input">
                            <label for="nameTel" class="form__main-input-label">
                                Телефон:
                            </label><br>
                            <i class="fas icon-input-form fa-phone"></i>
                            <input type="tel" name="nameTel" class="form__main-input"
                            placeholder="+375(XX)XXX-XX-XX" required value="<?=$nameTel?>">
                            <span class="form__main-input-span">*</span>
                        </div>
                    </div>
                    <div class="form__main-block">
                        <div class="form__main-block-input">
                            <label for="nameCargo" class="form__main-input-label">
                                Наименование груза:
                            </label><br>
                            <i class="fas icon-input-form fa-tractor"></i>
                            <input type="text" name="nameCargo" class="form__main-input"
                            placeholder="Прим. экскаватор" required value="<?=$nameCargo;?>">
                            <span class="form__main-input-span">*</span>
                        </div>
                        <div class="form__main-block-input">
                            <label for="nameMail" class="form__main-input-label">
                                e-mail:
                            </label><br>
                            <i class="fas icon-input-form fa-at"></i>
                            <input type="email" name="nameMail" class="form__main-input"
                            placeholder="Введите e-mail" required value="<?=$nameMail?>">
                            <span class="form__main-input-span">*</span>
                        </div>
                    </div>
                    <div class="form__main-block">
                        <div class="form__main-block-input">
                            <label for="nameDeparture" class="form__main-input-label">
                                Пункт отправления:
                            </label><br>
                            <i class="fas icon-input-form fa-map-marker-alt"></i>
                            <input type="text" name="nameDeparture" class="form__main-input"
                            placeholder="Например, Минск" required value="<?=$nameDeparture?>">
                            <span class="form__main-input-span">*</span>
                        </div>
                        <div class="form__main-block-input">
                            <label for="nameAppointment" class="form__main-input-label">
                                Пункт назначения:
                            </label><br>
                            <i class="fas icon-input-form fa-map-marker-alt"></i>
                            <input type="text" name="nameAppointment" class="form__main-input"
                            placeholder="Например, Москва" required value="<?=$nameAppointment?>">
                            <span class="form__main-input-span">*</span>
                        </div>
                    </div>
                    <div class="form__main-block">
                        <div class="form__main-block-input">
                            <label for="nameAdditionally" class="form__main-input-label">
                                Дополнительно:
                            </label><br>
                            <textarea type="text" name="nameAdditionally"
                            class="form__main-input-textatea"><?=$nameAdditionally?></textarea>
                        </div>
                        <div class="form__main-btn-block">
                            <input type="submit" name="formServiceDriving" class="form__main-btn upper" value="Отправить">
                        </div>
                    </div>
                </form>
                <p class="form__main-error-text">
                    <?=$error?>
                </p>
                <? endif; ?>
            </div>
        </div>
    </div>
</section>

<? include_once('footer.php'); ?>
