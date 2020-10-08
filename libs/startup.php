<?php
    session_start();
    date_default_timezone_set("Asia/Ho_Chi_Minh");
    // ini_set('display_errors', 1);
    define('DOMAIN', $_SERVER['HTTP_HOST'].'/trungquan/cms');
    define('SID', md5(DOMAIN));
    define('HOME', 'http://'.$_SERVER['HTTP_HOST'].'/trungquan');
    define('URL', 'http://'.$_SERVER['HTTP_HOST'].'/trungquan/cms');
    define('ROOT_DIR', $_SERVER['DOCUMENT_ROOT'].'/trungquan');
    define('DB_TYPE', 'mysql');
    define('DB_HOST', 'localhost');
    define('DB_NAME', 'trungquan');
    define('DB_USER', 'root');
    define('DB_PASS', '');
    //abc
?>
