<?php
class model
{
    function __construct()
    {
        $this->db = new database();
        define("admin", 'admin');
        define("thongtin", 'thongtin');
        define("menu", 'menu');
        define("danhmuc", 'danhmuc');
        define("baiviet", 'baiviet');
        define("danhmucsp", 'danhmucsp');
        define("sanpham", 'sanpham');
        define("media", 'media');
        define("donhang", 'donhang');
        define("dathang", '1_dathang');
        define("khachhang", 'khachhang');
        define("nhanvien", 'nhanvien');
        define("banner", 'banner');
    }

    //------------------- các hàm thao tác trên database ---------------
    function insert($table, $array)
    {
            $cols = array();
            $bind = array();
            foreach ($array as $key => $value) {
                $cols[] = $key;
                $bind[] = "'" . $value . "'";
            }
            $query = $this->db->query("INSERT IGNORE INTO " . $table . " (" . implode(",", $cols) . ")
             VALUES (" . implode(",", $bind) . ")");
            return $query;
    }

    function update($table, $array, $where)
    {
            $set = array();
            foreach ($array as $key => $value) {
                $set[] = $key . " = '" . $value . "'";
            }
            $query = $this->db->query("UPDATE " . $table . " SET " . implode(",", $set) . " WHERE " . $where);
            return $query;
    }

    //------------------- các hàm xử lý frontend ---------------
    function thongtin()
    {
        $query = $this->db->query("SELECT * FROM " . thongtin);
        // echo var_dump("SELECT * FROM " . thongtin); exit();
        $temp = $query->fetchAll(PDO::FETCH_ASSOC);
        return $temp;
    }

    function topmenu()
    {
        $dieukien = " WHERE tinh_trang=1 AND cha=0 ";
        $query = $this->db->query("SELECT * FROM " . menu . " $dieukien  ORDER BY thu_tu ");
        return $query->fetchAll(PDO::FETCH_ASSOC);
    }

    function menucon($cha)
    {
        $dieukien = " WHERE tinh_trang=1 AND cha=$cha ";
        $query = $this->db->query("SELECT * FROM " . menu . " $dieukien  ORDER BY thu_tu ");
        return $query->fetchAll(PDO::FETCH_ASSOC);
    }

    function submenu($cha)
    {
        $temp = array();
        $dieukien = " WHERE tinh_trang=1 AND cha=$cha ";
        $query = $this->db->query("SELECT * FROM " . menu . " $dieukien ORDER BY thu_tu  ");
        $temp = $query->fetchAll(PDO::FETCH_ASSOC);
        return $temp;
    }

    function pageinfo($url)
    {
        $page = array();
        if ($url[0] == 'blog')
            if (sizeof($url) == 2) {
                $query = $this->db->query("SELECT *,
                   (SELECT name FROM admin WHERE id=author) AS nhanvien,
                   (SELECT name FROM danhmuc WHERE id=danh_muc) AS danhmuc,
                   (SELECT url FROM danhmuc WHERE id=danh_muc) AS danhmucurl
                   FROM " . baiviet . " WHERE url='" . $url[1] . "' ");
                $temp = $query->fetchAll(PDO::FETCH_ASSOC);
                $page['title'] = $temp[0]['name'];
                $page['description'] = $temp[0]['mo_ta'];
                $page['keywords'] = $temp[0]['tag'];
                $page['image'] = $temp[0]['hinh_anh'];
                $page['data'] = $temp[0];
            } else {
                $query = $this->db->query("SELECT * FROM ".danhmuc." WHERE url='$url[2]' ");
                $temp = $query->fetchAll(PDO::FETCH_ASSOC);
                $page['title'] = $temp[0]['name'];
                $page['description'] = $this->catchuoi($temp[0]['mo_ta'],100);
                $page['keywords'] = $temp[0]['name'];
                $page['image'] = $temp[0]['hinh_anh'];
                $danhmucid = $temp[0]['id'];
                $query = $this->db->query("SELECT id, name, hinh_anh, mo_ta, updated,url
                   FROM " . baiviet . " WHERE danh_muc=$danhmucid ");
                $temp = $query->fetchAll(PDO::FETCH_ASSOC);
                $page['data'] = $temp;
            }
        elseif ($url[0] == 'product')
            if (sizeof($url) == 2) {
                $query = $this->db->query("SELECT *,
                  (SELECT name FROM ".danhmucsp." WHERE id=danh_muc) AS danhmuc,
                  (SELECT url FROM ".danhmucsp." WHERE id=danh_muc) AS danhmucurl
                  FROM " . sanpham . " WHERE url='" . $url[1] . "' ");
                $temp = $query->fetchAll(PDO::FETCH_ASSOC);
                $dem=$temp[0]['luot_xem'];
                $new= $dem+1;
                $query1= $this->db->query("UPDATE sanpham set luot_xem=$new WHERE url='".$url[1]."' ");
                $page['title'] = $temp[0]['name'];
                $page['description'] = $this->catchuoi($temp[0]['mo_ta'],20);
                $page['keywords'] = $temp[0]['tag'];
                $page['image'] = $temp[0]['hinh_anh'];
                $page['data'] = $temp[0];
            } else {
                $query = $this->db->query("SELECT * FROM ".danhmucsp." WHERE url='$url[2]' ");
                $temp = $query->fetchAll(PDO::FETCH_ASSOC);
                $page['title'] = $temp[0]['name'];
                $page['description'] = $temp[0]['mo_ta'];
                $page['keywords'] = $temp[0]['name'];
                $page['cha'] = $temp[0]['cha'];
                $page['id'] = $temp[0]['id'];
                $page['image'] = $temp[0]['hinh_anh'];
                $danhmucid = $temp[0]['id'];
                $trang=$url[1];
                $from= ($trang-1)*12;
                $query = $this->db->query("SELECT id, name, hinh_anh, mo_ta, gia_ban,url,gia_niem_yet
                   FROM " . sanpham . " WHERE tinh_trang=1 AND danh_muc=$danhmucid LIMIT $from,12 ");
                $temp = $query->fetchAll(PDO::FETCH_ASSOC);
                $page['data'] = $temp;
            }
        else {
            $query = $this->db->query("SELECT * FROM " . thongtin);
            $temp = $query->fetchAll(PDO::FETCH_ASSOC);
            $page['title'] = $temp[0]['value'];
            $page['description'] = $temp[5]['value'];
            $page['keywords'] = $temp[6]['value'];
            $page['image'] = $temp[7]['value'];
            $page['data']['nhanvien'] = 'Admin';
        }
        return $page;
    }

    function homepro($com,$limit)
    {
        $query = $this->db->query("SELECT * FROM " . sanpham . " WHERE tinh_trang=1 AND com=$com ORDER BY id DESC LIMIT $limit ");
        return $query->fetchAll(PDO::FETCH_ASSOC);
    }

    function homeblog($com,$limit)
    {
        $query = $this->db->query("SELECT * FROM " . baiviet . " WHERE tinh_trang=1 AND com=$com ORDER BY id DESC LIMIT $limit ");
        return $query->fetchAll(PDO::FETCH_ASSOC);
    }

    function newpost($limit)
    {
        $query = $this->db->query("SELECT * FROM " . baiviet . " WHERE tinh_trang=1 ORDER BY id DESC LIMIT $limit ");
        return $query->fetchAll(PDO::FETCH_ASSOC);
    }

    function danhmuc()
    {
        $query = $this->db->query("SELECT *, (SELECT count(1) FROM ".baiviet." WHERE tinh_trang=1 AND danh_muc=a.id) AS total
        FROM " . danhmuc . " a WHERE tinh_trang=1 ");
        return $query->fetchAll(PDO::FETCH_ASSOC);
    }

     function getsanphamcart($id)
   {
       $query = $this->db->query("SELECT * FROM " . sanpham . " WHERE tinh_trang=1 AND id=$id ");
       $temp= $query->fetchAll(PDO::FETCH_ASSOC);
       return $temp[0];
   }

   function adddonhang($name,$email,$sdt,$diachi,$sp,$sl,$date,$ghichu)
   {
       $query = $this->db->query("INSERT ".dathang." (name,email,sdt,dia_chi,id_sp,so_luong,ngay_gio,ghi_chu,tinh_trang) VALUES (N'$name','$email','$sdt',N'$diachi','$sp','$sl','$date',N'$ghichu',1) ");
       return $query;
   }

    function danhmucsp()
    {
        $query = $this->db->query("SELECT * FROM " . danhmucsp . " WHERE tinh_trang=1 AND cha=0 ");
        return $query->fetchAll(PDO::FETCH_ASSOC);
    }

    function tongsp($danhmuc)
    {
        $query = $this->db->query("SELECT id 
                   FROM " . sanpham . " WHERE tinh_trang=1 AND danh_muc=$danhmuc ");
        $temp = $query->fetchAll(PDO::FETCH_ASSOC);
        return $temp;
    }

    function danhmuchome()
    {
        $query = $this->db->query("SELECT * FROM " . danhmucsp . " WHERE tinh_trang=1 AND cha=0 ORDER BY id DESC LIMIT 3 ");
        return $query->fetchAll(PDO::FETCH_ASSOC);
    }

    function danhmuchome1()
    {
        $query = $this->db->query("SELECT * FROM " . danhmucsp . " WHERE tinh_trang=1 AND cha=0 ORDER BY id ASC LIMIT 4 ");
        return $query->fetchAll(PDO::FETCH_ASSOC);
    }

     function getcha($dmcon)
    {
        $query = $this->db->query("SELECT * FROM " . danhmucsp . " WHERE id=(SELECT cha FROM danhmucsp WHERE id=$dmcon LIMIT 1) ");
        $temp= $query->fetchAll(PDO::FETCH_ASSOC);
        return $temp[0];
    }

    function getdanhmuccon($danhmuc)
    {
        $query = $this->db->query("SELECT * FROM " . danhmucsp . " WHERE tinh_trang=1 AND cha=$danhmuc ORDER BY id DESC LIMIT 5 ");
        return $query->fetchAll(PDO::FETCH_ASSOC);
    }

     function getsanpham($danhmuc)
    {
        $query = $this->db->query("SELECT * FROM " . sanpham . " WHERE tinh_trang=1 AND danh_muc=$danhmuc ORDER BY id DESC LIMIT 8 ");
        return $query->fetchAll(PDO::FETCH_ASSOC);
    }

    function gioithieu($danhmuc)
    {
        $query = $this->db->query("SELECT * FROM " . baiviet . " WHERE tinh_trang=1 AND danh_muc=$danhmuc ORDER BY id DESC LIMIT 1 ");
        $temp= $query->fetchAll(PDO::FETCH_ASSOC);
        return $temp[0];
    }

    function muahang($danhmuc)
    {
        $query = $this->db->query("SELECT * FROM " . baiviet . " WHERE tinh_trang=1 AND danh_muc=$danhmuc ORDER BY id DESC LIMIT 1 ");
        $temp= $query->fetchAll(PDO::FETCH_ASSOC);
        return $temp[0];
    }

    function catchuoi($str,$num)
    {
        $result = '';
        $words = explode(" ",$str);
        $num = ($num<count($words))?$num:count($words);
        for ($i=0;$i<$num;$i++) $result.=$words[$i].' ';
        $result.='...';
        return $result;
    }

    function demgiohang()
    {
        $soluong = 0;
        if(isset($_SESSION['giohang']) && ($_SESSION['giohang']!='')) {
            $giohang = explode(',',$_SESSION['giohang']); // tách chuỗi cart thành 1 mảng array items
            // $temp = array_count_values($giohang);
            $soluong = count($giohang);
        }
        return $soluong;
    }

    function thanhpho()
    {
        $query = $this->db->query("SELECT * FROM thanhpho WHERE tinh_trang=1 ");
        return $query->fetchAll(PDO::FETCH_ASSOC);
    }

    function quanhuyen($id)
    {
        $query = $this->db->query("SELECT * FROM quanhuyen WHERE tinh_trang=1 AND thanh_pho=$id ");
        return $query->fetchAll(PDO::FETCH_ASSOC);
    }

    function cart()
    {
        $cart = [];
        if(isset($_SESSION['giohang']) && ($_SESSION['giohang']!='')) {
            $giohang = explode(',',$_SESSION['giohang']); // tách chuỗi cart thành 1 mảng array items
            $temp = array_count_values($giohang);
            foreach ($temp AS $key=>$item) {
                $query = $this->db->query("SELECT name,hinh_anh,gia_ban FROM " . sanpham . " WHERE id=$key ");
                $sp = $query->fetchAll(PDO::FETCH_ASSOC);
                $cart[]=['id'=>$key,'name'=>$sp[0]['name'],'hinhanh'=>$sp[0]['hinh_anh'],'soluong'=>$item,
                'dongia'=>$sp[0]['gia_ban'],'thanhtien'=>$item*$sp[0]['gia_ban']];
            }
        }
        return $cart;
    }

    function donhang($data,$hoten,$dienthoai)
    {
        $query = $this->db->query("SELECT id, name FROM " . khachhang . " WHERE dien_thoai=$dienthoai ");
        $temp = $query->fetchAll(PDO::FETCH_ASSOC);
        if (isset($temp[0]['id'])) {
            $data['khach_hang']=$temp[0]['id'];
            $hoten=$temp[0]['name'];
        } else {
            $khachhang = ['name'=>$hoten, 'dien_thoai'=>$dienthoai, 'thanh_pho'=>$data['thanh_pho'],
              'quan_huyen'=>$data['quan_huyen'],'dia_chi'=>$data['dia_chi']];
            $query = $this->insert(khachhang,$khachhang);
            $id=$this->db->lastInsertId();
            $data['khach_hang']=$id;
        }
        $query = $this->insert(donhang,$data);
        if ($query) {
            $id=$this->db->lastInsertId();
            $giohang = explode(",",$_SESSION['giohang']);
            $hanghoa = array_count_values($giohang);
            foreach ($hanghoa AS $key=>$item) {
                $query = $this->db->query("SELECT gia_ban FROM " . sanpham . " WHERE id=$key ");
                $temp = $query->fetchAll(PDO::FETCH_ASSOC);
                $x = ['don_hang'=>$id, 'hang_hoa'=>$key,'so_luong'=>$item, 'don_gia'=>$temp[0]['gia_ban'],'tinh_trang'=>1];
                $query = $this->insert("hanghoa",$x);
            }
            $from = "Website YBC";
            $email = 'hai@vdata.com.vn';
            $cc = '';
            $subject = "Đơn hàng mới từ website YBC";
            $noidung = 'ĐƠN ĐẶT HÀNG TỪ WEBSITE YBC <br>';
            $noidung.= 'Khách hàng: '. $hoten .'<br>';
            $noidung.= 'Địa chỉ nhận hàng: '. $data['dia_chi'] .'<br>';
            $noidung.= 'Điện thoại: '. $dienthoai .'<br>';
            $noidung.= 'Mã đơn hàng: '. $data['ma_don'] .'<br>';
            $noidung.= 'Số tiền: '. number_format($data['tien_hang']) .'<br>';
            $query = $this->sendmail($from,$email,$cc,$subject,$noidung);
            // $khachhang = ['name'=>$data['name'],'dien_thoai'=>$data['dien_thoai'], 'dia_chi'=>$data['dia_chi'],
            //   'thanh_pho'=>$data['thanh_pho'],'quan_huyen'=>$data['quan_huyen']];
            // $query = $this->insertkhachhang($khachhang);
        }
        return $query;
    }

    function password_generate($chars)
    {
        $data = '1234567890ABCDEFGHIJKLMNOPQRSTUVWXYZabcefghijklmnopqrstuvwxyz';
        return substr(str_shuffle($data), 0, $chars);
    }

    function sendmail($name,$email,$subject,$message)
    {
        $ok = false;
        require_once 'libs/mailin.php';
            $mailin = new Mailin('info@vdata.com.vn', 'UIhEdDsN8qnWvCzA');
            $mailin->
            addTo('quanghuy.pt97@gmail.com', 'Khách hàng')->
            setFrom('quanghuy.pt97@gmail.com', $from)->
            setReplyTo('quanghuy.pt97@gmail.com', $from)->
            setSubject($subject)->
            setHtml('
               <!DOCTYPE html>
               <html lang="en">
               <head>
               <meta charset="utf-8">
               <title>Khách hàng gửi liên hệ từ khăn bông</title>
               <meta name="viewport" content="width=device-width">
               <style>
               body{font-family:Arial,Helvetica,sans-serif;color:#333}a:link{color:#2469a0}a:visited{color:#1b4e76}a:active,a:hover{color:#d03c0f}h1{font-size:2em;line-height:1.3em;color:#2469a0}h2{font-size:1.5em;line-height:1.3em;color:#2469a0}h3{font-size:1.17em;line-height:1.3em}hr{border:0;border-bottom:1px solid #ccc}img{max-width:100%}.code{font-weight:700;color:#d03c0f}.site-title{display:inline-block;font-size:3em;line-height:48px;color:#d03c0f;margin:0 .25em 0 0}.claim{font-size:2em;margin:.5em 0 1em 0}.container{width:62em;margin:2em auto;max-width:100%;}.cta{margin:2em 0}.btn{display:inline-block;margin:.25em;padding:10px 16px;font-size:1.15em;line-height:1.33;border-radius:6px;text-align:center;white-space:nowrap;vertical-align:middle;text-decoration:none}.btn-primary{color:#fff;background-color:#428bca;border-color:#357ebd}.btn-primary:hover{background-color:#d03c0f;color:#fff}.btn-secondary{background-color:#ddd;border-color:#ccc}.btn-secondary:hover{background-color:#ccc;color:#333}.about{margin:1em auto}.about td{text-align:left}.about td:first-child{width:80px}@media screen and (max-width:600px){img{height:auto!important}}@media screen and (max-width:400px){body{font-size:14px}}@media screen and (max-width:320px){body{font-size:12px}}
               </style>
               </head>
               <body>
               <div class="container">
                  <h1>Khách hàng gửi liên hệ từ khăn bông</h1>
                  <p>' . $name . ' </p>
                  <p>' . $email . ' </p>
                  <p>' . $subject . ' </p>
                  <p>' . $message . ' </p>
                  <p>Nội dung email này là riêng tư và không được phép tiết lộ. Nếu bạn nhận được email này do nhầm lẫn, vui lòng xóa bỏ hoặc thông báo lại cho chúng tôi qua địa chỉ email  <a href="mailto:info@vdata.com.vn" target="_blank">info@vdata.com.vn</a><br> Chân thành cảm ơn!</p>
               </div>
               </body>
               </html>
            ');
            $ok = $mailin->send();
        return $ok;
    }

    function insertkhachhang($data)
    {
        $query = false;
        $dienthoai = $data['dien_thoai'];
        $query = $this->db->query("SELECT COUNT(1) AS numrow FROM ".khachhang." WHERE dien_thoai=$dienthoai AND tinh_trang=1 ");
        $temp = $query->fetchAll(PDO::FETCH_ASSOC);
        if ($temp[0]['numrow']==0)
              $query = $this->insert(khachhang, $data);
        return $query;
    }

    function checklogin($sdt, $pass)
    {
        $temp = [];
        $query = $this->db->query("SELECT id, name, dien_thoai FROM ".khachhang." WHERE tinh_trang=1 AND dien_thoai='$sdt' AND password='$pass' LIMIT 1");
        $temp = $query->fetchAll(PDO::FETCH_ASSOC);
        if (count($temp)==1)
            $temp[0]['level']=1;  //khach hang
        else {
            $query = $this->db->query("SELECT id, name, dien_thoai, email FROM ".nhanvien." WHERE tinh_trang=1 AND dien_thoai='$sdt' AND password='$pass' LIMIT 1");
            $temp = $query->fetchAll(PDO::FETCH_ASSOC);
            if (count($temp)==1)
                $temp[0]['level']=2 ; //Nhan vien
        }
        return $temp;
    }

    function getdonhang($id,$level)
    {
        $temp = [];
        if ($level==1)
            $dieukien = " WHERE tinh_trang=1 AND khach_hang=$id";
        else
            $dieukien = " WHERE tinh_trang=1 AND nhanvien=$id";
        $query = $this->db->query(" SELECT *,
           (SELECT name FROM nhanvien WHERE id=nhan_vien) AS nhanvien,
           IF(tinh_trang=1,'Đang xử lý',IF(tinh_trang=2,'Đã gửi',IF(tinh_trang=1,'Đã nhận','Hủy'))) AS tinhtrang
           FROM ".donhang." $dieukien  ORDER BY id DESC ");
        if ($query) {
            $temp = $query->fetchAll(PDO::FETCH_ASSOC);
        }
        return $temp;
    }


    //-------------- chua dung den -------------







    function re_pass($id, $pass)
    {
        $pass1 = md5(md5($pass));
        $data = array('password' => $pass1);
        $ok = $this->update(taikhoan, $data, " id=$id ");
        return $ok;
    }

    function getvideo($com)
    {
        $query = $this->db->query("SELECT * FROM " . banner . " WHERE com=$com ORDER BY id DESC LIMIT 1");
        return $query->fetchAll(PDO::FETCH_ASSOC);
    }


    function thongtin_tk($id)
    {
        $query = $this->db->query("SELECT * FROM " . taikhoan . " WHERE id=$id");
        $temp = $query->fetchAll(PDO::FETCH_ASSOC);
        return $temp;
    }

    function MuaTip($sdt, $loaitip)
    {
        $query = $this->db->query("SELECT id,khach_hang  FROM 1_muatip WHERE tinh_trang=0 AND loai_tip=$loaitip");
        $temp = $query->fetchAll(PDO::FETCH_ASSOC);
        $result = 0;
        if ($temp) {
            $kh = explode(',', $temp[0]['khach_hang']);
            if (in_array($sdt, $kh))
                $result = 0;
            else {
                $id = $temp[0]['id'];
                if ($temp[0]['khach_hang'] == '')
                    $khachhang = $temp[0]['khach_hang'] = $sdt;
                else
                    $khachhang = $temp[0]['khach_hang'] .= ',' . $sdt;
                $data = array(
                    'khach_hang' => $khachhang,
                );
                $result = $this->update('1_muatip', $data, " id=$id ");
            }
        } else {
            $khachhang = $sdt;
            $data = array(
                'khach_hang' => $khachhang,
                'loai_tip' => $loaitip
            );
            $result = $this->insert('1_muatip', $data);
        }
            $date = date('Y-m-d H:i:s');
            $query = $this->db->query("SELECT id,tip FROM 1_tip WHERE tinh_trang=0 AND kieu_tip=$loaitip ORDER BY id DESC LIMIT 1");
            $tip = $query->fetchAll(PDO::FETCH_ASSOC);
            if ($tip) {
                $tipid = $tip[0]['id'];
                $query1 = $this->db->query("SELECT id FROM 1_tinnhan WHERE tip=$tipid AND khach_hang=$sdt ");
                $tinnhan = $query1->fetchAll(PDO::FETCH_ASSOC);
                if(!$tinnhan) {
                    $phone = '{"number":"' . $sdt . '","text_param":["' . $tip[0]['tip'] . '"],"user_id":1}';
                    $content = '{"text":"#param#","port":[0],"param":[' . $phone . ']}';
                    $ipapi = $this->info();
                    $url = 'https://' . $ipapi['ip'] . '/api/send_sms';
                    $curl = curl_init($url);
                    curl_setopt($curl, CURLOPT_HTTPAUTH, CURLAUTH_ANY);
                    curl_setopt($curl, CURLOPT_HEADER, true);
                    curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);
                    curl_setopt($curl, CURLOPT_HTTPHEADER, array("Content-type:application/json;"));
                    curl_setopt($curl, CURLOPT_USERPWD, "admin:Vdata@123");
                    curl_setopt($curl, CURLOPT_POST, true);
                    curl_setopt($curl, CURLOPT_POSTFIELDS, $content);
                    curl_setopt($curl, CURLOPT_FOLLOWLOCATION, 1);
                    curl_setopt($curl, CURLOPT_SSL_VERIFYPEER, 0);
                    curl_setopt($curl, CURLOPT_SSL_VERIFYHOST, 0);
                    $result = curl_exec($curl);
                    $split = explode(" ", $result);
                    $split2 = ltrim($split[count($split) - 1], "application/json");
                    $temp = json_decode($split2, true);
                    $ok = $temp['error_code'];
                    curl_close($curl);
                    if ($ok == '202')
                        $tinh_trang = 1;
                    else
                        $tinh_trang = 0;
                    $data = array(
                        'tip' => $tipid,
                        'ngay' => $date,
                        'khach_hang' => $sdt,
                        'tinh_trang' => $tinh_trang
                    );
                    $this->insert('1_tinnhan', $data);
                }
            }
        return $result;
    }

    function checkdienthoai($sdt)
    {
        $query = $this->db->query("SELECT COUNT(1) AS total FROM " . taikhoan . " WHERE sdt='$sdt' ");
        $temp = $query->fetchAll(PDO::FETCH_ASSOC);
        return $temp[0]['total'];
    }

    function checkpass($id, $pass)
    {
        $pass1 = md5(md5($pass));
        $query = $this->db->query("SELECT id FROM " . taikhoan . " WHERE id=$id AND password='$pass1' ");
        $temp = $query->fetchAll(PDO::FETCH_ASSOC);
        return $temp;
    }

    function checkdienthoai1($id, $sdt)
    {
        $query = $this->db->query("SELECT COUNT(1) AS total FROM " . taikhoan . " WHERE sdt='$sdt' AND id!=$id");
        $temp = $query->fetchAll(PDO::FETCH_ASSOC);
        return $temp[0]['total'];
    }



    function thanhvien($thanhvien)
    {
        $query = $this->db->query("SELECT *,(SELECT so_du FROM 1_taikhoan WHERE 1_taikhoan.id=1_giaodich.tai_khoan) AS sodu FROM 1_giaodich WHERE tai_khoan=$thanhvien ORDER BY id DESC");
        return $query->fetchAll(PDO::FETCH_ASSOC);
    }



   function search_post($keyword){
    if (isset($_GET['p'])) {
                $trang= $_GET['p'];
                settype($trang, "int");
              }else{
                $trang=1;
              }
              
              $from= ($trang-1)*12;
     $query = $this->db->query("SELECT * FROM ".sanpham." WHERE tinh_trang = 1 AND (name LIKE '%".$keyword."%' OR mo_ta LIKE '%".$keyword."%' OR noi_dung LIKE '%".$keyword."%') ORDER BY id DESC LIMIT $from,12 ");
     if ($query)
       return $query->fetchAll(PDO::FETCH_ASSOC);
     else
      return array();
   }

   function search_post1($keyword){
     $query = $this->db->query("SELECT id FROM ".sanpham." WHERE tinh_trang = 1 AND (name LIKE '%".$keyword."%' OR mo_ta LIKE '%".$keyword."%' OR noi_dung LIKE '%".$keyword."%') ");
     if ($query)
       return $query->fetchAll(PDO::FETCH_ASSOC);
     else
      return array();
   }

    function getpost1($url)
    {
        $dieukien = " WHERE tinh_trang=1  AND blog IN(SELECT id FROM " . danhmuc . " WHERE url='" . $url . "')";
        $query = $this->db->query("SELECT id
          FROM " . baiviet . "  $dieukien");
        $temp = $query->fetchAll(PDO::FETCH_ASSOC);
        return $temp;
    }





    function hometab()
    {
        $query = $this->db->query("SELECT * FROM " . sanpham . " WHERE tinh_trang=1
        AND danh_muc IN (SELECT id FROM " . cate . " WHERE tinh_trang=1 AND com=1) AND com=3
        ORDER BY luot_xem DESC ");
        return $query->fetchAll(PDO::FETCH_ASSOC);
    }

    function danhmucbaiviet()
    {
        $query = $this->db->query("SELECT * FROM " . danhmuc . " WHERE tinh_trang=1  ");
        $temp = $query->fetchAll(PDO::FETCH_ASSOC);
        foreach ($temp as $key => $item) {
            $id = $item['id'];
            $query = $this->db->query("SELECT COUNT(1) AS total FROM " . baiviet . "
                WHERE tinh_trang=1 AND (blog LIKE '$id' OR blog LIKE '$id,%' OR blog LIKE '%,$id' OR blog LIKE '%,$id,%') ");
            $baiviet = $query->fetchAll(PDO::FETCH_ASSOC);
            $temp[$key]['total'] = $baiviet[0]['total'];
        }
        return $temp;
    }


    function baivietmoi()
    {
        $query = $this->db->query("SELECT * FROM " . baiviet . " WHERE tinh_trang=1 ORDER BY id DESC LIMIT 6 ");
        return $query->fetchAll(PDO::FETCH_ASSOC);
    }

    function tamdiem($com)
    {
        $query = $this->db->query("SELECT * FROM " . baiviet . " WHERE tinh_trang=1 AND com=$com ORDER BY id DESC");
        return $query->fetchAll(PDO::FETCH_ASSOC);
    }

    function tinhot()
    {
        $query = $this->db->query("SELECT * FROM " . baiviet . " WHERE tinh_trang=1 ORDER BY luot_xem DESC LIMIT 3");
        return $query->fetchAll(PDO::FETCH_ASSOC);
    }

    function faq()
    {
        $query = $this->db->query("SELECT * FROM " . baiviet . " WHERE tinh_trang=1 AND blog=21 ");
        return $query->fetchAll(PDO::FETCH_ASSOC);
    }

    function xemthem($id, $blog)
    {
        $query = $this->db->query("SELECT * FROM " . baiviet . " WHERE tinh_trang=1 AND blog=$blog AND id!=$id ORDER BY id DESC LIMIT 3");
        return $query->fetchAll(PDO::FETCH_ASSOC);
    }

    function xemthem1()
    {
        $query = $this->db->query("SELECT * FROM " . baiviet . " WHERE tinh_trang=1 ORDER BY id DESC LIMIT 3");
        return $query->fetchAll(PDO::FETCH_ASSOC);
    }


    function chuyengia()
    {
        $query = $this->db->query("SELECT * FROM " . chuyengia . " WHERE chuc_vu=2");
        return $query->fetchAll(PDO::FETCH_ASSOC);
    }

    function lichsu()
    {
        $query = $this->db->query("SELECT *,tinh_trang,
       (SELECT tran_dau FROM 1_trandau WHERE id=a.tran_dau) as tran_dau,
       (SELECT ket_qua FROM 1_trandau WHERE id=a.tran_dau) as ket_qua,
       (SELECT name FROM 1_verdict WHERE id=a.tinh_trang) as verdict,
       (SELECT ma_giai FROM 1_giaidau WHERE id=(SELECT id FROM 1_trandau WHERE id=a.tran_dau)) AS giai_dau
       FROM 1_tip a WHERE tinh_trang>0 AND tinh_trang!=6
        ORDER BY  ngay_gio DESC LIMIT 50");
        return $query->fetchAll(PDO::FETCH_ASSOC);
    }
    function lichsuchitiet($thang)
    {
        $query = $this->db->query("SELECT *,tinh_trang,
       (SELECT tran_dau FROM 1_trandau WHERE id=a.tran_dau) as tran_dau,
        (SELECT odd FROM 1_trandau WHERE id=a.tran_dau) as odd,
       (SELECT ket_qua FROM 1_trandau WHERE id=a.tran_dau) as ket_qua,
       (SELECT name FROM 1_verdict WHERE id=a.tinh_trang) as verdict,
       (SELECT ma_giai FROM 1_giaidau WHERE id=(SELECT id FROM 1_trandau WHERE id=a.tran_dau)) AS giai_dau
       FROM 1_tip a WHERE tinh_trang>0 AND tinh_trang!=6 AND ngay_gio LIKE '%$thang%'
        ORDER BY  ngay_gio DESC ");
        return $query->fetchAll(PDO::FETCH_ASSOC);
    }
    function lichsuthang()
    {
        $query = $this->db->query(" SELECT DATE_FORMAT(ngay_gio, '%m/%Y') as ngay,DATE_FORMAT(ngay_gio, '%Y-%m') as ngay_gio FROM 1_tip
        WHERE tinh_trang>0 AND tinh_trang!=6 GROUP BY ngay ORDER BY ngay DESC");
        $rowsthang = $query->fetchAll(PDO::FETCH_ASSOC);
        $result = array();
        foreach ($rowsthang as $item)
        {
            $tongtran = 0;
            $win=0;
            $draw = 0;
            $lose = 0;
            $tilewin = 0;
            $thang = $item['ngay_gio'];
            $qr = $this->db->query("SELECT tinh_trang
            FROM 1_tip a WHERE tinh_trang>0 AND tinh_trang!=6 AND ngay_gio LIKE '%$thang%'");
            $rows = $qr->fetchAll(PDO::FETCH_ASSOC);
            foreach ($rows as $temp)
            {
                $tongtran++;
                if($temp['tinh_trang'] == 1 || $temp['tinh_trang']==3)
                    $win++;
                elseif($temp['tinh_trang'] == 2 || $temp['tinh_trang']==4)
                    $lose++;
                elseif($temp['tinh_trang'] == 5)
                    $draw++;

            }
            $tilewin = ceil($win /$tongtran * 100);
            array_push($result , array(
                'thang' => $thang,
                'trandau' => $tongtran,
                'win' => $win,
                'lose' => $lose,
                'draw' => $draw,
                'tilewin'=>$tilewin
            ));
        }

        return $result;
    }

    function lichsutip()
    {
        $dieukien = " WHERE tinh_trang NOT IN (0,6) ";
        $query = $this->db->query("SELECT *,
           (SELECT tran_dau FROM 1_trandau WHERE id=a.tran_dau) as tran_dau,
           (SELECT ket_qua FROM 1_trandau WHERE id=a.tran_dau) as ket_qua,
           (SELECT odd FROM 1_trandau WHERE id=a.tran_dau) as odd,
           (SELECT name FROM 1_verdict WHERE id = a.tinh_trang) as verdict,
           (SELECT ma_giai FROM 1_giaidau WHERE id=(SELECT id FROM 1_trandau WHERE id=a.tran_dau)) AS giai_dau
           FROM 1_tip a $dieukien ORDER BY id DESC");
        return $query->fetchAll(PDO::FETCH_ASSOC);
    }

    function get_baivietmoi()
    {
        $query = $this->db->query("SELECT * FROM " . baiviet . " WHERE tinh_trang=1 ORDER BY ngay_cap_nhat DESC LIMIT 3");
        return $query->fetchAll(PDO::FETCH_ASSOC);
    }

    function nhanvien()
    {
        $query = $this->db->query("SELECT name, hinh_anh,quote,chuc_vu FROM admin WHERE id!=1 ");
        return $query->fetchAll(PDO::FETCH_ASSOC);
    }


    function noibat()
    {
        $query = $this->db->query("SELECT * FROM " . sanpham . " WHERE tinh_trang=1  ORDER BY luot_xem DESC LIMIT 9");
        return $query->fetchAll(PDO::FETCH_ASSOC);
    }

    function getdanhmuc()
    {
        $query = $this->db->query("SELECT * FROM " . danhmuc . " WHERE tinh_trang=1  ORDER BY thu_tu ASC LIMIT 3");
        return $query->fetchAll(PDO::FETCH_ASSOC);
    }

    function getdanhmuc_all($com)
    {
        $query = $this->db->query("SELECT * FROM " . danhmuc . " WHERE tinh_trang=1 AND com=$com ORDER BY id ASC");
        return $query->fetchAll(PDO::FETCH_ASSOC);
    }

    function getbaivietfooter($com)
    {
        $query = $this->db->query("SELECT * FROM " . baiviet . " WHERE tinh_trang=1 AND com = $com");
        return $query->fetchAll(PDO::FETCH_ASSOC);
    }

    function getbaiviet()
    {
        $query = $this->db->query("SELECT id FROM " . baiviet . " WHERE tinh_trang=1");
        return $query->fetchAll(PDO::FETCH_ASSOC);
    }

    function getbanner($com)
    {
        $query = $this->db->query("SELECT * FROM " . banner . " WHERE tinh_trang=1 AND com=$com ORDER BY thu_tu");
        return $query->fetchAll(PDO::FETCH_ASSOC);
    }

    function homecomment()
    {
        $query = $this->db->query("SELECT * FROM " . khachhang . " WHERE tinh_trang=1 LIMIT 3  ");
        return $query->fetchAll(PDO::FETCH_ASSOC);
    }

    function khachhang($otp)
    {
        $query = $this->db->query("SELECT * FROM " . khachhang . " WHERE mat_khau='$otp'  ");
        return $query->fetchAll(PDO::FETCH_ASSOC);
    }

    function getprod($danhmuc, $trang)
    {
        $from = ($trang - 1) * 9;
        $dieukien = " WHERE tinh_trang=1  AND  (danh_muc LIKE '" . $danhmuc . "' OR danh_muc LIKE '%," . $danhmuc . "' OR danh_muc LIKE '" . $danhmuc . ",%' OR danh_muc LIKE '%," . $danhmuc . ",%')  ";
        // $query = $this->db->query("SELECT *, CONCAT('product/',url) AS link
        //    FROM ".sanpham."  $dieukien ORDER BY ngay_cap_nhat ");
        $query = $this->db->query("SELECT * FROM " . sanpham . " $dieukien ORDER BY id DESC LIMIT $from,9");
        $temp = $query->fetchAll(PDO::FETCH_ASSOC);
        return $temp;
    }

    function getprod1($danhmuc)
    {
        $dieukien = " WHERE tinh_trang=1  AND  (danh_muc LIKE '" . $danhmuc . "' OR danh_muc LIKE '%," . $danhmuc . "' OR danh_muc LIKE '" . $danhmuc . ",%' OR danh_muc LIKE '%," . $danhmuc . ",%')  ";
        // $query = $this->db->query("SELECT *, CONCAT('product/',url) AS link
        //    FROM ".sanpham."  $dieukien ORDER BY ngay_cap_nhat ");
        $query = $this->db->query("SELECT * FROM " . sanpham . " $dieukien ");
        $temp = $query->fetchAll(PDO::FETCH_ASSOC);
        return $temp;
    }

    function gettemp($danhmuc)
    {
        $dieukien = " WHERE tinh_trang=1  AND  (danh_muc LIKE '" . $danhmuc . "' OR danh_muc LIKE '%," . $danhmuc . "' OR danh_muc LIKE '" . $danhmuc . ",%' OR danh_muc LIKE '%," . $danhmuc . ",%')  ";
        $query = $this->db->query("SELECT * FROM " . temp . " $dieukien ");
        $temp = $query->fetchAll(PDO::FETCH_ASSOC);
        return $temp;
    }

    function getpost($danhmuc)
    {
        $dieukien = " WHERE tinh_trang=1  AND  (blog LIKE '" . $danhmuc . "' OR blog LIKE '%," . $danhmuc . "' OR blog LIKE '" . $danhmuc . ",%' OR blog LIKE '%," . $danhmuc . ",%')  ";
        $query = $this->db->query("SELECT *
          FROM " . baiviet . "  $dieukien ORDER BY ngay_cap_nhat DESC ");
        $temp = $query->fetchAll(PDO::FETCH_ASSOC);
        return $temp;
    }


    function category()
    {
        $query = $this->db->query("SELECT id, name, cha, url, CONCAT('product/1/',url) AS link
            FROM " . cate . " WHERE tinh_trang=1 ");
        return $query->fetchAll(PDO::FETCH_ASSOC);
    }

    function productdetail($id)
    {
        $query = $this->db->query("SELECT * FROM " . sanpham . " WHERE id=$id ");
        $temp = $query->fetchAll(PDO::FETCH_ASSOC);
        return $temp[0];
    }

    function spnoibat()
    {
        $query = $this->db->query("SELECT * FROM " . sanpham . " WHERE tinh_trang=1 ");
        return $query->fetchAll(PDO::FETCH_ASSOC);
    }



    function checkspam($session, $email)
    {
        $query = $this->db->query("SELECT COUNT(id) AS total FROM " . khachhang . " WHERE session_id='$session' OR email='$email' ");
        $temp = $query->fetchAll(PDO::FETCH_ASSOC);
        if ($temp[0]['total'] > 0)
            return true;
        else
            return false;
    }

    function user($email, $passwd)
    {
        $user = array();
        $query = $this->db->query("SELECT email,dien_thoai,ho_ten,hinh_anh FROM " . khachhang . "
       WHERE email='$email' AND mat_khau='$passwd' ");
        $user = $query->fetchAll(PDO::FETCH_ASSOC);
        return $user;
    }

    function setpass($password, $retype, $id)
    {
        $ok = false;
        if ($password == $retype) {
            $data = array('mat_khau' => md5(md5($password)), 'tinh_trang' => 1);
            $ok = $this->update(khachhang, $data, " id=$id ");
        }
        return $ok;
    }





    function ketquatrandau($date)
    {
        $date = functions::convertDate($date);
        $query = $this->db->query("SELECT *,(SELECT ma_giai FROM 1_giaidau WHERE id=giai_dau) AS giai_dau,
            (SELECT tinh_trang FROM 1_tip WHERE tran_dau=a.id) AS win
            FROM 1_trandau a WHERE tinh_trang=1 AND thoi_gian LIKE '$date%' ORDER BY  thoi_gian DESC");
        return $query->fetchAll(PDO::FETCH_ASSOC);
    }

    function cactrandau()
    {
        $date = date('Y-m-d H:i:s');
        $dieukien = " WHERE tinh_trang=1 AND thoi_gian > '" . $date . "'";
        $query = $this->db->query("SELECT *,(SELECT ma_giai FROM 1_giaidau WHERE id=giai_dau) AS giai_dau FROM 1_trandau $dieukien ORDER BY thoi_gian ASC");
        return $query->fetchAll(PDO::FETCH_ASSOC);
    }

    function ngaydau()
    {
        $date = date('Y-m-d H:i:s');
        $dieukien = " WHERE tinh_trang=1 AND thoi_gian > '" . $date . "'";
        $query = $this->db->query("SELECT DATE_FORMAT(thoi_gian, '%Y-%m-%d') AS ngay FROM 1_trandau $dieukien GROUP BY ngay");
        return $query->fetchAll(PDO::FETCH_ASSOC);
    }

    function getDateketqua()
    {
        $query = $this->db->query("SELECT MAX(thoi_gian) AS thoi_gian FROM 1_trandau WHERE tinh_trang=1 ORDER BY  thoi_gian DESC");
        return $query->fetchAll(PDO::FETCH_ASSOC);
    }

    function getSodu($id)
    {
        $query = $this->db->query("SELECT id,so_du FROM 1_taikhoan WHERE id='$id' AND tinh_trang = 1 ");
        return $query->fetchAll(PDO::FETCH_ASSOC);
    }

    function addGiaodich($id, $noidung, $money, $sodumoi)
    {
        $ngaygio = date("Y-m-d H:i:s");
        $query = $this->db->query("INSERT INTO 1_giaodich (ngay,noi_dung,so_tien,so_du,tai_khoan) VALUES ('$ngaygio','$noidung','$money',$sodumoi,'$id') ");

        return $query->fetchAll(PDO::FETCH_ASSOC);
    }

    function updateTaikhoan($id, $sodu, $tip)
    {
        $query1 = $this->db->query("SELECT id,tip_ngay,tip_vip FROM 1_taikhoan WHERE id='$id' AND tinh_trang = 1 ");
        $result = $query1->fetchAll(PDO::FETCH_ASSOC);
        $tipngay = $result[0]['tip_ngay'];
        $tipvip = $result[0]['tip_vip'];
        if ($tip == 1)
            $tipngay++;
        elseif ($tip == 2)
            $tipngay = $tipngay + 15;
        elseif ($tip == 3)
            $tipvip++;
        $query = $this->db->query("UPDATE 1_taikhoan SET so_du = $sodu, tip_ngay = $tipngay, tip_vip = $tipvip WHERE id=$id");
        return $query->fetchAll(PDO::FETCH_ASSOC);
    }


    function lichsutiptv($thanhvien)
    {
        // $dieukien = " WHERE tinh_trang NOT IN (0,6) ";
        // $dieukien .= " AND (SELECT khach_hang FROM 1_tinnhan WHERE tip=a.id ORDER BY id DESC LIMIT 1) LIKE '%" . $thanhvien . "%' ";
        // $query = $this->db->query("SELECT *, ngay_gio as ngay,
        // (SELECT odd FROM 1_trandau WHERE id=a.tran_dau) AS odd,
        // (SELECT ket_qua FROM 1_trandau WHERE id=a.tran_dau) AS ketqua,
        // (SELECT tran_dau FROM 1_trandau WHERE id=a.tran_dau) AS tran_dau,
        // (SELECT name FROM 1_verdict WHERE id = a.tinh_trang) as verdict,
        // (SELECT name FROM admin WHERE id=a.chuyen_gia) AS chuyen_gia
        // FROM 1_tip a $dieukien ORDER BY ngay_gio DESC");

        $query = $this->db->query("SELECT *, (SELECT tran_dau FROM 1_tip WHERE id=a.tip) AS midi,
              (SELECT tinh_trang FROM 1_tip WHERE id=a.tip) AS vidi,
              (SELECT ket_qua FROM 1_trandau WHERE id=midi) AS ketqua,
              (SELECT tran_dau FROM 1_trandau WHERE id=midi) AS tran_dau,
              (SELECT tip FROM 1_tip WHERE id=a.tip) AS tip,
              (SELECT name FROM 1_verdict WHERE id = vidi) as verdict
              FROM 1_tinnhan a WHERE khach_hang='$thanhvien' AND tip IN (SELECT id FROM 1_tip WHERE tinh_trang NOT IN (0,6) ) ");
        return $query->fetchAll(PDO::FETCH_ASSOC);
    }
    function info(){
        $id=1;//$_SESSION['userdata']['meta_id'];
        $query = $this->db->query("SELECT ip FROM 1_thongtin WHERE id=$id " );
        $temp=$query->fetchAll(PDO::FETCH_ASSOC);
        return($temp[0]);
        return array();
    }
}

?>
