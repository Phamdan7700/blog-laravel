<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Required meta tags-->
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="au theme template">
    <meta name="author" content="Hau Nguyen">
    <meta name="keywords" content="au theme template">

    <!-- Title Page-->
    <title>@@yield('title')</title>

    <!-- Fontfaces CSS-->
    <link href={{asset("php/admin/css/font-face.css")}} rel="stylesheet" media="all" >
    <link href={{asset("php/admin/vendor/font-awesome-4.7/css/font-awesome.min.css")}} rel="stylesheet" media="all" >
    <link href={{asset("php/admin/vendor/font-awesome-5/css/fontawesome-all.min.css")}} rel="stylesheet" media="all" >
    <link href={{asset("php/admin/vendor/mdi-font/css/material-design-iconic-font.min.css")}} rel="stylesheet" media="all" >

    <!-- Bootstrap CSS-->
    <link href={{asset("php/admin/vendor/bootstrap-4.1/bootstrap.min.css")}} rel="stylesheet" media="all" >

    <!-- Vendor CSS-->
    <link href={{asset("php/admin/vendor/animsition/animsition.min.css")}} rel="stylesheet" media="all" >
    <link href={{asset("php/admin/vendor/bootstrap-progressbar/bootstrap-progressbar-3.3.4.min.css")}} rel="stylesheet" media="all" >
    <link href={{asset("php/admin/vendor/wow/animate.css")}} rel="stylesheet" media="all" >
    <link href={{asset("php/admin/vendor/css-hamburgers/hamburgers.min.css")}} rel="stylesheet" media="all" >
    <link href={{asset("php/admin/vendor/slick/slick.css")}} rel="stylesheet" media="all" >
    <link href={{asset("php/admin/vendor/select2/select2.min.css")}} rel="stylesheet" media="all" >
    <link href={{asset("php/admin/vendor/perfect-scrollbar/perfect-scrollbar.css")}} rel="stylesheet" media="all" >


    <!-- Main CSS-->
    <link href={{asset("php/admin/css/theme.css")}} rel="stylesheet" media="all" >
    <style>
        .account-dropdown__footer form {
            display: block;
            color: #333;
            padding: 15px 25px;
            font-size: 14px;
        }

        .account-dropdown__footer form:hover {
            background: #4272d7;
            color: #fff;
        }

        .account-dropdown__footer form i {
            line-height: 1;
            margin-right: 20px;
            font-size: 18px;
            vertical-align: middle;
        }

        #btn-confirm button {
            margin: 0 20px;
            padding: 5px 10px;
        }

        .anhien span {
            display: inline-block;
            margin-left: 50px;
            padding: 10px;
            cursor: pointer;
        }
    </style>

</head>

