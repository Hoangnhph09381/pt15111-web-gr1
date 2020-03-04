<?php
session_start();
require_once 'config/utils.php';
if(!isset($_SESSION[AUTH]) || $_SESSION[AUTH] == null || count($_SESSION[AUTH]) == 0){
    header('location: ' . BASE_URL . 'detail.php?msg=Bạn phải đăng nhập để viết bình luận.');
    die;
}

$content = trim($_POST['content']);
$user_id = $_SESSION[AUTH]['id'];
$food_id = $_GET['id'];
$create_at = getdate();

$insertComment = "insert into comments
                    (user_id, content,create_at,food_id)
                    values
                    ('$user_id','$content','$create_at','$food_id')
";

queryExecute($insertComment, false);
header('location: '. BASE_URL.'detail.php');
die;
?>