<?php
/* @var $this EstatusController */
/* @var $model Estatus */

$this->breadcrumbs=array(
	'Estatuses'=>array('index'),
	$model->idestatus,
);

$this->menu=array(
	array('label'=>'List Estatus', 'url'=>array('index')),
	array('label'=>'Create Estatus', 'url'=>array('create')),
	array('label'=>'Update Estatus', 'url'=>array('update', 'id'=>$model->idestatus)),
	array('label'=>'Delete Estatus', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->idestatus),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage Estatus', 'url'=>array('admin')),
);
?>

<h1>View Estatus #<?php echo $model->idestatus; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'idestatus',
		'nombreEstatus',
		'fechaAlta',
		'idUsuario',
	),
)); ?>
