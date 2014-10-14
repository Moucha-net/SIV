<?php
/* @var $this EstatusController */
/* @var $data Estatus */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('idestatus')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->idestatus), array('view', 'id'=>$data->idestatus)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('nombreEstatus')); ?>:</b>
	<?php echo CHtml::encode($data->nombreEstatus); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('fechaAlta')); ?>:</b>
	<?php echo CHtml::encode($data->fechaAlta); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('idUsuario')); ?>:</b>
	<?php echo CHtml::encode($data->idUsuario); ?>
	<br />


</div>