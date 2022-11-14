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
        <!--  -->
        <header class="site-header section-padding d-flex justify-content-center align-items-center">
            <div class="container">
                <div class="row">

                    <div class="col-lg-10 col-12">
                        <h1>
                            <span class="d-block text-primary">Chọn sản phẩm</span>
                            <span class="d-block text-dark">yêu thích của bạn</span>
                        </h1>
                    </div>
                </div>
            </div>
        </header>

        <section class="products section-padding">
            <div class="container">
                <div class="row">

                    <div class="col-12">
                        <h2 class="mb-5">Cà phê hòa tan</h2>
                    </div>

                    <div class="col-lg-4 col-12 mb-3">
                        <div class="product-thumb">
                            <a href="product-detail.php">
                                                               <img src="images/product/caphe1.jpg" class="img-fluid product-image" alt="">
                            </a>

                            <div class="product-top d-flex">
                                <span class="product-alert me-auto">New Arrival</span>

                                <a href="#" class="bi-heart-fill product-icon"></a>
                            </div>

                            <div class="product-info d-flex">
                                <div>
                                    <h5 class="product-title mb-0">
                                        <a href="product-detail.php" class="product-title-link">Tree pot</a>
                                    </h5>

                                    <p class="product-p">Original package design from house</p>
                                </div>

                                <small class="product-price text-muted ms-auto">$25</small>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-4 col-12 mb-3">
                        <div class="product-thumb">
                            <a href="product-detail.php">
                                                                <img src="images/product/caphe1.jpg" class="img-fluid product-image" alt="">
                            </a>

                            <div class="product-top d-flex">
                                <span class="product-alert">Sale 15%</span>

                                <a href="#" class="bi-heart-fill product-icon ms-auto"></a>
                            </div>

                            <div class="product-info d-flex">
                                <div>
                                    <h5 class="product-title mb-0">
                                        <a href="product-detail.php" class="product-title-link">Fashion set</a>
                                    </h5>

                                    <p class="product-p">Costume package</p>
                                </div>

                                <small class="product-price text-muted ms-auto">$35</small>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-4 col-12">
                        <div class="product-thumb">
                            <a href="product-detail.php">
                                <img src="images/product/caphe1.jpg" class="img-fluid product-image" alt="">
                            </a>

                            <div class="product-top d-flex">
                                <a href="#" class="bi-heart-fill product-icon ms-auto"></a>
                            </div>

                            <div class="product-info d-flex">
                                <div>
                                    <h5 class="product-title mb-0">
                                        <a href="product-detail.php" class="product-title-link">Juice Drinks</a>
                                    </h5>

                                    <p class="product-p">Nature made another world</p>
                                </div>

                                <small class="product-price text-muted ms-auto">$45</small>
                            </div>
                        </div>
                    </div>

                    <div class="col-12">
                        <h2 class="mb-5">Cà phê nhân</h2>
                    </div>

                    <div class="col-lg-4 col-12 mb-3">
                        <div class="product-thumb">
                            <a href="product-detail.php">
                                <img src="images/product/caphe1.jpg" class="img-fluid product-image" alt="">
                            </a>

                            <div class="product-top d-flex">
                                <span class="product-alert">Trending</span>

                                <a href="#" class="bi-heart-fill product-icon ms-auto"></a>
                            </div>

                            <div class="product-info d-flex">
                                <div>
                                    <h5 class="product-title mb-0">
                                        <a href="product-detail.php" class="product-title-link">Package</a>
                                    </h5>

                                    <p class="product-p">Original package design from house</p>
                                </div>

                                <small class="product-price text-muted ms-auto">$50</small>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-4 col-12 mb-3">
                        <div class="product-thumb">
                            <a href="product-detail.php">
                                <img src="images/product/caphe2.jpg" class="img-fluid product-image" alt="">
                            </a>

                            <div class="product-top d-flex">
                                <a href="#" class="bi-heart-fill product-icon ms-auto"></a>
                            </div>

                            <div class="product-info d-flex">
                                <div>
                                    <h5 class="product-title mb-0">
                                        <a href="product-detail.php" class="product-title-link">Bottle</a>
                                    </h5>

                                    <p class="product-p">Package design</p>
                                </div>

                                <small class="product-price text-muted ms-auto">$100</small>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-4 col-12 mb-3">
                        <div class="product-thumb">
                            <a href="product-detail.php">
                                <img src="images/product/caphe3.jpg" class="img-fluid product-image" alt="">
                            </a>

                            <div class="product-top d-flex">
                                <a href="#" class="bi-heart-fill product-icon ms-auto"></a>
                            </div>

                            <div class="product-info d-flex">
                                <div>
                                    <h5 class="product-title mb-0">
                                        <a href="product-detail.php" class="product-title-link">Medicine</a>
                                    </h5>

                                    <p class="product-p">Original design from house</p>
                                </div>

                                <small class="product-price text-muted ms-auto">$200</small>
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