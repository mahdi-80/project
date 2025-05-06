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

    <main class="container my-5">
        <section id="best-sellers">
            <h2 class="text-center mb-4">محصولات</h2>
            <div class="row g-4">
                <!-- محصول ۱ -->
                <?php
                    include("conect.php");
                    $result=mysqli_query($link,"SELECT * FROM `mahsol`");
                    mysqli_close($link);
                    $row=mysqli_fetch_array($result);
                    while($row){
                ?>
                <div class="col-md-6 col-lg-4 col-xl-3">
                    <div class="card h-100 product-card">
                        <img src="<?php echo($row["imageurl"]); ?>" class="card-img-top p-3" alt="">
                        <div class="card-body">
                            <h5 class="card-title"><?php echo($row["title"]); ?></h5>
                            <p class="card-text text-danger fw-bold"><?php echo($row["price"]); ?></p>
                            <!-- <button> <a href="cart.php"> افزودن به سبد خرید</a></button> -->
                        </div>
                        <div class="card-footer bg-transparent">
                            <a href="cart.php"><button class="btn btn-primary w-100">افزودن به سبد خرید</button></a>
                        </div>
                    </div>
                </div> 

<?php
$row=mysqli_fetch_array($result);
}
?>
                
            </div>
        </section>
    </main>

    <?php include 'theme-footer.html'; ?>

    <!-- Bootstrap JS + Popper -->
    <script src="bootstrap.bundle.min.js"></script>
</body>
</html>