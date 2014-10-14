<?php
/* @var $this DescuentoController */
/* @var $model Descuento */

$this->breadcrumbs=array(
	'Descuentos'=>array('index'),
	$model->iddescuento=>array('view','id'=>$model->iddescuento),
	'Update',
);

$this->menu=array(
	array('label'=>'List Descuento', 'url'=>array('index')),
	array('label'=>'Create Descuento', 'url'=>array('create')),
	array('label'=>'View Descuento', 'url'=>array('view', 'id'=>$model->iddescuento)),
	array('label'=>'Manage Descuento', 'url'=>array('admin')),
);
?>

<h1>Update Descuento <?php echo $model->iddescuento; ?></h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>