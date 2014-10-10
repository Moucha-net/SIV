<!-- Breadcrumbs line -->
<div class="crumbs">
	<ul id="breadcrumbs" class="breadcrumb">
		<li>
			<i class="icon-home"></i>
			<a href="<?php echo Yii::app()->baseUrl; ?>/insurance/admin">Insurance</a>
		</li>
		<li class="current">
			<a href="<?php echo Yii::app()->baseUrl; ?>/insurance/create" title="">Create Insurance</a>
		</li>
	</ul>
</div>
<!-- /Breadcrumbs line -->

<h1>Create Insurance</h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>