<?php
/* Smarty version 3.1.33, created on 2019-02-02 15:57:00
  from 'C:\dev\servers\wamp64\www\gestion\gestion_sa\gestassophp_sa\templates\admin\tableaubord.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5c55bdccc48fe3_00558938',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '6cbc8f825255f56e66516b71bebdb3d6c7ccd88c' => 
    array (
      0 => 'C:\\dev\\servers\\wamp64\\www\\gestion\\gestion_sa\\gestassophp_sa\\templates\\admin\\tableaubord.tpl',
      1 => 1451833508,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5c55bdccc48fe3_00558938 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_checkPlugins(array(0=>array('file'=>'C:\\dev\\servers\\wamp64\\www\\gestion\\gestion_sa\\lib\\smarty\\plugins\\function.language.php','function'=>'smarty_function_language',),));
?>
	<header class="header_titre_aide"><a href='#' style="cursor:pointer;cursor:hand" onclick="javascript :window.open('../aide/a_admin_tableaubord.php','popup','height=500,toolbar=no,location=no,directories=no,status=yes,width=700,resizable=no,scrollbars=yes,top=10,left=10')" title="<?php echo smarty_function_language(array('name'=>'title_aide'),$_smarty_tpl);?>
"><img src='../images/icones/help.gif' alt="Aide" width="20" height="20"/><?php echo smarty_function_language(array('name'=>'aide'),$_smarty_tpl);?>
</a></header> 

    <header class="header_titre">&nbsp;<?php echo smarty_function_language(array('name'=>'titre_admin_tableaubord'),$_smarty_tpl);?>
</header>
	<div class="ligne_coul"></div> 	
	<div id="contenu">  	<br /><br />
    <table style="width:90%;">
		<tr> 
			<th class="LignegrisTC" colspan ="4"><?php echo smarty_function_language(array('name'=>'tableaubord_recap'),$_smarty_tpl);?>
</th> 
		</tr>
		<tr> 			<td style="width:25%;" class="Lignegris_pad2"><span class="TextenoirGras"><?php echo $_smarty_tpl->tpl_vars['adherent_bene']->value;?>
s</span></td>
			<td style="width:30%;" class="Lignegris_pad2"><?php echo smarty_function_language(array('name'=>'tableaubord_inscrit'),$_smarty_tpl);?>
 <?php echo $_smarty_tpl->tpl_vars['date_debannee_asso']->value;?>
 :&nbsp;<span class="TextenoirGras"><?php if ($_smarty_tpl->tpl_vars['priorite_adht']->value > 4) {?><a href='../adherent/liste_adht_admin.php?filtre_nom=&amp;filtre_membre=4' title="<?php echo smarty_function_language(array('name'=>'tableaubord_nbadhts_title'),$_smarty_tpl);?>
"><?php echo $_smarty_tpl->tpl_vars['nb_adherent']->value;?>
</a><?php } else {
echo $_smarty_tpl->tpl_vars['nb_adherent']->value;
}?></span></td>
			<td style="width:30%;" class="Lignegris_pad2"><?php echo smarty_function_language(array('name'=>'tableaubord_cotisants'),$_smarty_tpl);?>
&nbsp;<span class="TextenoirGras"><?php if ($_smarty_tpl->tpl_vars['priorite_adht']->value > 4) {?><a href='../adherent/liste_adht_admin.php?filtre_nom=&amp;filtre_membre=1' title="<?php echo smarty_function_language(array('name'=>'tableaubord_nbcotisadhts_title'),$_smarty_tpl);?>
"><?php echo $_smarty_tpl->tpl_vars['nb_adherent_soc']->value;?>
</a><?php } else {
echo $_smarty_tpl->tpl_vars['nb_adherent_soc']->value;
}?></span></td>
				
<?php if ($_smarty_tpl->tpl_vars['priorite_adht']->value > 4) {?> 	
			<td style="width:5%;">&nbsp;<a href='../adherent/export_tadhts.php'  title="<?php echo smarty_function_language(array('name'=>'tableaubord_tadhts_icon_title'),$_smarty_tpl);?>
"><img src="../images/icones/disque32.png" alt="tadhts XLS" width="32" height="30" /></a></td>
<?php } else { ?>	
			<td style="width:10%;">&nbsp;</td> 
<?php }?>	
		</tr>
		<tr>			<td style="width:25%;" class="Lignegris_pad1"><span class="TextenoirGras"><?php echo smarty_function_language(array('name'=>'tableaubord_cotisation'),$_smarty_tpl);?>
 <?php echo $_smarty_tpl->tpl_vars['adherent_bene']->value;?>
s</span></td>
			<td style="width:30%;" class="Lignegris_pad1">&nbsp;&nbsp;<?php echo smarty_function_language(array('name'=>'tableaubord_depuis'),$_smarty_tpl);?>
 <?php echo $_smarty_tpl->tpl_vars['date_debannee_asso']->value;?>
 : <?php echo $_smarty_tpl->tpl_vars['montant_cotisation_adh']->value;?>
 &euro;</td>
			<td style="width:30%;" class="Lignegris_pad1"><span class="TextenoirGras">&nbsp;&nbsp; <?php echo $_smarty_tpl->tpl_vars['montant_cotisation_adh_encours']->value;?>
 &euro;</span></td>
				
<?php if ($_smarty_tpl->tpl_vars['priorite_adht']->value > 4) {?> 	
			<td style="width:5%;">&nbsp;<a href='../adherent/export_tcotis.php' title="<?php echo smarty_function_language(array('name'=>'tableaubord_tcotis_icon_title'),$_smarty_tpl);?>
"><img src="../images/icones/disque32.png" alt="tcotis XLS" width="32" height="30" /></a></td>
<?php } else { ?>	
			<td style="width:10%;">&nbsp;</td> 
<?php }?>	
		</tr>
		

	</table>
	<br /><br /> 
	</div>  <?php }
}
