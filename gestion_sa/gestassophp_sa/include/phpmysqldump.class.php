<?php
/**
* Titre........... : PHPMySQLBackup
*
* Description..... : Fait la meme chose que mysqldump mais en PHP sans utiliser le shell avec des +
*
* Description..... : Backup a Mysql. Does the same than mysqldump but in PHP without using the shell with some +
* version......... : 0.60 -- Modification  par JCE
* date............ : 12 mai 2003 /  may 12 2003 -- Modification 07/08/2008 par JCE
* fichier/file.... : phpmysqldump.pclass.php
*
* Auteur/author... : Pascal CASENOVE  phpdev@cawete.com  http://www.cawete.com/pascal/php/phpmysqldump/phpmysqldump.zip
* English version. : Eve CASENOVE     eve@cawete.com
*
* licence......... : The GNU General Public License (GPL) 
*					 http://www.opensource.org/licenses/gpl-license.html
*
* changements..... : fixe set_timeout automatique, separe ( merci à ADL )
*					 ajout de la sauvegarde au vol sans compression du fichier
*					 reecriture de la methode backup pour en faciliter la lecture
*
* change ......... : set_timout detect, fly backup, rewrite backup methode to make easy to read
*
* A faire......... : compression à la volée					 
*					 une autre class en preparation pour sauvegarder en une seule opreration
*					 les bases et le site dans un seul fichier compresse
* 
* Todo	.......... : fly compress
*					 
* Suggestion...... : Pour toutes remarques, suggestions ... n'hésitez pas à me contacter
*					 pascal@cawete.com
* Suggestions..... : for all comments, suggestions… don’t hesitate, contact me
*
* Description .... : Pour faire une sauvegarde d'une base MySQL l'outil habituel est mysqldump
*					 fourni avec MySQL.
*					 Pour l'utiliser en PHP il faut avoir un acces au shell et qu'il soit dans le path.
*					 Cela n'est pas toujour le cas selon l'hebergeur, le systeme, Microsoft, Linux ...
*					 J'avais besoin d'un outil qui me genere une sauvegarde totale de base au format
*					 le plus courant et independant de la plateforme.
*					 Comme la sauvegarde doit pouvoir etre faite par un utilisateur de base, le systeme
*					 doit etre simple: j'ouvre la page web je telecharge le fichier, c'est fini.
*					 le fichier peut etre compresse avec la gzlib de PHP,donc sans utiliser le shell et
*					 quelque soit le systeme d'exploitation.
*					 
*					 Pour la restoration je n'ai rien prevu, simplement parceque pour reconstruire une base
*					 il vaut mieux savoir et verifier ce que l'on fait. il vaut donc mieux utiliser un des 
*					 nombreux outils prevus a cet effet qui travaillent en direct sur le port MySQL.
*					 Certain outils de traitement des fichier sql ne suppoortent pas les commantaire.
*					 en mettant $class->format_out = "no_comment" le probleme est regle
*
* Description .... : To do a backup of a base MySQL the basic tool is mysqldump furnished with MySQL
*					 To use it in PHP you shoul have an access to the shell and to be in the path
*					 It is not always the case following the host, the system, Microsoft, Linux…
* 					 I needed a tool that generates a full back up of basis to the most curent format and independant of the plateform
*					 As a basic user should be able to do the backup, the system must be easy 
*					 : I open the webpage, I download the file THAT’S IT.  
*					 The file can be ziped with the gzlib of PHP without using the shell or any operating system	
*
*					 For the restoration I planed nothing because to rebuild a basis it is better to understand and check what is done . 
*					 It is then better to use one of the tools done for it and that work directly on MySQL port.
*				 	 Some of that tools don’t handle comments, Adding $class->format_out = "no_comment" the problem is solved
*					 If you must to restore in PHP and you think you know what you do, contact me.
*					 I have littles script that i use, they are not clean, comments are in french and not up to date, but i can send you.

* remarques ...... : Le fichier de sauvegarde est creer dans le repertoire du script
* 					 vous devez donc avoir le droit d'ecrire dans ce repertoire
*					 la securite n'est pas geree par cette class. Si vous ne le faite pas
*					 avec des htaccess ou du code n'importe quel visiteur peut avoir une copie de vos bases
*					 La compression est desactivee pour la sauvegarde a la volee
* reamarks ....... : the back up file is created in the script directory. 
*					 You should be allowed to write in that directory because the security is not administrated by that class.
*					 If you don’t do it with some htaccess or encoding it any visitor could have a copy of your data.
*                    Compress is disable if fly is on.					 
*
* Methodes........ : **nettoyage() 
*					   permet de vider le repertoire temporaire dans lequel sont crees les sauvegardes
*					   si cette methode n'est pas utilisee les sauvegardes sont archivées.
*
*					   Allows to empty the temp directory in which are all the backup.
*					   If you don’t use that method the backups are archived
*
*                    **backup($fichier) 
*					   realise la sauvegarde dans le fichier $fichier
*					   si $fichier est ommis un nom de fichier est attribue (methode recomandee)
*					   le fichier est cree dans un sous repertoire temp du repertoire ou s'execute le script
*					   Si temp n'existe pas il est cree.verifiez bien si vous avez le droit d'ecrire. 
*					   Pour la sauvegarde a la volée ( $fly=1 ) rien n'est ecrit sur le disque.
*					   le nom du fichier est utilise pour le transfert HTTP
*
*					   makes the backup in the file $fichier
*					   if $fichier is forgotten un name of file is given ( recomended method) 
*      				   the file is created in a temp subdirectory of the directory is executed in the script
*				       if temp doesn’t exist it is created ( Check if you are allowed to write )
*					   in on fly backup nothing is write on hard drive, $fichier is the name of the file
*					   in HTTP transfert
*
*					 **compress() 
*					   compresse au format gzip le fichier cree avec backup et le renome en .gz
*					   il vaut mieux utiliser le flag compress_ok pour activer ou desactiver l'utilisation de la methode
*
*					   This methode zip to the format gzip the file created with backup and rename it in .gz			
*					   It' better to use the compress_ok flag to activate or desactivate compress for the class.
*			
* Proprietes...... : **format_out 
* Property			   si ="no_comment" la sauvegarde est faite sans commentaires
*					   utilie pour certains outils de restoration. A n'utiliser que si votre outil de restoration
*					   ne lit pas correctement le fichier
*
*					   the backup is done without comment 
*					   usefull for some restoring tools. Use it only if your restoring tool doesn’t read correctly the file					   
*
*					 **$fly 
*					   la sauvegarde n'est pas écrite sur le disque elle est directement telegargee
*					   The backup is not write on the server, it send to the browser on fly.
*					 **$compress_ok
*						 active la compression gz sauf si $fly
*						 Activate compression exept if $fly is on (=1)
*						
*
* Parametres...... : $sav = new phpmysqldump($link, $host, $user, $password, $base, $langue);
* Parameters		 
*					 **$link est un link vers une base deja ouverte, les autres parametre sont alors ""
*					 si $link est "" les autres parametres sont utilises et n'ont pas besoin de commentaires
*					 se sont les parametre de la base a sauvegarder

*					 **$link is a valid link to an already open base, the other parameters are then  ""
*				 	 If $link is "" the other parameters are used and don’t need comments. 
*					 They are the parameters of the base to backup
*					
*   				 **$langue par defaut "fr" "en" supporte le reste viendra
*					 $langue default language is fr en is support other comming soon		
*
* ///////////////////////////////////////////////
* 07/08/2008 par JCE- GestAssoPhp  Ajout - Modification   sauver ou non les tables + Modification ajout espace après -- X dans les commentaire cela provoque une erreur a l'import BD
* 27/10/2009 PHP 5.3  // supprimé -> //!!!!  Function mysql_list_tables() is deprecated  -  On remplace par  exemple sur  http://fr.php.net/manual/fr/function.mysql-list-tables.php 
* 29/12/2009 remplace var par  private ou public PHP5
* 16/01/2013 merci à Olivier Humez ajoutligne : if(is_null($tbl)){return "NULL";} else if($tbl==""){return "''";};
*  Correction OHV0.0 pour empêcher la sauvegarde de "" en NULL
*  21/09/2014 - ajout sécurité sur "SHOW TABLES."  
* 
* 12/01/2017 MODIFICATION remplace mysql par mysqli pour export PHP 5.6, 7.x
*
* modifié par JCE - GestAssoPhp
 * @package   GestAssoPhp+Pg
*		
*/
		
