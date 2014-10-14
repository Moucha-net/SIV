<?php
/* @var $this DescuentoController */
/* @var $model Descuento */

$this->breadcrumbs=array(
	'Descuentos'=>array('index'),
	$model->iddescuento,
);

$this->menu=array(
	array('label'=>'List Descuento', 'url'=>array('index')),
	array('label'=>'Create Descuento', 'url'=>array('create')),
	array('label'=>'Update Descuento', 'url'=>array('update', 'id'=>$model->iddescuento)),
	array('label'=>'Delete Descuento', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->iddescuento),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage Descuento', 'url'=>array('admin')),
);
?>

<h1>View Descuento #<?php echo $model->iddescuento; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'iddescuento',
		'nombreDescuento',
		'descripcion',
		'porcentaje',
		'fechaAlta',
		'idUsuario',
	),
)); ?>
