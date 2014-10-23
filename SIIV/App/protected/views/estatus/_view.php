<?php
/* @var $this EstatusController */
/* @var $data Estatus */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('idEstatus')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->idEstatus), array('view', 'id'=>$data->idEstatus)); ?>
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