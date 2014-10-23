<?php
/* @var $this DescuentoController */
/* @var $model Descuento */

$this->breadcrumbs=array(
	'Descuentos'=>array('index'),
	$model->idDescuento,
);

$this->menu=array(
	array('label'=>'List Descuento', 'url'=>array('index')),
	array('label'=>'Create Descuento', 'url'=>array('create')),
	array('label'=>'Update Descuento', 'url'=>array('update', 'id'=>$model->idDescuento)),
	array('label'=>'Delete Descuento', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->idDescuento),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage Descuento', 'url'=>array('admin')),
);
?>

<h1>View Descuento #<?php echo $model->idDescuento; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'idDescuento',
		'nombre',
		'descripcion',
		'porcentaje',
		'fechaAlta',
		'usuarioCreacion',
	),
)); ?>
