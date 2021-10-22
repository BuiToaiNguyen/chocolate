<?php require_once("config/config.php");
require_once("header.php");
$id = $_GET['id'];
$sql="select * from danhsach where id =$id";
$result=select_one($sql);

?>
<div class="body3">
       

        
       <div class="body3-title">
           <h1 >
               Featured collection 
           </h1>
       </div>
       
      <ul class="body3-list" >
          <?php 
           
          $loai="'%%$result[2]%%'";
          $sql="SELECT * FROM procduct WHERE idcre = 15  and title like $loai    ORDER by id desc  ";
         
          $result = select_list($sql);
           if(!empty($result)){
               foreach( $result as $data){
                   echo"<li class='body3-list-item'>
                   <a href='product.php?id=$data[0]'>
    
                       <figure class='fig'>
                           <div class='body3-img'>
        
                               <img src='$data[3]' alt='anh'>
                           </div>
                           <figcaption> 
                               <h5>$data[2]đ</h5>
                               <a href='#'><h2>$data[1]</h2></a>
                           </figcaption>
        
                       </figure>
                   </a>
               </li>";
               }           
           }
           
          ?>
        
      </ul>
   
   </div>

    <?php require_once("footer.php");   ?>