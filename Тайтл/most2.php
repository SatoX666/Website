<?php
// Метод GET
// $name=$_GET ['name1'];
// $surname=$_GET ['surname'];
$email=$_GET ['email'];
$pass=$_GET ['password1'];

// echo "Успешно ";

$link = new mysqli ( 
    'localhost',        /* Хост, к которому мы подключаемся */ 
    'root',             /* Имя пользователя */ 
    '',                 /* Используемый пароль */ 
    'Shoow');           /* База данных для запросов по умолчанию */ 

  $sql = "SELECT Email FROM Users WHERE Email='".trim($email)."'";
$result = $link->query($sql);
// echo $result->num_rows;
if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {
        echo $row["Email"];
    }
} else {
    echo "0";
}
$link->close();
?>