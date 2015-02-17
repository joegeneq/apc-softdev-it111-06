<?php /* @var $this Controller */ ?>


<?php $this->beginContent('//layouts/main'); ?>
<div class="span-19">
	<div id="content">
	<div class="span-5 last">
	<div id="sidebar">
	<?php
		$this->beginWidget('zii.widgets.CPortlet', array(
			'title'=>'Operations',
		));
		
		echo '<hr>';
		$this->widget('zii.widgets.CMenu', array(
			'items'=>$this->menu,
			'htmlOptions'=>array('class'=>'operations'),
		));
		$this->endWidget();
		
	?>
	</div><!-- sidebar -->
</div>
<br><br>

		<?php echo $content; ?>
	</div><!-- content -->
</div>
<?php $this->endContent(); ?>