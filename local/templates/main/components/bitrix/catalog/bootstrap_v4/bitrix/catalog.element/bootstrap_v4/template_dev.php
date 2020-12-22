<? if (!defined('B_PROLOG_INCLUDED') || B_PROLOG_INCLUDED !== true) die();

use Bitrix\Main\Localization\Loc;

/**
* @global CMain $APPLICATION
* @var array $arParams
* @var array $arResult
* @var CatalogSectionComponent $component
* @var CBitrixComponentTemplate $this
* @var string $templateName
* @var string $componentPath
* @var string $templateFolder
*/

$this->setFrameMode(true);

$templateLibrary = array('popup', 'fx');
$currencyList = '';

if (!empty($arResult['CURRENCIES']))
{
	$templateLibrary[] = 'currency';
	$currencyList = CUtil::PhpToJSObject($arResult['CURRENCIES'], false, true, true);
}

$templateData = array(
	'TEMPLATE_THEME' => $arParams['TEMPLATE_THEME'],
	'TEMPLATE_LIBRARY' => $templateLibrary,
	'CURRENCIES' => $currencyList,
	'ITEM' => array(
		'ID' => $arResult['ID'],
		'IBLOCK_ID' => $arResult['IBLOCK_ID'],
		'OFFERS_SELECTED' => $arResult['OFFERS_SELECTED'],
		'JS_OFFERS' => $arResult['JS_OFFERS']
	)
);
unset($currencyList, $templateLibrary);

$mainId = $this->GetEditAreaId($arResult['ID']);
$itemIds = array(
	'ID' => $mainId,
	'DISCOUNT_PERCENT_ID' => $mainId.'_dsc_pict',
	'STICKER_ID' => $mainId.'_sticker',
	'BIG_SLIDER_ID' => $mainId.'_big_slider',
	'BIG_IMG_CONT_ID' => $mainId.'_bigimg_cont',
	'SLIDER_CONT_ID' => $mainId.'_slider_cont',
	'OLD_PRICE_ID' => $mainId.'_old_price',
	'PRICE_ID' => $mainId.'_price',
	'DISCOUNT_PRICE_ID' => $mainId.'_price_discount',
	'PRICE_TOTAL' => $mainId.'_price_total',
	'SLIDER_CONT_OF_ID' => $mainId.'_slider_cont_',
	'QUANTITY_ID' => $mainId.'_quantity',
	'QUANTITY_DOWN_ID' => $mainId.'_quant_down',
	'QUANTITY_UP_ID' => $mainId.'_quant_up',
	'QUANTITY_MEASURE' => $mainId.'_quant_measure',
	'QUANTITY_LIMIT' => $mainId.'_quant_limit',
	'BUY_LINK' => $mainId.'_buy_link',
	'ADD_BASKET_LINK' => $mainId.'_add_basket_link',
	'BASKET_ACTIONS_ID' => $mainId.'_basket_actions',
	'NOT_AVAILABLE_MESS' => $mainId.'_not_avail',
	'COMPARE_LINK' => $mainId.'_compare_link',
	'TREE_ID' => $mainId.'_skudiv',
	'DISPLAY_PROP_DIV' => $mainId.'_sku_prop',
	'DISPLAY_MAIN_PROP_DIV' => $mainId.'_main_sku_prop',
	'OFFER_GROUP' => $mainId.'_set_group_',
	'BASKET_PROP_DIV' => $mainId.'_basket_prop',
	'SUBSCRIBE_LINK' => $mainId.'_subscribe',
	'TABS_ID' => $mainId.'_tabs',
	'TAB_CONTAINERS_ID' => $mainId.'_tab_containers',
	'SMALL_CARD_PANEL_ID' => $mainId.'_small_card_panel',
	'TABS_PANEL_ID' => $mainId.'_tabs_panel'
);
$obName = $templateData['JS_OBJ'] = 'ob'.preg_replace('/[^a-zA-Z0-9_]/', 'x', $mainId);
$name = !empty($arResult['IPROPERTY_VALUES']['ELEMENT_PAGE_TITLE'])
	? $arResult['IPROPERTY_VALUES']['ELEMENT_PAGE_TITLE']
	: $arResult['NAME'];
$title = !empty($arResult['IPROPERTY_VALUES']['ELEMENT_DETAIL_PICTURE_FILE_TITLE'])
	? $arResult['IPROPERTY_VALUES']['ELEMENT_DETAIL_PICTURE_FILE_TITLE']
	: $arResult['NAME'];
$alt = !empty($arResult['IPROPERTY_VALUES']['ELEMENT_DETAIL_PICTURE_FILE_ALT'])
	? $arResult['IPROPERTY_VALUES']['ELEMENT_DETAIL_PICTURE_FILE_ALT']
	: $arResult['NAME'];

