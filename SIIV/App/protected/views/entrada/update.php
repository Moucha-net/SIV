<?php
/* @var $this EntradaController */
/* @var $model Entrada */

$this->breadcrumbs=array(
	'Entradas'=>array('index'),
	$model->identrada=>array('view','id'=>$model->identrada),
	'Update',
);

$this->menu=array(
	array('label'=>'List Entrada', 'url'=>array('index')),
	array('label'=>'Create Entrada', 'url'=>array('create')),
	array('label'=>'View Entrada', 'url'=>array('view', 'id'=>$model->identrada)),
	array('label'=>'Manage Entrada', 'url'=>array('admin')),
);
?>

<h1>Update Entrada <?php echo $model->identrada; ?></h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>