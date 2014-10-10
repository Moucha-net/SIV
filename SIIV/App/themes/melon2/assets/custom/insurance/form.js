$('#guardar').click(function(){
	
			if (document.getElementById("Insurance_name").value=="" ){
				var error=notyBasico('error','You must enter the required fields to add the Insurance.','center');   
				document.getElementById('insurance-form').onsubmit = function() { return false; } 
				return;
			} 
			if (document.getElementById("Insurance_email").value=="" ){
				var error=notyBasico('error','You must enter the required fields to add the Insurance.','center');   
				document.getElementById('insurance-form').onsubmit = function() { return false; } 
				return;
			} 
			if (document.getElementById("Insurance_country").value=="" ){
				var error=notyBasico('error','You must enter the required fields to add the Insurance.','center');   
				document.getElementById('insurance-form').onsubmit = function() { return false; } 
				return;
			} 
			if (document.getElementById("Insurance_street").value=="" ){
				var error=notyBasico('error','You must enter the required fields to add the Insurance.','center');   
				document.getElementById('insurance-form').onsubmit = function() { return false; } 
				return;
			} 
			if (document.getElementById("Insurance_number").value=="" ){
				var error=notyBasico('error','You must enter the required fields to add the Insurance.','center');   
				document.getElementById('insurance-form').onsubmit = function() { return false; } 
				return;
			} 
				var success=notyBasico('success','Added Insurance has successfully.','center');  
				document.getElementById('insurance-form').onsubmit = function() { return true; } 
			
			
		});
	$('#cancelar').click(function(){
		/*var url = "../../../aseguradora";    
		$(location).attr('href',url);*/
		window.history.go(-1);
	});