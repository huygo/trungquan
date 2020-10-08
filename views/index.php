<?php
   $danhmuchome=$data->danhmuchome();
   $danhmuchome1=$data->danhmuchome1();
?>
<section class="v2_bnc_content_main">
<div class="v2_bnc_content_top">
   <div class="slideshow_block_top widget">
      <div class="owl-slider-top"></div>
   </div>
   <div class="v2_bnc_category_block_select_top" style="margin-bottom: 20px;">
      <div class="container">
         <div class="v2_bnc_block_title hidden">
            <h2>Danh mục tuỳ chọn Top</h2>
         </div>
         <div class="v2_bnc_body_menu">
            <ul class="v2_bnc_category_select_menu_list">
               <div class="row">
                  <div class="col-md-6 col-sm-12 col-xs-12">
                     <div class="grounp-tuychinh-left">
                        <div class="full-height">
                           <li>
                              <a href="product/1/<?=$danhmuchome[0]['url']?>"><img src="<?=$danhmuchome[0]['hinh_anh']?>" onerror="this.onerror=null;this.src='<?=$danhmuchome[0]['hinh_anh']?>'"
                                 class="img-responsive" alt="<?=$danhmuchome[0]['name']?>" /></a><a href="product/1/<?=$danhmuchome[0]['url']?>" class="v2_bnc_title_menu_select_top hidden"><?=$danhmuchome[0]['name']?></a>
                           </li>
                        </div>
                     </div>
                  </div>
                  <div class="col-md-6 col-sm-12 col-xs-12">
                     <div class="grounp-tuychinh-right">
                        <div class="row">
                           <div class="col-md-12 col-sm-12 col-xs-12">
                              <div class="height-50">
                                 <li>
                                    <a href="product/1/<?=$danhmuchome[1]['url']?>"><img src="<?=$danhmuchome[1]['hinh_anh']?>" onerror="this.onerror=null;this.src='<?=$danhmuchome[1]['hinh_anh']?>'"
                                       class="img-responsive" alt="<?=$danhmuchome[1]['name']?>" /></a><a href="product/1/<?=$danhmuchome[0]['url']?>" class="v2_bnc_title_menu_select_top hidden"><?=$danhmuchome[1]['name']?></a>
                                 </li>
                              </div>
                           </div>
                           <div class="col-md-12 col-sm-12 col-xs-12">
                              <div class="height-50">
                                 <li>
                                    <a href="product/1/<?=$danhmuchome[2]['url']?>"><img src="<?=$danhmuchome[2]['hinh_anh']?>" onerror="this.onerror=null;this.src='<?=$danhmuchome[2]['hinh_anh']?>'"
                                       class="img-responsive" alt="<?=$danhmuchome[2]['name']?>" /></a><a href="product/1/<?=$danhmuchome[2]['url']?>" class="v2_bnc_title_menu_select_top hidden"><?=$danhmuchome[2]['name']?></a>
                                 </li>
                              </div>
                           </div>
                        </div>
                     </div>
                  </div>
               </div>
            </ul>
         </div>
      </div>
   </div>
</div>
<div class="v2_bnc_body_main">
<div class="clearfix"></div>
<div class="clearfix"></div>
<div class="v2_bnc_home">
<div class="v2_bnc_home_slide">
   <div class="row">
      <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
         <div id="myslide" class="carousel slide" data-ride="carousel">
            <ol class="carousel-indicators"></ol>
            <div class="carousel-inner"></div>
            <a class="left carousel-control" href="#myslide" data-slide="prev"><span class="glyphicon glyphicon-chevron-left"></span></a><a class="right carousel-control" href="#myslide" data-slide="next"><span class="glyphicon glyphicon-chevron-right"></span></a>
         </div>
      </div>
   </div>
</div>
<div class="clearfix"></div>

<div id="fast-container"></div>
<div id="fast-dialog" class="zoom-anim-dialog mfp-hide">
   <div id="fast-product-content"></div>
</div>
<script type="text/javascript">
   $(document).ready(function() {
       Likeproduct.init();
   });
   $(document).ready(function() {
       ProductFillter.init();
   });
</script>


