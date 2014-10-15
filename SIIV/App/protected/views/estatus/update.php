<?php
/* @var $this EstatusController */
/* @var $model Estatus */

$this->breadcrumbs=array(
	'Estatuses'=>array('index'),
	$model->idEstatus=>array('view','id'=>$model->idEstatus),
	'Update',
);

$this->menu=array(
	array('label'=>'List Estatus', 'url'=>array('index')),
	array('label'=>'Create Estatus', 'url'=>array('create')),
	array('label'=>'View Estatus', 'url'=>array('view', 'id'=>$model->idEstatus)),
	array('label'=>'Manage Estatus', 'url'=>array('admin')),
);
?>

<h1>Update Estatus <?php echo $model->idEstatus; ?></h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>