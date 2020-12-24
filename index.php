<?
require($_SERVER["DOCUMENT_ROOT"]."/bitrix/header.php");
$APPLICATION->SetTitle("AVION");
?>

    <div class="container-banner">
        <div class="banner-ad">

            <?$APPLICATION->IncludeComponent(
                "bitrix:news.list",
                ".default",
                Array(
                    "ACTIVE_DATE_FORMAT" => "d.m.Y",
                    "ADD_SECTIONS_CHAIN" => "N",
                    "AJAX_MODE" => "N",
                    "AJAX_OPTION_ADDITIONAL" => "",
                    "AJAX_OPTION_HISTORY" => "N",
                    "AJAX_OPTION_JUMP" => "N",
                    "AJAX_OPTION_STYLE" => "N",
                    "CACHE_FILTER" => "N",
                    "CACHE_GROUPS" => "Y",
                    "CACHE_TIME" => "36000000",
                    "CACHE_TYPE" => "A",
                    "CHECK_DATES" => "Y",
                    "COMPONENT_TEMPLATE" => ".default",
                    "DETAIL_URL" => "#SITE_DIR#/novelty/#ELEMENT_CODE#/", // detail.php?ID=#ELEMENT_ID#",
                    "DISPLAY_BOTTOM_PAGER" => "N",
                    "DISPLAY_DATE" => "N",
                    "DISPLAY_NAME" => "N",
                    "DISPLAY_PICTURE" => "Y",
                    "DISPLAY_PREVIEW_TEXT" => "N",
                    "DISPLAY_TOP_PAGER" => "N",
                    "FIELD_CODE" => array(0=>"",1=>"",),
                    "FILTER_NAME" => "",
                    "HIDE_LINK_WHEN_NO_DETAIL" => "N",
                    "IBLOCK_ID" => "3",
                    "IBLOCK_TYPE" => "banners",
                    "INCLUDE_IBLOCK_INTO_CHAIN" => "N",
                    "INCLUDE_SUBSECTIONS" => "Y",
                    "MESSAGE_404" => "",
                    "NEWS_COUNT" => "5",
                    "PAGER_BASE_LINK_ENABLE" => "N",
                    "PAGER_DESC_NUMBERING" => "N",
                    "PAGER_DESC_NUMBERING_CACHE_TIME" => "36000",
                    "PAGER_SHOW_ALL" => "N",
                    "PAGER_SHOW_ALWAYS" => "N",
                    "PAGER_TEMPLATE" => ".default",
                    "PAGER_TITLE" => "Акции",
                    "PARENT_SECTION" => "",
                    "PARENT_SECTION_CODE" => "",
                    "PREVIEW_TRUNCATE_LEN" => "",
                    "PROPERTY_CODE" => array(0=>"",1=>"",),
                    "SET_BROWSER_TITLE" => "Y",
                    "SET_LAST_MODIFIED" => "N",
                    "SET_META_DESCRIPTION" => "Y",
                    "SET_META_KEYWORDS" => "Y",
                    "SET_STATUS_404" => "N",
                    "SET_TITLE" => "N",
                    "SHOW_404" => "N",
                    "SORT_BY1" => "ACTIVE_FROM",
                    "SORT_BY2" => "SORT",
                    "SORT_ORDER1" => "DESC",
                    "SORT_ORDER2" => "ASC",
                    "STRICT_SECTION_CHECK" => "N"
                )
            );?>

        </div>
    </div>

    <div class="container">

        <?$APPLICATION->IncludeComponent(
            "bitrix:catalog.section.list",
            "bootstrap_v4",
            Array(
                "0" => "",
                "ADD_SECTIONS_CHAIN" => "N",
                "CACHE_FILTER" => "N",
                "CACHE_GROUPS" => "Y",
                "CACHE_TIME" => "36000000",
                "CACHE_TYPE" => "A",
                "COUNT_ELEMENTS" => "N",
                "COUNT_ELEMENTS_FILTER" => "CNT_ACTIVE",
                "FILTER_NAME" => "sectionsFilter",
                "HIDE_SECTION_NAME" => "N",
                "IBLOCK_ID" => "1",
                "IBLOCK_TYPE" => "catalog",
                "LIST_COLUMNS_COUNT" => "4",
                "SECTION_CODE" => "",
                "SECTION_FIELDS" => array("",""),
                "SECTION_ID" => '1', //$_REQUEST["SECTION_ID"],
                "SECTION_URL" => "",
                "SECTION_USER_FIELDS" => array("",""),
                "SHOW_PARENT_NAME" => "N",
                "TOP_DEPTH" => "1",
                "VIEW_MODE" => "TILE"
            )
        );?>

        <div class="banner-sell">

            <?$APPLICATION->IncludeComponent(
                "bitrix:catalog.top",
                "bootstrap_v4",
                Array(
                    "ACTION_VARIABLE" => "action",
                    "ADD_PICT_PROP" => "-",
                    "ADD_PROPERTIES_TO_BASKET" => "Y",
                    "ADD_TO_BASKET_ACTION" => "ADD",
                    "BASKET_URL" => "/basket/",
                    "CACHE_FILTER" => "N",
                    "CACHE_GROUPS" => "Y",
                    "CACHE_TIME" => "36000000",
                    "CACHE_TYPE" => "A",
                    "COMPARE_NAME" => "CATALOG_COMPARE_LIST",
                    "COMPATIBLE_MODE" => "Y",
                    "CONVERT_CURRENCY" => "N",
                    "CUSTOM_FILTER" => "",
                    "DETAIL_URL" => "",
                    "DISPLAY_COMPARE" => "N",
                    "ELEMENT_COUNT" => "12",
                    "ELEMENT_SORT_FIELD" => "sort",
                    "ELEMENT_SORT_FIELD2" => "id",
                    "ELEMENT_SORT_ORDER" => "asc",
                    "ELEMENT_SORT_ORDER2" => "desc",
                    "ENLARGE_PRODUCT" => "STRICT",
                    "FILTER_NAME" => "",
                    "HIDE_NOT_AVAILABLE" => "N",
                    "HIDE_NOT_AVAILABLE_OFFERS" => "N",
                    "IBLOCK_ID" => "1",
                    "IBLOCK_TYPE" => "catalog",
                    "LABEL_PROP" => array(),
                    "LINE_ELEMENT_COUNT" => "4",
                    "MESS_BTN_ADD_TO_BASKET" => "В корзину",
                    "MESS_BTN_BUY" => "Купить",
                    "MESS_BTN_COMPARE" => "Сравнить",
                    "MESS_BTN_DETAIL" => "Подробнее",
                    "MESS_NOT_AVAILABLE" => "Нет в наличии",
                    "OFFERS_LIMIT" => "0",
                    "PARTIAL_PRODUCT_PROPERTIES" => "N",
                    "PRICE_CODE" => array("BASE_TYPE_PRICE"),
                    "PRICE_VAT_INCLUDE" => "Y",
                    "PRODUCT_BLOCKS_ORDER" => "price,props,sku,quantityLimit,quantity,buttons",
                    "PRODUCT_ID_VARIABLE" => "id",
                    "PRODUCT_PROPS_VARIABLE" => "prop",
                    "PRODUCT_QUANTITY_VARIABLE" => "quantity",
                    "PRODUCT_ROW_VARIANTS" => "[{'VARIANT':'3','BIG_DATA':false}]",
                    "PRODUCT_SUBSCRIPTION" => "Y",
                    "PROPERTY_CODE_MOBILE" => array(),
                    "ROTATE_TIMER" => "30",
                    "SECTION_URL" => "",
                    "SEF_MODE" => "N",
                    "SHOW_CLOSE_POPUP" => "N",
                    "SHOW_DISCOUNT_PERCENT" => "N",
                    "SHOW_MAX_QUANTITY" => "N",
                    "SHOW_OLD_PRICE" => "N",
                    "SHOW_PAGINATION" => "Y",
                    "SHOW_PRICE_COUNT" => "1",
                    "SHOW_SLIDER" => "Y",
                    "SLIDER_INTERVAL" => "3000",
                    "SLIDER_PROGRESS" => "N",
                    "TEMPLATE_THEME" => "",
                    "USE_ENHANCED_ECOMMERCE" => "N",
                    "USE_PRICE_COUNT" => "N",
                    "USE_PRODUCT_QUANTITY" => "N",
                    "VIEW_MODE" => "SLIDER"
                )
            );?>

            <?/*
            <div class="text-sell">Сезонная распродажа</div>
            <div class="banner-sell__content">
                <div class="swiper-container slider-banner-sell">
                    <div class="swiper-wrapper">
                        <div class="swiper-slide">
                            <div class="card-product">
                                <a class="card-product__box" href="product.html">
                                    <div class="card-product__stock">
                                        <div class="card-product__stock_number active">-25%</div>
                                        <div class="card-product__stock_text active">Акция</div>
                                    </div>
                                    <img src="<?=SITE_TEMPLATE_PATH;?>/img/banner/banner-sell.jpg" alt="">
                                    <div class="card-product__content">
                                        <div class="card-product__about">
                                            <span class="card-product__about_name">Культиватор для сплошной обработки почвы КПС-5,0</span>
                                            <span class="card-product__about_art">№ 1234567890</span>
                                            <span class="card-product__about_text">Краткое описание. Здесь может быть несколько строк.</span>
                                        </div>
                                        <div class="card-product__buy">
                                            <div class="price">
                                                <span class="price__was">1 234 567 ₽</span>
                                                <span class="price__now">1 234 567 ₽</span>
                                            </div>
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
                                        </div>
                                    </div>
                                </a>
                                <a class="card-product__catalog" href="#3">Запчасти →</a>
                            </div>
                        </div>
                        <div class="swiper-slide">
                            <div class="card-product">
                                <a class="card-product__box" href="product.html">
                                    <div class="card-product__stock">
                                        <div class="card-product__stock_number active">-25%</div>
                                        <div class="card-product__stock_text active">Акция</div>
                                    </div>
                                    <img src="<?=SITE_TEMPLATE_PATH;?>/img/banner/banner-sell.jpg" alt="">
                                    <div class="card-product__content">
                                        <div class="card-product__about">
                                            <span class="card-product__about_name">Культиватор для сплошной обработки почвы КПС-5,0</span>
                                            <span class="card-product__about_art">№ 1234567890</span>
                                            <span class="card-product__about_text">Краткое описание. Здесь может быть несколько строк.</span>
                                        </div>
                                        <div class="card-product__buy">
                                            <div class="price">
                                                <span class="price__was">1 234 567 ₽</span>
                                                <span class="price__now">1 234 567 ₽</span>
                                            </div>
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
                                        </div>
                                    </div>
                                </a>
                                <a class="card-product__catalog" href="#3">Запчасти →</a>
                            </div>
                        </div>
                        <div class="swiper-slide">
                            <div class="card-product">
                                <a class="card-product__box" href="product.html">
                                    <div class="card-product__stock">
                                        <div class="card-product__stock_number active">-25%</div>
                                        <div class="card-product__stock_text active">Акция</div>
                                    </div>
                                    <img src="<?=SITE_TEMPLATE_PATH;?>/img/banner/banner-sell.jpg" alt="">
                                    <div class="card-product__content">
                                        <div class="card-product__about">
                                            <span class="card-product__about_name">Культиватор для сплошной обработки почвы КПС-5,0</span>
                                            <span class="card-product__about_art">№ 1234567890</span>
                                            <span class="card-product__about_text">Краткое описание. Здесь может быть несколько строк.</span>
                                        </div>
                                        <div class="card-product__buy">
                                            <div class="price">
                                                <span class="price__was">1 234 567 ₽</span>
                                                <span class="price__now">1 234 567 ₽</span>
                                            </div>
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
                                        </div>
                                    </div>
                                </a>
                                <a class="card-product__catalog" href="#3">Запчасти →</a>
                            </div>
                        </div>
                        <div class="swiper-slide">
                            <div class="card-product">
                                <a class="card-product__box" href="product.html">
                                    <div class="card-product__stock">
                                        <div class="card-product__stock_number active">-25%</div>
                                        <div class="card-product__stock_text active">Акция</div>
                                    </div>
                                    <img src="<?=SITE_TEMPLATE_PATH;?>/img/banner/banner-sell.jpg" alt="">
                                    <div class="card-product__content">
                                        <div class="card-product__about">
                                            <span class="card-product__about_name">Культиватор для сплошной обработки почвы КПС-5,0</span>
                                            <span class="card-product__about_art">№ 1234567890</span>
                                            <span class="card-product__about_text">Краткое описание. Здесь может быть несколько строк.</span>
                                        </div>
                                        <div class="card-product__buy">
                                            <div class="price">
                                                <span class="price__was">1 234 567 ₽</span>
                                                <span class="price__now">1 234 567 ₽</span>
                                            </div>
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
                                        </div>
                                    </div>
                                </a>
                                <a class="card-product__catalog" href="#3">Запчасти →</a>
                            </div>
                        </div>
                        <div class="swiper-slide">
                            <div class="card-product">
                                <a class="card-product__box" href="product.html">
                                    <div class="card-product__stock">
                                        <div class="card-product__stock_number active">-25%</div>
                                        <div class="card-product__stock_text active">Акция</div>
                                    </div>
                                    <img src="<?=SITE_TEMPLATE_PATH;?>/img/banner/banner-sell.jpg" alt="">
                                    <div class="card-product__content">
                                        <div class="card-product__about">
                                            <span class="card-product__about_name">Культиватор для сплошной обработки почвы КПС-5,0</span>
                                            <span class="card-product__about_art">№ 1234567890</span>
                                            <span class="card-product__about_text">Краткое описание. Здесь может быть несколько строк.</span>
                                        </div>
                                        <div class="card-product__buy">
                                            <div class="price">
                                                <span class="price__was">1 234 567 ₽</span>
                                                <span class="price__now">1 234 567 ₽</span>
                                            </div>
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
                                        </div>
                                    </div>
                                </a>
                                <a class="card-product__catalog" href="#3">Запчасти →</a>
                            </div>
                        </div>
                    </div>
                    <div class="swiper-pagination sell-pagination"></div>
                </div>
                <div class="swiper-button-prev sell-button-prev"></div>
                <div class="swiper-button-next sell-button-next"></div>
            </div>
            */?>

        </div>

    </div>

    <div class="promotion">
        <a href="#">
            <img src="<?=SITE_TEMPLATE_PATH;?>/img/banner/promotion1.png" alt="">
        </a>
        <a href="#">
            <img src="<?=SITE_TEMPLATE_PATH;?>/img/banner/promotion2.png" alt="">
        </a>
    </div>

    <div class="about-wrapper">
        <div class="container">
            <div class="about">
                <div class="about__left">
                    <div class="about__text">

                        <span class="about__text_title">
                            Мы поставляем только лучшую технику и сертифицированные запчасти
                        </span>

                        <span class="about__text_subtitle">
                            Текст для SEO. Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
                        </span>

                    </div>
                    <div class="about__how">

                        <span class="about__how_title">Как мы работаем?</span>

                        <div class="about__box">
                            <div class="about__boxitem">
                                <div class="about__path">
                                    <div class="about__path_number">1</div>
                                    <img class="about__path_arrow" src="<?=SITE_TEMPLATE_PATH;?>/img/Icons/about-arrow.png" alt="">
                                </div>
                                <span class="about__boxitem_text">Вы выбираете технику или запчасти</span>
                            </div>
                            <div class="about__boxitem">
                                <div class="about__path">
                                    <div class="about__path_number">2</div>
                                    <img class="about__path_arrow" src="<?=SITE_TEMPLATE_PATH;?>/img/Icons/about-arrow.png" alt="">
                                </div>
                                <span class="about__boxitem_text">После оплаты мы доставим покупки удобным для вас способом</span>
                            </div>
                            <div class="about__boxitem">
                                <div class="about__path">
                                    <div class="about__path_number">3</div>
                                    <div class="about__path_arrow">
                                        <svg width="108" height="12" viewBox="0 0 108 12" fill="none">
                                            <path d="M108 5.99999L103 3.11324L103 8.88674L108 5.99999ZM4.37114e-08 6.5L0.981818 6.5L0.981818 5.5L-4.37114e-08 5.5L4.37114e-08 6.5ZM3.92727 6.5L5.89091 6.5L5.89091 5.5L3.92727 5.5L3.92727 6.5ZM8.83636 6.5L10.8 6.5L10.8 5.5L8.83636 5.5L8.83636 6.5ZM13.7455 6.5L15.7091 6.5L15.7091 5.5L13.7455 5.5L13.7455 6.5ZM18.6545 6.5L20.6182 6.5L20.6182 5.5L18.6545 5.5L18.6545 6.5ZM23.5636 6.5L25.5273 6.5L25.5273 5.5L23.5636 5.5L23.5636 6.5ZM28.4727 6.5L30.4364 6.5L30.4364 5.5L28.4727 5.5L28.4727 6.5ZM33.3818 6.5L35.3455 6.5L35.3455 5.5L33.3818 5.5L33.3818 6.5ZM38.2909 6.5L40.2545 6.5L40.2545 5.5L38.2909 5.5L38.2909 6.5ZM43.2 6.5L45.1636 6.5L45.1636 5.5L43.2 5.5L43.2 6.5ZM48.1091 6.5L50.0727 6.5L50.0727 5.5L48.1091 5.5L48.1091 6.5ZM53.0182 6.5L54.9818 6.5L54.9818 5.5L53.0182 5.5L53.0182 6.5ZM57.9273 6.49999L59.8909 6.49999L59.8909 5.49999L57.9273 5.49999L57.9273 6.49999ZM62.8364 6.49999L64.8 6.49999L64.8 5.49999L62.8364 5.49999L62.8364 6.49999ZM67.7454 6.49999L69.7091 6.49999L69.7091 5.49999L67.7454 5.49999L67.7454 6.49999ZM72.6545 6.49999L74.6182 6.49999L74.6182 5.49999L72.6545 5.49999L72.6545 6.49999ZM77.5636 6.49999L79.5273 6.49999L79.5273 5.49999L77.5636 5.49999L77.5636 6.49999ZM82.4727 6.49999L84.4364 6.49999L84.4364 5.49999L82.4727 5.49999L82.4727 6.49999ZM87.3818 6.49999L89.3455 6.49999L89.3455 5.49999L87.3818 5.49999L87.3818 6.49999ZM92.2909 6.49999L94.2546 6.49999L94.2546 5.49999L92.2909 5.49999L92.2909 6.49999ZM97.2 6.49999L99.1637 6.49999L99.1637 5.49999L97.2 5.49999L97.2 6.49999ZM102.109 6.49999L104.073 6.49999L104.073 5.49999L102.109 5.49999L102.109 6.49999ZM108 5.99999L98 0.226489L98 11.7735L108 5.99999ZM8.74228e-08 7L0.981818 7L0.981818 5L-8.74228e-08 5L8.74228e-08 7ZM3.92727 7L5.89091 7L5.89091 5L3.92727 5L3.92727 7ZM8.83636 7L10.8 7L10.8 5L8.83636 5L8.83636 7ZM13.7455 7L15.7091 7L15.7091 5L13.7455 5L13.7455 7ZM18.6545 7L20.6182 7L20.6182 5L18.6545 5L18.6545 7ZM23.5636 7L25.5273 7L25.5273 5L23.5636 5L23.5636 7ZM28.4727 7L30.4364 7L30.4364 5L28.4727 5L28.4727 7ZM33.3818 7L35.3455 7L35.3455 5L33.3818 5L33.3818 7ZM38.2909 7L40.2545 7L40.2545 5L38.2909 5L38.2909 7ZM43.2 7L45.1636 7L45.1636 5L43.2 5L43.2 7ZM48.1091 7L50.0727 7L50.0727 5L48.1091 5L48.1091 7ZM53.0182 7L54.9818 7L54.9818 5L53.0182 5L53.0182 7ZM57.9273 6.99999L59.8909 6.99999L59.8909 4.99999L57.9273 4.99999L57.9273 6.99999ZM62.8364 6.99999L64.8 6.99999L64.8 4.99999L62.8364 4.99999L62.8364 6.99999ZM67.7454 6.99999L69.7091 6.99999L69.7091 4.99999L67.7454 4.99999L67.7454 6.99999ZM72.6545 6.99999L74.6182 6.99999L74.6182 4.99999L72.6545 4.99999L72.6545 6.99999ZM77.5636 6.99999L79.5273 6.99999L79.5273 4.99999L77.5636 4.99999L77.5636 6.99999ZM82.4727 6.99999L84.4364 6.99999L84.4364 4.99999L82.4727 4.99999L82.4727 6.99999ZM87.3818 6.99999L89.3455 6.99999L89.3455 4.99999L87.3818 4.99999L87.3818 6.99999ZM92.2909 6.99999L94.2546 6.99999L94.2546 4.99999L92.2909 4.99999L92.2909 6.99999ZM97.2 6.99999L99.1637 6.99999L99.1637 4.99999L97.2 4.99999L97.2 6.99999ZM102.109 6.99999L104.073 6.99999L104.073 4.99999L102.109 4.99999L102.109 6.99999Z" fill="#currentColor"/>
                                        </svg>
                                    </div>
                                </div>
                                <span class="about__boxitem_text">Если понадобится помощь, мы всегда на связи!</span>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="about__right">

                    <div class="feedback-form">
                        <div class="feedback-form__title">Нужна консультация?</div>
                        <div class="feedback-form__subtitle">Всё расскажем и покажем.
                            Поможем подобрать нужную технику
                            или запчасти к ней.
                        </div>
                        <input type="text" placeholder="Как к вам обращаться?" class="feedback-form__input-name"/>
                        <input type="tel" class="feedback-form__input-phone"/>
                        <div class="feedback-form__file">
                            <div class="feedback-form__file-icon">
                                <svg width="44" height="44" viewBox="0 0 44 44" fill="none">
                                    <path d="M27.027 11C24.8401 10.9988 22.7431 10.1294 21.197 8.58275L18.9145 6.30575C18.4002 5.79133 17.7031 5.50161 16.9757 5.5H6.875C6.15462 5.49987 5.46295 5.78242 4.9487 6.2869C4.43445 6.79137 4.13869 7.4775 4.125 8.19775L4.2515 11H1.5015L1.375 8.25C1.375 6.79131 1.95446 5.39236 2.98591 4.36091C4.01736 3.32946 5.41631 2.75 6.875 2.75H16.973C18.4316 2.75031 19.8303 3.32998 20.8615 4.3615L23.1385 6.6385C24.1697 7.67002 25.5684 8.24969 27.027 8.25V11Z" fill="currentColor"/>
                                    <path fill-rule="evenodd" clip-rule="evenodd" d="M37.9775 11H6.02254C5.64053 11 5.2627 11.0795 4.91314 11.2336C4.56358 11.3877 4.24996 11.613 3.99227 11.895C3.73458 12.177 3.53848 12.5096 3.41645 12.8716C3.29443 13.2336 3.24916 13.617 3.28354 13.9975L5.03529 33.2475C5.09704 33.9308 5.41195 34.5663 5.9182 35.0293C6.42445 35.4923 7.08549 35.7494 7.77154 35.75H36.2285C36.9146 35.7494 37.5756 35.4923 38.0819 35.0293C38.5881 34.5663 38.903 33.9308 38.9648 33.2475L40.7165 13.9975C40.7509 13.617 40.7057 13.2336 40.5836 12.8716C40.4616 12.5096 40.2655 12.177 40.0078 11.895C39.7501 11.613 39.4365 11.3877 39.0869 11.2336C38.7374 11.0795 38.3596 11 37.9775 11ZM6.02254 8.25C5.25826 8.24992 4.50235 8.40913 3.80303 8.71748C3.10371 9.02582 2.47633 9.47653 1.96091 10.0409C1.44548 10.6052 1.05333 11.2707 0.809468 11.9951C0.565602 12.7194 0.475375 13.4866 0.544543 14.2478L2.29629 33.4977C2.42047 34.8643 3.05096 36.135 4.06398 37.0605C5.07701 37.986 6.3994 38.4995 7.77154 38.5H36.2285C37.6007 38.4995 38.9231 37.986 39.9361 37.0605C40.9491 36.135 41.5796 34.8643 41.7038 33.4977L43.4555 14.2478C43.5247 13.4866 43.4345 12.7194 43.1906 11.9951C42.9468 11.2707 42.5546 10.6052 42.0392 10.0409C41.5238 9.47653 40.8964 9.02582 40.1971 8.71748C39.4977 8.40913 38.7418 8.24992 37.9775 8.25H6.02254Z" fill="currentColor"/>
                                </svg>
                            </div>
                            <div class="feedback-form__file-title">Загрузить файл</div>
                            <div class="feedback-form__file-subtitle">JPG, MP4, ZIP, RAR не более 10 Mb</div>
                        </div>
                        <div class="feedback-form__download process">
                            <div class="feedback-form__download_content">
                                <div class="feedback-form__download_icon">
                                    <svg width="24" height="24" viewBox="0 0 24 24" fill="none">
                                        <path d="M6 1.5H13.5V3H6C5.60218 3 5.22064 3.15804 4.93934 3.43934C4.65804 3.72064 4.5 4.10218 4.5 4.5V19.5C4.5 19.8978 4.65804 20.2794 4.93934 20.5607C5.22064 20.842 5.60218 21 6 21H18C18.3978 21 18.7794 20.842 19.0607 20.5607C19.342 20.2794 19.5 19.8978 19.5 19.5V9H21V19.5C21 20.2956 20.6839 21.0587 20.1213 21.6213C19.5587 22.1839 18.7956 22.5 18 22.5H6C5.20435 22.5 4.44129 22.1839 3.87868 21.6213C3.31607 21.0587 3 20.2956 3 19.5V4.5C3 3.70435 3.31607 2.94129 3.87868 2.37868C4.44129 1.81607 5.20435 1.5 6 1.5Z" fill="currentColor"/>
                                        <path d="M13.5 6.75V1.5L21 9H15.75C15.1533 9 14.581 8.76295 14.159 8.34099C13.7371 7.91903 13.5 7.34674 13.5 6.75Z" fill="currentColor"/>
                                    </svg>
                                </div>
                                <div class="feedback-form__download_loading">
                                    <div class="feedback-form__download_filename">
                                        <div class="feedback-form__download_name">Any_Possible_Name.jpg</div>
                                        <div class="feedback-form__download_number">55%</div>
                                    </div>
                                    <div class="feedback-form__download_line"></div>
                                    <div class="feedback-form__download_error">Файл слишком большой!</div>
                                </div>
                            </div>
                            <button class="feedback-form__download_del"></button>
                        </div>
                        <div class="feedback-form__download finish">
                            <div class="feedback-form__download_content">
                                <div class="feedback-form__download_icon">
                                    <svg width="24" height="24" viewBox="0 0 24 24" fill="none">
                                        <path d="M6 1.5H13.5V3H6C5.60218 3 5.22064 3.15804 4.93934 3.43934C4.65804 3.72064 4.5 4.10218 4.5 4.5V19.5C4.5 19.8978 4.65804 20.2794 4.93934 20.5607C5.22064 20.842 5.60218 21 6 21H18C18.3978 21 18.7794 20.842 19.0607 20.5607C19.342 20.2794 19.5 19.8978 19.5 19.5V9H21V19.5C21 20.2956 20.6839 21.0587 20.1213 21.6213C19.5587 22.1839 18.7956 22.5 18 22.5H6C5.20435 22.5 4.44129 22.1839 3.87868 21.6213C3.31607 21.0587 3 20.2956 3 19.5V4.5C3 3.70435 3.31607 2.94129 3.87868 2.37868C4.44129 1.81607 5.20435 1.5 6 1.5Z" fill="currentColor"/>
                                        <path d="M13.5 6.75V1.5L21 9H15.75C15.1533 9 14.581 8.76295 14.159 8.34099C13.7371 7.91903 13.5 7.34674 13.5 6.75Z" fill="currentColor"/>
                                    </svg>
                                </div>
                                <div class="feedback-form__download_loading">
                                    <div class="feedback-form__download_filename">
                                        <div class="feedback-form__download_name">Any_Possible_Name.jpg</div>
                                        <div class="feedback-form__download_number">100%</div>
                                    </div>
                                    <div class="feedback-form__download_line"></div>
                                    <div class="feedback-form__download_error">Файл слишком большой!</div>
                                </div>
                            </div>
                            <button class="feedback-form__download_del"></button>
                        </div>
                        <div class="feedback-form__download error">
                            <div class="feedback-form__download_content">
                                <div class="feedback-form__download_icon">
                                    <svg width="24" height="24" viewBox="0 0 24 24" fill="none">
                                        <path d="M6 1.5H13.5V3H6C5.60218 3 5.22064 3.15804 4.93934 3.43934C4.65804 3.72064 4.5 4.10218 4.5 4.5V19.5C4.5 19.8978 4.65804 20.2794 4.93934 20.5607C5.22064 20.842 5.60218 21 6 21H18C18.3978 21 18.7794 20.842 19.0607 20.5607C19.342 20.2794 19.5 19.8978 19.5 19.5V9H21V19.5C21 20.2956 20.6839 21.0587 20.1213 21.6213C19.5587 22.1839 18.7956 22.5 18 22.5H6C5.20435 22.5 4.44129 22.1839 3.87868 21.6213C3.31607 21.0587 3 20.2956 3 19.5V4.5C3 3.70435 3.31607 2.94129 3.87868 2.37868C4.44129 1.81607 5.20435 1.5 6 1.5Z" fill="currentColor"/>
                                        <path d="M13.5 6.75V1.5L21 9H15.75C15.1533 9 14.581 8.76295 14.159 8.34099C13.7371 7.91903 13.5 7.34674 13.5 6.75Z" fill="currentColor"/>
                                    </svg>
                                </div>
                                <div class="feedback-form__download_loading">
                                    <div class="feedback-form__download_filename">
                                        <div class="feedback-form__download_name">Any_Possible_Name.jpg</div>
                                        <div class="feedback-form__download_number">0%</div>
                                    </div>
                                    <div class="feedback-form__download_line"></div>
                                    <div class="feedback-form__download_error">Файл слишком большой!</div>
                                </div>
                            </div>
                            <button class="feedback-form__download_del"></button>
                        </div>

                        <button class="btn-white">
                            <div class="feedback-form_btn-icon">
                                <svg width="20" height="20" viewBox="0 0 14 14" fill="none">
                                    <path fill-rule="evenodd" clip-rule="evenodd" d="M3.37879 1.44026C3.3296 1.37698 3.26751 1.32489 3.19663 1.28745C3.12576 1.25001 3.04774 1.22808 2.96774 1.22312C2.88774 1.21815 2.8076 1.23026 2.73264 1.25865C2.65769 1.28704 2.58963 1.33105 2.53299 1.38776L1.67135 2.25024C1.26886 2.65356 1.12053 3.22438 1.29636 3.7252C2.02612 5.79814 3.21321 7.68019 4.76958 9.23174C6.32114 10.7881 8.20317 11.9752 10.2761 12.705C10.7769 12.8808 11.3477 12.7325 11.751 12.33L12.6127 11.4683C12.6694 11.4117 12.7134 11.3436 12.7418 11.2687C12.7702 11.1937 12.7823 11.1136 12.7773 11.0336C12.7723 10.9536 12.7504 10.8756 12.713 10.8047C12.6755 10.7338 12.6235 10.6717 12.5602 10.6225L10.6377 9.12757C10.5701 9.07514 10.4915 9.03874 10.4078 9.02113C10.324 9.00352 10.2374 9.00515 10.1544 9.02591L8.32947 9.48173C8.08588 9.54261 7.83067 9.53938 7.5887 9.47235C7.34672 9.40532 7.12623 9.27678 6.94868 9.09924L4.90208 7.05179C4.72439 6.87432 4.59569 6.65387 4.52852 6.41189C4.46134 6.16991 4.45798 5.91466 4.51876 5.67099L4.97541 3.84603C4.99617 3.76303 4.9978 3.6764 4.98019 3.59268C4.96258 3.50895 4.92618 3.43032 4.87375 3.36271L3.37879 1.44026ZM1.90384 0.759443C2.04966 0.613571 2.22485 0.500391 2.41777 0.427419C2.61069 0.354446 2.81693 0.323351 3.02279 0.336197C3.22865 0.349044 3.42942 0.405538 3.61177 0.50193C3.79412 0.598321 3.95388 0.732403 4.08044 0.895273L5.57539 2.81689C5.84955 3.16938 5.94621 3.62854 5.83788 4.06186L5.38206 5.88682C5.3585 5.98134 5.35977 6.08035 5.38576 6.17424C5.41175 6.26812 5.46157 6.35369 5.53039 6.42264L7.57783 8.47009C7.64686 8.53905 7.73257 8.58895 7.82661 8.61495C7.92066 8.64094 8.01983 8.64214 8.11448 8.61842L9.93859 8.1626C10.1524 8.10913 10.3756 8.10498 10.5913 8.15045C10.807 8.19593 11.0095 8.28984 11.1835 8.42509L13.1052 9.92005C13.796 10.4575 13.8593 11.4783 13.241 12.0958L12.3793 12.9575C11.7627 13.5741 10.8411 13.845 9.98192 13.5425C7.78298 12.7688 5.78645 11.5099 4.14044 9.85922C2.4899 8.21344 1.23103 6.21719 0.457218 4.01853C0.155561 3.16022 0.426386 2.23774 1.04303 1.62109L1.90467 0.759443H1.90384Z" fill="currentColor"/>
                                </svg>
                            </div>
                            Заказать звонок
                        </button>

                        <a class="feedback-form__call" href="#">Позвонить консультанту</a>

                    </div>

                </div>
            </div>
        </div>
    </div>

    <div class="news">

        <?$APPLICATION->IncludeComponent(
            "bitrix:news.list",
            "bootstrap_v4",
            array(
                "ACTIVE_DATE_FORMAT" => "d F Y",
                "ADD_SECTIONS_CHAIN" => "N",
                "AJAX_MODE" => "N",
                "AJAX_OPTION_ADDITIONAL" => "",
                "AJAX_OPTION_HISTORY" => "N",
                "AJAX_OPTION_JUMP" => "N",
                "AJAX_OPTION_STYLE" => "Y",
                "CACHE_FILTER" => "N",
                "CACHE_GROUPS" => "Y",
                "CACHE_TIME" => "3600",
                "CACHE_TYPE" => "A",
                "CHECK_DATES" => "Y",
                "DETAIL_URL" => "/news/index.php=?ID=#ELEMENT_ID#/", // .$_REQUEST["ELEMENT_ID"],
                "DISPLAY_DATE" => "Y",
                "DISPLAY_NAME" => "Y",
                "DISPLAY_PICTURE" => "Y",
                "DISPLAY_PREVIEW_TEXT" => "Y",
                "FIELD_CODE" => array(
                    0 => "",
                    1 => "",
                ),
                "FILE_404" => "",
                "FILTER_NAME" => "",
                "HIDE_LINK_WHEN_NO_DETAIL" => "N",
                "IBLOCK_ID" => "2",
                "IBLOCK_TYPE" => "news",
                "INCLUDE_IBLOCK_INTO_CHAIN" => "N",
                "INCLUDE_SUBSECTIONS" => "N",
                "MEDIA_PROPERTY" => "",
                "MESSAGE_404" => "",
                "NEWS_COUNT" => "4",
                "PAGER_BASE_LINK" => "",
                "PAGER_BASE_LINK_ENABLE" => "Y",
                "PAGER_DESC_NUMBERING" => "Y",
                "PAGER_DESC_NUMBERING_CACHE_TIME" => "36000",
                "PAGER_PARAMS_NAME" => "arrPager",
                "PAGER_SHOW_ALL" => "Y",
                "PAGER_SHOW_ALWAYS" => "Y",
                "PAGER_TEMPLATE" => "bootstrap_v4",
                "PAGER_TITLE" => "Новости",
                "PARENT_SECTION" => "",
                "PARENT_SECTION_CODE" => "",
                "PREVIEW_TRUNCATE_LEN" => "",
                "PROPERTY_CODE" => array(
                    0 => "",
                    1 => "DESCRIPTION",
                    2 => "",
                ),
                "SEARCH_PAGE" => "/search/",
                "SET_BROWSER_TITLE" => "N",
                "SET_LAST_MODIFIED" => "N",
                "SET_META_DESCRIPTION" => "N",
                "SET_META_KEYWORDS" => "N",
                "SET_STATUS_404" => "N",
                "SET_TITLE" => "N",
                "SHOW_404" => "N",
                "SLIDER_PROPERTY" => "",
                "SORT_BY1" => "ACTIVE_FROM",
                "SORT_BY2" => "SORT",
                "SORT_ORDER1" => "DESC",
                "SORT_ORDER2" => "ASC",
                "STRICT_SECTION_CHECK" => "N",
                "TEMPLATE_THEME" => "",
                "USE_RATING" => "N",
                "USE_SHARE" => "N",
                "COMPONENT_TEMPLATE" => "bootstrap_v4",
                "DISPLAY_TOP_PAGER" => "N",
                "DISPLAY_BOTTOM_PAGER" => "N"
            ),
            false
        );?>

    </div>

    <div class="main-text">
        <div class="container">
            <div class="main-text__content">
			<?$APPLICATION->IncludeComponent(
                            "bitrix:main.include", 
                            ".default", 
                            array(
                                "AREA_FILE_SHOW" => "file",
                                "AREA_FILE_SUFFIX" => "inc",
                                "AREA_FILE_RECURSIVE" => "Y",
                                "EDIT_TEMPLATE" => "",
                                "COMPONENT_TEMPLATE" => ".default",
                                "PATH" => SITE_TEMPLATE_PATH."/includes/inc_seo-index.php"
                            ),
                            false
                        );?>
	    </div>
        </div>
    </div>

    <div class="brands">
        <img src="<?=SITE_TEMPLATE_PATH;?>/img/brand/stihl.png" alt="">
        <img src="<?=SITE_TEMPLATE_PATH;?>/img/brand/husqvarna.png" alt="">
        <img src="<?=SITE_TEMPLATE_PATH;?>/img/brand/karcher.png" alt="">
        <img src="<?=SITE_TEMPLATE_PATH;?>/img/brand/stihl.png" alt="">
        <img src="<?=SITE_TEMPLATE_PATH;?>/img/brand/husqvarna.png" alt="">
        <img src="<?=SITE_TEMPLATE_PATH;?>/img/brand/karcher.png" alt="">
    </div>

<?
require($_SERVER["DOCUMENT_ROOT"]."/bitrix/footer.php");
?>