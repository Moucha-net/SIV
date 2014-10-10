$('#guardar').click(function(){
	
			if (document.getElementById("Language_name").value=="" ){
				var error=notyBasico('error','You must enter the required fields to add Language.','center');   
				document.getElementById('language-form').onsubmit = function() { return false; } 
				return;
			} 
			else{
				var success=notyBasico('success','Added Language has successfully.','center');  
				document.getElementById('language-form').onsubmit = function() { return true; } 
			}
			
		});
	$('#cancelar').click(function(){
		/*var url = "../../../lenguaje";    
		$(location).attr('href',url);*/
		window.history.go(-1);
	});