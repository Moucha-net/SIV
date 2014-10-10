<!-- Forms -->
<?php Yii::app()->clientScript->registerScriptFile(Yii::app()->theme->baseUrl.'/plugins/uniform/jquery.uniform.min.js',CClientScript::POS_END); ?>
<?php Yii::app()->clientScript->registerScriptFile(Yii::app()->theme->baseUrl.'/plugins/select2/select2.min.js',CClientScript::POS_END); ?>

<!-- DataTables -->
<?php Yii::app()->clientScript->registerScriptFile(Yii::app()->theme->baseUrl.'/plugins/datatables/jquery.dataTables.min.js',CClientScript::POS_END); ?>
<?php Yii::app()->clientScript->registerScriptFile(Yii::app()->theme->baseUrl.'/plugins/datatables/tabletools/TableTools.min.js',CClientScript::POS_END); ?>
<?php Yii::app()->clientScript->registerScriptFile(Yii::app()->theme->baseUrl.'/plugins/datatables/colvis/ColVis.min.js',CClientScript::POS_END); ?>
<?php Yii::app()->clientScript->registerScriptFile(Yii::app()->theme->baseUrl.'/plugins/datatables/columnfilter/jquery.dataTables.columnFilter.js',CClientScript::POS_END); ?>
<?php Yii::app()->clientScript->registerScriptFile(Yii::app()->theme->baseUrl.'/plugins/datatables/DT_bootstrap.js',CClientScript::POS_END); ?>

<?php Yii::app()->clientScript->registerScriptFile(Yii::app()->theme->baseUrl.'/assets/custom/reasonOfRejection/admin.js',CClientScript::POS_END); ?>
<?php Yii::app()->clientScript->registerCssFile(Yii::app()->theme->baseUrl.'/assets/custom/reasonOfRejection/admin.css',CClientScript::POS_END); ?>

<!-- Breadcrumbs line -->
<div class="crumbs">
	<ul id="breadcrumbs" class="breadcrumb">
		<li>
			<i class="icon-home"></i>
			<a href="<?php echo Yii::app()->baseUrl; ?>/reasonOfRejection/admin">Reason of Rejection</a>
		</li>
	</ul>
</div>
<!-- /Breadcrumbs line -->

<h1>Management Reason of Rejection</h1>

<div class="form-group">
<div class="row">
<div class="input-group col-md-4">
	<input type="text" placeholder="Filtro general"  id="table_filter" class="form-control" type="text" aria-controls="DataTables_Table_0"/>
	<span class="input-group-addon">
		<i class="icon-search"></i>
	</span>
</div>
</div>
</div>

<?php 
	$this->widget('ext.gridMelon.MelonGridRazon',array(
		'modelo'=>$reason, 
		'columnas'=>['idReasonOfRejection','Nombre','Tipo','Descripción','idReasonOfRejection'],
		'colContenido'=>['idReasonOfRejection','nombreRechazo','idTipoRechazo','descripcion','idReasonOfRejection'],
		'modulo'=>'reasonOfRejection',
		'idModeloP'=>'idReasonOfRejection',
	)); 
?>

<script>
	$("#sidebar-content #nav li .current").removeClass("current");
        $("#sidebar-content #nav li .sub-menu .current").removeClass("current");
	$("#sidebar-content #nav li a[href='<?php echo Yii::app()->baseUrl; ?>/user']").parent().addClass("current");
</script>
