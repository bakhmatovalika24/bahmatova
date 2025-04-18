<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = htmlspecialchars($_POST["name"]);
    $email = htmlspecialchars($_POST["email"]);
    $message = htmlspecialchars($_POST["message"]);

  
    echo "<p style='color: green;'>Спасибо, $name! Мы получили ваше сообщение: \"$message\". Ответ будет отправлен на $email.</p>";

 
}

