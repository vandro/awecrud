<h1>Generador de módulos</h1>

<p>This generator helps you to generate the skeleton code needed by a Yii module.</p>

<?php $form=$this->beginWidget('CCodeForm', array('model'=>$model)); ?>

	<div class="row">
		<?php echo $form->labelEx($model,'moduleID'); ?>
		<?php echo $form->textField($model,'moduleID',array('size'=>65)); ?>
		<div class="tooltip">
			Module ID is case-sensitive. It should only contain word characters.
			The generated module class will be named after the module ID.
			For example, a module ID <code>forum</code> will generate the module class
			<code>ForumModule</code>.
		</div>
		<?php echo $form->error($model,'moduleID'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'author'); ?>
		<?php echo $form->textField($model,'author',array('size'=>128)); ?>
		<div class="tooltip">
			
		</div>
		<?php echo $form->error($model,'author'); ?>

		<?php echo $form->labelEx($model,'authorUrl'); ?>
		<?php echo $form->textField($model,'authorUrl',array('size'=>256)); ?>
		<div class="tooltip">
			
		</div>
		<?php echo $form->error($model,'authorUrl'); ?>

		<?php echo $form->labelEx($model,'authorEmail'); ?>
		<?php echo $form->textField($model,'authorEmail',array('size'=>128)); ?>
		<div class="tooltip">
			
		</div>
		<?php echo $form->error($model,'authorEmail'); ?>
	</div>	

<?php $this->endWidget(); ?>
