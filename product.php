<?php require_once("header.php");
require_once("config/config.php");
if(!empty($_GET['id'])){
    $id=$_GET['id'];
    $sql="select * from  procduct WHERE id = $id";
    $result=select_one($sql);
    

}


?>
<!DOCTYPE html>
<html lang="en">
<head><link rel="stylesheet" href="BaiTapLon.css">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    

</head>
<body>
    <div class="container-product">

      
    <div class="product">
        <div class="product-img">
            <img src="<?php echo $result[3]; ?>" alt="ảnh">
        </div>
        <div class="product-content">
        <h1 style="font-size:3em;"><?php echo $result[1]; ?></h1>
        <h2> giá :<?php echo $result[2]; ?></h2>
        <input type="number"/>
        <br>
        <button class="product-button"><a href="#"><h3>Mua Ngay</h3></a></button>
        <p class="product-title"><?php echo $result[7];?></p>
        <?php if($result[4] == 15)
        {
             echo "  <p>1. Cappuccino Hazelnut Praline</p>
        <p>2. Cinnamon Marshmallow</p>
        <p>3. Matcha and Kumquat</p>
        <p>4. Salted Caramel + Peanut Butter</p>";

    }
        else 
        {
            echo "<p>Champagne Henriot - Brut Souverain</p>
      <p>Angus The Bull</p>
      <p>Pares Balta - Mas Petit</p>
      <p>Swartland - Winemaker's Collection Chardonnay</p> ";
            


















      
      
        }
      ?>
      
        </div>

    </div></div>  
</body>
</html>
<?php require_once("footer.php")?>


