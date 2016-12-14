<?php /* Smarty version Smarty-3.1.12, created on 2016-05-21 16:11:43
         compiled from "./templates/rsvp.tpl" */ ?>
<?php /*%%SmartyHeaderCode:175148362056d45acd736cc2-79940054%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'c9369100254dc85fb00cb112c7ef4911a5686274' => 
    array (
      0 => './templates/rsvp.tpl',
      1 => 1463847098,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '175148362056d45acd736cc2-79940054',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.12',
  'unifunc' => 'content_56d45acd774f23_95154179',
  'variables' => 
  array (
    'isadmin' => 0,
    'message' => 0,
    'firstname' => 0,
    'RSVP' => 0,
    'lastname' => 0,
    'RSVPinfo' => 0,
    'count' => 0,
    'row' => 0,
    'userid' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_56d45acd774f23_95154179')) {function content_56d45acd774f23_95154179($_smarty_tpl) {?><!DOCTYPE html>
<html lang="en">
<head>
	<title>Make Reservations</title>
	<link href="css/style.css" rel="stylesheet">
	<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.7.2/jquery.min.js"></script>
	<link href="lightbox2/css/lightbox.min.css" rel="stylesheet">
	<script src="js/jquery.validate.min.js"></script>
	<script src="js/giftreg.js"></script>
	
	<script language="JavaScript" type="text/javascript">
    	$(document).ready(function() {
    		$("#rsvpform").validate({
    			highlight: validate_highlight,
    			success: validate_success,
    			rules: {
    				firstname: {
    					required: true,
    					maxlength: 64
    				},
    				lastname: {
    					required: true,
    					maxlength: 64
    				},
    			},
    			messages: {
    				firstname: {
    					required: "First Name is required.",
    					maxlength: "HTML must be 255 characters or less."
    				},
    				lastname: {
    					required: "Last Name is required.",
    					maxlength: "HTML must be 64 characters or less."
    				},
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
        	<form name="rsvpform" id="rsvpform" method="POST" action="rsvp.php" class="well form-horizontal">
        	    Please add one entry for each member of your party.</BR></BR>
            	<fieldset>
            	<input type="hidden" name="action" value="insert">
        		<div class="control-group">
        			<label class="control-label" for="firstname">First Name</label>
        			<div class="controls">
        				<input id="firstname" name="firstname" type="text" class="input-xlarge" maxlength="64" value="<?php echo mb_convert_encoding(htmlspecialchars($_smarty_tpl->tpl_vars['firstname']->value, ENT_QUOTES, 'UTF-8', true), "HTML-ENTITIES", 'UTF-8');?>
" <?php if ($_smarty_tpl->tpl_vars['RSVP']->value<=0){?>disabled="disabled" <?php }?> />
        			</div>
        		</div>
        		<div class="control-group">
        			<label class="control-label" for="lastname">Last Name</label>
        			<div class="controls">
        				<input id="lastname" name="lastname" type="text" class="input-xlarge" maxlength="64" value="<?php echo mb_convert_encoding(htmlspecialchars($_smarty_tpl->tpl_vars['lastname']->value, ENT_QUOTES, 'UTF-8', true), "HTML-ENTITIES", 'UTF-8');?>
" <?php if ($_smarty_tpl->tpl_vars['RSVP']->value<=0){?>disabled="disabled" <?php }?>  />
        			</div>
        		</div>
            	</fieldset>
                <div class="form-actions">
                    <button type="submit" class="btn btn-primary" <?php if ($_smarty_tpl->tpl_vars['RSVP']->value<=0){?>disabled="disabled" <?php }?> >Add</button>
                    <button type="button" class="btn btn-primary" onClick="document.location.href='rsvp.php';">Cancel</button>
                </div>	
                </BR></BR>You have <?php echo $_smarty_tpl->tpl_vars['RSVP']->value;?>
 reservations remaining for allocation.	
            </form>
        </div>
    </div>	
	
    <div class="row">
        <div class="well">
            <h3>Current Reservation List</h3>
            <table class="table table-bordered table-striped">
                <thead>
                    <tr>
                    <th>Index</th>
                    <th>First Name</th>
                    <th>Last Name</th>
                    </tr>
                </thead>
                <tbody>
                    <?php $_smarty_tpl->tpl_vars['count'] = new Smarty_variable(1, null, 0);?>
                    <?php  $_smarty_tpl->tpl_vars['row'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['row']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['RSVPinfo']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['row']->key => $_smarty_tpl->tpl_vars['row']->value){
$_smarty_tpl->tpl_vars['row']->_loop = true;
?>
                    <tr>
                        <td>
                            <?php echo $_smarty_tpl->tpl_vars['count']->value++;?>

                            <?php if ($_smarty_tpl->tpl_vars['row']->value['userid']==$_smarty_tpl->tpl_vars['userid']->value||$_smarty_tpl->tpl_vars['isadmin']->value){?>
                                <a href="rsvp.php?action=delete&rsvpid=<?php echo $_smarty_tpl->tpl_vars['row']->value['rsvpid'];?>
"><img alt="Del" src="images/bin.png" border="0" alt="Delete" title="Delete Item" /></a>  
                            <?php }?>
                        </td>
                        <td>
                            <?php echo $_smarty_tpl->tpl_vars['row']->value['firstname'];?>

                        </td>
                        <td>
                            <?php echo $_smarty_tpl->tpl_vars['row']->value['lastname'];?>

                        </td>
                    </tr>
                    <?php } ?>
                </tbody>
            </table>
        </div>
    </div>
         		
    <?php echo $_smarty_tpl->getSubTemplate ('navfoot.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array('isadmin'=>$_smarty_tpl->tpl_vars['isadmin']->value), 0);?>


</body>
</html>
<?php }} ?>