<div class="weekly2-news-area  weekly2-pading gray-bg">
        <div class="container">
            <div class="weekly2-wrapper">
                <!-- section Tittle -->
                <div class="row">
                    <div class="col-lg-12">
                        <div class="section-tittle mb-30">
                            <h3>Tin Trong Tuần</h3>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-12">
                        <div class="weekly2-news-active dot-style d-flex dot-style">
                            <?php
                            $tin->result = $tin->TinTrongTuan();
                            while ($row_tintrongtuan = $tin->fetchRow()) {
                            ?>
                                <div class="weekly2-single">
                                    <div class="weekly2-img">
                                        <a href="single-post.php?idTin=<?php echo $row_tintrongtuan['idTin']; ?>">
                                            <img src="<?php echo $row_tintrongtuan['urlHinh'] ?>" alt="Hinh Anh">
                                        </a>
                                    </div>
                                    <div class="weekly2-caption">
                                        <a href="loaitin.php?idLT=<?php echo $row_tintrongtuan['idLT']; ?>">
                                        <span class="color1"><?php echo $row_tintrongtuan['Ten']; ?></span>
                                        </a>
                                        <p><?php echo date('d-m-Y',strtotime($row_tintrongtuan['Ngay'])) ?></p>
                                        <h4><a href="single-post.php?idTin=<?php echo $row_tintrongtuan['idTin']; ?>"><?php echo $row_tintrongtuan['TieuDe'] ?></a></h4>
                                    </div>
                                </div>
                            <?php } ?>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>