<!-- Breadcrumbs line -->
<div class="crumbs">
	<ul id="breadcrumbs" class="breadcrumb">
		<li>
			<i class="icon-home"></i>
			<a href="<?php echo Yii::app()->baseUrl; ?>/media/admin">Media</a>
		</li>
		<li class="current">
			<a href="<?php echo Yii::app()->baseUrl; ?>/media/update" title="">Update Media</a>
		</li>
	</ul>
</div>
<!-- /Breadcrumbs line -->

<h1>Update Media <?php echo $model->idMedia; ?></h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>