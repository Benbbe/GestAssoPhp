<?php
/* Smarty version 3.1.33, created on 2019-02-02 15:56:23
  from 'C:\dev\servers\wamp64\www\gestion\gestion_sa\gestassophp_sa\install\install_4.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5c55bda7d8a665_87686556',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '499a077ed8c402dcd61fa168855ca59e9273cd89' => 
    array (
      0 => 'C:\\dev\\servers\\wamp64\\www\\gestion\\gestion_sa\\gestassophp_sa\\install\\install_4.tpl',
      1 => 1538757942,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5c55bda7d8a665_87686556 (Smarty_Internal_Template $_smarty_tpl) {
?> 
    <div id="titre">&nbsp;<?php echo $_smarty_tpl->tpl_vars['messagetitre']->value;?>
</div>
	<div class="ligne_coul"></div> 	
	<div id="contenu">  	
	<br />
 <?php if (count($_smarty_tpl->tpl_vars['erreur_saisie']->value) != 0) {?>   		<div id="erreur-box"> Erreur de saisie

		</div>	
 <?php }?>	
 	<br />

Choisissez le Login, l'adresse email et le mot de passe pour votre compte d'administration.<br />Veuillez vous assurer que vous enregistrez ces donn&eacute;es &quot;quelque part",<br /> car il sont indispensables pour l'acc&egrave;s &agrave; votre syst&egrave;me d'administration...<br />
<span class="TextenoirR">(Vous pourrez modifier ces informations apr&eacute;s votre connexion &agrave; GestAssoPhp)</span>
	<br /><br />
	<form method="post" name="installation" action="install_4.php">
	<table  style="width:98%;">

		<tr>
			<th class="LignegrisRight"  style="width:25%;">Login :</th>		
			<td><input type="text" name="login_adht" id="login_adht" title=" Le Login (entre 4 et 20 caractères autorisés A à Z, 0 à 9 et _ - ) sera créé en Majuscules automatiquement - Attention -" value="<?php echo $_smarty_tpl->tpl_vars['data_adherent']->value['login_adht'];?>
"  size="32"  maxlength="50" tabindex="1"/><?php if ($_smarty_tpl->tpl_vars['erreur_saisie']->value['login']) {?> <span class="erreur-Jaunerouge"><?php echo $_smarty_tpl->tpl_vars['erreur_saisie']->value['login'];?>
</span><?php }?></td>
		</tr>
		<tr>		
			<td colspan ="2"><span class="TexterougeR">Le Login (entre 4 et 20 caract&egrave;res autoris&eacute;s A &agrave; Z, 0 &agrave; 9 et _ - ) sera cr&eacute;&eacute; en Majuscules automatiquement')</span></td>
		</tr>
		<tr>
			<th class="LignegrisRight">Adresse email :</th>		
			<td><input type="text" name="email_adht" id="email_adht" title="Votre adresse email " value="<?php echo $_smarty_tpl->tpl_vars['data_adherent']->value['email_adht'];?>
" size="32"  maxlength="50" tabindex="2"/> <?php if ($_smarty_tpl->tpl_vars['erreur_saisie']->value['email']) {?> <span class="erreur-Jaunerouge">&nbsp;<?php echo $_smarty_tpl->tpl_vars['erreur_saisie']->value['email'];?>
</span><?php }?></td>
		</tr>
		<tr>
			<th class="LignegrisRight">Mot de passe :</th>		
			<td><input type="password" name="pass_adht1" id="pass_adht1" title="Mot de passe entre 4 et 16 caractères autorisés a/A à z/Z, 0 à 9 et _ - " value="<?php echo $_smarty_tpl->tpl_vars['data_adherent']->value['pass_adht1'];?>
" size="32"  maxlength="50" tabindex="3"/><?php if ($_smarty_tpl->tpl_vars['erreur_saisie']->value['mdp']) {?> <span class="erreur-Jaunerouge"><?php echo $_smarty_tpl->tpl_vars['erreur_saisie']->value['mdp'];?>
</span><?php }?></td>
		</tr>
		<tr>
			<th class="LignegrisRight">Mot de passe encore :</th>		
			<td><input type="password" name="pass_adht2" id="pass_adht2" title="Mot de passe entre 4 et 16 caractères autorisés a/A à z/Z, 0 à 9 et _ -" value="<?php echo $_smarty_tpl->tpl_vars['data_adherent']->value['pass_adht2'];?>
" size="32"  maxlength="50" tabindex="4"/></td>
		</tr>
		<tr>		
			<td colspan ="2"><span class="TexterougeR">Mot de passe entre 4 et 16 caract&egrave;res autoris&eacute;s a/A &agrave; z/Z, 0 &agrave; 9 et _ -</span></td>
		</tr>		
		<tr>		
			<td colspan ="2">&nbsp;</td>
		</tr>	
		<tr>
			<th class="LignegrisRight">Nom :</th>		
			<td><input type="text" name="nom_adht" id="nom_adht" title="Votre Nom" value="<?php echo $_smarty_tpl->tpl_vars['data_adherent']->value['nom_adht'];?>
" size="32"  maxlength="50" tabindex="5" /> <?php if ($_smarty_tpl->tpl_vars['erreur_saisie']->value['nom'] != '') {?> <span class="erreur-Jaunerouge"><?php echo $_smarty_tpl->tpl_vars['erreur_saisie']->value['nom'];?>
</span><?php }?></td>
		</tr>
		<tr>
			<th class="LignegrisRight">Pr&eacute;nom :</th>		
			<td><input type="text" name="prenom_adht" id="prenom_adht" title="Votre Prénon" value="<?php echo $_smarty_tpl->tpl_vars['data_adherent']->value['prenom_adht'];?>
" size="32"  maxlength="50" tabindex="6"/> <?php if ($_smarty_tpl->tpl_vars['erreur_saisie']->value['pnom'] != '') {?> <span class="erreur-Jaunerouge"><?php echo $_smarty_tpl->tpl_vars['erreur_saisie']->value['pnom'];?>
</span><?php }?></td>
		</tr>		
		<tr>		
			<td colspan="2">&nbsp;</td>
		</tr>
	
		<tr>
			<th colspan="2">
			<input type='submit' class='submit_ok' name='Continuer' value='Continuer' title='Continuer'/>
			<input type='hidden' name='valid4' value='valid4'/>		
		</th>
		</tr>
     </table></form>

</div>
    
<?php }
}
