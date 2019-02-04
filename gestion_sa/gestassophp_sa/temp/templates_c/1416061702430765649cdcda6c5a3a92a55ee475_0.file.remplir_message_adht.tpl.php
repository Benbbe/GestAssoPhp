<?php
/* Smarty version 3.1.33, created on 2019-02-02 21:07:47
  from 'C:\dev\servers\wamp64\www\gestion\gestion_sa\gestassophp_sa\templates\adherent\remplir_message_adht.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5c5606a32ac987_70877987',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '1416061702430765649cdcda6c5a3a92a55ee475' => 
    array (
      0 => 'C:\\dev\\servers\\wamp64\\www\\gestion\\gestion_sa\\gestassophp_sa\\templates\\adherent\\remplir_message_adht.tpl',
      1 => 1509380402,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5c5606a32ac987_70877987 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_checkPlugins(array(0=>array('file'=>'C:\\dev\\servers\\wamp64\\www\\gestion\\gestion_sa\\lib\\smarty\\plugins\\function.language.php','function'=>'smarty_function_language',),));
?>
	<header class="header_titre_aide"><a href='#' style="cursor:pointer;cursor:hand" onclick="javascript :window.open('../aide/a_adht_remplir_message_adht.php','popup','height=200,toolbar=no,location=no,directories=no,status=yes,width=660,resizable=no,scrollbars=yes,top=10,left=10')" title="<?php echo smarty_function_language(array('name'=>'title_aide'),$_smarty_tpl);?>
"><img src='../images/icones/help.gif' alt="Aide" width="20" height="20"/><?php echo smarty_function_language(array('name'=>'aide'),$_smarty_tpl);?>
</a></header> 

    <header class="header_titre">&nbsp;<?php echo smarty_function_language(array('name'=>'titre_mailto_adht'),$_smarty_tpl);?>
</header>
	<div class="ligne_coul"></div> 	
	<div id="contenu">  	<br />
<?php if (!empty($_smarty_tpl->tpl_vars['erreur_saisie']->value)) {?>
	<?php if (count($_smarty_tpl->tpl_vars['erreur_saisie']->value) != 0) {?>
		<div id="erreur-box"> <?php echo smarty_function_language(array('name'=>'tpl_texte_err_saisie'),$_smarty_tpl);?>

		</div>	
	<?php }?>	
<?php }?>		
	    <form method="post" name="maform" action="remplir_message_adht.php">
    	<table style="width:98%;">
		<tr>		
			<td>&nbsp;</td>
			<td>&nbsp;</td>
		</tr>		
		<tr>
			<th class="LignegrisRight"> <?php echo smarty_function_language(array('name'=>'mailto_dest_adht'),$_smarty_tpl);?>
 &nbsp;&nbsp; </th>		
			<td><input type="text" name="email_adht" id="email_adht" title="<?php echo smarty_function_language(array('name'=>'fiche_adht_mail_title'),$_smarty_tpl);?>
" value="<?php echo $_smarty_tpl->tpl_vars['data_adherent']->value['email_adht'];?>
" size="65"  maxlength="50" tabindex="1" <?php echo $_smarty_tpl->tpl_vars['disabled']->value['email_adht'];?>
 /></td>
		</tr>
		<tr>
			<th class="LignegrisRight"> <?php echo smarty_function_language(array('name'=>'mailto_emmet_adht'),$_smarty_tpl);?>
 &nbsp;&nbsp;</th>		
			<td><input type="text" name="email_emmet" id="email_emmet" title="<?php echo smarty_function_language(array('name'=>'fiche_adht_web_title'),$_smarty_tpl);?>
" value="<?php echo $_smarty_tpl->tpl_vars['email_emmet']->value;?>
" size="65"  maxlength="50" tabindex="2" <?php echo $_smarty_tpl->tpl_vars['disabled']->value['email_emmet'];?>
 /></td>
		</tr>
		<tr>
			<th class="LignegrisRight_Oblig"> <?php echo smarty_function_language(array('name'=>'mailto_sujet_adht'),$_smarty_tpl);?>
 &nbsp;&nbsp;</th>		
			<td><input type="text" name="email_sujet" id="email_sujet" title="<?php echo smarty_function_language(array('name'=>'message_remplir_err_sujet_mail'),$_smarty_tpl);?>
" value="<?php echo $_smarty_tpl->tpl_vars['email_sujet']->value;?>
" size="65"  maxlength="50" tabindex="3" /><?php if ($_smarty_tpl->tpl_vars['erreur_saisie']->value['email_sujet']) {?> <span class="erreur-Jaunerouge">&nbsp;<?php echo $_smarty_tpl->tpl_vars['erreur_saisie']->value['email_sujet'];?>
</span> <?php }?></td>
		</tr>
			<tr> 
			<th class="LignegrisRight_Oblig"><?php echo smarty_function_language(array('name'=>'mailto_message_adht'),$_smarty_tpl);?>
 &nbsp;&nbsp;</th>  
		<td><textarea cols="80" rows="10" name="email_message" id="email_message" title="<?php echo smarty_function_language(array('name'=>'message_remplir_err_message_mail'),$_smarty_tpl);?>
"  tabindex="4"><?php echo $_smarty_tpl->tpl_vars['email_message']->value;?>
</textarea><?php if ($_smarty_tpl->tpl_vars['erreur_saisie']->value['email_message']) {?><br /> <span class="erreur-Jaunerouge">&nbsp;<?php echo $_smarty_tpl->tpl_vars['erreur_saisie']->value['email_message'];?>
</span> <?php }?></td>
		</tr>	
		<tr>		
			<td>&nbsp;</td>
			<td>&nbsp;</td>
		</tr>
		<tr>		
			<td class="TexterougeR">&nbsp;&nbsp;&nbsp;<?php echo smarty_function_language(array('name'=>'tpl_texte_oblig'),$_smarty_tpl);?>
</td>
			<td>&nbsp;</td>
		</tr>

		<tr>
			<th colspan="2">
			<input type="submit" class="submit_ok" name="Valider" value="<?php echo smarty_function_language(array('name'=>'tpl_enoyermail_button'),$_smarty_tpl);?>
" title="<?php echo smarty_function_language(array('name'=>'tpl_enoyermail_button_title'),$_smarty_tpl);?>
"/>
			
			<input type="hidden" name="valid" value="valid"/>
			<input type="hidden" name="id_adht" value="<?php echo $_smarty_tpl->tpl_vars['id_adht']->value;?>
"/>
			<input type="hidden" name="email_adht" value="<?php echo $_smarty_tpl->tpl_vars['data_adherent']->value['email_adht'];?>
"/>	
			<input type="hidden" name="email_emmet" value="<?php echo $_smarty_tpl->tpl_vars['email_emmet']->value;?>
"/>				
			<input type="hidden" name="pnom_admin" value="<?php echo $_smarty_tpl->tpl_vars['pnom_admin']->value;?>
"/>			
			<a href="../adherent/gerer_fiche_adht.php?id_adht=<?php echo $_smarty_tpl->tpl_vars['id_adht']->value;?>
"><span class="submit_nul" title="<?php echo smarty_function_language(array('name'=>'tpl_cancel_button_title'),$_smarty_tpl);?>
"><?php echo smarty_function_language(array('name'=>'tpl_cancel_button'),$_smarty_tpl);?>
</span></a>			
			</th>
		</tr>
     </table></form>
		 
	 

		
	 
	</div>  
<?php }
}
