<?php
/* @var $this ComprobanteController */
/* @var $data Comprobante */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('idComprobante')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->idComprobante), array('view', 'id'=>$data->idComprobante)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('descripcion')); ?>:</b>
	<?php echo CHtml::encode($data->descripcion); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('fechaAlta')); ?>:</b>
	<?php echo CHtml::encode($data->fechaAlta); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('usuarioCreacion')); ?>:</b>
	<?php echo CHtml::encode($data->usuarioCreacion); ?>
	<br />


</div>