/*******************************************************************
*
*    class 
*
********************************************************************/

class phpmysqldump
{
	private $link;				// lien vers la base a sauvegarder 		//link to the database to backup
	private $base;				// nom de la base						// the database name						
	private $host;				// nom ou ip du serveur de MySQL		// name or IP of the MySQL server
	public $filename; 			// nom du fichier de sauvegarde			// name of the backup file
	private $sousdir="temp/";	// sous repertoire dans lequel s'effectue la sauvegarde avec le / final
							// sub-directory in which the backup file is done ( not on fly mode) ( note the final /)
	private $version="0.6";  // "0.53" -> .06 par JCE
	private $format_out;		// format de sortie null : mysql dump "no_comment" idem sans commentaires
							// "" : normal backup, "no_comment" : for a dump without comment
	private $language;			// pret pour d'autres langues defaut "fr" sinon "en" "sp" "ge" 	// language
	public $fly;				// flag si oui sauvegarde au vol								// flag for fly backup
	public $compress_ok;		// flag pour la compression		
								// flag for compress
	public $data_yes=1;		//1 = données  0 pas de données 	
	public $errr;				// remontees d'erreurs					// for error messages	
							
// Ajout - Modification 07/08/2008 par JCE						
	public $struct_yes=1;		// 1 = structure  0 pas de stucture
							
	
	private $no_time_limit=TRUE;// si la fonction set_time_limit() est désactivée devient FALSE
							// time limit for big database			
							
