<div class="weekly-news-area pt-50">
    <div class="container">
        <div class="weekly-wrapper">
            <!-- section Tittle -->
            <div class="row">
                <div class="col-lg-12">
                    <div class="section-tittle mb-30">
                        <h3>Tin Nổi Bật</h3>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-12">
                    <div class="weekly-news-active dot-style d-flex dot-style">

                        <!-- ====================================================TIN NOI BAT======================================== -->
                        <?php
                        $tinnoibat->result = $tinnoibat->TinNoiBat(6,10);
                        while ($row_tinnoibat = $tinnoibat->fetchRow()) {
                        ?>
                            <div class="weekly-single">
                                <div class="weekly-img">
                                    <a href="single-post.php?idTin=<?php echo $row_tinnoibat['idTin']; ?>">
                                    <img src="<?php echo $row_tinnoibat['urlHinh']; ?>" alt="">
                                </a>
                                </div>
                                <div class="weekly-caption">
                                    <span class="color1"><?php echo $row_tinnoibat['Ten']; ?></span>
                                    <h4><a href="single-post.php?idTin=<?php echo $row_tinnoibat['idTin']; ?>"><?php echo $row_tinnoibat['TieuDe']; ?></a></h4>
                                </div>
                            </div>
                        <?php
                        }
                        ?>

                    </div>
                </div>
            </div>
        </div>
    </div>
</div>