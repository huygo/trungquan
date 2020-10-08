<?php
class index extends controller
{
   function __construct()
   {
       parent::__construct();
   }

   function index()
   {
       require('layouts/header.php');
       $this->view->render('index');
       require('layouts/footer.php');
   }

   function matkhau()
   {
       require(HEADER);
       if (MOBILE)
          $this->view->render('index/index_m');
       else
          $this->view->render('index/matkhau');
       require(FOOTER);
   }

   function changepass()
   {
       $matkhaucu  = md5(md5($_REQUEST['matkhaucu']));
       $matkhaumoi = md5(md5($_REQUEST['matkhaumoi']));
       $retype     = md5(md5($_REQUEST['retype']));
       if ($this->model->checkpass($_SESSION['user']['id'], $matkhaucu)) {
           if ($matkhaumoi == $retype) {
               if ($this->model->changepass($_SESSION['user']['id'], $matkhaumoi)) {
                   $jsonObj['msg']     = "Đổi mật khẩu thành công";
                   $jsonObj['success'] = true;
               } else {
                   $jsonObj['msg']     = "Đổi mật khẩu không thành công";
                   $jsonObj['success'] = false;

               }
           } else {
               $jsonObj['msg']     = "Xác nhận mật khẩu không đúng";
               $jsonObj['success'] = false;
           }
       } else {
           $jsonObj['msg']     = "Mật khẩu cũ không đúng";
           $jsonObj['success'] = false;
       }
       $this->view->jsonObj = json_encode($jsonObj);
       $this->view->render('common/json');
   }

   function logout()
   {
       $this->model->logout();
       session_destroy();
       header('Location: ' . URL);
   }

// DASHBOARD
   function congviec(){
        $jsonObj = $this->model->congviec();
     		$this->view->jsonObj = json_encode($jsonObj);
        $this->view->render('common/json');
 	 }

   function dichvu(){
        $jsonObj = $this->model->dichvu();
     		$this->view->jsonObj = json_encode($jsonObj);
        $this->view->render('common/json');
 	 }


// Notification
  function events(){
       $jsonObj = $this->model->events();
    	 $this->view->jsonObj = json_encode($jsonObj);
       $this->view->render('common/json');
	 }

   function eventstop(){
        $id = $_REQUEST['id'];
        $this->model->eventstop($id);
 	 }


}
?>
