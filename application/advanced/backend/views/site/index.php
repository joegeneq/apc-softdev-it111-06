<?php
/* @var $this yii\web\View */

$this->title = 'RBI Inventory System Home Page';
//$this->params['breadcrumbs'][] = $this->title;
?>

<p><h3>Instructions:</h3></p>
    <p>Press Alt + C, to go to Customer Page<br></p>
    <p>Press Alt + O, to go to Order Page<br></p>
    <p>Press Alt + P, to go to Product Inventory Page<br></p>
    <p>Press Alt + S, to go to Suppliers Page<br></p>
    <p>Press Alt + T, to go to Transactions Page<br></p>

<div class="site-index">
   
    <center>
    <div>
        <a href="index.php?r=customer" title="Customers" accesskey="c"><img src="images/Customers2.png" height="200" width="200"><h2>Customer</h2></a>
        <br><br><br>
    </div> 
    <div>
        <a href="index.php?r=order" title="Orders" accesskey="o"><img src="images/Orders2.png" height="200" width="200"><h2>Orders</h2></a>
        <br><br><br>
    </div> 
    <div>
        <a href="index.php?r=product-inventory" title="Product Inventory" accesskey="p"><img src="images/Products2.png" height="200" width="200"><h2>Product Inventory</h2></a>
        <br><br><br>
    </div>     
    <div>
        <a href="index.php?r=supplier" title="Suppliers"accesskey="s"><img src="images/Suppliers2.png" height="200" width="200"><h2>Suppliers</h2></a>
        <br><br><br>
    </div>     
    <div>
        <a href="index.php?r=transaction" title="Transactions" accesskey="t"><img src="images/Transactions2.png" height="200" width="200"><h2>Transactions</h2></a>
    </div>     
    </center>
</div>