<?php
class khachhang extends controller
{
   function __construct()
   {
       parent::__construct();
   }

   function index()
   {
       require('layouts/header.php');
       $this->view->data = $this->model->getdata();
       $this->view->nhanvien = $this->model->nguoiquanly();
       $this->view->render('khachhang');
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
       $diachi = $_REQUEST['diachi'];
       $dienthoai = $_REQUEST['dienthoai'];
       $nhanvien = $_REQUEST['nhanvien'];
       $data = ['name'=>$name, 'dia_chi'=>$diachi,'dien_thoai'=>$dienthoai,'nhan_vien'=>$nhanvien];
       require 'layouts/header.php';
       if ($this->model->saverow($id,$data)) {
           $this->view->thongbao = 'Cập nhật thành công! <a href="khachhang">Nhấn vào đây để quay lại</a>';
           $this->view->render('thongbao');
       } else {
           $this->view->thongbao = 'Cập nhật không thành công! <a href="khachhang">Nhấn vào đây để quay lại</a>';
           $this->view->render('canhbao');
       }
       require 'layouts/footer.php';
   }

   function del()
   {
       $id = $_REQUEST['id'];
       $data = ['tinh_trang'=>0];
       require 'layouts/header.php';
       if ($this->model->saverow($id,$data)) {
           $this->view->thongbao = 'Đã xóa bản ghi! <a href="data">Nhấn vào đây để quay lại</a>';
           $this->view->render('thongbao');
       } else {
           $this->view->thongbao = 'Có lỗi khi xóa bản ghi này! <a href="data">Nhấn vào đây để quay lại</a>';
           $this->view->render('canhbao');
       }
       require 'layouts/footer.php';
   }
}
?>
