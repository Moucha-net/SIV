$('#guardar').click(function(){
	
			if (document.getElementById("Media_idMediaType").value=="" ){
				var error=notyBasico('error','Debe ingresar los campos obligatorios para poder agregar el dispositivo.','center');   
				document.getElementById('media-form').onsubmit = function() { return false; } 
				return;
			} 
			if (document.getElementById("Media_name").value=="" ){
				var error=notyBasico('error','Debe ingresar los campos obligatorios para poder agregar el dispositivo.','center');   
				document.getElementById('media-form').onsubmit = function() { return false; } 
				return;
			} if (document.getElementById("Media_serialNumber").value=="" ){
				var error=notyBasico('error','Debe ingresar los campos obligatorios para poder agregar el dispositivo.','center');   
				document.getElementById('media-form').onsubmit = function() { return false; } 
				return;
			} if (document.getElementById("Media_account").value=="" ){
				var error=notyBasico('error','Debe ingresar los campos obligatorios para poder agregar el dispositivo.','center');   
				document.getElementById('media-form').onsubmit = function() { return false; } 
				return;
			} 
				var success=notyBasico('success','Se ha guardado el  dispositivo exitosamente.','center');  
				document.getElementById('media-form').onsubmit = function() { return true; } 
					
		});
	
	$('#cancelar').click(function(){
		/*var url = "../dispositivo";    
		$(location).attr('href',url);*/
		window.history.go(-1);
	});