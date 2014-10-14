<?php
/* @var $this TipoPagoController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Tipo Pagos',
);

$this->menu=array(
	array('label'=>'Create TipoPago', 'url'=>array('create')),
	array('label'=>'Manage TipoPago', 'url'=>array('admin')),
);
?>

<h1>Tipo Pagos</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
