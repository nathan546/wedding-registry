<!DOCTYPE html>
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

    {include file='navbar.tpl' isadmin=$isadmin}

	{if isset($message)}
		<div class="row">
			<div class="span12">
				<div class="alert alert-block">{$message|escape:'htmlall'}</div>
			</div>
		</div>
	{/if}
	
	<div class="row">
    	<div class="small-form">   		   
        	<form name="weddingform" id="weddingform" method="POST" action="wedding_info.php" class="well form-horizontal">
            	<fieldset>
            	<input type="hidden" name="action" value="update">
        		<div class="control-group">
        			<label class="control-label" for="party_name">Party Name</label>
        			<div class="controls">
        				<input id="party_name" name="party_name" type="text" class="input-xlarge" maxlength="255" value="{$party_name|escape:'htmlall'}" />
        			</div>
        		</div>
        		<div class="control-group">
        			<label class="control-label" for="party_date">Party Date</label>
        			<div class="controls">
        				<input id="party_date" name="party_date" type="text" class="input-xlarge" maxlength="64" value="{$party_date|escape:'htmlall'}" />
        			</div>
        		</div>
        		<div class="control-group">
        			<label class="control-label" for="party_location">Party Location</label>
        			<div class="controls">
        				<input id="party_location" name="party_location" type="text" class="input-xlarge" maxlength="255" value="{$party_location|escape:'htmlall'}" />
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
         		
    {include file='navfoot.tpl' isadmin=$isadmin}

</body>
</html>
