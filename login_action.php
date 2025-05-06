<?php
include("theme-header.php");
$username=$_POST["username"];
$password=$_POST["password"];

include("conect.php");
$result=mysqli_query($link,"SELECT * FROM `user` 
    WHERE `username`='$username' AND `password`='$password';");
mysqli_close($link);
$row=mysqli_fetch_array($result);
if($row){
    $_SESSION["login"]=true;
    $_SESSION["admin"]=$row["admin"];
    ?>
    <script>
        alert("ورود انجام شد");
        location.replace("index.php");
    </script>
    <?php
}else{?>
    <script>
    alert("نام کاربری یا رمز عبور صحیح نیست");
    location.replace("index.php");
</script>
<?php
}
?>
<?php
include("theme-footer.html");
?>