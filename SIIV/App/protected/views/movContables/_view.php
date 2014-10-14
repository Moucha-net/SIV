<?php
/* @var $this MovContablesController */
/* @var $data MovContables */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('idmovContables')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->idmovContables), array('view', 'id'=>$data->idmovContables)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('idEntrada')); ?>:</b>
	<?php echo CHtml::encode($data->idEntrada); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('idSalida')); ?>:</b>
	<?php echo CHtml::encode($data->idSalida); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('fechaAlta')); ?>:</b>
	<?php echo CHtml::encode($data->fechaAlta); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('idUsuario')); ?>:</b>
	<?php echo CHtml::encode($data->idUsuario); ?>
	<br />


</div>