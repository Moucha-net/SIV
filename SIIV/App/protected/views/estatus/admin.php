<!-- Forms -->
<?php Yii::app()->clientScript->registerScriptFile(Yii::app()->theme->baseUrl.'/plugins/uniform/jquery.uniform.min.js',CClientScript::POS_END); ?>
<?php Yii::app()->clientScript->registerScriptFile(Yii::app()->theme->baseUrl.'/plugins/select2/select2.min.js',CClientScript::POS_END); ?>

<!-- DataTables -->
<?php Yii::app()->clientScript->registerScriptFile(Yii::app()->theme->baseUrl.'/plugins/datatables/jquery.dataTables.min.js',CClientScript::POS_END); ?>
<?php Yii::app()->clientScript->registerScriptFile(Yii::app()->theme->baseUrl.'/plugins/datatables/tabletools/TableTools.min.js',CClientScript::POS_END); ?>
<?php Yii::app()->clientScript->registerScriptFile(Yii::app()->theme->baseUrl.'/plugins/datatables/colvis/ColVis.min.js',CClientScript::POS_END); ?>
<?php Yii::app()->clientScript->registerScriptFile(Yii::app()->theme->baseUrl.'/plugins/datatables/columnfilter/jquery.dataTables.columnFilter.js',CClientScript::POS_END); ?>
<?php Yii::app()->clientScript->registerScriptFile(Yii::app()->theme->baseUrl.'/plugins/datatables/DT_bootstrap.js',CClientScript::POS_END); ?>

<?php Yii::app()->clientScript->registerScriptFile(Yii::app()->theme->baseUrl.'/assets/custom/estatus/admin.js',CClientScript::POS_END); ?>
<?php Yii::app()->clientScript->registerCssFile(Yii::app()->theme->baseUrl.'/assets/custom/estatus/admin.css',CClientScript::POS_END); ?>

<!-- Breadcrumbs line -->
<div class="crumbs">
	<ul id="breadcrumbs" class="breadcrumb">
		<li>
			<i class="icon-home"></i>
			<a href="<?php echo Yii::app()->baseUrl; ?>/estatus/admin">Estatus</a>
		</li>
	</ul>
</div>
<!-- /Breadcrumbs line -->

<h1>Administración de Estatus</h1>

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
    $this->widget('ext.gridMelon.MelonGrid',array(
            'modelo'=>$estatus, 
            'columnas'=>['idEstatus','Estatus','idEstatus'],
            'colContenido'=>['idEstatus','nombre','idEstatus'],
            'modulo'=>'estatus', 
            'idModeloP'=>'idEstatus',
    ));        
    
?>