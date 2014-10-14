<?php
/* @var $this StockController */
/* @var $model Stock */

$this->breadcrumbs=array(
	'Stocks'=>array('index'),
	$model->idstock,
);

$this->menu=array(
	array('label'=>'List Stock', 'url'=>array('index')),
	array('label'=>'Create Stock', 'url'=>array('create')),
	array('label'=>'Update Stock', 'url'=>array('update', 'id'=>$model->idstock)),
	array('label'=>'Delete Stock', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->idstock),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage Stock', 'url'=>array('admin')),
);
?>

<h1>View Stock #<?php echo $model->idstock; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'idstock',
		'idProducto',
		'idAlmacen',
		'idEntrada',
		'cantidadProducto',
		'productomin',
		'fechaAlta',
		'idUsuario',
	),
)); ?>
