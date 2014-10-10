<?php

class MelonGridVarEnt extends CWidget
{
	public $modelo=null;
	public $columnas=null;
	public $colContenido=null;
	public $modulo="";
	public $idModeloP="";

	private $_baseUrl;
	private $idModelo;
	private $count=0;
	private $intBorrar=0;

	public function init()
	{
		echo "<!--=== no-padding and table-tabletools ===-->
				<div class='row' id='forma'>
					<div class='col-md-12'>
						<div class='widget box'>
							<div class='widget-header'>
								
							</div>
							<div class='widget-content no-padding'>
							
								<table class='table table-striped table-bordered table-hover table-checkable datatable'>
									<thead>
										<tr>
											";
											if($this->columnas != null)
											{
												foreach ($this->columnas as $col) {
													
													if($col == $this->idModeloP)
														echo "<th width='20px'></th>";
													else
														echo "<th>".$col."</th>";
												}
												$this->intBorrar=0;
											}
											else
											{
												foreach ($this->modelo as $att) {
													foreach ($att->attributes as $key => $value) {
														echo "<th>".$key."</th>";
													}
												}
											}
										echo "</tr>
									</thead>";
									echo "<tbody>";
									foreach($this->modelo as $puesto)
									{
										$this->count=$this->count+1;
										
											if($this->columnas != null)
											{	echo "<tr>";

												foreach ($this->colContenido as $colC) {
													

														
													if($colC == $this->idModeloP)
													{
														
														echo "<td width='20px' id='idValor".$this->count."'><a href='".Yii::app()->baseUrl."/".$this->modulo."/update/id/".$puesto->$colC."'><button class='btn btn-xs'><i class='icon-edit'></i></button></td>";
														
														}
													else
														{
															
														echo "<td>".$puesto->$colC."</td>";

														}
												}
												$this->intBorrar=0;	
											}
											else
											{
												foreach ($this->modelo as $att) {
													foreach ($att->attributes as $key) {
														echo "<td>".$key."</td>";
													}
												}	
											}
									}
									echo "</tr>
									</tbody>
								</table>
								
							</div>
						</div>
					</div>
				</div>
				<!-- /no-padding and table-tabletools -->";
	}

	public function run()
	{
		echo "<script language='javascript'>
			
		var elim=[];
		var borraTodo=false;
				function showBoxes(frm){
				   borraTodo=true;
				}

			$('#eliminarAction').click(function(){
				if(borraTodo)
				{
					var message = \"Your chose:\"
				   	
				   //For each checkbox see if it has been checked, record the value.
				   var forma = document.getElementById(\"forma\");
				   for (i = 0; i < forma.Music.length; i++){
				      if (forma.Music[i].checked){
				         message = message + forma.Music[i].id; 
				         elim[elim.length] = forma.Music[i].id;
				      }
				      //alert(elim);				   
				   }
				   //alert(message);
				}
			
			/*var resp = ;*/
			//notyBoton('alert','texto','topCenter');

			var hi= confirm(\"Esta ?\");
   			 if (hi== true){
        
				//convert array to json
				//var jsonArray = JSON.stringify(elim);
				//prepare POST data
				
					//alert(elim);

					for (var i=0; i <elim.length ; i++) { 

     					var iddddd=elim[i];
     					//alert(\"id: \"+iddddd);
     					if (!isNaN(iddddd)) {
     						$.ajax({
							  type: 'POST',
							  url: '".Yii::app()->baseUrl."/".$this->modulo."/delete/'+iddddd,
							  data: elim,
							  success: function () {
							    $(location).attr('href','".Yii::app()->baseUrl."/".$this->modulo."/');
				  					},
				                error: function(result) {
				                    alert(\"Data not found\");
				                }
							});
     					}	
     				}
     				
				 
			
				//send POST data to PHP and handle response
			}
			elim=null;
			borraTodo=false;
			});

		</script>";
		
		/*		$this->_baseUrl = Yii::app()->getAssetManager()->publish(dirname(__FILE__));
		Yii::app()->getClientScript()->registerScriptFile($this->_baseUrl."/plugins/datatables/jquery.dataTables.min.js");
		Yii::app()->getClientScript()->registerScriptFile($this->_baseUrl."/plugins/datatables/tabletools/TableTools.min.js");
		Yii::app()->getClientScript()->registerScriptFile($this->_baseUrl."/plugins/datatables/DT_bootstrap.js");*/
	}
}
?>