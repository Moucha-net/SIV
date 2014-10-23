<?php
/* @var $this SalidaController */
/* @var $model Salida */
/* @var $form CActiveForm */
?>

<div class="wide form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'action'=>Yii::app()->createUrl($this->route),
	'method'=>'get',
)); ?>

	<div class="row">
		<?php echo $form->label($model,'idSalida'); ?>
		<?php echo $form->textField($model,'idSalida'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'idIntermediario'); ?>
		<?php echo $form->textField($model,'idIntermediario'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'cantidadSalida'); ?>
		<?php echo $form->textField($model,'cantidadSalida'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'observaciones'); ?>
		<?php echo $form->textField($model,'observaciones',array('size'=>45,'maxlength'=>45)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'totalSalida'); ?>
		<?php echo $form->textField($model,'totalSalida'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'fechaAlta'); ?>
		<?php echo $form->textField($model,'fechaAlta'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'usuarioCreacion'); ?>
		<?php echo $form->textField($model,'usuarioCreacion',array('size'=>45,'maxlength'=>45)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'idDescuento'); ?>
		<?php echo $form->textField($model,'idDescuento'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'idComprobante'); ?>
		<?php echo $form->textField($model,'idComprobante'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'idStock'); ?>
		<?php echo $form->textField($model,'idStock'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'idEstatus'); ?>
		<?php echo $form->textField($model,'idEstatus'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton('Search'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- search-form -->