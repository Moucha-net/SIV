<?php
/* @var $this AlmacenController */
/* @var $model Almacen */

$this->breadcrumbs=array(
	'Almacens'=>array('index'),
	$model->idAlmacen=>array('view','id'=>$model->idAlmacen),
	'Update',
);

$this->menu=array(
	array('label'=>'List Almacen', 'url'=>array('index')),
	array('label'=>'Create Almacen', 'url'=>array('create')),
	array('label'=>'View Almacen', 'url'=>array('view', 'id'=>$model->idAlmacen)),
	array('label'=>'Manage Almacen', 'url'=>array('admin')),
);
?>

<h1>Update Almacen <?php echo $model->idAlmacen; ?></h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>