<?php
/* @var $this BancoController */
/* @var $data Banco */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('idbanco')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->idbanco), array('view', 'id'=>$data->idbanco)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('nombreBanco')); ?>:</b>
	<?php echo CHtml::encode($data->nombreBanco); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('fechaAlta')); ?>:</b>
	<?php echo CHtml::encode($data->fechaAlta); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('idUsuario')); ?>:</b>
	<?php echo CHtml::encode($data->idUsuario); ?>
	<br />


</div>