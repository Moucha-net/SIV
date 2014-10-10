<!-- Breadcrumbs line -->
<div class="crumbs">
	<ul id="breadcrumbs" class="breadcrumb">
		<li>
			<i class="icon-home"></i>
			<a href="<?php echo Yii::app()->baseUrl; ?>/roles/admin">Roles</a>
		</li>
		<li class="current">
			<a href="<?php echo Yii::app()->baseUrl; ?>/roles/create" title="">Create Roles</a>
		</li>
	</ul>
</div>
<!-- /Breadcrumbs line -->


<h1>Create Roles</h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>

<script>
	$("#sidebar-content #nav li .current").removeClass("current");
        $("#sidebar-content #nav li .sub-menu .current").removeClass("current");
	$("#sidebar-content #nav li a[href='<?php echo Yii::app()->baseUrl; ?>/roles']").parent().addClass("current");
</script>