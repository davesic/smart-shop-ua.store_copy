<?php
    
    $text = $_POST;
    var_dump($text);
    mail("WEBDAVEE@GMAIL.COM", "New Lead", $text, "X-Mailer: PHP/");
    //header('Location: thankyou.php'); // ссылка на страницу спасибо
    ?>