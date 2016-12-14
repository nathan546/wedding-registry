<?php /* Smarty version Smarty-3.1.12, created on 2016-06-29 22:39:26
         compiled from "./templates/registry.tpl" */ ?>
<?php /*%%SmartyHeaderCode:198933039556bb6c7f0329d7-16376075%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '825b93c222af46ce10b8f370b17600064e883661' => 
    array (
      0 => './templates/registry.tpl',
      1 => 1467239964,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '198933039556bb6c7f0329d7-16376075',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.12',
  'unifunc' => 'content_56bb6c7f1bc0d8_83994152',
  'variables' => 
  array (
    'opt' => 0,
    'isadmin' => 0,
    'message' => 0,
    'items' => 0,
    'count' => 0,
    'row' => 0,
    'shopfor' => 0,
    'userid' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_56bb6c7f1bc0d8_83994152')) {function content_56bb6c7f1bc0d8_83994152($_smarty_tpl) {?>

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
			<?php if ($_smarty_tpl->tpl_vars['opt']->value['confirm_item_deletes']){?>
				$('a[rel=confirmitemdelete]').click(function(event) {
					var desc = $(this).attr('data-content');
					if (!window.confirm('Are you sure you want to delete "' + desc + '"?')) {
						event.preventDefault();
					}
				});
			<?php }?>
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
	<?php if ($_smarty_tpl->tpl_vars['opt']->value['show_helptext']){?>
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
	<?php }?>
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

        <?php $_smarty_tpl->tpl_vars['count'] = new Smarty_variable(0, null, 0);?>
        
        <?php  $_smarty_tpl->tpl_vars['row'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['row']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['items']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['row']->key => $_smarty_tpl->tpl_vars['row']->value){
$_smarty_tpl->tpl_vars['row']->_loop = true;
?>

            <?php if ($_smarty_tpl->tpl_vars['count']->value%4==0){?>
                <tr>
            <?php }?>
            <td style="padding-left: 10px; padding-top: 10px;">
            
            <?php if ($_smarty_tpl->tpl_vars['row']->value['status']!=0){?>
                <div class="registry-tile-taken">
            <?php }else{ ?>
                <div class="registry-tile">
            <?php }?>

            <?php if ($_smarty_tpl->tpl_vars['row']->value['url']!=''){?>
                <a href="<?php echo $_smarty_tpl->tpl_vars['row']->value['url'];?>
" target="_blank">
            <?php }?>
            
                <div class="registryHeader">
                    <b><p style="font-size: 20px;"><?php echo mb_convert_encoding(htmlspecialchars($_smarty_tpl->tpl_vars['row']->value['description'], ENT_QUOTES, 'UTF-8', true), "HTML-ENTITIES", 'UTF-8');?>
</p></b> 
                </div>
                
            <?php if ($_smarty_tpl->tpl_vars['row']->value['url']!=''){?>
                </a>
            <?php }?>
                    
            <div style="text-align: center; padding-left: 10px; padding-right: 30px; position: relative;">
            
                <div style="width: 150px; height: 150px; text-align: center; margin: 0 auto;">

                    <?php if ($_smarty_tpl->tpl_vars['row']->value['url']!=''){?>
                        <a href="<?php echo $_smarty_tpl->tpl_vars['row']->value['url'];?>
" target="_blank">
                    <?php }?>
                    <?php if ($_smarty_tpl->tpl_vars['row']->value['image_filename']!=''&&$_smarty_tpl->tpl_vars['opt']->value['allow_images']){?>
                            <img src="<?php echo $_smarty_tpl->tpl_vars['opt']->value['image_subdir'];?>
/<?php echo $_smarty_tpl->tpl_vars['row']->value['image_filename'];?>
" alt="Image" style="bottom: 0; left: 0; margin: auto; position: absolute; right: 0; top: 0;"/>
                    <?php }?>
                    <?php if ($_smarty_tpl->tpl_vars['row']->value['url']!=''){?>
                        </a>
                    <?php }?>
                </div>
                
                <div style="position:absolute; right:5px; top:0px;">
            			<?php if ($_smarty_tpl->tpl_vars['row']->value['status']=='0'){?>
           				<a href="registry.php?action=reserve&itemid=<?php echo $_smarty_tpl->tpl_vars['row']->value['itemid'];?>
&shopfor=<?php echo $_smarty_tpl->tpl_vars['shopfor']->value;?>
" class="confirmation"><img style="width:30px; height:30px; alt="Reserve Item" title="Reserve Item" src="images/locked.png" border="0" /></a></BR>
            			<?php }elseif($_smarty_tpl->tpl_vars['row']->value['status']=='1'){?>
            				<?php if ($_smarty_tpl->tpl_vars['row']->value['status_id']==$_smarty_tpl->tpl_vars['userid']->value||$_smarty_tpl->tpl_vars['isadmin']->value){?>
            						<a href="registry.php?action=release&itemid=<?php echo $_smarty_tpl->tpl_vars['row']->value['itemid'];?>
&shopfor=<?php echo $_smarty_tpl->tpl_vars['shopfor']->value;?>
"><img style="width:30px; height:30px;" alt="Release Item" title="Release Item" src="images/unlocked.png" border="0" /></a></BR>
            				<?php }?>
            			<?php }?>
            			
                    	<?php if ($_smarty_tpl->tpl_vars['isadmin']->value){?>
            			 <a href="item.php?action=edit&itemid=<?php echo $_smarty_tpl->tpl_vars['row']->value['itemid'];?>
"><img alt="Edit Item" src="images/pencil.png" style="width:30px; height:30px;" border="0" title="Edit Item" /></a></BR>
            			 <a rel="confirmitemdelete" data-content="<?php echo mb_convert_encoding(htmlspecialchars($_smarty_tpl->tpl_vars['row']->value['description'], ENT_QUOTES, 'UTF-8', true), "HTML-ENTITIES", 'UTF-8');?>
" href="item.php?action=delete&itemid=<?php echo $_smarty_tpl->tpl_vars['row']->value['itemid'];?>
"><img alt="Delete Item" style="width:30px; height:30px;" src="images/bin.png" border="0" alt="Delete" title="Delete Item" /></a></BR>
                        <?php }?>
                </div> 
                 
            </div>


             <table style="text-align: center; margin: 0 auto; background: none;">
                <tr>
                    <td>
                    <?php echo $_smarty_tpl->tpl_vars['row']->value['rendered'];?>

                    </td>
                </tr>
                <tr>
                    <td>
                    <b>Price:</b> <?php echo $_smarty_tpl->tpl_vars['row']->value['price'];?>

                    </td>                                              
                <tr>
                <tr>
                    <td>
                        <?php if ($_smarty_tpl->tpl_vars['row']->value['category']){?>
                            <b>Category:</b> <?php echo (($tmp = @$_smarty_tpl->tpl_vars['row']->value['category'])===null||$tmp==='' ? "&nbsp;" : $tmp);?>

                        <?php }?>
                    </td>                                              
                <tr>
                <tr>
                    <td>
                    <b>Available at:</b> <?php echo mb_convert_encoding(htmlspecialchars($_smarty_tpl->tpl_vars['row']->value['source'], ENT_QUOTES, 'UTF-8', true), "HTML-ENTITIES", 'UTF-8');?>

                    </td>                                              
                <tr>
                <tr>
                    <td>
                        <?php if ($_smarty_tpl->tpl_vars['row']->value['comment']){?>
                            <b>Notes:</b> <?php echo mb_convert_encoding(htmlspecialchars($_smarty_tpl->tpl_vars['row']->value['comment'], ENT_QUOTES, 'UTF-8', true), "HTML-ENTITIES", 'UTF-8');?>

                        <?php }?>
                    </td>                                              
                <tr>
                <tr>
                    <td>
                    <b>Status:</b>
                            <?php if ($_smarty_tpl->tpl_vars['row']->value['status']=='0'){?>
    								<i>Available.</i>
                        	<?php }elseif($_smarty_tpl->tpl_vars['row']->value['status']=='1'){?>
    							<?php if ($_smarty_tpl->tpl_vars['row']->value['status_id']==$_smarty_tpl->tpl_vars['userid']->value){?>
    
    									<i>Reserved by you.</i>
    
    							<?php }else{ ?>
    							
    									<i>Already Reserved.</i>
    
    							<?php }?>
    						<?php }elseif($_smarty_tpl->tpl_vars['row']->value['bfullname']!=''){?>
    							<?php if ($_smarty_tpl->tpl_vars['row']->value['boughtid']==$_smarty_tpl->tpl_vars['userid']->value){?>
    
    									<i>Bought by you.</i>
    
    							<?php }else{ ?>
    								<?php if ($_smarty_tpl->tpl_vars['opt']->value['anonymous_purchasing']){?>
    										<i>Bought.</i>
    
    								<?php }else{ ?>
    								
    										<i>Bought by <?php echo mb_convert_encoding(htmlspecialchars($_smarty_tpl->tpl_vars['row']->value['bfullname'], ENT_QUOTES, 'UTF-8', true), "HTML-ENTITIES", 'UTF-8');?>
.</i>
    
    								<?php }?>
    							<?php }?>
    						<?php }?>
                    </td>                                              
                <tr>    
  
             </table>
                   
            </div>
            </td>
            
        <?php $_smarty_tpl->tpl_vars['count'] = new Smarty_variable($_smarty_tpl->tpl_vars['count']->value+1, null, 0);?>
        <?php if ($_smarty_tpl->tpl_vars['count']->value%4==0){?>
            </tr>
        <?php }?>

        
        <?php } ?>                                          
</table> 



	<?php echo $_smarty_tpl->getSubTemplate ('navfoot.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array('isadmin'=>$_smarty_tpl->tpl_vars['isadmin']->value), 0);?>




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
<?php }} ?>