<?php
/* Smarty version 3.1.33, created on 2019-02-02 16:01:39
  from 'C:\dev\servers\wamp64\www\gestion\gestion_sa\gestassophp_sa\templates\adherent\remplir_infogene_adht.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5c55bee3792fd4_25811577',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '14b3b045912ce5e8e31386b3b4a9b151b6a8b658' => 
    array (
      0 => 'C:\\dev\\servers\\wamp64\\www\\gestion\\gestion_sa\\gestassophp_sa\\templates\\adherent\\remplir_infogene_adht.tpl',
      1 => 1518201965,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5c55bee3792fd4_25811577 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_checkPlugins(array(0=>array('file'=>'C:\\dev\\servers\\wamp64\\www\\gestion\\gestion_sa\\lib\\smarty\\plugins\\function.language.php','function'=>'smarty_function_language',),1=>array('file'=>'C:\\dev\\servers\\wamp64\\www\\gestion\\gestion_sa\\lib\\smarty\\plugins\\function.html_options.php','function'=>'smarty_function_html_options',),));
?>
	<header class="header_titre_aide"><a href='#' style="cursor:pointer;cursor:hand" onclick="javascript :window.open('../aide/a_adht_remplir_infogene_adht.php','popup','height=450,toolbar=no,location=no,directories=no,status=yes,width=660,resizable=no,scrollbars=yes,top=10,left=10')" title="<?php echo smarty_function_language(array('name'=>'title_aide'),$_smarty_tpl);?>
"><img src='../images/icones/help.gif' alt="Aide" width="20" height="20"/><?php echo smarty_function_language(array('name'=>'aide'),$_smarty_tpl);?>
</a></header> 
<?php echo '<script'; ?>
 type="text/javascript" src="../js/comptemots.js"><?php echo '</script'; ?>
>
    <header class="header_titre">&nbsp;<?php echo smarty_function_language(array('name'=>'gestion_fiche_adht'),$_smarty_tpl);
echo $_smarty_tpl->tpl_vars['affiche_message']->value;?>
</header>
	<div class="ligne_coul"></div> 	
	<div id="contenu">  	<br />
<?php if (!empty($_smarty_tpl->tpl_vars['erreur_saisie']->value)) {?>
	<?php if (count($_smarty_tpl->tpl_vars['erreur_saisie']->value) != 0) {?>
		<div id="erreur-box"> <?php echo smarty_function_language(array('name'=>'tpl_texte_err_saisie'),$_smarty_tpl);?>

		</div>	
	<?php }
}?>			
	<form method="post" name="maform" action="remplir_infogene_adht.php" enctype="multipart/form-data">
    
					<label class="label_fc"><?php echo smarty_function_language(array('name'=>'fiche_adht_civil'),$_smarty_tpl);?>
 &nbsp;&nbsp;</label> 
			<?php echo smarty_function_html_options(array('name'=>"civilite",'options'=>$_smarty_tpl->tpl_vars['list_civilite']->value,'selected'=>$_smarty_tpl->tpl_vars['data_adherent']->value['civilite_adht'],'tabindex'=>"1"),$_smarty_tpl);?>

		<br />
					<label class="label_fc_Oblig"> <?php echo smarty_function_language(array('name'=>'tpl_col_adht_nom'),$_smarty_tpl);?>
 &nbsp;&nbsp; </label>		
			<input type="text" name="nom_adht" id="nom_adht" title="<?php echo smarty_function_language(array('name'=>'fiche_adht_nom_title'),$_smarty_tpl);?>
" value="<?php echo $_smarty_tpl->tpl_vars['data_adherent']->value['nom_adht'];?>
" size="32"  maxlength="50" tabindex="2" placeholder="<?php echo smarty_function_language(array('name'=>'fiche_adht_nom_placeholder'),$_smarty_tpl);?>
" <?php echo $_smarty_tpl->tpl_vars['disabled']->value['nom_adht'];?>
 /> <?php if ($_smarty_tpl->tpl_vars['erreur_saisie']->value['nom'] != '') {?> <span class="erreur-Jaunerouge"><?php echo $_smarty_tpl->tpl_vars['erreur_saisie']->value['nom'];?>
</span><?php }?>
		<br />
					<label class="label_fc_Oblig"> <?php echo smarty_function_language(array('name'=>'fiche_adht_prenom'),$_smarty_tpl);?>
 &nbsp;&nbsp; </label>		
			<input type="text" name="prenom_adht" id="prenom_adht" title="<?php echo smarty_function_language(array('name'=>'fiche_adht_prenom_title'),$_smarty_tpl);?>
" value="<?php echo $_smarty_tpl->tpl_vars['data_adherent']->value['prenom_adht'];?>
" size="32"  maxlength="50" tabindex="3" placeholder="<?php echo smarty_function_language(array('name'=>'fiche_adht_prenom_placeholder'),$_smarty_tpl);?>
" <?php echo $_smarty_tpl->tpl_vars['disabled']->value['prenom_adht'];?>
 /> <?php if ($_smarty_tpl->tpl_vars['erreur_saisie']->value['pnom'] != '') {?> <span class="erreur-Jaunerouge"><?php echo $_smarty_tpl->tpl_vars['erreur_saisie']->value['pnom'];?>
</span><?php }?>
		<br />
					<label class="label_fc"><?php echo smarty_function_language(array('name'=>'tpl_adht_datenais'),$_smarty_tpl);?>
 &nbsp;&nbsp; </label>		
			<input type="text" name="datenaisance_adht" id="datenaisance_adht" title="<?php echo smarty_function_language(array('name'=>'fiche_adht_datenais_title'),$_smarty_tpl);?>
" value="<?php if ($_smarty_tpl->tpl_vars['data_adherent']->value['datenaisance_adht'] !== '00/00/0000') {
echo $_smarty_tpl->tpl_vars['data_adherent']->value['datenaisance_adht'];
}?>" size="12"  maxlength="12" tabindex="4" placeholder="<?php echo smarty_function_language(array('name'=>'fiche_adht_datenais_placeholder'),$_smarty_tpl);?>
" <?php echo $_smarty_tpl->tpl_vars['disabled']->value['datenaisance_adht'];?>
 /><?php if ($_smarty_tpl->tpl_vars['erreur_saisie']->value['d_nais']) {?><span class="erreur-Jaunerouge">&nbsp;<?php echo $_smarty_tpl->tpl_vars['erreur_saisie']->value['d_nais'];?>
</span><?php }?>
		<br />
				<label class="label_fc"> <?php echo smarty_function_language(array('name'=>'fiche_adht_tage'),$_smarty_tpl);?>
 &nbsp;&nbsp; </label>
		<?php if ($_smarty_tpl->tpl_vars['disabled']->value['tranche_age'] == 1) {?> <?php if ($_smarty_tpl->tpl_vars['data_adherent']->value['tranche_age']) {
echo $_smarty_tpl->tpl_vars['data_adherent']->value['tranche_age'];?>
 <?php } else { ?> NC <?php }?>
		<?php } else { ?> 
		<?php echo smarty_function_html_options(array('name'=>"tranche_age_adht",'options'=>$_smarty_tpl->tpl_vars['list_tranche_age_adht']->value,'selected'=>$_smarty_tpl->tpl_vars['data_adherent']->value['tranche_age'],'tabindex'=>"5"),$_smarty_tpl);?>

		<?php }?>		
		<br /><br />		
					<label class="label_fc"> <?php echo smarty_function_language(array('name'=>'fiche_adht_adress'),$_smarty_tpl);?>
 &nbsp;&nbsp; </label>		
			<input type="text" name="adresse_adht" id="adresse_adht" title=" <?php echo smarty_function_language(array('name'=>'fiche_adht_adress_title'),$_smarty_tpl);?>
" value="<?php echo $_smarty_tpl->tpl_vars['data_adherent']->value['adresse_adht'];?>
" size="65"  maxlength="98" tabindex="6" placeholder="<?php echo smarty_function_language(array('name'=>'fiche_adht_adress_placeholder'),$_smarty_tpl);?>
" <?php echo $_smarty_tpl->tpl_vars['disabled']->value['adresse_adht'];?>
 />
		<br />
					<label class="label_fc_Oblig">  <?php echo smarty_function_language(array('name'=>'fiche_adht_cp'),$_smarty_tpl);?>
 - <?php echo smarty_function_language(array('name'=>'tpl_col_adht_ville'),$_smarty_tpl);?>
 &nbsp;&nbsp; </label>		
			<input type="text" name="cp_adht" id="cp_adht" title="<?php echo smarty_function_language(array('name'=>'fiche_adht_cp_title'),$_smarty_tpl);?>
" value="<?php echo $_smarty_tpl->tpl_vars['data_adherent']->value['cp_adht'];?>
" size="6"  maxlength="50" tabindex="7" placeholder="<?php echo smarty_function_language(array('name'=>'fiche_adht_cp_placeholder'),$_smarty_tpl);?>
" <?php echo $_smarty_tpl->tpl_vars['disabled']->value['cp_adht'];?>
 />&nbsp;-&nbsp;<input type="text" name="ville_adht" id="ville_adht" title="<?php echo smarty_function_language(array('name'=>'tpl_col_adht_ville_title'),$_smarty_tpl);?>
" value="<?php echo $_smarty_tpl->tpl_vars['data_adherent']->value['ville_adht'];?>
" size="35"  maxlength="50" tabindex="8" placeholder="<?php echo smarty_function_language(array('name'=>'tpl_col_adht_ville_placeholder'),$_smarty_tpl);?>
" <?php echo $_smarty_tpl->tpl_vars['disabled']->value['ville_adht'];?>
 /><?php if ($_smarty_tpl->tpl_vars['erreur_saisie']->value['cp']) {?> <span class="erreur-Jaunerouge"><?php echo $_smarty_tpl->tpl_vars['erreur_saisie']->value['cp'];?>
</span><?php }?> <?php if ($_smarty_tpl->tpl_vars['erreur_saisie']->value['ville']) {?> <span class="erreur-Jaunerouge"><?php echo $_smarty_tpl->tpl_vars['erreur_saisie']->value['ville'];?>
</span><?php }?>
		<br />
					<label class="label_fc"><?php echo smarty_function_language(array('name'=>'tpl_col_adht_teleph'),$_smarty_tpl);?>
 &nbsp;&nbsp; </label>		
			<input type="text" name="telephonef_adht" id="telephonef_adht" title="<?php echo smarty_function_language(array('name'=>'tpl_col_adht_teleph_title'),$_smarty_tpl);?>
" value="<?php echo $_smarty_tpl->tpl_vars['data_adherent']->value['telephonef_adht'];?>
" size="18"  maxlength="16" tabindex="9" placeholder="<?php echo smarty_function_language(array('name'=>'tpl_col_adht_teleph_placeholder'),$_smarty_tpl);?>
" <?php echo $_smarty_tpl->tpl_vars['disabled']->value['telephonef_adht'];?>
 />
		<br />
					<label class="label_fc"> <?php echo smarty_function_language(array('name'=>'tpl_col_adht_portable'),$_smarty_tpl);?>
  &nbsp;&nbsp; </label>		
			<input type="text" name="telephonep_adht" id="telephonep_adht" title="<?php echo smarty_function_language(array('name'=>'tpl_col_adht_portable_title'),$_smarty_tpl);?>
" value="<?php echo $_smarty_tpl->tpl_vars['data_adherent']->value['telephonep_adht'];?>
" size="18"  maxlength="16" tabindex="10" placeholder="<?php echo smarty_function_language(array('name'=>'tpl_col_adht_portable_placeholder'),$_smarty_tpl);?>
" <?php echo $_smarty_tpl->tpl_vars['disabled']->value['telephonep_adht'];?>
 />
		<br />
					<label class="label_fc"> <?php echo smarty_function_language(array('name'=>'fiche_adht_fax'),$_smarty_tpl);?>
 &nbsp;&nbsp; </label>
			<input type="text" name="telecopie_adht" id="telecopie_adht" title="<?php echo smarty_function_language(array('name'=>'fiche_adht_fax_title'),$_smarty_tpl);?>
" value="<?php echo $_smarty_tpl->tpl_vars['data_adherent']->value['telecopie_adht'];?>
" size="18" maxlength="16" tabindex="11" placeholder="<?php echo smarty_function_language(array('name'=>'fiche_adht_fax_placeholder'),$_smarty_tpl);?>
" <?php echo $_smarty_tpl->tpl_vars['disabled']->value['telecopie_adht'];?>
 />
		<br />
					<label class="label_fc"> <?php echo smarty_function_language(array('name'=>'fiche_adht_profession'),$_smarty_tpl);?>
&nbsp;&nbsp; </label>
			<input type="text" name="profession_adht" id="profession_adht" title="<?php echo smarty_function_language(array('name'=>'fiche_adht_profession_title'),$_smarty_tpl);?>
" value="<?php echo $_smarty_tpl->tpl_vars['data_adherent']->value['profession_adht'];?>
" size="32" maxlength="50" tabindex="12" placeholder="<?php echo smarty_function_language(array('name'=>'fiche_adht_profession_placeholder'),$_smarty_tpl);?>
" <?php echo $_smarty_tpl->tpl_vars['disabled']->value['telecopie_adht'];?>
 />		
		<br />
					<label class="label_fc"><?php echo smarty_function_language(array('name'=>'fiche_adht_mail'),$_smarty_tpl);?>
 &nbsp;&nbsp; </label>		
			<input type="text" name="email_adht" id="email_adht" title="<?php echo smarty_function_language(array('name'=>'fiche_adht_mail_title'),$_smarty_tpl);?>
" value="<?php echo $_smarty_tpl->tpl_vars['data_adherent']->value['email_adht'];?>
" size="65"  maxlength="70" tabindex="13" placeholder="<?php echo smarty_function_language(array('name'=>'fiche_adht_mail_placeholder'),$_smarty_tpl);?>
"  <?php echo $_smarty_tpl->tpl_vars['disabled']->value['email_adht'];?>
 /><?php if ($_smarty_tpl->tpl_vars['erreur_saisie']->value['email']) {?> <span class="erreur-Jaunerouge">&nbsp;<?php echo $_smarty_tpl->tpl_vars['erreur_saisie']->value['email'];?>
</span> <?php }?>
		<br />
					<label class="label_fc"><?php echo smarty_function_language(array('name'=>'fiche_adht_web'),$_smarty_tpl);?>
 &nbsp;&nbsp;<span class="TextenoirR">http://</span></label>		
			<input type="text" name="siteweb_adht" id="siteweb_adht" title="<?php echo smarty_function_language(array('name'=>'fiche_adht_web_title'),$_smarty_tpl);?>
" value="<?php echo $_smarty_tpl->tpl_vars['data_adherent']->value['siteweb_adht'];?>
" size="65"  maxlength="50" tabindex="14" placeholder="<?php echo smarty_function_language(array('name'=>'fiche_adht_web_placeholder'),$_smarty_tpl);?>
"  <?php echo $_smarty_tpl->tpl_vars['disabled']->value['siteweb_adht'];?>
 />
		<br />
		 
			<label class="label_fc"> <?php echo smarty_function_language(array('name'=>'fiche_adht_autres_info'),$_smarty_tpl);?>
&nbsp;&nbsp; </label>
			<input type="text" name="autres_info_adht" id="autres_info_adht" title="<?php echo smarty_function_language(array('name'=>'fiche_adht_autres_info_title'),$_smarty_tpl);?>
" value="<?php echo $_smarty_tpl->tpl_vars['data_adherent']->value['autres_info_adht'];?>
" size="65" maxlength="980" tabindex="15" placeholder="<?php echo smarty_function_language(array('name'=>'fiche_adht_autres_info_placeholder'),$_smarty_tpl);?>
" <?php echo $_smarty_tpl->tpl_vars['disabled']->value['telecopie_adht'];?>
 />		
		<br />
		 
			<label class="label_fc" title="<?php echo smarty_function_language(array('name'=>'fiche_adht_coord_title'),$_smarty_tpl);
echo $_smarty_tpl->tpl_vars['nom_asso_gestassophp']->value;?>
"><?php echo smarty_function_language(array('name'=>'fiche_adht_coord'),$_smarty_tpl);?>
 &nbsp;&nbsp;</label>	
			<?php echo smarty_function_html_options(array('name'=>"visible_adht",'options'=>$_smarty_tpl->tpl_vars['list_oui_non']->value,'selected'=>$_smarty_tpl->tpl_vars['data_adherent']->value['visibl_adht'],'tabindex'=>"16"),$_smarty_tpl);?>
		
			<p class="TextenoirR">&nbsp;[<?php echo smarty_function_language(array('name'=>'fiche_adht_coord_title'),$_smarty_tpl);?>
 <?php echo $_smarty_tpl->tpl_vars['nom_asso_gestassophp']->value;?>
]</p>	
					<label class="label_fc"><?php echo smarty_function_language(array('name'=>'fiche_adht_compl'),$_smarty_tpl);?>
 
		<br />	
			<span class="TextenoirR"><?php echo smarty_function_language(array('name'=>'fiche_adht_compl_nbc'),$_smarty_tpl);?>
</span> 			<input readonly="readonly" type="text" name="compte" size="3" maxlength="3" value="200" title="<?php echo smarty_function_language(array('name'=>'fiche_adht_compl_nbc_title'),$_smarty_tpl);?>
"/></label>
            <textarea cols="60" rows="3" name="disponib_adht" onkeydown="Compteur_Texte(this,this.form.compte,200);" onkeyup="Compteur_Texte(this,this.form.compte,200);" placeholder="<?php echo smarty_function_language(array('name'=>'fiche_adht_compl_placeholder'),$_smarty_tpl);?>
" tabindex="17"><?php echo $_smarty_tpl->tpl_vars['data_adherent']->value['disponib_adht'];?>
</textarea>
		<br /><br />
			
			<label class="label_fc"> <?php echo smarty_function_language(array('name'=>'fiche_adht_promotion'),$_smarty_tpl);?>
 &nbsp;&nbsp; </label>	
				<input type="text" name="promotion_adht" id="promotion_adht" title="<?php echo smarty_function_language(array('name'=>'fiche_adht_promotion_title'),$_smarty_tpl);?>
" value="<?php echo $_smarty_tpl->tpl_vars['data_adherent']->value['promotion_adht'];?>
" size="32"  maxlength="25" tabindex="18" placeholder="<?php echo smarty_function_language(array('name'=>'fiche_adht_promotion_placeholder'),$_smarty_tpl);?>
" <?php echo $_smarty_tpl->tpl_vars['disabled']->value['promotion_adht'];?>
 />
		<br />	
				
			<label class="label_fc"> <?php echo smarty_function_language(array('name'=>'fiche_adht_ant'),$_smarty_tpl);?>
&nbsp;&nbsp;</label> 
			<?php if ($_smarty_tpl->tpl_vars['disabled']->value['antenne_adht'] == 1) {?> <?php echo $_smarty_tpl->tpl_vars['data_adherent']->value['nom_type_antenne'];
} else { ?> <?php echo smarty_function_html_options(array('name'=>"id_type_antenne_adht",'options'=>$_smarty_tpl->tpl_vars['list_antenne_adht']->value,'selected'=>$_smarty_tpl->tpl_vars['data_adherent']->value['id_type_antenne'],'tabindex'=>"19"),$_smarty_tpl);
}?>
		<br />
				
	<?php if ($_smarty_tpl->tpl_vars['required']->value['creation_adht'] == 1) {?> 	
					<label class="label_fc_Oblig"> <?php echo smarty_function_language(array('name'=>'fiche_adht_d_inscript'),$_smarty_tpl);?>
&nbsp;&nbsp; </label>		
			<input type="text" name="date_inscription_adht" id="date_inscription_adht" title="<?php echo smarty_function_language(array('name'=>'tpl_texte_date_title'),$_smarty_tpl);?>
" value="<?php if ($_smarty_tpl->tpl_vars['data_adherent']->value['date_inscription_adht']) {
echo $_smarty_tpl->tpl_vars['data_adherent']->value['date_inscription_adht'];?>
 <?php } else {
echo $_smarty_tpl->tpl_vars['date_dujour']->value;
}?>" size="12" maxlength="12" tabindex="20" <?php echo $_smarty_tpl->tpl_vars['disabled']->value['date_inscription'];?>
 /><?php if ($_smarty_tpl->tpl_vars['erreur_saisie']->value['d_inscript']) {?><span class="erreur-Jaunerouge"><?php echo $_smarty_tpl->tpl_vars['erreur_saisie']->value['d_inscript'];?>
</span><?php }?>
		<br />
				<fieldset> 
		<legend><?php echo smarty_function_language(array('name'=>'fiche_adht_create_loginpass'),$_smarty_tpl);?>
</legend> 
		<br />
			<label class="label_fc_Oblig"> <?php echo smarty_function_language(array('name'=>'login_user'),$_smarty_tpl);?>
&nbsp; </label>			
		<input type="text" name="login_adht" id="login_adht" title="<?php echo smarty_function_language(array('name'=>'fiche_adht_login'),$_smarty_tpl);?>
" value="<?php echo $_smarty_tpl->tpl_vars['data_adherent']->value['login_adht'];?>
" size="22"  maxlength="22" tabindex="21"  placeholder="<?php echo smarty_function_language(array('name'=>'fiche_adht_login_placeholder'),$_smarty_tpl);?>
" /><?php if ($_smarty_tpl->tpl_vars['erreur_saisie']->value['login']) {?> <span class="erreur-Jaunerouge"><?php echo $_smarty_tpl->tpl_vars['erreur_saisie']->value['login'];?>
</span><?php }?>
		<br />	
		 		
			<span class="TexterougeR">&nbsp;&nbsp;&nbsp;&nbsp;<?php echo smarty_function_language(array('name'=>'fiche_adht_login_upper'),$_smarty_tpl);?>
<br/>
			&nbsp;&nbsp;&nbsp;&nbsp;<?php echo smarty_function_language(array('name'=>'fiche_adht_passwd410'),$_smarty_tpl);?>
</span>
		<br /><br />		
		 			<label class="label_fc_Oblig">&nbsp;&nbsp;<?php echo smarty_function_language(array('name'=>'login_my_passwd'),$_smarty_tpl);?>
&nbsp; </label>
				<input type="password" name="pass_adht1" id="pass_adht1" title="<?php echo smarty_function_language(array('name'=>'fiche_adht_passwd_title'),$_smarty_tpl);?>
" value="<?php echo $_smarty_tpl->tpl_vars['data_adherent']->value['pass_adht1'];?>
" size="16"  maxlength="18" tabindex="22" placeholder="<?php echo smarty_function_language(array('name'=>'fiche_adht_passwd410_placeholder'),$_smarty_tpl);?>
" <?php echo $_smarty_tpl->tpl_vars['disabled']->value['pass_adht1'];?>
 />
			<span class="TexterougeGras ">&nbsp;&nbsp;<?php echo smarty_function_language(array('name'=>'fiche_adht_confirm'),$_smarty_tpl);?>
&nbsp;</span> 
				<input type="password" name="pass_adht2" id="pass_adht2" title="<?php echo smarty_function_language(array('name'=>'fiche_adht_passwd_confirm_title'),$_smarty_tpl);?>
" value="<?php echo $_smarty_tpl->tpl_vars['data_adherent']->value['pass_adht2'];?>
" size="16"  maxlength="18" tabindex="23" placeholder="<?php echo smarty_function_language(array('name'=>'fiche_adht_passwd410_placeholder'),$_smarty_tpl);?>
" <?php echo $_smarty_tpl->tpl_vars['disabled']->value['pass_adht2'];?>
 /><?php if ($_smarty_tpl->tpl_vars['erreur_saisie']->value['mdp']) {?> <span class="erreur-Jaunerouge"><?php echo $_smarty_tpl->tpl_vars['erreur_saisie']->value['mdp'];?>
</span><?php }?><span class="TextenoirR"></span>
		</fieldset> 
		
	<?php } else { ?> 		<br />
				 
			<label class="label_fc"> <?php echo smarty_function_language(array('name'=>'fiche_adht_fiche_enr'),$_smarty_tpl);?>
&nbsp;&nbsp; </label>		
			<?php if ($_smarty_tpl->tpl_vars['non_visible_adht_creation_fiche']->value == 1) {?> <?php echo $_smarty_tpl->tpl_vars['pnom_creation_fiche_adht']->value;?>
<br />
			<?php } else { ?>
			<?php echo smarty_function_html_options(array('name'=>'id_adht_modif_creation_fiche','options'=>$_smarty_tpl->tpl_vars['listnoms']->value,'selected'=>$_smarty_tpl->tpl_vars['data_adherent']->value['qui_enrg_adht'],'tabindex'=>"19"),$_smarty_tpl);?>
<br />
			<?php }?>
		<br />		
			
		<?php if (($_smarty_tpl->tpl_vars['id_adht']->value == $_SESSION['ses_id_adht']) || ($_smarty_tpl->tpl_vars['priorite_adht']->value == 9)) {?>
				<fieldset> 
		<legend><?php echo smarty_function_language(array('name'=>'login_user'),$_smarty_tpl);?>
&nbsp;/&nbsp;<?php echo smarty_function_language(array('name'=>'fiche_adht_modif_passwd'),$_smarty_tpl);?>
</legend>		
						<?php if ($_smarty_tpl->tpl_vars['priorite_adht']->value == 9) {?>
				<br />
								<label class="label_fc_Oblig"><?php echo smarty_function_language(array('name'=>'login_user'),$_smarty_tpl);?>
&nbsp; </label>	
					<input type="text" name="login_adht" id="login_adht" title="<?php echo smarty_function_language(array('name'=>'fiche_adht_login'),$_smarty_tpl);?>
" value="<?php echo $_smarty_tpl->tpl_vars['data_adherent']->value['login_adht'];?>
" size="22"  maxlength="22" tabindex="20" /><?php if ($_smarty_tpl->tpl_vars['erreur_saisie']->value['login']) {?><span class="erreur-Jaunerouge"><?php echo $_smarty_tpl->tpl_vars['erreur_saisie']->value['login'];?>
</span><?php }?>
				<br />	
					<span class="TexterougeR">&nbsp;&nbsp;&nbsp;&nbsp;<?php echo smarty_function_language(array('name'=>'fiche_adht_login_upper'),$_smarty_tpl);?>
</span>				<br />
			<?php }?>  
						<p class="TexterougeR"><?php echo smarty_function_language(array('name'=>'fiche_adht_modif_passwd'),$_smarty_tpl);?>
&nbsp;&nbsp;(<?php echo smarty_function_language(array('name'=>'fiche_adht_passwd410'),$_smarty_tpl);?>
)</p>	
			<span class="TextenoirGras"><?php echo smarty_function_language(array('name'=>'fiche_adht_modif_passwd'),$_smarty_tpl);?>
&nbsp;</span> 
				<input type="password" name="pass_adht1" id="pass_adht1" title="<?php echo smarty_function_language(array('name'=>'fiche_adht_newpasswd_title'),$_smarty_tpl);?>
" value="<?php echo $_smarty_tpl->tpl_vars['data_adherent']->value['pass_adht1'];?>
" size="16"  maxlength="18" tabindex="20" <?php echo $_smarty_tpl->tpl_vars['disabled']->value['pass_adht1'];?>
 />
			<span class="TextenoirGras">&nbsp;&nbsp;<?php echo smarty_function_language(array('name'=>'fiche_adht_confirm'),$_smarty_tpl);?>
&nbsp;</span> 
				<input type="password" name="pass_adht2" id="pass_adht2" title="<?php echo smarty_function_language(array('name'=>'fiche_adht_passwd_confirm_title'),$_smarty_tpl);?>
" value="<?php echo $_smarty_tpl->tpl_vars['data_adherent']->value['pass_adht2'];?>
" size="16"  maxlength="18" tabindex="21" <?php echo $_smarty_tpl->tpl_vars['disabled']->value['pass_adht2'];?>
 /><?php if ($_smarty_tpl->tpl_vars['erreur_saisie']->value['mdp']) {?><span class="erreur-Jaunerouge"><?php echo $_smarty_tpl->tpl_vars['erreur_saisie']->value['mdp'];?>
</span><?php }?>
		<?php }?>
		</fieldset>
	<?php }?> 
						<span class="TexterougeR">&nbsp;&nbsp;&nbsp;<?php echo smarty_function_language(array('name'=>'tpl_texte_oblig'),$_smarty_tpl);?>
</span>
	
				<?php if ($_smarty_tpl->tpl_vars['required']->value['creation_adht'] !== 1) {?>
		<div class="centre-txt">
			 <?php if ($_smarty_tpl->tpl_vars['photo_adht']->value !== "[ Pas de photo ]") {
echo $_smarty_tpl->tpl_vars['photo_adht']->value;?>
<br />
				<input type="submit" name="del_photo" value="<?php echo smarty_function_language(array('name'=>'fiche_adht_del_photo'),$_smarty_tpl);?>
" onclick="return confirm('<?php echo smarty_function_language(array('name'=>'fiche_adht_confirm_del_photo'),$_smarty_tpl);?>
')"  title="<?php echo smarty_function_language(array('name'=>'fiche_adht_del_photo_title'),$_smarty_tpl);?>
" class="submit_del" tabindex="22"/>
			<?php } else { ?> <?php echo smarty_function_language(array('name'=>'fiche_adht_upload_photo'),$_smarty_tpl);?>
<br /> <?php if ($_smarty_tpl->tpl_vars['erreur_saisie']->value['photo']) {?> <span class="erreur-Jaunerouge"><?php echo $_smarty_tpl->tpl_vars['erreur_saisie']->value['photo'];?>
</span><br /><?php }?>
				<input type="file" name="photo" title="<?php echo smarty_function_language(array('name'=>'fiche_adht_add_photo_title'),$_smarty_tpl);?>
" />
			<?php }?>
		</div>
		<?php }?>	
				

		<div class="centre-txt"><br />
			<input type="submit" class="submit_ok" name="Valider" value="<?php echo smarty_function_language(array('name'=>'tpl_valid_button'),$_smarty_tpl);?>
" title="<?php echo smarty_function_language(array('name'=>'tpl_valid_button_title'),$_smarty_tpl);?>
"/>
			<input type="hidden" name="valid" value="valid"/>
			<input type="hidden" name="id_adht" value="<?php echo $_smarty_tpl->tpl_vars['id_adht']->value;?>
"/>		
			<?php if ($_smarty_tpl->tpl_vars['required']->value['creation_adht'] == 1) {?><a href="../adherent/liste_adht_admin.php"><span class="submit_nul" title="<?php echo smarty_function_language(array('name'=>'tpl_cancel_button_title'),$_smarty_tpl);?>
"><?php echo smarty_function_language(array('name'=>'tpl_cancel_button'),$_smarty_tpl);?>
</span></a><?php } else { ?>
			<a href="../adherent/gerer_fiche_adht.php?id_adht=<?php echo $_smarty_tpl->tpl_vars['id_adht']->value;?>
"><span class="submit_nul" title="<?php echo smarty_function_language(array('name'=>'tpl_cancel_button_title'),$_smarty_tpl);?>
"><?php echo smarty_function_language(array('name'=>'tpl_cancel_button'),$_smarty_tpl);?>
</span></a><?php }?>			
		</div>

	</form>
		 
	 

		
	 
	</div>  
<?php }
}
