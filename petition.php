<?php
include 'config.php';
?>
<!DOCTYPE html>
<html>
<head>
	<title><?php echo $title[$lang] ?></title>
	<meta charset="utf-8">
	<link rel="stylesheet" href="<?php echo $style ?>" type="text/css" media="all" />
	<script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.7/jquery.min.js"></script>
	<script	type="text/javascript" src="js/action.js"></script>
	<script type="text/javascript">
	
	jQuery(function() {
	
	//imagefond	
		var FullscreenrOptions = { width: <?php echo $img_width ?>, height: <?php echo $img_height ?>, bgID: '#bgimg' }; 
		jQuery.fn.fullscreenr(FullscreenrOptions);
	
	});
	
		 var _gaq = _gaq || [];
		 _gaq.push(['_setAccount', 'UA-2498778-1']);
		 _gaq.push(['_setDomainName', 'rsf.org']);
		 _gaq.push(['_trackPageview']);

		 (function() {
		   var ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async = true;
		   ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
		   var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ga, s);
		 })();
		
		var goal = "<?php echo $goal ?>";
		

	</script>   
</head>

<body id="lang-<?php echo $lang ?>">
	
<?php 
	if (isset($images[$lang])){
		echo "<img id='bgimg' src='$images[$lang]' />";
	}else{
		echo "<img id='bgimg' src='".$image."' />";
	}
?>

<div id="bar">

			<div id="lang">
				<!--<a id="btn-en" href="petition.php?lang=en">English</a> | --><!--<a id="btn-fr" href="petition.php?lang=fr">Français</a>--><!-- | <a id="btn-ch" href="petition.php?lang=ch">中文</a>--></div>

</div>

<div id="trame">

	<div id="wrap">
		
		<div id="fields">

			<h1><a id="logo" href="http://<?php echo $lang?>.rsf.org/"><img id="logo" src="i/logo_<?php echo $lang ?>.png" alt="<?php echo $rsf[$lang]?> "  /></a>
			</h1>
			



			<div id="content">

				<?php

					include 'inc-text_'.$lang.'.php';

				?>		                             



			</div><!-- content -->
			<div id="signin">
				<h3>
					<?php echo $titre2 ?>
				</h3>
	<p>				<?php echo $deja; ?></p>


				<div id="jauge"><div></div></div>
			
				</br>

				<?php

							include 'inc-form.php';

				?>

			</div><!-- signin -->
		</div><!-- fields -->
	</div><!-- wrap -->
</div><!-- trame -->
<script	type="text/javascript" src="js/dolist.js"></script>
<script	type="text/javascript" src="js/jquery.fullscreenr.js"></script>

</body>
</html>

