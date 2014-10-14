<?php
/* @var $this AlmacenController */
/* @var $model Almacen */

$this->breadcrumbs=array(
	'Almacens'=>array('index'),
	$model->idalmacen,
);

$this->menu=array(
	array('label'=>'List Almacen', 'url'=>array('index')),
	array('label'=>'Create Almacen', 'url'=>array('create')),
	array('label'=>'Update Almacen', 'url'=>array('update', 'id'=>$model->idalmacen)),
	array('label'=>'Delete Almacen', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->idalmacen),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage Almacen', 'url'=>array('admin')),
);
?>

<h1>View Almacen #<?php echo $model->idalmacen; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'idalmacen',
		'nombreAlmacen',
		'encargado',
		'telefono',
		'direccion',
		'descripcion',
		'tiempoEntrega',
		'fechaAlta',
		'idUsuario',
	),
)); ?>