$haveOffers = !empty($arResult['OFFERS']);
if ($haveOffers)
{
	$actualItem = isset($arResult['OFFERS'][$arResult['OFFERS_SELECTED']])
		? $arResult['OFFERS'][$arResult['OFFERS_SELECTED']]
		: reset($arResult['OFFERS']);
	$showSliderControls = false;

	foreach ($arResult['OFFERS'] as $offer)
	{
		if ($offer['MORE_PHOTO_COUNT'] > 1)
		{
			$showSliderControls = true;
			break;
		}
	}
}
else
{
	$actualItem = $arResult;
	$showSliderControls = $arResult['MORE_PHOTO_COUNT'] > 1;
}

$skuProps = array();
$price = $actualItem['ITEM_PRICES'][$actualItem['ITEM_PRICE_SELECTED']];
$measureRatio = $actualItem['ITEM_MEASURE_RATIOS'][$actualItem['ITEM_MEASURE_RATIO_SELECTED']]['RATIO'];
$showDiscount = $price['PERCENT'] > 0;

$showDescription = !empty($arResult['PREVIEW_TEXT']) || !empty($arResult['DETAIL_TEXT']);
$showBuyBtn = in_array('BUY', $arParams['ADD_TO_BASKET_ACTION']);
$buyButtonClassName = in_array('BUY', $arParams['ADD_TO_BASKET_ACTION_PRIMARY']) ? 'btn-primary' : 'btn-link';
$showAddBtn = in_array('ADD', $arParams['ADD_TO_BASKET_ACTION']);
$showButtonClassName = in_array('ADD', $arParams['ADD_TO_BASKET_ACTION_PRIMARY']) ? 'btn-primary' : 'btn-link';
$showSubscribe = $arParams['PRODUCT_SUBSCRIPTION'] === 'Y' && ($arResult['PRODUCT']['SUBSCRIBE'] === 'Y' || $haveOffers);

$arParams['MESS_BTN_BUY'] = $arParams['MESS_BTN_BUY'] ?: Loc::getMessage('CT_BCE_CATALOG_BUY');
$arParams['MESS_BTN_ADD_TO_BASKET'] = $arParams['MESS_BTN_ADD_TO_BASKET'] ?: Loc::getMessage('CT_BCE_CATALOG_ADD');
$arParams['MESS_NOT_AVAILABLE'] = $arParams['MESS_NOT_AVAILABLE'] ?: Loc::getMessage('CT_BCE_CATALOG_NOT_AVAILABLE');
$arParams['MESS_BTN_COMPARE'] = $arParams['MESS_BTN_COMPARE'] ?: Loc::getMessage('CT_BCE_CATALOG_COMPARE');
$arParams['MESS_PRICE_RANGES_TITLE'] = $arParams['MESS_PRICE_RANGES_TITLE'] ?: Loc::getMessage('CT_BCE_CATALOG_PRICE_RANGES_TITLE');
$arParams['MESS_DESCRIPTION_TAB'] = $arParams['MESS_DESCRIPTION_TAB'] ?: Loc::getMessage('CT_BCE_CATALOG_DESCRIPTION_TAB');
$arParams['MESS_PROPERTIES_TAB'] = $arParams['MESS_PROPERTIES_TAB'] ?: Loc::getMessage('CT_BCE_CATALOG_PROPERTIES_TAB');
$arParams['MESS_COMMENTS_TAB'] = $arParams['MESS_COMMENTS_TAB'] ?: Loc::getMessage('CT_BCE_CATALOG_COMMENTS_TAB');
$arParams['MESS_SHOW_MAX_QUANTITY'] = $arParams['MESS_SHOW_MAX_QUANTITY'] ?: Loc::getMessage('CT_BCE_CATALOG_SHOW_MAX_QUANTITY');
$arParams['MESS_RELATIVE_QUANTITY_MANY'] = $arParams['MESS_RELATIVE_QUANTITY_MANY'] ?: Loc::getMessage('CT_BCE_CATALOG_RELATIVE_QUANTITY_MANY');
$arParams['MESS_RELATIVE_QUANTITY_FEW'] = $arParams['MESS_RELATIVE_QUANTITY_FEW'] ?: Loc::getMessage('CT_BCE_CATALOG_RELATIVE_QUANTITY_FEW');

$positionClassMap = array(
	'left' => 'product-item-label-left',
	'center' => 'product-item-label-center',
	'right' => 'product-item-label-right',
	'bottom' => 'product-item-label-bottom',
	'middle' => 'product-item-label-middle',
	'top' => 'product-item-label-top'
);

$discountPositionClass = 'product-item-label-big';
if ($arParams['SHOW_DISCOUNT_PERCENT'] === 'Y' && !empty($arParams['DISCOUNT_PERCENT_POSITION']))
{
	foreach (explode('-', $arParams['DISCOUNT_PERCENT_POSITION']) as $pos)
	{
		$discountPositionClass .= isset($positionClassMap[$pos]) ? ' '.$positionClassMap[$pos] : '';
	}
}

