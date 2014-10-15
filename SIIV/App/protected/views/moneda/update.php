<?php
/* @var $this MonedaController */
/* @var $model Moneda */

$this->breadcrumbs=array(
	'Monedas'=>array('index'),
	$model->idMoneda=>array('view','id'=>$model->idMoneda),
	'Update',
);

$this->menu=array(
	array('label'=>'List Moneda', 'url'=>array('index')),
	array('label'=>'Create Moneda', 'url'=>array('create')),
	array('label'=>'View Moneda', 'url'=>array('view', 'id'=>$model->idMoneda)),
	array('label'=>'Manage Moneda', 'url'=>array('admin')),
);
?>

<h1>Update Moneda <?php echo $model->idMoneda; ?></h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>