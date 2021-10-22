<?php

require("../../../config/config.php");

if(isset($_POST['name'])){
    $name = $_POST['name'];
    $id= $_POST['id'];
    
    $sql="update category set name = '$name' where id='$id'";
    $result=execute($sql);
    $date= date("Y-m-d H:i:s");
    $sql1="update category set date_update = '$date' where id ='$id'";
    $result1=execute($sql1);
    if($result = true && $result== true  ){
        header("Location: ../../../ad/category/index.php");
    }
    else{
        header("Location: ../../../ad/category/index.php");
    }

}
?>