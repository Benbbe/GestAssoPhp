<?php
/* Smarty version 3.1.33, created on 2019-02-02 21:11:07
  from 'C:\dev\servers\wamp64\www\gestion\gestion_sa\gestassophp_sa\templates\adherent\consulter_cotisations_adht.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5c56076bc83b73_65381568',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '63f64b72e86b4335d6da64f9b4066581f06e8dcb' => 
    array (
      0 => 'C:\\dev\\servers\\wamp64\\www\\gestion\\gestion_sa\\gestassophp_sa\\templates\\adherent\\consulter_cotisations_adht.tpl',
      1 => 1451833508,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5c56076bc83b73_65381568 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_checkPlugins(array(0=>array('file'=>'C:\\dev\\servers\\wamp64\\www\\gestion\\gestion_sa\\lib\\smarty\\plugins\\function.language.php','function'=>'smarty_function_language',),));
?>
	<!--header class="header_titre_aide"><a href='#' style="cursor:pointer;cursor:hand" onclick="javascript :window.open('../aide/a__remplir_cotisation.php','popup','height=300,toolbar=no,location=no,directories=no,status=yes,width=660,resizable=no,scrollbars=yes,top=10,left=10')" title="<?php echo smarty_function_language(array('name'=>'title_aide'),$_smarty_tpl);?>
"><img src='../images/icones/help.gif' alt="Aide" width="20" height="20"/><?php echo smarty_function_language(array('name'=>'aide'),$_smarty_tpl);?>
</a></div --> 

    <header class="header_titre">&nbsp;<?php echo smarty_function_language(array('name'=>'titre_admin_fiche_visu_cotis_adht'),$_smarty_tpl);?>
 <?php echo $_smarty_tpl->tpl_vars['affiche_message']->value;?>
</header>
	<div class="ligne_coul"></div> 	
	<div id="contenu">  	<br />
	<table style="width:100%;">
		<tr>		
			<td>&nbsp;</td><td>&nbsp;</td>
		</tr>
		<tr> 	
			<th class="LignegrisRight" style="width:25%;"> <?php echo smarty_function_language(array('name'=>'fiche_cotis_adht_date_enr'),$_smarty_tpl);?>
 :</th>		
			<td><?php echo $_smarty_tpl->tpl_vars['data_cotis_adh']->value['date_enregist_cotis'];?>
</td>
		</tr>
		<tr>		
			<td>&nbsp;</td><td>&nbsp;</td>
		</tr>
		<tr> 
			<th class="LignegrisRight">  <?php echo $_smarty_tpl->tpl_vars['adherent_bene']->value;?>
 <?php echo smarty_function_language(array('name'=>'tpl_col_num'),$_smarty_tpl);?>
 :</th>
			<td><?php echo $_smarty_tpl->tpl_vars['data_cotis_adh']->value['id_adhtasso'];?>
<br/>
			</td>	
        </tr>		
		<tr> 
			<th class="LignegrisRight">&nbsp;</th>
			<td><?php echo $_smarty_tpl->tpl_vars['data_cotis_adh']->value['np_adht'];?>
<br/>
			<?php echo $_smarty_tpl->tpl_vars['data_cotis_adh']->value['adr_adht'];?>
<br/>
			<?php echo $_smarty_tpl->tpl_vars['data_cotis_adh']->value['cpv_adht'];?>

			</td>	
        </tr>
		<tr>		
			<td>&nbsp;</td><td>&nbsp;</td>
		</tr>		
		<tr>
			<th class="LignegrisRight"> <?php echo smarty_function_language(array('name'=>'fiche_cotis_adht_montant'),$_smarty_tpl);?>
 :</th>		
			<td><?php echo $_smarty_tpl->tpl_vars['data_cotis_adh']->value['montant_cotis'];?>
 <?php echo smarty_function_language(array('name'=>'fiche_cotis_adht_euro'),$_smarty_tpl);?>
</td>
		</tr>		
		<tr>		
			<td>&nbsp;</td><td>&nbsp;</td>
		</tr>
		<tr>
			<th class="LignegrisRight"> <?php echo smarty_function_language(array('name'=>'fiche_cotis_adht_type'),$_smarty_tpl);?>
 :</th>		
			<td><?php echo $_smarty_tpl->tpl_vars['data_cotis_adh']->value['nom_type_cotisation'];?>
</td>
		</tr>	
		<tr>		
			<td>&nbsp;</td><td>&nbsp;</td>
		</tr>		
		<tr>
			<th class="LignegrisRight"> <?php echo smarty_function_language(array('name'=>'fiche_cotis_adht_date_deb'),$_smarty_tpl);?>
 :</th>		
			<td><?php echo $_smarty_tpl->tpl_vars['data_cotis_adh']->value['date_debut_cotis'];?>
</td>
		</tr>		
		<tr>
			<th class="LignegrisRight"> <?php echo smarty_function_language(array('name'=>'fiche_cotis_adht_date_fin'),$_smarty_tpl);?>
 :</th>		
			<td><?php echo $_smarty_tpl->tpl_vars['data_cotis_adh']->value['date_fin_cotis'];?>
</td>
		</tr>			
		<tr>		
			<td>&nbsp;</td><td>&nbsp;</td>
		</tr>
		<tr><!-- Ajout Zone PAIEMENT Gestion Cotisations -->
			<th class="LignegrisRight"> <?php echo smarty_function_language(array('name'=>'fiche_cotis_adht_mpaie'),$_smarty_tpl);?>
 :</th>		
			<td><?php echo $_smarty_tpl->tpl_vars['data_cotis_adh']->value['paiement_cotis'];?>
</td>
		</tr>		
		<tr>
			<th class="LignegrisRight"> <?php echo smarty_function_language(array('name'=>'fiche_cotis_adht_comm'),$_smarty_tpl);?>
 :</th>		
			<td><?php echo $_smarty_tpl->tpl_vars['data_cotis_adh']->value['info_cotis'];?>
</td>
		</tr>
		<tr>		
			<td>&nbsp;</td><td>&nbsp;</td>
		</tr>
		<tr>		
			<td>&nbsp;</td><td>&nbsp;</td>
		</tr>		
		<tr>		
			<th class="LignegrisRight"><?php echo smarty_function_language(array('name'=>'fiche_cotis_visu_faitle'),$_smarty_tpl);?>
 : </th><td><?php echo $_smarty_tpl->tpl_vars['date_dujour']->value;?>
</td>
		</tr>	
		<tr>		
			<td>&nbsp;</td><td>&nbsp;</td>
		</tr>		
		<tr>		
			<td>&nbsp;</td><td><a href="../adherent/liste_cotisations_adht.php?filtre_fiche=1&amp;id_adht=<?php echo $_smarty_tpl->tpl_vars['data_cotis_adh']->value['id_adhtasso'];?>
"><span class="submit_nul" title="<?php echo smarty_function_language(array('name'=>'tpl_retour_button_title'),$_smarty_tpl);?>
"><?php echo smarty_function_language(array('name'=>'tpl_retour_button'),$_smarty_tpl);?>
</span></a></td>
		</tr>		
     </table>		
	</div>  
<?php }
}
