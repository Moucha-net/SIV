<?php
/* @var $this TipoPagoController */
/* @var $data TipoPago */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('idTipoPago')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->idTipoPago), array('view', 'id'=>$data->idTipoPago)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('nombre')); ?>:</b>
	<?php echo CHtml::encode($data->nombre); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('fechaAlta')); ?>:</b>
	<?php echo CHtml::encode($data->fechaAlta); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('usuarioCreacion')); ?>:</b>
	<?php echo CHtml::encode($data->usuarioCreacion); ?>
	<br />


</div>