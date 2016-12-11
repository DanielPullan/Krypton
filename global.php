<?php

define('C', '/core');
define('M', '/manage');


//Required Files

	//Config
	require_once C . M . '/config.php';
	
	//Class Files
	require_once C . '/template.class.php';
	require_once C . '/mysql.class.php';
	require_once C . '/users.class.php';
	
	//Template System Information
	$tplDes = $_CONFIG['site']['template'];
	$tplPg = $_GET['page'];
	define ('TEMPLATE_PATH', 'template/'.$tplDes);
	define ('TEMPLATE_PAGE', '/'.$tplPg.'.php');

	//Begin Activating the Engine
	use Krypton as Kry;
	
	$template = new Kry\Template(TEMPLATE_PATH.TEMPLATE_PAGE);
	
	$user = new Kry\User();
	
	$mysql = new Kry\MySQL();
		
	//Other Activating
	session_start();
	
	$mysql->Connect();
	
	$user->Login();

?>