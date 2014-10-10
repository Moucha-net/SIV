<div class='widget-content'>
	<div class='panel-group' id='accordion'>
		<div class='panel panel-default'>
						<?php 
							foreach ($grants as $row)
							{
								echo "<label class='checkbox'>
										<input type='checkbox' class='uniform' onclick='' id='".$row['grantName']."' value='' name=''>".$row['grantName']." 
									</label>";
							}
						?>
				
		</div>
	</div> <!-- /.widget-content -->
</div> <!-- /.widget .box -->
					
<div id='_errorResult'></div>
