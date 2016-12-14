<?php /* Smarty version Smarty-3.1.12, created on 2016-01-06 17:56:00
         compiled from "./templates/mylist.tpl" */ ?>
<?php /*%%SmartyHeaderCode:2062259876568d5530ddac27-02298682%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'bc3f5cc5f628f2b29a18131fa4af5c1e114e6bd5' => 
    array (
      0 => './templates/mylist.tpl',
      1 => 1452101145,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '2062259876568d5530ddac27-02298682',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'isadmin' => 0,
    'opt' => 0,
    'shoplist' => 0,
    'row' => 0,
    'itemcount' => 0,
    'totalprice' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.12',
  'unifunc' => 'content_568d5530e47ff6_21365442',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_568d5530e47ff6_21365442')) {function content_568d5530e47ff6_21365442($_smarty_tpl) {?>

<!DOCTYPE html>
<html lang="en">
<head>
	<title>Gift Registry - My Items</title>
 	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link href="bootstrap/css/bootstrap.min.css" rel="stylesheet">
	<link href="bootstrap/css/bootstrap-responsive.css" rel="stylesheet">

	<script language="JavaScript">
		function printPage() {
			window.print();
		}
	</script>
</head>
<body>
	 <?php echo $_smarty_tpl->getSubTemplate ('navbar.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array('isadmin'=>$_smarty_tpl->tpl_vars['isadmin']->value), 0);?>


	 <div class="container" style="padding-top: 60px;">
	 	<?php if ($_smarty_tpl->tpl_vars['opt']->value['show_helptext']){?>
			<div class="row">
				<div class="span12">
					<div class="alert alert-info">
						<ul>
							<li>You can click the column headers to sort by that attribute.</li>
							<li>Once you've bought or decided not to buy an item, remember to return to the recipient's gift lists and mark it accordingly.</li>
							<li><strong>Please login to the Gift Registry site to get the most recent version of this list.</strong></li>
							<li>For better printing results, please change your print orientation to "Landscape" mode.</li>
						</ul>
					</div>
				</div>
			</div>
		<?php }?>

		<div class="row">
			<div class="span12">
				<div class="well">
					<h1>My Items</h1>
					<table class="table table-bordered table-striped">
						<thead>
							<tr>
								<th><a href="mylist.php?sort=ranking">Ranking</a></th>
								<th><a href="mylist.php?sort=source">Source</a></th>
								<th><a href="mylist.php?sort=description">Description</a></th>
								<th><a href="mylist.php?sort=category">Category</a></th>
								<th><a href="mylist.php?sort=price">Price</a></th>
							</tr>
						</thead>
						<tbody>
							<?php  $_smarty_tpl->tpl_vars['row'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['row']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['shoplist']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['row']->key => $_smarty_tpl->tpl_vars['row']->value){
$_smarty_tpl->tpl_vars['row']->_loop = true;
?>
								<tr>
									<td><?php echo $_smarty_tpl->tpl_vars['row']->value['rendered'];?>
</td>
									<td><?php echo mb_convert_encoding(htmlspecialchars($_smarty_tpl->tpl_vars['row']->value['source'], ENT_QUOTES, 'UTF-8', true), "HTML-ENTITIES", 'UTF-8');?>
</td>
									<td><?php echo mb_convert_encoding(htmlspecialchars($_smarty_tpl->tpl_vars['row']->value['description'], ENT_QUOTES, 'UTF-8', true), "HTML-ENTITIES", 'UTF-8');?>
</td>
									<td><?php echo mb_convert_encoding(htmlspecialchars($_smarty_tpl->tpl_vars['row']->value['category'], ENT_QUOTES, 'UTF-8', true), "HTML-ENTITIES", 'UTF-8');?>
</td>
									<td><?php echo $_smarty_tpl->tpl_vars['row']->value['price'];?>
</td>
								</tr>
							<?php } ?>
						</tbody>
					</table>
					<h5><?php echo $_smarty_tpl->tpl_vars['itemcount']->value;?>
 item(s), <?php echo $_smarty_tpl->tpl_vars['totalprice']->value;?>
 total.</h5>
				</div>
			</div>
		</div>

		<div class="row">
			<div class="span6">
				<div class="well">
					<a onClick="printPage()" href="#">Send to printer</a>
				</div>
			</div>
		</div>
	</div>

	<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.7.2/jquery.min.js"></script>
	<script src="bootstrap/js/bootstrap.min.js"></script>
</body>
</html>
<?php }} ?>