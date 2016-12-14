<?php /* Smarty version Smarty-3.1.12, created on 2016-02-29 13:58:40
         compiled from "./templates/login.tpl" */ ?>
<?php /*%%SmartyHeaderCode:1911165331568d542089e8c7-81684348%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'f5f63cf8bf5077cbe9e40e023158dd20352e878a' => 
    array (
      0 => './templates/login.tpl',
      1 => 1456754300,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1911165331568d542089e8c7-81684348',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.12',
  'unifunc' => 'content_568d54208e24e0_82976347',
  'variables' => 
  array (
    'isadmin' => 0,
    'username' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_568d54208e24e0_82976347')) {function content_568d54208e24e0_82976347($_smarty_tpl) {?><!DOCTYPE html>
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

	<?php echo $_smarty_tpl->getSubTemplate ('navbar.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array('isadmin'=>$_smarty_tpl->tpl_vars['isadmin']->value), 0);?>


	<div class="body-center">

            		<div class="row">
            			<div class="login">
            		<form name="loginform" id="loginform" method="post" action="login.php" class="well form-horizontal">
            			<fieldset>
            				<?php if (isset($_smarty_tpl->tpl_vars['username']->value)){?>
            					<div class="alert alert-error">Bad login.</div>
            				<?php }?>
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

    <?php echo $_smarty_tpl->getSubTemplate ('navfoot.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array('isadmin'=>$_smarty_tpl->tpl_vars['isadmin']->value), 0);?>


</body>

</html>


<?php }} ?>