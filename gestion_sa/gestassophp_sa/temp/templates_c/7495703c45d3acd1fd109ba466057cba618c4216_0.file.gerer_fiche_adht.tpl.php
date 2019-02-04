<?php
/* Smarty version 3.1.33, created on 2019-02-02 16:02:37
  from 'C:\dev\servers\wamp64\www\gestion\gestion_sa\gestassophp_sa\templates\adherent\gerer_fiche_adht.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5c55bf1dd20b05_60149765',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '7495703c45d3acd1fd109ba466057cba618c4216' => 
    array (
      0 => 'C:\\dev\\servers\\wamp64\\www\\gestion\\gestion_sa\\gestassophp_sa\\templates\\adherent\\gerer_fiche_adht.tpl',
      1 => 1451833508,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:adherent/consulter_info_fichiermission_adht.tpl' => 1,
  ),
),false)) {
function content_5c55bf1dd20b05_60149765 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_checkPlugins(array(0=>array('file'=>'C:\\dev\\servers\\wamp64\\www\\gestion\\gestion_sa\\lib\\smarty\\plugins\\function.language.php','function'=>'smarty_function_language',),1=>array('file'=>'C:\\dev\\servers\\wamp64\\www\\gestion\\gestion_sa\\lib\\smarty\\plugins\\modifier.string_format.php','function'=>'smarty_modifier_string_format',),));
?>
	<header class="header_titre_aide"><a href='#' style="cursor:pointer;cursor:hand" onclick="javascript :window.open('../aide/a_adht_gerer_fiche_adht.php','popup','height=420,toolbar=no,location=no,directories=no,status=yes,width=660,resizable=no,scrollbars=yes,top=10,left=10')" title="<?php echo smarty_function_language(array('name'=>'title_aide'),$_smarty_tpl);?>
"><img src='../images/icones/help.gif' alt="Aide" width="20" height="20"/><?php echo smarty_function_language(array('name'=>'aide'),$_smarty_tpl);?>
</a></header> 

    <header class="header_titre">&nbsp;<?php echo smarty_function_language(array('name'=>'titre_visu_fiche_adht'),$_smarty_tpl);?>
</header>
	<div class="ligne_coul"></div> 	
	<div id="contenu"> 	
    <table style="width:100%;">
		<tr> 
			<th class="LignegrisC" colspan="2"><?php echo smarty_function_language(array('name'=>'visu_fiche_adht_recap'),$_smarty_tpl);?>
  <?php echo $_smarty_tpl->tpl_vars['affiche_message']->value;?>
</th> 
		</tr>
		<tr>
			<td class="Lignegris_pad1" style="width:50%;"><?php echo smarty_function_language(array('name'=>'visu_fiche_adht_enr'),$_smarty_tpl);?>
&nbsp;<?php echo $_smarty_tpl->tpl_vars['id_adht']->value;?>
&nbsp;<?php echo smarty_function_language(array('name'=>'visu_fiche_adht_enrdu'),$_smarty_tpl);?>
:&nbsp;<?php echo $_smarty_tpl->tpl_vars['data_adherent']->value['datecreationfiche_adht'];?>
</td>
			<td class="Lignegris_pad1" ><?php echo smarty_function_language(array('name'=>'visu_fiche_adht_lastmod'),$_smarty_tpl);?>
:&nbsp;<?php if ($_smarty_tpl->tpl_vars['data_adherent']->value['datemodiffiche_adht'] == '00/00/0000' || $_smarty_tpl->tpl_vars['data_adherent']->value['datemodiffiche_adht'] == '') {?> Aucune <?php } else {
echo $_smarty_tpl->tpl_vars['data_adherent']->value['datemodiffiche_adht'];
}?></td>	
		</tr>
		<tr>
			<td class="Lignegris_pad1" ><?php if ($_smarty_tpl->tpl_vars['data_adherent']->value['promotion_adht']) {?> <?php echo smarty_function_language(array('name'=>'fiche_adht_promotion'),$_smarty_tpl);?>
 : <?php echo $_smarty_tpl->tpl_vars['data_adherent']->value['promotion_adht'];
}?></td>	
			<td class="Lignegris_pad1" ><?php echo smarty_function_language(array('name'=>'fiche_adht_fiche_enr'),$_smarty_tpl);?>
:&nbsp;<?php echo $_smarty_tpl->tpl_vars['pnom_creation_fiche_adht']->value;?>
</td>
		</tr>	
		<tr> 
			<th class="Ligne_top" colspan="2">&nbsp;</th> 
		</tr>		
		
	</table>

	<table style="width:65%;"> 
			<?php if ($_smarty_tpl->tpl_vars['data_adherent']->value['soc_adht'] != '999') {?> 				<?php if ($_smarty_tpl->tpl_vars['data_adherent']->value['date_echeance_cotis'] == '0000-00-00' || $_smarty_tpl->tpl_vars['data_adherent']->value['date_echeance_cotis'] == '') {?> 
				<tr>
			<td class="Lignegris_pad1" style="width:75%;"> 
			<span class="TexterougeGras"><?php echo smarty_function_language(array('name'=>'message_fiche_cot_nonok'),$_smarty_tpl);?>
</span>&nbsp;<?php if ($_smarty_tpl->tpl_vars['priorite_adht']->value >= 7) {?><a href="../adherent/remplir_cotisations_adht.php?id_adht_cotis=<?php echo $_smarty_tpl->tpl_vars['id_adht']->value;?>
" title="<?php echo smarty_function_language(array('name'=>'liste_cotis_adht_liste_title'),$_smarty_tpl);?>
"><span class="submit_ok" title="<?php echo smarty_function_language(array('name'=>'liste_cotis_adht_addcotis_button_title'),$_smarty_tpl);?>
">&nbsp;<?php echo smarty_function_language(array('name'=>'liste_cotis_adht_addcotis_button'),$_smarty_tpl);?>
&nbsp;</span></a><?php }?>
			</td>	
			<td >&nbsp;</td>
			<td >&nbsp;</td>
		</tr>	
		<?php } else { ?> 		<tr>
			<td class="Lignegris_pad1" style="width:51%;">
			<span class="TextenoirGras">&nbsp;<?php echo smarty_function_language(array('name'=>'liste_cotis_adht_cotiss'),$_smarty_tpl);?>
 : 
			<?php if ($_smarty_tpl->tpl_vars['priorite_adht']->value > 5) {?><a href="../adherent/liste_cotisations_adht.php?id_adht=<?php echo $_smarty_tpl->tpl_vars['id_adht']->value;?>
&amp;filtre_fiche=1" title="<?php echo smarty_function_language(array('name'=>'liste_cotis_adht_liste_title'),$_smarty_tpl);?>
"><?php echo $_smarty_tpl->tpl_vars['data_adherent']->value['prenom_adht'];?>
 <?php echo $_smarty_tpl->tpl_vars['data_adherent']->value['nom_adht'];?>
</a><?php }?></span>
			</td>	
			<td >&nbsp;</td>
			<td >&nbsp;</td>
		</tr>			
		<tr>
				<th class="LignegrisTC" style="width:51%;"><?php echo smarty_function_language(array('name'=>'fiche_cotis_adht_type'),$_smarty_tpl);?>
</th>
				<th class="LignegrisTC" style="width:12%;"><?php echo smarty_function_language(array('name'=>'liste_cotis_adht_col_d_deb'),$_smarty_tpl);?>
</th>
				<th class="LignegrisTC" style="width:12%;"><?php echo smarty_function_language(array('name'=>'liste_cotis_adht_col_d_fin'),$_smarty_tpl);?>
</th>
		</tr>
	 		<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['cotis_adht']->value, 'item_cotis_adht', false, 'ordre');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['ordre']->value => $_smarty_tpl->tpl_vars['item_cotis_adht']->value) {
?>
		<tr class="Lignegris<?php echo $_smarty_tpl->tpl_vars['item_cotis_adht']->value['coul'];?>
">
				<td><?php echo $_smarty_tpl->tpl_vars['item_cotis_adht']->value['nom_type_cotisation'];?>
</td>
				<td><?php echo $_smarty_tpl->tpl_vars['item_cotis_adht']->value['date_debut_cotis'];?>
</td>
				<td><?php echo $_smarty_tpl->tpl_vars['item_cotis_adht']->value['date_fin_cotis'];?>
</td>
		</tr>
			<?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>	
		<?php }?> 	<?php } else { ?> 		<tr> 
			<td >&nbsp;</td>
		</tr> 			
	<?php }?> 	
	</table>		
	<br />
	
	
	<table style="width:100%;">
		<tr> 
			<th class="LignegrisTC" colspan="3"><?php echo smarty_function_language(array('name'=>'gestion_fiche_adht'),$_smarty_tpl);?>
&nbsp;&nbsp; 
			<?php if ($_smarty_tpl->tpl_vars['data_adherent']->value['soc_adht'] != 999) {?><a href="remplir_infogene_adht.php?id_adht=<?php echo $_smarty_tpl->tpl_vars['id_adht']->value;?>
"><span class="submit_ok" title=" <?php echo smarty_function_language(array('name'=>'visu_fiche_adht_modif_button_title'),$_smarty_tpl);?>
">&nbsp; <?php echo smarty_function_language(array('name'=>'visu_fiche_adht_modif_button'),$_smarty_tpl);?>
&nbsp;</span>
			<?php } else { ?>
			<?php if ($_smarty_tpl->tpl_vars['priorite_adht']->value == 9) {?><a href="gerer_fiche_adht.php?reactiv_adht=1&amp;id_adht=<?php echo $_smarty_tpl->tpl_vars['id_adht']->value;?>
"><span class="submit_del" title=" <?php echo smarty_function_language(array('name'=>'visu_fiche_adht_reactiv_button_title'),$_smarty_tpl);?>
">&nbsp; <?php echo smarty_function_language(array('name'=>'visu_fiche_adht_reactiv_button'),$_smarty_tpl);?>
&nbsp;</span><?php }?>
			<?php }?></a></th> 
			<td class="LignegrisTC">&nbsp;</td>
		</tr>
	    <tr> 
		    <td class="Lignegris_pad1" style="width:60%;" colspan="2"><?php echo $_smarty_tpl->tpl_vars['data_adherent']->value['civilite_adht'];?>
<span class="TextenoirGras"> <?php echo $_smarty_tpl->tpl_vars['data_adherent']->value['prenom_adht'];?>
 <?php echo $_smarty_tpl->tpl_vars['data_adherent']->value['nom_adht'];?>
</span><br />
					<?php echo $_smarty_tpl->tpl_vars['data_adherent']->value['adresse_adht'];?>
<br />
					<?php echo $_smarty_tpl->tpl_vars['data_adherent']->value['cp_adht'];?>
&nbsp;<?php echo $_smarty_tpl->tpl_vars['data_adherent']->value['ville_adht'];?>
<br /></td>
		    <td  class="LignegrisC_Center" style="width:20%;" rowspan="2"><?php echo $_smarty_tpl->tpl_vars['photo_adht']->value;?>
</td>
		    <td  class="LignegrisC_Center" style="width:20%;" rowspan="2"><?php echo smarty_function_language(array('name'=>'fiche_adht_ant'),$_smarty_tpl);?>
&nbsp;:&nbsp;<?php echo $_smarty_tpl->tpl_vars['data_adherent']->value['nom_type_antenne'];?>

					<br /><br /><?php echo $_smarty_tpl->tpl_vars['data_adherent']->value['tranche_age'];?>
&nbsp;<br />
					&nbsp;<br /><?php if ($_smarty_tpl->tpl_vars['data_adherent']->value['age']) {
echo smarty_function_language(array('name'=>'visu_fiche_adht_age'),$_smarty_tpl);?>
:&nbsp;<?php echo smarty_modifier_string_format($_smarty_tpl->tpl_vars['data_adherent']->value['age'],"%d");?>
&nbsp;<?php echo smarty_function_language(array('name'=>'visu_fiche_adht_an'),$_smarty_tpl);
}?></td>
	  </tr>
	  <tr> 
		    <td class="Lignegris_pad1" style="width:20%;">
			<?php if ($_smarty_tpl->tpl_vars['data_adherent']->value['datenaisance_adht'] <> '') {?> <?php echo smarty_function_language(array('name'=>'tpl_adht_datenais'),$_smarty_tpl);?>
<br /><br /><?php }?>
			<?php if ($_smarty_tpl->tpl_vars['data_adherent']->value['telephonef_adht']) {?> <?php echo smarty_function_language(array('name'=>'tpl_col_adht_teleph'),$_smarty_tpl);?>
<br /><?php }?> 			<?php if ($_smarty_tpl->tpl_vars['data_adherent']->value['telephonep_adht']) {?> <?php echo smarty_function_language(array('name'=>'tpl_col_adht_portable'),$_smarty_tpl);?>
<br /><?php }?>
			<?php if ($_smarty_tpl->tpl_vars['data_adherent']->value['telecopie_adht']) {?> <?php echo smarty_function_language(array('name'=>'fiche_adht_fax'),$_smarty_tpl);?>
<br /><?php }?>
			<?php if ($_smarty_tpl->tpl_vars['data_adherent']->value['profession_adht']) {?> <?php echo smarty_function_language(array('name'=>'fiche_adht_profession'),$_smarty_tpl);?>
<br /><?php }?>	 
			<br />
			<?php if ($_smarty_tpl->tpl_vars['data_adherent']->value['email_adht']) {?> <?php echo smarty_function_language(array('name'=>'fiche_adht_mail'),$_smarty_tpl);?>
 
				<?php if ($_smarty_tpl->tpl_vars['priorite_adht']->value > 4) {?>  				<a href="remplir_message_adht.php?id_adht=<?php echo $_smarty_tpl->tpl_vars['id_adht']->value;?>
"><img src="../images/icones16/i_mail.png" width="16" height="11" alt="" title="<?php echo smarty_function_language(array('name'=>'visu_fiche_adht_mail_title'),$_smarty_tpl);?>
"/></a> <?php echo $_smarty_tpl->tpl_vars['resultat_mail']->value;?>

				<?php }?><br />
			<?php }?>
			<?php if ($_smarty_tpl->tpl_vars['data_adherent']->value['siteweb_adht']) {?> <?php echo smarty_function_language(array('name'=>'fiche_adht_web'),$_smarty_tpl);?>
<br /><?php }?> 
			</td>
		    <td class="Lignegris_pad1" style="width:40%;">
			<?php if ($_smarty_tpl->tpl_vars['data_adherent']->value['datenaisance_adht'] <> '') {?> <?php echo $_smarty_tpl->tpl_vars['data_adherent']->value['datenaisance_adht'];?>
<br /><br /><?php }?>
			<?php if ($_smarty_tpl->tpl_vars['data_adherent']->value['telephonef_adht']) {?> <?php echo $_smarty_tpl->tpl_vars['data_adherent']->value['telephonef_adht'];?>
<br /><?php }?>
			<?php if ($_smarty_tpl->tpl_vars['data_adherent']->value['telephonep_adht']) {?> <?php echo $_smarty_tpl->tpl_vars['data_adherent']->value['telephonep_adht'];?>
<br /><?php }?>
			<?php if ($_smarty_tpl->tpl_vars['data_adherent']->value['telecopie_adht']) {?> <?php echo $_smarty_tpl->tpl_vars['data_adherent']->value['telecopie_adht'];?>
<br /><?php }?>
			<?php if ($_smarty_tpl->tpl_vars['data_adherent']->value['profession_adht']) {?> <?php echo $_smarty_tpl->tpl_vars['data_adherent']->value['profession_adht'];?>
<br /><?php }?>
			<br />
			<?php if ($_smarty_tpl->tpl_vars['data_adherent']->value['email_adht']) {?><a href="mailto:<?php echo $_smarty_tpl->tpl_vars['data_adherent']->value['email_adht'];?>
"><?php echo $_smarty_tpl->tpl_vars['data_adherent']->value['email_adht'];?>
</a><br /><?php }?>
			<?php if ($_smarty_tpl->tpl_vars['data_adherent']->value['siteweb_adht']) {?><a href="http://<?php echo $_smarty_tpl->tpl_vars['data_adherent']->value['siteweb_adht'];?>
" target="_blank">http://<?php echo $_smarty_tpl->tpl_vars['data_adherent']->value['siteweb_adht'];?>
</a><br /><?php }?>
			</td>
	  </tr>
	  
		<tr>			<td class="Lignegris_pad1" colspan="4">
			<?php if ($_smarty_tpl->tpl_vars['data_adherent']->value['autres_info_adht']) {?> <span class="TextenoirGras"><?php echo smarty_function_language(array('name'=>'fiche_adht_autres_info'),$_smarty_tpl);?>
</span> : <?php echo $_smarty_tpl->tpl_vars['data_adherent']->value['autres_info_adht'];
}?>
			&nbsp;</td>
		</tr>	  
  
		<tr> 			<td class="Lignegris_pad1" colspan="4">
		<?php if ($_smarty_tpl->tpl_vars['data_adherent']->value['visibl_adht'] == "Non") {?>	
			<span class="TexterougeGras"><?php echo $_smarty_tpl->tpl_vars['data_adherent']->value['visibl_adht'];?>
</span><?php echo smarty_function_language(array('name'=>'visu_fiche_adht_coord_no'),$_smarty_tpl);?>
 <?php echo $_smarty_tpl->tpl_vars['adherent_bene']->value;?>
s <?php echo $_smarty_tpl->tpl_vars['nom_asso_gestassophp']->value;?>
<br/>
		<?php } else { ?>
          <span class="TextevertGras"><?php echo $_smarty_tpl->tpl_vars['data_adherent']->value['visibl_adht'];?>
</span><?php echo smarty_function_language(array('name'=>'visu_fiche_adht_coord_yes'),$_smarty_tpl);?>
 <?php echo $_smarty_tpl->tpl_vars['adherent_bene']->value;?>
s <?php echo $_smarty_tpl->tpl_vars['nom_asso_gestassophp']->value;?>
<br/>		
		<?php }?>
			</td>			
		</tr>
	
		<tr>
			<td class="LignegrisC" colspan="4">&nbsp;</td>
		</tr>		
		<tr> 		
			 <th class="Lignegris_pad1" style="width:25%;"><?php echo smarty_function_language(array('name'=>'fiche_adht_compl'),$_smarty_tpl);?>
</th>

			<td class="Lignegris_pad1" colspan="3" style="width:75%;">
			<?php if ($_smarty_tpl->tpl_vars['data_adherent']->value['disponib_adht']) {
echo $_smarty_tpl->tpl_vars['data_adherent']->value['disponib_adht'];
}?>
			</td>		
				
		</tr>
		
		<tr>
			<td class="LignegrisC" colspan="4">&nbsp;</td>
		</tr>
		<tr>		
			<td class="centre-txt" colspan="4">
			<?php if ($_smarty_tpl->tpl_vars['data_adherent']->value['soc_adht'] == '999') {?>
						<a href="../adherent/liste_adht_admin.php?filtre_nom=&amp;filtre_membre=3&amp;affiche_nb_adht=20"><span class="submit_nul" title="<?php echo smarty_function_language(array('name'=>'tpl_retour_button_title'),$_smarty_tpl);?>
"><?php echo smarty_function_language(array('name'=>'tpl_retour_button'),$_smarty_tpl);?>
</span></a>
			<?php }?>
			</td>
		</tr>		
    </table>
	

<?php if ($_smarty_tpl->tpl_vars['data_adherent']->value['soc_adht'] != '999') {?>
		<?php if ($_smarty_tpl->tpl_vars['info_fichiermission_adht']->value == '1') {
$_smarty_tpl->_subTemplateRender('file:adherent/consulter_info_fichiermission_adht.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
}?>
	
	</div>  
<?php }
}
