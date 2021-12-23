<?php
$title = 'Блог';
$description = 'Блог нашей компании, где публикуются наши новости, статьи, полезные материалы.';
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
                <a href="/blog" class="breadcrumbs__link">
                    <b>Блог</b>
                </a>
            </li>
        </ul>
    </div>
</div>
<section id="blog">
    <div class="section__size">
        <div class="box__blog">
            <p class="box__blog-text">На данный момент ни одной статьи нe опубликовано.</p><br>
            <a href="/" class="upper"
            style="text-decoration: none; font-weight: 700; color: #2369D9;">На главную!</a>
        </div>
    </div>
</section>

<?php include_once('footer.php'); ?>
