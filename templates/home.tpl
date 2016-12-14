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
	<title>Home Page</title>
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
    
    <div class="well" style="text-align: center;">
        <div class="postHeader">More photos to come...</div>
	<a rel="lightbox[engagement]" href="http://bytefull.com/wedding/wedding-images/home/full.jpg"><img src="http://bytefull.com/wedding/wedding-images/home/thumb.jpg" alt="Image 1" width="478" height="748" /></a></BR>
    </div>
    
    {include file='navfoot.tpl' isadmin=$isadmin}

</body>


</html>
