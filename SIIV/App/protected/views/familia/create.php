<?php
/* @var $this FamiliaController */
/* @var $model Familia */

$this->breadcrumbs=array(
	'Familias'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List Familia', 'url'=>array('index')),
	array('label'=>'Manage Familia', 'url'=>array('admin')),
);
?>

<h1>Create Familia</h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>