<?php
/* @var $this GrantsController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Grants',
);

$this->menu=array(
	array('label'=>'Create Grants', 'url'=>array('create')),
	array('label'=>'Manage Grants', 'url'=>array('admin')),
);
?>

<h1>Grants</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
