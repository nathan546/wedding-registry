<?php /* Smarty version Smarty-3.1.12, created on 2016-02-29 13:41:28
         compiled from "./templates/navbar.tpl" */ ?>
<?php /*%%SmartyHeaderCode:404482004568d545478dc79-62213141%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'aaf88da39002887dcd3ce29c16569ab30c732e2f' => 
    array (
      0 => './templates/navbar.tpl',
      1 => 1456753276,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '404482004568d545478dc79-62213141',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.12',
  'unifunc' => 'content_568d54547922b1_10999333',
  'variables' => 
  array (
    'partyName' => 0,
    'isuser' => 0,
    'isadmin' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_568d54547922b1_10999333')) {function content_568d54547922b1_10999333($_smarty_tpl) {?><div class="stickyFooterWrapper1">

		<div class="stickyFooterWrapper2">

        		<div class="header-menu">
        		
        			<div class="header-logo"><?php echo $_smarty_tpl->tpl_vars['partyName']->value;?>
</div>
        			
        			<ul>	
        			
        				<?php if ($_smarty_tpl->tpl_vars['isuser']->value){?>			
        				<li class="header-solobutton">
        					<a href="login.php?action=logout">
        						<div class="header-buttoninner">
        							Logout
        						</div>
        					</a>
        				</li>
        
        				<li class="header-solobutton">
        					<a href="profile.php">
        						<div class="header-buttoninner">
        							Update Profile
        						</div>
        					</a>
        				</li>
        				
        			     <li class="header-solobutton">
        					<a href="rsvp.php">
        						<div class="header-buttoninner">
        							RSVP
        						</div>
        					</a>
        				</li>
        				
        			     <li class="header-solobutton">
        					<a href="registry.php">
        						<div class="header-buttoninner">
        							Gift Registry
        						</div>
        					</a>
        				</li>
        				
        				<li class="header-solobutton">
        					<a href="proposal.php">
        						<div class="header-buttoninner">
        							Proposal
        						</div>
        					</a>
        				</li>
        				
        				<li class="header-solobutton">
        					<a href="info.php">
        						<div class="header-buttoninner">
        							Info
        						</div>
        					</a>
        				</li>	
        				
        				<li class="header-solobutton">
        					<a href="index.php">
        						<div class="header-buttoninner">
        							Home
        						</div>
        					</a>
        				</li>	
        								
        				<?php }?>
        				
                        <?php if ($_smarty_tpl->tpl_vars['isadmin']->value){?>
            				<li class="header-button">
            					<a>
            						<div style="border: 0px">
            							<div class="header-buttoninner">
            								Admin
            							</div>
            	
            							<ul>
            							<li><a href=""></a></li>
            								<a href="users.php"><li class="header-subbutton">Manage Users</li></a>
            								<a href="categories.php"><li class="header-subbutton">Manage Categories</li></a>
            								<a href="ranks.php"><li class="header-subbutton">Manage Ranks</li></a>
            								<a href="wedding_info.php"><li class="header-subbutton">Manage Wedding</li></a>
            								<a href="item.php?action=add"><li class="header-subbutton">Add registry item</li></a>
            							</ul>
            
            						</div>
            					</a>				
            				</li>
                        <?php }?>
        				
        				<li class="header-solobutton">
        					<div>
        					</div>
        				</li>
        				
        			</ul>
        		</div>

			<div class="body-div">
			
            	<div class="container" style="padding-top: 30px;">

<?php }} ?>