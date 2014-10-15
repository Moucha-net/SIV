<?php
/* @var $this EntradaController */
/* @var $data Entrada */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('idEntrada')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->idEntrada), array('view', 'id'=>$data->idEntrada)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('idIntermediario')); ?>:</b>
	<?php echo CHtml::encode($data->idIntermediario); ?>
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

	<b><?php echo CHtml::encode($data->getAttributeLabel('totalEntrada')); ?>:</b>
	<?php echo CHtml::encode($data->totalEntrada); ?>
	<br />

	<?php /*
	<b><?php echo CHtml::encode($data->getAttributeLabel('fechaAlta')); ?>:</b>
	<?php echo CHtml::encode($data->fechaAlta); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('usuarioCreacion')); ?>:</b>
	<?php echo CHtml::encode($data->usuarioCreacion); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('idStock')); ?>:</b>
	<?php echo CHtml::encode($data->idStock); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('idEstatus')); ?>:</b>
	<?php echo CHtml::encode($data->idEstatus); ?>
	<br />

	*/ ?>

</div>