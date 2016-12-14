<!DOCTYPE html>
<html lang="en">
<head>
	<title>Login</title>
	<link href="css/style.css" rel="stylesheet">
	<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.7.2/jquery.min.js"></script>
	<link href="lightbox2/css/lightbox.min.css" rel="stylesheet">
	<script src="js/jquery.validate.min.js"></script>
	<script src="js/giftreg.js"></script>
		
	<script language="JavaScript" type="text/javascript">
		$(document).ready(function() {
			$("#loginform").validate({
				highlight: validate_highlight,
				success: validate_success,
				rules: {
					username: {
						required: true
					},
					password: {
						required: true
					}
				},
				messages: {
					username: {
						required: "Username is required."
					},
					password: {
						required: "Password is required."
					}
				}
			});
		});
	</script>
	
</head>

<body>

	{include file='navbar.tpl' isadmin=$isadmin}

	<div class="body-center">

            		<div class="row">
            			<div class="login">
            		<form name="loginform" id="loginform" method="post" action="login.php" class="well form-horizontal">
            			<fieldset>
            				{if isset($username)}
            					<div class="alert alert-error">Bad login.</div>
            				{/if}
            				<div class="control-group">
            					<label class="control-label" for="username">Username</label>
            					<div class="controls">
            						<input id="username" name="username" type="text" class="input-xlarge" placeholder="username" />
            					</div>
            				</div>
            				<div class="control-group">
            					<label class="control-label" for="password">Password</label>
            					<div class="controls">
            						<input id="password" name="password" type="password" class="input-xlarge" placeholder="password" />
            					</div>
            				</div>
            			</fieldset>
            			<div class="form-actions">
            					<button type="submit" class="btn btn-primary">Login</button>
            			</div>
            		</form>
            			</div>
            		</div>
            		<div class="row">
            			<div class="signup">
            				<div class="well">
            					<a href="signup.php">Create account</a>
            				</div>
            			</div>
            			<div class="forgot">
            				<div class="well">
            					<a href="forgot.php">Forgot password</a>
            				</div>
            			</div>
            		</div>
            	</div>
	</div>

    {include file='navfoot.tpl' isadmin=$isadmin}

</body>

</html>