$labelPositionClass = 'product-item-label-big';
if (!empty($arParams['LABEL_PROP_POSITION']))
{
	foreach (explode('-', $arParams['LABEL_PROP_POSITION']) as $pos)
	{
		$labelPositionClass .= isset($positionClassMap[$pos]) ? ' '.$positionClassMap[$pos] : '';
	}
}

$themeClass = isset($arParams['TEMPLATE_THEME']) ? ' bx-'.$arParams['TEMPLATE_THEME'] : '';
?>

<div class="product">
    <div class="container">
        <div class="product-content">
            <div class="product-content__left">
                <div class="banner-product">
                    <div class="card-product__stock">
                        <div class="card-product__stock_number active">-25%</div>
                        <div class="card-product__stock_text active">Акция</div>
                    </div>
                    <div class="swiper-container banner-product__big">
                        <div class="swiper-wrapper banner-product__big_wrapper">
                            <div class="swiper-slide banner-product__big_slide">
                                <div class="card-product__stock">
                                </div>
                                <div class="banner-product__big_img"><img src="<?=SITE_TEMPLATE_PATH;?>/img/banner/banner-sell.jpg" alt=""></div>
                            </div>
                            <div class="swiper-slide banner-product__big_slide">
                                <div class="banner-product__big_img"><img src="<?=SITE_TEMPLATE_PATH;?>/img/banner/banner-sell.jpg" alt=""></div>
                            </div>
                            <div class="swiper-slide banner-product__big_slide">
                                <div class="banner-product__big_img"><img src="<?=SITE_TEMPLATE_PATH;?>/img/banner/banner-sell.jpg" alt=""></div>
                            </div>
                            <div class="swiper-slide banner-product__big_slide">
                                <div class="banner-product__big_img"><img src="<?=SITE_TEMPLATE_PATH;?>/img/banner/banner-sell.jpg" alt=""></div>
                            </div>
                        </div>
                        <div class="swiper-pagination banner-product-pagination"></div>
                    </div>
                    <div class="swiper-container banner-product__small">
                        <div class="swiper-wrapper banner-product__small_wrapper">
                            <div class="swiper-slide banner-product__small_slide">
                                <div class="d"><img src="<?=SITE_TEMPLATE_PATH;?>/img/banner/banner-sell.jpg" alt=""></div>
                            </div>
                            <div class="swiper-slide banner-product__small_slide">
                                <div class="d"><img src="<?=SITE_TEMPLATE_PATH;?>/img/banner/banner-sell.jpg" alt=""></div>
                            </div>
                            <div class="swiper-slide banner-product__small_slide">
                                <div class="d"><img src="<?=SITE_TEMPLATE_PATH;?>/img/banner/banner-sell.jpg" alt=""></div>
                            </div>
                            <div class="swiper-slide banner-product__small_slide">
                                <div class="d"><img src="<?=SITE_TEMPLATE_PATH;?>/img/banner/banner-sell.jpg" alt=""></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="product-content__right">
                <div class="product-content__right_banner">
                    <div class="product-content__right_banner-img">
                        <img src="<?=SITE_TEMPLATE_PATH;?>/img/brand/karcher.png" alt="">
                    </div>
                    <a class="product-content__right_banner-share" href="#">
                        <span class="product-content__right_banner-text">Поделиться</span>
                        <div class="product-content__right_banner-icon">
                            <svg width="20" height="20" viewBox="0 0 20 20" fill="none">
                                <path fill-rule="evenodd" clip-rule="evenodd" d="M13.2554 6.48264L13.1025 6.31367L7.59043 9.07346L7.63339 9.29666C7.73026 9.8 7.72207 10.3179 7.60933 10.818L7.55778 11.0466L13.0186 13.7954L13.1712 13.6144C13.7521 12.9263 14.5639 12.4735 15.4547 12.3411C16.3454 12.2086 17.2539 12.4056 18.0098 12.895C18.7657 13.3845 19.3171 14.1328 19.5608 14.9997C19.8045 15.8667 19.7236 16.7927 19.3333 17.6043C18.9431 18.4159 18.2702 19.0572 17.4409 19.4082C16.6116 19.7592 15.6827 19.7957 14.8284 19.5109C13.9742 19.226 13.2531 18.6394 12.8004 17.8609C12.3476 17.0825 12.1944 16.1656 12.3693 15.2822L12.4136 15.0585L6.91425 12.2905L6.76106 12.4623C6.25871 13.0257 5.59605 13.422 4.86201 13.598C4.12797 13.7739 3.35767 13.7212 2.65447 13.4468C1.95126 13.1724 1.34881 12.6895 0.927939 12.0629C0.507069 11.4363 0.287923 10.6959 0.299905 9.94117C0.311887 9.18642 0.554425 8.4534 0.994974 7.84046C1.43552 7.22752 2.053 6.76398 2.76456 6.51205C3.47612 6.26013 4.24771 6.23186 4.97579 6.43104C5.70388 6.63023 6.35362 7.04734 6.83784 7.6264L6.99009 7.80848L12.4501 5.07414L12.3961 4.84354C12.1907 3.96675 12.3121 3.04515 12.7376 2.25148C13.1631 1.45782 13.8634 0.846567 14.7073 0.532301C15.5512 0.218036 16.4808 0.22233 17.3218 0.544378C18.1627 0.866426 18.8574 1.48412 19.2755 2.28168C19.6937 3.07925 19.8066 4.00192 19.5931 4.87678C19.3796 5.75164 18.8544 6.51861 18.1159 7.03395C17.3774 7.54928 16.4763 7.7776 15.5816 7.67611C14.6868 7.57462 13.8597 7.15028 13.2554 6.48264ZM17.6263 5.6263C17.195 6.05764 16.61 6.29996 16 6.29996C15.39 6.29996 14.805 6.05764 14.3736 5.6263C13.9423 5.19497 13.7 4.60996 13.7 3.99996C13.7 3.38996 13.9423 2.80495 14.3736 2.37361C14.805 1.94228 15.39 1.69996 16 1.69996C16.61 1.69996 17.195 1.94228 17.6263 2.37361C18.0577 2.80495 18.3 3.38996 18.3 3.99996C18.3 4.60996 18.0577 5.19497 17.6263 5.6263ZM5.62632 11.6263C5.19499 12.0576 4.60998 12.3 3.99998 12.3C3.38998 12.3 2.80497 12.0576 2.37363 11.6263C1.9423 11.195 1.69998 10.61 1.69998 9.99996C1.69998 9.38996 1.9423 8.80495 2.37363 8.37361C2.80497 7.94228 3.38998 7.69996 3.99998 7.69996C4.60998 7.69996 5.19499 7.94228 5.62632 8.37361C6.05766 8.80495 6.29998 9.38996 6.29998 9.99996C6.29998 10.61 6.05766 11.195 5.62632 11.6263ZM17.6263 17.6263C17.195 18.0576 16.61 18.3 16 18.3C15.39 18.3 14.805 18.0576 14.3736 17.6263C13.9423 17.195 13.7 16.61 13.7 16C13.7 15.39 13.9423 14.8049 14.3736 14.3736C14.805 13.9423 15.39 13.7 16 13.7C16.61 13.7 17.195 13.9423 17.6263 14.3736C18.0577 14.8049 18.3 15.39 18.3 16C18.3 16.61 18.0577 17.195 17.6263 17.6263Z" fill="currentColor"/>
                            </svg>
                        </div>
                    </a>
                </div>
                <div class="product-content__right_art">№ 1234567890</div>
                <div class="product-content__right_title">Четырёхрядный многофункциональный культиватор для
                    мелкой пожнивной обработки, основной обработки и
                    глубокого рыхления почвы до 40см
                </div>
                <div class="product-content__right_availability">В наличии</div>
                <div class="product-content__right_parameter">
                    <div class="product-content__right_parameter-weight">
                        <div class="product-content__right_parameter-text">Вес:</div>
                        <div class="product-content__right_parameter-number">3,300 кг</div>
                    </div>
                    <div class="product-content__right_parameter-size">
                        <div class="product-content__right_parameter-text">Габариты:</div>
                        <div class="product-content__right_parameter-number">4,60 х 3,00</div>
                    </div>
                </div>
                <div class="product-content__right_price">
                    <div class="price">
                        <div class="price__was">1 234 567 ₽</div>
                        <div class="price__now">1 234 567 ₽</div>
                    </div>
                </div>
                <div class="product-content__right_buttons">
                    <form class="product-content__right_buttons-quantity" action="">
                        <button class="buttons-quantity__plus" type="button" onclick="this.nextElementSibling.stepDown()">-</button>
                        <input type="number" min="1" max="999" value="1" readonly class="number"/>
                        <button class="buttons-quantity__minus" type="button" onclick="this.previousElementSibling.stepUp()">+</button>
                    </form>
                    <div class="product-content__right_buttons-basket">
                        <a class="basket" href="#2">
                            <button class="basket_btn">
                                <div class="basket_content-out">
                                    <div class="basket_icon">
                                        <svg width="20" height="20" viewBox="0 0 31 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                            <path fill-rule="evenodd" clip-rule="evenodd" d="M1 2.66667C1 2.48986 1.07024 2.32029 1.19527 2.19526C1.3203 2.07024 1.48987 2 1.66669 2H3.66675C3.81546 2.00004 3.95989 2.0498 4.07707 2.14137C4.19425 2.23293 4.27745 2.36105 4.31344 2.50533L4.85345 4.66667H20.3339C20.4318 4.66676 20.5285 4.6884 20.6171 4.73007C20.7057 4.77173 20.784 4.83239 20.8465 4.90774C20.909 4.98308 20.9541 5.07127 20.9787 5.16602C21.0032 5.26078 21.0066 5.35978 20.9886 5.456L18.9886 16.1227C18.96 16.2754 18.8789 16.4134 18.7593 16.5127C18.6398 16.6121 18.4893 16.6665 18.3339 16.6667H6.3335C6.17807 16.6665 6.02758 16.6121 5.90803 16.5127C5.78849 16.4134 5.70741 16.2754 5.67881 16.1227L3.68008 5.476L3.14673 3.33333H1.66669C1.48987 3.33333 1.3203 3.2631 1.19527 3.13807C1.07024 3.01305 1 2.84348 1 2.66667ZM5.13613 6L6.88685 15.3333H17.7805L19.5312 6H5.13613ZM7.66687 16.6667C6.95961 16.6667 6.28131 16.9476 5.7812 17.4477C5.28108 17.9478 5.00012 18.6261 5.00012 19.3333C5.00012 20.0406 5.28108 20.7189 5.7812 21.219C6.28131 21.719 6.95961 22 7.66687 22C8.37414 22 9.05244 21.719 9.55255 21.219C10.0527 20.7189 10.3336 20.0406 10.3336 19.3333C10.3336 18.6261 10.0527 17.9478 9.55255 17.4477C9.05244 16.9476 8.37414 16.6667 7.66687 16.6667ZM17.0005 16.6667C16.2932 16.6667 15.6149 16.9476 15.1148 17.4477C14.6147 17.9478 14.3337 18.6261 14.3337 19.3333C14.3337 20.0406 14.6147 20.7189 15.1148 21.219C15.6149 21.719 16.2932 22 17.0005 22C17.7078 22 18.3861 21.719 18.8862 21.219C19.3863 20.7189 19.6672 20.0406 19.6672 19.3333C19.6672 18.6261 19.3863 17.9478 18.8862 17.4477C18.3861 16.9476 17.7078 16.6667 17.0005 16.6667ZM7.66687 18C7.31324 18 6.97409 18.1405 6.72403 18.3905C6.47398 18.6406 6.3335 18.9797 6.3335 19.3333C6.3335 19.687 6.47398 20.0261 6.72403 20.2761C6.97409 20.5262 7.31324 20.6667 7.66687 20.6667C8.02051 20.6667 8.35965 20.5262 8.60971 20.2761C8.85977 20.0261 9.00025 19.687 9.00025 19.3333C9.00025 18.9797 8.85977 18.6406 8.60971 18.3905C8.35965 18.1405 8.02051 18 7.66687 18ZM17.0005 18C16.6469 18 16.3077 18.1405 16.0577 18.3905C15.8076 18.6406 15.6671 18.9797 15.6671 19.3333C15.6671 19.687 15.8076 20.0261 16.0577 20.2761C16.3077 20.5262 16.6469 20.6667 17.0005 20.6667C17.3541 20.6667 17.6933 20.5262 17.9433 20.2761C18.1934 20.0261 18.3339 19.687 18.3339 19.3333C18.3339 18.9797 18.1934 18.6406 17.9433 18.3905C17.6933 18.1405 17.3541 18 17.0005 18Z" fill="currentColor"/>
                                            <path d="M19.851 4.85095L20.5581 5.55806L19.851 4.85095C19.5462 5.1557 19.375 5.56902 19.375 6V9.375H16C15.569 9.375 15.1557 9.54621 14.851 9.85095L15.5581 10.5581L14.851 9.85095C14.5462 10.1557 14.375 10.569 14.375 11C14.375 11.431 14.5462 11.8443 14.851 12.149L15.5581 11.4419L14.851 12.149C15.1557 12.4538 15.569 12.625 16 12.625H19.375V16C19.375 16.431 19.5462 16.8443 19.851 17.149C20.1557 17.4538 20.569 17.625 21 17.625C21.431 17.625 21.8443 17.4538 22.149 17.149C22.4538 16.8443 22.625 16.431 22.625 16V12.625H26C26.431 12.625 26.8443 12.4538 27.149 12.1491C27.4538 11.8443 27.625 11.431 27.625 11C27.625 10.569 27.4538 10.1557 27.149 9.85095C26.8443 9.54621 26.431 9.375 26 9.375H22.625V6C22.625 5.56902 22.4538 5.1557 22.149 4.85095L21.4419 5.55806L22.149 4.85095C21.8443 4.5462 21.431 4.375 21 4.375C20.569 4.375 20.1557 4.54621 19.851 4.85095Z" fill="currentColor" fill-opacity="0.87" stroke="#62BB46" stroke-width="2"/>
                                        </svg>
                                    </div>
                                    <span>В корзину</span>
                                </div>
                                <div class="basket_content-in">
                                    <span>Добавлено</span>
                                </div>
                            </button>
                        </a>
                    </div>
                </div>
            </div>
        </div>
        <div class="product-delivery">
            <div class="product-delivery__title">Доставка 10-14 дней</div>
            <p>
                Информация о доставке. Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.
            </p>
            <p>
                Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.
            </p>
        </div>
        <div class="product-about">
            <div class="product-about__tabs">
                <nav class="product-about__list">
                    <a href="#description" class="product-about__item">Описание</a>
                    <a href="#characteristic" class="product-about__item">Характеристики</a>
                </nav>
                <div class="product-about__content">
                    <div id="description" class="product-about__content_description">
                        <p> Многоцелевой культиватор Vector представляет огромный
                            спектр возможностей. Уникальность орудия Vector заключается
                            в нашей системе регулирования глубины Easy-Shift, с помощью
                            которой можно бесступенчато (без клипсов) регулировать
                            глубину обработки без необходимости остановки и выхода из
                            кабины трактора. На полях с разнообразной структурой почвы,
                            переход с песчанных на глинистую почву или на сырые низины,
                            водитель может мгновенно подстроить глубину обработки.
                            Будь то заросшие сорняком или утрамбованные кромки полей,
                            глубокие колеи или кучи соломы, оператор имеет возможность
                            отреагировать на это путем изменения глубины обработки,
                            достигая при этом оптимального результата. Наблюдая за
                            ходом культивации, оператор имеет прямую возможность таким
                            путем произвести технологически правильную и эффективную
                            обработки почвы.
                            Другой особенностью орудия Vector, не имеющей аналогов в мире, является озможность использования одной машины с
                            разной рабочей шириной:
                        </p>
                        <ol>
                            <li>Vector 4,6м или 6,2м</li>
                            <li>Vector 5,7м или 8,0м</li>
                            <li>Vector 7,0м или 9,0м рабочей ширины.</li>
                        </ol>
                        <p> Для этого нужно лишь прикрутить или открутить боковые
                            секции, соединённые на фланцах. Это уникальная возможность
                            для хозяйств, после приобретения более мощного трактора
                            увеличить рабочую ширину орудия путем дозаказа боковых
                            секций или наоборот, при недостаче тяговой силы при
                            глубоком рыхлении, просто отстегнуть боковые секции и тем
                            самым уменьшить ширину захвата машины. Испытанные
                            на деле стойки с блоком защиты (600кг) позволяют быстрое
                            переоборудование как на мелкую, так и на глубокую обработку.
                            Широкие, передние четыре опорных колеса и тандемный каток
                            STS являются гарантом плавного хода машины и точного соблюдения рабочей лубины, даже при сильной влажности
                            или на лёгких почвах. Подрессоренная сетчатая борона служит
                            для оптимального распределения соломы, выравнивания
                            и оптимального крошения структуры почвы. Опциональная
                            возможность:
                        </p>
                        <ol>
                            <li>Оснащение системой Boxer - внeсениe двух или одного сортов минеральных удобрений в процессе обработки почвы. Два раздельных бункера с двумя полноценными дозаторами. См. фото снизу.
                            </li>
                            <li>
                                Оснащение системой Speed Drill - посев мелкосемянных культур, рапса, трав, в процессе обработки почвы. см. фото снизу. Сцепка: категория III или IV, либо сцепная плавающая петля 51 мм или 71мм, шаровая головка Шармюллер K80.
                            </li>
                        </ol>
                        <div class="product-about__link">
                            <a href="#" class="product-about__link_item">Подробнее
                                <div class="product-about__link_icon">
                                    <svg width="16" height="16" viewBox="0 0 16 16" fill="none">
                                        <path d="M4 1H9V2H4C3.73478 2 3.48043 2.10536 3.29289 2.29289C3.10536 2.48043 3 2.73478 3 3V13C3 13.2652 3.10536 13.5196 3.29289 13.7071C3.48043 13.8946 3.73478 14 4 14H12C12.2652 14 12.5196 13.8946 12.7071 13.7071C12.8946 13.5196 13 13.2652 13 13V6H14V13C14 13.5304 13.7893 14.0391 13.4142 14.4142C13.0391 14.7893 12.5304 15 12 15H4C3.46957 15 2.96086 14.7893 2.58579 14.4142C2.21071 14.0391 2 13.5304 2 13V3C2 2.46957 2.21071 1.96086 2.58579 1.58579C2.96086 1.21071 3.46957 1 4 1Z" fill="currentColor"/>
                                        <path d="M9 4.5V1L14 6H10.5C10.1022 6 9.72064 5.84196 9.43934 5.56066C9.15804 5.27936 9 4.89782 9 4.5Z" fill="currentColor"/>
                                        <path fill-rule="evenodd" clip-rule="evenodd" d="M5 11.5C5 11.3674 5.05268 11.2402 5.14645 11.1464C5.24021 11.0527 5.36739 11 5.5 11H7.5C7.63261 11 7.75979 11.0527 7.85355 11.1464C7.94732 11.2402 8 11.3674 8 11.5C8 11.6326 7.94732 11.7598 7.85355 11.8536C7.75979 11.9473 7.63261 12 7.5 12H5.5C5.36739 12 5.24021 11.9473 5.14645 11.8536C5.05268 11.7598 5 11.6326 5 11.5ZM5 9.5C5 9.36739 5.05268 9.24021 5.14645 9.14645C5.24021 9.05268 5.36739 9 5.5 9H10.5C10.6326 9 10.7598 9.05268 10.8536 9.14645C10.9473 9.24021 11 9.36739 11 9.5C11 9.63261 10.9473 9.75979 10.8536 9.85355C10.7598 9.94732 10.6326 10 10.5 10H5.5C5.36739 10 5.24021 9.94732 5.14645 9.85355C5.05268 9.75979 5 9.63261 5 9.5ZM5 7.5C5 7.36739 5.05268 7.24021 5.14645 7.14645C5.24021 7.05268 5.36739 7 5.5 7H10.5C10.6326 7 10.7598 7.05268 10.8536 7.14645C10.9473 7.24021 11 7.36739 11 7.5C11 7.63261 10.9473 7.75979 10.8536 7.85355C10.7598 7.94732 10.6326 8 10.5 8H5.5C5.36739 8 5.24021 7.94732 5.14645 7.85355C5.05268 7.75979 5 7.63261 5 7.5Z" fill="currentColor"/>
                                    </svg>
                                </div>
                            </a>
                            <a href="" class="product-about__link_item">Поделиться
                                <div class="product-about__link_icon">
                                    <svg width="16" height="16" viewBox="0 0 20 20" fill="none">
                                        <path fill-rule="evenodd" clip-rule="evenodd" d="M13.2554 6.48264L13.1025 6.31367L7.59043 9.07346L7.63339 9.29666C7.73026 9.8 7.72207 10.3179 7.60933 10.818L7.55778 11.0466L13.0186 13.7954L13.1712 13.6144C13.7521 12.9263 14.5639 12.4735 15.4547 12.3411C16.3454 12.2086 17.2539 12.4056 18.0098 12.895C18.7657 13.3845 19.3171 14.1328 19.5608 14.9997C19.8045 15.8667 19.7236 16.7927 19.3333 17.6043C18.9431 18.4159 18.2702 19.0572 17.4409 19.4082C16.6116 19.7592 15.6827 19.7957 14.8284 19.5109C13.9742 19.226 13.2531 18.6394 12.8004 17.8609C12.3476 17.0825 12.1944 16.1656 12.3693 15.2822L12.4136 15.0585L6.91425 12.2905L6.76106 12.4623C6.25871 13.0257 5.59605 13.422 4.86201 13.598C4.12797 13.7739 3.35767 13.7212 2.65447 13.4468C1.95126 13.1724 1.34881 12.6895 0.927939 12.0629C0.507069 11.4363 0.287923 10.6959 0.299905 9.94117C0.311887 9.18642 0.554425 8.4534 0.994974 7.84046C1.43552 7.22752 2.053 6.76398 2.76456 6.51205C3.47612 6.26013 4.24771 6.23186 4.97579 6.43104C5.70388 6.63023 6.35362 7.04734 6.83784 7.6264L6.99009 7.80848L12.4501 5.07414L12.3961 4.84354C12.1907 3.96675 12.3121 3.04515 12.7376 2.25148C13.1631 1.45782 13.8634 0.846567 14.7073 0.532301C15.5512 0.218036 16.4808 0.22233 17.3218 0.544378C18.1627 0.866426 18.8574 1.48412 19.2755 2.28168C19.6937 3.07925 19.8066 4.00192 19.5931 4.87678C19.3796 5.75164 18.8544 6.51861 18.1159 7.03395C17.3774 7.54928 16.4763 7.7776 15.5816 7.67611C14.6868 7.57462 13.8597 7.15028 13.2554 6.48264ZM17.6263 5.6263C17.195 6.05764 16.61 6.29996 16 6.29996C15.39 6.29996 14.805 6.05764 14.3736 5.6263C13.9423 5.19497 13.7 4.60996 13.7 3.99996C13.7 3.38996 13.9423 2.80495 14.3736 2.37361C14.805 1.94228 15.39 1.69996 16 1.69996C16.61 1.69996 17.195 1.94228 17.6263 2.37361C18.0577 2.80495 18.3 3.38996 18.3 3.99996C18.3 4.60996 18.0577 5.19497 17.6263 5.6263ZM5.62632 11.6263C5.19499 12.0576 4.60998 12.3 3.99998 12.3C3.38998 12.3 2.80497 12.0576 2.37363 11.6263C1.9423 11.195 1.69998 10.61 1.69998 9.99996C1.69998 9.38996 1.9423 8.80495 2.37363 8.37361C2.80497 7.94228 3.38998 7.69996 3.99998 7.69996C4.60998 7.69996 5.19499 7.94228 5.62632 8.37361C6.05766 8.80495 6.29998 9.38996 6.29998 9.99996C6.29998 10.61 6.05766 11.195 5.62632 11.6263ZM17.6263 17.6263C17.195 18.0576 16.61 18.3 16 18.3C15.39 18.3 14.805 18.0576 14.3736 17.6263C13.9423 17.195 13.7 16.61 13.7 16C13.7 15.39 13.9423 14.8049 14.3736 14.3736C14.805 13.9423 15.39 13.7 16 13.7C16.61 13.7 17.195 13.9423 17.6263 14.3736C18.0577 14.8049 18.3 15.39 18.3 16C18.3 16.61 18.0577 17.195 17.6263 17.6263Z" fill="currentColor"/>
                                    </svg>
                                </div>
                            </a>
                        </div>
                    </div>
                    <div id="characteristic" class="product-about__content_characteristic">
                        secendery.Lorem ipsum dolor sit, amet consectetur adipisicing elit. Quaerat velit facilis quis sint quibusdam. Vel consequuntur deleniti necessitatibus enim dolor.
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<script>
	BX.message({
		ECONOMY_INFO_MESSAGE: '<?=GetMessageJS('CT_BCE_CATALOG_ECONOMY_INFO2')?>',
		TITLE_ERROR: '<?=GetMessageJS('CT_BCE_CATALOG_TITLE_ERROR')?>',
		TITLE_BASKET_PROPS: '<?=GetMessageJS('CT_BCE_CATALOG_TITLE_BASKET_PROPS')?>',
		BASKET_UNKNOWN_ERROR: '<?=GetMessageJS('CT_BCE_CATALOG_BASKET_UNKNOWN_ERROR')?>',
		BTN_SEND_PROPS: '<?=GetMessageJS('CT_BCE_CATALOG_BTN_SEND_PROPS')?>',
		BTN_MESSAGE_BASKET_REDIRECT: '<?=GetMessageJS('CT_BCE_CATALOG_BTN_MESSAGE_BASKET_REDIRECT')?>',
		BTN_MESSAGE_CLOSE: '<?=GetMessageJS('CT_BCE_CATALOG_BTN_MESSAGE_CLOSE')?>',
		BTN_MESSAGE_CLOSE_POPUP: '<?=GetMessageJS('CT_BCE_CATALOG_BTN_MESSAGE_CLOSE_POPUP')?>',
		TITLE_SUCCESSFUL: '<?=GetMessageJS('CT_BCE_CATALOG_ADD_TO_BASKET_OK')?>',
		COMPARE_MESSAGE_OK: '<?=GetMessageJS('CT_BCE_CATALOG_MESS_COMPARE_OK')?>',
		COMPARE_UNKNOWN_ERROR: '<?=GetMessageJS('CT_BCE_CATALOG_MESS_COMPARE_UNKNOWN_ERROR')?>',
		COMPARE_TITLE: '<?=GetMessageJS('CT_BCE_CATALOG_MESS_COMPARE_TITLE')?>',
		BTN_MESSAGE_COMPARE_REDIRECT: '<?=GetMessageJS('CT_BCE_CATALOG_BTN_MESSAGE_COMPARE_REDIRECT')?>',
		PRODUCT_GIFT_LABEL: '<?=GetMessageJS('CT_BCE_CATALOG_PRODUCT_GIFT_LABEL')?>',
		PRICE_TOTAL_PREFIX: '<?=GetMessageJS('CT_BCE_CATALOG_MESS_PRICE_TOTAL_PREFIX')?>',
		RELATIVE_QUANTITY_MANY: '<?=CUtil::JSEscape($arParams['MESS_RELATIVE_QUANTITY_MANY'])?>',
		RELATIVE_QUANTITY_FEW: '<?=CUtil::JSEscape($arParams['MESS_RELATIVE_QUANTITY_FEW'])?>',
		SITE_ID: '<?=CUtil::JSEscape($component->getSiteId())?>'
	});

	var <?=$obName?> = new JCCatalogElement(<?=CUtil::PhpToJSObject($jsParams, false, true)?>);
</script>
<?
unset($actualItem, $itemIds, $jsParams);