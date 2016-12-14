<?php /* Smarty version Smarty-3.1.12, created on 2016-02-29 14:21:05
         compiled from "./templates/item.tpl" */ ?>
<?php /*%%SmartyHeaderCode:1558292658568d546e3bd081-55979811%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '356b4d9ea0b84973ab1dfd39a921cf3abf5963b4' => 
    array (
      0 => './templates/item.tpl',
      1 => 1456754295,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1558292658568d546e3bd081-55979811',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.12',
  'unifunc' => 'content_568d546e4abdc5_03462055',
  'variables' => 
  array (
    'isadmin' => 0,
    'opt' => 0,
    'action' => 0,
    'haserror' => 0,
    'itemid' => 0,
    'description_error' => 0,
    'description' => 0,
    'category_error' => 0,
    'category' => 0,
    'categories' => 0,
    'row' => 0,
    'price_error' => 0,
    'price' => 0,
    'source_error' => 0,
    'source' => 0,
    'ranking_error' => 0,
    'ranks' => 0,
    'ranking' => 0,
    'url_error' => 0,
    'url' => 0,
    'image_filename' => 0,
    'comment' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_568d546e4abdc5_03462055')) {function content_568d546e4abdc5_03462055($_smarty_tpl) {?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN"> 
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

        <?php echo $_smarty_tpl->getSubTemplate ('navbar.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array('isadmin'=>$_smarty_tpl->tpl_vars['isadmin']->value), 0);?>


    	<?php if ($_smarty_tpl->tpl_vars['opt']->value['show_helptext']){?>
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
    	<?php }?>
    	<div class="row">
    		<div class="medium-form">
    		
    			<form name="itemform" id="itemform" method="POST" action="item.php" enctype="multipart/form-data" class="well form-horizontal">
    				                        		   
        		    <h3> <?php if ($_smarty_tpl->tpl_vars['action']->value=='edit'||(isset($_smarty_tpl->tpl_vars['haserror']->value)&&$_smarty_tpl->tpl_vars['action']->value=='update')){?>Edit Item<?php }else{ ?>Add Item<?php }?></h3>
        		    
    				<fieldset>
    					<?php if ($_smarty_tpl->tpl_vars['action']->value=='edit'||(isset($_smarty_tpl->tpl_vars['haserror']->value)&&$_smarty_tpl->tpl_vars['action']->value=='update')){?>
    						<input type="hidden" name="itemid" value="<?php echo $_smarty_tpl->tpl_vars['itemid']->value;?>
">
    						<input type="hidden" name="action" value="update">
    					<?php }elseif($_smarty_tpl->tpl_vars['action']->value=="add"||(isset($_smarty_tpl->tpl_vars['haserror']->value)&&$_smarty_tpl->tpl_vars['action']->value=='insert')){?>
    						<input type="hidden" name="action" value="insert">
    					<?php }?>
    					<div class="control-group <?php if (isset($_smarty_tpl->tpl_vars['description_error']->value)){?>warning<?php }?>">
    						<label class="control-label" for="description">Description</label>
    						<div class="controls">
    							<input id="description" name="description" type="text" value="<?php echo mb_convert_encoding(htmlspecialchars($_smarty_tpl->tpl_vars['description']->value, ENT_QUOTES, 'UTF-8', true), "HTML-ENTITIES", 'UTF-8');?>
" class="input-xlarge" placeholder="Description" maxlength="255">
    							<?php if (isset($_smarty_tpl->tpl_vars['description_error']->value)){?>
    								<span class="help-inline"><?php echo $_smarty_tpl->tpl_vars['description_error']->value;?>
</span>
    							<?php }?>
    						</div>
    					</div>
    					<div class="control-group <?php if (isset($_smarty_tpl->tpl_vars['category_error']->value)){?>warning<?php }?>">
    						<label class="control-label" for="category">Category</label>
    						<div class="controls">
    							<select id="category" name="category" class="input-xlarge">
    								<option value="" <?php if ($_smarty_tpl->tpl_vars['category']->value==null){?>SELECTED<?php }?>>Uncategorized</option>
    								<?php  $_smarty_tpl->tpl_vars['row'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['row']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['categories']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['row']->key => $_smarty_tpl->tpl_vars['row']->value){
$_smarty_tpl->tpl_vars['row']->_loop = true;
?>
    									<option value="<?php echo $_smarty_tpl->tpl_vars['row']->value['categoryid'];?>
" <?php if ($_smarty_tpl->tpl_vars['row']->value['categoryid']==$_smarty_tpl->tpl_vars['category']->value){?>SELECTED<?php }?>><?php echo mb_convert_encoding(htmlspecialchars($_smarty_tpl->tpl_vars['row']->value['category'], ENT_QUOTES, 'UTF-8', true), "HTML-ENTITIES", 'UTF-8');?>
</option>
    								<?php } ?>
    							</select>
    							<?php if (isset($_smarty_tpl->tpl_vars['category_error']->value)){?>
    								<span class="help-inline"><?php echo $_smarty_tpl->tpl_vars['category_error']->value;?>
</span>
    							<?php }?>
    						</div>
    					</div>
    					<div class="control-group <?php if (isset($_smarty_tpl->tpl_vars['price_error']->value)){?>warning<?php }?>">
    						<label class="control-label" for="price">Price (<?php echo $_smarty_tpl->tpl_vars['opt']->value['currency_symbol'];?>
)</label>
    						<div class="controls">
    							<input id="price" name="price" type="text" value="<?php echo mb_convert_encoding(htmlspecialchars($_smarty_tpl->tpl_vars['price']->value, ENT_QUOTES, 'UTF-8', true), "HTML-ENTITIES", 'UTF-8');?>
" class="input-xlarge" placeholder="0.00">
    							<?php if (isset($_smarty_tpl->tpl_vars['price_error']->value)){?>
    								<span class="help-inline"><?php echo $_smarty_tpl->tpl_vars['price_error']->value;?>
</span>
    							<?php }?>
    						</div>
    					</div>
    					<div class="control-group <?php if (isset($_smarty_tpl->tpl_vars['source_error']->value)){?>warning<?php }?>">
    						<label class="control-label" for="source">Store/Retailer</label>
    						<div class="controls">
    							<input id="source" name="source" type="text" value="<?php echo mb_convert_encoding(htmlspecialchars($_smarty_tpl->tpl_vars['source']->value, ENT_QUOTES, 'UTF-8', true), "HTML-ENTITIES", 'UTF-8');?>
" class="input-xlarge" maxlength="255" placeholder="Source">
    							<?php if (isset($_smarty_tpl->tpl_vars['source_error']->value)){?>
    								<span class="help-inline"><?php echo $_smarty_tpl->tpl_vars['source_error']->value;?>
</span>
    							<?php }?>
    						</div>
    					</div>
    					<div class="control-group <?php if (isset($_smarty_tpl->tpl_vars['ranking_error']->value)){?>warning<?php }?>">
    						<label class="control-label" for="ranking">Ranking</label>
    						<div class="controls">
    							<select id="ranking" name="ranking" multiple="multiple" class="input-xlarge">
    								<?php  $_smarty_tpl->tpl_vars['row'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['row']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['ranks']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['row']->key => $_smarty_tpl->tpl_vars['row']->value){
$_smarty_tpl->tpl_vars['row']->_loop = true;
?>
    									<option value="<?php echo $_smarty_tpl->tpl_vars['row']->value['ranking'];?>
" <?php if ($_smarty_tpl->tpl_vars['row']->value['ranking']==$_smarty_tpl->tpl_vars['ranking']->value){?>SELECTED<?php }?>><?php echo $_smarty_tpl->tpl_vars['row']->value['title'];?>
</option>
    								<?php } ?>
    							</select>
    							<?php if (isset($_smarty_tpl->tpl_vars['ranking_error']->value)){?>
    								<span class="help-inline"><?php echo $_smarty_tpl->tpl_vars['ranking_error']->value;?>
</span>
    							<?php }?>
    						</div>
    					</div>
    					<div class="control-group <?php if (isset($_smarty_tpl->tpl_vars['url_error']->value)){?>warning<?php }?>">
    						<label class="control-label" for="url">URL (optional)</label>
    						<div class="controls">
    							<input id="url" name="url" type="text" value="<?php echo mb_convert_encoding(htmlspecialchars($_smarty_tpl->tpl_vars['url']->value, ENT_QUOTES, 'UTF-8', true), "HTML-ENTITIES", 'UTF-8');?>
" class="input-xlarge" maxlength="255">
    							<?php if (isset($_smarty_tpl->tpl_vars['url_error']->value)){?>
    								<span class="help-inline"><?php echo $_smarty_tpl->tpl_vars['url_error']->value;?>
</span>
    							<?php }?>
    						</div>
    					</div>
    					<?php if ($_smarty_tpl->tpl_vars['opt']->value['allow_images']){?>
    						<div class="control-group">
    							<label class="control-label" for="image">Image (optional)</label>
    							<div class="controls">
    								<?php if ($_smarty_tpl->tpl_vars['image_filename']->value==''){?>
    									<input type="radio" name="image" value="none" CHECKED>
    									No image.<br />
    									<input type="radio" name="image" value="upload" id="ifnew">
    									Upload image:
    									<input type="file" id="imagefile" name="imagefile">
    								<?php }else{ ?>
    									<input type="radio" name="image" value="remove">
    									Remove existing image.<br />
    									<input type="radio" name="image" value="keep" CHECKED>
    									Keep existing image.<br />
    									<input type="radio" name="image" value="replace" id="ifreplace">
    									Replace existing image:
    									<input type="file" id="imagefile" name="imagefile">
    								<?php }?>
    							</div>
    						</div>
    					<?php }?>
    					<div class="control-group">
    						<label class="control-label" for="comment">Comment</label>
    						<div class="controls">
    							<textarea id="comment" name="comment" class="input-xlarge" rows="2" cols="40"><?php echo mb_convert_encoding(htmlspecialchars($_smarty_tpl->tpl_vars['comment']->value, ENT_QUOTES, 'UTF-8', true), "HTML-ENTITIES", 'UTF-8');?>
</textarea>
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

        <?php echo $_smarty_tpl->getSubTemplate ('navfoot.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array('isadmin'=>$_smarty_tpl->tpl_vars['isadmin']->value), 0);?>


</body>

</html>
<?php }} ?>