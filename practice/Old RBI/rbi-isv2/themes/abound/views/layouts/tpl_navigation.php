<div class="navbar navbar-inverse navbar-fixed-top">
	<div class="navbar-inner">
    <div class="container">
        <a class="btn btn-navbar" data-toggle="collapse" data-target=".nav-collapse">
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </a>
     
          <!-- Be sure to leave the brand out there if you want it shown -->
          <a class="brand" href="#">Resources for the Blind <small>Inventory System</small></a>
          
          <div class="nav-collapse">
			<?php $this->widget('zii.widgets.CMenu',array(
                    'htmlOptions'=>array('class'=>'pull-right nav'),
                    'submenuHtmlOptions'=>array('class'=>'dropdown-menu'),
					'itemCssClass'=>'item-test',
                    'encodeLabel'=>false,
                    'items'=>array(
                        array('label'=>'Home', 'url'=>array('/site/index')),
                        array('label'=>'Suppliers', 'url'=>array('/supplier'), 'visible'=>!Yii::app()->user->isGuest),
						array('label'=>'Companies', 'url'=>array('/company'), 'visible'=>!Yii::app()->user->isGuest),
                        array('label'=>'Customers', 'url'=>array('/customer'), 'visible'=>!Yii::app()->user->isGuest),
						array('label'=>'Items <span class="caret"></span>', 'url'=>'#','itemOptions'=>array('class'=>'dropdown','tabindex'=>"-1"),'linkOptions'=>array('class'=>'dropdown-toggle','data-toggle'=>"dropdown"), 
                        'items'=>array(
                            array('label'=>'Item List', 'url'=>array('/item')),
							array('label'=>'Item Stocks', 'url'=>array('/itemStocks')),
							array('label'=>'Item Prices', 'url'=>array('/itemPrice')),
							array('label'=>'Item Supplies', 'url'=>array('/itemQty')),
							//array('label'=>'My Invoices <span class="badge badge-info pull-right">12</span>', 'url'=>'#'),
                        ), 'visible'=>!Yii::app()->user->isGuest),
                        array('label'=>'Orders', 'url'=>array('/order'), 'visible'=>!Yii::app()->user->isGuest),
						array('label'=>'Sales', 'url'=>array('/sale'), 'visible'=>!Yii::app()->user->isGuest),
                        array('label'=>'Replacements', 'url'=>array('/replacement'), 'visible'=>!Yii::app()->user->isGuest),
						array('label'=>'User <span class="caret"></span>', 'url'=>'#','itemOptions'=>array('class'=>'dropdown','tabindex'=>"-1"),'linkOptions'=>array('class'=>'dropdown-toggle','data-toggle'=>"dropdown"), 
                        'items'=>array(
							array('label'=>'User List', 'url'=>array('/user')),
                            array('label'=>'User Logs List', 'url'=>array('/logs')),
							
							//array('label'=>'My Invoices <span class="badge badge-info pull-right">12</span>', 'url'=>'#'),
                        ), 'visible'=>!Yii::app()->user->isGuest),
                        /*array('label'=>'Gii generated', 'url'=>array('customer/index')),*/
                        /*array('label'=>'My Account <span class="caret"></span>', 'url'=>'#','itemOptions'=>array('class'=>'dropdown','tabindex'=>"-1"),'linkOptions'=>array('class'=>'dropdown-toggle','data-toggle'=>"dropdown"), 
                        'items'=>array(
                            array('label'=>'My Messages <span class="badge badge-warning pull-right">26</span>', 'url'=>'#'),
							array('label'=>'My Tasks <span class="badge badge-important pull-right">112</span>', 'url'=>'#'),
							array('label'=>'My Invoices <span class="badge badge-info pull-right">12</span>', 'url'=>'#'),
							array('label'=>'Separated link', 'url'=>'#'),
							array('label'=>'One more separated link', 'url'=>'#'),
                        )), */
                        array('label'=>'Login', 'url'=>array('/site/login'), 'visible'=>Yii::app()->user->isGuest),
                        array('label'=>'Logout ('.Yii::app()->user->name.')', 'url'=>array('/site/logout'), 'visible'=>!Yii::app()->user->isGuest),
                    ),
                )); ?>
    	</div>
    </div>
	</div>
</div>

<div class="subnav navbar navbar-fixed-top">
    <div class="navbar-inner">
    	<div class="container">
        
        	<div class="style-switcher pull-left">
                <a href="javascript:chooseStyle('none', 60)" checked="checked"><span class="style" style="background-color:#0088CC;"></span></a>
                <a href="javascript:chooseStyle('style2', 60)"><span class="style" style="background-color:#7c5706;"></span></a>
                <a href="javascript:chooseStyle('style3', 60)"><span class="style" style="background-color:#468847;"></span></a>
                <a href="javascript:chooseStyle('style4', 60)"><span class="style" style="background-color:#4e4e4e;"></span></a>
                <a href="javascript:chooseStyle('style5', 60)"><span class="style" style="background-color:#d85515;"></span></a>
                <a href="javascript:chooseStyle('style6', 60)"><span class="style" style="background-color:#a00a69;"></span></a>
                <a href="javascript:chooseStyle('style7', 60)"><span class="style" style="background-color:#a30c22;"></span></a>
          	</div>
           <!--form class="navbar-search pull-right" action="">
           	 
           <input type="text" class="search-query span2" placeholder="Search">
           
           </form-->
    	</div><!-- container -->
    </div><!-- navbar-inner -->
</div><!-- subnav -->