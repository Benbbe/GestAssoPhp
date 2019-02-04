<?php
/* Smarty version 3.1.33, created on 2019-02-02 15:58:19
  from 'C:\dev\servers\wamp64\www\gestion\gestion_sa\gestassophp_sa\templates\adherent\liste_fichiers_adht.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5c55be1ba57b08_65981687',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '1d3173c0c5c0301f1f922214d68f1b4c2e135041' => 
    array (
      0 => 'C:\\dev\\servers\\wamp64\\www\\gestion\\gestion_sa\\gestassophp_sa\\templates\\adherent\\liste_fichiers_adht.tpl',
      1 => 1459264423,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5c55be1ba57b08_65981687 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_checkPlugins(array(0=>array('file'=>'C:\\dev\\servers\\wamp64\\www\\gestion\\gestion_sa\\lib\\smarty\\plugins\\function.language.php','function'=>'smarty_function_language',),1=>array('file'=>'C:\\dev\\servers\\wamp64\\www\\gestion\\gestion_sa\\lib\\smarty\\plugins\\function.html_options.php','function'=>'smarty_function_html_options',),));
?>
	<header class="header_titre_aide"><a href='#' style="cursor:pointer;cursor:hand" onclick="javascript :window.open('../aide/a_adht_liste_fichiers_adht.php','popup','height=620,toolbar=no,location=no,directories=no,status=yes,width=660,resizable=no,scrollbars=yes,top=10,left=10')" title="<?php echo smarty_function_language(array('name'=>'title_aide'),$_smarty_tpl);?>
"><img src='../images/icones/help.gif' alt="Aide" width="20" height="20"/><?php echo smarty_function_language(array('name'=>'aide'),$_smarty_tpl);?>
</a></header> 

    <header class="header_titre"><?php echo smarty_function_language(array('name'=>'menu_admin_gestion'),$_smarty_tpl);?>
&nbsp;-&nbsp;<?php echo smarty_function_language(array('name'=>'titre_admin_liste_fichiers_adht'),$_smarty_tpl);?>
 <?php echo $_smarty_tpl->tpl_vars['affiche_message']->value;?>
</header>
	<div class="ligne_coul"></div> 	
	<div id="contenu"> 	
	
	<form action="liste_fichiers_adht.php" method="get" name="filtre">
 	

		<div id="listfilter">
			<input type="submit" class="submit_ok" value="<?php echo smarty_function_language(array('name'=>'tpl_filter_button'),$_smarty_tpl);?>
" title="<?php echo smarty_function_language(array('name'=>'tpl_filter_button_title'),$_smarty_tpl);?>
"/>
			<label for="filtre_nom"><?php echo smarty_function_language(array('name'=>'liste_fichiers_adht_parmi'),$_smarty_tpl);?>
</label>
			<input type="text" name="filtre_nom" id="filtre_nom" value="<?php echo $_smarty_tpl->tpl_vars['filtre_adht_nom']->value;?>
" title="<?php echo smarty_function_language(array('name'=>'tpl_liste_adht_parmi_title'),$_smarty_tpl);?>
"/>&nbsp;
		 	<?php echo smarty_function_language(array('name'=>'tpl_texte_select'),$_smarty_tpl);?>

			<select name="filtrefichier" onchange="form.submit()">				<?php echo smarty_function_html_options(array('options'=>$_smarty_tpl->tpl_vars['filtre_options']->value,'selected'=>$_smarty_tpl->tpl_vars['filtrefichier_ou']->value),$_smarty_tpl);?>

			</select>
			
		</div>
		
	
		<table style="width:100%;">
			<tr>
				<td><?php echo $_smarty_tpl->tpl_vars['nb_lines']->value;?>
 <?php if ($_smarty_tpl->tpl_vars['nb_lines']->value > 1) {?> <?php echo smarty_function_language(array('name'=>'liste_fichiers_adht_files'),$_smarty_tpl);?>
 <?php } else { ?> <?php echo smarty_function_language(array('name'=>'liste_fichiers_adht_file'),$_smarty_tpl);?>
 <?php }?>&nbsp;&nbsp;<a href="../adherent/remplir_fichier_adht.php"><span class="submit_ok" title="<?php echo smarty_function_language(array('name'=>'liste_fichiers_adht_adfile_button_title'),$_smarty_tpl);?>
">&nbsp; <?php echo smarty_function_language(array('name'=>'liste_fichiers_adht_adfile_button'),$_smarty_tpl);?>
&nbsp;</span></a></td>
				<td class="centre-txt"><?php echo smarty_function_language(array('name'=>'tpl_select_affichepar'),$_smarty_tpl);?>

					<select name="affiche_nb_fich" onchange="form.submit()">
						<?php echo smarty_function_html_options(array('options'=>$_smarty_tpl->tpl_vars['affichenb_adht_options']->value,'selected'=>$_smarty_tpl->tpl_vars['affiche_nb_fich']->value),$_smarty_tpl);?>
 
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

					<?php } else { ?><a href="liste_fichiers_adht.php?numpage_affiche=<?php echo (isset($_smarty_tpl->tpl_vars['__smarty_section_pageLoop']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_pageLoop']->value['index'] : null);?>
&amp;affiche_nb_fich=<?php echo $_smarty_tpl->tpl_vars['affiche_nb_fich']->value;?>
&amp;filtrefichier=<?php echo $_smarty_tpl->tpl_vars['filtrefichier_ou']->value;?>
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
					<a href="liste_fichiers_adht.php?tri=0&amp;affiche_nb_fich=<?php echo $_smarty_tpl->tpl_vars['affiche_nb_fich']->value;?>
&amp;filtrefichier=<?php echo $_smarty_tpl->tpl_vars['filtrefichier_ou']->value;?>
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
				<th class="LignegrisTC" style="width:25%;">
					<a href="liste_fichiers_adht.php?tri=1&amp;affiche_nb_fich=<?php echo $_smarty_tpl->tpl_vars['affiche_nb_fich']->value;?>
&amp;filtrefichier=<?php echo $_smarty_tpl->tpl_vars['filtrefichier_ou']->value;?>
&amp;filtre_nom=<?php echo $_smarty_tpl->tpl_vars['filtre_adht_nom']->value;?>
" title="<?php echo smarty_function_language(array('name'=>'tpl_title_clictri'),$_smarty_tpl);?>
"><?php echo smarty_function_language(array('name'=>'liste_fichiers_col_nomfichier'),$_smarty_tpl);?>
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
				

				<th class="LignegrisTC" style="width:24%;">
					<a href="liste_fichiers_adht.php?tri=2&amp;affiche_nb_fich=<?php echo $_smarty_tpl->tpl_vars['affiche_nb_fich']->value;?>
&amp;filtrefichier=<?php echo $_smarty_tpl->tpl_vars['filtrefichier_ou']->value;?>
&amp;filtre_nom=<?php echo $_smarty_tpl->tpl_vars['filtre_adht_nom']->value;?>
" title="<?php echo smarty_function_language(array('name'=>'tpl_title_clictri'),$_smarty_tpl);?>
"><?php echo smarty_function_language(array('name'=>'tpl_col_description'),$_smarty_tpl);?>
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
					<a href="liste_fichiers_adht.php?tri=3&amp;affiche_nb_fich=<?php echo $_smarty_tpl->tpl_vars['affiche_nb_fich']->value;?>
&amp;filtrefichier=<?php echo $_smarty_tpl->tpl_vars['filtrefichier_ou']->value;?>
&amp;filtre_nom=<?php echo $_smarty_tpl->tpl_vars['filtre_adht_nom']->value;?>
" title="<?php echo smarty_function_language(array('name'=>'tpl_title_clictri'),$_smarty_tpl);?>
"><?php echo smarty_function_language(array('name'=>'tpl_col_date'),$_smarty_tpl);?>
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
				<th class="LignegrisTC" style="width:23%;">
					<a href="liste_fichiers_adht.php?tri=4&amp;affiche_nb_fich=<?php echo $_smarty_tpl->tpl_vars['affiche_nb_fich']->value;?>
&amp;filtrefichier=<?php echo $_smarty_tpl->tpl_vars['filtrefichier_ou']->value;?>
&amp;filtre_nom=<?php echo $_smarty_tpl->tpl_vars['filtre_adht_nom']->value;?>
" title="<?php echo smarty_function_language(array('name'=>'tpl_title_clictri'),$_smarty_tpl);?>
"><?php echo smarty_function_language(array('name'=>'tpl_col_adht_nom'),$_smarty_tpl);?>
 <?php echo $_smarty_tpl->tpl_vars['adherent_bene']->value;?>
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
				<th class="LignegrisTC" style="width:12%;"><?php echo smarty_function_language(array('name'=>'tpl_col_actions'),$_smarty_tpl);?>

				</th>
				
			</tr>
<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['fichier']->value, 'item_fichier', false, 'ordre');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['ordre']->value => $_smarty_tpl->tpl_vars['item_fichier']->value) {
?>
			<tr class="Lignegris<?php echo $_smarty_tpl->tpl_vars['item_fichier']->value['coul'];?>
">
				<td><?php echo $_smarty_tpl->tpl_vars['item_fichier']->value['id_file_adht'];?>
</td>
				<td><?php if ($_smarty_tpl->tpl_vars['item_fichier']->value['file_adht'] != '999') {?><a href="../adherent/remplir_fichier_adht.php?id_file_adht=<?php echo $_smarty_tpl->tpl_vars['item_fichier']->value['id_file_adht'];?>
" title="<?php echo smarty_function_language(array('name'=>'liste_fichiers_adht_visu_file_icon_title'),$_smarty_tpl);?>
Visualisation des informations fichier"><?php echo $_smarty_tpl->tpl_vars['item_fichier']->value['nom_file_adht'];?>
</a><?php } else { ?><span class="Texterouge"><?php echo $_smarty_tpl->tpl_vars['item_fichier']->value['nom_file_adht'];?>
</span><?php }?></td>
				<td><?php echo $_smarty_tpl->tpl_vars['item_fichier']->value['designation_file_adht'];?>
</td>
				<td><?php echo $_smarty_tpl->tpl_vars['item_fichier']->value['date_file_adht'];?>
</td>
				<td><?php echo $_smarty_tpl->tpl_vars['item_fichier']->value['nom_adht'];?>
 <?php echo $_smarty_tpl->tpl_vars['item_fichier']->value['prenom_adht'];?>
</td>
				<td class="centre-txt">
				<?php if ($_smarty_tpl->tpl_vars['priorite_adht']->value >= 5 && $_smarty_tpl->tpl_vars['item_fichier']->value['file_adht'] != '999') {?>
				<a href="../adherent/remplir_fichier_adht.php?id_file_adht=<?php echo $_smarty_tpl->tpl_vars['item_fichier']->value['id_file_adht'];
if ($_smarty_tpl->tpl_vars['item_fichier']->value['file_adht'] == '999') {?>&amp;archive_file_adht=1<?php }?>"><img src="../images/icones16/i_voir.png" width="16" height="16" alt="" title="<?php echo smarty_function_language(array('name'=>'liste_fichiers_adht_visu_file_icon_title'),$_smarty_tpl);?>
"/></a>&nbsp;
				<a href="../adherent/liste_fichiers_adht.php?fichier_adht=1&amp;id_file_adht=<?php echo $_smarty_tpl->tpl_vars['item_fichier']->value['id_file_adht'];?>
"><img src="../images/icones16/i_disquet.png" width="16" height="16" alt="" title="<?php echo smarty_function_language(array('name'=>'liste_fichiers_adht_download_file_icon_title'),$_smarty_tpl);?>
"/></a>&nbsp;
				<a href="../adherent/liste_fichiers_adht.php?supp_fichier_adht=1&amp;id_file_adht=<?php echo $_smarty_tpl->tpl_vars['item_fichier']->value['id_file_adht'];?>
" onclick="return confirm('<?php echo smarty_function_language(array('name'=>'liste_fichiers_adht_js_confirm_file'),$_smarty_tpl);
echo $_smarty_tpl->tpl_vars['item_fichier']->value['id_file_adht'];?>
')"><img src="../images/icones16/i_delete.png" width="16" height="16" alt="" title="<?php echo smarty_function_language(array('name'=>'liste_fichiers_adht_del_file_icon_title'),$_smarty_tpl);?>
"/></a>
				<?php } else { ?>
				<a href="../adherent/remplir_fichier_adht.php?id_file_adht=<?php echo $_smarty_tpl->tpl_vars['item_fichier']->value['id_file_adht'];
if ($_smarty_tpl->tpl_vars['item_fichier']->value['file_adht'] == '999') {?>&amp;archive_file_adht=1<?php }?>"><img src="../images/icones16/i_ficharch.png" width="16" height="16" alt="" title="<?php echo smarty_function_language(array('name'=>'liste_fichiers_adht_visu_file_icon_title'),$_smarty_tpl);?>
"/></a>
				<?php }?></td>				
			</tr>
<?php
}
} else {
?>
			<tr><td colspan="6"><?php echo smarty_function_language(array('name'=>'tpl_liste_vide'),$_smarty_tpl);?>
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

					<?php } else { ?><a href="liste_fichiers_adht.php?numpage_affiche=<?php echo (isset($_smarty_tpl->tpl_vars['__smarty_section_pageLoop']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_pageLoop']->value['index'] : null);?>
&amp;affiche_nb_fich=<?php echo $_smarty_tpl->tpl_vars['affiche_nb_fich']->value;?>
&amp;filtrefichier=<?php echo $_smarty_tpl->tpl_vars['filtrefichier_ou']->value;?>
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
