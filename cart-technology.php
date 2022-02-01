<?php
$title = 'Заказ техники';
$description = 'Данная страница содержит форму предварительного заказа';
include_once('header.php');
$id = $_GET['id'];
$viewsTechnology = viewTechnologyOne($id); ?>

<? if(!isset($viewsTechnology['id'])) : ?>
    <script>window.location.replace("https://akvanika.by/404.php");</script>
<? endif; ?>

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
                <a href="cart-technology.php?id=<?=$id?>" class="breadcrumbs__link">
                    <b>Заказ <?=$viewsTechnology['name_technology']?></b>
                </a>
            </li>
        </ul>
    </div>
</div>
<section id="cart-technology">
    <div class="section__size">
        <div class="technology__cover">
            <div class="technology__cover-block-image">
                <img src="img/<?=$viewsTechnology['img']?>"
                class="technology__cover-block-img" alt="Техника">
            </div>
            <div class="technology__cover-block-description">
                <h1 class="technology__slider-description-head">
                    <?=$viewsTechnology['name']?><br>
                    <span class="technology__slider-description-head-span">
                        <?=$viewsTechnology['name_technology']?>
                    </span>
                </h1>
                <ul class="technology__slider-description-list">
                    <li class="technology__slider-description-list-item">
                        <?=$viewsTechnology['one_characteristic']?>
                    </li>
                    <li class="technology__slider-description-list-item">
                        <?=$viewsTechnology['two_characteristic']?>
                    </li>
                    <li class="technology__slider-description-list-item">
                        <?=$viewsTechnology['three_characteristic']?>
                    </li>
                    <li class="technology__slider-description-list-item">
                        <?=$viewsTechnology['four_characteristic']?>
                    </li>
                    <li class="technology__slider-description-list-item">
                        <?=$viewsTechnology['five_characteristic']?>
                    </li>
                </ul>
            </div>
        </div>
        <div id="call-2-action">
            <div class="section__size">
                <div class="box__form-call-2-action">
                    <?php $headService = 'Заказ техники ' . $viewsTechnology['name_technology'];
                    include_once(MAIL . 'order-equipment.php');
                    if($isSend) : ?>
                    <p class="form__main-success-text">
                        Письмо успешно отправлено!
                    </p>
                    <? else : ?>
                    <p class="box__form-call-2-action-text">
                        Оставьте ваш номер телефона и мы свяжемся с вами для уточнения!
                    </p>
                    <form method="post" action="#call-2-action">
                        <div class="form__call-2-action-block">
                            <input type="hidden" name="nameTechnology" value="<?=$viewsTechnology['name_technology']?>">
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
                                <input type="submit" name="formTechnology" class="form__main-btn upper" value="Заказать"></input>
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
</section>

<?php include_once('footer.php'); ?>
