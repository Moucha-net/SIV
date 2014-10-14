<?php
/* @var $this AlmacenController */
/* @var $data Almacen */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('idalmacen')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->idalmacen), array('view', 'id'=>$data->idalmacen)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('nombreAlmacen')); ?>:</b>
	<?php echo CHtml::encode($data->nombreAlmacen); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('encargado')); ?>:</b>
	<?php echo CHtml::encode($data->encargado); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('telefono')); ?>:</b>
	<?php echo CHtml::encode($data->telefono); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('direccion')); ?>:</b>
	<?php echo CHtml::encode($data->direccion); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('descripcion')); ?>:</b>
	<?php echo CHtml::encode($data->descripcion); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('tiempoEntrega')); ?>:</b>
	<?php echo CHtml::encode($data->tiempoEntrega); ?>
	<br />

	<?php /*
	<b><?php echo CHtml::encode($data->getAttributeLabel('fechaAlta')); ?>:</b>
	<?php echo CHtml::encode($data->fechaAlta); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('idUsuario')); ?>:</b>
	<?php echo CHtml::encode($data->idUsuario); ?>
	<br />

	*/ ?>

</div>