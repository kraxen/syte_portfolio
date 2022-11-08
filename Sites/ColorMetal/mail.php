<?php

$name = $_POST['name'];
$phone = $_POST['phone'];

$name = htmlspecialchars($name);
$phone = htmlspecialchars($phone);

$name = urldecode($name);
$phone = urldecode($phone);

if (mail("nimrod345@gmail.com", "Заказ с сайта", "Имя:".$name.". Телефон: ".$phone."\r\n"))
 {  
    header("location: index.html");
}
} else { 
    echo "при отправке сообщения возникли ошибки"; 
}?>