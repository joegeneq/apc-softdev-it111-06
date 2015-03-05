<?php
/* @var $this yii\web\View */

$this->title = 'RBI Inventory System';
?>

<div class="site-index">
   <div class="jumbotron">
    <center>
    <?php

    $image_name = 'images/Customers.png';
    $image_url = 'index.php?r=customer';

    ?>

    <a alt="Customer" href='<?php echo $image_url; ?>' border='0'><img src='<?php echo $image_name; ?>' onmouseover="this.src='images/Customers1.png'" onmouseout="this.src='images/Customers.png'" alt="Customers"></a>
    <a href="index.php?r=order"><img src="images/Orders.png" onmouseover="this.src='images/Orders1.png'" onmouseout="this.src='images/Orders.png'" alt="Orders"></a>
    <a href="index.php?r=product-inventory"><img src="images/Products.png" onmouseover="this.src='images/Products1.png'" onmouseout="this.src='images/Products.png'" alt="Products"></a>
    <a href="index.php?r=supplier"><img src="images/Suppliers.png" onmouseover="this.src='images/Suppliers1.png'" onmouseout="this.src='images/Suppliers.png'" alt="Suppliers"></a>
    <a href="index.php?r=transaction"><img src="images/Transactions.png" onmouseover="this.src='images/Transactions1.png'" onmouseout="this.src='images/Transactions.png'" alt="Transactions"></a>
    </center>
   </div>
</div>