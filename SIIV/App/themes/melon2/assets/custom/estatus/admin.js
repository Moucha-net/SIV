function fnFilterTable ( val )
{
    $('#DataTables_Table_0').dataTable().fnFilter(val);
}

$("#table_filter").keyup( function() { fnFilterTable( $("#table_filter").val() ); } );
$("#table_filter").focusout( function() { fnFilterTable( $("#table_filter").val() ); } );