<?php
session_start();
require("../../../config/config.php");

if(isset($_POST['title'])){
    $id=$_POST['id'];
    $title = $_POST['title'];
    $price= $_POST['price'];
    $content=$_POST['content'];
    $idcre=$_POST['idcre'];
    $date= date("Y-m-d H:i:s");
    $noidung=$_POST['noidung'];
    $sql="update procduct set title = '$title',body='$noidung', price ='$price', content='$content',idcre=$idcre , date_update='$date' where id='$id'";
    $page=$_POST['page'];

    $result=execute($sql);
    

    if(!empty($_SESSION['id'])){
        $id2=$_SESSION['id'];
        unset($_SESSION['id']);
    }
    if($result == true  ){
        if(!empty($id2)){
            header("Location: ../../../ad/product/index.php?id=$id2&page=$page");
        }
        else{
            header("Location: ../../../ad/product/index.php?page=$page");
        }
        
    }
    else{
        echo $sql;
    }

}
?>