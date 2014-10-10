<?php
/* @var $this GrantsController */
/* @var $model Grants */

$this->breadcrumbs=array(
	'Grants'=>array('index'),
	$model->grantName,
);

$this->menu=array(
	array('label'=>'List Grants', 'url'=>array('index')),
	array('label'=>'Create Grants', 'url'=>array('create')),
	array('label'=>'Update Grants', 'url'=>array('update', 'id'=>$model->grantName)),
	array('label'=>'Delete Grants', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->grantName),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage Grants', 'url'=>array('admin')),
);
?>

<h1>View Grants #<?php echo $model->grantName; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'grantName',
		'lastModifiedDate',
	),
)); ?>
