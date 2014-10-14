<?php

class MelonGrid extends CWidget
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
								<span class='btn btn-xs' id='eliminarAction'><i class='icon-trash'></i> </span>
								<div class='toolbar no-padding'>
									<div class='btn-group'>
										<a href='".Yii::app()->baseUrl."/".$this->modulo."/create'><span class='btn btn-xs' style='padding-top: 6px;'><i class='icon-plus'></i> </span></a>
									</div>
								</div>
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
														if($this->intBorrar==0)
														{
															echo "<th class='checkbox-column'><input type='checkbox' class='uniform'  onclick='showBoxes();' ></th>";	
															$this->intBorrar=1;
														}
														else
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
											{	
												echo "<tr>";

												foreach ($this->colContenido as $colC) 
												{	
													if($colC == $this->idModeloP)
													{
														if($this->intBorrar == 0)
														{
															echo "<td class='checkbox-column'>
																	<input type='checkbox' class='uniform' name='Music' id='".$puesto->$colC."' >
															  	</td>";
															$this->intBorrar=1;
														}
														else
															echo "<td width='20px' id='idValor".$this->count."'><a href='".Yii::app()->baseUrl."/".$this->modulo."/update/id/".$puesto->$colC."'><button class='btn btn-xs'><i class='icon-edit'></i></button></a></td>";
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

	echo "
	<script language='javascript'>
	$(document).ready(function(){
        'use strict';
		$('#eliminarAction').click(function(){	
			$('input[type=checkbox]:checked').each(function () {
           		var check = $(this).attr('id');
           			$.ajax({
						type: 'POST',
						url: \"".Yii::app()->baseUrl."/".$this->modulo."/delete/id/\"+check,
						success: function () {
							notyOK('Has been successfully deleted the record.');
							setTimeout(function() { $(location).attr('href','".Yii::app()->baseUrl."/".$this->modulo."/admin'); }, 3000);
								
				  		},
				        error: function(result) {
							notyError('ERROR');
				        }
					});
				
			});
		});

	});

		</script>";
		
		/*		$this->_baseUrl = Yii::app()->getAssetManager()->publish(dirname(__FILE__));
		Yii::app()->getClientScript()->registerScriptFile($this->_baseUrl."/plugins/datatables/jquery.dataTables.min.js");
		Yii::app()->getClientScript()->registerScriptFile($this->_baseUrl."/plugins/datatables/tabletools/TableTools.min.js");
		Yii::app()->getClientScript()->registerScriptFile($this->_baseUrl."/plugins/datatables/DT_bootstrap.js");*/
	}
}
?>