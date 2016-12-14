<?php /* Smarty version Smarty-3.1.12, created on 2016-02-29 14:21:01
         compiled from "./templates/ranks.tpl" */ ?>
<?php /*%%SmartyHeaderCode:1857228759568d5586bc3936-58641916%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '9974600b05c858f3b587ab12e2edc6207ff7c841' => 
    array (
      0 => './templates/ranks.tpl',
      1 => 1456754335,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1857228759568d5586bc3936-58641916',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.12',
  'unifunc' => 'content_568d5586ca9ab3_06537101',
  'variables' => 
  array (
    'isadmin' => 0,
    'message' => 0,
    'ranks' => 0,
    'row' => 0,
    'action' => 0,
    'haserror' => 0,
    'ranking' => 0,
    'title' => 0,
    'title_error' => 0,
    'rendered_error' => 0,
    'rendered' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_568d5586ca9ab3_06537101')) {function content_568d5586ca9ab3_06537101($_smarty_tpl) {?><!DOCTYPE html>
<html lang="en">
<head>
	<title>Manage Ranks</title>
	<link href="css/style.css" rel="stylesheet">
	<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.7.2/jquery.min.js"></script>
	<link href="lightbox2/css/lightbox.min.css" rel="stylesheet">
	<script src="js/jquery.validate.min.js"></script>
	<script src="js/giftreg.js"></script>

	<script language="JavaScript" type="text/javascript">
		$(document).ready(function() {
			$("#theform").validate({
				highlight: validate_highlight,
				success: validate_success,
				rules: {
					title: {
						required: true,
						maxlength: 50
					},
					rendered: {
						required: true,
						maxlength: 255
					}
				},
				messages: {
					title: {
						required: "A title is required.", 
						maxlength: "Title must be 50 characters or less."
					},
					rendered: {
						required: "HTML is required.",
						maxlength: "HTML must be 255 characters or less."
					}
				}
			});
		});
	</script>
</head>

<body>

	<?php echo $_smarty_tpl->getSubTemplate ('navbar.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array('isadmin'=>$_smarty_tpl->tpl_vars['isadmin']->value), 0);?>


	<?php if (isset($_smarty_tpl->tpl_vars['message']->value)){?>
		<div class="row">
			<div class="span12">
				<div class="alert alert-block"><?php echo mb_convert_encoding(htmlspecialchars($_smarty_tpl->tpl_vars['message']->value, ENT_QUOTES, 'UTF-8', true), "HTML-ENTITIES", 'UTF-8');?>
</div>
			</div>
		</div>
	<?php }?>

	<div class="row">
		<div>
			<div class="well">
				<table class="table table-bordered table-striped">
					<thead>
						<tr>
							<th>Title</th>
							<th>Rendered HTML</th>
							<th>Rank Order</th>
						</tr>
					</thead>
					<tbody>
						<?php  $_smarty_tpl->tpl_vars['row'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['row']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['ranks']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['row']->key => $_smarty_tpl->tpl_vars['row']->value){
$_smarty_tpl->tpl_vars['row']->_loop = true;
?>
							<tr>
								<td><?php echo mb_convert_encoding(htmlspecialchars($_smarty_tpl->tpl_vars['row']->value['title'], ENT_QUOTES, 'UTF-8', true), "HTML-ENTITIES", 'UTF-8');?>
</td>
								<td><?php echo $_smarty_tpl->tpl_vars['row']->value['rendered'];?>
</td>
								<td><?php echo $_smarty_tpl->tpl_vars['row']->value['rankorder'];?>
</td>
								<td>
									<a href="ranks.php?action=edit&ranking=<?php echo $_smarty_tpl->tpl_vars['row']->value['ranking'];?>
#rankform"><img src="images/pencil.png" border="0" alt="Edit Rank" title="Edit Rank" /></a>
									<a href="ranks.php?action=delete&ranking=<?php echo $_smarty_tpl->tpl_vars['row']->value['ranking'];?>
"><img src="images/bin.png" border="0" alt="Delete Rank" title="Delete Rank" /></a>
									<a href="ranks.php?action=promote&ranking=<?php echo $_smarty_tpl->tpl_vars['row']->value['ranking'];?>
&rankorder=<?php echo $_smarty_tpl->tpl_vars['row']->value['rankorder'];?>
"><img src="images/arrow-up.png" border="0" alt="Promote" title="Promote" /></a>
									<a href="ranks.php?action=demote&ranking=<?php echo $_smarty_tpl->tpl_vars['row']->value['ranking'];?>
&rankorder=<?php echo $_smarty_tpl->tpl_vars['row']->value['rankorder'];?>
"><img src="images/arrow-down.png" border="0" alt="Demote" title="Demote" /></a>
								</td>
							</tr>
						<?php } ?>
					</tbody>
				</table>
			</div>
		</div>
	</div>

	<a name="rankform">
	<div class="row">
		<div class="small-form">
			<form name="theform" id="theform" method="get" action="ranks.php" class="well form-horizontal">	
				<?php if ($_smarty_tpl->tpl_vars['action']->value=="edit"||(isset($_smarty_tpl->tpl_vars['haserror']->value)&&$_smarty_tpl->tpl_vars['action']->value=="update")){?>
					<input type="hidden" name="ranking" value="<?php echo $_smarty_tpl->tpl_vars['ranking']->value;?>
">
					<input type="hidden" name="action" value="update">
				<?php }elseif($_smarty_tpl->tpl_vars['action']->value==''||(isset($_smarty_tpl->tpl_vars['haserror']->value)&&$_smarty_tpl->tpl_vars['action']->value=="insert")){?>
					<input type="hidden" name="action" value="insert">
				<?php }?>
				
                <h3><?php if ($_smarty_tpl->tpl_vars['action']->value=="edit"){?>Edit Rank '<?php echo $_smarty_tpl->tpl_vars['title']->value;?>
'<?php }else{ ?>Add Rank<?php }?></h3>
				
				<fieldset>
					<div class="control-group <?php if (isset($_smarty_tpl->tpl_vars['title_error']->value)){?>warning<?php }?>">
						<label class="control-label" for="title">Title</label>
						<div class="controls">
							<input id="title" name="title" class="input-xlarge" type="text" value="<?php echo mb_convert_encoding(htmlspecialchars($_smarty_tpl->tpl_vars['title']->value, ENT_QUOTES, 'UTF-8', true), "HTML-ENTITIES", 'UTF-8');?>
" maxlength="255">
							<?php if (isset($_smarty_tpl->tpl_vars['title_error']->value)){?>
								<span class="help-inline"><?php echo mb_convert_encoding(htmlspecialchars($_smarty_tpl->tpl_vars['title_error']->value, ENT_QUOTES, 'UTF-8', true), "HTML-ENTITIES", 'UTF-8');?>
</span>
							<?php }?>
						</div>
					</div>
					<div class="control-group <?php if (isset($_smarty_tpl->tpl_vars['rendered_error']->value)){?>warning<?php }?>">
						<label class="control-label" for="rendered">HTML</label>
						<div class="controls">
							<textarea id="rendered" name="rendered" class="input-xlarge" rows="4" cols="40"><?php echo mb_convert_encoding(htmlspecialchars($_smarty_tpl->tpl_vars['rendered']->value, ENT_QUOTES, 'UTF-8', true), "HTML-ENTITIES", 'UTF-8');?>
</textarea>
							<?php if (isset($_smarty_tpl->tpl_vars['rendered_error']->value)){?>
								<span class="help-inline"><?php echo mb_convert_encoding(htmlspecialchars($_smarty_tpl->tpl_vars['rendered_error']->value, ENT_QUOTES, 'UTF-8', true), "HTML-ENTITIES", 'UTF-8');?>
</span>
							<?php }?>
						</div>
					</div>
				</fieldset>
				
			<div class="form-actions">
				<button type="submit" class="btn btn-primary"><?php if ($_smarty_tpl->tpl_vars['action']->value==''||$_smarty_tpl->tpl_vars['action']->value=="insert"){?>Add<?php }else{ ?>Update<?php }?></button>
				<button type="button" class="btn btn-primary" onClick="document.location.href='ranks.php';">Cancel</button>
			</div>
					
			</form>

		</div>
			
			
	</div>

    <?php echo $_smarty_tpl->getSubTemplate ('navfoot.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array('isadmin'=>$_smarty_tpl->tpl_vars['isadmin']->value), 0);?>


</body>

</html>
<?php }} ?>