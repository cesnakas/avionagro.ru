<?
define('NEED_AUTH',true);
require($_SERVER["DOCUMENT_ROOT"]."/bitrix/header.php");
$APPLICATION->SetTitle("Авторизация / Регистрация");

if ($USER->IsAuthorized()) {
    LocalRedirect(SITE_DIR.'personal/');
}
?>

    <?$logout = $APPLICATION->GetCurPageParam(
        'logout=yes',
        [
            'login',
            'logout',
            'register',
            'forgot_password',
            'change_password'
        ]
    );?>

<?
require($_SERVER["DOCUMENT_ROOT"]."/bitrix/footer.php");
?>