<?php
/* @var $this TipoPagoController */
/* @var $model TipoPago */

$this->breadcrumbs=array(
	'Tipo Pagos'=>array('index'),
	$model->idTipoPago=>array('view','id'=>$model->idTipoPago),
	'Update',
);

$this->menu=array(
	array('label'=>'List TipoPago', 'url'=>array('index')),
	array('label'=>'Create TipoPago', 'url'=>array('create')),
	array('label'=>'View TipoPago', 'url'=>array('view', 'id'=>$model->idTipoPago)),
	array('label'=>'Manage TipoPago', 'url'=>array('admin')),
);
?>

<h1>Update TipoPago <?php echo $model->idTipoPago; ?></h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>