<?php
/* @var $this ComprobanteController */
/* @var $model Comprobante */

$this->breadcrumbs=array(
	'Comprobantes'=>array('index'),
	$model->idComprobante=>array('view','id'=>$model->idComprobante),
	'Update',
);

$this->menu=array(
	array('label'=>'List Comprobante', 'url'=>array('index')),
	array('label'=>'Create Comprobante', 'url'=>array('create')),
	array('label'=>'View Comprobante', 'url'=>array('view', 'id'=>$model->idComprobante)),
	array('label'=>'Manage Comprobante', 'url'=>array('admin')),
);
?>

<h1>Update Comprobante <?php echo $model->idComprobante; ?></h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>