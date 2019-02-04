<?php
/* Smarty version 3.1.33, created on 2019-02-02 16:44:33
  from 'C:\dev\servers\wamp64\www\gestion\gestion_sa\gestassophp_sa\templates\admin\liste_logs.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5c55c8f19dc4e5_79517806',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'f0a870b437017c6590d42d16ce9b378a9ce61251' => 
    array (
      0 => 'C:\\dev\\servers\\wamp64\\www\\gestion\\gestion_sa\\gestassophp_sa\\templates\\admin\\liste_logs.tpl',
      1 => 1451833508,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5c55c8f19dc4e5_79517806 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_checkPlugins(array(0=>array('file'=>'C:\\dev\\servers\\wamp64\\www\\gestion\\gestion_sa\\lib\\smarty\\plugins\\function.language.php','function'=>'smarty_function_language',),1=>array('file'=>'C:\\dev\\servers\\wamp64\\www\\gestion\\gestion_sa\\lib\\smarty\\plugins\\function.html_options.php','function'=>'smarty_function_html_options',),));
?>
	<header class="header_titre_aide"><a href='#' style="cursor:pointer;cursor:hand" onclick="javascript :window.open('../aide/a_logs.php','popup','height=250,toolbar=no,location=no,directories=no,status=yes,width=660,resizable=no,scrollbars=yes,top=10,left=10')" title="<?php echo smarty_function_language(array('name'=>'title_aide'),$_smarty_tpl);?>
"><img src='../images/icones/help.gif' alt="Aide" width="20" height="20"/><?php echo smarty_function_language(array('name'=>'aide'),$_smarty_tpl);?>
</a></header> 

    <header class="header_titre">&nbsp;<?php echo smarty_function_language(array('name'=>'titre_admin_logs'),$_smarty_tpl);?>
</header>
	<div class="ligne_coul"></div> 	
	<div id="contenu">  	
		
	<form action="liste_logs.php" method="get" name="filtre">	
		<table  style="width:100%;">
			<tr>
				<td><span class="TextenoirR"><?php echo $_smarty_tpl->tpl_vars['nb_lines']->value;?>
 <?php if ($_smarty_tpl->tpl_vars['nb_lines']->value != 1) {
echo smarty_function_language(array('name'=>'admin_logs_enr_s'),$_smarty_tpl);?>
 <?php } else {
echo smarty_function_language(array('name'=>'admin_logs_enr'),$_smarty_tpl);?>
 <?php }?>&nbsp;&nbsp;<a href="../admin/export_tlogs.php?export_ok=1" title="<?php echo smarty_function_language(array('name'=>'admin_logs_title_export'),$_smarty_tpl);?>
"><?php echo smarty_function_language(array('name'=>'admin_logs_export'),$_smarty_tpl);?>
</a></span>&nbsp;<br /><img src="../images/icones/exclam.png" alt="clear" width="16" height="16" /><span class="TexterougeR"><?php echo smarty_function_language(array('name'=>'admin_logs_clear_logs'),$_smarty_tpl);?>
<a href="liste_logs.php?reset=1" onclick="return confirm('<?php echo smarty_function_language(array('name'=>'admin_logs_js_clear_logs'),$_smarty_tpl);?>
')"> <img src="../images/icones/i_poubelle.gif" alt="clear" width="10" height="11" title="<?php echo smarty_function_language(array('name'=>'admin_logs_title_clear_logs'),$_smarty_tpl);?>
" /></a></span></td>
				<td class="centre-txt"><?php echo smarty_function_language(array('name'=>'tpl_select_affichepar'),$_smarty_tpl);?>

					<select name="affiche_nb_fich" onchange="form.submit()">
						<?php echo smarty_function_html_options(array('options'=>$_smarty_tpl->tpl_vars['affichenb_log_options']->value,'selected'=>$_smarty_tpl->tpl_vars['affiche_nb_fich']->value),$_smarty_tpl);?>
 
					</select>
				</td>
				<td class="aff_droite-txt" ><?php echo smarty_function_language(array('name'=>'tpl_pages'),$_smarty_tpl);?>
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

	<?php } else { ?>
		<a href="liste_logs.php?numpage_affiche=<?php echo (isset($_smarty_tpl->tpl_vars['__smarty_section_pageLoop']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_pageLoop']->value['index'] : null);?>
&amp;affiche_nb_fich=<?php echo $_smarty_tpl->tpl_vars['affiche_nb_fich']->value;?>
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
				<th class="LignegrisTC" style="width:6%;">
					<a href="liste_logs.php?tri=0&amp;affiche_nb_fich=<?php echo $_smarty_tpl->tpl_vars['affiche_nb_fich']->value;?>
" title="<?php echo smarty_function_language(array('name'=>'tpl_title_clictri'),$_smarty_tpl);?>
">#</a>
					<?php if ($_SESSION['tri'] == 0) {?>
					<?php if ($_SESSION['tri_sens'] == 1) {?>
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
				<th class="LignegrisTC" style="width:22%;">
					<a href="liste_logs.php?tri=1&amp;affiche_nb_fich=<?php echo $_smarty_tpl->tpl_vars['affiche_nb_fich']->value;?>
" title="<?php echo smarty_function_language(array('name'=>'tpl_title_clictri'),$_smarty_tpl);?>
"><?php echo smarty_function_language(array('name'=>'tpl_col_date'),$_smarty_tpl);?>
</a>
					<?php if ($_SESSION['tri'] == 1) {?>
					<?php if ($_SESSION['tri_sens'] == 1) {?>
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
				<th class="LignegrisTC" style="width:15%;">
					<a href="liste_logs.php?tri=2&amp;affiche_nb_fich=<?php echo $_smarty_tpl->tpl_vars['affiche_nb_fich']->value;?>
" title="<?php echo smarty_function_language(array('name'=>'tpl_title_clictri'),$_smarty_tpl);?>
">"IP"</a>
					<?php if ($_SESSION['tri'] == 2) {?>
					<?php if ($_SESSION['tri_sens'] == 1) {?>
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
				<th class="LignegrisTC" style="width:22%;">
					<a href="liste_logs.php?tri=3&amp;affiche_nb_fich=<?php echo $_smarty_tpl->tpl_vars['affiche_nb_fich']->value;?>
" title="<?php echo smarty_function_language(array('name'=>'tpl_title_clictri'),$_smarty_tpl);?>
"><?php echo smarty_function_language(array('name'=>'admin_logs_col_utilisateur'),$_smarty_tpl);?>
</a>
					<?php if ($_SESSION['tri'] == 3) {?>
					<?php if ($_SESSION['tri_sens'] == 1) {?>
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
				<th class="LignegrisTC" style="width:35%;">
					<a href="liste_logs.php?tri=4&amp;affiche_nb_fich=<?php echo $_smarty_tpl->tpl_vars['affiche_nb_fich']->value;?>
" title="<?php echo smarty_function_language(array('name'=>'tpl_title_clictri'),$_smarty_tpl);?>
"><?php echo smarty_function_language(array('name'=>'tpl_col_description'),$_smarty_tpl);?>
</a>
					<?php if ($_SESSION['tri'] == 4) {?>
					<?php if ($_SESSION['tri_sens'] == 1) {?>
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

			</tr>
<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['logs']->value, 'log', false, 'ordre');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['ordre']->value => $_smarty_tpl->tpl_vars['log']->value) {
?>
			<tr class="Lignegris<?php echo $_smarty_tpl->tpl_vars['log']->value['coul'];?>
">
				<td><?php echo $_smarty_tpl->tpl_vars['log']->value['id'];?>
</td>				
				<td><?php echo $_smarty_tpl->tpl_vars['log']->value['date'];?>
</td>
				<td><?php echo $_smarty_tpl->tpl_vars['log']->value['ip'];?>
</td>
				<td><?php echo $_smarty_tpl->tpl_vars['log']->value['adh'];?>
</td>
				<td><?php echo $_smarty_tpl->tpl_vars['log']->value['action'];?>
</td>
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

	<?php } else { ?>
		<a href="liste_logs.php?numpage_affiche=<?php echo (isset($_smarty_tpl->tpl_vars['__smarty_section_pageLoop']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_pageLoop']->value['index'] : null);?>
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
