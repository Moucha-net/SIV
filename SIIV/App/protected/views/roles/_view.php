<?php
/* @var $this RolesController */
/* @var $data Roles */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('roleName')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->roleName), array('view', 'id'=>$data->roleName)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('lastModifiedDate')); ?>:</b>
	<?php echo CHtml::encode($data->lastModifiedDate); ?>
	<br />


</div>