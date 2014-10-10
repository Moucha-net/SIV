<!-- Breadcrumbs line -->
<div class="crumbs">
	<ul id="breadcrumbs" class="breadcrumb">
		<li>
			<i class="icon-home"></i>
			<a href="<?php echo Yii::app()->baseUrl; ?>/mediaType/admin">Media Type</a>
		</li>
		<li class="current">
			<a href="<?php echo Yii::app()->baseUrl; ?>/mediaType/update" title="">Update Media Type</a>
		</li>
	</ul>
</div>
<!-- /Breadcrumbs line -->

<h1>Update MediaType <?php echo $model->idMediaType; ?></h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>