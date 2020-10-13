<?php
    $baivietmoi=$data->bvmoi();
?>
<footer id="footer" class="footer-site invert">
            <div class="container  clearfix">
                <div class="row">
                    <div class="column span-3 ">
                        <section id="layers-widget-column-32" class="widget layers-content-widget row content-vertical-massive about ">
                            <div class="row container list-grid">
                                <div id="layers-widget-column-32-42" class="layers-masonry-column layers-widget-column-42 span-12  column  has-image">
                                    <div class="media image-top medium">
                                        <div class="media-image ">
                                            <img width="185" height="50" src="<?=$thongtin[7]['value']?>" class="attachment-full" alt="foot-logo" />
                                        </div>
                                        <div class="media-body text-justify">
                                            <div class="excerpt">
                                                <p><?=$thongtin[5]['value']?></p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </section>
                    </div>
                    <div class="column span-3 ">
                        <section id="layers-widget-column-49" class="widget layers-content-widget row content-vertical-massive address ">
                            <div class="container clearfix">
                                <div class="section-title clearfix medium text-left ">
                                    <h3 class="heading">Địa Chỉ</h3>
                                </div>
                            </div>
                            <div class="row container list-grid">
                                <div id="layers-widget-column-49-1" class="layers-masonry-column layers-widget-column-1 span-12  column ">
                                    <div class="media image-top medium">
                                        <div class="media-body text-left">
                                            <div class="excerpt">
                                                <p><i class="fa fa-home"></i> <?=$thongtin[1]['value']?></p>
                                                <p><i class="fa fa-envelope"></i> <?=$thongtin[3]['value']?></p>
                                                <p><i class="fa fa-phone"></i> <?=$thongtin[2]['value']?></p>
                                                <p><i class="fa fa-print"></i> <?=HOME?></p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </section>
                    </div>
                    <div class="column span-3 ">
                        <section id="recent-posts-8" class="widget widget_recent_entries">
                            <h5 class="section-nav-title">Bài viết mới</h5>
                            <ul>
                                <?php foreach ($baivietmoi as $value) { ?>
                                <li>
                                    <a href="blog/<?=$value['url']?>"><?=$value['name']?></a>
                                </li>
                               <?php } ?>
                            </ul>
                        </section>
                    </div>
                    <div class="column span-3 last">
                        <section id="text-8" class="widget widget_text">
                            <h5 class="section-nav-title">Liên hệ</h5>
                            <div class="textwidget">
                                <!-- <div role="form" class="wpcf7" id="wpcf7-f137-o1" lang="vi" dir="ltr"> -->
                                    <div class="screen-reader-response"></div>
                                    <form action="" method="post" class="wpcf7-form" >
                                        <p>
                                            <span class="wpcf7-form-control-wrap your-name"><input type="text" name="name" value="" size="40" class="wpcf7-form-control wpcf7-text wpcf7-validates-as-required" aria-required="true" aria-invalid="false" placeholder="Họ Tên *" required /></span>
                                        </p>
                                        <p>
                                            <span class="wpcf7-form-control-wrap your-phone"><input type="text" name="sdt" value="" size="40" class="wpcf7-form-control wpcf7-text wpcf7-validates-as-required" aria-required="true" aria-invalid="false" placeholder="Số Điện Thoại *" required /></span>
                                        </p>
                                        <p>
                                            <span class="wpcf7-form-control-wrap your-message"><textarea name="message" cols="40" rows="10" class="wpcf7-form-control wpcf7-textarea" aria-invalid="false" placeholder="Nội dung"></textarea></span>
                                        </p>
                                        <p><input type="submit" name="btnsend" value="Gửi" class="wpcf7-form-control wpcf7-submit" /></p>
                                       
                                    </form>
                                <!-- </div> -->
                            </div>
                        </section>
                    </div>
                </div>
            </div>
        </footer>
        <!-- END / FOOTER -->
        <div class="footer-bottom ">
            <div class="container">
                <div class="row copyright">
                    <div class="column span-8">
                        <p class="site-text"> © 2020 Copyright by Thuonghieuweb . All rights reserved</p>
                    </div>
                    <div id="mbmcl" class="column span-4">
                        <a style="color:#FFFFFF;font-size:12px;" target="_blank" href="https://thuonghieuweb.com/">Thiết kế web giá rẻ tại Hà Nội</a>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- END / MAIN SITE #wrapper -->
    <script>
        var link = jQuery(".header-site .nav li.menu-item-has-children > a");
        var linka = link.attr("href");

        jQuery(".header-site .nav li.menu-item-has-children > a").on("touchstart", function(e) {
            if (link.hasClass("abc")) {

                return true;
                link.removeClass("abc");

            } else {

                e.preventDefault();
                link.addClass("abc");
                return false;
            }
        });
    </script>
    <script>
        jQuery("#off-canvas-right .nav-mobile ul li a").on("touchstart", function() {
            return true;
        });
    </script>
    <script src="template/wp-content/themes/layerswp-child/js/post-social.js"></script>
    <script src="template/wp-content/themes/layerswp-child/js/contact.js"></script>
    <script src="template/wp-content/themes/layerswp-child/js/search.js"></script>
    <script src="template/wp-content/themes/layerswp-child/js/sub-menu.js"></script>
    <link rel='stylesheet' id='layers-slider-css' href='template/wp-content/themes/layerswp/core/widgets/css/swiper077c.css?ver=1.2.9' type='text/css' media='all' />
    <link rel='stylesheet' id='layers-plus-hero-slider-css' href='template/wp-content/plugins/layers-plus/assets/css/hero-slider00a3.css?ver=4.2.28' type='text/css' media='all' />
    <link rel='stylesheet' id='layers-inline-styles-css' href='template/wp-content/themes/layerswp/assets/css/inline00a3.css?ver=4.2.28' type='text/css' media='all' />
    <style id='layers-inline-styles-inline-css' type='text/css'>
        body {
            font-family: Open Sans, "Helvetica Neue", Helvetica, sans-serif;
        }
        
        .footer-site {
            background-color: #1e2127;
        }
        
        #layers-widget-slide-35-256 {
            background-repeat: no-repeat;
            background-position: center;
            background-size: cover;
           
        }
        
        #layers-widget-slide-35-256 h3.heading,
        #layers-widget-slide-35-256 h3.heading a,
        #layers-widget-slide-35-256 div.excerpt {
            color: #eeee22;
        }
        
        #layers-widget-slide-35-63 {
            background-repeat: no-repeat;
            background-position: center;
            background-size: cover;
            background-image: url('template/wp-content/uploads/2016/08/Slider2.jpg');
        }
        
        #layers-widget-slide-35-63 h3.heading,
        #layers-widget-slide-35-63 h3.heading a,
        #layers-widget-slide-35-63 div.excerpt {
            color: #eeee22;
        }
        
        #layers-widget-column-42 {
            background-repeat: no-repeat;
            background-position: center;
        }
        
        #layers-widget-column-42-267 {
            background-repeat: no-repeat;
            background-position: center;
        }
        
        #layers-widget-column-42-438 {
            background-repeat: no-repeat;
            background-position: center;
        }
        
        #layers-widget-column-42-401 {
            background-repeat: no-repeat;
            background-position: center;
        }
        
        #layers-widget-column-43 {
            background-repeat: no-repeat;
            background-position: center;
        }
        
        #layers-widget-column-43-267 {
            background-repeat: no-repeat;
            background-position: center;
        }
        
        #layers-widget-column-43-438 {
            background-repeat: no-repeat;
            background-position: center;
        }
        
        #layers-widget-column-43-401 {
            background-repeat: no-repeat;
            background-position: center;
        }
        
        #layers-widget-column-43-151 {
            background-repeat: no-repeat;
            background-position: center;
        }
        
        #layers-widget-hero_slider_column_hero-5 {
            background-color: #EFF2F5;
            background-repeat: no-repeat;
            background-position: center;
            background-image: url('template/wp-content/uploads/2016/08/back111.jpg');
        }
        
        #layers-widget-hero_slider_column_hero-5-584 {
            background-repeat: no-repeat;
            background-position: center;
        }
        
        #layers-widget-hero_slider_column_hero-5-584 h5.heading a,
        #layers-widget-hero_slider_column_hero-5-584 h5.heading,
        #layers-widget-hero_slider_column_hero-5-584 div.excerpt,
        #layers-widget-hero_slider_column_hero-5-584 div.excerpt p {
            color: #fff;
        }
        
        #layers-widget-layers_plus_column_team-5 {
            background-repeat: no-repeat;
            background-position: center;
        }
        
        #layers-widget-layers_plus_column_team-5-34 {
            background-color: #fff;
            background-repeat: no-repeat;
            background-position: center;
        }
        
        #layers-widget-layers_plus_column_team-5-34 h5.heading a,
        #layers-widget-layers_plus_column_team-5-34 h5.heading,
        #layers-widget-layers_plus_column_team-5-34 div.excerpt,
        #layers-widget-layers_plus_column_team-5-34 div.excerpt p {
            color: #333333;
        }
        
        #layers-widget-layers_plus_column_team-5-410 {
            background-color: #fff;
            background-repeat: no-repeat;
            background-position: center;
        }
        
        #layers-widget-layers_plus_column_team-5-410 h5.heading a,
        #layers-widget-layers_plus_column_team-5-410 h5.heading,
        #layers-widget-layers_plus_column_team-5-410 div.excerpt,
        #layers-widget-layers_plus_column_team-5-410 div.excerpt p {
            color: #333333;
        }
        
        #layers-widget-layers_plus_column_team-5-905 {
            background-color: #fff;
            background-repeat: no-repeat;
            background-position: center;
        }
        
        #layers-widget-layers_plus_column_team-5-905 h5.heading a,
        #layers-widget-layers_plus_column_team-5-905 h5.heading,
        #layers-widget-layers_plus_column_team-5-905 div.excerpt,
        #layers-widget-layers_plus_column_team-5-905 div.excerpt p {
            color: #333333;
        }
        
        #layers-widget-layers_plus_column_team-5-79 {
            background-color: #fff;
            background-repeat: no-repeat;
            background-position: center;
        }
        
        #layers-widget-layers_plus_column_team-5-79 h5.heading a,
        #layers-widget-layers_plus_column_team-5-79 h5.heading,
        #layers-widget-layers_plus_column_team-5-79 div.excerpt,
        #layers-widget-layers_plus_column_team-5-79 div.excerpt p {
            color: #333333;
        }
        
        #layers-widget-layers_plus_column_gridmaker-3 {
            background-repeat: no-repeat;
            background-position: center;
            background-image: url('template/wp-content/uploads/2016/08/back11.jpg');
        }
        
        #layers-widget-column-45 {
            background-repeat: no-repeat;
            background-position: center;
        }
        
        #layers-widget-column-45-823 {
            background-repeat: no-repeat;
            background-position: center;
        }
        
        #layers-widget-layers_plus_column_xvaccordion-5 {
            background-repeat: no-repeat;
            background-position: center;
        }
        
        #layers-widget-layers_plus_column_xvaccordion-5 .uk-accordion-content {
            padding: 10px 4px 10px 4px;
        }
        
        #layers-widget-layers_plus_column_xvaccordion-5 .uk-accordion-title {
            padding: 12px 25px 12px 25px;
        }
        
        #layers-widget-layers_plus_column_xvaccordion-5-923 {
            background-repeat: no-repeat;
            background-position: center;
        }
        
        #layers-widget-layers_plus_column_xvaccordion-5-132 {
            background-repeat: no-repeat;
            background-position: center;
        }
        
        #layers-widget-layers_plus_column_xvaccordion-5-653 {
            background-repeat: no-repeat;
            background-position: center;
        }
        
        #layers-widget-layers_plus_column_xvaccordion-5-853 {
            background-repeat: no-repeat;
            background-position: center;
        }
        
        #layers-widget-lcam_posts-11 {
            background-repeat: no-repeat;
            background-position: center;
        }
        
        #layers-widget-lcam_posts-11 .thumbnail:not(.with-overlay) .thumbnail-body {
            background-color: #F5F5F5;
        }
        
        #layers-widget-lcam_posts-11 button.lcam-carousel-to-prev,
        #layers-widget-lcam_posts-11 button.lcam-carousel-to-next {
            background-color: #373737;
        }
        
        #layers-widget-lcam_posts-11 button.lcam-carousel-to-prev,
        #layers-widget-lcam_posts-11 button.lcam-carousel-to-next {
            color: #ffffff;
        }
        
        #layers-widget-layers_plus_column_gridmaker-5 {
            background-repeat: no-repeat;
            background-position: center;
            background-image: url('template/wp-content/uploads/2016/08/back11.jpg');
        }
        
        #layers-widget-layers_plus_column_counter-3 {
            background-repeat: no-repeat;
            background-position: center;
        }
        
        #layers-widget-layers_plus_column_counter-3-430 {
            background-repeat: no-repeat;
            background-position: center;
        }
        
        #layers-widget-layers_plus_column_counter-3-279 {
            background-repeat: no-repeat;
            background-position: center;
        }
        
        #layers-widget-layers_plus_column_counter-3-782 {
            background-repeat: no-repeat;
            background-position: center;
        }
        
        #layers-widget-layers_plus_column_counter-3-320 {
            background-repeat: no-repeat;
            background-position: center;
        }
        
        #layers-widget-column-47 {
            background-repeat: no-repeat;
            background-position: center;
        }
        
        #layers-widget-column-47-139 {
            background-repeat: no-repeat;
            background-position: center;
        }
        
        #layers-widget-lcam_contents-11 {
            background-repeat: no-repeat;
            background-position: center;
        }
        
        #layers-widget-lcam_contents-11 button.lcam-carousel-to-prev,
        #layers-widget-lcam_contents-11 button.lcam-carousel-to-next {
            background-color: #373737;
        }
        
        #layers-widget-lcam_contents-11 button.lcam-carousel-to-prev,
        #layers-widget-lcam_contents-11 button.lcam-carousel-to-next {
            color: #ffffff;
        }
        
        #layers-widget-lcam_contents-11-783 {
            background-repeat: no-repeat;
            background-position: center;
        }
        
        #layers-widget-lcam_contents-11-324 {
            background-repeat: no-repeat;
            background-position: center;
        }
        
        #layers-widget-lcam_contents-15 {
            background-color: #efefef;
            background-repeat: no-repeat;
            background-position: center;
        }
        
        #layers-widget-lcam_contents-15 button.lcam-carousel-to-prev,
        #layers-widget-lcam_contents-15 button.lcam-carousel-to-next {
            background-color: #373737;
        }
        
        #layers-widget-lcam_contents-15 button.lcam-carousel-to-prev,
        #layers-widget-lcam_contents-15 button.lcam-carousel-to-next {
            color: #ffffff;
        }
        
        #layers-widget-lcam_contents-15-261 {
            background-repeat: no-repeat;
            background-position: center;
        }
        
        #layers-widget-lcam_contents-15-946 {
            background-repeat: no-repeat;
            background-position: center;
        }
        
        #layers-widget-lcam_contents-15-451 {
            background-repeat: no-repeat;
            background-position: center;
        }
        
        #layers-widget-lcam_contents-15-594 {
            background-repeat: no-repeat;
            background-position: center;
        }
    </style>
    <link rel='stylesheet' id='layers-custom-styles-css' href='template/wp-content/themes/layerswp/assets/css/custom00a3.css?ver=4.2.28' type='text/css' media='all' />
    <script type='text/javascript'>
        /* <![CDATA[ */
        var thickboxL10n = {
            "next": "Trang sau >",
            "prev": "< Trang tr\u01b0\u1edbc",
            "image": "\u1ea2nh",
            "of": "c\u1ee7a",
            "close": "\u0110\u00f3ng",
            "noiframes": "T\u00ednh n\u0103ng n\u00e0y y\u00eau c\u1ea7u b\u1eadt frame. B\u1ea1n c\u00f3 th\u1ec3 \u0111\u00e3 t\u1eaft t\u00ednh n\u0103ng n\u00e0y ho\u1eb7c tr\u00ecnh duy\u1ec7t kh\u00f4ng h\u1ed7 tr\u1ee3.",
            "loadingAnimation": "http:\/\/mynet.com.vn\/MN_086\/template/wp-includes\/js\/thickbox\/loadingAnimation.gif"
        };
        /* ]]> */
    </script>
    <script type='text/javascript' src='template/wp-includes/js/thickbox/thickboxab87.js?ver=3.1-20121105'></script>
    <script type='text/javascript' src='template/wp-content/plugins/sitepress-multilingual-cms/res/js/language-selector2c3d.js?ver=3.2.7'></script>
    <script type='text/javascript'>
        /* <![CDATA[ */
        var x_loader = {
            "startPage": "1",
            "maxPages": "3",
            "nextLink": "http:\/\/mynet.com.vn\/MN_086\/page\/2\/",
            "selector_m": "",
            "selector_p": "",
            "selector_n": "",
            "selector_a": "animation-parent ",
            "selector_isotope": ".grid",
            "string_load_more": "Loade More",
            "string_no_more": "No More Posts",
            "string_loading": "Loading ...",
            "gif": "http:\/\/mynet.com.vn\/MN_086\/template/wp-content\/plugins\/layers-plus\/assets\/img\/g1.gif"
        };
        /* ]]> */
    </script>
    <script type='text/javascript' src='template/wp-content/plugins/layers-plus/assets/js/load-posts5152.js?ver=1.0'></script>
    <script type='text/javascript' src='template/wp-content/plugins/contact-form-7/includes/js/jquery.form.mind03d.js?ver=3.51.0-2014.06.20'></script>
    <script type='text/javascript'>
        /* <![CDATA[ */
        var _wpcf7 = {
            "loaderUrl": "http:\/\/mynet.com.vn\/MN_086\/template/wp-content\/plugins\/contact-form-7\/images\/ajax-loader.gif",
            "recaptchaEmpty": "Please verify that you are not a robot.",
            "sending": "\u0110ang g\u1eedi...."
        };
        /* ]]> */
    </script>
    <script type='text/javascript' src='template/wp-content/plugins/contact-form-7/includes/js/scripts5b31.js?ver=4.3.1'></script>
    <script type='text/javascript'>
        /* <![CDATA[ */
        var layers_script_settings = {
            "header_sticky_breakpoint": "270"
        };
        /* ]]> */
    </script>
    <script type='text/javascript' src='template/wp-content/themes/layerswp/assets/js/layers.framework077c.js?ver=1.2.9'></script>
    <script type='text/javascript' src='template/wp-includes/js/comment-reply.min00a3.js?ver=4.2.28'></script>
    <script type='text/javascript' src='template/wp-content/plugins/layers-plus/assets/js/css3-animate-it00a3.js?ver=4.2.28'></script>
    <script type='text/javascript' src='template/wp-content/plugins/layers-plus/assets/js/elements00a3.js?ver=4.2.28'></script>
    <script type='text/javascript' src='template/wp-content/plugins/layers-plus/assets/js/load-callback5152.js?ver=1.0'></script>
    <script type='text/javascript' src='template/wp-content/plugins/templatera-layerswp/assets/js/elements00a3.js?ver=4.2.28'></script>
    <script type='text/javascript'>
        /* <![CDATA[ */
        var icl_vars = {
            "current_language": "vi",
            "icl_home": "http:\/\/mynet.com.vn\/MN_086\/",
            "ajax_url": "http:\/\/mynet.com.vn\/MN_086\/wp-admin\/admin-ajax.php",
            "url_type": "1"
        };
        /* ]]> */
    </script>
    <script type='text/javascript' src='template/wp-content/plugins/sitepress-multilingual-cms/res/js/sitepress00a3.js?ver=4.2.28'></script>
    <script type='text/javascript' src='template/wp-content/themes/layerswp/core/widgets/js/swiper077c.js?ver=1.2.9'></script>
    <script type='text/javascript' src='template/wp-content/plugins/layers-plus/assets/js/hero-slider00a3.js?ver=4.2.28'></script>
    <script type='text/javascript' src='template/wp-content/plugins/layers-plus/assets/js/accordion.min00a3.js?ver=4.2.28'></script>
    <script type='text/javascript' src='template/wp-content/plugins/layers-plus/assets/js/uikit.min00a3.js?ver=4.2.28'></script>
    <script type='text/javascript' src='template/wp-content/plugins/layers-carousel-mojo/assets/js/jquery.bxslider.mind19b.js?ver=4.2.5'></script>
    <script type='text/javascript'>
        /* <![CDATA[ */
        var LCAMOJO = {
            "MobileWidth": "380",
            "tablet1Width": "550",
            "tablet2Width": "730",
            "LaptopWidth": "910"
        };
        var LCAMOJO = {
            "MobileWidth": "380",
            "tablet1Width": "550",
            "tablet2Width": "730",
            "LaptopWidth": "910"
        };
        var LCAMOJO = {
            "MobileWidth": "380",
            "tablet1Width": "550",
            "tablet2Width": "730",
            "LaptopWidth": "910"
        };
        /* ]]> */
    </script>
    <script type='text/javascript' src='template/wp-content/plugins/layers-carousel-mojo/assets/js/plugin8a54.js?ver=1.0.0'></script>
</body>
<!-- Mirrored from mynet.com.vn/MN_086/ by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 20 Aug 2020 12:49:28 GMT -->

</html>