<?php

/* @var $this \yii\web\View */
/* @var $content string */

use yii\helpers\Html;
use yii\bootstrap\Nav;
use yii\bootstrap\NavBar;
use yii\widgets\Breadcrumbs;
use frontend\assets\AppAsset;
use common\widgets\Alert;
use frontend\components\ComponentBase;
use frontend\modules\danhmuc\models\Danhmuc;
use backend\modules\users\models\User;
use backend\modules\users\models\Userinfo;
use frontend\modules\banner\models\Banner;
use backend\modules\systems\models\Info;
use backend\modules\product\models\Product_type;
use backend\modules\product\models\Dmsanpham;
use backend\modules\service\models\Service;
use backend\modules\trade\models\Trade;
use backend\modules\invest\models\Invest;
AppAsset::register($this);
$components = new ComponentBase();
$base_url = $components->Base_url();
$base_url_frontend = $components->Base_url_images();
$danhmuc = new Danhmuc();
$cate_list = $danhmuc->get_cate_all();
$company_info = Info::find()->all();
$parent_product = Product_type::find()->where(['level'=>1])->all();
$sanpham = Dmsanpham::find()->all();
$service = Service::find()->all();
$trade = Trade::find()->all();
$invest = Invest::find()->all();
$banner = Banner::find()->orderBy(['create_time'=> SORT_DESC])->all();
$so_banner = Banner::find()->COUNT();
?>


