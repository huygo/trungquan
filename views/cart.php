<?php
    if (isset($_SESSION['giohang']) && ($_SESSION['giohang']!='')) {
?>
<section class="banner_area">
    <div class="banner_inner d-flex align-items-center">
        <div class="container">
            <div class="banner_content d-md-flex justify-content-between align-items-center">
                <div class="mb-3 mb-md-0">
                    <h1 style="font-family: 'Roboto', sans-serif;">Giỏ hàng của bạn</h1>
                    <p>Cảm ơn bạn đã mua sắm tại trang ybc.com</p>
                </div>
                <div class="page_link">
                    <a href="">Tiếp tục mua hàng</a>
                </div>
            </div>
        </div>
    </div>
</section>
<section class="cart_area">
    <div class="container">
        <div class="cart_inner">
            <div class="table-responsive">
                <table class="table">
                    <thead>
                        <tr>
                          <th scope="col">Sản phẩm</th>
                          <th scope="col">Đơn giá</th>
                          <th scope="col">Số lượng</th>
                          <th scope="col">Thành tiền</th>
                          <th></th>
                        </tr>
                    </thead>
                    <tbody>
                    <?php
                          $cart = $data->cart($_SESSION['giohang']);
                          $total = 0;
                          foreach ($cart AS $item) {
                              echo '
                              <tr>
                                  <td>
                                      <div class="media">
                                          <div class="d-flex">
                                              <img src="'.$item['hinhanh'].'" alt="'.$item['hinhanh'].'" height="50" />
                                          </div>
                                          <div class="media-body">
                                              <p>'.$item['name'].'</p>
                                          </div>
                                      </div>
                                  </td>
                                  <td>
                                      <h5>'.number_format($item['dongia']).'</h5>
                                      <input type="hidden" id="dongia'.$item['id'].'" value="'.$item['dongia'].'">
                                  </td>
                                  <td>
                                      <div class="product_count">
                                          <input type="text" name="qty" id="soluong'.$item['id'].'" maxlength="12" value="'.$item['soluong'].'"  class="input-text qty" readonly>
                                          <button onclick="update('.$item['id'].',1)" class="increase items-count" type="button"><i class="lnr lnr-chevron-up"></i></button>
                                          <button onclick="update('.$item['id'].',0)" class="reduced items-count" type="button"><i class="lnr lnr-chevron-down"></i></button>
                                      </div>
                                  </td>
                                  <td>
                                      <h5 id="thanhtien'.$item['id'].'">'.number_format($item['thanhtien']).'</h5>
                                  </td>
                                  <td>
                                      <a class="genric-btn danger-border radius" href="javascript:void(0)" onclick="del('.$item['id'].')">Xóa</a>
                                  </td>
                              </tr>
                              ';
                              $total = $total+$item['thanhtien'];
                          }
                      ?>
                      <tr>
                          <td></td>
                          <td></td>
                          <td><h5>Tổng cộng đơn hàng:</h5></td>
                          <td><h5 id="tongcong"><?php echo number_format($total) ?></h5></td>
                          <td></td>
                      </tr>
                      <tr class="out_button_area">
                          <td colspan="5"><a class="main_btn" href="">Tiếp tục mua hàng</a></td>
                      </tr>
                    </tbody>
                </table>
            </div>

            <div class="billing_details">
                <div class="row">
                    <div class="col-lg-12">
                        <h3>Hoàn thành đơn hàng</h3>
                        <form id="fm" class="row contact_form needs-validation" action="checkout" method="post" novalidate>
                            <input type="hidden" id="total" name="total" value="<?php echo $total ?>">
                            <div class="col-md-6 form-group p_star">
                                <input type="text" class="form-control" id="name" name="name" required placeholder="Họ tên (bắt buộc)"/>
                            </div>
                            <div class="col-md-6 form-group p_star">
                                <input type="text" class="form-control" id="number" name="number" required placeholder="Số điện thoại (bắt buộc)" />
                            </div>
                            <div class="col-md-12 form-group">
                                <input type="text" class="form-control" id="diachi" name="diachi" placeholder="Địa chỉ nhận hàng" />
                            </div>
                            <div class="col-md-6 form-group p_star">
                                <select class="country_select" id="thanhpho" name="thanhpho" onchange="setquanhuyen(this.value)">
                                    <option value="0">Tỉnh/thành phố</option>
                                    <?php
                                        $thanhpho = $data->thanhpho();
                                        foreach ($thanhpho AS $item) {
                                            echo '<option value="'.$item['id'].'">'.$item['name'].'</option>';
                                        }
                                    ?>
                                </select>
                            </div>
                            <div class="col-md-6 form-group p_star" id="qh" name="qh">
                              <select class="country_select" >
                                  <option value="0">Quận/huyện</option>
                              </select>
                            </div>
                            <div class="col-md-6 form-group">
                                <select class="country_select" id="cod" name="cod"  >
                                    <option value="1">Thanh toán khi nhận hàng (COD)</option>
                                    <option value="2">Chuyển khoản</option>
                                </select>
                            </div>
                            <div class="col-md-6 form-group p_star">
                                <input type="text" class="form-control" id="ship" name="ship" readonly />
                            </div>
                            <div class="col-md-12 form-group">
                                <div class="creat_account">
                                    <h3>Ghi chú thêm</h3>
                                </div>
                                <textarea class="form-control" name="ghichu" id="ghichu" rows="1" placeholder="Ghi chú"></textarea>
                            </div>
                            <div class="col-md-12 form-group">
                                <button class="main_btn" type="submit">Gửi đơn hàng</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>

        </div>
    </div>
</section>
<script>
    function update(id,act) {
        var soluong = document.getElementById('soluong'+id);
        var dongia = document.getElementById('dongia'+id).value;
        var tongcong = document.getElementById("total").value;
        var demo = document.getElementById("demo").innerHTML;
        if (act==1) {
            soluong.value++;
            demo++;
            document.getElementById("demo").innerHTML=demo;
            var thanhtien = soluong.value*dongia;
            tongcong = parseInt(tongcong)+parseInt(dongia);
            document.getElementById('thanhtien'+id).innerHTML=Comma(thanhtien);
            document.getElementById("total").value = tongcong;
            document.getElementById('tongcong').innerHTML=Comma(tongcong);
        } else {
            soluong.value--;
            demo--;
            document.getElementById("demo").innerHTML=demo;
            var thanhtien = soluong.value*dongia;
            tongcong = parseInt(tongcong)-parseInt(dongia);
            document.getElementById('thanhtien'+id).innerHTML=Comma(thanhtien);
            document.getElementById("total").value = tongcong;
            document.getElementById('tongcong').innerHTML=Comma(tongcong);
        }
        $.get("views/updatecart.php?sp="+id+"&act="+act, function(data, status){
            // alert(data);
        });
    }

    function del(id){
        $.get("views/removefromcart.php?sp="+id, function(data, status){
            window.location.assign("cart");
        });
    }

    function setquanhuyen(id){
        $.get("views/setquanhuyen.php?id="+id, function(data, status){
            document.getElementById("qh").innerHTML=data;
        });
    }

    function phiship(value){
        $.get("views/phiship.php?id="+value, function(data, status){
            document.getElementById("ship").value=Comma(data);
        });
    }
</script>
<?php } else {
    echo '
    <section class="banner_area">
        <div class="banner_inner d-flex align-items-center">
            <div class="container">
                <div class="banner_content d-md-flex justify-content-between align-items-center">
                    <div class="mb-3 mb-md-0">
                        <h1 style="font-family: \'Roboto\', sans-serif;">Chưa có mặt hàng nào trong giỏ hàng</h1>
                        <p>Vui lòng quay lại trang chủ để chọn mặt hàng</p>
                    </div>
                    <div class="page_link">
                        <a href="">Tiếp tục mua hàng</a>
                    </div>
                </div>
            </div>
        </div>
    </section>
    ';
}
?>
