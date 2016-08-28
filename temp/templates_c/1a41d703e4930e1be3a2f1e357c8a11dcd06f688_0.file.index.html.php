<?php
/* Smarty version 3.1.29, created on 2016-08-15 22:50:58
  from "D:\WWW\photos\templates\index.html" */

if ($_smarty_tpl->smarty->ext->_validateCompiled->decodeProperties($_smarty_tpl, array (
  'has_nocache_code' => false,
  'version' => '3.1.29',
  'unifunc' => 'content_57b1d6d271e7f3_04288743',
  'file_dependency' => 
  array (
    '1a41d703e4930e1be3a2f1e357c8a11dcd06f688' => 
    array (
      0 => 'D:\\WWW\\photos\\templates\\index.html',
      1 => 1470409850,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_57b1d6d271e7f3_04288743 ($_smarty_tpl) {
?>
<!DOCTYPE html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js"> <!--<![endif]-->
<head>
    <meta charset="utf-8">
    <title>那些年的青春年華</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width">
    <link rel="stylesheet" href="PUBLIC/css/bootstrap.css">
    <link rel="stylesheet" href="PUBLIC/css/font-awesome.css">
    <link rel="stylesheet" href="PUBLIC/css/animate.css">
    <link rel="stylesheet" href="PUBLIC/css/templatemo-misc.css">
    <link rel="stylesheet" href="PUBLIC/css/templatemo-style.css">
</head>
<body>
<!--[if lt IE 9]>
<p class="chromeframe">你使用的瀏覽器已過時。<a href="http://browsehappy.com/">更新瀏覽器</a> 或 <a href="http://www.google.cn/intl/zh-CN/chrome/browser/">安裝Google Chrome</a> 以便有更好的體驗。</p>
<![endif]-->
<section id="pageloader">
    <div class="loader-item fa fa-spin colored-border"></div>
</section>
<!-- 首页头部 -->
<header class="site-header container-fluid">
    <div class="top-header">
        <div class="logo col-md-6 col-sm-6">
            <h1><a href="<?php echo $_smarty_tpl->tpl_vars['site_url']->value;?>
"><em>那些年的</em>青春年華</a></h1>
            <span>感謝此生與你相遇！</span>
        </div> <!-- /.logo -->
        <div class="social-top col-md-6 col-sm-6">
            <ul>
                <li><a href="#" class="fa fa-facebook"></a></li>
                <li><a href="#" class="fa fa-twitter"></a></li>
                <li><a href="#" class="fa fa-linkedin"></a></li>
                <li><a href="#" class="fa fa-google-plus"></a></li>
                <li><a href="#" class="fa fa-flickr"></a></li>
                <li><a href="#" class="fa fa-rss"></a></li>
            </ul>
        </div> <!-- /.social-top -->
    </div> <!-- /.top-header -->
    <div class="main-header">
        <div class="row">
            <div class="main-header-left col-md-3 col-sm-6 col-xs-8">
                <a id="search-icon" class="btn-left fa fa-search" href="#search-overlay"></a>
                <div id="search-overlay">
                    <a href="#search-overlay" class="close-search"><i class="fa fa-times-circle"></i></a>
                    <div class="search-form-holder">
                        <h2>在此輸入關鍵字后按回車鍵</h2>
                        <form id="search-form" action="#">
                            <input type="search" name="s" placeholder="" autocomplete="off" />
                        </form>
                    </div>
                </div><!-- #search-overlay -->
                <a href="#" class="btn-left arrow-left fa fa-angle-left"></a>
                <a href="#" class="btn-left arrow-right fa fa-angle-right"></a>
            </div> <!-- /.main-header-left -->
            <div class="menu-wrapper col-md-9 col-sm-6 col-xs-4">
                <a href="#" class="toggle-menu visible-sm visible-xs"><i class="fa fa-bars"></i></a>
                <ul class="sf-menu hidden-xs hidden-sm">
                    <li class="active"><a href="<?php echo $_smarty_tpl->tpl_vars['site_url']->value;?>
">首&nbsp;&nbsp;頁</a></li>
                    <li id="word"><a href="#">人&nbsp;&nbsp;生</a></li>
                    <li><a href="#">相&nbsp;&nbsp;冊</a>
                        <ul>
                            <!-- <li><a href="projects-2.html" class="two-col">貳列展示</a></li> -->
                            <li class="two-col"><a href="#">貳列展示</a></li>
                            <!-- <li><a href="projects-3.html" class="three-col">叁列展示</a></li> -->
                            <li><a href="#" class="three-col">叁列展示</a></li>
                        </ul>
                    </li>
                    <li class="picture-word-wall"><a href="#">圖語墻</a>
                        <!-- <ul>
                            <li><a href="blog.html">博客墻</a></li>
                            <li><a href="blog-single.html">博客詳情</a></li>
                        </ul> -->
                    </li>
                    <!-- <li><a href="#">Pages</a>
                        <ul>
                            <li><a href="our-team.html">Our Team</a></li>
                            <li><a href="archives.html">Archives</a></li>
                            <li><a href="grids.html">Columns</a></li>
                            <li><a href="404.html">404 Page</a></li>
                        </ul>
                    </li> -->
                    <!-- <li><a href="contact.html">聯繫我</a></li> -->
                    <li class="contact"><a href="#">聯繫我</a></li>
                </ul>
            </div> <!-- /.menu-wrapper -->
        </div> <!-- /.row -->
    </div> <!-- /.main-header -->
    <!-- mobile -->
    <div id="responsive-menu">
        <ul>
            <li><a href="<?php echo $_smarty_tpl->tpl_vars['site_url']->value;?>
">首頁</a></li>
            <li><a href="services.html">人生</a></li>
            <li><a href="#">相冊</a>
                <ul>
                    <li><a href="projects-2.html">貳列展示</a></li>
                    <li><a href="projects-3.html">叁列展示</a></li>
                    <!-- <li><a href="project-details.html">Project Single</a></li> -->
                </ul>
            </li>
            <!-- <li><a href="#">Blog</a>
                <ul>
                    <li><a href="blog.html">Blog Masonry</a></li>
                    <li><a href="blog-single.html">Post Single</a></li>
                </ul>
            </li> -->
            <li><a href="#">圖語墻</a>
                <!-- <ul>
                    <li><a href="our-team.html">Our Team</a></li>
                    <li><a href="archives.html">Archives</a></li>
                    <li><a href="grids.html">Columns</a></li>
                    <li><a href="404.html">404 Page</a></li>
                </ul> -->
            </li>
            <li><a href="contact.html">聯繫我</a></li>
        </ul>
    </div>
</header> <!-- /.site-header -->

<!-- 首頁 -->
<div class="swiper-container">
    <div class="swiper-wrapper">
        <div class="swiper-slide" style="background-image: url(PUBLIC/images/slide1.jpg);">
            <div class="overlay-s"></div>
            <div class="slider-caption">
                <div class="inner-content">
                    <h2>Earth New House Project</h2>
                    <p>Artcore is free HTML5 Collect from <b class="blue">cssmoban</b><b class="green">.com</b>. Credit goes to <a rel="nofollow" href="#">Unsplash</a> for photos.</p>
                    <a href="#" class="main-btn white">View Projects</a>
                    <p style="font-size:12px;margin-top:20px">版權源於<a href="http://www.zrg044.icoc.cc" title="Rengui Zhao" target="_blank">RenguiZhao</a></p>
                </div> <!-- /.inner-content -->
            </div> <!-- /.slider-caption -->
        </div> <!-- /.swier-slide -->

        <!-- <div class="swiper-slide" style="background-image: url(PUBLIC/images/slide2.jpg);">
            <div class="overlay-s"></div>
            <div class="slider-caption">
                <div class="inner-content">
                    <h2>Hotel and Residence Concept in Montenegro</h2>
                    <p>We come with new fresh and unique ideas.</p>
                    <a href="#" class="main-btn white">View Projects</a>
                </div>
            </div>
        </div>

        <div class="swiper-slide" style="background-image: url(PUBLIC/images/slide3.jpg);">
            <div class="overlay-s"></div>
            <div class="slider-caption">
                <div class="inner-content">
                    <h2>Natural 3d Architecture Design</h2>
                    <p>Natural concrete is a material which is calm and clean.</p>
                    <a href="#" class="main-btn white">View Projects</a>

                </div>
            </div>
        </div>  -->

    </div> <!-- /.swiper-wrapper -->
</div> <!-- /.swiper-container -->

<!-- 人生 -->
<div class="content-wrapper word-content" style="display: none;">
    <div class="inner-container container">
        <div class="row">
            <div class="section-header col-md-12">
                <h2>Our Services</h2>
                <span>Subtitle Goes Here</span>
            </div> <!-- /.section-header -->
        </div> <!-- /.row -->
        <div class="row">
            <div class="col-md-6 service-item service-left">
                <div class="box-content">
                    <div class="service-icon">
                        <i class="li_lab"></i>
                    </div>
                    <div class="service-content">
                        <h4>Quality Matter With Us</h4>
                        <p>Artcore is free HTML5 Collect from <b class="blue">cssmoban</b><b class="green">.com</b>. Credit goes to <a rel="nofollow" href="#">Unsplash</a> for photos used in this template. You can use this layout for your personal or commercial websites.</p>
                    </div>
                </div> <!-- /.box-content -->
            </div> <!-- /.service-item -->
            <div class="col-md-6 service-item service-right">
                <div class="box-content">
                    <div class="service-icon">
                        <i class="li_bulb"></i>
                    </div>
                    <div class="service-content">
                        <h4>Creative Idea Important</h4>
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Consequuntur, odit, magnam, autem ipsum incidunt modi saepe id ullam consectetur unde minima quis.</p>
                    </div>
                </div> <!-- /.box-content -->
            </div> <!-- /.service-item -->
            <div class="col-md-6 service-item service-left">
                <div class="box-content">
                    <div class="service-icon">
                        <i class="li_cup"></i>
                    </div>
                    <div class="service-content">
                        <h4>Our Open Office</h4>
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Consequuntur, odit, magnam, autem ipsum incidunt modi saepe id ullam consectetur unde minima quis.</p>
                    </div>
                </div> <!-- /.box-content -->
            </div> <!-- /.service-item -->
            <div class="col-md-6 service-item service-right">
                <div class="box-content">
                    <div class="service-icon">
                        <i class="li_clock"></i>
                    </div>
                    <div class="service-content">
                        <h4>On-Time Delivery</h4>
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Consequuntur, odit, magnam, autem ipsum incidunt modi saepe id ullam consectetur unde minima quis.</p>
                    </div>
                </div> <!-- /.box-content -->
            </div> <!-- /.service-item -->
            <div class="col-md-6 service-item service-left">
                <div class="box-content">
                    <div class="service-icon">
                        <i class="li_like"></i>
                    </div>
                    <div class="service-content">
                        <h4>Sincerely Supporting</h4>
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Consequuntur, odit, magnam, autem ipsum incidunt modi saepe id ullam consectetur unde minima quis.</p>
                    </div>
                </div> <!-- /.box-content -->
            </div> <!-- /.service-item -->
            <div class="col-md-6 service-item service-right">
                <div class="box-content">
                    <div class="service-icon">
                        <i class="li_study"></i>
                    </div>
                    <div class="service-content">
                        <h4>Learning New Things</h4>
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Consequuntur, odit, magnam, autem ipsum incidunt modi saepe id ullam consectetur unde minima quis.</p>
                    </div>
                </div> <!-- /.box-content -->
            </div> <!-- /.service-item -->
        </div> <!-- /.row -->
    </div> <!-- /.inner-content -->
</div> <!-- /.content-wrapper -->

<!-- 两列图册 -->
<div class="content-wrapper two-content" style="display: none;">
    <div class="inner-container container">
        <div class="row">
            <div class="section-header col-md-12">
                <h2>Projects 2 Columns</h2>
                <span>Subtitle Goes Here</span>
            </div> <!-- /.section-header -->
        </div> <!-- /.row -->
        <div class="projects-holder-2 row">
            <div class="filter-categories col-md-2 col-sm-3">
                <ul class="project-filter">
                    <li class="filter" data-filter="all"><span>All</span></li>
                    <li class="filter" data-filter="buildings"><span>Buildings</span></li>
                    <li class="filter" data-filter="design"><span>Design</span></li>
                    <li class="filter" data-filter="architecture"><span>Architecture</span></li>
                    <li class="filter" data-filter="nature"><span>Nature</span></li>
                </ul>
            </div>
            <div class="projects-holder col-md-10 col-sm-9">
                <div class="row">
                    <div class="col-md-6 col-sm-6 project-item mix design">
                        <div class="project-thumb">
                            <img src="PUBLIC/images/projects/project_1.jpg" alt="">
                            <div class="overlay-b">
                                <div class="overlay-inner">
                                    <a href="PUBLIC/images/projects/project_1.jpg" class="fancybox fa fa-expand" title="Project Title Here"></a>
                                </div>
                            </div>
                        </div>
                        <div class="box-content project-detail">
                            <h2><a href="project-details.html">Lampyridae Lamps by Monica Correia</a></h2>
                            <p><a href="http://www.cssmoban.com/preview/templatemo_423_artcore">Artcore</a> is free HTML5 bootstrap Collect from <b class="blue">cssmoban</b><b class="green">.com</b>. Credit goes to <a rel="nofollow" href="#">Unsplash</a> for images.</p>
                        </div>
                    </div> <!-- /.project-item -->
                    <div class="col-md-6 col-sm-6 project-item mix nature">
                        <div class="project-thumb">
                            <img src="PUBLIC/images/projects/project_2.jpg" alt="">
                            <div class="overlay-b">
                                <div class="overlay-inner">
                                    <a href="PUBLIC/images/projects/project_2.jpg" class="fancybox fa fa-expand" title="Project Title Here"></a>
                                </div>
                            </div>
                        </div>
                        <div class="box-content project-detail">
                            <h2><a href="project-details.html">Instant Domestic Enclosure</a></h2>
                            <p>Nullam a vehicula tellus. Integer sodales ante eu feugiat. Sed fermentum diam dui, id faucibus quam vehicula at.</p>
                        </div>
                    </div> <!-- /.project-item -->
                    <div class="col-md-6 col-sm-6 project-item mix architecture">
                        <div class="project-thumb">
                            <img src="PUBLIC/images/projects/project_3.jpg" alt="">
                            <div class="overlay-b">
                                <div class="overlay-inner">
                                    <a href="PUBLIC/images/projects/project_3.jpg" class="fancybox fa fa-expand" title="Project Title Here"></a>
                                </div>
                            </div>
                        </div>
                        <div class="box-content project-detail">
                            <h2><a href="project-details.html">Ganado & Associates offices</a></h2>
                            <p>Nullam a vehicula tellus. Integer sodales ante eu feugiat. Sed fermentum diam dui, id faucibus quam vehicula at.</p>
                        </div>
                    </div> <!-- /.project-item -->
                    <div class="col-md-6 col-sm-6 project-item mix buildings">
                        <div class="project-thumb">
                            <img src="PUBLIC/images/projects/project_4.jpg" alt="">
                            <div class="overlay-b">
                                <div class="overlay-inner">
                                    <a href="PUBLIC/images/projects/project_4.jpg" class="fancybox fa fa-expand" title="Project Title Here"></a>
                                </div>
                            </div>
                        </div>
                        <div class="box-content project-detail">
                            <h2><a href="project-details.html">St Barbara Bastion</a></h2>
                            <p>Nullam a vehicula tellus. Integer sodales ante eu feugiat. Sed fermentum diam dui, id faucibus quam vehicula at.</p>
                        </div>
                    </div> <!-- /.project-item -->
                    <div class="col-md-6 col-sm-6 project-item mix design">
                        <div class="project-thumb">
                            <img src="PUBLIC/images/projects/project_5.jpg" alt="">
                            <div class="overlay-b">
                                <div class="overlay-inner">
                                    <a href="PUBLIC/images/projects/project_5.jpg" class="fancybox fa fa-expand" title="Project Title Here"></a>
                                </div>
                            </div>
                        </div>
                        <div class="box-content project-detail">
                            <h2><a href="project-details.html">Drawing Out Collapse</a></h2>
                            <p>Nullam a vehicula tellus. Integer sodales ante eu feugiat. Sed fermentum diam dui, id faucibus quam vehicula at.</p>
                        </div>
                    </div> <!-- /.project-item -->
                    <div class="col-md-6 col-sm-6 project-item mix buildings architecture">
                        <div class="project-thumb">
                            <img src="PUBLIC/images/projects/project_6.jpg" alt="">
                            <div class="overlay-b">
                                <div class="overlay-inner">
                                    <a href="PUBLIC/images/projects/project_6.jpg" class="fancybox fa fa-expand" title="Project Title Here"></a>
                                </div>
                            </div>
                        </div>
                        <div class="box-content project-detail">
                            <h2><a href="project-details.html">St Ursula Street Apartment</a></h2>
                            <p>Nullam a vehicula tellus. Integer sodales ante eu feugiat. Sed fermentum diam dui, id faucibus quam vehicula at.</p>
                        </div>
                    </div> <!-- /.project-item -->
                </div> <!-- /.row -->
                <div class="load-more">
                    <a href="javascript:void(0)" class="load-more">Load More</a>
                </div>
            </div> <!-- /.projects-holder -->
        </div> <!-- /.projects-holder-2 -->
    </div> <!-- /.inner-content -->
</div> <!-- /.content-wrapper -->

<!-- 三列图册 -->
<div class="content-wrapper three-content" style="display: none;">
    <div class="inner-container container">
        <div class="row">
            <div class="section-header col-md-12">
                <h2>Projects 3 Columns</h2>
                <span>Subtitle Goes Here</span>
            </div> <!-- /.section-header -->
        </div> <!-- /.row -->
        <div class="projects-holder-3">
            <div class="filter-categories">
                <ul class="project-filter">
                    <li class="filter" data-filter="all"><span>All</span></li>
                    <li class="filter" data-filter="buildings"><span>Buildings</span></li>
                    <li class="filter" data-filter="design"><span>Design</span></li>
                    <li class="filter" data-filter="architecture"><span>Architecture</span></li>
                    <li class="filter" data-filter="nature"><span>Nature</span></li>
                </ul>
            </div>
            <div class="projects-holder">
                <div class="row">
                    <div class="col-md-4 project-item mix design">
                        <div class="project-thumb">
                            <img src="PUBLIC/images/projects/project_1.jpg" alt="">
                            <div class="overlay-b">
                                <div class="overlay-inner">
                                    <a href="PUBLIC/images/projects/project_1.jpg" class="fancybox fa fa-expand" title="Project Title Here"></a>
                                </div>
                            </div>
                        </div>
                        <div class="box-content project-detail">
                            <h2><a href="project-details.html">Lamps by Monica Correia</a></h2>
                            <p>Nullam a vehicula tellus. Integer sodales ante eu feugiat. Sed fermentum diam dui at.</p>
                        </div>
                    </div> <!-- /.project-item -->
                    <div class="col-md-4 project-item mix nature">
                        <div class="project-thumb">
                            <img src="PUBLIC/images/projects/project_2.jpg" alt="">
                            <div class="overlay-b">
                                <div class="overlay-inner">
                                    <a href="PUBLIC/images/projects/project_2.jpg" class="fancybox fa fa-expand" title="Project Title Here"></a>
                                </div>
                            </div>
                        </div>
                        <div class="box-content project-detail">
                            <h2><a href="project-details.html">Instant Domestic Enclosure</a></h2>
                            <p><a href="http://www.cssmoban.com/preview/templatemo_423_artcore">Artcore</a> is free HTML5 Collect from <b class="blue">cssmoban</b><b class="green">.com</b>. Credit goes to <a rel="nofollow" href="#">Unsplash</a> for images.</p>
                        </div>
                    </div> <!-- /.project-item -->
                    <div class="col-md-4 project-item mix architecture">
                        <div class="project-thumb">
                            <img src="PUBLIC/images/projects/project_3.jpg" alt="">
                            <div class="overlay-b">
                                <div class="overlay-inner">
                                    <a href="PUBLIC/images/projects/project_3.jpg" class="fancybox fa fa-expand" title="Project Title Here"></a>
                                </div>
                            </div>
                        </div>
                        <div class="box-content project-detail">
                            <h2><a href="project-details.html">Ganado & Associates offices</a></h2>
                            <p>Nullam a vehicula tellus. Integer sodales ante eu feugiat. Sed fermentum diam dui at.</p>
                        </div>
                    </div> <!-- /.project-item -->
                    <div class="col-md-4 project-item mix buildings">
                        <div class="project-thumb">
                            <img src="PUBLIC/images/projects/project_4.jpg" alt="">
                            <div class="overlay-b">
                                <div class="overlay-inner">
                                    <a href="PUBLIC/images/projects/project_4.jpg" class="fancybox fa fa-expand" title="Project Title Here"></a>
                                </div>
                            </div>
                        </div>
                        <div class="box-content project-detail">
                            <h2><a href="project-details.html">St Barbara Bastion</a></h2>
                            <p>Nullam a vehicula tellus. Integer sodales ante eu feugiat. Sed fermentum diam dui at.</p>
                        </div>
                    </div> <!-- /.project-item -->
                    <div class="col-md-4 project-item mix design">
                        <div class="project-thumb">
                            <img src="PUBLIC/images/projects/project_5.jpg" alt="">
                            <div class="overlay-b">
                                <div class="overlay-inner">
                                    <a href="PUBLIC/images/projects/project_5.jpg" class="fancybox fa fa-expand" title="Project Title Here"></a>
                                </div>
                            </div>
                        </div>
                        <div class="box-content project-detail">
                            <h2><a href="project-details.html">Drawing Out Collapse</a></h2>
                            <p>Nullam a vehicula tellus. Integer sodales ante eu feugiat. Sed fermentum diam dui at.</p>
                        </div>
                    </div> <!-- /.project-item -->
                    <div class="col-md-4 project-item mix buildings architecture">
                        <div class="project-thumb">
                            <img src="PUBLIC/images/projects/project_6.jpg" alt="">
                            <div class="overlay-b">
                                <div class="overlay-inner">
                                    <a href="PUBLIC/images/projects/project_6.jpg" class="fancybox fa fa-expand" title="Project Title Here"></a>
                                </div>
                            </div>
                        </div>
                        <div class="box-content project-detail">
                            <h2><a href="project-details.html">St Ursula Street Apartment</a></h2>
                            <p>Nullam a vehicula tellus. Integer sodales ante eu feugiat. Sed fermentum diam dui at.</p>
                        </div>
                    </div> <!-- /.project-item -->
                </div> <!-- /.row -->
                <div class="load-more">
                    <a href="javascript:void(0)" class="load-more">Load More</a>
                </div>
            </div> <!-- /.projects-holder -->
        </div> <!-- /.projects-holder-2 -->
    </div> <!-- /.inner-content -->
</div> <!-- /.content-wrapper -->

<!-- 图语墙 -->
<div class="content-wrapper picture-word-content" style="display: none;">
    <div class="inner-container container">
        <div class="row">
            <div class="section-header col-md-12">
                <h2>Our Blog</h2>
                <span>Subtitle Goes Here</span>
            </div> <!-- /.section-header -->
        </div> <!-- /.row -->
        <div class="row">
            <div class="blog-masonry masonry-true">
                <div class="post-masonry col-md-4 col-sm-6">
                    <div class="blog-thumb">
                        <img src="PUBLIC/images/blog/blog-1.jpg" alt="">
                        <div class="overlay-b">
                            <div class="overlay-inner">
                                <a href="blog-single.html" class="fa fa-link"></a>
                            </div>
                        </div>
                    </div>
                    <div class="blog-body">
                        <div class="box-content">
                            <h3 class="post-title"><a href="blog-single.html">Keep Your Stuff Alive</a></h3>
                            <span class="blog-meta">10 November 2084 by Tawana</span>
                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Alias, deleniti, id quibusdam aut optio saepe soluta tempore neque voluptatum.</p>
                        </div>
                    </div>
                </div> <!-- /.post-masonry -->
                <div class="post-masonry col-md-4 col-sm-6">
                    <div class="blog-thumb">
                        <img src="PUBLIC/images/blog/blog-2.jpg" alt="">
                        <div class="overlay-b">
                            <div class="overlay-inner">
                                <a href="blog-single.html" class="fa fa-link"></a>
                            </div>
                        </div>
                    </div>
                    <div class="blog-body">
                        <div class="box-content">
                            <h3 class="post-title"><a href="blog-single.html">Brigette Brown on Umbrellas</a></h3>
                            <span class="blog-meta">8 November 2084 by Christina</span>
                            <p><a href="http://www.cssmoban.com/preview/templatemo_423_artcore">Artcore</a> is free HTML5 Collect from <b class="blue">cssmoban</b><b class="green">.com</b>. There are total 12 HTML pages. Credit goes to <a rel="nofollow" href="#">Unsplash</a> for images.</p>
                        </div>
                    </div>
                </div> <!-- /.post-masonry -->
                <div class="post-masonry col-md-4 col-sm-6">
                    <div class="blog-thumb">
                        <img src="PUBLIC/images/blog/blog-3.jpg" alt="">
                        <div class="overlay-b">
                            <div class="overlay-inner">
                                <a href="blog-single.html" class="fa fa-link"></a>
                            </div>
                        </div>
                    </div>
                    <div class="blog-body">
                        <div class="box-content">
                            <h3 class="post-title"><a href="blog-single.html">An Open Letter to Larry Page</a></h3>
                            <span class="blog-meta">6 November 2084 by Michael</span>
                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Alias, deleniti, id quibusdam aut optio saepe soluta tempore neque voluptatum.</p>
                        </div>
                    </div>
                </div> <!-- /.post-masonry -->
                <div class="post-masonry col-md-4 col-sm-6">
                    <div class="blog-thumb">
                        <img src="PUBLIC/images/blog/blog-4.jpg" alt="">
                        <div class="overlay-b">
                            <div class="overlay-inner">
                                <a href="blog-single.html" class="fa fa-link"></a>
                            </div>
                        </div>
                    </div>
                    <div class="blog-body">
                        <div class="box-content">
                            <h3 class="post-title"><a href="blog-single.html">The Night-Side of Hospitals</a></h3>
                            <span class="blog-meta">4 November 2084 by George</span>
                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Alias, deleniti, id quibusdam aut optio saepe soluta tempore neque voluptatum.</p>
                        </div>
                    </div>
                </div> <!-- /.post-masonry -->
                <div class="post-masonry col-md-4 col-sm-6">
                    <div class="blog-thumb">
                        <img src="PUBLIC/images/blog/blog-5.jpg" alt="">
                        <div class="overlay-b">
                            <div class="overlay-inner">
                                <a href="blog-single.html" class="fa fa-link"></a>
                            </div>
                        </div>
                    </div>
                    <div class="blog-body">
                        <div class="box-content">
                            <h3 class="post-title"><a href="blog-single.html">A Love Letter to the City</a></h3>
                            <span class="blog-meta">2 November 2084 by Michael</span>
                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Alias, deleniti, id quibusdam aut optio saepe soluta tempore neque voluptatum.</p>
                        </div>
                    </div>
                </div> <!-- /.post-masonry -->
                <div class="post-masonry col-md-4 col-sm-6">
                    <div class="blog-thumb">
                        <img src="PUBLIC/images/blog/blog-6.jpg" alt="">
                        <div class="overlay-b">
                            <div class="overlay-inner">
                                <a href="blog-single.html" class="fa fa-link"></a>
                            </div>
                        </div>
                    </div>
                    <div class="blog-body">
                        <div class="box-content">
                            <h3 class="post-title"><a href="blog-single.html">The Essence of a Teapot</a></h3>
                            <span class="blog-meta">31 October 2084 by George</span>
                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Alias, deleniti, id quibusdam aut optio saepe soluta tempore neque voluptatum.</p>
                        </div>
                    </div>
                </div> <!-- /.post-masonry -->
                <div class="post-masonry col-md-4 col-sm-6">
                    <div class="blog-thumb">
                        <img src="PUBLIC/images/blog/blog-7.jpg" alt="">
                        <div class="overlay-b">
                            <div class="overlay-inner">
                                <a href="blog-single.html" class="fa fa-link"></a>
                            </div>
                        </div>
                    </div>
                    <div class="blog-body">
                        <div class="box-content">
                            <h3 class="post-title"><a href="blog-single.html">Design and Violence Debate</a></h3>
                            <span class="blog-meta">4 November 2084 by Tawana</span>
                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Alias, deleniti, id quibusdam aut optio saepe soluta tempore neque voluptatum.</p>
                        </div>
                    </div>
                </div> <!-- /.post-masonry -->
                <div class="post-masonry col-md-4 col-sm-6">
                    <div class="blog-thumb">
                        <img src="PUBLIC/images/blog/blog-8.jpg" alt="">
                        <div class="overlay-b">
                            <div class="overlay-inner">
                                <a href="blog-single.html" class="fa fa-link"></a>
                            </div>
                        </div>
                    </div>
                    <div class="blog-body">
                        <div class="box-content">
                            <h3 class="post-title"><a href="blog-single.html">Porto Design Summer School</a></h3>
                            <span class="blog-meta">4 November 2084 by Christina</span>
                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Alias, deleniti, id quibusdam aut optio saepe soluta tempore neque voluptatum.</p>
                        </div>
                    </div>
                </div> <!-- /.post-masonry -->
                <div class="post-masonry col-md-4 col-sm-6">
                    <div class="blog-thumb">
                        <img src="PUBLIC/images/blog/blog-9.jpg" alt="">
                        <div class="overlay-b">
                            <div class="overlay-inner">
                                <a href="blog-single.html" class="fa fa-link"></a>
                            </div>
                        </div>
                    </div>
                    <div class="blog-body">
                        <div class="box-content">
                            <h3 class="post-title"><a href="blog-single.html">War of Streets and Houses</a></h3>
                            <span class="blog-meta">4 November 2084 by George</span>
                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Alias, deleniti, id quibusdam aut optio saepe soluta tempore neque voluptatum.</p>
                        </div>
                    </div>
                </div> <!-- /.post-masonry -->
            </div> <!-- /.blog-masonry -->
        </div> <!-- /.row -->
        <div class="row">
            <div class="col-md-12">
                <div class="pagination text-center">
                    <ul>
                        <li><a href="javascript:void(0)">1</a></li>
                        <li><a href="javascript:void(0)" class="active">2</a></li>
                        <li><a href="javascript:void(0)">3</a></li>
                        <li><a href="javascript:void(0)">4</a></li>
                        <li><a href="javascript:void(0)">...</a></li>
                        <li><a href="javascript:void(0)">11</a></li>
                    </ul>
                </div> <!-- /.pagination -->
            </div> <!-- /.col-md-12 -->
        </div> <!-- /.row -->
    </div> <!-- /.inner-content -->
</div> <!-- /.content-wrapper -->

<!-- 联系 -->
<div class="content-wrapper contact-content" style="display: none;">
    <div class="inner-container container">
        <div class="row">
            <div class="section-header col-md-12">
                <h2>聯繫我</h2>
                <span>趙仁貴</span>
            </div> <!-- /.section-header -->
        </div> <!-- /.row -->
        <div class="contact-form">
            <div class="box-content col-md-12">
                <div class="row">
                    <div class="col-md-7">
                        <p>這裡是信息反饋頁面。你可以在這裡填寫反饋信息，點擊發送。</p>
                        <h3 class="contact-title">發送至我的郵箱</h3>
                        <div class="contact-form-inner">
                            <form method="post" action="#" name="contactform" id="contactform">
                                <p>
                                    <label for="name">您的姓名:</label>
                                    <input name="name" type="text" id="name">
                                </p>
                                <p>
                                    <label for="email">郵箱:</label>
                                    <input name="email" type="text" id="email">
                                </p>
                                <p>
                                    <label for="phone">聯繫電話:</label>
                                    <input name="phone" type="text" id="phone">
                                </p>
                                <p>
                                    <label for="comments">反饋內容:</label>
                                    <textarea name="comments" id="comments"></textarea>
                                </p>
                                <input type="submit" class="mainBtn" id="submit" value="發送" />
                            </form>
                        </div> <!-- /.contact-form-inner -->
                        <div id="message"></div>
                    </div> <!-- /.col-md-7 -->
                    <div class="col-md-5">
                        <div class="googlemap-wrapper">
                            <div id="map_canvas" class="map-canvas"></div>
                        </div>
                    </div> <!-- /.col-md-5 -->
                </div> <!-- /.row -->
            </div> <!-- /.box-content -->
        </div> <!-- /.contact-form -->
    </div> <!-- /.inner-content -->
</div> <!-- /.content-wrapper -->

<!-- js文件及JavaScript -->
<?php echo '<script'; ?>
 src="PUBLIC/js/vendor/jquery-1.11.0.min.js"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 src="PUBLIC/js/vendor/modernizr-2.6.1-respond-1.1.0.min.js"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 src="PUBLIC/js/index.js"><?php echo '</script'; ?>
>

<?php echo '<script'; ?>
>
    window.jQuery || document.write('<?php echo '<script'; ?>
 src="PUBLIC/js/vendor/jquery-1.11.0.min.js"><\/script>')
<?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 src="PUBLIC/js/plugins.js"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 src="PUBLIC/js/main.js"><?php echo '</script'; ?>
>

<!-- Preloader -->
<?php echo '<script'; ?>
 type="text/javascript">
$(window).load(function() { // makes sure the whole site is loaded
    $('.loader-item').fadeOut(); // will first fade out the loading animation
    $('#pageloader').delay(350).fadeOut('slow'); // will fade out the white DIV that covers the website.
    $('body').delay(350).css({'overflow-y':'visible'});
});
<?php echo '</script'; ?>
>
</body>
</html>
<?php }
}
