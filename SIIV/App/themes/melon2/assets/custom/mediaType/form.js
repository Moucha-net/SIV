$('#guardar').click(function(){
	
			if (document.getElementById("MediaType_name").value=="" ){
				var error=notyBasico('error','You must enter the required fields to add the Type of Device.','center');   
				document.getElementById('media-type-form').onsubmit = function() { return false; } 
				return;
			} 
			if (document.getElementById("MediaType_brand").value=="" ){
				var error=notyBasico('error','You must enter the required fields to add the Type of Device.','center');   
				document.getElementById('media-type-form').onsubmit = function() { return false; } 
				return;
			} if (document.getElementById("MediaType_model").value=="" ){
				var error=notyBasico('error','You must enter the required fields to add the Type of Device.','center');   
				document.getElementById('media-type-form').onsubmit = function() { return false; } 
				return;
			} 
				var success=notyBasico('success','Added Type of Device has successfully.','center');  
				document.getElementById('media-type-form').onsubmit = function() { return true; } 
					
		});

	$('#cancelar').click(function(){
		/*var url = "../tipoDispositivo";    
		$(location).attr('href',url);*/
		window.history.go(-1);
	});