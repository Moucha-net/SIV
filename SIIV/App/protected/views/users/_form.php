<?php
/* @var $this UsersController */
/* @var $model Users */
/* @var $form CActiveForm */
?>

<?php Yii::app()->clientScript->registerScriptFile(Yii::app()->theme->baseUrl.'/assets/custom/user/form.js',CClientScript::POS_END); ?>
<?php Yii::app()->clientScript->registerScriptFile(Yii::app()->theme->baseUrl.'/plugins/select2/select2.min.js',CClientScript::POS_END); ?>

<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'users-form',
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
					<?php echo $form->labelEx($model,'email'); ?>
					<?php echo $form->textField($model,'email',array('size'=>60,'maxlength'=>128, 'class'=>'form-control input-width-large','placeholder'=>'Name')); ?>
				</div>
				<div class="col-md-4">
					<?php echo $form->labelEx($model,'name'); ?>
					<?php echo $form->textField($model,'name',array('size'=>45,'maxlength'=>45, 'class'=>'form-control input-width-large','placeholder'=>'Name')); ?>
				</div>
				<div class="col-md-4">
					<?php echo $form->labelEx($model,'last_name'); ?>
					<?php echo $form->textField($model,'last_name',array('size'=>45,'maxlength'=>45, 'class'=>'form-control input-width-large','placeholder'=>'Last Name')); ?>
				</div>
		</div>
		<div class="row">
				<div class="col-md-4">
					<?php echo $form->labelEx($model,'middle_name'); ?>
					<?php echo $form->textField($model,'middle_name',array('size'=>45,'maxlength'=>45, 'class'=>'form-control input-width-large','placeholder'=>'Middle Name')); ?>
				</div>
				<div class="col-md-4">
					<?php echo $form->labelEx($model,'maiden_name'); ?>
					<?php echo $form->textField($model,'maiden_name',array('size'=>45,'maxlength'=>45, 'class'=>'form-control input-width-large','placeholder'=>'Maiden Name')); ?>
				</div>
				<div class="col-md-4">
					<?php echo $form->labelEx($model,'roleName'); ?> *
					<?php $array = CHtml::listData(Roles::model()->findAll(), 'roleName', 'roleName');
							echo $form->dropDownList($model,'roleName',$array,array('class'=>'select2 full-width-fix required input-width-xlarge','name'=>'Selecciona rol...'));?>
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