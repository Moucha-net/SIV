<?php

class MelonGridRoles extends CWidget
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
										<a href='".Yii::app()->baseUrl."/roles/create'><span class='btn btn-xs'><i class='icon-plus' style='padding-top: 6px;'></i> </span></a>
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
											<th>Rol Name</th>
											<th>Functions</th>
										</tr>
									</thead>";
									echo "<tbody>";
									
									$rbac = Roles::model()->findAll();
									$count = 0;
									$argf = array('success','info','warning','danger');

									foreach ($rbac as $rol) 
									{
										echo "<tr><td class='checkbox-column'>
												<input type='checkbox' class='uniform' name='BorraUsr' id='".$rol->roleName."' >
											</td>";

										echo "<td>".$rol->roleName."</td>";	
										
										echo "<td>";
										$valuess = RoleGrants::model()->findAll();
										foreach ($valuess as $value) 
										{
											if($rol->roleName == $value->roleName)
												echo "<span class='label label-".$argf[$count]."'>".$value->grantName."</span> ";
										}
										$count++;
										if(sizeof($argf) == $count+1)
											$count=0;

										echo "</td>";
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
		$('#eliminarAction').click(function(){	
			$('input[type=checkbox]:checked').each(function () {
           		var check = $(this);
           			$.ajax({
						type: 'POST',
						url: '".Yii::app()->baseUrl."/cruge/ui/rbacauthitemdelete/type/2/id/'+$(this).attr('id'),
						success: function () {
							var exito=notyBasico('success','Se ha eliminado el usuario exitosamente','center');
							setTimeout(function() { $(location).attr('href','".Yii::app()->baseUrl."/cruge/ui/rbaclistroles/'); }, 3000);
								
				  		},
				        error: function(result) {

				            var error=notyBasico('error','Ha ocurrido un error, por favor intentelo de nuevo','center');
				        }
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
