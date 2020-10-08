<?php
    require '../libs/startup.php';
    require '../libs/database.php';
    require '../libs/model.php';
    $data = new model();
    $id = $_REQUEST['id'];
    $quanhuyen = $data->quanhuyen($id);
    $str = '<select style="height:40px; width:100%" id="quanhuyen" name="quanhuyen" onchange="phiship(this.value)"><option value="0">Quận/huyện</option>';
    foreach ($quanhuyen AS $item) {
        $str.='<option value="'.$item['id'].'">'.$item['name'].'</option>';
    }
    $str.= '</select>';
    echo $str;
?>
