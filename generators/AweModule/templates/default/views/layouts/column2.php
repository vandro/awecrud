<?php echo "<?php \$this->beginContent('/layouts/main'); ?>"; ?>
<section class="container-fluid">
	<div class="row-fluid">
		<aside id="sidebar" class="span2 bs-docs-sidebar">
			<?php echo "<?php
				\$this->widget('bootstrap.widgets.TbMenu', array(
					'items'=>\$this->menu,
					'htmlOptions'=>array('class'=>'nav nav-list bs-docs-sidenav'),
				));
			?>\n"; ?>
		</aside>
		<section class="span10">
			<?php echo "<?php \$this->widget('bootstrap.widgets.TbAlert', array(
			    'block'=>true, // display a larger alert block?
			    'fade'=>true, // use transitions?
			    'closeText'=>'×', // close link text - if set to false, no close link is displayed
			    'alerts'=>array( // configurations per alert type
				    'success'=>array('block'=>true, 'fade'=>true, 'closeText'=>'×'), // success, info, warning, error or danger
			    ),
			)); ?>\n"; ?>
			<?php echo "<?php echo \$content; ?>\n" ?>
		</section>
	</div>
</section>
<?php echo "<?php \$this->endContent(); ?>"; ?>