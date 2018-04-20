<?php 
    // use Yii;
    use yii\db\Query;
    use backend\modules\contents\models\Construction;
    use frontend\components\ComponentBase;
    use backend\modules\systems\models\Info;
    use backend\modules\handbook\models\Handbook;
    use backend\modules\systems\models\Banner;
    use backend\modules\product\models\Product_type;
    use backend\modules\product\models\Quanlysanpham;
    use backend\modules\service\models\Service;
    $components = new ComponentBase();
    $base_url = $components->Base_url();
    $base_url_frontend = $components->Base_url_images();
    $tieubieu = Construction::find()->where(['is_hot'=>1])->orderBy(['create_time'=> SORT_DESC])->limit(16)->all();
    $ct_hoanthanh = Construction::find()->where(['is_complete'=>1])->orderBy(['create_time'=> SORT_DESC])->limit(8)->all();
    $ct_xaydung = Construction::find()->where(['is_build'=>1])->orderBy(['create_time'=> SORT_DESC])->limit(4)->all();
    $company_info = Info::find()->all();
    $camnang = Handbook::find()->orderBy(['create_time'=> SORT_DESC])->limit(4)->all();
    $banner = Banner::find()->orderBy(['create_time'=> SORT_DESC])->all();
    $so_banner = Banner::find()->COUNT();
    $noithat = Product_type::find()->where(['level'=>2])->orderBy(['create_time'=> SORT_DESC])->limit(2)->all();
    $service = Service::find()->all();
    $sanpham = Quanlysanpham::find()->orderBy(['create_time'=> SORT_DESC])->limit(16)->all();
?>
<div>
    <div>
        <div id="myCarousel" class="carousel slide" data-ride="carousel">
            <!-- Indicators -->
            <ol class="carousel-indicators">
                <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
                <?php for ($i=1 ; $i <= $so_banner-1 ; $i++) { ?>
                    <li data-target="#myCarousel" data-slide-to="<?php echo $i ?>"></li>
                <?php } ?>
            </ol>
            <!-- Wrapper for slides -->
            <div class="carousel-inner">
                <div class="item active">
                    <img src="<?php echo $base_url ?>public/images/image_banner/<?php echo $banner[0]['image'] ?>" style="width:100%;">
                </div>
                <?php unset($banner[0]); 
                    foreach ($banner as $key => $value) { ?>
                        <div class="item">
                            <img src="<?php echo $base_url ?>public/images/image_banner/<?php echo $value['image'] ?>"  style="width:100%;">
                        </div>
                    <?php }
                ?>
            </div>
            <!-- Left and right controls -->
            <a class="left carousel-control" href="#myCarousel" data-slide="prev">
                <span class="glyphicon glyphicon-chevron-left"></span>
                <span class="sr-only">Previous</span>
            </a>
            <a class="right carousel-control" href="#myCarousel" data-slide="next">
                <span class="glyphicon glyphicon-chevron-right"></span>
                <span class="sr-only">Next</span>
            </a>
        </div>
    </div>
