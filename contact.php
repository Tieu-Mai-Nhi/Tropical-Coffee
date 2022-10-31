<?php
include './headTag.php';
?>

<body>

    <section class="preloader">
        <div class="spinner">
            <span class="sk-inner-circle"></span>
        </div>
    </section>

    <main>

        <?php
        include './components/header.php';
        ?>

        <section class="contact section-padding">
            <div class="container">
                <div class="row">

                    <div class="col-lg-6 col-12">
                        <h2 class="mb-4">Kết nối với <span> Tropical Coffee</span></h2>

                        <form class="contact-form me-lg-5 pe-lg-3" role="form">

                            <div class="form-floating">
                                <input type="text" name="name" id="name" class="form-control" placeholder="Full name" required>

                                <label for="name">Tên của bạn</label>
                            </div>

                            <div class="form-floating my-4">
                                <input type="email" name="email" id="email" pattern="[^ @]*@[^ @]*" class="form-control" placeholder="Email address" required>

                                <label for="email">Email</label>
                            </div>

                            <div class="form-floating my-4">
                                <input type="subject" name="subject" id="subject" class="form-control" placeholder="Subject" required>

                                <label for="subject">Tiêu đề</label>
                            </div>

                            <div class="form-floating mb-4">
                                <textarea id="message" name="message" class="form-control" placeholder="Leave a comment here" required style="height: 160px"></textarea>

                                <label for="message">Nội dung</label>
                            </div>

                            <div class="col-lg-5 col-6">
                                <button type="submit" class="form-control">Gửi</button>
                            </div>
                        </form>
                    </div>

                    <div class="col-lg-6 col-12 mt-5 ms-auto">
                        <div class="row">
                            <div class="col-6 border-end contact-info">
                                <h6 class="mb-3">CÔNG TY CỔ PHẦN XUẤT NHẬP KHẨU <br> CÀ PHÊ TROPICAL</h6>

                                <!-- <a href="vuhung14@gmail.com" class="custom-link">
                                        vuhung14@gmail.com
                                        <i class="bi-arrow-right ms-2"></i>
                                    </a> -->
                            </div>

                            <div class="col-6 contact-info">
                                <h6 class="mb-3">Mr. Hùng</h6>

                                <a href="vuhung14@gmail.com">
                                    vuhung14@gmail.com
                                    <i class="bi-arrow-right ms-2"></i>
                                </a>
                            </div>

                            <div class="col-6 border-top border-end contact-info">
                                <h6 class="mb-3">Điện thoại</h6>

                                <a href="tel:+84966897173" class="custom-link">
                                    <p>+84966897173</p>
                                </a>
                            </div>

                            <div class="col-6 border-top contact-info">
                                <h6 class="mb-3">Kết nối</h6>

                                <ul class="social-icon">

                                    <li><a href="#" class="social-icon-link bi-messenger"></a></li>

                                    <li><a href="#" class="social-icon-link bi-youtube"></a></li>

                                    <li><a href="#" class="social-icon-link bi-instagram"></a></li>

                                    <li><a href="#" class="social-icon-link bi-whatsapp"></a></li>
                                </ul>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </section>
    </main>

    <?php
    include './components/footer.php';
    ?>

    <!-- JAVASCRIPT FILES -->
    <script src="js/jquery.min.js"></script>
    <script src="js/bootstrap.bundle.min.js"></script>
    <script src="js/Headroom.js"></script>
    <script src="js/jQuery.headroom.js"></script>
    <script src="js/slick.min.js"></script>
    <script src="js/custom.js"></script>
</body>

</html>