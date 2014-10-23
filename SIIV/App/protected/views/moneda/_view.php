<?php
/* @var $this MonedaController */
/* @var $data Moneda */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('idMoneda')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->idMoneda), array('view', 'id'=>$data->idMoneda)); ?>
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