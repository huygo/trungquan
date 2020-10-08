
<script type="text/javascript">
   $(document).ready(function() {
       Likeproduct.init();
       HomeProductCategory.init();
   });
</script>
<!-- facebook -->
<div id="fb-root"></div>
<script async defer crossorigin="anonymous" src="https://connect.facebook.net/vi_VN/sdk.js#xfbml=1&version=v8.0&appId=3209642075736668&autoLogAppEvents=1" nonce="ifqzKhtE"></script>
<!-- end face -->
<!--Start of AutoAds Tracking Code-->
<script id='autoAdsMaxLead-widget-script' src='https://cdn.autoads.asia/scripts/autoads-maxlead-widget.js?business_id=6EA6405159044127AE6781B550B19987' type='text/javascript' charset='UTF-8' async></script>
<!--End of AutoAds Tracking Code-->
<script type="text/javascript">
   var urlNow = document.URL;
</script>

<script src="template/cdn-gd-v2.webbnc.net/themes/91629/statics/plugins/pjax/jquery.cookie.js"></script>
<script src="template/cdn-gd-v2.webbnc.net/themes/91629/statics/plugins/pjax/jquery.pjax.js"></script>
<link rel="stylesheet" type="text/css" href="template/cdn-gd-v2.webbnc.net/themes/91629/statics/plugins/magnific-popup/magnific-popup.css" />
<script src="template/cdn-gd-v2.webbnc.net/themes/91629/statics/plugins/magnific-popup/jquery.magnific-popup.js"></script>
<script type="text/javascript" src="template/modules/product/themes/resource/js/productFast.js"></script>

<script src="template/modules/product/themes/resource/js/likeproduct.js"></script>
<link rel="stylesheet" type="text/css" href="template/modules/product/themes/resource/css/toastr.css" />
<script src="template/modules/product/themes/resource/js/toastr.js"></script>
<script async src="template/modules/product/themes/resource/js/homeProductCategory.js"></script>
<script type="text/javascript" src="template/modules/product/themes/resource/js/productFillter.js"></script>
<script async type="text/javascript" src="template/modules/product/themes/resource/js/productrater.js"></script>
 <script src="template/cdn-gd-v2.webbnc.net/themes/91629/statics/plugins/ion.rangeSlider-2.0.2/js/ion-rangeSlider/ion.rangeSlider.js" type="text/javascript"></script>
 <script type="text/javascript" src="template/cdn-gd-v2.webbnc.net/modules/product/themes/resource/js/productSearch.js"></script>
<div id="fast-container"></div>
<div id="fast-dialog" class="zoom-anim-dialog mfp-hide">
   <div id="fast-product-content"></div>
</div>
<script>
              function addcart(id){
                alert('Đã thêm sản phẩm vào giỏ hàng');
                  $.post("payment",{'id':id}, function(data){
                  $("#abc").load("<?=HOME?>/header #abc");
                  $("#cartxx").load("<?=HOME?>/header #cartxx");

                  // window.location.reload();
                 });
              }
             
              function deletecart(id){
                $.post("updatecart",{'id':id,'num':0}, function(data){
                   //load lại sau khi update
                  
                   $("#cartxx").load("<?=HOME?>/header #cartxx");
                   
                });
              }
              function addcart1(id){
                 $.post("payment",{'id':id}, function(data){
                  window.location.assign('payment');
                });
              }
            </script>
<script type="text/javascript">
   $(document).ready(function() {
       Likeproduct.init();
   });
   $(document).ready(function() {
       ProductFillter.init();
   });
</script>
</div>
</div>
</section>
<style>
   .hotlinebnc {
   position: fixed;
   height: 25px;
   background: #ff0000;
   width: 100%;
   box-shadow: 0 0 3px rgba(0, 0, 0, 0.34);
   color: #FFFF00;
   line-height: 35px;
   z-index: 400;
   bottom: 0;
   display: block;
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
   font-size: 20px;
   color: #FFEB00;
   }
   .hotline-phone {
   color: #FFF;
   font-size: 20px;
   font-weight: bold;
   }
   .hotline-email {}
   .hotlinebnc a {
   color: #fff;
   }
   @media only screen and (max-width:992px) {
   .hotlinebnc {
   bottom: 25px;
   }
   .col_2 {
   padding: 0;
   background: red;
   }
   .col_2.left-hotline {
   margin-left: 20px;
   }
   .left-hotline {
   height: 25px;
   }
   }
