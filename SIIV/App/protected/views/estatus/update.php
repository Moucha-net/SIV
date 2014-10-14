<?php
/* @var $this EstatusController */
/* @var $model Estatus */

$this->breadcrumbs=array(
	'Estatuses'=>array('index'),
	$model->idestatus=>array('view','id'=>$model->idestatus),
	'Update',
);

$this->menu=array(
	array('label'=>'List Estatus', 'url'=>array('index')),
	array('label'=>'Create Estatus', 'url'=>array('create')),
	array('label'=>'View Estatus', 'url'=>array('view', 'id'=>$model->idestatus)),
	array('label'=>'Manage Estatus', 'url'=>array('admin')),
);
?>

<h1>Update Estatus <?php echo $model->idestatus; ?></h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>