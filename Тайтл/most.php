<?php
// Метод GET
$name=$_GET ['name1'];
$surname=$_GET ['surname'];
$email=$_GET ['email'];
$pass=$_GET ['password1'];

// echo "Успешно";

$link = new mysqli ( 
    'localhost',        /* Хост, к которому мы подключаемся */ 
    'root',             /* Имя пользователя */ 
    '',                 /* Используемый пароль */ 
    'Shoow');           /* База данных для запросов по умолчанию */ 

if (!$link) { 
printf("Невозможно подключиться к базе данных. Код ошибки: %s\n", mysqli_connect_error()); 
exit; 
}

$sql = $link->prepare ("INSERT INTO Users (Email, Password, Name, Surname) VALUES (?, ?, ?, ?)");
$sql->bind_param('ssss', $email, $pass, $name, $surname);
$sql->execute();
printf("%d Row inserted.\n", $sql->affected_rows);
$sql->close();
?>

<script>location.href="index.html"</script>