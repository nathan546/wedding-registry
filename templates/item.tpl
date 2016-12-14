<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN"> 
<html lang="en">
<head>
	<title>Edit Item</title>
	<link href="css/style.css" rel="stylesheet">
	<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.7.2/jquery.min.js"></script>
	<link href="lightbox2/css/lightbox.min.css" rel="stylesheet">
	<script src="js/jquery.validate.min.js"></script>
	<script src="js/giftreg.js"></script>

	<script language="JavaScript" type="text/javascript">
		$(document).ready(function() {
			$("#imagefile").change(function() {
				$("#ifnew, #ifreplace").attr('CHECKED', 'CHECKED');	
			});

			$("#itemform").validate({
				highlight: validate_highlight,
				success: validate_success,
				rules: {
					description: {
						required: true,
						maxlength: 255
					},
					/*category: {
						required: true
					},*/
					price: {
						required: true,
						min: 0,
						"number": true
					},
					source: {
						required: true,
						maxlength: 255
					},
					ranking: {
						required: true
					},
					url: {
						url: true
					}
				},
				messages: {
					description: {
						required: "The item's description is required.",
						maxlength: "The item's description must be 255 characters or less."
					},
					/*category: {
						required: "A category must be selected."
					},*/
					price: {
						required: "The item's price is required.",
						min: "Price can't be a negative number.",
						"number": "Price must be a valid number."
					},
					source: {
						required: "A source to buy the item is required.",
						maxlength: "The source must be 255 characters or less."
					},
					ranking: {
						required: "A ranking is required."
					},
					url: {
						url: "If specified, URL must be valid."
					}
				}
			});
		});
	</script>
</head>



