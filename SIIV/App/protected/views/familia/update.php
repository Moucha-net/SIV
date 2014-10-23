<?php
/* @var $this FamiliaController */
/* @var $model Familia */

$this->breadcrumbs=array(
	'Familias'=>array('index'),
	$model->idFamilia=>array('view','id'=>$model->idFamilia),
	'Update',
);

$this->menu=array(
	array('label'=>'List Familia', 'url'=>array('index')),
	array('label'=>'Create Familia', 'url'=>array('create')),
	array('label'=>'View Familia', 'url'=>array('view', 'id'=>$model->idFamilia)),
	array('label'=>'Manage Familia', 'url'=>array('admin')),
);
?>

<h1>Update Familia <?php echo $model->idFamilia; ?></h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>