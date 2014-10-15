<?php
/* @var $this EntradaController */
/* @var $model Entrada */

$this->breadcrumbs=array(
	'Entradas'=>array('index'),
	$model->idEntrada,
);

$this->menu=array(
	array('label'=>'List Entrada', 'url'=>array('index')),
	array('label'=>'Create Entrada', 'url'=>array('create')),
	array('label'=>'Update Entrada', 'url'=>array('update', 'id'=>$model->idEntrada)),
	array('label'=>'Delete Entrada', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->idEntrada),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage Entrada', 'url'=>array('admin')),
);
?>

<h1>View Entrada #<?php echo $model->idEntrada; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'idEntrada',
		'idIntermediario',
		'fecha',
		'hora',
		'observaciones',
		'cantidadEntrada',
		'totalEntrada',
		'fechaAlta',
		'usuarioCreacion',
		'idStock',
		'idEstatus',
	),
)); ?>
