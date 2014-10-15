<?php
/* @var $this DescuentoController */
/* @var $model Descuento */

$this->breadcrumbs=array(
	'Descuentos'=>array('index'),
	$model->idDescuento=>array('view','id'=>$model->idDescuento),
	'Update',
);

$this->menu=array(
	array('label'=>'List Descuento', 'url'=>array('index')),
	array('label'=>'Create Descuento', 'url'=>array('create')),
	array('label'=>'View Descuento', 'url'=>array('view', 'id'=>$model->idDescuento)),
	array('label'=>'Manage Descuento', 'url'=>array('admin')),
);
?>

<h1>Update Descuento <?php echo $model->idDescuento; ?></h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>