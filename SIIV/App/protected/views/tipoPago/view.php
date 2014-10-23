<?php
/* @var $this TipoPagoController */
/* @var $model TipoPago */

$this->breadcrumbs=array(
	'Tipo Pagos'=>array('index'),
	$model->idTipoPago,
);

$this->menu=array(
	array('label'=>'List TipoPago', 'url'=>array('index')),
	array('label'=>'Create TipoPago', 'url'=>array('create')),
	array('label'=>'Update TipoPago', 'url'=>array('update', 'id'=>$model->idTipoPago)),
	array('label'=>'Delete TipoPago', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->idTipoPago),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage TipoPago', 'url'=>array('admin')),
);
?>

<h1>View TipoPago #<?php echo $model->idTipoPago; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'idTipoPago',
		'nombre',
		'fechaAlta',
		'usuarioCreacion',
	),
)); ?>
