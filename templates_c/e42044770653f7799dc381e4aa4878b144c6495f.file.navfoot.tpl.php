<?php /* Smarty version Smarty-3.1.12, created on 2016-02-15 17:24:30
         compiled from "./templates/navfoot.tpl" */ ?>
<?php /*%%SmartyHeaderCode:201121831556a7b1f52c0a83-88321134%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'e42044770653f7799dc381e4aa4878b144c6495f' => 
    array (
      0 => './templates/navfoot.tpl',
      1 => 1455557068,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '201121831556a7b1f52c0a83-88321134',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.12',
  'unifunc' => 'content_56a7b1f52c1fb4_92703400',
  'variables' => 
  array (
    'isuser' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_56a7b1f52c1fb4_92703400')) {function content_56a7b1f52c1fb4_92703400($_smarty_tpl) {?></div>         	
</div>			
</div>			
</div>

<script src="lightbox2/js/lightbox.min.js"></script>

<div class="footer-bytefull">

			<div class="footer-links-body">
			
				<?php if ($_smarty_tpl->tpl_vars['isuser']->value){?>	
				<div class="footer-links-content">
				    <a href="info.php">Info</a> |
				    <a href="proposal.php">Proposal</a> |
				    <a href="registry.php">Gift Registry</a> |
				    <a href="rsvp.php">RSVP</a> |
				    <a href="profile.php">Update Profile</a> |
					<a href="login.php?action=logout">Logout</a>

				</div>
				<?php }?>
				
				<div class="footer-text">
					&#169;Nathan Barrett 2016
				</div>

			</div>


</div>
<?php }} ?>