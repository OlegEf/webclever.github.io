<?php if (isset($_POST["yourname"])) {
$to =  "komymail@mail.ru";
$from = 'otkogomail@mail.ru';
$charset = "utf-8";
$subject = '=?'.$charset.'?B?'.base64_encode("Сообщение с сайта").'?=';
$headerss ="Content-type: text/html; charset=$charset\r\n";
$name = '=?'.$charset.'?B?'.base64_encode("От пользователя").'?=';  //Имя_отправителя   c//
$headerss.="From: $name <$from>\r\n";
$headerss.="MIME-Version: 1.0\r\n";
$headerss.="Date: ".date('D, d M Y h:i:s')."\r\n";
$msg = "Сообщение: <br>Имя: ".$_POST["yourname"].'<br>Телефон: '.$_POST["yourphone"].'<br>Сообщение: '.$_POST["yourmsg"];
mail($to, $subject, $msg, $headerss);
echo 'Сообщение успешно отправлено!';
}
?>