<!DOCTYPE html>
<html lang="en">
<head>
	<title>Forgot Password</title>
	<link href="css/style.css" rel="stylesheet">
	<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.7.2/jquery.min.js"></script>
	<link href="lightbox2/css/lightbox.min.css" rel="stylesheet">
	<script src="js/jquery.validate.min.js"></script>
	<script src="js/giftreg.js"></script>

	<script language="JavaScript" type="text/javascript">
		$(document).ready(function() {
			$("#forgotform").validate({
				highlight: validate_highlight,
				success: validate_success,
				rules: {
					username: {
						required: true
					},
				},
				messages: {
					username: {
						required: "Username is required."
					}
				}
			});
		});
	</script>
</head>


<link href="css/style.css" rel="stylesheet">
<body>

    {include file='navbar.tpl' isadmin=$isadmin}

	{if isset($action) && $action == "forgot" && $error == ""}
		<div class="row">
			<div class="forgot-form">
				<div class="well">
					<p>Shortly, you will receive an e-mail with your new password.</p>
					<p>Once you've received your password, click <a href="login.php">here</a> to login.</p>
				</div>
			</div>
		</div>
	{else}
		<div class="row">
			<div class="small-form">
				<form name="forgotform" id="forgotform" method="post" action="forgot.php" class="well form-horizontal">	
					<input type="hidden" name="action" value="forgot">
					<fieldset>
						<div class="control-group {if isset($error)}warning{/if}">
							<label class="control-label" for="username">Username</label>
							<div class="controls">
								<input id="username" name="username" type="text" class="input-xlarge" value="{$username|escape:'htmlall'}">
							</p>
						</div>
					</fieldset>
                    <div class="form-actions">
                        <button type="submit" class="btn btn-primary">Submit</button>
                        <button type="button" class="btn btn-primary" onClick="document.location.href='login.php';">Cancel</button>
                    </div>
                    
					{if isset($error)}
						<span class="help-inline">{$error|escape:'htmlall'}</span>
					{/if}
					<p class="help-block">
						Supply your username and click Submit.<br /> 
						Your new password will be sent to the associated e-mail address.
					</p>                                            
                    
				</form>
				
			</div>
		</div>
	{/if}

    {include file='navfoot.tpl' isadmin=$isadmin}

</body>

</html>
