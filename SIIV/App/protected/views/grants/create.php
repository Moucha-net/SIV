<?php
/* @var $this GrantsController */
/* @var $model Grants */

$this->breadcrumbs=array(
	'Grants'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List Grants', 'url'=>array('index')),
	array('label'=>'Manage Grants', 'url'=>array('admin')),
);
?>

<h1>Create Grants</h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>