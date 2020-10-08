<?php
  $danhmuc=$data->danhmucsp();
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html lang="vi" xmlns="http://www.w3.org/1999/xhtml">
   <!-- Edit By @DTM -->
   <!-- Mirrored from chauminh.vn/ by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 01 Oct 2020 07:44:35 GMT -->
   <!-- Added by HTTrack -->
   <meta http-equiv="content-type" content="text/html;charset=UTF-8" />
   <!-- /Added by HTTrack -->
   <head>
      <!-- Include Header Meta -->
      <base href="<?php echo HOME ?>/">
      <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
      <meta name="viewport" content="width=device-width, initial-scale=1.0" />
       <title>
              <?php echo $page['title'] ?>
      </title>
      <meta name="description" content="<?php echo $page['description']?>" />
      <meta name="keywords" content="<?php echo $page['description']?>">
      <meta name="robots" content="INDEX, FOLLOW" />
      <link rel="shortcut icon" href="template/cdn-img-v2.webbnc.net/uploadv2/web/81/8176/informationbasic/2017/11/22/02/16/1511316633_khan-bong-chau-minh-khan-bong-gia-dinh-khan-spa-kh_1.png" />
      <link rel="icon" href="template/cdn-img-v2.webbnc.net/uploadv2/web/81/8176/informationbasic/2017/11/22/02/16/1511316633_khan-bong-chau-minh-khan-bong-gia-dinh-khan-spa-kh_1.png" />
      <meta property="og:url"                content="<?php echo HOME.'/'.$thisurl ?>" />
      <meta property="og:type"               content="article" />
      <meta property="og:title"              content="<?php echo $page['title'] ?>" />
      <meta property="og:description"        content="<?php echo $page['description']?>" />
      <?php if ($page['image']!='') {
            echo '<meta property="og:image"    content="'.$page['image'].'" />';
      }else{
            echo '<meta property="og:image"      content="'.$thongtin[7]['value'].'" />';
      } ?>
      <meta property="og:image:width" content="620" />
      <!-- Global Site Tag (gtag.js) - Google Analytics -->
      <script async src="https://www.googletagmanager.com/gtag/js?id=UA-103014765-1"></script>
      <script>
         window.dataLayer = window.dataLayer || [];
         
         function gtag() {
             dataLayer.push(arguments)
         };
         gtag('js', new Date());
         
         gtag('config', 'UA-103014765-1');
      </script>
      <!-- Global site tag (gtag.js) - Google Analytics -->
      <script async src="https://www.googletagmanager.com/gtag/js?id=UA-118565149-1"></script>
      <script>
         window.dataLayer = window.dataLayer || [];
         
         function gtag() {
             dataLayer.push(arguments);
         }
         gtag('js', new Date());
         
         gtag('config', 'UA-118565149-1');
      </script>
      
      <script async src="template/pagead2.googlesyndication.com/pagead/js/f.txt"></script>
      <script>
         (adsbygoogle = window.adsbygoogle || []).push({
             google_ad_client: "ca-pub-6075328044146130",
             enable_page_level_ads: true
         });
      </script>
      <!-- Global site tag (gtag.js) - Google Ads: 805917957 -->
      <script async src="https://www.googletagmanager.com/gtag/js?id=AW-805917957"></script>
      <script>
         window.dataLayer = window.dataLayer || [];
         
         function gtag() {
             dataLayer.push(arguments);
         }
         gtag('js', new Date());
         
         gtag('config', 'AW-805917957');
      </script>
      <script>
         gtag('config', 'AW-805917957/7Mt-CP6fjKIBEIWqpYAD', {
             'phone_conversion_number': '0961430130'
         });
      </script>
      <!-- Event snippet for Nhấp chuột trên di động conversion page
         In your html page, add the snippet and call gtag_report_conversion when someone clicks on the chosen link or button. -->
      <script>
         function gtag_report_conversion(url) {
             var callback = function() {
                 if (typeof(url) != 'undefined') {
                     window.location = url;
                 }
             };
             gtag('event', 'conversion', {
                 'send_to': 'AW-805917957/rjJ5CLGtl6IBEIWqpYAD',
                 'event_callback': callback
             });
             return false;
         }
      </script>
      <!-- Global site tag (gtag.js) - Google Analytics -->
      <script async src="https://www.googletagmanager.com/gtag/js?id=UA-142802666-1"></script>
      <script>
         window.dataLayer = window.dataLayer || [];
         
         function gtag() {
             dataLayer.push(arguments);
         }
         gtag('js', new Date());
         
         gtag('config', 'UA-142802666-1');
      </script>
      <style>
         .aml_dk-style-default.aml_dk-bottom-right {
         bottom: 140px !important;
         }
      </style>
     <!--  <script id='autoAdsMaxLead-widget-script' src='template/cdn.autoads.asia/scripts/autoads-maxlead-widget7185.js?business_id=fe6a98566faa4e7aaca5260c4e748da5' type='text/javascript' charset='UTF-8' async></script> -->
      <!-- End Include Header Meta-->
      <!-- Include CSS -->
      <!-- Reset Css-->
      <link href="template/cdn-gd-v2.webbnc.net/themes/91629/statics/css/reset.css" rel="stylesheet" media="all">
      <!-- End Reset Css-->
      <!-- Bootstrap Css -->
      <link rel="stylesheet" href="template/cdn-gd-v2.webbnc.net/themes/91629/statics/plugins/bootstrap/css/bootstrap.min3860.css?v=1">
      <!-- End Bootstrap Css -->
      <!-- Css -->
      <link href="template/themes/91629/statics/plugins/owl-carousel/owl.carousel.css" rel="stylesheet" media="all">
      <!-- <link href="http://cdn-gd-v2.webbnc.net/themes/91629/statics/plugins/camera-slideshow/camera.css" rel="stylesheet" media="screen"> -->
      <!-- <link href="http://cdn-gd-v2.webbnc.net/themes/91629/statics/plugins/wow/animate.css" rel="stylesheet" media="screen"> -->
      <!-- <link href="http://cdn-gd-v2.webbnc.net/themes/91629/statics/css/style.css?v=9" rel="stylesheet" media="screen"> -->
      <!-- <link href="http://cdn-gd-v2.webbnc.net/themes/91629/statics/css/mobile.css?v=7" rel="stylesheet" media="screen"> -->
      <link href="template/cdn-gd-v2.webbnc.net/themes/91629/statics/css/style.min30f4.css?v=3" rel="stylesheet" media="all">
      <link rel="stylesheet" type="text/css" href="template/modules/product/themes/resource/css/likeproduct.css" />
      <link rel="stylesheet" type="text/css" href="template/modules/product/themes/resource/css/BNCcart.css" />
      <!-- End Css -->
      <link rel="stylesheet" href="template/cdn-gd-v2.webbnc.net/themes/91629/statics/plugins/ion.rangeSlider-2.0.2/css/ion.rangeSlider.css" />
      <link rel="stylesheet" href="template/cdn-gd-v2.webbnc.net/themes/91629/statics/plugins/ion.rangeSlider-2.0.2/css/ion.rangeSlider.skinFlat.css" />
      <!-- FontIcon -->
      <link href="template/maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css" rel="stylesheet" media="all">
      <link rel="stylesheet" href="template/cdnjs.cloudflare.com/ajax/libs/simple-line-icons/2.3.2/css/simple-line-icons.css">
      <!-- End FontIcon -->
      <!-- Google Font -->
      <link href="https://fonts.googleapis.com/css?family=Lato:100,100i,300,300i,400,400i,700,700i,900,900i" rel="stylesheet">
      <link href="https://fonts.googleapis.com/css?family=Roboto+Condensed:300,300i,400,400i,700,700i&amp;subset=vietnamese" rel="stylesheet">
      <!-- End Google Font -->
      <!--- Css Validation -->
      <link href="template/cdn-gd-v2.webbnc.net/themes/91629/statics/css/validationEngine.jquery.css" rel="stylesheet">
      <!--- End Css Validation -->
      <!--- Css Loading -->
      <!-- <link href="http://cdn-gd-v2.webbnc.net/themes/91629/statics/plugins/loading-overlay/loading.css" rel="stylesheet" media="screen"> -->
      <!-- <link href="http://cdn-gd-v2.webbnc.net/themes/91629/statics/plugins/slider-range/jquery.nouislider.min.css" rel="stylesheet"> -->
      <!--- End Css Loading -->
      <!-- JS -->
      <script type="text/javascript" src="template/cdn-gd-v2.webbnc.net/themes/91629/statics/scripts/jquery.min.js"></script>
      <script async type="text/javascript" src="template/cdn-gd-v2.webbnc.net/themes/91629/statics/scripts/jwplayer.js"></script>
      <script async src="template/cdn-gd-v2.webbnc.net/themes/91629/statics/plugins/slider-range/jquery.nouislider.all.min.js"></script>
      <!-- <script src="http://cdn-gd-v2.webbnc.net/themes//91629/statics/plugins/wow/wow.min_.js"></script> -->
      <script src="template/cdn-gd-v2.webbnc.net/themes/91629/statics/plugins/owl-carousel/owl.carousel.js"></script>
      <script async type="text/javascript" src="template/cdn-gd-v2.webbnc.net/themes/91629/statics/scripts/js_customs.js"></script>
      <!-- End JS -->
      <script>
         //new WOW().init();
      </script>
      <!-- End Include CSS -->
   </head>
   <body style="overflow: hidden">
    
      <!-- Include popup so sanh -->
      <!-- So sánh sánh sản phẩm -->
      <div id="f-compare" status="closed">
         <div class="f-compare-title"><i></i><span>So sánh sản phẩm</span> </div>
         <div class="f-compare-body">
            <ul class="f-compare-ul no-margin no-padding">
            </ul>
            <div class="f-compare-info"><span id="compare-notify"></span></div>
            <div class="f-compare-button" style="display: none;"> <a href="product-compare.html">So sánh </a> </div>
         </div>
      </div>
      <!-- End So sánh sánh sản phẩm -->
      <!-- End include popup so sanh-->
      <!-- Full Code -->
      <h1 style="display: none"><?=$thongtin[0]['value']?></h1>
      <div class="wrapper" style="position: relative; overflow: hidden">
      <!-- Header -->
      <header class="v2_bnc_header ">
         <!-- Header Top -->
         <div class="v2_bnc_header_top">
            <div class="container">
               <div class="row">
                  <div class="col-xs-12 col-sm-12 col-md-3 col-lg-3">
                     <!-- Logo -->
                     <div id="logo">
                        <a href="<?=HOME?>" rel="nofollow" class="v2_bnc_logo" title='<?=$thongtin[0]['value']?>'>
                        <img src="<?=$thongtin[7]['value']?>" width="234" height="78" class="img-responsive" alt='<?=$thongtin[0]['value']?>' />
                        </a>
                     </div>
                     <!-- End Logo -->
                  </div>
                  <div class="v2_bnc_search_cart_mobile full-xs col-xs-12 col-sm-12 col-md-9 col-lg-9">
                     <!-- Menu Mobile -->
                     <div class="v2_bnc_menu_mobile hidden-lg hidden-md visible-sm visible-xs">
                        <section class="button_menu_mobile">
                           <div id="nav_list">
                              <span class="menu-line menu-line-1"></span>
                              <span class="menu-line menu-line-2"></span>
                              <span class="menu-line menu-line-3"></span>
                           </div>
                        </section>
                        <nav class="menutop">
                           <div class="menu-top-custom">
                              <div class="navbar-collapse pushmenu pushmenu-left">
                                 <ul class="nav navbar-nav">
                                    <li <?php if ($url[0]=='') echo 'class="active"'; ?> >
                                       <a class="txt" href="<?=HOME?>">Trang chủ</a>
                                    </li>
                                    <li <?php if ($url[0]=='about') echo 'class="active"'; ?>>
                                       <a class="txt" href="about">Giới thiệu</a>
                                    </li>
                                    <li class="parent" <?php if ($url[0]=='product') echo 'class="active"'; ?>>
                                       <a class="txt" href="trang-san-pham-khan-bong-Chau-Minh.html">SẢN PHẨM</a>
                                       <div class="top-menu-new">
                                          <ul>
                                            <?php foreach ($danhmuc as $value) { ?>
                                             <li class="parent" >
                                                <a class="v2_link_submenu_1 " href="product/1/<?=$value['url']?>" title="<?=$value['name']?> "><?=$value['name']?></a>
                                             </li>
                                             <?php } ?>
                                          </ul>
                                       </div>
                                    </li>
                                    <li <?php if ($url[0]=='blog1') echo 'class="active"'; ?>>
                                       <a class="txt" href="blog1">Tin tức</a>
                                    </li>
                                    <li <?php if ($url[0]=='muahang') echo 'class="active"'; ?>>
                                       <a class="txt" href="muahang">Hướng dẫn mua hàng</a>
                                    </li>
                                    <li <?php if ($url[0]=='lienhe') echo 'class="active"'; ?>>
                                       <a class="txt" href="lienhe">Liên hệ</a>
                                    </li>
                                 </ul>
                              </div>
                           </div>
                        </nav>
                     </div>
                     <!-- End Menu Mobile -->
                     <!-- Login and Register -->
                     <div class="v2_bnc_login_register hidden">
                        <i class="icon-user icons"></i>
                        <div class="v2_bnc_login_account">
                           <ul class="v2_bnc_login_bar">
                              <li><a href="login" rel="nofollow"><i class="fa fa-user"></i> Đăng nhập</a>
                              </li>
                              <li><a href="dangki" rel="nofollow"><i class="fa fa-user-plus"></i> Đăng ký</a>
                              </li>
                           </ul>
                        </div>
                     </div>
                     <!-- End Login and Register -->
                     <!-- Cart -->
                     <div id="abc">
                     <?php if (isset($_SESSION['cart'])) {
                     $numbercart=0;
                     foreach ($_SESSION['cart'] as $key => $item) {
                                          $numbercart ++;} ?>
                     <div class="v2_bnc_cart_main pull-right" id="cartxx">
                        <div class="f-miniCart-miniv2" data-status="hide" style="right: -250px;">
                           <div class="f-miniCart-miniv2-toolbar">
                              <div class="miniv2-toolbar-close" style="visibility: hidden;"><span>×</span></div>
                              <div class="miniv2-toolbar-name">
                                 <a class="miniv2-toolbar-barclick">
                                 <span class="name_cart hidden">Giỏ hàng</span>
                                 <span class="miniv2-toolbar-count"><?=$numbercart?></span>
                                 </a>
                              </div>
                           </div>
                           <div class="wrap_cart">
                              <div class="miniCart-top">
                                 <span>Giỏ hàng của tôi (<?=$numbercart?>)</span>
                              </div>
                              <div class="miniCart-body">
                              <ul class="miniCartItem">
                                 <?php $total=0; foreach ($_SESSION['cart'] as $key => $gh) { ?>
                                 <li>
                                    <a class="miniCartItemImg" href="product/<?=$gh['url']?>" target="_blank">
                                       <img src="<?=$gh['hinhanh']?>" onerror="this.onerror=null;this.src='<?=$gh['hinhanh']?>'" alt="Set khăn quà tặng mừng ngày nhà giáo Việt Nam (tự chọn màu khăn)">
                                    </a>
                                    <p><a title="<?=$gh['name']?>" href="product/<?=$gh['url']?>"><?=$gh['name']?></a></p>
                                    <p><b>SL: <?=$gh['num']?> x </b><b><?=number_format($gh['price'])?></b><a href="javascript:void(0)" onclick="deletecart(<?=$key?>)"><i class="removeCartItem fa fa-trash-o"  title="Xóa sản phẩm"></i></a></p>
                                                              
                                    <i class="clearfix"></i>
                                 </li>
                                 <?php  $tong=$gh['price']*$gh['num'];
                                             $total += $tong; } ?>
                                 </ul>
                                 <p class="minicartItemTotal">
                                 <b>Tổng tiền:</b><b><?php echo number_format($total); ?> đ</b>
                                 </p>
                                 <p class="minicartItemPay">
                                    <a href="payment" id="payment" class="btnRed">Tiến hành đặt hàng</a>
                                 </p>
                                    </div>
                           </div>
                        </div>
                     </div>
                  <?php }else{ ?>
                     <div class="v2_bnc_cart_main pull-right">
                        <div class="f-miniCart-miniv2" data-status="hide" style="right: -250px;">
                           <div class="f-miniCart-miniv2-toolbar">
                              <div class="miniv2-toolbar-close" style="visibility: hidden;"><span>×</span></div>
                              <div class="miniv2-toolbar-name">
                                 <a class="miniv2-toolbar-barclick">
                                 <span class="name_cart hidden">Giỏ hàng</span>
                                 <span class="miniv2-toolbar-count">0</span>
                                 </a>
                              </div>
                           </div>
                           <div class="wrap_cart">
                              <div class="miniCart-top">
                                 <span>Giỏ hàng của tôi (0)</span>
                              </div>
                              <div class="miniCart-body">
                                 <ul class="miniCartItem">
                                    <li>
                                       <center>Hiện chưa có sản phẩm nào trong giỏ hàng của bạn</center>
                                    </li>
                                 </ul>
                              </div>
                           </div>
                        </div>
                     </div>
                  <?php } ?>
                     </div>
                     <!-- End Cart -->
                     <!-- Search -->
                     <div class="v2_bnc_search pull-right">
                        <i class="icon-magnifier icons icons-click-search"></i>
                        <div id="search-box" class="v2_bnc_search_main">
                           <form role="search" action="search" method="POST">
                              <div class="search search-area">
                                 <div class="input-group v2_bnc_search_border">
                                   
                                    <input type="search" class="form-control search-field" placeholder="Nhập nội dung tìm kiếm..." name="key" id="BNC_txt_search" value="">
                                    <div class="input-group-btn"> <a href="javascript:void(0);" class="search-button" id="BNC_btn_search"><i class="icon-magnifier icons"></i></a> </div>
                                    
                                 </div>
                              </div>
                           </form>
                        </div>
                     </div>
                     <!-- End Search -->
                     <!-- Menu Main -->
                     <nav class="v2_bnc_menu_main hidden-sm hidden-xs pull-right">
                        <div class="v2_menu_top">
                           <ul class="v2_menu_top_ul nxtActiveMenu">
                              <li <?php if ($url[0]=='') echo 'class="active"'; ?>>
                                 <a class="v2_menu_first_link" href="<?=HOME?>">
                                 Trang chủ</a>
                              </li>
                              <li <?php if ($url[0]=='about') echo 'class="active"'; ?>>
                                 <a class="v2_menu_first_link" href="about">
                                 Giới thiệu</a>
                              </li>
                              <li class="parent" <?php if ($url[0]=='product') echo 'class="active"'; ?>>
                                 <a class="v2_menu_first_link" href="#">
                                 SẢN PHẨM</a>
                                 <ul class="v2_menu_top_sub">
                                    <?php foreach ($danhmuc as $item) { ?>
                                    <li>
                                       <a href="product/1/<?=$item['url']?>" title="<?=$item['name']?>"><?=$item['name']?></a>
                                    </li>
                                    <?php } ?>
                                 </ul>
                              </li>
                              <li <?php if ($url[0]=='blog1') echo 'class="active"'; ?>>
                                 <a class="v2_menu_first_link" href="blog1">
                                 Tin tức</a>
                              </li>
                              <li <?php if ($url[0]=='muahang') echo 'class="active"'; ?>>
                                 <a class="v2_menu_first_link" href="muahang">
                                 Hướng dẫn mua hàng</a>
                              </li>
                              <li <?php if ($url[0]=='lienhe') echo 'class="active"'; ?>>
                                 <a class="v2_menu_first_link" href="lienhe">
                                 Liên hệ</a>
                              </li>
                           </ul>
                        </div>
                        <script type="text/javascript">
                           function NxtActiveMenu() {
                               var urlNow = window.location.href;
                               var allA = $('.nxtActiveMenu').find('a');
                               $.each(allA, function(k, v) {
                                   var self = $(this);
                                   if (self.attr('href') == urlNow) {
                                       $('.nxtActiveMenu').find('li.active').removeClass('active');
                                       self.parents('li').addClass('active');
                                   }
                               });
                           };
                           NxtActiveMenu();
                        </script>
                     </nav>
                     <!-- End Menu Main -->
                  </div>
               </div>
            </div>
         </div>

         <!-- End Header Top -->
      </header>
      <style>
         body {
         background: #ffffff url('http://cdn-img-v2.webbnc.net/0');
         background-position: center top;
         background-repeat: repeat;
         }
      </style>
      <!-- End Header -->
