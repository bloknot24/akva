<?php  declare(strict_types=1);
       error_reporting(-1);
       include_once('../init.php'); ?>
<!DOCTYPE html>
<html lang="ru">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title><?=$title?></title>
        <meta name="description" content="<?=$description?>">
        <link rel="canonical" href="<?=$canonical?>">
        <link rel="stylesheet" href="css/normalize.css">
        <link rel="stylesheet" href="css/style.css">
        <link rel="stylesheet" href="css/media.css">
        <link rel="icon" href="img/general/icon.png">
        <link rel="shortcut icon" href="img/general/icon.png">
        <link rel="icon" href="img/general/favicon.svg" type="image/svg+xml">
    </head>
    <body>
        <!-- preloader -->
        <div class="preloader">
            <div class="preloader__row">
                <div class="preloader__item"></div>
                <div class="preloader__item"></div>
            </div>
        </div>
        <script src="js/preloader.js"></script>
        <!-- header -->
        <header id="header">
            <div class="section__size">
                <div class="header__box">
                    <div class="header__first-level">
                        <a href="Skype:scania3737?chat" class="header__skype-icon-link">
                            <img src="img/header/skype-icon.svg" alt="Иконка"
                            class="header__skype-icon">
                        </a>
                        <a href="viber://chat?number=375296858974" class="header__viber-icon-link">
                            <img src="img/header/viber-icon.svg" alt="Иконка"
                            class="header__viber-icon">
                        </a>
                        <div class="header__contacts-block">
                            <i class="fas fa-envelope" style="padding-top: 2px;"></i>
                            <a href="mailto:mail@akvanika.by" class="header__contacts-mail-link">
                                mail@akvanika.by
                            </a>
                        </div>
                        <div class="header__contacts-block">
                            <i class="fas fa-phone-square"></i>
                            <a href="tel:+375296858974" class="header__contacts-phone-link">
                                +375296858974
                            </a>
                        </div>
                    </div>
                    <div class="header__second-level">
                        <div class="header__logo-block">
                            <a href="/" class="header__logo-link" title="Главная">
                                <img src="img/header/logo.svg" alt="Лого"
                                class="header__logo-img">
                                <p class="header__logo-text">АкваНика</p>
                            </a>
                        </div>
                        <div class="header__menu-block">
                            <div class="header__menu-mobile-btn" id="menu-hamburger">
                                <span class="header__menu-mobile-span"></span>
                                <span class="header__menu-mobile-span"></span>
                                <span class="header__menu-mobile-span"></span>
                            </div>
                            <nav class="header__menu-block-nav">
                                <ul class="header__menu-block-list upper">
                                    <li class="header__menu-block-list-item" id="menu-item-services">
                                        <a href="#" class="header__menu-block-list-item-link">
                                            Услуги <i class="fas fa-sort-down"></i>
                                        </a>
                                    </li>
                                    <li class="header__menu-block-list-item">
                                        <a href="/blog" class="header__menu-block-list-item-link">
                                            Новости
                                        </a>
                                    </li>
                                    <li class="header__menu-block-list-item" id="menu-item-company">
                                        <a href="#" class="header__menu-block-list-item-link">
                                            О компании <i class="fas fa-sort-down"></i>
                                        </a>
                                    </li>
                                    <li class="header__menu-block-list-item">
                                        <a href="/contacts" class="header__menu-block-list-item-link">
                                            Контакты
                                        </a>
                                    </li>
                                </ul>
                                <ul class="header__menu-mobile-block-list upper" id="menu-mobile"
                                style="display: none;">
                                <div class="header__menu-mobile-block-list-close">
                                    <b>X</b>
                                </div>
                                    <li class="header__menu-mobile-block-list-item"
                                    id="menu-mobile-item-services">
                                        <a class="header__menu-mobile-block-list-item-link">
                                            Услуги <i class="fas fa-sort-down" id="fa-sort1"></i>
                                        </a>
                                        <ul class="menu__services-mobile-list" style="display: none;">
                                            <?php $menu_services = viewMenuServices();
                                            foreach($menu_services as $menu_service) :?>
                                            <div class="menu__services-mobile-list-block">
                                                <a href="<?=$menu_service['link_item']?>"
                                                    class="menu__services-mobile-list-item-link">
                                                    <img src="img/<?=$menu_service['menu_icon']?>"
                                                    class="menu__services-mobile-list-img" alt="Иконка">
                                                    <li class="menu__services-mobile-list-item">
                                                        <?=$menu_service['name_item']?>
                                                    </li>
                                                </a>
                                            </div>
                                            <? endforeach; ?>
                                        </ul>
                                    </li>
                                    <li class="header__menu-mobile-block-list-item">
                                        <a href="/blog" class="header__menu-mobile-block-list-item-link">
                                            Новости
                                        </a>
                                    </li>
                                    <li class="header__menu-mobile-block-list-item"
                                    id="menu-mobile-item-company">
                                        <a class="header__menu-mobile-block-list-item-link">
                                            О компании <i class="fas fa-sort-down" id="fa-sort2"></i>
                                        </a>
                                        <ul class="menu__company-mobile-list"  style="display: none;">
                                            <?php $menu_services = viewMenuCompany();
                                            foreach($menu_services as $menu_service) :?>
                                            <div class="menu__company-mobile-list-block">
                                                <a href="<?=$menu_service['link_item']?>"
                                                    class="menu__company-mobile-list-item-link">
                                                    <img src="img/<?=$menu_service['menu_icon']?>"
                                                    class="menu__company-mobile-list-img" alt="Иконка">
                                                    <li class="menu__company-mobile-list-item">
                                                        <?=$menu_service['name_item']?>
                                                    </li>
                                                </a>
                                            </div>
                                            <? endforeach; ?>
                                        </ul>
                                    </li>
                                    <li class="header__menu-mobile-block-list-item">
                                        <a href="/contacts" class="header__menu-mobile-block-list-item-link">
                                            Контакты
                                        </a>
                                    </li>
                                </ul>
                            </nav>
                        </div>
                        <!-- menu-services -->
                        <div class="box__menu-services" style="display: none;">
                            <ul class="menu__services-list">
                                <?php $menu_services = viewMenuServices();
                                foreach($menu_services as $menu_service) :?>
                                <div class="menu__services-list-block">
                                    <a href="<?=$menu_service['link_item']?>" class="menu__services-list-item-link">
                                        <img src="img/<?=$menu_service['menu_icon']?>" class="menu__services-list-img" alt="Иконка">
                                        <li class="menu__services-list-item">
                                            <?=$menu_service['name_item']?>
                                        </li>
                                    </a>
                                </div>
                                <? endforeach; ?>
                            </ul>
                        </div>
                        <!-- end-menu-services -->
                        <!-- menu-company -->
                        <div class="box__menu-company" style="display: none;">
                            <ul class="menu__company-list">
                                <?php $menu_services = viewMenuCompany();
                                foreach($menu_services as $menu_service) :?>
                                <div class="menu__company-list-block">
                                    <a href="<?=$menu_service['link_item']?>" class="menu__company-list-item-link">
                                        <img src="img/<?=$menu_service['menu_icon']?>" class="menu__company-list-img" alt="Иконка">
                                        <li class="menu__company-list-item">
                                            <?=$menu_service['name_item']?>
                                        </li>
                                    </a>
                                </div>
                                <? endforeach; ?>
                            </ul>
                        </div>
                        <!-- end-menu-company -->
                        <div class="header__bth-call-block">
                            <a href="/#call-2-action" class="header__bth-call-block-link upper">
                                Обратный звонок
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </header>
