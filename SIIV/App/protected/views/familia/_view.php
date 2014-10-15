<?php
/* @var $this FamiliaController */
/* @var $data Familia */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('idFamilia')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->idFamilia), array('view', 'id'=>$data->idFamilia)); ?>
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