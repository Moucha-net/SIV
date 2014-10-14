<?php
/* @var $this BancoController */
/* @var $model Banco */
/* @var $form CActiveForm */
?>

<div class="wide form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'action'=>Yii::app()->createUrl($this->route),
	'method'=>'get',
)); ?>

	<div class="row">
		<?php echo $form->label($model,'idbanco'); ?>
		<?php echo $form->textField($model,'idbanco'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'nombreBanco'); ?>
		<?php echo $form->textField($model,'nombreBanco',array('size'=>45,'maxlength'=>45)); ?>
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