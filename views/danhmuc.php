<?php
   $baiviet1=$data->getbaiviet();
   $noibat=$data->getnoibat();
   $danhmuc=$data->getdanhmucall();
   $hoidap=$data->doingu(17);
   $baiviet=$page['data'];
   $tongbv= count($baiviet1);
     $sotrang=ceil($tongbv/6);
     if (isset($_GET['p'])) {
      $trang= $_GET['p'];
     }else{
      $trang=1;
     }
?>
<section id="wrapper-content" class="wrapper-content">
             <div class="title-container">
                <div class="title">
                    <h3 class="heading" style="color:#0dc0c0;">Bài viết</h3>

                    <nav class="bread-crumbs" style="color:#0dc0c0;">
                        <ul>
                            <li><a href="<?=HOME?>" style="color:#0dc0c0 !important;">Trang chủ</a></li>



                            <li>/</li>
                            <li><span class="current"><a href="blog" style="color:#0dc0c0 !important;">Bài viết</a></span></li>

                        </ul>
                    </nav>
                </div>
            </div>
            <section class="container content-main archive clearfix">
               <div class="column span-8">
                  <?php foreach ($baiviet as $value) { ?>
                  <article id="post-688" class="post-news-item span-6 column post-688 post type-post status-publish format-standard has-post-thumbnail hentry category-tin-tuc">
                     <div class="title-category">
                        <div class='date'><span class='day'> <?php echo date('d/m',strtotime($value['ngay_dang'])); ?></span><span class='year'><?php echo date('Y',strtotime($value['ngay_dang'])); ?></span></div>
                     </div>
                     <div class="thumbnail push-bottom"><a href="blog/<?=$value['url']?>"><img width="615" height="409" src="<?=$value['hinh_anh']?>" class="attachment-large" alt="<?=$value['name']?>" /></a></div>
                     <div class="post-content">
                        <header class="article-title">
                           <h2 class="heading"><a href="blog/<?=$value['url']?>"><?=$value['name']?></a></h2>
                        </header>
                        <div class="copy">
                           <p class="excerpt"><?=$value['mo_ta']?></p>
                        </div>
                        <!-- <meta-info class="meta-info">
                           <p><span class="meta-item meta-date"><i class="l-clock-o"></i> 24/08/2016</span> <span class="meta-item meta-author"><i class="l-user"></i> <a href="index.html" tiêu đề=" admin" rel="tác giả">admin</a></span> <span class="meta-item meta-category"><i class="l-folder-open-o"></i>  <a href="template/chuyen-muc/tin-tuc/index.html" title=" Tin tức">Tin tức</a></span></p>
                        </meta-info> -->
                     </div>
                     <div class="button-post">
                        <div class="readmore"><a href="blog/<?=$value['url']?>" class="button">Xem thêm</a></div>
                        <div class="doc-social-wrap">
                           <i class="ion-android-share-alt share-social share-toggle"></i>
                           <ul class="doc-social share">
                              <li><a href="https://www.facebook.com/"><i class="fa fa-facebook"></i></a></li>
                              <li><a href="https://twitter.com/"><i class="fa fa-twitter"></i></a></li>
                              <li><a href="https://www.google.com.vn/"><i class="fa fa-google-plus"></i></a></li>
                              <li><a href="https://www.pinterest.com/"><i class="fa fa-pinterest-p"></i></a></li>
                           </ul>
                        </div>
                     </div>
                  </article>
                  <?php } ?>
                  
                  
                 
                  
                  <nav class="navigation pagination" role="navigation">
                     <h2 class="screen-reader-text">Điều hướng các bài viết</h2>
                     <div class="nav-links">
                        <?php if ($trang>1 && $sotrang>1) {
                           echo '<a class="prev page-numbers" href="blog?p='.($trang-1).'">Trước</a>';
                        } ?>
                        
                        <?php for ($t=1; $t<=$sotrang ; $t++) { ?>
                        <?php if ($t==$trang) {
                           echo '<span class="page-numbers current">'.$t.'</span>';
                        }else{
                           echo '<a class="page-numbers" href="blog?p='.$t.'">'.$t.'</a>';
                        } ?>
                        <?php } ?>
                        <?php if ($trang<$sotrang) {
                           echo '<a class="next page-numbers" href="blog?p='.($trang+1).'">Tiếp theo</a>';
                        } ?>
                        
                        
                     </div>
                  </nav>
               </div>
               <div class="column pull-right sidebar no-gutter span-4">
                  <!-- WordPress Popular Posts Plugin v3.3.1 [W] [all] [views] [regular] -->
                  <aside id="wpp-3" class="content well push-bottom-large widget popular-posts">
                     <h5 class="section-nav-title">Bài Viết Nổi Bật</h5>
                     <ul class="wpp-list">
                        <?php foreach ($noibat as $value) { ?>
                        <li>
                           <a href="blog/<?=$value['url']?>" title="<?=$value['name']?>" target="_self"><img src="<?=$value['hinh_anh']?>" width=70 height=70 title="<?=$value['name']?>" alt="<?=$value['name']?>" class="wpp-thumbnail wpp_cached_thumb wpp_featured" /></a> <a href="blog/<?=$value['url']?>" title="<?=$value['name']?>" class="wpp-post-title" target="_self"><?=$value['name']?></a>  <span class="post-stats"><span class="wpp-author"> <a href="blog/<?=$value['url']?>">admin</a></span></span> 
                        </li>
                        <?php } ?>
                     </ul>
                  </aside>
                  <!-- End WordPress Popular Posts Plugin v3.3.1 -->
                  <aside id="categories-11" class="content well push-bottom-large widget widget_categories">
                     <h5 class="section-nav-title">Danh mục</h5>
                     <ul>
                        <?php foreach ($danhmuc as $item) { ?>
                        <li class=""><a href="blog/1/<?=$item['url']?>" ><?=$item['name']?></a> (<?=$item['total']?>)</li>
                        <?php } ?>
                     </ul>
                  </aside>
                  
                  <section class="lcam-contents-widget-section widget row content-vertical-massive lcam-widget lcam-contents-widget gallary " id="layers-widget-lcam_contents-13">
                     <!-- set overlay section -->
                     <div class="container clearfix">
                        <div class="section-title clearfix medium text-left ">
                           <h3 class="heading">Thư Viện Ảnh</h3>
                        </div>
                     </div>
                     <div class="lcam-contents-widget-container lcam-widget-container container">
                        <div class="lcam-carousel-container" 
                           data-mode="horizontal"
                           data-speed="500"
                           data-maxslides="1"
                           data-moveslides="1"
                           data-slidemargin="10"
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
                              <?php foreach ($baiviet as $value) { ?>
                              <li>
                                 <div id="layers-widget-lcam_contents-13-232" class="lcam-consingle-default has-image">
                                    <div class="media no-push-bottom image-top medium">
                                       <!-- Featured image -->
                                       <div class="media-image ">
                                          <img width="800" height="500" src="<?=$value['hinh_anh']?>" class="attachment-medium" alt="tintuc-2" />                               
                                       </div>
                                       <!-- Media body -->
                                    </div>
                                    <!-- .media -->
                                 </div>
                                 <!-- .lcam-consingle -->
                              </li>
                            <?php } ?>
                           </ul>
                           <div class="lcam-carousel-controller-center">
                              <button id="#layers-widget-lcam_contents-13-prev" class="lcam-carousel-to-prev"><i class="fa fa-caret-left"></i></button>
                              <button id="#layers-widget-lcam_contents-13-next" class="lcam-carousel-to-next"><i class="fa fa-caret-right"></i></button>
                           </div>
                        </div>
                        <!-- .lcam-carousel-container -->
                     </div>
                     <!-- .row -->
                  </section>
                  <!-- .lcam-widget-section -->
                  <section class="widget row uk-accordion-vertical-massive meditreat " id="layers-widget-layers_plus_column_xvaccordion-8">
                     <div class="container ">
                        <div id="layer-plus-layers-widget-layers_plus_column_xvaccordion-8" class="span-12  column uk-accordion" data-uk-accordion>
                           <div class="section-title clearfix medium text-left ">
                              <h3 class="heading">Tư Vấn</h3>
                           </div>
                           <div class="row   ">
                              <?php foreach ($hoidap as $key) { ?>
                              <div id="layers-widget-layers_plus_column_xvaccordion-8-142" class="animatedParent">
                                 <div class="media-body text-left animated bounceInUp">
                                    <h3 class="uk-accordion-title ">
                                       <?=$key['name']?>                                    
                                    </h3>
                                    <div class="media image-left medium uk-accordion-content">
                                       <div class="excerpt">
                                          <p><?=$key['mo_ta']?> </p>
                                       </div>
                                    </div>
                                 </div>
                              </div>
                              <?php } ?>
                              
                           </div>
                        </div>
                     </div>
                     <!--container-->
                  </section>
               </div>
            </section>
            <div id="back-to-top">
               <a href="#top">Đầu trang</a>
            </div>
            <!-- back-to-top -->
         </section>