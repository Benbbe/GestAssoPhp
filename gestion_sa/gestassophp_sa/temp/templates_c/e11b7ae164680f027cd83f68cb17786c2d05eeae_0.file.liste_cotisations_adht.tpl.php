<?php
/* Smarty version 3.1.33, created on 2019-02-02 15:57:10
  from 'C:\dev\servers\wamp64\www\gestion\gestion_sa\gestassophp_sa\templates\adherent\liste_cotisations_adht.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5c55bdd6ba7501_54942450',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'e11b7ae164680f027cd83f68cb17786c2d05eeae' => 
    array (
      0 => 'C:\\dev\\servers\\wamp64\\www\\gestion\\gestion_sa\\gestassophp_sa\\templates\\adherent\\liste_cotisations_adht.tpl',
      1 => 1509380458,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5c55bdd6ba7501_54942450 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_checkPlugins(array(0=>array('file'=>'C:\\dev\\servers\\wamp64\\www\\gestion\\gestion_sa\\lib\\smarty\\plugins\\function.language.php','function'=>'smarty_function_language',),1=>array('file'=>'C:\\dev\\servers\\wamp64\\www\\gestion\\gestion_sa\\lib\\smarty\\plugins\\function.html_options.php','function'=>'smarty_function_html_options',),));
?>
	<header class="header_titre_aide"><a href='#' style="cursor:pointer;cursor:hand" onclick="javascript :window.open('../aide/a_adht_liste_cotisation_adht.php','popup','height=700,toolbar=no,location=no,directories=no,status=yes,width=680,resizable=no,scrollbars=yes,top=10,left=10')" title="<?php echo smarty_function_language(array('name'=>'title_aide'),$_smarty_tpl);?>
"><img src='../images/icones/help.gif' alt="Aide" width="20" height="20"/><?php echo smarty_function_language(array('name'=>'aide'),$_smarty_tpl);?>
</a></header> 

    <header class="header_titre"><?php echo smarty_function_language(array('name'=>'menu_admin_gestion'),$_smarty_tpl);?>
&nbsp;-&nbsp;<?php echo smarty_function_language(array('name'=>'titre_admin_liste_cotis_adht'),$_smarty_tpl);?>
</header>
	<div class="ligne_coul"></div> 	
	<div id="contenu"> 	
	
<?php if (!empty($_smarty_tpl->tpl_vars['erreur_saisie']->value)) {?>		
	<?php if (count($_smarty_tpl->tpl_vars['erreur_saisie']->value) != 0) {?> 
		<div id="erreur-box"><?php echo smarty_function_language(array('name'=>'tpl_texte_err_saisie'),$_smarty_tpl);?>

			<?php if ($_smarty_tpl->tpl_vars['erreur_saisie']->value['d_datedeb']) {?><br /><span class="erreur-Jaunerouge">&nbsp;<?php echo $_smarty_tpl->tpl_vars['erreur_saisie']->value['d_datedeb'];?>
</span><?php }?>
			<?php if ($_smarty_tpl->tpl_vars['erreur_saisie']->value['d_datefin']) {?><br /><span class="erreur-Jaunerouge">&nbsp;<?php echo $_smarty_tpl->tpl_vars['erreur_saisie']->value['d_datefin'];?>
</span><?php }?>
		</div>
	<?php }
}?>	
	<form action="liste_cotisations_adht.php" method="get" name="filtre">

		<div id="listfilter">
		<input type="submit" class="submit_ok" value="<?php echo smarty_function_language(array('name'=>'tpl_filter_button'),$_smarty_tpl);?>
" title="<?php echo smarty_function_language(array('name'=>'tpl_filter_button_title'),$_smarty_tpl);?>
 des dates"/>
			<label for="select_datedeb">&nbsp;<?php echo smarty_function_language(array('name'=>'liste_cotis_adht_text_lescotis'),$_smarty_tpl);?>
</label>&nbsp;
			<input type="text" name="select_datedeb" id="select_datedeb" maxlength="10" size="11" value="<?php echo $_smarty_tpl->tpl_vars['filtre_datedeb']->value;?>
" title="<?php echo smarty_function_language(array('name'=>'liste_cotis_adht_select_date_d'),$_smarty_tpl);?>
"/>
			<label for="select_datefin">&nbsp;<?php echo smarty_function_language(array('name'=>'liste_cotis_adht_text_au'),$_smarty_tpl);?>
</label>&nbsp;
			<input type="text" name="select_datefin" id="select_datefin" maxlength="10" size="11" value="<?php echo $_smarty_tpl->tpl_vars['filtre_datefin']->value;?>
" title="<?php echo smarty_function_language(array('name'=>'liste_cotis_adht_select_date_f'),$_smarty_tpl);?>
"/>
			&nbsp; 
		 	<?php echo smarty_function_language(array('name'=>'tpl_texte_select'),$_smarty_tpl);?>
&nbsp;
			<select name="filtre_fiche" onchange="form.submit()">
				<?php echo smarty_function_html_options(array('options'=>$_smarty_tpl->tpl_vars['filtre_options']->value,'selected'=>$_smarty_tpl->tpl_vars['filtre_fiche']->value),$_smarty_tpl);?>

			</select>&nbsp;
			<input type="hidden" name="id_adht" id="id_adht" value="<?php echo $_smarty_tpl->tpl_vars['id_adht']->value;?>
"/>		</div>
		
	
		<table style="width:100%;">
			<tr>
				<td><?php echo $_smarty_tpl->tpl_vars['nb_lines']->value;?>
 <?php if ($_smarty_tpl->tpl_vars['nb_lines']->value > 1) {
echo smarty_function_language(array('name'=>'liste_cotis_adht_cotiss'),$_smarty_tpl);?>
 <?php } else {
echo smarty_function_language(array('name'=>'liste_cotis_adht_cotis'),$_smarty_tpl);?>
 <?php }?>&nbsp;&nbsp;<?php if ($_smarty_tpl->tpl_vars['id_adht']->value) {?><a href="../adherent/remplir_cotisations_adht.php?id_adht_cotis=<?php echo $_smarty_tpl->tpl_vars['id_adht']->value;?>
"><span class="submit_ok" title="<?php echo smarty_function_language(array('name'=>'liste_cotis_adht_addcotis_button_title'),$_smarty_tpl);?>
">&nbsp;<?php echo smarty_function_language(array('name'=>'liste_cotis_adht_addcotis_button'),$_smarty_tpl);?>
&nbsp;</span></a>
				<?php } else { ?>
				<a href="../adherent/remplir_cotisations_adht.php"><span class="submit_ok" title="<?php echo smarty_function_language(array('name'=>'liste_cotis_adht_addcotis_button_title'),$_smarty_tpl);?>
">&nbsp;<?php echo smarty_function_language(array('name'=>'liste_cotis_adht_addcotis_button'),$_smarty_tpl);?>
&nbsp;</span></a><?php }?>&nbsp;&nbsp;				&nbsp;&nbsp;				<a href="../adherent/archiverenserie_cotisations_adht.php?id_adht_cotis=<?php echo $_smarty_tpl->tpl_vars['id_adht']->value;?>
"><?php echo smarty_function_language(array('name'=>'titre_admin_listearchiv_cotis_adht'),$_smarty_tpl);?>
</a>
				</td>
				<?php if ($_smarty_tpl->tpl_vars['affiche_liste_complete']->value == "1") {?>				<td class="centre-txt"><?php echo smarty_function_language(array('name'=>'tpl_select_affichepar'),$_smarty_tpl);?>

					<select name="affiche_nb_adht" onchange="form.submit()">
						<?php echo smarty_function_html_options(array('options'=>$_smarty_tpl->tpl_vars['affichenb_adht_options']->value,'selected'=>$_smarty_tpl->tpl_vars['affiche_nb_adht']->value),$_smarty_tpl);?>
 
					</select>
				</td>
				<?php } else { ?>
				<td class="centre-txt">&nbsp;
				</td>
				<?php }?>
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

					<?php } else { ?><a href="liste_cotisations_adht.php?numpage_affiche=<?php echo (isset($_smarty_tpl->tpl_vars['__smarty_section_pageLoop']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_pageLoop']->value['index'] : null);?>
&amp;affiche_nb_adht=<?php echo $_smarty_tpl->tpl_vars['affiche_nb_adht']->value;?>
&amp;filtre_fiche=<?php echo $_smarty_tpl->tpl_vars['filtre_fiche']->value;?>
&amp;select_datedeb=<?php echo $_smarty_tpl->tpl_vars['filtre_datedeb']->value;?>
&amp;select_datefin=<?php echo $_smarty_tpl->tpl_vars['filtre_datefin']->value;?>
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
				<th class="LignegrisTC" style="width:4%;">					<a href="liste_cotisations_adht.php?tri=0&amp;affiche_nb_adht=<?php echo $_smarty_tpl->tpl_vars['affiche_nb_adht']->value;?>
&amp;filtre_fiche=<?php echo $_smarty_tpl->tpl_vars['filtre_fiche']->value;?>
&amp;select_datedeb=<?php echo $_smarty_tpl->tpl_vars['filtre_datedeb']->value;?>
&amp;select_datefin=<?php echo $_smarty_tpl->tpl_vars['filtre_datefin']->value;?>
&amp;id_adht=<?php echo $_smarty_tpl->tpl_vars['id_adht']->value;?>
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
				
				<th class="LignegrisTC" style="width:11%;">					<a href="liste_cotisations_adht.php?tri=1&amp;affiche_nb_adht=<?php echo $_smarty_tpl->tpl_vars['affiche_nb_adht']->value;?>
&amp;filtre_fiche=<?php echo $_smarty_tpl->tpl_vars['filtre_fiche']->value;?>
&amp;select_datedeb=<?php echo $_smarty_tpl->tpl_vars['filtre_datedeb']->value;?>
&amp;select_datefin=<?php echo $_smarty_tpl->tpl_vars['filtre_datefin']->value;?>
&amp;id_adht=<?php echo $_smarty_tpl->tpl_vars['id_adht']->value;?>
" title="<?php echo smarty_function_language(array('name'=>'tpl_title_clictri'),$_smarty_tpl);?>
"> <?php echo smarty_function_language(array('name'=>'liste_cotis_adht_col_d_enr'),$_smarty_tpl);?>
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
				
				<th class="LignegrisTC" style="width:11%;"> <?php echo smarty_function_language(array('name'=>'liste_cotis_adht_col_d_deb'),$_smarty_tpl);?>

								</th>
				
				<th class="LignegrisTC" style="width:11%;">					<a href="liste_cotisations_adht.php?tri=3&amp;affiche_nb_adht=<?php echo $_smarty_tpl->tpl_vars['affiche_nb_adht']->value;?>
&amp;filtre_fiche=<?php echo $_smarty_tpl->tpl_vars['filtre_fiche']->value;?>
&amp;select_datedeb=<?php echo $_smarty_tpl->tpl_vars['filtre_datedeb']->value;?>
&amp;select_datefin=<?php echo $_smarty_tpl->tpl_vars['filtre_datefin']->value;?>
&amp;id_adht=<?php echo $_smarty_tpl->tpl_vars['id_adht']->value;?>
" title="<?php echo smarty_function_language(array('name'=>'tpl_title_clictri'),$_smarty_tpl);?>
"> <?php echo smarty_function_language(array('name'=>'liste_cotis_adht_col_d_fin'),$_smarty_tpl);?>
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
				
				
				<th class="LignegrisTC" style="width:24%;">  
					<a href="liste_cotisations_adht.php?tri=4&amp;affiche_nb_adht=<?php echo $_smarty_tpl->tpl_vars['affiche_nb_adht']->value;?>
&amp;filtre_fiche=<?php echo $_smarty_tpl->tpl_vars['filtre_fiche']->value;?>
&amp;select_datedeb=<?php echo $_smarty_tpl->tpl_vars['filtre_datedeb']->value;?>
&amp;select_datefin=<?php echo $_smarty_tpl->tpl_vars['filtre_datefin']->value;?>
&amp;id_adht=<?php echo $_smarty_tpl->tpl_vars['id_adht']->value;?>
" title="<?php echo smarty_function_language(array('name'=>'tpl_title_clictri'),$_smarty_tpl);?>
"><?php echo smarty_function_language(array('name'=>'tpl_col_nompre'),$_smarty_tpl);?>
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

				<th class="LignegrisTC" style="width:16%;"> 
					<a href="liste_cotisations_adht.php?tri=5&amp;affiche_nb_adht=<?php echo $_smarty_tpl->tpl_vars['affiche_nb_adht']->value;?>
&amp;filtre_fiche=<?php echo $_smarty_tpl->tpl_vars['filtre_fiche']->value;?>
&amp;select_datedeb=<?php echo $_smarty_tpl->tpl_vars['filtre_datedeb']->value;?>
&amp;select_datefin=<?php echo $_smarty_tpl->tpl_vars['filtre_datefin']->value;?>
&amp;id_adht=<?php echo $_smarty_tpl->tpl_vars['id_adht']->value;?>
" title="<?php echo smarty_function_language(array('name'=>'tpl_title_clictri'),$_smarty_tpl);?>
"> <?php echo smarty_function_language(array('name'=>'liste_cotis_adht_col_type'),$_smarty_tpl);?>
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
				
				<th class="LignegrisTC" style="width:10%;">					<a href="liste_cotisations_adht.php?tri=6&amp;affiche_nb_adht=<?php echo $_smarty_tpl->tpl_vars['affiche_nb_adht']->value;?>
&amp;filtre_fiche=<?php echo $_smarty_tpl->tpl_vars['filtre_fiche']->value;?>
&amp;select_datedeb=<?php echo $_smarty_tpl->tpl_vars['filtre_datedeb']->value;?>
&amp;select_datefin=<?php echo $_smarty_tpl->tpl_vars['filtre_datefin']->value;?>
&amp;id_adht=<?php echo $_smarty_tpl->tpl_vars['id_adht']->value;?>
" title="<?php echo smarty_function_language(array('name'=>'tpl_title_clictri'),$_smarty_tpl);?>
"> <?php echo smarty_function_language(array('name'=>'liste_cotis_adht_col_montant'),$_smarty_tpl);?>
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
				
				<th class="LignegrisTC" style="width:8%;">					<a href="liste_cotisations_adht.php?tri=7&amp;affiche_nb_adht=<?php echo $_smarty_tpl->tpl_vars['affiche_nb_adht']->value;?>
&amp;filtre_fiche=<?php echo $_smarty_tpl->tpl_vars['filtre_fiche']->value;?>
&amp;select_datedeb=<?php echo $_smarty_tpl->tpl_vars['filtre_datedeb']->value;?>
&amp;select_datefin=<?php echo $_smarty_tpl->tpl_vars['filtre_datefin']->value;?>
&amp;id_adht=<?php echo $_smarty_tpl->tpl_vars['id_adht']->value;?>
" title="<?php echo smarty_function_language(array('name'=>'tpl_title_clictri'),$_smarty_tpl);?>
"> <?php echo smarty_function_language(array('name'=>'liste_cotis_adht_col_statut'),$_smarty_tpl);?>
</a>
					<?php if ($_SESSION['tri'] == 7) {?>
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
				<th class="LignegrisTC" style="width:5%;"><?php echo smarty_function_language(array('name'=>'tpl_col_actions'),$_smarty_tpl);?>
				</th>
				
			</tr>
<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['cotis_adht']->value, 'item_cotis_adht', false, 'ordre');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['ordre']->value => $_smarty_tpl->tpl_vars['item_cotis_adht']->value) {
?>
			<tr class="Lignegris<?php echo $_smarty_tpl->tpl_vars['item_cotis_adht']->value['coul'];?>
">
				<td><?php echo $_smarty_tpl->tpl_vars['item_cotis_adht']->value['id_cotis'];?>
</td>
				<td><?php echo $_smarty_tpl->tpl_vars['item_cotis_adht']->value['date_enregist_cotis'];?>
</td>
				<td><?php echo $_smarty_tpl->tpl_vars['item_cotis_adht']->value['date_debut_cotis'];?>
</td>
				<td><?php echo $_smarty_tpl->tpl_vars['item_cotis_adht']->value['date_fin_cotis'];?>
</td>
				<td >				<?php if ($_smarty_tpl->tpl_vars['item_cotis_adht']->value['cotis'] != "999" && $_smarty_tpl->tpl_vars['affiche_liste_complete']->value == "1") {?>
				<a href="../adherent/liste_cotisations_adht.php?id_adht=<?php echo $_smarty_tpl->tpl_vars['item_cotis_adht']->value['id_adhtasso'];?>
" title="<?php echo smarty_function_language(array('name'=>'liste_cotis_adht_liste_title'),$_smarty_tpl);?>
"><?php echo $_smarty_tpl->tpl_vars['item_cotis_adht']->value['nom_adht'];?>
 <?php echo $_smarty_tpl->tpl_vars['item_cotis_adht']->value['prenom_adht'];?>
</a>
				<?php } elseif ($_smarty_tpl->tpl_vars['affiche_liste_complete']->value == '' && $_smarty_tpl->tpl_vars['item_cotis_adht']->value['cotis'] != "999") {?>
								<a href="../adherent/gerer_fiche_adht.php?id_adht=<?php echo $_smarty_tpl->tpl_vars['item_cotis_adht']->value['id_adhtasso'];?>
" title="<?php echo smarty_function_language(array('name'=>'liste_cotis_adht_visu_fiche_title'),$_smarty_tpl);?>
"><?php echo $_smarty_tpl->tpl_vars['item_cotis_adht']->value['nom_adht'];?>
 <?php echo $_smarty_tpl->tpl_vars['item_cotis_adht']->value['prenom_adht'];?>
</a>
				<?php } else { ?>				<span class="Texterouge"><?php echo $_smarty_tpl->tpl_vars['item_cotis_adht']->value['nom_adht'];?>
 <?php echo $_smarty_tpl->tpl_vars['item_cotis_adht']->value['prenom_adht'];?>
</span><?php }?>
				</td>
				<td><?php echo $_smarty_tpl->tpl_vars['item_cotis_adht']->value['nom_type_cotisation'];?>
</td>  
				<td><?php echo $_smarty_tpl->tpl_vars['item_cotis_adht']->value['montant_cotis'];?>
</td> 				<td class="centre-txt"><?php echo $_smarty_tpl->tpl_vars['item_cotis_adht']->value['cotis_txt'];?>
&nbsp;<span class="TextenoirR">
				<?php echo $_smarty_tpl->tpl_vars['item_cotis_adht']->value['datemodiffiche_cotis'];?>
</span></td> 				<td class="centre-txt"> 				<?php if ($_smarty_tpl->tpl_vars['item_cotis_adht']->value['cotis'] != "999") {?><a href="../adherent/remplir_cotisations_adht.php?id_cotis=<?php echo $_smarty_tpl->tpl_vars['item_cotis_adht']->value['id_cotis'];?>
"><img src="../images/icones16/i_modif.png" width="16" height="16" alt="" title="<?php echo smarty_function_language(array('name'=>'liste_cotis_adht_modif_icon_title'),$_smarty_tpl);?>
"/></a>
				&nbsp;<a href="../adherent/remplir_cotisations_adht.php?id_cotis=<?php echo $_smarty_tpl->tpl_vars['item_cotis_adht']->value['id_cotis'];?>
&amp;supp_fiche_cotis=1"><img src="../images/icones16/i_archive.png" width="16" height="16" alt="" title="<?php echo smarty_function_language(array('name'=>'liste_cotis_adht_archiv_icon_title'),$_smarty_tpl);?>
"/></a>
				<?php } else { ?><a href="../adherent/remplir_cotisations_adht.php?id_cotis=<?php echo $_smarty_tpl->tpl_vars['item_cotis_adht']->value['id_cotis'];?>
&amp;archive_fiche=1"><img src="../images/icones16/i_ficharch.png" width="16" height="16" alt="" title="<?php echo smarty_function_language(array('name'=>'liste_cotis_adht_consult_icon_title'),$_smarty_tpl);?>
"/></a>
				<?php }?></td>				
			</tr>
<?php
}
} else {
?>
			<tr><td colspan="6"><?php if ($_smarty_tpl->tpl_vars['nom_prenom']->value == '') {?> <?php echo smarty_function_language(array('name'=>'tpl_liste_vide'),$_smarty_tpl);?>
&nbsp;<?php } else {
echo smarty_function_language(array('name'=>'tpl_liste_vide_for'),$_smarty_tpl);?>
: <?php echo $_smarty_tpl->tpl_vars['nom_prenom']->value;
}?></td></tr>
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

					<?php } else { ?><a href="liste_cotisations_adht.php?numpage_affiche=<?php echo (isset($_smarty_tpl->tpl_vars['__smarty_section_pageLoop']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_pageLoop']->value['index'] : null);?>
&amp;affiche_nb_adht=<?php echo $_smarty_tpl->tpl_vars['affiche_nb_adht']->value;?>
&amp;filtre_fiche=<?php echo $_smarty_tpl->tpl_vars['filtre_fiche']->value;?>
&amp;select_datedeb=<?php echo $_smarty_tpl->tpl_vars['filtre_datedeb']->value;?>
&amp;select_datefin=<?php echo $_smarty_tpl->tpl_vars['filtre_datefin']->value;?>
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
