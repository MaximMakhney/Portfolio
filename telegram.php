// <?php

 /* https://api.telegram.org/bot2144513704:AAGQM_y1bamQzUgD6s4ewVzvGhhjLFBX-L0
// /getUpdates,
// где, XXXXXXXXXXXXXXXXXXXXXXX - токен вашего бота, полученный ранее */

 $name = $_POST['name'];
 $email = $_POST['email'];
 $text = $_POST['message'];
 $token = "2144513704:AAGQM_y1bamQzUgD6s4ewVzvGhhjLFBX-L0";
 $chat_id = "382628834";
 $arr = array(
   'Имя пользователя: ' => $name,
   'Email' => $email,
   'Сообщение: ' => $text
 );

 foreach($arr as $key => $value) {
 $txt .= "<b>".$key."</b> ".$value."%0A";
 };

 $sendToTelegram = fopen("https://api.telegram.org/bot{$token}/sendMessage?chat_id={$chat_id}&parse_mode=html&text={$txt}","r");

 if ($sendToTelegram) {
   header('Location: thank-you.html');
 } else {
   header ('Location: fail.html');
 }
 ?>