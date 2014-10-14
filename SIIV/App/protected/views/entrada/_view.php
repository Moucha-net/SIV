<?php
/* @var $this EntradaController */
/* @var $data Entrada */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('identrada')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->identrada), array('view', 'id'=>$data->identrada)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('idIntermediario')); ?>:</b>
	<?php echo CHtml::encode($data->idIntermediario); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('idProducto')); ?>:</b>
	<?php echo CHtml::encode($data->idProducto); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('fecha')); ?>:</b>
	<?php echo CHtml::encode($data->fecha); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('hora')); ?>:</b>
	<?php echo CHtml::encode($data->hora); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('observaciones')); ?>:</b>
	<?php echo CHtml::encode($data->observaciones); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('cantidadEntrada')); ?>:</b>
	<?php echo CHtml::encode($data->cantidadEntrada); ?>
	<br />

	<?php /*
	<b><?php echo CHtml::encode($data->getAttributeLabel('totalEntrada')); ?>:</b>
	<?php echo CHtml::encode($data->totalEntrada); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('fechaAlta')); ?>:</b>
	<?php echo CHtml::encode($data->fechaAlta); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('idUsuario')); ?>:</b>
	<?php echo CHtml::encode($data->idUsuario); ?>
	<br />

	*/ ?>

</div>