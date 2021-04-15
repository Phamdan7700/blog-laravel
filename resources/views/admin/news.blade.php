@extends('admin.layout')
@section('title', 'Home')
@section('main')
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
            <div class="justify-content-center">
                <form id="form1" name="form1" method="post" action="">
                    <table id=dstin class="table table-bordered table-light table-hover text-center">
                        <tr>
                            <td colspan="3">
                                <input class="btn btn-danger" type="button" name="xoahet" id="xoahet" value=" Xoá " />
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
                        <tr class="bg-dark text-white">
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
                                 <a href="baiviet_sua.php?idTin={idTin}">
                                    <button class="btn btn-primary">Chỉnh sửa</button>
                                </a>
                                 <a href="baiviet_xoa.php?idTin={idTin}" onclick="return confirm('Xoá hả');">
                                    <button class="btn btn-danger">Xóa</button>
                                </a> 
                                <a href="../single-post.php?idTin={idTin}">
                                    <button class="btn btn-success">Xem</button>
                                </a><br />
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
@endsection

