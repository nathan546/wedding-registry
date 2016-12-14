<!DOCTYPE html>
<html lang="en">
<head>
	<title>Update Profile</title>
	<link href="css/style.css" rel="stylesheet">
	<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.7.2/jquery.min.js"></script>
	<link href="lightbox2/css/lightbox.min.css" rel="stylesheet">
	<script src="js/jquery.validate.min.js"></script>
	<script src="js/giftreg.js"></script>

	<script language="JavaScript" type="text/javascript">
		$(document).ready(function() {
			$("#changepwdform").validate({
				highlight: validate_highlight,
				success: validate_success,
				rules: {
					newpwd: {
						required: true,
						maxlength: 50
					},
					confpwd: {
						required: true,
						maxlength: 50,
						equalTo: "#newpwd"
					}
				},
				messages: {
					newpwd: {
						required: "Password is required.",
						maxlength: "Password must be 50 characters or less."
					},
					confpwd: {
						required: "Confirmation is required.",
						maxlength: "Confirmation must be 50 characters or less.",
						equalTo: "Passwords don't match."
					}
				}
			});
			$("#profileform").validate({
				highlight: validate_highlight,
				success: validate_success,
				rules: {
					fullname: {
						required: true,
						maxlength: 50
					},
					email: {
						required: true,
						maxlength: 255,
						email: true
					}
				},
				messages: {
					fullname: {
						required: "Full name is required.",
						maxlength: "Full name must be 50 characters or less."
					},
					email: {
						required: "E-mail address is required.",
						maxlength: "E-mail address must be 255 characters or less.",
						email: "E-mail address must be a valid address."
					}
				}
			});
		});
	</script>
	</head>
	
<body>

	{include file='navbar.tpl' isadmin=$isadmin}

    <div class="row">
    <div class="small-form">
    
    <form name="changepwdform" id="changepwdform" action="profile.php" method="POST" class="well form-horizontal">
    	<input type="hidden" name="action" value="changepwd">
    	 <h3>Change Password</h3>
    	<fieldset>
    		<div class="control-group">
    			<label class="control-label" for="newpwd">New Pass</label>
    			<div class="controls">
    				<input type="password" id="newpwd" name="newpwd" class="input-xlarge">
    			</div>
    		</div>
    		<div class="control-group">
    			<label class="control-label" for="confpwd">Confirm Pass</label>
    			<div class="controls">
    				<input type="password" id="confpwd" name="confpwd" class="input-xlarge">
    			</div>
    		</div>
    	</fieldset>
		<div class="form-actions">
			<button type="submit" class="btn btn-primary">Change Password</button>
			<button type="button" class="btn btn-primary" onclick="document.location.href='index.php';">Cancel</button>
		</div>
    </form>
    			</div>
    		</div>
    		<div class="row">
    			<div class="small-form">
    <form name="profileform" id="profileform" action="profile.php" method="POST" class="well form-horizontal">
    	<input type="hidden" name="action" value="save">
    	<h3>Update Profile</h3>
    	<fieldset>
    		<div class="control-group">
    			<label class="control-label" for="fullname">Full name</label>
    			<div class="controls">
    				<input type="text" id="fullname" name="fullname" class="input-xlarge" value="{$fullname|escape:'htmlall'}">
    			</div>
    		</div>
    		<div class="control-group">
    			<label class="control-label" for="email">E-mail address</label>
    			<div class="controls">
    				<input type="text" id="email" name="email" class="input-xlarge" value="{$email|escape:'htmlall'}">
    			</div>
    		</div>
    	</fieldset>
    		<div class="form-actions">
    			<button type="submit" class="btn btn-primary">Update Profile</button>
    			<button type="button" class="btn btn-primary" onclick="document.location.href='index.php';">Cancel</button>
    		</div>
    </form>
    </div>
    </div>

    {include file='navfoot.tpl' isadmin=$isadmin}

</body>
</html>
