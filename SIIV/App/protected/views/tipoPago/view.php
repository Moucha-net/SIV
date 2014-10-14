<?php
/* @var $this TipoPagoController */
/* @var $model TipoPago */

$this->breadcrumbs=array(
	'Tipo Pagos'=>array('index'),
	$model->idtipoPago,
);

$this->menu=array(
	array('label'=>'List TipoPago', 'url'=>array('index')),
	array('label'=>'Create TipoPago', 'url'=>array('create')),
	array('label'=>'Update TipoPago', 'url'=>array('update', 'id'=>$model->idtipoPago)),
	array('label'=>'Delete TipoPago', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->idtipoPago),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage TipoPago', 'url'=>array('admin')),
);
?>

<h1>View TipoPago #<?php echo $model->idtipoPago; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'idtipoPago',
		'nombreTipoPago',
		'fechaAlta',
		'idUsuario',
	),
)); ?>
