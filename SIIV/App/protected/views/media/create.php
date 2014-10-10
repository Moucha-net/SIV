<!-- Breadcrumbs line -->
<div class="crumbs">
	<ul id="breadcrumbs" class="breadcrumb">
		<li>
			<i class="icon-home"></i>
			<a href="<?php echo Yii::app()->baseUrl; ?>/media/admin">Media</a>
		</li>
		<li class="current">
			<a href="<?php echo Yii::app()->baseUrl; ?>/media/create" title="">Create Media</a>
		</li>
	</ul>
</div>
<!-- /Breadcrumbs line -->

<h1>Create Media</h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>