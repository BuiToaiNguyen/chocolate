<?php 
require_once("header.php");
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
<body>
<div class='login'>
    <h1>Xin Chào <?php if(!empty($_SESSION['email'])){echo $_SESSION['email'];}?></h1>
    
    <label for="usr"><a href="login/process_logout.php" >đăng xuất</a></label>
  
</div>
</body>
</html>

<?php 
require_once("footer.php");
?>