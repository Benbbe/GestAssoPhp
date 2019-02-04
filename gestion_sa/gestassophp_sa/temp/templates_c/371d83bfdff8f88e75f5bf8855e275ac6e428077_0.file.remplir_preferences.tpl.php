<?php
/* Smarty version 3.1.33, created on 2019-02-02 15:57:38
  from 'C:\dev\servers\wamp64\www\gestion\gestion_sa\gestassophp_sa\templates\admin\remplir_preferences.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5c55bdf24c6539_54308228',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '371d83bfdff8f88e75f5bf8855e275ac6e428077' => 
    array (
      0 => 'C:\\dev\\servers\\wamp64\\www\\gestion\\gestion_sa\\gestassophp_sa\\templates\\admin\\remplir_preferences.tpl',
      1 => 1538741881,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5c55bdf24c6539_54308228 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_checkPlugins(array(0=>array('file'=>'C:\\dev\\servers\\wamp64\\www\\gestion\\gestion_sa\\lib\\smarty\\plugins\\function.language.php','function'=>'smarty_function_language',),));
?>
	<header class="header_titre_aide"><a href='#' style="cursor:pointer;cursor:hand" onclick="javascript :window.open('../aide/a_admin_remplir_preferences.php','popup','height=450,toolbar=no,location=no,directories=no,status=yes,width=700,resizable=no,scrollbars=yes,top=10,left=10')"  title="<?php echo smarty_function_language(array('name'=>'title_aide'),$_smarty_tpl);?>
"><img src='../images/icones/help.gif' alt="Aide" width="20" height="20"/><?php echo smarty_function_language(array('name'=>'aide'),$_smarty_tpl);?>
</a></header> 

    <header class="header_titre">&nbsp;<?php echo smarty_function_language(array('name'=>'titre_admin_preferences'),$_smarty_tpl);?>
</header>
	<div class="ligne_coul"></div> 	
	<div id="contenu"> 
	<span class="TextenoirGras">&nbsp;</span>
	
	<ul id="tabnav">
	<?php if ($_smarty_tpl->tpl_vars['tab']->value == 1) {?> 
		
	<li class="active"><?php echo smarty_function_language(array('name'=>'titre_admin_preftab1'),$_smarty_tpl);?>
</li>
	<li><a href="remplir_preferences.php?tab=2"><?php echo smarty_function_language(array('name'=>'titre_admin_preftab2'),$_smarty_tpl);?>
</a></li>
	<li><a href="remplir_preferences.php?tab=3"><?php echo smarty_function_language(array('name'=>'titre_admin_preftab3'),$_smarty_tpl);?>
</a></li>	
	<li><a href="remplir_preferences.php?tab=4">Information version</a></li>	
	</ul>	
	<div id="tab1_table">
		<br />
<?php if (!empty($_smarty_tpl->tpl_vars['erreur_saisie']->value['champ'])) {?>		
	<?php if (count($_smarty_tpl->tpl_vars['erreur_saisie']->value['champ']) != 0) {?>
		<div id="erreur-box"><?php echo smarty_function_language(array('name'=>'tpl_texte_err_saisie'),$_smarty_tpl);?>
 ...<span class="erreur-Jaunerouge">&nbsp;<?php echo $_smarty_tpl->tpl_vars['erreur_saisie']->value['champ'];?>
</span>
		</div>	
	<?php }
}?>	
<form action="remplir_preferences.php" method="post" name="ma_form_tab2">		

	<label class="label_pref"><?php echo smarty_function_language(array('name'=>'pref_messagetitre'),$_smarty_tpl);?>
</label>
		<input type="text" name="messagetitre" id="messagetitre" title="<?php echo smarty_function_language(array('name'=>'pref_messagetitre_title'),$_smarty_tpl);?>
" value="<?php echo $_smarty_tpl->tpl_vars['preference_asso']->value['messagetitre'];?>
" size="50"  maxlength="75" tabindex="1" /><br />
	
	<label class="label_pref"><?php echo smarty_function_language(array('name'=>'pref_nom_asso_gestassophp'),$_smarty_tpl);?>
</label>	
		<input type="text" name="nom_asso_gestassophp" id="nom_asso_gestassophp" title="<?php echo smarty_function_language(array('name'=>'pref_nom_asso_gestassophp_title'),$_smarty_tpl);?>
" value="<?php echo $_smarty_tpl->tpl_vars['preference_asso']->value['nom_asso_gestassophp'];?>
" size="50"  maxlength="75" tabindex="2" /><br />
	
	<label class="label_pref"><?php echo smarty_function_language(array('name'=>'pref_date_debannee_asso'),$_smarty_tpl);?>
</label>		
		<input type="text" name="date_debannee_asso" id="date_debannee_asso" title="<?php echo smarty_function_language(array('name'=>'pref_date_debannee_asso_title'),$_smarty_tpl);?>
" value="<?php echo $_smarty_tpl->tpl_vars['preference_asso']->value['date_debannee_asso'];?>
" size="10"  maxlength="5" tabindex="3" /><br />
	
	<label class="label_pref"><?php echo smarty_function_language(array('name'=>'pref_nb_lignes_page'),$_smarty_tpl);?>
</label>		
		<input type="text" name="nb_lignes_page" id="nb_lignes_page" title="<?php echo smarty_function_language(array('name'=>'pref_nb_lignes_page_title'),$_smarty_tpl);?>
" value="<?php echo $_smarty_tpl->tpl_vars['preference_asso']->value['nb_lignes_page'];?>
" size="5"  maxlength="3" tabindex="4" /> 10, 20 ou 50<br />
	
	<label class="label_pref"><?php echo smarty_function_language(array('name'=>'pref_email_adresse'),$_smarty_tpl);?>
</label>		
		<input type="text" name="email_adresse" id="email_adresse" title="<?php echo smarty_function_language(array('name'=>'pref_email_adresse_title'),$_smarty_tpl);?>
" value="<?php echo $_smarty_tpl->tpl_vars['preference_asso']->value['email_adresse'];?>
" size="50"  maxlength="75" tabindex="5" /><?php if ($_smarty_tpl->tpl_vars['erreur_saisie']->value['email']) {?> <span class="erreur-Jaunerouge">&nbsp;<?php echo $_smarty_tpl->tpl_vars['erreur_saisie']->value['email'];?>
</span> <?php }?><br /><br />

	<div>&nbsp;&nbsp;&nbsp;<?php echo smarty_function_language(array('name'=>'pref_adherent_bene_info'),$_smarty_tpl);?>
</div>
	
	<label class="label_pref"><?php echo smarty_function_language(array('name'=>'pref_adherent_bene'),$_smarty_tpl);?>
</label>	
		<input type="text" name="adherent_bene" id="adherent_bene" title="<?php echo smarty_function_language(array('name'=>'pref_adherent_bene_title'),$_smarty_tpl);?>
" value="<?php echo $_smarty_tpl->tpl_vars['preference_asso']->value['adherent_bene'];?>
" size="30"  maxlength="40" tabindex="5" /><br /><br />

	
	<div>&nbsp;&nbsp;&nbsp;<?php echo smarty_function_language(array('name'=>'pref_lang_fiche_adht_ant_info'),$_smarty_tpl);?>
</div>
		
	<label class="label_pref"><?php echo smarty_function_language(array('name'=>'pref_lang_fiche_adht_ant'),$_smarty_tpl);?>
</label>		
		<input type="text" name="_lang_fiche_adht_ant" id="_lang_fiche_adht_ant" title="<?php echo smarty_function_language(array('name'=>'pref_lang_fiche_adht_ant_title'),$_smarty_tpl);?>
" value="<?php echo $_smarty_tpl->tpl_vars['preference_asso']->value['_lang_fiche_adht_ant'];?>
" size="30"  maxlength="40" tabindex="5" /><br /><br />
		

	<div>&nbsp;&nbsp;&nbsp;<?php echo smarty_function_language(array('name'=>'pref_lang_jma_fin_cotis_info'),$_smarty_tpl);?>
</div>
		
	<label class="label_pref"><?php echo smarty_function_language(array('name'=>'fiche_cotis_adht_date_fin'),$_smarty_tpl);?>
</label>	
		<input type="text" name="jma_fin_cotis" id="jm_fin_cotis" title="<?php echo smarty_function_language(array('name'=>'pref_lang_jma_fin_cotis_info'),$_smarty_tpl);?>
" value="<?php echo $_smarty_tpl->tpl_vars['preference_asso']->value['jma_fin_cotis'];?>
" size="12" maxlength="12" tabindex="6" /><?php if ($_smarty_tpl->tpl_vars['erreur_saisie']->value['date']) {?> <span class="erreur-Jaunerouge">&nbsp;<?php echo $_smarty_tpl->tpl_vars['erreur_saisie']->value['date'];?>
</span> <?php }?><br />
	
	<div class="centre-txt">
		<input type="submit" class="submit_ok" name="Valider" value="<?php echo smarty_function_language(array('name'=>'tpl_valid_button'),$_smarty_tpl);?>
" title="<?php echo smarty_function_language(array('name'=>'tpl_valid_button_title'),$_smarty_tpl);?>
"/>
			<input type="hidden" name="valid_tab1" value="validation_tab1"/>
			<a href="../admin/tableau_bord.php"><span class="submit_nul" title="<?php echo smarty_function_language(array('name'=>'tpl_cancel_button_title'),$_smarty_tpl);?>
	"><?php echo smarty_function_language(array('name'=>'tpl_cancel_button'),$_smarty_tpl);?>
</span></a></div>
			
</form>
	
	</div>
		
	
	<?php } elseif ($_smarty_tpl->tpl_vars['tab']->value == 2) {?>
		
    <li><a href="remplir_preferences.php"><?php echo smarty_function_language(array('name'=>'titre_admin_preftab1'),$_smarty_tpl);?>
</a></li>
    <li class="active"><?php echo smarty_function_language(array('name'=>'titre_admin_preftab2'),$_smarty_tpl);?>
</li>
	<li><a href="remplir_preferences.php?tab=3"><?php echo smarty_function_language(array('name'=>'titre_admin_preftab3'),$_smarty_tpl);?>
</a></li>
	<li><a href="remplir_preferences.php?tab=4">Information version</a></li>
	 </ul>
	 <div id="tab2_table">
		
	<div class="login-box_pripref">			
		<form action="remplir_preferences.php" method="post" name="ma_form_tab2">	
			<br />
			<label class="label_pripref"><?php echo smarty_function_language(array('name'=>'pref_new_designation'),$_smarty_tpl);?>
&nbsp;&nbsp; </label>		
				<input type="text" name="new_nom_type_antenne" id="new_nom_type_antenne" title="<?php echo smarty_function_language(array('name'=>'pref_new_designation_title'),$_smarty_tpl);?>
" value="<?php echo $_smarty_tpl->tpl_vars['new_antenne']->value['nom_type_antenne'];?>
" size="40"  maxlength="30" tabindex="1" placeholder="<?php echo smarty_function_language(array('name'=>'pref_new_designation_placeholder'),$_smarty_tpl);?>
"/>
				<?php if ($_smarty_tpl->tpl_vars['erreur_saisie']->value['nom_antenne'] != '') {?><br /> <span class="erreur-Jaunerouge"><?php echo $_smarty_tpl->tpl_vars['erreur_saisie']->value['nom_antenne'];?>
</span><?php }?>
		
			<div class="centre-txt"><br />
				<input type="submit" class="submit_ok" name="Valider" value="<?php echo smarty_function_language(array('name'=>'tpl_valid_button'),$_smarty_tpl);?>
" title="<?php echo smarty_function_language(array('name'=>'tpl_valid_button_title'),$_smarty_tpl);?>
"/>
				<input type="hidden" name="valid_tab2" value="validation_tab2"/>
				<input type="hidden" name="id_ant" value="<?php echo $_smarty_tpl->tpl_vars['new_antenne']->value['id_type_antenne'];?>
"/>			
				<input type="hidden" name="tab" value="2"/>	
			</div>

		</form>
	</div>
<br />
	 
	<table style="width:50%;" class="centre-txt">
		<tr>
			<td style="width:5%;">&nbsp;</td>
			<td style="width:35%;">&nbsp;</td>
			<td style="width:10%;">&nbsp;</td>
		</tr>
		<tr>
			<th class="LignegrisTC">
					<a href="remplir_preferences.php?tab=2&amp;tri=0" title="<?php echo smarty_function_language(array('name'=>'tpl_title_clictri'),$_smarty_tpl);?>
"><?php echo smarty_function_language(array('name'=>'tpl_col_num'),$_smarty_tpl);?>
</a>
					<?php if ($_SESSION['tri'] == 0) {?>
					<?php if ($_SESSION['tri_sens'] == 0) {?>
					<img src="../images/symboles/s_asc.png" width="11" height="9" alt="" title="<?php echo smarty_function_language(array('name'=>'tpl_title_clictri_up'),$_smarty_tpl);?>
"/>
					<?php } else { ?>
					<img src="../images/symboles/s_desc.png" width="11" height="9" alt="" title="<?php echo smarty_function_language(array('name'=>'tpl_title_clictri_down'),$_smarty_tpl);?>
"/>
					<?php }?>
					<?php } else { ?>
					<img src="../images/symboles/empty.png" width="7" height="7" alt=""/>
					<?php }?>
			</th>	

			<th class="LignegrisTC">
					<a href="remplir_preferences.php?tab=2&amp;tri=1" title="<?php echo smarty_function_language(array('name'=>'tpl_title_clictri'),$_smarty_tpl);?>
"><?php echo smarty_function_language(array('name'=>'pref_col_designation_activ'),$_smarty_tpl);?>
</a>
					<?php if ($_SESSION['tri'] == 1) {?>
					<?php if ($_SESSION['tri_sens'] == 0) {?>
					<img src="../images/symboles/s_asc.png" width="11" height="9" alt="" title="<?php echo smarty_function_language(array('name'=>'tpl_title_clictri_up'),$_smarty_tpl);?>
"/>
					<?php } else { ?>
					<img src="../images/symboles/s_desc.png" width="11" height="9" alt="" title="<?php echo smarty_function_language(array('name'=>'tpl_title_clictri_down'),$_smarty_tpl);?>
"/>
					<?php }?>
					<?php } else { ?>
					<img src="../images/symboles/empty.png" width="7" height="7" alt=""/>
					<?php }?>
			</th>
			<th class="LignegrisTC"><?php echo smarty_function_language(array('name'=>'tpl_col_actions'),$_smarty_tpl);?>

			</th>
		</tr>
<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['antenne']->value, 'item_antenne', false, 'ordre');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['ordre']->value => $_smarty_tpl->tpl_vars['item_antenne']->value) {
?>
			<tr class="Lignegris<?php echo $_smarty_tpl->tpl_vars['item_antenne']->value['coul'];?>
">
				<td><?php echo $_smarty_tpl->tpl_vars['item_antenne']->value['id_type_antenne'];?>
</td>						
				<td><?php echo $_smarty_tpl->tpl_vars['item_antenne']->value['nom_type_antenne'];?>
</td>
				
				<td class="centre-txt">
				<a href="../admin/remplir_preferences.php?tab=2&amp;modifant=1&amp;id_ant=<?php echo $_smarty_tpl->tpl_vars['item_antenne']->value['id_type_antenne'];?>
"><img src="../images/icones16/i_modif.png" width="16" height="16" alt="" title="<?php echo smarty_function_language(array('name'=>'pref_col_designation_modif_icon_title'),$_smarty_tpl);?>
"/></a></td>		
			</tr>
<?php
}
} else {
?>
			<tr>
				<td colspan="3"><?php echo smarty_function_language(array('name'=>'tpl_liste_vide'),$_smarty_tpl);?>
</td>
			</tr>
<?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
		<tr>
			<td colspan="3">&nbsp;</td>
		</tr>		
		<tr>
			<td class="centre-txt" colspan="3">
			<a href="../admin/remplir_preferences.php?tab=1"><span class="submit_nul" title="<?php echo smarty_function_language(array('name'=>'tpl_retour_button_title'),$_smarty_tpl);?>
"> <?php echo smarty_function_language(array('name'=>'tpl_retour_button'),$_smarty_tpl);?>
</span></a>
			</td>
		</tr>		
	</table>
	
	</div>	
	
<?php } elseif ($_smarty_tpl->tpl_vars['tab']->value == 3) {?>
		
	<li><a href="remplir_preferences.php?tab=1"><?php echo smarty_function_language(array('name'=>'titre_admin_preftab1'),$_smarty_tpl);?>
</a></li>
	<li><a href="remplir_preferences.php?tab=2"><?php echo smarty_function_language(array('name'=>'titre_admin_preftab2'),$_smarty_tpl);?>
</a></li> 
    <li class="active"><?php echo smarty_function_language(array('name'=>'titre_admin_preftab3'),$_smarty_tpl);?>
</li>
	<li><a href="remplir_preferences.php?tab=4">Information version</a></li>
	</ul>		
	<div id="tab3_table">
		
	<div class="login-box_pripref">	
	<br />	
	<form action="remplir_preferences.php" method="post" name="ma_form_tab3">			
		<label class="label_pripref"><?php echo smarty_function_language(array('name'=>'pref_new_designation'),$_smarty_tpl);?>
&nbsp;&nbsp; </label>		
			<input type="text" name="new_nom_type_cotisation" id="new_nom_type_cotisation" title="<?php echo smarty_function_language(array('name'=>'pref_new_designation_title'),$_smarty_tpl);?>
" value="<?php echo $_smarty_tpl->tpl_vars['new_type_cotisation']->value['nom_type_cotisation'];?>
" size="40"  maxlength="60" tabindex="1" placeholder="<?php echo smarty_function_language(array('name'=>'pref_col_designation_cotis_placeholder'),$_smarty_tpl);?>
"/>
			<?php if ($_smarty_tpl->tpl_vars['erreur_saisie']->value['nom_type_cotisation'] != '') {?><br /> <span class="erreur-Jaunerouge"><?php echo $_smarty_tpl->tpl_vars['erreur_saisie']->value['nom_type_cotisation'];?>
</span><?php }?>
			<br />
		<label class="label_pripref"><?php echo smarty_function_language(array('name'=>'pref_new_mont_cotisation'),$_smarty_tpl);?>
&nbsp;&nbsp; </label>		
			<input type="text" name="new_montant_cotisation" id="new_montant_cotisation" title="<?php echo smarty_function_language(array('name'=>'pref_new_mont_cotisation_title'),$_smarty_tpl);?>
" value="<?php echo $_smarty_tpl->tpl_vars['new_type_cotisation']->value['montant_cotisation'];?>
" size="35"  maxlength="10" tabindex="2" placeholder="<?php echo smarty_function_language(array('name'=>'pref_new_mont_cotisation_placeholder'),$_smarty_tpl);?>
"/>
			<?php if ($_smarty_tpl->tpl_vars['erreur_saisie']->value['montant_cotisation'] != '') {?><br /> <span class="erreur-Jaunerouge"><?php echo $_smarty_tpl->tpl_vars['erreur_saisie']->value['montant_cotisation'];?>
</span><?php }?>
		<div class="centre-txt"><br />
			<input type="submit" class="submit_ok" name="Valider" value="<?php echo smarty_function_language(array('name'=>'tpl_valid_button'),$_smarty_tpl);?>
" title="<?php echo smarty_function_language(array('name'=>'tpl_valid_button_title'),$_smarty_tpl);?>
"/>
			<input type="hidden" name="valid_tab3" value="validation_tab3"/> 
			<input type="hidden" name="id_typecotis" value="<?php echo $_smarty_tpl->tpl_vars['new_type_cotisation']->value['id_type_cotisation'];?>
"/>			
			<input type="hidden" name="tab" value="3"/>	
		</div>
	</form>
	</div>		
<br />
	<table style="width:60%;" class="centre-txt">
		<tr>
			<td style="width:5%;">&nbsp;</td>
			<td style="width:35%;">&nbsp;</td>
			<td style="width:15%;">&nbsp;</td>
			<td style="width:5%;">&nbsp;</td>
		</tr>
		<tr>
			<th class="LignegrisTC">
					<a href="remplir_preferences.php?tab=3&amp;tri=0" title="<?php echo smarty_function_language(array('name'=>'tpl_title_clictri'),$_smarty_tpl);?>
"><?php echo smarty_function_language(array('name'=>'tpl_col_num'),$_smarty_tpl);?>
</a>
					<?php if ($_SESSION['tri'] == 0) {?>
					<?php if ($_SESSION['tri_sens'] == 0) {?>
					<img src="../images/symboles/s_asc.png" width="11" height="9" alt="" title="<?php echo smarty_function_language(array('name'=>'tpl_title_clictri_up'),$_smarty_tpl);?>
"/>
					<?php } else { ?>
					<img src="../images/symboles/s_desc.png" width="11" height="9" alt="" title="<?php echo smarty_function_language(array('name'=>'tpl_title_clictri_down'),$_smarty_tpl);?>
"/>
					<?php }?>
					<?php } else { ?>
					<img src="../images/symboles/empty.png" width="7" height="7" alt=""/>
					<?php }?>
			</th>	

			<th class="LignegrisTC">
					<a href="remplir_preferences.php?tab=3&amp;tri=1" title="<?php echo smarty_function_language(array('name'=>'tpl_title_clictri'),$_smarty_tpl);?>
"><?php echo smarty_function_language(array('name'=>'pref_col_designation_cotis'),$_smarty_tpl);?>
</a>
					<?php if ($_SESSION['tri'] == 1) {?>
					<?php if ($_SESSION['tri_sens'] == 0) {?>
					<img src="../images/symboles/s_asc.png" width="11" height="9" alt="" title="<?php echo smarty_function_language(array('name'=>'tpl_title_clictri_up'),$_smarty_tpl);?>
"/>
					<?php } else { ?>
					<img src="../images/symboles/s_desc.png" width="11" height="9" alt="" title="<?php echo smarty_function_language(array('name'=>'tpl_title_clictri_down'),$_smarty_tpl);?>
"/>
					<?php }?>
					<?php } else { ?>
					<img src="../images/symboles/empty.png" width="7" height="7" alt=""/>
					<?php }?>
			</th>
			<th class="LignegrisTC"><?php echo smarty_function_language(array('name'=>'pref_col_mont_cotisation'),$_smarty_tpl);?>

			</th>
			<th class="LignegrisTC"><?php echo smarty_function_language(array('name'=>'tpl_col_actions'),$_smarty_tpl);?>

			</th>
		</tr>

<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['type_cotisation']->value, 'item_cotisation', false, 'ordre');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['ordre']->value => $_smarty_tpl->tpl_vars['item_cotisation']->value) {
?>
		<tr class="Lignegris<?php echo $_smarty_tpl->tpl_vars['item_cotisation']->value['coul'];?>
">
			<td><?php echo $_smarty_tpl->tpl_vars['item_cotisation']->value['id_type_cotisation'];?>
</td>						
			<td><?php echo $_smarty_tpl->tpl_vars['item_cotisation']->value['nom_type_cotisation'];?>
</td>
			<td><?php echo $_smarty_tpl->tpl_vars['item_cotisation']->value['montant_cotisation'];?>
</td>
			<td class="centre-txt">
				<a href="../admin/remplir_preferences.php?tab=3&amp;modifc=1&amp;id_typecotis=<?php echo $_smarty_tpl->tpl_vars['item_cotisation']->value['id_type_cotisation'];?>
"><img src="../images/icones16/i_modif.png" width="16" height="16" alt="" title="<?php echo smarty_function_language(array('name'=>'pref_col_designation_modif_icon_title'),$_smarty_tpl);?>
"/></a></td>	
		</tr>
<?php
}
} else {
?>
		<tr>
			<td colspan="4"><?php echo smarty_function_language(array('name'=>'tpl_liste_vide'),$_smarty_tpl);?>
</td>
		</tr>
<?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
		<tr>
			<td class="centre-txt" colspan="4">	
			<a href="../admin/remplir_preferences.php?tab=1"><span class="submit_nul" title="<?php echo smarty_function_language(array('name'=>'tpl_retour_button_title'),$_smarty_tpl);?>
"> <?php echo smarty_function_language(array('name'=>'tpl_retour_button'),$_smarty_tpl);?>
</span></a>
			</td>
		</tr>		
	</table>
	
	</div>	
	


<?php } else { ?>
		
	<li><a href="remplir_preferences.php?tab=1"><?php echo smarty_function_language(array('name'=>'titre_admin_preftab1'),$_smarty_tpl);?>
</a></li>
	<li><a href="remplir_preferences.php?tab=2"><?php echo smarty_function_language(array('name'=>'titre_admin_preftab2'),$_smarty_tpl);?>
</a></li>
	<li><a href="remplir_preferences.php?tab=2"><?php echo smarty_function_language(array('name'=>'titre_admin_preftab3'),$_smarty_tpl);?>
</a></li> 
    <li class="active">Information version</li>
	</ul>	
		<div class="centre-txt">
		<br />
			<a href="../admin/remplir_preferences.php?tab=1"><span class="submit_nul" title="<?php echo smarty_function_language(array('name'=>'tpl_retour_button_title'),$_smarty_tpl);?>
"> <?php echo smarty_function_language(array('name'=>'tpl_retour_button'),$_smarty_tpl);?>
</span></a>
		<br /><br />Votre version PHP : <?php echo $_smarty_tpl->tpl_vars['PHPVersion']->value;?>
<br />	
		</div>	
	<div id="tab4_table">
	
	<div class="version">
	<h4> Version : <?php echo $_smarty_tpl->tpl_vars['version']->value;?>
</h4>
	</div>
	<!--p class='file'><?php echo $_smarty_tpl->tpl_vars['changelogfilename']->value;?>
</p -->

    <div class="changelog">
        <?php echo $_smarty_tpl->tpl_vars['changelog']->value;?>

    </div>
	
		<div class="centre-txt">
			<a href="../admin/remplir_preferences.php?tab=1"><span class="submit_nul" title="<?php echo smarty_function_language(array('name'=>'tpl_retour_button_title'),$_smarty_tpl);?>
"> <?php echo smarty_function_language(array('name'=>'tpl_retour_button'),$_smarty_tpl);?>
</span></a>
		</div>
	</div>	
		
<?php }?>	
 
	</div>  
<?php }
}
