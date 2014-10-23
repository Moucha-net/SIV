<?php
/* @var $this IntermediarioController */
/* @var $model Intermediario */

$this->breadcrumbs=array(
	'Intermediarios'=>array('index'),
	$model->idIntermediario=>array('view','id'=>$model->idIntermediario),
	'Update',
);

$this->menu=array(
	array('label'=>'List Intermediario', 'url'=>array('index')),
	array('label'=>'Create Intermediario', 'url'=>array('create')),
	array('label'=>'View Intermediario', 'url'=>array('view', 'id'=>$model->idIntermediario)),
	array('label'=>'Manage Intermediario', 'url'=>array('admin')),
);
?>

<h1>Update Intermediario <?php echo $model->idIntermediario; ?></h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>