</style>
<div class="hotlinebnc">
   <div class="col-md-6 col-xs-12">
      <div class="left-hotline" style="margin-left: 0px;"><span class="glyphicon glyphicon-earphone"></span>Hotline: <a href="tel:<?=$thongtin[2]['value']?>"><?=$thongtin[2]['value']?></a> - <a href="tel:+<?=$thongtin[8]['value']?>"><?=$thongtin[8]['value']?></a>
      </div>
   </div>
   <div class="col-md-6 col-xs-12 col_2">
      <div class="left-hotline" style="margin-left: 40px;"><span class="glyphicon glyphicon-earphone"></span>Hotline: <a href="tel:+<?=$thongtin[2]['value']?>"><?=$thongtin[2]['value']?></a> - <a href="tel:+<?=$thongtin[8]['value']?>"><?=$thongtin[8]['value']?></a>
      </div>
   </div>
</div>
<!--Footer-->
<footer class="v2_bnc_footer">
   <div class="container">
      <div class="row">
         <div class="footer-bottom-top">
            <div class="col-md-3 col-sm-12 col-xs-12">
               <!-- Info Company -->
               <div class="v2_bnc_footer_info_company widget-bottom">
                  <div style="text-align: center;"><span style="color:rgb(0, 255, 255)"><span style="font-size:16px"><strong>   <img alt="" src="<?=$thongtin[7]['value']?>" style="height: 65px; width: 200px;" /></strong></span></span><br
                     />
                  </div>
                  <div style="text-align: center;"><strong style="color: rgb(0, 0, 128); font-size: 20px;"><?=$thongtin[0]['value']?></strong></div>
                  <div style="text-align: center;"><strong><span style="font-size:14px;"><span style="color:rgb(0, 0, 205);">Đc: <?=$thongtin[1]['value']?><br  />
                     ĐT:</span><span style="color:rgb(255, 0, 0);"> </span><span style="text-align: justify;"><a href="tel:<?=$thongtin[2]['value']?>"><span style="color:rgb(255, 0, 0);"><?=$thongtin[2]['value']?></span></a></span><span style="color:rgb(255, 0, 0);"> - </span><a href="tel:<?=$thongtin[8]['value']?>"><span style="color:rgb(255, 0, 0);"><?=$thongtin[8]['value']?></span></a><br  />
                     
                  </div>
                  <div style="text-align: center;"><strong><span style="font-size:14px;"><span style="color:rgb(0, 0, 205);">Email: </span><a href="mailto:<?=$thongtin[3]['value']?>"><span style="color:rgb(0, 0, 205);"><?=$thongtin[3]['value']?></span></a><br  />
                     <span style="color:rgb(0, 0, 205);">Website: </span><a href="<?=HOME?>"><span style="color:rgb(0, 0, 205);"><?=HOME?></span></a><span style="color:rgb(0, 0, 205);"> </strong>
                  </div>
               </div>
               <!-- End Info Company -->
            </div>
            <div class="col-md-3 col-sm-12 col-xs-12">
               <!-- Footer Right -->
               <div class="v2_bnc_footer_right_top row">
                  <div class="col-xs-12">
                     <div class="widget-bottom">
                        <h4 class="v2_bnc_footer_title">Sản phẩm</h4>
                        <ul class="v2_bnc_footer_links">
                          <?php foreach ($danhmuc as  $value) { ?>
                           <li>
                              <a href="product/1/<?=$value['url']?>"><i class="fa fa-angle-double-right"></i><?=$value['name']?></a>
                           </li>
                           <?php } ?>
                        </ul>
                     </div>
                  </div>
               </div>
               <!-- End Footer Right -->
            </div>
            <div class="col-md-3 col-sm-12 col-xs-12">
               <div class="v2_bnc_footer_social_maps margin-bottom-30">
                  <h4 class="v2_bnc_footer_title">Bản đồ</h4>
                  <div>
                    <iframe frameborder="0" height="250" scrolling="no" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3725.077604686441!2d105.86328841488269!3d20.9895260860196!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3135ac1a22f105eb%3A0x5105c4650ab0cba7!2zODcgTMSpbmggTmFtLCBNYWkgxJDhu5luZywgSG_DoG5nIE1haSwgSMOgIE7hu5lpLCBWaeG7h3QgTmFt!5e0!3m2!1svi!2s!4v1601786673524!5m2!1svi!2s"
                     style="border:0" width="100%"></iframe>
                   </div>
               </div>
            </div>
            <div class="col-md-3 col-sm-12 col-xs-12">
               <div class="v2_bnc_footer_social_maps margin-bottom-30">
                  <h4 class="v2_bnc_footer_title">Facebook</h4>
                  <div>
                    <div class="fb-page" data-href="https://www.facebook.com/Lalaland-105329694589406" data-tabs="timeline" data-width="" data-height="250" data-small-header="false" data-adapt-container-width="true" data-hide-cover="false" data-show-facepile="true"><blockquote cite="https://www.facebook.com/Lalaland-105329694589406" class="fb-xfbml-parse-ignore"><a href="https://www.facebook.com/Lalaland-105329694589406">Lalaland</a></blockquote></div>
                   </div>
               </div>
            </div>
         </div>
      </div>
   </div>
   <div class="v2_bnc_footer_bottom">
      <div class="container">
         <p class="copyright">
            <span>Copyrights © 2020, Thiết Kế Bởi <a href="https://thuonghieuweb.com/" target="_blank">Thương Hiệu Web</a></span>
         </p>
      </div>
   </div>
