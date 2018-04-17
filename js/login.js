$(document).ready(function() {
	
	$('#loginButton').click(function(e){

		var company_id = $('#company_id').val();	
		var fin_year = $('#fin_year').val();
		var user_id = $('#user_id').val();
		var user_pwd = $('#user_pwd').val();
		request =  $.ajax({
			type:'POST',
			url:'index.php',
			data: {"action" : "login_form","company_id": company_id , "fin_year": fin_year ,
							"user_id":user_id , "user_pwd":user_pwd, "login": 'login' },
			});
			request.done(function (response){
				//e.preventDefault();
				//console.log(response);
				/*  */
				//console.log($.parseJSON(response));
				var js = $.parseJSON(response);
				if(js.success)
				{
				 $.notify({
					message: js.msg
					},{
						type: 'success'
					});	 
				
					window.location = "index.php?action=homePage";
			
				}
				else
				{
					$.notify({
						message: js.errors
					},{
						type: 'danger'
					});
				}
				}) ; 
				request.fail(function ( jqXHR, textStatus, errorThrown)
				{
					$.notify({
							message: errorThrown
						},{
							type: 'danger'
						});
				}); 	
	
	});
	
});
