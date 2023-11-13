<?php if(!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();
/** @var array $arParams */
/** @var array $arResult */
/** @global CMain $APPLICATION */
/** @global CUser $USER */
/** @global CDatabase $DB */
/** @var CBitrixComponentTemplate $this */
/** @var string $templateName */
/** @var string $templateFile */
/** @var string $templateFolder */
/** @var string $componentPath */
/** @var CBitrixComponent $component */
$this->setFrameMode(true);
?>

<div class="article-card">
    <div class="article-card__title">
        <?php if($arParams["DISPLAY_NAME"]!="N" && $arResult["NAME"]): ?>
            <?= $arResult["NAME"] ?>
        <?php endif; ?>
    </div>
    <div class="article-card__date">
        <?php if($arParams["DISPLAY_DATE"]!="N" && $arResult["DISPLAY_ACTIVE_FROM"]): ?>
            <span class="news-date-time"><?= $arResult["DISPLAY_ACTIVE_FROM"] ?></span>
        <?php endif; ?>
    </div>
    <div class="article-card__content">
        <div class="article-card__image">
            <img src="<?= $arResult["DETAIL_PICTURE"]["SRC"] ?>"
            alt="<?= $arResult["DETAIL_PICTURE"]["ALT"] ?>" data-object-fit="cover"/>
        </div>
        <div class="article-card__text">
            <div class="block-content" data-anim="anim-3">
            <?php if($arResult["NAV_RESULT"]): ?>
                <?php if($arParams["DISPLAY_TOP_PAGER"]): ?><?= $arResult["NAV_STRING"] ?><br /><?php endif; ?>
                <?php echo $arResult["NAV_TEXT"]; ?>
                <?php if($arParams["DISPLAY_BOTTOM_PAGER"]): ?><br /><?= $arResult["NAV_STRING"] ?><?php endif; ?>
            <?php elseif($arResult["DETAIL_TEXT"] <> ''): ?>
                <?php echo $arResult["DETAIL_TEXT"]; ?>
            <?php else: ?>
                <?php echo $arResult["PREVIEW_TEXT"]; ?>
            <?php endif ?>
            </div>
            <a class="article-card__button" href="<?= $arResult["LIST_PAGE_URL"] ?>">
                <?= GetMessage("T_NEWS_DETAIL_BACK") ?>
            </a>
        </div>
    </div>
</div>
