<!-- Breadcrumbs line -->
<div class="crumbs">
	<ul id="breadcrumbs" class="breadcrumb">
		<li>
			<i class="icon-home"></i>
			<a href="<?php echo Yii::app()->baseUrl; ?>/job/admin">Job</a>
		</li>
		<li class="current">
			<a href="<?php echo Yii::app()->baseUrl; ?>/job/update" title="">Update Job</a>
		</li>
	</ul>
</div>
<!-- /Breadcrumbs line -->

<h1>Update Job <?php echo $model->name; ?></h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>