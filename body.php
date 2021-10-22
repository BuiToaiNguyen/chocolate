<?php 
require_once("config/config.php");
?>  
<div class="body">
<div id="slideshow">
   <div class="slide-wrapper">
     <div class="slide"><img src="https://images.pexels.com/photos/2382325/pexels-photo-2382325.jpeg?auto=compress&cs=tinysrgb&dpr=2&h=750&w=1260"></div>
     <div class="slide"><img src="https://images.pexels.com/photos/2382325/pexels-photo-2382325.jpeg?auto=compress&cs=tinysrgb&dpr=2&h=750&w=1260"></div>
     <div class="slide"><img src="https://images.pexels.com/photos/2382325/pexels-photo-2382325.jpeg?auto=compress&cs=tinysrgb&dpr=2&h=750&w=1260"></div>
    </div>

 </div>
    <div class="body2">
        <div class="body2-title">
            <h1>ĐỪNG BỎ LỠ BỘ SƯU TẬP NÀY!</h1>
            
        </div>
        
        <div class="body2-list">
            <ul >
                <li>
                    <a href="#">
                    <div class="body2-list-item d1">
                        
                        <h5>christmas collection</h5>
                    </div>
                    </a>
                </li>
                <li>
                    <a href="#">
                    <div class="body2-list-item d2">
                        <h5>golden ox tet collection</h5>
                    </div></a>
                </li>
                <li><a href="#">
                    <div class="body2-list-item d3">
                        <h5>rượu vang</h5>
                    </div></a>
                </li>
                <li><a href="#">
                    <div class="body2-list-item d4">
                        <h5>chocolate and tea</h5>
                    </div></a>
                </li>
                <li><a href="#">
                    <div class="body2-list-item d5">
                        <h5>socola ruby</h5>
                    </div></a>
                </li>
                <li><a href="#">
                    <div class="body2-list-item d6">
                        <h5> rượu vang</h5>
                    </div></a>
                </li>
                
            </ul>
        </div>
    </div>
    <div class="body3">
       

        
        <div class="body3-title">
            <h1 >
                Featured collection 
            </h1>
        </div>
        
       <ul class="body3-list" >
           <?php 
           $sql="SELECT * FROM procduct WHERE idcre = 15 ORDER by id desc limit 0,6 ";
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
    <div class="body4">
        <div class="body4-title">
            <h1>Rượu Vang</h1>

        </div>
        <div class="body4-block">
            <ul class="body4-list">
                <?php 
                $sql = "SELECT * FROM `procduct` WHERE idcre = 16 ORDER by id desc limit 0,4 ";
                $result=select_list($sql);
                foreach($result as $data){
                    echo "<li class='body4-list-item'>
                    <a href='product.php?id=$data[0]'>
                        <div class='body4-item'>
                            <img src='$data[3]' alt='anh'>
                            <h6> $data[2]đ</h6>
                             <h5> $data[1]</h5>
                             
                        </div>

                    </a>
                    
                </li>";
                }
                ?>
                
            </ul>

        </div> 
    </div>