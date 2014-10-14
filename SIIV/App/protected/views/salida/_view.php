<?php
/* @var $this SalidaController */
/* @var $data Salida */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('idsalida')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->idsalida), array('view', 'id'=>$data->idsalida)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('idIntermediario')); ?>:</b>
	<?php echo CHtml::encode($data->idIntermediario); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('idProducto')); ?>:</b>
	<?php echo CHtml::encode($data->idProducto); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('cantidadSalida')); ?>:</b>
	<?php echo CHtml::encode($data->cantidadSalida); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('observaciones')); ?>:</b>
	<?php echo CHtml::encode($data->observaciones); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('totalSalida')); ?>:</b>
	<?php echo CHtml::encode($data->totalSalida); ?>
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