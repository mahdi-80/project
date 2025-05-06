<?php
session_start();
?>
<header>
    <h1>فروشگاه قطعات کامپیوتر</h1>
</header>

<nav class="navbar navbar-expand-lg navbar-dark navbar-custom">
    <div class="container">
        <!-- لوگو یا نام سایت -->
        <a class="navbar-brand" href="index.php">فروشگاه قطعات کامپیوتر</a>
        
        <!-- دکمه همبرگر برای صفحات کوچک -->
        <button 
            class="navbar-toggler" 
            type="button" 
            data-bs-toggle="collapse" 
            data-bs-target="#navbarNav"
            aria-controls="navbarNav" 
            aria-expanded="false" 
            aria-label="Toggle navigation"
        >
            <span class="navbar-toggler-icon"></span>
        </button>
        
        <!-- منوی اصلی -->
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav me-auto">

                

            <li class="nav-item">
            <a class="nav-link active" href="index.php">خانه</a>
            </li>
            <li class="nav-item">
                <a class="nav-link active" href="about.php">درباره ما</a>
            </li>
            <li class="nav-item">
                <a class="nav-link active" href="contact.php">تماس با ما</a>
            </li>
            <?php if(isset($_SESSION["login"]) && $_SESSION["login"]==true){ ?>
                <li class="nav-item">
                    <a class="nav-link active" href="logout.php">خروج</a>
                </li>
            <?php }else{ ?>
                <li class="nav-item">
                    <a class="nav-link active" href="login.php">ورود</a>
                </li>
            <?php } ?>
            <?php if(isset($_SESSION["admin"]) && $_SESSION["admin"]==true){ ?>
                <li class="nav-item">
                    <a class="nav-link active" href="kalamanager.php">مدیریت</a>
                </li>
            <?php } ?>
                
            </ul>
            
            <!-- بخش جستجو و سبد خرید -->
            <div class="d-flex">
                <form class="d-flex me-2">
                    <input class="form-control me-2" type="search" placeholder="جستجو..." aria-label="Search">
                    <button class="btn btn-light" type="submit">
                        <i class="fas fa-search"></i>
                    </button>
                </form>
                <a href="cart.php" class="btn btn-light position-relative">
                    <i class="fas fa-shopping-cart"></i>
                    <span class="position-absolute top-0 start-100 translate-middle badge rounded-pill bg-danger">
                        3
                    </span>
                </a>
            </div>
        </div>
    </div>
</nav>



