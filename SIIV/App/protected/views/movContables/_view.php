<?php
/* @var $this MovContablesController */
/* @var $data MovContables */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('idMovContables')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->idMovContables), array('view', 'id'=>$data->idMovContables)); ?>
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

	<b><?php echo CHtml::encode($data->getAttributeLabel('usuarioCreacion')); ?>:</b>
	<?php echo CHtml::encode($data->usuarioCreacion); ?>
	<br />


</div>