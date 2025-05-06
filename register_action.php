<?php
include("theme-header.php");
$username=$_POST["username"];
$email=$_POST["email"];
$password=$_POST["password"];

// ---------------------------------------------------


include("conect.php");
$r=mysqli_query($link,"SELECT username FROM `user` 
WHERE username = '$username'");
        
mysqli_close($link);

$row=mysqli_fetch_array($r);

if($row==true)
{
?>
<script>
location.replace("index.php");
alert ("نام کاربری قبلا انتخاب شده");
</script>

<?php
}

// --------------------------------------

include("conect.php");
$result=mysqli_query($link,"INSERT INTO `user`( `username`,`email`,`password`) 
VALUES ('$username','$email','$password')
");
mysqli_close($link);
if($result==true){
    ?>
    <script>
        alert("ثبت نام انجام شد");
        location.replace("index.php");
    </script>
    <?php
}else{
    ?>
        <script>
            alert("ثبت نام انجام نشد");
            location.replace("index.php");
        </script>
    <?php

}
?>
<?php
include("theme-footer.html");
?>