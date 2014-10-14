<?php
/* @var $this RolController */
/* @var $data Rol */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('idRol')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->idRol), array('view', 'id'=>$data->idRol)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('nombreRol')); ?>:</b>
	<?php echo CHtml::encode($data->nombreRol); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('fechaAlta')); ?>:</b>
	<?php echo CHtml::encode($data->fechaAlta); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('idUsuario')); ?>:</b>
	<?php echo CHtml::encode($data->idUsuario); ?>
	<br />


</div>