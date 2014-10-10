var geocoder;
var map;
var markers = [];
function initialize() {
  geocoder = new google.maps.Geocoder();
  	  var latlng = new google.maps.LatLng(19.435398, -99.130212);
	  var mapOptions = {
			    zoom: 10,
			    center: latlng,

				    mapTypeControl: true,
				    mapTypeControlOptions: {
				        style: google.maps.MapTypeControlStyle.HORIZONTAL_BAR,
				        position: google.maps.ControlPosition.BOTTOM_CENTER
				    },
				    panControl: true,
				    panControlOptions: {
				        position: google.maps.ControlPosition.TOP_RIGHT
				    },
				    zoomControl: true,
				    zoomControlOptions: {
				        style: google.maps.ZoomControlStyle.LARGE,
				        position: google.maps.ControlPosition.LEFT_CENTER
				    },
				    scaleControl: true,
				    streetViewControl: true,
				    streetViewControlOptions: {
				        position: google.maps.ControlPosition.LEFT_TOP
				    }
	  	}





	 map = new google.maps.Map(document.getElementById('gmap_marker'), mapOptions);
	 if (document.getElementById('Institution_coordinates').value!="") 
	 	{
	 	 	var bits = document.getElementById('Institution_coordinates').value.split(/,\s*/);
	 	 	var  positioninicial=new google.maps.LatLng(parseFloat(bits[0]),parseFloat(bits[1]));
	 	 	addMarker(positioninicial);
	 	}
	    google.maps.event.addListener(map, 'click', function(event) {
	    	
		    addMarker(event.latLng);
	 	 });
}

function codeAddress() {
  var address = document.getElementById('address').value;
  geocoder.geocode( { 'address': address}, function(results, status) {
    if (status == google.maps.GeocoderStatus.OK) {
	      map.setCenter(results[0].geometry.location);
	      map.setZoom(15);
	      
    } else {
      alert('Geocode was not successful for the following reason: ' + status);
    }

  });
}

// Add a marker to the map.
function addMarker(location) {
	deleteMarkers();
   marker = new google.maps.Marker({
    position: location,
    map: map,
    
    animation: google.maps.Animation.DROP,
  });
   var coorde=marker.getPosition()
    document.getElementById('Institution_coordinates').value=coorde.k+','+coorde.B;
   markers.push(marker);
}

function deleteMarkers() {
  setAllMap(null);
  markers = [];
  document.getElementById('Institution_coordinates').value='';
}

function setAllMap(map) {
  for (var i = 0; i < markers.length; i++) {
    markers[i].setMap(map);
  }
}

google.maps.event.addDomListener(window, 'load', initialize);

