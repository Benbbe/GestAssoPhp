<?php
/* Smarty version 3.1.33, created on 2019-02-02 15:54:02
  from 'C:\dev\servers\wamp64\www\gestion\gestion_sa\gestassophp_sa\install\install_2.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5c55bd1a9c65b5_79870902',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'bc929365094d2088d84ae2f968ff3d3100e11533' => 
    array (
      0 => 'C:\\dev\\servers\\wamp64\\www\\gestion\\gestion_sa\\gestassophp_sa\\install\\install_2.tpl',
      1 => 1538760992,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5c55bd1a9c65b5_79870902 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_checkPlugins(array(0=>array('file'=>'C:\\dev\\servers\\wamp64\\www\\gestion\\gestion_sa\\lib\\smarty\\plugins\\function.html_options.php','function'=>'smarty_function_html_options',),));
?>
 
    <div id="titre">&nbsp;<?php echo $_smarty_tpl->tpl_vars['messagetitre']->value;?>
</div>
	<div class="ligne_coul"></div> 	
	<div id="contenu">  	<br />
 <?php if (count($_smarty_tpl->tpl_vars['erreur_saisie']->value) != 0) {?>
		<div id="erreur-box"> Erreur de saisie
			<?php if ($_smarty_tpl->tpl_vars['erreur_saisie']->value['serveur_bd']) {?> <br /><span class='erreur-Jaunerouge'><?php echo $_smarty_tpl->tpl_vars['erreur_saisie']->value['serveur_bd'];?>
</span><?php }?>
			<?php if ($_smarty_tpl->tpl_vars['erreur_saisie']->value['nom_bd']) {?> <br /><span class='erreur-Jaunerouge'><?php echo $_smarty_tpl->tpl_vars['erreur_saisie']->value['nom_bd'];?>
</span><?php }?>				
			<?php if ($_smarty_tpl->tpl_vars['erreur_saisie']->value['utilis_bd']) {?> <br /><span class='erreur-Jaunerouge'><?php echo $_smarty_tpl->tpl_vars['erreur_saisie']->value['utilis_bd'];?>
</span><?php }?>	
			<?php if ($_smarty_tpl->tpl_vars['erreur_saisie']->value['motpas_bd']) {?> <br /><span class='erreur-Jaunerouge'><?php echo $_smarty_tpl->tpl_vars['erreur_saisie']->value['motpas_bd'];?>
</span><?php }?>	
			<?php if ($_smarty_tpl->tpl_vars['erreur_saisie']->value['prefix_bd']) {?> <br /><span class='erreur-Jaunerouge'><?php echo $_smarty_tpl->tpl_vars['erreur_saisie']->value['prefix_bd'];?>
</span><?php }?>	
			<?php if ($_smarty_tpl->tpl_vars['erreur_saisie']->value['connexion']) {?> <br /><span class='erreur-Jaunerouge'><?php echo $_smarty_tpl->tpl_vars['erreur_saisie']->value['connexion'];?>
</span><?php }?>
			<?php if ($_smarty_tpl->tpl_vars['erreur_saisie']->value['connexionb']) {?> <br /><span class='erreur-Jaunerouge'><?php echo $_smarty_tpl->tpl_vars['erreur_saisie']->value['connexionb'];?>
</span><?php }?>				
		</div>	
 <?php }?>	
	<br />
	<span class='TextenoirGras'>Cr&eacute;er les tables dans la base de donn&eacute;es.</span><br />
	<span class='TextenoirGras'>Vous disposez du support de base de donn&eacute;es :<br />
	- <?php echo $_smarty_tpl->tpl_vars['mysql_bd']->value;?>
<br />
    - <?php echo $_smarty_tpl->tpl_vars['pgsql_bd']->value;?>
</span><br /><br />
	<span class='TextenoirGras'>Assurez vous que la base de donn&eacute;es existe bien  !!!</span> <br />
	<span class='erreur-Jaunerouge'>(Si vous r&eacute;installez, sauvegarder vos anciennes donn&eacute;es !)</span><br />puis,
	<br />
	compl&eacute;ter les champs suivants :
	<br /><br />
	<form method="post" name="installation" action="install_2.php">	
	<table style="width:98%;">
	
		<tr>
			<th class="LignegrisRight" style="width:45%;">Type de base de donn&eacute;es :</th>		
			<td>
			<?php echo smarty_function_html_options(array('name'=>"type_bd",'options'=>$_smarty_tpl->tpl_vars['list_type_bd']->value,'selected'=>$_smarty_tpl->tpl_vars['config_bd']->value['type_bd'],'title'=>"Choix MySQLi, ou PostgreSQL "),$_smarty_tpl);?>
	
			</td>
		</tr>
		<tr>
			<th class="LignegrisRight">Addresse du serveur de base de donn&eacute;es :</th>		
			<td><input type="text" name="serveur_bd" id="serveur_bd" title="Exemple localhost " value="<?php echo $_smarty_tpl->tpl_vars['config_bd']->value['serveur_bd'];?>
" size="32"  maxlength="50" tabindex="2"/></td>
		</tr>
		<tr>
			<th class="LignegrisRight">Nom de la base de donn&eacute;es :</th>		
			<td><input type="text" name="nom_bd" id="nom_bd" title="Exemple ma_bdase" value="<?php echo $_smarty_tpl->tpl_vars['config_bd']->value['nom_bd'];?>
" size="32"  maxlength="50" tabindex="3"/></td>
		</tr>
		<tr>
			<th class="LignegrisRight">Nom d'utilisateur :</th>		
			<td><input type="text" name="utilis_bd" id="utilis_bd" title="Exemple root" value="<?php echo $_smarty_tpl->tpl_vars['config_bd']->value['utilis_bd'];?>
" size="32"  maxlength="50" tabindex="4"/></td>
		</tr>
		<tr>
			<th class="LignegrisRight">Mot de passe :</th>		
			<td><input type="password" name="motpas_bd" id="motpas_bd" title="Exemple ******" value="<?php echo $_smarty_tpl->tpl_vars['config_bd']->value['motpas_bd'];?>
" size="32"  maxlength="50" tabindex="5"/></td>
		</tr>		
		<tr>
			<th class="LignegrisRight">Pr&eacute;fix des tables :</th>		
			<td><input type="text" name="prefix_bd" id="prefix_bd" title="Exemple g1_" value="<?php echo $_smarty_tpl->tpl_vars['config_bd']->value['prefix_bd'];?>
" size="32"  maxlength="50" tabindex="6"/></td>
		</tr>		
		
		<tr>	
			<th class="LignegrisRight">Attention si coch&eacute; <span class='erreur-Jaunerouge'>Effacement des tables et données</span> :</th>				
			<!--td><input type="checkbox" name="drop_bd" id="drop_bd" <?php if ($_smarty_tpl->tpl_vars['config_bd']->value['drop_bd'] == 'on') {?> checked="checked" <?php }?> title="Attention!" />
			</td --> 
				<td><input type="checkbox" name="drop_bd" id="drop_bd"  <?php if ($_smarty_tpl->tpl_vars['config_bd']->value['drop_bd'] == 'on') {?>  checked="$config_bd.drop_bd" <?php }?> title="Attention!" />
			</td>		
		</tr>		
		<tr>		
			<td colspan="2">&nbsp;</td>
		</tr>
		<tr>
			<th colspan="2">
			<input type="submit" class="submit_ok" name="Continuer" value="Continuer" title="Continuer"/>				
			<input type="hidden" name="valid2" value="valid2"/>
		</th>
		</tr>
     </table></form>

</div>
    
<?php }
}