</footer>
<!--End Footer-->
<!-- Phone mobile -->
<div class="coccoc-alo-phone coccoc-alo-green coccoc-alo-show" id="coccoc-alo-phoneIcon" style="right:-80px; bottom: 60%;">
   <a href='tel:<?=$thongtin[2]['value']?>'>
      <div class="coccoc-alo-ph-circle"></div>
      <div class="coccoc-alo-ph-circle-fill"></div>
      <div class="coccoc-alo-ph-img-circle"></div>
   </a>
</div>
<!-- End Phone mobile -->
<!-- Scroll To Top -->
<div class="v2_bnc_scrolltop">
   <a class="v2_bnc_icon_scrolltop" title="Lên đầu trang !">
   <i class="fa fa-angle-double-up fa-2x"></i>
   </a>
</div>
<!-- End Scroll To Top -->
<!-- Adv Rich Meida -->
<div class="hidden-xs">
</div>
<script>
   jQuery(function($) {
       $('#show').hide();
       $('#close').click(function(e) {
           $('#rich-media').hide('slow');
           return false;
       });
       $('#hide').click(function(e) {
           $('#show').show('slow');
           $('#hide').hide('slow');
           $('#rich-media-item').height(0);
           return false;
       });
       $('#show').click(function(e) {
           $('#hide').show('slow');
           $('#show').hide('slow');
           $('#rich-media-item').height(100);
           return false;
       });
   });
</script>
<!-- End Adv Rich Meida -->
<script type="text/javascript" src="template/cdn-gd-v2.webbnc.net/template/modules/product/themes/resource/js/product.js"></script>
<script type="text/javascript">
   $(document).ready(function() {
       $('body').data('home_url', 'index.html');
       //$('body').data('page_url', '');
       $('body').data('extension', '.html');
       Product.init();
       WebCommon.init();
       // alert("-Golbal aler- "+$('body').data('home_url'));
   });
</script>
</div>
<script type="text/javascript">
   $(document).ready(function() {
       $('.close').click(function() {
           $('.modal').css('display', 'none');
       });
   });
