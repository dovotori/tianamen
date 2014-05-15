<?php
include 'config.php';

$lang ="en";


$currentUrl = $_SERVER['PHP_SELF'];  

$shareUrl = $baseurl.str_replace ( "thanks.php", "" , $currentUrl );
$shareMessage = $title[$lang]." ".$shareUrl;

//encode for facebook and twitter
$share = rawurlencode($share);            
$shareMessage = rawurlencode($shareMessage);                          

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

<body id="lang-<?php echo $lang ?>" class="thanks">
	
<?php 
	if (isset($images[$lang])){
		echo "<img id='bgimg' src='$images[$lang]' />";
	}else{
		echo "<img id='bgimg' src='".$image."' />";
	}
?>

<div id="bar">
</div>
<div id="trame">

	<div id="wrap">
		
		<div id="fields">

			<h1><a id="logo" href="http://rsf.org"><img id="logo" src="i/logo_<?php echo $lang ?>.png" alt="<?php echo $rsf[$lang]?> "  /></a>
			</h1>


			<div id="content">
				<h2>Thank you !</h2>
				<h3><?php echo $signataire ?> persons have already signed the petition !</h3>

				<a target="_blank" style="cursor:pointer;margin:1px;display:inline-block;" href="http://www.facebook.com/share.php?u=<?php echo $shareUrl ?>"><div style="width:32px;height:32px;background:url('http://services.supportduweb.com/bookmarker/styles/images/style8.png');background-position:-64px 0px;display:inline-block;padding:0px;margin:0px;" onmouseover="this.style.backgroundPosition='-64px -32px';" onmouseout="this.style.backgroundPosition='-64px 0px';" alt="Facebook"></div></a>


				<a target="_blank" style="cursor:pointer;margin:1px;display:inline-block;" href="http://twitter.com/home?status=<?php echo $shareMessage ?>">
					<div style="width:32px;height:32px;background:url('http://services.supportduweb.com/bookmarker/styles/images/style8.png');background-position:-96px 0px;display:inline-block;padding:0px;margin:0px;" onmouseover="this.style.backgroundPosition='-96px -32px';" onmouseout="this.style.backgroundPosition='-96px 0px';" alt="Twitter"></div></a>
					
					
				<p>Do you want to keep on supporting press freedom ?</p>

				<p>Reporters Without Borders takes action thanks to your donation. Help us !</p>
				<br>
				<a id="btndon" href="http://donate.rsf.org?lang=en_EN">Donate</a>
				<br>

					
					


			</div><!-- content -->
			<div id="signin">
			</div><!-- signin -->
		</div><!-- fields -->
	</div><!-- wrap -->
</div><!-- trame -->

<!-- Google Code for Pétition Bahrein Conversion Page -->
<script type="text/javascript">
/* <![CDATA[ */
var google_conversion_id = <?php echo $google_conversion_id ?>;
var google_conversion_language = "<?php echo $lang ?>";
var google_conversion_format = "2";
var google_conversion_color = "ffffff";
var google_conversion_label = "-HX1CMKExgMQjtCY6AM";
var google_conversion_value = 0;
/* ]]> */
</script>
<script type="text/javascript" src="http://www.googleadservices.com/pagead/conversion.js">
</script>
<noscript>
<div style="display:inline;">
<img height="1" width="1" style="border-style:none;" alt="" src="http://www.googleadservices.com/pagead/conversion/1023813646/?label=-HX1CMKExgMQjtCY6AM&amp;guid=ON&amp;script=0"/>
</div>
</noscript>


<script	type="text/javascript" src="js/jquery.fullscreenr.js"></script>

</body>
</html>          