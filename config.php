<?php
/*  CONFIG
----________------------------------------------ */
	
	
	// nom de la pétition : pas d'accents ni d'espaces
	$name  = "tiananmen"; 
	
	
	$title["fr"] = "#pétition : Vingt cinq ans après ans Tian'anmen, demandez à Xi Jinpin d'appliquer la constitution chinoise !";
	$title["en"] = "#petition";

	$rsf["fr"] = "Reporters sans frontières";
	$rsf["en"] = "Reporters Without Borders";
	
	$goal = 10000;				//objectif de signatures à atteindre
	
	$google_conversion_id = 1023813646;
	
	$baseurl ="http://rsf.org/petitions/tiananmen/";

//	$image = 'i/petitionvietnam2.jpg';		//image de fond
	$image = 'i/chine-1.jpg';		//image de fond
	$img_width = 800;
	$img_height = 538;
	// $images["fr"] = 'i/bash.jpg';
	// $images["en"] = 'i/bash2.jpg';


	$style = 'style.css';		//feuille de style

	$countContent = file('.compteur.txt') ; //variable nombre d'inscrits    
	$signataire = $countContent[0];

	//si un paramètre lang est définit en ?get on le prend sinon on met "en"
	if( isset($_GET['lang'])) {
		
		$lang  =  $_GET['lang'];
		
	}else{
		
		$lang  =  'en';
		
	}
  
	
	
	


/*  END CONFIG________------------------------------------ */
?>