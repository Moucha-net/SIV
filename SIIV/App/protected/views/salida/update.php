<?php
/* @var $this SalidaController */
/* @var $model Salida */

$this->breadcrumbs=array(
	'Salidas'=>array('index'),
	$model->idsalida=>array('view','id'=>$model->idsalida),
	'Update',
);

$this->menu=array(
	array('label'=>'List Salida', 'url'=>array('index')),
	array('label'=>'Create Salida', 'url'=>array('create')),
	array('label'=>'View Salida', 'url'=>array('view', 'id'=>$model->idsalida)),
	array('label'=>'Manage Salida', 'url'=>array('admin')),
);
?>

<h1>Update Salida <?php echo $model->idsalida; ?></h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>