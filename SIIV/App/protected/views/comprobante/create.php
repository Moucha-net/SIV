<?php
/* @var $this ComprobanteController */
/* @var $model Comprobante */

$this->breadcrumbs=array(
	'Comprobantes'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List Comprobante', 'url'=>array('index')),
	array('label'=>'Manage Comprobante', 'url'=>array('admin')),
);
?>

<h1>Create Comprobante</h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>