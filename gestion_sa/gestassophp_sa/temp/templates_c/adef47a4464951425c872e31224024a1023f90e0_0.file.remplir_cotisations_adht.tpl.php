<?php
/* Smarty version 3.1.33, created on 2019-02-02 15:57:14
  from 'C:\dev\servers\wamp64\www\gestion\gestion_sa\gestassophp_sa\templates\adherent\remplir_cotisations_adht.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5c55bdda10f2b6_89578044',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'adef47a4464951425c872e31224024a1023f90e0' => 
    array (
      0 => 'C:\\dev\\servers\\wamp64\\www\\gestion\\gestion_sa\\gestassophp_sa\\templates\\adherent\\remplir_cotisations_adht.tpl',
      1 => 1451833508,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5c55bdda10f2b6_89578044 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_checkPlugins(array(0=>array('file'=>'C:\\dev\\servers\\wamp64\\www\\gestion\\gestion_sa\\lib\\smarty\\plugins\\function.language.php','function'=>'smarty_function_language',),1=>array('file'=>'C:\\dev\\servers\\wamp64\\www\\gestion\\gestion_sa\\lib\\smarty\\plugins\\function.html_options.php','function'=>'smarty_function_html_options',),));
?>
	<header class="header_titre_aide"><a href='#' style="cursor:pointer;cursor:hand" onclick="javascript :window.open('../aide/a__remplir_cotisation.php','popup','height=450,toolbar=no,location=no,directories=no,status=yes,width=660,resizable=no,scrollbars=yes,top=10,left=10')" title="<?php echo smarty_function_language(array('name'=>'title_aide'),$_smarty_tpl);?>
"><img src='../images/icones/help.gif' alt="Aide" width="20" height="20"/><?php echo smarty_function_language(array('name'=>'aide'),$_smarty_tpl);?>
</a></header> 

    <header class="header_titre">&nbsp;<?php echo smarty_function_language(array('name'=>'titre_admin_fiche_cotis_adht'),$_smarty_tpl);?>
 <?php echo $_smarty_tpl->tpl_vars['affiche_message']->value;?>
</header>
	<div class="ligne_coul"></div> 	
	<div id="contenu">  	<br />
		
<?php if (count($_smarty_tpl->tpl_vars['erreur_saisie']->value) != 0) {?> 
		<div id="erreur-box"> <?php echo smarty_function_language(array('name'=>'tpl_texte_err_saisie'),$_smarty_tpl);?>
</div>	
<?php } else { ?>	
		<div>&nbsp;</div>
<?php }?>


<?php if (count($_smarty_tpl->tpl_vars['alert_saisie']->value) != 0) {?>
		<div id="erreur-box">
		<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['num_id_cotis']->value, 'item_num_id_cotis', false, 'ordre');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['ordre']->value => $_smarty_tpl->tpl_vars['item_num_id_cotis']->value) {
?> 		<?php if ($_smarty_tpl->tpl_vars['alert_saisie']->value['id_adhtasso'] > 1) {
echo smarty_function_language(array('name'=>'message_cotis_adht_alert_exist1'),$_smarty_tpl);?>
&nbsp;<a href="../adherent/remplir_cotisations_adht.php?id_cotis=<?php echo $_smarty_tpl->tpl_vars['item_num_id_cotis']->value['id_cotis'];?>
" target="_blank" title="<?php echo smarty_function_language(array('name'=>'message_cotis_adht_autre_fen'),$_smarty_tpl);?>
"><?php echo $_smarty_tpl->tpl_vars['item_num_id_cotis']->value['id_cotis'];?>
</a>&nbsp;<?php echo smarty_function_language(array('name'=>'message_cotis_adht_alert_exist2'),$_smarty_tpl);?>
<br />
		<?php } else { ?> 
		<?php if ($_smarty_tpl->tpl_vars['alert_saisie']->value['id_adhtasso'] == 1) {
echo smarty_function_language(array('name'=>'message_cotis_adht_alert_exist1'),$_smarty_tpl);?>
&nbsp;<a href="../adherent/remplir_cotisations_adht.php?id_cotis=<?php echo $_smarty_tpl->tpl_vars['item_num_id_cotis']->value['id_cotis'];?>
" target="_blank" title="<?php echo smarty_function_language(array('name'=>'message_cotis_adht_autre_fen'),$_smarty_tpl);?>
"><?php echo $_smarty_tpl->tpl_vars['item_num_id_cotis']->value['id_cotis'];?>
</a>&nbsp;<?php echo smarty_function_language(array('name'=>'message_cotis_adht_alert_exist01'),$_smarty_tpl);?>
<br /><?php }?>		
		<?php }?> <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?> 
		</div>
		
<?php }
if ($_smarty_tpl->tpl_vars['required']->value['modification_cotisation'] == 1 && $_smarty_tpl->tpl_vars['supprime_fiche']->value != 1 && $_smarty_tpl->tpl_vars['archive_fiche']->value != 1) {?> 
<div id="alert-box"><?php echo smarty_function_language(array('name'=>'fiche_cotis_adht_montant_cotis_alert'),$_smarty_tpl);?>
</div> <?php }?>



	<form method="post" name="maform" action="remplir_cotisations_adht.php">

			<label class="label_fc" title="<?php echo smarty_function_language(array('name'=>'fiche_cotis_adht_date_enr_title'),$_smarty_tpl);?>
"> <?php echo smarty_function_language(array('name'=>'fiche_cotis_adht_date_enr'),$_smarty_tpl);?>
</label>		
			<input type="text" name="date_enregist_cotis" id="date_enregist_cotis" title="<?php echo smarty_function_language(array('name'=>'fiche_cotis_adht_date_enr_title'),$_smarty_tpl);?>
" value="<?php if ($_smarty_tpl->tpl_vars['data_cotis_adh']->value['date_enregist_cotis']) {
echo $_smarty_tpl->tpl_vars['data_cotis_adh']->value['date_enregist_cotis'];?>
 <?php } else {
echo $_smarty_tpl->tpl_vars['date_dujour']->value;
}?>" size="12" maxlength="12" tabindex="1" <?php echo $_smarty_tpl->tpl_vars['disabled']->value['date_enregist_cotis'];?>
 /><?php if ($_smarty_tpl->tpl_vars['erreur_saisie']->value['d_enregist']) {?><span class="erreur-Jaunerouge">&nbsp;<?php echo $_smarty_tpl->tpl_vars['erreur_saisie']->value['d_enregist'];?>
</span><?php }?>
<br />
			<label class="label_fc_Oblig">  <?php echo $_smarty_tpl->tpl_vars['adherent_bene']->value;?>
 </label>	
			<?php if ($_smarty_tpl->tpl_vars['modif_fiche']->value == 1) {?> 			<?php echo smarty_function_html_options(array('name'=>'id_adht_cotis','options'=>$_smarty_tpl->tpl_vars['listnoms']->value,'selected'=>$_smarty_tpl->tpl_vars['data_cotis_adh']->value['id_adhtasso'],'tabindex'=>"2",'disabled'=>"disabled"),$_smarty_tpl);?>

			<?php } else { ?>
            <?php echo smarty_function_html_options(array('name'=>'id_adhtasso','options'=>$_smarty_tpl->tpl_vars['listnoms']->value,'selected'=>$_smarty_tpl->tpl_vars['data_cotis_adh']->value['id_adhtasso'],'tabindex'=>"2"),$_smarty_tpl);?>
 <?php if ($_smarty_tpl->tpl_vars['erreur_saisie']->value['id_adhtasso']) {?><span class="erreur-Jaunerouge">&nbsp;<?php echo $_smarty_tpl->tpl_vars['erreur_saisie']->value['id_adhtasso'];?>
</span><?php }?>
			<?php }?>
<br /><br />			
   				
			<label class="label_fc_Oblig"> <?php echo smarty_function_language(array('name'=>'fiche_cotis_adht_montant'),$_smarty_tpl);?>
</label >		
		<?php if ($_smarty_tpl->tpl_vars['modif_fiche']->value == 1) {?>
			<input type="text" name="montant_cotis" id="montant_cotis" title="<?php echo smarty_function_language(array('name'=>'fiche_cotis_adht_montant_title'),$_smarty_tpl);?>
" value="<?php echo $_smarty_tpl->tpl_vars['data_cotis_adh']->value['montant_cotis'];?>
" size="10"  maxlength="10" tabindex="3" <?php echo $_smarty_tpl->tpl_vars['disabled']->value['montant_cotis'];?>
 /> <?php if ($_smarty_tpl->tpl_vars['erreur_saisie']->value['montant'] != '') {?><span class="erreur-Jaunerouge">&nbsp;<?php echo $_smarty_tpl->tpl_vars['erreur_saisie']->value['montant'];?>
</span><?php } else { ?>Euros<?php }?>
		<?php } else { ?>	
			<?php echo smarty_function_language(array('name'=>'fiche_cotis_adht_montant_cotis'),$_smarty_tpl);?>

		<?php }?>
<br />
		
			<label class="label_fc_Oblig"> <?php echo smarty_function_language(array('name'=>'fiche_cotis_adht_type'),$_smarty_tpl);?>
</label >			
			<?php if ($_smarty_tpl->tpl_vars['archive_fiche']->value == "1" || $_smarty_tpl->tpl_vars['supprime_fiche']->value == "1") {
echo smarty_function_html_options(array('name'=>'id_type_cotisation','options'=>$_smarty_tpl->tpl_vars['listnomtypecotisation']->value,'selected'=>$_smarty_tpl->tpl_vars['data_cotis_adh']->value['id_type_cotisation'],'tabindex'=>"4",'disabled'=>"disabled"),$_smarty_tpl);?>

			<?php } else { ?>
			<?php echo smarty_function_html_options(array('name'=>'id_type_cotisation','options'=>$_smarty_tpl->tpl_vars['listnomtypecotisation']->value,'selected'=>$_smarty_tpl->tpl_vars['data_cotis_adh']->value['id_type_cotisation'],'tabindex'=>"4"),$_smarty_tpl);
if ($_smarty_tpl->tpl_vars['erreur_saisie']->value['type_cotisation']) {?><span class="erreur-Jaunerouge">&nbsp;<?php echo $_smarty_tpl->tpl_vars['erreur_saisie']->value['type_cotisation'];?>
</span><?php }?>
			<?php }?>
<br /><br />			

			<label class="label_fc_Oblig" title="<?php echo smarty_function_language(array('name'=>'tpl_texte_date_title'),$_smarty_tpl);?>
"> <?php echo smarty_function_language(array('name'=>'fiche_cotis_adht_date_deb'),$_smarty_tpl);?>
</label >			
			<input type="text" name="date_debut_cotis" id="date_debut_cotis" title="<?php echo smarty_function_language(array('name'=>'tpl_texte_date_title'),$_smarty_tpl);?>
" value="<?php if ($_smarty_tpl->tpl_vars['data_cotis_adh']->value['date_debut_cotis']) {
echo $_smarty_tpl->tpl_vars['data_cotis_adh']->value['date_debut_cotis'];
} else {
echo $_smarty_tpl->tpl_vars['date_dujour']->value;
}?>" size="12" maxlength="12" tabindex="5" <?php echo $_smarty_tpl->tpl_vars['disabled']->value['date_debut_cotis'];?>
 /><?php if ($_smarty_tpl->tpl_vars['erreur_saisie']->value['d_debut_cotis']) {?><span class="erreur-Jaunerouge">&nbsp;<?php echo $_smarty_tpl->tpl_vars['erreur_saisie']->value['d_debut_cotis'];?>
</span><?php }
if ($_smarty_tpl->tpl_vars['alert_saisie']->value['d_debut_cotis'] && $_smarty_tpl->tpl_vars['archive_fiche']->value != 1 && $_smarty_tpl->tpl_vars['supprime_fiche']->value != 1) {?><br /><span class="erreur-Jaunerouge">&nbsp;<?php echo $_smarty_tpl->tpl_vars['alert_saisie']->value['d_debut_cotis'];?>
</span><?php }?>
<br />
			
			<label class="label_fc_Oblig" title="<?php echo smarty_function_language(array('name'=>'tpl_texte_date_title'),$_smarty_tpl);?>
"> <?php echo smarty_function_language(array('name'=>'fiche_cotis_adht_date_fin'),$_smarty_tpl);?>
</label >			
			<input type="text" name="date_fin_cotis" id="date_fin_cotis" title="<?php echo smarty_function_language(array('name'=>'tpl_texte_date_title'),$_smarty_tpl);?>
" value="<?php if ($_smarty_tpl->tpl_vars['data_cotis_adh']->value['date_fin_cotis']) {
echo $_smarty_tpl->tpl_vars['data_cotis_adh']->value['date_fin_cotis'];
} else {
echo $_smarty_tpl->tpl_vars['date_3112']->value;
}?>" size="12" maxlength="12" tabindex="6" <?php echo $_smarty_tpl->tpl_vars['disabled']->value['date_fin_cotis'];?>
 /><?php if ($_smarty_tpl->tpl_vars['alert_saisie']->value['d_fin_cotis_alert']) {?><span class="erreur-Jaunerouge">&nbsp;<?php echo smarty_function_language(array('name'=>'message_cotis_adht_alert_archiv'),$_smarty_tpl);?>
</span><?php }?> <?php if ($_smarty_tpl->tpl_vars['erreur_saisie']->value['d_fin_cotis']) {?><span class="erreur-Jaunerouge">&nbsp;<?php echo $_smarty_tpl->tpl_vars['erreur_saisie']->value['d_fin_cotis'];?>
</span><?php }?>
<br /><br />
<!-- Ajout Zone PAIEMENT Gestion Cotisations -->
			<label class="label_fc" title="<?php echo smarty_function_language(array('name'=>'fiche_cotis_adht_mpaie'),$_smarty_tpl);?>
"> <?php echo smarty_function_language(array('name'=>'fiche_cotis_adht_mpaie'),$_smarty_tpl);?>
</label>			<?php if ($_smarty_tpl->tpl_vars['archive_fiche']->value == "1" || $_smarty_tpl->tpl_vars['supprime_fiche']->value == "1") {
echo smarty_function_html_options(array('name'=>"paiement_cotis",'options'=>$_smarty_tpl->tpl_vars['list_paiement_cotis']->value,'selected'=>$_smarty_tpl->tpl_vars['data_cotis_adh']->value['paiement_cotis'],'tabindex'=>"8",'disabled'=>"disabled"),$_smarty_tpl);?>

			<?php } else { ?>
			<?php echo smarty_function_html_options(array('name'=>"paiement_cotis",'options'=>$_smarty_tpl->tpl_vars['list_paiement_cotis']->value,'selected'=>$_smarty_tpl->tpl_vars['data_cotis_adh']->value['paiement_cotis'],'tabindex'=>"8"),$_smarty_tpl);?>

			<?php }?>	
<br /><br />				
<!-- / Ajout Zone PAIEMENT Gestion Cotisations -->
			<label class="label_fc" title="<?php echo smarty_function_language(array('name'=>'fiche_cotis_adht_comm_title'),$_smarty_tpl);?>
"> <?php echo smarty_function_language(array('name'=>'fiche_cotis_adht_comm'),$_smarty_tpl);?>
</label>			
			<input type="text" name="info_cotis" id="info_cotis" title="<?php echo smarty_function_language(array('name'=>'fiche_cotis_adht_comm_title'),$_smarty_tpl);?>
" value="<?php echo $_smarty_tpl->tpl_vars['data_cotis_adh']->value['info_cotis'];?>
" size="72"  maxlength="80" tabindex="7" placeholder="   <?php echo smarty_function_language(array('name'=>'fiche_cotis_adht_comm_placeholder'),$_smarty_tpl);?>
" <?php echo $_smarty_tpl->tpl_vars['disabled']->value['info_cotis'];?>
 />
<br />
		<?php if ($_smarty_tpl->tpl_vars['supprime_fiche']->value == "1" || $_smarty_tpl->tpl_vars['archive_fiche']->value == 1) {?>	
			<label class="label_fc_Oblig" title="<?php echo smarty_function_language(array('name'=>'fiche_cotis_adht_raison_title'),$_smarty_tpl);?>
 30 caract&egrave;res maxi" > <?php echo smarty_function_language(array('name'=>'fiche_cotis_adht_raison'),$_smarty_tpl);?>
</label>			
			<input type="text" name="info_archiv_cotis" id="info_archiv_cotis" title="<?php echo smarty_function_language(array('name'=>'fiche_cotis_adht_raison_title'),$_smarty_tpl);?>
 30 caract&egrave;res maxi" value="<?php echo $_smarty_tpl->tpl_vars['data_cotis_adh']->value['info_archiv_cotis'];?>
" size="40"  maxlength="30" tabindex="8" placeholder="<?php echo smarty_function_language(array('name'=>'fiche_cotis_adht_raison_placeholder'),$_smarty_tpl);?>
" <?php echo $_smarty_tpl->tpl_vars['disabled']->value['info_archiv_cotis'];?>
 /><?php if ($_smarty_tpl->tpl_vars['erreur_saisie']->value['info_archiv_cotis']) {?><span class="erreur-Jaunerouge">&nbsp;<?php echo $_smarty_tpl->tpl_vars['erreur_saisie']->value['info_archiv_cotis'];?>
</span><?php }?>
		<?php } else { ?>
			<div class="centre-txt"><br /></div>
		<?php }?>

	

	
		<p class="TexterougeR">&nbsp;&nbsp;&nbsp;<?php echo smarty_function_language(array('name'=>'tpl_texte_oblig'),$_smarty_tpl);?>
</p>
		<div class="centre-txt"><br />
		<?php if ($_smarty_tpl->tpl_vars['archive_fiche']->value == "1") {?>
					<a href="../adherent/liste_cotisations_adht.php?filtre_fiche=1&amp;id_adht=<?php echo $_smarty_tpl->tpl_vars['data_cotis_adh']->value['id_adhtasso'];?>
"><span class="submit_nul" title="<?php echo smarty_function_language(array('name'=>'tpl_retour_button_title'),$_smarty_tpl);?>
"><?php echo smarty_function_language(array('name'=>'tpl_retour_button_title'),$_smarty_tpl);?>
</span></a>			
		<?php } else { ?>
			<?php if ($_smarty_tpl->tpl_vars['supprime_fiche']->value == "1") {?>
						<?php if ($_smarty_tpl->tpl_vars['erreur_saisie']->value['d_fin_cotis_alert'] != 1) {?>	
			<input type="submit" name="del_fiche" value="<?php echo smarty_function_language(array('name'=>'fiche_cotis_adht_archiv_button_title'),$_smarty_tpl);?>
" onclick="return confirm('<?php echo smarty_function_language(array('name'=>'fiche_cotis_adht_js_confirm_archiv'),$_smarty_tpl);?>
 <?php echo $_smarty_tpl->tpl_vars['data_cotis_adh']->value['id_cotis'];?>
  ? ')" title="<?php echo smarty_function_language(array('name'=>'liste_cotis_adht_archiv_icon_title'),$_smarty_tpl);?>
" class="submit_del" />
			<input type="hidden" name="supp_valid" value="supp_valid"/>	
			<input type="hidden" name="id_cotis" value="<?php echo $_smarty_tpl->tpl_vars['data_cotis_adh']->value['id_cotis'];?>
"/>
			<input type="hidden" name="supp_fiche_cotis" value="<?php echo $_smarty_tpl->tpl_vars['supprime_fiche']->value;?>
"/>
			<?php }?>			
			<a href="../adherent/liste_cotisations_adht.php?id_adht=<?php echo $_smarty_tpl->tpl_vars['data_cotis_adh']->value['id_adhtasso'];?>
"><span class="submit_nul" title="<?php echo smarty_function_language(array('name'=>'tpl_cancel_button_title'),$_smarty_tpl);?>
"><?php echo smarty_function_language(array('name'=>'tpl_cancel_button'),$_smarty_tpl);?>
</span></a>			
		<?php } else { ?>

			<input type="submit" class="submit_ok" name="Valider" value="<?php echo smarty_function_language(array('name'=>'tpl_valid_button'),$_smarty_tpl);?>
" title="<?php echo smarty_function_language(array('name'=>'tpl_valid_button_title'),$_smarty_tpl);?>
"/>
			<input type="hidden" name="valid" value="valid"/>
			<input type="hidden" name="id_adht_cotis" value="<?php echo $_smarty_tpl->tpl_vars['data_cotis_adh']->value['id_adhtasso'];?>
"/>
			<input type="hidden" name="id_cotis" value="<?php echo $_smarty_tpl->tpl_vars['data_cotis_adh']->value['id_cotis'];?>
"/>
			<a href="../adherent/liste_cotisations_adht.php?filtre_fiche=1&amp;id_adht=<?php echo $_smarty_tpl->tpl_vars['data_cotis_adh']->value['id_adhtasso'];?>
"><span class="submit_nul" title="<?php echo smarty_function_language(array('name'=>'tpl_cancel_button_title'),$_smarty_tpl);?>
"><?php echo smarty_function_language(array('name'=>'tpl_cancel_button'),$_smarty_tpl);?>
</span></a>
			
			<?php if ($_smarty_tpl->tpl_vars['required']->value['modification_cotisation'] == "1") {?><a href="consulter_cotisations_adht.php?id_cotis=<?php echo $_smarty_tpl->tpl_vars['data_cotis_adh']->value['id_cotis'];?>
"><span class="submit_ok" title="<?php echo smarty_function_language(array('name'=>'fiche_cotis_adht_visu_button_title'),$_smarty_tpl);?>
">&nbsp;<?php echo smarty_function_language(array('name'=>'fiche_cotis_adht_visu_button'),$_smarty_tpl);?>
&nbsp;</span></a> <br /><?php }?>
			<?php }?>
			
		<?php }?>
			</div>
	</form>
		 
	 

		
	 
	</div>  
<?php }
}
