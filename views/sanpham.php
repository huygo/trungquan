<?php $sanphamct=$page['data'];
   $muahang=$data->muahang(15);
 ?>
<section class="v2_bnc_inside_page">
   <div class="v2_bnc_products_view_details">
      <div class="v2_bnc_products_body">
         <!-- Products details -->
         <!-- Breadcrumbs -->
         <div class="clearfix"></div>
         <div class="v2_breadcrumb_main">
            <div class="container">
               <h1><?=$sanphamct['name']?></h1>
               <ul class="breadcrumb">
                  <li ><a href="<?=HOME?>">Trang chủ</a></li>
                  <li ><a href="product/1/<?=$sanphamct['danhmucurl']?>"><?=$sanphamct['danhmuc']?></a></li>
                  <li ><a href="product/<?=$sanphamct['url']?>"><?=$sanphamct['name']?></a></li>
                  
               </ul>
            </div>
         </div>
         <!-- End Breadcrumbs -->
         <div class="v2_bnc_product_details_page">
            <div class="container">
               <div class="row">
                  <div class="col-md-3 col-sm-12">
                     <div class="sidebar-left">
                        <div class="v2_bnc_category_products widget">
                           <div class="v2_bnc_block_title">
                              <h2>Danh mục sản phẩm</h2>
                           </div>
                           <div class="v2_bnc_block_cate_body">
                              <ul class="v2_bnc_block_category_menu_block">

                                 <?php foreach ($danhmuc as  $value) { $danhmuccon=$data->getdanhmuccon($value['id']); ?>
                     <li>
                        <a href="product/1/<?=$value['url']?>" title="<?=$value['name']?>" class="divder-sub"><?=$value['name']?></a>
                        <i class="click-sub-main"><i class="fa fa-angle-right"></i></i>
                        <ul class="blockCat-sub">
                          <?php foreach ($danhmuccon as $item) { ?>
                           <li>
                              <a href="product/1/<?= $item['url']?>" title="<?= $item['name']?>"><?php echo $item['name']; ?></a>
                           </li>
                          <?php } ?>
                           
                        </ul>
                     </li>
                    <?php } ?>
                                 
                                 
                              </ul>
                           </div>
                        </div>
                     </div>
                  </div>
                  <div class="col-md-9 col-sm-12">
                     <div class="row">
                        <!-- Zoom image -->
                        <div class="v2_bnc_products_details_zoom_img col-md-5 col-sm-12 col-xs-12">
                           <style>
                              #f-pr-image-zoom-gallery .active img{
                              opacity: 1 !important;
                              }
                              #img_01 {
                              height: 400px !important;
                              }
                           </style>
                           <div class="f-pr-image-zoom">
                              <div class="zoomWrapper">
                                 <img id="img_01" src="<?=$sanphamct['hinh_anh']?>"data-zoom-href='<?=$sanphamct['hinh_anh']?>'class="img-responsive BNC-image-add-cart-<?=$sanphamct['id']?>" alt="<?=$sanphamct['name']?>" class="img-responsive" />
                              </div>
                           </div>
                           <div class="f-pr-image-zoom-gallery">
                              <div id="slidezoompage">
                                 <div class="owl_img_product_details">
                                    <a href="#" data-href='<?=$sanphamct['hinh_anh']?>'data-zoom-image="<?=$sanphamct['hinh_anh']?>" title="Ao-choang-tre-em-trang-nu-min">
                                    <img src="<?=$sanphamct['hinh_anh']?>" alt="" class="v2_bnc_product_details_img_small img-responsive"/>
                                    </a>
                                    <?php if ($sanphamct['slide_1']!='') { ?>
                                    <a href="#" data-href='<?=$sanphamct['slide_1']?>'data-zoom-image="<?=$sanphamct['slide_1']?>" title="Ao-choang-tre-em (1)-min">
                                    <img src="<?=$sanphamct['slide_1']?>" alt="" class="v2_bnc_product_details_img_small img-responsive"/>
                                    </a>
                                    <?php } ?>
                                    <?php if ($sanphamct['slide_2']!='') { ?>
                                    <a href="#" data-href='<?=$sanphamct['slide_2']?>'data-zoom-image="<?=$sanphamct['slide_2']?>" title="">
                                    <img src="<?=$sanphamct['slide_2']?>" alt="" class="v2_bnc_product_details_img_small img-responsive"/>
                                    </a>
                                    <?php } ?>
                                    <?php if ($sanphamct['slide_3']!='') { ?>
                                    <a href="#" data-href='<?=$sanphamct['slide_3']?>'data-zoom-image="<?=$sanphamct['slide_3']?>" title="">
                                    <img src="<?=$sanphamct['slide_3']?>" alt="" class="v2_bnc_product_details_img_small img-responsive"/>
                                    </a>
                                    <?php } ?>
                                 </div>
                              </div>
                              <div class="clearfix"></div>
                           </div>
                        </div>
                        <!-- End Zoom image -->
                        <!-- Details -->
                        <div class="v2_bnc_products_details_box col-md-7 col-sm-12 col-xs-12">
                           <div class="v2_bnc_products_details_box_name">
                              <h2><?=$sanphamct['name']?></h2>
                           </div>
                           <br />  
                           <div class="v2_bnc_products_details_box_rating">
                              <!-- <div id="stars" data-text-login="Vui lòng đăng nhập trước khi đánh giá" data-is-login="0" onclick="relogin()" data-is-rater="" data-name="Áo choàng tắm trẻ em - size S" data-id-product="1265198" class="starrr" data-rating='0' style="font-size: 17px;color: #fa930d;top: 2px;display: inline-block; margin-right: 10px;"></div>
                              <div style="margin-left: 94px;margin-top: -12px; display: none">
                                 <span id="display-first-rating" style="font-size: 12px">Hãy trở thành người đầu tiên đánh giá sản phẩm này</span>
                                 <span id="display-total-rating" style="font-size: 12px">(<i class="fa fa-user"></i> <span id="rate" style="font-size: 12px;">0</span>)</span>
                              </div> -->
                              <div class="v2_bnc_products_details_box_social" style="display: inline-block">
                                 <ul class="no-margin no-padding">
                                    <!-- <li class="hidden"><a href="javascript:;" class="like-product like-product-1265198" data-is-info-page="1" data-like="2" data-name="Áo choàng tắm trẻ em - size S" data-id="1265198" data-text-like="Thích" data-text-unlike="Bỏ thích" data-login="Vui lòng đăng nhập trước <br/><a class='btn btn-success' href='user-login.html'>Đăng nhập</a>"><i class="fa fa-thumbs-o-up"></i> Thích</a></li>
                                    <li style="display:none"><a href="javascript:;">So sánh</a></li> -->
                                    <li>Lượt xem: <?=$sanphamct['luot_xem']?></li>
                                    <li>Ngày đăng: <?=date('d/m/Y',strtotime($sanphamct['updated']));?></li>
                                 </ul>
                                 <div class="clearfix"></div>
                              </div>
                           </div>
                           <div class="v2_bnc_products_details_box_info">
                              <div class="v2_bnc_products_details_box_price">
                                 <?php if ($sanphamct['gia_ban']>0 && $sanphamct['gia_niem_yet']>$sanphamct['gia_ban']) { 
                                    $pt=ceil((($sanphamct['gia_niem_yet']-$sanphamct['gia_ban'])/$sanphamct['gia_niem_yet'])*100);?>
                                 <span class="key">Giá sản phẩm: </span> <span style="margin-left: 10px;text-decoration: line-through; color: #989898; font-size: 16px; font-weight: bold"><?=number_format($sanphamct['gia_niem_yet'])?> đ</span>
                                 <div class="clearfix"></div>
                                 <div class="v2_bnc_price_sale_main">
                                    <span class="key">Giá khuyến mãi: </span><span class="price price_sale" ><?=number_format($sanphamct['gia_ban'])?> đ</span>
                                    <div class="number_sale"><span class="number_sale_icon">- <?=$pt?>%</span></div>
                                 </div>
                                 <?php }else{ ?>
                                     <span class="key">Giá sản phẩm: </span><span class="price price_sale" ><?=number_format($sanphamct['gia_niem_yet'])?> đ</span>
                                 <div class="clearfix"></div>
                                 <?php } ?>

                              </div>
                              <!-- Giá Theo số lượng -->
                              <!-- End Giá Theo số lượng -->
                              <!-- Giá Theo Thuộc Tính -->
                              <!-- End Giá Theo Thuộc Tính -->
                              <!-- Giá Theo Thuộc Tính 2 -->
                              <!-- End Giá Theo Thuộc Tính 2 -->
                              <ul class="no-margin no-padding">
                                 <div class="row">
                                    <div class="col-md-6">
                                       <!-- Color-->
                                       <!-- End Color--> 
                                    </div>
                                    <div class="col-md-6">
                                       <!-- Size -->
                                       <!-- End Size -->                     
                                    </div>
                                 </div>
                                 <div style="margin-bottom: 20px;">
                                    <!-- Code Products Qr -->
                                    <li class="clearfix"></li>
                                    <!-- End Code Products Qr -->
                                    <!-- Code Products -->
                                    <li class="key">Mã sản phẩm: </li>
                                    <li class="value">KP00<?=$sanphamct['id']?></li>
                                    <p><?=$sanphamct['mo_ta']?></p>
                                    <li class="clearfix"></li>
                                 </div>
                              </ul>
                              <div class="clearfix"></div>
                           </div>
                           <div class="group-muahang">
                              <div class="row">
                                 <div class="col-md-4 col-sm-4 col-xs-4" style="padding-right:0"></div>
                                 <div class="col-md-8 col-sm-12 col-xs-12">
                                    <a href="javascript:;" class="btn-buy" onclick="addcart1(<?=$sanphamct['id']?>)" style="margin-bottom: 10px;">
                                    <span class="glyphicon glyphicon-shopping-cart"></span> Mua ngay</a>
                                    <a href="javascript:;" class="btn-buy" id="add-cart" onclick="addcart(<?=$sanphamct['id']?>)" style="margin-bottom: 10px;">
                                    <i class="fa fa-shopping-cart"></i> Thêm vào giỏ hàng</a>
                                    <div class="clearfix"></div>
                                 </div>
                              </div>
                           </div>
                           <!-- Like share facebook,google,twitter -->
                           <!-- Go to www.addthis.com/dashboard to customize your tools -->
                           <div class="addthis_inline_share_toolbox hidden"></div>
                           <!-- Go to www.addthis.com/dashboard to customize your tools --> <script type="text/javascript" src="template/s7.addthis.com/js/300/addthis_widget.js#pubid=ra-58203dbf79d909eb"></script> <br />
                           <!-- End Like share facebook,google,twitter -->
                        </div>
                        <!-- End Details -->    
                     </div>
                     <!-- Products Details Tab -->
                     <div class="f-product-view-tab">
                        <div class="f-product-view-tab-header">
                           <ul id="f-pr-page-view-tabid" class="nav-tabs">
                              <li class="active"><a href="#f-pr-view-01" data-toggle="tab">Mô tả</a></li>
                              <li ><a href="#f-pr-view-03" data-toggle="tab">Hướng dẫn mua hàng</a></li>
                              <li ><a href="#f-pr-view-04" data-toggle="tab">Mô tả vắn tắt</a></li>
                           </ul>
                           <div class="clearfix"></div>
                        </div>
                        <div class="f-product-view-tab-body tab-content">
                           <div id="f-pr-view-01" class="tab-content tab-pane active">
                              <?=$sanphamct['noi_dung']?>
                           </div>
                           
                           <div id="f-pr-view-03" class="tab-content tab-pane ">
                              <?=$muahang['noi_dung']?>
                           </div>
                           <div id="f-pr-view-04" class="tab-content tab-pane ">
                              <?=$sanphamct['mo_ta']?>
                           </div>
                        </div>
                     </div>
                     <!-- End Products Details Tab -->
                     <!-- <div class="f-product-view-tags">
                        <div class="f-product-view-tags-body">
                           <span><i class="fa fa-tags"></i> Tags: <a href="tag/ao-choang-tam.html" title="Áo choàng tắm" target="_blank">Áo choàng tắm</a>, <a href="tag/khan-choang-ao-tam.html" title="khăn choàng áo tắm" target="_blank">khăn choàng áo tắm</a>, <a href="tag/ao-choang-tam-khach-san.html" title="áo choàng tắm khách sạn" target="_blank">áo choàng tắm khách sạn</a></span>
                        </div>
                     </div> -->
                     <!-- Comment Social -->
                     <div class="v2_bnc_comment_social" style="margin-bottom: 40px;">
                        <div class="v2_bnc_comment_social_body">
                           <div class="v2_bnc_view_comment_social">
                              <div class="v2_bnc_view_comment_social_tab_header">
                                 <ul id="v2_bnc_comment_social_tab_id" class="no-margin no-padding nav-tabs">
                                    <li class="active">
                                       <a href="#comment-facebook" data-toggle="tab">Bình luận bằng tài khoản facebook </a>
                                    </li>
                                    <!-- <li >
                                       <a href="#commnet-google" data-toggle="tab">Bình luận bằng tài khoản Google</a>
                                    </li> -->
                                 </ul>
                              </div>
                              <div class="clearfix"></div>
                              <div class="v2_bnc_comment_social_body tab-content">
                                 <div id="comment-facebook" class="tab-pane fade in active">
                                    <div class="fb-comments" data-href="<?=HOME?>/product/<?=$sanphamct['url']?>" data-width="828" data-numposts="5" data-colorscheme="light"></div>
                                 </div>
                                 <!-- <div id="commnet-google" class="tab-pane fade">
                                    <script src="template/apis.google.com/js/plusone.js"></script>
                                    <div class="g-comments"
                                       data-view_type="FILTERED_POSTMOD"
                                       data-first_party_property="BLOGGER"
                                       data-width="828"
                                       data-href="http://chauminh.vn/ao-choang-tam-tre-em-size-s-1-1-1265198.html">
                                    </div>
                                 </div> -->
                              </div>
                           </div>
                        </div>
                     </div>
                     <!-- End Comment Social -->
                     <!-- Products Related -->
                     <!-- End Products Related -->
                  </div>
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
         <script>
            $(document).ready(function(){
                $('[data-toggle="tooltip"]').tooltip(); 
            });
         </script>
         <!-- End Products details -->
      </div>
   </div>
   <!--Like Product-->
