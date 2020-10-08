<div class="site-section bg-light" data-aos="fade-up">
    <div class="container">
        <center><h1 style="margin-bottom: 20px;">Reset mật khẩu</h1></center>
        <div class="row align-items-first">
          <div class="col-md-7">
          <?php
                  echo '<div class="p-3 p-lg-5 border bg-white">';
                   $sdt=isset($_REQUEST['sdt'])?$_REQUEST['sdt']:0;
                        if($sdt>0 && $data->taikhoan1($sdt)) {
                            echo "Mật khẩu đăng nhập đã được gửi đến cho bạn qua tin nhắn SMS!<br><br>";
                            echo '<a href="dangnhap" class="btn btn-primary btn-lg btn-block">Đăng nhập</a>';
                        }
                        else{
                            echo 'Rất tiếc đã có lỗi khi khôi phục mật khẩu, vui lòng liên hệ với bộ phận hỗ trợ!';
                  }
                  echo '</div>';
            ?>
            
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
