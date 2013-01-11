<?php
	//require_once("inc/global.inc.php");
	require_once("includes/global.inc.php");
	
	// page vars
	$page_title = "";
	$page_subtitle = "";
	$page_section = "";
	
	include("includes/header.php");
?>
<!doctype html>
<!--[if lt IE 7 ]> <html lang="en" class="no-js ie6"> <![endif]-->
<!--[if IE 7 ]> <html lang="en" class="no-js ie7"> <![endif]-->
<!--[if IE 8 ]> <html lang="en" class="no-js ie8"> <![endif]-->
<!--[if IE 9 ]> <html lang="en" class="no-js ie9"> <![endif]-->
<!--[if (gt IE 9)|!(IE)]><!--> <html class="no-js" lang="en"> <!--<![endif]-->
<head>
<meta charset="utf-8" />
<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
<title><?= (!empty($page_subtitle)) ? ($page_title." - ".$page_subtitle." - ") : ($page_title." - "); ?>SITE NAME</title>

<meta name="description" content="" />
<meta name="author" content="http://www.aycmedia.com" />
<meta name="viewport" content="width=device-width" />
<? /*
<meta property="og:title" content="" />
<meta property="og:description" content="" />
<meta property="og:image" content="" />
*/ ?>

<? /* <link rel="shortcut icon" href="/favicon.ico" /> */ ?>
<link href="style.css" rel="stylesheet" type="text/css" />
<!-- ::::::::::::::::::::::::::: MODERNIZR ::::::::::::::::::::::::::: -->
<? // html5shiv included by default and is required. Create custom build if additional features are needed. http://modernizr.com/ ?>
<script type="text/javascript" src="js/modernizr.min.js"></script>

<? /*
<!-- ::::::::::::::::::::::::::: SWFOBJECT ::::::::::::::::::::::::::: -->
<script type="text/javascript" src="js/swfobject.js"></script>
*/ ?>
</head>

<body>
	<p>Hi! I&rsquo;m a website.</p>

<? /*
<!-- ::::::::::::::::::::::::::: GOOGLE MAPS ::::::::::::::::::::::::::: -->
<? if($page_section == 'contact') { ?>
	<script type="text/javascript" src="http://maps.google.com/maps/api/js?sensor=false"></script>
<? } ?>
*/ ?>
<? /*
<!-- ::::::::::::::::::::::::::: JQUERY ::::::::::::::::::::::::::: -->
<script type="text/javascript" src="//ajax.googleapis.com/ajax/libs/jquery/1.8.3/jquery.min.js"></script>
<script>window.jQuery || document.write('<script src="js/jquery.min.js"><\/script>')</script>
*/ ?>
<? /*
<!-- ::::::::::::::::::::::::::: SITE SCRIPTS ::::::::::::::::::::::::::: -->
<script type="text/javascript" src="js/scripts.js"></script>
*/ ?>
<? /*
<!-- ::::::::::::::::::::::::::: GOOGLE ANALYTICS ::::::::::::::::::::::::::: -->
<script>
    var _gaq=[['_setAccount','UA-XXXXX-X'],['_trackPageview'],['_trackPageLoadTime']];
    (function(d,t){var g=d.createElement(t),s=d.getElementsByTagName(t)[0];g.async=1;
    g.src=('https:'==location.protocol?'//ssl':'//www')+'.google-analytics.com/ga.js';
    s.parentNode.insertBefore(g,s)}(document,'script'));
</script>
*/ ?>
</body>
</html>
<?php include("includes/footer.php"); ?>
