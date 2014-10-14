<?php
/* @var $this MovContablesController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Mov Contables',
);

$this->menu=array(
	array('label'=>'Create MovContables', 'url'=>array('create')),
	array('label'=>'Manage MovContables', 'url'=>array('admin')),
);
?>

<h1>Mov Contables</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
