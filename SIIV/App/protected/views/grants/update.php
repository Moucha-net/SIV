<?php
/* @var $this GrantsController */
/* @var $model Grants */

$this->breadcrumbs=array(
	'Grants'=>array('index'),
	$model->grantName=>array('view','id'=>$model->grantName),
	'Update',
);

$this->menu=array(
	array('label'=>'List Grants', 'url'=>array('index')),
	array('label'=>'Create Grants', 'url'=>array('create')),
	array('label'=>'View Grants', 'url'=>array('view', 'id'=>$model->grantName)),
	array('label'=>'Manage Grants', 'url'=>array('admin')),
);
?>

<h1>Update Grants <?php echo $model->grantName; ?></h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>