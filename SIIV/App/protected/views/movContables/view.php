<?php
/* @var $this MovContablesController */
/* @var $model MovContables */

$this->breadcrumbs=array(
	'Mov Contables'=>array('index'),
	$model->idMovContables,
);

$this->menu=array(
	array('label'=>'List MovContables', 'url'=>array('index')),
	array('label'=>'Create MovContables', 'url'=>array('create')),
	array('label'=>'Update MovContables', 'url'=>array('update', 'id'=>$model->idMovContables)),
	array('label'=>'Delete MovContables', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->idMovContables),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage MovContables', 'url'=>array('admin')),
);
?>

<h1>View MovContables #<?php echo $model->idMovContables; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'idMovContables',
		'idEntrada',
		'idSalida',
		'fechaAlta',
		'usuarioCreacion',
	),
)); ?>
