
<?php

$username = $_POST["username"];
$password = $_POST["password"];
$link = mysqli_connect("localhost" , "root" , "" , "12");
$result = mysqli_query($link , "SELECT * FROM `user` 
                        WHERE `username`='$username'and `password`='$password'");
mysqli_close($link);
$row = mysqli_fetch_array($result);
if($row){
    include "index.php";
    ?>
    <script>
        location.replace("index.php");
    </script>
    <?php
}
else{
    ?>
    <style>
        p{
            text-align: center;
            font-size : 20px ;
        }
    </style>
    <p>
    نام کاربری یا رمز عبور صحیح نیست
    </p>
    <?php
}
?>