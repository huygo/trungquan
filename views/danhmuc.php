<?php 
  $gioithieu=$data->gioithieu(14);
 ?>
<section class="v2_bnc_inside_page">
   <div class="clearfix"></div>
   <div class="v2_breadcrumb_main">
      <div class="container">
         <h1>Giới thiệu</h1>
         <ul class="breadcrumb">
            <li><a href="<?=HOME?>">Trang chủ</a></li>
            <li><a href="about">Giới thiệu</a></li>
            <li><a href="<?=HOME?>"><?=$thongtin[0]['value']?></a></li>
         </ul>
      </div>
   </div>
   <div class="v2_bnc_about_details padding-top-20 padding-bottom-20">
      <div class="container">
         <div class="v2_bnc_news_details_title">
            <h1><?=$thongtin[0]['value']?></h1>
         </div>
         <time class="v2_bnc_create_time"> <i class="fa fa-calendar-o"></i> Ngày đăng : <?=date('d/m/Y',strtotime($gioithieu['updated']));?> </time>
         <div class="v2_bnc_news_details_post">
            <?php echo $gioithieu['noi_dung']; ?>
         </div>
         
      </div>
   </div>
   </div>
</section>