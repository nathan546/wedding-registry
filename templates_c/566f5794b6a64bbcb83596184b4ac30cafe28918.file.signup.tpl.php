<?php /* Smarty version Smarty-3.1.12, created on 2016-03-11 06:55:13
         compiled from "./templates/signup.tpl" */ ?>
<?php /*%%SmartyHeaderCode:102158930568d5546315800-43206896%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '566f5794b6a64bbcb83596184b4ac30cafe28918' => 
    array (
      0 => './templates/signup.tpl',
      1 => 1456754350,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '102158930568d5546315800-43206896',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.12',
  'unifunc' => 'content_568d554639d239_86184722',
  'variables' => 
  array (
    'isadmin' => 0,
    'action' => 0,
    'error' => 0,
    'opt' => 0,
    'username' => 0,
    'fullname' => 0,
    'email' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_568d554639d239_86184722')) {function content_568d554639d239_86184722($_smarty_tpl) {?><!DOCTYPE html>
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

	<?php echo $_smarty_tpl->getSubTemplate ('navbar.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array('isadmin'=>$_smarty_tpl->tpl_vars['isadmin']->value), 0);?>



	<?php if (isset($_smarty_tpl->tpl_vars['action']->value)&&$_smarty_tpl->tpl_vars['action']->value=="signup"&&!isset($_smarty_tpl->tpl_vars['error']->value)){?>
		<div class="row">
			<div class="small-form">
				<div class="well">
					<p>Thank you for signing up.</p>
						<?php if ($_smarty_tpl->tpl_vars['opt']->value['newuser_requires_approval']){?>
							<p>An administrator must approve your request.</p>
							<p>You will be notified once a decision is made.</p>
						<?php }else{ ?>
							<p>You will shortly receive an e-mail with your initial password.</p>
						<?php }?>
					<p>Once you've received your password, click <a href="login.php">here</a> to login.</p>
				</div>
			</div>
		</div>
	<?php }else{ ?>                        
		<div class="row">
			<div class="signup-form">
				<form name="signupform" id="signupform" method="post" action="signup.php" class="well form-horizontal">	
					<input type="hidden" name="action" value="signup">
					<fieldset>
						<div class="control-group">
							<label class="control-label" for="username">Username</label>
							<div class="controls">
								<input id="username" name="username" type="text" class="input-xlarge" value="<?php echo mb_convert_encoding(htmlspecialchars($_smarty_tpl->tpl_vars['username']->value, ENT_QUOTES, 'UTF-8', true), "HTML-ENTITIES", 'UTF-8');?>
" placeholder="Username">
							</div>
						</div>
						<div class="control-group">
							<label class="control-label" for="fullname">Full name</label>
							<div class="controls">
								<input id="fullname" name="fullname" type="text" class="input-xlarge" value="<?php echo mb_convert_encoding(htmlspecialchars($_smarty_tpl->tpl_vars['fullname']->value, ENT_QUOTES, 'UTF-8', true), "HTML-ENTITIES", 'UTF-8');?>
" placeholder="Full name">
							</div>
						</div>
						<div class="control-group">
							<label class="control-label" for="email">E-mail address</label>
							<div class="controls">
								<input id="email" name="email" type="text" class="input-xlarge" value="<?php echo mb_convert_encoding(htmlspecialchars($_smarty_tpl->tpl_vars['email']->value, ENT_QUOTES, 'UTF-8', true), "HTML-ENTITIES", 'UTF-8');?>
" placeholder="you@somewhere.com">
							</div>
						</div>
					</fieldset>
                    <div class="form-actions">
                        <button type="submit" class="btn btn-primary">Submit</button>
                        <button type="button" class="btn btn-primary" onClick="document.location.href='login.php';">Cancel</button>
                    </div>
                    
					<div class="alert alert-info">
						<?php if ($_smarty_tpl->tpl_vars['opt']->value['newuser_requires_approval']){?>
							<p>An administrator must approve your request.</p>
							<p>You will be notified once a decision is made.</p>
						<?php }else{ ?>
							<p>You will shortly receive an e-mail with your initial password.</p>
						<?php }?>
					</div>
					    
				</form>
				

				
			</div>
		</div>
		
	<?php }?>

    <?php echo $_smarty_tpl->getSubTemplate ('navfoot.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array('isadmin'=>$_smarty_tpl->tpl_vars['isadmin']->value), 0);?>


</body>
</html>
<?php }} ?>