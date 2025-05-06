



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

    <form action="kalamanager_add_action.php" method="post" enctype="multipart/form-data" class="row m-2">
        <input type="file" name="image" class="col-12 col-md m-1" placeholder="تصویر">
        <input type="text" name="title" class="col-12 col-md m-1" placeholder="عنوان">
        <input type="text" name="price" class="col-12 col-md m-1" placeholder="قیمت">
        <input type="submit" name="ذخیره" class="col-12 col-md m-1">
    </form>

    <?php include 'theme-footer.html'; ?>

    <!-- Bootstrap JS + Popper -->
    <script src="bootstrap.bundle.min.js"></script>
</body>
</html>