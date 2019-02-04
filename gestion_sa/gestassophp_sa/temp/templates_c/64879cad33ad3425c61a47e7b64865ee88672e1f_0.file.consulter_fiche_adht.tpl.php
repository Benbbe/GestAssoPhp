<?php
/* Smarty version 3.1.33, created on 2019-02-02 15:59:29
  from 'C:\dev\servers\wamp64\www\gestion\gestion_sa\gestassophp_sa\templates\adherent\consulter_fiche_adht.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5c55be6176f572_70026042',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '64879cad33ad3425c61a47e7b64865ee88672e1f' => 
    array (
      0 => 'C:\\dev\\servers\\wamp64\\www\\gestion\\gestion_sa\\gestassophp_sa\\templates\\adherent\\consulter_fiche_adht.tpl',
      1 => 1509379778,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5c55be6176f572_70026042 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_checkPlugins(array(0=>array('file'=>'C:\\dev\\servers\\wamp64\\www\\gestion\\gestion_sa\\lib\\smarty\\plugins\\function.language.php','function'=>'smarty_function_language',),1=>array('file'=>'C:\\dev\\servers\\wamp64\\www\\gestion\\gestion_sa\\lib\\smarty\\plugins\\modifier.string_format.php','function'=>'smarty_modifier_string_format',),));
?>
	<header class="header_titre_aide"><a href='#' style="cursor:pointer;cursor:hand" onclick="javascript :window.open('../aide/a_adht_consulter_fiche_adht.php','popup','height=250,toolbar=no,location=no,directories=no,status=yes,width=660,resizable=no,scrollbars=yes,top=10,left=10')" title="<?php echo smarty_function_language(array('name'=>'title_aide'),$_smarty_tpl);?>
"><img src='../images/icones/help.gif' alt="Aide" width="20" height="20"/><?php echo smarty_function_language(array('name'=>'aide'),$_smarty_tpl);?>
</a></header> 

    <header class="header_titre"><?php echo $_smarty_tpl->tpl_vars['vientde']->value;?>
&nbsp;<?php echo smarty_function_language(array('name'=>'titre_consult_fiche_adht'),$_smarty_tpl);?>
</header>
	<div class="ligne_coul"></div> 	
	<div id="contenu"> <?php if (!empty($_smarty_tpl->tpl_vars['erreur_saisie']->value)) {?>	
	<?php if (count($_smarty_tpl->tpl_vars['erreur_saisie']->value) != 0) {?> 
		<div id="erreur-box"><?php echo smarty_function_language(array('name'=>'tpl_texte_err_saisie'),$_smarty_tpl);?>

			<?php if ($_smarty_tpl->tpl_vars['erreur_saisie']->value['id_adht']) {?><br /><span class="erreur-Jaunerouge">&nbsp;<?php echo $_smarty_tpl->tpl_vars['erreur_saisie']->value['id_adht'];?>
</span><?php }?>
		</div>
	<?php }
}?>	
	
	
    	<table style="width:100%;">
		<tr> 
			<th class="LignegrisC" colspan ="2"><?php echo smarty_function_language(array('name'=>'visu_fiche_adht_recap'),$_smarty_tpl);?>
</th> 
		</tr>
		<tr>
			<td class="Lignegris_pad1"><?php echo smarty_function_language(array('name'=>'visu_fiche_adht_enr'),$_smarty_tpl);?>
&nbsp;<?php echo $_smarty_tpl->tpl_vars['id_adht']->value;?>
&nbsp;<?php echo smarty_function_language(array('name'=>'visu_fiche_adht_enrdu'),$_smarty_tpl);?>
&nbsp;:&nbsp;<?php echo $_smarty_tpl->tpl_vars['data_adherent']->value['datecreationfiche_adht'];?>
</td>
			<td class="Lignegris_pad1"><?php echo smarty_function_language(array('name'=>'visu_fiche_adht_lastmod'),$_smarty_tpl);?>
&nbsp;:&nbsp;
			<?php if ($_smarty_tpl->tpl_vars['data_adherent']->value['datemodiffiche_adht'] == '00/00/0000' || $_smarty_tpl->tpl_vars['data_adherent']->value['datemodiffiche_adht'] == '') {?> Aucune <?php } else {
echo $_smarty_tpl->tpl_vars['data_adherent']->value['datemodiffiche_adht'];
}?></td>
		</tr>
		 <tr> 
			<th class="Ligne_top" colspan="2">&nbsp;</th> 
		 </tr>		

     </table>
	<br />
	
	
	<table style="width:100%;">
		<tr> 
			<th class="LignegrisC" colspan ="3"><?php echo smarty_function_language(array('name'=>'gestion_fiche_adht'),$_smarty_tpl);?>
</th>
			 <td>&nbsp;</td>
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
&nbsp;ans<?php }?></td>
		  </tr>

		  <tr> 
		    <td class="Lignegris_pad1" style="width:25%;"><?php if ($_smarty_tpl->tpl_vars['data_adherent']->value['telephonef_adht']) {
echo smarty_function_language(array('name'=>'tpl_col_adht_teleph'),$_smarty_tpl);
}?><br /> 
			<?php if ($_smarty_tpl->tpl_vars['data_adherent']->value['telephonep_adht']) {
echo smarty_function_language(array('name'=>'tpl_col_adht_portable'),$_smarty_tpl);?>
<br /><?php }?>
			<?php if ($_smarty_tpl->tpl_vars['data_adherent']->value['telecopie_adht']) {?> <?php echo smarty_function_language(array('name'=>'fiche_adht_fax'),$_smarty_tpl);?>
<br /><?php }?>
			<?php if ($_smarty_tpl->tpl_vars['data_adherent']->value['email_adht']) {?> <?php echo smarty_function_language(array('name'=>'fiche_adht_mail'),$_smarty_tpl);?>
<br /><?php }?>
			<?php if ($_smarty_tpl->tpl_vars['data_adherent']->value['siteweb_adht']) {?> <?php echo smarty_function_language(array('name'=>'fiche_adht_web'),$_smarty_tpl);?>
<br /><?php }?> 
			<?php if ($_smarty_tpl->tpl_vars['data_adherent']->value['datenaisance_adht'] <> '') {
echo smarty_function_language(array('name'=>'tpl_adht_datenais'),$_smarty_tpl);?>
<br /><?php }?>
			</td>
		    <td class="Lignegris_pad1" style="width:35%;"><?php echo $_smarty_tpl->tpl_vars['data_adherent']->value['telephonef_adht'];?>
<br />
			<?php if ($_smarty_tpl->tpl_vars['data_adherent']->value['telephonep_adht']) {
echo $_smarty_tpl->tpl_vars['data_adherent']->value['telephonep_adht'];?>
<br /><?php }?>
			<?php if ($_smarty_tpl->tpl_vars['data_adherent']->value['telecopie_adht']) {
echo $_smarty_tpl->tpl_vars['data_adherent']->value['telecopie_adht'];?>
<br /><?php }?>
			<?php if ($_smarty_tpl->tpl_vars['data_adherent']->value['email_adht']) {?><a href="mailto:<?php echo $_smarty_tpl->tpl_vars['data_adherent']->value['email_adht'];?>
"><?php echo $_smarty_tpl->tpl_vars['data_adherent']->value['email_adht'];?>
</a><br /><?php }?>
			<?php if ($_smarty_tpl->tpl_vars['data_adherent']->value['siteweb_adht']) {?><a href="http://<?php echo $_smarty_tpl->tpl_vars['data_adherent']->value['siteweb_adht'];?>
" target="_blank">http://<?php echo $_smarty_tpl->tpl_vars['data_adherent']->value['siteweb_adht'];?>
</a><br /><?php }?>
			<?php if ($_smarty_tpl->tpl_vars['data_adherent']->value['datenaisance_adht'] <> '') {
echo $_smarty_tpl->tpl_vars['data_adherent']->value['datenaisance_adht'];?>
<br /><?php }?>
			</td>
		 </tr>

  
		<tr>
			<td class="LignegrisC" colspan="4">&nbsp;</td>
		</tr>		
    </table>
	

	
	
	</div>  
<?php }
}
