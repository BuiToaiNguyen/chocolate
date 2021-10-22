<?php

require("../../../config/config.php");

if(!empty($_POST['title'])){
    $title = $_POST['title'];
    $price=$_POST['price'];
    $content=$_POST['content'];
    $idcre=$_POST['idcre'];
    $date= date("Y-m-d H:i:s");
    $noidung=$_POST['noidung'];
    $sql="insert into procduct(title,price,content,idcre,date_add,body) values ('$title', '$price','$content',$idcre,'$date','$noidung')";
  
    $result=execute($sql);
    if($result){
        header("Location: ../../../ad/product/index.php");    
    }
    else{
        echo $sql;   
    }

}
?>