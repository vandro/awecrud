<?php echo "<?php\n"; ?>
/* @var $this DefaultController */

$this->breadcrumbs=array(
	$this->getModule('<?php echo $this->moduleID; ?>')->getCategory() => array(''),
);
$this->menu=array(
    array('label'=><?php echo $this->moduleClass; ?>::t('module', 'Administration'), 'url'=>array('admin')),
);
?>

<h1>Módulo de <?php echo "<?php"; ?> echo $this->module->id; ?></h1>

<div class="">
	<?php echo "
	<h1><?php echo ".$this->moduleClass."::t('module', 'Administration'); ?></h1>
	<br><br>
	<h4>Nombre: <?php echo Yii::app()->getModule('".$this->moduleID."')->name; ?></h4>
	<h4>Descripción: <?php echo Yii::app()->getModule('".$this->moduleID."')->description; ?></h4>
	<h4>Categoría: <?php echo Yii::app()->getModule('".$this->moduleID."')->category; ?></h4>
	<h4>Versión: <?php echo Yii::app()->getModule('".$this->moduleID."')->version; ?></h4>
	<h4>Autor: <?php echo Yii::app()->getModule('".$this->moduleID."')->author; ?></h4>
	<h4>Email del autor: <?php echo Yii::app()->getModule('".$this->moduleID."')->authorEmail; ?></h4>
	<h4>Web del autor: <?php echo Yii::app()->getModule('".$this->moduleID."')->authorUrl; ?></h4>
	"; ?>
</div>