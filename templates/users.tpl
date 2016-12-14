<!DOCTYPE html>
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

	{include file='navbar.tpl' isadmin=$isadmin}

                		
	{if isset($message)}
		<div class="row">
			<div class="span12">
				<div class="alert alert-block">{$message|escape:'htmlall'}</div>
			</div>
		</div>
	{/if}

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
						{foreach from=$users item=row}
							<tr>
								<td>{$row.username}</td>
								<td>{$row.fullname}</td>
								<td>{$row.email}</td>
								<td>{$row.RSVP}</td>
								<td>{if $row.email_msgs}Yes{else}No{/if}</td>
								<td>{if $row.approved}Yes{else}No{/if}</td>
								<td>{if $row.admin}Yes{else}No{/if}</td>
								<td align="right">
									<a href="users.php?action=edit&userid={$row.userid}#userform"><img alt="Edit User" src="images/pencil.png" border="0" title="Edit User" /></a>
									<a rel="confirmdeleteuser" data-content="{$row.fullname|escape:'htmlall'}" href="users.php?action=delete&userid={$row.userid}"><img alt="Delete User" src="images/bin.png" border="0" title="Delete User" /></a>
									{if $row.email != ''}
										<a href="users.php?action=reset&userid={$row.userid}&email={$row.email|escape:'htmlall'}"><img alt="Reset Password" src="images/key.png" border="0" title="Reset Password" /></a>
									{else}
										Reset Pwd
									{/if}
								</td>
							</tr>
						{/foreach}
					</tbody>
				</table>
			</div>
		</div>
	</div>

	<a name="userform">
	<div class="row">
		<div class="medium-form">
			<form name="theform" id="theform" method="get" action="users.php" class="well form-horizontal">	
				{if $action == "edit" || (isset($haserror) && $action == "update")}
					<input type="hidden" name="userid" value="{$edituserid}">
					<input type="hidden" name="action" value="update">
				{else if $action == "" || (isset($haserror) && $action == "insert")}
					<input type="hidden" name="action" value="insert">
				{/if}
				
				<h3>{if $action == "edit" || $action == "update"}Edit User{else}Add User{/if}</h3>
				
				<fieldset>
					<div class="control-group {if isset($username_error)}warning{/if}">
						<label class="control-label" for="username">Username</label>
						<div class="controls">
							<input id="username" name="username" type="text" class="input-xlarge" value="{$username|escape:'htmlall'}" maxlength="255">
							{if isset($username_error)}
								<span class="help-inline">{$username_error|escape:'htmlall'}</span>
							{/if}
						</div>
					</div>
					<div class="control-group {if isset($fullname_error)}warning{/if}">
						<label class="control-label" for="fullname">Full name</label>
						<div class="controls">
							<input id="fullname" name="fullname" type="text" class="input-xlarge" value="{$fullname|escape:'htmlall'}" maxlength="255">
							{if isset($fullname_error)}
								<span class="help-inline">{$fullname_error|escape:'htmlall'}</span>
							{/if}
						</div>
					</div>
					<div class="control-group {if isset($email_error)}warning{/if}">
						<label class="control-label" for="email">E-mail address</label>
						<div class="controls">
							<input id="email" name="email" type="text" class="input-xlarge" value="{$email|escape:'htmlall'}" maxlength="255">
							{if isset($email_error)}
								<span class="help-inline">{$email_error|escape:'htmlall'}</span>
							{/if}
						</div>
					</div>
					<div class="control-group {if isset($RSVP_error)}warning{/if}">
						<label class="control-label" for="RSVP">RSVP allotment</label>
						<div class="controls">
							<input id="RSVP" name="RSVP" type="text" class="input-xlarge" value="{$RSVP|escape:'htmlall'}" maxlength="255">
							{if isset($RSVP_error)}
								<span class="help-inline">{$RSVP_error|escape:'htmlall'}</span>
							{/if}
						</div>
					</div>
					<div class="control-group">
						<label class="control-label">Flags</label>
						<div class="controls">
							<input type="checkbox" name="email_msgs" {if $email_msgs}CHECKED{/if}>
							E-mail messages
							<input type="checkbox" name="approved" {if $approved}CHECKED{/if}>
							Approved
							<input type="checkbox" name="admin" {if $userisadmin}CHECKED{/if}>
							Administrator
						</div>
					</div>
				</fieldset>
				<div class="form-actions">
						<button type="submit" class="btn btn-primary">{if $action == "" || $action == "insert"}Add{else}Update{/if}</button>
						<button type="button" class="btn btn-primary" onClick="document.location.href='users.php';">Cancel</button>
				</div>
			</form>
		</div>
	</div>
	
	
	<section id="otherstuff">
		<div>
			{if ($isadmin && $opt.newuser_requires_approval)}
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
										{foreach from=$approval item=row}
											<tr>
												<td>{$row.fullname|escape:'htmlall'} &lt;<a href="mailto:{$row.email|escape:'htmlall'}">{$row.email|escape:'htmlall'}</a>&gt;</td>
												<td align="right">
													<a href="admin.php?action=approve&userid={$row.userid}&familyid={$row.initialfamilyid}">Approve</a>&nbsp;/
													<a href="admin.php?action=reject&userid={$row.userid}">Reject</a>
												</td>
											</tr>
										{/foreach}
									</tbody>
								</table>
							</div>
						</div>
				</div>
			{/if}
        </div>
	</section>
                		


    {include file='navfoot.tpl' isadmin=$isadmin}

</body>
</html>
