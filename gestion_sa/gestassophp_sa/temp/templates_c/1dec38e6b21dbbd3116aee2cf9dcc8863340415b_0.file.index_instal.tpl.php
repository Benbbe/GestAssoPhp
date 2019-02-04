<?php
/* Smarty version 3.1.33, created on 2019-02-02 15:54:02
  from 'C:\dev\servers\wamp64\www\gestion\gestion_sa\gestassophp_sa\install\index_instal.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5c55bd1ac95e22_82236255',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '1dec38e6b21dbbd3116aee2cf9dcc8863340415b' => 
    array (
      0 => 'C:\\dev\\servers\\wamp64\\www\\gestion\\gestion_sa\\gestassophp_sa\\install\\index_instal.tpl',
      1 => 1538758929,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5c55bd1ac95e22_82236255 (Smarty_Internal_Template $_smarty_tpl) {
?> <!doctype html>
<html lang='fr' dir='ltr'>
<head>
		
    <meta charset="UTF-8">
	<meta name="author" content="JCE" />
	<meta name="Description" content="<?php echo $_smarty_tpl->tpl_vars['version_i']->value;?>
">
	<meta name="ROBOTS" content="noindex, nofollow">
	<meta name="keywords" lang="fr" content="GestAssoPhp, gestion, association">
	<link rel="stylesheet" type="text/css" media="screen"  href="../js/<?php echo $_smarty_tpl->tpl_vars['style_i']->value;?>
"/>
	<!-- link rel="stylesheet" type="text/css" media="screen"  href="../js/style_screen.css"/ -->
	<title>GestAssoPhp+Pg - Installation</title>
</head>
<body>

<div id="conteneur_page">
    <header class="header_page">Installation de GestAssoPhp+Pg</header>	
	<div class="gauche_page">
	<nav class="menu_page">&nbsp;<br />
			<h1>Installation</h1>
			<ul>
			<li><?php echo $_smarty_tpl->tpl_vars['Etape1']->value;?>
&nbsp;</li>
			<li><?php echo $_smarty_tpl->tpl_vars['Etape2']->value;?>
&nbsp;</li>				
			<li><?php echo $_smarty_tpl->tpl_vars['Etape3']->value;?>
&nbsp;</li>
			<li><?php echo $_smarty_tpl->tpl_vars['Etape4']->value;?>
&nbsp;</li>
			<li><?php echo $_smarty_tpl->tpl_vars['Etape5']->value;?>
&nbsp;</li>				
			</ul>
	</nav>
	<br /><br /><br />
	<div class="centre-txt"><img src='../images/logo/logo_gestassophp.gif' alt="Logo" width="128" height="20" title="Logo GestAssoPhp"/><br /><br /><a rel="license" href="http://creativecommons.org/licenses/by-sa/2.0/fr/" target="_blank"><img src='../images/licence/ccby-sa88x31.png' alt="Creative Commons License" width="88" height="31" title="mise Ã  disposition sous un contrat Creative Commons"/></a><br /><br /><span class="TextenoirR"><a href="../doc/CCBY-SA-France.htm" target="_blank" title="Contrat Creative Commons" >Licence</a></span><br /><br /></div>		
		</div> <!-- gauche_page -->

	<div class="section_centre_page">  	<?php echo $_smarty_tpl->tpl_vars['content']->value;?>

	</div> 	
	<footer class="footer_pied_page">
		&nbsp;&nbsp;&nbsp;&nbsp;<a href="http://gestassophp.free.fr/" target="_blank" title="Gestion des associations" >Version : <?php echo $_smarty_tpl->tpl_vars['version_i']->value;?>
</a>
    </footer>
	
</div> <!-- / conteneur_page  -->

</body>
</html>
<?php }
}
