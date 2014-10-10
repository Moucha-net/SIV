$("#sidebar-content #nav li .current").removeClass("current");
	$("#sidebar-content #nav li a[href='<?php echo Yii::app()->baseUrl; ?>/reasonOfRejection/admin']").parent().parent().parent().addClass("current");
	$("#sidebar-content #nav li .sub-menu .current").removeClass("current");
	$("#sidebar-content #nav li .sub-menu li a[href='<?php echo Yii::app()->baseUrl; ?>/reasonOfRejection/admin']").parent().addClass("current");

	function fnFilterTable ( val )
	{
	    $('#DataTables_Table_0').dataTable().fnFilter(val);
	}

	$("#table_filter").keyup( function() { fnFilterTable( $("#table_filter").val() ); } );
	$("#table_filter").focusout( function() { fnFilterTable( $("#table_filter").val() ); } );