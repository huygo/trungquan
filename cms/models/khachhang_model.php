<?php
class khachhang_model extends model
{
    function __construct()
    {
        parent::__construct();
    }

    function getdata()
    {
        $result   = array();
        $dieukien = " WHERE tinh_trang=1 ";
        $query           = $this->db->query("SELECT *,
            (SELECT name FROM nhanvien WHERE id=nhan_vien) AS nhanvien
            FROM khachhang $dieukien ");
        if ($query)
            $result  = $query->fetchAll(PDO::FETCH_ASSOC);
        return $result;
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

    function nguoiquanly()
    {
        $result   = array();
        $dieukien = " WHERE tinh_trang=1 ";
        $query           = $this->db->query("SELECT id,name FROM nhanvien $dieukien ");
        if ($query)
            $result  = $query->fetchAll(PDO::FETCH_ASSOC);
        return $result;
    }

    function saverow($id, $data)
    {
        if($id>0)
            $query = $this->update("khachhang", $data, "id = $id");
        else {
            $data['tinh_trang']=1;
            $query = $this->insert("khachhang", $data);
        }
        return $query;
    }

}

?>
