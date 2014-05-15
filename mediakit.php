<?php
include 'config.php';
?>
<!DOCTYPE html>
<html>
<head>
	<title><?php echo $title[$lang] ?> | mediakit</title>
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

<body id="lang-<?php echo $lang ?>" class="mediakit">
<img id='bgimg' src='i/bg_mediakit.jpg' />	


<div id="bar">

			<div id="lang">
				<a id="btn-en" href="mediakit.php?lang=en">English</a> | <a id="btn-fr" href="mediakit.php?lang=fr">Français</a> | <a id="btn-vi" href="mediakit.php?lang=vi">Tiếng Việt</a> | <a id="btn-ch" href="mediakit.php?lang=ch">中文</a></div>

</div>



<div id="trame">

		
		<div id="fields">

			<h1><a id="logo" href="<?php echo $baseurl ?>"><img id="logo" src="i/logo_mediakit.png" alt="<?php echo $rsf[$lang]?> "  /></a>
			</h1>
			




				<a class="baniere" href="<?php echo $baseurl ?>/petition.php?lang=en">
					<img src="<?php echo $baseurl ?>i/mediakit/petition-en.jpg"/>
				</a>
				<textarea class="code"><a href="<?php echo $baseurl ?>petition.php?lang=en&mediakit=en"><img src="<?php echo $baseurl ?>i/mediakit/petition-en.jpg"/></a></textarea>
				
				<a class="baniere" href="<?php echo $baseurl ?>/petition.php?lang=fr">
					<img src="<?php echo $baseurl ?>i/mediakit/petition-fr.jpg"/>
				</a>
				<textarea class="code"><a href="<?php echo $baseurl ?>petition.php?lang=fr&mediakit=en"> <img src="<?php echo $baseurl ?>i/mediakit/petition-fr.jpg"/></a></textarea>
				
				<a class="baniere" href="<?php echo $baseurl ?>/petition.php?lang=vi">
					<img src="<?php echo $baseurl ?>i/mediakit/petition-vi.jpg"/>
				</a>
				<textarea class="code"><a href="<?php echo $baseurl ?>petition.php?lang=vi&mediakit=en"> <img src="<?php echo $baseurl ?>i/mediakit/petition-vi.jpg"/></a></textarea>
				
				<a class="baniere" href="<?php echo $baseurl ?>/petition.php?lang=ch">
					<img src="<?php echo $baseurl ?>i/mediakit/petition-ch.jpg"/>
				</a>
				<textarea class="code"><a href="<?php echo $baseurl ?>petition.php?lang=ch&mediakit=en"><img src="<?php echo $baseurl ?>i/mediakit/petition-ch.jpg"/></a></textarea>
				
				

                                         

		</div><!-- fields -->
</div><!-- trame -->

<script	type="text/javascript" src="js/jquery.fullscreenr.js"></script>  

</body>
</html>

