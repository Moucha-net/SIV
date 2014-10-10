$('#guardar').click(function(){
	
			if (document.getElementById("Job_name").value=="" ){
				var error=notyBasico('error','You must enter the required fields to add the Job.','center');   
				document.getElementById('job-form').onsubmit = function() { return false; } 
				return;
			} 
			else{
				var success=notyBasico('success','Added Job has successfully.','center');  
				document.getElementById('job-form').onsubmit = function() { return true; } 
			}
			
		});

	$('#cancelar').click(function(){
		/*var url = "../../../puesto";    
		$(location).attr('href',url);*/
		window.history.go(-1);
	});