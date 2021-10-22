<?php
    require("header.php");
session_start();
?>
<
    <!DOCTYPE html>
    <html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Document</title>
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">

        <link rel="stylesheet" href="BaiTapLon.css">
    </head>
    <body>
    <div class='login'>
    <h1>Đăng Nhập</h1>
    <form action='login/process_login.php' method='POST' class='form-login'>
    <label for="usr" style="color: red;">
    <?php 

    if(isset($_SESSION['thongbao'])){
        echo $_SESSION['thongbao'];
        unset($_SESSION['thongbao']);
    }
    ?>
       </label>
        <div class="form-group">
  <label for="usr">tài khoản</label>
  <input type="text" class="form-control" id="usr" name="email">
</div>
        
        <div class="form-group">
  <label for="usr">mật khẩu</label>
  <input type="password" class="form-control" id="usr" name="pass">
</div>
        <div class='button-submit'>
            <h3><a href='createaccount.php'>tạo tài khoản</a></h3>
           <button type='submit' class='submit'> Đăng Nhập</button>
            <h3><a href='#'>quên mật khẩu</a></h3>

        </div>
      
    </form>
</div>
    </body>
    </html>
    
    <?php require("footer.php");?>