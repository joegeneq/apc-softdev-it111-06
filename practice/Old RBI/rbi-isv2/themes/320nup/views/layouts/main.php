<!DOCTYPE html>
<!--[if IEMobile 7 ]><html class="no-js iem7" manifest="default.appcache?v=1"><![endif]-->
<!--[if lt IE 7 ]><html class="no-js ie6" lang="en"><![endif]-->
<!--[if IE 7 ]><html class="no-js ie7" lang="en"><![endif]-->
<!--[if IE 8 ]><html class="no-js ie8" lang="en"><![endif]-->
<!--[if (gte IE 9)|(gt IEMobile 7)|!(IEMobile)|!(IE)]><!--><html class="no-js" manifest="default.appcache?v=1" lang="en">
<!--<![endif]-->
<head>
<meta charset="utf-8">
<title><?php echo Yii::app()->name ?></title>

<link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->request->baseUrl; ?>/css/form.css" />
<link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->theme->baseUrl ?>/css/style.css" />

<meta name='robots' content='noindex,nofollow' />

<script type="text/javascript">//<![CDATA[
var _gaq = _gaq || [];
_gaq.push(['_setAccount','UA-XXXXXXXX']);
_gaq.push(['_trackPageview'],['_trackPageLoadTime']);
(function() {
 var ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async = true;
 ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
 var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ga, s);
 })();
//]]></script>

<!-- http://t.co/dKP3o1e -->
<meta name="HandheldFriendly" content="True">
<meta name="MobileOptimized" content="320">
<meta name="viewport" content="width=device-width, target-densitydpi=160dpi, initial-scale=1">

	<!-- If you want seperate style sheets for print and all screen widths use these --> 
	<!-- For progressively larger displays. Do yourself a favor and build from big to small -->
	<link rel="stylesheet" media="only screen and (min-width: 480px)" href="<?php echo Yii::app()->theme->baseUrl ?>/css/480.css">
	<link rel="stylesheet" media="only screen and (min-width: 768px)" href="<?php echo Yii::app()->theme->baseUrl ?>/css/768.css"> 
	<link rel="stylesheet" media="only screen and (min-width: 992px)" href="<?php echo Yii::app()->theme->baseUrl ?>/css/992.css">
	<link rel="stylesheet" media="only screen and (min-width: 1382px)" href="<?php echo Yii::app()->theme->baseUrl ?>/css/1382.css"> 

<!-- If you want all browsers and print files in one css file comment out the above 7 seperate style sheets and uncomment this one. I would combine your files into this file after you style each screen size. -->
<!-- <link rel="stylesheet" href="<?php echo Yii::app()->theme->baseUrl ?>/css/styleAll.css"> -->

<!--Microsoft. Delete if not required -->
<meta http-equiv="cleartype" content="on">
<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
<!-- http://t.co/y1jPVnT -->
<link rel="canonical" href="/">
</head>

<body class="wordpress blogid-1 y2011 m11 d13 h18 singular slug-sample-page page pageid-2 page-author-eric-hansel page-comments-open page-pings-open windows firefox ff5">

<div id="wrapper" class="hfeed">   

<header role="banner" class="clearfix">

<div id="branding">

<hgroup><h1 id="blog-title"><span><a href="index.php" title="Thematic 320 And Up" rel="home"><?php echo Yii::app()->name ?></a></span></h1>

<h2 id="blog-description"></h2></hgroup>

</div><!--  #branding -->
<nav id="access" role="navigation">
<div class="menu">
	<?php $this->widget('zii.widgets.CMenu',array(
		'items'=>array(
			array('label'=>'🏠', 'url'=>array('/site/index')),
			//array('label'=>'About', 'url'=>array('/site/page', 'view'=>'about')),
			array('label'=>'Contact', 'url'=>array('/site/contact'), 'visible'=>Yii::app()->user->isGuest),
			array('label'=>'Login', 'url'=>array('/site/login'), 'visible'=>Yii::app()->user->isGuest),
			array('label'=>'Logout ('.Yii::app()->user->name.')', 'url'=>array('/site/logout'), 'visible'=>!Yii::app()->user->isGuest),
			array('label'=>'Suppliers', 'url'=>array('/supplier'), 'visible'=>!Yii::app()->user->isGuest),
			array('label'=>'Companies', 'url'=>array('/company'), 'visible'=>!Yii::app()->user->isGuest),
			array('label'=>'Customers', 'url'=>array('/customer'), 'visible'=>!Yii::app()->user->isGuest),
			array('label'=>'Orders', 'url'=>array('/order'), 'visible'=>!Yii::app()->user->isGuest),
			//array('label'=>'Order Details', 'url'=>array('/orderDetail'), 'visible'=>!Yii::app()->user->isGuest),
			array('label'=>'Items', 'url'=>array('/item'), 'visible'=>!Yii::app()->user->isGuest),
			array('label'=>'Item Stocks', 'url'=>array('/itemStocks'), 'visible'=>!Yii::app()->user->isGuest),
			array('label'=>'Item Types', 'url'=>array('/itemType'), 'visible'=>!Yii::app()->user->isGuest),
			array('label'=>'Item Prices', 'url'=>array('/itemPrice'), 'visible'=>!Yii::app()->user->isGuest),
			array('label'=>'Sales', 'url'=>array('/sale'), 'visible'=>!Yii::app()->user->isGuest),
			//array('label'=>'Sale Details', 'url'=>array('/saleDetail'), 'visible'=>!Yii::app()->user->isGuest),
			array('label'=>'Replacements', 'url'=>array('/replacement'), 'visible'=>!Yii::app()->user->isGuest),
			array('label'=>'Replacement Details', 'url'=>array('/replacementDetail'), 'visible'=>!Yii::app()->user->isGuest),
			array('label'=>'Users', 'url'=>array('/user'), 'visible'=>!Yii::app()->user->isGuest),
			array('label'=>'Logs', 'url'=>array('/logs'), 'visible'=>!Yii::app()->user->isGuest),
		),
		'activeCssClass' => 'current_page_item',
		'htmlOptions'	=> array(
			'class' => 'sf-menu'
		)
	)); ?>
