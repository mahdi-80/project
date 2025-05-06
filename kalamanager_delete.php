<?php
include("theme-header.php");
$id=$_GET["id"];
?>
<p>
    <a href="kalamanager_add.php">+</a>
</p>
<?php
include("conect.php");
$result=mysqli_query($link,"DELETE FROM mahsol WHERE `mahsol`.`id` = $id");
mysqli_close($link);
if($result==true){
    ?>
    <script>
        location.replace("kalamanager.php");
    </script>
    <?php
}else{
    echo("حذف انجام نشد");
}
?>

<?php
include("theme-footer.html");
?>