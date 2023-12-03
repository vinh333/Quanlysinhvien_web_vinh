<!DOCTYPE html>
<html>
<head>
	<title>ĐĂNG NHẬP</title>
	<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
     <form action="login.php" method="post">
     	<h2>ĐĂNG NHẬP</h2>
     	<?php if (isset($_GET['error'])) { ?>
     		<p class="error"><?php echo $_GET['error']; ?></p>
     	<?php } ?>
     	<label>Tên người dùng</label>
     	<input type="text" name="uname" placeholder="Tên người dùng"><br>

     	<label>Mật khẩu</label>
     	<input type="password" name="password" placeholder="Mật khẩu"><br>

     	<button type="submit">Đăng nhập</button>
          <a href="signup.php" class="ca">Tạo tài khoản mới</a>
     </form>
</body>
</html>
