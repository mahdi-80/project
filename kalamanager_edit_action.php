<?php
include("theme-header.php");
$id=$_POST["id"];
$title=$_POST["title"];
$price=$_POST["price"];

$imageurl="images/".$_FILES["image"]["name"];
move_uploaded_file($_FILES["image"]["tmp_name"],$imageurl);


include("conect.php");
$result=mysqli_query($link,"UPDATE `mahsol` SET `title`='$title',`imageurl`='$imageurl',`price`='$price' WHERE `id`='$id'");
mysqli_close($link);
if($result==true){
    ?>
    <script>
        location.replace("kalamanager.php");
    </script>
    <?php
}else{
   
    ?>
        <script>
            alert("ویرایش کالا انجام نشد");
            location.replace("index.php");
        </script>
    <?php
}
?>
<?php
include("theme-footer.html");
?>