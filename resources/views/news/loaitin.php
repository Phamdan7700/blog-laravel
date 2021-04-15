<?php include "header.php"; ?>
<?php
if (isset($_GET['idLT'])) $idLT = $_GET['idLT'];
if (isset($_GET['pageNum'])) $pageNum = $_GET['pageNum'];
$pageSize = 5;
$loaitin->result = $loaitin->ChiTietLoaiTin($idLT);
$row_lienket = $loaitin->fetchRow();

?>
<!--================Blog Area =================-->
<div class="link_page bg-primary ">
    <div class="container">
        <a href="index.php">Trang Chủ</a>
        <a href="categori.php?idTL=<?php echo $row_lienket['idTL']; ?>"> <?php echo ' / ' . $row_lienket['TenTL']; ?></a>
        <a href="loaitin.php?idLT=<?php echo $row_lienket['idLT']; ?>"> <?php echo ' / ' . $row_lienket['Ten']; ?></a>
    </div>
</div>
<section class="blog_area section-padding">
    <div class="container">
        <div class="row">
            <div class="col-lg-8 mb-5 mb-lg-0">
                <div class="blog_left_sidebar">
                    <!-- Tin Theo loai tin -->
                    <?php
                    $tintrongloai->result = $tintrongloai->TinTrongLoai($idLT, $pageNum = 1, $pageSize);
                    while ($row_tintrongloai = $tintrongloai->fetchRow()) {
                        $binhluan->result = $binhluan->DemBinhLuan($row_tintrongloai['idTin']);
                        $row_dem = $binhluan->fetchRow();
                    ?>
                        <article class="blog_item">
                            <div class="blog_item_img">
                                <img class="card-img rounded-0" src="<?php echo $row_tintrongloai['urlHinh']; ?>" alt="img">
                                <a href="#" class="blog_item_date">
                                    <h3><?php echo date("d", strtotime($row_tintrongloai['Ngay'])); ?></h3>
                                    <p><?php echo date("F", strtotime($row_tintrongloai['Ngay'])); ?></p>
                                </a>
                            </div>

                            <div class="blog_details">
                                <a class="d-inline-block" href="single-post.php?idTin=<?php echo $row_tintrongloai['idTin']; ?>">
                                    <h2><?php echo $row_tintrongloai['TieuDe']; ?></h2>
                                </a>
                                <p><?php echo $row_tintrongloai['TomTat']; ?></p>
                                <ul class="blog-info-link">
                                    <li><a href="#"><i class="fa fa-user"></i> <?php echo $row_tintrongloai['TacGia'] ?></a></li>
                                    <li><a href="#"><i class="fa fa-comments"></i> <?php echo $row_dem['dem']; ?></a></li>
                                </ul>
                            </div>
                        </article>

                    <?php
                    }
                    ?>
                    <nav class="blog-pagination justify-content-center d-flex">
                        <ul class="pagination">
                            <li class="page-item">
                                <a href="loaitin.php?idLT=<?php echo $idLT ?>&pageNum=<?php echo $pageNum = ($pageNum > 1) ? --$pageNum : $pageNum; ?>" class="page-link" aria-label="Previous">
                                    <i class="ti-angle-left"></i>
                                </a>
                            </li>
                            <li class="page-item <?php echo ($pageNum == 1) ? "active" : " "; ?>">
                                <a href="loaitin.php?idLT=<?php echo $idLT ?>&pageNum=1" class="page-link">1</a>
                            </li>
                            <li class="page-item <?php echo ($pageNum == 2) ? "active" : " "; ?>">
                                <a href="loaitin.php?idLT=<?php echo $idLT ?>&pageNum=2" class="page-link">2</a>
                            </li>
                            <li class="page-item">
                                <a href="loaitin.php?idLT=<?php echo $idLT ?>&pageNum=<?php echo $pageNum = ($pageNum < 2) ? ++$pageNum : $pageNum; ?>" class="page-link" aria-label="Next">
                                    <i class="ti-angle-right"></i>
                                </a>
                            </li>
                        </ul>
                    </nav>
                </div>
            </div>
            <div class="col-lg-4">
                <div class="blog_right_sidebar">
                    <aside class="single_sidebar_widget search_widget">
                        <form action="timkiem.php" method="GET">
                            <div class="form-group">
                                <div class="input-group mb-3">
                                    <input type="text" name="search" class="form-control" placeholder='Search Keyword' onfocus="this.placeholder = ''" onblur="this.placeholder = 'Search Keyword'">
                                    <div class="input-group-append">
                                        <button class="btns" type="button"><i class="ti-search"></i></button>
                                    </div>
                                </div>
                            </div>
                            <button class="button rounded-0 primary-bg text-white w-100 btn_1 boxed-btn" type="submit">Search</button>
                        </form>
                    </aside>
                    <!-- =========================================Danh Muc========================================= -->
                    <aside class="single_sidebar_widget post_category_widget">
                        <h4 class="widget_title">Danh Mục</h4>
                        <ul class="list cat-list">
                            <?php
                            $tin->result = $tin->ChiTietTheLoai();
                            while ($row_theloai = $tin->fetchRow()) {
                            ?>
                                <li>
                                    <a href="categori.php?idTL=<?php echo $row_theloai['idTL']; ?>" class="d-flex">
                                        <p><?php echo $row_theloai['TenTL']; ?> </p>
                                        <p>(<?php echo $row_theloai['DemTin']; ?>)</p>
                                    </a>
                                </li>
                            <?php } ?>
                        </ul>
                    </aside>
                    <!-- =========================================Tin Lien Quan========================================= -->
                    <aside class="single_sidebar_widget popular_post_widget">
                        <h3 class="widget_title">Xem Tiếp</h3>
                        <?php
                        $tin->result = $tin->TinCuCungLoai($idLT, 10, 'vi');
                        while ($row_tinxemtiep = $tin->fetchRow()) {
                        ?>
                            <div class="media post_item">
                                <img src="<?php echo $row_tinxemtiep['urlHinh'] ?>" alt="img">
                                <div class="media-body">
                                    <a href="single-post.php?idTin = <?php echo $row_tinxemtiep['idTin'] ?>">
                                        <h3><?php echo $row_tinxemtiep['TieuDe'] ?></h3>
                                    </a>
                                    <p><?php echo date("d/m/Y", strtotime($row_tinxemtiep['Ngay'])); ?></p>
                                </div>
                            </div>
                        <?php } ?>
                        <!-- ===============================End Xem Tiep====================== -->
                    </aside>                    
                    <aside class="single_sidebar_widget tag_cloud_widget">
                        <h4 class="widget_title">Tag Clouds</h4>
                        <ul class="list">
                            <li>
                                <a href="#">project</a>
                            </li>
                            <li>
                                <a href="#">love</a>
                            </li>
                            <li>
                                <a href="#">technology</a>
                            </li>
                            <li>
                                <a href="#">travel</a>
                            </li>
                            <li>
                                <a href="#">restaurant</a>
                            </li>
                            <li>
                                <a href="#">life style</a>
                            </li>
                            <li>
                                <a href="#">design</a>
                            </li>
                            <li>
                                <a href="#">illustration</a>
                            </li>
                        </ul>
                    </aside>
                    <aside class="single_sidebar_widget instagram_feeds">
                        <h4 class="widget_title">Instagram Feeds</h4>
                        <ul class="instagram_row flex-wrap">
                            <li>
                                <a href="#">
                                    <img class="img-fluid" src="assets/img/post/post_5.png" alt="">
                                </a>
                            </li>
                            <li>
                                <a href="#">
                                    <img class="img-fluid" src="assets/img/post/post_6.png" alt="">
                                </a>
                            </li>
                            <li>
                                <a href="#">
                                    <img class="img-fluid" src="assets/img/post/post_7.png" alt="">
                                </a>
                            </li>
                            <li>
                                <a href="#">
                                    <img class="img-fluid" src="assets/img/post/post_8.png" alt="">
                                </a>
                            </li>
                            <li>
                                <a href="#">
                                    <img class="img-fluid" src="assets/img/post/post_9.png" alt="">
                                </a>
                            </li>
                            <li>
                                <a href="#">
                                    <img class="img-fluid" src="assets/img/post/post_10.png" alt="">
                                </a>
                            </li>
                        </ul>
                    </aside>
                    <aside class="single_sidebar_widget newsletter_widget">
                        <h4 class="widget_title">Newsletter</h4>

                        <form action="#">
                            <div class="form-group">
                                <input type="email" class="form-control" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Enter email'" placeholder='Enter email' required>
                            </div>
                            <button class="button rounded-0 primary-bg text-white w-100 btn_1 boxed-btn" type="submit">Subscribe</button>
                        </form>
                    </aside>
                </div>
            </div>
        </div>
    </div>
</section>
<!--================Blog Area =================-->

<?php include "footer.php"; ?>


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

<!-- One Page, Animated-HeadLin -->
<script src="./assets/js/wow.min.js"></script>
<script src="./assets/js/animated.headline.js"></script>

<!-- Scrollup, nice-select, sticky -->
<script src="./assets/js/jquery.scrollUp.min.js"></script>
<script src="./assets/js/jquery.nice-select.min.js"></script>
<script src="./assets/js/jquery.sticky.js"></script>
<script src="./assets/js/jquery.magnific-popup.js"></script>

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