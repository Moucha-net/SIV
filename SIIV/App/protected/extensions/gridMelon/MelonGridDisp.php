<?php

class MelonGridDisp extends CWidget
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
												echo "</tr>";
											}
											else
											{
												foreach ($this->modelo as $att) {
													foreach ($att->attributes as $key => $value) {
														echo "<th>".$key."</th>";
													}
												}
											}
										echo "</thead>";
									echo "<tbody>";
									$clave=0;
									foreach($this->modelo as $puesto)
									{
										$this->count=$this->count+1;
										
											if($this->columnas != null)
											{	echo "<tr>";

												foreach ($this->colContenido as $colC) {
													if($colC == $this->idModeloP)
													{
														$clave = $puesto->$colC;
														if($this->intBorrar == 0)
														{
															echo "<td class='checkbox-column'>
																	<input type='checkbox' class='uniform' name='Music' id='".$puesto->$colC."' onclick='$(this).val(this.checked ? elim[elim.length]=".$puesto->$colC." : 0)'>
															  	</td>";
															$this->intBorrar=1;
														}
														else
															echo "<td width='20px' id='idValor".$this->count."'><a href='".Yii::app()->baseUrl."/".$this->modulo."/update/id/".$puesto->$colC."'><button class='btn btn-xs'><i class='icon-edit'></i></button></a></td>";
													}
													else
													{
														if($colC == "idTipoDispositivo")
														{
															$tipRech = (TipoDispositivo::model()->exists('idtipodispositivo='.$puesto->$colC)) ? TipoDispositivo::model()->find('idtipodispositivo='.$puesto->$colC)->nombreTipoDispositivo : "X";
															echo "<td>".$tipRech."</td>";
														}
														else if($colC == "idClinica")
														{
															//Yii::log(Clinica::model()->find('idclinica='.$clave)->nombreClinica, CLogger::LEVEL_ERROR);
															if($puesto->$colC != "")
															{
																$tipRechC = (Clinica::model()->exists('idclinica='.$puesto->$colC)) ? Clinica::model()->find('idclinica='.$puesto->$colC)->nombreClinica : "";
																echo "<td>".$tipRechC."</td>";
															}
															else
																echo "<td>".$puesto->$colC."</td>";
														}
														else
														{
															echo "<td>".$puesto->$colC."</td>";
														}
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
			
		var elim=[];
		var borraTodo=false;
		function showBoxes(){
			borraTodo=true;
		}

		$('#eliminarAction').click(function(){
			if(borraTodo)
			{
				var message = 'Your chose:';
				   	
				var forma = document.getElementsByName('Music');
				//alert(forma.length);
				for (i = 0; i < forma.length; i++){
					if (forma[i].checked){
				       	message = message + forma[i].id; 
				       	elim[elim.length] = forma[i].id;
				    }
				  				   
				}
			}
			
			if (elim!=null) {
        		for (var i=0; i <elim.length ; i++) { 
     				var iddddd=elim[i];
     				
     				if (!isNaN(iddddd)) {
     					$.ajax({
							type: 'POST',
							url: '".Yii::app()->baseUrl."/".$this->modulo."/delete/'+iddddd,
							data: elim,
							success: function () {
								var exito=notyBasico('success','Se ha eliminado el ".$this->modulo." exitosamente','center');
								setTimeout(function() { $(location).attr('href','".Yii::app()->baseUrl."/".$this->modulo."/'); }, 3000);
								
				  			},
				            error: function(result) {

				               var error=notyBasico('error','Ha ocurrido un error, por favor intentelo de nuevo','center');
				            }
						});
     				}	
     			}
			}
			else{
				var warning=notyBasico('success','No ha seleccionado ningún registro','center');
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