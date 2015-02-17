<?php /* @var $this Controller */ ?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<meta name="language" content="en" />

	<!-- blueprint CSS framework -->
	<link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->request->baseUrl; ?>/css/screen.css" media="screen, projection" />
	<link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->request->baseUrl; ?>/css/print.css" media="print" />
	<!--[if lt IE 8]>
	<link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->request->baseUrl; ?>/css/ie.css" media="screen, projection" />
	<![endif]-->

	<link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->request->baseUrl; ?>/css/main.css" />
	<link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->request->baseUrl; ?>/css/form.css" />

	<title><?php echo CHtml::encode($this->pageTitle); ?></title>
</head>

<body>

<div class="container" id="page">

	<div id="header">
		<div id="logo"><?php echo 'RESOURCES FOR THE BLIND INC. INVENTORY SYSTEM' //CHtml::encode(Yii::app()->name); ?></div>
	</div><!-- header -->

	<div id="mainmenu">
		<?php $this->widget('zii.widgets.CMenu',array(
			'items'=>array(
				
				array('label'=>'Login', 'url'=>array('/site/login'), 'visible'=>Yii::app()->user->isGuest),
				array('label'=>'Logout ('.Yii::app()->user->name.')', 'url'=>array('/site/logout'), 'visible'=>!Yii::app()->user->isGuest),
				array('label'=>'Home', 'url'=>array('/site/index')),
				array('label'=>'About', 'url'=>array('/site/page', 'view'=>'about')),
				array('label'=>'Contact', 'url'=>array('/site/contact')),
				array('label'=>'Supplier', 'url'=>array('/supplier'), 'visible'=>!Yii::app()->user->isGuest),
				array('label'=>'Company', 'url'=>array('/company'), 'visible'=>!Yii::app()->user->isGuest),
				array('label'=>'Customer', 'url'=>array('/customer'), 'visible'=>!Yii::app()->user->isGuest),	
				array('label'=>'Order', 'url'=>array('/order'), 'visible'=>!Yii::app()->user->isGuest),
				array('label'=>'Order Detail', 'url'=>array('/orderDetail'), 'visible'=>!Yii::app()->user->isGuest),
				array('label'=>'Item', 'url'=>array('/item'), 'visible'=>!Yii::app()->user->isGuest),
			),
		)); ?>
		
		<?php $this->widget('zii.widgets.CMenu',array(
			'items'=>array(
				array('label'=>'Item Stocks', 'url'=>array('/itemStocks'), 'visible'=>!Yii::app()->user->isGuest),
				array('label'=>'Item Qty', 'url'=>array('/itemQty'), 'visible'=>!Yii::app()->user->isGuest),
				array('label'=>'Item Price', 'url'=>array('/itemPrice'), 'visible'=>!Yii::app()->user->isGuest),
				array('label'=>'Sale', 'url'=>array('/sale'), 'visible'=>!Yii::app()->user->isGuest),
				array('label'=>'Sale Detail', 'url'=>array('/saleDetail'), 'visible'=>!Yii::app()->user->isGuest),
				array('label'=>'Replacement', 'url'=>array('/replacement'), 'visible'=>!Yii::app()->user->isGuest),
				array('label'=>'Replacement Detail', 'url'=>array('/replacementDetail'), 'visible'=>!Yii::app()->user->isGuest),
				array('label'=>'User', 'url'=>array('/user'), 'visible'=>!Yii::app()->user->isGuest),
				array('label'=>'Logs', 'url'=>array('/logs'), 'visible'=>!Yii::app()->user->isGuest),
				
			),
		)); ?>
		
	</div><!-- mainmenu -->
	<?php if(isset($this->breadcrumbs)):?>
		<?php $this->widget('zii.widgets.CBreadcrumbs', array(
			'links'=>$this->breadcrumbs,
		)); ?><!-- breadcrumbs -->
	<?php endif?>

	<?php echo $content; ?>

	<div class="clear"></div>

	<div id="footer">
		Copyright &copy; <?php echo date('Y'); ?> by Resources for the Blind, Inc.<br/>
		All Rights Reserved.<br/>
		<?php echo Yii::powered(); ?>
	</div><!-- footer -->

</div><!-- page -->

</body>
</html>
