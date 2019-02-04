<?php
/* Smarty version 3.1.33, created on 2019-02-02 16:05:37
  from 'C:\dev\servers\wamp64\www\gestion\gestion_sa\gestassophp_sa\templates\admin\maint_bd.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5c55bfd10c16a3_89810040',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'd146f6dc52d401f0c3127631b948546e9efdd8ec' => 
    array (
      0 => 'C:\\dev\\servers\\wamp64\\www\\gestion\\gestion_sa\\gestassophp_sa\\templates\\admin\\maint_bd.tpl',
      1 => 1484387306,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5c55bfd10c16a3_89810040 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_checkPlugins(array(0=>array('file'=>'C:\\dev\\servers\\wamp64\\www\\gestion\\gestion_sa\\lib\\smarty\\plugins\\function.language.php','function'=>'smarty_function_language',),1=>array('file'=>'C:\\dev\\servers\\wamp64\\www\\gestion\\gestion_sa\\lib\\smarty\\plugins\\function.html_options.php','function'=>'smarty_function_html_options',),));
?>
	<header class="header_titre_aide"><a href='#' style="cursor:pointer;cursor:hand" onclick="javascript :window.open('../aide/a_admin_maint_bd.php','popup','height=350,toolbar=no,location=no,directories=no,status=yes,width=700,resizable=no,scrollbars=yes,top=10,left=10')" title="<?php echo smarty_function_language(array('name'=>'title_aide'),$_smarty_tpl);?>
"><img src='../images/icones/help.gif' alt="Aide" width="20" height="20"/><?php echo smarty_function_language(array('name'=>'aide'),$_smarty_tpl);?>
</a></header> 

    <header class="header_titre">&nbsp;<?php echo smarty_function_language(array('name'=>'titre_admin_maint_bd'),$_smarty_tpl);?>
</header>
	<div class="ligne_coul"></div> 	
	<div id="contenu">  	<br /><br/><br/>
		<div class="Lignegris_pad2_Center_Gras"><?php echo smarty_function_language(array('name'=>'stitre_admin_maint_bd'),$_smarty_tpl);?>
</div> 
		<div><?php echo smarty_function_language(array('name'=>'admin_maint_bd_optim'),$_smarty_tpl);?>
<a href="maint_bd.php?opt_bd=Ok"><span class="submit_ok" title="<?php echo smarty_function_language(array('name'=>'admin_maint_bd_optim_button'),$_smarty_tpl);?>
">&nbsp;<?php echo smarty_function_language(array('name'=>'admin_maint_bd_optim_button'),$_smarty_tpl);?>
&nbsp;</span></a></div>
		<div><?php echo $_smarty_tpl->tpl_vars['optimisation']->value;?>
</div>
		
	<br/>
	<br/><br/>
	<?php if ($_smarty_tpl->tpl_vars['typebdmysql']->value == 'mysqli' || $_smarty_tpl->tpl_vars['typebdmysql']->value == 'postgres') {?> 	
		<form action="export_bd.php" method="post" name="maint_form">		
			<div class="Lignegris_pad2_Center_Gras"><?php echo smarty_function_language(array('name'=>'admin_maint_bd_typebd'),$_smarty_tpl);?>
</div> 
			<div><?php echo smarty_function_html_options(array('name'=>"struct",'options'=>$_smarty_tpl->tpl_vars['list_structbd_on']->value,'selected'=>'Non'),$_smarty_tpl);?>
	
				<span class="Textenoir">&nbsp;<?php echo smarty_function_language(array('name'=>'admin_maint_bd_sav_struct'),$_smarty_tpl);?>
</span></div>
			<div><?php echo smarty_function_html_options(array('name'=>"data",'options'=>$_smarty_tpl->tpl_vars['list_structbd_on']->value,'selected'=>'Oui'),$_smarty_tpl);?>

				<span class="TextenoirGras">&nbsp;<?php echo smarty_function_language(array('name'=>'admin_maint_bd_sav_data'),$_smarty_tpl);?>
</span></div>
			<br />
			<div class="centre-txt">
			<input type="submit" class="submit_ok" name="Valider" value="<?php echo smarty_function_language(array('name'=>'tpl_sav_button'),$_smarty_tpl);?>
" title="<?php echo smarty_function_language(array('name'=>'admin_maint_bd_button_title'),$_smarty_tpl);?>
"/><br/>
			<input type="hidden" name="valid_sav" value="savbdok"/>			
			</div>
		</form>	
	<?php }?>				
	<br /><br /> 
	</div>  
<?php }
}
