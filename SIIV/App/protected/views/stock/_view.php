<?php
/* @var $this StockController */
/* @var $data Stock */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('idstock')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->idstock), array('view', 'id'=>$data->idstock)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('idProducto')); ?>:</b>
	<?php echo CHtml::encode($data->idProducto); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('idAlmacen')); ?>:</b>
	<?php echo CHtml::encode($data->idAlmacen); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('idEntrada')); ?>:</b>
	<?php echo CHtml::encode($data->idEntrada); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('cantidadProducto')); ?>:</b>
	<?php echo CHtml::encode($data->cantidadProducto); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('productomin')); ?>:</b>
	<?php echo CHtml::encode($data->productomin); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('fechaAlta')); ?>:</b>
	<?php echo CHtml::encode($data->fechaAlta); ?>
	<br />

	<?php /*
	<b><?php echo CHtml::encode($data->getAttributeLabel('idUsuario')); ?>:</b>
	<?php echo CHtml::encode($data->idUsuario); ?>
	<br />

	*/ ?>

</div>