</div>
</nav><!-- #access -->

</header>

<!--<div id="mainmenu">
		<?php $this->widget('zii.widgets.CMenu',array(
			'items'=>array(
				
				array('label'=>'Customer', 'url'=>array('/customer'), 'visible'=>!Yii::app()->user->isGuest),
				array('label'=>'Company', 'url'=>array('/company'), 'visible'=>!Yii::app()->user->isGuest),
				array('label'=>'Supplier', 'url'=>array('/supplier'), 'visible'=>!Yii::app()->user->isGuest),
				array('label'=>'Received', 'url'=>array('/supply'), 'visible'=>!Yii::app()->user->isGuest),
				//array('label'=>'Received Items', 'url'=>array('/supplyItem'), 'visible'=>!Yii::app()->user->isGuest),
				array('label'=>'Order', 'url'=>array('/order'), 'visible'=>!Yii::app()->user->isGuest),
				//array('label'=>'Ordered Item', 'url'=>array('/orderItem'), 'visible'=>!Yii::app()->user->isGuest),
				array('label'=>'Replacement', 'url'=>array('/replacement'), 'visible'=>!Yii::app()->user->isGuest),
				array('label'=>'Item', 'url'=>array('/item'), 'visible'=>!Yii::app()->user->isGuest),
				array('label'=>'Product', 'url'=>array('/product'), 'visible'=>!Yii::app()->user->isGuest),
				array('label'=>'Inventory', 'url'=>array('/inventory'), 'visible'=>!Yii::app()->user->isGuest),
				array('label'=>'Location', 'url'=>array('/location'), 'visible'=>!Yii::app()->user->isGuest),
				
			),
		)); ?>
	</div>--><!-- mainmenu -->
	

	
<div id="main" role="main">



<!-- <div id="container"> -->

<div id="content">
	<?php echo $content ?>
<?php /* LEFT THIS HERE FOR REFERNCE
<div id="post-2" class="hentry p1 page publish author-eric-hansel untagged comments-open pings-open y2011 m04 d26 h20 slug-sample-page"><h1 class="entry-title">Sample Page</h1>

<div class="entry-content">

<p>This is an example page. It&#8217;s different from a blog post because it will stay in one place and will show up in your site navigation (in most themes). Most people start with an About page that introduces them to potential site visitors. It might say something like this:</p>
<blockquote><p>Hi there! I&#8217;m a bike messenger by day, aspiring actor by night, and this is my blog. I live in Los Angeles, have a great dog named Jack, and I like pi&#241;a coladas. (And gettin&#8217; caught in the rain.)</p></blockquote>
<p>&#8230;or something like this:</p>
<blockquote><p>The XYZ Doohickey Company was founded in 1971, and has been providing quality doohickies to the public ever since. Located in Gotham City, XYZ employs over 2,000 people and does all kinds of awesome things for the Gotham community.</p></blockquote>
<p>As a new WordPress user, you should go to <a href="#/wp-admin/" >your dashboard</a> to delete this page and create new pages for your content. Have fun!</p>

</div><!-- .entry-content -->
</div><!-- #post -->

<div id="comments">


<div id="respond">
<h3>Post a Comment</h3>

<div id="cancel-comment-reply"><a rel="nofollow" id="cancel-comment-reply-link" href="/thematic320andup/sample-page/#respond" style="display:none;">Click here to cancel reply.</a></div>

<div class="formcontainer">	



<form id="commentform" action="#/wp-comments-post.php" method="post">


<p id="comment-notes">Your email is <em>never</em> published nor shared. Required fields are marked <span class="required">*</span></p>

<div id="form-section-author" class="form-section">
<div class="form-label"><label for="author">Name</label> <span class="required">*</span></div>
<div class="form-input"><input id="author" name="author" type="text" value="" size="30" maxlength="20" tabindex="3" /></div>
</div><!-- #form-section-author .form-section -->

<div id="form-section-email" class="form-section">
<div class="form-label"><label for="email">Email</label> <span class="required">*</span></div>
<div class="form-input"><input id="email" name="email" type="text" value="" size="30" maxlength="50" tabindex="4" /></div>
</div><!-- #form-section-email .form-section -->

<div id="form-section-url" class="form-section">
<div class="form-label"><label for="url">Website</label></div>
<div class="form-input"><input id="url" name="url" type="text" value="" size="30" maxlength="50" tabindex="5" /></div>
</div><!-- #form-section-url .form-section -->


<div id="form-section-comment" class="form-section">
<div class="form-label"><label for="comment">Comment</label></div>
<div class="form-textarea"><textarea id="comment" name="comment" cols="45" rows="8" tabindex="6"></textarea></div>
</div><!-- #form-section-comment .form-section -->

<div id="form-allowed-tags" class="form-section">
<p><span>You may use these <abbr title="HyperText Markup Language">HTML</abbr> tags and attributes:</span> <code>&lt;a href=&quot;&quot; title=&quot;&quot;&gt; &lt;abbr title=&quot;&quot;&gt; &lt;acronym title=&quot;&quot;&gt; &lt;b&gt; &lt;blockquote cite=&quot;&quot;&gt; &lt;cite&gt; &lt;code&gt; &lt;del datetime=&quot;&quot;&gt; &lt;em&gt; &lt;i&gt; &lt;q cite=&quot;&quot;&gt; &lt;strike&gt; &lt;strong&gt; </code></p>
</div>


<div class="form-submit"><input id="submit" name="submit" type="submit" value="Post Comment" tabindex="7" /><input type="hidden" name="comment_post_ID" value="2" /></div>

<input type='hidden' name='comment_post_ID' value='2' id='comment_post_ID' />
<input type='hidden' name='comment_parent' id='comment_parent' value='0' />


</form><!-- #commentform -->


</div><!-- .formcontainer -->

</div><!-- #respond -->

</div><!-- #comments -->

*/ ?>

