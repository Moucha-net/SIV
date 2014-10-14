<?php
/* @var $this BancoController */
/* @var $model Banco */

$this->breadcrumbs=array(
	'Bancos'=>array('index'),
	$model->idbanco,
);

$this->menu=array(
	array('label'=>'List Banco', 'url'=>array('index')),
	array('label'=>'Create Banco', 'url'=>array('create')),
	array('label'=>'Update Banco', 'url'=>array('update', 'id'=>$model->idbanco)),
	array('label'=>'Delete Banco', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->idbanco),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage Banco', 'url'=>array('admin')),
);
?>

<h1>View Banco #<?php echo $model->idbanco; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'idbanco',
		'nombreBanco',
		'fechaAlta',
		'idUsuario',
	),
)); ?>
