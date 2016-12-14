<!DOCTYPE html>
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

    {include file='navbar.tpl' isadmin=$isadmin}
      
	{if isset($message)}
		<div class="row">
			<div class="span12">
				<div class="alert alert-block">{$message|escape:'htmlall'}</div>
			</div>
		</div>
	{/if}

	{if $opt.show_helptext}
		<div class="row">
			<div class="span12">
				<div class="alert alert-info">
					Here you can specify categories <strong>of your own</strong>, like &quot;Motorcycle stuff&quot; or &quot;Collectibles&quot;.  This will help you categorize your gifts.
					Warning: deleting a category will uncategorize all items that used that category.
				</div>
			</div>
		</div>
	{/if}

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
						{foreach from=$categories item=row}
							<tr>
								<td>{$row.category|escape:'htmlall'}</td>
								<td>{$row.itemsin}</td>
								<td>
									<a href="categories.php?action=edit&categoryid={$row.categoryid}#catform"><img src="images/pencil.png" border="0" title="Edit Category" alt="Edit Category" /></a>
									<a href="categories.php?action=delete&categoryid={$row.categoryid}"><img src="images/bin.png" border="0" title="Delete Category" alt="Delete Category" /></a>
								</td>
							</tr>
						{/foreach}
					</tbody>
				</table>
			</div>
		</div>
	</div>

	<a name="catform">
	<div class="row">
		<div class="small-form">
			<form name="categoryform" id="categoryform" method="get" action="categories.php" class="well form-horizontal">
				{if $action == "edit" || (isset($haserror) && $action == "update")}
					<input type="hidden" name="categoryid" value="{$categoryid}">
					<input type="hidden" name="action" value="update">
				{elseif $action == "" || (isset($haserror) && $action == "insert")}
					<input type="hidden" name="action" value="insert">
				{/if}
				
				<h3>{if $action == "edit"}Edit Category '{$category|escape:'htmlall'}'{else}Add Category{/if}</h3>
				
				<fieldset>
					<div class="control-group {if isset($category_error)}warning{/if}">
						<label class="control-label" for="category">Category name</label>
						<div class="controls">
							<input id="category" name="category" type="text" class="input-xlarge" value="{$category|escape:'htmlall'}" maxlength="255">
							{if isset($category_error)}
								<span class="help-inline">{$category_error|escape:'htmlall'}</span>
							{/if}
						</div>
					</div>
				</fieldset>
                <div class="form-actions">
                    <button type="submit" class="btn btn-primary">{if $action == "" || $action == "insert"}Add{else}Update{/if}</button>
                    <button type="button" class="btn btn-primary" onClick="document.location.href='categories.php';">Cancel</button>
                </div>
			</form>
		</div>
	</div>

    {include file='navfoot.tpl' isadmin=$isadmin}

</body>



</html>
