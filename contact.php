<!DOCTYPE html>
<html lang="fa" dir="rtl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>تماس با ما - فروشگاه قطعات کامپیوتر</title>
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
        <div class="row">
            <div class="col-12">
                <h2 class="text-center mb-4">تماس با ما</h2>
                
                <div class="row">
                    <div class="col-md-6 mb-4">
                        <div class="card shadow-sm h-100">
                            <div class="card-body">
                                <h3 class="text-primary mb-4">اطلاعات تماس</h3>
                                
                                <div class="contact-info mb-3">
                                    <div class="d-flex align-items-center mb-3">
                                        <i class="fas fa-map-marker-alt fa-2x text-danger me-3"></i>
                                        <div>
                                            <h5 class="mb-0">آدرس</h5>
                                            <p class="mb-0">اصفهان . نجف آباد . خیابان شهدا . هنرستان طالبی</p>
                                        </div>
                                    </div>
                                    
                                    <div class="d-flex align-items-center mb-3">
                                        <i class="fas fa-phone fa-2x text-success me-3"></i>
                                        <div>
                                            <h5 class="mb-0">تلفن تماس</h5>
                                            <p class="mb-0">۰۳۱-۱۲۳۴۵۶۷۸</p>
                                            <p class="mb-0">۰۹۱۳-۳۴۵۶۷۸۹</p>
                                        </div>
                                    </div>
                                    
                                    <div class="d-flex align-items-center mb-3">
                                        <i class="fas fa-envelope fa-2x text-info me-3"></i>
                                        <div>
                                            <h5 class="mb-0">ایمیل</h5>
                                            <p class="mb-0">info@computerparts.ir</p>
                                            <p class="mb-0">support@computerparts.ir</p>
                                        </div>
                                    </div>
                                    
                                    <div class="d-flex align-items-center">
                                        <i class="fas fa-clock fa-2x text-warning me-3"></i>
                                        <div>
                                            <h5 class="mb-0">ساعات کاری</h5>
                                            <p class="mb-0">شنبه تا چهارشنبه: ۸ صبح تا ۵ عصر</p>
                                            <p class="mb-0">پنجشنبه: ۸ صبح تا ۱۲ ظهر</p>
                                        </div>
                                    </div>
                                </div>
                                
                                <div class="social-media mt-4">
                                    <h5 class="mb-3">شبکه‌های اجتماعی</h5>
                                    <a href="#" class="btn btn-outline-primary me-2"><i class="fab fa-telegram"></i></a>
                                    <a href="#" class="btn btn-outline-info me-2"><i class="fab fa-instagram"></i></a>
                                    <a href="#" class="btn btn-outline-primary me-2"><i class="fab fa-twitter"></i></a>
                                    <a href="#" class="btn btn-outline-danger me-2"><i class="fab fa-youtube"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                    
                    <div class="col-md-6 mb-4">
                        <div class="card shadow-sm h-100">
                            <div class="card-body">
                                <h3 class="text-primary mb-4">فرم تماس</h3>
                                
                                <form action="process-contact.php" method="POST">
                                    <div class="mb-3">
                                        <label for="name" class="form-label">نام و نام خانوادگی</label>
                                        <input type="text" class="form-control" id="name" name="name" required>
                                    </div>
                                    
                                    <div class="mb-3">
                                        <label for="email" class="form-label">آدرس ایمیل</label>
                                        <input type="email" class="form-control" id="email" name="email" required>
                                    </div>
                                    
                                    <div class="mb-3">
                                        <label for="phone" class="form-label">شماره تماس</label>
                                        <input type="tel" class="form-control" id="phone" name="phone" required>
                                    </div>
                                    
                                    <div class="mb-3">
                                        <label for="subject" class="form-label">موضوع</label>
                                        <select class="form-select" id="subject" name="subject" required>
                                            <option value="" selected disabled>لطفا انتخاب کنید</option>
                                            <option value="پیشنهاد">پیشنهاد</option>
                                            <option value="انتقاد">انتقاد</option>
                                            <option value="پشتیبانی فنی">پشتیبانی فنی</option>
                                            <option value="سایر">سایر</option>
                                        </select>
                                    </div>
                                    
                                    <div class="mb-3">
                                        <label for="message" class="form-label">پیام شما</label>
                                        <textarea class="form-control" id="message" name="message" rows="5" required></textarea>
                                    </div>
                                    
                                    <button type="submit" class="btn btn-primary w-100">ارسال پیام</button>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
                
                <div class="card shadow-sm mt-4">
                    <div class="card-body">
                        <h3 class="text-primary mb-3">موقعیت ما روی نقشه</h3>
                        <div class="map-container">
                            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d26880.158730142!2d51.357623725494896!3d32.63229508037587!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3fbdd561cfc6fadf%3A0xf674ed3f45e178ce!2z2YfZhtix2LPYqtin2YYg2YHZhtuMINmIINmH2YbYsSDYtNmH24zYryDYt9in2YTYqNuM!5e0!3m2!1sfa!2s!4v1744969573214!5m2!1sfa!2s" width="100%" height="400" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </main>

    <?php include 'theme-footer.html'; ?>
    <!-- Bootstrap JS + Popper -->
    <script src="bootstrap.bundle.min.js"></script>
</body>
</html>