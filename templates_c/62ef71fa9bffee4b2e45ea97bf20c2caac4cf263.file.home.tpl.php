<?php /* Smarty version Smarty-3.1.12, created on 2016-03-19 17:08:36
         compiled from "./templates/home.tpl" */ ?>
<?php /*%%SmartyHeaderCode:788475215568d545459e717-55280337%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '62ef71fa9bffee4b2e45ea97bf20c2caac4cf263' => 
    array (
      0 => './templates/home.tpl',
      1 => 1458407313,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '788475215568d545459e717-55280337',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.12',
  'unifunc' => 'content_568d5454788995_88198514',
  'variables' => 
  array (
    'opt' => 0,
    'isadmin' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_568d5454788995_88198514')) {function content_568d5454788995_88198514($_smarty_tpl) {?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN"> 
<html lang="en">

<head>
	<title>Home Page</title>
	<link href="css/style.css" rel="stylesheet">
	<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.7.2/jquery.min.js"></script>
	<link href="lightbox2/css/lightbox.min.css" rel="stylesheet">
	<script src="js/jquery.validate.min.js"></script>
	<script src="js/giftreg.js"></script>
	
	<script language="JavaScript" type="text/javascript">
		$(document).ready(function() {
			$('a[rel=lightbox]').lightBox({
				imageLoading: 'lightbox/images/lightbox-ico-loading.gif',
				imageBtnClose: 'lightbox/images/lightbox-btn-close.gif',
				imageBtnPrev: 'lightbox/images/lightbox-btn-prev.gif',
				imageBtnNext: 'lightbox/images/lightbox-btn-next.gif'
			});
			$('a[rel=popover]').removeAttr('href').popover();
			<?php if ($_smarty_tpl->tpl_vars['opt']->value['confirm_item_deletes']){?>
				$('a[rel=confirmitemdelete]').click(function(event) {
					var desc = $(this).attr('data-content');
					if (!window.confirm('Are you sure you want to delete "' + desc + '"?')) {
						event.preventDefault();
					}
				});
			<?php }?>
		});		
	</script>
</head>


<body>

    <?php echo $_smarty_tpl->getSubTemplate ('navbar.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array('isadmin'=>$_smarty_tpl->tpl_vars['isadmin']->value), 0);?>

    
    <div class="well" style="text-align: center;">
        <div class="postHeader">More photos to come...</div>
	<a rel="lightbox[engagement]" href="http://bytefull.com/wedding/wedding-images/home/full.jpg"><img src="http://bytefull.com/wedding/wedding-images/home/thumb.jpg" alt="Image 1" width="478" height="748" /></a></BR>
    </div>
    
    <?php echo $_smarty_tpl->getSubTemplate ('navfoot.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array('isadmin'=>$_smarty_tpl->tpl_vars['isadmin']->value), 0);?>


</body>


</html>
<?php }} ?>