<section class="v2_bnc_home_catepr_main pd-50 pd-t-0">
   <div class="container">
      <?php foreach ($danhmuchome1 as $item) { $danhmuccon=$data->getdanhmuccon($item['id']);
       ?>
      <div class="v2_bnc_home_catepr_top">
         <div class="v2_bnc_home_catepr_left_inner">
            <div class="v2_bnc_home_catepr_title">
               <hgroup class="v2_bnc_title_main v2-home-catepr-title-inner">
                  <h2><a href="khan-khach-san-2-1-291666.html"><?=$item['name']?></a></h2>
               </hgroup>
               <ul class="v2_bnc_home_catepr_tabul nav-tabs">
                  <?php foreach ($danhmuccon as $key => $value) {
                     
                        echo '<li><a href="product/1/'.$value['url'].'" data-ajax="1" data-url="product/1/'.$value['url'].'" data-id="'.$value['id'].'" data-block="291666" class="active">'.$value['name'].'</a></li>';

                     
                  } ?>
                 <!--  <li><a href="ao-choang-tam-khac-2-1-395910.html" data-ajax="1" data-url="http://chauminh.vn/ao-choang-tam-khac-2-1-395910.html" data-id="395910" data-block="291666" class="active">Áo choàng tắm khách sạn</a></li>
                  <li><a href="khan-tam-khach-san-2-1-331699.html" data-ajax="1" data-url="http://chauminh.vn/khan-tam-khach-san-2-1-331699.html" data-id="331699" data-block="291666" class="active">Khăn tắm khách sạn</a></li>
                  <li><a href="khan-mat-khach-san-2-1-331702.html" data-ajax="1" data-url="http://chauminh.vn/khan-mat-khach-san-2-1-331702.html" data-id="331702" data-block="291666" class="active">Khăn mặt khách sạn</a></li>
                  <li><a href="khan-tay-khach-san-2-1-331704.html" data-ajax="1" data-url="http://chauminh.vn/khan-tay-khach-san-2-1-331704.html" data-id="331704" data-block="291666" class="active">Khăn tay khách sạn</a></li>
                  <li><a href="mau-theu-det-logo-khach-san-2-1-331748.html" data-ajax="1" data-url="http://chauminh.vn/mau-theu-det-logo-khach-san-2-1-331748.html" data-id="331748" data-block="291666" class="active">Mẫu thêu, dệt logo Khách sạn</a></li> -->
                  
               </ul>
            </div>
         </div>
         <div class="clearfix"></div>
      </div>
      <div class="v2_bnc_home_catepr_left_avatar col-md-3 col-sm-3 col-xs-12 no-padding hidden"></div>
      <div class="v2_bnc_home_catepr_right row">
         <div class="tab-content ">
            <?php foreach ($danhmuccon as $key => $value) { if ($key==0) {
               $sanpham = $data->getsanpham($value['id']);
            }else{
               $sanpham=array();
            }  ?>
            <div class="v2_bnc_home_catepr_showul" id="product-content-<?=$value['id']?>">
               <div class="owl-carousel-products">
                  <?php   foreach ($sanpham as $sp) { ?>
                  <div class="col-md-12 col-sm-12 col-xs-12 no-padding" id="like-product-item-988019">
                     <div class="v2_bnc_pr_item">
                        <?php if ($sp['gia_ban']>0 && $sp['gia_niem_yet']>$sp['gia_ban']) {
                           $pt=ceil((($sp['gia_niem_yet']-$sp['gia_ban'])/$sp['gia_niem_yet'])*100);
                           echo '<div class="v2_bnc_pr_item_saleof v2_bnc_btn_sale"><span>'.$pt.'%</span></div>';
                        }else{
                           echo '<div class="v2_bnc_pr_item_saleof v2_bnc_btn_sale"><span>News</span></div>';
                        } ?>
                        
                        
                        <figure class="v2_bnc_pr_item_img">
                           <a href="product/<?=$sp['url']?>" title="<?=$sp['name']?>"><img alt="<?=$sp['name']?>" id="f-pr-image-zoom-id-tab-home-<?=$sp['id']?>" src="<?=$sp['hinh_anh']?>"
                              onerror="this.onerror=null;this.src='<?=$sp['hinh_anh']?>'"
                              class="BNC-image-add-cart-988019 img-responsive" /></a>
                           <div class="v2_bnc_pr_item_action">
                              <div class="tb">
                                 <div class="tb-cell">
                                    <div class="v2_bnc_pr_item_buy"><a href="javascript:void(0)" title="Đặt Mua" class="BNC-add-cart v2_bnc_pr_item_action_buy" onclick="addcart(<?=$sp['id']?>)"><i class="icon-basket icons"></i></a></div>
                                   
                                    <div class="v2_bnc_pr_item_like"><a class="v2_bnc_pr_item_icon_like like-product-988019 like-product" title="Không thích" data-like="2" data-name="Áo choàng tắm người lớn dùng trong khách sạn" data-id="988019" data-text-like="Thích"
                                       data-text-unlike="Bỏ thích"><span id="text-like-988019"><i class="icon-like icons"></i></span></a></div>
                                    <div class="v2_bnc_pr_item_compare">
                                       <a href="product/<?=$sp['url']?>" class="v2-products-btn-compare compare BNC-compare" title="Chi tiết" ><i class="icon-shuffle icons"></i></a>
                                    </div>
                                 </div>
                              </div>
                           </div>
                        </figure>
                        <div class="v2_bnc_pr_item_boxdetails">
                           <h3 class="v2_bnc_pr_item_name"><a href="product/<?=$sp['url']?>" title="<?=$sp['name']?>"><?=$sp['name']?></a></h3>
                           <div class="v2_bnc_pr_item_price_main">
                              <div class="tb">
                                 <div class="tb-cell">
                                    <p class="v2_bnc_pr_item_price"><?=number_format($sp['gia_ban'])?> đ</p>
                                    <p class="v2_bnc_pr_item_price_old"><?=number_format($sp['gia_niem_yet'])?> đ</p>
                                 </div>
                                 <div class="tb-cell">
                                    <div class="v2_bnc_pr_item_rate">
                                       <div id="stars" data-text-login="Vui lòng đăng nhập trước khi đánh giá" data-is-login="0" onclick="relogin()" data-is-rater="" data-name="Áo choàng tắm người lớn dùng trong khách sạn" data-id-product="988019" class="starrr" data-rating='0' style="font-size: 16px;color: #28b0e9; text-align: right"></div>
                                    </div>
                                 </div>
                              </div>
                           </div>
                        </div>
                        <div></div>
                     </div>
                  </div>
                  <?php } ?>
                 
               </div>
            </div>
         <?php } ?>
         </div>
      </div>
      <div class="clearfix"></div>
      <?php } ?>
      <div class="clearfix"></div>
   </div>
</section>