<body class="animsition">
    <div class="page-wrapper">
        <!-- HEADER MOBILE-->
        <header class="header-mobile d-block d-lg-none">
            <div class="header-mobile__bar">
                <div class="container-fluid">
                    <div class="header-mobile-inner">
                        <a class="logo" href="index.html">
                            <img src={{ asset("/php/admin/images/icon/logo.png") }} alt="CoolAdmin" />
                        </a>
                        <button class="hamburger hamburger--slider" type="button">
                            <span class="hamburger-box">
                                <span class="hamburger-inner"></span>
                            </span>
                        </button>
                    </div>
                </div>
            </div>
            <nav class="navbar-mobile">
                <div class="container-fluid">
                    <ul class="navbar-mobile__list list-unstyled">
                        <li class="active has-sub">
                            <a class="js-arrow" href="index.php">
                                <i class="fas fa-tachometer-alt"></i>Dashboard</a>
                        </li>
                        <li class="has-sub">
                            <a class="js-arrow" href="#">
                                <i class="fas fa-copy"></i>Thể Loại</a>
                            <ul class="list-unstyled navbar__sub-list js-sub-list">
                                <li>
                                    <a href="theloai_them.php">
                                        <i class="fas fa-table"></i>Thêm Thể Loại</a>
                                </li>
                                <li>
                                    <a href="theloai_ds.php">
                                        <i class="fas fa-table"></i>Danh Sách Thể Loại</a>
                                </li>
                            </ul>
                        </li>
                        <li class="has-sub">
                            <a class="js-arrow" href="#">
                                <i class="fas fa-desktop"></i>Loại Tin</a>
                            <ul class="list-unstyled navbar__sub-list js-sub-list">
                                <li>
                                    <a href="loaitin_them.php">
                                        <i class="fas fa-table"></i>Thêm Loại Tin</a>
                                </li>
                                <li>
                                    <a href="loaitin_ds.php">
                                        <i class="fas fa-table"></i>Danh Sách Loại Tin</a>
                                </li>
                            </ul>
                        </li>
                        <li class="has-sub">
                            <a class="js-arrow" href="#">
                                <i class="fas fa-copy"></i>Bài Viết</a>
                            <ul class="list-unstyled navbar__sub-list js-sub-list">
                                <li>
                                    <a href="baiviet_them.php">
                                        <i class="fas fa-table"></i>Thêm Bài Viết</a>
                                </li>
                                <li>
                                    <a href="baiviet_ds.php">
                                        <i class="fas fa-table"></i>Danh Sách Bài Viết</a>
                                </li>
                            </ul>
                        </li>
                    </ul>
                </div>
            </nav>
        </header>
        <!-- END HEADER MOBILE-->

        <!-- MENU SIDEBAR-->
        <aside class="menu-sidebar d-none d-lg-block">
            <div class="logo">
                <a href="index.php">
                    <img src={{ asset("php/admin/images/icon/logo.png") }} alt="Cool Admin" />
                </a>
            </div>
            <div class="menu-sidebar__content js-scrollbar1">
                <nav class="navbar-sidebar">
                    <ul class="list-unstyled navbar__list">
                        <li class="active has-sub">
                            <a class="js-arrow" href="index.php">
                                <i class="fas fa-tachometer-alt"></i>Dashboard</a>
                        </li>
                        <li class="has-sub">
                            <a class="js-arrow" href="#">
                                <i class="fas fa-copy"></i>Thể Loại</a>
                            <ul class="list-unstyled navbar__sub-list js-sub-list">
                                <li>
                                    <a href="theloai_them.php">
                                        <i class="fas fa-table"></i>Thêm Thể Loại</a>
                                </li>
                                <li>
                                    <a href="theloai_ds.php">
                                        <i class="fas fa-table"></i>Danh Sách Thể Loại</a>
                                </li>
                            </ul>
                        </li>
                        <li class="has-sub">
                            <a class="js-arrow" href="#">
                                <i class="fas fa-desktop"></i>Loại Tin</a>
                            <ul class="list-unstyled navbar__sub-list js-sub-list">
                                <li>
                                    <a href="loaitin_them.php">
                                        <i class="fas fa-table"></i>Thêm Loại Tin</a>
                                </li>
                                <li>
                                    <a href="loaitin_ds.php">
                                        <i class="fas fa-table"></i>Danh Sách Loại Tin</a>
                                </li>
                            </ul>
                        </li>
                        <li class="has-sub">
                            <a class="js-arrow" href="#">
                                <i class="fas fa-copy"></i>Bài Viết</a>
                            <ul class="list-unstyled navbar__sub-list js-sub-list">
                                <li>
                                    <a href="baiviet_them.php">
                                        <i class="fas fa-table"></i>Thêm Bài Viết</a>
                                </li>
                                <li>
                                    <a href="baiviet_ds.php">
                                        <i class="fas fa-table"></i>Danh Sách Bài Viết</a>
                                </li>
                            </ul>
                        </li>
                    </ul>
                </nav>
            </div>
        </aside>
        <!-- END MENU SIDEBAR-->
        <!-- PAGE CONTAINER-->
        <div class="page-container">
            <!-- HEADER DESKTOP-->
            <header class="header-desktop">
                <div class="section__content section__content--p30">
                    <div class="container-fluid">
                        <div class="header-wrap">
                            <form class="form-header" action="" method="POST">
                                <input class="au-input au-input--xl" type="text" name="search" placeholder="Search for datas &amp; reports..." />
                                <button class="au-btn--submit" type="submit">
                                    <i class="zmdi zmdi-search"></i>
                                </button>
                            </form>
                            <div class="header-button">
                                
                                <div class="account-wrap">
                                    <div class="account-item clearfix js-item-menu">
                                        <div class="image">
                                            <img src="images/icon/avatar-01.jpg" alt="John Doe" />
                                        </div>
                                        <div class="content">
                                            <a class="js-acc-btn" href="#"><?php // echo $_SESSION['HoTen']; ?></a>
                                        </div>
                                        <div class="account-dropdown js-dropdown">
                                            <div class="info clearfix">
                                                <div class="image">
                                                    <a href="#">
                                                        <img src="images/icon/avatar-01.jpg" alt="John Doe" />
                                                    </a>
                                                </div>
                                                <div class="content">
                                                    <h5 class="name">
                                                        <a href="#"><?php // echo $_SESSION['HoTen']; ?></a>
                                                    </h5>
                                                    <span class="email"><?php // echo $_SESSION['Email']; ?></span>
                                                </div>
                                            </div>
                                            <div class="account-dropdown__body">
                                                <div class="account-dropdown__item">
                                                    <a href="#">
                                                        <i class="zmdi zmdi-account"></i>Account</a>
                                                </div>
                                                <div class="account-dropdown__item">
                                                    <a href="#">
                                                        <i class="zmdi zmdi-settings"></i>Setting</a>
                                                </div>

                                            </div>
                                            <div class="account-dropdown__footer">
                                                <form action="" method="post">
                                                    <button class="d-block" type="submit" name="btnLogout"> <i class="zmdi zmdi-power"></i>Logout</button>
                                                </form>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </header>
            <!-- HEADER DESKTOP-->
            <!-- MAIN CONTENT-->
            <div class="main-content">
                <div class="section__content section__content--p30">
                    <div class="d-flex justify-content-center">
                        <form id="form1" name="form1" method="post" action="">
                            <table id=dstin class="table table-bordered table-light table-hover text-center">
                                <tr>
                                    <td colspan="3">
                                        <input class="btn btn-warning" type="button" name="xoahet" id="xoahet" value=" Xoá " />
                                        <input class="btn btn-warning" type="button" name="chinhhet" id="chinhhet" value="Chỉnh Sửa" />
                                    </td>
                                    <td>
                                        <select name="themtin" class="themtin" id="themtin">
                                            <option value="1">1</option>
                                            <option value="2">2</option>
                                            <option value="3">3</option>
                                            <option value="4">4</option>
                                            <option value="5">5</option>
                                        </select>
                                        <a href="#" onClick="return false" class="them" id="them">Thêm</a>
                                    </td>
                                </tr>
                                <tr>
                                    <th><input type="checkbox" name="chonhet" id="chonhet" /></th>
                                    <th> idTin/Ngày </th>
                                    <th> Tiêu đề/Tóm tắt </th>
                                    <th> <a href="baiviet_them.php">Thêm Bài Viết</a> </th>
                                </tr>

                                
                                @foreach ($categories as $category)
                                <tr class="hang">
                                    <td><input type="checkbox" name="chon" id="chon" value="{idTin}" class="chon" /></td>
                                    <td class="ngay text-center">
                                        <span>idTin: {{$category -> id}} </span><br />
                                        <span>{Ngay} </span> <br />
                                        <span>Xem: {SoLanXem} </span>
                                    </td>
                                    <td class="tin align-top">
                                        <a href="../single-post.php?idTin={idTin}">
                                            <p class="tieude">{{$category->name}} <span> ({{$category->name}} </span> / <span> {{$category->name}}) </span> </p>
                                            <p class="tomtat">
                                                <img style="float: left; width: 150px; margin-right: 5px;" src="{urlHinh}" alt="img">{{$category->name}}
                                            </p>
                                        </a>
                                    </td>
                                    <td class="action text-center">
                                        | <a href="baiviet_sua.php?idTin={idTin}">Chỉnh</a>
                                        | <a href="baiviet_xoa.php?idTin={idTin}" onclick="return confirm('Xoá hả');">Xóa</a> |
                                        <a href="../single-post.php?idTin={idTin}">Xem</a><br />
                                        <span title="Ẩn hiện tin" class="anhien" idTin="{idTin}"> <i class="{AnHien}"></i></span>
                                        &nbsp;
                                        <span title="Tin nổi bật" class="noibat" idTin="{idTin}"> <i class="{TinNoiBat}"></i></span>
                                    </td>
                                </tr>
                                @endforeach
                                   
                                
                            </table>
                        </form>
                    </div>
                </div>
            </div>
            <!-- END MAIN CONTENT-->
            <!-- END PAGE CONTAINER-->
        </div>

    </div>
    <style>
        #dstin th {
            background-color: #033;
            color: #CF3;
        }

        .tin p {
            margin-top: 5px;
            margin-bottom: 5px;
            text-align: justify;
            color: #660;
        }

        .tin p:first-child {
            font-weight: bold;
            color: orangered;
        }

        .tin p:first-child span {
            font-style: italic;
            color: green;
            font-size: 14px
        }

        .tin p::first-letter {
            font-size: 200%;
            color: orangered;
        }

        p.tomtat:first-line {
            color: #06C
        }

        p.tomtat:first-letter {
            font-size: 22px;
            color: #C0C;
            font-weight: bold
        }

        .action a {
            color: #033;
            text-decoration: none
        }

        .action a:hover {
            color: #630;
            text-decoration: underline
        }

        .hightlight {
            background: #FFFF00;
        }

        .them {
            font-weight: bold;
            color: #FFFFFF;
            background-color: #FF9900;
            display: block;
            height: 22px;
            width: 50px;
            text-decoration: none;
            line-height: 22px;
            font-size: 14px;
            text-align: center;
            float: left;
        }

        .themtin {
            float: left;
            width: 50px;
        }

        .anhien,
        .noibat {
            cursor: pointer;
        }
    </style>

    <!-- Jquery JS-->
    <script src={{asset("php/admin/vendor/jquery-3.2.1.min.js")}}></script>
    <!-- Bootstrap JS-->
    <script src={{asset("php/admin/vendor/bootstrap-4.1/popper.min.js")}}></script>
    <script src={{asset("php/admin/vendor/bootstrap-4.1/bootstrap.min.js")}}></script>
    <!-- Vendor JS       -->
    <script src={{asset("php/admin/vendor/slick/slick.min.js")}}>
    </script>
    <script src={{asset("php/admin/vendor/wow/wow.min.js")}}></script>
    <script src={{asset("php/admin/vendor/animsition/animsition.min.js")}}></script>
    <script src={{asset("php/admin/vendor/bootstrap-progressbar/bootstrap-progressbar.min.js")}}></script>
    <script src={{asset("php/admin/vendor/counter-up/jquery.waypoints.min.js")}}></script>
    <script src={{asset("php/admin/vendor/counter-up/jquery.counterup.min.js")}}>
    </script>
    <script src={{asset("php/admin/vendor/circle-progress/circle-progress.min.js")}}></script>
    <script src={{asset("php/admin/vendor/perfect-scrollbar/perfect-scrollbar.js")}}></script>
    <script src={{asset("php/admin/vendor/chartjs/Chart.bundle.min.js")}}></script>
    <script src={{asset("php/admin/vendor/select2/select2.min.js")}}> </script>

    <!-- Main JS-->
    <script src={{asset("php/admin/js/main.js")}}></script>
    <script>
        $('document').ready(function() {
            $("#chonhet").click(function() {
                var status = this.checked;
                $("input[name='chon']").each(function() {
                    this.checked = status;
                })

            });
            $(".hang").mouseover(function() {
                $(this).addClass("hightlight");
            });
            $(".hang").mouseout(function() {
                $(this).removeClass("hightlight");
            });
            $("#xoahet").click(function() {
                var listid = "";
                $("input[name='chon']").each(function() {
                    if (this.checked) listid = listid + "," + this.value;
                });
                listid = listid.substr(1); //alert(listid);
                if (listid == "") {
                    alert("Bạn chưa chọn tin nào");
                    return;
                }
                hoi = confirm("Xoá hết hả");
                if (hoi == true) document.location = "baiviet_xoa.php?listid=" + listid;
            });
            $("#chinhhet").click(function() {
                var listid = "";
                $("input[name='chon']").each(function() {
                    if (this.checked) listid = listid + "," + this.value;
                });
                listid = listid.substr(1); //alert(listid);
                if (listid == "") {
                    alert("Bạn chưa chọn tin nào");
                    return;
                }
                document.location = "baiviet_sua.php?listid=" + listid;
            });
        });

        //
        $("span.anhien").click(function() {
            idTin = $(this).attr("idTin");
            obj = this;
            $.ajax({
                url: 'baiviet_anhien.php',
                data: 'idTin=' + idTin,
                cache: false,
                success: function(anhien) {
                    if (anhien == 1) {
                        $(obj).html("<i class='fas fa-eye text-success'></i>");
                    } else {
                        $(obj).html("<i class='fas fa-eye-slash'></i>");
                    }
                }
            });
        });
        // Tin Noi Bat
        $("span.noibat").click(function() {
            idTin = $(this).attr("idTin");
            obj = this;
            $.ajax({
                url: 'baiviet_noibat.php',
                data: 'idTin=' + idTin,
                cache: false,
                success: function(anhien) {
                    if (anhien == 1) {
                        $(obj).html("<i class='fas fa-star text-danger'></i>");
                    } else {
                        $(obj).html("<i class='fas fa-star'></i>");
                    }
                }
            });
        });
    </script>


</body>

</html>
<!-- end document-->