<?php
/* @var $this IntermediarioController */
/* @var $model Intermediario */

$this->breadcrumbs=array(
	'Intermediarios'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List Intermediario', 'url'=>array('index')),
	array('label'=>'Manage Intermediario', 'url'=>array('admin')),
);
?>

<h1>Create Intermediario</h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>