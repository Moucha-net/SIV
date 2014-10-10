<?php

class MelonGridUser extends CWidget
{
	
	private $_baseUrl;
	private $idModelo;

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
										<a href='".Yii::app()->baseUrl."/cruge/ui/usermanagementcreate'><span class='btn btn-xs'><i class='icon-plus' style='padding-top: 6px;'></i> </span></a>
									</div>
								</div>
							</div>
							<div class='widget-content no-padding'>
								<table class='table table-striped table-bordered table-hover table-checkable datatable'>
									<thead>
										<tr>
											<th class='checkbox-column'>
												<input type='checkbox' class='uniform' onclick='showBoxes();'>
											</th>
											<th>Name</th>
											<th>Email</th>
											<th>Create Date</th>
											<th>Rol</th>
											<th></th>
										</tr>
									</thead>";
									echo "<tbody>";
									
									foreach(Yii::app()->user->um->listUsers() as $user){
										echo "<tr><td class='checkbox-column'>
												<input type='checkbox' class='uniform' name='BorraUsr' id='".$user->iduser."' onclick='$(this).val(this.checked ? elim[elim.length]=".$user->iduser." : 0)'>
											</td>";

										$instancia_CrugeStoredUser = Yii::app()->user->um->loadUser($user->email,true);										
										//$username =  $instancia_CrugeStoredUser->username;
										$nombre = Yii::app()->user->um->getFieldValue($instancia_CrugeStoredUser,'name');
										$apellido = Yii::app()->user->um->getFieldValue($instancia_CrugeStoredUser,'lastName');

										echo "<td>".$nombre." ".$apellido."</td>";
										echo "<td>".$user->email."</td>";
										echo "<td>".Yii::app()->dateFormatter->format("d/m/y",$user->regdate)."</td>";
										
										$rbac = Yii::app()->user->rbac;
										
										$listaRolesAsignados = $rbac->getAuthAssignments($user->iduser);

										echo "<td>";
										foreach($rbac->roles as $rol){
											foreach($listaRolesAsignados as $ra){
												if($ra->itemName === $rol->name)
												{
													echo $rol->name.",";
												}
											}
										}
										echo "</td>";

										echo "<td width='20px'>
										<a href='".Yii::app()->baseUrl."/cruge/ui/usermanagementupdate/id/".$user->iduser."'>
										<button class='btn btn-xs'><i class='icon-edit'></i></button></a>
										</td></tr>";
									}
									echo "
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
				   	
				var forma = document.getElementsByName('BorraUsr');
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
							url: '".Yii::app()->baseUrl."/cruge/ui/usermanagementdelete/id/'+iddddd,
							data: elim,
							success: function () {
								var exito=notyBasico('success','Se ha eliminado el usuario exitosamente','center');
								setTimeout(function() { $(location).attr('href','".Yii::app()->baseUrl."/cruge/ui/usermanagementadmin/'); }, 3000);
								
				  			},
				            error: function(result) {

				               var error=notyBasico('error','Ha ocurrido un error, por favor intentelo de nuevo','center');
				            }
						});
     				}	
     			}
			}
			else{
				var warning=notyBasico('warning','No ha seleccionado ningún registro','topCenter');
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
