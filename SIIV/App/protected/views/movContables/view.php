<?php
/* @var $this MovContablesController */
/* @var $model MovContables */

$this->breadcrumbs=array(
	'Mov Contables'=>array('index'),
	$model->idmovContables,
);

$this->menu=array(
	array('label'=>'List MovContables', 'url'=>array('index')),
	array('label'=>'Create MovContables', 'url'=>array('create')),
	array('label'=>'Update MovContables', 'url'=>array('update', 'id'=>$model->idmovContables)),
	array('label'=>'Delete MovContables', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->idmovContables),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage MovContables', 'url'=>array('admin')),
);
?>

<h1>View MovContables #<?php echo $model->idmovContables; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'idmovContables',
		'idEntrada',
		'idSalida',
		'fechaAlta',
		'idUsuario',
	),
)); ?>
