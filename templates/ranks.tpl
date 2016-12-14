<!DOCTYPE html>
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
							<th>Title</th>
							<th>Rendered HTML</th>
							<th>Rank Order</th>
						</tr>
					</thead>
					<tbody>
						{foreach from=$ranks item=row}
							<tr>
								<td>{$row.title|escape:'htmlall'}</td>
								<td>{$row.rendered}</td>
								<td>{$row.rankorder}</td>
								<td>
									<a href="ranks.php?action=edit&ranking={$row.ranking}#rankform"><img src="images/pencil.png" border="0" alt="Edit Rank" title="Edit Rank" /></a>
									<a href="ranks.php?action=delete&ranking={$row.ranking}"><img src="images/bin.png" border="0" alt="Delete Rank" title="Delete Rank" /></a>
									<a href="ranks.php?action=promote&ranking={$row.ranking}&rankorder={$row.rankorder}"><img src="images/arrow-up.png" border="0" alt="Promote" title="Promote" /></a>
									<a href="ranks.php?action=demote&ranking={$row.ranking}&rankorder={$row.rankorder}"><img src="images/arrow-down.png" border="0" alt="Demote" title="Demote" /></a>
								</td>
							</tr>
						{/foreach}
					</tbody>
				</table>
			</div>
		</div>
	</div>

	<a name="rankform">
	<div class="row">
		<div class="small-form">
			<form name="theform" id="theform" method="get" action="ranks.php" class="well form-horizontal">	
				{if $action == "edit" || (isset($haserror) && $action == "update")}
					<input type="hidden" name="ranking" value="{$ranking}">
					<input type="hidden" name="action" value="update">
				{elseif $action == "" || (isset($haserror) && $action == "insert")}
					<input type="hidden" name="action" value="insert">
				{/if}
				
                <h3>{if $action == "edit"}Edit Rank '{$title}'{else}Add Rank{/if}</h3>
				
				<fieldset>
					<div class="control-group {if isset($title_error)}warning{/if}">
						<label class="control-label" for="title">Title</label>
						<div class="controls">
							<input id="title" name="title" class="input-xlarge" type="text" value="{$title|escape:'htmlall'}" maxlength="255">
							{if isset($title_error)}
								<span class="help-inline">{$title_error|escape:'htmlall'}</span>
							{/if}
						</div>
					</div>
					<div class="control-group {if isset($rendered_error)}warning{/if}">
						<label class="control-label" for="rendered">HTML</label>
						<div class="controls">
							<textarea id="rendered" name="rendered" class="input-xlarge" rows="4" cols="40">{$rendered|escape:'htmlall'}</textarea>
							{if isset($rendered_error)}
								<span class="help-inline">{$rendered_error|escape:'htmlall'}</span>
							{/if}
						</div>
					</div>
				</fieldset>
				
			<div class="form-actions">
				<button type="submit" class="btn btn-primary">{if $action == "" || $action == "insert"}Add{else}Update{/if}</button>
				<button type="button" class="btn btn-primary" onClick="document.location.href='ranks.php';">Cancel</button>
			</div>
					
			</form>

		</div>
			
			
	</div>

    {include file='navfoot.tpl' isadmin=$isadmin}

</body>

</html>
