<?if (!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();?>

<?if (!empty($arResult)):?>
<ul class="header-bot__navigation">

    <li>
        <button class="header-bot__navigation_btn">
            <svg width="21" height="21" viewBox="0 0 22 22" fill="none">
                <path fill-rule="evenodd" clip-rule="evenodd" d="M0.5 2.75C0.5 2.15326 0.737053 1.58097 1.15901 1.15901C1.58097 0.737053 2.15326 0.5 2.75 0.5H7.25C7.84674 0.5 8.41903 0.737053 8.84099 1.15901C9.26295 1.58097 9.5 2.15326 9.5 2.75V7.25C9.5 7.84674 9.26295 8.41903 8.84099 8.84099C8.41903 9.26295 7.84674 9.5 7.25 9.5H2.75C2.15326 9.5 1.58097 9.26295 1.15901 8.84099C0.737053 8.41903 0.5 7.84674 0.5 7.25V2.75ZM2.75 2C2.55109 2 2.36032 2.07902 2.21967 2.21967C2.07902 2.36032 2 2.55109 2 2.75V7.25C2 7.44891 2.07902 7.63968 2.21967 7.78033C2.36032 7.92098 2.55109 8 2.75 8H7.25C7.44891 8 7.63968 7.92098 7.78033 7.78033C7.92098 7.63968 8 7.44891 8 7.25V2.75C8 2.55109 7.92098 2.36032 7.78033 2.21967C7.63968 2.07902 7.44891 2 7.25 2H2.75ZM12.5 2.75C12.5 2.15326 12.7371 1.58097 13.159 1.15901C13.581 0.737053 14.1533 0.5 14.75 0.5H19.25C19.8467 0.5 20.419 0.737053 20.841 1.15901C21.2629 1.58097 21.5 2.15326 21.5 2.75V7.25C21.5 7.84674 21.2629 8.41903 20.841 8.84099C20.419 9.26295 19.8467 9.5 19.25 9.5H14.75C14.1533 9.5 13.581 9.26295 13.159 8.84099C12.7371 8.41903 12.5 7.84674 12.5 7.25V2.75ZM14.75 2C14.5511 2 14.3603 2.07902 14.2197 2.21967C14.079 2.36032 14 2.55109 14 2.75V7.25C14 7.44891 14.079 7.63968 14.2197 7.78033C14.3603 7.92098 14.5511 8 14.75 8H19.25C19.4489 8 19.6397 7.92098 19.7803 7.78033C19.921 7.63968 20 7.44891 20 7.25V2.75C20 2.55109 19.921 2.36032 19.7803 2.21967C19.6397 2.07902 19.4489 2 19.25 2H14.75ZM0.5 14.75C0.5 14.1533 0.737053 13.581 1.15901 13.159C1.58097 12.7371 2.15326 12.5 2.75 12.5H7.25C7.84674 12.5 8.41903 12.7371 8.84099 13.159C9.26295 13.581 9.5 14.1533 9.5 14.75V19.25C9.5 19.8467 9.26295 20.419 8.84099 20.841C8.41903 21.2629 7.84674 21.5 7.25 21.5H2.75C2.15326 21.5 1.58097 21.2629 1.15901 20.841C0.737053 20.419 0.5 19.8467 0.5 19.25V14.75ZM2.75 14C2.55109 14 2.36032 14.079 2.21967 14.2197C2.07902 14.3603 2 14.5511 2 14.75V19.25C2 19.4489 2.07902 19.6397 2.21967 19.7803C2.36032 19.921 2.55109 20 2.75 20H7.25C7.44891 20 7.63968 19.921 7.78033 19.7803C7.92098 19.6397 8 19.4489 8 19.25V14.75C8 14.5511 7.92098 14.3603 7.78033 14.2197C7.63968 14.079 7.44891 14 7.25 14H2.75ZM12.5 14.75C12.5 14.1533 12.7371 13.581 13.159 13.159C13.581 12.7371 14.1533 12.5 14.75 12.5H19.25C19.8467 12.5 20.419 12.7371 20.841 13.159C21.2629 13.581 21.5 14.1533 21.5 14.75V19.25C21.5 19.8467 21.2629 20.419 20.841 20.841C20.419 21.2629 19.8467 21.5 19.25 21.5H14.75C14.1533 21.5 13.581 21.2629 13.159 20.841C12.7371 20.419 12.5 19.8467 12.5 19.25V14.75ZM14.75 14C14.5511 14 14.3603 14.079 14.2197 14.2197C14.079 14.3603 14 14.5511 14 14.75V19.25C14 19.4489 14.079 19.6397 14.2197 19.7803C14.3603 19.921 14.5511 20 14.75 20H19.25C19.4489 20 19.6397 19.921 19.7803 19.7803C19.921 19.6397 20 19.4489 20 19.25V14.75C20 14.5511 19.921 14.3603 19.7803 14.2197C19.6397 14.079 19.4489 14 19.25 14H14.75Z" fill="currentColor"/>
            </svg>
            Каталог
        </button>
    </li>

<?
foreach($arResult as $arItem):
	if($arParams["MAX_LEVEL"] == 1 && $arItem["DEPTH_LEVEL"] > 1) 
		continue;
?>
	<?if($arItem["SELECTED"]):?>
		<li>
            <a class="selected" href="<?=$arItem["LINK"]?>">
                <?=$arItem["TEXT"]?>
            </a>
        </li>
	<?else:?>
		<li>
            <a href="<?=$arItem["LINK"]?>">
                <?=$arItem["TEXT"]?>
            </a>
        </li>
	<?endif?>
	
<?endforeach?>

</ul>
<?endif?>