	private $fp= ''; // add PHP5.3 27/10/2009
//**** constructeur *********************************************

	//	function phpmysqldump( $host, $user, $password, $base, $langue="fr", $link=NULL)
	function __construct ( $host, $user, $password, $base, $langue="fr", $link=NULL)
	{	
		$this->language=$langue;
		// recherche si set_time_limit() est desactivee  // look for set_time_limit() active
		if(get_cfg_var("safe_mode")){ 
			$this->no_time_limit=FALSE;
		}
		//***

		//ouverture de la base												// opening the database
		if($link){ 			// si un lien ouvert vers la base est fourni 	// if a MySQL link is provided
			$this->link = $link;
		}else{				// sinon login password ...						// else host, login, password ...			
			//$this->link = @mysql_connect($host, $user, $password);
			$this->link = @mysqli_connect($host, $user, $password); //+ 12/01/2017
			if(!$this->link ){$this->errr=$this->message("err_mysql"); return false;}
		}
		
		//if(!mysql_select_db($base)){$this->errr=$this->message("err_base"); return false;}
		if(!mysqli_select_db($this->link, $base)){$this->errr=$this->message("err_base"); return false;} //+ 12/01/2017
		$this->base=$base;
		$this->host=$host;
	}
//**** fin du constructeur **************************************
	// dirige la sortie du dump navigateur client ou fichier			// write backup to file or to browser	
	function ecrire($val){
		//if($this->fly){echo $val;}else{fwrite($this->fp, $val);} // la sauveagrde se fait en ISO-8859-1
		if($this->fly){echo utf8_encode($val);}else{fwrite($this->fp, utf8_encode($val));} // la sauveagrde se fait en UTF-8 
	}

//***************************************************************
	// si envoi vers le navigateur entete HTTP							// HTTP header for on fly backup
	function entete($filename){
		header( "Content-type: application/force-download");  
    	header( "Content-Disposition: inline; filename=\"" . $filename . "\"");
		header( "Expires: Mon, 1 Jul 1999 01:00:00 GMT"); 
    	header( "Cache-Control: no-cache, must-revalidate, post-check=0, pre-check=0");
	}
	
//************** dump de la base ***************** beging the dump****
	function backup($fichier="") // si $fichier null ignoré sinon utilise comme nom de fichier de sauvegarde
	{							 // $fichier is optional If is used is the name of the backup file
		$fp ='';// add PHP5  Undefined variable
		if($this->fly){$this->sousdir="";}
		if($this->errr)
		{
			return false;
		}else{ 
			
			if($fichier){ 				// *** si un nom de fichier en parametre on l'utilise
										// *** if you provide a file name we use it
				$this->filename=$this->sousdir.$fichier;
			}else{						// *** sinon on en genere un // else automatic name
				$this->filename = $this->sousdir."backup_".$this->base."_".date("Y_m_d__G_i").".sql";
			}
		   if($this->fly){  			// sauvegarde a la volee  // on fly backup
		   		$this->entete($this->filename);
		   }else{
		   		@mkdir($this->sousdir,700);	// creation du repertoire s'il n'existe pas  // tmp directory creation
		   		$fp = @fopen($this->filename,"w");
				if (!$fp){$this->errr=$this->message("err_fichier"); return false;}
		   }

			$this->fp=$fp;
			$this->backup_suite($fichier);
			if(!$this->fly){fclose($fp);}
		}
		if($this->compress_ok && !$this->fly){$this->compress();}
	}
	//*********
	function backup_suite($fichier="") 		// construction du backup  // build backup	
	{		
			$this->backup_comment("debut");
			$sql = "SHOW TABLES FROM ".($this->base);
//			$result = mysql_query($sql);	
			$result = mysqli_query($this->link,$sql); //+ 12/01/2017		
			// Check $result //  ++ 21/09
				if (!$result) {
					{$this->errr=$this->message("err_mysql_table"); return false;}
				}					
//			while ($row = mysql_fetch_row($result)) 
			while ($row = mysqli_fetch_row($result)) //+ 12/01/2017 
			{ $tablename = $row[0] ;	

  
// si on veut  sauver les tables	 ..CREATE TABLE ...   Ajout - Modification 07/08/2008 par JCE
				if($this->struct_yes==1){
					$this->backup_comment("debut_table", $tablename);
					// debut du query on vire la table si elle existe deja // if the table exist we erase it
					$this->ecrire("DROP TABLE IF EXISTS `$tablename`;\n");
				  
					// creation des tables									// table creation
					$query = "SHOW CREATE TABLE $tablename";
//					$tbcreate = mysql_query($query);
					$tbcreate = mysqli_query($this->link, $query); //+ 12/01/2017
//					$row = mysql_fetch_array($tbcreate);
					$row = mysqli_fetch_array($tbcreate); //+ 12/01/2017
					$create = $row[1].";";
					$this->ecrire("$create\n\n");
				}
// si on veut ne pas sauver les tables	 ..CREATE TABLE ... - Modification 07/08/2008 par JCE

				// recuperation des data								// dump of the data
				if($this->data_yes==1){
					
					$query = "SELECT * FROM $tablename";
//					$datacreate = mysql_query($query);
					$datacreate = mysqli_query($this->link, $query); //+ 12/01/2017
//					if (mysql_num_rows($datacreate) > 0) 	// *** si la table n'est pas vide // table not empty
					if (mysqli_num_rows($datacreate) > 0) 	// *** si la table n'est pas vide // table not empty //+ 12/01/2017
					{
						$this->backup_comment("debut_dump", $tablename);
						// sauvegarde des donnees
						$qinsert = "TRUNCATE TABLE ".$tablename." ; \n";	//TRUNCATE TABLE  - Modification 07/08/2008 par JCE
						$qinsert .= "LOCK TABLES $tablename WRITE; \n";
						$qinsert .= "INSERT INTO `$tablename` values \n  ";
						
//						while($row12 = mysql_fetch_assoc($datacreate))
						while($row12 = mysqli_fetch_assoc($datacreate)) //+ 12/01/2017
						{   	
							   if($this->no_time_limit){set_time_limit(30);}  	
							   $row12 = array_map(array($this, 'separe'), $row12);	// mise en forme des data dans le tableau
							   														// put data in an array
							   $data = implode(",",$row12);							// tableau -> chaine unique
							   														// convert array in string				
							   $data = "$qinsert($data)";							// assemblage pour value() pour 1er enregistrement
							   														// make the SQL string														
							   $this->ecrire("$data\n");
							   $qinsert=", ";										// pour les enregistrements suivant une virgule suffit
							   														// for other records only ","
						}
						$this->ecrire(";\n");
						$this->ecrire("UNLOCK TABLES; \n");
						$this->ecrire("\n");
					}else{								// *** si la table est vide  // if table empty
						$this->backup_comment("empty", $tablename);
				  }
			  }
		  //$i++;  // supprimé -> modif !!!!  Function mysql_list_tables() is deprecated  27/10/2009
		  } 
	}
	//*******************************************
	function backup_comment($section, $tablename=""){
		if($this->format_out=="no_comment"){return;}
		
		// en tete du fichier dump  // top of the backup  *|* Modification ajout espace après -- X dans les commentaire cela provoque une erreur a l'import BD
		if($section=="debut"){
			$this->ecrire("-- PHPMySQLDump $this->version \n");
			$this->ecrire("--  phpdev@cawete.com   - http://jc.etiemble.free.fr \n");
			$tt=$this->spe();			// voir remarques à la fin  // see remark at the end  :)
			$this->ecrire("$tt \n");
			$this->ecrire("--\n");
			$this->ecrire("-- Host : $this->host     Database :  $this->base\n");
			$this->ecrire("--\n");
			$this->ecrire("-- Date : ".date("r")."    \n");
			$this->ecrire("-- ---------------------------------------------\n");
//			$server_info=mysql_get_server_info($this->link);
			$server_info=mysqli_get_server_info($this->link); //+ 12/01/2017
			$this->ecrire("-- Server version            $server_info \n");
			$this->ecrire("\n");
		}
		// commentaires de debut de table 		// top of thr table section
		
		if($section=="debut_table"){
			$this->ecrire("\n");
			$this->ecrire("\n");
			$this->ecrire("--\n");
			$this->ecrire("-- Table structure for table '$tablename' \n");
			$this->ecrire("--\n");
			$this->ecrire("\n");
		}
		
		// commentaires de debut de data		// top of the data section
		if($section=="debut_dump"){
			$this->ecrire("--\n");
			$this->ecrire("-- Dumping data for table '$tablename' \n");
			$this->ecrire("--\n");
			$this->ecrire("\n");
		}
		// commentaires pour tables vides   	// for empty table
		if($section=="empty"){
			$this->ecrire("--\n");
			$this->ecrire("-- table '$tablename' is empty \n");
			$this->ecrire("--\n");
			$this->ecrire("\n");
		}
	
	}
	
