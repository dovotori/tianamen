<?php
if (!isset($langue_user) && !isset($_SESSION["lang"])){
	
	$langue_user=substr($_SERVER["HTTP_ACCEPT_LANGUAGE"], 0, 2);
	switch($langue_user){	

	case"fr":
	$_SESSION["lang"] = "fr";
	header ("Location: petition.php?lang=fr");	
	break;
	/*
	case "en":
	$_SESSION["lang"] = "en";
	header ("Location: petition.php?lang=fr");
	break;

	case "ch":
	$_SESSION["lang"] = "ch";
	header ("Location: petition.php?lang=ch");
	break;
  	*/
	default:
	$_SESSION["lang"] = "fr";
	header ("Location: petition.php?lang=fr");
	break;
	}
}

?>