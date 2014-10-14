<?php
/* @var $this ComprobanteController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Comprobantes',
);

$this->menu=array(
	array('label'=>'Create Comprobante', 'url'=>array('create')),
	array('label'=>'Manage Comprobante', 'url'=>array('admin')),
);
?>

<h1>Comprobantes</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
