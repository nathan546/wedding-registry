<?php /* Smarty version Smarty-3.1.12, created on 2016-01-06 18:27:32
         compiled from "./templates/shop.tpl" */ ?>
<?php /*%%SmartyHeaderCode:358183471568d5c94e91e67-15524672%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '3f9a0aa3891afee2057c445dfa815c66872d775e' => 
    array (
      0 => './templates/shop.tpl',
      1 => 1452101146,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '358183471568d5c94e91e67-15524672',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'ufullname' => 0,
    'isadmin' => 0,
    'message' => 0,
    'opt' => 0,
    'shopfor' => 0,
    'shoprows' => 0,
    'row' => 0,
    'alloc' => 0,
    'reservetext' => 0,
    'purchasetext' => 0,
    'userid' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.12',
  'unifunc' => 'content_568d5c950ab2d8_18173172',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_568d5c950ab2d8_18173172')) {function content_568d5c950ab2d8_18173172($_smarty_tpl) {?>

<!DOCTYPE html>
<html lang="en">
<head>
	<title>Gift Registry - Shopping List for <?php echo $_smarty_tpl->tpl_vars['ufullname']->value;?>
</title>
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link href="bootstrap/css/bootstrap.min.css" rel="stylesheet">
	<link href="bootstrap/css/bootstrap-responsive.css" rel="stylesheet">
	<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.7.2/jquery.min.js"></script>
	<script src="bootstrap/js/bootstrap.min.js"></script>
	<link href="lightbox/css/jquery.lightbox-0.5.css" rel="stylesheet">
	<script src="lightbox/js/jquery.lightbox-0.5.min.js"></script>

    <script language="JavaScript" type="text/javascript">
		function printPage() {
			window.print();
		}

		$(document).ready(function() {
			$('a[rel=lightbox]').lightBox({
				imageLoading: 'lightbox/images/lightbox-ico-loading.gif',
				imageBtnClose: 'lightbox/images/lightbox-btn-close.gif',
				imageBtnPrev: 'lightbox/images/lightbox-btn-prev.gif',
				imageBtnNext: 'lightbox/images/lightbox-btn-next.gif'
			});
			$('a[rel=popover]').removeAttr('href').popover();
		});
	</script>
</head>
<body>
	<?php echo $_smarty_tpl->getSubTemplate ('navbar.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array('isadmin'=>$_smarty_tpl->tpl_vars['isadmin']->value), 0);?>


	<div class="container" style="padding-top: 60px;">
	<?php if (isset($_smarty_tpl->tpl_vars['message']->value)){?>
		<div class="row">
			<div class="span12">
				<div class="alert alert-block">
					<?php echo mb_convert_encoding(htmlspecialchars($_smarty_tpl->tpl_vars['message']->value, ENT_QUOTES, 'UTF-8', true), "HTML-ENTITIES", 'UTF-8');?>

				</div>
			</div>
		</div>
	<?php }?>
	<div class="row">
		<h1>Shopping List for <?php echo mb_convert_encoding(htmlspecialchars($_smarty_tpl->tpl_vars['ufullname']->value, ENT_QUOTES, 'UTF-8', true), "HTML-ENTITIES", 'UTF-8');?>
</h1>
	</div>
	<?php if ($_smarty_tpl->tpl_vars['opt']->value['show_helptext']){?>
		<div class="row">
			<div class="span12">
				<div class="alert alert-info">
					<ul>
						<li>If you intend to purchase a gift for this person, click the <img src="images/locked.png"> icon.  If you end up actually purchasing it, come back and click the <img src="images/credit-card-3.png"> icon.  If you change your mind and don't want to buy it, come back and click the <img src="images/unlocked.png"> icon.</li>
						<li>If you return something you've purchased, come back and click the <img src="images/return.png"> icon.  It will remain reserved for you.</li>
						<li>Just because an item has a URL listed doesn't mean you have to buy it from there (unless the comment says so).</li>
						<li>You can click the column headers to sort by that attribute.</li>
						<li>If you see something you'd like for yourself, click the <img src="images/split-2.png"> icon to copy it to your own list.</li>
					</ul>
				</div>
			</div>
		</div>
	<?php }?>
	<div class="row">
		<div class="span6 offset6">
			<div class="alert alert-info">
		<img src="images/locked.png" alt="Reserve" title="Reserve"> = Reserve, <img src="images/unlocked.png" alt="Release" title="Release"> = Release, <img src="images/credit-card-3.png" alt="Purchase" title="Purchase"> = Purchase, <img src="images/return.png" alt="Return" title="Return"> = Return, <img src="images/split-2.png" alt="I Want This Too" title="I Want This Too"> = I Want This Too
			</div>
		</div>
	</div>
	<div class="row">
		<div class="span12">
			<div class="well">
		<table class="table table-bordered table-striped">
			<thead>
			<tr>
				<th><a href="shop.php?shopfor=<?php echo $_smarty_tpl->tpl_vars['shopfor']->value;?>
&sort=ranking">Rank</a></th>
				<th><a href="shop.php?shopfor=<?php echo $_smarty_tpl->tpl_vars['shopfor']->value;?>
&sort=description">Description</a></th>
				<th><a href="shop.php?shopfor=<?php echo $_smarty_tpl->tpl_vars['shopfor']->value;?>
&sort=category">Category</a></th>
				<th><a href="shop.php?shopfor=<?php echo $_smarty_tpl->tpl_vars['shopfor']->value;?>
&sort=price">Price</a></th>
				<th><a href="shop.php?shopfor=<?php echo $_smarty_tpl->tpl_vars['shopfor']->value;?>
&sort=source">Store/Location</a></th>
				<th><a href="shop.php?shopfor=<?php echo $_smarty_tpl->tpl_vars['shopfor']->value;?>
&sort=status">Status</a></th>
				<th>&nbsp;</th>
			</tr>
			</thead>
			<tbody>
			<?php  $_smarty_tpl->tpl_vars['row'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['row']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['shoprows']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['row']->key => $_smarty_tpl->tpl_vars['row']->value){
$_smarty_tpl->tpl_vars['row']->_loop = true;
?>
				<tr valign="top">
					<td nowrap><?php echo $_smarty_tpl->tpl_vars['row']->value['rendered'];?>
</td>
					<td>
						<?php echo mb_convert_encoding(htmlspecialchars($_smarty_tpl->tpl_vars['row']->value['description'], ENT_QUOTES, 'UTF-8', true), "HTML-ENTITIES", 'UTF-8');?>

						<?php if ($_smarty_tpl->tpl_vars['row']->value['comment']!=''){?>
							<a class="btn btn-small" rel="popover" href="#" data-placement="right" data-original-title="Comment" data-content="<?php echo mb_convert_encoding(htmlspecialchars($_smarty_tpl->tpl_vars['row']->value['comment'], ENT_QUOTES, 'UTF-8', true), "HTML-ENTITIES", 'UTF-8');?>
">...</a>
						<?php }?>
						<?php if ($_smarty_tpl->tpl_vars['row']->value['url']!=''){?>
							<a href="<?php echo $_smarty_tpl->tpl_vars['row']->value['url'];?>
" target="_blank"><img src="images/link.png" border="0" alt="URL" title="URL"></a>
						<?php }?>
						<?php if ($_smarty_tpl->tpl_vars['row']->value['image_filename']!=''&&$_smarty_tpl->tpl_vars['opt']->value['allow_images']){?>
							<a rel="lightbox" href="<?php echo $_smarty_tpl->tpl_vars['opt']->value['image_subdir'];?>
/<?php echo $_smarty_tpl->tpl_vars['row']->value['image_filename'];?>
" title="<?php echo mb_convert_encoding(htmlspecialchars($_smarty_tpl->tpl_vars['row']->value['description'], ENT_QUOTES, 'UTF-8', true), "HTML-ENTITIES", 'UTF-8');?>
"><img src="images/image.png" border="0" alt="Image" /></a>
						<?php }?>
					</td>
					<td><?php echo (($tmp = @$_smarty_tpl->tpl_vars['row']->value['category'])===null||$tmp==='' ? "&nbsp;" : $tmp);?>
</td>
					<td align="right"><?php echo $_smarty_tpl->tpl_vars['row']->value['price'];?>
</td>
					<td><?php echo mb_convert_encoding(htmlspecialchars($_smarty_tpl->tpl_vars['row']->value['source'], ENT_QUOTES, 'UTF-8', true), "HTML-ENTITIES", 'UTF-8');?>
</td>
					<?php if ($_smarty_tpl->tpl_vars['row']->value['quantity']>1){?>
						<td>
							<?php  $_smarty_tpl->tpl_vars['alloc'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['alloc']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['row']->value['allocs']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['alloc']->key => $_smarty_tpl->tpl_vars['alloc']->value){
$_smarty_tpl->tpl_vars['alloc']->_loop = true;
?>
								<b><?php echo $_smarty_tpl->tpl_vars['alloc']->value;?>
</b><br />
							<?php } ?>
							<?php echo $_smarty_tpl->tpl_vars['row']->value['avail'];?>
 remaining.<br />
						</td>
						<td nowrap align="right">
							<?php if ($_smarty_tpl->tpl_vars['row']->value['avail']>0||$_smarty_tpl->tpl_vars['row']->value['ireserved']>0||$_smarty_tpl->tpl_vars['row']->value['ibought']>0){?>
								<?php if ($_smarty_tpl->tpl_vars['row']->value['ireserved']>0){?>
									<?php $_smarty_tpl->tpl_vars["reservetext"] = new Smarty_variable("Reserve Another", null, 0);?>
								<?php }else{ ?>
									<?php $_smarty_tpl->tpl_vars["reservetext"] = new Smarty_variable("Reserve Item", null, 0);?>
								<?php }?>
								<?php if ($_smarty_tpl->tpl_vars['row']->value['ibought']>0){?>
									<?php $_smarty_tpl->tpl_vars["purchasetext"] = new Smarty_variable("Purchase Another", null, 0);?>
								<?php }elseif($_smarty_tpl->tpl_vars['row']->value['ireserved']>0){?>
									<?php $_smarty_tpl->tpl_vars["purchasetext"] = new Smarty_variable("Convert Reserve to Purchase", null, 0);?>
								<?php }else{ ?>
									<?php $_smarty_tpl->tpl_vars["purchasetext"] = new Smarty_variable("Purchase Item", null, 0);?>
								<?php }?>
								<?php if ($_smarty_tpl->tpl_vars['row']->value['avail']>0){?>
									<a href="shop.php?action=reserve&itemid=<?php echo $_smarty_tpl->tpl_vars['row']->value['itemid'];?>
&shopfor=<?php echo $_smarty_tpl->tpl_vars['shopfor']->value;?>
"><img alt="<?php echo mb_convert_encoding(htmlspecialchars($_smarty_tpl->tpl_vars['reservetext']->value, ENT_QUOTES, 'UTF-8', true), "HTML-ENTITIES", 'UTF-8');?>
" title="<?php echo mb_convert_encoding(htmlspecialchars($_smarty_tpl->tpl_vars['reservetext']->value, ENT_QUOTES, 'UTF-8', true), "HTML-ENTITIES", 'UTF-8');?>
" src="images/locked.png" border="0" /></a>
								<?php }?>
								<?php if ($_smarty_tpl->tpl_vars['row']->value['avail']>0||$_smarty_tpl->tpl_vars['row']->value['ireserved']>0){?>
									<a href="shop.php?action=purchase&itemid=<?php echo $_smarty_tpl->tpl_vars['row']->value['itemid'];?>
&shopfor=<?php echo $_smarty_tpl->tpl_vars['shopfor']->value;?>
"><img alt="<?php echo mb_convert_encoding(htmlspecialchars($_smarty_tpl->tpl_vars['purchasetext']->value, ENT_QUOTES, 'UTF-8', true), "HTML-ENTITIES", 'UTF-8');?>
" title="<?php echo mb_convert_encoding(htmlspecialchars($_smarty_tpl->tpl_vars['purchasetext']->value, ENT_QUOTES, 'UTF-8', true), "HTML-ENTITIES", 'UTF-8');?>
" src="images/credit-card-3.png" border="0" /></a>
								<?php }?>
							<?php }?>
							<?php if ($_smarty_tpl->tpl_vars['row']->value['ireserved']>0){?>
								<a href="shop.php?action=release&itemid=<?php echo $_smarty_tpl->tpl_vars['row']->value['itemid'];?>
&shopfor=<?php echo $_smarty_tpl->tpl_vars['shopfor']->value;?>
"><img alt="Release Item" title="Release Item" src="images/unlocked.png" border="0" /></a>
							<?php }?>
							<?php if ($_smarty_tpl->tpl_vars['row']->value['ibought']>0){?>
								<a href="shop.php?action=return&itemid=<?php echo $_smarty_tpl->tpl_vars['row']->value['itemid'];?>
&shopfor=<?php echo $_smarty_tpl->tpl_vars['shopfor']->value;?>
"><img alt="Return Item" title="Return Item" src="images/return.png" border="0" /></a>
							<?php }?>
						
					<?php }else{ ?>
						<?php if ($_smarty_tpl->tpl_vars['row']->value['rfullname']==''&&$_smarty_tpl->tpl_vars['row']->value['bfullname']==''){?>
							<td>
								<i>Available.</i>
							</td>
							<td nowrap align="right">
								<a href="shop.php?action=reserve&itemid=<?php echo $_smarty_tpl->tpl_vars['row']->value['itemid'];?>
&shopfor=<?php echo $_smarty_tpl->tpl_vars['shopfor']->value;?>
"><img alt="Reserve Item" title="Reserve Item" src="images/locked.png" border="0" /></a>&nbsp;<a href="shop.php?action=purchase&itemid=<?php echo $_smarty_tpl->tpl_vars['row']->value['itemid'];?>
&shopfor=<?php echo $_smarty_tpl->tpl_vars['shopfor']->value;?>
"><img alt="Purchase Item" title="Purchase Item" src="images/credit-card-3.png" border="0" /></a>
							
						<?php }elseif($_smarty_tpl->tpl_vars['row']->value['rfullname']!=''){?>
							<?php if ($_smarty_tpl->tpl_vars['row']->value['reservedid']==$_smarty_tpl->tpl_vars['userid']->value){?>
								<td>
									<i><b>Reserved by you.</b></i>
								</td>
								<td align="right">
									<a href="shop.php?action=release&itemid=<?php echo $_smarty_tpl->tpl_vars['row']->value['itemid'];?>
&shopfor=<?php echo $_smarty_tpl->tpl_vars['shopfor']->value;?>
"><img alt="Release Item" title="Release Item" src="images/unlocked.png" border="0" /></a>&nbsp;<a href="shop.php?action=purchase&itemid=<?php echo $_smarty_tpl->tpl_vars['row']->value['itemid'];?>
&shopfor=<?php echo $_smarty_tpl->tpl_vars['shopfor']->value;?>
"><img alt="Purchase Item" title="Purchase Item" src="images/credit-card-3.png" border="0" /></a>
								
							<?php }else{ ?>
								<td>
									<?php if ($_smarty_tpl->tpl_vars['opt']->value['anonymous_purchasing']){?>
										<i>Reserved.</i>
									<?php }else{ ?>
										<i>Reserved by <?php echo mb_convert_encoding(htmlspecialchars($_smarty_tpl->tpl_vars['row']->value['rfullname'], ENT_QUOTES, 'UTF-8', true), "HTML-ENTITIES", 'UTF-8');?>
.</i>
									<?php }?>
								</td>
								<td>
								
							<?php }?>
						<?php }elseif($_smarty_tpl->tpl_vars['row']->value['bfullname']!=''){?>
							<?php if ($_smarty_tpl->tpl_vars['row']->value['boughtid']==$_smarty_tpl->tpl_vars['userid']->value){?>
								<td>
									<i><b>Bought by you.</b></i>
								</td>
								<td align="right">
									<a href="shop.php?action=return&itemid=<?php echo $_smarty_tpl->tpl_vars['row']->value['itemid'];?>
&shopfor=<?php echo $_smarty_tpl->tpl_vars['shopfor']->value;?>
"><img alt="Return Item" title="Return Item" src="images/return.png" border="0" /></a>
								
							<?php }else{ ?>
								<?php if ($_smarty_tpl->tpl_vars['opt']->value['anonymous_purchasing']){?>
									<td>
										<i>Bought.</i>
									</td>
									<td>
									
								<?php }else{ ?>
									<td>
										<i>Bought by <?php echo mb_convert_encoding(htmlspecialchars($_smarty_tpl->tpl_vars['row']->value['bfullname'], ENT_QUOTES, 'UTF-8', true), "HTML-ENTITIES", 'UTF-8');?>
.</i>
									</td>
									<td>
									
								<?php }?>
							<?php }?>
						<?php }?>
					<?php }?>
					
						<a href="shop.php?action=copy&itemid=<?php echo $_smarty_tpl->tpl_vars['row']->value['itemid'];?>
&shopfor=<?php echo $_smarty_tpl->tpl_vars['shopfor']->value;?>
"><img alt="I Want This Too" title="I Want This Too" src="images/split-2.png" border="0" /></a>
					</td>
				</tr>
			<?php } ?>
			</tbody>
		</table>
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
</body>
</html>
<?php }} ?>