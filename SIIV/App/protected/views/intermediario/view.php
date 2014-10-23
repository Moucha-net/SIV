<?php
/* @var $this IntermediarioController */
/* @var $model Intermediario */

$this->breadcrumbs=array(
	'Intermediarios'=>array('index'),
	$model->idIntermediario,
);

$this->menu=array(
	array('label'=>'List Intermediario', 'url'=>array('index')),
	array('label'=>'Create Intermediario', 'url'=>array('create')),
	array('label'=>'Update Intermediario', 'url'=>array('update', 'id'=>$model->idIntermediario)),
	array('label'=>'Delete Intermediario', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->idIntermediario),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage Intermediario', 'url'=>array('admin')),
);
?>

<h1>View Intermediario #<?php echo $model->idIntermediario; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'idIntermediario',
		'nombre',
		'direccion',
		'telefono',
		'correo',
		'descripcion',
		'fechaAlta',
		'usuarioCreacion',
	),
)); ?>
