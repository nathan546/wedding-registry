{*
This program is free software; you can redistribute it and/or modify
it under the terms of the GNU General Public License as published by
the Free Software Foundation; either version 2 of the License, or
(at your option) any later version.

This program is distributed in the hope that it will be useful,
but WITHOUT ANY WARRANTY; without even the implied warranty of
MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
GNU General Public License for more details.

You should have received a copy of the GNU General Public License
along with this program; if not, write to the Free Software
Foundation, Inc., 59 Temple Place, Suite 330, Boston, MA  02111-1307  USA
*}

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN"> 
<html lang="en">

<head>
	<title>Registry</title>
	<link href="css/style.css" rel="stylesheet">
	<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.7.2/jquery.min.js"></script>
	<link href="lightbox2/css/lightbox.min.css" rel="stylesheet">
	<script src="js/jquery.validate.min.js"></script>
	<script src="js/giftreg.js"></script>
	
	<script language="JavaScript" type="text/javascript">
		$(document).ready(function() {
			$('a[rel=lightbox]').lightBox({
				imageLoading: 'lightbox/images/lightbox-ico-loading.gif',
				imageBtnClose: 'lightbox/images/lightbox-btn-close.gif',
				imageBtnPrev: 'lightbox/images/lightbox-btn-prev.gif',
				imageBtnNext: 'lightbox/images/lightbox-btn-next.gif'
			});
			$('a[rel=popover]').removeAttr('href').popover();
			{if $opt.confirm_item_deletes}
				$('a[rel=confirmitemdelete]').click(function(event) {
					var desc = $(this).attr('data-content');
					if (!window.confirm('Are you sure you want to delete "' + desc + '"?')) {
						event.preventDefault();
					}
				});
			{/if}
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
		<section id="help">
	 	<div class="row">
			<div class="span12">
				<div class="alert alert-info">
				<ul>
					<li>You can click the column headers to sort by that attribute.</li>
					<li>List each item seperately on your list - do not combine items. (i.e. list each book of a 4-part series separately.)</li>
					<li>Once you've bought or decided not to buy an item, remember to return to the recipient's gift lists and mark it accordingly.</li>
					<li>If someone purchases an item on your list, click <img src="images/return.png" /> to mark it as received.</li>
				</ul>
				</div>
			</div>
		</div>
		</section>
	{/if}
</div>

<div style="width: 1204px; margin: 0 auto;">
    
      <div class="well" style="width: 1000px; margin: 0 auto;">

		<B><font color="RED">Be sure to reserve items by clicking the lock(<img style="height:30px; width:30px;"  src="images/locked.png"></img>)  symbol to the right of the item's image.  </BR></BR>
		If you have accidentally reserved an item, you can unreserve it with the unlock (<img style="height:30px; width:30px;" src="images/unlocked.png"></img>) symbol that will appear to the right of the item's image.</BR></BR></font></B>

      Sort By: 	  
	  <a href="registry.php?mysort=description" style="clear;">Description</a> | 
      <a href="registry.php?mysort=ranking">Ranking</a> | 
      <a href="registry.php?mysort=category">Category</a> | 
      <a href="registry.php?mysort=price">Price</a>
      </div>
  	
<table style="background: none;">

        {$count = 0}
        
        {foreach from=$items item=row}

            {if $count % 4 == 0}
                <tr>
            {/if}
            <td style="padding-left: 10px; padding-top: 10px;">
            
            {if $row.status != 0}
                <div class="registry-tile-taken">
            {else}
                <div class="registry-tile">
            {/if}

            {if $row.url != ''}
                <a href="{$row.url}" target="_blank">
            {/if}
            
                <div class="registryHeader">
                    <b><p style="font-size: 20px;">{$row.description|escape:'htmlall'}</p></b> 
                </div>
                
            {if $row.url != ''}
                </a>
            {/if}
                    
            <div style="text-align: center; padding-left: 10px; padding-right: 30px; position: relative;">
            
                <div style="width: 150px; height: 150px; text-align: center; margin: 0 auto;">

                    {if $row.url != ''}
                        <a href="{$row.url}" target="_blank">
                    {/if}
                    {if $row.image_filename != '' && $opt.allow_images}
                            <img src="{$opt.image_subdir}/{$row.image_filename}" alt="Image" style="bottom: 0; left: 0; margin: auto; position: absolute; right: 0; top: 0;"/>
                    {/if}
                    {if $row.url != ''}
                        </a>
                    {/if}
                </div>
                
                <div style="position:absolute; right:5px; top:0px;">
            			{if $row.status == '0'}
           				<a href="registry.php?action=reserve&itemid={$row.itemid}&shopfor={$shopfor}" class="confirmation"><img style="width:30px; height:30px; alt="Reserve Item" title="Reserve Item" src="images/locked.png" border="0" /></a></BR>
            			{elseif $row.status == '1'}
            				{if $row.status_id == $userid || $isadmin}
            						<a href="registry.php?action=release&itemid={$row.itemid}&shopfor={$shopfor}"><img style="width:30px; height:30px;" alt="Release Item" title="Release Item" src="images/unlocked.png" border="0" /></a></BR>
            				{/if}
            			{/if}
            			
                    	{if $isadmin}
            			 <a href="item.php?action=edit&itemid={$row.itemid}"><img alt="Edit Item" src="images/pencil.png" style="width:30px; height:30px;" border="0" title="Edit Item" /></a></BR>
            			 <a rel="confirmitemdelete" data-content="{$row.description|escape:'htmlall'}" href="item.php?action=delete&itemid={$row.itemid}"><img alt="Delete Item" style="width:30px; height:30px;" src="images/bin.png" border="0" alt="Delete" title="Delete Item" /></a></BR>
                        {/if}
                </div> 
                 
            </div>


             <table style="text-align: center; margin: 0 auto; background: none;">
                <tr>
                    <td>
                    {$row.rendered}
                    </td>
                </tr>
                <tr>
                    <td>
                    <b>Price:</b> {$row.price}
                    </td>                                              
                <tr>
                <tr>
                    <td>
                        {if $row.category}
                            <b>Category:</b> {$row.category|default:"&nbsp;"}
                        {/if}
                    </td>                                              
                <tr>
                <tr>
                    <td>
                    <b>Available at:</b> {$row.source|escape:'htmlall'}
                    </td>                                              
                <tr>
                <tr>
                    <td>
                        {if $row.comment}
                            <b>Notes:</b> {$row.comment|escape:'htmlall'}
                        {/if}
                    </td>                                              
                <tr>
                <tr>
                    <td>
                    <b>Status:</b>
                            {if $row.status == '0'}
    								<i>Available.</i>
                        	{elseif $row.status == '1'}
    							{if $row.status_id == $userid}
    
    									<i>Reserved by you.</i>
    
    							{else}
    							
    									<i>Already Reserved.</i>
    
    							{/if}
    						{elseif $row.bfullname != ''}
    							{if $row.boughtid == $userid}
    
    									<i>Bought by you.</i>
    
    							{else}
    								{if $opt.anonymous_purchasing}
    										<i>Bought.</i>
    
    								{else}
    								
    										<i>Bought by {$row.bfullname|escape:'htmlall'}.</i>
    
    								{/if}
    							{/if}
    						{/if}
                    </td>                                              
                <tr>    
  
             </table>
                   
            </div>
            </td>
            
        {$count = $count + 1}
        {if $count % 4 == 0}
            </tr>
        {/if}

        
        {/foreach}                                          
</table> 



	{include file='navfoot.tpl' isadmin=$isadmin}



<script type="text/javascript">
    var elems = document.getElementsByClassName('confirmation');
    var confirmIt = function (e) {
        if (!confirm('Are you sure you wish to reserve this item?')) e.preventDefault();
    };
    for (var i = 0, l = elems.length; i < l; i++) {
        elems[i].addEventListener('click', confirmIt, false);
    }    
</script>

	
</body>


</html>
