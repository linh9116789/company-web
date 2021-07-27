<!DOCTYPE html>
<html lang="en-CA">

<head>
    <title>3tmobile</title>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
    <meta http-equiv="cleartype" content="on" />
    <link rel="icon" href="template/Default/img/favicon.ico" type="image/x-icon" />
    <meta name="Description" content="" />
    <meta name="Keywords" content="" />
    <!--rieng-->
    <meta property='og:title' name="title" content='' />
    <meta property='og:url' content='' />
    <meta property='og:image' content='' />
    <meta property='og:description' itemprop='description' name="description" content='' />
    <!--rieng-->
    <!--tkw-->
    <meta property="og:type" content="article" />
    <meta property="article:section" content="" />
    <meta property="og:site_name" content='' />
    <meta property="article:publisher" content="" />
    <meta property="article:author" content="" />
    <meta property="fb:app_id" content="1639622432921466" />
    <meta vary="User-Agent" />
    <meta name="geo.region" content="VN-SG" />
    <meta name="geo.placename" content="Ho Chi Minh City" />
    <meta name="geo.position" content="10.823099;106.629664" />
    <meta name="ICBM" content="10.823099, 106.629664" />
    <link rel="icon" type="image/png" href="template/Default/img/favicon.png">
    <!--tkw-->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">

    <link rel="stylesheet" type="text/css" href="<?php echo BASE_URL ?>/public/css/owl.carousel.min.css">
    <link rel="stylesheet" type="text/css" href="<?php echo BASE_URL ?>/public/css/owl.theme.default.min.css">
    <link rel="stylesheet" type="text/css" href="<?php echo BASE_URL ?>/public/css/product.css">
    <link rel="stylesheet" type="text/css" href="<?php echo BASE_URL ?>/public/css/style.css">
    <link rel="stylesheet" type="text/css" href="<?php echo BASE_URL ?>/public/css/stylelogin.css">

</head>

<body>
    <header>
        <div class="info_top">
            <div class="bg_in">
                <p class="p_infor">
                    <span><i class="fa fa-envelope-o" aria-hidden="true"></i>Email: sales@3tmobile.gmail</span>
                    <span><i class="fa fa-phone" aria-hidden="true"></i> Hotline: 0923-032-992</span>
                </p>
            </div>
        </div>
        <div class="header_top_menu">
            <div class="header_top_menu_all">
                <div class="header_top">
                    <div class="bg_in">
                        <div class="logo">
                            <a href="<?php echo BASE_URL ?>"><img src="<?php echo BASE_URL ?>/public/image/logohere.jpeg" width="250" height="100" alt="logohere.jpeg" /></a>
                        </div>
                        <nav class="menu_top">
                            <form class="search_form" method="get" action="">
                                <input class="searchTerm" name="search" placeholder="Nhập từ cần tìm..." />
                                <button class="searchButton" type="submit">
                                    <i class="fa fa-search" aria-hidden="true"></i>
                                </button>
                            </form>
                        </nav>
                        <div class="cart_wrapper">
                            <div class="cols_50">
                                <div class="hot_line_top">
                                    <span><b>Trụ sở chính</b></span>
                                    <br/>
                                    <span class="red">Nguyễn văn Luông</span>
                                </div>
                            </div>
                            <div class="cols_50">
                                <div class="hot_line_top">
                                    <span><b>Văn phòng chi nhánh</b></span>
                                    <br/>
                                    <span class="red">Nguyễn văn Luông</span>
                                </div>
                            </div>
                            <div class="clear"></div>
                        </div>
                        <div class="clear"></div>
                    </div>
                </div>
            </div>
            <div class="btn_menu_search">
                <div class="bg_in">
                    <div class="table_row_search">
                        <div class="menu_top_cate">
                            <div class="">
                                <div class="menu" id="menu_cate">
                                    <div class="menu_left">
                                        <i class="fa fa-bars" aria-hidden="true"></i> Danh mục sản phẩm
                                    </div>
                                    <div class="cate_pro">
                                        <div id='cssmenu_flyout' class="display_destop_menu">
                                            <ul>
                                                <?php foreach($categoryFE as $key =>$cate) {?>
                                                <li class='active has-sub'>
                                                    <a href='<?php echo BASE_URL ?>/sanpham/danhmuc/<?php echo $cate['c_id'] ?>'><span><?php echo $cate['c_name'] ?></span></a>
                                                </li>
                                                <?php } ?>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="search_top">
                            <div id='cssmenu'>
                                <ul>
                                    <li class='active'><a href='index.php'>Trang chủ</a></li>
                                    <li class=''><a href='chitiettin.php'>Giới thiệu</a></li>
                                    <li class=''>

                                        <a href='<?php echo BASE_URL ?>/sanpham/allProduct'>Sản phẩm</a>
                                            <ul>
                                                <?php foreach($categoryFE as $key =>$cate) {?>
                                                <li class='active has-sub'>
                                                    <a href='<?php echo BASE_URL ?>/sanpham/danhmuc/<?php echo $cate['c_id'] ?>'><span><?php echo $cate['c_name'] ?></span></a>
                                                </li>
                                                <?php } ?>
                                            </ul>
                                        <!-- <ul>

                                            <li><a href='sanpham.php'>Apple</a>
                                                <ul>
                                                    <li><a href='sanpham.php'>Iphone</a></li>
                                                    <li><a href='sanpham.php'>Macbook</a></li>
                                                </ul>
                                            </li>

                                            <li><a href='sanpham.php'>Samsung</a>
                                                <ul>
                                                    <li><a href='sanpham.php'>Samsung A</a></li>
                                                    <li><a href='sanpham.php'>Samsung B</a></li>
                                                </ul>
                                            </li>

                                        </ul> -->
                                    </li>

                                    <li class=''><a href='<?php echo BASE_URL?>/tintuc'>Tin tức</a></li>
                                    <?php 
                                    if(Session::get('customer')==true)
                                    {?>
                                        <li class=''><a href='<?php echo BASE_URL?>/khachhang/dangxuat'>Đăng xuất</a></li>
                                    <?php 
                                    }else{
                                    ?>
                                        <li class=''><a href='<?php echo BASE_URL?>/khachhang/dangnhap'>Đăng nhập</a></li>
                                    <?php 
                                    }
                                    ?>
                                    <li class=''><a href='<?php echo BASE_URL ?>/giohang'>Giỏ hàng</a></li>
                                    <li class=''><a href='<?php echo BASE_URL ?>/contact'>Liên hệ</a></li>
                                </ul>
                            </div>
                        </div>
                        <div class="clear"></div>
                    </div>
                </div>
                <div class="clear"></div>
            </div>
        </div>
    </header>
    <div class="clear"></div>
   