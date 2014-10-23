<?php
/* @var $this SalidaController */
/* @var $model Salida */
/* @var $form CActiveForm */
?>

<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'salida-form',
	// Please note: When you enable ajax validation, make sure the corresponding
	// controller action is handling ajax validation correctly.
	// There is a call to performAjaxValidation() commented in generated controller code.
	// See class documentation of CActiveForm for details on this.
	'enableAjaxValidation'=>false,
)); ?>

	<p class="note">Fields with <span class="required">*</span> are required.</p>

	<?php echo $form->errorSummary($model); ?>

	<div class="row">
		<?php echo $form->labelEx($model,'idSalida'); ?>
		<?php echo $form->textField($model,'idSalida'); ?>
		<?php echo $form->error($model,'idSalida'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'idIntermediario'); ?>
		<?php echo $form->textField($model,'idIntermediario'); ?>
		<?php echo $form->error($model,'idIntermediario'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'cantidadSalida'); ?>
		<?php echo $form->textField($model,'cantidadSalida'); ?>
		<?php echo $form->error($model,'cantidadSalida'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'observaciones'); ?>
		<?php echo $form->textField($model,'observaciones',array('size'=>45,'maxlength'=>45)); ?>
		<?php echo $form->error($model,'observaciones'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'totalSalida'); ?>
		<?php echo $form->textField($model,'totalSalida'); ?>
		<?php echo $form->error($model,'totalSalida'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'fechaAlta'); ?>
		<?php echo $form->textField($model,'fechaAlta'); ?>
		<?php echo $form->error($model,'fechaAlta'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'usuarioCreacion'); ?>
		<?php echo $form->textField($model,'usuarioCreacion',array('size'=>45,'maxlength'=>45)); ?>
		<?php echo $form->error($model,'usuarioCreacion'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'idDescuento'); ?>
		<?php echo $form->textField($model,'idDescuento'); ?>
		<?php echo $form->error($model,'idDescuento'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'idComprobante'); ?>
		<?php echo $form->textField($model,'idComprobante'); ?>
		<?php echo $form->error($model,'idComprobante'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'idStock'); ?>
		<?php echo $form->textField($model,'idStock'); ?>
		<?php echo $form->error($model,'idStock'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'idEstatus'); ?>
		<?php echo $form->textField($model,'idEstatus'); ?>
		<?php echo $form->error($model,'idEstatus'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Create' : 'Save'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->