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
                    <b>Новости</b>
                </a>
            </li>
        </ul>
    </div>
</div>
<section id="blog">
    <div class="section__size">
        <div class="box__blog">
            <h1 class="blog__head upper">
                Новости
            </h1>
            <div class="blog__list-articles-block">
                <?php $viewArticles = new Blog();
                $viewArticles = $viewArticles->viewAllArticles();

                if(!isset($viewArticles)) : ?>

                <div class="blog__list-articles-none center">
                    Ни одной статьи пока не опубликовано!
                </div>

                <? else : ?>
                <?php foreach($viewArticles as $viewArticle) : ?>
                <a href="article.php?id=<?=$viewArticle['id']?>" class="blog__articles-link">
                    <div class="blog__articles">
                        <img src="img/blog/articles/<?=$viewArticle['img_article1']?>"
                        alt="Картинка" class="blog__articles-img">
                        <p class="blog__articles-date">
                            <?=$viewArticle['date_add']?>
                        </p>
                        <h3 class="blog__articles-head">
                            <?=$viewArticle['name_article']?>
                        </h3>
                        <p class="blog__articles-description">
                            <?=mb_substr($viewArticle['text_article1'], 0, 70, 'UTF-8');?>...
                        </p>
                    </div>
                </a>
                <? endforeach; ?>

                <? endif; ?>
            </div>
        </div>
    </div>
</section>

<?php include_once('footer.php'); ?>
