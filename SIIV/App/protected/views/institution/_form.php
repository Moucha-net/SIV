<?php
/* @var $this ClinicaController */
/* @var $model Clinica */
/* @var $form CActiveForm */
?>

<?php Yii::app()->clientScript->registerScriptFile(Yii::app()->theme->baseUrl.'/assets/custom/institution/form.css',CClientScript::POS_HEAD); ?>
<?php Yii::app()->clientScript->registerScriptFile('https://maps.googleapis.com/maps/api/js?v=3.exp',CClientScript::POS_END); ?>
<?php Yii::app()->clientScript->registerScriptFile(Yii::app()->theme->baseUrl.'/assets/custom/institution/form.js',CClientScript::POS_END); ?>

<?php Yii::app()->clientScript->registerScriptFile(Yii::app()->theme->baseUrl.'/plugins/select2/select2.min.js',CClientScript::POS_END); ?>
<?php Yii::app()->clientScript->registerScriptFile(Yii::app()->theme->baseUrl.'/plugins/validation/jquery.validate.min.js',CClientScript::POS_END); ?>
<?php Yii::app()->clientScript->registerScriptFile(Yii::app()->theme->baseUrl.'/plugins/validation/additional-methods.min.js',CClientScript::POS_END); ?>
<?php Yii::app()->clientScript->registerScriptFile(Yii::app()->theme->baseUrl.'/plugins/bootstrap-wizard/jquery.bootstrap.wizard.min.js',CClientScript::POS_END); ?>
<?php Yii::app()->clientScript->registerScriptFile(Yii::app()->theme->baseUrl.'/assets/js/demo/form_wizard.js',CClientScript::POS_END); ?>

	
<!--=== Page Content ===-->
<div class="row">
        <!--=== Form Wizard ===-->
        <div class="col-md-12">
                <div class="widget box" id="form_wizard">
                        <div class="widget-header">
                                <div class="toolbar no-padding">
                                        <div class="btn-group">
                                                <span class="btn btn-xs widget-collapse"><i class="icon-angle-down"></i></span>
                                        </div>
                                </div>
                        </div>
                        <div class="widget-content">
                                <form class="form-horizontal" id="sample_form" action="#">
                                        <div class="form-wizard">
                                                <div class="form-body">

                                                        <!--=== Steps ===-->
                                                        <ul class="nav nav-pills nav-justified steps">
                                                                <li>
                                                                        <a href="#tab1" data-toggle="tab" class="step">
                                                                                <span class="number">1</span>
                                                                                <span class="desc"><i class="icon-ok"></i> Manage Institution</span>
                                                                        </a>
                                                                </li>
                                                                <li>
                                                                        <a href="#tab2" data-toggle="tab" class="step">
                                                                                <span class="number">2</span>
                                                                                <span class="desc"><i class="icon-ok"></i> Manage Device</span>
                                                                        </a>
                                                                </li>
                                                                <li>
                                                                        <a href="#tab3" data-toggle="tab" class="step active">
                                                                                <span class="number">3</span>
                                                                                <span class="desc"><i class="icon-ok"></i> Manage Employees</span>
                                                                        </a>
                                                                </li>
                                                                <li>
                                                                        <a href="#tab4" data-toggle="tab" class="step">
                                                                                <span class="number">4</span>
                                                                                <span class="desc"><i class="icon-ok"></i> Confirmation</span>
                                                                        </a>
                                                                </li>
                                                        </ul>
                                                        <!-- /Steps -->

                                                        <!--=== Progressbar ===-->
                                                        <div id="bar" class="progress progress-striped" role="progressbar">
                                                                <div class="progress-bar progress-bar-success"></div>
                                                        </div>
                                                        <!-- /Progressbar -->

                                                        <!--=== Tab Content ===-->
                                                        <div class="tab-content">

                                                                <!--=== Available On All Tabs ===-->
                                                                <div class="alert alert-danger hide-default">
                                                                        <button class="close" data-dismiss="alert"></button>
                                                                        You missed some fields. They have been highlighted.
                                                                </div>
                                                                <div class="alert alert-success hide-default">
                                                                        <button class="close" data-dismiss="alert"></button>
                                                                        Good job! :-)
                                                                </div>
                                                                <!-- /Available On All Tabs -->

                                                                <!--=== Basic Information ===-->
                                                                <div class="tab-pane active" id="tab1">
                                                                    <?php $form=$this->beginWidget('CActiveForm', array(
																		'id'=>'institution-form',
																		// Please note: When you enable ajax validation, make sure the corresponding
																		// controller action is handling ajax validation correctly.
																		// There is a call to performAjaxValidation() commented in generated controller code.
																		// See class documentation of CActiveForm for details on this.
																		'enableAjaxValidation'=>true,
																		)); ?>	
																	<?php echo $form->hiddenField($model,'coordinates',array('type'=>'hidden')); ?>
																	<div class="form-actions">
																		<div class="form-group">
																			<div class="row">
																				<div class="col-md-4">
																					<span class="required">*</span> <?php echo $form->labelEx($model,'name'); ?>
																					<?php echo $form->textField($model,'name',array('size'=>45,'maxlength'=>45,'class'=>'form-control input-width-large','placeholder'=>'Name')); ?>
																				</div>
																				<div class="col-md-4">
																					<span class="required">*</span> <?php echo $form->labelEx($model,'contactEmail'); ?>
																					<?php echo $form->textField($model,'contactEmail',array('size'=>45,'maxlength'=>45,'class'=>'form-control input-width-large','placeholder'=>'Email')); ?>
																				</div>
																				<div class="col-md-4">
																					<?php echo $form->labelEx($model,'contactPhone'); ?>
																					<?php echo $form->textField($model,'contactPhone',array('size'=>45,'maxlength'=>45,'class'=>'form-control input-width-large','data-mask'=>'999 999 999 999')); ?>
																				</div>
																			</div>
																		</div>
																		<div class="form-group">
																			<div class="row">
																				<div class="col-md-4">
																					<?php echo $form->labelEx($model,'contactName'); ?>
																					<?php echo $form->textField($model,'contactName',array('size'=>45,'maxlength'=>45,'class'=>'form-control input-width-large','placeholder'=>'Contact Name')); ?>
																				</div>
																				<div class="col-md-4">
																					<?php echo $form->labelEx($model,'fax'); ?>
																					<?php echo $form->textField($model,'fax',array('size'=>45,'maxlength'=>45,'class'=>'form-control input-width-large','data-mask'=>'999-999-9999')); ?>
																				</div>
																				<div class="col-md-4">
																					<?php echo $form->labelEx($model,'city'); ?>
																					<?php echo $form->textField($model,'city',array('size'=>45,'maxlength'=>45,'class'=>'form-control input-width-large','placeholder'=>'City')); ?>
																				</div>
																			</div>
																		</div>
																		<div class="form-group">
																			<div class="row">
																				<div class="col-md-4">
																					<span class="required">*</span> <?php echo $form->labelEx($model,'street'); ?>
																					<?php echo $form->textField($model,'street',array('size'=>45,'maxlength'=>45,'class'=>'form-control input-width-large','placeholder'=>'Street')); ?>
																				</div>	
																				<div class="col-md-4">
																					<span class="required">*</span> <?php echo $form->labelEx($model,'number'); ?>
																					<?php echo $form->textField($model,'number',array('size'=>45,'maxlength'=>45,'class'=>'form-control input-width-large','placeholder'=>'Number')); ?>	
																				</div>
																				<div class="col-md-4">
																					<?php echo $form->labelEx($model,'zip'); ?>
																					<?php echo $form->textField($model,'zip',array('size'=>45,'maxlength'=>45,'class'=>'form-control input-width-large','placeholder'=>'Postal Code')); ?>
																				</div>
																			</div>
																		</div>
																		<div class="form-group">
																			<div class="row">
																				
																					<div class="col-md-4">
																						<?php echo $form->labelEx($model,'rate'); ?>
																						<?php echo $form->textField($model,'rate',array('size'=>45,'maxlength'=>45,'class'=>'form-control input-width-large','placeholder'=>'Rate')); ?>
																					</div>
																				
																			</div>
																			<div class="row">
																				<div class="col-md-12">
																					<div id="panel" style="position: absolute;z-index:2;padding: 5px;text-aling:center;left:30%">
																						<input style="border-radius:20px;text-aling:center;"  class='input-width-large' id="address" type="textbox" value="México, MEX">
																					    <input style="border-radius:20px;margin-left:20px" class='btn' type="button" value="Search" onclick="codeAddress()">
																						<input style="border-radius:20px;margin-left:20px"  class='btn' onclick="deleteMarkers();" type=button value="Delete Marker">
																					</div>
																					<div id="gmap_marker" class="gmaps"></div>	
																				</div>
																			</div>
																			
																				<button type="submit" class="submit btn btn-primary pull-right" id="Guardaclinica">
																					Save <i class="icon-angle-right"></i>
																				</button>
																				<button type="button" class="submit btn btn-secundary pull-right" style="margin-right:30px" id="FinClini">
																					<i class="icon-angle-left"></i> Cancel
																				</button>
																		</div>
																	</div>	
																	<?php $this->endWidget(); ?>
                                                                </div>
                                                                <!-- /Basic Information -->

                                                                <!--=== Your Profile ===-->
                                                                <div class="tab-pane" id="tab2">
                                                                        <div class="form-actions">
																			<div class="row">
																				<div class="col-md-4">
																					<span class="required">*</span> <?php echo $form->labelEx($model,'Device: '); ?><br>
																					<?php $array = CHtml::listData(Media::model()->findAll('idInstitution is null'), 'idMedia','serialNumber', 'name');
																					echo $form->dropDownList($Dispositivo,'idMedia',$array,array('class'=>'select2-select-00 col-md-12 full-width-fix elect2-offscreen','prompt'=>'Select a Device...'));?>
																				</div>
																				<div class="col-md-4" style="padding-top:20px;">
																					<span class='btn btn-xs' id='addAction'>
																						<i class='icon-plus'></i> 
																					</span>
																				</div>	
																			</div>
																			<div class="row" style="padding-top:20px;">
																				<?php		
																					$modelid=$model->getPrimaryKey();
																					if ($modelid==null) {

																						$modelid=0;
																					}
																					$disp = Media::model()->findAll('idInstitution='.$modelid);
																					 if ($disp!=null) {
																							echo "<!--=== no-padding and table-tabletools ===-->
																								<div class='col-md-12'>
																									<div class='widget box'>
																										<div class='widget-header'>
																											<span class='btn btn-xs' id='eliminarAction'><i class='icon-trash'></i> </span>
																										</div>
																										<div class='widget-content no-padding'>
																											<table class='table table-striped table-bordered table-hover table-checkable datatable'>
																												<thead>
																													<tr>
																															<th></th>
																															<th>Alias</th>
																															<th>Type of Device</th>
																															<th>Serial Number</th>
																													</tr>
																												</thead>";
																												echo "<tbody>";
																															foreach ($disp as $key) {
																																	echo "<tr>";
																																		$tdispositivo= MediaType::model()->find('idMediaType='.$key->idMediaType);
																																		echo "<td class='checkbox-column'>
																																				<input type='checkbox' class='uniform' name='Music' id='".$key->idMedia."' onclick='$(this).val(this.checked ? elim[elim.length]=".$key->idMedia." : 0)'>
																																		  	</td>";	
																																		echo "<td>".$key->name."</td>";																	
																																		echo "<td>";
																																		if ($tdispositivo!="") { echo $tdispositivo->name;}
																																		echo "</td>";
																																		echo "<td>".$key->serialNumber."</td>";		
																															}
																												echo  "</tr>
																												</tbody>
																											</table>
																											
																										</div>
																									</div>
																								</div>
																							<!-- /no-padding and table-tabletools -->";
																						}
																				?>
																			</div>
																			<span class='submit btn btn-primary pull-right' > 
																				<a style="color:white;" href="#tab_1_3" data-toggle="tab">Next</a> 
																				<i class="icon-angle-right"></i>
																			</span>
																			<span class='submit btn btn-secundary pull-right' style="margin-right:30px">
																				<i class="icon-angle-left"></i>
																				<a style="color:white;" href="#tab_1_1" data-toggle="tab"> Previous</a>
																			</span>
																		</div>
                                                                </div>
                                                                <!-- /Your Profile -->

                                                                <!--=== Billing Setup ===-->
                                                                <div class="tab-pane" id="tab3">
                                                                	<div class="form-actions">
																		<?php $form=$this->beginWidget('CActiveForm', array(
																			'id'=>'employee-institution-form',
																			// Please note: When you enable ajax validation, make sure the corresponding
																			// controller action is handling ajax validation correctly.
																			// There is a call to performAjaxValidation() commented in generated controller code.
																			// See class documentation of CActiveForm for details on this.
																			'enableAjaxValidation'=>false,
																		)); ?>
																			<div class="widget">
																				<div class="widget-header">
																					<div class="toolbar no-padding">
																						<div class="btn-group">
																							<span class="btn btn-xs widget-collapse">
																								<i class="icon-plus"></i>
																							</span>
																						</div>
																					</div>
																				</div>
																				<div class="widget-content" id="divemple">
																					<div class="form-group">
																						<div class="row">
																							<div class="col-md-4">
																							<span class="required">*</span> <?php echo $form->labelEx($model,'name'); ?>
																								<?php echo $form->textField($EmpleadoClinica,'name',array('size'=>45,'maxlength'=>45,'class'=>'form-control input-width-large','placeholder'=>'Name')); ?>
																							</div>
																							<div class="col-md-4">
																								<span class="required">*</span> <?php echo $form->labelEx($model,'lastName'); ?>
																								<?php echo $form->textField($EmpleadoClinica,'lastName',array('size'=>45,'maxlength'=>45,'class'=>'form-control input-width-large','placeholder'=>'Last name')); ?>
																							</div>
																							<div class="col-md-4">
																								<?php echo $form->labelEx($model,"Mother's Maiden Name: "); ?>
																								<?php echo $form->textField($EmpleadoClinica,'maidenname',array('size'=>45,'maxlength'=>45,'class'=>'form-control input-width-large','placeholder'=>'Mothers Maiden Name')); ?>
																							</div>
																						</div>
																					</div>
																					<div class="form-group">
																						<div class="row">
																							<div class="col-md-4">
																								<?php echo $form->labelEx($model,'Middle Initial: '); ?>
																								<?php echo $form->textField($EmpleadoClinica,'middleName',array('size'=>45,'maxlength'=>45,'class'=>'form-control input-width-large','placeholder'=>'Middle Initial')); ?>
																							</div>
																							<div class="col-md-4">
																								<span class="required">*</span> <?php echo $form->labelEx($model,'Job: '); ?><br>
																								<?php  
																									 $array = CHtml::listData(Job::model()->findAll(), 'idJob', 'name');
																										echo $form->dropDownList($EmpleadoClinica,'idJob',$array,array('class'=>'fselect2-choice select2-default input-width-large','prompt'=>'Select a Job...'))
																								?>
																							</div>
																							<div class="col-md-4">
																								<?php echo $form->labelEx($model,'Specialty: '); ?><br>
																								<?php $array = CHtml::listData(Specialty::model()->findAll(),'idSpecialty','name');
																									echo $form->dropDownList($EmpleadoClinica,'idSpecialty',$array,array('class'=>'fselect2-choice select2-default input-width-large','prompt'=>'Select a Speciality...'));
																								?>
																								<?php echo $form->hiddenField($EmpleadoClinica,'idInstitution'); ?>
																							</div>

																						</div>
																					</div>
																					<div class="form-group">
																						<div class="row">
																							<button type="submit" class="submit btn btn-primary pull-right" id="guardaEmpleado">
																								Save <i class="icon-angle-right"></i>
																							</button>
																							<span class='submit btn btn-secundary pull-right' style="margin-right:30px" id="cancelaremp">
																								<i class="icon-angle-left"></i>
																								<a style="color:white;" href="" data-toggle="tab"> Cancel</a>
																							</span>
																						</div>
																					</div>

																				</div>
																			</div>
																		<?php $this->endWidget(); ?>
																			<div class="row" style="padding-top:20px;">
																				<?php
																					$modelid=$model->getPrimaryKey();
																					if ($modelid==null) {

																					$modelid=0;
																				}	
																					$disp = EmployeeInstitution::model()->findAll('idInstitution='.$modelid); 

																					if ($disp!=null) {
																						 	echo "<!--=== no-padding and table-tabletools ===-->
																								<div class='col-md-12' id='tableDisp'>
																									<div class='widget box'>
																										<div class='widget-header'>
																											<span class='btn btn-xs' id='eliminarEmpleado'><i class='icon-trash'></i> </span>
																										</div>
																										<div class='widget-content no-padding'>
																											<table class='table table-striped table-bordered table-hover table-checkable datatable'>
																												<thead>
																													<tr>
																															<th></th>
																															<th>Name</th>
																															<th>Job</th>
																															<th>Speciality</th>
																															<th></th>
																													</tr>
																												</thead>";
																												echo "<tbody> ";
																															foreach ($disp as $key) {
																																	echo " <tr>";
																																	$Puesto= Job::model()->find('idJob='.$key->idJob);
																																	$Especialidad="";
																																	if ($key->idSpecialty!=null) {
																																		$Especialidad= Specialty::model()->find('idSpecialty='.$key->idSpecialty);
																																	}
																																	
																																
																																		echo "<td class='checkbox-column'>
																																				<input type='checkbox' class='uniform' name='Empleado' id='".$key->idEmployeeInstitution."' onclick='$(this).val(this.checked ? elimEmp[elimEmp.length]=".$key->idEmployeeInstitution." : 0)'>
																																		  	</td>";	
																																		echo "<td>".$key->name." ".$key->lastName."</td>";																	
																																		echo "<td>";
																																				if ($Puesto!="") { echo $Puesto->name;}
																																		echo "</td>";
																																		echo "<td>";
																																				if ($Especialidad!="") { echo $Especialidad->name;}
																																		echo "</td>";
																																		echo "<td  id='idValor".$key->idEmployeeInstitution."'><a href='".Yii::app()->baseUrl."/EmpleadoClinica/update/id/".$key->idEmployeeInstitution."/idclinica/".$modelid."'><button class='btn btn-xs'><i class='icon-edit'></i></button></a></td>";
																																	
																																
																															}
																												echo  "</tr>
																												</tbody>
																											</table>
																											
																										</div>
																									</div>
																								</div>
																							<!-- /no-padding and table-tabletools -->";
																						}
																				?>
																			</div>
																			<button type="button" class="submit btn btn-primary pull-right" style="margin-right:30px" id="cancelarClini">
																					<i class="icon-angle-right"></i> Finish 
																			</button>
																			<span class='submit btn btn-secundary pull-right' style="margin-right:30px">
																				<i class="icon-angle-left"></i>
																				<a style="color:white;" href="#tab_1_2" data-toggle="tab"> Previous</a>
																			</span>
																	</div>        
                                                                </div>
                                                                <!-- /Billing Setup -->

                                                                <!--=== Confirmation ===-->
                                                                <div class="tab-pane" id="tab4">
                                                                        
                                                                </div>
                                                                <!-- /Confirmation -->
                                                        </div>
                                                        <!-- /Tab Content -->
                                                </div>

                                                <!--=== Form Actions ===-->
                                                <div class="form-actions fluid">
                                                        <div class="row">
                                                                <div class="col-md-12">
                                                                        <div class="col-md-offset-3 col-md-9">
                                                                                <a href="javascript:void(0);" class="btn button-previous">
                                                                                        <i class="icon-angle-left"></i> Back
                                                                                </a>
                                                                                <a href="javascript:void(0);" class="btn btn-primary button-next">
                                                                                        Continue <i class="icon-angle-right"></i>
                                                                                </a>
                                                                                <a href="javascript:void(0);" class="btn btn-success button-submit">
                                                                                        Submit <i class="icon-angle-right"></i>
                                                                                </a>
                                                                        </div>
                                                                </div>
                                                        </div>
                                                </div>
                                                <!-- /Form Actions -->
                                        </div>
                                </form>
                        </div>
                </div>
                <!-- /Form Wizard -->
        </div>
<!-- /Page Content -->
</div>