<?php
/* @var $this MovContablesController */
/* @var $model MovContables */

$this->breadcrumbs=array(
	'Mov Contables'=>array('index'),
	$model->idmovContables=>array('view','id'=>$model->idmovContables),
	'Update',
);

$this->menu=array(
	array('label'=>'List MovContables', 'url'=>array('index')),
	array('label'=>'Create MovContables', 'url'=>array('create')),
	array('label'=>'View MovContables', 'url'=>array('view', 'id'=>$model->idmovContables)),
	array('label'=>'Manage MovContables', 'url'=>array('admin')),
);
?>

<h1>Update MovContables <?php echo $model->idmovContables; ?></h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>