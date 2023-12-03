<?php
session_start();

if (isset($_SESSION['id']) && isset($_SESSION['user_name'])) {

 ?>
<!DOCTYPE html>
<html>
<head>
	<title>Trang chủ</title>
	<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
     <h1>Xin chào, <?php echo $_SESSION['name']; ?></h1>
     <a href="logout.php">Đăng xuất</a>
</body>
</html>

<?php 
}else{
     header("Location: index.php");
     exit();
}
 ?>
