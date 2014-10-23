<?php
/* @var $this IntermediarioController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Intermediarios',
);

$this->menu=array(
	array('label'=>'Create Intermediario', 'url'=>array('create')),
	array('label'=>'Manage Intermediario', 'url'=>array('admin')),
);
?>

<h1>Intermediarios</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
