<?php
/* @var $this TipoDispositivoController */
/* @var $model TipoDispositivo */
/* @var $form CActiveForm */
?>

<?php Yii::app()->clientScript->registerScriptFile(Yii::app()->theme->baseUrl.'/assets/custom/mediaType/form.js',CClientScript::POS_END); ?>

<h3>Manage Type of Device</h3>
<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'media-type-form',
	// Please note: When you enable ajax validation, make sure the corresponding
	// controller action is handling ajax validation correctly.
	// There is a call to performAjaxValidation() commented in generated controller code.
	// See class documentation of CActiveForm for details on this.
	'enableAjaxValidation'=>false,
)); ?>

	<?php echo $form->errorSummary($model); ?>
	<div class="form-actions">
		<div class="form-group">
	<div class="row">
		<div class="col-md-4">
			<span class="required">*</span> <?php echo $form->labelEx($model,'name'); ?>
			<?php echo $form->textField($model,'name',array('size'=>45,'maxlength'=>45,'class'=>'form-control input-width-large','placeholder'=>'Name')); ?>
		</div>
		<div class="col-md-4">
			<span class="required">*</span> <?php echo $form->labelEx($model,'brand'); ?>
			<?php echo $form->textField($model,'brand',array('size'=>45,'maxlength'=>45,'class'=>'form-control input-width-large','placeholder'=>'Patent')); ?>
		</div>
		<div class="col-md-4">
			<span class="required">*</span> <?php echo $form->labelEx($model,'model'); ?>
			<?php echo $form->textField($model,'model',array('size'=>45,'maxlength'=>45,'class'=>'form-control input-width-large','placeholder'=>'Model')); ?>
		</div>
	</div>
</div>
<div class="form-group">
	<div class="row buttons">
		<button type="submit" class="submit btn btn-primary pull-right" id="guardar">
				Save <i class="icon-angle-right"></i>
		</button>

		<button type="button" class="submit btn btn-secundary pull-right" style="margin-right:30px" id="cancelar">
				<i class="icon-angle-left"></i> Cancel
		</button>
	</div>
	</div>
</div>

<?php $this->endWidget(); ?>

</div><!-- form -->