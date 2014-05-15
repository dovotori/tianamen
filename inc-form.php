<?php
	$currentUrl = $_SERVER['PHP_SELF'];
	
	
	$abtest = mt_rand(0,1);
	
	if($_GET['email']){
		$email = $_GET['email'];
	}
	if($_GET['nom']){
		$nom = $_GET['nom'];
	}
	if($_GET['prenom']){
		$prenom = $_GET['prenom'];
	}
	
    switch($lang){
	
	case "fr":
	$langcode ="fr_FR";
	if($abtest == 1){
		$merci = "merci.php";
	}else{
		$merci = "merci2.php";
	}
	break;
	
	case "en":
	$langcode ="en_EN";
	$merci = "thanks.php";
	break;
	
	case "ch":
	$langcode ="ch";
	$merci = "thanks_ch.php";
	break;

	
	
}
         
	
?>	



<form id='petition' NAME='petition' METHOD='post' action='http://form.dolist.net/sw/default.aspx' accept-charset='UTF-8' >
	

	<input type="hidden" name='do_ListId' value='100F'/>
	<input type="hidden" name="do_IdSubscribe" value="8"/>
	<input id="do_redirect" type="hidden" name='do_redirect' value="<?php echo $baseurl.$merci; ?>"/>
	
		<!-- origine adfinitas -->
	<input type="hidden" id="Customstr30" class="origin" Name="do_field_52_64" value="nonlead-<?php echo $lang; ?>-petition-<?php echo $name; ?>"/>

	<!-- langue -->
	<input type="hidden" name="do_field_30_63" maxlength="256" value="<?php echo $langcode; ?>">
	
	<!-- V�rification champs-->

	<input class="need" type="Text" id="lastname" name="do_field_53_2" maxlength="64" value="<?php echo $nom; ?>"/>
	<input class="need" type="Text" id="firstname" name="do_field_54_1" maxlength="64" value="<?php echo $prenom; ?>"/>
	<input class="need" type="Text" id="email" Name="do_field_51_7" value="<?php echo $email; ?>"/>
	

	</br></br>
	<p class="step1">
	<a class="submit" href="#" ><?php echo $jesigne ?></a>
    </p>
	<div class="optin step2">
		<?php echo $optin ?><br/>
		<a class="optin-non" href="#"><?php echo $non ?></a></a> 	<a class="optin-oui" href="#"><?php echo $oui ?></a></a>
	</div>
       
</form>