<?php
    
    $text = $_POST;
    echo $text;
    mail("WEBDAVEE@GMAIL.COM", "New Lead", $text, "X-Mailer: PHP/");
    header('Location: confirm.html'); // ссылка на страницу спасибо
    ?>