<?php
/* Smarty version 3.1.33, created on 2019-02-02 16:01:35
  from 'C:\dev\servers\wamp64\www\gestion\gestion_sa\gestassophp_sa\templates\adherent\liste_adht_admin.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5c55bedf6a6156_14259270',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'cf9e17b20be6327b8787db386f595d0f74e467c3' => 
    array (
      0 => 'C:\\dev\\servers\\wamp64\\www\\gestion\\gestion_sa\\gestassophp_sa\\templates\\adherent\\liste_adht_admin.tpl',
      1 => 1459264374,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5c55bedf6a6156_14259270 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_checkPlugins(array(0=>array('file'=>'C:\\dev\\servers\\wamp64\\www\\gestion\\gestion_sa\\lib\\smarty\\plugins\\function.language.php','function'=>'smarty_function_language',),1=>array('file'=>'C:\\dev\\servers\\wamp64\\www\\gestion\\gestion_sa\\lib\\smarty\\plugins\\function.html_options.php','function'=>'smarty_function_html_options',),));
?>
	<header class="header_titre_aide"><a href='#' style="cursor:pointer;cursor:hand" onclick="javascript :window.open('../aide/a_adht_liste_admin.php','popup','height=650,toolbar=no,location=no,directories=no,status=yes,width=660,resizable=no,scrollbars=yes,top=10,left=10')" title="<?php echo smarty_function_language(array('name'=>'title_aide'),$_smarty_tpl);?>
"><img src='../images/icones/help.gif' alt="Aide" width="20" height="20"/><?php echo smarty_function_language(array('name'=>'aide'),$_smarty_tpl);?>
</a></header> 

    <header class="header_titre"><?php echo smarty_function_language(array('name'=>'menu_admin_gestion'),$_smarty_tpl);?>
&nbsp;-&nbsp;<?php echo smarty_function_language(array('name'=>'titre_admin_liste_adht'),$_smarty_tpl);?>
</header>
	<div class="ligne_coul"></div> 	
	<div id="contenu">  <?php if ($_smarty_tpl->tpl_vars['erreur_suppression_fiche']->value == 1) {?>
		<div id="erreur-box">  <?php echo smarty_function_language(array('name'=>'admin_liste_adht_att'),$_smarty_tpl);?>
 <?php echo $_smarty_tpl->tpl_vars['erreur_suppression_id']->value;?>
 !! - <?php echo smarty_function_language(array('name'=>'admin_liste_adht_date_f_cotis'),$_smarty_tpl);
echo $_smarty_tpl->tpl_vars['erreur_suppression_date']->value;?>
 <br /> <?php echo smarty_function_language(array('name'=>'liste_cotis_adht_archiv_alert'),$_smarty_tpl);?>

	</div>
<?php }?>	
 	
 <?php if ($_smarty_tpl->tpl_vars['erreur1_suppression_fiche']->value == 1) {?>
		<div id="erreur-box">  <?php echo smarty_function_language(array('name'=>'admin_liste_adht_att'),$_smarty_tpl);?>
 <?php echo $_smarty_tpl->tpl_vars['erreur1_suppression_id']->value;?>
 !! <br /> - <?php echo smarty_function_language(array('name'=>'admin_liste_adht_alert_priorite'),$_smarty_tpl);
echo $_smarty_tpl->tpl_vars['erreur1_suppression_priorite']->value;?>
 <br />
		<a href="../admin/remplir_priorite.php" title="<?php echo smarty_function_language(array('name'=>'titre_admin_gerer_priorite_adherents'),$_smarty_tpl);?>
"><?php echo smarty_function_language(array('name'=>'admin_liste_adht_alert_priorite_0'),$_smarty_tpl);?>
 </a>
		</div>
<?php }?>	
	
	<form action="liste_adht_admin.php" method="get" name="filtre">
 	

		<div id="listfilter">
			<input type="submit" class="submit_ok" value="<?php echo smarty_function_language(array('name'=>'tpl_filter_button'),$_smarty_tpl);?>
" title="<?php echo smarty_function_language(array('name'=>'tpl_filter_button_title'),$_smarty_tpl);?>
"/>
			<label for="filtre_nom"><?php echo smarty_function_language(array('name'=>'liste_adht_parmi'),$_smarty_tpl);?>
</label>
			<input type="text" name="filtre_nom" id="filtre_nom" value="<?php echo $_smarty_tpl->tpl_vars['filtre_adht_nom']->value;?>
" title="<?php echo smarty_function_language(array('name'=>'tpl_liste_adht_parmi_title'),$_smarty_tpl);?>
"/>&nbsp;
		 	<?php echo smarty_function_language(array('name'=>'tpl_texte_select'),$_smarty_tpl);?>

			<select name="filtre_membre" onchange="form.submit()">
				<?php echo smarty_function_html_options(array('options'=>$_smarty_tpl->tpl_vars['filtre_options']->value,'selected'=>$_smarty_tpl->tpl_vars['filtremembre_adht']->value),$_smarty_tpl);?>

			</select>
			
		</div>
		
	
		<table style="width:100%;">
			<tr>
				<td><?php echo $_smarty_tpl->tpl_vars['nb_lines']->value;?>
 <?php if ($_smarty_tpl->tpl_vars['nb_lines']->value > 1) {
echo $_smarty_tpl->tpl_vars['adherent_bene']->value;?>
s <?php } else {
echo $_smarty_tpl->tpl_vars['adherent_bene']->value;?>
 <?php }?>&nbsp;&nbsp;<a href="../adherent/remplir_infogene_adht.php"><span class="submit_ok" title="<?php echo smarty_function_language(array('name'=>'admin_liste_adht_addadht_button_title'),$_smarty_tpl);?>
">&nbsp;<?php echo smarty_function_language(array('name'=>'admin_liste_adht_addadht_button_title'),$_smarty_tpl);?>
&nbsp;</span></a></td>
				<td class="centre-txt"><?php echo smarty_function_language(array('name'=>'tpl_select_affichepar'),$_smarty_tpl);?>

					<select name="affiche_nb_adht" onchange="form.submit()">
						<?php echo smarty_function_html_options(array('options'=>$_smarty_tpl->tpl_vars['affichenb_adht_options']->value,'selected'=>$_smarty_tpl->tpl_vars['affiche_nb_adht']->value),$_smarty_tpl);?>
 
					</select>
				</td>
				<td class="aff_droite-txt"><?php echo smarty_function_language(array('name'=>'tpl_pages'),$_smarty_tpl);?>
<span class="NumPageGras">
					<?php
$__section_pageLoop_0_loop = (is_array(@$_loop=$_smarty_tpl->tpl_vars['nb_pages']->value) ? count($_loop) : max(0, (int) $_loop));
$__section_pageLoop_0_start = min(1, $__section_pageLoop_0_loop);
$__section_pageLoop_0_total = min(($__section_pageLoop_0_loop - $__section_pageLoop_0_start), $__section_pageLoop_0_loop);
$_smarty_tpl->tpl_vars['__smarty_section_pageLoop'] = new Smarty_Variable(array());
if ($__section_pageLoop_0_total !== 0) {
for ($__section_pageLoop_0_iteration = 1, $_smarty_tpl->tpl_vars['__smarty_section_pageLoop']->value['index'] = $__section_pageLoop_0_start; $__section_pageLoop_0_iteration <= $__section_pageLoop_0_total; $__section_pageLoop_0_iteration++, $_smarty_tpl->tpl_vars['__smarty_section_pageLoop']->value['index']++){
?>
					<?php if ((isset($_smarty_tpl->tpl_vars['__smarty_section_pageLoop']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_pageLoop']->value['index'] : null) == $_smarty_tpl->tpl_vars['numpage']->value) {
echo (isset($_smarty_tpl->tpl_vars['__smarty_section_pageLoop']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_pageLoop']->value['index'] : null);?>

					<?php } else { ?><a href="liste_adht_admin.php?numpage_affiche=<?php echo (isset($_smarty_tpl->tpl_vars['__smarty_section_pageLoop']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_pageLoop']->value['index'] : null);?>
&amp;affiche_nb_adht=<?php echo $_smarty_tpl->tpl_vars['affiche_nb_adht']->value;?>
&amp;filtre_membre=<?php echo $_smarty_tpl->tpl_vars['filtremembre_adht']->value;?>
&amp;filtre_nom=<?php echo $_smarty_tpl->tpl_vars['filtre_adht_nom']->value;?>
" title="<?php echo smarty_function_language(array('name'=>'tpl_go_pages'),$_smarty_tpl);?>
"><?php echo (isset($_smarty_tpl->tpl_vars['__smarty_section_pageLoop']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_pageLoop']->value['index'] : null);?>
</a>
					<?php }?>
					<?php
}
}
?></span>
				</td>
			</tr>					
		</table>
			
	</form>
	
		
	

		<table style="width:100%;"> 
			<tr>
				<th class="LignegrisTC" style="width:4%;">
					<!-- a href="liste_adht_admin.php?tri=0&amp;affiche_nb_adht=<?php echo $_smarty_tpl->tpl_vars['affiche_nb_adht']->value;?>
&amp;filtre_membre=<?php echo $_smarty_tpl->tpl_vars['filtremembre_adht']->value;?>
&amp;filtre_nom=<?php echo $_smarty_tpl->tpl_vars['filtre_adht_nom']->value;?>
" title="<?php echo smarty_function_language(array('name'=>'tpl_title_clictri'),$_smarty_tpl);?>
">#</a -->
					<a href="liste_adht_admin.php?tri=0&amp;affiche_nb_adht=<?php echo $_smarty_tpl->tpl_vars['affiche_nb_adht']->value;?>
&amp;filtre_membre=<?php echo $_smarty_tpl->tpl_vars['filtremembre_adht']->value;?>
&amp;filtre_nom=<?php echo $_smarty_tpl->tpl_vars['filtre_adht_nom']->value;?>
" title="<?php echo smarty_function_language(array('name'=>'tpl_title_clictri'),$_smarty_tpl);?>
">#</a>
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
				<th class="LignegrisTC" style="width:20%;">
					<a href="liste_adht_admin.php?tri=1&amp;affiche_nb_adht=<?php echo $_smarty_tpl->tpl_vars['affiche_nb_adht']->value;?>
&amp;filtre_membre=<?php echo $_smarty_tpl->tpl_vars['filtremembre_adht']->value;?>
&amp;filtre_nom=<?php echo $_smarty_tpl->tpl_vars['filtre_adht_nom']->value;?>
" title="<?php echo smarty_function_language(array('name'=>'tpl_title_clictri'),$_smarty_tpl);?>
"><?php echo smarty_function_language(array('name'=>'tpl_col_nompre'),$_smarty_tpl);?>
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
				

				<th class="LignegrisTC" style="width:20%;">
					<a href="liste_adht_admin.php?tri=2&amp;affiche_nb_adht=<?php echo $_smarty_tpl->tpl_vars['affiche_nb_adht']->value;?>
&amp;filtre_membre=<?php echo $_smarty_tpl->tpl_vars['filtremembre_adht']->value;?>
&amp;filtre_nom=<?php echo $_smarty_tpl->tpl_vars['filtre_adht_nom']->value;?>
" title="<?php echo smarty_function_language(array('name'=>'tpl_title_clictri'),$_smarty_tpl);?>
"><?php echo smarty_function_language(array('name'=>'tpl_col_adht_ville'),$_smarty_tpl);?>
</a>
					<?php if ($_SESSION['tri'] == 2) {?>
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
				
				<th class="LignegrisTC" style="width:12%;">
					<a href="liste_adht_admin.php?tri=3&amp;affiche_nb_adht=<?php echo $_smarty_tpl->tpl_vars['affiche_nb_adht']->value;?>
&amp;filtre_membre=<?php echo $_smarty_tpl->tpl_vars['filtremembre_adht']->value;?>
&amp;filtre_nom=<?php echo $_smarty_tpl->tpl_vars['filtre_adht_nom']->value;?>
" title="<?php echo smarty_function_language(array('name'=>'tpl_title_clictri'),$_smarty_tpl);?>
"><?php echo smarty_function_language(array('name'=>'admin_liste_adht_col_inscript'),$_smarty_tpl);?>
</a>
					<?php if ($_SESSION['tri'] == 3) {?>
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
				<th class="LignegrisTC" style="width:11%;">
					<a href="liste_adht_admin.php?tri=4&amp;affiche_nb_adht=<?php echo $_smarty_tpl->tpl_vars['affiche_nb_adht']->value;?>
&amp;filtre_membre=<?php echo $_smarty_tpl->tpl_vars['filtremembre_adht']->value;?>
&amp;filtre_nom=<?php echo $_smarty_tpl->tpl_vars['filtre_adht_nom']->value;?>
" title="<?php echo smarty_function_language(array('name'=>'tpl_title_clictri'),$_smarty_tpl);?>
"><?php echo smarty_function_language(array('name'=>'admin_liste_adht_col_ech'),$_smarty_tpl);?>
</a>
					<?php if ($_SESSION['tri'] == 4) {?>
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
								<th class="LignegrisTC" style="width:5%;">
					<a href="liste_adht_admin.php?tri=5&amp;affiche_nb_adht=<?php echo $_smarty_tpl->tpl_vars['affiche_nb_adht']->value;?>
&amp;filtre_membre=<?php echo $_smarty_tpl->tpl_vars['filtremembre_adht']->value;?>
&amp;filtre_nom=<?php echo $_smarty_tpl->tpl_vars['filtre_adht_nom']->value;?>
" title="<?php echo smarty_function_language(array('name'=>'tpl_title_clictri'),$_smarty_tpl);?>
"><?php echo smarty_function_language(array('name'=>'admin_liste_adht_col_enr'),$_smarty_tpl);?>
</a>
					<?php if ($_SESSION['tri'] == 5) {?>
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
								<th class="LignegrisTC" style="width:16%;">
					<a href="liste_adht_admin.php?tri=6&amp;affiche_nb_adht=<?php echo $_smarty_tpl->tpl_vars['affiche_nb_adht']->value;?>
&amp;filtre_membre=<?php echo $_smarty_tpl->tpl_vars['filtremembre_adht']->value;?>
&amp;filtre_nom=<?php echo $_smarty_tpl->tpl_vars['filtre_adht_nom']->value;?>
" title="<?php echo smarty_function_language(array('name'=>'tpl_title_clictri'),$_smarty_tpl);?>
"><?php echo smarty_function_language(array('name'=>'fiche_adht_ant'),$_smarty_tpl);?>
</a>
					<?php if ($_SESSION['tri'] == 6) {?>
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
				
				<th class="LignegrisTC" style="width:12%;"><?php echo smarty_function_language(array('name'=>'tpl_col_actions'),$_smarty_tpl);?>

				</th>
				
			</tr>
<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['membres']->value, 'item_membres', false, 'ordre');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['ordre']->value => $_smarty_tpl->tpl_vars['item_membres']->value) {
?>
			<tr class="Lignegris<?php echo $_smarty_tpl->tpl_vars['item_membres']->value['coul'];?>
">
				<td><?php echo $_smarty_tpl->tpl_vars['item_membres']->value['id_adht'];?>
</td>
				<td><?php if ($_smarty_tpl->tpl_vars['filtremembre_adht']->value != '3') {?><a href="../adherent/gerer_fiche_adht.php?id_adht=<?php echo $_smarty_tpl->tpl_vars['item_membres']->value['id_adht'];?>
" title="<?php echo smarty_function_language(array('name'=>'liste_adht_visu_icon_title'),$_smarty_tpl);?>
"><?php echo $_smarty_tpl->tpl_vars['item_membres']->value['nom_adht'];?>
 <?php echo $_smarty_tpl->tpl_vars['item_membres']->value['prenom_adht'];?>
</a><?php if ($_smarty_tpl->tpl_vars['item_membres']->value['soc_adht'] == '999') {?> <img src="../images/icones16/i_delete.png" width="16" height="16" alt="" title="<?php echo smarty_function_language(array('name'=>'admin_liste_adht_fiche_del_icon_title'),$_smarty_tpl);?>
"/><?php }
} else { ?><span class="Texterouge"><?php echo $_smarty_tpl->tpl_vars['item_membres']->value['nom_adht'];?>
 <?php echo $_smarty_tpl->tpl_vars['item_membres']->value['prenom_adht'];
if ($_smarty_tpl->tpl_vars['item_membres']->value['soc_adht'] == '999') {?> <img src="../images/icones16/i_delete.png" width="16" height="16" alt="" title="<?php echo smarty_function_language(array('name'=>'admin_liste_adht_fiche_del_icon_title'),$_smarty_tpl);?>
"/><?php }?></span><?php }?></td>
				<td><?php echo $_smarty_tpl->tpl_vars['item_membres']->value['ville_adht'];?>
</td>
				<td><?php echo $_smarty_tpl->tpl_vars['item_membres']->value['date_adht'];?>
</td>
				<td>&nbsp;<?php echo $_smarty_tpl->tpl_vars['item_membres']->value['fin_cotisation'];?>
</td>
		
				<td><?php if ($_smarty_tpl->tpl_vars['item_membres']->value['qui_enrg_adht'] != 0) {?>&nbsp;<a href="../adherent/consulter_fiche_adht_admin2.php?id_adht=<?php echo $_smarty_tpl->tpl_vars['item_membres']->value['qui_enrg_adht'];?>
" title="<?php echo smarty_function_language(array('name'=>'admin_liste_adht_enr_title'),$_smarty_tpl);?>
 <?php echo $_smarty_tpl->tpl_vars['item_membres']->value['pnom_creation_fiche_adht'];?>
"><?php echo $_smarty_tpl->tpl_vars['item_membres']->value['qui_enrg_adht'];?>
</a><?php }?></td>
				<td>&nbsp;<?php echo $_smarty_tpl->tpl_vars['item_membres']->value['nom_type_antenne'];?>
</td>				
				<td class="centre-txt">
				<?php if ($_smarty_tpl->tpl_vars['item_membres']->value['soc_adht'] <> '999') {?>
				<?php if ($_smarty_tpl->tpl_vars['priorite_adht']->value >= 7) {?>
				<a href="../adherent/gerer_fiche_adht.php?id_adht=<?php echo $_smarty_tpl->tpl_vars['item_membres']->value['id_adht'];?>
"><img src="../images/icones16/i_voir.png" width="16" height="16" alt="" title="<?php echo smarty_function_language(array('name'=>'liste_adht_visu_icon_title'),$_smarty_tpl);?>
"/></a>&nbsp;
				<a href="../adherent/remplir_fichier_adht.php?id_adht_file=<?php echo $_smarty_tpl->tpl_vars['item_membres']->value['id_adht'];?>
"><img src="../images/icones16/i_folder.png" width="16" height="16" alt="" title="<?php echo smarty_function_language(array('name'=>'admin_liste_adht_addfile_title'),$_smarty_tpl);?>
"/></a>&nbsp;
				<a href="../adherent/liste_cotisations_adht.php?id_adht=<?php echo $_smarty_tpl->tpl_vars['item_membres']->value['id_adht'];?>
"><img src="../images/icones16/i_euro.png" width="16" height="16" alt="" title="<?php echo smarty_function_language(array('name'=>'admin_liste_adht_cotis_icon_title'),$_smarty_tpl);?>
"/></a>
				<a href="../adherent/liste_adht_admin.php?supp_fiche_adht=1&amp;id_adht=<?php echo $_smarty_tpl->tpl_vars['item_membres']->value['id_adht'];?>
" onclick="return confirm(' <?php echo smarty_function_language(array('name'=>'admin_liste_adht_js_confirm_delfiche'),$_smarty_tpl);?>
 <?php echo $_smarty_tpl->tpl_vars['item_membres']->value['id_adht'];?>
')"><img src="../images/icones16/i_delete.png" width="16" height="16" alt="" title="<?php echo smarty_function_language(array('name'=>'admin_liste_adht_del_fiche_icon_title'),$_smarty_tpl);?>
"/></a>
				<?php } elseif ($_smarty_tpl->tpl_vars['priorite_adht']->value >= 5) {?>	
<a href="../adherent/gerer_fiche_adht.php?id_adht=<?php echo $_smarty_tpl->tpl_vars['item_membres']->value['id_adht'];?>
"><img src="../images/icones16/i_voir.png" width="16" height="16" alt="" title="<?php echo smarty_function_language(array('name'=>'liste_adht_visu_icon_title'),$_smarty_tpl);?>
"/></a>&nbsp;
				<a href="../adherent/remplir_fichier_adht.php?id_adht_file=<?php echo $_smarty_tpl->tpl_vars['item_membres']->value['id_adht'];?>
"><img src="../images/icones16/i_folder.png" width="16" height="16" alt="" title="<?php echo smarty_function_language(array('name'=>'admin_liste_adht_addfile_title'),$_smarty_tpl);?>
"/></a>				
				<?php }?>
				<?php } elseif ($_smarty_tpl->tpl_vars['priorite_adht']->value >= 7 && $_smarty_tpl->tpl_vars['item_membres']->value['soc_adht'] == '999') {?>
				<a href="../adherent/gerer_fiche_adht.php?id_adht=<?php echo $_smarty_tpl->tpl_vars['item_membres']->value['id_adht'];?>
"><img src="../images/icones16/i_ficharch.png" width="16" height="16" alt="" title="<?php echo smarty_function_language(array('name'=>'liste_adht_visu_icon_title'),$_smarty_tpl);?>
"/></a>
				<?php }?>
				</td>				
			</tr>
<?php
}
} else {
?>
			<tr><td colspan="8"><?php echo smarty_function_language(array('name'=>'tpl_liste_vide'),$_smarty_tpl);?>
</td></tr>
<?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
		</table>
	
	<div class="aff_droite-txt"><?php echo smarty_function_language(array('name'=>'tpl_pages'),$_smarty_tpl);?>
<span class="NumPageGras">
					<?php
$__section_pageLoop_1_loop = (is_array(@$_loop=$_smarty_tpl->tpl_vars['nb_pages']->value) ? count($_loop) : max(0, (int) $_loop));
$__section_pageLoop_1_start = min(1, $__section_pageLoop_1_loop);
$__section_pageLoop_1_total = min(($__section_pageLoop_1_loop - $__section_pageLoop_1_start), $__section_pageLoop_1_loop);
$_smarty_tpl->tpl_vars['__smarty_section_pageLoop'] = new Smarty_Variable(array());
if ($__section_pageLoop_1_total !== 0) {
for ($__section_pageLoop_1_iteration = 1, $_smarty_tpl->tpl_vars['__smarty_section_pageLoop']->value['index'] = $__section_pageLoop_1_start; $__section_pageLoop_1_iteration <= $__section_pageLoop_1_total; $__section_pageLoop_1_iteration++, $_smarty_tpl->tpl_vars['__smarty_section_pageLoop']->value['index']++){
?>
					<?php if ((isset($_smarty_tpl->tpl_vars['__smarty_section_pageLoop']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_pageLoop']->value['index'] : null) == $_smarty_tpl->tpl_vars['numpage']->value) {
echo (isset($_smarty_tpl->tpl_vars['__smarty_section_pageLoop']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_pageLoop']->value['index'] : null);?>

					<?php } else { ?><a href="liste_adht_admin.php?numpage_affiche=<?php echo (isset($_smarty_tpl->tpl_vars['__smarty_section_pageLoop']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_pageLoop']->value['index'] : null);?>
&amp;affiche_nb_adht=<?php echo $_smarty_tpl->tpl_vars['affiche_nb_adht']->value;?>
&amp;filtre_membre=<?php echo $_smarty_tpl->tpl_vars['filtremembre_adht']->value;?>
&amp;filtre_nom=<?php echo $_smarty_tpl->tpl_vars['filtre_adht_nom']->value;?>
" title="<?php echo smarty_function_language(array('name'=>'tpl_go_pages'),$_smarty_tpl);?>
"><?php echo (isset($_smarty_tpl->tpl_vars['__smarty_section_pageLoop']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_pageLoop']->value['index'] : null);?>
</a>
					<?php }?>
					<?php
}
}
?></span></div>

	
	 
	</div>  
<?php }
}
