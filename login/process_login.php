<?php
session_start();
require("../config/config.php");
    if(!empty($_POST['email']) || !empty($_POST['pass'])){
        $email=$_POST['email'];
        $pass1=$_POST['pass'];
        $pass=md5($pass1);
            $sql="select * from login where email='$email' and pass='$pass'";
            $query = execute($sql);
            if(mysqli_num_rows($query)==1 ) {
                $result= mysqli_fetch_array($query);
                if($result[2] == 0){
                    $_SESSION['email']=$email;
                    header("Location: /BaiTapLon/index.php");
                }else{
                $_SESSION['email']=$email;
                header("Location: /BaiTapLon/ad/category/index.php");
            }}
            else{
                header("Location: /BaiTapLon/login.php");
                $_SESSION['thongbao']="kiểm tra tài khoản mật khẩu";
    
            }
       
    }
    else{
        header("Location:/BaiTapLon/login.php");
        $_SESSION['thongbao']="nhập đủ thông tin ";

    }

?>
