<?php /* Smarty version Smarty-3.1.12, created on 2016-01-06 17:55:35
         compiled from "./templates/event.tpl" */ ?>
<?php /*%%SmartyHeaderCode:700375642568d5517097b05-11076706%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '37c4d3a40568717975bfec2846997d433235b691' => 
    array (
      0 => './templates/event.tpl',
      1 => 1452101145,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '700375642568d5517097b05-11076706',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'isadmin' => 0,
    'message' => 0,
    'opt' => 0,
    'events' => 0,
    'row' => 0,
    'action' => 0,
    'haserror' => 0,
    'eventid' => 0,
    'description_error' => 0,
    'description' => 0,
    'eventdate_error' => 0,
    'eventdate' => 0,
    'recurring' => 0,
    'systemevent' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.12',
  'unifunc' => 'content_568d551714c540_38943744',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_568d551714c540_38943744')) {function content_568d551714c540_38943744($_smarty_tpl) {?>

<!DOCTYPE html>
<html lang="en">
<head>
	<title>Gift Registry - Manage Events</title>
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link href="bootstrap/css/bootstrap.min.css" rel="stylesheet">
	<link href="bootstrap/css/bootstrap-responsive.css" rel="stylesheet">
	<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.7.2/jquery.min.js"></script>
	<script src="bootstrap/js/bootstrap.min.js"></script>
	<link href="datepicker/css/datepicker.css" rel="stylesheet">
	<script src="datepicker/js/bootstrap-datepicker.js"></script>
	<script src="js/jquery.validate.min.js"></script>
	<script src="js/giftreg.js"></script>

	<script language="JavaScript" type="text/javascript">
		$(document).ready(function() {
			$('#eventdate').datepicker();

			$('#eventform').validate({
				highlight: validate_highlight,
				success: validate_success,
				rules: {
					description: {
						required: true,
						maxlength: 255
					},
					eventdate: {
						required: true,
						"date": true
					}
				},
				messages: {
					description: {
						required: "A description of the event is required.",
						maxlength: "The description must be 255 characters or less."
					},
					eventdate: {
						required: "The event date is required.",
						"date": "The event date must be a valid date in mm/dd/yyyy format."
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
    			<div class="alert alert-block">
					<?php echo mb_convert_encoding(htmlspecialchars($_smarty_tpl->tpl_vars['message']->value, ENT_QUOTES, 'UTF-8', true), "HTML-ENTITIES", 'UTF-8');?>

				</div>
			</div>
		</div>
	<?php }?>
	<?php if ($_smarty_tpl->tpl_vars['opt']->value['show_helptext']){?>
		<div class="row">
			<div class="span12">
				<div class="alert alert-info">
					Here you can specify events <strong>of your own</strong>, like your birthday or your anniversary.  When the event occurs within <?php echo $_smarty_tpl->tpl_vars['opt']->value['event_threshold'];?>
 days, an event reminder will appear in the display of everyone who shops for you.
					<?php if ($_smarty_tpl->tpl_vars['isadmin']->value){?>
						<strong>System events</strong> are events which belong to no one -- like Christmas -- and will appear on everyone's display.
					<?php }?>
					Marking an item as <strong>Recurring yearly</strong> will cause them to show up year after year.
				</div>
			</div>
		</div>
	<?php }?>
	<div class="row">
		<div class="span12">
			<div class="well">
				<h1>Events</h1>
				<table class="table table-bordered table-striped">
					<thead>
						<tr>
							<th>Event date</th>
							<th>Description</th>
							<th>Recurring?</th>
							<?php if ($_smarty_tpl->tpl_vars['isadmin']->value){?>
								<th>System event?</th>
							<?php }?>
							<th>&nbsp;</th>
						</tr>
					</thead>
					<tbody>
						<?php  $_smarty_tpl->tpl_vars['row'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['row']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['events']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['row']->key => $_smarty_tpl->tpl_vars['row']->value){
$_smarty_tpl->tpl_vars['row']->_loop = true;
?>
							<tr>
								<td><?php echo $_smarty_tpl->tpl_vars['row']->value['eventdate'];?>
</td>
								<td><?php echo mb_convert_encoding(htmlspecialchars($_smarty_tpl->tpl_vars['row']->value['description'], ENT_QUOTES, 'UTF-8', true), "HTML-ENTITIES", 'UTF-8');?>
</td>
								<td><?php if ($_smarty_tpl->tpl_vars['row']->value['recurring']){?>Yes<?php }else{ ?>No<?php }?></td>
								<?php if ($_smarty_tpl->tpl_vars['isadmin']->value){?>
									<td>
										<?php if ($_smarty_tpl->tpl_vars['row']->value['userid']==''){?>Yes<?php }else{ ?>No<?php }?>
									</td>
								<?php }?>
								<td>
									<a href="event.php?action=edit&eventid=<?php echo $_smarty_tpl->tpl_vars['row']->value['eventid'];?>
"><img alt="Edit Event" src="images/pencil.png" border="0" title="Edit Event" /></a>&nbsp;<a href="event.php?action=delete&eventid=<?php echo $_smarty_tpl->tpl_vars['row']->value['eventid'];?>
"><img alt="Delete Event" src="images/bin.png" border="0" title="Delete Event" /></a>
								</td>
							</tr>
						<?php } ?>
					</tbody>
				</table>
				<h5><a href="event.php">Add a new event</a></h5>
			</div>
		</div>
	</div>
	<div class="row">
		<div class="span8 offset2">
			<form name="eventform" id="eventform" method="get" action="event.php" class="well form-horizontal">
				<fieldset>
					<legend>Event Details</legend>
					<?php if ($_smarty_tpl->tpl_vars['action']->value=="edit"||(isset($_smarty_tpl->tpl_vars['haserror']->value)&&$_smarty_tpl->tpl_vars['action']->value=="update")){?>
						<input type="hidden" name="eventid" value="<?php echo $_smarty_tpl->tpl_vars['eventid']->value;?>
">
						<input type="hidden" name="action" value="update">
					<?php }elseif($_smarty_tpl->tpl_vars['action']->value==''||(isset($_smarty_tpl->tpl_vars['haserror']->value)&&$_smarty_tpl->tpl_vars['action']->value=="insert")){?>
						<input type="hidden" name="action" value="insert">
					<?php }?>
					<div class="control-group <?php if (isset($_smarty_tpl->tpl_vars['description_error']->value)){?>warning<?php }?>">
						<label class="control-label" for="description">Description</label>
						<div class="controls">
							<input id="description" name="description" type="text" value="<?php echo mb_convert_encoding(htmlspecialchars($_smarty_tpl->tpl_vars['description']->value, ENT_QUOTES, 'UTF-8', true), "HTML-ENTITIES", 'UTF-8');?>
" class="input-xlarge" maxlength="255" placeholder="Description">
							<?php if (isset($_smarty_tpl->tpl_vars['description_error']->value)){?>
								<span class="help-inline"><?php echo $_smarty_tpl->tpl_vars['description_error']->value;?>
</span>
							<?php }?>
						</div>
					</div>
					<div class="control-group <?php if (isset($_smarty_tpl->tpl_vars['eventdate_error']->value)){?>warning<?php }?>">
						<label class="control-label" for="eventdate">Event date</label>
						<div class="controls">
							<input id="eventdate" name="eventdate" type="text" value="<?php echo mb_convert_encoding(htmlspecialchars($_smarty_tpl->tpl_vars['eventdate']->value, ENT_QUOTES, 'UTF-8', true), "HTML-ENTITIES", 'UTF-8');?>
" class="input-xlarge" placeholder="mm/dd/yyyy" data-date-format="mm/dd/yyyy">
							<p class="help-block">mm/dd/yyyy</p>
							<?php if (isset($_smarty_tpl->tpl_vars['eventdate_error']->value)){?>
								<span class="help-inline"><?php echo $_smarty_tpl->tpl_vars['eventdate_error']->value;?>
</span>
							<?php }?>
						</div>
					</div>
					<div class="control-group">
						<label class="control-label" for="recurring">Recurring</label>
						<div class="controls">
							<input type="checkbox" name="recurring" <?php if ($_smarty_tpl->tpl_vars['recurring']->value){?>CHECKED<?php }?>>
							Recurring yearly
						</div>
					</div>
					<?php if ($_smarty_tpl->tpl_vars['isadmin']->value){?>
						<div class="control-group">
							<label class="control-label" for="systemevent">System event</label>
							<div class="controls">
								<input type="checkbox" name="systemevent" <?php if ($_smarty_tpl->tpl_vars['systemevent']->value){?>CHECKED<?php }?>>
								System event
							</div>
						</div>
					<?php }?>
					<div class="form-actions">
						<button type="submit" class="btn btn-primary"><?php if ($_smarty_tpl->tpl_vars['action']->value==''||$_smarty_tpl->tpl_vars['action']->value=="insert"){?>Add<?php }else{ ?>Update<?php }?></button>
						<button type="button" class="btn" onClick="document.location.href='event.php';">Cancel</button>
					</div>
				</fieldset>
			</form>
		</div>
	</div>
</div>
</body>
</html>
<?php }} ?>