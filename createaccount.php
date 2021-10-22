<?php
session_start();
require("header.php");
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
    <link rel="stylesheet" href="BaiTapLon.css">
</head>
<body >
<div class='login'>
    <h1>Tạo Tài Khoản</h1>
    <form action='login/process_createacc.php' method='POST' class='form-login'>
    
        
        <div class="form-group">
  <label for="usr">tài khoản</label>
  <input type="text" class="form-control" id="usr" name="email">
</div>
        
        <div class="form-group">
  <label for="usr">mật khẩu</label>
  <input type="password" class="form-control" id="usr" name="pass1">
</div>
<div class="form-group">
  <label for="usr">nhập lại mật khẩu </label>
  <input type="password" class="form-control" id="usr" name="pass2">
</div>
       
        <label for="usr" style="color: red;"> 
          <?php  if(isset($_SESSION['createacc'])){
           echo $_SESSION['createacc'];
           unset($_SESSION['createacc']); 
          }?></label> <div class='button-submit'>
           <button type='submit' class='submit'> Tạo Tài Khoản </button>

        </div>
      
    </form>
</div>
</body>
</html>

<?php
require("footer.php");
?>