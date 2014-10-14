<?php
/* @var $this UsuariosController */
/* @var $data Usuarios */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('idusuario')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->idusuario), array('view', 'id'=>$data->idusuario)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('nombre')); ?>:</b>
	<?php echo CHtml::encode($data->nombre); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('aPaterno')); ?>:</b>
	<?php echo CHtml::encode($data->aPaterno); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('aMaterno')); ?>:</b>
	<?php echo CHtml::encode($data->aMaterno); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('correo')); ?>:</b>
	<?php echo CHtml::encode($data->correo); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('telefono')); ?>:</b>
	<?php echo CHtml::encode($data->telefono); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('userName')); ?>:</b>
	<?php echo CHtml::encode($data->userName); ?>
	<br />

	<?php /*
	<b><?php echo CHtml::encode($data->getAttributeLabel('contrasena')); ?>:</b>
	<?php echo CHtml::encode($data->contrasena); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('idRol')); ?>:</b>
	<?php echo CHtml::encode($data->idRol); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('fechaAlta')); ?>:</b>
	<?php echo CHtml::encode($data->fechaAlta); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('idUsuarioGen')); ?>:</b>
	<?php echo CHtml::encode($data->idUsuarioGen); ?>
	<br />

	*/ ?>

</div>