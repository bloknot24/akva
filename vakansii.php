<?php $title = 'Вакансии';
$description = 'Данная страница содержит в себе описание всех открытых вакансий, которые рассматривает наша компания.';
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
                <a href="/vakansii" class="breadcrumbs__link">
                    <b>Вакансии</b>
                </a>
            </li>
        </ul>
    </div>
</div>

<section id="jobs">
    <div class="section__size">
        <h1 class="blog__head upper center">
            Вакансии
        </h1>
        <div class="box__jobs">
            <h2 class="jobs__head">
                Слесарь по ремонту автомобилей
            </h2>
            <div class="jobs__block-ul">
                <ul class="jobs__list">
                    <div class="jobs__list-item-block">
                        <i class="fas fa-clock"></i>
                        <li class="jobs__list-item">
                            Занятость: <span>полная</span>
                        </li>
                    </div>
                    <div class="jobs__list-item-block">
                        <i class="fas fa-wrench"></i>
                        <li class="jobs__list-item">
                            Опыт работы: <span>от 2 лет</span>
                        </li>
                    </div>
                </ul>
                <ul class="jobs__list">
                    <div class="jobs__list-item-block">
                        <i class="fas fa-file-alt"></i>
                        <li class="jobs__list-item">
                            Образование: <span>средне-специальное</span>
                        </li>
                    </div>
                    <div class="jobs__list-item-block">
                        <i class="fas fa-money-bill-wave"></i>
                        <li class="jobs__list-item">
                            Оплата: <span>по результатам собеседования</span>
                        </li>
                    </div>
                </ul>
            </div>

            <div id="call-2-action">
                <div class="section__size">
                    <div class="box__form-call-2-action">
                        <?php $headService = 'Запрос на вакансию';
                        include_once(MAIL . 'order-equipment.php');
                        if($isSend) : ?>
                        <p class="form__main-success-text">
                            Письмо успешно отправлено!
                        </p>
                        <? else : ?>
                        <p class="box__form-call-2-action-text">
                            Оставьте ваш номер и мы свяжемся с вами для собеседования!
                        </p>
                        <form method="post" action="#call-2-action">
                            <div class="form__call-2-action-block">
                                <input type="hidden" name="nameTechnology" value="Слесарь по ремонту">
                                <div class="form__main-block-index-input">
                                    <label for="calName" class="form__main-input-label form__main-index-label">
                                        Имя:
                                    </label>
                                    <i class="fas icon-input-form-call fa-user-alt"></i>
                                    <input type="text" name="name" class="form__main-input"
                                    placeholder="прим. Александр" required value="<?=$name?>">
                                    <span class="form__main-input-span">*</span>
                                </div>
                                <div class="form__main-block-index-input">
                                    <label for="callTel" class="form__main-input-label form__main-index-label">
                                        Телефон:
                                    </label>
                                    <i class="fas icon-input-form-call fa-phone"></i>
                                    <input type="tel" name="tel" class="form__main-input"
                                    placeholder="+375(XX)XXX-XX-XX" required value="<?=$tel?>">
                                    <span class="form__main-input-span">*</span>
                                </div>
                                <div class="form__call-2-action-block-btn">
                                    <input type="submit" name="formJobs" class="form__main-btn upper" value="Отправить"></input>
                                </div>
                            </div>
                            <p class="form__main-error-text">
                                <?=$error?>
                            </p>
                        </form>
                        <? endif; ?>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<? include_once('footer.php'); ?>
