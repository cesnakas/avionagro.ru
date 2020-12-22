<?if(!defined('B_PROLOG_INCLUDED') || B_PROLOG_INCLUDED!==true)die();?>
<!DOCTYPE html>
<html lang="<?=LANGUAGE_ID;?>">
<head>

<?
    $APPLICATION->ShowHead();
    // Bitrix
    use Bitrix\Main\Page\Asset;
    // Meta
    Asset::getInstance()->addString('<meta name="viewport" content="width=device-width, initial-scale=1"/>');
    // CSS
    Asset::getInstance()->addCss(SITE_TEMPLATE_PATH.'/css/swiper-bundle.min.css');
    Asset::getInstance()->addCss(SITE_TEMPLATE_PATH.'/css/style.css');
    
    
    //$APPLICATION->SetAdditionalCSS("/bitrix/css/main/bootstrap.css");
    Asset::getInstance()->addCss('/bitrix/css/main/font-awesome.min.css');
    
    // JS
    Asset::getInstance()->addJs(SITE_TEMPLATE_PATH.'/js/swiper-bundle.min.js');
    Asset::getInstance()->addJs(SITE_TEMPLATE_PATH.'/js/main.js');
?>

    <title><?$APPLICATION->ShowTitle();?></title>

    <link rel="shortcut icon" type="image/x-icon" href="/favicon.ico">

