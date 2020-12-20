<? if (!defined('B_PROLOG_INCLUDED') || B_PROLOG_INCLUDED !== true) die();

use \Bitrix\Main\Localization\Loc;

/**
 * @global CMain $APPLICATION
 * @var array $arParams
 * @var array $item
 * @var array $actualItem
 * @var array $minOffer
 * @var array $itemIds
 * @var array $price
 * @var array $measureRatio
 * @var bool $haveOffers
 * @var bool $showSubscribe
 * @var array $morePhoto
 * @var bool $showSlider
 * @var bool $itemHasDetailUrl
 * @var string $imgTitle
 * @var string $productTitle
 * @var string $buttonSizeClass
 * @var CatalogSectionComponent $component
 */
?>

<div class="card-product">

    <div class="card-product__stock" style="z-index: 20">

        <? if ($arParams['SHOW_DISCOUNT_PERCENT'] === 'Y') { ?>
        <div
            class="card-product__stock_number active <?=$discountPositionClass?>"
            id="<?=$itemIds['DSC_PERC']?>"
            <?=($price['PERCENT'] > 0 ? '' : 'style="display: none;"')?>
        >
            <span><?=-$price['PERCENT']?>%</span>

        </div>
        <? } ?>
        <!--<div class="card-product__stock_number active">-25%</div>-->


        <div class="card-product__stock_text active">Акция</div>

    </div>

	<? if ($itemHasDetailUrl): ?>
	<a class="card-product__box" href="<?=$item['DETAIL_PAGE_URL']?>" <?/*title="<?=$imgTitle?>"*/?> data-entity="image-wrapper">
    <? else: ?>
    <span class="card-product__box" data-entity="image-wrapper">
	<? endif; ?>

        <?/*
		<span class="product-item-image-slider-slide-container slide" id="<?=$itemIds['PICT_SLIDER']?>" <?=($showSlider ? '' : 'style="display: none;"')?> data-slider-interval="<?=$arParams['SLIDER_INTERVAL']?>" data-slider-wrap="true">
        <? if ($showSlider) : ?>
            <? foreach ($morePhoto as $key => $photo) : ?>
            <img class="product-item-image-slide item <?=($key == 0 ? 'active' : '')?>" src="<?=$photo['SRC']?>" alt="<?=$imgTitle?>">
            <? endforeach; ?>
        <? endif; ?>
		</span>
        */?>

		<img
            class="product-item-image-original"
            id="<?=$itemIds['PICT']?>"
            src="<?=$item['PREVIEW_PICTURE']['SRC']?>"
            <?/*loading="lazy"*/?>
            height="150px"
            alt="<?=$imgTitle?>"
            style="-webkit-object-fit: cover; object-fit: cover; -webkit-object-position: center; object-position: center"
        />

		<?/* if ($item['SECOND_PICT']) :
			$bgImage = !empty($item['PREVIEW_PICTURE_SECOND']) ? $item['PREVIEW_PICTURE_SECOND']['SRC'] : $item['PREVIEW_PICTURE']['SRC'];
        ?>
        <img
            class="product-item-image-alternative"
            id="<?=$itemIds['SECOND_PICT']?>"
            src="<?=$bgImage?>" alt="<?=$imgTitle?>"
            style="<?=($showSlider ? 'display: none;' : '')?>"
        />
        <? endif; */?>

		<?/* if ($arParams['SHOW_DISCOUNT_PERCENT'] === 'Y') { ?>
        <div
            class="product-item-label-ring <?=$discountPositionClass?>"
            id="<?=$itemIds['DSC_PERC']?>"
            <?=($price['PERCENT'] > 0 ? '' : 'style="display: none;"')?>
        >
            <span><?=-$price['PERCENT']?>%</span>
        </div>
        <? } */?>

		<? if ($item['LABEL']) { ?>
        <div class="product-item-label-text <?=$labelPositionClass?>" id="<?=$itemIds['STICKER_ID']?>">
            <?
            if (!empty($item['LABEL_ARRAY_VALUE']))
            {
                foreach ($item['LABEL_ARRAY_VALUE'] as $code => $value)
                {
                    ?>
                    <div<?=(!isset($item['LABEL_PROP_MOBILE'][$code]) ? ' class="d-none d-sm-block"' : '')?>>
                        <span title="<?=$value?>"><?=$value?></span>
                    </div>
                    <?
                }
            }
            ?>
        </div>
        <? } ?>

        <?/*
		<span class="product-item-image-slider-control-container" id="<?=$itemIds['PICT_SLIDER']?>_indicator"<?=($showSlider ? '' : 'style="display: none;"')?>>
        <? if ($showSlider) { ?>
            <? foreach ($morePhoto as $key => $photo) { ?>
            <span class="product-item-image-slider-control<?=($key == 0 ? ' active' : '')?>" data-go-to="<?=$key?>"></span>
            <? } ?>
        <? } ?>
		</span>
        */?>

		<? if ($arParams['SLIDER_PROGRESS'] === 'Y') { ?>
        <span class="product-item-image-slider-progress-bar-container">
            <span class="product-item-image-slider-progress-bar" id="<?=$itemIds['PICT_SLIDER']?>_progress_bar" style="width: 0;"></span>
        </span>
        <? } ?>

    <? if ($itemHasDetailUrl): ?>
	</a>
    <? else: ?>
	</span>
    <? endif; ?>

    <div class="card-product__content">
        <div class="card-product__about">

            <? if ($itemHasDetailUrl): ?>
            <a href="<?=$item['DETAIL_PAGE_URL']?>" style="text-decoration: none">
            <? endif; ?>
                <div class="card-product__about_name">
                    <?=$productTitle?>
                </div>
            <? if ($itemHasDetailUrl): ?>
            </a>
            <? endif; ?>

            <? if (!empty($item['DISPLAY_PROPERTIES'])) : ?>
            <? foreach ($item['DISPLAY_PROPERTIES'] as $code => $displayProperty) { ?>
            <div class="card-product__about_art" data-entity="props-block">
                <span class="<?=(!isset($item['PROPERTY_CODE_MOBILE'][$code]) ? ' d-none d-sm-block' : '')?>">
                    <?=$displayProperty['NAME']?>:
                </span>
                <span class="<?=(!isset($item['PROPERTY_CODE_MOBILE'][$code]) ? ' d-none d-sm-block' : '')?>">
                    <?=(is_array($displayProperty['DISPLAY_VALUE'])
                        ? implode(' / ', $displayProperty['DISPLAY_VALUE'])
                        : $displayProperty['DISPLAY_VALUE'])?>
                </span>
            </div>
            <? } ?>
            <? endif; ?>

            <div class="card-product__about_text">

                <? if (!empty($item['PREVIEW_TEXT'])) : ?>
                    <?=$item['PREVIEW_TEXT'];?>
                <? else : ?>
                    <?
                    $item['DETAIL_TEXT'] = mb_strimwidth($item['DETAIL_TEXT'],0,120,'');
                    echo $item['DETAIL_TEXT'];
                    ?>
                <? endif; ?>

            </div>


        </div>

        <div class="card-product__buy" data-entity="price-block">
            <div class="price">
                <? if ($arParams['SHOW_OLD_PRICE'] === 'Y') : ?>
                <span class="price__was" id="<?=$itemIds['PRICE_OLD']?>"
                    <?=($price['RATIO_PRICE'] >= $price['RATIO_BASE_PRICE'] ? 'style="display: none;"' : '')?>>
                    <?=$price['PRINT_RATIO_BASE_PRICE']?>
                </span>
                <? endif; ?>
                <span class="price__now" id="<?=$itemIds['PRICE']?>">
                <? if (!empty($price)) {
                    if ($arParams['PRODUCT_DISPLAY_MODE'] === 'N' && $haveOffers) {
                        echo Loc::getMessage(
                            'CT_BCI_TPL_MESS_PRICE_SIMPLE_MODE',
                            array(
                                '#PRICE#' => $price['PRINT_RATIO_PRICE'],
                                '#VALUE#' => $measureRatio,
                                '#UNIT#' => $minOffer['ITEM_MEASURE']['TITLE']
                            )
                        );
                    } else {
                        echo $price['PRINT_RATIO_PRICE'];
                    }
                } ?>
                </span>
            </div>
        </div>

    </div>

    <? if (!$haveOffers) : ?>

        <? if ($actualItem['CAN_BUY']) { ?>
    <span id="<?=$itemIds['BASKET_ACTIONS']?>">
        <button class="basket_btn" id="<?=$itemIds['BUY_LINK']?>">
            <div class="basket_content-out">
                <div class="basket_icon">
                    <svg width="20" height="20" viewBox="0 0 31 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path fill-rule="evenodd" clip-rule="evenodd" d="M1 2.66667C1 2.48986 1.07024 2.32029 1.19527 2.19526C1.3203 2.07024 1.48987 2 1.66669 2H3.66675C3.81546 2.00004 3.95989 2.0498 4.07707 2.14137C4.19425 2.23293 4.27745 2.36105 4.31344 2.50533L4.85345 4.66667H20.3339C20.4318 4.66676 20.5285 4.6884 20.6171 4.73007C20.7057 4.77173 20.784 4.83239 20.8465 4.90774C20.909 4.98308 20.9541 5.07127 20.9787 5.16602C21.0032 5.26078 21.0066 5.35978 20.9886 5.456L18.9886 16.1227C18.96 16.2754 18.8789 16.4134 18.7593 16.5127C18.6398 16.6121 18.4893 16.6665 18.3339 16.6667H6.3335C6.17807 16.6665 6.02758 16.6121 5.90803 16.5127C5.78849 16.4134 5.70741 16.2754 5.67881 16.1227L3.68008 5.476L3.14673 3.33333H1.66669C1.48987 3.33333 1.3203 3.2631 1.19527 3.13807C1.07024 3.01305 1 2.84348 1 2.66667ZM5.13613 6L6.88685 15.3333H17.7805L19.5312 6H5.13613ZM7.66687 16.6667C6.95961 16.6667 6.28131 16.9476 5.7812 17.4477C5.28108 17.9478 5.00012 18.6261 5.00012 19.3333C5.00012 20.0406 5.28108 20.7189 5.7812 21.219C6.28131 21.719 6.95961 22 7.66687 22C8.37414 22 9.05244 21.719 9.55255 21.219C10.0527 20.7189 10.3336 20.0406 10.3336 19.3333C10.3336 18.6261 10.0527 17.9478 9.55255 17.4477C9.05244 16.9476 8.37414 16.6667 7.66687 16.6667ZM17.0005 16.6667C16.2932 16.6667 15.6149 16.9476 15.1148 17.4477C14.6147 17.9478 14.3337 18.6261 14.3337 19.3333C14.3337 20.0406 14.6147 20.7189 15.1148 21.219C15.6149 21.719 16.2932 22 17.0005 22C17.7078 22 18.3861 21.719 18.8862 21.219C19.3863 20.7189 19.6672 20.0406 19.6672 19.3333C19.6672 18.6261 19.3863 17.9478 18.8862 17.4477C18.3861 16.9476 17.7078 16.6667 17.0005 16.6667ZM7.66687 18C7.31324 18 6.97409 18.1405 6.72403 18.3905C6.47398 18.6406 6.3335 18.9797 6.3335 19.3333C6.3335 19.687 6.47398 20.0261 6.72403 20.2761C6.97409 20.5262 7.31324 20.6667 7.66687 20.6667C8.02051 20.6667 8.35965 20.5262 8.60971 20.2761C8.85977 20.0261 9.00025 19.687 9.00025 19.3333C9.00025 18.9797 8.85977 18.6406 8.60971 18.3905C8.35965 18.1405 8.02051 18 7.66687 18ZM17.0005 18C16.6469 18 16.3077 18.1405 16.0577 18.3905C15.8076 18.6406 15.6671 18.9797 15.6671 19.3333C15.6671 19.687 15.8076 20.0261 16.0577 20.2761C16.3077 20.5262 16.6469 20.6667 17.0005 20.6667C17.3541 20.6667 17.6933 20.5262 17.9433 20.2761C18.1934 20.0261 18.3339 19.687 18.3339 19.3333C18.3339 18.9797 18.1934 18.6406 17.9433 18.3905C17.6933 18.1405 17.3541 18 17.0005 18Z" fill="currentColor"></path>
                        <path d="M19.851 4.85095L20.5581 5.55806L19.851 4.85095C19.5462 5.1557 19.375 5.56902 19.375 6V9.375H16C15.569 9.375 15.1557 9.54621 14.851 9.85095L15.5581 10.5581L14.851 9.85095C14.5462 10.1557 14.375 10.569 14.375 11C14.375 11.431 14.5462 11.8443 14.851 12.149L15.5581 11.4419L14.851 12.149C15.1557 12.4538 15.569 12.625 16 12.625H19.375V16C19.375 16.431 19.5462 16.8443 19.851 17.149C20.1557 17.4538 20.569 17.625 21 17.625C21.431 17.625 21.8443 17.4538 22.149 17.149C22.4538 16.8443 22.625 16.431 22.625 16V12.625H26C26.431 12.625 26.8443 12.4538 27.149 12.1491C27.4538 11.8443 27.625 11.431 27.625 11C27.625 10.569 27.4538 10.1557 27.149 9.85095C26.8443 9.54621 26.431 9.375 26 9.375H22.625V6C22.625 5.56902 22.4538 5.1557 22.149 4.85095L21.4419 5.55806L22.149 4.85095C21.8443 4.5462 21.431 4.375 21 4.375C20.569 4.375 20.1557 4.54621 19.851 4.85095Z" fill="currentColor" fill-opacity="0.87" stroke="#62BB46" stroke-width="2"></path>
                    </svg>
                </div>
                <span>
                    <?=($arParams['ADD_TO_BASKET_ACTION'] === 'BUY' ? $arParams['MESS_BTN_BUY'] : $arParams['MESS_BTN_ADD_TO_BASKET'])?>
                </span>
            </div>
            <div class="basket_content-in">
                <span>Добавлено</span>
            </div>
        </button>
    </span>
        <? }  else { ?>
    <div id="<?=$itemIds['NOT_AVAILABLE_MESS']?>" style="text-align: center">
        <span class="price__now"><?=$arParams['MESS_NOT_AVAILABLE']?></span>
    </div>
    <button type="button" class="basket_btn">
        <? if ($showSubscribe) {
            $APPLICATION->IncludeComponent(
                'bitrix:catalog.product.subscribe',
                '',
                array(
                    'PRODUCT_ID' => $actualItem['ID'],
                    'BUTTON_ID' => $itemIds['SUBSCRIBE_LINK'],
                    'BUTTON_CLASS' => 'basket_btn',// 'btn btn-primary '.$buttonSizeClass,
                    'DEFAULT_DISPLAY' => true,
                    'MESS_BTN_SUBSCRIBE' => $arParams['~MESS_BTN_SUBSCRIBE'],
                ),
                $component,
                array('HIDE_ICONS' => 'Y')
            );
        } ?>
    </button>
        <? } ?>

    <? else :

            if ($arParams['PRODUCT_DISPLAY_MODE'] === 'Y')
            {
                ?>
                <div class="product-item-button-container">
                    <?
                    if ($showSubscribe)
                    {
                        $APPLICATION->IncludeComponent(
                            'bitrix:catalog.product.subscribe',
                            '',
                            array(
                                'PRODUCT_ID' => $item['ID'],
                                'BUTTON_ID' => $itemIds['SUBSCRIBE_LINK'],
                                'BUTTON_CLASS' => 'btn btn-primary '.$buttonSizeClass,
                                'DEFAULT_DISPLAY' => !$actualItem['CAN_BUY'],
                                'MESS_BTN_SUBSCRIBE' => $arParams['~MESS_BTN_SUBSCRIBE'],
                            ),
                            $component,
                            array('HIDE_ICONS' => 'Y')
                        );
                    }
                    ?>
                    <button class="btn btn-link <?=$buttonSizeClass?>"
                            id="<?=$itemIds['NOT_AVAILABLE_MESS']?>" href="javascript:void(0)" rel="nofollow"
                        <?=($actualItem['CAN_BUY'] ? 'style="display: none;"' : '')?>>
                        <?=$arParams['MESS_NOT_AVAILABLE']?>
                    </button>
                    <div id="<?=$itemIds['BASKET_ACTIONS']?>" <?=($actualItem['CAN_BUY'] ? '' : 'style="display: none;"')?>>
                        <button class="btn btn-primary <?=$buttonSizeClass?>" id="<?=$itemIds['BUY_LINK']?>"
                                href="javascript:void(0)" rel="nofollow">
                            <?=($arParams['ADD_TO_BASKET_ACTION'] === 'BUY' ? $arParams['MESS_BTN_BUY'] : $arParams['MESS_BTN_ADD_TO_BASKET'])?>
                        </button>
                    </div>
                </div>
                <?
            }
            else
            {
                ?>
                <div class="product-item-button-container">
                    <button class="btn btn-primary <?=$buttonSizeClass?>" href="<?=$item['DETAIL_PAGE_URL']?>">
                        <?=$arParams['MESS_BTN_DETAIL']?>
                    </button>
                </div>
                <?
            }
    endif; ?>

</div>