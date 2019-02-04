<?php
/* Smarty version 3.1.33, created on 2019-02-02 15:56:52
  from 'C:\dev\servers\wamp64\www\gestion\gestion_sa\gestassophp_sa\install\install_5.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5c55bdc443b620_57149110',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'cdf759967482457c911ec8402cd192f2d577de80' => 
    array (
      0 => 'C:\\dev\\servers\\wamp64\\www\\gestion\\gestion_sa\\gestassophp_sa\\install\\install_5.tpl',
      1 => 1538761040,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5c55bdc443b620_57149110 (Smarty_Internal_Template $_smarty_tpl) {
?> 
    <div id="titre">&nbsp;<?php echo $_smarty_tpl->tpl_vars['messagetitre']->value;?>
</div>
	<div class="ligne_coul"></div> 	
	<div id="contenu">  	
		<br />
  		<?php if ($_smarty_tpl->tpl_vars['texterreurretour_ar']->value) {?> 
		<div id="erreur-box">
			<br /><span class='erreur-Jaunerouge'><?php echo $_smarty_tpl->tpl_vars['texterreurretour_ar']->value;?>
</span>
		</div>	
		<?php }?>	
 	<br /><br />

	
	 <?php if ($_smarty_tpl->tpl_vars['confing_fin']->value == "nonok") {?> { $message}
	 <br /><br /><br /><br />
	 <div class='login-box'><a href='index.php'><span class='submit_nul' title='Annuler'>Annuler</span></a></div>
	 <?php } else { ?>
		<span class='TextevertGras'>L'installation est termin&eacute;e..</span>	
		<br /><br /><br /> 
		<span class='TextenoirGras'>Changez les permissions</span><br /> 
		- &agrave; 755 sur le r&eacute;pertoire <?php echo $_smarty_tpl->tpl_vars['configuration_rep']->value;?>
,<br />
		- &agrave; 644 ou 444 sur le fichier <?php echo $_smarty_tpl->tpl_vars['configuration']->value;?>
,<br />
		Consulter &eacute;ventuellement votr h&eacute;bergeur pour ces permissions
		<span class='TextenoirGras'>pour des raisons de s&eacute;curit&eacute;</span> <br />
		<br /><br /> 
		<span class='TextenoirGras'>Les pr&eacute;f&eacute;rences association : 	</span><br />
		*  Pr&eacute;f&eacute;rence Association     <br />* D&eacute;tail des d&eacute;signation des activit&eacute;s  <br />* D&eacute;tail des types de cotisations<br />
		sont modifiables dans le menu Administration / Pr&eacute;f&eacute;rences<br /><br />
		<span class='TextenoirGras'>Lisez attentivemnt les aides des différentes pages ou consulter le site Web  <a href="http://gestassophp.free.fr/" title="Connexion">gestassophp</a></span><br /><br />
		<span class='TexterougeGras'>Par s&eacute;curit&eacute;, avant votre premi&egrave;re connexion &agrave; l'espace, supprimer ou renommer le r&eacute;pertoire /install.</span>

		<br /><br /> 
		Vous pouvez vous connectez &agrave; votre espace <a href="../index.php" title="Connexion">GestAssoPhp</a>, et mettre votre fiche personnelle &agrave; jour (Gestion Membres / Mes informations)
	<br /><br /><br /><br />	 

	 <?php }?>
	<br /><br />
	
</div>
    
<?php }
}
