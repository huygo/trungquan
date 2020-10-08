<?php
class donhang_model extends model
{
    function __construct()
    {
        parent::__construct();
    }

    function getdata()
    {
       $result = array();
       $dieukien = " WHERE 1 ";
       $query = $this->db->query("SELECT *,
        (SELECT gia_ban FROM sanpham WHERE id=a.id_sp) AS gia,
        (SELECT SUM(so_luong) FROM 1_dathang WHERE sdt=a.sdt AND ngay_gio=a.ngay_gio) AS soluong
        FROM 1_dathang a $dieukien GROUP BY ngay_gio  ORDER BY id DESC ");
        if ($query)
            $result  = $query->fetchAll(PDO::FETCH_ASSOC);
       return $result;
    }

    function indon($sdt,$date)
   {
       $query = $this->db->query("SELECT *,
        (SELECT name FROM sanpham WHERE id=a.id_sp) AS tensp,
        (SELECT gia_ban FROM sanpham WHERE id=a.id_sp) AS gia
        FROM 1_dathang a WHERE sdt=$sdt AND ngay_gio='$date' ");
       return ($query->fetchAll(PDO::FETCH_ASSOC));
   }

    function sanpham($sdt,$date)
   {
       $query = $this->db->query("SELECT *,
        (SELECT name FROM sanpham WHERE id=a.id_sp) AS tensp,
        (SELECT gia_ban FROM sanpham WHERE id=a.id_sp) AS gia,
        (SELECT hinh_anh FROM sanpham WHERE id=a.id_sp) AS hinhanh
        FROM 1_dathang a WHERE sdt=$sdt AND ngay_gio='$date' ");
       return ($query->fetchAll(PDO::FETCH_ASSOC));
   }

    function getrow($id)
    {
        $result   = array();
        $dieukien = " WHERE tinh_trang=1 AND id=$id ";
        $query           = $this->db->query("SELECT * FROM data $dieukien ");
        if ($query)
            $result  = $query->fetchAll(PDO::FETCH_ASSOC);
        return $result;
    }

    function updatedon($sdt,$date,$tt,$data)
   {
      if ($tt==1) {
        $data['tinh_trang']=2;
        $query = $this->update("1_dathang", $data, " sdt=$sdt AND ngay_gio='$date' ");
      }else{
         $data['tinh_trang']=3;
        $query = $this->update("1_dathang", $data, " sdt=$sdt AND ngay_gio='$date' ");
      }
       
       return $query;
   }

    function delObj($sdt,$date)
   {
       $query = $this->delete("1_dathang", " sdt=$sdt AND ngay_gio='$date' ");
       return $query;
   }

    function saverow($id, $data)
    {
        if($id>0)
            $query = $this->update("donhang", $data, "id = $id");
        else {
            $data['tinh_trang']=1;
            $query = $this->insert("donhang", $data);
        }
        return $query;
    }

}

?>
