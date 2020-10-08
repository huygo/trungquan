<?php
$thisurl  = isset($_GET['url']) ? $_GET['url'] : null;
$url  = rtrim($thisurl, '/');
$url  = explode('/', $thisurl);
$data = new model();
if ($url[0]!='') {
    if ($url[0]=='blog')
        if (sizeof($url)==3)
            $view = 'danhmuc';
        else
            $view = 'baiviet';
    elseif ($url[0]=='product')
        if (sizeof($url)==3)
            $view = 'danhmucsp';
        else
            $view = 'sanpham';
    else
         $view = $url[0];
}
else
    $view = 'index';
$page = $data->pageinfo($url);
$thongtin = $data->thongtin();
$menu =$data->topmenu();
if ($view=='payment') {
     require 'views/'.$view.'.php';
}else{
require('layout/header.php');
if (file_exists('views/'.$view.'.php'))
    require 'views/'.$view.'.php';
else{
    echo '<div class="container">';
    echo "<center><h1>Nội dung đang được cập nhập</h1></center>";
    echo '<a href="'.HOME.'" class="btn btn-primary btn-lg btn-block">Về trang chủ</a>';
    echo '</div>';
}
require('layout/footer.php');
}
?>
