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

            <img src="./images/haica.jpg" class="header-image img-fluid" alt="">
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
                            <p>Để có được những ly cà phê làm say mê vị giác, trước hết phải có được những hạt cà phê mang đầy đủ phẩm chất, đó phải là những hạt cà phê chín đỏ, đạt tiêu chuẩn về kích thước, thể chất. Chúng tôi sử dụng giống cà phê Robusta nổi tiếng của Việt Nam từ thủ phủ cà phê Đăk Lăk, giống cà phê Arabica từ mảnh đất Lâm Đồng nơi có độ cao tuyệt vời cho giống cà phê này phát triển. Đây là những giống cà phê mang phong vị đặc trưng của đất nước chúng tôi.</p>

                                <div class="slick-testimonial-client d-flex align-items-center mt-4">
                                    <img src="./images/Haicaphe.JPG" class="img-fluid me-3" alt="">
                                </div>
                            </div>

                            <div class="slick-testimonial-caption">
                            <h6>2.	Rang và xay cà phê bột</h6>    
                            <p>Từ những hạt cà phê được tuyển chọn kỹ lưỡng, qua giai đoạn sơ chế. Những hạt cà phê xanh sẽ được đưa vào rang. Bằng kinh nghiệm của những thợ rang lành nghề, kết hợp cùng máy rang công nghệ hot air hiện đại, cho ra những mẻ cà phê rang đạt chất lượng cao nhất. Sau quá trình này hạt cà phê đã rang sẽ được đưa vào máy xay, biến chúng thành dạng bột.</p>
                            

                               <div class="slick-testimonial-client d-flex align-items-center mt-4">
                                    <img src="./images/rang.jpg" class="img-fluid me-3" alt="">
                                </div>
                            </div>

                            <div class="slick-testimonial-caption">
                            <h6>3.	Quá trình trích ly & cô đặc</h6>    
                            <p>Trích ly là quá trình hòa tan các chất có trong cà phê bằng nước nóng để tạo thành dung dịch chiết có nồng độ và các chất hòa tan khoảng 25 – 35%. Hệ thống và quá trình trích ly cà phê diễn ra như sau:
                            </p>
                            <p>Sau khi trích ly chúng ta chưa thể sấy khô được bởi lúc này nồng độ dịch cà phê là 20 – 22%. Để thuận lợi cho quá trình sấy, phải tiến hành cô đặc dịch trích ly đến nồng độ 30 – 33%.</p>
                            <ul>
                                <li>Đầu tiên đổ cà phê vào thiết bị trích ly gián đoạn hình tháp được bảo ôn nhiệt độ.</li>
                                <li>Bơm nước nóng khoảng 80 – 90 độ C từ đáy tháp lên để trích ly cà phê.</li>
                                <li>Khi nước nóng đi qua cà phê trong tháp sẽ diễn ra quá trình trích ly các chất hòa tan.</li>
                                <li>Các chất hòa tan này sẽ tạo thành một dung dịch tại đỉnh tháp. Để giúp lượng chất tan thu được tại đỉnh tháp tăng dần, cà phê bột sẽ liên tục được thay thế tại các tháp.</li>
                            </ul>

                                <div class="slick-testimonial-client d-flex align-items-center mt-4">
                                    <img src="./images/chiet-xuat-1.jpg" class="img-fluid me-3" alt="">
                                </div>
                            </div>

                            <div class="slick-testimonial-caption">
                            <h6>4.	Sấy khô & Hồi hương</h6>    
                            <p>Sau quá trình cô đặc, cà phê được tiến hành sấy khô thành dạng bột để tiện lợi cho quá trình bảo quản và sử dụng. Phương pháp sấy phun được dùng chủ yếu. Dịch cà phê cô đặc được bơm vào đỉnh cyclo. Tại đây có một đĩa đục nhiều lỗ nhỏ, có tốc độ quay rất lớn, làm cho dịch cà phê vào cyclo ở dạng sương mù. Không khí nóng khô được thổi vào cyclo sấy khô cà phê dạng sương mù thành dạng bột. Cà phê bột hoà tan được thu ở đáy cyclo. Sau sấy khô ta thu được bột cà phê hoà tan có độ ẩm 1 – 2%, có màu nâu đen đậm.</p>
                            <p>
                            Công nghệ hồi hương cà phê được tiến hành qua hai giai đoạn. Thứ nhất là khử hấp phụ, đây là quá trình sử dụng khí trơ để thu hỗn hợp khí. Kết quả thu được hỗn hợp gồm khí N2 và các thành phần hương thơm nguyên thủy trong cà phê rang. Thứ hai là quá trình hấp phụ, bột cà phê sau khi sấy khô rất xốp nên khi tiếp xúc với hỗn hợp khí vừa thu được tạo nên sự hòa quyện hài hòa nhất. Từ đây, ta thu được bột cà phê hòa tan thành phẩm.
                            </p>
                                <div class="slick-testimonial-client d-flex align-items-center mt-4">
                                    <img src="./images/hoihuong.png" class="img-fluid me-3" alt="">
                                </div>
                            </div>

                            <div class="slick-testimonial-caption">
                            <h6>5.	Đóng gói & Kiểm soát chất lượng</h6>    
                            <p>Sử dụng công nghệ hiện đại, tự động cà phê hòa tan dạng bột sẽ được đóng gói theo trọng lượng quy định. Đây là bước cuối cùng trước khi những gói cà phê được đóng hộp và đưa ra thị trường.</p>
                            <p>Là nhà sản xuất chuyên nghiệp, tôn trọng đạo đức nghề nghiệp, tôn trọng khách hàng. Do đó mỗi quy trình sản xuất đều được chúng tôi kiểm soát chặt chẽ, nhằm đem lại những sản phẩm chất lượng tới tay người tiêu dùng. Chúng tôi luôn cam kết cho những sản phẩm chúng tôi tạo ra...</p>

                                <div class="slick-testimonial-client d-flex align-items-center mt-4">
                                    <img src="./images/Xuongdong goi.JPG" class="img-fluid me-3" alt="">
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
                    <h3 class="modal-title" id="exampleModalLabel">Mr. Hung</h3>

                    <h6 class="text-muted">CEO</h6>

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
                    <h3 class="modal-title" id="exampleModalLabel">Ms. Hoan/h3>

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
                    <h3 class="modal-title" id="exampleModalLabel">Mr. Thang</h3>

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