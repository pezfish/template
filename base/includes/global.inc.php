<?php
	// empty function to avoid errors
	function htmlout($str, $blah = false) {return $str;}
	function getvar($thevar = "", $required = false) {return "";}
	
	// some settings
	if (function_exists("date_default_timezone_set")) date_default_timezone_set("America/New_York");
	
	// some vars
	$now = time();
	
	// Sample Content
	
	// announcements
	$announcements = array();
	for ($i = 0; $i < 10; $i++) {
		$announcements[$i] = array(
			"curid" => $i,
			"curtitle" => "Lorem ipsum dolor sit amet",
			"curdatestamp" => $now,
			"curdescription" => "Lorem ipsum dolor sit amet, consectetur adipiscing elit. Etiam lobortis placerat porta. Fusce porta mauris vitae libero vehicula pellentesque elementum erat ultricies.",
			"curimage" => true,
			"curlink" => "",
			"curlinktitle" => "",
			"curlinktarget" => "",
			"curpdf" => "",
			"curpdftitle" => "",
		);
	}
	
	// press
	$defaultlinktitle = "";
	$defaultpdftitle = "";
	$articles = array(
		array(
			"curid" => 1,
			"curtitle" => "Lorem ipsum dolor sit amet",
			"curdatestamp" => $now,
			"curintro" => "Lorem ipsum dolor sit amet, consectetur adipiscing elit. Etiam lobortis placerat porta. Fusce porta mauris vitae libero vehicula pellentesque elementum erat ultricies.",
			"curfullarticle" => "",
			"curimage" => true,
			"curlink" => "http://www.google.com/",
			"curlinktitle" => "Search for Stuff",
			"curlinktarget" => "_blank",
			"curpdf" => "",
			"curpdftitle" => "",
		),
		array(
			"curid" => 2,
			"curtitle" => "Lorem ipsum dolor sit amet",
			"curdatestamp" => $now,
			"curintro" => "Lorem ipsum dolor sit amet, consectetur adipiscing elit. Etiam lobortis placerat porta. Fusce porta mauris vitae libero vehicula pellentesque elementum erat ultricies.",
			"curfullarticle" => "",
			"curimage" => true,
			"curlink" => "",
			"curlinktitle" => "",
			"curlinktarget" => "",
			"curpdf" => "",
			"curpdftitle" => "",
		),
		array(
			"curid" => 3,
			"curtitle" => "Lorem ipsum dolor sit amet",
			"curdatestamp" => $now,
			"curintro" => "Lorem ipsum dolor sit amet, consectetur adipiscing elit. Etiam lobortis placerat porta. Fusce porta mauris vitae libero vehicula pellentesque elementum erat ultricies.",
			"curfullarticle" => "Lorem ipsum dolor sit amet, consectetur adipiscing elit. Etiam lobortis placerat porta. Fusce porta mauris vitae libero vehicula pellentesque elementum erat ultricies.",
			"curimage" => true,
			"curlink" => "",
			"curlinktitle" => "",
			"curlinktarget" => "",
			"curpdf" => "",
			"curpdftitle" => "",
		),
	);
	
	// photos
	$albums = array(
		array(
			
		),
	);
	
	$photos = array(
		
	);
?>