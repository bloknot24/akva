<?php include('../init.php');

if(!isset($_COOKIE['views'])) {
    setcookie('views', 'int');
}

$id = $_GET['id'];
$viewArticles = new Blog();
$viewArticle = $viewArticles->viewArticlesOne($id);

$title = $viewArticle['name_article'];
$description = mb_substr($viewArticle['text_article1'], 0, 150, 'UTF-8') . '...';

if(!isset($viewArticle['id'])) {
    header($_SERVER["SERVER_PROTOCOL"] . " 404 Not Found");
    header("Location: https://akvanika.by/404");
    die;
}

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
                <a href="/blog" class="breadcrumbs__link">
                    Новости
                </a>
            </li>
            <span class="breadcrumbs__list-span">/</span>
            <li class="breadcrumbs__list-item upper">
                <a href="/blog" class="breadcrumbs__link">
                    <b><?=$viewArticle['name_article']?></b>
                </a>
            </li>
        </ul>
    </div>
</div>
<section id="blog">
    <div class="section__size">
        <div class="blog__head-block">
            <h1 class="blog__head upper">
                <?=$viewArticle['name_article']?>
            </h1>
            <img src="img/blog/articles/<?=$viewArticle['img_article1']?>" alt="Картинка статьи"
            class="blog__articles-content-img">
        </div>
        <div class="blog__content-block">
            <div class="blog__articles-description">
                <?=$viewArticle['text_article1']?>
            </div>
        </div>
        <? if(!$viewArticle['img_article2'] == NULL): ?>
            <div class="blog__content-block">
                <img src="img/blog/articles/<?=$viewArticle['img_article2']?>" alt="Картинка статьи"
                class="blog__articles-content-img1">
            </div>
        <? endif; ?>
        <? if(!$viewArticle['text_article2'] == NULL): ?>
            <div class="blog__content-block">
                <div class="blog__articles-description">
                    <?=$viewArticle['text_article2']?>
                </div>
            </div>
        <? endif; ?>
        <div class="blog__articles-additionally">


            <?php if(!isset($_COOKIE['views'])) {
                $viewArticles->addViews($id);
            } ?>

            <div class="blog__articles-block-info">
                <p class="blog__articles-date">
                    <?=$viewArticle['date_add']?>
                </p>
                <p class="box__articles-counter">
                    <i class="fas fa-eye"></i> <?=$viewArticle['views'];?>
                </p>
            </div>

            <p class="blog__articles-author">
                <b>Автор:</b> <a href="<?=$viewArticle['author_link']?>"
                class="blog__articles-link-page" rel="nofollow"
                ><?=$viewArticle['author_name']?></a>
            </p>

        </div>
    </div>
</section>

<?php include_once('footer.php');?>
