<!-- Breadcrumbs line -->
<div class="crumbs">
	<ul id="breadcrumbs" class="breadcrumb">
		<li>
			<i class="icon-home"></i>
			<a href="<?php echo Yii::app()->baseUrl; ?>/language/admin">Language</a>
		</li>
		<li class="current">
			<a href="<?php echo Yii::app()->baseUrl; ?>/language/update" title="">Update Language</a>
		</li>
	</ul>
</div>
<!-- /Breadcrumbs line -->

<h1>Update Language <?php echo $model->idLanguage; ?></h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>