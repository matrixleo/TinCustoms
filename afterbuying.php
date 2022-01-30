<?php
    include 'components/header.php';
    include_once 'logic/UserMapper.php';
    include_once 'logic/ProductMapper.php';
    include_once 'logic/Product.php';
    
    $pmapper = new ProductMapper();
    $pid=$_GET['pid'];
    $product = $pmapper->getProductById($pid);
?>

        <?php
        if(isset($_SESSION['is_logged_in']) && $_SESSION['is_logged_in'] == 1) { 
        ?>
            <div class="kkk2">
                
                <div class="nesepo2">
                    <img src="<?= $product['fotoprod']?>"> 
                </div>
                <div class="nesepo">
                    <h1> <?= $product['emriprod']?></h1>
                    <h3>Cmimi:<?= $product['cmimiprod']?>.00$</h3>
                    <a href="#">Porosit Tani</a>
                </div>
            </div>
        <?php }  else { ?>
            <div class="kkk2">
                <div class="nesejo">
                    <img src="images/logo.png" >
                    <h3>Ju duhet te jeni te regjistruar per te porositur produkte! :( </h3>
                    <a href="logini.php"> Regjistrohu tani!</a>
                </div>
                <div class="nesejo2">
                    <img src="images/giphy.gif" >
                    
                </div>
        </div>
        <?php }?>
        
 <?php include 'components/footer.php'?>