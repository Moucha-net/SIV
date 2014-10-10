<!-- Breadcrumbs line -->
<div class="crumbs">
	<ul id="breadcrumbs" class="breadcrumb">
		<li>
			<i class="icon-home"></i>
			<a href="<?php echo Yii::app()->baseUrl; ?>/specialty/admin">Media Specialty</a>
		</li>
		<li class="current">
			<a href="<?php echo Yii::app()->baseUrl; ?>/specialty/update" title="">Update Specialty</a>
		</li>
	</ul>
</div>
<!-- /Breadcrumbs line -->

<h1>Update Specialty <?php echo $model->idSpecialty; ?></h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>