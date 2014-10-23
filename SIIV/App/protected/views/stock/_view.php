<?php
/* @var $this StockController */
/* @var $data Stock */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('idStock')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->idStock), array('view', 'id'=>$data->idStock)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('idProducto')); ?>:</b>
	<?php echo CHtml::encode($data->idProducto); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('idAlmacen')); ?>:</b>
	<?php echo CHtml::encode($data->idAlmacen); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('cantidadProducto')); ?>:</b>
	<?php echo CHtml::encode($data->cantidadProducto); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('productoMin')); ?>:</b>
	<?php echo CHtml::encode($data->productoMin); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('fechaAlta')); ?>:</b>
	<?php echo CHtml::encode($data->fechaAlta); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('usuarioCreacion')); ?>:</b>
	<?php echo CHtml::encode($data->usuarioCreacion); ?>
	<br />


</div>