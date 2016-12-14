<?php /* Smarty version Smarty-3.1.12, created on 2016-02-29 14:42:36
         compiled from "./templates/users.tpl" */ ?>
<?php /*%%SmartyHeaderCode:1137993630568d54cd2f6fb2-88331453%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '8c8f8e602dbb9910ca5c94cfa6ba94f1ecc078e2' => 
    array (
      0 => './templates/users.tpl',
      1 => 1456756955,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1137993630568d54cd2f6fb2-88331453',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.12',
  'unifunc' => 'content_568d54cd3b3622_23589391',
  'variables' => 
  array (
    'isadmin' => 0,
    'message' => 0,
    'users' => 0,
    'row' => 0,
    'action' => 0,
    'haserror' => 0,
    'edituserid' => 0,
    'username_error' => 0,
    'username' => 0,
    'fullname_error' => 0,
    'fullname' => 0,
    'email_error' => 0,
    'email' => 0,
    'RSVP_error' => 0,
    'RSVP' => 0,
    'email_msgs' => 0,
    'approved' => 0,
    'userisadmin' => 0,
    'opt' => 0,
    'approval' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_568d54cd3b3622_23589391')) {function content_568d54cd3b3622_23589391($_smarty_tpl) {?><!DOCTYPE html>
<html lang="en">
<head>
	<title>Manage Users</title>
	<link href="css/style.css" rel="stylesheet">
	<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.7.2/jquery.min.js"></script>
	<link href="lightbox2/css/lightbox.min.css" rel="stylesheet">
	<script src="js/jquery.validate.min.js"></script>
	<script src="js/giftreg.js"></script>
	
	<script language="JavaScript" type="text/javascript">
		$(document).ready(function() {
			$('a[rel=confirmdeleteuser]').click(function(event) {
				var u = $(this).attr('data-content');
				if (!window.confirm('Are you sure you want to delete ' + u + '?')) {
					event.preventDefault();
				}
			});

			$("#theform").validate({
				highlight: validate_highlight,
				success: validate_success,
				rules: {
					username: {
						required: true,
						maxlength: 20
					},
					fullname: {
						required: true,
						maxlength: 50
					},
					email: {
						required: true,
						maxlength: 255,
						email: true
					},
					RSVP: {
						required: true,
						maxlength: 8,
					}
				},
				messages: {
					username: {
						required: "Username is required.",
						maxlength: "Username must be 20 characters or less."
					},
					fullname: {
						required: "Full name is required.",
						maxlength: "Full name must be 50 characters or less."
					},
					email: {
						required: "E-mail address is required.",
						maxlength: "E-mail address must be 255 characters or less.",
						email: "E-mail address must be a valid address."
					},
				    RSVP: {
						required: "RSVP allot is required",
						maxlength: "RSVP allot must be 8 characters or less.",
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
							<th>Username</th>
							<th>Fullname</th>
							<th>E-mail</th>
							<th>RSVP allot</th>
							<th>E-mail messages?</th>
							<th>Approved?</th>
							<th>Admin?</th>
							<th>&nbsp;</th>
						</tr>
					</thead>
					<tbody>
						<?php  $_smarty_tpl->tpl_vars['row'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['row']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['users']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['row']->key => $_smarty_tpl->tpl_vars['row']->value){
$_smarty_tpl->tpl_vars['row']->_loop = true;
?>
							<tr>
								<td><?php echo $_smarty_tpl->tpl_vars['row']->value['username'];?>
</td>
								<td><?php echo $_smarty_tpl->tpl_vars['row']->value['fullname'];?>
</td>
								<td><?php echo $_smarty_tpl->tpl_vars['row']->value['email'];?>
</td>
								<td><?php echo $_smarty_tpl->tpl_vars['row']->value['RSVP'];?>
</td>
								<td><?php if ($_smarty_tpl->tpl_vars['row']->value['email_msgs']){?>Yes<?php }else{ ?>No<?php }?></td>
								<td><?php if ($_smarty_tpl->tpl_vars['row']->value['approved']){?>Yes<?php }else{ ?>No<?php }?></td>
								<td><?php if ($_smarty_tpl->tpl_vars['row']->value['admin']){?>Yes<?php }else{ ?>No<?php }?></td>
								<td align="right">
									<a href="users.php?action=edit&userid=<?php echo $_smarty_tpl->tpl_vars['row']->value['userid'];?>
#userform"><img alt="Edit User" src="images/pencil.png" border="0" title="Edit User" /></a>
									<a rel="confirmdeleteuser" data-content="<?php echo mb_convert_encoding(htmlspecialchars($_smarty_tpl->tpl_vars['row']->value['fullname'], ENT_QUOTES, 'UTF-8', true), "HTML-ENTITIES", 'UTF-8');?>
" href="users.php?action=delete&userid=<?php echo $_smarty_tpl->tpl_vars['row']->value['userid'];?>
"><img alt="Delete User" src="images/bin.png" border="0" title="Delete User" /></a>
									<?php if ($_smarty_tpl->tpl_vars['row']->value['email']!=''){?>
										<a href="users.php?action=reset&userid=<?php echo $_smarty_tpl->tpl_vars['row']->value['userid'];?>
&email=<?php echo mb_convert_encoding(htmlspecialchars($_smarty_tpl->tpl_vars['row']->value['email'], ENT_QUOTES, 'UTF-8', true), "HTML-ENTITIES", 'UTF-8');?>
"><img alt="Reset Password" src="images/key.png" border="0" title="Reset Password" /></a>
									<?php }else{ ?>
										Reset Pwd
									<?php }?>
								</td>
							</tr>
						<?php } ?>
					</tbody>
				</table>
			</div>
		</div>
	</div>

	<a name="userform">
	<div class="row">
		<div class="medium-form">
			<form name="theform" id="theform" method="get" action="users.php" class="well form-horizontal">	
				<?php if ($_smarty_tpl->tpl_vars['action']->value=="edit"||(isset($_smarty_tpl->tpl_vars['haserror']->value)&&$_smarty_tpl->tpl_vars['action']->value=="update")){?>
					<input type="hidden" name="userid" value="<?php echo $_smarty_tpl->tpl_vars['edituserid']->value;?>
">
					<input type="hidden" name="action" value="update">
				<?php }elseif($_smarty_tpl->tpl_vars['action']->value==''||(isset($_smarty_tpl->tpl_vars['haserror']->value)&&$_smarty_tpl->tpl_vars['action']->value=="insert")){?>
					<input type="hidden" name="action" value="insert">
				<?php }?>
				
				<h3><?php if ($_smarty_tpl->tpl_vars['action']->value=="edit"||$_smarty_tpl->tpl_vars['action']->value=="update"){?>Edit User<?php }else{ ?>Add User<?php }?></h3>
				
				<fieldset>
					<div class="control-group <?php if (isset($_smarty_tpl->tpl_vars['username_error']->value)){?>warning<?php }?>">
						<label class="control-label" for="username">Username</label>
						<div class="controls">
							<input id="username" name="username" type="text" class="input-xlarge" value="<?php echo mb_convert_encoding(htmlspecialchars($_smarty_tpl->tpl_vars['username']->value, ENT_QUOTES, 'UTF-8', true), "HTML-ENTITIES", 'UTF-8');?>
" maxlength="255">
							<?php if (isset($_smarty_tpl->tpl_vars['username_error']->value)){?>
								<span class="help-inline"><?php echo mb_convert_encoding(htmlspecialchars($_smarty_tpl->tpl_vars['username_error']->value, ENT_QUOTES, 'UTF-8', true), "HTML-ENTITIES", 'UTF-8');?>
</span>
							<?php }?>
						</div>
					</div>
					<div class="control-group <?php if (isset($_smarty_tpl->tpl_vars['fullname_error']->value)){?>warning<?php }?>">
						<label class="control-label" for="fullname">Full name</label>
						<div class="controls">
							<input id="fullname" name="fullname" type="text" class="input-xlarge" value="<?php echo mb_convert_encoding(htmlspecialchars($_smarty_tpl->tpl_vars['fullname']->value, ENT_QUOTES, 'UTF-8', true), "HTML-ENTITIES", 'UTF-8');?>
" maxlength="255">
							<?php if (isset($_smarty_tpl->tpl_vars['fullname_error']->value)){?>
								<span class="help-inline"><?php echo mb_convert_encoding(htmlspecialchars($_smarty_tpl->tpl_vars['fullname_error']->value, ENT_QUOTES, 'UTF-8', true), "HTML-ENTITIES", 'UTF-8');?>
</span>
							<?php }?>
						</div>
					</div>
					<div class="control-group <?php if (isset($_smarty_tpl->tpl_vars['email_error']->value)){?>warning<?php }?>">
						<label class="control-label" for="email">E-mail address</label>
						<div class="controls">
							<input id="email" name="email" type="text" class="input-xlarge" value="<?php echo mb_convert_encoding(htmlspecialchars($_smarty_tpl->tpl_vars['email']->value, ENT_QUOTES, 'UTF-8', true), "HTML-ENTITIES", 'UTF-8');?>
" maxlength="255">
							<?php if (isset($_smarty_tpl->tpl_vars['email_error']->value)){?>
								<span class="help-inline"><?php echo mb_convert_encoding(htmlspecialchars($_smarty_tpl->tpl_vars['email_error']->value, ENT_QUOTES, 'UTF-8', true), "HTML-ENTITIES", 'UTF-8');?>
</span>
							<?php }?>
						</div>
					</div>
					<div class="control-group <?php if (isset($_smarty_tpl->tpl_vars['RSVP_error']->value)){?>warning<?php }?>">
						<label class="control-label" for="RSVP">RSVP allotment</label>
						<div class="controls">
							<input id="RSVP" name="RSVP" type="text" class="input-xlarge" value="<?php echo mb_convert_encoding(htmlspecialchars($_smarty_tpl->tpl_vars['RSVP']->value, ENT_QUOTES, 'UTF-8', true), "HTML-ENTITIES", 'UTF-8');?>
" maxlength="255">
							<?php if (isset($_smarty_tpl->tpl_vars['RSVP_error']->value)){?>
								<span class="help-inline"><?php echo mb_convert_encoding(htmlspecialchars($_smarty_tpl->tpl_vars['RSVP_error']->value, ENT_QUOTES, 'UTF-8', true), "HTML-ENTITIES", 'UTF-8');?>
</span>
							<?php }?>
						</div>
					</div>
					<div class="control-group">
						<label class="control-label">Flags</label>
						<div class="controls">
							<input type="checkbox" name="email_msgs" <?php if ($_smarty_tpl->tpl_vars['email_msgs']->value){?>CHECKED<?php }?>>
							E-mail messages
							<input type="checkbox" name="approved" <?php if ($_smarty_tpl->tpl_vars['approved']->value){?>CHECKED<?php }?>>
							Approved
							<input type="checkbox" name="admin" <?php if ($_smarty_tpl->tpl_vars['userisadmin']->value){?>CHECKED<?php }?>>
							Administrator
						</div>
					</div>
				</fieldset>
				<div class="form-actions">
						<button type="submit" class="btn btn-primary"><?php if ($_smarty_tpl->tpl_vars['action']->value==''||$_smarty_tpl->tpl_vars['action']->value=="insert"){?>Add<?php }else{ ?>Update<?php }?></button>
						<button type="button" class="btn btn-primary" onClick="document.location.href='users.php';">Cancel</button>
				</div>
			</form>
		</div>
	</div>
	
	
	<section id="otherstuff">
		<div>
			<?php if (($_smarty_tpl->tpl_vars['isadmin']->value&&$_smarty_tpl->tpl_vars['opt']->value['newuser_requires_approval'])){?>
				<div class="row">
						<div class="small-form">
							<div class="well">
								<h3>People waiting for approval</h3>
								<table class="table table-bordered table-striped">
									<thead>
										<tr>
											<th class="colheader">Name</th>
											<th>&nbsp;</th>
										</tr>
									</thead>
									<tbody>
										<?php  $_smarty_tpl->tpl_vars['row'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['row']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['approval']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['row']->key => $_smarty_tpl->tpl_vars['row']->value){
$_smarty_tpl->tpl_vars['row']->_loop = true;
?>
											<tr>
												<td><?php echo mb_convert_encoding(htmlspecialchars($_smarty_tpl->tpl_vars['row']->value['fullname'], ENT_QUOTES, 'UTF-8', true), "HTML-ENTITIES", 'UTF-8');?>
 &lt;<a href="mailto:<?php echo mb_convert_encoding(htmlspecialchars($_smarty_tpl->tpl_vars['row']->value['email'], ENT_QUOTES, 'UTF-8', true), "HTML-ENTITIES", 'UTF-8');?>
"><?php echo mb_convert_encoding(htmlspecialchars($_smarty_tpl->tpl_vars['row']->value['email'], ENT_QUOTES, 'UTF-8', true), "HTML-ENTITIES", 'UTF-8');?>
</a>&gt;</td>
												<td align="right">
													<a href="admin.php?action=approve&userid=<?php echo $_smarty_tpl->tpl_vars['row']->value['userid'];?>
&familyid=<?php echo $_smarty_tpl->tpl_vars['row']->value['initialfamilyid'];?>
">Approve</a>&nbsp;/
													<a href="admin.php?action=reject&userid=<?php echo $_smarty_tpl->tpl_vars['row']->value['userid'];?>
">Reject</a>
												</td>
											</tr>
										<?php } ?>
									</tbody>
								</table>
							</div>
						</div>
				</div>
			<?php }?>
        </div>
	</section>
                		


    <?php echo $_smarty_tpl->getSubTemplate ('navfoot.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array('isadmin'=>$_smarty_tpl->tpl_vars['isadmin']->value), 0);?>


</body>
</html>
<?php }} ?>