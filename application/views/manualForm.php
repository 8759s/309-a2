
<!DOCTYPE html>

<html>
	<head>
		<style>
			input {
				display: block;
			}
		</style>
	</head> 
<body>  
	<h1>Input Validation</h1>
<?php 




	echo form_open('manual/register');
	echo form_label('Username'); 
	echo form_input('username');
	echo form_label('Password'); 
	echo form_password('password');
	echo form_label('Password Confirmation'); 
	echo form_password('passconf');
	echo form_label('Phone');
	echo form_input('phone');
	echo form_submit('submit', 'Register');
	echo form_close();
?>	
</body>

</html>

