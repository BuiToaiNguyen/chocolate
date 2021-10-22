<?php

require("../../../config/config.php");

if(isset($_POST['name'])){
    $name = $_POST['name'];
    $date= date("Y-m-d H:i:s");
    $sql="insert into category(name, date_add, date_update) values ('$name', '$date','')";
    $result=execute($sql);
    if($result){
        header("Location: ../../../ad/category/index.php");    }

}
?>