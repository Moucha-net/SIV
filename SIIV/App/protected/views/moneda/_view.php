<?php
/* @var $this MonedaController */
/* @var $data Moneda */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('idmoneda')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->idmoneda), array('view', 'id'=>$data->idmoneda)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('nombreMoneda')); ?>:</b>
	<?php echo CHtml::encode($data->nombreMoneda); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('fechaAlta')); ?>:</b>
	<?php echo CHtml::encode($data->fechaAlta); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('idUsuario')); ?>:</b>
	<?php echo CHtml::encode($data->idUsuario); ?>
	<br />


</div>