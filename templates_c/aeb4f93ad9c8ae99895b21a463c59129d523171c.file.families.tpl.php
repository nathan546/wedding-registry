<?php /* Smarty version Smarty-3.1.12, created on 2016-01-06 17:57:19
         compiled from "./templates/families.tpl" */ ?>
<?php /*%%SmartyHeaderCode:1756749841568d557f107127-71725851%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'aeb4f93ad9c8ae99895b21a463c59129d523171c' => 
    array (
      0 => './templates/families.tpl',
      1 => 1452101145,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1756749841568d557f107127-71725851',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'isadmin' => 0,
    'message' => 0,
    'opt' => 0,
    'families' => 0,
    'row' => 0,
    'action' => 0,
    'haserror' => 0,
    'familyid' => 0,
    'familyname' => 0,
    'familyname_error' => 0,
    'nonmembers' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.12',
  'unifunc' => 'content_568d557f1d8288_68230685',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_568d557f1d8288_68230685')) {function content_568d557f1d8288_68230685($_smarty_tpl) {?>

<!DOCTYPE html>
<html lang="en">
<head>
	<title>Gift Registry - Manage Families</title>
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link href="bootstrap/css/bootstrap.min.css" rel="stylesheet">
	<link href="bootstrap/css/bootstrap-responsive.css" rel="stylesheet">
	<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.7.2/jquery.min.js"></script>
	<script src="bootstrap/js/bootstrap.min.js"></script>
	<script src="js/jquery.validate.min.js"></script>
	<script src="js/giftreg.js"></script>

	<script language="JavaScript" type="text/javascript">
		$(document).ready(function() {
			$("#theform").validate({
				highlight: validate_highlight,
				success: validate_success,
				rules: {
					familyname: {
						required: true,
						maxlength: 255
					}
				},
				messages: {
					familyname: {
						required: "Family name is required.",
						maxlength: "Family name must be 255 characters or less."
					}
				}
			});
		});
	</script>
</head>
<body>
	<?php echo $_smarty_tpl->getSubTemplate ('navbar.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array('isadmin'=>$_smarty_tpl->tpl_vars['isadmin']->value), 0);?>


	<div class="container" style="padding-top: 60px;">

		<?php if (isset($_smarty_tpl->tpl_vars['message']->value)){?>
			<div class="row">
				<div class="span12">
					<div class="alert alert-block"><?php echo mb_convert_encoding(htmlspecialchars($_smarty_tpl->tpl_vars['message']->value, ENT_QUOTES, 'UTF-8', true), "HTML-ENTITIES", 'UTF-8');?>
</div>
				</div>
			</div>
		<?php }?>

		<?php if ($_smarty_tpl->tpl_vars['opt']->value['show_helptext']){?>
			<div class="row">
				<div class="span12">
					<div class="alert alert-info">
						Here you can specify families that will use your gift registry.  Members may belong to one or more family circles.
						After adding a new family, click Edit to add members to it.
					</div>
				</div>
			</div>
		<?php }?>

		<div class="row">
			<div class="span12">
				<div class="well">
					<table class="table table-bordered table-striped">
						<thead>
							<tr>
								<th>Family</th>
								<th># Members</th>
								<th>&nbsp;</th>
							</tr>
						</thead>
						<tbody>
							<?php  $_smarty_tpl->tpl_vars['row'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['row']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['families']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['row']->key => $_smarty_tpl->tpl_vars['row']->value){
$_smarty_tpl->tpl_vars['row']->_loop = true;
?>
								<tr>
									<td><?php echo mb_convert_encoding(htmlspecialchars($_smarty_tpl->tpl_vars['row']->value['familyname'], ENT_QUOTES, 'UTF-8', true), "HTML-ENTITIES", 'UTF-8');?>
</td>
									<td><?php echo $_smarty_tpl->tpl_vars['row']->value['members'];?>
</td>
									<td>
										<a href="families.php?action=edit&familyid=<?php echo $_smarty_tpl->tpl_vars['row']->value['familyid'];?>
#familyform"><img src="images/pencil.png" alt="Edit Family" title="Edit Family" border="0" /></a>
										<a href="families.php?action=delete&familyid=<?php echo $_smarty_tpl->tpl_vars['row']->value['familyid'];?>
"><img src="images/bin.png" alt="Delete Family" title="Delete Family" border="0" /></a>
									</td>
								</tr>
							<?php } ?>
						</tbody>
					</table>
					<h5><a href="families.php">Add a new family</a></h5>
				</div>
			</div>
		</div>

		<a name="familyform">
		<div class="row">
			<div class="span6">
				<form name="theform" id="theform" method="get" action="families.php" class="well form-horizontal">	
					<?php if ($_smarty_tpl->tpl_vars['action']->value=="edit"||(isset($_smarty_tpl->tpl_vars['haserror']->value)&&$_smarty_tpl->tpl_vars['action']->value=="update")){?>
						<input type="hidden" name="familyid" value="<?php echo $_smarty_tpl->tpl_vars['familyid']->value;?>
">
						<input type="hidden" name="action" value="update">
					<?php }elseif($_smarty_tpl->tpl_vars['action']->value==''||(isset($_smarty_tpl->tpl_vars['haserror']->value)&&$_smarty_tpl->tpl_vars['action']->value=="insert")){?>
						<input type="hidden" name="action" value="insert">
					<?php }?>
					<fieldset>
						<legend><?php if ($_smarty_tpl->tpl_vars['action']->value=="edit"||$_smarty_tpl->tpl_vars['action']->value=="update"){?>Edit family '<?php echo mb_convert_encoding(htmlspecialchars($_smarty_tpl->tpl_vars['familyname']->value, ENT_QUOTES, 'UTF-8', true), "HTML-ENTITIES", 'UTF-8');?>
'<?php }else{ ?>Add Family<?php }?></legend>
						<div class="control-group <?php if (isset($_smarty_tpl->tpl_vars['familyname_error']->value)){?>warning<?php }?>">
							<label class="control-label" for="familyname">Family name</label>
							<div class="controls">
								<input id="familyname" name="familyname" type="text" class="input-xlarge" value="<?php echo mb_convert_encoding(htmlspecialchars($_smarty_tpl->tpl_vars['familyname']->value, ENT_QUOTES, 'UTF-8', true), "HTML-ENTITIES", 'UTF-8');?>
" maxlength="255">
								<?php if (isset($_smarty_tpl->tpl_vars['familyname_error']->value)){?>
									<span class="help-inline"><?php echo mb_convert_encoding(htmlspecialchars($_smarty_tpl->tpl_vars['familyname_error']->value, ENT_QUOTES, 'UTF-8', true), "HTML-ENTITIES", 'UTF-8');?>
</span>
								<?php }?>
							</div>
						</div>
						<div class="form-actions">
							<button type="submit" class="btn btn-primary"><?php if ($_smarty_tpl->tpl_vars['action']->value==''||$_smarty_tpl->tpl_vars['action']->value=="insert"||$_smarty_tpl->tpl_vars['action']->value=="update"){?>Add<?php }else{ ?>Update<?php }?></button>
							<button type="button" class="btn" onClick="document.location.href='families.php';">Cancel</button>
						</div>
					</fieldset>
				</form>
			</div>

			<?php if ($_smarty_tpl->tpl_vars['action']->value=="edit"){?>
				<div class="span6">
					<form name="membership" method="get" action="families.php" class="well form-horizontal">	
						<input type="hidden" name="familyid" value="<?php echo $_smarty_tpl->tpl_vars['familyid']->value;?>
">
						<input type="hidden" name="action" value="members">
						<fieldset>
							<legend>Members of '<?php echo mb_convert_encoding(htmlspecialchars($_smarty_tpl->tpl_vars['familyname']->value, ENT_QUOTES, 'UTF-8', true), "HTML-ENTITIES", 'UTF-8');?>
'</legend>
							<div class="control-group">
								<label class="control-label" for="members[]">Members</label>
								<div class="controls">
									<select name="members[]" size="10" multiple>
										<?php  $_smarty_tpl->tpl_vars['row'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['row']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['nonmembers']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['row']->key => $_smarty_tpl->tpl_vars['row']->value){
$_smarty_tpl->tpl_vars['row']->_loop = true;
?>
											<option value="<?php echo $_smarty_tpl->tpl_vars['row']->value['userid'];?>
" <?php if ($_smarty_tpl->tpl_vars['row']->value['familyid']!=''){?>SELECTED<?php }?>><?php echo mb_convert_encoding(htmlspecialchars($_smarty_tpl->tpl_vars['row']->value['fullname'], ENT_QUOTES, 'UTF-8', true), "HTML-ENTITIES", 'UTF-8');?>
</option>
										<?php } ?>
									</select>
									<p class="help-block">(Hold CTRL while clicking to select multiple users.)</p>
								</div>
							</div>
							<div class="form-actions">
								<button type="submit" class="btn btn-primary">Save</button>
								<button type="button" class="btn" onClick="document.location.href='families.php';">Cancel</button>
							</div>
						</fieldset>
					</form>
				</div>
			<?php }?>

		</div>
	</div>
</body>
</html>
<?php }} ?>