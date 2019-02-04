<?php
/* Smarty version 3.1.33, created on 2019-02-02 16:38:28
  from 'C:\dev\servers\wamp64\www\gestion\gestion_sa\gestassophp_sa\templates\admin\remplir_priorite.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5c55c784489574_78828914',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'f4530b6caf167b52b6ddc199738448c4bb47061e' => 
    array (
      0 => 'C:\\dev\\servers\\wamp64\\www\\gestion\\gestion_sa\\gestassophp_sa\\templates\\admin\\remplir_priorite.tpl',
      1 => 1451833508,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5c55c784489574_78828914 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_checkPlugins(array(0=>array('file'=>'C:\\dev\\servers\\wamp64\\www\\gestion\\gestion_sa\\lib\\smarty\\plugins\\function.language.php','function'=>'smarty_function_language',),1=>array('file'=>'C:\\dev\\servers\\wamp64\\www\\gestion\\gestion_sa\\lib\\smarty\\plugins\\function.html_options.php','function'=>'smarty_function_html_options',),));
?>
	<header class="header_titre_aide"><a href='#' style="cursor:pointer;cursor:hand" onclick="javascript :window.open('../aide/a_priorite.php','popup','height=380,toolbar=no,location=no,directories=no,status=yes,width=660,resizable=no,scrollbars=yes,top=10,left=10')" title="<?php echo smarty_function_language(array('name'=>'title_aide'),$_smarty_tpl);?>
"><img src='../images/icones/help.gif' alt="Aide" width="20" height="20"/><?php echo smarty_function_language(array('name'=>'aide'),$_smarty_tpl);?>
</a></header> 

    <header class="header_titre">&nbsp;<?php echo smarty_function_language(array('name'=>'titre_admin_gerer_priorite_adherents'),$_smarty_tpl);?>
</header>
	<div class="ligne_coul"></div> 	
	<div id="contenu">  	
	

	<div class="login-box_pripref">		
		<form method="post" name="maform" action="remplir_priorite.php">
		<br />
		<div class="centre-txt"><?php echo $_smarty_tpl->tpl_vars['message']->value;?>
</div>
		<label class="label_pripref"><?php echo $_smarty_tpl->tpl_vars['adherent_bene']->value;?>
</label>
            <span class="align_pripref">&nbsp;<?php echo smarty_function_html_options(array('name'=>'id_adht_priorite','options'=>$_smarty_tpl->tpl_vars['listnoms']->value,'selected'=>$_smarty_tpl->tpl_vars['id_adht_priorite']->value),$_smarty_tpl);?>
</span>	
		<br /><br />
		<label class="label_pripref" title="<?php echo smarty_function_language(array('name'=>'admin_priorite_code_priorite_title'),$_smarty_tpl);?>
"><?php echo smarty_function_language(array('name'=>'admin_priorite_code_priorite'),$_smarty_tpl);?>
</label>
			<span class="align_pripref">&nbsp;<?php echo smarty_function_html_options(array('name'=>'code_priorite','options'=>$_smarty_tpl->tpl_vars['list_priorite_adht']->value,'selected'=>$_smarty_tpl->tpl_vars['code_priorite']->value),$_smarty_tpl);?>
</span>
		<br /><br />
		<div class="centre-txt">
			<input type="submit" class="submit_ok" name="Valider" value="<?php echo smarty_function_language(array('name'=>'tpl_valid_button'),$_smarty_tpl);?>
"  title="<?php echo smarty_function_language(array('name'=>'tpl_valid_button_title'),$_smarty_tpl);?>
"/>
			<input type="hidden" name="valid" value="validation"/></div>
	
		</form>
		
	</div>


	 

	<div class="aff_droite-txt"><?php echo smarty_function_language(array('name'=>'tpl_pages'),$_smarty_tpl);?>
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

					<?php } else { ?><a href="remplir_priorite.php?numpage_affiche=<?php echo (isset($_smarty_tpl->tpl_vars['__smarty_section_pageLoop']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_pageLoop']->value['index'] : null);?>
" title="<?php echo smarty_function_language(array('name'=>'tpl_go_pages'),$_smarty_tpl);?>
"><?php echo (isset($_smarty_tpl->tpl_vars['__smarty_section_pageLoop']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_pageLoop']->value['index'] : null);?>
</a>
					<?php }?>
					<?php
}
}
?></span>
	</div>	
	
	
	 		<table style="width:60%;" class="centre-txt">
			
			<tr>
				<th class="LignegrisTC" style="width:10%;">
					<a href="remplir_priorite.php?tri=0" title="<?php echo smarty_function_language(array('name'=>'tpl_title_clictri'),$_smarty_tpl);?>
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
				
				<th class="LignegrisTC" style="width:40%;">
					<a href="remplir_priorite.php?tri=1" title="<?php echo smarty_function_language(array('name'=>'tpl_title_clictri'),$_smarty_tpl);?>
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
				<th class="LignegrisTC" style="width:10%;">[0-4,5,7,9] 
					<a href="remplir_priorite.php?tri=2" title="<?php echo smarty_function_language(array('name'=>'tpl_title_clictri'),$_smarty_tpl);?>
"><?php echo smarty_function_language(array('name'=>'admin_priorite_col_priorite'),$_smarty_tpl);?>
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

			</tr>
<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['priorite']->value, 'item_priorite', false, 'ordre');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['ordre']->value => $_smarty_tpl->tpl_vars['item_priorite']->value) {
?>
			<tr class="Lignegris<?php echo $_smarty_tpl->tpl_vars['item_priorite']->value['coul'];?>
">
				<td><?php echo $_smarty_tpl->tpl_vars['item_priorite']->value['id_adht'];?>
</td>						
				<td><?php echo $_smarty_tpl->tpl_vars['item_priorite']->value['nom_prenom_adht'];?>
</td>
				<td class="centre-txt"><?php echo $_smarty_tpl->tpl_vars['item_priorite']->value['priorite_adht'];?>
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

					<?php } else { ?><a href="remplir_priorite.php?numpage_affiche=<?php echo (isset($_smarty_tpl->tpl_vars['__smarty_section_pageLoop']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_pageLoop']->value['index'] : null);?>
" title="<?php echo smarty_function_language(array('name'=>'tpl_go_pages'),$_smarty_tpl);?>
"><?php echo (isset($_smarty_tpl->tpl_vars['__smarty_section_pageLoop']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_pageLoop']->value['index'] : null);?>
</a>
					<?php }?>
					<?php
}
}
?></span>
	</div>	
	
		
	</div>  
<?php }
}
