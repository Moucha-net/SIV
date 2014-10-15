<?php
/* @var $this SalidaController */
/* @var $data Salida */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('idSalida')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->idSalida), array('view', 'id'=>$data->idSalida)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('idIntermediario')); ?>:</b>
	<?php echo CHtml::encode($data->idIntermediario); ?>
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

	<b><?php echo CHtml::encode($data->getAttributeLabel('usuarioCreacion')); ?>:</b>
	<?php echo CHtml::encode($data->usuarioCreacion); ?>
	<br />

	<?php /*
	<b><?php echo CHtml::encode($data->getAttributeLabel('idDescuento')); ?>:</b>
	<?php echo CHtml::encode($data->idDescuento); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('idComprobante')); ?>:</b>
	<?php echo CHtml::encode($data->idComprobante); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('idStock')); ?>:</b>
	<?php echo CHtml::encode($data->idStock); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('idEstatus')); ?>:</b>
	<?php echo CHtml::encode($data->idEstatus); ?>
	<br />

	*/ ?>

</div>