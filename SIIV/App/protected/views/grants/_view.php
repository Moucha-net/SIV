<?php
/* @var $this GrantsController */
/* @var $data Grants */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('grantName')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->grantName), array('view', 'id'=>$data->grantName)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('lastModifiedDate')); ?>:</b>
	<?php echo CHtml::encode($data->lastModifiedDate); ?>
	<br />


</div>