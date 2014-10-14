<?php
/* @var $this MovContablesController */
/* @var $model MovContables */

$this->breadcrumbs=array(
	'Mov Contables'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List MovContables', 'url'=>array('index')),
	array('label'=>'Manage MovContables', 'url'=>array('admin')),
);
?>

<h1>Create MovContables</h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>