</div><!-- #content -->



<!-- </div>--><!-- #container -->


<!-- <aside id="primary" class="aside main-aside">
<ul class="xoxo">
<li id="pages-2" class="widgetcontainer widget_pages"><h3 class="widgettitle">Pages</h3>
<ul>
<li class="page_item page-item-2 current_page_item"><a href="#/sample-page/" title="Sample Page">Sample Page</a></li>
<li class="page_item page-item-6"><a href="#/test-page/" title="Test Page">Test Page</a></li>
</ul>
</li><li id="categories-2" class="widgetcontainer widget_categories"><h3 class="widgettitle">Categories</h3>
<ul>
<li class="cat-item cat-item-1"><a href="#/category/uncategorized/" title="View all posts filed under Uncategorized">Uncategorized</a>
</li>
</ul>
</li><li id="archives-2" class="widgetcontainer widget_archive"><h3 class="widgettitle">Archives</h3>
<ul>
<li><a href='#/2011/05/' title='May 2011'>May 2011</a></li>
<li><a href='#/2011/04/' title='April 2011'>April 2011</a></li>
</ul>
</li>
</ul>
</aside> --> <!-- #primary .aside --> 


</div><!-- #main -->



<footer role="contentinfo">


<div id="subsidiary">


<aside id="first" class="aside sub-aside">
<ul class="xoxo">
<li id="text-3" class="widgetcontainer widget_text"><h3 class="widgettitle">About Us</h3>
<div class="textwidget">Resources for the Blind Inc. is a non-profit and non-government Christian organization that serves the visually-impaired people since 1988. They devoted themselves in removing the obstacles and providing services, trainings, and equipment needed in order for those who are visually-impaired to reach their fullest potential in life. </div>
</li>
</ul>
</aside><!-- #first .aside -->

<aside id="second" class="aside sub-aside">
<ul class="xoxo">
<li id="text-4" class="widgetcontainer widget_text"><h3 class="widgettitle">Mission</h3>
<div class="textwidget">To design and implement programs that will enable those with visual impairment to understand and reach their God-given potential in life and service. </div>
</li>
</ul>
</aside><!-- #second .aside -->

<aside id="third" class="aside sub-aside">
<ul class="xoxo">
<li id="text-5" class="widgetcontainer widget_text"><h3 class="widgettitle">Vision</h3>
<div class="textwidget">All Filipinos who are visually impaired will be able to reach their fullest potential in life and in ministry that God has for them. </div>
</li>
</ul>
</aside><!-- #third .aside -->

</div><!-- #subsidiary -->


<div id="siteinfo">        
Resources for the Blind, Inc. Inventory System<br>
Copyright © 2014 by <a href="http://www.apc.edu.ph">Asia Pacific College</a> - <a href="https://code.google.com/p/apc-sysadd1-mi121-09/">CSPROJ2 MI121 Group 09</a><br>
All Rights Reserved<br>
Powered by <a class="wp-link" href="http://yiiframework.com" title="Yii framework" rel="generator">Yii framework</a>
</div><!-- #siteinfo -->


</footer><!-- #footer -->

</div><!-- #wrapper .hfeed -->  

</body>
</html>
