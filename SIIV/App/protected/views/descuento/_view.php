<?php
/* @var $this DescuentoController */
/* @var $data Descuento */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('iddescuento')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->iddescuento), array('view', 'id'=>$data->iddescuento)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('nombreDescuento')); ?>:</b>
	<?php echo CHtml::encode($data->nombreDescuento); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('descripcion')); ?>:</b>
	<?php echo CHtml::encode($data->descripcion); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('porcentaje')); ?>:</b>
	<?php echo CHtml::encode($data->porcentaje); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('fechaAlta')); ?>:</b>
	<?php echo CHtml::encode($data->fechaAlta); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('idUsuario')); ?>:</b>
	<?php echo CHtml::encode($data->idUsuario); ?>
	<br />


</div>