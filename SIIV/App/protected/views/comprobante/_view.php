<?php
/* @var $this ComprobanteController */
/* @var $data Comprobante */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('idcomprobante')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->idcomprobante), array('view', 'id'=>$data->idcomprobante)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('idSalida')); ?>:</b>
	<?php echo CHtml::encode($data->idSalida); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('descripcion')); ?>:</b>
	<?php echo CHtml::encode($data->descripcion); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('fechaAlta')); ?>:</b>
	<?php echo CHtml::encode($data->fechaAlta); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('idUsuario')); ?>:</b>
	<?php echo CHtml::encode($data->idUsuario); ?>
	<br />


</div>