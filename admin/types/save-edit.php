<?php
session_start();
include_once "../../config/utils.php";
checkAdminLoggedIn();
// lấy thông tin từ form gửi lên
$id = trim($_POST['id']);
$name = trim($_POST['name']);


// validate bằng php
$nameerr = "";

// check name
if(strlen($name) < 2 || strlen($name) > 191){
    $nameerr = "Yêu cầu nhập loại thực phẩm nằm trong khoảng 2-191 ký tự";
}

if($nameerr != "" ){
    header('location: ' . ADMIN_URL . "types/edit-form.php?id=$id&nameerr=$nameerr");
    die;
}


$updateTypeQuery = "update types 
                    set
                          name = '$name'
                    where id = $id";
                
queryExecute($updateTypeQuery, false);
header("location: " . ADMIN_URL . "types");
die;