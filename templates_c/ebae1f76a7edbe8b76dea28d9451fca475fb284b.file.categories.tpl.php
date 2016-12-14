<?php /* Smarty version Smarty-3.1.12, created on 2016-02-29 14:20:59
         compiled from "./templates/categories.tpl" */ ?>
<?php /*%%SmartyHeaderCode:418966959568d558474c639-60216418%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'ebae1f76a7edbe8b76dea28d9451fca475fb284b' => 
    array (
      0 => './templates/categories.tpl',
      1 => 1456754284,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '418966959568d558474c639-60216418',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.12',
  'unifunc' => 'content_568d55847cedf7_93288032',
  'variables' => 
  array (
    'isadmin' => 0,
    'message' => 0,
    'opt' => 0,
    'categories' => 0,
    'row' => 0,
    'action' => 0,
    'haserror' => 0,
    'categoryid' => 0,
    'category' => 0,
    'category_error' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_568d55847cedf7_93288032')) {function content_568d55847cedf7_93288032($_smarty_tpl) {?><!DOCTYPE html>
<html lang="en">
<head>
	<title>Manage Categories</title>
	<link href="css/style.css" rel="stylesheet">
	<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.7.2/jquery.min.js"></script>
	<link href="lightbox2/css/lightbox.min.css" rel="stylesheet">
	<script src="js/jquery.validate.min.js"></script>
	<script src="js/giftreg.js"></script>

	<script language="JavaScript" type="text/javascript">
		$(document).ready(function() {
			$("#categoryform").validate({
				highlight: validate_highlight,
				success: validate_success,
				rules: {
					category: {
						required: true,
						maxlength: 50
					}
				},
				messages: {
					category: {
						required: "Category name is required.",
						maxlength: "Category name must be 50 characters or less."
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

	<?php if ($_smarty_tpl->tpl_vars['opt']->value['show_helptext']){?>
		<div class="row">
			<div class="span12">
				<div class="alert alert-info">
					Here you can specify categories <strong>of your own</strong>, like &quot;Motorcycle stuff&quot; or &quot;Collectibles&quot;.  This will help you categorize your gifts.
					Warning: deleting a category will uncategorize all items that used that category.
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
							<th>Category</th>
							<th># Items</th>
							<th>&nbsp;</th>
						</tr>
					</thead>
					<tbody>
						<?php  $_smarty_tpl->tpl_vars['row'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['row']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['categories']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['row']->key => $_smarty_tpl->tpl_vars['row']->value){
$_smarty_tpl->tpl_vars['row']->_loop = true;
?>
							<tr>
								<td><?php echo mb_convert_encoding(htmlspecialchars($_smarty_tpl->tpl_vars['row']->value['category'], ENT_QUOTES, 'UTF-8', true), "HTML-ENTITIES", 'UTF-8');?>
</td>
								<td><?php echo $_smarty_tpl->tpl_vars['row']->value['itemsin'];?>
</td>
								<td>
									<a href="categories.php?action=edit&categoryid=<?php echo $_smarty_tpl->tpl_vars['row']->value['categoryid'];?>
#catform"><img src="images/pencil.png" border="0" title="Edit Category" alt="Edit Category" /></a>
									<a href="categories.php?action=delete&categoryid=<?php echo $_smarty_tpl->tpl_vars['row']->value['categoryid'];?>
"><img src="images/bin.png" border="0" title="Delete Category" alt="Delete Category" /></a>
								</td>
							</tr>
						<?php } ?>
					</tbody>
				</table>
			</div>
		</div>
	</div>

	<a name="catform">
	<div class="row">
		<div class="small-form">
			<form name="categoryform" id="categoryform" method="get" action="categories.php" class="well form-horizontal">
				<?php if ($_smarty_tpl->tpl_vars['action']->value=="edit"||(isset($_smarty_tpl->tpl_vars['haserror']->value)&&$_smarty_tpl->tpl_vars['action']->value=="update")){?>
					<input type="hidden" name="categoryid" value="<?php echo $_smarty_tpl->tpl_vars['categoryid']->value;?>
">
					<input type="hidden" name="action" value="update">
				<?php }elseif($_smarty_tpl->tpl_vars['action']->value==''||(isset($_smarty_tpl->tpl_vars['haserror']->value)&&$_smarty_tpl->tpl_vars['action']->value=="insert")){?>
					<input type="hidden" name="action" value="insert">
				<?php }?>
				
				<h3><?php if ($_smarty_tpl->tpl_vars['action']->value=="edit"){?>Edit Category '<?php echo mb_convert_encoding(htmlspecialchars($_smarty_tpl->tpl_vars['category']->value, ENT_QUOTES, 'UTF-8', true), "HTML-ENTITIES", 'UTF-8');?>
'<?php }else{ ?>Add Category<?php }?></h3>
				
				<fieldset>
					<div class="control-group <?php if (isset($_smarty_tpl->tpl_vars['category_error']->value)){?>warning<?php }?>">
						<label class="control-label" for="category">Category name</label>
						<div class="controls">
							<input id="category" name="category" type="text" class="input-xlarge" value="<?php echo mb_convert_encoding(htmlspecialchars($_smarty_tpl->tpl_vars['category']->value, ENT_QUOTES, 'UTF-8', true), "HTML-ENTITIES", 'UTF-8');?>
" maxlength="255">
							<?php if (isset($_smarty_tpl->tpl_vars['category_error']->value)){?>
								<span class="help-inline"><?php echo mb_convert_encoding(htmlspecialchars($_smarty_tpl->tpl_vars['category_error']->value, ENT_QUOTES, 'UTF-8', true), "HTML-ENTITIES", 'UTF-8');?>
</span>
							<?php }?>
						</div>
					</div>
				</fieldset>
                <div class="form-actions">
                    <button type="submit" class="btn btn-primary"><?php if ($_smarty_tpl->tpl_vars['action']->value==''||$_smarty_tpl->tpl_vars['action']->value=="insert"){?>Add<?php }else{ ?>Update<?php }?></button>
                    <button type="button" class="btn btn-primary" onClick="document.location.href='categories.php';">Cancel</button>
                </div>
			</form>
		</div>
	</div>

    <?php echo $_smarty_tpl->getSubTemplate ('navfoot.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array('isadmin'=>$_smarty_tpl->tpl_vars['isadmin']->value), 0);?>


</body>



</html>
<?php }} ?>