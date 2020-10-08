<?php
class donhang extends controller
{
   function __construct()
   {
       parent::__construct();
   }

   function index()
   {
       require('layouts/header.php');
       $this->view->data = $this->model->getdata();
       $this->view->render('donhang/index');
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

   function indon()
   {
       $sdt = isset($_REQUEST['sdt']) ? $_REQUEST['sdt'] : 0;
       $date = isset($_REQUEST['date']) ? $_REQUEST['date'] : 0;
       $this->view->data = $this->model->indon($sdt,$date);
       $this->view->render('donhang/indon');
   }

   function save()
   {
       $id = $_REQUEST['id'];
       $diachi = $_REQUEST['diachi'];
       $ghichu = $_REQUEST['ghichu'];
       $data = ['dia_chi'=>$diachi,'noi_dung'=>$ghichu];
       require 'layouts/header.php';
       if ($this->model->saverow($id,$data)) {
           $this->view->thongbao = 'Cập nhật thành công! <a href="donhang">Nhấn vào đây để quay lại</a>';
           $this->view->render('thongbao');
       } else {
           $this->view->thongbao = 'Cập nhật không thành công! <a href="donhang">Nhấn vào đây để quay lại</a>';
           $this->view->render('canhbao');
       }
       require 'layouts/footer.php';
   }

   function updatedon()
   {

       $sdt = isset($_REQUEST['sdt']) ? $_REQUEST['sdt'] : 0;
       $date = isset($_REQUEST['date']) ? $_REQUEST['date'] : 0;
       $tt = isset($_REQUEST['tt']) ? $_REQUEST['tt'] : 0;
       $name = $_REQUEST['name'];
       $email = $_REQUEST['email'];
       $sdt = $_REQUEST['sdt'];
       $diachi = $_REQUEST['dia_chi'];
       $ghichu = $_REQUEST['ghi_chu'];
       $data = ['name'=>$name,'email'=>$email,'sdt'=>$sdt,'dia_chi'=>$diachi,'ghi_chu'=>$ghichu];
       $this->model->updatedon($sdt,$date,$tt,$data);
       echo "<script>window.location.assign('".CMS."/donhang');</script>";
       
   }

   function chitiet()
   {
       $sdt = isset($_REQUEST['sdt']) ? $_REQUEST['sdt'] : 0;
       $date = isset($_REQUEST['date']) ? $_REQUEST['date'] : 0;
       $this->view->data = $this->model->sanpham($sdt,$date);
       $this->view->render('donhang/chitiet');
   }

  function xoa()
   {
       $sdt = isset($_REQUEST['sdt']) ? $_REQUEST['sdt'] : 0;
       $date = isset($_REQUEST['date']) ? $_REQUEST['date'] : 0;
       $this->model->delObj($sdt,$date);
      echo "<script>window.location.assign('".CMS."/donhang');</script>";
   }
}
?>
