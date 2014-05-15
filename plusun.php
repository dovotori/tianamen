<?php 
session_start();

if(file_exists('.compteur.txt'))
{
        $compteur_f = fopen('.compteur.txt', 'r+');
        $compte = fgets($compteur_f);
}
else
{
        $compteur_f = fopen('.compteur.txt', 'a+');
        $compte = 0;
}
if(!isset($_SESSION['compteur_de_visite']))
{
        $_SESSION['compteur_de_visite'] = 'visite';
        $compte++;
        fseek($compteur_f, 0);
        fputs($compteur_f, $compte);
	        
}

fclose($compteur_f);


if(file_exists('/home/rsf/signataires_petitions/tiananmen.csv'))
{
	$contact = $_POST["nom"].' ; '.$_POST["prenom"].' ; '.$_POST["email"].' ; '.$_POST["langue"].' ; '.$_POST["optin"].' ; '.date('c')."\r";
    
	if(strlen ( $contact ) <= 300 ){
		$liste_f = fopen('/home/rsf/signataires_petitions/tiananmen.csv', 'a+');
		fseek($liste_f, SEEK_END);
	    fputs($liste_f, $contact);		
	}

}

fclose($liste_f);

?>


