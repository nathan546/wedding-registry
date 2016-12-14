<?php /* Smarty version Smarty-3.1.12, created on 2016-01-06 18:34:50
         compiled from "./templates/message.tpl" */ ?>
<?php /*%%SmartyHeaderCode:1622749241568d5e4a7002f9-92838088%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '307e94de9d9422c0f17f6de190a1290c1d763e58' => 
    array (
      0 => './templates/message.tpl',
      1 => 1452101145,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1622749241568d5e4a7002f9-92838088',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'isadmin' => 0,
    'rcount' => 0,
    'recipients' => 0,
    'row' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.12',
  'unifunc' => 'content_568d5e4a731c45_27642486',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_568d5e4a731c45_27642486')) {function content_568d5e4a731c45_27642486($_smarty_tpl) {?>

<!DOCTYPE html>
<html lang="en">
<head>
	<title>Gift Registry - Compose a Message</title>
	<link href="bootstrap/css/bootstrap.min.css" rel="stylesheet">
	<link href="bootstrap/css/bootstrap-responsive.css" rel="stylesheet">
</head>
<body>
	<?php echo $_smarty_tpl->getSubTemplate ('navbar.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array('isadmin'=>$_smarty_tpl->tpl_vars['isadmin']->value), 0);?>

	
	<div class="container" style="padding-top: 60px;">
		<div class="row">
			<div class="span12">
				<form name="message" method="get" action="message.php" class="well form-horizontal">
					<input type="hidden" name="action" value="send">
					<fieldset>
						<legend>Send a message</legend>
						<div class="control-group">
							<label class="control-label" for="recipients[]">Recipients</label>
							<div class="controls">
								<select name="recipients[]" size="<?php echo $_smarty_tpl->tpl_vars['rcount']->value;?>
" MULTIPLE class="input-xlarge">
									<?php  $_smarty_tpl->tpl_vars['row'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['row']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['recipients']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['row']->key => $_smarty_tpl->tpl_vars['row']->value){
$_smarty_tpl->tpl_vars['row']->_loop = true;
?>
										<option value="<?php echo $_smarty_tpl->tpl_vars['row']->value['userid'];?>
"><?php echo mb_convert_encoding(htmlspecialchars($_smarty_tpl->tpl_vars['row']->value['fullname'], ENT_QUOTES, 'UTF-8', true), "HTML-ENTITIES", 'UTF-8');?>
</option>
									<?php } ?>
								</select>
					 			<p class="help-block">(Hold CTRL while clicking to select multiple names.)</p>
							</div>
						</div>
						<div class="control-group">
							<label class="control-label" for="msg">Message</label>
							<div class="controls">
								<textarea id="msg" name="msg" rows="5" cols="40" class="input-xlarge"></textarea>
							</div>
						</div>
						<div class="form-actions">
							<button type="submit" class="btn btn-primary">Send Message</button>
							<button type="button" class="btn" onClick="document.location.href='index.php';">Cancel</button>
						</div>
					</fieldset>
				</form>
			</div>
		</div>
	</div>
	<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.7.2/jquery.min.js"></script>
	<script src="bootstrap/js/bootstrap.min.js"></script>
</body>
</html>
<?php }} ?>