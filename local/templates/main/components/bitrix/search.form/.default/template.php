<?
if(!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();
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

<form class="header-bot__search" action="<?=$arResult["FORM_ACTION"]?>">

    <?if($arParams["USE_SUGGEST"] === "Y"):?>

        <?$APPLICATION->IncludeComponent(
            "bitrix:search.suggest.input",
            "",
            array(
                "NAME" => "q",
                "VALUE" => "",
                "INPUT_SIZE" => 15,
                "DROPDOWN_SIZE" => 10,
            ),
            $component, array("HIDE_ICONS" => "Y")
        );?>

    <?else:?>

        <input type="text" id="search-text"/>
        <label for="search-text">Название или номер...</label>

    <?endif;?>

    <button class="header-bot__search_icon" name="s" type="submit" value="<?=GetMessage("BSF_T_SEARCH_BUTTON");?>">
        <svg width="16" height="16" viewBox="0 0 16 16" fill="none">
            <path fill-rule="evenodd" clip-rule="evenodd" d="M10.4422 10.442C10.5351 10.349 10.6454 10.2752 10.7667 10.2249C10.8881 10.1746 11.0183 10.1487 11.1497 10.1487C11.2811 10.1487 11.4112 10.1746 11.5326 10.2249C11.654 10.2752 11.7643 10.349 11.8572 10.442L15.7072 14.292C15.8948 14.4795 16.0003 14.7338 16.0004 14.9991C16.0005 15.2644 15.8952 15.5188 15.7077 15.7065C15.5202 15.8941 15.2658 15.9996 15.0005 15.9997C14.7353 15.9998 14.4808 15.8945 14.2932 15.707L10.4432 11.857C10.3502 11.7641 10.2765 11.6538 10.2261 11.5324C10.1758 11.411 10.1499 11.2809 10.1499 11.1495C10.1499 11.0181 10.1758 10.8879 10.2261 10.7665C10.2765 10.6451 10.3502 10.5348 10.4432 10.442H10.4422Z" fill="#00AEEF"/>
            <path fill-rule="evenodd" clip-rule="evenodd" d="M6.5 12C7.22227 12 7.93747 11.8577 8.60476 11.5813C9.27205 11.3049 9.87837 10.8998 10.3891 10.3891C10.8998 9.87837 11.3049 9.27205 11.5813 8.60476C11.8577 7.93747 12 7.22227 12 6.5C12 5.77773 11.8577 5.06253 11.5813 4.39524C11.3049 3.72795 10.8998 3.12163 10.3891 2.61091C9.87837 2.10019 9.27205 1.69506 8.60476 1.41866C7.93747 1.14226 7.22227 1 6.5 1C5.04131 1 3.64236 1.57946 2.61091 2.61091C1.57946 3.64236 1 5.04131 1 6.5C1 7.95869 1.57946 9.35764 2.61091 10.3891C3.64236 11.4205 5.04131 12 6.5 12ZM13 6.5C13 8.22391 12.3152 9.87721 11.0962 11.0962C9.87721 12.3152 8.22391 13 6.5 13C4.77609 13 3.12279 12.3152 1.90381 11.0962C0.684819 9.87721 0 8.22391 0 6.5C0 4.77609 0.684819 3.12279 1.90381 1.90381C3.12279 0.684819 4.77609 0 6.5 0C8.22391 0 9.87721 0.684819 11.0962 1.90381C12.3152 3.12279 13 4.77609 13 6.5Z" fill="currentColor"/>
        </svg>
    </button>

</form>

<!-- // -->

<?/*
<div class="search-form">

<form action="<?=$arResult["FORM_ACTION"]?>">
	<table border="0" cellspacing="0" cellpadding="2" align="center">
		<tr>
			<td align="center">

            <?if($arParams["USE_SUGGEST"] === "Y"):?>

                <?$APPLICATION->IncludeComponent(
                    "bitrix:search.suggest.input",
                    "",
                    array(
                        "NAME" => "q",
                        "VALUE" => "",
                        "INPUT_SIZE" => 15,
                        "DROPDOWN_SIZE" => 10,
                    ),
                    $component, array("HIDE_ICONS" => "Y")
                );?>

            <?else:?>

                <input type="text" name="q" value="" size="15" maxlength="50" />

            <?endif;?>

            </td>
		</tr>
		<tr>
			<td align="right">
                <input name="s" type="submit" value="<?=GetMessage("BSF_T_SEARCH_BUTTON");?>" />
            </td>
		</tr>
	</table>
</form>

</div>
*/?>