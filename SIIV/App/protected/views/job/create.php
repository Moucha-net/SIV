<!-- Breadcrumbs line -->
<div class="crumbs">
	<ul id="breadcrumbs" class="breadcrumb">
		<li>
			<i class="icon-home"></i>
			<a href="<?php echo Yii::app()->baseUrl; ?>/job/admin">Job</a>
		</li>
		<li class="current">
			<a href="<?php echo Yii::app()->baseUrl; ?>/job/create" title="">Create Job</a>
		</li>
	</ul>
</div>
<!-- /Breadcrumbs line -->

<h1>Create Job</h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>