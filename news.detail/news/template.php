<?php if (!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED !== true) die(); ?>

<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title><?= $arResult["NAME"] ?></title>
    <link rel="shortcut icon" href="/local/templates/ваш_шаблон/images/favicon.ico" type="image/x-icon">
    <link href="/local/templates/ваш_шаблон/build/css/common.css" rel="stylesheet">
</head>
<body>
<div class="article-card">
    <div class="article-card__title"><?= $arResult["NAME"] ?></div>
    <div class="article-card__date"><?= $arResult["DISPLAY_ACTIVE_FROM"] ?></div>
    <div class="article-card__content">
        <?php if ($arResult["DETAIL_PICTURE"]): ?>
            <div class="article-card__image sticky">
                <img src="<?= $arResult["DETAIL_PICTURE"]["SRC"] ?>" alt="<?= $arResult["NAME"] ?>" data-object-fit="cover"/>
            </div>
        <?php endif; ?>
        <div class="article-card__text">
            <div class="block-content"><?= $arResult["DETAIL_TEXT"] ?></div>
            <a class="article-card__button" href="/news/">Назад к новостям</a>
        </div>
    </div>
</div>
</body>
</html>
