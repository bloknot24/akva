<?php
$title = 'Свидетельство';
$description = 'Свидетельство нашей компании, подтверждающее нашу деятельность';
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
                <a href="/svidetelstvo" class="breadcrumbs__link">
                    <b>Свидетельство</b>
                </a>
            </li>
        </ul>
    </div>
</div>

<section id="certificate">
    <div class="section__size">
        <div class="box__certificate">
            <img src="img/certificate/certificate.png" class="box__certificate-img"
            alt="Свидетельство" oncontextmenu="return false;">
        </div>
    </div>
</section>

<?php include_once('footer.php'); ?>
