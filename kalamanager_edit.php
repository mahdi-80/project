








<!DOCTYPE html>
<html lang="fa" dir="rtl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>فروشگاه قطعات کامپیوتر</title>
        <!-- Bootstrap 5 RTL CSS -->
        <link rel="stylesheet" href="bootstrap.rtl.min.css">
    <!-- Font Awesome (آیکون‌ها) -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <!-- استایل سفارشی -->
    <link rel="stylesheet" href="styles.css">
</head>
<body>
    <?php include 'theme-header.php'; ?>


        <?php
            $id=$_GET["id"];
            include("conect.php");
                        $result=mysqli_query($link,"SELECT * FROM `mahsol` WHERE `id`=$id;");
            mysqli_close($link);
            $row=mysqli_fetch_array($result);
            if($row){
        ?>
                <form action="kalamanager_edit_action.php" method="post" enctype="multipart/form-data" class="row m-2">
                    <input type="text" name="id" hidden value="<?php echo($row["id"]);?>" placeholder="عنوان">
                    <input type="file" name="image" class="col-12 col-md m-1" placeholder="تصویر">
                    <input type="text" name="title" value="<?php echo($row["title"]);?>" placeholder="عنوان">
                    <input type="text" name="price" value="<?php echo($row["price"]); ?>" placeholder="قیمت">
                    <input type="submit" value="ویرایش">
                </form>
            <?php
            }else{
                echo("محصول یافت نشد");
            }
            ?>



    <?php include 'theme-footer.html'; ?>

    <!-- Bootstrap JS + Popper -->
    <script src="bootstrap.bundle.min.js"></script>
</body>
</html>