</script>
<!-- End Full Code -->
<!-- Include JS -->
<script src="template/cdn-gd-v2.webbnc.net/themes/91629/statics/plugins/bootstrap/js/bootstrap.js"></script>
<script type="text/javascript" src="template/cdn-gd-v2.webbnc.net/themes/91629/statics/scripts/started_js.js"></script>
<script type="text/javascript" src="template/cdn-gd-v2.webbnc.net/themes/91629/statics/scripts/webcommon.js"></script>
<script type="text/javascript" src="template/cdn-gd-v2.webbnc.net/themes/91629/statics/scripts/jquery.validationEngine.js"></script>
<script type="text/javascript" src="template/cdn-gd-v2.webbnc.net/themes/91629/statics/scripts/jquery.validationEngine-vi.js"></script>
<script type="text/javascript" src="template/cdn-gd-v2.webbnc.net/themes/91629/statics/plugins/loading-overlay/loading-overlay.min.js"></script>
<script type="text/javascript" src="template/cdn-gd-v2.webbnc.net/themes/91629/statics/plugins/loading-overlay/load.js"></script>
<script type="text/javascript" src="template/cdn-gd-v2.webbnc.net/themes/91629/statics/scripts/fastCart/fastCart.js"></script>
<link rel="stylesheet" href="template/cdn-gd-v2.webbnc.net/themes/91629/statics/plugins/fancybox/jquery.fancybox.css" />
<script src="template/cdn-gd-v2.webbnc.net/themes/91629/statics/plugins/fancybox/jquery.fancybox.pack.js" type="text/javascript"></script>
<script type="text/javascript" src="template/cdn-gd-v2.webbnc.net/themes/91629/statics/plugins/elevatezoom/jquery.elevatezoom.js"></script>
<script type="text/javascript" src="template/cdn-gd-v2.webbnc.net/themes/91629/statics/plugins/pjax/jquery.cookie.js"></script>
<script type="text/javascript" src="template/cdn-gd-v2.webbnc.net/themes/91629/statics/scripts/search.js"></script>
<!-- Camera SlideShow -->
<script type='text/javascript' src="template/cdn-gd-v2.webbnc.net/themes/91629/statics/plugins/camera-slideshow/jquery.easing.1.3.js"></script>
<script type='text/javascript' src="template/cdn-gd-v2.webbnc.net/themes/91629/statics/plugins/camera-slideshow/camera.min.js"></script>
<!-- End Camera SlideShow -->
<!-- End Include JS -->
<!-- Google Code dành cho Thẻ tiếp thị lại -->
<!--------------------------------------------------
   Không thể liên kết thẻ tiếp thị lại với thông tin nhận dạng cá nhân hay đặt thẻ tiếp thị lại trên các trang có liên quan đến danh mục nhạy cảm. Xem thêm thông tin và hướng dẫn về cách thiết lập thẻ trên: http://google.com/ads/remarketingsetup
   --------------------------------------------------->
<script type='text/javascript'>
   /* <![CDATA[ */
   var google_conversion_id = 805917957;
   var google_custom_params = window.google_tag_params;
   var google_remarketing_only = true;
   /* ]]> */
</script>
<script type='text/javascript' src='template/www.googleadservices.com/pagead/f.txt'></script>
<noscript>
   <div style='display:inline;'>
      <img height='1' width='1' style='border-style:none;' alt='' src='http://googleads.g.doubleclick.net/pagead/viewthroughconversion/805917957/?guid=ON&amp;script=0'/>
   </div>
</noscript>
<script type="text/javascript">
   function BNCcallback(data) {
       console.log(data);
   }
   var url = document.URL;
   var idW = '8176';
   var uid = '';
   var title = document.title;
   
   var appsScript = document.createElement('script');
   appsScript.src = "template/apps.webbnc.vn/app3/themes/default/js/iframeResizer.js";
   document.body.appendChild(appsScript);
   
   var appsScript = document.createElement('script');
   appsScript.src = "https://apps.webbnc.vn/app3/?token=t2d32243i202r2x272y2v2c362e3h2731223e2d3q2v112i11213w2c1s202t1i1g2v1l1r242e16233h2g2e283p2f2h1334223i293g2v1l163p2z1y19342g2a2w2q2b2d1y2q2f1a2c1q2e1g18362e3u1g152c292b3h2e1c18362c2d2b3i2f11283i202e293i2d3d1y2p2z1k183r2f1u1w242f28333h2f2623342g262w2q2x2c1c342c2x18362e3h2f172w1x1d14213w2c1q2f2b3x2u292p1p1";
   setTimeout(function() {
       document.body.appendChild(appsScript);
   }, 1000);
</script>
</body>
<!-- Mirrored from chauminh.vn/ by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 01 Oct 2020 07:45:49 GMT -->
</html>