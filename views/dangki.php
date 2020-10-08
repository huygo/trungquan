<div class="site-section bg-light" data-aos="fade-up">
    <div class="container">
        <center><h1 style="margin-bottom: 20px;">Đăng ký thành viên</h1></center>
        <div class="row align-items-first">
          <div class="col-md-7">
          <?php
              if (isset($_POST['sdt'])) {
                  echo '<div class="p-3 p-lg-5 border bg-white">';
                  $sdt= $_POST['sdt'];
                  if ($data->checkdienthoai($sdt)==0) {
                        $name= (isset($_POST['name']) && ($_POST['name']!=''))?$_POST['name']:$sdt;
                        $email= (isset($_POST['email']) && ($_POST['email']!=''))?$_POST['email']:'';
                        if($data->taikhoan($name,$sdt,$email)) {
                            $data->MuaTip($sdt);
                            $data->sendTip($sdt);
                            echo "Chúc mừng bạn đã đăng ký tài khoản thành công, bạn được tặng 5 tip để sử dụng trong vòng 1 tháng, mật khẩu đăng nhập sẽ được gửi đến cho bạn qua tin nhắn SMS!<br><br>";
                            echo '<a href="dangnhap" class="btn btn-primary btn-lg btn-block">Đăng nhập</a>';
                        }
                        else
                            echo 'Rất tiếc đã có lỗi khi đăng ký tài khoản, vui lòng liên hệ với bộ phận hỗ trợ!';
                  } else {
                        echo "Số điện thoại này đã đăng ký trong hệ thống!<br><br>";
                        echo "Nếu bạn thực sự là chủ nhân của số điện thoại này, bạn có thể <a href='reset?sdt=".$sdt."'>nhấn vào đây</a> để xin cấp lại mật khẩu.<br><br>";
                        echo '<a href="dangki" class="btn btn-primary btn-lg btn-block">Đăng ký số khác</a>';
                  }
                  echo '</div>';
              } else {
            ?>
            <form method="post" class="bg-white">
              <div class="p-3 p-lg-5 border">
                <div class="form-group row">
                  <div class="col-md-6">
                    <label for="c_fname" class="text-black">Tên của bạn </label>
                    <input type="text" class="form-control" id="name" name="name" placeholder="Không bắt buộc" >
                  </div>
                  <div class="col-md-6">
                    <label for="c_lname" class="text-black">Số điện thoại <span class="text-danger">*</span></label>
                    <input type="text" class="form-control" id="sdt" name="sdt" required pattern="[0-9]{10,12}" >
                  </div>
                </div>
                <div class="form-group row">
                  <div class="col-md-12">
                    <label for="c_email" class="text-black">Email </label>
                    <input type="email" class="form-control" id="email" name="email"  placeholder="Không bắt buộc">
                  </div>
                </div>
                <!-- <div class="form-group row">
                  <div class="col-md-12">
                    <label for="c_subject" class="text-black">Mật khẩu </label>
                    <input type="password" required class="form-control" id="pass" name="pass" placeholder="Mật khẩu phải chứa ít nhất 6 ký tự!" pattern=".{6,}">
                  </div>
                </div>
                <div class="form-group row">
                  <div class="col-md-12">
                    <label for="c_subject" class="text-black">Nhập lại mật khẩu </label>
                    <input type="password" require class="form-control" id="re_pass" name="re_pass" placeholder="Gõ lại mật khẩu của bạn để xác nhận!" >
                  </div>
                </div> -->
                <div class="form-group row">
                  <div class="col-lg-12">
                    <input type="submit" class="btn btn-primary btn-lg btn-block" name="btndangky" value="Đăng ký" >
                  </div>
                </div>
                <center><span>Bạn đã có tài khoản? <a href="<?php echo HOME; ?>/dangnhap">Đăng nhập</a></span></center>
              </div>
            </form>
          <?php } ?>
        </div>

          <div class="col-md-5">
            <div class="p-4 border mb-3 bg-white">
              <p class="mb-0">Hỗ trợ</p>
              <p class="mb-4"><?php echo $thongtin['dia_chi']; ?></p>
              <p class="mb-0">Số điện thoại</p>
              <p class="mb-4"><a href="tel:<?php echo $thongtin['dien_thoai']; ?>"><?php echo $thongtin['dien_thoai']; ?></a></p>
              <p class="mb-0">Email</p>
              <p class="mb-4"><a href="mailto:<?php echo $thongtin['email']; ?>"><?php echo $thongtin['email']; ?></a></p>
            </div>
          </div>
        </div>
      </div>
</div>
