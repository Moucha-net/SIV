<?php
/* @var $this AlmacenController */
/* @var $model Almacen */

$this->breadcrumbs=array(
	'Almacens'=>array('index'),
	$model->idalmacen=>array('view','id'=>$model->idalmacen),
	'Update',
);

$this->menu=array(
	array('label'=>'List Almacen', 'url'=>array('index')),
	array('label'=>'Create Almacen', 'url'=>array('create')),
	array('label'=>'View Almacen', 'url'=>array('view', 'id'=>$model->idalmacen)),
	array('label'=>'Manage Almacen', 'url'=>array('admin')),
);
?>

<h1>Update Almacen <?php echo $model->idalmacen; ?></h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>