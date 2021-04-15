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
                        <h3 class="widget_title">Tin Xem Nhiều</h3>
                        <?php
                        $tin->result = $tin->TinXemNhieu(20, 'vi');
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