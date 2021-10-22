<?php

require_once("../../config/config.php");

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">

</head>
<body>
<div class="container ">
    <div class="container pt-3">
<ul class="nav nav-pills">
  <li class="nav-item">
    <a class="nav-link active" data-toggle="pill" href="index.php">quản lí danh mục</a>
  </li>
  <li class="nav-item">
    <a class="nav-link" data-toggle="pill" href="../product/index.php">quản lí sản phẩm </a>
  </li>
  
</ul>
</div>

<div class="panel-heading">
                <h2 class="text-center">Thêm/Sửa/Xóa Danh Mục</h2>
</div>
<div class="panel-body">

<button class="btn btn-success"><a href="add.php">thêm danh mục</a> </button>
<table class="table table-bordered table-hover">
					<thead>
						<tr>
							<th width="100px">STT</th>
							<th>Tên Danh Mục </th>
              
							<th>Ngày Thêm</th>
							
							<th>Ngày Cập Nhật</th>
							<th width="10%"></th>
							<th width="10%"></th>
              
						</tr>
                    </thead>
                    <tbody>
                        <?php 
                        $sql="select * from category";
                        $result=select_list($sql);
                        
                           
                            $index=1;
                            foreach($result as $data){
                                echo "<tr data-id='$data[0]'>
                                
                                <td>$index</td>
                                <td><a href='../product/index.php?id=$data[0]''>$data[1]</a></td>
                                <td>$data[2]</td>
                                <td>$data[3]</td>
                                <td><a href='edit.php?id=$data[0]'><button class='btn btn-warning'>Sửa</button></a></td>
                                <td><button class='btn btn-danger' onclick='deletecate($data[0])'>Xóa</button></td>
                                </tr>";
                                $index++;
                            }
                        
                        
                        ?>                     
                       
                    </tbody>
</table>
<button class="btn btn-dark"><a href="../../login/process_logout.php">đăng xuất</a> </button>
    </div>
</div>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script>

  function deletecate(id){
    var option=confirm("bạn có muốn xóa danh mục này ?")
    if(!option){
      return
    }
   
  $.post('ajax.php',{'id' : id,'action' : 'delete'},function(data) {  $(`[data-id=${id}]`).remove();
})
  }

</script>
</body>

</html>