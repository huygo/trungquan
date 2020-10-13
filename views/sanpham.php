<?php
  $lienquan=$data->dvlienquan($page['data']['id'],$page['data']['danh_muc']);
  $noibat=$data->getnoibat();
  $hoidap=$data->doingu(17);
?>
<section id="wrapper-content" class="wrapper-content">
            <div  id='banner-has-image'class="title-container">
               <div class="title">
                  <h3 class="heading" style="color:#0dc0c0;">Tin tức</h3>
                  <nav class="bread-crumbs">
                     <ul>
                        <li><a href="<?=HOME?>" style="color:#0dc0c0 !important;">Trang chủ</a></li>
                        <li style="color:#0dc0c0 !important;">/</li>
                        <li><a style="color:#0dc0c0 !important;">Dịch vụ</a></li>
                        <li style="color:#0dc0c0 !important;">/</li>
                        <li><span class="current"><a href="product/<?=$page['data']['url']?>" style="color:#0dc0c0 !important;"><?=$page['data']['name']?></a></span></li>
                     </ul>
                  </nav>
               </div>
            </div>
            <section id="post-663" class="content-main clearfix post-663 post type-post status-publish format-standard has-post-thumbnail hentry category-tin-tuc container">
               <div class="row">
                  <article class="column span-8">
                     <header class="section-title large">
                        <h1 class="heading"><?=$page['data']['name']?></h1>
                     </header>
                     <footer class="meta-info">
                        <p><span class="meta-item meta-date"><i class="l-clock-o"></i> <?php echo date('d/m/Y',strtotime($page['data']['updated'])); ?></span> <span class="meta-item meta-category"><i class="l-folder-open-o"></i>  <a title="Dịch vụ">Dịch vụ</a></span> <span class="meta-item meta-author"><i class="l-user"></i> <a href="product/<?=$page['data']['url']?>" tiêu đề=" admin" rel="tác giả">admin</a></span></p>
                     </footer>
                     <div class="story">
                        <?=$page['data']['noi_dung']?>
                     </div>
                     <div class="tag-content"></div>
                     <div class="widget relative-post-default">
                        <h5 class="section-nav-title">Dịch vụ Liên quan</h5>
                        <ul>
                          <?php foreach ($lienquan as $lq) { ?>
                           <li><a href="product/<?=$lq['url']?>" title="<?=$lq['name']?>"><?=$lq['name']?></a></li>
                          <?php } ?>
                        </ul>
                     </div>
                  </article>
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
                                <?php foreach ($lienquan as $value) { ?>
                                 <li>
                                    <div id="layers-widget-lcam_contents-13-232" class="lcam-consingle-default has-image">
                                       <div class="media no-push-bottom image-top medium">
                                          <!-- Featured image -->
                                          <div class="media-image ">
                                             <img width="800" height="500" src="<?=$value['hinh_anh']?>" class="attachment-medium" alt="<?=$value['name']?>" />                     
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
               </div>
            </section>
            <div id="back-to-top">
               <a href="#top">Đầu trang</a>
            </div>
            <!-- back-to-top -->
         </section>