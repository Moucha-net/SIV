<?php
/* @var $this ComprobanteController */
/* @var $model Comprobante */

$this->breadcrumbs=array(
	'Comprobantes'=>array('index'),
	$model->idComprobante,
);

$this->menu=array(
	array('label'=>'List Comprobante', 'url'=>array('index')),
	array('label'=>'Create Comprobante', 'url'=>array('create')),
	array('label'=>'Update Comprobante', 'url'=>array('update', 'id'=>$model->idComprobante)),
	array('label'=>'Delete Comprobante', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->idComprobante),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage Comprobante', 'url'=>array('admin')),
);
?>

<h1>View Comprobante #<?php echo $model->idComprobante; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'idComprobante',
		'descripcion',
		'fechaAlta',
		'usuarioCreacion',
	),
)); ?>
