<?php
/* Smarty version 3.1.33, created on 2019-02-02 16:02:38
  from 'C:\dev\servers\wamp64\www\gestion\gestion_sa\gestassophp_sa\templates\adherent\consulter_info_fichiermission_adht.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5c55bf1e7b13e1_57714106',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '2b2e43f0e17dc156b2f85e1c76044aa8ec261adb' => 
    array (
      0 => 'C:\\dev\\servers\\wamp64\\www\\gestion\\gestion_sa\\gestassophp_sa\\templates\\adherent\\consulter_info_fichiermission_adht.tpl',
      1 => 1451833508,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5c55bf1e7b13e1_57714106 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_checkPlugins(array(0=>array('file'=>'C:\\dev\\servers\\wamp64\\www\\gestion\\gestion_sa\\lib\\smarty\\plugins\\function.language.php','function'=>'smarty_function_language',),));
?>
<table style="width:100%;">
	<tr> 
		<th class="LignegrisTC" colspan="2"><?php echo smarty_function_language(array('name'=>'titre_fichier_missions'),$_smarty_tpl);?>
</th> 
	</tr>
	<tr> 
	<td class="LignegrisTC " style="width:40%;">
	<?php echo smarty_function_language(array('name'=>'liste_fichiers_col_nomfichier'),$_smarty_tpl);?>

	</td>
	<td class="LignegrisTC "> 
	&nbsp;&nbsp;&nbsp;<?php echo smarty_function_language(array('name'=>'tpl_col_description'),$_smarty_tpl);?>

	</td> 
	</tr> 
		<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['fichier']->value, 'item_fichier', false, 'ordre');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['ordre']->value => $_smarty_tpl->tpl_vars['item_fichier']->value) {
?>
		<?php if ($_smarty_tpl->tpl_vars['priorite_adht']->value > 4) {?> 			<tr class="Lignegris<?php echo $_smarty_tpl->tpl_vars['item_fichier']->value['coul'];?>
">
			<td style="width:40%;">
			<a href="../adherent/liste_fichiers_adht.php?filtre_nom=<?php echo $_smarty_tpl->tpl_vars['adherent_nomfiltre']->value;?>
" title="<?php echo smarty_function_language(array('name'=>'titre_admin_liste_fichiers_adht'),$_smarty_tpl);?>
"><?php echo $_smarty_tpl->tpl_vars['item_fichier']->value['nom_file_adht'];?>
</a></td>
			<td>&nbsp;&nbsp;&nbsp;<?php echo $_smarty_tpl->tpl_vars['item_fichier']->value['design_file_adht'];?>
</td>
			</tr>	
		<?php } elseif ($_smarty_tpl->tpl_vars['priorite_adht']->value == 1 || $_smarty_tpl->tpl_vars['priorite_adht']->value == 4) {?>			<tr class="Lignegris<?php echo $_smarty_tpl->tpl_vars['item_fichier']->value['coul'];?>
">
			<td style="width:40%;">
			<a href="../adherent/liste_fichiers_adht.php?fichier_adht=1&amp;id_file_adht=<?php echo $_smarty_tpl->tpl_vars['item_fichier']->value['id_file_adht'];?>
" title="<?php echo smarty_function_language(array('name'=>'liste_fichiers_adht_download_file_icon_title'),$_smarty_tpl);?>
"><?php echo $_smarty_tpl->tpl_vars['item_fichier']->value['nom_file_adht'];?>
</a> </td>
			<td>&nbsp;&nbsp;&nbsp;<?php echo $_smarty_tpl->tpl_vars['item_fichier']->value['design_file_adht'];?>
</td>
			</tr>
		<?php }?>	
<?php
}
} else {
?>
		<tr class="Lignegris<?php echo $_smarty_tpl->tpl_vars['item_fichier']->value['coul'];?>
">
		<td colspan="2">
		&nbsp;&nbsp;<?php echo smarty_function_language(array('name'=>'tpl_liste_vide'),$_smarty_tpl);?>
 ...
		</td>
		</tr>
<?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
	<tr>
		<td class="LignegrisC" colspan="2">&nbsp;</td>
	</tr>
	</table>
	
 <?php }
}
