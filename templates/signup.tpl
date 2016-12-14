<!DOCTYPE html>
<html lang="en">
<head>
	<title>Sign Up</title>
	<link href="css/style.css" rel="stylesheet">
	<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.7.2/jquery.min.js"></script>
	<link href="lightbox2/css/lightbox.min.css" rel="stylesheet">
	<script src="js/jquery.validate.min.js"></script>
	<script src="js/giftreg.js"></script>

	<script language="JavaScript" type="text/javascript">
		$(document).ready(function() {
			$("#signupform").validate({
				highlight: validate_highlight,
				success: validate_success,
				rules: {
					username: {
						required: true,
						maxlength: 20
					},
					fullname: {
						required: true,
						maxlength: 50
					},
					email: {
						required: true,
						email: true,
						maxlength: 255
					}
				},
				messages: {
					username: {
						required: "A username is required.",
						maxlength: "Username must be 20 characters or less."
					},
					fullname: {
						required: "Your full name is required.",
						maxlength: "Your full name must be 50 characteres or less."
					},
					email: "A valid e-mail address is required."
				}
			});
		});
	</script>
</head>

<body>

	{include file='navbar.tpl' isadmin=$isadmin}


	{if isset($action) && $action == "signup" && !isset($error)}
		<div class="row">
			<div class="small-form">
				<div class="well">
					<p>Thank you for signing up.</p>
						{if $opt.newuser_requires_approval}
							<p>An administrator must approve your request.</p>
							<p>You will be notified once a decision is made.</p>
						{else}
							<p>You will shortly receive an e-mail with your initial password.</p>
						{/if}
					<p>Once you've received your password, click <a href="login.php">here</a> to login.</p>
				</div>
			</div>
		</div>
	{else}                        
		<div class="row">
			<div class="signup-form">
				<form name="signupform" id="signupform" method="post" action="signup.php" class="well form-horizontal">	
					<input type="hidden" name="action" value="signup">
					<fieldset>
						<div class="control-group">
							<label class="control-label" for="username">Username</label>
							<div class="controls">
								<input id="username" name="username" type="text" class="input-xlarge" value="{$username|escape:'htmlall'}" placeholder="Username">
							</div>
						</div>
						<div class="control-group">
							<label class="control-label" for="fullname">Full name</label>
							<div class="controls">
								<input id="fullname" name="fullname" type="text" class="input-xlarge" value="{$fullname|escape:'htmlall'}" placeholder="Full name">
							</div>
						</div>
						<div class="control-group">
							<label class="control-label" for="email">E-mail address</label>
							<div class="controls">
								<input id="email" name="email" type="text" class="input-xlarge" value="{$email|escape:'htmlall'}" placeholder="you@somewhere.com">
							</div>
						</div>
					</fieldset>
                    <div class="form-actions">
                        <button type="submit" class="btn btn-primary">Submit</button>
                        <button type="button" class="btn btn-primary" onClick="document.location.href='login.php';">Cancel</button>
                    </div>
                    
					<div class="alert alert-info">
						{if $opt.newuser_requires_approval}
							<p>An administrator must approve your request.</p>
							<p>You will be notified once a decision is made.</p>
						{else}
							<p>You will shortly receive an e-mail with your initial password.</p>
						{/if}
					</div>
					    
				</form>
				

				
			</div>
		</div>
		
	{/if}

    {include file='navfoot.tpl' isadmin=$isadmin}

</body>
</html>
