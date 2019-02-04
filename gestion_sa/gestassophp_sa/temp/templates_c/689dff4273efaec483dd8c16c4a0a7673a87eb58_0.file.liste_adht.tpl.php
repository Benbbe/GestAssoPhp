<?php
/* Smarty version 3.1.33, created on 2019-02-02 15:59:16
  from 'C:\dev\servers\wamp64\www\gestion\gestion_sa\gestassophp_sa\templates\adherent\liste_adht.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5c55be54aafd80_08191949',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '689dff4273efaec483dd8c16c4a0a7673a87eb58' => 
    array (
      0 => 'C:\\dev\\servers\\wamp64\\www\\gestion\\gestion_sa\\gestassophp_sa\\templates\\adherent\\liste_adht.tpl',
      1 => 1451833508,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5c55be54aafd80_08191949 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_checkPlugins(array(0=>array('file'=>'C:\\dev\\servers\\wamp64\\www\\gestion\\gestion_sa\\lib\\smarty\\plugins\\function.language.php','function'=>'smarty_function_language',),1=>array('file'=>'C:\\dev\\servers\\wamp64\\www\\gestion\\gestion_sa\\lib\\smarty\\plugins\\function.html_options.php','function'=>'smarty_function_html_options',),));
?>
	<header class="header_titre_aide"><a href='#' style="cursor:pointer;cursor:hand" onclick="javascript :window.open('../aide/a_adht_liste_adht.php','popup','height=320,toolbar=no,location=no,directories=no,status=yes,width=660,resizable=no,scrollbars=yes,top=10,left=10')" title="<?php echo smarty_function_language(array('name'=>'title_aide'),$_smarty_tpl);?>
"><img src='../images/icones/help.gif' alt="Aide" width="20" height="20"/><?php echo smarty_function_language(array('name'=>'aide'),$_smarty_tpl);?>
</a></header> 

    <header class="header_titre">&nbsp;<?php echo smarty_function_language(array('name'=>'titre_liste_adht'),$_smarty_tpl);?>
</header>
	<div class="ligne_coul"></div> 	
	<div id="contenu"> 	
	
	<form action="liste_adht.php" method="get" name="filtre">
 	
		<div id="listfilter">
			<input type="submit" class="submit_ok" value="<?php echo smarty_function_language(array('name'=>'tpl_filter_button'),$_smarty_tpl);?>
" title=" <?php echo smarty_function_language(array('name'=>'tpl_filter_button_title'),$_smarty_tpl);?>
"/>
			<label for="filtre_nom"><?php echo smarty_function_language(array('name'=>'liste_adht_parmi'),$_smarty_tpl);?>
</label>
			<input type="text" name="filtre_nom" id="filtre_nom" value="<?php echo $_smarty_tpl->tpl_vars['filtre_adht_nom']->value;?>
" title="<?php echo smarty_function_language(array('name'=>'tpl_liste_adht_parmi_title'),$_smarty_tpl);?>
"/>
		</div>
		
	
		<table style="width:100%;">
			<tr>
				<td style="width:25%;"><?php echo $_smarty_tpl->tpl_vars['nb_lines']->value;?>
 <?php if ($_smarty_tpl->tpl_vars['nb_lines']->value > 1) {
echo $_smarty_tpl->tpl_vars['adherent_bene']->value;?>
s / <?php echo $_smarty_tpl->tpl_vars['affiche_nb_inscrits']->value;?>
 <?php echo smarty_function_language(array('name'=>'liste_adht_inscrit'),$_smarty_tpl);?>
. <?php } else {
echo $_smarty_tpl->tpl_vars['adherent_bene']->value;?>
 <?php }?></td>
				<td class="centre-txt" style="width:25%;"><?php echo smarty_function_language(array('name'=>'tpl_select_affichepar'),$_smarty_tpl);?>

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

					<?php } else { ?><a href="liste_adht.php?numpage_affiche=<?php echo (isset($_smarty_tpl->tpl_vars['__smarty_section_pageLoop']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_pageLoop']->value['index'] : null);?>
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
					<a href="liste_adht.php?tri=0&amp;affiche_nb_adht=<?php echo $_smarty_tpl->tpl_vars['affiche_nb_adht']->value;?>
&amp;filtre_membre=<?php echo $_smarty_tpl->tpl_vars['filtremembre_adht']->value;?>
&amp;filtre_nom=<?php echo $_smarty_tpl->tpl_vars['filtre_adht_nom']->value;?>
" title="<?php echo smarty_function_language(array('name'=>'tpl_title_clictri'),$_smarty_tpl);?>
">#</a>
					<?php if ($_SESSION['tri'] == 0) {?>
					<?php if ($_SESSION['tri_sens'] == 0) {?>
					<img src="../images/symboles/s_asc.png" width="11" height="9" alt="" title="<?php echo smarty_function_language(array('name'=>'tpl_title_clictri_up'),$_smarty_tpl);?>
"/>
					<?php } else { ?>
					<img src="../images/symboles/s_desc.png" width="11" height="9" alt="" title="Tri D&eacute;croissant"/>
					<?php }?>
					<?php } else { ?>
					<img src="../images/symboles/empty.png" width="7" height="7" alt=""/>
					<?php }?>
				</th>				
				<th class="LignegrisTC" style="width:23%;">
					<a href="liste_adht.php?tri=1&amp;affiche_nb_adht=<?php echo $_smarty_tpl->tpl_vars['affiche_nb_adht']->value;?>
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
					<img src="../images/symboles/s_desc.png" width="11" height="9" alt="" title="Tri D&eacute;croissant"/>
					<?php }?>
					<?php } else { ?>
					<img src="../images/symboles/empty.png" width="7" height="7" alt=""/>
					<?php }?>
				</th>
<!--  ajout photo -->				
				<th class="LignegrisTC" style="width:10%;">Photo
				</th>				

				<th class="LignegrisTC" style="width:23%;">
					<a href="liste_adht.php?tri=2&amp;affiche_nb_adht=<?php echo $_smarty_tpl->tpl_vars['affiche_nb_adht']->value;?>
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
					<img src="../images/symboles/s_desc.png" width="11" height="9" alt="" title="Tri D&eacute;croissant"/>
					<?php }?>
					<?php } else { ?>
					<img src="../images/symboles/empty.png" width="7" height="7" alt=""/>
					<?php }?>
				</th>		
				
				<th class="LignegrisTC" style="width:12%;">
					<a href="liste_adht.php?tri=3&amp;affiche_nb_adht=<?php echo $_smarty_tpl->tpl_vars['affiche_nb_adht']->value;?>
&amp;filtre_membre=<?php echo $_smarty_tpl->tpl_vars['filtremembre_adht']->value;?>
&amp;filtre_nom=<?php echo $_smarty_tpl->tpl_vars['filtre_adht_nom']->value;?>
" title="<?php echo smarty_function_language(array('name'=>'tpl_title_clictri'),$_smarty_tpl);?>
"><?php echo smarty_function_language(array('name'=>'tpl_col_adht_teleph'),$_smarty_tpl);?>
  </a>
					<?php if ($_SESSION['tri'] == 3) {?>
					<?php if ($_SESSION['tri_sens'] == 0) {?>
					<img src="../images/symboles/s_asc.png" width="11" height="9" alt="" title="<?php echo smarty_function_language(array('name'=>'tpl_title_clictri_up'),$_smarty_tpl);?>
"/>
					<?php } else { ?>
					<img src="../images/symboles/s_desc.png" width="11" height="9" alt="" title="Tri D&eacute;croissant"/>
					<?php }?>
					<?php } else { ?>
					<img src="../images/symboles/empty.png" width="7" height="7" alt=""/>
					<?php }?>
				</th>
				<th class="LignegrisTC" style="width:12%;">
					<a href="liste_adht.php?tri=4&amp;affiche_nb_adht=<?php echo $_smarty_tpl->tpl_vars['affiche_nb_adht']->value;?>
&amp;filtre_membre=<?php echo $_smarty_tpl->tpl_vars['filtremembre_adht']->value;?>
&amp;filtre_nom=<?php echo $_smarty_tpl->tpl_vars['filtre_adht_nom']->value;?>
" title="<?php echo smarty_function_language(array('name'=>'tpl_title_clictri'),$_smarty_tpl);?>
"> <?php echo smarty_function_language(array('name'=>'tpl_col_adht_portable'),$_smarty_tpl);?>
  </a>
					<?php if ($_SESSION['tri'] == 4) {?>
					<?php if ($_SESSION['tri_sens'] == 0) {?>
					<img src="../images/symboles/s_asc.png" width="11" height="9" alt="" title="<?php echo smarty_function_language(array('name'=>'tpl_title_clictri_up'),$_smarty_tpl);?>
"/>
					<?php } else { ?>
					<img src="../images/symboles/s_desc.png" width="11" height="9" alt="" title="Tri D&eacute;croissant"/>
					<?php }?>
					<?php } else { ?>
					<img src="../images/symboles/empty.png" width="7" height="7" alt=""/>
					<?php }?>
				</th>		

								<th class="LignegrisTC" style="width:10%;">
					<a href="liste_adht.php?tri=5&amp;affiche_nb_adht=<?php echo $_smarty_tpl->tpl_vars['affiche_nb_adht']->value;?>
&amp;filtre_membre=<?php echo $_smarty_tpl->tpl_vars['filtremembre_adht']->value;?>
&amp;filtre_nom=<?php echo $_smarty_tpl->tpl_vars['filtre_adht_nom']->value;?>
" title="<?php echo smarty_function_language(array('name'=>'tpl_title_clictri'),$_smarty_tpl);?>
"> <?php echo smarty_function_language(array('name'=>'fiche_adht_ant'),$_smarty_tpl);?>
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
				
				<th class="LignegrisTC" style="width:6%;"><?php echo smarty_function_language(array('name'=>'tpl_col_action'),$_smarty_tpl);?>

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
				<td><a href="../adherent/consulter_fiche_adht.php?id_adht=<?php echo $_smarty_tpl->tpl_vars['item_membres']->value['id_adht'];?>
" title="<?php echo smarty_function_language(array('name'=>'liste_adht_visu_icon_title'),$_smarty_tpl);?>
"><?php echo $_smarty_tpl->tpl_vars['item_membres']->value['nom_adht'];?>
 <?php echo $_smarty_tpl->tpl_vars['item_membres']->value['prenom_adht'];?>
</a></td>
				<!--  ajout photo --><td class="centre-txt"><?php if ($_smarty_tpl->tpl_vars['item_membres']->value['image_adht']) {?> <a href="../adherent/consulter_fiche_adht.php?id_adht=<?php echo $_smarty_tpl->tpl_vars['item_membres']->value['id_adht'];?>
" title="<?php echo smarty_function_language(array('name'=>'liste_adht_visu_icon_title'),$_smarty_tpl);?>
"><img src="<?php echo $_smarty_tpl->tpl_vars['item_membres']->value['image_adht'];?>
" alt="" /></a><?php }?></td><!--  ajout photo -->				
				<td><?php echo $_smarty_tpl->tpl_vars['item_membres']->value['ville_adht'];?>
</td>
				<td><?php echo $_smarty_tpl->tpl_vars['item_membres']->value['telephonef_adht'];?>
</td>
				<td>&nbsp;<?php echo $_smarty_tpl->tpl_vars['item_membres']->value['telephonep_adht'];?>
</td>
				
				<td>&nbsp;<?php echo $_smarty_tpl->tpl_vars['item_membres']->value['nom_type_antenne'];?>
</td>				
				<td class="centre-txt"><a href="../adherent/consulter_fiche_adht.php?id_adht=<?php echo $_smarty_tpl->tpl_vars['item_membres']->value['id_adht'];?>
"><img src="../images/icones16/i_voir.png" width="16" height="16" alt="Visu" title="<?php echo smarty_function_language(array('name'=>'liste_adht_visu_icon_title'),$_smarty_tpl);?>
"/></a></td>				
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

					<?php } else { ?><a href="liste_adht.php?numpage_affiche=<?php echo (isset($_smarty_tpl->tpl_vars['__smarty_section_pageLoop']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_pageLoop']->value['index'] : null);?>
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
