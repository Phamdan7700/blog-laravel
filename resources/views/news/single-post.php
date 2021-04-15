<?php include "header.php"; ?>
<?php
   $chitiettin = new tin();
if (isset($_GET['idTin'])) {
   $idTin = $_GET['idTin'];
   $chitiettin->result = $chitiettin->ChiTietTin($idTin);
   $row_chitiettin = $chitiettin->fetchRow();
   $chitiettin->SoLanXemTin($idTin);
}
?>
<?php
if (isset($_GET['name']) && isset( $_GET['comment'])) {
   $HoTen = $_GET['name'];
   $NoiDung = $_GET['comment'];
   $chitiettin->result = $chitiettin->LuuYKienVaoDB($idTin,$HoTen, $NoiDung );
}
?>

<!--================Blog Area =================-->
<div class="link_page bg-primary ">
   <div class="container">
      <a href="index.php">Trang Chủ</a>
      <a href="categori.php?idTL=<?php echo $row_chitiettin['idTL']; ?>"> <?php echo ' / ' . $row_chitiettin['TenTL']; ?></a>
      <a href="loaitin.php?idLT=<?php echo $row_chitiettin['idLT']; ?>"> <?php echo ' / ' . $row_chitiettin['Ten']; ?></a>
   </div>
</div>
<section class="blog_area single-post-area section-padding">
   <div class="container">
      <div class="row">
         <!-- ==============================Chi Tiet Tin============================================ -->
         <?php
         $chitiettin->result = $chitiettin->ChiTietTin($idTin);
         while ($row_chitiettin = $chitiettin->fetchRow()) {
            $binhluan->result = $binhluan->DemBinhLuan($idTin);
            $row_dem = $binhluan->fetchRow();
         ?>
            <div class="col-lg-8 posts-list">
               <div class="single-post">

                  <div class="blog_details">
                     <h2>
                        <?php echo $row_chitiettin['TieuDe']; ?>
                     </h2>

                     <ul class="blog-info-link mt-3 mb-4">
                        <li><a href="#"><i class="fa fa-user"></i> <?php echo $row_chitiettin['TacGia']; ?></a></li>
                        <li><a href="#"><i class="fa fa-comments"></i> <?php echo $row_dem['dem']; ?> Bình Luận</a></li>
                     </ul>
                     <div class="feature-img">
                        <img class="img-fluid" src="<?php echo $row_chitiettin['urlHinh']; ?>" alt="img">
                     </div>
                     <div class="excert">
                        <?php echo $row_chitiettin['Content']; ?>
                     </div>
                  </div>
               </div>

               <div class="navigation-top">
                  <div class="d-sm-flex justify-content-between text-center">
                     <p class="like-info"><span class="align-middle"><i class="fa fa-heart"></i></span> Lily and 4
                        people like this</p>
                     <div class="col-sm-4 text-center my-2 my-sm-0">
                        <p class="comment-count"><span class="align-middle"><i class="fa fa-comment"></i></span> <?php echo $row_dem['dem']; ?> Bình Luận</p>
                     </div>
                     <ul class="social-icons">
                        <li><a href="#"><i class="fab fa-facebook-f"></i></a></li>
                        <li><a href="#"><i class="fab fa-twitter"></i></a></li>
                        <li><a href="#"><i class="fab fa-youtube"></i></a></li>
                        <li><a href="#"><i class="fab fa-instagram"></i></a></li>
                     </ul>
                  </div>
                  <!-- ===================================Chuyen Bai Viet Pre Next============================================ -->
                  <div class="navigation-area">
                     <div class="row">
                        <div class="col-lg-6 col-md-6 col-12 nav-left flex-row d-flex justify-content-start align-items-center">
                           <?php
                           $tin->result = $tin->TinCuCungLoai($idTin, 1);
                           while ($row_tincu = $tin->fetchRow()) {
                           ?>
                              <div class="thumb">
                                 <a href="single-post.php?idTin=<?php echo $row_tincu['idTin']; ?>">
                                    <img class="img-fluid" src="<?php echo $row_tincu['urlHinh']; ?>" alt="img">
                                 </a>
                              </div>
                              <div class="arrow">
                                 <a href="single-post.php?idTin=<?php echo $row_tincu['idTin']; ?>">
                                    <span class="lnr text-white ti-arrow-left"></span>
                                 </a>
                              </div>
                              <div class="detials">
                                 <p>Trước</p>
                                 <a href="single-post.php?idTin=<?php echo $row_tincu['idTin']; ?>">
                                    <h4><?php echo $row_tincu['TieuDe']; ?></h4>
                                 </a>
                              </div>
                           <?php
                           }
                           ?>
                        </div>

                        <div class="col-lg-6 col-md-6 col-12 nav-left flex-row d-flex justify-content-start align-items-center">
                           <?php
                           $tin->result = $tin->TinMoiCungLoai($idTin, 1);
                           while ($row_tintieptheo = $tin->fetchRow()) {
                           ?>
                              <div class="thumb">
                                 <a href="single-post.php?idTin=<?php echo $row_tintieptheo['idTin']; ?>">
                                    <img class="img-fluid" src="<?php echo $row_tintieptheo['urlHinh']; ?>" alt="img">
                                 </a>
                              </div>
                              <div class="arrow">
                                 <a href="single-post.php?idTin=<?php echo $row_tintieptheo['idTin']; ?>">
                                    <span class="lnr text-white ti-arrow-right"></span>
                                 </a>
                              </div>
                              <div class="detials">
                                 <p>Sau</p>
                                 <a href="single-post.php?idTin=<?php echo $row_tintieptheo['idTin']; ?>">
                                    <h4><?php echo $row_tintieptheo['TieuDe']; ?></h4>
                                 </a>
                              </div>
                           <?php
                           }
                           ?>
                        </div>
                     </div>
                  </div>
               </div>
               <div class="blog-author">
                  <div class="media align-items-center">
                     <img src="assets/img/blog/author.png" alt="img">
                     <div class="media-body">
                        <a href="#">
                           <h4><?php echo $row_chitiettin['TacGia']; ?></h4>
                        </a>
                        <p><?php echo $row_chitiettin['TacGia']; ?></p>
                     </div>
                  </div>
               </div>
               <!--=========================================== Binh Luan============================== -->
               <div class="comments-area">
                  <h4><?php echo $row_dem['dem']; ?> Bình Luận</h4>
                  <?php
                  $comments->result = $comments->ChiTietBinhLuan($idTin);
                  while ($row_comment = $comments->fetchRow()) {
                  ?>
                     <div class="comment-list">
                        <div class="single-comment justify-content-between d-flex">
                           <div class="user justify-content-between d-flex">
                              <div class="thumb">
                                 <img src="assets/img/comment/comment_1.png" alt="img">
                              </div>
                              <div class="desc">
                                 <p class="comment">
                                    <?php echo $row_comment['NoiDung']; ?>
                                 </p>
                                 <div class="d-flex justify-content-between">
                                    <div class="d-flex align-items-center">
                                       <h5>
                                          <a href="#"> <?php echo $row_comment['HoTen']; ?></a>
                                       </h5>
                                       <p class="date"> <?php echo $row_comment['Ngay']; ?> </p>
                                    </div>
                                    <div class="reply-btn">
                                       <a href="#" class="btn-reply text-uppercase">Trả Lời</a>
                                    </div>
                                 </div>
                              </div>
                           </div>
                        </div>
                     </div>
                  <?php
                  }
                  ?>

                  <!-- ============================================================================ -->
               </div>
               <div class="comment-form">
                  <h4>Leave a Reply</h4>
                  <form class="form-contact comment_form" action="binhluan.php" id="commentForm" method="GET">
                     <div class="row">
                     <input type="hidden" name="idTin" id="" value="<?php echo $idTin ?>">
                        <div class="col-12">
                           <div class="form-group">
                              <textarea class="form-control w-100" name="comment" id="comment" cols="30" rows="9" placeholder="Write Comment" required></textarea>
                           </div>
                        </div>
                        <div class="col-sm-6">
                           <div class="form-group">
                              <input class="form-control" name="name" id="name" type="text" placeholder="Name" required>
                           </div>
                        </div>
                        <div class="col-sm-6">
                           <div class="form-group">
                              <input class="form-control" name="email" id="email" type="email" placeholder="Email">
                           </div>
                        </div>
                                               
                     </div>
                     <div class="form-group">
                        <button type="submit" class="button button-contactForm btn_1 boxed-btn">Send Message</button>
                     </div>
                  </form>
               </div>
            </div>
         <?php
         }
         ?>
         <!-- end php -->
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
                  $tin->result = $tin->TinCuCungLoai($idTin, 10, 'vi');
                  while ($row_tinxemtiep = $tin->fetchRow()) {
                  ?>
                     <div class="media post_item">
                        <img src="<?php echo $row_tinxemtiep['urlHinh'] ?>" alt="img">
                        <div class="media-body">
                           <a href="single-post.php?idTin=<?php echo $row_tinxemtiep['idTin'] ?>">
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
                           <img class="img-fluid" src="assets/img/post/post_5.png" alt="img">
                        </a>
                     </li>
                     <li>
                        <a href="#">
                           <img class="img-fluid" src="assets/img/post/post_6.png" alt="img">
                        </a>
                     </li>
                     <li>
                        <a href="#">
                           <img class="img-fluid" src="assets/img/post/post_7.png" alt="img">
                        </a>
                     </li>
                     <li>
                        <a href="#">
                           <img class="img-fluid" src="assets/img/post/post_8.png" alt="img">
                        </a>
                     </li>
                     <li>
                        <a href="#">
                           <img class="img-fluid" src="assets/img/post/post_9.png" alt="img">
                        </a>
                     </li>
                     <li>
                        <a href="#">
                           <img class="img-fluid" src="assets/img/post/post_10.png" alt="img">
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
<!--================ Blog Area end =================-->

<?php include "footer.php"; ?>

<!-- JS here -->

<!-- All JS Custom Plugins Link Here here -->
<script src="./assets/js/vendor/modernizr-3.5.0.min.js"></script>
<script src="./assets/js/bootstrap.min.js"></script>
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