<!DOCTYPE html>
<!-- saved from url=(0034)# -->
<html lang="vi" prefix="og: http://ogp.me/ns#" class="js no-svg">
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="description" content="Thực phẩm sạch">
        <meta name="keywords" content="Thực phẩm sạch, HT, Mật ong">
        <link rel="profile" href="http://gmpg.org/xfn/11">
        <script id="facebook-jssdk" src="<?php echo $base_url ?>css/jscss/sdk.js.download"></script><script>(function(html){html.className = html.className.replace(/\bno-js\b/,'js')})(document.documentElement);</script>
        <link rel="icon" type="image/png" href="<?php echo $base_url ?>public/images/logo/<?php echo $company_info[0]['logo'] ?>    ">
        <title>Thực phẩm sạch HT</title>
        <script src="<?php echo $base_url ?>css/jscss/wp-emoji-release.min.js.download" type="text/javascript" defer=""></script>
        <link rel="stylesheet" id="siteorigin-panels-front-css" href="<?php echo $base_url ?>css/jscss/front-flex.css" type="text/css" media="all">
        <link rel="stylesheet" id="vietmoz-style-css" href="<?php echo $base_url ?>css/jscss/main.css" type="text/css" media="all">
        <link rel="stylesheet" id="vmz-style-css" href="<?php echo $base_url ?>css/jscss/vmz.css" type="text/css" media="all">
        <link rel="stylesheet" id="vietmoz-icon-css" href="<?php echo $base_url ?>css/jscss/ionicons.min.css" type="text/css" media="all">
        <!--[if lt IE 9]>
        <link rel='stylesheet' id='vietmoz-ie8-css'  href='#wp-content/themes/vietmoz/assets/css/ie8.css?ver=1.0' type='text/css' media='all' />
        <![endif]-->
        <script type="text/javascript" src="<?php echo $base_url ?>css/jscss/jquery.js.download"></script>
        <script type="text/javascript" src="<?php echo $base_url ?>css/jscss/jquery-migrate.min.js.download"></script>
        <script type="text/javascript" src="<?php echo $base_url ?>css/jscss/headroom.min.js.download"></script>
        <script type="text/javascript" src="<?php echo $base_url ?>css/jscss/isotope.min.js.download"></script>
        <!--[if lt IE 9]>
        <script type='text/javascript' src='#wp-content/themes/vietmoz/assets/js/lib/html5.js?ver=3.7.3'></script>
        <![endif]-->
        <link rel="https://api.w.org/" href="#wp-json/">
        <link rel="EditURI" type="application/rsd+xml" title="RSD" href="#xmlrpc.php?rsd">
        <link rel="wlwmanifest" type="application/wlwmanifest+xml" href="#wp-includes/wlwmanifest.xml">
        <meta name="generator" content="WordPress 4.8">
        <link rel="shortlink" href="#">
        <link rel="icon" href="#wp-content/themes/vietmoz/assets/images/favicon.png">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    </head>
    <body class="home page-template page-template-templates page-template-page-full-width page-template-templatespage-full-width-php page page-id-535 siteorigin-panels  siteorigin-panels-home website-style-custom widget-style-2 sidebar-right footer-layout-10" cz-shortcut-listen="true">
        <script>
            window.fbAsyncInit = function() {
                FB.init({
                  appId      : '430878597336583',
                  xfbml      : true,
                  version    : 'v2.12'
                });
            FB.AppEvents.logPageView();
            };

            (function(d, s, id){
                var js, fjs = d.getElementsByTagName(s)[0];
                if (d.getElementById(id)) {return;}
                js = d.createElement(s); js.id = id;
                js.src = "https://connect.facebook.net/en_US/sdk.js";
                fjs.parentNode.insertBefore(js, fjs);
            }(document, 'script', 'facebook-jssdk'));
        </script>
        <div id="page" class="site">
            <header id="masthead" class="site-header header-v1d bg-color-main" role="banner">
                <div style="width: 100%; background-color: #fff; height: 110px;">
                    <div class="container heading-top">
                        <div class="insider">
                            <div class="col-md-3" style="height: 112px; background-color: white; margin-top: -8px;">
                                <div class="col-md-12 top-logo">
                                    <a href="<?php echo $base_url ?>" rel="home">
                                        <img src="<?php echo $base_url ?>public/images/logo/<?php echo $company_info[0]['logo'] ?>" width="100px">
                                    </a>
                                </div>
                            </div>
                            <div class="right-content col-md-9" style=" margin-top: -10px; color: black">
                                <h2 style="font-size: 20px"><b><?php echo $company_info[0]['fullname'] ?></b></h2>
                                <p><?php echo $company_info[0]['address'] ?></p>
                                <p>ĐT : <?php echo $company_info[0]['phone'] ?> || Hotline : <?php echo $company_info[0]['hotline'] ?></p>
                            </div>
                        </div>
                        <!-- /.insider -->
                    </div>
                </div>
                <div style="width: 100%; height: 5px; background-color: white"></div>
                <!-- /.container -->
                <nav id="primary-menu" class="main-menu" role="navigation" aria-label="Menu chính">
                    <div class="container">
                        <ul id="menu-menu-chinh" class="vietmoz-menu">
                            <li></li>
                            <?php if ($sanpham) {
                                foreach ($sanpham as $key => $value) { ?>
                                    <li id="menu-item-634" class="menu-item menu-item-type-taxonomy menu-item-object-category menu-item-634"><a href="<?php echo $base_url ?>product?prm=<?php echo $value['id'] ?>"><?= $value['title'] ?></a></li>
                            <?php
                                }
                            } ?>
                            
                            <li id="menu-item-634" class="menu-item menu-item-type-taxonomy menu-item-object-category menu-item-634"><a href="<?php echo $base_url ?>info">Giới thiệu</a></li>
                        </ul>
                    </div>
                    <!-- /.container -->
                </nav>
                <!-- /#primary-menu.main-menu -->
            </header>
            <!-- .site-header -->
            <div id="mhead" class="site-header default-mobile-header" role="banner">
                <div class="container">
                    <div class="insider">
                        <div class="menu-toggler simple glyphicon glyphicon-menu-hamburger">
                            Menu                
                        </div>
                        <!-- /.menu-toggler -->
                        <div class="site-title">
                            <a href="<?php echo $base_url ?>" rel="home">
                                <img src="<?php echo $base_url ?>public/images/logo/<?php echo $company_info[0]['logo'] ?>" width="80">
                            </a>
                        </div>
                        <div class="header-buttons">
                            <!-- /.search-toogler -->
                        </div>
                    </div>
                    <!-- /.insider -->
                </div>
                <!-- /.container -->
                <div id="nav-holder">
                    <nav id="m-menu" class="mobile-menu" role="navigation" aria-label="Menu mobile" style="display: none;">
                        <div class="container">
                            <ul id="menu-menu-chinh-1" class="vietmoz-m-menu">
                                <?php if ($sanpham) {
                                foreach ($sanpham as $key => $value) { ?>
                                    <li id="menu-item-634" class="menu-item menu-item-type-taxonomy menu-item-object-category menu-item-634"><a href="<?php echo $base_url ?>product?prm=<?php echo $value['id'] ?>"><?= $value['title'] ?></a></li>
                                <?php
                                    }
                                } ?>
                                <li id="menu-item-634" class="menu-item menu-item-type-taxonomy menu-item-object-category menu-item-632"><a href="<?php echo $base_url ?>info">Giới thiệu</a></li>

                            </ul>
                        </div>
                        <!-- /.container -->
                    </nav>
                    <!-- /#m-menu.mobile-menu -->
                </div>
                <!-- /#nav-holder -->
            </div>
         
            <!-- #mhead -->
            <?= $content ?>
            <!-- /#content -->
            <footer id="colophon" class="site-footer" role="contentinfo">
                <div class="container">
                    <div class="row col-md-12" style="padding-bottom: 20px;">
                        <div class="footer1" style="width: 33%; margin-top: 35px; height: 300px;">
                            <P><b><?php echo $company_info[0]['fullname'] ?></b></P>
                            <p>Trụ sở : <?php echo $company_info[0]['address'] ?></p>
                            <p>ĐT : <?php echo $company_info[0]['phone'] ?> || <?php echo $company_info[0]['hotline'] ?></p>
                            <p>Email : <?php echo $company_info[0]['email'] ?> </p>
                        </div>
                        <div class="footer2" style="width: 33%; height: 300px;">
                            <h5><b style="color: white">BẢN ĐỒ</b></h5>
                            <div id="map" style="width:100%;">
                                <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3725.632938467271!2d105.83112901430705!3d20.967250895252565!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3135ac543fb36301%3A0xae62b295cf02c0e6!2zQ2h1bmcgY8awIFZQNiBCw6FuIMSQ4bqjbyBMaW5oIMSQw6Bt!5e0!3m2!1svi!2s!4v1521431222586" height="250px" frameborder="0" style="border:0" allowfullscreen></iframe>
                            </div>
                        </div>
                        <div class="footer3" style="width: 33%; height: 300px;">
                            <div id="fb-root"></div>
                            <h5><b style="color: white">FACEBOOK</b></h5>
                            <script>
                                (function(d, s, id) {
                                    var js, fjs = d.getElementsByTagName(s)[0];
                                    if (d.getElementById(id)) return;
                                    js = d.createElement(s); js.id = id;
                                    js.src = 'https://connect.facebook.net/vi_VN/sdk.js#xfbml=1&version=v2.12';
                                    fjs.parentNode.insertBefore(js, fjs);
                                }(document, 'script', 'facebook-jssdk'));
                            </script>
                            <div class="fb-page" data-href="https://www.facebook.com/THỰC-PHẨM-SẠCH-HT-1537457846291424/" data-tabs="timeline" data-width="300" data-height="250" data-small-header="false" data-adapt-container-width="true" data-hide-cover="false" data-show-facepile="true">
                                <iframe src="https://www.facebook.com/plugins/page.php?href=https%3A%2F%2Fwww.facebook.com%2FTH%25E1%25BB%25B0C-PH%25E1%25BA%25A8M-S%25E1%25BA%25A0CH-HT-1537457846291424%2F&tabs=timeline&width=300&height=300&small_header=false&adapt_container_width=true&hide_cover=false&show_facepile=true&appId=1769377650030290" width="300" height="300" style="border:none;overflow:hidden" scrolling="no" frameborder="0" allowTransparency="true" allow="encrypted-media"></iframe>
                            </div>
                        </div>
                    </div>
                    <!-- /.row -->
                </div>
                <!-- /.container -->
            </footer>
        </div>
        <!-- #page -->
        <script type="text/javascript" src="<?php echo $base_url ?>css/jscss/imagesloaded.min.js.download"></script>
        <script type="text/javascript">
            /* <![CDATA[ */
            var VIETMOZ = {"headroom":"","m_headroom":"","ajaxurl":"http:\/\/gioithieu.web.vietmoz.info\/wp-admin\/admin-ajax.php"};
            /* ]]> */
        </script>
        <script type="text/javascript" src="<?php echo $base_url ?>css/jscss/main.js.download"></script>
        <script type="text/javascript" src="<?php echo $base_url ?>css/jscss/vmz.js.download"></script>
        <script type="text/javascript" src="<?php echo $base_url ?>css/jscss/wp-embed.min.js.download"></script>
        <script type="text/javascript">document.body.className = document.body.className.replace("siteorigin-panels-before-js","");</script>
        <div class="fb-customerchat" page_id="301467093658217"></div>
        <script>
            window.fbAsyncInit = function() {
            FB.init({
              appId            : '430878597336583',
              autoLogAppEvents : true,
              xfbml            : true,
              version          : 'v2.11'
            });
            };

            (function(d, s, id){
            var js, fjs = d.getElementsByTagName(s)[0];
            if (d.getElementById(id)) {return;}
            js = d.createElement(s); js.id = id;
            js.src = "https://connect.facebook.net/en_US/sdk.js";
            fjs.parentNode.insertBefore(js, fjs);
            }(document, 'script', 'facebook-jssdk'));
        </script>
    </body>
</html>