<script type="text/javascript" src="js/donhang.js"></script>
        <div class="content mt-3">
            <div class="animated fadeIn">
                <div class="row">
                    <div class="col-md-12">
                        <div class="card">
                            <div class="card-header">
                                <strong class="card-title">Quản lý đơn hàng</strong>
                                <a href="donhangadd" class="btn btn-primary"><i class="fa fa-plus"></i>&nbsp; Tạo đơn mới</a>
                                

                            </div>
                            <div class="card-body" >
                              <table id="example" class="table table-striped table-bordered" style="width:100%">
                                  <thead>
                                      <tr>
                                            <th>STT</th>
                                            <th>Khách hàng</th>
                                            <th>Số điện thoại</th>
                                            <th>Số lượng</th>
                                            <th>Ngày giờ</th> 
                                            <th>Tình trạng</th>
                                            <th>Cập nhật</th>
                                            <th>Chức năng</th>
                                      </tr>
                                  </thead>
                                  <tbody>
                                      <?php
                                        $i=1;
                                        foreach($this->data as $row) {
                                            echo '<tr>
                                                <td>'.$i.'</td>
                                                <td>'.$row['name'].'</td>
                                                <td>'.$row['sdt'].'</td>
                                                <td>'.$row['soluong'].'</td>
                                                <td>'.date("d/m/Y", strtotime($row['ngay_gio'])).'</td>';
                                                 if ($row['tinh_trang']==1 || $row['tinh_trang']==2 || $row['tinh_trang']==0)
                                    echo'<td align="center"><a ';
                                    if ($row['tinh_trang']==1)
                                    echo 'class="btn cur-p btn-primary">Đơn hàng mới</a>';
                                    elseif ($row['tinh_trang']==2)
                                        echo 'class="btn cur-p btn-warning">Đang giao hàng</a>';
                                    elseif($row['tinh_trang']==0)
                                    echo 'class="btn cur-p btn-danger">Hủy</a></td>';
                                    elseif ($row['tinh_trang']==3)
                                        echo '<td align="center"><button class="btn cur-p btn-success" disabled>Hoàn thành</button>';
                                    echo '<td><a href="donhang/chitiet?sdt='.$row['sdt'].'&date='.$row['ngay_gio'].'" class="btn cur-p btn-primary">Chi tiết đơn hàng</a></td>';
                                    echo '<td><a href="donhang/indon?sdt='.$row['sdt'].'&date='.$row['ngay_gio'].'" class="btn cur-p btn-info">In đơn</a>  <a href="donhang/xoa?sdt='.$row['sdt'].'&date='.$row['ngay_gio'].'" class="btn cur-p btn-danger">Xóa</a></td>';
                                echo '</tr> ';
                                            $i++;
                                        }

                                      ?>
                                  </tbody>
                              </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div><!-- .animated -->
        </div><!-- .content -->

        <div class="modal fade" id="largeModal" tabindex="-1" role="dialog" aria-labelledby="largeModalLabel" aria-hidden="true">
            <div class="modal-dialog modal-lg" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="largeModalLabel">Thông tin đơn hàng</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <form id="form-client" method="post" enctype="multipart/form-data" action="donhang/save">
                    <div class="modal-body">
                        <div class="row">
                            <div class="col-sm-6">
                                <div class="row form-group">
                                    <input type="hidden" id="id" name="id">
                                    <div class="col col-md-3"><label for="madon" class=" form-control-label">Đơn hàng</label></div>
                                    <div class="col-12 col-md-9">
                                        <input type="text" id="madon" name="madon" placeholder="Mã đơn hàng" class="form-control" readonly>
                                    </div>
                                </div>
                                <div class="row form-group">
                                    <div class="col col-md-3"><label for="diachi" class=" form-control-label">Địa chỉ</label></div>
                                    <div class="col-12 col-md-9">
                                        <input type="text" id="diachi" name="diachi" placeholder="Địa chỉ giao hàng" class="form-control">
                                    </div>
                                </div>
                                <div class="row form-group">
                                    <div class="col col-md-3"><label for="thanhtoan" class=" form-control-label">Thanh toán</label></div>
                                    <div class="col-12 col-md-9">
                                        <select name="thanhtoan" id="thanhtoan" class="form-control" >
                                            <option value="1">Thanh toán khi nhận hàng (COD)</option>
                                            <option value="2">Chuyển khoản</option>
                                        </select>
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-6">
                                <div class="row form-group">
                                    <div class="col col-md-3"><label for="khachhang" class=" form-control-label">Khách hàng</label></div>
                                    <div class="col-12 col-md-9">
                                        <input type="text" id="khachhang" name="khachhang" placeholder="Tên khách hàng" class="form-control" readonly>
                                    </div>
                                </div>
                                <div class="row form-group">
                                    <div class="col col-md-3"><label for="dienthoai" class=" form-control-label">Điện thoại</label></div>
                                    <div class="col-12 col-md-9">
                                          <input type="text" id="dienthoai" name="dienthoai" placeholder="Số điện thoại" class="form-control" readonly>
                                    </div>
                                </div>
                                <div class="row form-group">
                                    <div class="col col-md-3"><label for="ghichu" class=" form-control-label">Ghi chú</label></div>
                                    <div class="col col-md-9">
                                          <input type="text" id="ghichu" name="ghichu" placeholder="Ghi chú đơn" class="form-control">
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="card-body">
                          <table id="detail" class="table table-striped table-bordered">
                              <thead>
                                  <tr>
                                        <th>STT</th>
                                        <th>Sản phẩm</th>
                                        <th>Số lượng</th>
                                        <th>Đơn giá</th>
                                        <th>Chiết khấu TM</th>
                                        <th>Chiết khấu %</th>
                                        <th>Thành tiền</th>
                                  </tr>
                              </thead>
                              <tbody id="tbody">
                              </tbody>
                          </table>
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal"><i class="fa fa-arrow-circle-left"></i>&nbsp;Cancel</button>
                        <button type="submit" class="btn btn-primary"><i class="fa fa-save"></i>&nbsp; Update</button>
                    </div>
                    </form>
                </div>
            </div>
        </div>


