<?php
/* @var $this TipoDispositivoController */
/* @var $model TipoDispositivo */
/* @var $form CActiveForm */
?>

<?php Yii::app()->clientScript->registerScriptFile(Yii::app()->theme->baseUrl.'/assets/custom/reasonOfRejection/form.js',CClientScript::POS_END); ?>

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'reason-of-rejection-form',
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
			<span class="required">*</span> <?php echo $form->labelEx($model,'idRejectionType'); ?>
			<?php $array = CHtml::listData(RejectionType::model()->findAll(), 'idRejectionType', 'name');
					echo $form->dropDownList($model,'idRejectionType',$array,array('class'=>'select2-choice select2-default input-width-xlarge','prompt'=>'Seleccione tipo...')); ?>
		</div>
	</div>
	<div class="row">
		<div class="col-md-6">
			<span class="required">*</span> <?php echo $form->labelEx($model,'description'); ?>
			<?php echo $form->textArea($model,'description',array('size'=>45,'maxlength'=>250,'rows'=>3,'cols'=>5,'class'=>'form-control','placeholder'=>'Descripción')); ?>
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
