<?php
session_start();

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="BaiTapLon.css">

    <script src="https://code.jquery.com/jquery-latest.js"></script>
    <script src="https://kit.fontawesome.com/d204a4b920.js" crossorigin="anonymous"></script>
</head>
<body>

        

       
        <header>
            <div class="header1">
                <a href="index.php">
                <img src="https://cdn.shopify.com/s/files/1/0281/9060/5450/files/D_Art_Logo_180x.png?v=1577986279" alt="ảnh đấy " class="logo">
                </a>
            </div>
        
            <div class="header2">
                <nav class="header2-nav">
                <ul class=header2-list>
                    <li class="header2-list-item">
                        <a href="#">ComBo Ưu Đãi</a>
                    </li>
                    <li  class="header2-list-item">
                        <a href="#">Bộ Sưu Tập</a>
                        <ul class="sub-menu menu0">
                            <li><a href="#">Bộ Sưu Tập Giáng Sinh </a></li>
                            <li><a href="#">Bộ Sưu Tập Quà Tặng</a></li>
                            <li><a href="#">Rượu Vang</a></li>
                            <li><a href="#">Chocolate và Trà</a></li>
                        </ul>
                        <i class="fas fa-chevron-down"></i>
                    </li>
                    <li class="header2-list-item">
                        <a href="socola.php">Socola</a>
                        <ul class="sub-menu menu1">
                        <?php require_once("config/config.php");
                            $sql="select * from danhsach ";
                            $result=select_list($sql);
                            foreach($result as $data){
                                echo " <li><a href='socola.php?id=$data[0]'>$data[1]</a></li>";
                            }

                        
                        ?>
                           
                            
                        </ul>
                        <i class="fas fa-chevron-down"></i>
                    </li>
                    <li class="header2-list-item">
                        <a href="#">Về Chúng Tôi</a>
                        <ul class="sub-menu menu2">
                            <li><a href="#">Về D'Art</a></li>
                            <li><a href="#">Công Thức Bí Mật</a></li>
                            
                        </ul>
                        <i class="fas fa-chevron-down"></i>
                    </li>
                    <li class="header2-list-item">
                        <a href="#">Tin Tức</a>
                    </li>
                    <li class="header2-list-item">
                        <a href="#">Cửu Hàng</a>
                    </li>
                </ul>
            </nav>
            </div>
       
            <div class="header3"> 
                <div class="header3-list">
                   
                            <a href="#"> <i class="fas fa-search" id="search"></i></a>
                          
                           <div class="div-search delete-search" id="div-search">
                              <div class="list-search">
                                  <input type="text" class="text-box-search" placeholder="Search..">
                                  <button class="button-search">tìm kiếm</button>
                                  <i class="fas fa-times-circle" id="exit-search"></i>
    
                              </div>
                             
                           </div>
                           <a href=" <?php  if(empty($_SESSION["email"])){
                             echo "login.php";
                         }
                         else{
                             echo "logout.php";
                         }?>
                         "><i class="fas icon-login fa-user" id="icon-login"></i>
                      
                        </a>
                        <?php 
                            if(!empty($_SESSION['email'])){
                                $amai=$_SESSION['email'];
                                echo "  <a href='logout.php' style='color: blue;'>xin chao $amai</a>";

                            }
                            ?>
                            
                     
                </div>
            </div>
        </header>
        <script src="BaiTapLon.js"></script>
</body>
</html>