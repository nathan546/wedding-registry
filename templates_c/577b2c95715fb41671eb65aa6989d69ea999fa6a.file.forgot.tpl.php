<?php /* Smarty version Smarty-3.1.12, created on 2016-03-11 06:55:14
         compiled from "./templates/forgot.tpl" */ ?>
<?php /*%%SmartyHeaderCode:251960658568d5542cf07e9-94572954%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '577b2c95715fb41671eb65aa6989d69ea999fa6a' => 
    array (
      0 => './templates/forgot.tpl',
      1 => 1456754278,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '251960658568d5542cf07e9-94572954',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.12',
  'unifunc' => 'content_568d5542d30308_03776109',
  'variables' => 
  array (
    'isadmin' => 0,
    'action' => 0,
    'error' => 0,
    'username' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_568d5542d30308_03776109')) {function content_568d5542d30308_03776109($_smarty_tpl) {?><!DOCTYPE html>
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

    <?php echo $_smarty_tpl->getSubTemplate ('navbar.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array('isadmin'=>$_smarty_tpl->tpl_vars['isadmin']->value), 0);?>


	<?php if (isset($_smarty_tpl->tpl_vars['action']->value)&&$_smarty_tpl->tpl_vars['action']->value=="forgot"&&$_smarty_tpl->tpl_vars['error']->value==''){?>
		<div class="row">
			<div class="forgot-form">
				<div class="well">
					<p>Shortly, you will receive an e-mail with your new password.</p>
					<p>Once you've received your password, click <a href="login.php">here</a> to login.</p>
				</div>
			</div>
		</div>
	<?php }else{ ?>
		<div class="row">
			<div class="small-form">
				<form name="forgotform" id="forgotform" method="post" action="forgot.php" class="well form-horizontal">	
					<input type="hidden" name="action" value="forgot">
					<fieldset>
						<div class="control-group <?php if (isset($_smarty_tpl->tpl_vars['error']->value)){?>warning<?php }?>">
							<label class="control-label" for="username">Username</label>
							<div class="controls">
								<input id="username" name="username" type="text" class="input-xlarge" value="<?php echo mb_convert_encoding(htmlspecialchars($_smarty_tpl->tpl_vars['username']->value, ENT_QUOTES, 'UTF-8', true), "HTML-ENTITIES", 'UTF-8');?>
">
							</p>
						</div>
					</fieldset>
                    <div class="form-actions">
                        <button type="submit" class="btn btn-primary">Submit</button>
                        <button type="button" class="btn btn-primary" onClick="document.location.href='login.php';">Cancel</button>
                    </div>
                    
					<?php if (isset($_smarty_tpl->tpl_vars['error']->value)){?>
						<span class="help-inline"><?php echo mb_convert_encoding(htmlspecialchars($_smarty_tpl->tpl_vars['error']->value, ENT_QUOTES, 'UTF-8', true), "HTML-ENTITIES", 'UTF-8');?>
</span>
					<?php }?>
					<p class="help-block">
						Supply your username and click Submit.<br /> 
						Your new password will be sent to the associated e-mail address.
					</p>                                            
                    
				</form>
				
			</div>
		</div>
	<?php }?>

    <?php echo $_smarty_tpl->getSubTemplate ('navfoot.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array('isadmin'=>$_smarty_tpl->tpl_vars['isadmin']->value), 0);?>


</body>

</html>
<?php }} ?>