<?php echo "<?php \$this->beginContent('/layouts/main'); ?>"; ?>
<section class="container-fluid">
	<div class="row-fluid">
		<section id="contenido" class="span12">
			<?php echo "<?php echo \$content; ?>\n" ?>
		</section>
	</div>
</section>
<?php echo "<?php \$this->endContent(); ?>"; ?>