<?php
/* Smarty version 3.1.33, created on 2019-02-02 15:56:20
  from 'C:\dev\servers\wamp64\www\gestion\gestion_sa\gestassophp_sa\install\install_3.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5c55bda49d3a08_06943435',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '6123f067587730f1c48fb76b60e60fb8cada4fd9' => 
    array (
      0 => 'C:\\dev\\servers\\wamp64\\www\\gestion\\gestion_sa\\gestassophp_sa\\install\\install_3.tpl',
      1 => 1451833508,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5c55bda49d3a08_06943435 (Smarty_Internal_Template $_smarty_tpl) {
?> 
    <div id="titre">&nbsp;<?php echo $_smarty_tpl->tpl_vars['messagetitre']->value;?>
</div>
	<div class="ligne_coul"></div> 	
	<div id="contenu">  	<br /><br />
  
   	<?php if ($_smarty_tpl->tpl_vars['valid_file_config']->value == "non") {?><span class='erreur-Jaunerouge'> <?php echo $_smarty_tpl->tpl_vars['message_file_config']->value;?>
 </span>
  	<br /><br /><br />
	<?php }?>
   	
 
   	<?php if ($_smarty_tpl->tpl_vars['valid_file_config']->value == "oui") {?>
	<span class='TextenoirGras'><?php echo $_smarty_tpl->tpl_vars['message_file_config']->value;?>
</span> 	<br /><br /><br />
	<?php }?>	
 

	<?php if ($_smarty_tpl->tpl_vars['valid_bd_config']->value == "non") {?>
	 &nbsp;&nbsp;&nbsp;&nbsp;Installation tables <br />
	<span class='erreur-Jaunerouge'> <?php echo $_smarty_tpl->tpl_vars['message_bd_config']->value;?>
 </span>	
	<br /><br /><br />
	<div class='login-box'><a href='index.php'><span class='submit_nul' title='Annuler'>Annuler</span></a></div>
	<?php }?>
   
	<?php if ($_smarty_tpl->tpl_vars['valid_bd_sql']->value == "non") {?><span class='erreur-Jaunerouge'><?php echo $_smarty_tpl->tpl_vars['message_bd_config']->value;?>
</span><br />
		<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['message_bd']->value, 'item_message_bd', false, 'ordre');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['ordre']->value => $_smarty_tpl->tpl_vars['item_message_bd']->value) {
?>
		<?php echo $_smarty_tpl->tpl_vars['item_message_bd']->value;?>

		<?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
	<br /><br /><br />	
	<div class="centre-txt"><br /><a href='index.php'><span class='submit_nul' title='Annuler'>Annuler</span></a><br /><br /></div>			
	<?php }?>	
   	


	<?php if ($_smarty_tpl->tpl_vars['valid_bd_sql']->value == 'oui') {?>  		&nbsp;&nbsp;&nbsp;&nbsp;Installation tables <br />
		<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['message_bd']->value, 'item_message_bd', false, 'ordre');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['ordre']->value => $_smarty_tpl->tpl_vars['item_message_bd']->value) {
?>
		<?php echo $_smarty_tpl->tpl_vars['item_message_bd']->value;?>

		<?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
  	<br /><span class='TextenoirGras'><?php echo $_smarty_tpl->tpl_vars['message_bd_config']->value;?>
</span><br /><br />
	<?php }?>	
	
  	<?php if ($_smarty_tpl->tpl_vars['valid_file_config']->value == "oui" && $_smarty_tpl->tpl_vars['valid_bd_sql']->value == 'oui') {?>
		<br /><div class="centre-txt"><br /><form method="post" name="installation" action="install_4.php">		<input type="submit" class="submit_ok" name="Continuer" value="Continuer" title="Continuer"/>
			<input type='hidden' name='valid3' value='valid3'/>	
		</form><br /></div> 
	<?php }?>	 

</div>
    <?php }
}
