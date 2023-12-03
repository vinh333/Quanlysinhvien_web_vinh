<!DOCTYPE html>
<html>
<head>
	<title>ĐĂNG KÝ</title>
	<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
     <form action="signup-check.php" method="post">
     	<h2>ĐĂNG KÝ</h2>
     	<?php if (isset($_GET['error'])) { ?>
     		<p class="error"><?php echo $_GET['error']; ?></p>
     	<?php } ?>

          <?php if (isset($_GET['success'])) { ?>
               <p class="success"><?php echo $_GET['success']; ?></p>
          <?php } ?>

          <label>Tên</label>
          <?php if (isset($_GET['name'])) { ?>
               <input type="text" 
                      name="name" 
                      placeholder="Tên"
                      value="<?php echo $_GET['name']; ?>"><br>
          <?php } else { ?>
               <input type="text" 
                      name="name" 
                      placeholder="Tên"><br>
          <?php } ?>

          <label>Tên người dùng</label>
          <?php if (isset($_GET['uname'])) { ?>
               <input type="text" 
                      name="uname" 
                      placeholder="Tên người dùng"
                      value="<?php echo $_GET['uname']; ?>"><br>
          <?php } else { ?>
               <input type="text" 
                      name="uname" 
                      placeholder="Tên người dùng"><br>
          <?php } ?>


     	<label>Mật khẩu</label>
     	<input type="password" 
                 name="password" 
                 placeholder="Mật khẩu"><br>

          <label>Nhập lại mật khẩu</label>
          <input type="password" 
                 name="re_password" 
                 placeholder="Nhập lại mật khẩu"><br>

     	<button type="submit">Đăng ký</button>
          <a href="index.php" class="ca">Đã có tài khoản?</a>
     </form>
</body>
</html>