	//************************************
	// ******* fonction utilisee pour la separer les data // to convert incoming data to backup data
	function separe($tbl) // utilisee dans array_map dans backup pour formater la recup du query  // used in array_map
	{
		if(is_null($tbl)){return "NULL";} else if($tbl==""){return "''";};	// Correction OHV0.0 15/01/2013 pour empêcher la sauvegarde de "" en NULL
		//$tbl=mysql_escape_string($tbl); 	// prepare les data pour etre injectées dans mysql  // change string not compatible with MySQL
		$tbl=mysqli_real_escape_string($this->link, $tbl); //+ 12/01/2017
//		$tbl=mysql_real_escape_string($tbl); // mysql_escape_string remplacer par  mysql_real_escape_string function is deprecated PHP 5. 
		if(is_numeric($tbl)){ return $tbl;}	// si chiffre , c'est bon							// numeric
		if(!$tbl){return "NULL";}			// si c'est null on le dit							// NULL
		return "'".$tbl."'";				// pour le reste entre gillements simples			// others
	}
	//************************************************
			
	function compress()
	{	// compresse un fichier sans utiliser le shell				// compress file without shell
		// pour ne pas se preocuper de la plateforme sur laquelle tourne le script
		// juste verifier que la GZLIB de PHP est bien active		// if you have an erroz verify if your PHP hve the GZLIB
		if($this->filename and !$this->errr){
			$fp = @fopen($this->filename,"rb");
			$zp = @gzopen($this->filename.".gz", "wb9");
			if(!$zp or !$fp){$this->errr =$this->message("err_compress"); return false; }
			while(!feof($fp)){
				$data=fgets($fp, 8192);			// taille du buffer php  // 8192 buffer PHP
				gzwrite($zp,$data);
			}
			fclose($fp);
			gzclose($zp);
			unlink($this->filename);
			$this->filename=$this->filename.".gz";
		}
		
	}
	//***********************************
	function nettoyage() // pour suprimer les fichiers de sauvegardes du serveur  // destroy old backup files
	{ 	if(!$this->errr){
			if ($dir = @opendir($this->sousdir)) 
			{
				while($file = @readdir($dir)) 
				{
					@unlink($this->sousdir.$file);
				}
				@closedir($dir);
			}
		}
	}
	//*****************************************
	function spe()// juste pour vous faire consulter la doc de PHP  // just to read the PHP doc :)  + http://www.tools4noobs.com/online_php_functions/base64_encode/
	{
		return base64_decode("LS0gUGFzY2FsIENBU0VOT1ZFICAtIE1vZGlmaWNhdGlvbiBKZWFuLWNsYXVkZSBFdGllbWJsZQ==");
	}
	//****************************
	function message($numero){ // messages d'erreur  // errors messages
	
		$lang=$this->language;
		if(!$lang){$lang="fr";}
		
		$message['err_compress']['fr']='Erreur de compression de fichier';
		$message['err_compress']['en']='Error when compress file';
	
		$message['err_fichier']['fr']='Erreur d\'ouverture de fichier';
		$message['err_fichier']['en']='Error when open file';
	
		$message['err_base']['fr']='base mysqli inexistante'; //+i //+ 12/01/2017
		$message['err_base']['en']='mysqli database not exist'; //+i //+ 12/01/2017

		$message['err_mysql']['fr']='Erreur d\'ouverture de mysqli';//+i //+ 12/01/2017
		$message['err_mysql']['en']='mysqli server not found'; //+i //+ 12/01/2017
		
		$message['err_mysql_table']['fr']='Erreur mysqli SHOW TABLES'; // ++ 21/09 //+i //+ 12/01/2017
		$message['err_mysql_table']['en']='mysqli server error SHOW TABLES';	 // ++ 21/09 //+i //+ 12/01/2017
		
		return $message[$numero][$lang];
	}
}
?>
