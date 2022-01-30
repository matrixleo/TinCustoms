<?php include 'components/header.php';
include_once 'logic/ProductMapper.php';
include_once 'logic/Product.php';

$mapper = new ProductMapper();
$products = $mapper->getAllProducts();
?>   

  <div class="main-prod">
    <div class="mainnalt-prod">
      <h1>Produktet me te shitura.</h1>
      <h2>Porosit modelin tend te preferuar tani!</h2>
    </div>
    
    <ul>
      <?php $i=$products?>
      <?php for($i=0; $i < 3; $i++){ ?>
      <?php  $pid = $products[$i]['product_id'];?>
      <li>
        <img src=<?php echo $products[$i]['fotoprod']?> >
        <a href="<?php echo "afterbuying.php?pid=$pid" ?>" >
          <h3>Ilustrimi "<?php echo $products[$i]['emriprod']?>"</h3>
          <h4>"<?php echo $products[$i]['cmimiprod']?>.00$" </h4>
        </a>  
      </li>
      <?php } ?>
    </ul>
  </div>

  <div class="mainbottom-prod">
    <div class="bottomupi">
      <h1>Produkte te vecanta</h1>
      <h2>Kliko permbi produktim tend te preferuar per ta blere</h2>
    </div>
    <ul>
      <?php foreach($products as $product){ ?>
      <li>
        <?php $pid = $product['product_id'];?>
        <img src=<?php echo $product['fotoprod']?> >
        <a href="<?php echo "afterbuying.php?pid=$pid" ?>" >
          <h3><?php echo $product['emriprod']?> </h3>
          <h4><?php echo $product['cmimiprod']?>.00$ </h4>
        </a>      
      </li>
      <?php } ?>
      </ul>
    
  </div>
  <?php include 'components/footer.php' ?>   