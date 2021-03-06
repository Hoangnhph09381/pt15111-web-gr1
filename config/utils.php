<?php
//session_start();
# Quy định constants
define('BASE_URL', 'http://localhost/pt15111-web-gr1/');
define('ADMIN_URL', BASE_URL. 'admin/');
define('PUBLIC_URL', BASE_URL. 'public/');
define('ADMIN_ASSET_URL', BASE_URL . 'public/admin/');
define('THEME_ASSET_URL', BASE_URL . 'public/theme/');
define('LOGINTHEME_ASSET_URL', BASE_URL . 'public/logintheme/');
define('DEFAULT_IMAGE', BASE_URL. 'public/images/default-image.png');
define('AUTH', 'AUTH_SESSION_F');


# Các hàm sử dụng chung
# Trả về kết nối đến csdl
function getdbConn(){
	try{
		$host = "127.0.0.1";
		$dbname = "pt15111-web-gr1";
		$dbusername = "root";
		$dbpass = "";

		$connect = new PDO("mysql:host=$host;dbname=$dbname;charset=utf8", $dbusername, $dbpass);
		return $connect;
	}catch(Exception $ex){
		var_dump($ex->getMessage());
		die;
	}
}

# Thực thi 1 câu lệnh sql được dựng sẵn
# @ts1: $sql - câu lệnh cần đc thực thi
# @ts2: $fetchAll - (true/false)
# true: lấy hết tất cả các kết quả trả về của câu sql
# false: trả về kết quả đầu tiên tìm đc của câu sql
function queryExecute($sql, $fetchAll = false){

    $conn = getdbConn();
    $stmt = $conn->prepare($sql);
    $stmt->execute();
    if($fetchAll){
        $data = $stmt->fetchAll();
    }else{
        $data = $stmt->fetch();
    }
    return $data;
}

# kiểm tra xem user đã đăng nhập hay chưa
function checkAdminLoggedIn(){
    // kiểm tra đăng nhập
    // 1 - đăng nhập thành công - ktra bằng session AUTH
    if(!isset($_SESSION[AUTH]) || $_SESSION[AUTH] == null || count($_SESSION[AUTH]) == 0){
        header('location: ' . BASE_URL . 'login.php?msg=Hãy đăng nhập');
        die;
    }
    // 2 - giá trị của cột role_id = 2
    if($_SESSION[AUTH]['role_id'] > 2){
        header('location: ' . BASE_URL . 'login.php?msg=Bạn không có quyền truy cập');
        die;
    }
}

function checkLoggedIn(){
    if(!isset($_SESSION[AUTH]) || $_SESSION[AUTH] == null || count($_SESSION[AUTH]) == 0){
        header('location: ' . BASE_URL . 'login.php?msg=Hãy đăng nhập');
        die;
    }
}

function dd($data){
    echo "<pre>";
	var_dump($data);
	die;
}

 ?>