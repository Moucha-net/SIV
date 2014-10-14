<?php
/* @var $this FamiliaController */
/* @var $model Familia */

$this->breadcrumbs=array(
	'Familias'=>array('index'),
	$model->idfamilia,
);

$this->menu=array(
	array('label'=>'List Familia', 'url'=>array('index')),
	array('label'=>'Create Familia', 'url'=>array('create')),
	array('label'=>'Update Familia', 'url'=>array('update', 'id'=>$model->idfamilia)),
	array('label'=>'Delete Familia', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->idfamilia),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage Familia', 'url'=>array('admin')),
);
?>

<h1>View Familia #<?php echo $model->idfamilia; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'idfamilia',
		'nombreFamilia',
		'fechaAlta',
		'idUsuario',
	),
)); ?>
