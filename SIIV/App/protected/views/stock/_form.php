<?php
/* @var $this StockController */
/* @var $model Stock */
/* @var $form CActiveForm */
?>

<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'stock-form',
	// Please note: When you enable ajax validation, make sure the corresponding
	// controller action is handling ajax validation correctly.
	// There is a call to performAjaxValidation() commented in generated controller code.
	// See class documentation of CActiveForm for details on this.
	'enableAjaxValidation'=>false,
)); ?>

	<p class="note">Fields with <span class="required">*</span> are required.</p>

	<?php echo $form->errorSummary($model); ?>

	<div class="row">
		<?php echo $form->labelEx($model,'idProducto'); ?>
		<?php echo $form->textField($model,'idProducto'); ?>
		<?php echo $form->error($model,'idProducto'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'idAlmacen'); ?>
		<?php echo $form->textField($model,'idAlmacen'); ?>
		<?php echo $form->error($model,'idAlmacen'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'cantidadProducto'); ?>
		<?php echo $form->textField($model,'cantidadProducto'); ?>
		<?php echo $form->error($model,'cantidadProducto'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'productoMin'); ?>
		<?php echo $form->textField($model,'productoMin'); ?>
		<?php echo $form->error($model,'productoMin'); ?>
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

	<div class="row buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Create' : 'Save'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->