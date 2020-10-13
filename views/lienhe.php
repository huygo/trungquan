<?php
    $doitac=$data->getbanner(10);
   if (isset($_POST['btngui'])) {
       $name = $_REQUEST['name'];
       $email = $_REQUEST['email'];
       $subject = $_REQUEST['subject'];
       $message = $_REQUEST['message'];
       $send= $data->sendmail($name,$email,$subject,$message);
       if ($send) {
      echo "<script>alert('Cảm ơn bạn đã gửi thông tin. Nhân viên tư vấn của chúng tôi sẽ liên hệ lại với quý khách qua Email hoặc Điện Thoại trong vòng 24 giờ tới.');</script>";
       }else{
          echo "<script>alert('Thất bại! vui lòng liên hệ với bộ phận HỖ TRỢ KHÁCH HÀNG theo số điện thoại ".$thongtin[2]['value']." để được hỗ trợ trực tiếp!');</script>";
       }
   }
   ?>


<section id="wrapper-content" class="wrapper-content">
            <div class="title-container">
                <div class="title">
                    <h3 class="heading" style="color:#0dc0c0;">Liên hệ</h3>

                    <nav class="bread-crumbs" style="color:#0dc0c0;">
                        <ul>
                            <li><a href="<?=HOME?>" style="color:#0dc0c0 !important;">Trang chủ</a></li>



                            <li>/</li>
                            <li><span class="current"><a href="lienhe" style="color:#0dc0c0 !important;">Liên hệ</a></span></li>

                        </ul>
                    </nav>
                </div>
            </div>

            <section id="layers-widget-map-13" class="widget layers-contact-widget row content-vertical-massive layers-contact-widget map-lh  no-inset-top no-inset-bottom">

                <div class="row  ">

                    <div class="column no-push-bottom span-12">
                    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3725.0771557080343!2d105.8633265147625!3d20.989544086019563!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3135ac1a16fe7a6d%3A0x9d47c88403545a37!2zODcgTMSpbmggTmFtLCBNYWkgxJDhu5luZywgSG_DoG5nIE1haSwgSMOgIE7hu5lpLCBWaeG7h3QgTmFt!5e0!3m2!1svi!2s!4v1602230827340!5m2!1svi!2s" width="100%" height="400" frameborder="0" style="border:0;" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe>
                    </div>
                </div>
            </section>


            <section id="layers-widget-column-38" class="widget layers-content-widget row content-vertical-massive lien-he-form ">
                <div class="row container list-grid">

                    <div id="layers-widget-column-38-289" class="layers-masonry-column layers-widget-column-289 span-6  column form-contact">

                        <div class="media image-top medium">

                            <div class="media-body text-left">
                                <h5 class="heading">
                                    Liên Hệ Với Chúng Tôi </h5>
                                <div class="excerpt">
                                    <!-- <div role="form" class="wpcf7" id="wpcf7-f690-o1" lang="vi" dir="ltr"> -->
                                        <div class="screen-reader-response"></div>
                                        <form action="" method="post" class="wpcf7-form" >
                                            
                                            <div class="">
                                                <div class="column span-6">
                                                    <p>
                                                        <span class="wpcf7-form-control-wrap your-name"><input type="text" name="name" value="" size="40" class="wpcf7-form-control wpcf7-text wpcf7-validates-as-required" aria-required="true" aria-invalid="false" placeholder="Họ tên *" required /></span>                                                        </p>
                                                </div>
                                                <div class="column span-6">
                                                    <p>
                                                        <span class="wpcf7-form-control-wrap your-email"><input type="email" name="email" value="" size="40" class="wpcf7-form-control wpcf7-text wpcf7-email wpcf7-validates-as-required wpcf7-validates-as-email" aria-required="true" aria-invalid="false" placeholder="Email *" required /></span>                                                        </p>
                                                </div>
                                            </div>
                                            <div class="column span-12">
                                                <p>
                                                    <span class="wpcf7-form-control-wrap your-subject"><input type="text" name="subject" value="" size="40" class="wpcf7-form-control wpcf7-text wpcf7-validates-as-required" aria-required="true" aria-invalid="false" placeholder="Tiêu đề *" /></span>                                                    </p>
                                            </div>
                                            <div class="column span-12">
                                                <p>
                                                    <span class="wpcf7-form-control-wrap your-message"><textarea name="message" cols="40" rows="10" class="wpcf7-form-control wpcf7-textarea" aria-invalid="false" placeholder="Nội dung"></textarea></span>                                                    </p>
                                            </div>
                                            <div class="column span-12 gui">
                                                <p><input type="submit" value="Gửi" name="btngui" class="wpcf7-form-control wpcf7-submit" /></p>
                                            </div>
                                            
                                        </form>
                                    <!-- </div> -->
                                </div>
                            </div>
                        </div>
                    </div>

                    <div id="layers-widget-column-38-185" class="layers-masonry-column layers-widget-column-185 span-6  column address-page">

                        <div class="media image-top medium">

                            <div class="media-body text-left">
                                <h5 class="heading">
                                    Dịch Vụ </h5>
                                <div class="excerpt">
                                    <div class="schedual-wrap">
                                        <div class="schedual-box"><i class="mcare-flaticon-healthy3"></i>
                                            <h4>Chuyên Gia Tim Mạch<br /> Bác sĩ Minh</h4>
                                            <div class="schedual-time"><em class="ion-ios-stopwatch-outline"></em>Thứ 2 &#8211; Thứ 6 <br /> 10:00 AM -7:00 PM</div>
                                        </div>
                                        <div class="schedual-box"><i class="mcare-flaticon-dental-care"></i>
                                            <h4>Chuyên Gia Tim Mạch<br /> Bác sĩ Hiếu</h4>
                                            <div class="schedual-time"><em class="ion-ios-stopwatch-outline"></em>Thứ 5 &#8211; Chủ Nhật <br /> 10:00 AM -7:00 PM</div>
                                        </div>
                                        <div class="schedual-box"><i class="mcare-flaticon-medical28"></i>
                                            <h4>Chuyên Gia Tim Mạch<br />Bác sĩ Hải</h4>
                                            <div class="schedual-time"><em class="ion-ios-stopwatch-outline"></em>Thứ 3 &#8211; Chủ Nhật <br /> 10:00 AM -7:00 PM</div>
                                        </div>
                                        <div class="schedual-box"><i class="mcare-flaticon-ear"></i>
                                            <h4>Chuyên Gia Tim Mạch<br />Bác sĩ Thi</h4>
                                            <div class="schedual-time"><em class="ion-ios-stopwatch-outline"></em>Thứ 4 &#8211; Thứ 7 <br /> 10:00 AM -7:00 PM</div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

            </section>

            <section id="layers-widget-column-52" class="widget layers-content-widget row content-vertical-massive contact-info ">
                <div class="container clearfix">
                    <div class="section-title clearfix medium text-center ">
                        <h3 class="heading">Thông Tin Liên Hệ</h3>
                    </div>
                </div>
                <div class="row container list-grid">

                    <div id="layers-widget-column-52-362" class="layers-masonry-column layers-widget-column-362 span-3  column one">

                        <div class="media image-top medium">

                            <div class="media-body text-center">
                                <h5 class="heading">
                                    Địa Chỉ </h5>
                                <div class="excerpt">
                                    <p><?=$thongtin[1]['value']?></p>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div id="layers-widget-column-52-356" class="layers-masonry-column layers-widget-column-356 span-3  column two">

                        <div class="media image-top medium">

                            <div class="media-body text-center">
                                <h5 class="heading">
                                    Email </h5>
                                <div class="excerpt">
                                    <p><?=$thongtin[3]['value']?></p>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div id="layers-widget-column-52-272" class="layers-masonry-column layers-widget-column-272 span-3  column three">

                        <div class="media image-top medium">

                            <div class="media-body text-center">
                                <h5 class="heading">
                                    Điện Thoại </h5>
                                <div class="excerpt">
                                    <p><?=$thongtin[2]['value']?></p>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div id="layers-widget-column-52-84" class="layers-masonry-column layers-widget-column-84 span-3  column foure">

                        <div class="media image-top medium">

                            <div class="media-body text-center">
                                <h5 class="heading">
                                    Website </h5>
                                <div class="excerpt">
                                    <p><?=HOME?></p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

            </section>

            <section class="lcam-contents-widget-section widget row content-vertical-massive lcam-widget lcam-contents-widget logo-lien-ket " id="layers-widget-lcam_contents-15">

                <!-- set overlay section -->


                <div class="lcam-contents-widget-container lcam-widget-container container">
                    <div class="lcam-carousel-container" data-mode="horizontal" data-speed="500" data-maxslides="4" data-moveslides="1" data-slidemargin="0" data-randomstart=false data-adaptiveheight=false data-adaptiveHeightspeed="0" data-touchenabled=true data-auto=false
                        data-pause="4000" data-autohover=false data-autodelay="0" data-ticker=false data-tickerhover=true>
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
