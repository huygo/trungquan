<?php
    $banner=$data->getbanner(1);
    $banner1=$data->getbanner(2);
    $banner2=$data->getbanner(3);
    $doitac=$data->getbanner(10);
    $doingu= $data->doingu(16);
    $hoidap=$data->doingu(17);
    $ykien=$data->doingu(18);
    $baiviet=$data->baiviethome();
?>
        <section id="wrapper-content" class="wrapper-content">
            <section id="layers-widget-slide-35" class="widget layers-slider-widget row slide swiper-container slidershow slider-top   auto-height not-full-screen" style="">
                <div class="arrows">
                    <a href="#" class="l-left-arrow animate"></a>
                    <a href="#" class="l-right-arrow animate"></a>
                </div>
                <div class="widget-layers-widget-slide-35-pages pages animate">
                    <a href="#" class="page animate active"></a>
                    <a href="#" class="page animate "></a>
                </div>
                <div class="swiper-wrapper">
                    <?php foreach ($banner as $value) { ?>
                    <div class="swiper-slide invert has-image image-top text-left " id="layers-widget-slide-35-256" style="float: left;  background-image: url('<?=$value['hinh_anh']?>'); ">
                        <div class="overlay content">
                            <div class="container clearfix">
                            </div>
                            <!-- .container -->
                        </div>
                        <!-- .overlay -->
                    </div>
                    <?php } ?>
                    <!-- <div class="swiper-slide invert has-image image-top text-left " id="layers-widget-slide-35-63" style="float: left; ">
                        <div class="overlay content">
                            <div class="container clearfix">
                            </div> -->
                            <!-- .container -->
                        <!-- </div> -->
                        <!-- .overlay -->
                    <!-- </div> -->
                </div>
            </section>
            <script>
                jQuery(function($) {

                    var widget_layers_widget_slide_35_slider = $('#layers-widget-slide-35').swiper({
                        mode: 'horizontal',
                        bulletClass: 'swiper-pagination-switch',
                        bulletActiveClass: 'swiper-active-switch swiper-visible-switch',
                        paginationClickable: true,
                        watchActiveIndex: true,
                        pagination: '.widget-layers-widget-slide-35-pages',
                        loop: true,
                        autoplay: 4000
                    });

                    // Allow keyboard control
                    widget_layers_widget_slide_35_slider.enableKeyboardControl();

                    layers_swiper_resize(widget_layers_widget_slide_35_slider);
                    $(window).resize(function() {
                        layers_swiper_resize(widget_layers_widget_slide_35_slider);
                    });

                    $('#layers-widget-slide-35').find('.arrows a').on('click', function(e) {
                        e.preventDefault();

                        // "Hi Mom"
                        $that = $(this);

                        if ($that.hasClass('swiper-pagination-switch')) {
                            // Anchors
                            widget_layers_widget_slide_35_slider.slideTo($that.index());
                        } else if ($that.hasClass('l-left-arrow')) {
                            // Previous
                            widget_layers_widget_slide_35_slider.slidePrev();
                        } else if ($that.hasClass('l-right-arrow')) {
                            // Next
                            widget_layers_widget_slide_35_slider.slideNext();
                        }

                        return false;
                    });

                    widget_layers_widget_slide_35_slider.init();
                })
            </script>
            <section id="layers-widget-column-42" class="widget layers-content-widget row content-vertical-massive home-service ">
                <div class="row container list-grid">
                    <div id="layers-widget-column-42-267" class="layers-masonry-column layers-widget-column-267 span-4  column one-column">
                        <div class="media image-top medium">
                            <div class="media-body text-left">
                                <h5 class="heading">
                                    <h1><?=$thongtin[0]['value']?></h1>
                                    <h2>Giới Thiệu</h2>
                                </h5>
                                <div class="excerpt">
                                    <p><?=$thongtin[5]['value']?></p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div id="layers-widget-column-42-438" class="layers-masonry-column layers-widget-column-438 span-4  column two-column">
                        <div class="media image-top medium">
                            <div class="media-body text-left">
                                <h5 class="heading">
                                    <h1>Tầm nhìn</h1>
                                    <h2> <?=$thongtin[0]['value']?></h2>
                                </h5>
                                <div class="excerpt">
                                    <p><?=$thongtin[11]['value']?></p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div id="layers-widget-column-42-401" class="layers-masonry-column layers-widget-column-401 span-4  column three-column">
                        <div class="media image-top medium">
                            <div class="media-body text-left">
                                <h5 class="heading">
                                    <h1>Sứ mệnh</h1>
                                    <h2> <?=$thongtin[0]['value']?> </h2>
                                </h5>
                                <div class="excerpt">
                                    <section>
                                        <p><?=$thongtin[12]['value']?></p>
                                    </section>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <section id="layers-widget-column-43" class="widget layers-content-widget row content-vertical-massive service-two ">
                <div class="row container list-grid">
                    <div id="layers-widget-column-43-267" class="layers-masonry-column layers-widget-column-267 span-3  column  has-image">
                        <div class="media image-top medium">
                            <div class="media-image ">
                                <img width="64" height="64" src="template/wp-content/uploads/2016/11/hihi.png" class="attachment-medium"  />
                            </div>
                            <div class="media-body text-center">
                                <h5 class="heading">
                                     TELEMARKETING & TELESALE
                                </h5>
                                <div class="excerpt">
                                    <p>Là dịch vụ gọi điện khai thác tìm kiếm khách hàng tiềm năng quan tâm đến dịch vụ, sản phẩm. Gọi điện tới khách hàng tư vấn, bán hàng (gọi tắt là “chốt sales”)
                                Có cam kết KPI sau thời gian chạy test.
                                </p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div id="layers-widget-column-43-438" class="layers-masonry-column layers-widget-column-438 span-3  column  has-image">
                        <div class="media image-top medium">
                            <div class="media-image ">
                                <img width="64" height="64" src="template/wp-content/uploads/2016/11/fast.png" class="attachment-medium" alt="kham-benh" />
                            </div>
                            <div class="media-body text-center">
                                <h5 class="heading">
                                         F.A.S.T CONTACT CENTER
                                </h5>
                                <div class="excerpt">
                                    <p>Là dịch vụ cho phép thiết lập nhanh một tổng đài (Contact Center) phục vụ những chiến dịch tiếp nhận/gọi ra trong một khoảng thời gian ngắn (thường dưới 1 tháng).</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div id="layers-widget-column-43-401" class="layers-masonry-column layers-widget-column-401 span-3  column  has-image">
                        <div class="media image-top medium">
                            <div class="media-image ">
                                <img width="64" height="64" src="template/wp-content/uploads/2016/11/sms.png" class="attachment-medium" alt="dich-vu-cap-cuu" />
                            </div>
                            <div class="media-body text-center">
                                <h5 class="heading">
                                SMS MARKETING
                                </h5>
                                <div class="excerpt">
                                    <p>Gửi tin nhắn trực tiếp đến điện thoại khách hàng,Tỉ lệ mở và đọc tin nhắn cao đến 99%.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div id="layers-widget-column-43-151" class="layers-masonry-column layers-widget-column-151 span-3  column  has-image">
                        <div class="media image-top medium">
                            <div class="media-image ">
                                <img width="64" height="64" src="template/wp-content/uploads/2016/11/email.png" class="attachment-medium" alt="xet-nghiem" />
                            </div>
                            <div class="media-body text-center">
                                <h5 class="heading">
                                EMAIL MAKETTING
                                </h5>
                                <div class="excerpt">
                                    <p>Email marketing là hình thức sử dụng email (thư điện tử) mang nội dung về thông tin/bán hàng/tiếp thị/giới thiệu sản phẩm đến khách hàng mà mình mong muốn. Mỗi email được gửi đến khách hàng tiềm năng hoặc khách hàng hiện tại có thể coi là email marketing.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <section class="widget row hero-vertical-massive cd-hero slider-video " id="layers-widget-hero_slider_column_hero-5">
                <ul class="cd-hero-slider autoplay" data-speed="1000">
                    <li id="layers-widget-hero_slider_column_hero-5-584" class="selected">
                        <div class="cd-full-width text-left">
                            <h5 class="heading">
                                Để có hiệu quả kinh doanh tốt hơn
                            </h5>
                            <div class="excerpt">
                                <h2>XIN VUI LÒNG liên hệ với chúng tôi</h2>
                            </div>
                            <a data-scrollx href="lienhe" class="cd-btn scroll primary  btn-medium">XEM XÊM</a>
                        </div>
                        <!-- .cd-half-width -->
                        <div class="cd-bg-video-wrapper" data-video="https://www.youtube.com/watch?v=VeqfEdXN1oc&ab_channel=MixesMusic">
                            <!-- video element will be loaded using jQuery -->
                        </div>
                        <!-- .cd-bg-video-wrapper -->
                    </li>
                </ul>
                <!-- .cd-hero-slider -->
                <div class="cd-slider-nav">
                    <nav>
                        <span class="cd-marker item-1"></span>
                        <ul>
                        </ul>
                    </nav>
                </div>
                <!-- .cd-slider-nav -->
            </section>
            <section class="widget row team-vertical-massive nhan-su " id="layers-widget-layers_plus_column_team-5">
                <div class="container clearfix">
                    <div class="section-title clearfix medium text-center ">
                        <h3 class="heading">Đội ngũ của chúng tôi</h3>
                    </div>
                </div>
                <div class="row container list-grid">
               <?php foreach ($doingu as $value) { ?>
                    <div id="layers-widget-layers_plus_column_team-5-34" class="layers-masonry-column layers-plus span-3  column team has-image">
                        <div class="media invert image-top medium">
                            <div class="media-image ">
                                <img width="237" height="325" src="<?=$value['hinh_anh']?>" class="attachment-medium" alt="dt1" />
                            </div>
                            <div class="media-body text-center">
                                <h5 class="heading">
                                    <?=$value['name']?>
                                </h5>
                                <!-- <div class="excerpt designation">Khoa ngoại thần kinh</div> -->
                                <div class="excerpt">
                                    <p><?=$value['mo_ta']?></p>
                                </div>
                                <div class="excerpt ">
                                    <ul class="team-social style1">
                                        <li><a href="facebook.com"><span class="fa fa-facebook"></span></a></li>
                                        <li><a href="tiwtter.com"><span class="fa fa-twitter"></span></a></li>
                                        <li><a href="google.com"><span class="fa fa-google-plus"></span></a></li>
                                        <li><a href="linkedin.com"><span class="fa fa-linkedin"></span></a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                <?php } ?>
                    
                    
                </div>
            </section>
            <section class="widget row gridmaker-vertical-massive bo-cuc-trang " id="layers-widget-layers_plus_column_gridmaker-3" style="    background-image: url(<?=$banner1[0]['hinh_anh']?>);">
                <div class="row  list-grid">
                    <div id="layers-widget-layers_plus_column_gridmaker-3-7" class="layers-masonry-column clinix-gridmaker span-6  column">
                        <div class="media  ">
                            <div class="media-body ">
                                <section id="layers-widget-column-45" class="widget layers-content-widget row content-vertical-massive  ">
                                    <div class="container clearfix">
                                        <div class="section-title clearfix medium text-left ">
                                            <h3 class="heading">Tận Tâm - Chuyên Nghiệp</h3>
                                            <div class="excerpt">
                                                <p>Trung Quan Media.,LTD hướng đến trở thành tổ chức cung cấp dịch vụ Call Center và CSKH chuyên nghiệp hàng đầu Việt Nam, vươn ra thế giới mang tầm vóc quốc tế.</p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row container list-grid">
                                        <div id="layers-widget-column-45-823" class="layers-masonry-column layers-widget-column-823 span-12  column  has-image">
                                            <div class="media image-top medium">
                                                <div class="media-image ">
                                                    <!-- <img width="929" height="477" src="https://webdoctor.vn/wp-content/uploads/2017/06/sms-mar.jpg" class="attachment-full" alt="Responsive-showcase-presentation_03" /> -->
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </section>
                            </div>
                        </div>
                    </div>
                    <div id="layers-widget-layers_plus_column_gridmaker-3-171" class="layers-masonry-column clinix-gridmaker span-6 last  column">
                        <div class="media  ">
                            <div class="media-body ">
                                <section class="widget row uk-accordion-vertical-massive  " id="layers-widget-layers_plus_column_xvaccordion-5">
                                    <div class="container ">
                                        <div id="layer-plus-layers-widget-layers_plus_column_xvaccordion-5" class="span-12  column uk-accordion" data-uk-accordion>
                                            <div class="section-title clearfix medium text-left ">
                                                <h3 class="heading">Tư Vấn Hỏi Đáp</h3>
                                            </div>
                                            <div class="row   ">
                                                <?php foreach ($hoidap as $value) { ?>
                                                <div id="layers-widget-layers_plus_column_xvaccordion-5-923" class="animatedParent">
                                                    <div class="media-body text-left animated bounceInUp">
                                                        <h3 class="uk-accordion-title ">
                                                            <?=$value['name']?>
                                                        </h3>
                                                        <div class="media image-left medium uk-accordion-content">
                                                            <div class="excerpt">
                                                                <p><?=$value['mo_ta']?></p>
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
                    </div>
                </div>
            </section>
            <section class="lcam-posts-widget-section widget row content-vertical-massive lcam-widget lcam-post-widget home-new " id="layers-widget-lcam_posts-11">
                <!-- set overlay section -->
                <div class="container clearfix">
                    <div class="section-title clearfix medium text-center ">
                        <h3 class="heading">Tin Tức</h3>
                    </div>
                </div>
                <div class="lcam-posts-widget-container lcam-widget-container container">
                    <div class="lcam-carousel-container" data-mode="horizontal" data-speed="500" data-maxslides="3" data-moveslides="1" data-slidemargin="30" data-randomstart=false data-adaptiveheight=false data-adaptiveHeightspeed="0" data-touchenabled=true data-auto=false
                        data-pause="4000" data-autohover=false data-autodelay="0" data-ticker=false data-tickerhover=true>
                        <ul class="lcam-carousel">
                        <?php foreach ($baiviet as $item) { ?>
                            <li>
                                <article id="layers-widget-lcam_posts-11-688" class="lcam-posingle-style-1 thumbnail not-overlay ">
                                    <div class="thumbnail-media">
                                        <a href="blog/<?=$item['url']?>"><img width="615" height="409" src="<?=$item['hinh_anh']?>" alt="tintuc7" /></a>
                                    </div>
                                    <div class="thumbnail-body">
                                        <div class="overlay">
                                            <header class="article-title">
                                                <h4 class="heading"><a href="blog/<?=$item['url']?>"><?=$item['name']?></a></h4>
                                            </header>
                                            <div class="copy push-bottom"><?=$item['mo_ta']?></div>
                                            <footer class="meta-info push-bottom ">
                                                <p><span class="meta-item meta-date"><i class="l-clock-o"></i> <?=date('d/m/Y',strtotime($item['ngay_dang']))?></span> <span class="meta-item meta-author"><i class="l-user"></i> <a href="" tiêu đề=" admin" rel="tác giả">admin</a></span>                                                    <span class="meta-item meta-category"><i class="l-folder-open-o"></i>  <a href="blog" title=" Tin tức">Tin tức</a></span></p>
                                            </footer>
                                            <a href="blog/<?=$item['url']?>" class="button">Xem thêm</a>
                                        </div>
                                    </div>
                                </article>
                                <!-- .lcam-consingle -->
                            </li>
                        <?php } ?>
                        </ul>
                        <div class="lcam-carousel-controller-center">
                            <button id="#layers-widget-lcam_posts-11-prev" class="lcam-carousel-to-prev"><i class="fa fa-caret-left"></i></button>
                            <button id="#layers-widget-lcam_posts-11-next" class="lcam-carousel-to-next"><i class="fa fa-caret-right"></i></button>
                        </div>
                    </div>
                    <!-- .lcam-carousel-container -->
                </div>
                <!-- .row -->
            </section>
            <!-- .lcam-widget-section -->
            <section class="widget row gridmaker-vertical-massive mcare-fullwith-section " id="layers-widget-layers_plus_column_gridmaker-5" style="background-image: url(<?=$banner2[0]['hinh_anh']?>);">
                <div class="row  list-grid">
                    <div id="layers-widget-layers_plus_column_gridmaker-5-5" class="layers-masonry-column clinix-gridmaker span-8  column">
                        <div class="media  ">
                            <div class="media-body ">
                                <section class="widget row counter-vertical-massive statistics-box bo-dem " id="layers-widget-layers_plus_column_counter-3">
                                    <div class="row container list-grid">
                                        <div id="layers-widget-layers_plus_column_counter-3-430" class="layers-masonry-column clinix-counter span-3  column">
                                            <div class="media  medium">
                                                <div class="media-body text-center">
                                                    <div class="counter-box">
                                                        <div class="media-image ">
                                                            <img width="64" height="64" src="template/wp-content/uploads/2016/11/hihi.png" class="attachment-medium"  />
                                                        </div>
                                                        <div class="sc-counter">100</div>
                                                        <h5 class="heading">
                                                            Nhân viên sale
                                                        </h5>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div id="layers-widget-layers_plus_column_counter-3-279" class="layers-masonry-column clinix-counter span-3  column">
                                            <div class="media image-top medium">
                                                <div class="media-body text-center">
                                                    <div class="counter-box">
                                                        <div class="media-image ">
                                                             <img width="64" height="64" src="template/wp-content/uploads/2016/11/fast.png" class="attachment-medium" alt="kham-benh" />
                                                        </div>
                                                        <div class="sc-counter">55</div>
                                                        <h5 class="heading">
                                                            Marketing
                                                        </h5>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div id="layers-widget-layers_plus_column_counter-3-782" class="layers-masonry-column clinix-counter span-3  column">
                                            <div class="media image-top medium">
                                                <div class="media-body text-center">
                                                    <div class="counter-box">
                                                        <div class="media-image ">
                                                            <img width="64" height="64" src="uploads/giaiphap.png" class="attachment-medium" alt="" />
                                                        </div>
                                                        <div class="sc-counter">5</div>
                                                        <h5 class="heading">
                                                            Giải pháp
                                                        </h5>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div id="layers-widget-layers_plus_column_counter-3-320" class="layers-masonry-column clinix-counter span-3 last  column">
                                            <div class="media image-top medium">
                                                <div class="media-body text-center">
                                                    <div class="counter-box">
                                                        <div class="media-image ">
                                                            <img width="64" height="64" src="template/wp-content/uploads/2016/11/email.png" class="attachment-medium" alt="xet-nghiem" />
                                                        </div>
                                                        <div class="sc-counter">4</div>
                                                        <h5 class="heading">
                                                            Dịch Vụ
                                                        </h5>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </section>
                            </div>
                        </div>
                    </div>
                    <div id="layers-widget-layers_plus_column_gridmaker-5-39" class="layers-masonry-column clinix-gridmaker span-4 last  column">
                        <div class="media  ">
                            <div class="media-body ">
                                <section id="layers-widget-column-47" class="widget layers-content-widget row content-vertical-massive bo-dem-cot-phai ">
                                    <div class="row  list-grid">
                                        <div id="layers-widget-column-47-139" class="layers-masonry-column layers-widget-column-139 span-12  column ">
                                            <div class="media image-top medium">
                                                <div class="media-body text-left">
                                                    <h5 class="heading">
                                                        Hơn 200 doanh nghiệp đã hợp tác cùng chúng tôi
                                                    </h5>
                                                    <div class="excerpt">
                                                        <p>Chúng tôi rất cảm ơn quý doanh nghiệp đã tin tưởng và chọn <?=$thongtin[0]['value']?> để hợp tác và phát triển. </p>
                                                    </div>
                                                    <a href="" class="button btn-medium">Xem thêm</a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </section>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <section class="lcam-contents-widget-section widget row content-vertical-massive lcam-widget lcam-contents-widget y-kien-khach-hang " id="layers-widget-lcam_contents-11">
                <!-- set overlay section -->
                <div class="container clearfix">
                    <div class="section-title clearfix medium text-center ">
                        <h3 class="heading">Ý Kiến Khách Hàng</h3>
                    </div>
                </div>
                <div class="lcam-contents-widget-container lcam-widget-container container">
                    <div class="lcam-carousel-container" data-mode="horizontal" data-speed="500" data-maxslides="1" data-moveslides="1" data-slidemargin="10" data-randomstart=false data-adaptiveheight=false data-adaptiveHeightspeed="0" data-touchenabled=true data-auto=false
                        data-pause="4000" data-autohover=false data-autodelay="0" data-ticker=false data-tickerhover=true>
                        <ul class="lcam-carousel">
                         <?php foreach ($ykien as $item) { ?>
                            <li>
                                <div id="layers-widget-lcam_contents-11-783" class="lcam-consingle-default has-image">
                                    <div class="media no-push-bottom image-top medium">
                                        <!-- Featured image -->
                                        <div class="media-image image-rounded">
                                            <img width="94" height="98" src="<?=$item['hinh_anh']?>" class="attachment-layers-square-medium" alt="<?=$item['url']?>" />
                                        </div>
                                        <!-- Media body -->
                                        <div class="media-body text-center">
                                            <h5 class="heading">
                                                <?=$item['name']?>
                                            </h5>
                                            <div class="excerpt">
                                                <p><?=$item['mo_ta']?></p>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- .media -->
                                </div>
                                <!-- .lcam-consingle -->
                            </li>
                           <?php } ?>
                        </ul>
                        <div class="lcam-carousel-controller-center-hover">
                            <button id="#layers-widget-lcam_contents-11-prev" class="lcam-carousel-to-prev"><i class="fa fa-caret-left"></i></button>
                            <button id="#layers-widget-lcam_contents-11-next" class="lcam-carousel-to-next"><i class="fa fa-caret-right"></i></button>
                        </div>
                    </div>
                    <!-- .lcam-carousel-container -->
                </div>
                <!-- .row -->
            </section>
            <!-- .lcam-widget-section -->
            <section class="lcam-contents-widget-section widget row content-vertical-massive lcam-widget lcam-contents-widget logo-lien-ket " id="layers-widget-lcam_contents-15">
                <!-- set overlay section -->
                <div class="lcam-contents-widget-container lcam-widget-container container">
                    <div class="lcam-carousel-container" data-mode="horizontal" data-speed="500" data-maxslides="4" data-moveslides="1" data-slidemargin="0" data-randomstart=false data-adaptiveheight=false data-adaptiveHeightspeed="0" data-touchenabled=true data-auto=false
                        data-pause="4000" data-autohover=false data-autodelay="0" data-ticker=false data-tickerhover=true>
                        <ul class="lcam-carousel">
                        <?php foreach ($doitac as $value) { ?>
                            <li>
                                <div id="layers-widget-lcam_contents-15-261" class="lcam-consingle-default has-image">
                                    <div class="media no-push-bottom image-top medium">
                                        <!-- Featured image -->
                                        <div class="media-image ">
                                            <img width="161" height="40" src="<?=$value['hinh_anh']?>" class="attachment-full" alt="logo4" />
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