<!DOCTYPE html>
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
        	<form name="rsvpform" id="rsvpform" method="POST" action="rsvp.php" class="well form-horizontal">
        	    Please add one entry for each member of your party.</BR></BR>
            	<fieldset>
            	<input type="hidden" name="action" value="insert">
        		<div class="control-group">
        			<label class="control-label" for="firstname">First Name</label>
        			<div class="controls">
        				<input id="firstname" name="firstname" type="text" class="input-xlarge" maxlength="64" value="{$firstname|escape:'htmlall'}" {if $RSVP <= 0}disabled="disabled" {/if} />
        			</div>
        		</div>
        		<div class="control-group">
        			<label class="control-label" for="lastname">Last Name</label>
        			<div class="controls">
        				<input id="lastname" name="lastname" type="text" class="input-xlarge" maxlength="64" value="{$lastname|escape:'htmlall'}" {if $RSVP <= 0}disabled="disabled" {/if}  />
        			</div>
        		</div>
            	</fieldset>
                <div class="form-actions">
                    <button type="submit" class="btn btn-primary" {if $RSVP <= 0}disabled="disabled" {/if} >Add</button>
                    <button type="button" class="btn btn-primary" onClick="document.location.href='rsvp.php';">Cancel</button>
                </div>	
                </BR></BR>You have {$RSVP} reservations remaining for allocation.	
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
                    {$count = 1}
                    {foreach from=$RSVPinfo item=row}
                    <tr>
                        <td>
                            {$count++}
                            {if $row.userid == $userid || $isadmin}
                                <a href="rsvp.php?action=delete&rsvpid={$row.rsvpid}"><img alt="Del" src="images/bin.png" border="0" alt="Delete" title="Delete Item" /></a>  
                            {/if}
                        </td>
                        <td>
                            {$row.firstname}
                        </td>
                        <td>
                            {$row.lastname}
                        </td>
                    </tr>
                    {/foreach}
                </tbody>
            </table>
        </div>
    </div>
         		
    {include file='navfoot.tpl' isadmin=$isadmin}

</body>
</html>
