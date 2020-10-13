<?php
  $doitac=$data->getbanner(10);
  $sanpham1=$data->getsanpham1($page['data'][0]['danh_muc']);
   $tongbv= count($sanpham1);
   $sotrang=ceil($tongbv/6);
   $trang= $url[1];
?>
<section id="wrapper-content" class="wrapper-content">
            <div  class="title-container">
               <div class="title">
                  <h3 class="heading" style="color:#0dc0c0 !important;">Dịch vụ</h3>
                  <nav class="bread-crumbs">
                     <ul>
                        <li><a href="<?=HOME?>" style="color:#0dc0c0 !important;">Trang chủ</a></li>
                        <li style="color:#0dc0c0 !important;">/</li>
                        <li><span class="current"><a href="product/1/<?=$url[2]?>" style="color:#0dc0c0 !important;"><?=$page['title']?></a></span></li>
                     </ul>
                  </nav>
               </div>
            </div>
            <section id="layers-widget-post-16" class="widget layers-post-widget row content-vertical-massive home-new service-page " >
               <div class="container clearfix">
                  <div class="section-title clearfix medium text-left ">
                     <h3 class="heading"><?=$page['title']?></h3>
                  </div>
               </div>
               <div class="row container list-grid">
                <?php foreach ($page['data'] as $key => $value) { ?>
                  <article class="layers-masonry-column thumbnail  column span-4  " data-cols="3">
                     <div class="thumbnail-media"><a href="product/<?=$value['url']?>"><img width="900" height="600" src="<?=$value['hinh_anh']?>" class="attachment-layers--medium" alt="tintuc11-(1)" /></a></div>
                     <div class="thumbnail-body">
                        <div class="overlay">
                           <header class="article-title">
                              <h4 class="heading"><a href="product/<?=$value['url']?>"><?=$value['name']?></a></h4>
                           </header>
                           <div class="excerpt"><?=$value['mo_ta']?></div>
                           <footer class="meta-info ">
                              <p><span class="meta-item meta-date"><i class="l-clock-o"></i><?php echo date('d/m/Y',strtotime($value['updated'])); ?></span> <span class="meta-item meta-author"><i class="l-user"></i> <a href="product/<?=$value['url']?>" tiêu đề=" admin" rel="tác giả">admin</a></span> <span class="meta-item meta-category"><i class="l-folder-open-o"></i>  <a href="product/1/<?=$url[2]?>" title=" Dịch vụ">Dịch vụ</a></span></p>
                           </footer>
                           <a href="product/<?=$value['url']?>" class="button">Xem thêm</a>
                        </div>
                     </div>
                  </article>
                 <?php } ?>


                 <nav class="navigation pagination" role="navigation">
                     <h2 class="screen-reader-text">Điều hướng các bài viết</h2>
                     <div class="nav-links">
                        <?php if ($trang>1 && $sotrang>1) {
                           echo '<a class="prev page-numbers" href="product/'.($trang-1).'/'.$url[2].'">Trước</a>';
                        } ?>
                        
                        <?php for ($t=1; $t<=$sotrang ; $t++) { ?>
                        <?php if ($t==$trang) {
                           echo '<span class="page-numbers current">'.$t.'</span>';
                        }else{
                           echo '<a class="page-numbers" href="product/'.$t.'/'.$url[2].'">'.$t.'</a>';
                        } ?>
                        <?php } ?>
                        <?php if ($trang<$sotrang) {
                           echo '<a class="next page-numbers" href="product/'.($trang+1).'/'.$url[2].'">Tiếp theo</a>';
                        } ?>
                        
                        
                     </div>
                  </nav>
                 
               </div>
            </section>
            <section class="lcam-contents-widget-section widget row content-vertical-massive lcam-widget lcam-contents-widget logo-lien-ket " id="layers-widget-lcam_contents-15">
               <!-- set overlay section -->
               <div class="lcam-contents-widget-container lcam-widget-container container">
                  <div class="lcam-carousel-container" 
                     data-mode="horizontal"
                     data-speed="500"
                     data-maxslides="4"
                     data-moveslides="1"
                     data-slidemargin="0"
                     data-randomstart=false
                     data-adaptiveheight=false
                     data-adaptiveHeightspeed="0"
                     data-touchenabled=true
                     data-auto=false
                     data-pause="4000"
                     data-autohover=false
                     data-autodelay="0"
                     data-ticker=false
                     data-tickerhover=true
                     >
                     <ul class="lcam-carousel">
                      <?php foreach ($doitac as $item) { ?>
                        <li>
                           <div id="layers-widget-lcam_contents-15-261" class="lcam-consingle-default has-image">
                              <div class="media no-push-bottom image-top medium">
                                 <!-- Featured image -->
                                 <div class="media-image ">
                                    <img width="161" height="40" src="<?=$item['hinh_anh']?>" class="attachment-full" alt="logo4" />                     
                                 </div>
                                 <!-- Media body -->
                              </div>
                              <!-- .media -->
                           </div>
                           <!-- .lcam-consingle -->
                        </li>
                       <?php } ?>
                        
                     </ul>
                     <div class="lcam-carousel-controller-center-hover">
                        <button id="#layers-widget-lcam_contents-15-prev" class="lcam-carousel-to-prev"><i class="fa fa-caret-left"></i></button>
                        <button id="#layers-widget-lcam_contents-15-next" class="lcam-carousel-to-next"><i class="fa fa-caret-right"></i></button>
                     </div>
                  </div>
                  <!-- .lcam-carousel-container -->
               </div>
               <!-- .row -->
            </section>
            <!-- .lcam-widget-section -->
            <div id="back-to-top">
               <a href="#top">Đầu trang</a>
            </div>
            <!-- back-to-top -->
         </section>