<?php
use frontend\components\ComponentBase;



$compoment = new ComponentBase();
$base_url = $compoment->Base_url();

?>

        <link href="http://xhome.com.vn/themes/91530/statics/css/style.css?v=11" rel="stylesheet" media="screen">

        <div class="v2_bnc_products_view_details">
            <div class="v2_bnc_products_body">
                <!-- Products details -->
                <!-- Breadcrumbs -->
                <div class="v2_breadcrumb_main">
                    <div class="container">
                        <ul class="breadcrumb padding-top-30 padding-bottom-30" style="display:block;">
                            <li ><a href="<?php echo $base_url ?>">Trang chủ</a></li>
                            <li ><a href="<?php echo $base_url ?>">Sản Phẩm</a></li>
                            <li ><a><?php echo $dataProduct['title']?></a></li>
                        </ul>
                    </div>
                </div>
                <!-- End Breadcrumbs -->
                <div class="v2_bnc_product_details_page">
                    <div class="container">
                        <div class="row">
                            <!-- Zoom image -->
                            <div class="v2_bnc_products_details_zoom_img col-md-7 col-sm-12 col-xs-12">
                                <div class="f-pr-image-zoom">
                                    <div class="zoomWrapper">
                                        <img id="img_01" src="<?php echo $base_url.'public/images/image_manage/'.$dataProduct['image']?>"/>
                                    </div>
                                </div>
                            </div>
                            <!-- End Zoom image --> 
                            <!-- Details -->
                            <div class="v2_bnc_products_details_box col-md-5 col-sm-12 col-xs-12">
                                <div class="v2_bnc_products_details_box_name">
                                    <h2><?php echo $dataProduct['title']?></h2>
                                </div>
                                <br />    
                                <div class="v2_bnc_products_details_box_social">
                                    <ul class="no-margin no-padding">
                                        <li>Ngày đăng: <?php echo date('d/m/Y',$dataProduct['create_time']);?></li>
                                    </ul>
                                    <div class="clearfix"></div>
                                </div>
                                <div class="v2_bnc_products_details_box_info">
                                    <div class="v2_bnc_products_details_box_price">
                                        <span class="key">Giá sản phẩm: </span><span class="price"><?php echo $dataProduct['price'] . ' đ'. "\n";?></span>
                                    </div>
                                    <div class="v2_bnc_products_details_box_description">
                                        <table border="0" cellpadding="0" cellspacing="0" style="width:416px">
                                            <tbody>
                                                <tr>
                                                    <td style="height:38px; width:118px">
                                                        <p>Giá bán</p>
                                                    </td>
                                                    <td style="width:123px">
                                                        <p><?php echo $dataProduct['price'] . ' đ'. "\n";?>&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;</p>
                                                    </td>
                                                    <td style="width:176px">
                                                        <p>&nbsp;</p>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td style="height:38px; width:118px">
                                                        <p>Kích thước</p>
                                                    </td>
                                                    <td style="width:123px">
                                                        <p><?php echo $dataProduct['size']?>&nbsp;</p>
                                                    </td>
                                                    <td style="width:176px">
                                                        <p>&nbsp;</p>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td style="height:42px; width:118px">
                                                        <p>Mô tả</p>
                                                    </td>
                                                    <td colspan="2" style="width:299px">
                                                        <p><?php echo $dataProduct['description']?></p>
                                                    </td>
                                                </tr>
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                               <!--  <a href="#" id="payment" class="btn-buynow" id="add-cart"> -->
                                <button class="add-cart btn-buy btn-buy-now quick-buy-custom" data-product="786945"><i class="fa fa-check"></i> Liên hệ</button>
                               <!--  </a> -->
                                <div class="clearfix"></div>
                            </div>
                            <!-- End Details -->
                        </div>
                    </div>
                </div>
                <script type="text/javascript">
                    $(document).ready(function() {
                    $("#img_01").elevateZoom(
                    {
                    gallery:'slidezoompage',
                    cursor: 'pointer',
                    galleryActiveClass: 'active',
                    imageCrossfade: true,
                    scrollZoom : true,
                    easing : true
                    });
                    //
                    $("#img_01").bind("click", function(e) {
                    var ez = $('#img_01').data('elevateZoom');
                    $.fancybox(ez.getGalleryList());
                    var src=$(this).find('img').attr('src');
                    $('#img_01').attr('src',src);
                    
                    return false;
                    });
                    $("#slidezoompage a").bind("click", function(e) {
                    var src=$(this).find('img').attr('src');
                    $('#img_01').attr('src',src);
                    
                    return false;
                    });
                    
                    });
                </script>
                <!-- End Products details -->
                <!-- Form Register Design -->
                <!-- Modal -->
                <div class="v2_bnc_form_register">
                    <div class="modal fade" id="myModal" role="dialog">
                        <div class="modal-dialog">
                            <!-- Modal content-->
                            <div class="modal-content">
                                <div class="modal-header">
                                    <button type="button" class="close" data-dismiss="modal" title="Tắt">&times;</button>
                                </div>
                                <div class="modal-body">
                                    <iframe src="https://docs.google.com/forms/d/1UOSdVxDtjPajSjXmvyNQuIyRU6-M_j6lcqpedO6PPtc/viewform?edit_requested=true" width="100%" height="1311" frameborder="0" marginheight="0" marginwidth="0"></iframe>
                                    <a href="" title="THIẾT KẾ WEBSITE BNC" class="adv_bnc_2 hidden">
                                    <img src="https://cdn-img-v2.webbnc.net/uploadv2/web/63/6329/adv/2017/05/05/03/31/1493954299_a2.png"alt="THIẾT KẾ WEBSITE BNC" class="img-responsive"/>
                                    </a>
                                    <a href="" title="" class="adv_bnc_2 hidden">
                                    <img src="https://cdn-img-v2.webbnc.net/uploadv2/web/71/7121/adv/2017/08/08/02/21/1502158778_neYYn.jpg"alt="" class="img-responsive"/>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- End Form Register Design --><!-- Products Details Tab -->
                <!-- <div class="f-product-view-tab">
                    <div class="container">
                        <div class="f-product-view-tab-header">
                            <ul id="f-pr-page-view-tabid" class="nav-tabs">
                                <li class="active"><a href="#f-pr-view-01" data-toggle="tab">Mô tả</a></li>
                            </ul>
                            <div class="clearfix"></div>
                        </div>
                        <div class="f-product-view-tab-body tab-content">
                            <div id="f-pr-view-01" class="tab-content tab-pane active">
                                <table border="0" cellpadding="0" cellspacing="0" style="width:416px">  
                                    <p><?php echo $dataProduct['description']?></p>
                                </table>
                            </div>
                        </div>
                    </div>
                </div> -->
                <!-- End Products Details Tab --><!-- Comment Social -->
                <!-- Products Related -->
                <!-- End Products Related -->
            </div>
        </div>
        <div class="hidden-xs">
        </div>
        <script> 
            jQuery(function ($) { 
                $('#show').hide();
                $('#close').click(function (e) {
                  $('#rich-media').hide('slow');
                  return false;
                });
                $('#hide').click(function (e) {
                  $('#show').show('slow');
                  $('#hide').hide('slow');
                  $('#rich-media-item').height(0);
                  return false;
                });
                $('#show').click(function (e) {
                  $('#hide').show('slow'); 
                  $('#show').hide('slow');
                  $('#rich-media-item').height(205);
                  return false;
               });
            });
        </script>
     