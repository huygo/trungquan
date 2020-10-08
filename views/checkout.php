<?php
      $hoten = $_REQUEST['name'];
      $dienthoai = $_REQUEST['number'];
      $diachi = $_REQUEST['diachi'];
      $thanhpho = $_REQUEST['thanhpho'];
      $quanhuyen = $_REQUEST['quanhuyen'];
      $cod = $_REQUEST['cod'];
      $ghichu = $_REQUEST['ghichu'];
      $sotien = $_REQUEST['total'];
      $phiship = str_replace(',','',$_REQUEST['ship']);
      $madon=$data->password_generate(6);
      // 'name'=>$hoten,'dien_thoai'=>$dienthoai,'email'=>$email,'company'=>$company,
      $donhang = ['dia_chi'=>$diachi, 'tien_hang'=>$sotien, 'nhan_vien'=>'1', 'phi_ship'=>$phiship,
          'thanh_pho'=>$thanhpho, 'quan_huyen'=>$quanhuyen,'noi_dung'=>$ghichu,
          'ngay_gio'=>date("Y-m-d H:i:s"),'cod'=>$cod, 'tinh_trang'=>1,'ma_don'=>$madon];
      if ($data->donhang($donhang,$hoten,$dienthoai)) {
          $_SESSION['giohang']='';
          echo '
          <section class="banner_area">
              <div class="banner_inner d-flex align-items-center">
                  <div class="container">
                      <div class="banner_content d-md-flex justify-content-between align-items-center">
                          <div class="mb-3 mb-md-0">
                              <h1 style="font-family: \'Roboto\', sans-serif;">Đơn hàng đã được tiếp nhận, mã đơn hàng: '.$madon.'</h1>
                              <p>Cảm ơn bạn đã mua sắm tại trang ybc.com, vui lòng ghi nhớ mã số trên để kiểm tra tình trạng đơn hàng trên hệ thống</p>
                          </div>
                          <div class="page_link">
                              <a href="">Tiếp tục mua hàng</a>
                          </div>
                      </div>
                  </div>
              </div>
          </section>
          ';
      } else {
          echo '
          <section class="banner_area">
              <div class="banner_inner d-flex align-items-center">
                  <div class="container">
                      <div class="banner_content d-md-flex justify-content-between align-items-center">
                          <div class="mb-3 mb-md-0">
                              <h1 style="font-family: \'Roboto\', sans-serif;">Đã có lỗi khi gửi đơn hàng!</h1>
                              <p>Vui lòng liên hệ số hotline 1900 1199 để được hỗ trợ, xin cảm ơn!</p>
                          </div>
                          <div class="page_link">
                              <a href="">Quay lại trang chủ</a>
                          </div>
                      </div>
                  </div>
              </div>
          </section>
          ';
      }
?>
