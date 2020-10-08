<?php
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


<section class="v2_bnc_inside_page">
   <div class="clearfix"></div>
   <div class="v2_breadcrumb_main">
      <div class="container">
         <h1>Liên Hệ</h1>
         <ul class="breadcrumb">
            <li><a href="<?=HOME?>">Trang chủ</a></li>
            <li><a href="lienhe">Liên Hệ</a></li>
            <li><a href="<?=HOME?>"><?=$thongtin[0]['value']?></a></li>
         </ul>
      </div>
   </div>

  <!--================Contact Area =================-->
  <section class="contact_area section_gap_bottom">
    <div class="container">
      <div id="mapBox1" class="mapBox">
        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3725.0859130033664!2d105.86366231540198!3d20.989192994502723!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3135ac1a22f105eb%3A0x5105c4650ab0cba7!2zODcgTMSpbmggTmFtLCBNYWkgxJDhu5luZywgSG_DoG5nIE1haSwgSMOgIE7hu5lpLCBWaeG7h3QgTmFt!5e0!3m2!1svi!2s!4v1590140877235!5m2!1svi!2s" width=100% height="420" frameborder="0" style="border:0;" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe>
      </div>
      <div class="clearfix"></div>

      <div class="row" style="margin-top: 20px;">
        <div class="col-lg-3">
          <div class="v2_bnc_footer_info_company widget-bottom">
                  <div style="text-align: center;"><strong style="color: rgb(0, 0, 128); font-size: 20px;"><?=$thongtin[0]['value']?></strong></div>
                  <div style="text-align: center;"><strong><span style="font-size:14px;"><span style="color:rgb(0, 0, 205);">Đc: <?=$thongtin[1]['value']?><br  />
                     ĐT:</span><span style="color:rgb(255, 0, 0);"> </span><span style="text-align: justify;"><a href="tel:<?=$thongtin[2]['value']?>"><span style="color:rgb(255, 0, 0);"><?=$thongtin[2]['value']?></span></a></span><span style="color:rgb(255, 0, 0);"> - </span><a href="tel:<?=$thongtin[8]['value']?>"><span style="color:rgb(255, 0, 0);"><?=$thongtin[8]['value']?></span></a><br  />
                     
                  </div>
                  <div style="text-align: center;"><strong><span style="font-size:14px;"><span style="color:rgb(0, 0, 205);">Email: </span><a href="mailto:<?=$thongtin[3]['value']?>"><span style="color:rgb(0, 0, 205);"><?=$thongtin[3]['value']?></span></a><br  />
                     <span style="color:rgb(0, 0, 205);">Website: </span><a href="<?=HOME?>"><span style="color:rgb(0, 0, 205);"><?=HOME?></span></a><span style="color:rgb(0, 0, 205);"> </strong>
                  </div>
               </div>
        </div>

        <div class="col-lg-9">
          <form class="row contact_form" action="" method="post">
            <div class="col-md-6">
              <div class="form-group">
                <input type="text" class="form-control" id="name" name="name" placeholder="Tên của bạn" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Tên của bạn'" required="">
              </div>
              <div class="form-group">
                <input type="email" class="form-control" id="email" name="email" placeholder="Email của bạn" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Email của bạn'" required="">
              </div>
              <div class="form-group">
                <input type="text" class="form-control" id="subject" name="subject" placeholder="Nội dung quan tâm" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Nội dung quan tâm'">
              </div>
            </div>
            <div class="col-md-6">
              <div class="form-group">
                <textarea class="form-control" name="message" id="message" rows="5" placeholder="Tin nhắn" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Tin nhắn'"></textarea>
              </div>
            </div>
            <div class="col-md-12 text-right">
              <button type="submit" value="submit" name="btngui" class="btn btn-success">Gửi</button>
              <!-- <button type="submit" value="submit" class="primary-btn" name="btngui">Gửi</button> -->
            </div>
          </form>
        </div>
      </div>
    </div>
  </section>
    </section>
