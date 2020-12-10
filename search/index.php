<?
require($_SERVER["DOCUMENT_ROOT"]."/bitrix/header.php");
$APPLICATION->SetTitle("Поиск");
?>

    <div class="container">

        <?$APPLICATION->IncludeComponent(
            "bitrix:search.page",
            "",
            Array(
                "AJAX_MODE" => "Y",
                "AJAX_OPTION_ADDITIONAL" => "",
                "AJAX_OPTION_HISTORY" => "Y",
                "AJAX_OPTION_JUMP" => "Y",
                "AJAX_OPTION_STYLE" => "Y",
                "CACHE_TIME" => "3600",
                "CACHE_TYPE" => "A",
                "CHECK_DATES" => "N",
                "DEFAULT_SORT" => "rank",
                "DISPLAY_BOTTOM_PAGER" => "Y",
                "DISPLAY_TOP_PAGER" => "Y",
                "FILTER_NAME" => "",
                "NO_WORD_LOGIC" => "N",
                "PAGER_SHOW_ALWAYS" => "Y",
                "PAGER_TEMPLATE" => "",
                "PAGER_TITLE" => "Результаты поиска",
                "PAGE_RESULT_COUNT" => "50",
                "RESTART" => "N",
                "SHOW_WHEN" => "N",
                "SHOW_WHERE" => "Y",
                "USE_LANGUAGE_GUESS" => "Y",
                "USE_SUGGEST" => "Y",
                "USE_TITLE_RANK" => "N",
                "arrFILTER" => array("no"),
                "arrWHERE" => array()
            )
        );?>

    </div>

<?
require($_SERVER["DOCUMENT_ROOT"]."/bitrix/footer.php");
?>