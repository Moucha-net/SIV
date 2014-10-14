<?php
/* @var $this MovContablesController */
/* @var $model MovContables */
/* @var $form CActiveForm */
?>

<div class="wide form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'action'=>Yii::app()->createUrl($this->route),
	'method'=>'get',
)); ?>

	<div class="row">
		<?php echo $form->label($model,'idmovContables'); ?>
		<?php echo $form->textField($model,'idmovContables'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'idEntrada'); ?>
		<?php echo $form->textField($model,'idEntrada'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'idSalida'); ?>
		<?php echo $form->textField($model,'idSalida'); ?>
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