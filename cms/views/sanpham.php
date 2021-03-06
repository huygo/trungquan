<script type="text/javascript" src="js/sanpham.js"></script>
<script type="text/javascript" src="libs/tinymce/tinymce.min.js"></script>
        <div class="content mt-3">
            <div class="animated fadeIn">
                <div class="row">
                    <div class="col-md-12">
                        <div class="card">
                            <div class="card-header">
                                <strong class="card-title">Quản lý sản phẩm</strong>
                                <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#largeModal" onclick="add()"><i class="fa fa-plus"></i>&nbsp; Add</button>
                            </div>
                            <div class="card-body">
                              <table id="example" class="table table-striped table-bordered">
                                  <thead>
                                      <tr>
                                            <th>ID</th>
                                            <th>Mã SP</th>
                                            <th>Tên sản phẩm</th>
                                            <th>Hình ảnh</th>
                                            <th>Giá niêm yết</th>
                                            <th>Giá bán</th>
                                            <th>Mô tả</th>
                                            <th>Thành phần</th>
                                            <th>Hướng dẫn</th>
                                            <th>Khuyến cáo</th>
                                            <th>Link ảnh</th>
                                            <th>Danh mục</th>
                                            <th>Vị trí</th>
                                            <th>URL</th>
                                            <th></th>
                                            <th></th>
                                      </tr>
                                  </thead>
                                  <tbody>
                                      <?php
                                        $i=0;
                                        foreach($this->data as$row) {
                                          echo '<tr>
                                              <td>'.$row['id'].'</td>
                                              <td>'.$row['ma_sp'].'</td>
                                              <td>'.$row['name'].'</td>
                                              <td>'.$row['hinhanh'].'</td>
                                              <td align="right">'.$row['gianiemyet'].'</td>
                                              <td align="right">'.$row['giaban'].'</td>
                                              <td align="right">'.$row['mo_ta'].'</td>
                                              <td align="right">'.$row['noi_dung'].'</td>
                                              <td align="right">'.$row['tinh_nang'].'</td>
                                              <td align="right">'.$row['khuyen_cao'].'</td>
                                              <td>'.$row['hinh_anh'].'</td>
                                              <td>'.$row['danh_muc'].'</td>
                                              <td>'.$row['com'].'</td>
                                              <td>'.$row['url'].'</td>
                                              <td><a href="javascript:void(0)" data-toggle="modal" data-target="#largeModal" onclick="edit('.$i.')"><i class="fa fa-edit"></i></a></td>
                                              <td><a href="sanpham/del?id='.$row['id'].'"><i class="fa fa-trash-o"></i></a>  </td>
                                          </tr>';
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

        <div class="modal fade" id="largeModal" tabindex="-1" role="dialog" aria-labelledby="largeModalLabel" aria-hidden="true" >
            <div class="modal-dialog modal-lg" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="largeModalLabel">Thông tin sản phẩm</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <form id="form-client" method="post" enctype="multipart/form-data" action="sanpham/save">
                    <div class="modal-body">
                        <div class="row">
                            <div class="col-sm-6">
                                <div class="row form-group">
                                    <input type="hidden" id="id" name="id">
                                    <div class="col col-md-3"><label for="name" class=" form-control-label">Tên SP</label></div>
                                    <div class="col-12 col-md-9">
                                        <input type="text" id="name" name="name" placeholder="Tên sản phẩm" class="form-control" required>
                                    </div>
                                </div>
                                <div class="row form-group">
                                    <div class="col col-md-3"><label for="hinhanh" class=" form-control-label">Link ảnh</label></div>
                                    <div class="col-12 col-md-9">
                                        <input type="text" id="hinhanh" name="hinhanh" placeholder="Link ảnh" class="form-control">
                                    </div>
                                </div>
                                <div class="row form-group">
                                    <div class="col col-md-3"><label for="gianiemyet" class=" form-control-label">Giá niêm yết</label></div>
                                    <div class="col-12 col-md-9">
                                        <input type="text"  id="gianiemyet" name="gianiemyet" placeholder="Giá niêm yết"
                                        class="form-control" onkeyup="javascript:this.value=Comma(this.value);">
                                    </div>
                                </div>
                                <div class="row form-group">
                                    <div class="col col-md-3"><label for="vitri" class=" form-control-label">Vị trí home</label></div>
                                    <div class="col-12 col-md-9">
                                        <input type="text" id="vitri" name="vitri" placeholder="Vị trí xuất hiện trên trang chủ" class="form-control">
                                    </div>
                                </div>
                            </div><div class="col-sm-6">
                                <div class="row form-group">
                                    <div class="col col-md-3"><label for="masp" class=" form-control-label">Mã SP</label></div>
                                    <div class="col-12 col-md-9">
                                        <input type="text" id="masp" name="masp" placeholder="Mã sản phẩm" class="form-control">
                                    </div>
                                </div>
                                <div class="row form-group">
                                    <div class="col col-md-3"><label for="danhmuc" class=" form-control-label">Danh mục</label></div>
                                    <div class="col-12 col-md-9">
                                          <select name="danhmuc" id="danhmuc" class="form-control">
                                              <option value="0">Chọn danh mục sản phẩm</option>
                                              <?php
                                                  foreach($this->danhmuc as $row)
                                                      echo '<option id="opt'.$row['id'].'" value="'.$row['id'].'">'.$row['name'].'</option>';
                                              ?>
                                          </select>
                                    </div>
                                </div>
                                <div class="row form-group">
                                    <div class="col col-md-3"><label for="giaban" class=" form-control-label">Giá bán</label></div>
                                    <div class="col-12 col-md-9">
                                        <input type="text" id="giaban" name="giaban" placeholder="Giá bán"
                                        class="form-control" onkeyup="javascript:this.value=Comma(this.value);">
                                    </div>
                                </div>
                                <div class="row form-group">
                                    <div class="col col-md-3"><label for="url" class=" form-control-label">URL</label></div>
                                    <div class="col-12 col-md-9">
                                        <input type="text" id="url" name="url" placeholder="Để trống sẽ cập nhật url theo tên SP" class="form-control">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="modal-footer">
                        <div class="col-12 col-md-12">
                            <h5>Mô tả</h5>
                            <textarea name="mota" id="mota"></textarea>
                        </div>
                    </div>
                    <div class="modal-footer">
                        <div class="col-12 col-md-12">
                            <h5>Thành phần</h5>
                            <textarea name="thanhphan" id="thanhphan"></textarea>
                        </div>
                    </div>
                    <div class="modal-footer">
                        <div class="col-12 col-md-12">
                            <h5>Hướng dẫn sử dụng</h5>
                            <textarea name="huongdan" id="huongdan"></textarea>
                        </div>
                    </div>
                    <div class="modal-footer">
                        <div class="col-12 col-md-12">
                            <h5>Khuyến cáo</h5>
                            <textarea name="khuyencao" id="khuyencao"></textarea>
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


        <script>
        	tinymce.init({
                        mode: "textareas",
        								entity_encoding : "raw",
                        plugins: ["advlist autolink lists link image charmap print preview anchor",
                                    "searchreplace visualblocks code fullscreen textcolor", "media",
                                    "insertdatetime media table contextmenu paste jbimages","fullscreen","moxiemanager"],
                        image_advtab: true,
                        paste_data_images: true,
                        browser_spellcheck : true,
                        relative_urls:false,
                        remove_script_host : false,
                        //convert_urls : true,
                        image_dimensions: false,
                        forced_root_block : false,
                        force_br_newlines : true,
                        force_p_newlines : false,
                        toolbar: " undo redo | styleselect | alignleft aligncenter alignright alignjustify | bullist numlist outdent indent | link image media insertfile |  fontsizeselect | forecolor backcolor | fullscreen"
        		});

            // Prevent bootstrap dialog from blocking focusin
            $(document).on('focusin', function(e) {
                if ($(e.target).closest(".mce-window").length) {
            		e.stopImmediatePropagation();
            	}
            });

            function them() {
          		var id=document.getElementById("danhmuc").value;
          		var row=document.getElementById("danhmuc");
          		var text=row.options[row.selectedIndex].text;
          		var danhsach=document.getElementById('danhsach');
          		var inner=danhsach.innerHTML+'<input type="checkbox" name="danhsach[]" value="'+id+'" checked=""> '+text+' ';
          		danhsach.innerHTML=inner;
          	}

        </script>
