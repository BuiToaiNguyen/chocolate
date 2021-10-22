<?php

require_once("../../config/config.php");

?>






<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">

</head>
<body>
<div class="container">
<div class="panel-heading">
                <h2 class="text-center">Thêm Sản Phẩm </h2>
</div>
<form action="proccess/proccess_add.php" method="POST">
<div class="form-group">
  <label for="usr">Tên Sản Phẩm</label>
  <input type="text" class="form-control" id="usr" name="title">
</div>
<div class="form-group">
  <label for="usr">Giá Sản Phẩm</label>
  <input type="text" class="form-control" id="usr" name="price">
</div>
<div class="form-group">
  <label for="usr">Danh Mục</label>
  <select class="form-control" name="idcre">
 <?php 
 $sql="select * from category";
 $result=select_list($sql);
if($result !=null){
    foreach($result as $data){
        echo " <option value='$data[0]'> $data[1]</option>";
    }
}?>
</select>
</div>
<div class="form-group">
  <label for="usr">link ảnh </label>
  <textarea type="text" class="form-control" id="usr" name="content" cols="30" rows="5"></textarea>
</div>
<div class="form-group">
  <label for="usr">Nội Dung </label>
  <textarea type="text" class="form-control" id="usr" name="noidung" cols="30" rows="5"></textarea>
</div>


<button class="btn btn-success" type="submit" onclick="check()" >Thêm </button>
</form>
    
</div>

</body>