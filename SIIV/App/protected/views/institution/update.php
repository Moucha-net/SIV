<!-- Breadcrumbs line -->
<div class="crumbs">
	<ul id="breadcrumbs" class="breadcrumb">
		<li>
			<i class="icon-home"></i>
			<a href="<?php echo Yii::app()->baseUrl; ?>/institution/admin">Institution</a>
		</li>
		<li class="current">
			<a href="<?php echo Yii::app()->baseUrl; ?>/institution/update" title="">Update Institution</a>
		</li>
	</ul>
</div>
<!-- /Breadcrumbs line -->

<h1>Update Institution <?php echo $model->idInstitution; ?></h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>