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
		<?php echo $form->label($model,'idMovContables'); ?>
		<?php echo $form->textField($model,'idMovContables'); ?>
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
		<?php echo $form->label($model,'usuarioCreacion'); ?>
		<?php echo $form->textField($model,'usuarioCreacion',array('size'=>45,'maxlength'=>45)); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton('Search'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- search-form -->