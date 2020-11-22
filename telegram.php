<?php

/* https://api.telegram.org/bot1443891538:AAEcrOe2jL8Ad0udV004-1GScONvjuRHr50/getUpdates,
где, XXXXXXXXXXXXXXXXXXXXXXX - токен вашего бота, полученный ранее */

$name = $_POST['user_name'];
$phone = $_POST['user_phone'];

$token = "1443891538:AAEcrOe2jL8Ad0udV004-1GScONvjuRHr50";
$chat_id = "-1001418617640";
$arr = array(
  'Имя пользователя: ' => $name,
  'Телефон: ' => $phone,
  
);

foreach($arr as $key => $value) {
  $txt .= "<b>".$key."</b> ".$value."%0A";
};

$sendToTelegram = fopen("https://api.telegram.org/bot{$token}/sendMessage?chat_id={$chat_id}&parse_mode=html&text={$txt}","r");

if ($sendToTelegram) {
  header('Location: thank-you.html');
} else {
  echo "Error";
}
?>