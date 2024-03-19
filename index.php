<?php
//Require cac file trong commons
require_once './commons/env.php';
require_once './commons/helper.php';
require_once './commons/connect-db.php';
//require tu dong

require_file(PATH_CONTROLLER);
require_file(PATH_MODEL);

//dieu huong
$act=$_GET['act'] ??'/';
match($act){
    '/' => homeIndex(),
    'dssp' => 'Day la danh sach san pham',
};
require_once './commons/disconnect-db.php';
?>
