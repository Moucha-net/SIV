<?php
/* @var $this BancoController */
/* @var $data Banco */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('idBanco')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->idBanco), array('view', 'id'=>$data->idBanco)); ?>
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