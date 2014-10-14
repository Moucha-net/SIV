<?php
/* @var $this FamiliaController */
/* @var $data Familia */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('idfamilia')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->idfamilia), array('view', 'id'=>$data->idfamilia)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('nombreFamilia')); ?>:</b>
	<?php echo CHtml::encode($data->nombreFamilia); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('fechaAlta')); ?>:</b>
	<?php echo CHtml::encode($data->fechaAlta); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('idUsuario')); ?>:</b>
	<?php echo CHtml::encode($data->idUsuario); ?>
	<br />


</div>