<body>

        {include file='navbar.tpl' isadmin=$isadmin}

    	{if $opt.show_helptext}
    		<div class="row">
    			<div class="span12">
    				<div class="alert alert-info">
                		Helpful hints:
                		<ul>
                			<li>Include a URL copied &amp; pasted from the address bar of your browser so that potential buyers can see exactly what you want.</li>
                			<li>If the item description and URL can't describe exactly what you want, use the <strong>Comment</strong> area to mention anything you feel is necessary.  It doesn't mean the shopper has to buy the item from that website.</li>
                			<li>If you don't know the price of the item, simply enter <strong>0</strong>.</li>
                			<li>Try not to set all your items at the same ranking level.  When someone is shopping for you, they'll rely on the ranking to know what you want the most.  If you don't think there are enough levels, or the descriptions aren't adequate, ask an administrator to add or change them.</li>
                		</ul>
    				</div>
    			</div>
    		</div>
    	{/if}
    	<div class="row">
    		<div class="medium-form">
    		
    			<form name="itemform" id="itemform" method="POST" action="item.php" enctype="multipart/form-data" class="well form-horizontal">
    				                        		   
        		    <h3> {if $action == 'edit' || (isset($haserror) && $action == 'update')}Edit Item{else}Add Item{/if}</h3>
        		    
    				<fieldset>
    					{if $action == 'edit' || (isset($haserror) && $action == 'update')}
    						<input type="hidden" name="itemid" value="{$itemid}">
    						<input type="hidden" name="action" value="update">
    					{elseif $action == "add" || (isset($haserror) && $action == 'insert')}
    						<input type="hidden" name="action" value="insert">
    					{/if}
    					<div class="control-group {if isset($description_error)}warning{/if}">
    						<label class="control-label" for="description">Description</label>
    						<div class="controls">
    							<input id="description" name="description" type="text" value="{$description|escape:'htmlall'}" class="input-xlarge" placeholder="Description" maxlength="255">
    							{if isset($description_error)}
    								<span class="help-inline">{$description_error}</span>
    							{/if}
    						</div>
    					</div>
    					<div class="control-group {if isset($category_error)}warning{/if}">
    						<label class="control-label" for="category">Category</label>
    						<div class="controls">
    							<select id="category" name="category" class="input-xlarge">
    								<option value="" {if $category == NULL}SELECTED{/if}>Uncategorized</option>
    								{foreach from=$categories item=row}
    									<option value="{$row.categoryid}" {if $row.categoryid == $category}SELECTED{/if}>{$row.category|escape:'htmlall'}</option>
    								{/foreach}
    							</select>
    							{if isset($category_error)}
    								<span class="help-inline">{$category_error}</span>
    							{/if}
    						</div>
    					</div>
    					<div class="control-group {if isset($price_error)}warning{/if}">
    						<label class="control-label" for="price">Price ({$opt.currency_symbol})</label>
    						<div class="controls">
    							<input id="price" name="price" type="text" value="{$price|escape:'htmlall'}" class="input-xlarge" placeholder="0.00">
    							{if isset($price_error)}
    								<span class="help-inline">{$price_error}</span>
    							{/if}
    						</div>
    					</div>
    					<div class="control-group {if isset($source_error)}warning{/if}">
    						<label class="control-label" for="source">Store/Retailer</label>
    						<div class="controls">
    							<input id="source" name="source" type="text" value="{$source|escape:'htmlall'}" class="input-xlarge" maxlength="255" placeholder="Source">
    							{if isset($source_error)}
    								<span class="help-inline">{$source_error}</span>
    							{/if}
    						</div>
    					</div>
    					<div class="control-group {if isset($ranking_error)}warning{/if}">
    						<label class="control-label" for="ranking">Ranking</label>
    						<div class="controls">
    							<select id="ranking" name="ranking" multiple="multiple" class="input-xlarge">
    								{foreach from=$ranks item=row}
    									<option value="{$row.ranking}" {if $row.ranking == $ranking}SELECTED{/if}>{$row.title}</option>
    								{/foreach}
    							</select>
    							{if isset($ranking_error)}
    								<span class="help-inline">{$ranking_error}</span>
    							{/if}
    						</div>
    					</div>
    					<div class="control-group {if isset($url_error)}warning{/if}">
    						<label class="control-label" for="url">URL (optional)</label>
    						<div class="controls">
    							<input id="url" name="url" type="text" value="{$url|escape:'htmlall'}" class="input-xlarge" maxlength="255">
    							{if isset($url_error)}
    								<span class="help-inline">{$url_error}</span>
    							{/if}
    						</div>
    					</div>
    					{if $opt.allow_images}
    						<div class="control-group">
    							<label class="control-label" for="image">Image (optional)</label>
    							<div class="controls">
    								{if $image_filename == ''}
    									<input type="radio" name="image" value="none" CHECKED>
    									No image.<br />
    									<input type="radio" name="image" value="upload" id="ifnew">
    									Upload image:
    									<input type="file" id="imagefile" name="imagefile">
    								{else}
    									<input type="radio" name="image" value="remove">
    									Remove existing image.<br />
    									<input type="radio" name="image" value="keep" CHECKED>
    									Keep existing image.<br />
    									<input type="radio" name="image" value="replace" id="ifreplace">
    									Replace existing image:
    									<input type="file" id="imagefile" name="imagefile">
    								{/if}
    							</div>
    						</div>
    					{/if}
    					<div class="control-group">
    						<label class="control-label" for="comment">Comment</label>
    						<div class="controls">
    							<textarea id="comment" name="comment" class="input-xlarge" rows="2" cols="40">{$comment|escape:'htmlall'}</textarea>
    						</div>
    					</div>
    				</fieldset>
                    <div class="form-actions">
                        <button type="submit" class="btn btn-primary">Save</button>
                        <button type="button" class="btn btn-primary" onclick="document.location.href='index.php';">Cancel</button>
                    </div>
    			</form>
    		</div>
    	</div>

        {include file='navfoot.tpl' isadmin=$isadmin}

</body>

</html>
