<?php
/* @var $this AseguradoraController */
/* @var $model Aseguradora */
/* @var $form CActiveForm */
?>

<?php Yii::app()->clientScript->registerScriptFile(Yii::app()->theme->baseUrl.'/assets/custom/insurance/form.js',CClientScript::POS_END); ?>

<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'insurance-form',
	// Please note: When you enable ajax validation, make sure the corresponding
	// controller action is handling ajax validation correctly.
	// There is a call to performAjaxValidation() commented in generated controller code.
	// See class documentation of CActiveForm for details on this.
	'enableAjaxValidation'=>false,
)); ?>

	
<div class="form-actions">
	<?php echo $form->errorSummary($model); ?>
	<div class="form-group">
		<div class="row">
				<div class="col-md-4">
					<span class="required">*</span> <?php echo $form->labelEx($model,'name'); ?>
					<?php echo $form->textField($model,'name',array('size'=>45,'maxlength'=>45,'class'=>'form-control input-width-large','placeholder'=>'Name')); ?>
				</div>
				<div class="col-md-4">
					<span class="required">*</span> <?php echo $form->labelEx($model,'email'); ?>
					<?php echo $form->textField($model,'email',array('size'=>45,'maxlength'=>45,'class'=>'form-control input-width-large','placeholder'=>'Email')); ?>
				</div>
				<div class="col-md-4">
					<?php echo $form->labelEx($model,'phone'); ?>
					<?php echo $form->textField($model,'phone',array('size'=>45,'maxlength'=>45,'class'=>'form-control input-width-large','placeholder'=>'Phone')); ?>
				</div>
		</div>
		<div class="row">
				<div class="col-md-4">
					<?php echo $form->labelEx($model,'contact'); ?>
					<?php echo $form->textField($model,'contact',array('size'=>45,'maxlength'=>45,'class'=>'form-control input-width-large','placeholder'=>'Contact Name')); ?>
				</div>
				<div class="col-md-4">
					<?php echo $form->labelEx($model,'fax'); ?>
					<?php echo $form->textField($model,'fax',array('size'=>45,'maxlength'=>45,'class'=>'form-control input-width-large','placeholder'=>'Fax')); ?>
				</div>
				<div class="col-md-4">
					<span class="required">*</span> <?php echo $form->labelEx($model,'country'); ?>
					<?php echo $form->textField($model,'country',array('size'=>45,'maxlength'=>45,'class'=>'form-control input-width-large','placeholder'=>'Country')); ?>
				</div>
				
		</div>
	</div>
	<div class="form-group">
		<div class="row">
				<div class="col-md-4">
					<?php echo $form->labelEx($model,'city'); ?>
					<?php echo $form->textField($model,'city',array('size'=>45,'maxlength'=>45,'class'=>'form-control input-width-large','placeholder'=>'City')); ?>
				</div>
				<div class="col-md-4">
					<span class="required">*</span> <?php echo $form->labelEx($model,'street'); ?>
					<?php echo $form->textField($model,'street',array('size'=>45,'maxlength'=>45,'class'=>'form-control input-width-large','placeholder'=>'Street')); ?>
				</div>
				<div class="col-md-4">
					<span class="required">*</span> <?php echo $form->labelEx($model,'number'); ?>
					<?php echo $form->textField($model,'number',array('size'=>45,'maxlength'=>45,'class'=>'form-control input-width-large','placeholder'=>'Number')); ?>
				</div>
		</div>
		<div class="row">
				<div class="col-md-6">
					<?php echo $form->labelEx($model,'zip'); ?>
					<?php echo $form->textField($model,'zip',array('size'=>45,'maxlength'=>45,'class'=>'form-control input-width-large','placeholder'=>'Postal Code')); ?>
				</div>	
				<div class="col-md-6">
				</div>
		</div>
	</div>
	<div class="form-group">
		<div class="row">
				<div class="col-md-12">
					<button type="submit" class="submit btn btn-primary pull-right" id="guardar">
							Save <i class="icon-angle-right"></i>
					</button>
					<button type="button" class="submit btn btn-secundary pull-right" style="margin-right:30px" id="cancelar">
							<i class="icon-angle-left"></i> Cancel 
					</button>
				</div>
		</div>
		<?php $this->endWidget(); ?>
	</div>
</div>

</div><!-- form -->