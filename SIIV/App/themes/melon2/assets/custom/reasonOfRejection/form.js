	$('#guardar').click(function(){
	
			if (document.getElementById("ReasonOfRejection_name").value=="" ){
				var error=notyBasico('error','Debe ingresar los campos obligatorios para poder agregar la razón.','center');   
				document.getElementById('reason-of-rejection-form').onsubmit = function() { return false; } 
				return;
			} 
			if (document.getElementById("ReasonOfRejection_idRejectionType").value=="" ){
				var error=notyBasico('error','Debe ingresar los campos obligatorios para poder agregar la razón.','center');   
				document.getElementById('reason-of-rejection-form').onsubmit = function() { return false; } 
				return;
			} 
				var success=notyBasico('success','Se ha guardado la razón de rechazo exitosamente.','center');  
				document.getElementById('reason-of-rejection-form').onsubmit = function() { return true; } 
					
		});
	$('#cancelar').click(function(){
		/*var url = "../../../razonRechazoCita";    
		$(location).attr('href',url);*/
		window.history.go(-1);
	});