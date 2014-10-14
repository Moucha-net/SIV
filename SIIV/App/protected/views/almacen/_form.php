<?php
/* @var $this AlmacenController */
/* @var $model Almacen */
/* @var $form CActiveForm */
?>

<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'almacen-form',
	// Please note: When you enable ajax validation, make sure the corresponding
	// controller action is handling ajax validation correctly.
	// There is a call to performAjaxValidation() commented in generated controller code.
	// See class documentation of CActiveForm for details on this.
	'enableAjaxValidation'=>false,
)); ?>

	<p class="note">Fields with <span class="required">*</span> are required.</p>

	<?php echo $form->errorSummary($model); ?>

	<div class="row">
		<?php echo $form->labelEx($model,'nombreAlmacen'); ?>
		<?php echo $form->textField($model,'nombreAlmacen',array('size'=>45,'maxlength'=>45)); ?>
		<?php echo $form->error($model,'nombreAlmacen'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'encargado'); ?>
		<?php echo $form->textField($model,'encargado',array('size'=>45,'maxlength'=>45)); ?>
		<?php echo $form->error($model,'encargado'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'telefono'); ?>
		<?php echo $form->textField($model,'telefono',array('size'=>45,'maxlength'=>45)); ?>
		<?php echo $form->error($model,'telefono'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'direccion'); ?>
		<?php echo $form->textField($model,'direccion',array('size'=>45,'maxlength'=>45)); ?>
		<?php echo $form->error($model,'direccion'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'descripcion'); ?>
		<?php echo $form->textField($model,'descripcion',array('size'=>45,'maxlength'=>45)); ?>
		<?php echo $form->error($model,'descripcion'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'tiempoEntrega'); ?>
		<?php echo $form->textField($model,'tiempoEntrega',array('size'=>45,'maxlength'=>45)); ?>
		<?php echo $form->error($model,'tiempoEntrega'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'fechaAlta'); ?>
		<?php echo $form->textField($model,'fechaAlta'); ?>
		<?php echo $form->error($model,'fechaAlta'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'idUsuario'); ?>
		<?php echo $form->textField($model,'idUsuario'); ?>
		<?php echo $form->error($model,'idUsuario'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Create' : 'Save'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->