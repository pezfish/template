<?php
	//require_once("inc/global.inc.php");
	require_once("includes/global.inc.php");
	
	// page vars
	$page_meta = array(
		"title" => "",
		"keywords" => "",
		"description" => ""
	);
	$page_section = "";
	
	include("includes/header.php");
?>
<!doctype html>
<!--[if lt IE 7]> <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]> <html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]> <html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js"> <!--<![endif]-->
<head>
<meta charset="utf-8" />
<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
<title><?= !empty($page_meta["title"]) ? $page_meta["title"] : "" ?></title>
<meta name="keywords" content="<?= !empty($page_meta["keywords"]) ? $page_meta["keywords"] : "" ?>">
<meta name="description" content="<?= !empty($page_meta["description"]) ? $page_meta["description"] : "" ?>">

<meta name="viewport" content="width=device-width" />

<? /*
	<meta property="og:title" content="" />
	<meta property="og:description" content="" />
	<meta property="og:image" content="" />
*/ ?>

<link rel="shortcut icon" href="/favicon.ico" />
<link href="style.css" rel="stylesheet" type="text/css" />
<!-- MODERNIZR -->
<? // html5shiv included by default and is required. Create custom build if additional features are needed. http://modernizr.com/ ?>
<script type="text/javascript" src="js/modernizr.min.js"></script>

<? /*
<!-- SWFOBJECT -->
<script type="text/javascript" src="js/swfobject.js"></script>
*/ ?>
</head>

<body>
<? /*
<!-- GOOGLE ANALYTICS -->
<script>
	(function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
	(i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
	m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
	})(window,document,'script','//www.google-analytics.com/analytics.js','ga');
	
	ga('create', 'UA-XXXX-Y', 'example.com');
	ga('send', 'pageview');
</script>
*/ ?>
	<p>Hi! I&rsquo;m a website.</p>

<? /*
<!-- GOOGLE MAPS -->
<? if($page_section == 'contact') { ?>
	<script type="text/javascript" src="http://maps.google.com/maps/api/js?sensor=false"></script>
<? } ?>
*/ ?>
<? /*
<!-- JQUERY -->
<script type="text/javascript" src="//ajax.googleapis.com/ajax/libs/jquery/1.10.1/jquery.min.js"></script>
<script>window.jQuery || document.write('<script src="js/jquery.min.js"><\/script>')</script>
*/ ?>
<? /*
<!-- SITE SCRIPTS -->
<script type="text/javascript" src="js/scripts.js"></script>
*/ ?>
</body>
</html>
<?php include("includes/footer.php"); ?>
