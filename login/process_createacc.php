<?php
session_start();
require_once("../config/config.php");
if(!empty($_POST['email']) && !empty($_POST['pass1']) && !empty($_POST['pass2'])){
    $email=$_POST['email'];
    $pass1=$_POST['pass1'];
    $pass2=$_POST['pass2'];
    if($pass1!=$pass2 ){
        $_SESSION['createacc']="nhập lại mật khẩu chính xác";
        header("Location:/BaiTapLon/createaccount.php");
    }
    else{
        $sql="select * from login where email ='$email'";
        $result=execute($sql);
        if(mysqli_num_rows($result) == 1){
            $_SESSION['createacc']="tài khoản đã có rùi";
            header("Location:/BaiTapLon/createaccount.php");
            die();
        }
        $pass2=md5($pass1);
        
        $sql="insert into login(email,pass,level) values ('$email','$pass2',0)";
        $result=execute($sql);
        if($result){
                $_SESSION['thongbao']="đăng kí thành công, mời đăng nhập";
            header("Location:/BaiTapLon/login.php");
             
        }
    }
 
}
else{
    header("Location:/BaiTapLon/createaccount.php");
    $_SESSION['createacc']="kiểm tra thông tin nhập vào";
}
?>