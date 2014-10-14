<?php
/* @var $this EstatusController */
/* @var $model Estatus */
/* @var $form CActiveForm */
?>

<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'estatus-form',
	// Please note: When you enable ajax validation, make sure the corresponding
	// controller action is handling ajax validation correctly.
	// There is a call to performAjaxValidation() commented in generated controller code.
	// See class documentation of CActiveForm for details on this.
	'enableAjaxValidation'=>false,
)); ?>

	<p class="note">Fields with <span class="required">*</span> are required.</p>

	<?php echo $form->errorSummary($model); ?>

	<div class="row">
		<?php echo $form->labelEx($model,'nombreEstatus'); ?>
		<?php echo $form->textField($model,'nombreEstatus',array('size'=>45,'maxlength'=>45)); ?>
		<?php echo $form->error($model,'nombreEstatus'); ?>
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