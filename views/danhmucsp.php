<?php
  $sanpham=$page['data'];
  $sanpham1=$data->tongsp($page['id']);
  $tongbv= count($sanpham1);
  
  $sotrang=ceil($tongbv/12);
  $trang=$url[1];
  if ($trang==1) {
    $from=1;
    $sosp= count($sanpham);
  }else{
    $from= ($trang-1)*12;
    $sosp= ($from+count($sanpham));
  }
  
?>
<section class="v2_bnc_inside_page">
   <!--Products Page -->
   
   <!--End Like Product-->
   <section id="products-main" class="v2_bnc_products_page">
      <!-- Breadcrumbs -->
      <div class="clearfix"></div>
      <div class="v2_breadcrumb_main">
         <div class="container">
            <h1><?=$page['title']?></h1>
            <ul class="breadcrumb">
               <li ><a href="<?=HOME?>">Trang chủ</a></li>
               <?php if ($page['cha']==0) { ?>
               <li ><a href="product/1/<?=$url[2]?>"><?=$page['title']?></a></li>
               <?php }else{ ?>
                  <?php $cha=$data->getcha($page['id']); ?>
                  <li ><a href="product/1/<?=$cha['url']?>"><?=$cha['name']?></a></li>
                  <li ><a href="product/1/<?=$url[2]?>"><?=$page['title']?></a></li>
               <?php } ?>
              
            </ul>
         </div>
      </div>
      <!-- End Breadcrumbs -->
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
      <div class="main-content">
      
     
      <div class="v2_bnc_description_page text-justify margin-top-10">
         <div style="text-align: justify;"><span style="font-size:14px;"><?=$page['description']?></div>
         <div style="text-align: center;"><span style="text-align: center; font-size: 17px;"><span style="color: rgb(0, 0, 0);"><span style="font-size: 14px;">Liên hệ với chúng tôi để được tư vấn và báo giá cụ thể:<br  />
            <strong><?=$thongtin[0]['value']?></strong></span></span></span><br style="text-align: center;" />
            <strong style="text-align: center;"><span style="font-size: 14px;">Địa chỉ: <?=$thongtin[1]['value']?>.<br  />
            ĐT:&nbsp;<a href="tel:<?=$thongtin[2]['value']?>"><?=$thongtin[2]['value']?></a>&nbsp;-&nbsp;<a href="tel:<?=$thongtin[8]['value']?>"><?=$thongtin[8]['value']?></a><br  />
            </strong>
         </div>
      </div>
      <div class="v2_bnc_select_category_products_page">
         <div class="row">
            <div class="col-md-4 col-sm-6 col-xs-6 full-xs">
               <select name="sort_filter" id="sort_filter" class="form-control">
                  <option value="last" selected>Sản phẩm mới nhất</option>
                  <option value="manual_sort_desc" >Tùy chọn từ cao tới thấp</option>
                  <option value="manual_sort_asc" >Tùy chọn từ thấp tới cao</option>
                  <option value="early" >Sản phẩm cũ nhất</option>
                  <option value="best_selling" >Sản phẩm bán chạy</option>
                  <option value="view" >Sản phẩm xem nhiều</option>
                  <option value="hot" >Sản phẩm nổi bật</option>
                  <option value="hight_to_low" >Giá từ cao đến thấp</option>
                  <option value="low_to_hight" >Giá từ thấp đến cao</option>
                  <option value="more_to_less" >Khuyến mãi từ ít đến nhiều</option>
                  <option value="less_to_more" >Khuyến mãi từ nhiều đến ít</option>
                  <option value="a_z" >Sắp xếp theo tên từ A - Z</option>
                  <option value="z_a" >Sắp xếp theo tên từ Z - A</option>
               </select>
            </div>
            <div class="col-md-4 col-sm-6 col-xs-6 full-xs">
               <select name="limit_filter" id="limit_filter" class="form-control">
                  <option value="12" selected>12 sản phẩm mỗi trang</option>
                  <option value="15" >15 sản phẩm mỗi trang</option>
                  <option value="20" >20 sản phẩm mỗi trang</option>
                  <option value="40" >40 sản phẩm mỗi trang</option>
                  <option value="60" >60 sản phẩm mỗi trang</option>
                  <option value="80" >80 sản phẩm mỗi trang</option>
                  <option value="100" >100 sản phẩm mỗi trang</option>
                  <option value="120" >120 sản phẩm mỗi trang</option>
                  <option value="140" >140 sản phẩm mỗi trang</option>
               </select>
            </div>
            <div class="col-md-2 col-sm-3 col-xs-3">
               <button class="BNC-search-product btn btn-danger">Tìm kiếm</button>
            </div>
            <div class="col-md-2 col-sm-3 col-xs-3">
               <div class="v2_bnc_icon_filter">
                  <p class="btn btn-primary">Lọc <i class="fa fa-filter" aria-hidden="true"></i></p>
               </div>
            </div>
         </div>
      </div>
      <div class="v2_bnc_products_page_body">
      <div class="row margin-top-20">
         <div class="col-xs-6 col-sm-6 col-md-6 col-lg-6">
            <div class="v2_bnc_title_page">
               <h2 class="no-top-space"><?=$page['title']?></h2>
            </div>
         </div>
         <div class="col-xs-6 col-sm-6 col-md-6 col-lg-6">
            <div class="v2_bnc_products_chooseview"> 
               <a href="javascript:void()" id="grid" class="active" title="Dạng danh sách"><i class="fa fa-th-large fa" aria-hidden="true"></i></a> 
               <!-- <a href="javascript:void()" id="list" title="Dạng list"><i class="fa fa-th-list" aria-hidden="true"></i></a>  -->
            </div>
         </div>
      </div>
      <div class="v2_bnc_products_filter_page">
         <!-- Filter products items -->
         <!-- <style type="text/css">
            .v2_bnc_products_filter_page{
            display: none;
            }
            .filter {
            width: 100%;
            float: left;
            border: 1px solid #ddd;
            margin-bottom: 20px;
            }
            .v2-filterpr-show {
            font-size: 18px;
            }
            .f-product-custom-filter:hover{
            cursor: pointer;
            }
         </style> -->
         
         <!-- <input id="BNC_current_url" type="hidden" value="http://chauminh.vn/khan-khach-san-2-1-291666.html"/> -->
        <!--  <section class="filter">
            <div class="category_filter">
            </div>
            <div class="col-md-2 col-sm-6 col-xs-12 slider-price">
               <h2 class="v2-filterpr-show">Khoảng giá</h2>
               <div id="BNC-slider-price"></div>
            </div>
         </section> -->
         
        <!--  <script type="text/javascript">
            $(document).ready(function() {
              ProductSearch.init();
              });
         </script>  -->
         <!-- Filter products items--> 
      </div>
      <div class="tab-content margin-top-10 row">
      <ul class="f-product-viewid f-product ">
        <?php foreach ($sanpham as $value) { ?>
         <li class="col-xs-6 col-sm-6 col-md-4 col-lg-4 full-xs" id="like-product-item-988019">
            <div class="v2_bnc_pr_item" style="margin-bottom: 30px;">
              <?php if ($value['gia_ban']>0 && $value['gia_niem_yet']>$value['gia_ban']) {
                           $pt=ceil((($value['gia_niem_yet']-$value['gia_ban'])/$value['gia_niem_yet'])*100);
                           echo '<div class="v2_bnc_pr_item_saleof v2_bnc_btn_sale"><span>'.$pt.'%</span></div>';
                        }else{
                           echo '<div class="v2_bnc_pr_item_saleof v2_bnc_btn_sale"><span>News</span></div>';
                        } ?>
            <figure class="v2_bnc_pr_item_img">
               <a href="product/<?=$value['url']?>" title="<?=$value['name']?>">
               <img alt="<?=$value['name']?>" id="f-pr-image-zoom-id-tab-home-988019" src="<?=$value['hinh_anh']?>"  class="BNC-image-add-cart-988019 img-responsive"/>
               </a>
               <!-- Action Btn -->
               <div class="v2_bnc_pr_item_action">
                  <!-- Buy -->  
                  <div class="v2_bnc_pr_item_buy">
                     <a href="javascript:void(0)" title="Đặt Mua" class="BNC-add-cart v2_bnc_pr_item_action_buy" onclick="addcart(<?=$value['id']?>)"><i class="icon-basket icons"></i></a> 
                  </div>
                  <!-- End Buy -->
                  
                  
                
                  <!-- Compare -->
                  <div class="v2_bnc_pr_item_compare">
                                       <a href="product/<?=$value['url']?>" class="v2-products-btn-compare compare BNC-compare" title="Chi tiết" ><i class="icon-shuffle icons"></i></a>
                                    </div>
                  <!-- End Compare -->
               </div>
               <!-- End Action Btn --> 
            </figure>
            <div class="v2_bnc_pr_item_boxdetails">
            <!-- Products Name -->  
            <h3 class="v2_bnc_pr_item_name"><a href="product/<?=$value['url']?>" title="<?=$value['name']?>"><?=$value['name']?></a></h3>
            <!-- End Products Name -->
            <!-- Stars -->
            
            <!-- End Stars -->  
            <!-- Details -->
            <!-- End Details -->
            <!-- Price -->
            <div class="v2_bnc_pr_item_price_main">
               <p class="v2_bnc_pr_item_price"><?=number_format($value['gia_ban'])?> đ</p>
               <p class="v2_bnc_pr_item_price_old"><?=number_format($value['gia_niem_yet'])?> đ</p>
            </div>
            <!-- End Price -->
            <div></div>
         </li>
        <?php } ?>
         
         
      </ul>
      <div class="v2_bnc_pagination">
      <div class="col-md-6">
      <p class="v2_bnc_pagination_title"> Hiển thị từ            <strong><?=$from?>  </strong> đến            <strong><?=$sosp?>    </strong> trên            <strong><?=$tongbv?>  </strong> bản ghi - Trang số            <strong><?=$trang?>  </strong> trên            <strong><?=$sotrang?>  </strong> trang        </p>
      </div>
      <div class="v2_bnc_pagination_button text-right col-md-6">
      <ul class="pagination">
      <?php if ($trang>1 && $sotrang>1) {
         echo '<li><a href="product/'.($trang-1).'/'.$url[2].'"> ← </a></li>';
      }else{
        echo '<li class="disabled"><a> ← </a></li>';
      } ?>
      
      <?php for ($i=1; $i <=$sotrang ; $i++) { 
        if ($trang==$i) {
          echo '<li class="active"><a >'.$i.'</a></li>';
        }else{
          echo '<li ><a href="product/'.$i.'/'.$url[2].'">'.$i.'</a></li>';
        }
      } ?>
      <?php if ($trang<$sotrang) {
         echo '<li><a href="product/'.($trang+1).'/'.$url[2].'">→</a></li>';
      }else{
        echo '<li class="disabled"><a>→</a></li>';
      } ?>
      
      </ul>
      <div class="clearfix"></div>
      </div> 
      </div>
      <div class="clearfix"></div>
      </div>
      </div>
      </div>  
      </div>
      </div>
      </div>  
   </section>
   <!-- <input type="hidden" id="params" value="eyJ1cmwiOiJodHRwOlwvXC9jaGF1bWluaC52blwva2hhbi1raGFjaC1zYW4tMi0xLTI5MTY2Ni5odG1sIiwic29ydCI6Imxhc3QiLCJsaW1pdCI6MTIsImNhdGVnb3J5IjpmYWxzZSwiY29sb3IiOmZhbHNlLCJwcm9wZXJ0aWVzIjpmYWxzZSwicHJpY2UiOmZhbHNlLCJzdXBwbGllciI6ZmFsc2UsImJyYW5kIjpmYWxzZSwidGl0bGUiOmZhbHNlLCJzaXplIjpmYWxzZX0=" /> -->
   <div id="fast-dialog" class="fast-dialog zoom-anim-dialog mfp-hide">
      <div id="fast-product-content">
      </div>
   </div>
   <!-- <script type="text/javascript">
      $(document).ready(function() {
         Likeproduct.init();
      });
      
      $(document).ready(function() {
         ProductFillter.init();
      });
   </script> -->
   <script type="text/javascript">
      jQuery(function(){
          $('.v2_bnc_products_chooseview a').click(function(){
              $('.v2_bnc_products_chooseview a').removeClass('active');
              $(this).addClass('active');
              var activeTab = $(this).attr('href');
              $(activeTab).fadeIn();
              return false;
          });
      })
   </script>
   <!-- End Products page -->
</section>