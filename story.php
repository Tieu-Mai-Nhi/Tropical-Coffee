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

        <!-- header -->
        <?php
        include './components/header.php';
        ?>

        <header class="site-header section-padding-img site-header-image">
            <div class="container">
                <div class="row">

                    <div class="col-lg-6 col-12 header-info">
                        <h1>
                            <span class="d-block text-primary">Tropical</span>
                            <span class="d-block text-dark">Coffee</span>
                        </h1>
                    </div>
                </div>
            </div>

            <img src="./images/story-company/1.jpg" class="header-image img-fluid" alt="">
        </header>

        <section class="team section-padding">
            <div class="container">
                <div class="row">

                    <div class="col-12">
                        <h2 class="mb-5">Đội Ngũ<span> Công Ty</span></h2>
                    </div>

                    <div class="col-lg-4 mb-4 col-12">
                        <div class="team-thumb d-flex align-items-center">
                            <img src="images/people/senior-man-wearing-white-face-mask-covid-19-campaign-with-design-space.jpeg" class="img-fluid custom-circle-image team-image me-4" alt="">

                            <div class="team-info">
                                <h5 class="mb-0">Mr. Hung</h5>
                                <strong class="text-muted">CEO</strong>

                                <!-- Button trigger modal -->
                                <button type="button" class="btn custom-modal-btn" data-bs-toggle="modal" data-bs-target="#don">
                                    <i class="bi-plus-circle-fill"></i>
                                </button>

                            </div>
                        </div>
                    </div>

                    <div class="col-lg-4 mb-4 col-12">
                        <div class="team-thumb d-flex align-items-center">
                            <img src="images/people/portrait-british-woman.jpeg" class="img-fluid custom-circle-image team-image me-4" alt="">

                            <div class="team-info">
                                <h5 class="mb-0">Ms. Hoan</h5>
                                <strong class="text-muted">Founder</strong>

                                <!-- Button trigger modal -->
                                <button type="button" class="btn custom-modal-btn" data-bs-toggle="modal" data-bs-target="#kelly">
                                    <i class="bi-plus-circle-fill"></i>
                                </button>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-4 mb-lg-0 mb-4 col-12">
                        <div class="team-thumb d-flex align-items-center">
                            <img src="images/people/beautiful-woman-face-portrait-brown-background.jpeg" class="img-fluid custom-circle-image team-image me-4" alt="">

                            <div class="team-info">
                                <h5 class="mb-0">Mr. Thang</h5>
                                <strong class="text-muted">Founder</strong>

                                <!-- Button trigger modal -->
                                <button type="button" class="btn custom-modal-btn" data-bs-toggle="modal" data-bs-target="#marie">
                                    <i class="bi-plus-circle-fill"></i>
                                </button>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </section>

        <section class="testimonial section-padding">
            <div class="container">
                <div class="row">

                    <div class="col-lg-9 mx-auto col-11">
                        <h2 class="text-center">Quy Trình Sản Xuất <br> <span>Tropical</span> Coffee</h2>

                        <div class="slick-testimonial">
                            <div class="slick-testimonial-caption">
                            <h6>1.	Tuyển lựa kỹ lưỡng nguồn hạt cà phê nguyên liệu đầu vào</h6>    
                            <p class="lead">Để có được những ly cà phê làm say mê vị giác, trước hết phải có được những hạt cà phê mang đầy đủ phẩm chất, đó phải là những hạt cà phê chín đỏ, đạt tiêu chuẩn về kích thước, thể chất. Chúng tôi sử dụng giống cà phê Robusta nổi tiếng của Việt Nam từ thủ phủ cà phê Đăk Lăk, giống cà phê Arabica từ mảnh đất Lâm Đồng nơi có độ cao tuyệt vời cho giống cà phê này phát triển. Đây là những giống cà phê mang phong vị đặc trưng của đất nước chúng tôi.</p>

                                <div class="slick-testimonial-client d-flex align-items-center mt-4">
                                    <img src="./images/story-company/1.jpg" class="img-fluid custom-circle-image me-3" alt="">

                                    <span>George, <strong class="text-muted">Digital Art Fashion</strong></span>
                                </div>
                            </div>

                            <div class="slick-testimonial-caption">
                            <h6>2.	Rang và xay cà phê bột</h6>    
                            <p class="lead">Từ những hạt cà phê được tuyển chọn kỹ lưỡng, qua giai đoạn sơ chế. Những hạt cà phê xanh sẽ được đưa vào rang. Bằng kinh nghiệm của những thợ rang lành nghề, kết hợp cùng máy rang công nghệ hot air hiện đại, cho ra những mẻ cà phê rang đạt chất lượng cao nhất. Sau quá trình này hạt cà phê đã rang sẽ được đưa vào máy xay, biến chúng thành dạng bột.</p>
                            

                                <div class="slick-testimonial-client d-flex align-items-center mt-4">
                                    <img src="images/people/beautiful-woman-face-portrait-brown-background.jpeg" class="img-fluid custom-circle-image me-3" alt="">

                                    <span>Sandar, <strong class="text-muted">Zoom Fashion Idea</strong></span>
                                </div>
                            </div>

                            <div class="slick-testimonial-caption">
                            <h6>3.	Quá trình trích ly</h6>    
                            <p class="lead">Trích ly là quá trình hòa tan các chất có trong cà phê bằng nước nóng để tạo thành dung dịch chiết có nồng độ và các chất hòa tan khoảng 25 – 35%. Hệ thống và quá trình trích ly cà phê diễn ra như sau:
                            </p>
                            <ul class="lead">
                                <li>Đầu tiên đổ cà phê vào thiết bị trích ly gián đoạn hình tháp được bảo ôn nhiệt độ.</li>
                                <li>Bơm nước nóng khoảng 80 – 90 độ C từ đáy tháp lên để trích ly cà phê.</li>
                                <li>Khi nước nóng đi qua cà phê trong tháp sẽ diễn ra quá trình trích ly các chất hòa tan.</li>
                                <li>Các chất hòa tan này sẽ tạo thành một dung dịch tại đỉnh tháp. Để giúp lượng chất tan thu được tại đỉnh tháp tăng dần, cà phê bột sẽ liên tục được thay thế tại các tháp.</li>
                            </ul>

                                <div class="slick-testimonial-client d-flex align-items-center mt-4">
                                    <img src="images/people/portrait-british-woman.jpeg" class="img-fluid custom-circle-image me-3" alt="">

                                    <span>Marie, <strong class="text-muted">Art Fashion Design</strong></span>
                                </div>
                            </div>

                            <div class="slick-testimonial-caption">
                            <h6>4.	Cô đặc</h6>    
                            <p class="lead">Sau khi trích ly chúng ta chưa thể sấy khô được bởi lúc này nồng độ dịch cà phê là 20 – 22%. Để thuận lợi cho quá trình sấy, phải tiến hành cô đặc dịch trích ly đến nồng độ 30 – 33%.</p>

                                <div class="slick-testimonial-client d-flex align-items-center mt-4">
                                    <img src="./images/story-company/Xuongdong goi.JPG" class="img-fluid custom-circle-image me-3" alt="">

                                    <span>Catherine, <strong class="text-muted">Dress Fashion</strong></span>
                                </div>
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


    <!-- TEAM MEMBER MODAL -->
    <div class="modal fade" id="don" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered modal-lg">
            <div class="modal-content border-0">
                <div class="modal-header flex-column">
                    <h3 class="modal-title" id="exampleModalLabel">Don Haruko</h3>

                    <h6 class="text-muted">Product, VP</h6>

                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>

                <div class="modal-body">
                    <h5 class="mb-4">Over three years in business had the chance to work on variety of projects, with companies</h5>

                    <div class="row mb-4">
                        <div class="col-lg-6 col-12">
                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
                        </div>

                        <div class="col-lg-6 col-12">
                            <p>Incididunt ut labore et dolore magna aliqua. Quis ipsum suspendisse commodo viverra.</p>
                        </div>
                    </div>

                    <ul class="social-icon">
                        <li class="me-3"><strong>Where to find?</strong></li>

                        <li><a href="#" class="social-icon-link bi-youtube"></a></li>

                        <li><a href="#" class="social-icon-link bi-whatsapp"></a></li>

                        <li><a href="#" class="social-icon-link bi-instagram"></a></li>
                    </ul>
                </div>
            </div>

        </div>
    </div>

    <!-- TEAM MEMBER MODAL -->
    <div class="modal fade" id="kelly" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered modal-lg">
            <div class="modal-content border-0">
                <div class="modal-header flex-column">
                    <h3 class="modal-title" id="exampleModalLabel">Kelly Lisa</h3>

                    <h6 class="text-muted">Global, Head of Marketing</h6>

                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>

                <div class="modal-body">
                    <h5 class="mb-4">Over three years in business had the chance to work on variety of projects, with companies</h5>

                    <div class="row mb-4">
                        <div class="col-lg-6 col-12">
                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
                        </div>

                        <div class="col-lg-6 col-12">
                            <p>Incididunt ut labore et dolore magna aliqua. Quis ipsum suspendisse commodo viverra.</p>
                        </div>
                    </div>

                    <ul class="social-icon">
                        <li class="me-3"><strong>Where to find?</strong></li>

                        <li><a href="#" class="social-icon-link bi-facebook"></a></li>

                        <li><a href="#" class="social-icon-link bi-instagram"></a></li>
                    </ul>
                </div>
            </div>

        </div>
    </div>

    <!-- TEAM MEMBER MODAL -->
    <div class="modal fade" id="marie" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered modal-lg">
            <div class="modal-content border-0">
                <div class="modal-header flex-column">
                    <h3 class="modal-title" id="exampleModalLabel">Marie Sam</h3>

                    <h6 class="text-muted">Founder & CEO</h6>

                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>

                <div class="modal-body">
                    <h5 class="mb-4">Over three years in business had the chance to work on variety of projects, with companies</h5>

                    <div class="row mb-4">
                        <div class="col-lg-6 col-12">
                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
                        </div>

                        <div class="col-lg-6 col-12">
                            <p>Incididunt ut labore et dolore magna aliqua. Quis ipsum suspendisse commodo viverra.</p>
                        </div>
                    </div>

                    <ul class="social-icon">
                        <li class="me-3"><strong>Where to find?</strong></li>

                        <li><a href="#" class="social-icon-link bi-twitter"></a></li>

                        <li><a href="#" class="social-icon-link bi-linkedin"></a></li>

                        <li><a href="#" class="social-icon-link bi-envelope"></a></li>
                    </ul>
                </div>
            </div>

        </div>
    </div>

    <!-- JAVASCRIPT FILES -->
    <script src="js/jquery.min.js"></script>
    <script src="js/bootstrap.bundle.min.js"></script>
    <script src="js/Headroom.js"></script>
    <script src="js/jQuery.headroom.js"></script>
    <script src="js/slick.min.js"></script>
    <script src="js/custom.js"></script>

</body>

</html>