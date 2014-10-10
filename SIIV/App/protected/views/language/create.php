<!-- Breadcrumbs line -->
<div class="crumbs">
	<ul id="breadcrumbs" class="breadcrumb">
		<li>
			<i class="icon-home"></i>
			<a href="<?php echo Yii::app()->baseUrl; ?>/language/admin">Language</a>
		</li>
		<li class="current">
			<a href="<?php echo Yii::app()->baseUrl; ?>/language/create" title="">Create Language</a>
		</li>
	</ul>
</div>
<!-- /Breadcrumbs line -->

<h1>Create Language</h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>