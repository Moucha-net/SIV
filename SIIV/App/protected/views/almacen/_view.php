<?php
/* @var $this AlmacenController */
/* @var $data Almacen */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('idAlmacen')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->idAlmacen), array('view', 'id'=>$data->idAlmacen)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('nombre')); ?>:</b>
	<?php echo CHtml::encode($data->nombre); ?>
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

	<b><?php echo CHtml::encode($data->getAttributeLabel('usuarioCreacion')); ?>:</b>
	<?php echo CHtml::encode($data->usuarioCreacion); ?>
	<br />

	*/ ?>

</div>