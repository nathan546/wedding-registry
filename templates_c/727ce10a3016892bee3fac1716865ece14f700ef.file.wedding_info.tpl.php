<?php /* Smarty version Smarty-3.1.12, created on 2016-02-29 14:21:03
         compiled from "./templates/wedding_info.tpl" */ ?>
<?php /*%%SmartyHeaderCode:1646108989569bd4a3182be6-29670884%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '727ce10a3016892bee3fac1716865ece14f700ef' => 
    array (
      0 => './templates/wedding_info.tpl',
      1 => 1456754367,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1646108989569bd4a3182be6-29670884',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.12',
  'unifunc' => 'content_569bd4a3216de5_25214170',
  'variables' => 
  array (
    'isadmin' => 0,
    'message' => 0,
    'party_name' => 0,
    'party_date' => 0,
    'party_location' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_569bd4a3216de5_25214170')) {function content_569bd4a3216de5_25214170($_smarty_tpl) {?><!DOCTYPE html>
<html lang="en">
<head>
	<title>Manage Wedding Info</title>
	<link href="css/style.css" rel="stylesheet">
	<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.7.2/jquery.min.js"></script>
	<link href="lightbox2/css/lightbox.min.css" rel="stylesheet">
	<script src="js/jquery.validate.min.js"></script>
	<script src="js/giftreg.js"></script>
	
	<script language="JavaScript" type="text/javascript">
    	$(document).ready(function() {
    		$("#weddingform").validate({
    			highlight: validate_highlight,
    			success: validate_success,
    			rules: {
    				party_name: {
    					required: true,
    					maxlength: 255
    				},
    				party_date: {
    					required: true,
    					maxlength: 64
    				},
    				party_location: {
    					required: true,
    					maxlength: 255
    				}
    			},
    			messages: {
    				party_name: {
    					required: "Name is required.",
    					maxlength: "HTML must be 255 characters or less."
    				},
    				party_date: {
    					required: "Date is required.",
    					maxlength: "HTML must be 64 characters or less."
    				},
    				party_location: {
    					required: "Location is required.",
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
    	<div class="small-form">   		   
        	<form name="weddingform" id="weddingform" method="POST" action="wedding_info.php" class="well form-horizontal">
            	<fieldset>
            	<input type="hidden" name="action" value="update">
        		<div class="control-group">
        			<label class="control-label" for="party_name">Party Name</label>
        			<div class="controls">
        				<input id="party_name" name="party_name" type="text" class="input-xlarge" maxlength="255" value="<?php echo mb_convert_encoding(htmlspecialchars($_smarty_tpl->tpl_vars['party_name']->value, ENT_QUOTES, 'UTF-8', true), "HTML-ENTITIES", 'UTF-8');?>
" />
        			</div>
        		</div>
        		<div class="control-group">
        			<label class="control-label" for="party_date">Party Date</label>
        			<div class="controls">
        				<input id="party_date" name="party_date" type="text" class="input-xlarge" maxlength="64" value="<?php echo mb_convert_encoding(htmlspecialchars($_smarty_tpl->tpl_vars['party_date']->value, ENT_QUOTES, 'UTF-8', true), "HTML-ENTITIES", 'UTF-8');?>
" />
        			</div>
        		</div>
        		<div class="control-group">
        			<label class="control-label" for="party_location">Party Location</label>
        			<div class="controls">
        				<input id="party_location" name="party_location" type="text" class="input-xlarge" maxlength="255" value="<?php echo mb_convert_encoding(htmlspecialchars($_smarty_tpl->tpl_vars['party_location']->value, ENT_QUOTES, 'UTF-8', true), "HTML-ENTITIES", 'UTF-8');?>
" />
        			</div>
        		</div>
            	</fieldset>
                <div class="form-actions">
                    <button type="submit" class="btn btn-primary">Update</button>
                    <button type="button" class="btn btn-primary" onClick="document.location.href='wedding_info.php';">Cancel</button>
                </div>		
            </form>
        </div>
    </div>
         		
    <?php echo $_smarty_tpl->getSubTemplate ('navfoot.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array('isadmin'=>$_smarty_tpl->tpl_vars['isadmin']->value), 0);?>


</body>
</html>
<?php }} ?>