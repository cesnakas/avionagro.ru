<?

define('PUBLIC_AJAX_MODE', true);

require_once($_SERVER["DOCUMENT_ROOT"] . "/bitrix/modules/main/include/prolog_before.php");

/**
 * Bitrix vars
 *
 * @var array $arParams
 */

CModule::IncludeModule('iblock');

print_r($arParams);

$response = ['error' => 'Произошла неизвестная ошибка, попробуйте позднее', 'success' => false];

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    if (check_bitrix_sessid()) {

        do { //THIS TRICK FROR USE "break";

            if (mb_strlen($_POST["user_name"]) <= 1) {
                $response['error'] = "Укажите ваше имя.";
                break;
            } elseif (mb_strlen($_POST["user_phone"]) <= 1) {
                $response['error'] = "Укажите телефон, на который ожидаете ответ.";
                break;
            }

            if ($arParams["USE_CAPTCHA"] == "Y") {
                $captcha_code = $_POST["captcha_sid"];
                $captcha_word = $_POST["captcha_word"];
                $cpt = new CCaptcha();
                $captchaPass = COption::GetOptionString("main", "captcha_password", "");
                if ($captcha_word <> '' && $captcha_code <> '') {
                    if (!$cpt->CheckCodeCrypt($captcha_word, $captcha_code, $captchaPass)) {
                        $response['error'] = GetMessage("MF_CAPTCHA_WRONG");
                        break;
                    }
                } else {
                    $response['error'] = GetMessage("MF_CAPTHCA_EMPTY");
                    break;
                }
            }

            function RemapFilesArray($name, $type, $tmp_name, $error, $size)
            {
                return [
                    'name' => $name,
                    'type' => $type,
                    'tmp_name' => $tmp_name,
                    'error' => $error,
                    'size' => $size,
                ];
            }

            $files = array_map('RemapFilesArray',
                (array)$_FILES['file']['name'],
                (array)$_FILES['file']['type'],
                (array)$_FILES['file']['tmp_name'],
                (array)$_FILES['file']['error'],
                (array)$_FILES['file']['size']
            );


            $arFields = [
                "IBLOCK_ID" => 4,
                "NAME" => $_POST["user_name"],
                "PROPERTY_VALUES" => [
                    "PHONE" => $_POST["user_phone"],
                    "FILES" => $files
                ]
            ];

            $cIBlockElement = new CIBlockElement;

            $cIBlockElement->Add($arFields);

            $response = ['error' => null, 'success' => true];

            /*if (!empty($arParams["EVENT_MESSAGE_ID"])) {
                foreach ($arParams["EVENT_MESSAGE_ID"] as $v)
                    if (intval($v) > 0)
                        CEvent::Send($arParams["EVENT_NAME"], SITE_ID, $arFields, "N", intval($v));
            } else {
                CEvent::Send($arParams["EVENT_NAME"], SITE_ID, $arFields);
            }*/
        } while (false);

    }
}

header('Content-Type: application/json');
echo json_encode($response);
die();
?>