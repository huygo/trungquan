<?php
class sanpham extends controller
{
   function __construct()
   {
       parent::__construct();
   }

   function index()
   {
       require('layouts/header.php');
       $this->view->data = $this->model->getdata();
       $this->view->danhmuc = $this->model->danhmuc();
       $this->view->render('sanpham');
       require('layouts/footer.php');
   }

   function getrow()
   {
       $id = $_REQUEST['id'];
       $data = $this->model->getrow($id);
       if (count($data)>0) {
           $jsonObj['data'] = $data[0];
           $jsonObj['success'] = true;
       } else {
           $jsonObj['err'] = 'Lỗi đọc dữ liệu từ máy chủ';
           $jsonObj['success'] = false;
       }
       $this->view->jsonObj = json_encode($jsonObj);
       $this->view->render('json');
   }

   function save()
   {
       $id = $_REQUEST['id'];
       $name = $_REQUEST['name'];
       $url = ($_REQUEST['url']!='')?$_REQUEST['url']:functions::convertname($name);
       $masp = $_REQUEST['masp'];
       $hinhanh = $_REQUEST['hinhanh'];
       $gianiemyet = str_replace(",","",$_REQUEST['gianiemyet']);
       $giaban = str_replace(",","",$_REQUEST['giaban']);
       $danhmuc = $_REQUEST['danhmuc'];
       $mota = $_REQUEST['mota'];
       $thanhphan = $_REQUEST['thanhphan'];
       $huongdan = $_REQUEST['huongdan'];
       $khuyencao = $_REQUEST['khuyencao'];
       $vitri = $_REQUEST['vitri'];
       $data = ['ma_sp'=>$masp, 'name'=>$name, 'hinh_anh'=>$hinhanh,'gia_niem_yet'=>$gianiemyet, 'com'=>$vitri,
          'gia_ban'=>$giaban, 'mo_ta'=>$mota,'noi_dung'=>$thanhphan,'tinh_nang'=>$huongdan, 'danh_muc'=>$danhmuc,
          'khuyen_cao'=>$khuyencao, 'url'=>$url];
       require 'layouts/header.php';
       if ($this->model->save($id,$data)) {
           $this->view->thongbao = 'Cập nhật thành công! <a href="sanpham">Nhấn vào đây để quay lại</a>';
           $this->view->render('thongbao');
       } else {
           $this->view->thongbao = 'Cập nhật không thành công! <a href="sanpham">Nhấn vào đây để quay lại</a>';
           $this->view->render('canhbao');
       }
       require 'layouts/footer.php';
   }

   function del()
   {
       $id = $_REQUEST['id'];
       require 'layouts/header.php';
       if ($this->model->del($id)) {
           $this->view->thongbao = 'Đã xóa bản ghi! <a href="sanpham">Nhấn vào đây để quay lại</a>';
           $this->view->render('thongbao');
       } else {
           $this->view->thongbao = 'Có lỗi khi xóa bản ghi này! <a href="sanpham">Nhấn vào đây để quay lại</a>';
           $this->view->render('canhbao');
       }
       require 'layouts/footer.php';
   }
}
?>
