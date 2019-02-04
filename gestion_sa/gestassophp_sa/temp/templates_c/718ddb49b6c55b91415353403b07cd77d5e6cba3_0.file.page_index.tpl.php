<?php
/* Smarty version 3.1.33, created on 2019-02-02 15:57:01
  from 'C:\dev\servers\wamp64\www\gestion\gestion_sa\gestassophp_sa\templates\page_index.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5c55bdcd14be53_55509002',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '718ddb49b6c55b91415353403b07cd77d5e6cba3' => 
    array (
      0 => 'C:\\dev\\servers\\wamp64\\www\\gestion\\gestion_sa\\gestassophp_sa\\templates\\page_index.tpl',
      1 => 1459415913,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5c55bdcd14be53_55509002 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_checkPlugins(array(0=>array('file'=>'C:\\dev\\servers\\wamp64\\www\\gestion\\gestion_sa\\lib\\smarty\\plugins\\function.language.php','function'=>'smarty_function_language',),));
?>
<!doctype html>
<html lang='fr' dir='ltr'>
<head>
	<meta charset="<?php echo smarty_function_language(array('name'=>'charset'),$_smarty_tpl);?>
">
	<meta name="author" content="JCE">
	<meta name="Description" content="<?php echo $_smarty_tpl->tpl_vars['version']->value;?>
">
	<meta name="ROBOTS" content="noindex, nofollow">
	<meta name="keywords" lang="fr" content="GestAssoPhp, gestion, association">
	<link rel="shortcut icon" href="../favicon.ico">
	<link rel="stylesheet" type="text/css" media="screen"  href="../js/style_screen.css">
	<link rel="stylesheet" type="text/css" media="print"  href="../js/style_print.css">
	<title>GestAssoPhp+Pg - <?php echo $_smarty_tpl->tpl_vars['nomprenom_adht']->value;?>
</title>
		<!--[if IE]>
	
	<?php echo '<script'; ?>
 src="http://html5shiv.googlecode.com/svn/trunk/html5.js"><?php echo '</script'; ?>
>
	
	<![endif]-->
	
</head>
<body>

<div id="conteneur_page">       <header class="header_page"> 			<?php echo $_smarty_tpl->tpl_vars['messagetitre']->value;?>
 <?php echo $_smarty_tpl->tpl_vars['nom_asso_gestassophp']->value;?>

      </header>	
	
	<div class="gauche_page"> 		<nav>
			<h1><?php echo smarty_function_language(array('name'=>'menu_adht_membres'),$_smarty_tpl);?>
</h1>
			<ul>
<?php if ($_smarty_tpl->tpl_vars['priorite_adht']->value == '') {?> 
			<li><a href="../index.php"><?php echo smarty_function_language(array('name'=>'login_user'),$_smarty_tpl);?>
</a></li>
<?php }?>				
<?php if ($_smarty_tpl->tpl_vars['priorite_adht']->value > 0) {?> 				
				<li<?php if ($_smarty_tpl->tpl_vars['nomlienpage']->value == "gerer_fiche_adht.php" || $_smarty_tpl->tpl_vars['nomlienpage']->value == "remplir_infogene_adht.php") {?> class="menu_page_active"<?php }?>>&nbsp;&nbsp;<a href="../adherent/gerer_fiche_adht.php" title="<?php echo smarty_function_language(array('name'=>'titre_visu_fiche_adht'),$_smarty_tpl);?>
"><?php echo smarty_function_language(array('name'=>'menu_adht_information'),$_smarty_tpl);?>
</a></li>
				<li<?php if ($_smarty_tpl->tpl_vars['nomlienpage']->value == "liste_adht.php" || $_smarty_tpl->tpl_vars['nomlienpage']->value == "consulter_fiche_adht.php") {?> class="menu_page_active"<?php }?>>&nbsp;&nbsp;<a href="../adherent/liste_adht.php" title="<?php echo smarty_function_language(array('name'=>'titre_liste_adht'),$_smarty_tpl);?>
"><?php echo smarty_function_language(array('name'=>'menu_adht_liste'),$_smarty_tpl);?>
</a></li>	
<?php }?>				
			</ul>			
	
<?php if ($_smarty_tpl->tpl_vars['priorite_adht']->value == 4) {?> 		
		
			<h1><?php echo smarty_function_language(array('name'=>'menu_admin_gestion'),$_smarty_tpl);?>
</h1>
			<ul>			
				<li<?php if ($_smarty_tpl->tpl_vars['nomlienpage']->value == "tableau_bord.php") {?> class="menu_page_active"<?php }?>><a href="../admin/tableau_bord.php" title="<?php echo smarty_function_language(array('name'=>'titre_admin_tableaubord'),$_smarty_tpl);?>
"><?php echo smarty_function_language(array('name'=>'menu_admin_gestion_tb'),$_smarty_tpl);?>
</a></li>			
			</ul>			
			
<?php }
if ($_smarty_tpl->tpl_vars['priorite_adht']->value > 4) {?> 		
		
			<h1><?php echo smarty_function_language(array('name'=>'menu_admin_gestion'),$_smarty_tpl);?>
</h1>
			<ul>			
				<li<?php if ($_smarty_tpl->tpl_vars['nomlienpage']->value == "tableau_bord.php") {?> class="menu_page_active"<?php }?>>&nbsp;&nbsp;<a href="../admin/tableau_bord.php" title="<?php echo smarty_function_language(array('name'=>'titre_admin_tableaubord'),$_smarty_tpl);?>
"><?php echo smarty_function_language(array('name'=>'menu_admin_gestion_tb'),$_smarty_tpl);?>
</a></li>
<?php if ($_smarty_tpl->tpl_vars['priorite_adht']->value == 9) {?>					
				<li<?php if ($_smarty_tpl->tpl_vars['nomlienpage']->value == "remplir_priorite.php") {?> class="menu_page_active"<?php }?>>&nbsp;&nbsp;<a href="../admin/remplir_priorite.php" title="<?php echo smarty_function_language(array('name'=>'titre_admin_gerer_priorite_adherents'),$_smarty_tpl);?>
"><?php echo smarty_function_language(array('name'=>'menu_admin_gestion_pa'),$_smarty_tpl);?>
</a></li>
				<li<?php if ($_smarty_tpl->tpl_vars['nomlienpage']->value == "liste_logs.php") {?> class="menu_page_active"<?php }?>>&nbsp;&nbsp;<a href="../admin/liste_logs.php" title="<?php echo smarty_function_language(array('name'=>'titre_admin_logs'),$_smarty_tpl);?>
"><?php echo smarty_function_language(array('name'=>'menu_admin_gestion_log'),$_smarty_tpl);?>
</a></li>
				<li<?php if ($_smarty_tpl->tpl_vars['nomlienpage']->value == "remplir_preferences.php") {?> class="menu_page_active"<?php }?>>&nbsp;&nbsp;<a href="../admin/remplir_preferences.php" title="<?php echo smarty_function_language(array('name'=>'titre_admin_preferences'),$_smarty_tpl);?>
"><?php echo smarty_function_language(array('name'=>'menu_admin_gestion_pref'),$_smarty_tpl);?>
</a></li>				
				<li<?php if ($_smarty_tpl->tpl_vars['nomlienpage']->value == "maint_bd.php") {?> class="menu_page_active"<?php }?>>&nbsp;&nbsp;<a href="../admin/maint_bd.php" title="<?php echo smarty_function_language(array('name'=>'titre_admin_maint_bd'),$_smarty_tpl);?>
"><?php echo smarty_function_language(array('name'=>'menu_admin_gestion_maint_bd'),$_smarty_tpl);?>
</a></li>		
<?php }?>				
				<li><h1><?php echo smarty_function_language(array('name'=>'menu_adherent_bene'),$_smarty_tpl);?>
</h1></li>
				<li<?php if ($_smarty_tpl->tpl_vars['nomlienpage']->value == "liste_adht_admin.php") {?> class="menu_page_active"<?php }?>>&nbsp;&nbsp;<a href="../adherent/liste_adht_admin.php" title="<?php echo smarty_function_language(array('name'=>'menu_admin_gestion'),$_smarty_tpl);?>
&nbsp;-&nbsp;<?php echo smarty_function_language(array('name'=>'titre_admin_liste_adht'),$_smarty_tpl);?>
"><?php echo smarty_function_language(array('name'=>'menu_adherent_gestion'),$_smarty_tpl);?>
</a></li>	
				
				<li<?php if ($_smarty_tpl->tpl_vars['nomlienpage']->value == "liste_adht_admin2.php" || $_smarty_tpl->tpl_vars['nomlienpage']->value == "consulter_fiche_adht_admin2.php") {?> class="menu_page_active"<?php }?>>&nbsp;&nbsp;<a href="../adherent/liste_adht_admin2.php"  title="<?php echo smarty_function_language(array('name'=>'menu_admin_gestion'),$_smarty_tpl);?>
&nbsp;-&nbsp;<?php echo smarty_function_language(array('name'=>'titre_admin_liste_adht2'),$_smarty_tpl);?>
"><?php echo smarty_function_language(array('name'=>'titre_admin_liste_adht2'),$_smarty_tpl);?>
</a></li>
<?php if ($_smarty_tpl->tpl_vars['priorite_adht']->value > 6) {?>				
				<li<?php if ($_smarty_tpl->tpl_vars['nomlienpage']->value == "liste_cotisations_adht.php" || $_smarty_tpl->tpl_vars['nomlienpage']->value == "remplir_cotisations_adht.php") {?> class="menu_page_active"<?php }?>>&nbsp;&nbsp;<a href="../adherent/liste_cotisations_adht.php"  title="<?php echo smarty_function_language(array('name'=>'menu_admin_gestion'),$_smarty_tpl);?>
&nbsp;-&nbsp;<?php echo smarty_function_language(array('name'=>'titre_admin_liste_cotis_adht'),$_smarty_tpl);?>
"><?php echo smarty_function_language(array('name'=>'menu__gestion_cotis'),$_smarty_tpl);?>
</a></li>
<?php }?>
				<li<?php if ($_smarty_tpl->tpl_vars['nomlienpage']->value == "liste_fichiers_adht.php" || $_smarty_tpl->tpl_vars['nomlienpage']->value == "remplir_fichier_adht.php") {?> class="menu_page_active"<?php }?>>&nbsp;&nbsp;<a href="../adherent/liste_fichiers_adht.php"  title="<?php echo smarty_function_language(array('name'=>'menu_admin_gestion'),$_smarty_tpl);?>
&nbsp;-&nbsp;<?php echo smarty_function_language(array('name'=>'titre_admin_liste_fichiers_adht'),$_smarty_tpl);?>
"><?php echo smarty_function_language(array('name'=>'menu__gestione_file'),$_smarty_tpl);?>
</a></li>			
			</ul>			
		
<?php }?>
			<br/>
			<div class="contourligne">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<a href="../index.php?logout=1" title="<?php echo smarty_function_language(array('name'=>'menu_exit_title'),$_smarty_tpl);?>
"><img src='../images/icones16/i_stop.png' alt="out" width="16" height="16" title="<?php echo smarty_function_language(array('name'=>'menu_exit_title'),$_smarty_tpl);?>
"/>&nbsp;<?php echo smarty_function_language(array('name'=>'menu_exit'),$_smarty_tpl);?>
&nbsp;</a></div>
		</nav>
		<figure class="centre-txt"><img src='../images/logo/logo_gestassophp.gif' alt="Logo" width="128" height="20" title="Logo GestAssoPhp+"/></figure>
		
	</div> 
	<div class="section_centre_page"> 	<?php echo $_smarty_tpl->tpl_vars['content']->value;?>

	</div> 	 
	<footer class="footer_pied_page">  		&nbsp;&nbsp;&nbsp;&nbsp;<a href="http://gestassophp.free.fr/cms/" target="_blank" title="R&eacute;alisation" ><?php echo $_smarty_tpl->tpl_vars['version']->value;?>
</a>&nbsp;&nbsp;&nbsp;&nbsp; <span class="TextenoirR"><a href="../doc/CCBY-SA-France.htm" target="_blank" title="Contrat Creative Commons" >Licence</a></span>
    </footer> 	
</div> </body>
</html>
<?php }
}
