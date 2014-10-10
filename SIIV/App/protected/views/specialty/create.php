<!-- Breadcrumbs line -->
<div class="crumbs">
	<ul id="breadcrumbs" class="breadcrumb">
		<li>
			<i class="icon-home"></i>
			<a href="<?php echo Yii::app()->baseUrl; ?>/specialty/admin">Specialty</a>
		</li>
		<li class="current">
			<a href="<?php echo Yii::app()->baseUrl; ?>/specialty/create" title="">Create Specialty</a>
		</li>
	</ul>
</div>
<!-- /Breadcrumbs line -->

<h1>Create Specialty</h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>