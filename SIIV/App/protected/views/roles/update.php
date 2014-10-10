<?php
/* @var $this RolesController */
/* @var $model Roles */

$this->breadcrumbs=array(
	'Roles'=>array('index'),
	$model->roleName=>array('view','id'=>$model->roleName),
	'Update',
);

$this->menu=array(
	array('label'=>'List Roles', 'url'=>array('index')),
	array('label'=>'Create Roles', 'url'=>array('create')),
	array('label'=>'View Roles', 'url'=>array('view', 'id'=>$model->roleName)),
	array('label'=>'Manage Roles', 'url'=>array('admin')),
);
?>

<h1>Update Roles <?php echo $model->roleName; ?></h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>

<script>
	$("#sidebar-content #nav li .current").removeClass("current");
        $("#sidebar-content #nav li .sub-menu .current").removeClass("current");
	$("#sidebar-content #nav li a[href='<?php echo Yii::app()->baseUrl; ?>/roles']").parent().addClass("current");
</script>