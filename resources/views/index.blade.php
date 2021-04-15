<!doctype html>
<html class="no-js" lang="vi">

<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>News 24H</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="apple-touch-icon" sizes="180x180" href="assets/img/apple-touch-icon.png">
    <link rel="icon" type="image/png" sizes="32x32" href="assets/img/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="16x16" href="assets/img/favicon-16x16.png">
    <link rel="manifest" href="assets/img/site.webmanifest">

    <!-- CSS here -->
    <link rel="stylesheet" href="assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="assets/css/owl.carousel.min.css">
    <link rel="stylesheet" href="assets/css/ticker-style.css">
    <link rel="stylesheet" href="assets/css/flaticon.css">
    <link rel="stylesheet" href="assets/css/slicknav.css">
    <link rel="stylesheet" href="assets/css/animate.min.css">
    <link rel="stylesheet" href="assets/css/magnific-popup.css">
    <link rel="stylesheet" href="assets/css/fontawesome-all.min.css">
    <link rel="stylesheet" href="assets/css/themify-icons.css">
    <link rel="stylesheet" href="assets/css/slick.css">
    <link rel="stylesheet" href="assets/css/nice-select.css">
    <link rel="stylesheet" href="assets/css/style.css">
</head>

<body>

    
    <header>
        <!-- Header Start -->
        <div class="header-area">
            <div class="main-header ">
                <div class="header-mid d-none d-md-block">
                    <div class="container">
                        <div class="row d-flex align-items-center">
                            <!-- Logo -->
                            <div class="col-xl-3 col-lg-3 col-md-3">
                                <div class="logo">
                                    <a href="index.php"><img src="assets/img/logo/logo.png" alt=""></a>
                                </div>
                            </div>
                            <div class="col-xl-9 col-lg-9 col-md-9 pl-5">
                                <a class="weatherwidget-io" href="https://forecast7.com/en/16d45107d56/hue/" data-label_1="HUE" data-label_2="Thời Tiết" data-theme="pure">HUE Thời Tiết</a>
                                <script>
                                    ! function(d, s, id) {
                                        var js, fjs = d.getElementsByTagName(s)[0];
                                        if (!d.getElementById(id)) {
                                            js = d.createElement(s);
                                            js.id = id;
                                            js.src = 'https://weatherwidget.io/js/widget.min.js';
                                            fjs.parentNode.insertBefore(js, fjs);
                                        }
                                    }(document, 'script', 'weatherwidget-io-js');
                                </script>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="header-bottom header-sticky gray-bg">
                    <div class="container">
                        <div class="row align-items-center">
                            <div class="col-xl-10 col-lg-10 col-md-12 header-flex">
                                <!-- sticky -->
                                <div class="sticky-logo">
                                    <a href="index.php"><img src="assets/img/logo/logo.png" alt=""></a>
                                </div>
                                <!-- Main-menu -->
                                <div class="main-menu d-none d-md-block">
                                    <nav>
                                        <ul id="navigation">
                                            <li><a href="index.php">Trang Chủ</a></li>
                                            <!-- ============================THE LOAI======================= -->
                                            <?php
                                            // while ($row_theloai = $theloai->fetchRow()) {
                                            //     $idTL = $row_theloai['idTL'];
                                            ?>
                                                <li><a href="categori.php?idTL=<?php //echo $row_theloai['idTL']; ?>"><?php //echo $row_theloai['TenTL']; ?> </a>
                                                    <ul class="submenu">
                                                        <?php
                                                        // $loaitin->result = $loaitin->LoaiTinTrongTheLoai($idTL);
                                                        // while ($row_loaitin = $loaitin->fetchRow()) {
                                                        ?>
                                                            <li><a href="loaitin.php?idLT=<?php// echo $row_loaitin['idLT']; ?>&pageNum=1"><?php //echo $row_loaitin['Ten']; ?></a></li>
                                                        <?php }
                                                        ?>
                                                    </ul>

                                                </li>

                                            <?php }

                                            ?>
                                            <!-- ============================php======================= -->

                                            <li><a href="contact.php">Liên Hệ</a></li>

                                        </ul>
                                    </nav>
                                </div>
                            </div>
                            <div class="col-xl-2 col-lg-2 col-md-4">
                                <div class="header-right-btn f-right d-none d-lg-block">
                                    <i class="fas fa-search special-tag"></i>
                                    <div class="search-box">
                                        <form action="#">
                                            <input type="text" placeholder="Search">

                                        </form>
                                    </div>
                                </div>
                            </div>
                            <!-- Mobile Menu -->
                            <div class="col-12">
                                <div class="mobile_menu d-block d-md-none"></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Header End -->
    </header>

    <!-- Trending Area Start -->
    <main>
        <style>
            /* Make the image fully responsive */
            .carousel-inner img {
                width: 100%;
                height: 500px;
                object-fit: cover;
                object-position: top;
            }
        </style>
        <div class="trending-area fix">
            <div class="container">
                <div class="trending-main">
                    <!-- Trending Tittle -->
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="trending-tittle">
                                <strong>Trending now</strong>
                                <div class="trending-animated">
                                    <ul id="js-news" class="js-hidden">
                                        <?php
                                        // $tinnoibat->result = $tinnoibat->TinNoiBat(5);
                                        // while ($row_trending = $tinnoibat->fetchRow()) {
                                        ?>
                                            <li class="news-item">
                                                <a href="single-post.php?idTin=<?php //echo $row_trending['idTin']; ?>">
                                                    <?php //echo $row_trending['TieuDe']; ?>
                                                </a>
                                            </li>

                                        <?php
                                        }
                                        ?>
                                    </ul>
                                </div>

                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-lg-8">
                            <!-- =========================================TIN MOI NHAT TOP Slide============================================ -->
                            <!-- Trending Top -->
                            <div id="demo" class="carousel slide " data-ride="carousel">
                                <ul class="carousel-indicators">
                                    <li data-target="#demo" data-slide-to="0" class="active"></li>
                                    <li data-target="#demo" data-slide-to="1" class=""></li>
                                    <li data-target="#demo" data-slide-to="2" class=""></li>
                                    <li data-target="#demo" data-slide-to="3" class=""></li>
                                    <li data-target="#demo" data-slide-to="4" class=""></li>
                                    <li data-target="#demo" data-slide-to="5" class=""></li>
                                </ul>
                                <div class="carousel-inner trending-top mb-30">

                                    <?php
                                    // $tinnoibat->result = $tinnoibat->TinNoiBat(0, 1);
                                    // while ($row_tinnoibat = $tinnoibat->fetchRow()) {
                                    ?>
                                        <div class="carousel-item active">
                                            <div class="trend-top-img">
                                                <a href="single-post.php?idTin=<?php// echo $row_tinnoibat['idTin']; ?>"><img src="<?php //echo $row_tinnoibat['urlHinh']; ?>" alt="Hinh Anh"></a>
                                                <div class="trend-top-cap">
                                                    <a href="single-post.php?idTin=<?php //echo $row_tinnoibat['idTin']; ?>"><span class="color1"><?php //echo $row_tinnoibat['Ten']; ?></span></a>
                                                    <h2><a href="single-post.php?idTin=<?php// echo $row_tinnoibat['idTin']; ?>"><?php //echo $row_tinnoibat['TieuDe']; ?></a></h2>
                                                </div>
                                            </div>
                                        </div>

                                    <?php } ?>
                                    <?php
                                    // $tinnoibat->result = $tinnoibat->TinNoiBat(1, 5);
                                    // while ($row_tinnoibat = $tinnoibat->fetchRow()) {
                                    ?>
                                        <div class="carousel-item">
                                            <div class="trend-top-img">
                                                <a href="single-post.php?idTin=<?php //echo $row_tinnoibat['idTin']; ?>"><img src="<?php //echo $row_tinnoibat['urlHinh']; ?>" alt="Hinh Anh"></a>
                                                <div class="trend-top-cap">
                                                    <a href="single-post.php?idTin=<?php //echo $row_tinnoibat['idTin']; ?>"><span class="color1"><?php //echo $row_tinnoibat['Ten']; ?></span></a>
                                                    <h2><a href="single-post.php?idTin=<?php //echo $row_tinnoibat['idTin']; ?>"><?php //echo $row_tinnoibat['TieuDe']; ?></a></h2>
                                                </div>
                                            </div>
                                        </div>

                                    <?php } ?>
                                </div>
                                <a class="carousel-control-prev" href="#demo" data-slide="prev">
                                    <span class="carousel-control-prev-icon"></span>
                                </a>
                                <a class="carousel-control-next" href="#demo" data-slide="next">
                                    <span class="carousel-control-next-icon"></span>
                                </a>
                            </div>

                            <!-- Trending Bottom -->
                            <!-- =========================================TIN MOI NHAT TOP 2============================================ -->
                            <div class="trending-bottom">
                                <div class="row">
                                    <?php
                                    // $tinmoinhat->result = $tinmoinhat->TinMoiNhat(0, 3);
                                    // while ($row_tinmoinhat = $tinmoinhat->fetchRow()) {
                                    ?>
                                        <div class="col-lg-4">
                                            <div class="single-bottom mb-35">
                                                <div class="trend-bottom-img mb-30">
                                                    <a href="single-post.php?idTin=<?php //echo $row_tinmoinhat['idTin']; ?>"><img src="<?php //echo $row_tinmoinhat['urlHinh']; ?>" alt="Hinh Anh"></a>
                                                </div>
                                                <div class="trend-bottom-cap">
                                                    <a href="loaitin.php?idLT=<?php //echo $row_tinmoinhat['idLT']; ?>"><span class="color1"><?php //echo $row_tinmoinhat['Ten']; ?></span></a>
                                                    <h4><a href="single-post.php?idTin=<?php //echo $row_tinmoinhat['idTin']; ?>"><?php //echo $row_tinmoinhat['TieuDe']; ?></a></h4>
                                                </div>
                                            </div>
                                        </div>
                                    <?php
                                    }
                                    ?>


                                </div>
                            </div>
                        </div>

                        <!-- Right content -->
                        <!-- =========================================TIN MOI NHAT TOP 3============================================ -->
                        <div class="col-lg-4">
                            <?php
                            $tinmoinhat->result = $tinmoinhat->TinMoiNhat(3, 4);
                            while ($row_tinmoinhat = $tinmoinhat->fetchRow()) {
                            ?>
                                <div class="trand-right-single d-flex">
                                    <div class="trand-right-img ">
                                        <a href="single-post.php?idTin=<?php echo $row_tinmoinhat['idTin']; ?>"><img src="<?php echo $row_tinmoinhat['urlHinh']; ?>" alt="Hinh Anh"></a>
                                    </div>
                                    <div class="trand-right-cap">
                                        <a href="loaitin.php?idLT=<?php echo $row_tinmoinhat['idLT']; ?>"><span class="color1"><?php echo $row_tinmoinhat['Ten']; ?></span></a>
                                        <h4><a href="single-post.php?idTin=<?php echo $row_tinmoinhat['idTin']; ?>"><?php echo $row_tinmoinhat['TieuDe']; ?></a></h4>
                                    </div>
                                </div>
                            <?php
                            }
                            ?>
                            <!-- ===================================================================================== -->
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Trending Area End -->
        <!--   Weekly-News start -->
        <!-- =========================================TIN MOI NHAT TOP 3============================================ -->
        <?php include "tinnoibat.php"; ?>
        <!-- End Weekly-News -->
        <!-- Whats New Start -->
        <section class="whats-news-area pt-50 pb-20">
            <div class="container">
                <div class="row">
                    <div class="col-lg-8">
                        <!-- ========================================The loai=========================================== -->
                        <?php
                        $theloai->result = $theloai->TheLoai();
                        while ($row_theloai = $theloai->fetchRow()) {
                            $idTL = $row_theloai['idTL'];
                        ?>
                            <div class="col-lg-12">
                                <div class="row d-flex justify-content-between">
                                    <div class="col-lg-3 col-md-3">
                                        <div class="section-tittle mb-30">
                                            <h3><a href="categori.php?idTL=<?php echo $row_theloai['idTL']; ?>"><?php echo $row_theloai['TenTL']; ?></a></h3>
                                        </div>
                                    </div>
                                    <div class="col-lg-9 col-md-9">
                                        <div class="properties__button">
                                            <!--Nav Button  -->
                                            <nav>
                                                <!-- =============================Loai Tin Active====================================== -->

                                                <div class="nav nav-tabs" id="nav-tab" role="tablist">
                                                    <a class="nav-item nav-link active" id="nav-<?php echo $row_theloai['TenTL_KhongDau']; ?>-tab" data-toggle="tab" href="#nav-<?php echo $row_theloai['TenTL_KhongDau']; ?>" role="tab" aria-controls="nav-<?php echo $row_theloai['TenTL_KhongDau']; ?>" aria-selected="true">Tất cả</a>
                                                    <!-- ========================================Loai Tin=========================================== -->
                                                    <?php
                                                    $loaitin->result = $loaitin->LoaiTinTrongTheLoai($idTL);
                                                    while ($row_loaitin = $loaitin->fetchRow()) {
                                                        $idLT = $row_loaitin['idLT'];
                                                    ?>
                                                        <a class="nav-item nav-link " id="nav-<?php echo $row_loaitin['Ten_KhongDau']; ?>-tab" data-toggle="tab" href="#nav-<?php echo $row_loaitin['Ten_KhongDau']; ?>" role="tab" aria-controls="nav-<?php echo $row_loaitin['Ten_KhongDau']; ?>" aria-selected="true"><?php echo $row_loaitin['Ten']; ?></a>
                                                    <?php
                                                    }
                                                    ?>

                                                    <!-- ===================================================================== -->
                                                </div>
                                            </nav>
                                            <!--End Nav Button  -->
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-12">
                                        <!-- Nav Card -->
                                        <div class="tab-content" id="nav-tabContent">
                                            <!--============================= Tin Trong Loai Tin Active ======================-->
                                            <div class="tab-pane fade show active" id="nav-<?php echo $row_theloai['TenTL_KhongDau']; ?>" role="tabpanel" aria-labelledby="nav-<?php echo $row_theloai['TenTL_KhongDau']; ?>-tab">
                                                <div class="whats-news-caption">
                                                    <div class="row">
                                                        <?php
                                                        $tin->result = $tin->TinCungTheLoaiMoiNhat($idTL, 1, 4);
                                                        while ($row_tincungtheloai_new = $tin->fetchRow()) {
                                                        ?>
                                                            <div class="col-lg-6 col-md-6">
                                                                <div class="single-what-news mb-100">
                                                                    <div class="what-img">
                                                                        <a href="single-post.php?idTin=<?php echo $row_tincungtheloai_new['idTin']; ?>"><img src="<?php echo $row_tincungtheloai_new['urlHinh']; ?>" alt="Hinh Anh"></a>

                                                                    </div>
                                                                    <div class="what-cap">
                                                                        <a href="loaitin.php?idLT=<?php echo $row_tincungtheloai_new['idLT']; ?>&pageNum=1"><span class="color1"><?php echo $row_tincungtheloai_new['Ten']; ?></span></a>
                                                                        <h4><a href="single-post.php?idTin=<?php echo $row_tincungtheloai_new['idTin']; ?>"><?php echo $row_tincungtheloai_new['TieuDe']; ?></a></h4>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        <?php
                                                        }
                                                        ?>

                                                    </div>
                                                </div>
                                            </div>
                                            <!-- =======================================Tin Trong Loai Tin ==================================-->
                                            <?php
                                            $loaitin->result = $loaitin->LoaiTinTrongTheLoai($idTL);
                                            while ($row_loaitin = $loaitin->fetchRow()) {
                                                $idLT = $row_loaitin['idLT'];
                                            ?>
                                                <div class="tab-pane fade show " id="nav-<?php echo $row_loaitin['Ten_KhongDau']; ?>" role="tabpanel" aria-labelledby="nav-<?php echo $row_loaitin['Ten_KhongDau']; ?>-tab">
                                                    <div class="whats-news-caption">
                                                        <div class="row">
                                                            <?php
                                                            $tintrongloai->result = $tintrongloai->TinTrongLoai($idLT, 1, 4);
                                                            while ($row_tintrongloai = $tintrongloai->fetchRow()) {
                                                            ?>
                                                                <div class="col-lg-6 col-md-6">
                                                                    <div class="single-what-news mb-100">
                                                                        <div class="what-img">
                                                                            <a href="single-post.php?idTin=<?php echo $row_tintrongloai['idTin']; ?>"><img src="<?php echo $row_tintrongloai['urlHinh']; ?>" alt="Hinh Anh"></a>
                                                                        </div>
                                                                        <div class="what-cap">
                                                                            <a href="loaitin.php?idLT=<?php echo $row_loaitin['idLT']; ?>&pageNum=1"><span class="color1"><?php echo $row_tintrongloai['Ten']; ?> </span></a>

                                                                            <h4><a href="single-post.php?idTin=<?php echo $row_tintrongloai['idTin']; ?>"><?php echo $row_tintrongloai['TieuDe']; ?></a></h4>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            <?php
                                                            }
                                                            ?>
                                                            <!-- =======php======== -->
                                                        </div>
                                                    </div>
                                                </div>

                                            <?php
                                            }
                                            ?>
                                            <!-- =============php============ -->
                                        </div>
                                        <!-- End Nav Card -->
                                    </div>
                                </div>
                            </div>


                        <?php
                        }
                        ?>

                    </div>

                    <div class="col-lg-4 ">
                        <!--================================ SideBar ====================================-->
                        <?php include "sidebar.php"; ?>
                    </div>
                </div>
            </div>
        </section>
        <!-- Whats New End -->
        <!--   Weekly2-News start -->
        <?php include "tintrongtuan.php"; ?>
        <!-- End Weekly-News -->

    </main>

    <footer>
        <!-- Footer Start-->
        <div class="footer-area footer-padding fix">
            <div class="container">
                <div class="row d-flex justify-content-between">
                    <div class="col-xl-5 col-lg-5 col-md-7 col-sm-12">
                        <div class="single-footer-caption">
                            <div class="single-footer-caption">
                                <!-- logo -->
                                <div class="footer-logo">
                                    <a href="index.html"><img src="assets/img/logo/logo2_footer.png" alt=""></a>
                                </div>
                                <div class="footer-tittle">
                                    <div class="footer-pera">
                                        <p>Tin tức 24h, đọc báo TN cập nhật tin nóng online Việt Nam và thế giới mới nhất trong ngày, tin nhanh thời sự, chính trị, xã hội hôm nay, tin tức chính thống VN.</p>
                                    </div>
                                </div>
                                <!-- social -->
                                <div class="footer-social">
                                    <a href="#"><i class="fab fa-twitter"></i></a>
                                    <a href="#"><i class="fab fa-instagram"></i></a>
                                    <a href="#"><i class="fab fa-pinterest-p"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-3 col-lg-3 col-md-4  col-sm-6">
                        <div class="single-footer-caption mt-60">
                            <div class="footer-tittle">
                                <h4>News 24H - Tin Tức Cập Nhật 24H</h4>
                                <p>Chúng ta luôn có thì giờ nếu chúng ta sử dụng chúng hợp lý. </p>
                                <!-- Form -->
                                <div class="footer-form">
                                    <div id="mc_embed_signup">
                                        <form target="_blank" action="https://spondonit.us12.list-manage.com/subscribe/post?u=1462626880ade1ac87bd9c93a&amp;id=92a4423d01" method="get" class="subscribe_form relative mail_part">
                                            <input type="email" name="email" id="newsletter-form-email" placeholder="Email Address" class="placeholder hide-on-focus" onfocus="this.placeholder = ''" onblur="this.placeholder = ' Email Address '">
                                            <div class="form-icon">
                                                <button type="submit" name="submit" id="newsletter-submit" class="email_icon newsletter-submit button-contactForm"><img src="assets/img/logo/form-iocn.png" alt=""></button>
                                            </div>
                                            <div class="mt-10 info"></div>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-3 col-lg-3 col-md-5 col-sm-6">
                        <div class="single-footer-caption mb-50 mt-60">
                            <div class="footer-tittle">
                                <h4>Instagram Feed</h4>
                            </div>
                            <div class="instagram-gellay">
                                <ul class="insta-feed">
                                    <li><a href="#"><img src="assets/img/post/instra1.jpg" alt=""></a></li>
                                    <li><a href="#"><img src="assets/img/post/instra2.jpg" alt=""></a></li>
                                    <li><a href="#"><img src="assets/img/post/instra3.jpg" alt=""></a></li>
                                    <li><a href="#"><img src="assets/img/post/instra4.jpg" alt=""></a></li>
                                    <li><a href="#"><img src="assets/img/post/instra5.jpg" alt=""></a></li>
                                    <li><a href="#"><img src="assets/img/post/instra6.jpg" alt=""></a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- footer-bottom aera -->
        <div class="footer-bottom-area">
            <div class="container">
                <div class="footer-border">
                    <div class="row d-flex align-items-center justify-content-between">
                        <div class="col-lg-6">
                            <div class="footer-copy-right">
                                <p>
                                    <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
                                    Copyright &copy;<script>
                                        document.write(new Date().getFullYear());
                                    </script> All rights reserved | This template is made with <i class="ti-heart" aria-hidden="true"></i> by <a href="index.php" target="_blank">News 24H</a>
                                    <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
                                </p>
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <div class="footer-menu f-right">
                                <ul>
                                    <li><a href="#">Điều Khoản</a></li>
                                    <li><a href="#">Riêng Tư</a></li>
                                    <li><a href="#">Liên Hệ</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Footer End-->
    </footer>


    <!-- JS here -->

    <!-- All JS Custom Plugins Link Here here -->
    <script src="./assets/js/vendor/modernizr-3.5.0.min.js"></script>
    <!-- Jquery, Popper, Bootstrap -->
    <script src="./assets/js/vendor/jquery-1.12.4.min.js"></script>
    <script src="./assets/js/popper.min.js"></script>
    <script src="./assets/js/bootstrap.min.js"></script>
    <!-- Jquery Mobile Menu -->
    <script src="./assets/js/jquery.slicknav.min.js"></script>

    <!-- Jquery Slick , Owl-Carousel Plugins -->
    <script src="./assets/js/owl.carousel.min.js"></script>
    <script src="./assets/js/slick.min.js"></script>
    <!-- Date Picker -->
    <script src="./assets/js/gijgo.min.js"></script>
    <!-- One Page, Animated-HeadLin -->
    <script src="./assets/js/wow.min.js"></script>
    <script src="./assets/js/animated.headline.js"></script>
    <script src="./assets/js/jquery.magnific-popup.js"></script>

    <!-- Breaking New Pluging -->
    <script src="./assets/js/jquery.ticker.js"></script>
    <script src="./assets/js/site.js"></script>

    <!-- Scrollup, nice-select, sticky -->
    <script src="./assets/js/jquery.scrollUp.min.js"></script>
    <script src="./assets/js/jquery.nice-select.min.js"></script>
    <script src="./assets/js/jquery.sticky.js"></script>

    <!-- contact js -->
    <script src="./assets/js/contact.js"></script>
    <script src="./assets/js/jquery.form.js"></script>
    <script src="./assets/js/jquery.validate.min.js"></script>
    <script src="./assets/js/mail-script.js"></script>
    <script src="./assets/js/jquery.ajaxchimp.min.js"></script>

    <!-- Jquery Plugins, main Jquery -->
    <script src="./assets/js/plugins.js"></script>
    <script src="./assets/js/main.js"></script>

</body>

</html>