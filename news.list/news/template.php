<?php if (!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED !== true) die(); ?>

<div class="news-list">
    <?php foreach ($arResult["ITEMS"] as $arItem): ?>
        <div class="news-item">
            <a href="<?= $arItem["DETAIL_PAGE_URL"] ?>">
                <div class="news-item__title"><?= $arItem["NAME"] ?></div>
                <div class="news-item__date"><?= $arItem["DISPLAY_ACTIVE_FROM"] ?></div>
                <?php if ($arItem["PREVIEW_PICTURE"]): ?>
                    <img src="<?= $arItem["PREVIEW_PICTURE"]["SRC"] ?>" alt="<?= $arItem["NAME"] ?>" class="news-item__image"/>
                <?php endif; ?>
                <div class="news-item__text"><?= $arItem["PREVIEW_TEXT"] ?></div>
            </a>
        </div>
    <?php endforeach; ?>
</div>