</head>
<div id="panel"><?$APPLICATION->ShowPanel();?></div>
<body>

    <div class="page">

        <header>

            <div class="container">

                <div class="header-top">
                    <div class="header-top__contacts">

                        <a href="mailto:pleasedontspam@fcknmail.com">
                            <div class="header-top__contacts_icon">
                                <svg width="16" height="12" viewBox="0 0 16 12" fill="none">
                                    <path fill-rule="evenodd" clip-rule="evenodd" d="M14 1H2C1.73478 1 1.48043 1.10536 1.29289 1.29289C1.10536 1.48043 1 1.73478 1 2V10C1 10.2652 1.10536 10.5196 1.29289 10.7071C1.48043 10.8946 1.73478 11 2 11H14C14.2652 11 14.5196 10.8946 14.7071 10.7071C14.8946 10.5196 15 10.2652 15 10V2C15 1.73478 14.8946 1.48043 14.7071 1.29289C14.5196 1.10536 14.2652 1 14 1ZM2 0C1.46957 0 0.960859 0.21071 0.585786 0.58579C0.210714 0.96086 0 1.46957 0 2V10C0 10.5304 0.210714 11.0391 0.585786 11.4142C0.960859 11.7893 1.46957 12 2 12H14C14.5304 12 15.0391 11.7893 15.4142 11.4142C15.7893 11.0391 16 10.5304 16 10V2C16 1.46957 15.7893 0.96086 15.4142 0.58579C15.0391 0.21071 14.5304 0 14 0H2Z" fill="currentColor"/>
                                    <path fill-rule="evenodd" clip-rule="evenodd" d="M0.0711235 2.243C0.104865 2.18666 0.149376 2.13751 0.202115 2.09837C0.254854 2.05923 0.314788 2.03086 0.378492 2.01489C0.442196 1.99892 0.508423 1.99565 0.57339 2.00528C0.638356 2.01491 0.70079 2.03724 0.757123 2.071L8.00012 6.417L15.2431 2.071C15.2995 2.03725 15.3619 2.01493 15.4269 2.00531C15.4918 1.99569 15.558 1.99895 15.6217 2.01493C15.6854 2.0309 15.7454 2.05926 15.7981 2.09839C15.8509 2.13753 15.8954 2.18666 15.9291 2.243C15.9629 2.29934 15.9852 2.36177 15.9948 2.42674C16.0044 2.4917 16.0012 2.55792 15.9852 2.62162C15.9692 2.68533 15.9409 2.74526 15.9017 2.798C15.8626 2.85074 15.8135 2.89525 15.7571 2.929L8.00012 7.583L0.243123 2.93C0.186777 2.89626 0.137631 2.85175 0.0984909 2.79901C0.0593509 2.74627 0.0309845 2.68634 0.0150121 2.62263C-0.000960438 2.55893 -0.00422608 2.4927 0.00540167 2.42774C0.0150294 2.36277 0.0373619 2.30034 0.0711235 2.244V2.243Z" fill="currentColor"/>
                                    <path d="M6.75205 6.93204L7.18405 6.68004L6.68005 5.81604L6.24805 6.06804L6.75205 6.93204ZM0.752047 10.432L6.75205 6.93204L6.24805 6.06804L0.248047 9.568L0.752047 10.432ZM9.24805 6.93204L8.81605 6.68004L9.32005 5.81604L9.75205 6.06804L9.24805 6.93204ZM15.248 10.432L9.24805 6.93204L9.75205 6.06804L15.752 9.568L15.248 10.432Z" fill="currentColor"/>
                                </svg>
                            </div>
                            <span>pleasedontspam@fcknmail.com</span>
                        </a>

                            <?$APPLICATION->IncludeComponent(
	                            "bitrix:main.include",
    	                        ".default", 
                                array(
                                    "AREA_FILE_SHOW" => "file",
                                    "AREA_FILE_SUFFIX" => "inc",
                                    "AREA_FILE_RECURSIVE" => "Y",
                                    "EDIT_TEMPLATE" => "",
                                    "COMPONENT_TEMPLATE" => ".default",
                                    "PATH" => SITE_TEMPLATE_PATH."/includes/inc_phone-header.php"
                                ),
                                false
            	            );?>

                    </div>
                </div>

                <div class="header-bot">

                    <a class="header-bot__logo" href="<?=SITE_DIR;?>">
                        <img src="<?=SITE_TEMPLATE_PATH;?>/img/logo.png" alt="">
                    </a>

                    <nav>

                        <?$APPLICATION->IncludeComponent(
                            "bitrix:menu",
                            ".default",
                            Array(
                                "ALLOW_MULTI_SELECT" => "N",
                                "CHILD_MENU_TYPE" => "top",
                                "DELAY" => "N",
                                "MAX_LEVEL" => "1",
                                "MENU_CACHE_GET_VARS" => array(""),
                                "MENU_CACHE_TIME" => "3600",
                                "MENU_CACHE_TYPE" => "A",
                                "MENU_CACHE_USE_GROUPS" => "Y",
                                "ROOT_MENU_TYPE" => "top",
                                "USE_EXT" => "N"
                            )
                        );?>

                    </nav>

                    <?$APPLICATION->IncludeComponent(
                        "bitrix:search.form",
                        ".default",
                        Array(
                            "PAGE" => "#SITE_DIR#search/",
                            "USE_SUGGEST" => "Y"
                        )
                    );?>

                    <?$APPLICATION->IncludeComponent(
                        "bitrix:sale.basket.basket.line",
                        "bootstrap_v4",
                        Array(
                            "HIDE_ON_BASKET_PAGES" => "N",
                            "PATH_TO_AUTHORIZE" => "",
                            "PATH_TO_BASKET" => SITE_DIR."basket/",
                            "PATH_TO_ORDER" => SITE_DIR."personal/order/make/",
                            "PATH_TO_PERSONAL" => SITE_DIR."personal/",
                            "PATH_TO_PROFILE" => SITE_DIR."personal/",
                            "PATH_TO_REGISTER" => SITE_DIR."auth/",
                            "POSITION_FIXED" => "N",
                            "SHOW_AUTHOR" => "Y",
                            "SHOW_EMPTY_VALUES" => "Y",
                            "SHOW_NUM_PRODUCTS" => "Y",
                            "SHOW_PERSONAL_LINK" => "N",
                            "SHOW_PRODUCTS" => "N",
                            "SHOW_REGISTRATION" => "N",
                            "SHOW_TOTAL_PRICE" => "Y"
                        )
                    );?>

                </div>

                <div class="header-mobile">
                    <div class="header-mobile__top">
                        <div class="header-mobile__block"></div>
                        <div class="header-mobile__burger">
                            <span></span>
                        </div>
                        <div class="header-mobile__content">

                            <a class="header-mobile__logo" href="<?=SITE_DIR;?>">
                                <img src="<?=SITE_TEMPLATE_PATH;?>/img/logo.png" alt="">
                            </a>

                            <?$APPLICATION->IncludeComponent(
                                "bitrix:sale.basket.basket.line",
                                "mobile",
                                Array(
                                    "HIDE_ON_BASKET_PAGES" => "N",
                                    "PATH_TO_AUTHORIZE" => "",
                                    "PATH_TO_BASKET" => SITE_DIR."basket/",
                                    "PATH_TO_ORDER" => SITE_DIR."personal/order/make/",
                                    "PATH_TO_PERSONAL" => SITE_DIR."personal/",
                                    "PATH_TO_PROFILE" => SITE_DIR."personal/",
                                    "PATH_TO_REGISTER" => SITE_DIR."auth/",
                                    "POSITION_FIXED" => "N",
                                    "SHOW_AUTHOR" => "Y",
                                    "SHOW_EMPTY_VALUES" => "Y",
                                    "SHOW_NUM_PRODUCTS" => "Y",
                                    "SHOW_PERSONAL_LINK" => "N",
                                    "SHOW_PRODUCTS" => "N",
                                    "SHOW_REGISTRATION" => "N",
                                    "SHOW_TOTAL_PRICE" => "Y"
                                )
                            );?>

                        </div>
                        <nav class="header-mobile__nav">

                            <ul class="header-mobile__list">

                                <li class="header-mobile__item">

                                    <button class="header-mobile__list_btnNav">
                                        <div class="header-mobile__list_btnIcon">
                                            <svg width="21" height="21" viewBox="0 0 22 22" fill="none">
                                                <path fill-rule="evenodd" clip-rule="evenodd" d="M0.5 2.75C0.5 2.15326 0.737053 1.58097 1.15901 1.15901C1.58097 0.737053 2.15326 0.5 2.75 0.5H7.25C7.84674 0.5 8.41903 0.737053 8.84099 1.15901C9.26295 1.58097 9.5 2.15326 9.5 2.75V7.25C9.5 7.84674 9.26295 8.41903 8.84099 8.84099C8.41903 9.26295 7.84674 9.5 7.25 9.5H2.75C2.15326 9.5 1.58097 9.26295 1.15901 8.84099C0.737053 8.41903 0.5 7.84674 0.5 7.25V2.75ZM2.75 2C2.55109 2 2.36032 2.07902 2.21967 2.21967C2.07902 2.36032 2 2.55109 2 2.75V7.25C2 7.44891 2.07902 7.63968 2.21967 7.78033C2.36032 7.92098 2.55109 8 2.75 8H7.25C7.44891 8 7.63968 7.92098 7.78033 7.78033C7.92098 7.63968 8 7.44891 8 7.25V2.75C8 2.55109 7.92098 2.36032 7.78033 2.21967C7.63968 2.07902 7.44891 2 7.25 2H2.75ZM12.5 2.75C12.5 2.15326 12.7371 1.58097 13.159 1.15901C13.581 0.737053 14.1533 0.5 14.75 0.5H19.25C19.8467 0.5 20.419 0.737053 20.841 1.15901C21.2629 1.58097 21.5 2.15326 21.5 2.75V7.25C21.5 7.84674 21.2629 8.41903 20.841 8.84099C20.419 9.26295 19.8467 9.5 19.25 9.5H14.75C14.1533 9.5 13.581 9.26295 13.159 8.84099C12.7371 8.41903 12.5 7.84674 12.5 7.25V2.75ZM14.75 2C14.5511 2 14.3603 2.07902 14.2197 2.21967C14.079 2.36032 14 2.55109 14 2.75V7.25C14 7.44891 14.079 7.63968 14.2197 7.78033C14.3603 7.92098 14.5511 8 14.75 8H19.25C19.4489 8 19.6397 7.92098 19.7803 7.78033C19.921 7.63968 20 7.44891 20 7.25V2.75C20 2.55109 19.921 2.36032 19.7803 2.21967C19.6397 2.07902 19.4489 2 19.25 2H14.75ZM0.5 14.75C0.5 14.1533 0.737053 13.581 1.15901 13.159C1.58097 12.7371 2.15326 12.5 2.75 12.5H7.25C7.84674 12.5 8.41903 12.7371 8.84099 13.159C9.26295 13.581 9.5 14.1533 9.5 14.75V19.25C9.5 19.8467 9.26295 20.419 8.84099 20.841C8.41903 21.2629 7.84674 21.5 7.25 21.5H2.75C2.15326 21.5 1.58097 21.2629 1.15901 20.841C0.737053 20.419 0.5 19.8467 0.5 19.25V14.75ZM2.75 14C2.55109 14 2.36032 14.079 2.21967 14.2197C2.07902 14.3603 2 14.5511 2 14.75V19.25C2 19.4489 2.07902 19.6397 2.21967 19.7803C2.36032 19.921 2.55109 20 2.75 20H7.25C7.44891 20 7.63968 19.921 7.78033 19.7803C7.92098 19.6397 8 19.4489 8 19.25V14.75C8 14.5511 7.92098 14.3603 7.78033 14.2197C7.63968 14.079 7.44891 14 7.25 14H2.75ZM12.5 14.75C12.5 14.1533 12.7371 13.581 13.159 13.159C13.581 12.7371 14.1533 12.5 14.75 12.5H19.25C19.8467 12.5 20.419 12.7371 20.841 13.159C21.2629 13.581 21.5 14.1533 21.5 14.75V19.25C21.5 19.8467 21.2629 20.419 20.841 20.841C20.419 21.2629 19.8467 21.5 19.25 21.5H14.75C14.1533 21.5 13.581 21.2629 13.159 20.841C12.7371 20.419 12.5 19.8467 12.5 19.25V14.75ZM14.75 14C14.5511 14 14.3603 14.079 14.2197 14.2197C14.079 14.3603 14 14.5511 14 14.75V19.25C14 19.4489 14.079 19.6397 14.2197 19.7803C14.3603 19.921 14.5511 20 14.75 20H19.25C19.4489 20 19.6397 19.921 19.7803 19.7803C19.921 19.6397 20 19.4489 20 19.25V14.75C20 14.5511 19.921 14.3603 19.7803 14.2197C19.6397 14.079 19.4489 14 19.25 14H14.75Z" fill="currentColor"/>
                                            </svg>
                                            <span>Каталог</span>
                                        </div>
                                        <div class="header-mobile__list_arrow"></div>
                                    </button>

                                    <ul class="header-mobile__sublist">
                                        <li class="header-mobile__subitem">
                                            <div class="header-mobile__subitem_link">
                                                <a href="<?=SITE_DIR;?>catalog/">Техника</a>
                                            </div>
                                            <ul class="header-mobile__subSublist">
                                                <li class="header-mobile__subsubitem">
                                                    <div class="header-mobile__subsubitem_link">
                                                        <a href="<?=SITE_DIR;?>catalog/">Кормоизготовительная техника</a>
                                                    </div>
                                                </li>
                                                <li class="header-mobile__subsubitem">
                                                    <div class="header-mobile__subsubitem_link">
                                                        <a href="<?=SITE_DIR;?>catalog/">Почвообрабатывающая техника</a>
                                                    </div>
                                                </li>
                                                <li class="header-mobile__subsubitem">
                                                    <div class="header-mobile__subsubitem_link">
                                                        <a href="<?=SITE_DIR;?>catalog/">Пневматические (вакуумные) сеялки точного высева</a>
                                                    </div>
                                                </li>
                                                <li class="header-mobile__subsubitem">
                                                    <div class="header-mobile__subsubitem_link">
                                                        <a href="<?=SITE_DIR;?>catalog/">Смесители-раздатчики кормов</a>
                                                    </div>
                                                </li>
                                                <li class="header-mobile__subsubitem">
                                                    <div class="header-mobile__subsubitem_link">
                                                        <a href="<?=SITE_DIR;?>catalog/">Разбрасыватели навоза и бочки для навозной жижи</a>
                                                    </div>
                                                </li>
                                                <li class="header-mobile__subsubitem">
                                                    <div class="header-mobile__subsubitem_link">
                                                        <a href="<?=SITE_DIR;?>catalog/">Системы орошения</a>
                                                    </div>
                                                </li>
                                                <li class="header-mobile__subsubitem">
                                                    <div class="header-mobile__subsubitem_link">
                                                        <a href="<?=SITE_DIR;?>catalog/">Техника фирмы</a>
                                                    </div>
                                                </li>
                                            </ul>
                                        </li>
                                        <li class="header-mobile__subitem">
                                            <div class="header-mobile__subitem_link">
                                                <a href="<?=SITE_DIR;?>catalog/">Запчасти</a>
                                            </div>
                                        </li>
                                        <li class="header-mobile__subitem">
                                            <div class="header-mobile__subitem_link">
                                                <a href="#">Бренды</a>
                                            </div>
                                        </li>
                                    </ul>

                                </li>

                                <?$APPLICATION->IncludeComponent(
                                    "bitrix:menu",
                                    "mobile",
                                    Array(
                                        "ALLOW_MULTI_SELECT" => "N",
                                        "CHILD_MENU_TYPE" => "top",
                                        "DELAY" => "N",
                                        "MAX_LEVEL" => "1",
                                        "MENU_CACHE_GET_VARS" => array(""),
                                        "MENU_CACHE_TIME" => "3600",
                                        "MENU_CACHE_TYPE" => "A",
                                        "MENU_CACHE_USE_GROUPS" => "Y",
                                        "ROOT_MENU_TYPE" => "top",
                                        "USE_EXT" => "N"
                                    )
                                );?>

                            </ul>

                            <button class="header-mobile__buttoncall">
                                <div class="header-mobile__buttoncall_icon">
                                    <svg width="20" height="20" viewBox="0 0 14 14" fill="none">
                                        <path fill-rule="evenodd" clip-rule="evenodd" d="M3.37879 1.44026C3.3296 1.37698 3.26751 1.32489 3.19663 1.28745C3.12576 1.25001 3.04774 1.22808 2.96774 1.22312C2.88774 1.21815 2.8076 1.23026 2.73264 1.25865C2.65769 1.28704 2.58963 1.33105 2.53299 1.38776L1.67135 2.25024C1.26886 2.65356 1.12053 3.22438 1.29636 3.7252C2.02612 5.79814 3.21321 7.68019 4.76958 9.23174C6.32114 10.7881 8.20317 11.9752 10.2761 12.705C10.7769 12.8808 11.3477 12.7325 11.751 12.33L12.6127 11.4683C12.6694 11.4117 12.7134 11.3436 12.7418 11.2687C12.7702 11.1937 12.7823 11.1136 12.7773 11.0336C12.7723 10.9536 12.7504 10.8756 12.713 10.8047C12.6755 10.7338 12.6235 10.6717 12.5602 10.6225L10.6377 9.12757C10.5701 9.07514 10.4915 9.03874 10.4078 9.02113C10.324 9.00352 10.2374 9.00515 10.1544 9.02591L8.32947 9.48173C8.08588 9.54261 7.83067 9.53938 7.5887 9.47235C7.34672 9.40532 7.12623 9.27678 6.94868 9.09924L4.90208 7.05179C4.72439 6.87432 4.59569 6.65387 4.52852 6.41189C4.46134 6.16991 4.45798 5.91466 4.51876 5.67099L4.97541 3.84603C4.99617 3.76303 4.9978 3.6764 4.98019 3.59268C4.96258 3.50895 4.92618 3.43032 4.87375 3.36271L3.37879 1.44026ZM1.90384 0.759443C2.04966 0.613571 2.22485 0.500391 2.41777 0.427419C2.61069 0.354446 2.81693 0.323351 3.02279 0.336197C3.22865 0.349044 3.42942 0.405538 3.61177 0.50193C3.79412 0.598321 3.95388 0.732403 4.08044 0.895273L5.57539 2.81689C5.84955 3.16938 5.94621 3.62854 5.83788 4.06186L5.38206 5.88682C5.3585 5.98134 5.35977 6.08035 5.38576 6.17424C5.41175 6.26812 5.46157 6.35369 5.53039 6.42264L7.57783 8.47009C7.64686 8.53905 7.73257 8.58895 7.82661 8.61495C7.92066 8.64094 8.01983 8.64214 8.11448 8.61842L9.93859 8.1626C10.1524 8.10913 10.3756 8.10498 10.5913 8.15045C10.807 8.19593 11.0095 8.28984 11.1835 8.42509L13.1052 9.92005C13.796 10.4575 13.8593 11.4783 13.241 12.0958L12.3793 12.9575C11.7627 13.5741 10.8411 13.845 9.98192 13.5425C7.78298 12.7688 5.78645 11.5099 4.14044 9.85922C2.4899 8.21344 1.23103 6.21719 0.457218 4.01853C0.155561 3.16022 0.426386 2.23774 1.04303 1.62109L1.90467 0.759443H1.90384Z" fill="currentColor"/>
                                    </svg>
                                </div>
                                <span>Заказать звонок</span>
                            </button>

                            <div class="header-mobile__contacts">

                                <a href="tel:+74950000000" class="header-mobile__contacts_phone">
                                    <div class="header-mobile__contacts_icon">
                                        <svg width="14" height="14" viewBox="0 0 14 14" fill="none">
                                            <path fill-rule="evenodd" clip-rule="evenodd" d="M3.37879 1.44026C3.3296 1.37698 3.26751 1.32489 3.19663 1.28745C3.12576 1.25001 3.04774 1.22808 2.96774 1.22312C2.88774 1.21815 2.8076 1.23026 2.73264 1.25865C2.65769 1.28704 2.58963 1.33105 2.53299 1.38776L1.67135 2.25024C1.26886 2.65356 1.12053 3.22438 1.29636 3.7252C2.02612 5.79814 3.21321 7.68019 4.76958 9.23174C6.32114 10.7881 8.20317 11.9752 10.2761 12.705C10.7769 12.8808 11.3477 12.7325 11.751 12.33L12.6127 11.4683C12.6694 11.4117 12.7134 11.3436 12.7418 11.2687C12.7702 11.1937 12.7823 11.1136 12.7773 11.0336C12.7723 10.9536 12.7504 10.8756 12.713 10.8047C12.6755 10.7338 12.6235 10.6717 12.5602 10.6225L10.6377 9.12757C10.5701 9.07514 10.4915 9.03874 10.4078 9.02113C10.324 9.00352 10.2374 9.00515 10.1544 9.02591L8.32947 9.48173C8.08588 9.54261 7.83067 9.53938 7.5887 9.47235C7.34672 9.40532 7.12623 9.27678 6.94868 9.09924L4.90208 7.05179C4.72439 6.87432 4.59569 6.65387 4.52852 6.41189C4.46134 6.16991 4.45798 5.91466 4.51876 5.67099L4.97541 3.84603C4.99617 3.76303 4.9978 3.6764 4.98019 3.59268C4.96258 3.50895 4.92618 3.43032 4.87375 3.36271L3.37879 1.44026ZM1.90384 0.759443C2.04966 0.613571 2.22485 0.500391 2.41777 0.427419C2.61069 0.354446 2.81693 0.323351 3.02279 0.336197C3.22865 0.349044 3.42942 0.405538 3.61177 0.50193C3.79412 0.598321 3.95388 0.732403 4.08044 0.895273L5.57539 2.81689C5.84955 3.16938 5.94621 3.62854 5.83788 4.06186L5.38206 5.88682C5.3585 5.98134 5.35977 6.08035 5.38576 6.17424C5.41175 6.26812 5.46157 6.35369 5.53039 6.42264L7.57783 8.47009C7.64686 8.53905 7.73257 8.58895 7.82661 8.61495C7.92066 8.64094 8.01983 8.64214 8.11448 8.61842L9.93859 8.1626C10.1524 8.10913 10.3756 8.10498 10.5913 8.15045C10.807 8.19593 11.0095 8.28984 11.1835 8.42509L13.1052 9.92005C13.796 10.4575 13.8593 11.4783 13.241 12.0958L12.3793 12.9575C11.7627 13.5741 10.8411 13.845 9.98192 13.5425C7.78298 12.7688 5.78645 11.5099 4.14044 9.85922C2.4899 8.21344 1.23103 6.21719 0.457218 4.01853C0.155561 3.16022 0.426386 2.23774 1.04303 1.62109L1.90467 0.759443H1.90384Z" fill="currentColor"/>
                                        </svg>
                                    </div>
                                    <span>+7 (495) 000-00-00</span>
                                </a>

                                <a href="mailto:pleasedontspam@fcknmail.com" class="header-mobile__contacts_mail">
                                    <div class="header-mobile__contacts_icon">
                                        <svg width="16" height="16" viewBox="0 0 16 12" fill="none">
                                            <path fill-rule="evenodd" clip-rule="evenodd" d="M14 1H2C1.73478 1 1.48043 1.10536 1.29289 1.29289C1.10536 1.48043 1 1.73478 1 2V10C1 10.2652 1.10536 10.5196 1.29289 10.7071C1.48043 10.8946 1.73478 11 2 11H14C14.2652 11 14.5196 10.8946 14.7071 10.7071C14.8946 10.5196 15 10.2652 15 10V2C15 1.73478 14.8946 1.48043 14.7071 1.29289C14.5196 1.10536 14.2652 1 14 1ZM2 0C1.46957 0 0.960859 0.21071 0.585786 0.58579C0.210714 0.96086 0 1.46957 0 2V10C0 10.5304 0.210714 11.0391 0.585786 11.4142C0.960859 11.7893 1.46957 12 2 12H14C14.5304 12 15.0391 11.7893 15.4142 11.4142C15.7893 11.0391 16 10.5304 16 10V2C16 1.46957 15.7893 0.96086 15.4142 0.58579C15.0391 0.21071 14.5304 0 14 0H2Z" fill="currentColor"/>
                                            <path fill-rule="evenodd" clip-rule="evenodd" d="M0.0711235 2.243C0.104865 2.18666 0.149376 2.13751 0.202115 2.09837C0.254854 2.05923 0.314788 2.03086 0.378492 2.01489C0.442196 1.99892 0.508423 1.99565 0.57339 2.00528C0.638356 2.01491 0.70079 2.03724 0.757123 2.071L8.00012 6.417L15.2431 2.071C15.2995 2.03725 15.3619 2.01493 15.4269 2.00531C15.4918 1.99569 15.558 1.99895 15.6217 2.01493C15.6854 2.0309 15.7454 2.05926 15.7981 2.09839C15.8509 2.13753 15.8954 2.18666 15.9291 2.243C15.9629 2.29934 15.9852 2.36177 15.9948 2.42674C16.0044 2.4917 16.0012 2.55792 15.9852 2.62162C15.9692 2.68533 15.9409 2.74526 15.9017 2.798C15.8626 2.85074 15.8135 2.89525 15.7571 2.929L8.00012 7.583L0.243123 2.93C0.186777 2.89626 0.137631 2.85175 0.0984909 2.79901C0.0593509 2.74627 0.0309845 2.68634 0.0150121 2.62263C-0.000960438 2.55893 -0.00422608 2.4927 0.00540167 2.42774C0.0150294 2.36277 0.0373619 2.30034 0.0711235 2.244V2.243Z" fill="currentColor"/>
                                            <path d="M6.75205 6.93204L7.18405 6.68004L6.68005 5.81604L6.24805 6.06804L6.75205 6.93204ZM0.752047 10.432L6.75205 6.93204L6.24805 6.06804L0.248047 9.568L0.752047 10.432ZM9.24805 6.93204L8.81605 6.68004L9.32005 5.81604L9.75205 6.06804L9.24805 6.93204ZM15.248 10.432L9.24805 6.93204L9.75205 6.06804L15.752 9.568L15.248 10.432Z" fill="currentColor"/>
                                        </svg>
                                    </div>
                                    <span>pleasedontspam@fcknmail.com</span>
                                </a>

                                <div class="header-mobile__contacts_address">
                                    <div class="header-mobile__contacts_icon">
                                        <svg width="10" height="14" viewBox="0 0 10 14" fill="none">
                                            <path d="M4.99991 7.18742C6.19613 7.18742 7.16925 6.21173 7.16925 5.01235C7.16925 3.81298 6.19613 2.83729 4.99991 2.83729C3.80369 2.83729 2.83057 3.81298 2.83057 5.01235C2.83057 6.21173 3.80369 7.18742 4.99991 7.18742ZM4.99991 3.67192C5.73662 3.67192 6.33681 4.27286 6.33681 5.01235C6.33681 5.75184 5.73745 6.35278 4.99991 6.35278C4.26237 6.35278 3.66301 5.75101 3.66301 5.01235C3.66301 4.2737 4.26237 3.67192 4.99991 3.67192ZM4.6969 13.4614C4.76683 13.539 4.83426 13.5891 4.89919 13.6241L4.90252 13.6258C4.94747 13.6492 4.99159 13.6667 5.03321 13.6667C5.07483 13.6667 5.11895 13.6492 5.1639 13.6258L5.16723 13.6241C5.23216 13.5891 5.29959 13.539 5.36952 13.4614C5.36952 13.4614 9.2387 9.24229 9.62745 5.58658C9.65076 5.39795 9.66658 5.20682 9.66658 5.01235C9.66658 2.42831 7.57715 0.333374 4.99991 0.333374C2.42267 0.333374 0.333244 2.42831 0.333244 5.01235C0.333244 5.21016 0.349061 5.40296 0.373202 5.59409C0.771941 9.24814 4.6969 13.4614 4.6969 13.4614ZM4.99991 1.16801C7.11431 1.16801 8.83414 2.89237 8.83414 5.01235C8.83414 5.15341 8.82415 5.30364 8.80001 5.49811C8.50199 8.29915 5.87897 11.586 5.03404 12.5859C4.16747 11.5843 1.50699 8.30583 1.19898 5.49143C1.17651 5.30698 1.16569 5.15507 1.16569 5.01235C1.16569 2.89237 2.88551 1.16801 4.99991 1.16801Z" fill="currentColor"/>
                                        </svg>
                                    </div>
                                    <span>г. Москва, пр-т Большой Христорождественский, д. 666, оф. 666</span>
                                </div>

                            </div>

                        </nav>
                    </div>

                    <?$APPLICATION->IncludeComponent(
                        "bitrix:search.form",
                        ".default",
                        Array(
                            "PAGE" => "#SITE_DIR#search/",
                            "USE_SUGGEST" => "Y"
                        )
                    );?>

                </div>

            </div>

            <div class="header-catalog">
                <ul class="header-catalog__list">

                    <?$APPLICATION->IncludeComponent(
                        "bitrix:catalog.section.list",
                        "header-catalog",
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
                            "LIST_COLUMNS_COUNT" => "",
                            "SECTION_CODE" => "",
                            "SECTION_FIELDS" => array("",""),
                            "SECTION_ID" => "1",
                            "SECTION_URL" => "",
                            "SECTION_USER_FIELDS" => array("",""),
                            "SHOW_PARENT_NAME" => "Y",
                            "TOP_DEPTH" => "1",
                            "VIEW_MODE" => "LIST"
                        )
                    );?>

                    <li class="header-catalog__item">
                        <a href="<?=SITE_DIR;?>catalog/zapchasti/"><span>Запчасти</span></a>
                    </li>

                </ul>
            </div>

        </header>

        <div class="callback-form">
            <div class="callback-form__wrapper">
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
                <button class="callback-form__close"></button>
            </div>
        </div>

        <div class="main-content">

            <a href="#" class="button-scroll-top"></a>

            <a href="#" class="button-callback">
                <div class="button-callback__wrapper">
                    <div class="button-callback__icon">
                        <svg width="20" height="20" viewBox="0 0 14 14" fill="none">
                            <path fill-rule="evenodd" clip-rule="evenodd" d="M3.37879 1.44026C3.3296 1.37698 3.26751 1.32489 3.19663 1.28745C3.12576 1.25001 3.04774 1.22808 2.96774 1.22312C2.88774 1.21815 2.8076 1.23026 2.73264 1.25865C2.65769 1.28704 2.58963 1.33105 2.53299 1.38776L1.67135 2.25024C1.26886 2.65356 1.12053 3.22438 1.29636 3.7252C2.02612 5.79814 3.21321 7.68019 4.76958 9.23174C6.32114 10.7881 8.20317 11.9752 10.2761 12.705C10.7769 12.8808 11.3477 12.7325 11.751 12.33L12.6127 11.4683C12.6694 11.4117 12.7134 11.3436 12.7418 11.2687C12.7702 11.1937 12.7823 11.1136 12.7773 11.0336C12.7723 10.9536 12.7504 10.8756 12.713 10.8047C12.6755 10.7338 12.6235 10.6717 12.5602 10.6225L10.6377 9.12757C10.5701 9.07514 10.4915 9.03874 10.4078 9.02113C10.324 9.00352 10.2374 9.00515 10.1544 9.02591L8.32947 9.48173C8.08588 9.54261 7.83067 9.53938 7.5887 9.47235C7.34672 9.40532 7.12623 9.27678 6.94868 9.09924L4.90208 7.05179C4.72439 6.87432 4.59569 6.65387 4.52852 6.41189C4.46134 6.16991 4.45798 5.91466 4.51876 5.67099L4.97541 3.84603C4.99617 3.76303 4.9978 3.6764 4.98019 3.59268C4.96258 3.50895 4.92618 3.43032 4.87375 3.36271L3.37879 1.44026ZM1.90384 0.759443C2.04966 0.613571 2.22485 0.500391 2.41777 0.427419C2.61069 0.354446 2.81693 0.323351 3.02279 0.336197C3.22865 0.349044 3.42942 0.405538 3.61177 0.50193C3.79412 0.598321 3.95388 0.732403 4.08044 0.895273L5.57539 2.81689C5.84955 3.16938 5.94621 3.62854 5.83788 4.06186L5.38206 5.88682C5.3585 5.98134 5.35977 6.08035 5.38576 6.17424C5.41175 6.26812 5.46157 6.35369 5.53039 6.42264L7.57783 8.47009C7.64686 8.53905 7.73257 8.58895 7.82661 8.61495C7.92066 8.64094 8.01983 8.64214 8.11448 8.61842L9.93859 8.1626C10.1524 8.10913 10.3756 8.10498 10.5913 8.15045C10.807 8.19593 11.0095 8.28984 11.1835 8.42509L13.1052 9.92005C13.796 10.4575 13.8593 11.4783 13.241 12.0958L12.3793 12.9575C11.7627 13.5741 10.8411 13.845 9.98192 13.5425C7.78298 12.7688 5.78645 11.5099 4.14044 9.85922C2.4899 8.21344 1.23103 6.21719 0.457218 4.01853C0.155561 3.16022 0.426386 2.23774 1.04303 1.62109L1.90467 0.759443H1.90384Z" fill="currentColor"/>
                        </svg>
                    </div>
                    <div class="button-callback__blue-circle"></div>
                    <div class="button-callback__light-circle"></div>
                </div>
            </a>
