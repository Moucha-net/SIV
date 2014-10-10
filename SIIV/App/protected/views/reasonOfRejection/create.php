<!-- Breadcrumbs line -->
<div class="crumbs">
	<ul id="breadcrumbs" class="breadcrumb">
		<li>
			<i class="icon-home"></i>
			<a href="<?php echo Yii::app()->baseUrl; ?>/reasonOfRejection/admin">Reason of Rejection</a>
		</li>
		<li class="current">
			<a href="<?php echo Yii::app()->baseUrl; ?>/reasonOfRejection/create" title="">Create Reason of Rejection</a>
		</li>
	</ul>
</div>
<!-- /Breadcrumbs line -->

<h1>Create ReasonOfRejection</h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>