<?php
/* Smarty version 3.1.33, created on 2019-02-02 15:56:58
  from 'C:\dev\servers\wamp64\www\gestion\gestion_sa\gestassophp_sa\templates\login.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5c55bdca3f09e9_35799231',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'e4f0949f8250c3f2cd3292c059ada07291bcd39b' => 
    array (
      0 => 'C:\\dev\\servers\\wamp64\\www\\gestion\\gestion_sa\\gestassophp_sa\\templates\\login.tpl',
      1 => 1451833508,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5c55bdca3f09e9_35799231 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_checkPlugins(array(0=>array('file'=>'C:\\dev\\servers\\wamp64\\www\\gestion\\gestion_sa\\lib\\smarty\\plugins\\function.language.php','function'=>'smarty_function_language',),1=>array('file'=>'C:\\dev\\servers\\wamp64\\www\\gestion\\gestion_sa\\lib\\smarty\\plugins\\function.mailto.php','function'=>'smarty_function_mailto',),));
?>
<!doctype html>
<html lang='fr' dir='ltr'>
<head>
		
    	
	<meta charset="<?php echo smarty_function_language(array('name'=>'charset'),$_smarty_tpl);?>
">
	<meta name="author" content="JCE" />
	<meta name="Description" content="<?php echo $_smarty_tpl->tpl_vars['version']->value;?>
">
	<meta name="ROBOTS" content="noindex, nofollow">
	<meta name="keywords" lang="fr" content="GestAssoPhp, gestion, association">
	<link rel="shortcut icon" href="favicon.ico">
	<link rel="stylesheet" type="text/css" media="screen"  href="js/style_screen.css">
	<!-- link rel="stylesheet" type="text/css" media="print"  href="../js/style_print.css" -->
		<!--[if IE]>
	
	<?php echo '<script'; ?>
 src="http://html5shiv.googlecode.com/svn/trunk/html5.js"><?php echo '</script'; ?>
>
	
	<![endif]-->
	<title>GestAssoPhp+Pg Pour g&eacute;rer votre association - <?php echo $_smarty_tpl->tpl_vars['version']->value;?>
</title>
</head>
<body onload="document.getElementById('login').focus()">
 	
<div id="conteneur_page">     <header class="header_page"> 			<?php echo $_smarty_tpl->tpl_vars['messagetitre']->value;?>
 <?php echo $_smarty_tpl->tpl_vars['nom_asso_gestassophp']->value;?>

    </header> 	
	
	<div class="gauche_page"> 		<nav>
			<h1><?php echo smarty_function_language(array('name'=>'menu_adht_membres'),$_smarty_tpl);?>
</h1>
			<ul>
<?php if ($_smarty_tpl->tpl_vars['priorite_adht']->value == '') {?> 
			<li><?php echo smarty_function_language(array('name'=>'login_user'),$_smarty_tpl);?>
</li>
<?php }
if ($_smarty_tpl->tpl_vars['priorite_adht']->value == '0') {?> 
			<li><?php echo smarty_function_language(array('name'=>'login_interdit'),$_smarty_tpl);?>
</li>
<?php }?>				
<?php if ($_smarty_tpl->tpl_vars['priorite_adht']->value > 0) {?> 				
			<li>&nbsp;&nbsp;<a href="index.php?logout=1" title="Se D&eacute;connecter"><?php echo smarty_function_language(array('name'=>'menu_exit'),$_smarty_tpl);?>
</a></li>	
<?php }?>				
			</ul>

		</nav>
		<br /><br /><br />
		<figure class="centre-txt">			<img src='images/logo/logo_gestassophp.gif' alt="Logo" width="128" height="20" title="Logo GestAssoPhp+"/>
			<br /><br />
			<a rel="license" href="http://creativecommons.org/licenses/by-sa/2.0/fr/" target="_blank"><img src='images/licence/ccby-sa88x31.png' alt="Creative Commons License" width="88" height="31" title="Syst&egrave;me mise &agrave; disposition sous un contrat Creative Commons"/></a><br /><br /><figcaption  class="TextenoirR"><a href="./doc/CCBY-SA-France.htm" target="_blank" title="Contrat Creative Commons" >Licence</a></figcaption>
		</figure>			
	</div> 	
	<section class="section_centre_page">	
		<header class="header_titre_aide"><a href='#' style="cursor:pointer;cursor:hand" onclick="javascript :window.open('aide/a_login.php','popup','height=420,toolbar=no,location=no,directories=no,status=yes,width=660,resizable=no,scrollbars=yes,top=10,left=10')" title="<?php echo smarty_function_language(array('name'=>'title_aide'),$_smarty_tpl);?>
"><img src='images/icones/help.gif' alt="Aide" width="20" height="20"/><?php echo smarty_function_language(array('name'=>'aide'),$_smarty_tpl);?>
</a></header> 

		<header class="header_titre">&nbsp;<?php echo smarty_function_language(array('name'=>'login_adherent'),$_smarty_tpl);?>
</header>
		<div class="ligne_coul"></div> 	
		<div id="contenu"> 		
			<div class="login-box"> 			<br/><img src='images/icones/login.png' alt="login" title="<?php echo smarty_function_language(array('name'=>'login_adherent_title'),$_smarty_tpl);?>
" /><br/>
			<form action="index.php" method="post">

						<label class="label_login" for="login"><?php echo smarty_function_language(array('name'=>'login_my_login'),$_smarty_tpl);?>
</label>
						<input type="text" name="login" id="login" title="<?php echo smarty_function_language(array('name'=>'login_enter_login'),$_smarty_tpl);?>
" value="" size="32" tabindex="1" onfocus="this.className='focus';" onblur="this.className='normal';" onchange="javascript:this.value=this.value.toUpperCase();" />
	<br/>
						<label class="label_login" for="password"><?php echo smarty_function_language(array('name'=>'login_my_passwd'),$_smarty_tpl);?>
</label>
						<input  type="password" name="password" id="password" title="<?php echo smarty_function_language(array('name'=>'login_enter_passwd'),$_smarty_tpl);?>
" value="" size="32" tabindex="2" onfocus="this.className='focus';" onblur="this.className='normal';" />

				<br/><br/><br/>
				<input type="submit" class="submit_ok" name="submit" value="<?php echo smarty_function_language(array('name'=>'login_button'),$_smarty_tpl);?>
" title="<?php echo smarty_function_language(array('name'=>'login_button_title'),$_smarty_tpl);?>
"/>
				<input type="hidden" name="ident" value="1" />
			</form>
			</div>	<br/>
			<footer class="centre-txt">
				<span class="TexterougeGras">&nbsp;<?php echo $_smarty_tpl->tpl_vars['texterreurlogin']->value;?>

				<?php if ($_smarty_tpl->tpl_vars['texterreurlogin0']->value == 1) {?>
				<?php echo smarty_function_language(array('name'=>'mail_contacter'),$_smarty_tpl);
echo smarty_function_mailto(array('address'=>((string)$_smarty_tpl->tpl_vars['email_adresse']->value),'text'=>"Administrateur",'subject'=>"Autorisation_Espace_membres",'encode'=>"javascript"),$_smarty_tpl);?>
 <?php echo smarty_function_language(array('name'=>'mail_mail'),$_smarty_tpl);?>

				<?php }?>
				</span><br/><br/>
				<span class="TextenoirR">&nbsp;<?php echo smarty_function_mailto(array('address'=>((string)$_smarty_tpl->tpl_vars['email_adresse']->value),'text'=>"J\'ai oubli&eacute; mon mot de passe !",'subject'=>"Oubli_mot_de_passe_Espace_membres",'encode'=>"javascript"),$_smarty_tpl);?>
</span><br/><br/>
			</footer>
		</div> 	
	</section>
	<footer class="footer_pied_page"> 		&nbsp;&nbsp;&nbsp;&nbsp;<a href="http://gestassophp.free.fr/cms/" target="_blank" title="R&eacute;alisation" ><?php echo $_smarty_tpl->tpl_vars['version']->value;?>
</a>
    </footer> 	
</div>  </body>
</html>
<?php }
}
