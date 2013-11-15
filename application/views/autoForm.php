<!DOCTYPE html>
<html>
	<head>
		<style>
			input {
				display: block;
			}
		</style>
		<script src="http://code.jquery.com/jquery-latest.js"></script>
		<script>













		</script>
	</head> 
<body>  
	<h1>Input Validation</h1>
<?php 
	echo validation_errors(); 
	
	echo form_open('auto/register');
	echo form_label('Username'); 
	echo form_error('username');
	echo form_input('username'                            );
	echo form_label('Password'); 
	echo form_error('password');
	echo form_password('password'                         );
	echo form_label('Password Confirmation'); 
	echo form_error('passconf');
	echo form_password('passconf'                                                                   );
	echo form_label('Phone');
	echo form_error('phone');
	echo form_input('phone'                                                                         );
	echo form_submit('submit', 'Register');
	echo form_close();
?>	
</body>

</html>

