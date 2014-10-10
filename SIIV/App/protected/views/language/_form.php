
<?php
/* @var $this AseguradoraController */
/* @var $model Aseguradora */
/* @var $form CActiveForm */
?>

<?php Yii::app()->clientScript->registerScriptFile(Yii::app()->theme->baseUrl.'/assets/custom/language/form.js',CClientScript::POS_END); ?>

<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'language-form',
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

</div>