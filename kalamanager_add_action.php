<?php
include("theme-header.php");

$title=$_POST["title"];
$price=$_POST["price"];


$imageurl="images/".$_FILES["image"]["name"];
move_uploaded_file($_FILES["image"]["tmp_name"],$imageurl);

include("conect.php");
$result=mysqli_query($link,"INSERT INTO `mahsol`(`imageurl`, `title`,`price`) 
                    VALUES ('$imageurl','$title' , '$price')");
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
            alert("ثبت کالا انجام نشد");
            location.replace("index.php");
        </script>
    <?php
}
?>
<?php
include("theme-footer.html");
?>



