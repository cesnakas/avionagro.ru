<?if (!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();?>

<?if (!empty($arResult)):?>
<ul>
    <li class="footer-nav__start">
        Навигация
    </li>

    <li>
	<a href="/catalog/">» Каталог</a>
    </li>

<?
foreach($arResult as $arItem):
	if($arParams["MAX_LEVEL"] == 1 && $arItem["DEPTH_LEVEL"] > 1) 
		continue;
?>
	<?if($arItem["SELECTED"]):?>
		<li>
    		    <a class="selected" href="<?=$arItem["LINK"]?>">
            		» <?=$arItem["TEXT"]?>
	            </a>
    		</li>
	<?else:?>
		<li>
	            <a href="<?=$arItem["LINK"]?>">
			» <?=$arItem["TEXT"]?>
        	    </a>
	        </li>
	<?endif?>
	
<?endforeach?>

</ul>
<?endif?>