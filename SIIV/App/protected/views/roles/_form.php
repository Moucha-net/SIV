<?php
/* @var $this TipoDispositivoController */
/* @var $model TipoDispositivo */
/* @var $form CActiveForm */
?>

<?php
$baseUrl = Yii::app()->baseUrl; 
/*You need to change the URL as per your requirements, else this will show error page*/
$model_name=Yii::app()->controller->id;
$current_url=$baseUrl."/".$model_name;
 
/*To Send the additional data if needed*/
$reference_id = 88;
$customer_id = 77;
//echo "Search   :".$current_url;
?>

<?php Yii::app()->clientScript->registerScriptFile(Yii::app()->theme->baseUrl.'/assets/custom/roles/form.js',CClientScript::POS_END); ?>

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'roles-form',
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
			<input type="hidden" id="current_url" value="<?php echo $current_url;?>"/>
			<input type="hidden" id="baseUrl" value="<?php echo $baseUrl;?>"/> 
			<span class="required">*</span> <?php echo $form->labelEx($model,'roleName'); ?>
			<?php echo $form->textField($model,'roleName',array('size'=>45,'maxlength'=>45,'class'=>'form-control input-width-large','placeholder'=>'Name')); ?>
		</div>
	</div>
	<div class="row">
		<div class="col-md-4">
			<span class="required">*</span> <?php echo $form->labelEx($model,'Grants: '); ?>
			<div id="grants" style="display: none"></div>
		</div>
	</div>
</div>
<div class="form-group">
	<div class="row buttons">
		<button type="button" class="submit btn btn-primary pull-right" id="guardar">
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