</div>
<div id="content" class="container site-content">
    <div class="row">
        <div id="primary" class="content-area">
            <main id="main" class="site-main" role="main">
                <article id="post-535" class="post-535 page type-page status-publish hentry">
                    <div id="pl-535" class="panel-layout">
                        <div id="pg-535-0" class="panel-grid panel-no-style">
                            <div id="pgc-535-0-0" class="panel-grid-cell">
                                <div id="panel-535-1-0-0" class="widget-1 so-panel widget widget_black-studio-tinymce widget_black_studio_tinymce panel-first-child" data-index="1">
                                    <h2 class="widget-title title-2">GIỚI THIỆU VỀ THỰC PHẨM SẠCH HT</h2>
                                    <div class="textwidget">
                                        <p><?php echo $company_info[0]['summary'] ?></p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div id="pg-535-1" class="panel-grid panel-no-style">
                            <div id="pgc-535-1-0" class="panel-grid-cell">
                                <div id="panel-535-0-0-0" class="widget-2 so-panel widget widget_vietmoz_featured_posts_carousel widget_featured_posts_carousel panel-first-child panel-last-child" data-index="0">
                                    <a href="#"><h2 class="widget-title title-1">SẢN PHẨM TIÊU BIỂU</h2></a>
                                    <div class="posts slick slick-initialized slick-slider" data-slick="{&quot;dots&quot;:false,&quot;slidesToShow&quot;:4,&quot;slidesToScroll&quot;:1,&quot;responsive&quot;:[{&quot;breakpoint&quot;:480,&quot;settings&quot;:{&quot;slidesToShow&quot;:2}},{&quot;breakpoint&quot;:768,&quot;settings&quot;:{&quot;slidesToShow&quot;:3}},{&quot;breakpoint&quot;:992,&quot;settings&quot;:{&quot;slidesToShow&quot;:4}}]}">
                                        <div aria-live="polite" class="slick-list draggable ">
                                            <?php foreach ($sanpham as $key => $value) { ?>
                                                <div class="item slick-slide slick-current slick-active" style="padding-top: 10px;" tabindex="-1" role="option" aria-describedby="slick-slide12" data-slick-index="2" aria-hidden="false">
                                                    <div class="post-thumbnail">
                                                        <a href="<?php echo $base_url ?>product/detail?prm=<?php echo $value['id'] ?>" title="<?php echo $value['title'] ?>" tabindex="0">
                                                            <img src="<?php echo $base_url ?>public/images/image_manage/<?php echo $value['image'] ?>" alt="<?php echo $value['title'] ?>"  width="270;" height="180">
                                                        </a>    
                                                    </div>
                                                    <span class="post-title">
                                                        <a href="<?php echo $base_url ?>product/detail?prm=<?php echo $value['id'] ?>" tabindex="0"><?php echo $value['title'] ?></a>
                                                    </span>                        
                                                </div>
                                            <?php } ?>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-12" style="padding-right: 0px;padding-right: 0px;">
                            <div class="col-md-6">
                                <div class="so-panel widget widget_vietmoz_featured_posts_carousel widget_featured_posts_carousel panel-first-child panel-last-child last-panel-left" data-index="0">
                                    <a href="#"><h2 class="widget-title title-2">SẢN PHẨM MỚI</h2></a>
                                    <div class="col-md-12 none-padding ">
                                        <?php foreach ($sanpham as $key => $value) { ?>
                                            <div style="padding-top: 10px;">
                                                <a href="<?php echo $base_url ?>product/detail?prm=<?php echo $value['id'] ?>">
                                                    <img src="<?php echo $base_url ?>public/images/image_manage/<?php echo $value['image'] ?>" alt="<?php echo $value['title'] ?>" width="120px;" heigh="70px;">
                                                </a>
                                                <div class="col-md-9" style="float: right;">
                                                    <a href="<?php echo $base_url ?>product/detail?prm=<?php echo $value['id'] ?>">
                                                        <h3 style="font-size: 18px; margin-top: 10px"><b><?php echo $value['title'] ?></b></h3>
                                                    </a>
                                                </div>
                                            </div>
                                        <?php } ?>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6 cam-nang">
                                <div class="so-panel widget widget_vietmoz_featured_posts_carousel widget_featured_posts_carousel panel-first-child panel-last-child" data-index="0">
                                    <h2 class="widget-title title-2">CẨM NANG</h2>
                                    <div class="col-md-12 none-padding ">
                                        <?php foreach ($camnang as $key => $value) { ?>
                                            <div style="padding-top: 10px;">
                                                <a href="<?php echo $base_url ?>handbook/detail?prm=<?php echo $value['id'] ?>">
                                                    <img src="<?php echo $base_url ?>public/images/image_handbook/<?php echo $value['image'] ?>" alt="<?php echo $value['title'] ?>" width="120px;" heigh="70px;">
                                                </a>

                                                <div class="col-md-9" style="float: right;">
                                                    <a href="<?php echo $base_url ?>handbook/detail?prm=<?php echo $value['id'] ?>">
                                                        <h3 style="font-size: 18px;  margin-top: 10px"><b><?php echo $value['title'] ?></b></h3>
                                                    </a>
                                                </div>
                                            </div>
                                        <?php } ?>
                                        <!-- <img src="./css/jscss/img-content-480x360.jpg" width="120px;" alt="Vinhomes Thăng Long mở bán nhà vườn Long Phú">
                                        <div class="col-md-9" style="float: right;">
                                            <h4><b>title</b></h4>
                                        </div> -->
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </article>
                <!-- #post-## -->
            </main>
            <!-- #main -->
        </div>
        <!-- #primary -->
    </div>
    <!-- /.row -->
</div>