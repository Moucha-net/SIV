<!-- Breadcrumbs line -->
<div class="crumbs">
	<ul id="breadcrumbs" class="breadcrumb">
		<li>
			<i class="icon-home"></i>
			<a href="<?php echo Yii::app()->baseUrl; ?>/users/admin">Specialty</a>
		</li>
		<li class="current">
			<a href="<?php echo Yii::app()->baseUrl; ?>/users/create" title="">Create Specialty</a>
		</li>
	</ul>
</div>
<!-- /Breadcrumbs line -->

<h1>Create Users</h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>