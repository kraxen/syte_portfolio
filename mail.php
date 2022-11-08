<?php

$name = $_POST['name'];
$email = $_POST['email'];
$comment = $_POST['comment'];

$name = htmlspecialchars($name);
$email = htmlspecialchars($email);
$comment = htmlspecialchars($comment);

$name = urldecode($name);
$email = urldecode($email);
$comment = urldecode($comment);

if (mail("axe211411@gmail.com", "Заказ с сайта", "Имя:".$name.". E-mail: ".$email , ". Комментарий: ".$comment. ,"From: axe211411@gmail.com \r\n"))
 { 
    echo "сообщение успешно отправлено"; 
} else { 
    echo "при отправке сообщения возникли ошибки"; 
}?>