</section>
<!-- End Inside Page -->
<style>.hotlinebnc {
   position: fixed;
   height: 25px;
   background: #ff0000;
   width: 100%;
   box-shadow: 0 0 3px rgba(0, 0, 0, 0.34);
   color: #FFFF00;
   line-height: 35px;
   z-index: 400;
   bottom: 0;
   display:block;
   }
   .left-hotline {
   float: left;
   background: ;
   padding: 0 1px;
   font-size: 20px;
   height: 30px;
   line-height: 25px;
   text-transform: uppercase;
   text-shadow: 0 0 1px rgba(0, 0, 0, 0.25);
   border-radius: 15px;
   margin-top: 0px;
   }
   .right-hotline {
   /*float: left;*/
   padding-left: 8px;
   line-height: 36px;
   height: 35px;
   /*margin-right: 30px;*/
   }
   .hotline-location {
   font-weight: bold;
   margin-right: 8px;
   font-size:20px;
   color: #FFEB00;
   }
   .hotline-phone {
   color: #FFF;
   font-size:20px;
   font-weight: bold;
   }
   .hotline-email {
   }
   .hotlinebnc a {
   color: #fff;
   }
   @media only screen and (max-width:992px){ 
   .hotlinebnc{
   bottom: 25px;
   }
   .col_2{
   padding:0;
   background:red;
   }
   .col_2.left-hotline{
   margin-left:20px;
   }
   .left-hotline{
   height: 25px;
   }
   }
</style>