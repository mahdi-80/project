<?php

$username = $_POST["username"];
$email = $_POST["email"];
$password = $_POST["password"];
$link = mysqli_connect("localhost" , "root" , "" , "12");
$result = mysqli_query($link , "INSERT INTO `user`(`username`, `email`, `password`) 
                            VALUES ('$username','$email','$password');");
mysqli_close($link);
// $row = mysqli_fetch_array($result);
if($result == true){
    include "index.php";
    ?>
    <p>ثبت نام انجام شد</p>
    <?php
}
else{
    include "index.php";
    ?>
    <p>ثبت نام انجام نشد</p>
    <?php
}
?>
