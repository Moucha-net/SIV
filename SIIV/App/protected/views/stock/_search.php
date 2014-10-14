<?php
/* @var $this StockController */
/* @var $model Stock */
/* @var $form CActiveForm */
?>

<div class="wide form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'action'=>Yii::app()->createUrl($this->route),
	'method'=>'get',
)); ?>

	<div class="row">
		<?php echo $form->label($model,'idstock'); ?>
		<?php echo $form->textField($model,'idstock'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'idProducto'); ?>
		<?php echo $form->textField($model,'idProducto'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'idAlmacen'); ?>
		<?php echo $form->textField($model,'idAlmacen'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'idEntrada'); ?>
		<?php echo $form->textField($model,'idEntrada'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'cantidadProducto'); ?>
		<?php echo $form->textField($model,'cantidadProducto'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'productomin'); ?>
		<?php echo $form->textField($model,'productomin'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'fechaAlta'); ?>
		<?php echo $form->textField($model,'fechaAlta'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'idUsuario'); ?>
		<?php echo $form->textField($model,'idUsuario'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton('Search'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- search-form -->