var elim=[];
					var elimEmp=[];
					var clinid="<?php echo $model->getPrimaryKey();?>";

					$('#cancelarClini').click(function(){
						window.history.go(-1);
					});
					$('#Guardaclinica').click(function(){
							
						if (document.getElementById("Clinica_nombreClinica").value=="" ){
							var error=notyBasico('error','You must enter the required fields to add the Institution.','center');   
							document.getElementById('clinica-form').onsubmit = function() { return false; } 
							return;
						} 
						if (document.getElementById("Clinica_correoContacto").value=="" ){
							var error=notyBasico('error','You must enter the required fields to add the Institution.','center');   
							document.getElementById('clinica-form').onsubmit = function() { return false; } 
							return;
						} if (document.getElementById("Clinica_calle").value=="" ){
							var error=notyBasico('error','You must enter the required fields to add the Institution.','center');   
							document.getElementById('clinica-form').onsubmit = function() { return false; } 
							return;
						} if (document.getElementById("Clinica_numero").value=="" ){
							var error=notyBasico('error','You must enter the required fields to add the Institution.','center');   
							document.getElementById('clinica-form').onsubmit = function() { return false; } 
							return;
						} 
						var exito=notyBasico('success','Added Clinic has successfully.','center');
						document.getElementById('clinica-form').onsubmit = function() { return true; } 												
					});

				
					$('#addAction').click(function(){
						if (document.getElementById("Dispositivo_iddispositivo").value=="" ){
								var error=notyBasico('error','You must select a device.','center');   
								document.getElementById('clinica-form').onsubmit = function() { return false; } 
								return;
						}
						else{
								var id=document.getElementById('Dispositivo_iddispositivo').value;
								var ruta="<?php echo Yii::app()->baseUrl.'/dispositivo/UpdateClinica/id/"+id+"/idClinica/"+clinid+"';?>";
								var jsondata="{"+document.getElementById('Dispositivo_iddispositivo').value+ ","+clinid+"}";
					   				jQuery.ajax({
											type: 'POST',
											url:ruta,
											data:jsondata,
											success: function () {
												var exito=notyBasico('success','Added the device has successfully.','center');	
												setTimeout(function() { $(location).attr('href',"<?php echo Yii::app()->baseUrl.'/clinica/update/id/"+clinid+"';?>"); }, 5000);           													
								  			},
										    error: function(result) {
									            var error=notyBasico('error','Error has occurred, Please try again.','center');
									        }
										});
									}
					});
	
					$('#eliminarAction').click(function(){
								
								if (elim!=null) {
					        		for (var i=0; i <elim.length ; i++) { 
					     				var iddddd=elim[i];
					     				if (!isNaN(iddddd)) {
												var ruta="<?php echo Yii::app()->baseUrl.'/dispositivo/UpdateClinica/id/"+iddddd+"/idClinica/';?>";
												var jsondata="{"+iddddd+",}";
								   				jQuery.ajax({
														type: 'POST',
														url:ruta,
														data:jsondata,
														success: function () {
															var exito=notyBasico('success','Removed the device successfully.','center');
															setTimeout(function() { $(location).attr('href',"<?php echo Yii::app()->baseUrl.'/clinica/update/id/"+clinid+"';?>"); }, 5000);
															
											  			},
													    error: function(result) {
												            var error=notyBasico('error','Error has occurred, Please try again.','center');
												        }
													});
					     				}	
					     			}
								}
								else{
									var warning=notyBasico('warning','You have not selected any record.','center');
								}
								elim=null;
								
							});
						
					$('#guardaEmpleado').click(function(){
						document.getElementById("EmpleadoClinica_idClinica").value= '<?php echo $model->getPrimaryKey();?>';
								if (document.getElementById("EmpleadoClinica_name").value=="" ){
									var error=notyBasico('error','You must enter the required fields to add the Employee.','center');   
									document.getElementById('empleado-clinica-form').onsubmit = function() { return false; } 
									return;
								}
								if (document.getElementById("EmpleadoClinica_lastName").value=="" ){
									var error=notyBasico('error','You must enter the required fields to add the Employee.','center');   
									document.getElementById('empleado-clinica-form').onsubmit = function() { return false; } 
									return;
								}
								if (document.getElementById("EmpleadoClinica_idPuesto").value=="" ){
									var error=notyBasico('error','You must enter the required fields to add the Employee.','center');   
									document.getElementById('empleado-clinica-form').onsubmit = function() { return false; } 
									return;
								}
								var exito=notyBasico('success','Added Employee has successfully','center');

					});
					$('#eliminarEmpleado').click(function(){
								
								if (elimEmp!=null) {
					        		for (var i=0; i <elimEmp.length ; i++) { 
					     				var iddddd=elimEmp[i];
					     				
					     				if (!isNaN(iddddd)) {
					     					var ruta="<?php echo Yii::app()->baseUrl.'/EmpleadoClinica/delete/id/"+iddddd+"';?>";
											var jsondata="{"+iddddd+"}";
					     					$.ajax({
												type: 'POST',
												url: ruta,
												data: jsondata,
												success: function (a) {
													var exito=notyBasico('success','Removed the Employee successfully','center'); 
													setTimeout(function() { $(location).attr('href',"<?php echo Yii::app()->baseUrl.'/clinica/update/id/"+clinid+"';?>"); }, 5000);
													
									  			},
									            error: function(result) {
									               var error=notyBasico('error','Error has occurred, Please try again','center');
									            }
											});
					     				}	
					     			}
								}
								else{
									var warning=notyBasico('warning','You have not selected any record.','center');
								}
								elimEmp=null;
								
					});
					$('#cancelaremp').click(function(){
							document.getElementById('EmpleadoClinica_name').value="";
							document.getElementById('EmpleadoClinica_lastName').value="";
							document.getElementById('EmpleadoClinica_middleName').value="";
							document.getElementById('EmpleadoClinica_maidenname').value="";
							document.getElementById('EmpleadoClinica_idPuesto').value="";
							document.getElementById('EmpleadoClinica_idEspecialidad').value="";
						});
					$('#FinClini').click(function(){
							window.history.go(-1);
						});