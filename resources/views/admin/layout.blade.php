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
    <title>@yield('title')</title>

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
    {{-- <style>
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
    </style> --}}

</head>

<body class="animsition">
    <div class="page-wrapper">
        <!-- HEADER MOBILE-->
        {{-- <header class="header-mobile d-block d-lg-none">
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
        </header> --}}
        <!-- END HEADER MOBILE-->

        <!-- MENU SIDEBAR-->
        <aside class="menu-sidebar d-none d-lg-block">
            <div class="logo">
                <a href="index.php">
                    <img src={{ asset("images/icon/logo.png") }} alt="Cool Admin" />
                </a>
            </div>
            <div class="menu-sidebar__content js-scrollbar1">
                <nav class="navbar-sidebar">
                    <ul class="list-unstyled navbar__list">
                        <li class="active has-sub">
                            <a class="js-arrow" href={{ route('index') }}>
                                <i class="fas fa-tachometer-alt"></i>Dashboard</a>
                        </li>
                        <li class="has-sub">
                            <a class="js-arrow" href="#">
                                <i class="fas fa-copy"></i>Thể Loại</a>
                            <ul class="list-unstyled navbar__sub-list js-sub-list">
                                <li>
                                    <a href={{ route('categories.create') }}>
                                        <i class="fas fa-table"></i>Thêm Thể Loại</a>
                                </li>
                                <li>
                                    <a href={{ route('categories.index') }}>
                                        <i class="fas fa-table"></i>Danh Sách Thể Loại</a>
                                </li>
                            </ul>
                        </li>
                        <li class="has-sub">
                            <a class="js-arrow" href="#">
                                <i class="fas fa-desktop"></i>Loại Tin</a>
                            <ul class="list-unstyled navbar__sub-list js-sub-list">
                                <li>
                                    <a href={{ route('type-news.create') }}>
                                        <i class="fas fa-table"></i>Thêm Loại Tin</a>
                                </li>
                                <li>
                                    <a href={{ route('type-news.index') }}>
                                        <i class="fas fa-table"></i>Danh Sách Loại Tin</a>
                                </li>
                            </ul>
                        </li>
                        <li class="has-sub">
                            <a class="js-arrow" href="#">
                                <i class="fas fa-copy"></i>Bài Viết</a>
                            <ul class="list-unstyled navbar__sub-list js-sub-list">
                                <li>
                                    <a href={{ route('news.create')}}>
                                        <i class="fas fa-table"></i>Thêm Bài Viết</a>
                                </li>
                                <li>
                                    <a href={{route('news.index')}}>
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
        @section('main')
        @show
    </div>


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