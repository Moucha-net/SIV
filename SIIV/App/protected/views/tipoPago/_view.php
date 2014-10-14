<?php
/* @var $this TipoPagoController */
/* @var $data TipoPago */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('idtipoPago')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->idtipoPago), array('view', 'id'=>$data->idtipoPago)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('nombreTipoPago')); ?>:</b>
	<?php echo CHtml::encode($data->nombreTipoPago); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('fechaAlta')); ?>:</b>
	<?php echo CHtml::encode($data->fechaAlta); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('idUsuario')); ?>:</b>
	<?php echo CHtml::encode($data->idUsuario); ?>
	<br />


</div>