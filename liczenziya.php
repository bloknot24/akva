<?php
$title = 'Лицензия';
$description = 'Лицензия нашей компании, подтверждающая нашу деятельность';
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
                <a href="/liczenziya" class="breadcrumbs__link">
                    <b>Лицензия</b>
                </a>
            </li>
        </ul>
    </div>
</div>

<section id="license">
    <div class="section__size">
        <div class="box__license">
            <img src="img/license/license1.png" class="box__license-img"
            alt="Лицензия" oncontextmenu="return false;">
            <img src="img/license/license2.png" class="box__license-img"
            alt="Лицензия" oncontextmenu="return false;">
            <img src="img/license/license3.png" class="box__license-img"
            alt="Лицензия" oncontextmenu="return false;">
        </div>
    </div>
</section>

<?php include_once('footer.php'); ?>
