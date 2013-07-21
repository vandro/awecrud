<!doctype html>
<!--[if lt IE 7]> <html class="no-js lt-ie9 lt-ie8 lt-ie7" lang="en"> <![endif]-->
<!--[if IE 7]>    <html class="no-js lt-ie9 lt-ie8" lang="en"> <![endif]-->
<!--[if IE 8]>    <html class="no-js lt-ie9" lang="en"> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js" lang="en"> <!--<![endif]-->
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
	
	<title><?php echo "<?php echo CHtml::encode(\$this->pageTitle); ?>"; ?></title>
	<meta name="description" content="">
	<meta name="author" content="">

	<meta name="viewport" content="width=device-width">
		
	<link rel="stylesheet" type="text/css" href="<?php echo "<?php echo Yii::app()->theme->baseUrl; ?>/css/style.css"; ?>" />
</head>
<body>

	<div id="main-contenedor">  
	    <?php echo "<?php echo \$content; ?>\n" ?>
	</div>

	<div id="main-modules" style="display:none">
	    <?php echo "<?php 
	        \$this->widget('bootstrap.widgets.TbMenu', array(
	            //'items'=>Yii::app()->getModule('general')->menuModules,
	            //'htmlOptions'=>array('class'=>'nav nav-list bs-docs-sidenav'),
	        ));
	    ?>\n"; ?>
	</div>

	<div id="main-config" style="display:none">
		<?php echo "<?php 
			\$this->renderPartial('application.modules.autonomos.views.default.config');
		?>\n"; ?>
	</div>

</body>
</html>